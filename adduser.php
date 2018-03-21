<?php
    
    if (isset($_POST['signup'])){

        $_firstname = $_POST['firstname'];
         $_surname = $_POST['surname'];
          $_username = $_POST['username'];
           $_password = $_POST['password'];
           $_password_hash = MD5($_password);
            $_age = $_POST['age'];
             $_email = $_POST['email'];
             if(!empty($_firstname) && !empty($_surname) && !empty($_username) && !empty($_password) && !empty($_age)
                    && !empty($_email)){


                    $host='localhost';
                    $username='root';
                    $password='';
                    $database_name='new_db';

                    $link=mysqli_connect($host,$username,$password,$database_name);
                if($link==false){
                    echo "database connection error";
                }

        $dbsql="INSERT INTO `new_table` (`id`, `First name`, `surname`, `user name`, `password`, `Age`, `Email`) 
        VALUES (NULL, '$_firstname', '$_surname', '$_username', '$_password_hash', '$_age', '$_email')";
        $results=mysqli_query($link,$dbsql);
        if($results==true){
            echo "<strong> records added successfully to the database </strong>";
        }
        else{
            echo 'error';


}
             }else{
                 echo "please make sure all fields are filled";
             }
    }

?>
    <p>click <a href="homede.html">here</a> to go back HOME </p>
