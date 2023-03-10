<?php
 //define class
 class User {

    private $con;

    //constructor for connection
    function __construct(){
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","employee_list");

       $this->con =  mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

       

       if (!$this->con) {
        echo "database not connected successfully";
       } 
       
    }
      //data insert
    public function send($data){
        $name = $data['name'];
        $fname = $data['fatherName'];
        $email = $data['email'];
        $phone = $data['phone'];
        $address = $data['address'];
        $salary = $data['salary'];
        
        


        $query = "INSERT INTO `information`(`name`,`fatherName`,`email`,`phone`,`address`,`salary`) VALUES ('$name','$fname','$email','$phone','$address','$salary')";
        $fire = mysqli_query($this->con , $query );

        if($fire){

          header("Location: index.php"); //redirect
        }

        if(!$fire){
          echo "data not inserted";
        }
    }


        //data show
        public function show(){
          return  $data = mysqli_query( $this->con , "SELECT*FROM `information`");
        }

        //delete
        public function delete_user($sl){
          

          $query = "DELETE FROM `information` WHERE `sl` = $sl "  ;
          $fire = mysqli_query( $this->con , $query);


          if ($fire) {
            header("Location: index.php");
          }
        }

        //edit user

        public function edit_user($sl){
          //echo $usl;
          $query = "SELECT * FROM `information` WHERE `sl`= '$sl'";

           return mysqli_query( $this->con , $query );
        }

        //update user

        public function update_user($data){
          //print_r($data);

          $sl = $data['sl'];
          $name = $data['name'];  
          $fname = $data['fatherName'];
          $email = $data['email'];
          $phone = $data['phone'];
          $address = $data['address'];
          $salary = $data['salary'];

          $sql = "UPDATE `information` SET `name`='$name',`fatherName`='$fname',`email`='$email',`phone`='$phone',`address`='$address',`salary`='$salary' WHERE `sl`= ' $sl' ";
          $result = mysqli_query( $this->con, $sql);

         if($result){
          //echo "data update successful";
           header("Location: index.php");
         }
        }

 }

 


?>