<section class="section section-featured">
    <div class="container-xl">
        <div class="row">
            <!-- <div class="col-md-12 col-lg-6 col-featured-left"> -->
            <!-- <div class="col-md-12 col-lg-9 col-featured-left"> -->
            <div class="col-12 col-featured-left3">
                <div class="main-slider-container">
                    <div class="main-slider" id="main-slider">
                        <?php $count = 0;
                        foreach ($sliderPosts as $item):
                            if ($count < 20):?>
                        <div class="main-slider-item">
                            <a href="<?= generatePostURL($item); ?>" class="img-link" <?php postURLNewTab($item); ?>
                                aria-label="post">
                                <img src="<?= IMG_PATH_BG_MD; ?>" data-lazy="<?= getPostImage($item, 'slider'); ?>"
                                    alt="<?= esc($item->title); ?>" class="img-cover" width="600" height="460" />
                                <?php getMediaIcon($item, 'media-icon-lg'); ?>
                            </a>
                            <div class="caption">
                                <a href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                    <span class="badge badge-category"
                                        style="background-color: <?= esc($item->category_color); ?>"><?= esc($item->category_name); ?></span>
                                </a>
                                <?php if ($count < 2): ?>
                                <h2 class="title"><?= esc(characterLimiter($item->title, 120, '...')); ?></h2>
                                <?php else: ?>
                                <h3 class="title"><?= esc(characterLimiter($item->title, 120, '...')); ?></h3>
                                <?php endif; ?>
                                <p class="post-meta">
                                    <?= loadView('post/_post_meta', ['postItem' => $item]); ?>
                                </p>
                            </div>
                        </div>
                        <?php endif;
                            $count++;
                        endforeach; ?>
                    </div>
                    <div id="main-slider-nav" class="main-slider-nav">
                        <button class="prev" aria-label="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 404.258 404.258">
                                <polygon
                                    points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 " />
                            </svg>
                        </button>
                        <button class="next" aria-label="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 404.258 404.258">
                                <polygon
                                    points="138.331,0 114.331,18 252.427,202.129 114.331,386.258 138.331,404.258 289.927,202.129 " />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div hidden class="col-3 col-featured-right">
                <div class="row">
                    <?php $i = 0;
                    if (!empty($featuredPosts)):
                        foreach ($featuredPosts as $item):
                            if ($i < 2):?>
                    <div class="col-12 <?= $i == 0 ? ' col-first' : ''; ?>">
                        <div class="item">
                            <a href="<?= generatePostURL($item); ?>" class="img-link" <?php postURLNewTab($item); ?>
                                aria-label="post">
                                <!-- add 2024 -->
                                <!-- <div class="img-item lazyload" data-bg="<?= getPostImage($item, 'slider'); ?>"></div> -->

                                <img loadding="lazy" class="img-item lazyload"
                                    src="<?= getPostImage($item, 'slider'); ?>" alt="">
                                <?php getMediaIcon($item, 'media-icon'); ?>
                            </a>
                            <div class="caption">
                                <a href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                    <span class="badge badge-category"
                                        style="background-color: <?= esc($item->category_color); ?>"><?= esc($item->category_name); ?></span>
                                </a>
                                <h3 class="title">
                                    <a href="<?= generatePostURL($item); ?>" class="img-link"
                                        <?php postURLNewTab($item); ?>>
                                        <?= esc(characterLimiter($item->title, 54, '...')); ?>
                                    </a>
                                </h3>
                                <p class="post-meta">
                                    <?= loadView("post/_post_meta", ['postItem' => $item]); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif;
                            $i++;
                        endforeach;
                    endif; ?>
                </div>
            </div>
            <div hidden class="col-md-12 col-lg-3 top-headlines">
                <div class="row">
                    <div class="col-12">
                        <h3 class="top-headlines-title"><?= trans("top_headlines"); ?></h3>
                    </div>
                    <div class="col-12">
                        <div class="items">
                            <?php $i = 0;
                            if (!empty($featuredPosts)):
                                foreach ($featuredPosts as $item):
                                    if ($i > 1 && $i <= 9): ?>
                                        <div class="item <?= $i == 2 ? ' item-first' : ''; ?>">
                                            <h3 class="title">
                                                <a href="<?= generatePostURL($item); ?>" <?php postURLNewTab($item); ?>>
                                                    <?= esc(characterLimiter($item->title, 80, '...')); ?>
                                                </a>
                                            </h3>
                                            <a href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                                <span class="category"><?= esc($item->category_name); ?></span>
                                            </a>
                                            <?php if ($generalSettings->show_post_date == 1): ?>
                                                <span class="date"><?= formatDateFront($item->created_at); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif;
                                    $i++;
                                endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<div class="container-xl section-content relative">
    <!-- <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div> -->
    <div class="row" id="row-1684178115">
        <div class="col small-12 large-12">
            <div class="col-inner text-center">
                <h1>DỊCH VỤ - TƯ VẤN</h1>
                <p>
                    <span style="color: #777">Chúng tôi tự hào là một trong những doanh nghiệp trong lĩnh vực nhà đất hàng đầu Việt Nam </span>
                </p>
                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_263776288">
                    <div class="img-inner dark">
                        <img  
                            src="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png"
                            class="attachment-original size-original col-12" alt=""
                            srcset="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png 1139w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-300x6.png 300w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-768x16.png 768w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-1024x22.png 1024w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-600x13.png 600w"
                        >
                    </div>

                    <style scope="scope">
                        #image_263776288 {
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-small align-equal align-center" id="row-1536974310">
        <div class="col col-12 col-md-3 medium-3 small-6 large-3 service">
            <div class="col-inner text-center dark"
                style="background-color:rgb(0, 128, 0);padding:50px 0px 50px 0px">
                <a class="plain" href="https://company.qbuy.app/dich-vu-tu-van-1/djia-chinh"
                    target="_self">
                    <div class="icon-box featured-box icon-box-center text-center" style="margin:0px 0px 0px 0px;">
                        
                        <div class="icon-box-text last-reset">

                            <h3 style="text-align: center; color: #fff">Dịch vụ đất đai</h3>
                        </div>

                        <style scope="scope">
                            .service{
                                margin-top:20px 
                            }
                        </style>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
