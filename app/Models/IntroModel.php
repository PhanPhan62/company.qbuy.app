<?php namespace App\Models;

use CodeIgniter\Model;

class IntroModel extends BaseModel
{
    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table('intro');
    }

    //input values
    public function inputValues()
    {
        $data = [
            'title' => inputPost('title'),
            'title_content' => inputPost('title_content'),
            'description' => inputPost('description'),
            'img' => inputPost('img'),
            'content' => inputPost('statu'),
            'statu' => inputPost('keywords'),
        ];
        return $data;
    }

    //add Intro
    public function addIntro($type)
    {
        $data = $this->inputValues();
        if (empty($data["name_slug"])) {
            $data["name_slug"] = strSlug($data["name"]);
        } else {
            $data["name_slug"] = removeSpecialCharacters($data["name_slug"], true);
            if (!empty($data['name_slug'])) {
                $data['name_slug'] = str_replace(' ', '-', $data['name_slug']);
            }
        }
        if (!empty($data['parent_id'])) {
            $parent = $this->getIntro($data['parent_id']);
            if (!empty($parent)) {
                $data['color'] = $parent->color;
            }
            $data['block_type'] = '';
            $data['show_at_homepage'] = 0;
        } else {
            $data['parent_id'] = 0;
        }
        if ($this->builder->insert($data)) {
            $lastId = $this->db->insertID();
            $this->updateSlug($lastId);
            return true;
        }
        return false;
    }

    //edit Intro
    public function editIntro($id)
    {
        $Intro = $this->getIntro($id);
        if (!empty($Intro)) {
            $data = $this->inputValues();
            if (empty($data["name_slug"])) {
                $data["name_slug"] = strSlug($data["name"]);
            } else {
                $data["name_slug"] = removeSpecialCharacters($data["name_slug"], true);
                if (!empty($data['name_slug'])) {
                    $data['name_slug'] = str_replace(' ', '-', $data['name_slug']);
                }
            }
            if (!empty($data['parent_id'])) {
                $parent = $this->getIntro($data['parent_id']);
                if (!empty($parent)) {
                    $data['color'] = $parent->color;
                }
                $data['block_type'] = '';
                $data['show_at_homepage'] = 0;
            } else {
                $data['parent_id'] = 0;
                $this->updateSubCategoriesColor($id, $data['color']);
                //update subintro lang_id
                $this->builder->where('parent_id', $Intro->id)->update(['lang_id' => $data['lang_id']]);
            }
            $this->builder->where('id', $Intro->id)->update($data);
            $this->updateSlug($Intro->id);
            return true;
        }
        return false;
    }

    //update slug
    public function updateSlug($id)
    {
        $Intro = $this->getIntro($id);
        if (!empty($Intro)) {
            if (empty($Intro->name_slug) || $Intro->name_slug == "-") {
                $data = [
                    'name_slug' => $Intro->id
                ];
                $this->builder->where('id', $Intro->id)->update($data);
            } else {
                if ($this->checkSlugExists($Intro->name_slug, $Intro->id)) {
                    $data = [
                        'name_slug' => $Intro->name_slug . "-" . $Intro->id
                    ];
                    $this->builder->where('id', $Intro->id)->update($data);
                }
            }
        }
    }

    //check slug
    public function checkSlugExists($slug, $id)
    {
        if (!empty($this->builder->where('name_slug', cleanStr($slug))->where('id !=', cleanNumber($id))->get()->getRow())) {
            return true;
        }
        return false;
    }

    //update subIntro color
    public function updateSubCategoriesColor($parentId, $color)
    {
        $intro = $this->getSubCategoriesByParentId($parentId);
        if (!empty($intro)) {
            foreach ($intro as $item) {
                $this->builder->where('id', $item->id)->update(['color' => $color]);
            }
        }
    }

    //build query
    public function buildQuery()
    {
        $this->builder->select('intro.*,
        (SELECT tbl_intro.id,
            tbl_intro.title,
            tbl_intro.title_content,
            tbl_intro.description,
            tbl_intro.img,
            tbl_intro.content,
            tbl_intro.status 
        FROM intro as tbl_intro;');
    }

    //get Intro
    public function getIntro()
    {
        return $this->builder->get()->getResultArray();
    }
    

    //get Intro by slug
    public function getIntroBySlug($slug)
    {
        $this->buildQuery();
        return $this->builder->where('intro.name_slug', cleanSlug($slug))->where('intro.lang_id', cleanNumber($this->activeLang->id))->orderBy('Intro_order')->get()->getRow();
    }

    //get intro
    public function getCategories()
    {
        $this->buildQuery();
        return $this->builder->orderBy('Intro_order')->get()->getResult();
    }

    //get intro by lang
    public function getCategoriesByLang($langId)
    {
        $this->buildQuery();
        return $this->builder->where('intro.lang_id', cleanNumber($langId))->orderBy('Intro_order')->get()->getResult();
    }

    //get parent intro
    public function getParentCategories()
    {
        return $this->builder->where('parent_id', 0)->orderBy('created_at DESC')->get()->getResult();
    }

    //get parent intro by lang
    public function getParentCategoriesByLang($langId)
    {
        return $this->builder->where('parent_id', 0)->where('lang_id', cleanNumber($langId))->orderBy('name')->get()->getResult();
    }

    //get subintro
    public function getSubCategories()
    {
        return $this->builder->where('parent_id !=', 0)->get()->getResult();
    }

    //get subintro by parent id
    public function getSubCategoriesByParentId($parentId)
    {
        return $this->builder->where('parent_id', cleanNumber($parentId))->orderBy('name')->get()->getResult();
    }

    //get intro count
    public function getCategoriesCount()
    {
        $this->filterCategories();
        return $this->builder->countAllResults();
    }

    //get paginated intro
    public function getCategoriesPaginated($perPage, $offset)
    {
        $this->filterCategories();
        return $this->builder->orderBy('id DESC')->limit($perPage, $offset)->get()->getResult();
    }

    //filter intro
    public function filterCategories()
    {
        $q = inputGet('q');
        $langId = cleanNumber(inputGet('lang_id'));
        $parentId = cleanNumber(inputGet('Intro'));
        if (!empty($q)) {
            $this->builder->like('name', cleanStr($q));
        }
        if (!empty($langId)) {
            $this->builder->where('lang_id', cleanNumber($langId));
        }
        if (!empty($parentId)) {
            $this->builder->where('parent_id', cleanNumber($parentId));
        }
    }

    //delete Intro
    public function deleteIntro($id)
    {
        $Intro = $this->getIntro($id);
        if (!empty($Intro)) {
            return $this->builder->where('id', $Intro->id)->delete();
        }
        return false;
    }
}