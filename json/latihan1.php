<?php
//$mahasiswa = [
//    [
//        "nama" => "asahi",
//        "nrp" => "23718",
//        "email" => "asahi@gmail.com"
//    ],
//    [
//        "nama" => "anya",
//        "nrp" => "54356",
//        "email" => "anya@gmail.com"
//    ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>