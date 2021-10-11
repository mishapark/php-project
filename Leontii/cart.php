<?php
include_once '../header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="css\cart-style.css">
    <title>Shop Cart</title>
</head>

<body>
    <div class="shopping-cart">
        <div class="title">
            Shopping Cart
        </div>

        <div class="item">
            <div class="image">
                <img src="image/product01.png"/>
            </div>

            <div class="description">
                <span>Property1</span>
                <span>Property2</span>
                <span>Property3</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    +
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    -
                </button>
            </div>

            <div class="total-price">123</div>
            <div class="remove">
            <button class="remove-button" type="button" name="remove-button">Remove</button>
            </div>
        </div>

        <div class="item">

            <div class="image">
            <img src="image/product02.png"/>
            </div>

            <div class="description">
                <span>Property1</span>
                <span>Property2</span>
                <span>Property3</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    +
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    -
                </button>
            </div>

            <div class="total-price">123</div>
            <div class="remove">
            <button class="remove-button" type="button" name="remove-button">Remove</button>
            </div>
        </div>

        <div class="item">

            <div class="image">
                <img src="image/product03.png"/>
            </div>

            <div class="description">
                <span>Property1</span>
                <span>Property2</span>
                <span>Property3</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    +
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    -
                </button>
            </div>

            <div class="total-price">123</div>
            <div class="remove">
                <button class="remove-button" type="button" name="remove-button">Remove</button>
            </div>
        </div>
        <div class="order">
            <button class="order-button" type="button" name="order-button">Order</button>
        </div>
        
    </div>
</body>

</html>
<?php
include_once '../footer.php';
?>