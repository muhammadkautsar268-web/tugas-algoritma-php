<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program Menghitung Nilai Rata-Rata Mahasiswa</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, sans-serif;
}

body{
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    min-height:100vh;
    padding:40px;
}

.container{
    max-width:900px;
    margin:auto;
}

.judul{
    text-align:center;
    color:white;
    margin-bottom:30px;
}

.judul h1{
    font-size:35px;
}

.judul p{
    margin-top:10px;
    opacity:.9;
}

.card{
    background:white;
    border-radius:15px;
    padding:20px;
    margin-bottom:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.2);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

table{
    width:100%;
    border-collapse:collapse;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

.label{
    font-weight:bold;
    width:170px;
}

.grade{
    color:white;
    padding:5px 15px;
    border-radius:20px;
    font-weight:bold;
}

.A{
    background:#16a34a;
}

.B{
    background:#2563eb;
}

.C{
    background:#f59e0b;
}

.D{
    background:#dc2626;
}

.footer{
    text-align:center;
    color:white;
    margin-top:30px;
}
</style>

</head>
<body>

<div class="container">

<div class="judul">
<h1>📚 Program Menghitung Nilai Rata-Rata Mahasiswa</h1>
<p>Tugas Praktikum Algoritma dan Pemrograman</p>
</div>

<?php

//==========================================
// Program Menghitung Nilai Rata-Rata Mahasiswa
//==========================================

// Fungsi menghitung rata-rata
function hitungRata($nilai){
    return array_sum($nilai) / count($nilai);
}

// Data mahasiswa (2 orang)
$mahasiswa = [
    "Andi" => [85, 90, 88],
    "Budi" => [78, 82, 80]
];

// Menampilkan data mahasiswa
foreach($mahasiswa as $nama => $nilai){

    $rata = hitungRata($nilai);

    // Menentukan grade
    if($rata >= 85){
        $grade = "A";
    }elseif($rata >= 75){
        $grade = "B";
    }elseif($rata >= 65){
        $grade = "C";
    }else{
        $grade = "D";
    }

?>

<div class="card">

<h2 style="color:#1e3c72; margin-bottom:15px;">
👨‍🎓 <?= $nama ?>
</h2>

<table>

<tr>
<td class="label">Nilai</td>
<td><?= implode(", ", $nilai); ?></td>
</tr>

<tr>
<td class="label">Rata-rata</td>
<td><?= number_format($rata,2); ?></td>
</tr>

<tr>
<td class="label">Grade</td>
<td><span class="grade <?= $grade ?>"><?= $grade ?></span></td>
</tr>

</table>

</div>

<?php } ?>

<div class="footer">
<hr style="margin-bottom:15px;">
<p><strong>Nama:</strong> Kautsar Muhammad</p>
<p><strong>Mata Kuliah:</strong> Algoritma dan Pemrograman</p>
</div>

</div>

</body>
</html>