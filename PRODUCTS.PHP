<?php
// Start session
session_start();

// Simulate login check (replace with actual authentication logic)
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>
        alert('Access denied! Please log in to access the product page.');
        window.location.href = 'login.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page | E-Shop</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: black;
      color: white;
    }

    /* Navigation Bar */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #222;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }
    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav ul li a:hover {
      color: #00ffcc;
    }

    /* Product Section */
    .products {
      padding: 20px;
    }
    .category {
      margin-bottom: 40px;
    }
    .category h2 {
      font-size: 2rem;
      color: #00ffcc;
      text-shadow: 0 0 10px #00ffcc;
      margin-bottom: 20px;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }
    .product-card {
      background: #222;
      padding: 15px;
      border-radius: 10px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 10px 20px rgba(0, 255, 255, 0.2);
    }
    .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 255, 255, 0.5);
    }
    .product-card img {
      width: 200px;
      height: 200px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    .product-card h3 {
      font-size: 1.2rem;
      color: #00ffcc;
      margin: 10px 0;
    }
    .product-card p {
      font-size: 1rem;
      color: #ccc;
    }
    .product-card a {
      text-decoration: none;
      color: #00ffcc;
      font-weight: bold;
    }
    .product-card a:hover {
      text-decoration: underline;
    }

    /* Keyframes for fadeIn animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="logo">
      <a href="#" style="color: white; font-size: 24px; font-weight: bold;">E-Shop</a>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <!-- Product Section -->
  <div class="products">
    <?php
    // Define product categories and items
    $categories = [
        "Electronics" => ["Laptop", "Mobile", "Tablet", "Headphones", "Smartwatch", "Camera", "Speakers", "Mouse", "Keyboard", "Monitor"],
        "Clothing" => ["T-Shirt", "Jeans", "Jacket", "Dress", "Shoes", "Cap", "Scarf", "Gloves", "Sweater", "Belt"],
        "Home Appliances" => ["Refrigerator", "Washing Machine", "Microwave", "Blender", "Vacuum Cleaner", "Air Purifier", "Toaster", "Heater", "Fan", "Dishwasher"],
        "Books" => ["Novel", "Comic", "Biography", "Science", "History", "Fiction", "Non-Fiction", "Travel", "Self-Help", "Poetry"],
        "Sports" => ["Football", "Cricket Bat", "Tennis Racket", "Basketball", "Volleyball", "Hockey Stick", "Shuttlecock", "Golf Clubs", "Swimming Goggles", "Skateboard"],
        "Beauty" => ["Lipstick", "Foundation", "Eyeliner", "Perfume", "Moisturizer", "Hair Oil", "Shampoo", "Conditioner", "Face Wash", "Body Lotion"],
        "Toys" => ["Action Figure", "Doll", "Puzzle", "Building Blocks", "Board Game", "Toy Car", "Yo-Yo", "Remote Control Car", "Stuffed Animal", "Drone"],
        "Furniture" => ["Sofa", "Table", "Chair", "Bed", "Wardrobe", "Bookshelf", "Desk", "Dining Table", "TV Stand", "Cabinet"],
        "Groceries" => ["Rice", "Wheat", "Sugar", "Salt", "Tea", "Coffee", "Milk", "Vegetables", "Fruits", "Oil"],
        "Jewelry" => ["Necklace", "Earrings", "Bracelet", "Ring", "Watch", "Pendant", "Brooch", "Anklet", "Bangle", "Cufflinks"]
    ];

    $priceRange = [500, 1000, 2000, 3000, 5000, 7000, 10000];

    // Display categories and items
    foreach ($categories as $category => $items) {
        echo "<div class='category'>";
        echo "<h2>$category</h2>";
        echo "<div class='product-grid'>";
        foreach ($items as $item) {
            $price = $priceRange[array_rand($priceRange)];
            echo "
            <div class='product-card'>
              <img src='https://via.placeholder.com/200' alt='$item'>
              <h3>$item</h3>
              <p>Price: NPR $price</p>
              <a href='#'>Buy Now</a>
            </div>
            ";
        }
        echo "</div>";
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
