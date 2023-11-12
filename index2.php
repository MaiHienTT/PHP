<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method="GET">
        <table border=1>
            <tr>
                <td>Gía trị a:</td>
                <td>
                    <input type="text" name="txta">
                </td>
            </tr>
            <tr>
                <td>Gía trị b:</td>
                <td>
                    <input type="text" name ="txtb">
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name ="tinh" value = "Tính"> </td>     
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['tinh'])){
            $a=0;
            $b=0;
            $a=$_GET['txta'];
            $b=$_GET['txtb'];
            $c=0;
            $c= $a + $b;
            echo "Tổng giá trị a và b: {$c}";
        }
    ?>
    
</body>
</html>