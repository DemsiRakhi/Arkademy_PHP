<?php
include "koneksi.php";

$sql = "INSERT INTO user
(
    id,
    nama,
    role,
    availability,
    age,
    location,
    years_expereience,
    email
) VALUE
(
    '1',
    'Token',
    'Student',
    'Full time',
    '15',
    'Malang',
    '2',
    'bostoken10@gmail.com'
)
";
if($koneksi->query($sql)==TRUE){
    echo "Insert data telah berhasil";
}
else{
    echo "Insert data gagal";
}
