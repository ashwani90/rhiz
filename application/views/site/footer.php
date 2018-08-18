 <!-- Footer -->
 <footer class="" style="border-top:1px solid #000;padding-top: 20px;padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="m-0">Copyrights © 2017 Studio Rhizome</p>
          </div>
          <div class="col-md-8 text-right">
              <ul class="social-network social-circle">
                  <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->

 <script>
     //code to hide and show the transparent navbar
         $(document).scroll(function() {
             var bottom = $('#bottom').position().top + $('#bottom').outerHeight(true);
             var y = $(this).scrollTop();
         if (y > bottom) {
         $('#bottomMenu').show();
         } else {
         $('#bottomMenu').hide();
         }
         });
 </script>
  </body>
</html>