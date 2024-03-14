<?php

session_start();
error_reporting(0);
class TRAP {
    private $username = "admin";
    private $passwd = "password";
    private $getusername;
    private $getpasswd;
    private $msgcode = 0;
    function _construct($u, $p){

        $this->getusername = $u;
        $this->getpasswd = $p;
    }
    private function auth(){
        if($this->username == $this->getusername){if($this->passwd == $this->getpasswd){
            //success auth
            $this->msgcode = 1;
            $_SESSION['username'] = $this->getusername;}else{
                //passw not match
                $this->msgcode = 21;
            }
        }else{
            //username not match
            $this->msgcode = 31;
        }
    return $this->msgcode;
    }
    public function call(){
        switch($this->auth()){
            case 1:
                header("Location:/data/");
                break;
                case 21:
                    header("Location:index.php?msg=21");
                    break;
                    case 31:
                        header("Location:index.php?msg=31");
                        default:
                        header("Location:index.php");
        }
    }
    }
if(isset($_post['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    //echo $user, $pass;
    $obj = new TRAP($user,$pass);
    $obj->call();
}else{
    header("Location:index.php");
}

?>