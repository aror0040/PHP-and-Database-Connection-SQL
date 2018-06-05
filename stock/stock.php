<?php
//------------query your data from database here-------------//

include "./connect/connect-db.php";

$query = "SELECT * 
          FROM `products`";

//http://php.net/manual/en/mysqli.query.php

$resource = mysqli_query($conn, $query);

if ($resource) {
    
    // You want to get the data from the resource -
    // Turn every record-set into associative array
    
    // http://php.net/manual/en/mysqli-result.num-rows.php
    // Count the number of record-sets:
    
    $num_rows = mysqli_num_rows($resource);
    $products = [];
    
    for ($i = 0; $i < $num_rows; $i++) {
        
        // http://php.net/manual/en/mysqli-result.fetch-assoc.php
        // Convert each record-set into associative array
        
        $row = mysqli_fetch_assoc($resource);
        
        // http://php.net/manual/en/function.array-push.php
        // Push the currently created associative array into indexed array $data
        
        array_push($products, $row);
    }
}
