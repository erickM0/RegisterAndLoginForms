<?php

$actionsMapObject = array(
'Entrar' => 'login',
'Cadastrar' => 'register',
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $action = $_POST["submit"];

   if(array_key_exists($action, $actionsMapObject)){
    $actionsMapObject[$action]($_POST);
   }
    


}

class validateForm{

    private function validateUsername($username){
        $regex = '/^[a-zA-Z0-9@&_-]{6,32}$/';
        return preg_match($regex,$username);
    }

    private function validatePassword($password){
        $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[|!@#$%&*_.?-])([a-zA-Z0-9|!@#$%&*_.?-]{8,64})$/';
        return preg_match($regex,$password);
    }

    private function validateEmail($email){
        $regex = '/^[a-z0-9&_.-]+@[a-z0-9.-]+\.[a-z]{2,}(\.[a-z]{2,})?$/';
        return preg_match($regex,$email);        
    }

    public function validateLogin($params){
        $response = '';
        if(self::validateEmail($params['username'])||self::validateUsername($params['username'])){
            if(self::validatePassword($params['password'])){
                $response = 'ok';
            }else{
                $response = 'password error';
            }
        }else{
            $response = 'username error';
        }
        return $response;
    }

}



function login($params){
    $validate = new validateForm;
    echo $validate->validateLogin($params);
}

?>