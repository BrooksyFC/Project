<?php
include("simple_html_dom.php");
//Fallout 4 - Xbox One
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
	<h3><a href='http://www.game.co.uk/en/fallout-4-637087?pageSize=40&searchTerm=fallout&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-Xbox-One-p/160259900654.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()."</strong> </a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2757368/?l-id=gb_search_grid_product_thumbnail_4' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/xbox-one-games/fallout-4/11123670.html?widget_id=88166' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";

//Fallout 4 - PS4
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4506122.htm");
$html2 = file_get_html("http://www.game.co.uk/en/fallout-4-637096?pageSize=40&searchTerm=fallout&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/Fallout-4-PS4-p/20006983715476.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesjm1wfcmvu8/?l-id=gb_search_grid_product_thumbnail_2");
$html5 = file_get_html("http://www.zavvi.com/games-ps4/fallout-4/11123669.html?widget_id=88166");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGamesjm1wfcmvu8/Fallout-4");


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
	<font face='verdana' size='4px'>Fallout 4 - PS4</a></font>
	<img src ='Images/FalloutPS4.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4506122.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/fallout-4-637096?pageSize=40&searchTerm=fallout&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-PS4-p/20006983715476.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesjm1wfcmvu8/?l-id=gb_search_grid_product_thumbnail_2' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-ps4/fallout-4/11123669.html?widget_id=88166' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGamesjm1wfcmvu8/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()." </strong></a></h3> 
	</th>
	
    </tr>
	</table><br>"; 
	
//Fallout 4 - PC
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4509112.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=637099");
$html3 = file_get_html("http://www.videogamebox.co.uk/Fallout-4-PC-p/59783293657866655454.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesajhnu90sh9/?l-id=gb_shopsearch_grid_product_thumbnail_10");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/pc/fallout-4/11123671.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamesajhnu90sh9/pc-fallout-4");


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
	<font face='verdana' size='4px'>Fallout 4 - PC</a></font>
	<img src ='Images/FalloutPC.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4509112.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=637099' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Fallout-4-PC-p/59783293657866655454.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesajhnu90sh9/?l-id=gb_shopsearch_grid_product_thumbnail_10' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/pc/fallout-4/11123671.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamesajhnu90sh9/pc-fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 	

//Witcher 3 - Xbox One
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/3455645.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956804");
$html3 = file_get_html("http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-Xbox-One-p/16039.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2637140/?l-id=gb_search_grid_product_3");
$html5 = file_get_html("http://www.zavvi.com/xbox-one-games/the-witcher-3-wild-hunt/10817159.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGameshvxn1g798f/The-Witcher-3-Wild-Hunt-Day-One-Edition-");


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
	<font face='verdana' size='4px'>Witcher 3 - Xbox One</a></font>
	<img src ='Images/WitcherXbox.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/3455645.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956804' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-Xbox-One-p/16039.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2637140/?l-id=gb_search_grid_product_30' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/xbox-one-games/the-witcher-3-wild-hunt/10817159.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGameshvxn1g798f/The-Witcher-3-Wild-Hunt-Day-One-Edition-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 	
	
//Witcher 3 - PS4
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/3466799.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956801");
$html3 = file_get_html("http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-PS4-p/20020.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/bossdeals/product/50053/?l-id=gb_search_grid_product_thumbnail_6");
$html5 = file_get_html("http://www.zavvi.com/games-ps4/the-witcher-3-wild-hunt/10906885.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamess0x0mh990z/ps4-the-witcher-3-wild-hunt-day-one-edition-");


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
	<font face='verdana' size='4px'>Witcher 3 - PS4</a></font>
	<img src ='Images/WitcherPS4.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/3466799.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956801' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-PS4-p/20020.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/bossdeals/product/50053/?l-id=gb_search_grid_product_thumbnail_6' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-ps4/the-witcher-3-wild-hunt/10906885.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamess0x0mh990z/ps4-the-witcher-3-wild-hunt-day-one-edition-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 	

//Witcher 3 - PC
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4509112.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956777");
$html3 = file_get_html("http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-PC-Download-p/2500609862324583.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesx8uxxkr9bj/?l-id=gb_search_grid_product_thumbnail_5");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/pc/the-witcher-3-wild-hunt/10906884.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamesx8uxxkr9bj/pc-the-witcher-3-wild-hunt-day-one-edition-");


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
	<font face='verdana' size='4px'>Witcher 3 - PC</a></font>
	<img src ='Images/WitcherPC.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4509112.htm' target='_blank'><img src='Images/argos.png'> </img><strong>N/A</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=956777' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/The-Witcher-3-Wild-Hunt-PC-Download-p/2500609862324583.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamesx8uxxkr9bj/?l-id=gb_search_grid_product_thumbnail_5' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/pc/the-witcher-3-wild-hunt/10906884.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamesx8uxxkr9bj/pc-the-witcher-3-wild-hunt-day-one-edition-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 

