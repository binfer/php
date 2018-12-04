<?php
/**
 * Created by PhpStorm.
 * User: ge
 * Date: 2018/12/3
 * Time: 下午3:45
 */

namespace app;


interface GatewayApplications
{


    public static function app(...$params);


    public function pay();


    public function switch();


    public function build();


    public function tpken();




}