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
<script>
   $(window).load(function() {
     // Initialize the gallery
    $('.thumb-pad1 figure a').touchTouch();
  });
</script>

<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<script>
    const myCarouselElement = document.querySelector('#myCarousel')
    
    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 7000,
        touch: false
    } )
</script>
<script>	
    $(window).load( function(){	
        
        //isotope
        var $container = $('#container');
            //Run to initialise column sizes
            updateSize();
        
            //Load masonry when images all loaded
            $container.imagesLoaded( function(){
        
                $container.isotope({
                    // options
                    itemSelector : '.element',	
                    layoutMode : 'masonry',
                    transformsEnabled: true,
                    columnWidth: function( containerWidth ) {
                        containerWidth = $browserWidth;
                        return Math.floor(containerWidth / $cols);
                      }
                });
            });
            
        	    // update columnWidth on window resize
            $(window).smartresize(function(){  
                updateSize();
                $container.isotope( 'reLayout' );
            });
        	
            //Set item size
            function updateSize() {
                $browserWidth = $container.width();
                $cols = 4;
        
                if ($browserWidth >= 1170) {
                    $cols = 4;
                }
                else if ($browserWidth >= 767 && $browserWidth < 1170) {
                    $cols = 3;
                }
                else if ($browserWidth >= 480 && $browserWidth < 767) {
                    $cols = 2;
                }
                else if ($browserWidth >= 220 && $browserWidth < 480) {
                    $cols = 1;
                }
                //console.log("Browser width is:" + $browserWidth);
                //console.log("Cols is:" + $cols);
        
                // $gutterTotal = $cols * 20;
        		$browserWidth = $browserWidth; // - $gutterTotal;
                $itemWidth = $browserWidth / $cols;
                $itemWidth = Math.floor($itemWidth);
        
                $(".element").each(function(index){
                    $(this).css({"width":$itemWidth+"px"});             
                });
        			
        
            
        	  var $optionSets = $('#options .option-set'),
        	      $optionLinks = $optionSets.find('a');
        
        	  $optionLinks.click(function(){
        	    var $this = $(this);
        	    // don't proceed if already selected
        	    if ( $this.hasClass('selected') ) {
        	      return false;
        	    }
        	    var $optionSet = $this.parents('.option-set');
        	    $optionSet.find('.selected').removeClass('selected');
        	    $this.addClass('selected');
        
        	    // make option object dynamically, i.e. { filter: '.my-filter-class' }
        	    var options = {},
        	        key = $optionSet.attr('data-option-key'),
        	        value = $this.attr('data-option-value');
        	    // parse 'false' as false boolean
        	    value = value === 'false' ? false : value;
        	    options[ key ] = value;
        	    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        	      // changes in layout modes need extra logic
        	      changeLayoutMode( $this, options )
        	    } else {
        	      // otherwise, apply new options
        	      $container.isotope( options );
        	    }
        	    
        	    return false;
        	  });		
        
            };
    });
</script> 
<!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
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
<div class="global">
    <div class="bg_pic">
        <div class="wow fadeInUp">
            <p class="title">Onde</p> <p class="title1">a saúde</p> <p class="title">do seu</p> <p class="title2">animal</p> <br><p class="title">de estimação</p> <p class="title2">é a</p> <p class="title">nossa</p> <p class="title1">prioridade</p>
            <p class="description">Cuidando dos seus melhores amigos</p>
        </div>
    </div>
    <!--content-->
    <div class="container">
        <div class="row">
            <div class="extra-wrap">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeIn">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><img src="img/carr_main.jpg" alt=""></figure>
                            <div class="caption">
                                <p>Oferecemos o melhos cuidado</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeIn">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><img src="img/carr_rumi.jpg" alt=""></figure>
                            <div class="caption">
                                <p>Para todos os animais</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeIn">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><img src="img/carr_est.jpg" alt=""></figure>
                            <div class="caption">
                                <p>Estética faz parte dos nossos serviços</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeIn">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><img src="img/carr_more.jpg" alt=""></figure>
                            <div class="caption">
                                <p>Venha conhecer a nossa equipa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="banner-box">
                <div class="col-lg-8 col-md-7 col-sm-8 wow fadeInLeft" data-wow-duration="0.4s">
                    <div>
                        <p class="title">Serviços Médicos, Cirurgicos e de Estética</p>
                        <p class="description">Com opções para equinos, ruminantes e suinos</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 wow fadeInLeft" data-wow-duration="0.2s">
                    <figure><img src="img/banner_me.jpg" alt=""></figure>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 media-box">
                <h2 class="clr3">A +VET<em></em></h2>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <h4>
                            A +Vet iniciou a sua actividade em 1998, com prestação de serviços nas áreas da clínica de animais de companhia e clínica de espécies pecuárias
                            nos concelhos de Évora, Arraiolos, Montemor-o-Novo e Viana do Alentejo
                        </h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="img/clin_comp.png" alt="animal companhia"></td>
                                    <td>&nbsp &nbsp &nbsp &nbsp &nbsp</td>
                                    <td><img src="img/clin_pec.png" alt="animal pecuário"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <h3><b>Marcações<b></h3>
                        <p>Para fazer marcaçõe é necessário fazer log in e aceder à sua área de utilizador.
                        <br>Para mais infromações sobre os serviços, aceda à nossa página de <a href="servicos.php" target="_blank">serviços</a>.
                        <br>É de notar que apesar de apresentarmos os preços de cada serviço ainda não existe a possibilidade de realizar pagamento na plataforma.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<?php
include "footer.php";
?>