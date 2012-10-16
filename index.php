<?php $lang = "en"; require "scrape.php"; $tz = "Lunch"; $date = date("d/m/Y",time()+(24*60*60)); ?><!DOCTYPE html>
   <html>
      <head>
         <title>Tamed</title>
         <meta http-equic="Content-Type" content="text/html;   charset=utf-8">
         <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css">
      </head>
      <body>
	<!--
	<?php var_dump($menu); ?>
	-->
         <h1>Tamed Da (<?php echo $date; ?>)</h1>
         <h2>Opening times</h2>
         <div id="opening-times">
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">&nbsp;</div>
               <div class="calendar-cell calendar-header">Breakfast</div>
               <div class="calendar-cell calendar-header">Lunch</div>
               <div class="calendar-cell calendar-header">Dinner</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Monday</div>
               <div class="calendar-cell">8am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell">4:30pm &ndash; 7:30pm</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Tuesday</div>
               <div class="calendar-cell">8am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell">4:30pm &ndash; 7:30pm</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Wednesday</div>
               <div class="calendar-cell">8am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell">4:30pm &ndash; 7:30pm</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Thursday</div>
               <div class="calendar-cell">8am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell">4:30pm &ndash; 7:30pm</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Friday</div>
               <div class="calendar-cell">8am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell">4:30pm &ndash; 7:30pm</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Saturday</div>
               <div class="calendar-cell calendar-highlight">9am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell calendar-null">&mdash;</div>
            </div>
            <div class="calendar-column">
               <div class="calendar-cell calendar-header">Sunday</div>
               <div class="calendar-cell">10am &ndash; 11:30am</div>
               <div class="calendar-cell">12noon &ndash; 2pm</div>
               <div class="calendar-cell calendar-null">&mdash;</div>
            </div>
         </div>
         <h2>Menu</h2>
         <div id="menu">
            <div class="mains">
               <div class="menu-main menuitem"><span><?php echo $menu[$date][$tz][0]; ?></span></div>
               <div class="menu-main menuitem"><span><?php echo $menu[$date][$tz][1]; ?></span></div>
               <div class="menu-veggie menuitem"><span><?php echo $menu[$date][$tz][3]; ?></span></div>
               <div class="menu-veggie menuitem"><span><?php echo $menu[$date][$tz][4]; ?></span></div>
               <!-- <div class="menu-theatre menuitem"><span><?php echo $menu[$date][$tz][5]; ?></span></div> -->
            </div>
            <div class="sides">
                  <?php
                  $iteration = 0;
                  $potato = explode(",",$menu[$date][$tz][6]);
                  
                  while ($iteration != count($potato)) {
                     echo '<div class="menu-potato">'.ucfirst(trim($potato[$iteration])).'</div>';
                     $iteration++;
                  }
                  
                  $iteration = 0;
                  $veg = explode(",",$menu[$date][$tz][7]);
                  
                  while ($iteration != count($veg)) {
                     echo '<div class="menu-veg">'.ucfirst(trim($veg[$iteration])).'</div>';
                     $iteration++;
                  }
                  ?>
               </div>
            </div>
         </div>
      </body>
   </html>
