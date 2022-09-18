<?php

function cutString($string, $limit)
{
    $string = trim($string);
    $string = strip_tags($string);
    $size = strlen($string);
    $result = '';
    if($size <= $limit){
        $result = $string;
    }else{
        $string 	= substr($string, 0, $limit);
        $word 		= explode(' ', $string);
        $result 	= implode(' ', $word);
        $result 	.= '...';
    }   
    return $result;
}

function getYoutubeDefault($url, $base)
{
    return 'https://www.youtube.com/embed/'.str_replace($base,'',$url);
}