<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Cho một mảng gồm 5 ptu:23,45,65,78,89
    //hiển thị các giá trị trong mảng
    $mang = array(23, 45, 65, 78,89);
    foreach($mang as $item){
        echo $item . '</br>';
    }
    $sum=array_sum($mang);
    

    echo $sum;

    // cho 1 biến a: có giá trị bằng 10
    // sd câu lênhj foreach tính tổng từ 1 đến 10

    //Giao diện: 2 ô dùng để nhập giá trị a, b
    //lấy giá trị a, b nhập vào và tính tổng 2 gtri nhập vào đó

//Bài 1:
    //Giao diện gồm 5 ô 
    // 1: họ và tên
    // 2: lớp
    // 3: ngày sinh
    // 4: quê
    // 5 sở thích
    // Lấy các giá trị ở 5 ô và hiển thị 
    // nếu đối tượng có quê ở Thái Bình hiển thị Mai Hiên 
//Bài 2:
    //Giao diện gồm 1 ô
    //ktra giá trị nhập vào có phải là số chính phươg hay không nếu không phải thì hiện thị Huy Siuuuu


//Bài 3:
    //Cho giao diện gồm 2 ô 
    // 1:Tài khoản 
    // 2:Mật khẩu 
    // gán tài khoản có tên Mai Hiên mk tên là Huy 
    // Nhiệm vụ:1; Nếu nhập vào tài khoản và mật khẩu không đúng với đã cho hiển thị tài khoản và mật khẩu không đúng 
    //         2; Nếu đúng hiển thị bạn đã đăng nhập thành công 

     ?> 
</body>
</html>