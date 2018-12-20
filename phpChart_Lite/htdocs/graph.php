

<?php
require_once("../phpGrid_Lite/conf.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
          <style type="text/css" media="screen">
            .jqplot-axis {
              font-size: 0.85em;
            }
            .jqplot-title {
              font-size: 1.1em;
            }
          </style>
    </head>
    <body>
        <div><span> </span><span id="info1b"></span></div>



<?php



    
$l1 = array(2, 3, 1, 4, 3);
$l2 = array(1, 4, 3, 2, 5);
$pc = new C_PhpChartX(array($l2),'chart2');
 
$pc->set_title(array('text'=>'Default Filled Line Plot'));
$pc->set_animate(true);
$pc->set_series_default(array('fill'=>true));
$pc->set_axes(array('xaxis'=>array('pad'=>1.0)));

$pc->draw(360,300);
?>