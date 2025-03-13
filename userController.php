<?php

require "userModele.php";


class userController{
    public function showUser(){
    $elUser = new UserModele();
    $bolls = $elUser-> getAllUser();
    require "userView.phtml";
    }
}