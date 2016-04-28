<?php
include_once("simple_html_dom.php");

$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4489263.htm");
$html2 = file_get_html("http://www.game.co.uk/en/fallout-4-637087?pageSize=40&searchTerm=fallout&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/Fallout-4-Xbox-One-p/160259900654.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2757368/?l-id=gb_search_grid_product_thumbnail_4");
$html5 = file_get_html("http://www.zavvi.com/xbox-one-games/fallout-4/11123670.html?widget_id=88166");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4");


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
  	<th width='300'>
	<font face='verdana' size='4px'>Fallout 4 - Xbox One</a></font>
	<img src ='Images/FalloutXbox.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4489263.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/fallout-4-637087?pageSize=40&searchTerm=fallout&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img>".$element2->innertext()." </a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-Xbox-One-p/160259900654.htm' target='_blank'><img src='Images/videogamebox.png'> </img>".$element3->innertext()." </a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2757368/?l-id=gb_search_grid_product_thumbnail_4' target='_blank'><img src='Images/rakuten.jpg'> </img>".$element4->innertext()."</a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/xbox-one-games/fallout-4/11123670.html?widget_id=88166' target='_blank'><img src='Images/zavvi_logo.png'> </img>".$element5->innertext()." </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img>".$element6->innertext()." </a></h3> 
	</th>
	
    </tr>
	</table>";
	
?>