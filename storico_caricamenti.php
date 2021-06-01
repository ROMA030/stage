<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Storico giocatari</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="shortcut icon" href="content/gym3/images/favicon.ico">
</head>

<body class="is-preload">

    <!-- Sidebar -->
    <section id="sidebar">
        <div class="inner">
            <nav>
                <ul>
                    <li><a href="#intro">Benvenuto</a></li>

                </ul>
            </nav>
        </div>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1>elenco dei tuoi giocatori</h1>
               
<!-- 
    crero' un cookie con al interno id del utente, e che nella pagina dove
    verro rindirizzato potro usare per avere i dati relativi al utente, adesso
    non mi resta che aggiungere al utente la possibilita' di vedere i storici dei
    suoi allenamenti, e lo stesso file potra essere usato dal form cui sotto per essere
    rindirizzato, (ovviamente dopo aver creato il cookie)
 -->

                                <form action="#">
                                            <select name="giocatore" class="form-select">
                                            <?php
                                                    $valore_cookie =  $_COOKIE['id_allenatore'];
                                                     $connection = mysqli_connect("localhost","root","","csvdata",3326);
                                                     $query="SELECT * FROM utente WHERE id_allenatore=$valore_cookie";
                                                     $result = mysqli_query($connection,$query);
                                                     if(mysqli_num_rows($result) != 0){
                                                        
                                                        
                                                       while($row = mysqli_fetch_array($result)){
                                                       
                                                        echo "<option value=$row[0]>ID: $row[0] || $row[5] $row[4]</option>";
                                                        //echo "<h3> $row[4] - $row[5]</h3>";
                                                       
                                                       }
                                                   }
                                       
                                                   mysqli_close($connection); 
                                               
                                                
                                                ?>
                                            </select>
                                            <br>
                                            <div >
                                                <button  class="button scrolly">controlla <i
                                                        class="icon-right-open"></i></button>
                                            </div>
                                                
                                             </form>
 






                <!-- <ul class="actions">
                    <li><a href="#one" class="button scrolly">Learn more</a></li>
                </ul> -->
            </div>
        </section>
        <center>
            <div class="copyright">
                <p> &copy; 2021 GRUPPO PCTO - <a target="_blank" rel="nofollow" href="https://xeos.it/">XEOS</a></p>

            </div>
        </center>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>