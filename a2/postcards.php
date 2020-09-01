<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.">
      <meta name="author" content="Quinn Goh">
      <title>Assignment Two</title>
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
               <li><a href="postcards.php" class="nav-link">Letters & Postcards</a></li>
               <li><a href="descriptions.php" class="nav-link">Description</a></li>
               <li><a href="index.php" class="nav-link">Home</a></li>
               <li id="main-nav" class="nav-link"></li>
            </ul>
         </nav>
      </header>
      <header class="hero-overlay">
         <div class="centered-container-2 container">
            <h1 class="heading-3">Letters & Postcards<br></h1>
            <p class="paragraph-2">
         </div>
      </header>
      
      <section class="feature-section-2">
          <div class="centered-container-2 container">
          <h1 class="heading-3">Click on a tab to reveal a letter or postcard</h1> 
            <br/>
            <div class="tab">
               <button class="tablinks" onclick="openTab(event, '1914')">1914</button>
               <button class="tablinks" onclick="openTab(event, '1915')">1915</button>
               <button class="tablinks" onclick="openTab(event, '1916')">1916</button>
               <button class="tablinks" onclick="openTab(event, '1917')">1917</button>
               <button class="tablinks" onclick="openTab(event, '1918')">1918</button>
            </div>
            <!-- Tab content -->
            <div id="1914" class="tabcontent">
               <h3>Post Card. August 25th 1914.</h3>
               </br> 
               <p-3>Just have a chance to write a few lines at a small shop near the Camp. We had about four hours in Brisbane before going to Camp and had a good look round. Arrived in Camp about 6 p.m. and all the Gympie lads [Infantry] were placed in one tent [11 of us].  The Light Horse are nearly a mile from us. Of course it was my luck to be made Tent Orderly for the first day – getting the tucker and cleaning up. We have had nothing issued to us yet, so just as well I brought something.  There is no child’s play in this camp – plenty of hard work – they mean business. We have a free hand at night so far and can write as we like.  Saw Herb as we were marching to the Camp. He was going back from work and I had only time to shake hands with him – could not leave the ranks. We will be under Captain Jackson. He has been appointed Captain of the Northern Rivers men and managed to get us in with him. Cannot write any more, am in a hurry. Will write more later on. Am feeling quite homesick. Had our feet examined today, teeth tomorrow I think. </p-3>
               </br> 
               <h3>August 28th. 1914.</h3>
               <p-3>We are doing plenty of hard work, the officers here think we will be sent straight into the firing line when we get there and the men all seem eager for it. Taking things altogether the life here is not too bad. All the Gympie fellows are very decent and we stick together. Today we were issued with new rifles and bayonets, etc. but so far no uniform.  My regimental number is 692 but you need not put that in the address of any letters. We were advised to let our people know our number in case  - - - -.
               </br>Yesterday about 150,000 rounds of ball cartridges arrived, we will have to go through a stiff shooting test. Our feet are examined every day. We sit in a long row with bare feet sticking out. I will have to dress for parade now so hooray with best love from Ray. </p-3>
               <br/>
               <h3>August 31st. 1914.</h3>
               <p-3>On Saturday when we came into camp from drill at 12 o’clock, we were told that the Commandant was very pleased with the progress made and had granted us a half holiday so the Gympie lads decided to go to the city. We had a good time in Brisbane and had tea at a fish shop.  Met Herb at about 7 p.m. and we all went to the Empire but the show was very poor. We have had issued to us two towels, two pairs under-pants, two singlets, two pairs socks, a sweater and a cake of soap. I think we will get boots in a day or two and other things.
               </br>A church parade was held but none of the Gympie lads attended. It happened to be a voluntary one! We are all keeping in pretty good health and hope you all are at home. Today is payday, we are to get paid every fortnight, this time we will get 11 days. I am only drawing half of mine and banking the rest. Love to all.    
            </div>
            <div id="1915" class="tabcontent">
               <h3>1915</h3>
               </br> 
               <p-3>Lorem Ipsum</p-3>
            </div>
            <div id="1916" class="tabcontent">
               <h3>1916</h3>
               </br> 
               <p-3>Lorem Ipsum</p-3>
            </div>
            <div id="1917" class="tabcontent">
               <h3>1917</h3>
               </br> 
               <p-3>Lorem Ipsum</p-3>
            </div>
            <div id="1918" class="tabcontent">
               <h3>1918</h3>
               </br> 
               <p-3>Lorem Ipsum</p-3>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="w-container">
         <div class="footer-flex-container">
               <ul role="list" class="w-list-unstyled">
                  <li><a href="https://www.sites.google.com/site/anzacdouglasraymondbaker/link-to-related-material" class="footer-link">Realted Material</a></li>
                  <li><a href="mailto:ibak6837@bigpond.net.au" class="footer-link">Get In Touch</a></li>
                  <li><a href="postcards.php" class="footer-link">Letters and Postcards</a></li>
                  <li><a href="descriptions.php" class="footer-link">Description</a></li>
                  <li><a href="#" class="footer-link">Site Map</a></li>
               </ul>
         </div>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script> Quinn Goh, S3724287. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>

<?php 
     include 'footer.php'; 
   ?>