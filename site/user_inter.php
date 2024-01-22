<?php
include "ini.php";
?>
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<?php
include "header.php";
?>
<div class="global indent">
    <!--content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="clr2"><a href="marcacao.php">Fazer marcação</a><em></em></h2>
            </div>
            <div class="col-lg-12">
                <h2 class="clr1">As suas marcações<em></em></h2>
                <div class="col">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Serviço</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $sql = "SELECT consult_id, name, date, time, duration, price
                        from consult as c
                        INNER JOIN consultdetails as cd
                        ON c.detail_id = cd.detail_id
                        WHERE user_id = {$_SESSION["user_id"]}";

                        $listaRegistos = mysqli_query($ligacaoDB, $sql);
                        while ($value = mysqli_fetch_assoc($listaRegistos)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $value["consult_id"] ?></th>
                            <td id="Serviço<?= $value['consult_id'] ?>"><?= $value["name"] ?></td>
                            <td id="Data<?= $value['consult_id'] ?>"><?= $value["date"] ?></td>
                            <td id="Hora<?= $value['consult_id'] ?>"><?= $value["time"] ?></td>
                            <td id="Duração<?= $value['consult_id'] ?>"><?= $value["duration"] ?>min</td>
                            <td id="Preço<?= $value['consult_id'] ?>"><?= $value["price"] ?>€</td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>