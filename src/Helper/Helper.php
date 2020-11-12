<?php

namespace gulgulia17\goback\Helper;

use Illuminate\Support\Facades\URL;

class Helper
{
    public static function routeName()
    {
        return request()->route()->getName();
    }

    public static function routeNameArray()
    {
        if (!static::routeName()) {
            return null;
        }
        return explode('.', static::routeName());
    }

    /**
     * This function will simply return a anchor tag with previous page URL
     * and if you pass false it will just return the URL as string.
     * This function support bootstrap only for now.
     * @param bool $button Pass false if you don't need a button.
     * @return string Back Button
     */

    public static function goBack($button = true)
    {
        $routeNameArray = static::routeNameArray();
        $previousURL = URL::previous();

        if (!$previousURL) {
            return null;
        }

        if (!$routeNameArray) {
            return null;
        }

        $routNameArrayCount = count($routeNameArray);

        if ($routNameArrayCount <= 1) {
            return null;
        }

        if ($routeNameArray[$routNameArrayCount - 1] == 'index') {
            return route('home');
        }

        if (!$button) {
            return $previousURL;
        }
        return  "<a href='{$previousURL}' class='btn btn-default'>
                    <i class='fa fa-arrow-left' aria-hidden='true'></i>
                </a>";
    }
}
