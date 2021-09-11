 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
 <form action="" method="POST">
	 <h3>
		Masukan bintang 
		<input type="text" name="bintang">
		<input type="submit" name="enter" value="GO"></h3>
	</form>
 
	<?php 
		if (isset($_POST["enter"])) {
			$nil = $_POST["bintang"];

			echo "Program Segitiga Siku-Siku";
			echo"<br>";
			for ($i=1; $i<=$nil ; $i++) { 
				for($b = 1; $b <= $i; $b++){
					echo "*";
				}
				
				echo"<br>";
			}
            echo "Program Ganjil Genap Menggunakan For <br>";

            if (isset($_POST["enter"])){
                for ($g = 1 ; $g <= $nil ; $g++){
                    if ($g %2 == 1){
                        echo "<br>";
                        echo $g ; 
                    }
                }
            }
     
		}
       
	 ?>


 </body>

 <br>
    <br>
    <br>
    <br>
    <center><a href="1.php">Ripa Noval Kh</a></center>
    
 </html>



 