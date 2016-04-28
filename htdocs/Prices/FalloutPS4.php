<?php
include_once("simple_html_dom.php");

$html7 = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4506122.htm");
$html8 = file_get_html("http://www.game.co.uk/en/fallout-4-637096?pageSize=40&searchTerm=fallout&catGroupId=");
$html9 = file_get_html("http://www.videogamebox.co.uk/Fallout-4-PS4-p/20006983715476.htm");
$html10 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesjm1wfcmvu8/?l-id=gb_search_grid_product_thumbnail_2");
$html11 = file_get_html("http://www.zavvi.com/games-ps4/fallout-4/11123669.html?widget_id=88166");
$html12 = file_get_html("http://www.gameseek.co.uk/pd/VideoGamesjm1wfcmvu8/Fallout-4");


foreach($html7->find('ul.product-price-data li.price') as $element7)
foreach($html8->find('ul.mint li.price') as $element8)
foreach($html9->find('div.product_productprice span') as $element9)
foreach($html10->find('div#auto_show_prime_price') as $element10)
foreach($html11->find('div.product-details span.price') as $element11)
foreach($html12->find('div.mt5 b.cost_p') as $element12)
foreach($html ->find('img') as $item) {
    $item->outertext = '';
    }
  echo
  
    "<table class='table table-striped'>
	<tr>
  	<th width='300'>
	<font face='verdana' size='4px'>Fallout 4 - PlayStation 4</a></font>
	<img src ='Images/FalloutPS4.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4506122.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element7->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/fallout-4-637096?pageSize=40&searchTerm=fallout&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img>".$element8->innertext()." </a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-PS4-p/20006983715476.htm' target='_blank'><img src='Images/videogamebox.png'> </img>".$element9->innertext()." </a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesjm1wfcmvu8/?l-id=gb_search_grid_product_thumbnail_2' target='_blank'><img src='Images/rakuten.jpg'> </img>".$element10->innertext()."</a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-ps4/fallout-4/11123669.html?widget_id=88166' target='_blank'><img src='Images/zavvi_logo.png'> </img>".$element11->innertext()." </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGamesjm1wfcmvu8/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img>".$element12->innertext()." </a></h3> 
	</th>
	
    </tr>
	</table>"; 
?>