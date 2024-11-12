<?php



$con=new mysqli('localhost', 'root', ' ', 'web250')
;
if($con){
    echo "connection successful";
}else{
    dia(mysqli_error($con));
}


?>