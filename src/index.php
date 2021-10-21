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
        <h1>Quản lý ngân hàng máu</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã số</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày đăng kí nhận máu</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM BLOOD_RECIPIENT";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?> </td>
                            <td><?php echo $row['reci_id']; ?> </td>
                            <td><?php echo $row['reci_name']; ?> </td>
                            <td><?php echo $row['reci_age']; ?> </td>
                            <td><?php echo $row['reci_bgrp']; ?> </td>
                            <td><?php echo $row['reci_bqnty']; ?> </td>
                            <td><?php echo $row['reci_sex']; ?> </td>
                            <td><?php echo $row['reci_reg_date']; ?> </td>
                            <td><?php echo $row['reci_phno']; ?> </td>
                            <td><a href="update_bl.php?id=<?php echo $row['reci_id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete_bl.php?id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="add_bl.php">Thêm hồ sơ</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>