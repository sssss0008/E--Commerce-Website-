<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | E-Shop</title>
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

    /* About Us Section */
    .about {
      padding: 50px 20px;
      background: linear-gradient(135deg, #333, #111);
      animation: fadeIn 2s ease-in-out;
    }
    .about h2 {
      text-align: center;
      font-size: 2.5rem;
      color: #00ffcc;
      margin-bottom: 20px;
      text-shadow: 0 0 10px #00ffcc;
    }
    .about p {
      font-size: 1.2rem;
      line-height: 1.8;
      text-align: justify;
      margin-bottom: 20px;
      color: #ccc;
    }
    .about .team {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }
    .team-member {
      background: #222;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      width: 300px;
      box-shadow: 0 10px 20px rgba(0, 255, 255, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .team-member:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 255, 255, 0.5);
    }
    .team-member img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .team-member h3 {
      font-size: 1.5rem;
      color: #00ffcc;
      margin-bottom: 10px;
    }
    .team-member p {
      font-size: 1rem;
      color: #ccc;
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
 

  <!-- About Us Section -->
  <div class="about" id="about">
    <h2>About Us</h2>
    <?php
    // Company Details in PHP
    $companyName = "E-Shop";
    $foundedYear = "2010";
    $mission = "To provide the best online shopping experience with top-notch products and services.";
    $vision = "To revolutionize e-commerce with innovation and customer-centric values.";
    $teamMembers = [
      ["name" => "Alice Smith", "role" => "CEO", "img" => "https://via.placeholder.com/100"],
      ["name" => "Bob Johnson", "role" => "CTO", "img" => "https://via.placeholder.com/100"],
      ["name" => "Charlie Brown", "role" => "CFO", "img" => "https://via.placeholder.com/100"],
    ];
    ?>

    <p><strong><?php echo $companyName; ?></strong> was founded in <?php echo $foundedYear; ?> with the goal of making online shopping easy and accessible for everyone. Our mission is "<?php echo $mission; ?>" and our vision is "<?php echo $vision; ?>."</p>

    <h3 style="text-align: center; color: #00ffcc;">Meet Our Team</h3>
    <div class="team">
      <?php foreach ($teamMembers as $member): ?>
      <div class="team-member">
        <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>">
        <h3><?php echo $member['name']; ?></h3>
        <p><?php echo $member['role']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
