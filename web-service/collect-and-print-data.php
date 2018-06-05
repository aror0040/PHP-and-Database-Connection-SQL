<?php
function collectArray($prod_code) {
    global $products;
    $collect = [];
    if (isset($products) && sizeof($products) > 0) { 
        foreach ($products as $product) {    
            if ($prod_code === $product["prod_code"]) {
                array_push($collect, $product);
            } 
        }
        
        if (sizeof($collect) > 0) {
            return $collect;
        } else {
            return $products;
        } 
    }
}

function printHTML() {
    isset($_GET["data-prod"]) ? $selectedProds = collectArray($_GET["data-prod"]) : $selectedProds = collectArray(NULL);
    
    echo "<div class=\"row\">
              <div class=\"container-fluid\">
                <h2></h2>
              </div>";

    
    foreach ($selectedProds as $selectedProd) { 
        echo "<div class=\"col col-12 col-md-6 col-lg-3 mb-0\">
                <figure>
                  <img class=\"img-fluid\" src=\"{$selectedProd["prod_image"]}\" alt=\"{$selectedProd["prod_name"]}\">
                  <figcaption>
                
                    <ul>
                      <li>{$selectedProd["prod_name"]}</li>
                      <li>{$selectedProd["prod_price"]}</li>
                    </ul>
                  </figcaption>
                </figure>
              </div>";
    }
    echo "</div>";
    /*
    echo "<pre>";
    print_r($selectedProds);
    echo "</pre>";*/
}
?>









    



