<?php

namespace app\Controller;

use src\Controller\BaseController;
use src\Component\Response\HttpResponse;
use src\Component\Response\JsonResponse;


class HelloController extends BaseController {


    public function __construct(){
        $this->getService("Template");
    }
    public function init(){
        $response = new HttpResponse($this->template->draw("Hello/hello_no_method.tpl"));
        return $response;

    }
    public function salute($param){
        $response = new HttpResponse($this->template->draw("Hello/hello.smarty.tpl", "param", $param));
        return $response;
    }

    public function jsonSalute($param){
        $response = new JsonResponse($param);
        return $response;
    }

}