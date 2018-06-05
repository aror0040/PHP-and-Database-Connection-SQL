<!-----------------------------------Connect-db.php AND collect-and-print-data.PHP------------->
<?php 
include './connect/connect-db.php';
include './stock/stock.php';
include './web-service/collect-and-print-data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Store Catalog</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="boot-over">
       
        <!-------------------------------NAVBAR------------------------------------>
        <div class="container">
   
           <?php include './includes/navigation.php'; ?>
        </div>

        <!-----------------------------------MASTHEAD------------------------------->
        <div class="container">
        
         <?php include './includes/masthead.php'; ?>
       
        </div>

        <!------------------------------------MAIN---------------------------------->
        <div class="container">
           <?php
            printHtml();
            ?>
   
        </div>

        <!-----------------------------------FOOTER-------------------------------->
        <?php include './includes/footer.php'; ?>
     
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</body>
</html>