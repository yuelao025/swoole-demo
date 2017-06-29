<?php
/**
 * Created by PhpStorm.
 * User: YF
 * Date: 2017/2/8
 * Time: 11:51
 */

namespace App\Controller;


use Core\AbstractInterface\AbstractController;
use Core\Swoole\SwooleHttpServer;
use Core\Swoole\Timer;

class Index extends AbstractController
{
    function index()
    {
//        echo 111;

        // TODO: Implement index() method.
//        $this->response()->withHeader("Content-type","text/html;charset=utf-8");
        $this->response()->write('</h1><p>欢迎使用<b> easySwoole</b></p><br/></div>');

        Timer::loop(100,function (){
//            echo 'dididi';


        });
        /*  url:domain/index.html  domain/   domain  */
    }

    function onRequest($actionName)
    {
        // TODO: Implement onRequest() method.
    }

    function actionNotFount($actionName = null, $arguments = null)
    {
        // TODO: Implement actionNotFount() method.
    }

    function afterResponse()
    {
        // TODO: Implement afterResponse() method.
    }
    function test(){
        $this->response()->write("this is index dd");/*  url:domain/test/index.html  domain/test/   domain/test  */
    }
    function shutdown(){
        SwooleHttpServer::getInstance()->getServer()->shutdown();
    }

}