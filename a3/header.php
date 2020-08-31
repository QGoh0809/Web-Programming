<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.">
      <meta name="author" content="Quinn Goh">
      <title>Assignment Three</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <!-- Basic stylesheet -->
     <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <!-- Default Theme -->
     <link rel="stylesheet" href="owl-carousel/owl.theme.css">
     <!-- Include js plugin -->
     <script src="owl-carousel/owl.carousel.js"></script>
     <script> $(".owl-carousel").owlCarousel(); </script>
   </head>

   <body>
      <header id="nav" class="sticky-nav">
         <nav class="container">
            <ul role="list" class="nav-grid-2 w-list-unstyled">
               <li id="home-nav"><a href="#" class="nav-logo-link w-inline-block"><img src='../a2/media/nav-logo.png'  sizes="(max-width: 479px) 100vw, (max-width: 767px) 37vw, 282.640625px" alt="nav-logo" class="nav-logo"></a></li>
               <li><a href="contact.php" class="nav-link">Contact</a></li>
               <li><a href="postcards.php" class="nav-link">Letters & Postcards</a></li>
               <li><a href="descriptions.php" class="nav-link">Description</a></li>
               <li><a href="index.php" class="nav-link">Home</a></li>
               <li id="main-nav" class="nav-link"></li>
            </ul>
         </nav>
      </header>  

