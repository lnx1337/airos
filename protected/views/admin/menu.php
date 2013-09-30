
<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="logo">
          <h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"></h1>
          <div class="hmeta"></div>
        </div>
      </div>
      <div class="span12"><h3>PANEL DE ADMINISTRACIÓN</h3></div>
    </div>
  </div>
</header>

<!-- Navigation bar starts -->
          <div class="navbar">
           <div class="navbar-inner">
             <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span>Menu</span>
               </a>
               <div class="nav-collapse collapse">
                <ul class="nav">
                   <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin">Inicio</a></li>
                   
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Productos<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/create">Nuevo Producto</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/admin">Consultar Productos</a></li>
                      </ul>
                   </li>                   
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Líneas<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lineas/create">Nueva Línea (Categoría)</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lineas/admin">Consultar Lineas</a></li>
                      </ul>
                   </li>
                   <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/inicio">Adm. Inicio</a></li>
                   <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/nosotros">Adm. Nosotros</a></li>
                   <li><a href="#">Adm. Slider</a></li>
                   <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout">Salir</a></li>
                 </ul>
               </div>
              </div>
           </div>
         </div>

<!-- Navigation bar ends -->