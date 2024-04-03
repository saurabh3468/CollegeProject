<?php 
    $servername="localhost";
    $username="root";
    $password = "";
    $database="hetlify";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $name=$_POST['name'];
            $phone_number=$_POST['phone_number'];
            $email=$_POST['useremail'];
            $userpassword=$_POST['userpassword'];
            $sql="INSERT INTO `user_login`(`name`, `phone`, `email`, `password`) VALUES ('$name', '$phone_number', '$email', '$userpassword')";
            if($phone_number)
            $result=mysqli_query($conn, $sql);
            if($result){
                echo "
                <div>
                    Your Id created <b>Sucessfully</b>
                </div>";
            }
            else{
                echo "Eroor!  ".mysqli_connect_error();
            }
        }
        else{
            echo "Server request doesn't match";
        }
    }

?>