//GTA - Xbox One
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/2904946.htm");
$html2 = file_get_html("http://www.game.co.uk/en/grand-theft-auto-v-301143?pageSize=40&searchTerm=gta+v&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-Xbox-One-p/16026546754765.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2759113/?l-id=gb_search_grid_product_thumbnail_1");
$html5 = file_get_html("http://www.zavvi.com/xbox-one-games/grand-theft-auto-v/10968097.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogames58m4t0mj7f/xbox-one-grand-theft-auto-5-gta-v-");


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
	<font face='verdana' size='4px'>GTA: V - Xbox One</a></font>
	<img src ='Images/gtaxbox.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/2904946.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/grand-theft-auto-v-301143?pageSize=40&searchTerm=gta+v&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-Xbox-One-p/16026546754765.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2759113/?l-id=gb_search_grid_product_thumbnail_1' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/xbox-one-games/grand-theft-auto-v/10968097.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogames58m4t0mj7f/xbox-one-grand-theft-auto-5-gta-v-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 

//GTA - PS4
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/1586451.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=301149");
$html3 = file_get_html("http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-PS4-p/200069836767665765.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2759114/?l-id=gb_search_grid_product_thumbnail_2");
$html5 = file_get_html("http://www.zavvi.com/games-ps4/grand-theft-auto-v/10968096.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogameszfneh5mthr/ps4-grand-theft-auto-5-gta-v-");


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
	<font face='verdana' size='4px'>GTA: V - PS4</a></font>
	<img src ='Images/gtaps4.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/1586451.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=301149' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Grand-Theft-Auto-V-GTA-5-PS4-p/200069836767665765.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2759114/?l-id=gb_search_grid_product_thumbnail_2' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-ps4/grand-theft-auto-v/10968096.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogameszfneh5mthr/ps4-grand-theft-auto-5-gta-v-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>"; 

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

//GTA - PS3
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/1334287.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=133341");
$html3 = file_get_html("http://www.videogamebox.co.uk/Grand-Theft-Auto-5-V-PS3-p/6287.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/galacticgames/product/NEW1158/?l-id=gb_search_grid_product_thumbnail_7");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/ps3/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569986.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogames0xs6u49gu1/ps3-grand-theft-auto-5-gta-v-");


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
	<font face='verdana' size='4px'>GTA: V - PS3</a></font>
	<img src ='Images/gtaps3.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/1334287.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=133341' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Grand-Theft-Auto-5-V-PS3-p/6287.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/galacticgames/product/NEW1158/?l-id=gb_search_grid_product_thumbnail_7' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/ps3/gta-grand-theft-auto-v-5-includes-atomic-blimp-dlc/10569986.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogames0xs6u49gu1/ps3-grand-theft-auto-5-gta-v-' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";	

//Metal Gear - Xbox One
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4125008.htm");
$html2 = file_get_html("http://www.game.co.uk/en/metal-gear-solid-v-the-phantom-pain-228447?pageSize=40&searchTerm=metal+gear+solid+5&catGroupId=");
$html3 = file_get_html("http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/16036.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2905540/?l-id=gb_search_grid_product_thumbnail_7");
$html5 = file_get_html("http://www.zavvi.com/xbox-one-games/metal-gear-solid-v-the-phantom-pain/10817164.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGames41bhpfvshn/Metal-Gear-Solid-5-The-Phantom-Pain--Standard-Edition");


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
	<font face='verdana' size='4px'>Metal Gear Solid V - Xbox One</a></font>
	<img src ='Images/MG5xboxone.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4125008.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/en/metal-gear-solid-v-the-phantom-pain-228447?pageSize=40&searchTerm=metal+gear+solid+5&catGroupId=' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/16036.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2905540/?l-id=gb_search_grid_product_thumbnail_7' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/xbox-one-games/metal-gear-solid-v-the-phantom-pain/10817164.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGames41bhpfvshn/Metal-Gear-Solid-5-The-Phantom-Pain--Standard-Edition' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";

