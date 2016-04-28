<?php
include_once("simple_html_dom.php");

//GTA - Xbox 360
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/1093573.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=136366");
$html3 = file_get_html("http://www.videogamebox.co.uk/Grand-Theft-Auto-5-V-Xbox-360-p/1087.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesu6m9qtc96x/?l-id=gb_search_grid_product_thumbnail_8");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/xbox-360/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569985.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamesu6m9qtc96x/xbox-360-grand-theft-auto-5-gta-v-");


foreach($html->find('ul.product-price-data li.price') as $element)
foreach($html2->find('ul.mint li.price') as $element2)
foreach($html3->find('div.product_productprice span') as $element3)
foreach($html4->find('div#auto_show_prime_price') as $element4)
foreach($html5->find('div.product-details span.price') as $element5)
foreach($html6->find('div.mt5 b.cost_p') as $element6)
foreach($html ->find('img') as $item) {
    $item->outertext = '';
    }
  echo
  
    "<table class='table table-striped'>
	<tr>
  	<th width='400'>
	<font face='verdana' size='4px'>GTA: V - Xbox 360</a></font>
	<img src ='Images/gta360.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/1093573.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=136366' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Grand-Theft-Auto-5-V-Xbox-360-p/1087.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesu6m9qtc96x/?l-id=gb_search_grid_product_thumbnail_8' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/xbox-360/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569985.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamesu6m9qtc96x/xbox-360-grand-theft-auto-5-gta-v-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";
	
?>