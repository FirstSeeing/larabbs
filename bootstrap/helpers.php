<?php
/**
 * @Author: Marte
 * @Date:   2018-07-22 14:01:50
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-07-27 21:12:12
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}