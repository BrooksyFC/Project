<?php
include_once("simple_html_dom.php");

//GTA - PC
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/3792982.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=301157");
$html3 = file_get_html("http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-PC-p/59783293657866.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesycs65a12qv/?l-id=gb_search_grid_product_10");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/pc/grand-theft-auto-v/10569987.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamesycs65a12qv/pc-grand-theft-auto-5-gta-v-");


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
	<font face='verdana' size='4px'>GTA: V - PC</a></font>
	<img src ='Images/gtapc.png'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/3792982.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=301157' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-PC-p/59783293657866.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesycs65a12qv/?l-id=gb_search_grid_product_10' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/pc/grand-theft-auto-v/10569987.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamesycs65a12qv/pc-grand-theft-auto-5-gta-v-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 
?>