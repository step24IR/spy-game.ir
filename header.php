<!DOCTYPE html>
<html class="mt-0" lang="fa">
<head>
    <?php wp_head(); ?>
    <title>spy game: سایت رسمی بازی جاسوس فارسی</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <meta name="enamad" content="392032"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="google-site-verification" content="XG3gt1c-qFcXenA1rhZJQK0Hf2_wcYeliAKhxQdfgLM" />
    <meta name="description" content="بازی جاسوس فارسی: دانلود، اطلاعات، آموزش و بیشتر"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>



   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->


    <meta name="google-site-verification" content="XG3gt1c-qFcXenA1rhZJQK0Hf2_wcYeliAKhxQdfgLM" />

<!--    <script type="text/javascript" src="../wp-content/themes/spy/js/online_game.js"></script>-->
    <script type="text/javascript" src="../wp-content/themes/spy/js/web_app.js"></script>


</head>

<body  class="c_body " >

<?php include('code/download_butom.php'); ?>


<header dir="rtl">

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-nav  ">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler menu_header" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav mx-2 my-3 flex-wrap d-flex'
                ));
                ?>

            </ul>
        </div>
    </nav>
</header>