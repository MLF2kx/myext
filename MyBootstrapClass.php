<?php

namespace mmshlrfsh\myext;

use Yii;
use yii\base\BootstrapInterface;
use yii\base\Application;

class MyBootstrapClass implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->on(Applicatioon::EVENT_BEFORE_REQUEST, function() {
            // do something here
        });
    }
}
