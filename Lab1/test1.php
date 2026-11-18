
<?php
echo "Ho ten: Nguyen Thanh Sang <br>";
echo "Ngay sinh: 05/02/2007 <br>";
echo "Ma so sinh vien: 2125110109 <br>";

echo "<hr>";

$hoten = "Nguyen Thanh Sang";
$mssv = "2125110109";
$sodienthoai = "0912345678";
$ngaysinh = "05/02/2007";
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

$ten = "Nguyen Thanh Sang";

echo 'Xin chao $ten <br>';
echo "Xin chao $ten <br>";

echo "<hr>";

echo "Hoan thanh bai tap PHP!";
?>
