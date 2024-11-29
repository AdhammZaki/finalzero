<?php  
define('base_url','http://localhost/final%20zero/');

function url($path = null){

 return base_url . $path ; 
}

function path($path = null){
    $location = base_url . $path;
    echo "<script>
    window.location.replace('$location')
    </script>";
}
?>