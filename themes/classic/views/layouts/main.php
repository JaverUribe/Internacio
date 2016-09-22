<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?>

     
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl;?>/ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Internacionalización</a>

      <div class="nav-collapse collapse pull-right">
      <ul class="nav">
          <li class=""><a href="#"></a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
          <li><a href=""></a></li>
      </ul>

        <?php $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            
        array('label'=>'Home', 'url'=>array('/site/index')),
        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Contact', 'url'=>array('/site/contact')),
        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
      ),
    )); ?>


  
      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
      'links'=>$this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
  <?php endif?>


<?php echo $content;?>

  
<footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
                <section>
                    <h4><span>Contact Us</span></h4>
                    <p>Francedith Bentancur Atehortúa(Jefa OCRI)<br>
                        Tel:(057)4-384-9729 <br>
                        Medellin Colombia<br>
                        <strong>phone:</strong> <a href="tel:123456789" class="tele">123456789</a><br>
                        <strong>fax:</strong>  +57 (4)3849797 <br>
                        <span class="overflow"><strong>email:</strong> <a href=
                </section>
                <!--close section-->

                <section>
                    <h4><span>Follow Us</span></h4>
                    <div class="social">
                      <a href="#"><i class="icon-facebook facebook"></i></a>
                      <a href="#"><i class="icon-twitter twitter"></i></a>
                      <a href="#"><i class="icon-linkedin linkedin"></i></a>
                      <a href="#"><i class="icon-google-plus google-plus"></i></a>
                    </div>
                </section>
                <!--close section-->
            </div>
            <!-- close .span3 -->

            <!--section containing newsletter signup and recent images-->
            <div class="span5">
                <section>
                    <h4><span>Stay Updated</span></h4>
                    <p>Mantente al tanto de las últimas notiicias </p>
                        <form action="#" method="post">
                    <div class="input-append append-fix custom-append row-fluid">
                      <input type="email" class="span8" placeholder="Email Address" name="email">
                            <button class="btn btn-primary">Sign Up</button>

                    </div></form>
                    <!--close input-append-->
                </section>
                <!--close section-->
            </div>
            <!-- close .span5 -->

            <!--section containing blog posts-->
            <div class="span4">
                <section>
                    <h4><span>About Us</span></h4>
                    <p>
                      Implementar y ejecutar proyectos y acciones que permitan el proceso de internacionalización de la Funlam, de modo que se genere un intercambio de experiencias en las dimensiones pedagógicas, investigativas, formativas y de cooperación para el desarrollo concretizada en: generación de cultura interna, movilidad de la comunidad amigoniana, análisis del currículo y fomento de productos y servicios de formación desde y para la Institución y formalización de convenios para el desarrollo de proyectos.

                      

 
                    </p>
                </section>
            </div>
            <!-- close .span4 -->
        </div>
        <!-- close .row-fluid-->
    </div>
    <!-- close footer .container-->
</footer>


 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2016 FUNLAM. All rights reserved.</li>
            <li><a href="#">Un servicio de la Oficina de Comunicaciones y R.R.P.P.</a></li>
            
        </ul>
    </div>
    <!--close footer-credits container-->
</section>


  </body>
</html>
