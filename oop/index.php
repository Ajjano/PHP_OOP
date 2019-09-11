<?php
    include_once 'classes.php';
    $point=new Point(100,200);
    echo  '<pre>';
    echo '<h1>';
    var_dump($point);
    echo '</h1>';
    echo  '</pre>';
    $point->Show();


    $rectangle= new Rectangle(100,200,200,150);
    $rectangle->Show();

    $rectAbs=new RectangleAbs(100,100,200,150);
    $rectAbs->Area();
    $rectAbs->Perimeter();

    $figures=[];
    $figures[]=new RectangleAbs(100,200,150,150);
    $figures[]=new CircleAbs(200,250,100);
    foreach ($figures as $figure){
        $figure->Perimeter();
        $figure->Area();
        echo '<br>';
    }
