<!-- Navigation bar starts -->
          <div class="navbar-back">
                <ul class="nav-back">

                  <li class="group">
                    <h3>Sesión</h3>
                    <ul>
                   <li class="home"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin">Inicio</a></li>
                   <li class="salir"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout">Salir</a></li>
                 </ul>
               </li>
                   
                   
                   <li class="group">
                      <h3>Administrar Productos</h3>
                      <ul>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/create">Nuevo Producto</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/admin">Consultar Productos</a></li>
                      </ul>
                   </li>                   
                   <li  class="group">
                      <h3>Administrar Líneas</h3>
                      <ul>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lineas/create">Nueva Línea (Categoría)</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lineas/admin">Consultar Lineas</a></li>
                      </ul>
                   </li>

                   <li class="group">
                    <h3>Administrar Secciones</h3>
                    <ul>
                   <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/nosotros">Adm. Nosotros</a></li>
                   <li><a href="#">Adm. Slider</a>
                    </ul>
                    </li>
                 </ul>


         </div>

