
                                    <!-- qua va messo il tamplate -->
									<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>registrazione avvenuta  </title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style_error.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link rel="shortcut icon" href="content/football2/images/favicon.ico">

</head>

<body>
<?php


if (isset($_POST)) {
           $user_name =  $_POST["user"];
           $password = $_POST["Password"];
           $nome =  $_POST["nome"];
           $cognome =  $_POST["cognome"];
           $allenatore = $_POST["scelta_allenatore"];
           $connection = mysqli_connect("localhost","root","","csvdata",3326);



            if($allenatore =="sono_allenatore"){
                $query="INSERT INTO allenatore(username, passwd, nome, cognome) VALUES ('$user_name','$password','$nome','$cognome')";
                $result = mysqli_query($connection,$query);
            }elseif($allenatore =="no_allenatore"){
                $query="INSERT INTO utente( username, passwd, nome, cognome) VALUES ('$user_name','$password','$nome','$cognome')";
                $result = mysqli_query($connection,$query);
            }else{
                //INSERT INTO utente( username, passwd, id_allenatore, nome, cognome) VALUES ()
                $query="INSERT INTO utente( username, passwd, id_allenatore, nome, cognome) VALUES ('$user_name','$password',$allenatore,'$nome','$cognome')";
                $result = mysqli_query($connection,$query);
            }


           mysqli_close($connection);
        }
        ?>


    <div id="notfound">  

        <div class="notfound">
            
            <div class="notfound-404">
                <h1>registrato!</h1>

            </div>

            <h2 style="color:aliceblue">ora puoi accedere all'area personale</h2>
            <a href="Login.php">ACCEDI</a>
          
        </div>
    </div>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
