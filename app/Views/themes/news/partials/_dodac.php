

<div class="container-xl d-flex ">
    <div class="col-10"> 
        <h1 class="w-auto mb-4" style="font-size: 30px; font-weight: bold; color: #0b4ca9; padding: 40px 0 0 10px">
            CÔNG TY CỔ PHẦN ĐO ĐẠC ĐỊA CHÍNH VÀ CÔNG TRÌNH KIÊN CƯỜNG
        </h1>
        <p>
            <ul class="ulListService" class="listService">
                <span style=" font-size: 18px; font-size: 25px; font-weight: bold; color: red">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và đất đai:</span>
                <li class="listService">Thành lập bản đồ địa chính, lập hồ sơ địa chính, kê khai đăng ký và xây dựng cơ sở dữ liệu đất đai</li>
                <li class="listService">Trích đo địa chính, đo diện tích, hiện trạng và cắm mốc ranh giới thửa đất; lập hồ sơ xin: tách thửa, chỉ giới đường đỏ, cấp mới, cấp đổi GCN</li>
                <li class="listService">Đo đạc công trình, khảo sát địa hình</li>
                <?php 
                    // $album = getAlbums();
                    $album_id = 2;
                    $images=getListPermit($album_id);
                ?>
                <div class="section-content relative">
                    <div class="image-container">
                    <?php 
                        
                        foreach ($images as $item): ?>
                            <img  src="<?= urlInWeb()?><?= esc($item->path_big);  ?>" title="<?= esc($item->title);?>" alt="<?= esc($item->title);?>" class="thumbnail">    
                        <?php endforeach;
                    ?>
                    </div>
                    <div id="popup" class="popup">
                        <span class="close">&times;</span>
                        <img class="popup-content" id="popup-image">
                        <a class="prev" onclick="changeImage(-1)">&#10094;</a>
                        <a class="next" onclick="changeImage(1)">&#10095;</a>
                    </div>
                    <style>
                        .image-container {
                            text-align: center;
                            /* margin-top: 50px; */
                            /* margin-bottom: 50px */
                        }

                        .thumbnail {
                            /* width: 200px; */
                            height: 100%;
                            max-height: 200px;
                            cursor: pointer;
                            transition: 0.3s;
                            margin: 10px; 
                        }

                        .thumbnail:hover {
                            opacity: 0.7;
                        }
                        .popup-content:hover{
                            background-color:#ccc
                        }
                        .popup {
                            display: none;
                            position: fixed;
                            z-index: 1;
                            padding-top: 60px;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            overflow: auto;
                            background-color: rgb(0,0,0);
                            background-color: rgba(0,0,0,0.9);
                        }


                        .popup-content {
                            margin: auto;
                            display: block;
                            width: auto;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            /* max-width: 700px; */
                            max-height: 650px;
                        }

                        .close {
                            position: absolute;
                            top: 15px;
                            right: 35px;
                            color: #f1f1f1;
                            font-size: 40px;
                            font-weight: bold;
                            transition: 0.3s;
                            cursor: pointer;
                        }

                        .close:hover,
                        .close:focus {
                            color: #bbb;
                            text-decoration: none;
                            cursor: pointer;
                        }

                        .prev, .next {
                            cursor: pointer;
                            position: absolute;
                            top: 50%;
                            width: auto;
                            padding: 16px;
                            margin-top: -22px;
                            color: white;
                            font-weight: bold;
                            font-size: 20px;
                            transition: 0.3s;
                            border-radius: 0 3px 3px 0;
                            user-select: none;
                        }

                        .next {
                            right: 0;
                            border-radius: 3px 0 0 3px;
                        }

                        .prev:hover, .next:hover {
                            background-color: rgba(0,0,0,0.8);
                        }


                    </style>
                    <script>
                        var popup = document.getElementById('popup');
                        var popupImage = document.getElementById('popup-image');
                        var close = document.getElementsByClassName('close')[0];

                        var thumbnails = document.getElementsByClassName('thumbnail');
                        var currentIndex = 0;

                        for (var i = 0; i < thumbnails.length; i++) {
                            thumbnails[i].onclick = function() {
                                currentIndex = Array.prototype.indexOf.call(thumbnails, this);
                                popup.style.display = 'block';
                                popupImage.src = this.src;
                            }
                        }
                        close.onclick = function() {
                            popup.style.display = 'none';
                        }

                        window.onclick = function(event) {
                            if (event.target == popup) {
                                popup.style.display = 'none';
                            }
                        }
                        function changeImage(n) {
                            currentIndex += n;
                            if (currentIndex >= thumbnails.length) {
                                currentIndex = 0;
                            } else if (currentIndex < 0) {
                                currentIndex = thumbnails.length - 1;
                            }
                            popupImage.src = thumbnails[currentIndex].src;
                        }


                    </script>
                </div>
                
                <li class="listService ">Với đội ngũ nhân lực có kinh nghiệm và chuyên môn cao trong lĩnh vực đo đạc, bản đồ và đất đai, có thiết bị công nghệ phần mềm hiện đại nên sản phẩm dịch vụ luôn đảm bảo chất lượng cao, đáp ứng tiến độ nhanh, chi phí hợp lý.</li>
            </ul>
           
            <style>
                .listService{
                    text-align: justify;
                    line-height: 30px;
                    margin: 5px 0 5px 25px;
                    font-size: 20px;
                    /* list-style-type: none; */
                    /* color: #fff; */
                }
                .ulListService {
                    padding-left: 0 10px 0 0 !important;
                    
                }
                /* p{
                    color: #fff !important;
                } */

                @media (max-width: 500px) {
                    .imgIntro {
                        display: none;
                    }
                    
                }

            </style>
        </p>
    </div>
    <div class="col-2"> 
        <img style="width: 100%; max-width: 210px;object-fit: cover; max-height:300px" src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.15752-9/448133003_832315775010784_1665438651705620777_n.png?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=pXENd_QQJsgQ7kNvgEv6Uyh&_nc_ht=scontent.fhan2-3.fna&oh=03_Q7cD1QGimJMJLCsbGYkw5SC0R5EbDxy0WfFcPRkGcLEts_WslQ&oe=6697421C" alt="Equipment 1" class="p-2 object-cover mb-1">
        <img style="width: 100%;height:300px;object-fit: cover; max-width: 210px; max-height:300px" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.15752-9/448487588_1103530524043312_4265049523153803439_n.png?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=v2D_BT-_7eEQ7kNvgFbPQbq&_nc_ht=scontent.fhan2-4.fna&oh=03_Q7cD1QHoe7focdbRk5Sn8i-5Dee-nxWFhdLxGCitvmfADXxkug&oe=669759EA" alt="Equipment 1" class="p-2 object-cover mb-1">
        <!-- <img style="width: 100%; max-height:300px"src="https://placehold.co/300x400" alt="Equipment 1" class="p-2 object-cover"> -->
    </div>

