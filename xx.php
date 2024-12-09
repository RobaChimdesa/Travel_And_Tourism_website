<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Listings</title>
  <!-- swiper css link -->



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


<!-- font awesome cnd link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">

  <style>
    .property-container {
      display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 2rem;
    }

    .property-card {
      

      /* border: var(--border); */
  box-shadow: var(--box-shadow);
  background: var(--white);
  
    }

    .property-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .property-card img:hover{
      transform: scale(1.1);
    }
    .property-card img:hover{
     transition: .2s linear;
    }

    .property-details {
      padding: 20px;
     
    }

    .property-details h3 {
      margin-top: 0;
    }

    .load-more {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
    }

    .load-more:hover {
      background-color: #0056b3;
    }

    .search-container {
      margin-bottom: 20px;
    }

    .search-container input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<section class="header">

    <a href="home.php" class="logo">travel.</a>
    <img src="image/image.png" alt="Mint Company Logo" class="log">
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->

  <div class="heading" style="background:url(image/head.avif) no-repeat">
    <h1>packages</h1>
  </div>
  <section class="packages">
  <h1 class="heading-title">top destinations</h1>
  <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search properties..." onkeyup="filterProperties()">
    </div>
  <div class="container">
    
    <div class="property-container" id="property-listings">
      
    </div>
    <button class="load-more" onclick="loadMoreProperties()">Load More</button>
  </div>
   
  </section>
  

  <script>
    const properties = [
      {
        image: "image/image-2.jpg",
        title: "Property 1",
        location: "123 Main Street, Anytown USA",
        price: "$450,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 2",
        location: "456 Oak Avenue, Anothertown CA",
        price: "$325,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 3",
        location: "789 Elm Street, Somewhereville OR",
        price: "$550,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 4",
        location: "321 Maple Lane, Otherville WA",
        price: "$425,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 1",
        location: "123 Main Street, Anytown USA",
        price: "$450,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 2",
        location: "456 Oak Avenue, Anothertown CA",
        price: "$325,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 3",
        location: "789 Elm Street, Somewhereville OR",
        price: "$550,000"
      },
      {
        image: "https://via.placeholder.com/200x150",
        title: "Property 4",
        location: "321 Maple Lane, Otherville WA",
        price: "$425,000"
      }
    ];

    let currentIndex = 0;
    const maxProperties = 3;

    function displayProperties(filteredProperties) {
      const propertyListings = document.getElementById("property-listings");
      propertyListings.innerHTML = "";

      for (let i = 0; i < filteredProperties.length && i < currentIndex + maxProperties; i++) {
        const property = filteredProperties[i];

        const propertyCard = document.createElement("div");
        propertyCard.classList.add("property-card");
        // box
        const img = document.createElement("img");
        img.src = property.image;
        img.alt = property.title;

        const details = document.createElement("div");
        details.classList.add("property-details");
        // content

        const title = document.createElement("h3");
        title.textContent = property.title;

        const location = document.createElement("p");
        location.textContent = property.location;

        const price = document.createElement("p");
        price.textContent = property.price;

        const seeDetailsButton = document.createElement("button");
        seeDetailsButton.textContent = "See Detail";
        

        details.appendChild(title);
        details.appendChild(location);
        details.appendChild(price);
        details.appendChild(seeDetailsButton);

        propertyCard.appendChild(img);
        propertyCard.appendChild(details);

        propertyListings.appendChild(propertyCard);
      }

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
</body>
</html>