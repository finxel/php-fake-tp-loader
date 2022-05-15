<?php

$req=$_GET['s'];
preg_match_all('/(.*)\/(.*)/i', $req, $matches);

$rval='';
if(empty($matches[1][0])){
    if(file_exists('./'.$req.'.php') == true){
        require_once './'.$req.'.php';
    }else{
        echo '404';
    }
}else{
    $val=$matches[2][0];
    if(file_exists('./'.$matches[1][0].'.php') == true){
        require_once './'.$matches[1][0].'.php';
    }else{
        echo '404';
    }

}



