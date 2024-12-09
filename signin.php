<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>


  <link rel="stylesheet" href="ttps://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    #container {
      width: 500px;
      height: 450px;
      margin: 0 auto;
      margin-top: 18px;
      padding: 20px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type=email],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    #sbt {
      background: var(--black);
      color: white;
      padding: 14px 20px;
      margin: 18px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;

    }

    #sbt:hover {
      background: var(--main-color);
    }

    .h22 {
      font-size: 1.5rem;
      color: var(--light-black);
    }

    .title {
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 3rem;
      text-transform: uppercase;
      color: var(--black);
    }
  </style>
</head>

<body>
  <section class="header">


    <!-- <a href="home.php" class="logo">Travel</a> -->
    <img style="margin-left: 36px;  border-radius: 50%;" src="image/image.png" alt="Mint Company Logo" class="log">

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>

      <a href="signin.php">SignIn</a>
      <a href="signup.php">SignUp</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <section class="booking" id="container">
    <h1 class="title">Sign In</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="book-form">
      <label for="username">
        <h2 class="h22">Email:</h2>
      </label>
      <input type="email" id="eamil" name="email" placeholder="Enter your eamil address" required>

      <label for="password">
        <h2 class="h22">Password:</h2>
      </label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <input id="sbt" type="submit" value="Sign In" name="signin">
    </form>
    </>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "book_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Check if the email and password match in the database
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // Redirect to the user page
    header("Location: package.php");
    exit;
  } else {

    // echo "<span style='color:red;margin-top:2rem; font-size:1.5rem'>Invalid email or password. Please try again.</span>";
    echo '<div style="position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 0 20px rgba(0,0,0,0.2);">';
    echo '<span style="color:red; font-size:1.5rem;">Invalid email or password. Please try again.</span>';
    echo '</div>';
  }
  $stmt->close();
}


?>