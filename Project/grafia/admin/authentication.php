<?php      
    include('conn.php'); 
 

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
   
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from employeelogin where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: http://localhost:4200/home"); 
        }  
        else{  
            echo "Username or password incorrect";   
        }     
?>  