</div>

<div class="container-xl">
    <div class="section-content relative">
        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
        <div class="row" id="row-960331198">
            <div class="col small-12 large-12">
                <div class="col-inner text-center">
                    <h1>GIỚI THIỆU</h1>
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_958331588">
                        <div class="img-inner dark" style="margin:20px 0px 0px 0px;">
                            <img width="1139" height="24"
                                src="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png"
                                class="attachment-original size-original" alt=""
                                srcset="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png 1139w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-300x6.png 300w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-768x16.png 768w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-1024x22.png 1024w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-600x13.png 600w"
                                sizes="(max-width: 1139px) 100vw, 1139px">
                        </div>

                        <style scope="scope">
                            #image_958331588 {
                                width: 100%;
                            }
                        </style>
                    </div>

                </div>
            </div>
        </div>
        <div class="row align-middle align-center" id="row-522416707">
            <div class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <h3><span style="color: #f0c12d;">VÀI NÉT VỀ CHÚNG TÔI</span></h3>
                    <p>
                        <span style="color: #222222; text-transform: uppercase; font-size: 15px; font-weight: bold">Công Ty Cổ Phần Đo Đạc Địa Chính và Công Trình Kiên Cường </span>
                    </p>

                    <p>
                        <ul class="ulListService">
                            <li class="listService">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và Đất đai</li>
                            <li class="listService">Lập bản đồ địa chính, địa hình. Trích đo địa chính, đo diện tích ví trí, hiện trạng và cắm mốc ranh giới thửa đất</li>
                            <li class="listService">Lập hồ sơ xin tách thửa, chỉ giới đường đỏ, cấp mới cấp đổi GCN, và đăng ký biến động thửa đất.</li>
                            <li class="listService">Với đội ngũ nhân lực có kinh nghiệm và chuyên môn cao trong lĩnh vực đo đạc, bản đồ và đất đai, có thiết bị công nghệ phần mềm hiện đại nên sản phẩm dịch vụ luôn đảm bảo chất lượng cao, đáp ứng tiến độ nhanh, chi phí hợp lý.</li>
                            <style>
                                .listService{
                                    text-align: justify;
                                    line-height: 20px;
                                    margin: 0 0 5px 5px;
                                    list-style-type: none;
                                }
                            </style>
                        </ul>
                    </p>
                    <a href="https://company.qbuy.app/gioi-thieu" target="_self"
                        class="button border success is-small" style="border-radius:99px;">
                        <span style="background-color: #e8e8e5; padding: 12px; border-radius: 20px; color: #000000;">Xem chi tiết</span>
                    </a>
                </div>
            </div>
            <div class="col medium-6 small-12 large-6 mt-3">
                <div class="col-inner">
                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_463298397">
                        <div class="img-inner dark">
                            <img width="600" height="400"
                                src="https://xaydungngoinhahanhphuc.vn/wp-content/uploads/2021/04/do-dac-dia-chinh.jpg"
                                class="attachment-original size-original" alt=""
                                srcset="https://xaydungngoinhahanhphuc.vn/wp-content/uploads/2021/04/do-dac-dia-chinh.jpg 600w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2019/02/16uc-admissions-articleLarge-300x200.jpg 300w"
                                sizes="(max-width: 600px) 100vw, 600px">
                        </div>

                        <style scope="scope">
                            #image_463298397 {
                                width: 100%;
                            }
                        </style>
                    </div>

                </div>
            </div>

            <style scope="scope">

            </style>
        </div>
        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>
    </div>
</div>