<?php
$Write = "<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&display=swap" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <title>Home : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
</head>

<body>
    <div class="homepages">
        <div class="homepages__title">
            <h1>Selamat Datang</h1>
            <p>Sistem Informasi Pelayanan Kesehatan</p>
        </div>
        <div class="homepages__navbar">
            <div class="navbar__menu">
                <ul>
                    <li>
                        <a class="overlay" href="home.php"><span class="texts">Home</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="registration.php"><span class="texts">Registration</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="read tag.php"><span class="texts">Read Tag ID</span></a>
                    </li>
                    <li>
                        <a class="overlay" href="service.php"><span class="texts">Service</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="homepages__main">
            <h1>Puskesmas Teknologi Rekayasa Internet</h1>
            <div class="container">
                <div class="card">
                    <div class="card__satu">
                        <a href="service.php">
                            <img src="./img/poli umum.svg">
                            <p>POLI UMUM</p>
                        </a>
                        <div class="bullet margin-top-3">
                            <a href="service.php">
                                <span>A</span>
                            </a>
                        </div>
                    </div>
                    <div class="card__satu">
                        <a href="service.php">
                            <img src="./img/poli gigi.svg">
                            <p>POLI GIGI</p>
                        </a>
                        <div class="bullet margin-top-3">
                            <a href="service.php">
                                <span>B</span>
                            </a>
                        </div>
                    </div>
                    <div class="card__satu">
                        <a href="service.php">
                            <img src="./img/poli kia.svg">
                            <p>POLI KIA</p>
                        </a>
                        <div class="bullet margin-top">
                            <a href="service.php">
                                <span>C</span>
                            </a>
                        </div>
                    </div>
                    <div class="card__satu">
                        <a href="service.php">
                            <img src="./img/poli gizi.svg">
                            <p>POLI GIZI</p>
                        </a>
                        <div class="bullet margin-top">
                            <a href="service.php">
                                <span>D</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>