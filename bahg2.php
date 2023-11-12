<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- //Bài 2:
    //Giao diện gồm 1 ô
    //ktra giá trị nhập vào có phải là số chính phươg hay không nếu không phải thì hiện thị Huy Siuuuu -->
    <form action="" method="POST">
        <table border=1>
            <tr>
                <td>Nhap n</td>
                <td>
                    <input type="text" name="n">
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
        if(isset($_POST['kiemtra'])){
            $n =$_POST['n'];
        }
        $i=0;$dem=0;
        for($i=1;$i<$n;$i++){
            if($i*$i==$n){
                echo "{$n} là số chính phương" .'</br>';
                $dem++;
            }
            
        }
        if($dem==0){
            echo "{$n} không phải số chính phương";
        }
    ?>
</body>

</html>