
<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="logo">
          <h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png"</a></h1>
          <div class="hmeta"><div style="font-size:1.1em;">Telefono: 55 5692 1000</div>
        </div>
      </div>
      <div class="span4"> </div>
      </div>
    </div>
  </div>
</header>
<div class="content">
  <div class="container"> 
    
    <!-- Services starts -->
    <div class="row">    
    <div class="services">
        <div class="span6">
          <div class="col-l">
          <?php echo CHtml::link('<div class="service"><div class="b-gray serv-block"> <i class="icon-home"></i><h3>Inicio</h3></div></div>', array('site/index')); ?>
          </div>
          <div class="col-r">
          <?php echo CHtml::link('<div class="service"><div class="b-gray serv-block"> <i class="icon-briefcase"></i><h3>Nosotros</h3></div></div>', array('site/Nosotros')); ?>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="span6">
          <div class="col-l">
            <div class="service">
              <a href="https://twitter.com/acerossoria"><div class="b-gray serv-block-half"><i class="icon-twitter"></i>
                <h4>Twitter</h4>
              </div></a>
              <a href="https://www.facebook.com/acerossoria"><div class="b-gray serv-block-half"><i class="icon-facebook"></i>
                <h4>Facebook</h4>
              </div></a>
              <a href="https://plus.google.com/b/114038653456290361525/114038653456290361525"><div class="b-gray serv-block-half"><i class="icon-google-plus"></i>
                <h4>Google</h4>
              </div></a>
            </div>
          </div>
          <div class="col-r">
            <?php echo CHtml::link('<div class="service"><div class="b-gray serv-block"> <i class="icon-envelope"></i><h3>Contacto</h3></div></div>', array('site/Contacto')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- Services Ends --> 
  
  <!-- Hero Unit -->
  <div class="clearfix"></div>
  <div class="container">
    <hr />
    <div class="row products">
      <div class="span12"> 
        
        <!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. --> 
        <!--<div class="button">
            <ul id="filters">
              <li><a href="portfolio.html#" data-filter="*">Todos</a></li>
              <li><a href="portfolio.html#" data-filter=".one">Categoría 1</a></li>
              <li><a href="portfolio.html#" data-filter=".two">Categoría 2</a></li>
              <li><a href="portfolio.html#" data-filter=".three">Categoría 3</a></li>
              <li><a href="portfolio.html#" data-filter=".four">Categoría 4</a></li>
              <li><a href="portfolio.html#" data-filter=".five">Categoría 5</a></li>
            </ul>
          </div>-->
        <h2>Nuestras Categorías:</h2>
        <div class="clearfix"></div>
        <div class="busqueda-full">

        <form  id="searchform" action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Lineas" method="GET" class="form-search">
            <input type="text" value="" name="Lineas[s]" id="s" class="input-xxlarge"/>
            <button type="submit" id="search-lineas" class="btn">Buscar</button>
       </form>
      

      </div>

       <div id="resultado">         
  			<?php $this->widget('zii.widgets.CListView', array(
  				'dataProvider'=>$dataProvider,
  				'itemView'=>'_view',
  				'ajaxUpdate'=>false,

  			)); ?>
       </div>

			
       


      </div>
    </div>
    <div class="border"></div>
  </div>
  
  
  </div>
  <hr />
  <div class="border"></div>
  
  <!-- Product & links starts --> 


