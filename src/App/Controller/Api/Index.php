<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/3/15
 * Time: 下午8:21
 */

namespace App\Controller\Api;


use App\Model\Test;
use Cake\I18n\Time;
use Core\AbstractInterface\AbstractController;
use Core\Http\Message\UploadFile;
use Swoole\Timer;
use function ZendTest\Code\Reflection\TestAsset\function1;

class Index extends AbstractController
{

    function index()
    {

//       $obj =  new Test();
//       $info = $obj->modelTest();
        // TODO: Implement index() method.
//        $this->response()->write("this is api index");/*  url:domain/api/index.html  domain/api/  */
//        $this->response()->write($info);

        Timer::tick(500,function(){
            $obj =  new Test();
            $info = $obj->modelTest();
            var_dump($info);
        });
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
        $file = $this->request()->getUploadedFile("a");
        if($file instanceof UploadFile){
            $file->moveTo(ROOT."/Temp/a.json");
        }
    }
}