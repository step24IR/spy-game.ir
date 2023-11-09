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

    <title>ایجاد صفحه تماس</title>
</head>
<body dir="rtl">

<h1 class="m-2 btn btn-success ">ساخت صفحه تماس...</h1>

<form class="p-3" action='/wp-content/themes/ringtone/api/test/copyLink.php' method='get' target="_blank">

<!--    <div class="form-group">
        <label for="name">نام:</label>
        <input type="text" class="form-control" id="name" placeholder="اقای حمیدی / شرکت ویراد">
    </div>

    <div class="form-group">
        <label for="command">توضیحات:</label>
        <textarea class="form-control" id="command" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="address">ادرس:</label>
        <input type="text" class="form-control" id="address" placeholder="مشهد - چهارراه صیاد شیرازی و فکوری">
    </div>-->

    <div class="form-group">
        <label for="number">شماره:</label>
        <input type="text" class="form-control" id="number" name="number" placeholder="09358668218">
    </div>

    <div class="m-2">
        <button type="submit" class="btn btn-primary">بساز</button>
    </div>


</form>

</body>
</html>


