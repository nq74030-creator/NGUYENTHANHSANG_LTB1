
<?php
echo "Ho ten: Nguyen Van A <br>";
echo "Ngay sinh: 01/01/2005 <br>";
echo "Ma so sinh vien: 123456789 <br>";

echo "<hr>";

$hoten = "Nguyen Van A";
$mssv = "123456789";
$sodienthoai = "0912345678";
$ngaysinh = "01/01/2005";
echo "Ho ten: " . $hoten . "<br>";
echo "Ma so sinh vien: " . $mssv . "<br>";
echo "So dien thoai: " . $sodienthoai . "<br>";
echo "Ngay sinh: " . $ngaysinh . "<br>";

echo "<hr>";

define("HOST", "localhost");
define("DATABASE", "ql_sinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";

echo "<hr>";

$ten = "Nguyen Van A";

echo 'Xin chao $ten <br>';
echo "Xin chao $ten <br>";

echo "<hr>";

echo "Hoan thanh bai tap PHP!";
?>
