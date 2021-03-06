<?php
include("constants.php")
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>Thêm thông tin </h1>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Họ và Tên</label>
                <input type="text" name="reci_name" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Tuổi</label>
                <input type="text" name="reci_age" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Nhóm máu</label>
                <input type="text" name="reci_bgrp" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Số lượng máu cần</label>
                <input type="text" name="reci_bqnty" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Giới tính</label>
                <input type="text" name="reci_sex" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại</label>
                <input type="text" name="reci_phno" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Thêm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $reci_name = $_POST['reci_name'];
    $reci_age = $_POST['reci_age'];
    $reci_bgrp = $_POST['reci_bgrp'];
    $reci_bqnty = $_POST['reci_bqnty'];
    $reci_sex = $_POST['reci_sex'];
    $reci_phno = $_POST['reci_phno'];
    $sql = "INSERT INTO 
    BLOOD_RECIPIENT (`reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`,`reci_phno`) 
    VALUES ('$reci_name','$reci_age','$reci_bgrp','$reci_bqnty','$reci_sex','$reci_phno')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location: index.php");
    } else {
        header("location: index.php");
    }
}
?>