<?php
 
// parameter koneksi ke MySQL
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "qhse";
 
// baca data file json dr web
$url = "http://cladtekgdashboard.com/User/leadingtoJSON";
$json = file_get_contents($url);
 
// koneksi ke mysql
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// memecah data json per baris
$split = explode("\n", $json);
 
// pemrosesan data json tiap barisnya
foreach ($split as $baris) {
    // proses parsing data json
    $data = json_decode($baris);
    $id = $data->id;
    $Date = $data->Date;
    $Description = $data->Description;
    $Unit = $data->Unit;
    $QTY = $data->QTY;
 
    // insert data hasil parsing ke mysql
    $query = "INSERT INTO test_json VALUES ('$id', '$Date', '$Description', '$Unit', '$QTY')";
 
    $result = mysqli_query($conn, $query);
}
 
echo "Import Done !!";
 
// tutup koneksi
mysqli_close($conn);
?>