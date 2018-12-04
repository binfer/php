<?php
/**
 * Created by PhpStorm.
 * User: ge
 * Date: 2018/12/3
 * Time: 下午3:18
 */

namespace app;

class Factory implements  GatewayApplications {


    protected static $apps;

    private $config;



    private function __construct(array $config)
    {
        $this->config = $config;
    }


    public static function app(...$args)
    {

            if (is_null(self::$apps)) {
                self::$apps = new self($args);
            }
            return self::$apps;

    }

    public function pay()
    {
       echo 21; die;
    }


    public function switch()
    {
        // TODO: Implement switch() method.
    }

    public function build()
    {
        // TODO: Implement build() method.
    }

    public function tpken()
    {
        // TODO: Implement tpken() method.
    }
}