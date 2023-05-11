<?php

function storage($path): string
{
    return asset('storage/' . $path);
}
function setting($key){
    return config('settings.'. $key);
}