<?php

function getPicture($images) {
    if(!$images || count($images) == 0) {
        return "https: //via.placeholder.com/175x175";
    }
    if(isset($images[1])) {
        return $images[1]->url;
    }
    if(isset($images[0])) {
        return $images[0]->url;
    }
    return "https: //via.placeholder.com/175x175";
}