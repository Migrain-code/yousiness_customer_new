<?php

function storage($path): string
{
    return asset('storage/' . $path);
}
function setting($key){
    return config('settings.'. $key);
}
function main($key){
    return config('main_pages.'. $key);
}
function image($path){
    return env('REMOTE_URL').'/'.$path;
}