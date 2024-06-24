

<div class="container-xl d-flex dodacWindow">
    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10"> 
        <h1 class="w-auto mb-4" style="font-size: 30px; font-weight: bold; color: #0b4ca9; padding: 40px 0 0 10px">
            CÔNG TY CỔ PHẦN ĐO ĐẠC ĐỊA CHÍNH VÀ CÔNG TRÌNH KIÊN CƯỜNG
        </h1>
        <p>
            <ul class="ulListService" class="listService">
            
        <a href="/gioi-thieu">
            <span class="mt-3" style="font-size: 18px; font-weight: bold; color: red; ">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và đất đai:</span>
        </a>    
            <!-- <span style=" font-size: 18px; font-size: 25px; font-weight: bold; color: red">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và đất đai:</span> -->
                <li class="listService">Thành lập bản đồ địa chính, lập hồ sơ địa chính, kê khai đăng ký và xây dựng cơ sở dữ liệu đất đai</li>
                <li class="listService">Trích đo địa chính, đo diện tích, hiện trạng và cắm mốc ranh giới thửa đất; lập hồ sơ xin: tách thửa, chỉ giới đường đỏ, cấp mới, cấp đổi GCN</li>
                <li class="listService">Đo đạc công trình, khảo sát địa hình</li>
                <?php 
                    // $album = getAlbums();
                    $album_id = 2;
                    $images=getListPermit($album_id);
                ?>
                <div class="section-content relative">
                    <div class="image-container d-flex">
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
                    margin: 5px 0 5px 15px;
                    font-size: 20px;
                    /* list-style-type: none; */
                    list-style-type: disc !important;
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
                    .listService{
                        text-align: justify;
                        line-height: 30px;
                        margin: 5px 0 ;
                        font-size: 20px;
                        list-style-type: disc!important;
                    }
                    .popup-content {
                        margin: auto;
                        display: block;
                        width: 100%;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        /* max-width: 700px; */
                        max-height: 650px;
                    }
                    .close {
                        position: absolute;
                        top: 65px;
                        right: 15px;
                        color: #f1f1f1;
                        font-size: 40px;
                        font-weight: bold;
                        transition: 0.3s;
                        cursor: pointer;
                    }
                }

            </style>
        </p>
    </div>
    <div class="col-0 col-sm-2 col-md-2	col-lg-2 col-xl-2 col-xxl-2"> 
        <img style="width: 100%; max-width: 210px; object-fit: cover; max-height:300px" src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.15752-9/448133003_832315775010784_1665438651705620777_n.png?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=pXENd_QQJsgQ7kNvgEv6Uyh&_nc_ht=scontent.fhan2-3.fna&oh=03_Q7cD1QGimJMJLCsbGYkw5SC0R5EbDxy0WfFcPRkGcLEts_WslQ&oe=6697421C" alt="Equipment 1" class="p-2 object-cover mb-1">
        <img style="width: 100%; height:300px; object-fit: cover; max-width: 210px; max-height:300px" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.15752-9/448487588_1103530524043312_4265049523153803439_n.png?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=v2D_BT-_7eEQ7kNvgFbPQbq&_nc_ht=scontent.fhan2-4.fna&oh=03_Q7cD1QHoe7focdbRk5Sn8i-5Dee-nxWFhdLxGCitvmfADXxkug&oe=669759EA" alt="Equipment 1" class="p-2 object-cover mb-1">
        <!-- <img style="width: 100%; max-height:300px"src="https://placehold.co/300x400" alt="Equipment 1" class="p-2 object-cover"> -->
    </div>

</div>

