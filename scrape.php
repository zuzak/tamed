<?php
mb_internal_encoding("UTF-8"); 

function truncatebefore($haystack,$needle) {
   $return = substr($haystack,strpos($haystack,$needle));
   return $return;
}
function truncateafter($haystack,$needle) {
   $return = substr($haystack,0,strpos($haystack,$needle));
   return $return;
}
$site = file_get_contents("http://www.aber.ac.uk/en/hospitality/hospitality-menu");

$content = truncatebefore($site,'<h2>');

$content = explode("<h2>",$content);

//var_dump($content[1]);

$counter = 1;
while ($counter != count($content)) {
   $curr = $content[$counter];
   $time = truncatebefore($content[$counter],"</h2>");
   $time = truncateafter($curr,"</h2>");
   
//   var_dump($curr);
   
   $stripped = truncateafter($curr,"</thead>");
   $counter++;
   
   $dates = explode("<th>",$stripped);
   $foo = array_shift($dates);
   $datecount = 0;
   while ($datecount != count($dates)){
      $dates[$datecount] = truncatebefore($dates[$datecount],"</strong>");
      $dates[$datecount] = trim(strip_tags($dates[$datecount]));
      $datecount++;
   }
   
   
   $dishes = explode("<tr>",$curr);

   $foo = array_shift($dishes);
   $foo = array_shift($dishes);
   
   $dishcount = 0;
   while ($dishcount != count($dishes)) {
      $dishes[$dishcount] = explode("<td>",$dishes[$dishcount]);
      $dishcount++;
   }
   
   $c = 0;
   while ($c != count($dishes)){
      $d = 1;
      $currdish = trim(strip_tags($dishes[$c][0]));
      while ($d != count($dishes[$c])){
         $currdate = $dates[$d];
         $menu[$currdate][$time][$currdish] = trim(strip_tags($dishes[$c][$d]));
         $d++;
      }
      $c++;
   }
}
//   var_dump($dates);
 //  var_dump($dishes);
var_dump($menu);
//var_dump($content);
?>
