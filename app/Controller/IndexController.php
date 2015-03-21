<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:31
 */

namespace app\Controller;
use src\Component\Response\HttpResponse;
use src\Controller\BaseController;

class IndexController extends BaseController {

    public function __construct(){
        $this->getService("Template");
    }

    public function init(){
        $response = new HttpResponse($this->template->draw("index.tpl"));
        return $response;

    }
    public function salute(){
        $this->getService("Template");
        $response = new HttpResponse($this->template->draw("index.tpl"));
        return $response;
    }
}