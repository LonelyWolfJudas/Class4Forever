<?php
function get($arg) {
    return $_GET[$arg] ? $_GET[$arg] : FALSE ;
}
function post($arg) {
    return $_POST[$arg] ? $_POST[$arg] : FALSE ;
}
function cookie($arg) {
    return $_COOKIE[$arg] ? $_COOKIE[$arg] : FALSE ;
}
function session($arg) {
    return $_SESSION[$arg] ? $_SESSION[$arg] : FALSE ;
}
function request($arg) {
    return $_REQUEST[$arg] ? $_REQUEST[$arg] : FALSE ;
}
?>