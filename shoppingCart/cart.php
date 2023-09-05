<?php
// Start a session if not already started
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
    .cart-section{
      display: flex;
      justify-content: space-between;
      align-items:center;
      padding: 0 3rem;
      margin: 10px 1rem;
      background-color: whitesmoke;
      border: 2px solid black;
      border-radius: 5px;
    }

    .cart-section > img{
        width: 5rem;
        height:5rem;
    }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="shop.php">Shope</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <a class="nav-link" id="card-length" ></a>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <table>
        <?php
        $total_price = 0;
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product_id => $product) {
                $total = $product['price'] * $product['quantity'];
                $total_price += $total;
    
                echo "<div class='cart-section'>
                <img src='{$product['image']}' alt=''>
                <p>{$product['name']}</p>
                <p>{$product['price']}</p>
                <p>{$product['quantity']}</p>
                <p>{$total}</p>
              </div >";
            }
        } else {
            echo "<tr><td colspan='4'>Your cart is empty</td></tr>";
        }
        ?>
    </table>
    <p>Total Price: $<?php echo $total_price; ?></p>
    <p><a href="shop.php">Back to Shop</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
