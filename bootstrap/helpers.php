<?php
/**
 * @Author: Marte
 * @Date:   2018-07-22 14:01:50
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-07-22 15:00:18
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}