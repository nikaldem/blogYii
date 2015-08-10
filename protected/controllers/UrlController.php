<?php

class UrlController extends Controller
{
    public function actionIndex()
    {
        print "Url Controller";

    }

    public function actionCreateurl()
    {
        print $this->createUrl("url/index/id/1111");

    }



}