<!-- //Bài 1:
    //Giao diện gồm 5 ô 
    // 1: họ và tên
    // 2: lớp
    // 3: ngày sinh
    // 4: quê
    // 5 sở thích
    // Lấy các giá trị ở 5 ô và hiển thị 
    // nếu đối tượng có quê ở Thái Bình hiển thị Mai Hiên  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="GET">
        <table border = 1>
            <tr>
                <td>Họ và tên </td>
                <td>
                    <input type="text" name = "hoten">
                </td>
            </tr>
            <tr>
                <td>Lớp</td>
                <td>
                    <input type="text" name ="lop">
                </td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td>
                    <input type="text" name ="ngaysinh">
                </td>
            </tr>
            <tr>
                <td>Quê</td>
                <td>
                    <input type="text" name ="que">
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>
                    <input type="text" name ="sothich">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name ="hienthi" value="Hiển thị">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['hienthi'])){
            $hoten=$_GET['hoten'];
            $lop = $_GET['lop'];
            $ngaysinh = $_GET['ngaysinh'];
            $que = $_GET['que'];
            $sothich = $_GET['sothich'];
        }
        echo "Họ Tên: {$hoten}" .'<br>';
        echo "Lớp: {$lop}" .'<br>';
        echo "Ngày sinh: {$ngaysinh}" .'<br>';
        echo "Quê: {$que}" .'<br>';
        echo "Sở thích: {$sothich}" .'<br>';
        if($que=="Thái Bình"){
            echo "Mai Hiên";
        }
    ?>
</body>
</html>
