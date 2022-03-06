<?php
    class Database
    {
        var $conn;
        function __construct()
        {
            $this->conn=mysqli_connect("localhost","root","","howto.com");
        }
    //To Insert- Update - delete 
        function RunDML($statment)
        {
            if(!mysqli_query($this->conn,$statment))
                {
                    return  mysqli_error($this->conn);
                }
            else
                return "ok";
        }
    //to search select
      function GetData($select)
      {
        $result= mysqli_query($this->conn,$select);
        return $result;
      }
    }
?>