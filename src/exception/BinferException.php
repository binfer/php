<?php
/**
 * Created by PhpStorm.
 * User: ge
 * Date: 2018/12/3
 * Time: 下午4:07
 */
namespace exception;

class BinferException extends \Exception
{

    function report() {

        self::getMessage();
    }

}