<div class="container-xl dodacPhone">
    <div class="col-12 col-sm-12 col-md-12 d-flex" style="justify-content: center;
            align-items: center;"> 
        <img class="col-sm-6" style="height: 50%; object-fit: contain; max-height: 100px" src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.15752-9/448133003_832315775010784_1665438651705620777_n.png?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=pXENd_QQJsgQ7kNvgEv6Uyh&_nc_ht=scontent.fhan2-3.fna&oh=03_Q7cD1QGimJMJLCsbGYkw5SC0R5EbDxy0WfFcPRkGcLEts_WslQ&oe=6697421C" alt="Equipment 1" class="p-2 object-cover mb-1">
        <img class="col-sm-6" style="height: 50%; object-fit: contain; max-height: 100px" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.15752-9/448487588_1103530524043312_4265049523153803439_n.png?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=v2D_BT-_7eEQ7kNvgFbPQbq&_nc_ht=scontent.fhan2-4.fna&oh=03_Q7cD1QHoe7focdbRk5Sn8i-5Dee-nxWFhdLxGCitvmfADXxkug&oe=669759EA" alt="Equipment 1" class="p-2 object-cover mb-1">
        <!-- <img style="width: 100%; max-height:300px"src="https://placehold.co/300x400" alt="Equipment 1" class="p-2 object-cover"> -->
    </div>

    <div class="col-12 col-sm-12 col-md-12"> 
        <h1 class="w-auto mb-4" style="font-size: 23px; font-weight: bold; color: #0b4ca9; padding: 40px 0 0 10px">
            CÔNG TY CP ĐO ĐẠC ĐỊA CHÍNH VÀ CÔNG TRÌNH KIÊN CƯỜNG
        </h1>
        <!-- <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($images as $index => $item): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <img style="height: auto; max-height: 250px; object-fit: contain;" class="col-12" src="<?= urlInWeb() . esc($item->path_big); ?>" class="d-block w-100" title="<?= esc($item->title); ?>" alt="<?= esc($item->title); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@panzoom/panzoom@9.4.3/dist/panzoom.min.js"></script>
    <style>
        #zoom-container {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #modalImage {
            transition: transform 0.3s ease;
        }
    </style>
        <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($images as $index => $item): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img 
                    style="height: auto; max-height: 250px; object-fit: contain; cursor: pointer;" 
                    class="col-12" 
                    src="<?= urlInWeb() . esc($item->path_big); ?>" 
                    class="d-block w-100" 
                    title="<?= esc($item->title); ?>" 
                    alt="<?= esc($item->title); ?>"
                    onclick="showModal('<?= urlInWeb() . esc($item->path_big); ?>', '<?= esc($item->title); ?>')"
                >
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="zoom-container">
                    <img id="modalImage" src="" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    function showModal(imageUrl, title) {
        $('#modalImage').attr('src', imageUrl);
        $('#imageModalLabel').text(title);
        var modal = new bootstrap.Modal(document.getElementById('imageModal'));
        modal.show();
        initPanzoom();
    }

    function initPanzoom() {
        const element = document.getElementById('modalImage');
        Panzoom(element, {
            maxScale: 5
        });
    }

    $('#imageModal').on('hidden.bs.modal', function () {
        // Destroy Panzoom instance to reset zoom
        const element = document.getElementById('modalImage');
        Panzoom(element).destroy();
    });
</script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var carouselItems = document.querySelectorAll('#carouselExample2 .carousel-item img');
        
        carouselItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Tạo một modal overlay
                var modal = document.createElement('div');
                modal.classList.add('modal-overlay');
                
                // Tạo một ảnh phóng to trong modal
                var modalImg = document.createElement('img');
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                modalImg.classList.add('modal-img');
                
                // Tạo nút đóng modal
                var closeButton = document.createElement('span');
                closeButton.classList.add('modal-close');
                closeButton.innerHTML = '&times;';
                closeButton.addEventListener('click', function() {
                    modal.remove();
                });
                
                // Tạo nút zoom +
                var zoomInButton = document.createElement('button');
                zoomInButton.classList.add('modal-zoom');
                zoomInButton.innerHTML = '+';
                zoomInButton.addEventListener('click', function() {
                    var currentWidth = modalImg.clientWidth;
                    var currentHeight = modalImg.clientHeight;
                    modalImg.style.maxWidth = (currentWidth + 50) + 'px';
                    modalImg.style.maxHeight = (currentHeight + 50) + 'px';
                });
                
                // Tạo nút zoom -
                var zoomOutButton = document.createElement('button');
                zoomOutButton.classList.add('modal-zoom');
                zoomOutButton.innerHTML = '-';
                zoomOutButton.addEventListener('click', function() {
                    var currentWidth = modalImg.clientWidth;
                    var currentHeight = modalImg.clientHeight;
                    modalImg.style.maxWidth = (currentWidth - 50) + 'px';
                    modalImg.style.maxHeight = (currentHeight - 50) + 'px';
                });
                
                // Đóng modal khi click vào modal overlay
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.remove();
                    }
                });
                
                // Thêm ảnh phóng to và các nút vào modal
                modal.appendChild(modalImg);
                modal.appendChild(closeButton);
                modal.appendChild(zoomInButton);
                modal.appendChild(zoomOutButton);
                
                // Thêm modal vào body của trang web
                document.body.appendChild(modal);
            });
        });
    });
</script>

<style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        cursor: pointer;
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 20px;
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    .modal-zoom {
        position: absolute;
        bottom: 20px;
        right: 20px;
        color: white;
        font-size: 24px;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        cursor: pointer;
        padding: 5px 10px;
    }
