<?php
include_once("simple_html_dom.php");

//Zelda - 3DS
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/3798838.htm");
$html2 = file_get_html("http://www.game.co.uk/en/the-legend-of-zelda-majoras-mask-3d-318705?pageSize=40&searchTerm=zelda&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/The-Legend-of-Zelda-Majora-s-Mask-3D-3DS-p/2013065467566534.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesnmb7hb1hah/?l-id=gb_search_grid_product_thumbnail_2");
$html5 = file_get_html("http://www.zavvi.com/games-3ds/the-legend-of-zelda-majora-s-mask-3d/11038491.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGamesnmb7hb1hah/The-Legend-of-Zelda-Majoras-Mask-3D");


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
	<font face='verdana' size='4px'>Zelda: Majora's Mask 3DS</a></font>
	<img src ='Images/zelda3ds.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/3798838.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/the-legend-of-zelda-majoras-mask-3d-318705?pageSize=40&searchTerm=zelda&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/The-Legend-of-Zelda-Majora-s-Mask-3D-3DS-p/2013065467566534.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesnmb7hb1hah/?l-id=gb_search_grid_product_thumbnail_2' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-3ds/the-legend-of-zelda-majora-s-mask-3d/11038491.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGamesnmb7hb1hah/The-Legend-of-Zelda-Majoras-Mask-3D' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";	
	
?>