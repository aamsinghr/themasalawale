<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maharana Overseas</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS FILES -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/colors.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/lightgallery.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
    <!-- HEADER -->
	<?php include("header.php") ?>
    <div id="site-container">
        <!-- PAGE TITLE -->
        <div class="page-title">
            <div class="page-title-inner">
                <h1>Products</h1>
            </div>
        </div>
        <!-- MAIN CONTAINER -->
        <section class="page-block">
            <!-- GRID -->
            <div class="grid">
                <div class="unit whole">
                    <!-- GALLERY 1 -->
                    <div id="gallery1" class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage" data-image="images/photos/post.jpg">
                            <a href="#"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="#">Photo Gallery</a></h4>
                            <p>Malis imitarentur offendit tamen laboris. Vidisse est sin labo ne e lorem despicati, nam veniam probant nostrud qui ipsum et litteris se aliqua.</p>
                            <a href="#" class="readmore-button">View Gallery</a>
                        </div>
                    </div>
                    <!-- GALLERY 2 -->
                    <div id="gallery2" class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage" data-image="images/photos/post2.jpg">
                            <a href="#"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="#">Video Gallery</a></h4>
                            <p>In eram commodo. Ullamco ubi mandaremus et hic irure et fore, quae expetendis et vidisse qui aliqua graviterque mentitum sunt cupidatat, ex iudicem.</p>
                            <a href="#" class="readmore-button">View Gallery</a>
                        </div>
                    </div>
                    <!-- GALLERY 3 -->
                    <div id="gallery3" class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage" data-image="images/photos/post3.jpg">
                            <a href="#"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="#">Photo - Video Gallery</a></h4>
                            <p>Aliquip e quibusdam. Nulla aliquip si cillum labore se sint ullamco instituendarum, se incurreret familiaritatem aut hic senserit arbitrantur cernantur.</p>
                            <a href="#" class="readmore-button">View Gallery</a>
                        </div>
                    </div>
                    <!-- GALLERY 4 -->
                    <div id="gallery4" class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage" data-image="images/photos/post4.jpg">
                            <a href="#"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="#">Another Photo Gallery</a></h4>
                            <p>Multos est nam multos admodum. Admodum aute incididunt se in et aute litteris ita qui sunt qui fore, quorum in deserunt ita quae. Id minim ex quorum do.</p>
                            <a href="#" class="readmore-button">View Gallery</a>
                        </div>
                    </div>
                    <!-- PAGER -->
                    <div class="blogpager">
                        <div class="previous">
                            <a href="#" class="button">&#8249; Older Galleries</a>
                        </div>
                        <div class="next">
                            <a href="#" class="button">Newer Galleries &#8250;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- FOOTER -->
    <?php include("footer.php") ?>
    <!-- BACK TO TOP BUTTON -->
    <a href="#" class="back-to-top"></a>
    <!-- JS FILES -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/backstretch.min.js"></script>
    <script type="text/javascript" src="js/lightGallery.min.js"></script>
    <!-- PAGE TITLE BG IMAGE -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            if (jQuery(window).width() > 480) {
                jQuery('.page-title').backstretch("images/photos/page2.jpg");
            }
        });
    </script>
    <!-- GALLERY THUMBNAIL LOOP -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery(".galleryimage").each(function () {
                if (jQuery(this).attr('data-image')) {
                    jQuery(this).backstretch(jQuery(this).data('image'));
                }
            });
        });
    </script>
    <!-- GALLERY 1 -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#gallery1 a').click(function (e) {
                e.preventDefault();
                jQuery(this).lightGallery({
                    dynamic: true,
                    html: true,
                    mobileSrc: true,
                    dynamicEl: [
                        {
                            "src": "images/photos/b1.jpg",
                            "thumb": "images/photos/t1.jpg",
                            "html": "<div class='gallery-title'>Nibh mauris lucem</div>",
                            "mobileSrc": "images/photos/s1.jpg"
                },
                        {
                            "src": "images/photos/b2.jpg",
                            "thumb": "images/photos/t2.jpg",
                            "html": "<div class='gallery-title'>Lorem Ipsum Dolor</div>",
                            "mobileSrc": "images/photos/s2.jpg"
                },
                        {
                            "src": "images/photos/b4.jpg",
                            "thumb": "images/photos/t4.jpg",
                            "html": "<div class='gallery-title'>Velit singulis ut</div>",
                            "mobileSrc": "images/photos/s4.jpg"
                },
                        {
                            "src": "images/photos/b5.jpg",
                            "thumb": "images/photos/t5.jpg",
                            "html": "<div class='gallery-title'>Occaecat est quis</div>",
                            "mobileSrc": "images/photos/s5.jpg"
                },
                        {
                            "src": "images/photos/b6.jpg",
                            "thumb": "images/photos/t6.jpg",
                            "html": "<div class='gallery-title'>Nisi doctrina concursioni</div>",
                            "mobileSrc": "images/photos/s6.jpg"
                },
                        {
                            "src": "images/photos/b7.jpg",
                            "thumb": "images/photos/t7.jpg",
                            "html": "<div class='gallery-title'>Tractavissent mentitum</div>",
                            "mobileSrc": "images/photos/s7.jpg"
                },
                        {
                            "src": "images/photos/b3.jpg",
                            "thumb": "images/photos/t3.jpg",
                            "html": "<div class='gallery-title'>Excepteur imitarentur</div>",
                            "mobileSrc": "images/photos/s3.jpg"
                }
            ]
                });
            })
        });
    </script>
    <!-- GALLERY 2 -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#gallery2 a').click(function (e) {
                e.preventDefault();
                jQuery(this).lightGallery({
                    dynamic: true,
                    thumbnail: false,
                    html: true,
                    vimeoColor    : '66A7C5', // Vimeo video player theme color (hex color code).
                    videoAutoplay : false,
                    dynamicEl: [
                        {
                            "src": "http://vimeo.com/1084537",
                            "html": "<div class='gallery-title'>Vimeo</div>",
                },
                        { // You Tube videos work only on a server.
                            "src": "http://www.youtube.com/embed/3tvgBG8PBd0",
                            "html": "<div class='gallery-title'>You Tube</div>",
                }
            ]
                });
            })
        });
    </script>
    <!-- GALLERY 3 -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#gallery3 a').click(function (e) {
                e.preventDefault();
                jQuery(this).lightGallery({
                    dynamic: true,
                    html: true,
                    vimeoColor    : '66A7C5', // Vimeo video player theme color (hex color code).
                    videoAutoplay : false,
                    dynamicEl: [
                        {
                            "src": "http://vimeo.com/1084537",
                            "thumb": "images/photos/t3.jpg",
                            "html": "<div class='gallery-title'>Vimeo</div>",
                },
                        {
                            "src": "images/photos/b6.jpg",
                            "thumb": "images/photos/t6.jpg",
                            "html": "<div class='gallery-title'>Nisi doctrina concursioni</div>",
                            "mobileSrc": "images/photos/s6.jpg"
                },
                        { // You Tube videos work only on a server.
                            "src": "http://www.youtube.com/embed/3tvgBG8PBd0",
                            "thumb": "images/photos/t5.jpg",
                            "html": "<div class='gallery-title'>You Tube</div>",
                },
                        {
                            "src": "images/photos/b4.jpg",
                            "thumb": "images/photos/t4.jpg",
                            "html": "<div class='gallery-title'>Velit singulis ut</div>",
                            "mobileSrc": "images/photos/s4.jpg"
                }
            ]
                });
            })
        });
    </script>
    <!-- GALLERY 4 -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#gallery4 a').click(function (e) {
                e.preventDefault();
                jQuery(this).lightGallery({
                    dynamic: true,
                    html: true,
                    mobileSrc: true,
                    dynamicEl: [
                        {
                            "src": "images/photos/b6.jpg",
                            "thumb": "images/photos/t6.jpg",
                            "html": "<div class='gallery-title'>Nibh mauris lucem</div>",
                            "mobileSrc": "images/photos/s6.jpg"
                },
                        {
                            "src": "images/photos/b4.jpg",
                            "thumb": "images/photos/t4.jpg",
                            "html": "<div class='gallery-title'>Lorem Ipsum Dolor</div>",
                            "mobileSrc": "images/photos/s4.jpg"
                },
                        {
                            "src": "images/photos/b2.jpg",
                            "thumb": "images/photos/t2.jpg",
                            "html": "<div class='gallery-title'>Velit singulis ut</div>",
                            "mobileSrc": "images/photos/s2.jpg"
                },
                        {
                            "src": "images/photos/b5.jpg",
                            "thumb": "images/photos/t5.jpg",
                            "html": "<div class='gallery-title'>Occaecat est quis</div>",
                            "mobileSrc": "images/photos/s5.jpg"
                },
                        {
                            "src": "images/photos/b7.jpg",
                            "thumb": "images/photos/t7.jpg",
                            "html": "<div class='gallery-title'>Nisi doctrina concursioni</div>",
                            "mobileSrc": "images/photos/s7.jpg"
                },
                        {
                            "src": "images/photos/b1.jpg",
                            "thumb": "images/photos/t1.jpg",
                            "html": "<div class='gallery-title'>Tractavissent mentitum</div>",
                            "mobileSrc": "images/photos/s1.jpg"
                },
                        {
                            "src": "images/photos/b3.jpg",
                            "thumb": "images/photos/t3.jpg",
                            "html": "<div class='gallery-title'>Excepteur imitarentur</div>",
                            "mobileSrc": "images/photos/s3.jpg"
                }
            ]
                });
            })
        });
    </script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>