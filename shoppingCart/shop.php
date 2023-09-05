
<?php
// Start a session if not already started
session_start();

// Product list (you can expand this list)
$products = [
    ['id' => 1, 'name' => 'Nike Air Jordan 1', 'price' => 10, 'image' => 'https://cdn.webshopapp.com/shops/296678/files/392909457/image.jpg'],
    ['id' => 2, 'name' => 'Nike Air Jordan 2', 'price' => 15, 'image' => 'https://static.nike.com/a/images/f_auto/dpr_1.3,cs_srgb/w_945,c_limit/95e3c30f-aa7f-41a4-9959-8023fc707299/air-jordan-1-2022-lost-and-found-chicago-the-inspiration-behind-the-design.jpg'],
    ['id' => 3, 'name' => 'Nike Air Jordan 3', 'price' => 20, 'image' => 'https://img.buzzfeed.com/buzzfeed-static/static/2023-06/24/15/asset/543b56b1be7b/sub-buzz-5530-1687620191-1.jpg?crop=1910:1145;45,545&output-format=auto&output-quality=auto'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

    // Check if the product is already in the cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the selected product to the cart
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        $_SESSION['cart'][$product_id] = [
            'name' => $products[$product_id - 1]['name'],
            'price' => $products[$product_id - 1]['price'],
            'quantity' => 1,
            'image' => $products[$product_id - 1]['image'],

        ];
    }
}

if (isset($_POST['clear_cart'])) {
  // Destroy the session
  session_destroy();

  // Redirect to the cart page to reflect the changes
  header("Location: cart.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .card-section{
            margin-top:3rem;
            display:flex;
            justify-content: space-around;
            width:100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shope</a>
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

    <div class="card-section">
  
        <?php foreach ($products as $product): ?>
          <div class="card" style="width: 18rem;">
    <img src="<?php echo  $product['image']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
    </div>
  
                <form method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="submit" name="add_to_cart" value="Add to Cart">
                    <button type="submit" name="clear_cart" class="btn btn-danger">Clear Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
  
        </div>
    <p><a href="cart.php">View Cart</a></p>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
