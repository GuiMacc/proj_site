<?php
include "ini.php";
?>
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
   $(window).load(function() {
     // Initialize the gallery
    $('.thumb-pad1 figure a').touchTouch();
  });
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
                $cols = 3;
        
                if ($browserWidth >= 1170) {
                    $cols = 3;
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
<div class="global indent">
    <!--content-->
    <div class="izotopeBox indent">
        <div class="container">
            <div id="options" class="clearfix">
              <ul id="filters" class="pagination pagination2 option-set clearfix" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">mostrar tudo</a></li>
                    <li><a href="#filter" data-option-value=".first_category">animais de companhia</a></li>
                    <li><a href="#filter" data-option-value=".second_category">espécies pecuárias</a></li>
                    <li><a href="#filter" data-option-value=".third_category">instalações</a></li>
                    <li class="tr"><em></em></li>
              </ul>
            </div>
            <div class="izotope-box">
                <div id="container" class="clearfix">
                    <div class="element transition second_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/equino.png"><em></em><img src="img/gal/equino_thumb.png" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition first_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/animais_companhia_3.jpg"><em></em><img src="img/gal/animais_companhia_3_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition third_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/instal_2.jpg"><em></em><img src="img/gal/instal_2_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    
                    <div class="element transition first_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/animais_companhia_5.jpg"><em></em><img src="img/gal/animais_companhia_5_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition third_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/instal_3.jpg"><em></em><img src="img/gal/instal_3_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition second_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/ruminantes.jpg"><em></em><img src="img/gal/ruminantes_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    
                    <div class="element transition first_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/animais_companhia_1.jpg"><em></em><img src="img/gal/animais_companhia_1_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition third_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/instal_1.jpg"><em></em><img src="img/gal/instal_1_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition first_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/animais_companhia_2.jpg"><em></em><img src="img/gal/animais_companhia_2_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>

                    <div class="element transition first_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/animais_companhia_4.jpg"><em></em><img src="img/gal/animais_companhia_4_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition second_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/suinos.jpg"><em></em><img src="img/gal/suinos_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="element transition third_category" data-category="transition">
                        <div class="thumb-pad1 clr1 ">
                            <div class="thumbnail">
                                <figure><a href="img/gal/instal_4.jpg"><em></em><img src="img/gal/instal_4_thumb.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>