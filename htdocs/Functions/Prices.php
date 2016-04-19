<?php
include("simple_html_dom.php");

$html = file_get_html("http://www.amazon.co.uk/gp/product/B00KIMBVMQ/ref=s9_simh_gw_p63_d27_i1?pf_rd_m=A3P5ROKL5A1OLE&pf_rd_s=desktop-2&pf_rd_r=0H9M8ATAG5X41XGD2KDH&pf_rd_t=36701&pf_rd_p=867551827&pf_rd_i=desktop");
$html2 = file_get_html("http://www.game.co.uk/en/fallout-4-637087?pageSize=40&searchTerm=fallout&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/Fallout-4-Xbox-One-p/160259900654.htm");
$html4 = file_get_html("http://www.thegamecollection.net/fallout-4-ps4.html");
$html5 = file_get_html("http://www.base.com/buy/product/fallout-4-xbox-one/dgc-fallout4xbox.htm");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4");


foreach($html->find('span#priceblock_ourprice') as $element)
foreach($html2->find('ul.mint li.price') as $element2)
foreach($html3->find('div.product_productprice span') as $element3)
foreach($html4->find('li#item_14391 div.price-box') as $element4)
foreach($html5->find('div.price-info span.price') as $element5)
foreach($html6->find('div.mt5 b.cost_p') as $element6)


  echo
  
    "<table class='table table-striped'>
	<tr>
  	<th>
	<img src ='Images/Fallout_4_box_cover.jpg' height='230'></img>
	</th>
	
	<th width='620'>
	<h3><a href='http://www.amazon.co.uk/Bethesda-200120162-Fallout-4-Xbox-One/dp/B00KIMBVMQ/ref=sr_1_1_twi_gam_4?ie=UTF8&qid=1460043931&sr=8-1&keywords=fallout' target='_blank'><img src='Images/amazon-logo.png'> </img>".$element->innertext()."</a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/fallout-4-637087?pageSize=40&searchTerm=fallout&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img>".$element2->innertext()." </a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-Xbox-One-p/160259900654.htm' target='_blank'><img src='Images/videogamebox.png'> </img>".$element3->innertext()." </a></h3> 
	</th>
	
	<th width='620'>
	<h3><a href='http://www.thegamecollection.net/fallout-4-ps4.html' target='_blank'><img src='Images/logo_tgc-2013.png'> </img>".$element4->innertext()."</a></h3><br> 
	<h3><a href='http://www.base.com/buy/product/fallout-4-xbox-one/dgc-fallout4xbox.htm' target='_blank'><img src='Images/base.png'> </img>".$element5->innertext()." </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img>".$element6->innertext()." </a></h3> 
	</th>
	
    </tr>
	</table>"; 
?>