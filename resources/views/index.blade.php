@extends('layouts.app')
@section("content")

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="caption">
                <h2>Amina Mohammed Ecommerce Shop In Nairobi </h2>
                <div class="line-dec"></div>
                <p>A website that allows people to buy and sell physical goods, services, and digital products over the internet rather than at a brick-and-mortar location.
                <br><br>Please tell your friends about <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you. Photo credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.</p>
                <div class="main-button">
                  <a href="#">Order Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->


    <!-- Featured Starts Here -->

       <div class="featured-items">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="section-heading">
                 <div class="line-dec"></div>
                 <h1>Featured Items</h1>
               </div>
             </div>
             <div class="col-md-12">
               <div class="owl-carousel owl-theme">

                   <div class="featured-item">
                     <img src="assets/images/item-01.jpg" alt="Item 1">
                     <h4>Light blue jeans </h4>
                     <h6>$55.00</h6>
                   </div>

                   <div class="featured-item">
                     <img src="assets/images/item-02.jpg" alt="Item 2">
                     <h4>Black jeans </h4>
                     <h6>$55.00</h6>
                   </div>

                   <div class="featured-item">
                     <img src="assets/images/item-03.jpg" alt="Item 3">
                     <h4>puffy short sleeve sweater</h4>
                     <h6>$35.00</h6>
                   </div>

                   <div class="featured-item">
                     <img src="assets/images/item-04.jpg" alt="Item 4">
                     <h4>Channel handbag</h4>
                     <h6>$55.00</h6>
                   </div>

                    <div class="featured-item">
                      <img src="assets/images/item-05.jpg" alt="Item 5">
                      <h4>Men Jeans</h4>
                      <h6>$75.00</h6>
                    </div>

                   <div class="featured-item">
                     <img src="assets/images/item-05.jpg" alt="Item 5">
                     <h4>Gucci Handbag</h4>
                     <h6>$75.00</h6>
                   </div>

                   <div class="featured-item">
                     <img src="assets/images/item-06.jpg" alt="Item 6">
                     <h4>Converse sneakers</h4>
                     <h6>$65.00</h6>
                   </div>

                    <div class="featured-item">
                      <img src="assets/images/thumb-01.jpg" alt="Item 6">
                      <h4>Jeans</h4>
                      <h6>$75.00</h6>
                    </div>
                  </a>

               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- Featred Ends Here -->


       <!-- Subscribe Form Starts Here -->
       <div class="subscribe-form">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="section-heading">
                 <div class="line-dec"></div>
                 <h1>Subscribe on PIXIE now!</h1>
               </div>
             </div>
             <div class="col-md-8 offset-md-2">
               <div class="main-content">
                 <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id dictum efficitur. Phasellus vel interdum elit.</p>
                 <div class="container">
                   <form id="subscribe" action="" method="get">
                     <div class="row">
                       <div class="col-md-7">
                         <fieldset>
                           <input name="email" type="text" class="form-control" id="email"
                           onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                           onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                           value="Your Email..." required="">
                         </fieldset>
                       </div>
                       <div class="col-md-5">
                         <fieldset>
                           <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                         </fieldset>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- Subscribe Form Ends Here -->


  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>




@endsection




