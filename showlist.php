<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

/* $datay1=array(13,8,19,7,17);
$datay2=array(15,5,2,7,5); */

session_start();
$datay1=$_SESSION["datay1"];
$datay2=$_SESSION['datay2'];

/* echo "<pre>";
var_dump($datay1);
echo "<hr/>";
var_dump($datay11); */
// Create the graph.
$graph = new Graph(350,250);
$graph->SetScale('textlin');
$graph->SetMarginColor('white');

// Setup title
$graph->title->Set('telangpu and xilali');

// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
$bplot->SetColor('darkred');

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);
$bplot2->SetColor('darkgreen');

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$graph->Add($accbplot);

$graph->Stroke();
?>
