<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class BladeHelper
{
    public static function extimatedReadTime($content){
        $content = strip_tags($content);
        $word_count = str_word_count($content);
        $word_per_minite = 250;
        $time = ceil( $word_count / $word_per_minite );
        if($time == 1)
            return $time.' min read';
        else
            return $time.' mins read';
    }

    public static function formatBytes($bytes, $precision = 2) { 
        $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1); 

        // Uncomment one of the following alternatives
        // $bytes /= pow(1024, $pow);
        $bytes /= (1 << (10 * $pow)); 

        return round($bytes, $precision) . ' ' . $units[$pow]; 
    } 
}