<?php
$conect = mysqli_connect("localhost", "root", "","jason");
$sql="SELECT * FROM wisata";
$result=mysqli_query($conect,$sql);
$json_array=array();
while($row=mysqli_fetch_assoc($result))
{
    $json_array[]=$row;
}
echo json_encode($json_array);
?>
