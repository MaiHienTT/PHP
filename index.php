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
     ?> 
</body>
</html>