</div>

   
<!-- dịch vụ -->
<div class="container-xl section-content relative" style="margin-top: 20px">
    <?php 
        $number=75;
        $category = getCategoryByID($number);
        // $categoryChild = getCategoryByIDChild($number);
        $categories = getByParentId($number);
    ?>
    <!-- <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div> -->
    <div class="row" id="row-service-<?php echo esc($category->id) ?>">
        <div class="col small-12 large-12">
            <div class="col-inner text-center">
                <!-- <h1><?= esc($category->name) ?></h1>
                <p>
                    <span style="color: #777"><?= esc($category->description) ?></span>
                </p> -->
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
    <div class="row row-small align-equal align-center" id="row-image-<?php echo esc($category->id) ?>">
    <?php foreach($categories as $item): ?>
        <div class="col col-12 col-md-4 medium-4 small-6 large-4 service">
            <div class="col-inner text-center dark"
                style="background-color: <?php echo esc($item->color); ?>;padding:50px 0px 50px 0px">
                <a class="plain" href="<?= esc($category->name_slug) ?>/<?php echo esc($item->name_slug); ?>"
                    target="_self">
                    <div class="icon-box featured-box icon-box-center text-center" style="margin:0px 0px 0px 0px;">
                        
                        <div class="icon-box-text last-reset">

                            <h3 style="text-align: center; color: #fff"><?php echo esc($item->name); ?></h3>
                            <p style="color: #fff; padding: 5px"><?php echo esc($item->description); ?></p>
                        </div>
                        <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'> -->
                        

                        <style scope="scope">
                            .hoverMe {
                                transition: all .5s ease;
                                color: #fff;
                                border: 3px solid white;
                                /* font-family:'Montserrat', sans-serif; */
                                text-transform: uppercase;
                                text-align: center;
                                line-height: 1;
                                font-size: 17px;
                                background-color : transparent;
                                padding: 10px;
                                outline: none;
                                border-radius: 4px;
                            }
                            .hoverMe:hover {
                                color: #001F3F;
                                background-color: #fff;
                            }
                            .service{
                                margin-top:20px 
                            }
                        </style>
                    </div>
                    <button class="hoverMe"><?= trans("more")?></button>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
</div>