</style> -->



        <a href="/gioi-thieu">
            <span class="mt-3" style="font-size: 18px; font-weight: bold; color: red; ">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và đất đai:</span>
        </a>
        <!-- <span class="mt-3" style="font-size: 18px; font-weight: bold; color: red; ">Chuyên hoạt động về lĩnh vực Đo đạc, Bản đồ và đất đai:</span> -->
    </div>
    <style>
        
    </style>
</div>
<style>
    .dodacWindow {
        display: block ;
    }
    .dodacPhone {
        display: none !important;
    }
    @media (max-width: 500px) {
        .dodacWindow {
            display: none !important;
        }
        .dodacPhone {
            display: block !important;
        }
    }
</style>

<!-- dịch vụ -->
<div class="container-xl section-content relative" style="margin-top: 20px; display: none">
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
                            style="object-fit: cover"
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

<div class="container-xl section-content relative" style="margin-top: 20px;">
    
    <!-- <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div> -->
    <div class="row" id="row-service-9">
        <div class="col small-12 large-12">
            <div class="col-inner text-center">
                <!-- <h1></h1>
                <p>
                    <span style="color: #777"></span>
                </p> -->
                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2637762889">
                    <div class="img-inner dark">
                        <img  
                            src="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png"
                            class="attachment-original size-original col-12" alt=""
                            srcset="https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line.png 1139w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-300x6.png 300w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-768x16.png 768w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-1024x22.png 1024w, https://mauweb.monamedia.net/greenuni/wp-content/uploads/2018/12/section_line-600x13.png 600w"
                            style="object-fit: cover"
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
        <div class="col col-12 col-md-4 medium-4 small-6 large-4 service" style="max-height: 250px; min-height:250px; height:250px ">
            <div class="col-inner text-center dark"
                style="background-color: #008000;padding:50px 0px; min-height: 250px">
                <a class="plain" href="/dich-vu-dat-dai"
                    target="_self">
                    <div class="icon-box featured-box icon-box-center text-center" style="margin:0px 0px 0px 0px;">
                        
                        <div class="icon-box-text last-reset">

                            <h3 style="text-align: center; color: #fff; font-size: 30px; font-weight: bold; text-transform: uppercase">Dịch vụ đất đai</h3>
                            <p style="color: #fff; padding: 5px">Trích đo địa chính, cắm mốc giới, lập hồ sơ kỹ thuật thửa đất và  lập hồ sơ xin: cấp mới, cấp đổi GCN, tách thửa, chỉ giới đường đỏ - Quy hoạch.</p>
                        </div>
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
        <div class="col col-12 col-md-4 medium-4 small-6 large-4 service" style="max-height: 250px; min-height:250px; height:250px ">
            <div class="col-inner text-center dark"
                style="background-color: #f0c12d; padding:50px 0px; min-height: 250px">
                <a class="plain" href="/dia-chinh"
                    target="_self">
                    <div class="icon-box featured-box icon-box-center text-center" style="margin:0px 0px 0px 0px;">
                        
                        <div class="icon-box-text last-reset">

                            <h3 style="text-align: center; color: #fff; font-size: 30px; font-weight: bold; text-transform: uppercase">Địa chính</h3>
                            <!-- <ul style="list-style-type: disc; padding-left: 40px;"> 
                                <li style="text-align: justify; color: #fff; padding: 0 20px 0 0;">
                                    Thành lập bản đồ địa chính, trích đo địa chính
                                </li>
                                <li style="text-align: justify; color: #fff; padding: 0 20px 0 0;">
                                    Lập hồ sơ địa chính, kê khai đăng ký đất đai, xây dựng cơ sở dữ liệu đất đai.
                                </li>
                            </ul> -->
                            <p style="color: #fff; padding: 5px">Thành lập bản đồ địa chính, lập hồ sơ địa chính, kê khai đăng ký và xây dựng cơ sở dữ liệu đất đai.</p>
                        </div>
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
        <div class="col col-12 col-md-4 medium-4 small-6 large-4 service" style="max-height: 250px; min-height:250px; height:250px ">
            <div class="col-inner text-center dark"
                style="background-color: #3079d5;padding:50px 0px; min-height: 250px">
                <a class="plain" href="/dia-hinh"
                    target="_self">
                    <div class="icon-box featured-box icon-box-center text-center" style="margin:0px 0px 0px 0px;">
                        
                        <div class="icon-box-text last-reset">

                            <h3 style="text-align: center; color: #fff; font-size: 30px; font-weight: bold; text-transform: uppercase">Địa hình</h3>
                            <p style="color: #fff; padding: 5px">Đo đạc công trình, khảo sát địa hình, Xây dựng lưới thi công và Quan trắc biến dạng công trình.</p>
                        </div>
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
        
    </div>
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
</div>


