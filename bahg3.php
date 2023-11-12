<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- //Bài 3:
    //Cho giao diện gồm 2 ô 
    // 1:Tài khoản 
    // 2:Mật khẩu 
    // gán tài khoản có tên Mai Hiên mk tên là Huy 
    // Nhiệm vụ:1; Nếu nhập vào tài khoản và mật khẩu không đúng với đã cho hiển thị tài khoản và mật khẩu không đúng 
    //         2; Nếu đúng hiển thị bạn đã đăng nhập thành công  -->
    <form action="" method ="GET">
        <table border = 1>
            <tr>
                <td>Tài khoản </td>
                <td>
                    <input type="text" name="taikhoan">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu </td>
                <td>
                    <input type="text" name="matkhau">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="kiemtra" value="Kiểm tra">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['kiemtra'])){
            $taikhoan =$_GET['taikhoan'];
            $matkhau =$_GET['matkhau'];
        }
        $taikhoan1="Mai hiên";
        $matkhau1="Huy";
        if($taikhoan!=$taikhoan1 || $matkhau!=$matkhau1){
            echo "Tai khoản và mật khẩu không đúng";
        }
        else{
            echo "Đã đăng nhập thành công!";
        }

    ?>
</body>
</html>