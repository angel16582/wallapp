<?php 
require('conec.php');
 
$codigo=$_POST['codigo'];
$rs = mysqli_query($con,"SELECT * FROM productos where codigo=$codigo");
    
                       $array=array();
                       
                       //$i=0;
                       while($row =mysqli_fetch_assoc($rs)){
                          //$id =$row['Id_Producto'];
                          $codigo =$row['codigo'];
                          $nombre=$row['nombre'];
                          $precio=$row['precio'];
                          $gra=$row['gramaje'];
                          // $Des=$row['Descripcion'];
                          // $Cat=$row['Categoria'];
                          // $im=$row['Imagen'];
                          //$array[$i]=$row;
                          //$i++;
                        //$array[] = array( 'Nombre'=> $nom,'Precio_Unitario'=> $PrecioU,'Descripcion'=> $Des);
                      }
                      
                       mysqli_close($con);
                    
                    echo json_encode( array('nombre'=> $nombre,'precio'=> $precio,'gramaje'=> $gra));
                   
                  

 ?>