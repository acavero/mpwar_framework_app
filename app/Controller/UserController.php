<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 19/03/15
 * Time: 15:11
 */

namespace app\Controller;

use src\Component\Persistance\SqlComponent;
use src\Component\Response\HttpResponse;
use src\Controller\BaseController;

class UserController extends BaseController{
    private $databaseConfiguration;
    private $database;

    public function __construct(){
        $this->databaseConfiguration = ($GLOBALS["databaseConfiguration"]);
        $this->database = new SqlComponent(
            $this->databaseConfiguration["DB_DRIVER"],
            $this->databaseConfiguration["DB_HOST"],
            $this->databaseConfiguration["DB_NAME"],
            $this->databaseConfiguration["DB_USER"],
            $this->databaseConfiguration["DB_PASS"]);
        $this->getService("Template");

    }

    public function init()
    {
        $response = new HttpResponse($this->template->draw("Users/userController.tpl"));
        return $response;
    }

    public function findAll(){
        $allUsers = $this->database->selectAll("user");
        $response = new HttpResponse($this->template->draw("Users/findAll.smarty.tpl", "user" , $allUsers));
        return $response;
    }

    public function findUserByName($username){
        if($this->isUsernameEmpty($username)){
            return $response = new HttpResponse($this->template->draw("Users/find_no_user.tpl"));
        }
        $user = $username[0];
        try{
            $result = $this->database->find("firstname", "user", "firstname", $user);
            if($this->isUsernameEmpty($result)){
                return $response = new HttpResponse($this->template->draw("Users/user_not_found.tpl"));
            }
        }catch (\Exception $e){
            $e->getMessage();
        }
        return $response = new HttpResponse($this->template->draw("Users/user_found.tpl"));

    }

    public function insertUser($username){
        if($this->isUsernameEmpty($username)){
            return $response = new HttpResponse($this->template->draw("Users/insert_no_user.tpl"));
        }
        $userToInsert = array("firstname" => $username[0], "lastname" => $username[1]);
        if(is_null($userToInsert["lastname"])){
            $userToInsert = array("firstname" => $username[0], "lastname" => " ");
        }
        try{
        $this->database->insert("user", $userToInsert);
            return $response = new HttpResponse($this->template->draw("Users/inserted.tpl"));
        }catch (\Exception $e){
            return $response = new HttpResponse($this->template->draw("Users/user_not_inserted.tpl"));
        }
    }
    public function isUsernameEmpty($username){

        return(empty($username));
    }

    public function deleteUserByName($username){
        if($this->isUsernameEmpty($username)){
            return $response = new HttpResponse($this->template->draw("Users/delete_no_user.tpl"));
        }
        $name = $username[0];
        try{
            $this->database->delete("user", $name, "firstname");
        }catch (\Exception $e){
            $e->getMessage();
        }
        return $response = new HttpResponse($this->template->draw("Users/deleted.tpl"));

    }




}