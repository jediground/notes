<?php // content="text/plain; charset=utf-8"
require_once ('Examples/jpgraph/jpgraph.php');
require_once ('Examples/jpgraph/jpgraph_pie.php');

$data = array(120,140,500);

$graph = new PieGraph(300,300);
$graph->SetShadow();

$graph->Set3DPerspective(SKEW3D_UP,500,600,true); 

//倾斜3D效果
//   1. 'SKEW3D_UP'
//   2. 'SKEW3D_DOWN'
//   3. 'SKEW3D_LEFT'
//   4. 'SKEW3D_RIGHT' 

//$graph->SetColor('red'); //设置背景
$graph->SetBackgroundImage("742088da5a71fd1b33fa1ccf.jpg",1); //设置背景
$graph->img->SetMargin(0,0,0,0); // 空余四角边距（左右上下）



$graph->title->Set("PHP100视频教程");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,24);

$graph->title->SetColor('blue');
$graph->SetColor('yellow');

//$graph->title->SetFont(FF_SIMSUN,FS_BOLD); //设置字体，类型，大小

//$graph->title->SetColor('red'); //设置字体颜色

//$graph->title->SetFont(FF_SIMSUN,FS_BOLD); // 设置标题中文字体 
//$graph->legend->SetFont(FF_SIMSUN,FS_BOLD); //设置线条指示字体
//$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);//设置Y轴线条指示字体
//$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);//设置X轴线条指示字体




$p1 = new PiePlot($data);
$p1->SetTheme("sand");
$p1->SetCenter(0.5,0.55);
$p1->value->Show(true);
$graph->Add($p1);
$graph->Stroke();

?>


