
<?php
include "header_before.php"

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- page styling  -->
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }
      button:hover {
        opacity: 0.8;
      }
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }
      img.avatar {
        width: 40%;
        border-radius: 30%;
      }
      .container {
        /* margin: auto; */
        padding: 20px;
        /* width: fit-content;
        height: auto; */
    }
      }
      span.psw {
        float: right;
        padding-top: 16px;
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
  </style>
</head>
<body>
<script> //alert("okk!"); </script>
  <script>
    function Login()
    {
        var user=document.getElementById("uname").value;
        var pass=document.getElementById("psw").value;

        xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
          alert("Hello!");
        if (this.readyState == 4 && this.status == 200)            
            {
            var result=this.responseText;
                        if(result == ok) 
                        {
                          alert("Hello!");
                        window.open('index.php','_self');
                        } 
                  else
                    document.getElementById("divlog").innerHttp=this.responseText;
              }
            };
            xhttp.open("GET", "checklogin.php?user"=+user+"&passowrd="+pass+"",true);
            xhttp.send();
          
    }
  </script>
    <form method="get">
        <div class="imgcontainer">
          <img src="images/login.png" alt="Avatar" class="avatar">
          <h2> <label>Welcome back my friend</label></h2>
        </div>
      <div id="divlog"></div>
      <div class="container" id="container">
        <input type="text" class="uname" id="uname" placeholder="please enter phone or email" name="uname"  required>
        <input type="password" class="psw" id="psw" placeholder="Enter Password" name="psw" required>
        
        <div class="right-w3l">
							<button type="button" onclick="Login()">Log in</button>
						</div>

          <input type="checkbox" checked="checked" name="remember"> Remember me</label>
      </div>
            <!-- back to index and forget password -->
      <div class="container" style="background-color:#f1f1f1" >
        <button type="button" class="cancelbtn">back as a gest</button>
        <span class="psw">Forgot <a href="#">your password?</a></span>
      </div>
    </form>

</body>
</html>

	<!-- end section -->
    <!-- Start Footer -->
   <?php
 		include "footer.php";  
   ?>
