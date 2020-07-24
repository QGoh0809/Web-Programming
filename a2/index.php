<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Assignment 2</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script type="text/javascript" src="../mapdata.js"></script>		
      <script  type="text/javascript" src="../worldmap.js"></script>
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
      <header class="hero-overlay">
         <div class="centered-container-2 container">
            <h1 class="heading-3">ANZAC Douglas Raymond Baker <br>Letters Home</h1>
            <p class="paragraph-2">This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people, are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend.<br><br>This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences while visiting his relatives in England during leave.<br><br>They start from the beginning of basic training in Brisbane in August 1914 and end in May 1918.<br><br>They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on the battlefield was like.<br><br>From the menu on the left, read the <em>Introduction </em>to set the scene. Then, to start reading the letters, click on <em>Letter and Post Cards </em>in the button below or from the navigation bar above. </p>
            <div><a href="#" class="button-3 w-button">Letters and postcards</a></div>
         </div>
      </header>
      
      
      <main>
         <section class="feature-section-2">
            <div class="flex-container container">
               <div class="feature-image-mask"><img src='../a2/media/baker-profile.png' width="391" height="" alt="Douglas-Raymond-Baker" class="feature-image"></div>
               <div>
                  <h2>Introduction<br></h2>
                  <p>These are copies of letters written by my father Douglas Raymond Baker during the First World War (1914-1918) to his family in Gympie. I have three thick exercise books in which the letters were copied in hand writing by my Aunt Alice, his sister. I understand that this was done so his letters could be sent on to other members of the family. I don’t know if the originals are still in existence, probably not.<br><br>In the early letters Alice has not included the name of the person they were written to but later she writes at the beginning, “Letter to Dot”,  “Letter to Mother”, etc. and later still copies the original, “Dear Al”, “Dear Mag”, etc..  Likewise the endings are often not laid out fully as we would do but Al may have done this or Dad may have been saving space on the page.</p>
                  <br/>
                  <span onclick="document.getElementById('id01').style.display='block'"
                     class="button-3 w-button ">Continue Reading</span>
               </div>
            </div>
          </section>
          <section class="feature-section-3">
          <div class="centered-container-2 container">
          <h1 class="heading-3">Places Visited</h1>
          <br/>
          <div id="map">
          </div>
          </div>

         </section>
        </main>







      <div id="id01" class="modal">
         <div class="modal-content">
            <div class="container">
               <span onclick="document.getElementById('id01').style.display='none'" 
                  class="button-3 w-button w-display-topright">&times;</span>
               <p>In the early letters Alice has not included the name of the person they were written to but later she writes at the beginning, “Letter to Dot”,  “Letter to Mother”, etc. and later still copies the original, “Dear Al”, “Dear Mag”, etc..  Likewise the endings are often not laid out fully as we would do but Al may have done this or Dad may have been saving space on the page.</p>
               <p></p>
               <p>Some letters are slightly out of date order in the books but as most of these are around the time his father died I have put them in the correct order as this is crucial to understanding the sense of the contents.  A lot will be missing – many, many ships were sunk but thanks to Aunt Alice we have these copies of the ones that did get through.</p>
               <p></p>
               <p>Where Dad used brackets in a letter I have used [   ]  style and where I have made any comment or explanation I have used (   ) and Italics.</p>
               <p></p>
               <p>Where he uses the word “gay” it is used in the true sense, bright, happy, carefree, etc., This is the original meaning of the word before it became associated with the homosexual community.</p>
               <p></p>
               <p>The amounts of money are, of course, in Pounds, shillings and pence but as these are out of date and we have no pounds sign in the computer I have written them in, sometimes showing the decimal equivalents. One Pound equalled $2,  one shilling equalled 10 cents and one penny equalled a little under one cent. After a while I stopped putting the equivalents in as they had cno significance unless you knew the relative cost of things then and now. A shilling – equivalent to ten cents might actually alent to ten cents might actually buy  buy ten or twenty dollars worth of goods now.</p>
               </div>

              </div>
         </div>
      </div>
      <footer>
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