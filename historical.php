<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>historical novels</title>
    <link rel="stylesheet" href="css-files/historicaldecor.css?v=<?php echo time(); ?>">
</head>
<body>

    <section class="parent">

        <header>
            <h1>novels store</h1>
            <nav class="navigation">
                <ul class="firul">
                    <li class="fir"><a href="index.php">home</a></li>
                    <li  class="fir" id="cat"><a href="historical.php">categories</a>
                    <!-- <ul>
                        <li><a href="#">historical</a></li>
                        <li><a href="#">adventures</a></li>

                    </ul> -->
                    </li>
                    
                    <li class="fir"><a href="#">about</a></li>
                    <li class="fir"><a href="orders.php">orders</a></li>
                </ul>                
            </nav>



        </header>

        <section class="second" id="bestseller">
            <h1>historical</h1>
            
            <div class="cards">

                <div class="card"> 
                    <?php 
                    $indeee = 1 ;
                    include 'imgs.php';
                    ?>
           
                    <div class="cardcontent">
                        <h2>
<?php 

$indeee = 1 ;
include 'booktitle1.php';


?>
</h2>
                        <h4>
<?php 
$indeee = 1 ;
include 'preprices.php';
?>
</h4>
                        <h3>
                        <?php 

$indeee = 1 ;
include 'prices.php';


?></h3>
                        </h3>
                        <h5>
                        <?php 

$indeee = 1 ;
include 'author.php';


?>
                        </h5>
                        <?php 
                    $indeee = 1 ;
                    include 'moredetails.php';
                    ?>
                    </div>
            </div>
            <div class="card"> 
            <?php 
                    $indeee = 2 ;
                    include 'imgs.php';
                    ?>
                <div class="cardcontent">
                <h2>
                <?php 

$indeee = 2 ;
include 'booktitle1.php';


?>
</h2>
                    <h4><?php 
$indeee = 2 ;
include 'preprices.php';
?></h4>
                    <h3>
                    <?php 

$indeee = 2 ;
include 'prices.php';


?></h3>
                    </h3>
                    <h5>
                    <?php 

$indeee = 2 ;
include 'author.php';


?>
                    </h5>
                    <?php 
                    $indeee = 2 ;
                    include 'moredetails.php';
                    ?>
                </div>
        </div>
        <div class="card"> 
        <?php 
                    $indeee = 3 ;
                    include 'imgs.php';
                    ?>
                <div class="cardcontent">
                <h2>
                <?php 

$indeee = 3 ;
include 'booktitle1.php';


?>
</h2>
                    <h4>
                    <?php 
$indeee = 3 ;
include 'preprices.php';
?>
                    </h4>
                    <h3>                <?php 

$indeee = 3 ;
include 'prices.php';


?></h3>
                    <h5>
                    <?php 

$indeee = 3 ;
include 'author.php';


?>
                    </h5>
                    <?php 
                    $indeee = 3 ;
                    include 'moredetails.php';
                    ?>
                </div>
        </div>
      


   


            </div>
           
               
    
                
        </section>
        
    
</body>
</html>