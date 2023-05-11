<?php

function storage($path): string
{
    return asset('storage/' . $path);
}
function setting($key){
    return config('settings.'. $key);
}
function image($path){
    return env('REMOTE_URL').'/'.$path;
}