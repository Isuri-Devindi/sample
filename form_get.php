<html>
<body >
    <?php $name = $_GET["fname"]." ".$_GET["lname"];?>
    <h1>Your Information System</h1>
    <p> Thank you, <?php echo $_GET["fname"]; ?> for your purchase from our web site.</p>
    <p>Your item colour is : <?php echo $_GET["colour"]?> & T-Shirt size :  <?php echo $_GET["size"]; ?>
    <p>Selected items/item are:</p>
    <?php 

         if (isset($_GET["cap"])){
            echo "* Cap <br>";
        }
        if (isset($_GET["wband"])){
            echo "* Wrist Band <br>";
        }
   ?>
   <p>Your items will be sent to :</p>
   <?php
        echo "<i> $name <br>", $_GET["adone"],"<br>",$_GET["adtwo"],"<br>",$_GET["adthree"],"</i>";
      
        if(empty($_GET["comments"])){
           echo "<p><strong>Thank you for shopping with us!</strong></p>";
        }
        else {
            echo "<p>Thank you for submitting your comments.We appreciate it. You said:</p>" ;
            echo $_GET["comments"];
            echo "<p><strong>Thank you for shopping with us!</strong></p>";
        }
    ?>
</body>
</html>