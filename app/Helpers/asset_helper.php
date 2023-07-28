<?php 

/**
 * Get the url of your assets 
 * 
 * @param string $path, must in assets dir
 * @return string 
 */
function asset($path){
    return base_url().'assets/'.$path;
}