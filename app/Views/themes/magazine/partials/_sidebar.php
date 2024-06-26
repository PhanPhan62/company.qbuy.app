<div class="col-sidebar sticky-lg-top trendy">
    <div class="row">
        <div class="col-12">
            <?php $i = 0;
            if (!empty($baseWidgets)):
                foreach ($baseWidgets as $widget):
                    if ($i == 1) {
                        echo loadView('partials/_ad_spaces', ['adSpace' => 'sidebar_1', 'class' => 'mb-5']);
                    }
                    echo loadView('partials/_load_widget', ['widget' => $widget]);
                    $i++;
                endforeach;
            endif;
            echo loadView('partials/_ad_spaces', ['adSpace' => 'sidebar_2', 'class' => 'mb-4']); ?>
        </div>
    </div>
    
</div>

<style>
    @media (min-width: 992px) {
        .trendy {
            position: -webkit-sticky; 
            position: sticky;
            top: 70px !important;
            z-index: 1020;
        }
    }
</style>