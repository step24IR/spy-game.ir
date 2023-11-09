<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl"
          crossorigin="anonymous">

    <title>تماس با ما</title>
</head>
<body dir="rtl">

<?php $number = $_GET['number'] ; ?>


<div class="d-flex justify-content-center">

<h1 class="m-2 btn btn-success w-25"> صفحه تماس با ما...</h1>

<h1 class=" w-25"></h1>
<h1 class="  w-25 "></h1>

<h1 class="m-2 btn btn-dark w-25"><a href="/wp-content/themes/ringtone/api/test/create.php">ساخت شماره</a></h1>

</div>

<div class="bg-secondary p-2 m-2 text-white">

    <h2>
        step24
    </h2>

    <h3> توسعه کسب و کار ها نوپا</h3>
    <p>هدف و رسالت ما رساندن محصول یا خدمت شما به بازار است...</p>

    <p>آدرس: مشهد - چهارراه صیادشیرازی و فکوری - بین فکوری 9 و 11 </p>

    <p>شماره تماس : 09358668218</p>


</div>

<div class="fixed-bottom">

    <div class="d-flex justify-content-center">

        <p class="btn btn-success m-2 w-50 "> پیام </p>
        <p  onclick='call()' class="btn btn-danger m-2 w-50 "> تماس </p>

    </div>

</div>


<script>
    function call() {
        window.open('tel:<?php echo $number; ?>');
    }


</script>

</body>
</html>


