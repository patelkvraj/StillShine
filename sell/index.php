<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sell | Still Shine</title>
  <link rel="icon" href="../images/Logo-StillShine.svg" type="image/svg" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="../index.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="../resp.css" />
</head>

<body class="body">
  <div class="page">
    <?php include '../component/header.php'; ?>
    <!-- Main content -->
    <main class="main-content">
      <div class="content-wrap">
        <!-- Sell Price -->
        <label for="product-price">
          How much would you like to put for your product?
        </label>
        <select id="product-price" class="product-price-selection">
          <option>$$$</option>
          <option>10</option>
          <option>50</option>
          <option>100</option>
          <option>Custom</option>
        </select>
        <p class="OR__separator">OR</p>
        <!-- Select Category -->
        <h3>Select Category</h3>
        <div class="categories-list-sell">
          <!-- Electronics -->
          <div>
            <img src="images/dslr.png" />
            <p>Electronics</p>
          </div>
          <!-- Baby and Kids -->
          <div>
            <img src="images/baby-toy.png" />
            <p>Baby and Kids</p>
          </div>
          <!-- Sports & Outdoors -->
          <div>
            <img src="images/sports.png" />
            <p>Sports & Outdoors</p>
          </div>
          <!-- Clothing, Shoes & Accessories -->
          <div>
            <img src="images/clothes.png" />
            <p>Clothing, Shoes & Accessories</p>
          </div>
          <!-- Vehicles -->
          <div>
            <img src="images/car.png" />
            <p>Vehicles</p>
          </div>
          <!-- Furniture -->
          <div>
            <img src="images/furniture.png" />
            <p>Furniture</p>
          </div>
          <!-- Pet Supplies -->
          <div>
            <img src="images/pet-food.png" />
            <p>Pet Supplies</p>
          </div>
          <!-- Other -->
          <div class="other__category">
            <p>Other</p>
          </div>
        </div>
      </div>
    </main>
    <?php include '../component/footer.php'; ?>
  </div>
  <script src="../script.js"></script>
</body>

</html>