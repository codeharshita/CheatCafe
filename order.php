<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/order.css">
</head>

<style>
    background-color: bisque;
</style>

<body>
    <div class="wrapper">
        <div class="title">
            <h4><span>Today's Meal</span><br>Our Menu</h4>
        </div>
        <div class="menu">
            <div class="single-menu">
                <img src="images/menu1.jpg" alt="">
                <div class="menu-content">
                    <h4>COMBO FIRE &nbsp;&nbsp;&nbsp;<span>Rs.399</span></h4>
                    <p>MUTTON ROLL <br>
                    DOUBLE CHEESE MARGHERITA<br>
                    VEG-BURGER<br>
                    VANILLA FROSTED COFFEE.<br>
                    CHEESE SANDWICH<br>
                    CHEESECAKE DONUT<br>
                    APPLE JUICE<br>

                </p> 
                
                <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form>              
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu2.jpg" alt="">
                <div class="menu-content">
                    <h4>COMBO MIX &nbsp;&nbsp;&nbsp;<span>Rs.399</span></h4>
                    <p>MARGHERITTA PIZZA.<br>
                        ALFEREDO CHICKEN SPAGHETTI.<br>
                        CREAMY-ICED COFFEE <br>
                        STUFFED BEAN BURGER<br>
                        BOSTON CREAM DONUT<br>
                        GOURMET HOTDOG<br>
                        BEET JUICE <br>
                    </p>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form>         
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu3.jpg" alt="">
                <div class="menu-content">
                    <h4>COFFEE <span>Rs.139(Each)</span></h4>
                    <p>DALGONA COFFEE<br>
                        COLD-BREWED COFFEE<br>
                        CREAMY ICED COFFEE<br>
                        BANANA MILK COFFEE<br>
                        ICED CARAMEL MACCHIATO COFFEE</p>
                        <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/nenu4.jpg" alt="">
                <div class="menu-content">
                    <h4>BURGERS &nbsp;&nbsp;&nbsp; <span>Rs.159(Each)</span></h4>
                    <p>VEG-BURGER<br>
                        CHILLI BURGERS<br>
                        CRUNCHY CHICKEN BURGERS<br>
                        STUFFED BEAN BURGERS<br>
                        LENTIL AND MUSHROOM BURGER 

                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu5.jpg" alt="">
                <div class="menu-content">
                    <h4>DONUTS&nbsp;&nbsp;&nbsp; <span>Rs.89 (Each)</span></h4>
                    <p>CHOCOLATE FROSTED<br>
                        BAKED DONUT<br>
                        BLUEBERRY CAKE <br>
                        VANILLA FROSTED<br>
                        BOSTON CREAM DONUT
                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu6.jpg" alt="">
                <div class="menu-content">
                    <h4>SANWICH &nbsp;&nbsp;&nbsp;<span>Rs.139(Each)</span></h4>
                    <p>VEG-SANDWICH<br>
                        CHICKEN SANDWICH<br>
                        NUTELLA SANDWICH<br>
                        HAM SANDWICH<br>
                        GRILLED CHEESE SANDWICH</p>
                        <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu7.jpg" alt="">
                <div class="menu-content">
                    <h4>ROLLS &nbsp;&nbsp;&nbsp;<span>Rs.99(Each)</span></h4>
                    <p>VEG-ROLL<br>
                        PANEER ROLL<br>
                        DOUBLE CHICKEN ROLL<br>
                        MUTTON ROLL<br>
                        EGG CHICKEN ROLL
                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu8.jpg" alt="">
                <div class="menu-content">
                    <h4>HOTDOGS &nbsp;&nbsp;&nbsp; <span>Rs.169(Each)</span></h4>
                    <p>AMERICAN<br>
                        CLASSIC<br>
                        REGIONAL<br>
                        SIMPLE<br>
                        GOURMET
                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu9.jpg" alt="">
                <div class="menu-content">
                    <h4>JUICES&nbsp;&nbsp;&nbsp; <span>Rs.129(Each)</span></h4>
                    <p>APPLE JUICE<br>
                        ORANGE JUICE<br>
                        BEET JUICE<br>
                        SUGARCANE JUICE<br>
                        POMEGRANATE JUICE
                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
            <div class="single-menu">
                <img src="images/menu10.jpg" alt="">
                <div class="menu-content">
                    <h4>BEVERAGES &nbsp;&nbsp;&nbsp;<span> Rs.399(Each)</span></h4>
                    <p>ANTIQUITY<br>
                        ROYAL STAG<br>
                        COCKTAIL<br>
                        SPIRIT<br>
                        BACARDI

                    </p>
                    <form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="39900"
		data-name="CheatCafe"
		data-description="Start your day with coffee"
		data-currency="inr"
		data-email="harshita34r5@gmail.com"
	>
	</script>

</form> 
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>