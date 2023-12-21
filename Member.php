<?php

namespace App;

class Member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Mg Mg",
        "age" => 22,
        "school" => "Yangon"
    ];

    public function __construct(){
//        echo "This is constructor" . "<br/>";
    }
    public function getDetailInfo($data="aung aung"){
        return $this->detailInfo;
//        echo "I am testing " . $arg ."<br />";
    }

    public function setAuth($bol){
        $this->isAuth = $bol;
    }
    public function getAuth(){
        return $this->isAuth;
    }
}