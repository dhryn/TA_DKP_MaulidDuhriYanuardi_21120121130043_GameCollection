<?php
class userService
{
    public $username;
    public $dataUser;

    public function __construct($username) 
    {
        $this->_dataUser = [
            (object) [
                'username'  => "iyan",
                'password'  => "123",
            ]
        ];
       $this->username = $username;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if($user) {
            return $get_data = $user->username;
        } else {
            return false;
        }
    }

    public function checkCredentials()
    {
        foreach($this->_dataUser as $key => $value) {
            if($value->username == $this->username) {
                return $value;
            }
        }
        return false;
    }
}
