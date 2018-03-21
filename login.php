<?php
    
                    $host='localhost';
                    $username='root';
                    $password='';
                    $database_name='new_db';

                    $link=mysqli_connect($host,$username,$password,$database_name);
                if($link==false){
                    echo 'no';
                }
                    if (isset($_POST['username']) && isset($_POST['password'])){
                        $_username = $_POST['username'];
                        $_password = $_POST['password'];
                        $_password_hash = md5($_password);
                        if(!empty($_username) && !empty($_password)){
                            $query = "SELECT 'id' FROM 'new_table' WHERE 'username'='$_username' AND 'password'='$_password_hash'";
                                if ($query_run = mysql-query($query)){
                                    $query_num_rows = mysql_num_rows($query_run);
                                    if ($query_num_rows==0){
                                        echo 'Invalid username and Password combination.';

                                    }else if ($query_num_rows == 1){
                                        echo 'ok';

                                    }
                                }
                        }
                    }
                    
                

?>
    <p>click <a href="homede.html">here</a> to go back HOME </p>
