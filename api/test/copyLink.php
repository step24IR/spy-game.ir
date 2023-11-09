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

    <title>پنل</title>
</head>
<body dir="rtl">

<h1 class="m-2 btn btn-success ">صفحه مدیریت لینک...</h1>


<p class="m-2 text-secondary p-2 ">
    لینک زیر را کپی کنید و در استوری اینستاگرام یا هر جایی دیگری که میخواهید استفاده کنید قرار
    دهید</p>

<div>

    <?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $number = $_GET['number'];
    //echo  $actual_link;

    ?>

</div>
<div class="d-flex justify-content-center">

    <!-- The text field -->
    <input value="<?php echo $actual_link; ?>" type="text" id="number" class="w-75 m-2"> </input>

</div>




<div class="d-flex justify-content-center">


    <form class="p-3" action='/wp-content/themes/ringtone/api/test/call.php' method='get'
          target="_blank">
        <input type="hidden" class="form-control" id="number" name="number"
               value="<?php echo $number; ?>" \>

        <div class="btn btn-success" onclick="copy()">کپی کردن</div>
        <button type="submit" class="btn btn-primary">نشونم بده!</button>

</div>


<script>


    function copy() {
        /* Get the text field */
        var copyText = document.getElementById("number");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("انجام شد! حالا میتونی استفادش کنی");
    }
</script>

</body>
</html>


