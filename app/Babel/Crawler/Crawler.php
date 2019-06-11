<?php

namespace App\Babel\Crawler;

use App\Models\ProblemModel;
use Auth;

class Crawler
{
    public $data=null;

    /**
     * Initial
     *
     * @return Response
     */
    public function __construct($conf)
    {
        $clsPath="App\\Babel\\Extension\\$name\\Crawler";
        $crawler=self::create($conf);
        if (!is_null($crawler) && isset($crawler)) $this->data=$crawler->data;
    }

    public static function create($conf) {
        $name=$conf["name"];
        $className = "App\\Babel\\Extension\\$name\\Crawler";
        if(class_exists($className)) {
            return new $className($conf);
        } else {
            return null;
        }
    }
}
