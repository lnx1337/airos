<?php  
if(isset($_GET['sk'])){
	if($_GET['sk']==1){
		echo "<script>alert('En breve te contestaremos');</script>";
	}
}
?>

<span class="top-title"><h2>Contáctanos</h2></span>
<article>
<p></p>
</article>
<article class="contacto col_6">



<?php 
   echo $this->renderPartial('//contacto/_form', array('model'=>$model,'modelProductos'=>$modelProductos));

 ?>

</article>

<article class="datos-empresa col_6">
<h4>Aceros Soria S.A de CV</h4>
<address>
<ul class="datos-contacto">
<li>contacto@soria.com</li>
<li>ventas@soria.com</li>
<li>facturacion@soria.com</li>
<li><i>Teléfonos</i></li>
<li>555692-1000</li>
</ul>
</address>
</article>
<div class="mapas col_12">
<span class="top-title"><h2>Sucursales</h2></span>
<span class="mapa col_12" id="matriz">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com.mx/maps/ms?ie=UTF8&amp;hq=&amp;hnear=%2B19%C2%B0+19'+53.09%22,+-99%C2%B0+3'+27.38%22&amp;gl=mx&amp;oe=UTF8&amp;msa=0&amp;msid=216460277927421474032.00049e3dbce9afbddca73&amp;dg=feature&amp;t=m&amp;z=17&amp;output=embed"></iframe>

<span class="footer-mapa">
<address>
<a href="https://www.google.com/maps/preview#!q=Av+Benito+Ju%C3%A1rez%2C+Presidentes+de+M%C3%A9xico%2C+Iztapalapa%2C+Mexico+City%2C+Mexico&data=!4m15!2m14!1m13!1s0x85ce0289843ef669%3A0x3eaf13f871c2a54d!3m8!1m3!1d2600!2d-76.9902112!3d38.8823887!3m2!1i1366!2i643!4f13.1!4m2!3d19.3321604!4d-99.0576528" target="_blank">Av. Benito Juárez # 265
 Esq. Plutarco Elias Calles
 Presidentes de México
 C.P. 09740
 Iztapalapa, DF</a>

</address>
</span>
</span>

<span class="mapa col_12" id="Iztapalapa">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Av+del+Arbol,+Consejo+Agrarista+Mexicano,+Iztapalapa,+Ciudad+de+M%C3%A9xico,+D.F.&amp;aq=0&amp;oq=Av.+del+Arbol&amp;sll=19.323458,-99.051844&amp;sspn=0.001466,0.002411&amp;gl=mx&amp;ie=UTF8&amp;hq=&amp;hnear=Av+del+Arbol,+Consejo+Agrarista+Mexicano,+Iztapalapa,+Ciudad+de+M%C3%A9xico,+D.F.&amp;ll=19.320834,-99.054082&amp;spn=0.002931,0.004823&amp;t=m&amp;z=14&amp;output=embed"></iframe>

<span class="footer-mapa">
<address>
<a href="https://www.google.com/maps/preview#!q=Av+del+arbol+agrarista&data=!4m15!2m14!1m13!1s0x85ce028ab704172b%3A0xb86b6e5d4c52457c!3m8!1m3!1d3152!2d-99.0653202!3d19.3149837!3m2!1i1366!2i643!4f13.1!4m2!3d19.3208335!4d-99.0540822" target="_blank">Av. Del Árbol Mz. 10 Lt. 21
 Col. Consejo Agrarista Mexicano
 C.P. 09760
 Iztapalapa, DF</a>
</address>
</span>
</span>

<span class="mapa col_12" id="Aeropuerto">
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=General+Francisco+Moraz%C3%A1n+(Av.+8),+Ciudad+de+M%C3%A9xico,+D.F.&amp;aq=0&amp;oq=Av.+8+&amp;sll=19.323374,-99.051951&amp;sspn=0.002931,0.004823&amp;gl=mx&amp;ie=UTF8&amp;hq=&amp;hnear=General+Francisco+Moraz%C3%A1n+(Av.+8),+Ciudad+de+M%C3%A9xico,+D.F.&amp;ll=19.412137,-99.089738&amp;spn=0.001465,0.002411&amp;t=m&amp;z=14&amp;output=embed"></iframe>

<span class="footer-mapa">
<address>
<a href="https://www.google.com/maps/preview#!q=General+Francisco+Moraz%C3%A1n+(Av.+8)%2C+Ciudad+de+M%C3%A9xico%2C+D.F.%2C+Mexico&data=!1m4!1m3!1d6301!2d-99.0885826!3d19.4125035!4m15!2m14!1m13!1s0x85d1fc17fe75a37d%3A0x951b688268da9211!3m8!1m3!1d3152!2d-99.0545418!3d19.3216335!3m2!1i1366!2i643!4f13.1!4m2!3d19.4121369!4d-99.0897375" target="_blank">
Av. 8 (Francisco Morazán) # 19
 Esq. Boulevard Puerto Aéreo
 Col. Ignacio Zaragoza
 C.P. 15000
 Venustiano Carranza, DF
</a>
</address>
</span>
</span>

</div>
