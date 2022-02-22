 <!DOCTYPE html>
 <html>
 
 <head>
 	<meta charset="utf-8">
    <title>Carga de archivo</title>
 </head>

 <body>

    <h1>Carga de archivos xml</h1>

 	<?php 

 		if(!$Alumnos = simplexml_load_file("kata1.xml"))
 		{
 			echo "No se pudo cargar el archivo";
 		}
 		else
 		{

            echo "<table>";
                echo "<tr>";
                    echo "<td> Nombre  </td>";
                    echo "<td> Carrera  </td>";
                    echo "<td> Nacimiento  </td>";

 			foreach ($Alumnos as $alumno) 
 			{	
				echo "<tr><td>".$alumno->{"nombre"}."</td>";
	 			
	 			echo "<td>".$alumno->{"carrera"}."</td>";

	 			echo "<td>".$alumno->{"nacimiento"}."</td></tr>";
 			}			
 		}

        echo "</table>";
 	?>

 </body>
 </html>