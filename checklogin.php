<?php
session_start();
    include_once "database.php";
      $db = database();
      $log = $db -> GetData ("select * from learner where (mail='".$_GET["uname"]."'or phone='".$_GET["uname"]."')and password ='".$_GET["psw"]"'");
      if($row=mysql_fetch_assoc($log))
      {
          //the row name that in data base
         
        $_SESSION["id"]=$row["userid"];
        $_SESSION["name"]=$row["name"];
        echo "ok";
      }
      else{
        echo "<div class='alert alert-danger'> Invaild Login username or password</div>";
      }
  ?>
