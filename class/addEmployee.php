<?php 

    require_once 'connection.php';

    class addEmployee extends dbh{

        private $fname;
        private $lname;
        private $mname;
        private $email;
        private $bday;
        private $hdate;
        private $salary;
        private $dp;

        public function __construct($fname="", $lname="", $mname="", $email="", $bday="", $hdate="", $salary="", $dp="")
        {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->mname = $mname;
            $this->email = $email;
            $this->bday = $bday;
            $this->hdate = $hdate;
            $this->salary = $salary;
            $this->dp = $dp;
        }
        //ADD EMPLOYEE
        public function addEmployee(){
            session_start();
            $sql = "INSERT INTO employee_tbl(firstname, lastname, middlename, email, password, hire_date, salary, department) VALUES('$this->fname','$this->lname', '$this->mname', '$this->email', '$this->bday', '$this->hdate', '$this->salary','$this->dp')";

            $result = null;

            try {
                mysqli_query($this->connect(),$sql);
                $result = true;
            } catch (mysqli_sql_exception) {
                //throw $th;
            }

            if($result){
                $_SESSION["sccs"] = "Added successfully!";

            header("location:view/addEmployee.php#popup");
            }    
        }
        //VIEW EMPLOYEE TABLE
        public function getDB(){

            $sql = "SELECT * FROM employee_tbl";
            
                $res = mysqli_query($this->connect(),$sql);

                while($rows = mysqli_fetch_assoc($res)){
                    $data[] = $rows;
                }
                return $data;
        }

        //GET DATA TO UPDATE
        public function getData($id){
            
            $sql = "SELECT * FROM employee_tbl WHERE id='$id'";

            $result = mysqli_query($this->connect(),$sql);
            
                while($rows = mysqli_fetch_assoc($result)){
                    return $rows;
                    
                }

        }

        //DELETE DATA FROM DATABASE
        public function delData($id){
            $sql = "DELETE FROM employee_tbl WHERE id='$id'";

            mysqli_query($this->connect(),$sql);
            header("location:view/addEmployee.php");
        }

        public function checkFname(){
            session_start(); 
            $_SESSION["err"] = "fill up Firstname please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkLname(){
            session_start(); 
            $_SESSION["err"] = "fill up Lastname please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkMname(){
            session_start(); 
            $_SESSION["err"] = "fill up Middlename please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkEmail(){
            session_start(); 
            $_SESSION["err"] = "fill up Email please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkBday(){ 
            session_start();
            $_SESSION["err"] = "fill up Bday please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkHdate(){
            session_start(); 
            $_SESSION["err"] = "fill up Hire Date please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkSalary(){
            session_start(); 
            $_SESSION["err"] = "fill up Salary please";
            header("location:view/addEmployee.php#popup");
        }

        public function checkDp(){ 
            session_start();
            $_SESSION["err"] = "fill up Department please";
            header("location:view/addEmployee.php#popup");
        }
    }