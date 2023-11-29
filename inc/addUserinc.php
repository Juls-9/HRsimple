<?php

    class userControll{

        public function addUser($user, $password, $userType){

            $userm = new addUser();
            $userm->addUsers($user, $password, $userType);

        }

        public function checkUser($user, $pass){
            $us = new addUser();
            $us->logUser($user,$pass);

            
        }

}