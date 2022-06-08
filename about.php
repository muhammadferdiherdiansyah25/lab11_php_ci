<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
        <img src="MFERDIH2.jpeg" title="MFERDIH" alt="MFERDIH" class="image-circle" width="190" style="float: left; border: 2px solid black;">
            <h1>Hallo!</h1>
            <p align="justify">Nama saya Muhammad Ferdi Herdiansyah . 
                Saya adalah seorang mahasiswa Fakultas Teknik <i>Teknik Informatika</i>  <i>Universitas Pelita Bangsa</i> yang saat ini sedang mempelajari PHP Framework ( codeigniter) <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>