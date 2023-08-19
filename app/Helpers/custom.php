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
function userInfo(){
    $user = auth('customer')->user();
    return $user;
}
function clearPhone($phoneNumber){
    $phoneNumber = str_replace([' ', '(', ')', '-'], '', $phoneNumber);
    if (strlen($phoneNumber) === 10) {
        return $formattedPhoneNumber = $phoneNumber;
    } elseif (strlen($phoneNumber) === 11) {
        return $formattedPhoneNumber = substr($phoneNumber, 1);
    } else {
        return $phoneNumber;
    }
}