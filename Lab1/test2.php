<?php

echo "<h3>Bai 1: Cac phep toan so hoc</h3>";

$a = 10;
$b = 3;

echo "So a = $a <br>";
echo "So b = $b <br>";

echo "Cong: " . ($a + $b) . "<br>";
echo "Tru: " . ($a - $b) . "<br>";
echo "Nhan: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";

echo "<h3>Bai 2: Cac toan tu so sanh</h3>";

$x = 10;     
$y = "10";    

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
echo "<br>";

echo "<h3>Bai 3: Toan tu tang</h3>";

$x = 5;

echo "Gia tri ban dau: $x <br>";

echo "Tang truoc (++x): " . (++$x) . "<br>";
echo "Gia tri sau tang truoc: $x <br>";
$x = 5;

echo "Tang sau (x++): " . ($x++) . "<br>";
echo "Gia tri sau tang sau: $x <br>";

echo "<h3>Bai 4: Noi chuoi</h3>";

$chuoi1 = "Xin chao ";
$chuoi2 = "PHP";

$ketqua = $chuoi1 . $chuoi2;

echo "Toan tu . : " . $ketqua . "<br>";

$chuoi1 .= $chuoi2;

echo "Toan tu .= : " . $chuoi1 . "<br>";

echo "<h3>Bai 5: Dem so luong ky tu</h3>";

$chuoi_khong_dau = "Hello PHP";
$chuoi_co_dau = "Xin chao Viet Nam";

echo "Chuoi khong dau: " . $chuoi_khong_dau . "<br>";
echo "So ky tu: " . strlen($chuoi_khong_dau) . "<br>";

echo "Chuoi co dau: " . $chuoi_co_dau . "<br>";
echo "So ky tu: " . mb_strlen($chuoi_co_dau, "UTF-8") . "<br>";



echo "<h3>Bai 6: Chuyen doi chu hoa va chu thuong</h3>";

$chuoi = "Xin Chao Viet Nam";

echo "Chuoi ban dau: " . $chuoi . "<br>";

echo "Chu hoa: " . strtoupper($chuoi) . "<br>";

echo "Chu thuong: " . strtolower($chuoi) . "<br>";

echo "<h3>Bai 7: Ep kieu du lieu</h3>";

$chuoi1 = "123 abc";
$chuoi2 = "abc 123";

$so1 = (int)$chuoi1;
$so2 = (int)$chuoi2;

echo "Chuoi 1: ";
var_dump($so1);

echo "<br>Chuoi 2: ";
var_dump($so2);

echo "<h3>Bai 8: Cac kieu du lieu</h3>";
$so_nguyen = 100;
$so_thuc = 10.5;
$chuoi = "Hello PHP";
$logic = true;

echo "Kieu int: ";
var_dump($so_nguyen);

echo "<br>Kieu float: ";
var_dump($so_thuc);

echo "<br>Kieu string: ";
var_dump($chuoi);

echo "<br>Kieu bool: ";
var_dump($logic);

?>