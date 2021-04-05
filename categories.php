<?php
include "db.php";
$cat_sql="SELECT * FROM categories";
$results= mysqli_query($connection, $cat_sql);
if(mysqli_num_rows($results) > 0){
    echo "<li><a href='#'><h4>Categories</h4></a><li>";
    while($row = mysql_fetch_array($results){
        $cat_id = $row["cat_id"];
        $cat_title = $row["cat_title"];
        echo "<li><a href='#'>$cat_title</a></li>";
    })
}
?>
