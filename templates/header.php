<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja </title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .brand {
            background: #004d25 !important;
        }

        .brand-text {
            color: #004d25 !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;

        }
        /* Style for the pizza image within the card */
.pizza {
  /* Maintain the circular shape of the pizza image */
  border-radius: 50%;
  
  /* Set a fixed size that fits well within the card (adjust as needed) */
  width: 200px;
  height: 200px;
  
  /* Center the image horizontally */
  display: block;
  margin: 0 auto 10px auto; /* Top, right, bottom, left margin */
  
  /* Add a subtle border to complement the card design */
  border: 3px solid #ff6347; /* Tomato red to match pizza sauce */
  
  /* Add a slight shadow to match the card's z-depth effect */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  
  /* Ensure the image doesn't exceed its natural dimensions */
  object-fit: cover;
}

/* Hover effect for interactivity */
.pizza:hover {
  transform: scale(1.05); /* Slight zoom on hover */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Responsive adjustments for smaller screens */
@media (max-width: 600px) {
  .pizza {
    width: 150px;
    height: 150px;
    border-width: 2px;
  }
}

@media (max-width: 400px) {
  .pizza {
    width: 120px;
    height: 120px;
    border-width: 1px;
  }
}
    </style>
</head>

<body class="grey lighten-4">

    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Brian Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn brand z-depth-2">Add a pizza </a></li>


            </ul>
        </div>
    </nav>