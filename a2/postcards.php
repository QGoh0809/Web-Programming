<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Assignment 2</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script type="text/javascript" src="../a2/mapdata.js"></script>		
      <script  type="text/javascript" src="../a2/worldmap.js"></script>
      <script  type="text/javascript" src="../a2/essential.js"></script>
      <script src='../wireframe.js'></script>
   </head>
   <body>
      <header id="nav" class="sticky-nav">
         <nav class="container">
            <ul role="list" class="nav-grid-2 w-list-unstyled">
               <li id="home-nav"><a href="#" class="nav-logo-link w-inline-block"><img src='../a2/media/nav-logo.png'  sizes="(max-width: 479px) 100vw, (max-width: 767px) 37vw, 282.640625px" alt="" class="nav-logo"></a></li>
               <li><a href="#" class="nav-link">Letters</a></li>
               <li><a href="#" class="nav-link">Postcards</a></li>
               <li><a href="#" class="nav-link">Description</a></li>
               <li><a href="index.php" class="nav-link">Home</a></li>
               <li id="main-nav" class="nav-link"></li>
            </ul>
         </nav>
      </header>
      
      <section class="feature-section-3">
          <div class="centered-container-2 container">
          <h1 class="heading-3">Letters & Postcards</h1>
          <br/>
            <div class="tab">
               <button class="tablinks" onclick="tabName(event, '1914')">1914</button>
               <button class="tablinks" onclick="tabName(event, '1915')">1915</button>
               <button class="tablinks" onclick="tabName(event, '1916')">1916</button>
               <button class="tablinks" onclick="tabName(event, '1917')">1917</button>
               <button class="tablinks" onclick="tabName(event, '1918')">1918</button>
            </div>
            <!-- Tab content -->
            <div id="1914" class="tabcontent">
               <h3>1914</h3>
               </br> 
               <p>Placeholder</p>
            </div>
            <div id="1915" class="tabcontent">
               <h3>1915</h3>
               <p>Placeholder.</p>
            </div>
            <div id="1916" class="tabcontent">
               <h3>1916</h3>
               <p>Placeholder.</p>
            </div>
            <div id="1917" class="tabcontent">
               <h3>1917</h3>
               <p>Placeholder.</p>
            </div>
            <div id="1918" class="tabcontent">
               <h3>1918</h3>
               <p>Placeholder.</p>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="w-container">
         <div class="footer-flex-container">
            <a href="index.php" class="footer-logo-link w-inline-block"><img src="../a2/media/nav-logo.png" alt="" class="footer-image"></a>
            <div>
               <h2 class="footer-heading">Navigation</h2>
               <ul role="list" class="w-list-unstyled">
                  <li><a href="#" class="footer-link">Realted Material</a></li>
                  <li><a href="#" class="footer-link">Get In Touch</a></li>
                  <li><a href="#" class="footer-link">Letters and Postcards</a></li>
                  <li><a href="#" class="footer-link">Description</a></li>
                  <li><a href="#" class="footer-link">Site Map</a></li>
               </ul>
            </div>
            <div>
               <h2 class="footer-heading">Contact Details</h2>
               <ul role="list" class="w-list-unstyled">
                  <li><a href="mailto:ibak6837@bigpond.net.au" class="footer-link">ibak6837@bigpond.net.au</a></li>
               </ul>
            </div>
         </div>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>