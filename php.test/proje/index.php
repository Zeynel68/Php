<?php
$kurs1_baslik = "Php Kursu";
$kurs1_altBaslik = "Sıfırdan ileri seviye Php ile web geliştirme";
$kurs1_resim = "img/php.jpg";
$kurs_yayinTarihi = "01.01.2024";
$kurs1_yorumSayisi = "100";
$kurs1_begeniSayisi = "300";


$kurs2_baslik = "Python Kursu";
$kurs2_altBaslik = "Sıfırdan ileri seviye Python programlama";
$kurs2_resim = "img/python.jpg";
$kurs2_yayinTarihi = "05.03.2024";
$kurs2_yorumSayisi = "200";
$kurs2_begeniSayisi = "400";


$kurs3_baslik = "Node.js Kursu";
$kurs3_altBaslik = "Sıfırdan ileri seviye Node.js ile web geliştirme";
$kurs3_resim = "img/node.jpg";
$kurs3_yayinTarihi = "09.08.2024";
$kurs3_yorumSayisi = "300";
$kurs3_begeniSayisi = "500";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs1_altBaslik; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni : <?php echo $kurs1_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum : <?php echo $kurs1_yorumSayisi ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik; ?></p>
                    </div>
                </div>
            </div>


        </div>





        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik; ?></p>
                    </div>
                </div>
            </div>


        </div>


    </div>
    </div>
</body>

</html>