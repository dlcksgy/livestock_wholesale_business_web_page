<?php
require_once("../conf.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>phpChart - Chart with Missing Values</title>
    </head>
    <body>
        <div><span> </span><span id="info1b"></span></div>


<?php
    


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 1 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $s1 = array(23, 53, 13, null, 18, 25, 26, 41, 42, null, null, null, 37, 29, 27, 19);
    
    $pc = new C_PhpChartX(array($s1),'chart1');
    $pc->add_plugins(array('barRenderer','categoryAxisRenderer'),true);
    $pc->set_title(array('text'=>'Default Line, ignore nulls'));
    
    $pc->draw(500,300);    
/*    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 1b Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $s1 = array(23, 53, 13, null, 18, 25, 26, 41, 42, null, null, null, 37, 29, 27, 19);
    
    $pc = new C_PhpChartX(array($s1),'chart1b');
    $pc->add_plugins(array('barRenderer','categoryAxisRenderer'),true);
    $pc->set_title(array('text'=>'breakOnNull true, Nulls Break Line'));
    $pc->add_series(array('breakOnNull'=>true));
    $pc->draw(500,300);    
        
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 2 Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array(array(array(1,2), array(2,null), array(3,7), array(4,10))),'chart2');
    $pc->add_plugins(array('barRenderer','categoryAxisRenderer'),true);
    $pc->set_capture_right_click(true);
    $pc->set_series_default(array('renderer'=>'plugin::BarRenderer'));
    $pc->set_axes(array(
        'xaxis'=>array('renderer'=>'plugin::CategoryAxisRenderer')
        ));
    $pc->draw(500,300);    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Chart 2b Example
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $pc = new C_PhpChartX(array(array(array(1,2), array(2,null), array(3,7), array(4,10))),'chart2b');
    $pc->add_plugins(array('barRenderer','categoryAxisRenderer'),true);
    $pc->set_capture_right_click(true);
    $pc->set_series_default(array('renderer'=>'plugin::BarRenderer','breakOnNull'=>true));
    $pc->set_axes(array(
        'xaxis'=>array('renderer'=>'plugin::CategoryAxisRenderer')
        ));
    $pc->draw(500,300);    

*/

?>

    </body>
</html>