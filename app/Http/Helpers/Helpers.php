<?php

#Formate Date 
function formateDate($date)
{
    return date('F  j, Y', strtotime($date)); //for time add  g: i a
}

#shortend textx display
function shortText($text, $char = 150)
{
    $text = $text . " ";
    $text = substr($text, 0, $char);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . "...";
    return $text;
}
