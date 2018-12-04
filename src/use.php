<?php /** @noinspection ALL */

/**
 * Created by PhpStorm.
 * User: ge
 * Date: 2018/12/3
 * Time: 上午9:34
 */

namespace src;



use exception\BinferException;
use app\GatewayApplications;

class Useings
{

    const App = 'app';
    protected $config;

    /**
     * binfer constructor.
     * @param array $config
     */
    protected function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param $method
     * @param $arguments
     * @return GateWayApplicationInterface
     * @throws \ErrorException
     */
    public static function __callStatic($method, $arguments) : GatewayApplications {

            $app = new self(...$arguments);
            return $app->make($method,$arguments);
    }


    /**
     * @param $method
     * @return GateWayApplicationInterface
     * @throws \ErrorException
     */
    public function make($method) : GatewayApplications{

        $gateway = self::App."\\{$method}";

        if (class_exists($gateway)) {

            $app =  call_user_func_array([$gateway, "app"], $param);

            try {

                if ($app instanceof \app\GatewayApplications) {
                    return $app;
                }

            } catch (BinferException $e)
            {}
        }

        throw
        new BinferException("not found class : {$gateway}");

    }


}

