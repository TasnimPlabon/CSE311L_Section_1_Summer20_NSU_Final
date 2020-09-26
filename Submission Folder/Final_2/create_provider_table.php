<?php
$link = mysqli_connect("localhost","root","","vs_code_final_2");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE provider(
   sid INT(9) PRIMARY KEY NOT NULL,
   sname VARCHAR (30),
   address VARCHAR(40)
    
    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully";
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>