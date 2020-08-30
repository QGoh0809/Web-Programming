<footer id="footer" class="footer">
         <div class="w-container">
         <div class="footer-flex-container">
            <ul role="list" class="w-list-unstyled">
               <li><a href="https://www.sites.google.com/site/anzacdouglasraymondbaker/link-to-related-material" class="footer-link">Realted Material</a></li>
               <li><a href="contact.php" class="footer-link">Contact</a></li>
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