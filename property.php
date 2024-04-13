<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("connection.php");
///code								
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="title" content="" />
    <meta property="og:title" content="Page title" />
    <title>TatuCity propeties</title>
    <link rel="stylesheet" href="./Assets/CSS/index.css" />
    
    <script src="./Assets/JS/index.js" defer></script>
    
</head> 
<!-- comment added  -->

<body>
<?php
include('header.php');
?>
        <div class="big-title-buy_sell_rent-container">
            <div class="big-title">
                <h1>Find the Perfect Place to stay with your Family</h1>
                <br />
                <p>
                    Buying a Home is a life-changing experience, so shouldnt your Real
                    Estate Agent be Your life changer.
                </p>
            </div>

            <div class="buy-sell-rent-container">
                <div>
                    <button>Buy</button>
                    <button>Sell</button>
                    <button class="active">Rent</button>
                </div>

                <div>
                    <!-- <input type="sele"> -->
                    <select name="" id="">
                        <option value="">Location</option>
                    </select>
                    |
                    <select name="" id="">
                        <option value="">Property Type</option>
                    </select>
                    |
                    <select name="" id="">
                        <option value="">Price</option>
                    </select>

                    <button class="search-btn">
                        <i class="bi-search"></i>
                        Search
                    </button>

                    <div>
                        <h2>Dhaka</h2>
                        <h2>Duplex</h2>
                        <h2 style="margin-left: 10px">$3000 - $6000</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="Image-by-the-right">
            <img src="./Assets/Images/Building_By the right.png" alt="" />
        </div>
    </div>

  

    <div class="header-word">
        <h1>Popular Properties</h1>
    </div>

    <?php 
    include('cartproperty.php');

?>
                        



    </div>

    <div class="header-word">
        <h1>Featured Property </h1>
        <p>Real Estate a crowded field but with the number of buyers purchasing homes through real Estate Agents and
            brokers growing, there's plenty of them </p>
    </div>


    <div class="cards">
        <div class="sub-cards block-display">
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>100% Security </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>Free Air Conditioner</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>Flower Garden</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
        </div>
        <div class="sub-cards block-display"></div>
        <div class="sub-cards block-display">
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>Parkers and Movers</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>Rental Furnitures </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
            <div class="sub_sub-cards">
                <img class="small_logo" src="./Assets/Images/small_logo.png" alt="">
                <h2>Swimming Pool </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquam nihil obcaecati quis </p>
            </div>
        </div>
    </div>

    <div class="header-word">
        <h2 class="active">Reviews</h2>
        <h1>Our Valuable Customers say: </h1>
    </div>

    <div class="cards">
        <div class="sub-cards reviews">

            <div class="person">
                <img src="./Assets/Images/small_logo.png" alt="" class="small_logo" />

                <div style="margin-left: 10px;">
                    <h2> Person's name </h2>
                    <span> Pro trader at lorem </span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum deserunt omnis commodi fugiat, ducimus
                architecto, minus repudiandae eos itaque sit doloribus inventore nulla aliquam dolores quas debitis vel
                esse quae totam cumque obcaecati mollitia a? Deleniti consequuntur excepturi facilis maiores repellat
                maxime pariatur illo nemo et saepe, doloribus omnis in</p>
        </div>

        <div class="sub-cards reviews">
            <div class="person">
                <img src="./Assets/Images/small_logo.png" alt="" class="small_logo" />

                <div style="margin-left: 10px;">
                    <h2> Person's name </h2>
                    <span> Pro trader at lorem </span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum deserunt omnis commodi fugiat, ducimus
                architecto, minus repudiandae eos itaque sit doloribus inventore nulla aliquam dolores quas debitis vel
                esse quae totam cumque obcaecati mollitia a? Deleniti consequuntur excepturi facilis maiores repellat
                maxime pariatur illo nemo et saepe, doloribus omnis in</p>
        </div>
    </div>

    <div class="indicator-cont">
        <i class="indicator"></i>
        <i class="indicator"></i>
        <i class="indicator indicator-active"></i>
        <i class="indicator"></i>
        <i class="indicator"></i>
    </div>

    

    
</body>

</html>