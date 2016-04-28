<?php
include("/simple_html_dom.php");


$html6 = file_get_html("http://www.eurogamer.net/games/witcher-3-wild-hunt");



foreach($html6->find('div#articles div.group') as $element6)

  echo
  
    "<h3><a href='http://www.gameseek.co.uk/pd/VideoGameshbhvcnthar/Fallout-4' target='_blank'><img src='Images/gameseek.jpg'> </img>".$element6->innertext()." </a></h3> "; 
?>