<html>
 <head>
  <title>Form</title>
 </head>
 <body>
  <form action="database.php" method="post">
   Name:<br><input type='text' name="name"/><br>
   dept:<br><input type='text' name="dept"/><br>
   Reg no:<br><input type='text' name="regno"/><br>
   Gender:<br><input type='text' name="gender"/><br>
   State of origin:<br><input type='text' name="sto"/><br><br>
   <input type="submit" name="submit" value="Submit"/>

  </form> 
 </body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
     $dept=$_POST['dept'];
      $regno=$_POST['regno'];
$gender=$_POST['gender'];
$state=$_POST['sto'];


 $host='localhost';
 $username='root';
 $password='';
 $database_name='my_db';
 $link=mysqli_connect($host,$username,$password,$database_name);
if($link==false){
    echo 'database connection error';
}

$sql="INSERT INTO `my_db`.`name_table` (`id`, `name`, `dept`, `reg no`, `gender`, `state of origin`) 
VALUES (NULL,'$name','$dept','$regno','$gender','$state')";
$results=mysqli_query($link,$sql);
if($results==true){
    echo 'records added successfully';

}
else{
    echo 'error';
}
}
?>

    <a href="homede.html"> HOME</a>
