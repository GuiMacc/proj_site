<?php
include "ini.php";
?>
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>  
<script src="js/bootstrap-filestyle.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
</head>
<body>
<!--header-->
<?php
include "header.php";
?>
<div class="global indent">
    <!--content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="clr2">Fazer marcação<em></em></h2>

                <?php
                $formService = $formDate = $formTime = "";
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    $formService = $_POST["service"];
                    $formDate = date('Y-m-d', strtotime($_POST["date"]));
                    $formTime = $_POST["time"];
                    $userID = $_SESSION["user_id"];

                    $uploadOk = true;

                    if ($uploadOk and $formService=="Escolha o tipo de serviço") {
                        echo "<h4>Por favor escolha um serviço</h4><br>";
                        $uploadOk = false;
                    }

                    if ($uploadOk and $formTime=="Escolha a hora") {
                        echo "<h4>Por favor escolha uma hora</h4><br>";
                        $uploadOk = false;
                    }

                    if ($uploadOk and date('Y-m-d') > $formDate) {
                        echo "<h4>Por favor introduza uma data válida, ainda não é possível fazer marcações no passado</h4><br>";
                        $uploadOk = false;
                    }

                    if ($uploadOk and date('Y-m-d') == $formDate) {
                        if (date("h:i:s") > $formTime) {
                            echo "<h4>Por favor faça a marcação para um horário futuro</h4><br>";
                            $uploadOk = false;
                        }
                    }
                    
                    if ($uploadOk) {
                        $sql = "INSERT INTO consult (user_id, detail_id, date, time)
                        VALUES ('$userID', '$formService', '$formDate', '$formTime') ";

                        $listaRegistos = mysqli_query($ligacaoDB, $sql);

                        if ($listaRegistos) {

                            echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Inserção com sucesso!</h4>
                        </div>';
                            $formNome = $formFicheiro = $formOrdem = $formActivo = "";
                        } else {
                            echo '<div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Erro na inserção. Tente novamente.</h4>
                        </div>';
                        }
                    }
                }
                ?>

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="service" class="form-label">Tipo de serviço:</label>
                        <select class="form-select" id="service" name="service">
                            <option selected>Escolha o tipo de serviço</option>
                            <option value="1">Consulta</option>
                            <option value="2">Cirurgia</option>
                            <option value="3">Estética</option>
                        </select>
                        <p>Para mais informações sobre os nossos serviços clique <a href="servicos.php" target="_blank">aqui</a>.</p>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date" class="form-label">Data:</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="time" class="form-label">Hora:</label>
                        <select class="form-select" id="time" name="time">
                            <option selected>Escolha a hora</option>
                            <option value="7:00:00">7:00</option>
                            <option value="7:30:00">7:30</option>
                            <option value="8:00:00">8:00</option>
                            <option value="8:30:00">8:30</option>
                            <option value="9:00:00">9:00</option>
                            <option value="9:30:00">9:30</option>
                            <option value="10:00:00">10:00</option>
                            <option value="10:30:00">10:30</option>
                            <option value="11:00:00">11:00</option>
                            <option value="11:30:00">11:30</option>
                            <option value="12:00:00">12:00</option>
                            <option value="12:30:00">12:30</option>
                            <option value="13:00:00">13:00</option>
                            <option value="13:30:00">13:30</option>
                            <option value="14:00:00">14:00</option>
                            <option value="14:30:00">14:30</option>
                            <option value="15:00:00">15:00</option>
                            <option value="15:30:00">15:30</option>
                            <option value="16:00:00">16:00</option>
                            <option value="16:30:00">16:30</option>
                            <option value="17:00:00">17:00</option>
                            <option value="17:30:00">17:30</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="marcar" class="btn btn-primary">Marcar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>