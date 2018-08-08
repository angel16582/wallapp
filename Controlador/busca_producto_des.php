<?php 
require('conec.php');
 
$des=$_POST['nombre'];
$rs = mysqli_query($con,"SELECT * FROM productos where nombre='$des'");
    
                       $array=array();
                       
                       //$i=0;
                       while($row =mysqli_fetch_assoc($rs)){
                          //$id =$row['Id_Producto'];
                          $codigo =$row['codigo'];
                          $nombre=$row['nombre'];
                          $precio=$row['precio'];
                          $gra=$row['gramaje'];
                          $oferta=$row['oferta'];
                      
                      }
                      
                       mysqli_close($con);
                    
                    echo json_encode( array('nombre'=> $nombre,'precio'=> $precio,'gramaje'=> $gra,'codigo'=> $codigo ,'oferta'=> $oferta));
                   
                  

 ?>