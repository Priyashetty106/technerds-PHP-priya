
<?php
$sn="localhost";
$un="root";
$pss="";
$dn="students";
$conn= new mysqli($sn,$un,$pss,$dn);
if($conn){
    echo "succesfull";
}
else{
    echo"not successsfull";
}
mysqli_query($conn,"insert into `admin` (name, class,age) values ('sneha','first', '20')");
