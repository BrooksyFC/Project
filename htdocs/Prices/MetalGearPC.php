<?php
include_once("simple_html_dom.php");

//Metal Gear - PC
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/1334287.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=756121");
$html3 = file_get_html("http://www.videogamebox.co.uk/Metal-Gear-Solid-V-Phantom-Pain-PC-Download-p/25006098623245836544.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/galacticgames/product/NEW1158/?l-id=gb_search_grid_product_thumbnail_7");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/ps3/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569986.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGames3ng9hj7h3v/Metal-Gear-Solid-5-The-Phantom-Pain");


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
	<font face='verdana' size='4px'>Metal Gear Solid V - PC</a></font>
	<img src ='Images/MG5pc.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/1334287.htm' target='_blank'><img src='Images/argos.png'> </img><strong>N/A</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=756121' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Metal-Gear-Solid-V-Phantom-Pain-PC-Download-p/25006098623245836544.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/galacticgames/product/NEW1158/?l-id=gb_search_grid_product_thumbnail_7' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>N/A</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/ps3/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569986.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>N/A</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGames3ng9hj7h3v/Metal-Gear-Solid-5-The-Phantom-Pain' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";	
	
?>