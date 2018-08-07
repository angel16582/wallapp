<?php

require('conec.php');


$searchTerm = $_GET['term'];
//SELECT * FROM productos WHERE nombre LIKE '%act%' ORDER BY nombre ASC
$rs = mysqli_query($con,"SELECT * FROM productos where nombre LIKE '%".$searchTerm."%' ORDER BY nombre ASC");



 while($row =mysqli_fetch_assoc($rs)){
                          //$id =$row['Id_Producto'];
                     
                          $data[] = $row['nombre'];
                      
                      }

                      echo json_encode($data);
 ?>