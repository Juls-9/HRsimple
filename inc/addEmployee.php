<?php

    class addEmp{

        public function addEmp($fname, $lname, $mname, $email, $bday, $hdate, $salary, $dp){

            $ae = new addEmployee($fname, $lname, $mname, $email, $bday, $hdate, $salary, $dp);

            if(empty($fname)){
                $ae->checkFname();
            }elseif(empty($lname)){
                $ae->checkLname();
            }elseif(empty($mname)){
                $ae->checkMname();
            }elseif(empty($email)){
                $ae->checkEmail();
            }elseif(empty($bday)){
                $ae->checkBday();
            }elseif(empty($hdate)){
                $ae->checkHdate();
            }elseif(empty($salary)){
                $ae->checkSalary();
            }elseif(empty($dp)){
                $ae->checkDp();
            }else{
                $ae->addEmployee();
            }
            
        }

        public function viewEmployee(){
            require_once '../class/addEmployee.php';
            $ae = new addEmployee();
            $data = $ae->getDB();

            return $data;
        }

        public function delData($id){
            
            $ae = new addEmployee();
            $data = $ae->delData($id);

        }

        public function getData($id=""){

            $ae = new addEmployee();
            $data = $ae->getData($id);

            return $data;

        }

    }