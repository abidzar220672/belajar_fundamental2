<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php


define("gajiPokokKaryawan",5000000);
define("bonusKaryawan",500000);
define ("pajakPendapatan",0.12);


$jumlah_proyek = 1;



$jumlah_proyek *= bonusKaryawan;
$total_gaji_karyawan = gajiPokokKaryawan + $jumlah_proyek; 
$gajiBersih = $total_gaji_karyawan - ($total_gaji_karyawan * pajakPendapatan);

echo "gaji awal " . number_format(gajiPokokKaryawan, 0, ',', '.') . "<br>";
echo "ini gaji setelah ditambah bonus " . number_format($total_gaji_karyawan, 0,',', '.') ."<br>";
echo "gaji bersih " . number_format($gajiBersih, 0, ',' , '.');

   ?> 


</body>
</html>