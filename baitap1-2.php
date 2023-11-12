<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ Sơ Khách Hàng</title>
</head>

<body>
    <form action="" method="POST" align="center">
        <table border="1px" align="center">
            <h1>Hồ Sơ Khách Hàng</h1>
            <tr>
                <td>Họ Tên</td>
                <td>
                    <input type="text" name="hoten">
                </td>
            </tr>
            <tr>
                <td> Giới tính</td>
                <td>
                    <input type="radio" name="gioitinh">
                    Nam
                    <input type="radio" name="gioitinh">
                    Nữ
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" name="diachi">
                </td>
            </tr>
            <tr>
                <td>Ngày ký HĐ</td>
                <td>
                    <input type="text" name="ngaykihd">
                </td>
            </tr>
            <tr>
                <td>Chỉ số đầu</td>
                <td>
                    <input type="text" name="chisodau">
                </td>
            </tr>
            <tr>
                <td>Chỉ số cuối</td>
                <td>
                    <input type="text" name="chisocuoi">
                </td>
            </tr>
            <tr>
                <td>Đơn giá</td>
                <td>
                    <select name="dongia">
                        <option value="3000">Kinh doanh</option>
                        <option value="2000">Gia đình</option>
                        <option value="2500">Sản xuất</option>
                    </select>
                </td>
            </tr>
            <td>
                <input type="submit" name="btnTinh" value="Tính">
            </td>
            <td><input type="button"  value="Bỏ qua"></td>
        </table>
    </form>
    <?php
      if(isset($_POST['btnTinh'])){
        $chisodau=$_POST['chisodau'];
        $chisocuoi=$_POST['chisocuoi'];
        $dongia=$_POST['dongia'];
        $tongSoDientt = $chisocuoi - $chisodau;
        $thanhTien= $tongSoDientt*$dongia;
        echo "Tổng số điện: ".$tongSoDientt.'<br>';
        echo "Thành tiền: ".$thanhTien;
    }
      ?>
</body>

</html>