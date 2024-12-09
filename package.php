<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>packages Listings</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <!-- font awesome cnd link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    /* .box-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
      padding: 20px;
    }

    .box {
      width: 100%;
      height: 200px;
      background-color: #f1f1f1;
    }

    .image img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .content h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .content p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 5px;
      margin-right: 5px;
    } */
    .search-container {
      margin-bottom: 20px;
    }

    .search-container input {
      width: 30%;
      padding: 10px;
      
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 50px;
      background-color:lightgrey;
    }
  </style>
</head>

<body>
  <!-- header section starts -->

  <section class="header">

    <img style="margin-left: 36px;  border-radius: 50%;" src="image/image.png" alt="Mint Company Logo" class="log">

    <nav class="navbar">

      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="home.php">Signout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->

  <div class="heading" style="background:url(image/head.avif) no-repeat">
    <h1>packages</h1>
  </div>

  <!--packages section starts-->
  <section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search location..." onkeyup="filterProperties()">
    </div>

    <div class="box-container">
      <!-- Property listings will be dynamically generated here -->
    </div>

    <!-- <div class="load-more"><span class="btn" ;>load-more</span></div> -->
    <div class="load-more"><span class="btn" ;>load-more</span></div>

  </section>


  <script>
    const properties = [{
        image: "image/image-2.jpg",
        location: "Gondor, Ethiopia",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.8019294572596!2d-118.11934878487334!3d34.10500208059441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2s456%20Oak%20Ave%2C%20Anothertown%2C%20CA%2091101%2C%20USA!5e0!3m2!1sen!2s!4v1676286520000!5m2!1sen!2s",


        price: "$500,000",
        description: "<h1>Fasil Ghebbi</h1><p>The Fasil Ghebbi is a fortress located in Gondar, Amhara Region, Ethiopia. It was founded in the 17th century by Emperor Fasilides and was the home of Ethiopian emperors.!</p>"
      },
      {
        image: "image/bale.jpg",
        location: "456 Oak Avenue, Anothertown CA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.8019294572596!2d-118.11934878487334!3d34.10500208059441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2s456%20Oak%20Ave%2C%20Anothertown%2C%20CA%2091101%2C%20USA!5e0!3m2!1sen!2s!4v1676286520000!5m2!1sen!2s",
        price: "$750,000",
        description: "<h1>Bale Mountain</h1><p>Bale Mountains National Park is a national park in Ethiopia. The park encompasses an area of approximately 2,150 km² .</p>"
      },
      {
        image: "image/axum.jpg",
        location: "axum obelisk",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5917996771425!2d-73.98565268467392!3d40.75840617932499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2s123%20Main%20St%2C%20New%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2s!4v1676286400000!5m2!1sen!2s",
        price: "$500,000",
        description: "<h1>axum obelisk</h1><p>The Obelisk of Axum is a 4th-century CE, 24-metre tall phonolite stele, weighing 160 tonnes, in the city of Axum in Ethiopia.</p>"
      },
      {
        image: "image/kumsamoroda.jpg",
        location: "456 Oak Avenue, Anothertown CA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.8019294572596!2d-118.11934878487334!3d34.10500208059441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2s456%20Oak%20Ave%2C%20Anothertown%2C%20CA%2091101%2C%20USA!5e0!3m2!1sen!2s!4v1676286520000!5m2!1sen!2s",
        price: "$750,000",
        description: "<h1>kumsa moroda palace</h1><p>𝗞𝘂𝗺𝘀𝗮 𝗠𝗼𝗿𝗼𝗱𝗮 𝗣𝗮𝗹𝗮𝗰𝗲 and 𝗗𝗵𝗶𝗱𝗵𝗲𝘀𝘀𝗮 𝗥𝗶𝘃𝗲𝗿 Kumsa Moroda palace was built in 1870 by the third king of Wallagga called king Kumsa Moroda..</p>"
      },
      {
        image: "image/lalibela.jpg",
        location: "123 Main Street, Anytown USA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5917996771425!2d-73.98565268467392!3d40.75840617932499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2s123%20Main%20St%2C%20New%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2s!4v1676286400000!5m2!1sen!2s",
        price: "$500,000",
        description: "<h1>Lalibela</h1><p>The construction of eleven rock-hewn churches is attributed to King Lalibela. The buildings are monolithic, carved from a sloping mass of red volcanic scoria underlaid by dark .</p>"
      },
      {
        image: "image/awash.jpg",
        location: "456 Oak Avenue, Anothertown CA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.8019294572596!2d-118.11934878487334!3d34.10500208059441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2s456%20Oak%20Ave%2C%20Anothertown%2C%20CA%2091101%2C%20USA!5e0!3m2!1sen!2s!4v1676286520000!5m2!1sen!2s",
        price: "$750,000",
        description: "<h1>Awash River</h1><p>The Awash is a major river of Ethiopia. Its course is entirely contained within the boundaries of Ethiopia and empties into a chain of interconnected lakes.</p>"
      },
      {
        image: "image/image-6.jpg",
        location: "123 Main Street, Anytown USA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5917996771425!2d-73.98565268467392!3d40.75840617932499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2s123%20Main%20St%2C%20New%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2s!4v1676286400000!5m2!1sen!2s",
        price: "$500,000",
        description: "<h1>Beautiful Home in Anytown</h1><p>This charming home offers a spacious living area, modern kitchen, and a cozy backyard. Perfect for families!</p>"
      },
      {
        image: "image/image-5.jpg",
        location: "456 Oak Avenue, Anothertown CA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.8019294572596!2d-118.11934878487334!3d34.10500208059441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2s456%20Oak%20Ave%2C%20Anothertown%2C%20CA%2091101%2C%20USA!5e0!3m2!1sen!2s!4v1676286520000!5m2!1sen!2s",
        price: "$750,000",
        description: "<h1>Modern Condo in Anothertown</h1><p>Enjoy city living in this stylish condo with stunning views. Features include a rooftop terrace and a fully equipped gym.</p>"
      },
      {
        image: "image/image-2.jpg",
        location: "123 Main Street, Anytown USA",
        map: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5917996771425!2d-73.98565268467392!3d40.75840617932499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2s123%20Main%20St%2C%20New%20York%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2s!4v1676286400000!5m2!1sen!2s",
        price: "$500,000",
        description: "<h1>Beautiful Home in Anytown</h1><p>This charming home offers a spacious living area, modern kitchen, and a cozy backyard. Perfect for families!</p>"
      }
    ];

    let currentIndex = 0;
    const maxProperties = 3;

    function displayProperties(filteredProperties) {

      const boxContainer = document.querySelector('.box-container');

      properties.forEach((property, index) => {
        const boxElement = document.createElement('div');
        boxElement.classList.add('box-container');

        boxElement.innerHTML = `
        <div class="box">
        <div class="image">
          <img src="${property.image}" alt="">
        </div>
        <div class="content">
          <h3>${property.description.match(/<h1>(.*?)<\/h1>/)[1]}</h3>
          <p>${property.description.match(/<p>(.*?)<\/p>/)[1]}</p>
          <a href="property-details.html?index=${index}" class="btn">See detail</a>
          <a href="book.php" class="btn">Book now</a>
        </div>
        </div>
      `;

        boxContainer.appendChild(boxElement);
      });
      currentIndex += maxProperties;
    }

    function loadMoreProperties() {
      displayProperties(filteredProperties);
    }

    function filterProperties() {
      const searchInput = document.getElementById("searchInput").value.toLowerCase();
      filteredProperties = properties.filter(property =>
        property.title.toLowerCase().includes(searchInput) ||
        property.location.toLowerCase().includes(searchInput) ||
        property.price.toLowerCase().includes(searchInput)
      );
      currentIndex = 0;
      displayProperties(filteredProperties);
    }

    let filteredProperties = [...properties];
    displayProperties(filteredProperties);
  </script>

  <!-- packages section ends here -->

  <!--footer section starts -->

  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
      </div>


      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us </a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>

      </div>


      <div class="box">
        <h3>contacts info</h3>
        <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i>+111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i>bonyd@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>Ethiopia</a>

      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
      </div>
    </div>

    <div class="credit">created by <span>2024 MINT</span> | all rights reserved! </div>
  </section>
  <!--footer section ends -->


  swiper js link
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- custom js file link -->
  <script src="js/script.js"></script>


</body>

</html>