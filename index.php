<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nama_lengkap = "Ahmad Rizky Febianto";
        $instansi = "Universitas Jember";
        $prodi = "Teknologi Informasi";
    ?>
    <div id="gambar">
        <center><img src="gambar.png" alt="gambar.jpg" width="200" height="200"></center>
    </div>
    <div class="container">
                <p class="welcome">Welcome.</p>
                <h1>Perkenalkan nama saya <?php echo $nama_lengkap?>. <br> saya dari <?php echo $instansi?>, Prodi <?php echo $prodi?></h1>
                <p>Kegiatan saya sekarang mengikuti kegiatan pembelejaran Full Stack Web Development di PT Gits Indonesia. <br> Hobi saya yaitu bermain Game (Valorant). Rencana kedepannya saya mau menjadi Ultraman:D</p>
    </div>
</body>
</html>