//Metal Gear - PS4
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4181846.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=232283");
$html3 = file_get_html("http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-PS4-p/16021.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2905537/?l-id=gb_search_grid_product_thumbnail_9");
$html5 = file_get_html("http://www.zavvi.com/games-ps4/metal-gear-solid-v-the-phantom-pain/10817165.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogamesr19thy4hpq/ps4-metal-gear-solid-5-the-phantom-pain--standard-edition");


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
	<font face='verdana' size='4px'>Metal Gear Solid V - PS4</a></font>
	<img src ='Images/MG5ps4.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4181846.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=232283' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-PS4-p/16021.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2905537/?l-id=gb_search_grid_product_thumbnail_9' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games-ps4/metal-gear-solid-v-the-phantom-pain/10817165.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogamesr19thy4hpq/ps4-metal-gear-solid-5-the-phantom-pain--standard-edition' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";

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

//Metal Gear - Xbox 360
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4120546.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=502937");
$html3 = file_get_html("http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/20058329312314354.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/gameseek/product/VideoGamess8bfggnb7v/?l-id=gb_search_grid_product_thumbnail_4");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/xbox-360/metal-gear-solid-v-the-phantom-pain-day-one-edition/10792308.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/VideoGames4hcfhp8guy/Metal-Gear-Solid-5-The-Phantom-Pain--Standard-Edition");


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
	<font face='verdana' size='4px'>Metal Gear Solid V - Xbox 360</a></font>
	<img src ='Images/MG5360.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4120546.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=502937' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/20058329312314354.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/gameseek/product/VideoGamess8bfggnb7v/?l-id=gb_search_grid_product_thumbnail_4' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/xbox-360/metal-gear-solid-v-the-phantom-pain-day-one-edition/10792308.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/VideoGames4hcfhp8guy/Metal-Gear-Solid-5-The-Phantom-Pain--Standard-Edition' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";

//Metal Gear - PS3
$html = file_get_html("http://www.argos.co.uk/static/Product/partNumber/4185158.htm");
$html2 = file_get_html("http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=504113");
$html3 = file_get_html("http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/16132324589764165.htm");
$html4 = file_get_html("http://www.rakuten.co.uk/shop/basecom/product/2614939/?l-id=gb_search_grid_product_thumbnail_4");
$html5 = file_get_html("http://www.zavvi.com/games/platforms/ps3/metal-gear-solid-v-the-phantom-pain-day-one-edition/10792309.html");
$html6 = file_get_html("http://www.gameseek.co.uk/pd/videogames29ymn6pqv2/ps3-metal-gear-solid-5-the-phantom-pain--standard-edition");


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
	<font face='verdana' size='4px'>Metal Gear Solid V - PS3</a></font>
	<img src ='Images/MG5ps3.jpg'></img>
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.argos.co.uk/static/Product/partNumber/4185158.htm' target='_blank'><img src='Images/argos.png'> </img><strong>".$element->innertext()."</strong></a></h3><br> 
	<h3><a href='http://www.game.co.uk/webapp/wcs/stores/servlet/Product2_10151_10201__44____ProductDisplayErrorView?productId=504113' target='_blank'><img src='Images/Game-logo.jpg'> </img><strong>".$element2->innertext()." </strong></a></h3> <br>
	<h3><a href='http://www.videogamebox.co.uk/Metal-Gear-Solid-V-The-Phantom-Pain-p/16132324589764165.htm' target='_blank'><img src='Images/videogamebox.png'> </img><strong>".$element3->innertext()." </strong></a></h3> 
	</th>
	
	<th width='620'>
	<br>
	<h3><a href='http://www.rakuten.co.uk/shop/basecom/product/2614939/?l-id=gb_search_grid_product_thumbnail_4' target='_blank'><img src='Images/rakuten.jpg'> </img><strong>".$element4->innertext()."</strong></a></h3><br> <br>
	<h3><a href='http://www.zavvi.com/games/platforms/ps3/metal-gear-solid-v-the-phantom-pain-day-one-edition/10792309.html' target='_blank'><img src='Images/zavvi_logo.png'> </img><strong>".$element5->innertext()."</strong> </a></h3> <br>
	<h3><a href='http://www.gameseek.co.uk/pd/videogames29ymn6pqv2/ps3-metal-gear-solid-5-the-phantom-pain--standard-edition' target='_blank'><img src='Images/gameseek.jpg'> </img><strong>".$element6->innertext()."</strong> </a></h3> 
	</th>
	
    </tr>
	</table><br>";

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