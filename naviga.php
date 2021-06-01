
<?php
	$connection = mysqli_connect("localhost","root","","csvdata",3326);
						    	#$connection = mysqli_connect("localhost","root","","DB_Bed_and_Breakfast",3306); nel caso non si connettesse al database, togliere la password
									$username=$_POST["nome"];
									$password=$_POST["Password"];
									
									$query="SELECT * FROM utente WHERE username='$username' AND passwd='$password'";
									$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)<1)
                                {
                                $query="SELECT * FROM allenatore WHERE username='$username' AND passwd='$password'";
                                $result = mysqli_query($connection,$query);
                                if(mysqli_num_rows($result)<1){header("Location: errori_credenziali.php");}else{
									$cookie_name = "id_allenatore";
										$id_allenatore = 0;
									while($row = mysqli_fetch_array($result)){
										$id_allenatore = $row[0];	
									}
									$cookie_value = $id_allenatore;
									// Set cookie
									setcookie($cookie_name, $cookie_value);

                                header("Location: storico_caricamenti.php");
								

                                }

									}
									else if (mysqli_num_rows($result)!=0)
									{  
										// Initialize cookie name
										$cookie_name = "id";
										$id_utente = 0;
										while($row = mysqli_fetch_array($result)){
											$id_utente = $row[0];
										}
										$cookie_value = $id_utente;
										
										// Set cookie
										setcookie($cookie_name, $cookie_value);
										
										// if(!isset($_COOKIES[$cookie_name])) 
										// {
										// 	print("Cookie created | ");
										// }
                                        header("Location: pagina_utente.php");        
										
									}
                                    mysqli_close($connection);
?>




   

    <!-- 
<div id="accX" style="height: 400px; min-width: 310px"></div>
<div id="accY" style="height: 400px; min-width: 310px"></div>
<div id="accZ" style="height: 400px; min-width: 310px"></div> -->











   



<!-- 

 
 -->