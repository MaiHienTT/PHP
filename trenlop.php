<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Về Nhà</title>
</head>
<body>
    <h1>Giải Phương Trình Bậc 2</h1>
    <form action="" method ="GET">
        <table border = "1px">
            <tr>
                <td>a = </td>
                <td>
                    <input type = "text" name="txtSoA">
                </td>
            </tr>
            <tr>
                <td>b = </td>
                <td>
                    <input type = "text" name="txtSoB">
                </td>
            </tr>
            <tr>
                <td colspan="2" align= "center">
                    <input type="submit" name="btnTinh" value="Tính">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_GET['btnTinh'])){
        $a = $_GET['txtSoA'];
        $b = $_GET['txtSoB'];
        $tong=$a + $b;
        echo "Tong hai so la: ".$tong;
    }
    ?>
</body>
</html>