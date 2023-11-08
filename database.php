<?php
$sn="localhost";
$un="root";
$pss="";
$dn="technerds";
$conn= new mysqli($sn,$un,$pss,$dn);
if($conn){
    echo "succesfull";
}
else{
    echo"not successsfull";
}
mysqli_query($conn,"insert into `user` (name, class,age) values ('sneha','first', '20')");
