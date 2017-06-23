<?php
    $buyerName = $_GET["buyer"];
    $buyerStreet = $_GET["streetAddress"];
    $buyerCity = $_GET["city"];
    $buyerState = $_GET["state"];
    $buyerZip = $_GET["zip"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/scripts.js"></script>
        <title>Create a receipt</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Make a Purchase</h1>
                <h2>Take your Receipt!</h2>
            </div>
            <div class="well" id="receipt">
                <h2>Thank you for your purchase!</h2>
                <p>We will be mailing your order to:</p>
                <p><?php echo $buyerName;?><br>
                  <?php echo $buyerStreet;?><br>
                  <?php echo $buyerCity;?>, <?php echo $buyerState;?>  <?php echo $buyerZip;?></p>
            </div>
        </div>
    </body>
</html>
