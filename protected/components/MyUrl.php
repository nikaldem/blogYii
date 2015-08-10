<?php

class MyUrl extends CBaseUrlRule
{
    public function createUrl($manager,$route,$params,$ampersand)
    {
        if($route === "url/index")
        {
            return "url_custom";
        }

    }

    public function parseUrl($manager,$request,$pathInfo,$rawPathInfo)
    {
        /*print "Parse : ".$pathInfo;
        die;*/
        if($pathInfo == "url_4648")
        {
            return "url/index";
        }
    return false;
    }


}