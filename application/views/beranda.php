<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="slide.css">
    <link rel="stylesheet" type="text/css" href="css/imageSize.css">


    <title>Disaster Care</title>
  </head>
<body>
	<div class="container-fluid" style="background-color: black"><br></div>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		  <a class="navbar-brand" href="beranda.html" style="font-family: sans-serif;">Disaster Care</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">BERANDA<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#kontak">KONTAK</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">TENTANG</a>
		      </li>
		    </ul>
		    </form>
		  </div>
		</nav>

	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <script>
    $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
    </script>
    <table><tr><td></td></tr></table>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:530px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="gambar/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:530px;overflow:hidden;">
            <div data-p="225.00">
                <img data-u="image" src="gambar/gunung.jpg" />
                <div data-u="caption" data-t="0" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                </div>
            </div>
            <div data-p="225.00">
                <img data-u="image" src="gambar/gempas.jpg" />
            </div>
            <div data-p="225.00">
                <img data-u="image" src="gambar/tsunami.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        </div>
    </div><br>
    <div class="container">
    	<p style="font-family: Impact, Charcoal, sans-serif; text-align: center;"> BERI DONASI TERBAIKMU </p>
    </div>

<div class="container-fluid" style="background-color: #F8F8FF">
      <div class="row">
        <div class="col">
          <div class="text-center">
            <table class="table table-hover">
              <tbody>
              <tr>
                <td>
                  <a href="#"><img src="gambar/baju.png" class="image-size" alt="Error load image"></a>
                  <h3>PAKAIAN</h3>
                </td>
              </tr> 
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="text-center">
            <table class="table table-hover">
              <tbody>
              <tr>
                <td>
                <a href="#"><img src="gambar/makanan.png" class="image-size" alt="..."></a>
                <H3>MAKANAN</H3>
                </td>
              </tr> 
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="text-center">
            <table class="table table-hover">
              <tbody>
              <tr>
                <td>
                <a href="#">
                <img src="gambar/obat.png" class="image-size" alt="Error load image"></a>
                <H3>OBAT - OBATAN</H3>
                </td>
              </tr> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background-color:#F8F8FF">
        <blockquote class="blockquote text-center">
          <p class="mb-0">“Allah senantiasa menolong seorang hamba selama hamba itu menolong saudaranya”</p>
          <footer class="blockquote-footer">[HR Muslim: 2699]</footer>
        </blockquote>
    </div>

    <div class="container-fluid">
    	<div class="row">
    	<div class="col-1"></div>
    	<div class="card col" style="width: 800px;">
		  <div class="card-body">
		    <h5 class="card-title">Apa itu Disaster Care?</h5>
		    <p style="text-align: justify;">Disaster Care adalah sebuah sistem informasi yang hadir mencoba untuk menjadi solusi penanganan pasca bencana alam. Yang menekankan pertolongan dalam hal kebutuhan logistik, obat - obatan, dan tenaga medis yang dibutuhkan oleh para pengungsi yang didukung oleh Sistem Pengambilan Keputusan.</p>
		  </div>
		</div>
		<div class="col-1"></div>
		<div class="card col" style="width: 500px;">
		  <div class="card-body" id="kontak">
		    <h5 class="card-title">KONTAK</h5>
		    <p style="text-align: justify;">Didesain dan di kembangkan oleh YOUTH CORP.<br>Teknik Informatika<br>Fakultas Teknologi Industri<br>Universitas Islam Indonesia</p>
		  </div>
		</div>
		<div class="col-1"></div>
    	</div>
    </div><br>
    <div class="container-fluid" style="background-color: black; height: 40px;">
    	<div class="row">	
        	<div class="col-md-12">
        		<p style="text-align: center; color: white; font-family: arial; font-size: 12px">Copyright &copy; : Youth Project, 2018. Indonesia</p>
        	</div>
    	</div>
    </div>

    
    <script src="jQuery/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>