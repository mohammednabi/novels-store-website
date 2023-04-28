<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEBO BOOK MARKET</title>
    <link rel="stylesheet" href="css-files/indexdecor.css">
    <link rel="stylesheet" href="css-files/loader.css">

</head>

<body>

    <div class="parentloader" id="loader">
        <div class="container">
            <div class="magicbook">
                <img src="images/book for animation.png" alt="" class="magicimg">
            </div>

            <div class="particle">
                <img src="images/some particeles.png" alt="" class="particleimg">
            </div>

            <h1>loading</h1>
        </div>
    </div>



    <div class="content" id="all-content">


        <div class="cover"></div>
        <section class="parent">

            <header>
                <h1>novels store</h1>
                <nav class="navigation">
                    <ul class="firul">
                        <li class="fir"><a href="index.php">home</a></li>
                        <li class="fir" id="cat"><a href="historical.php">categories</a>
                            <!-- <ul>
                        <li><a href="#">historical</a></li>
                        <li><a href="#">adventures</a></li>

                    </ul> -->
                        </li>

                        <li class="fir"><a href="#footer">about</a></li>
                        <li class="fir"><a href="orders.php">orders</a></li>
                    </ul>





                </nav>


            </header>


            <section class="fs-content">
                <h1>discover your passion</h1>
                <a href="#addednew">discover some novels</a>


            </section>


        </section>

        <section class="second" id="addednew">
            <h1>added new</h1>
            <div class="best-bar">
                <?php $arr = array(1, 2, 3, 4, 5, 6);
                $indeee = $arr[0];
                include 'newadd.php';
                $indeee = $arr[1];
                include 'newadd.php';
                $indeee = $arr[2];
                include 'newadd.php';
                $indeee = $arr[3];
                include 'newadd.php';
                $indeee = $arr[4];
                include 'newadd.php';
                $indeee = $arr[5];
                include 'newadd.php';

                ?>
            </div>
        </section>

        <section class="second" id="bestseller">
            <h1>best seller</h1>
            <div class="best-bar">
                <?php $arr = array(1, 2, 3, 4, 5, 6);
                $indeee = $arr[0];
                include 'bestseller.php';
                $indeee = $arr[1];
                include 'bestseller.php';
                $indeee = $arr[2];
                include 'bestseller.php';
                $indeee = $arr[3];
                include 'bestseller.php';
                $indeee = $arr[4];
                include 'bestseller.php';
                $indeee = $arr[5];
                include 'bestseller.php';

                ?>

            </div>
        </section>



        <section class="second" id="second">
            <h1>recomended</h1>
            <div class="best-bar">
                <?php $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
                shuffle($arr);
                $indeee = $arr[0];
                include 'randomlinks.php';
                $indeee = $arr[1];
                include 'randomlinks.php';
                $indeee = $arr[2];
                include 'randomlinks.php';
                $indeee = $arr[3];
                include 'randomlinks.php';
                $indeee = $arr[4];
                include 'randomlinks.php';
                $indeee = $arr[5];
                include 'randomlinks.php';

                ?>




                <!-- <a href="#" class="book" id="harry7"></a>
            <a href="#" class="book" id="harry8"></a>
            <a href="#" class="book" id="harry9"></a>
            <a href="#" class="book" id="harry10"></a>
            <a href="#" class="book" id="harry11"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a>
            <a href="#" class="book" id="harry12"></a> -->

            </div>
        </section>



        <section class="second" id="harryqoute">
            <div class="cover2"></div>
            <h1>It is our choices,Harry,that show what we truly are, far more than our abilities.</h1>
            <h6> FROM J.K. Rowling, Harry Potter and the Chamber of Secrets</h6>
        </section>

        <section class="second" id="footer">
            <h1>about us</h1>
            <h2>this is novels store ,in this store we have alot of novels in different catigories,but now we have
                only
                historical catigory enjoy buying some novels
            </h2>
        </section>

    </div>

    <?php
    echo '<script type="text/JavaScript" > 
        let loader = document.querySelector(".parentloader");
let content = document.querySelector(".content");



window.addEventListener("load", function () {
  loader.style.display = "none";
  content.style.display = "block";
});

     </script>';
    ?>



</body>

</html>