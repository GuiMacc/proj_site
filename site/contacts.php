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
<!--[if lt IE 9]>
    <div style='text-align:center' class="qwerty"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!--header-->
<?php
include "header.php";
?>
<!--content-->
<div class="global indent">
    <div class="container">
        <h2>informação de contacto<em></em></h2>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463.9061571164168!2d-7.9006597706148725!3d38.564405741914435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19e4c58a5b7561%3A0x512f4aff86fbf470!2sR.%20do%20Estoril%205%2C%207005-343%20%C3%89vora!5e0!3m2!1sen!2spt!4v1701084917343!5m2!1sen!2spt" style="border:0"></iframe>
        </div>
    </div>
    <div class="formBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="clr2">endereço<em></em></h2>
                    <div class="info">
                        <p>+ Vet<br>R. do Estoril nº5,<br>7005-482, Évora.</p>
                        <p><span>Telemóvel:</span><a href="tel:+351 987 654 321">+351 987 654 321</a></p>
                        <p><span>Telefone:</span><a href="tel:+351 213 213 213">+351 213 213 213</a></p>
                        <p>E-mail: <a href=mailto:geral@maisvet.pt>geral@maisvet.pt</a></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h2 class="clr1">entrar em contacto<em></em></h2>
                    <form id="contact-form">
                          <div class="contact-form-loader"></div>
                          <fieldset>
                            <label class="name form-div-1">
                              <input type="text" name="name" placeholder="Nome*:" value="" data-constraints="@Required @JustLetters"  />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Nome inválido.</span>
                            </label>
                            <label class="email form-div-2">
                              <input type="text" name="email" placeholder="Email*:" value="" data-constraints="@Required @Email" />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Email inválido.</span>
                            </label>
                            <label class="phone form-div-3">
                              <input type="text" name="phone" placeholder="Telefone:" value="" data-constraints="@JustNumbers" />
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*Telefone inválido.</span>
                            </label>
                            <label class="message form-div-4">
                              <textarea name="message" placeholder="Menssagem:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                              <span class="empty-message">*Campo obrigatório.</span>
                              <span class="error-message">*A mensagem é demasiado curta.</span>
                            </label>
                            <!-- <label class="recaptcha"><span class="empty-message">*Campo obrigatório</span></label> -->
                            <div>
                              <a href="#" data-type="submit" class="btn-default btn1">Enviar</a>
                              <p>* campos obrigatórios</p>
                            </div>
                          </fieldset> 
                          <div class="modal fade response-message">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                  A sua mensagem foi enviada. Entraremos em contacto em breve!
                                </div>      
                              </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>