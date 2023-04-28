<?php 

$connection = new mysqli("localhost","root","/8/8/8/8wolf22mohammed","historical");
$stmt = $connection->prepare("select * from historic");
$stmt->execute();

$result = $stmt->get_result();


while($row = $result->fetch_assoc() ){
if( $row["id"] ==$indeee)
    echo $row["price"],"$";

}

?>