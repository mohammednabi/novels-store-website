<?php 

$connection = new mysqli("localhost","root","/8/8/8/8wolf22mohammed","randomlinks");
$stmt = $connection->prepare("select * from rdlinks");
$stmt->execute();

$result = $stmt->get_result();


while($row = $result->fetch_assoc() ){
if( $row["id"] ==$indeee)
echo "<a class='book' style='background-image: url(\"$row[link]\")'></a>";

}

?>