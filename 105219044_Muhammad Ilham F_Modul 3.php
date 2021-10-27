<?php
$nomor_urut=array(1,2,3,4,5,6,7);
$nama_barang=array("wortel","bayam","tomat","sawi","cabai","brokoli","bawang");
$berat_barang_kg=array(25,10,10,15,20,25,30);
$berat_gram=array(25000,10000,10000,15000,20000,25000,30000,);
$berat_mg=array(25000000,10000000,10000000,15000000,20000000,25000000,30000000);
$stok=array(10,20,"kosong",30,"kosong",40,15);
$jumlah_array=count($nama_barang);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=s
    wap" rel="stylesheet">
</head>
<body>
    <table class="tabel" border="4" cellpadding="10">
        <tbody>
            <tr>
                <th>No. </th>
                <th>Nama barang&nbsp&nbsp</th>
                <th>Berat (kg)&nbsp&nbsp</th>
                <th>Berat (gram)&nbsp&nbsp</th>
                <th>Berat (miligram)&nbsp&nbsp</th>
                <th>Stok</th>
 
            </tr>
        
<?php
//echo "<table class='tabel' border='4' cellpadding='10'>";
            for ($i=0; $i < $jumlah_array; $i++) { 
                echo "<tr>";
                echo "<td>$nomor_urut[$i] &nbsp&nbsp&nbsp </td>";
                echo "<td>$nama_barang[$i] &nbsp</td>";
                echo "<td>$berat_barang_kg[$i]</td>";
                echo "<td>$berat_gram[$i]</td>";
                echo "<td>$berat_mg[$i]</td>";
                echo "<td>$stok[$i]</td>";
                echo "</tr>";
}    
//echo "</table>";
?>
        </tbody>
    </table>
</body>

</html>