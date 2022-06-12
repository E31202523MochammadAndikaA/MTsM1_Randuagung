<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tentang</h2>
          <ol>
            <li><a href="<?= base_url(); ?>home/index">Home</a></li>
            <li>Tentang</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Mts. Muhammadiyah 01 Randuangung</title>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
          var propertiPeta = {
            center:new google.maps.LatLng(-8.057901270080302, 113.29840927613759),zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP};
            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
            
            // membuat Marker
            var marker=new google.maps.Marker({
              position: new google.maps.LatLng(-8.057901270080302, 113.29840927613759),
              map: peta,
              animation: google.maps.Animation.BOUNCE
            });
          }
          
          // event jendela di-load  
          google.maps.event.addDomListener(window, 'load', initialize);
          </script>
            <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>

        <div class="row mt-5">

          <div class="col-lg-8">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Raya Ledoktempuro Kec. Randuagung Kab. Lumajang</p>
                <p>Kode Pos : 67354 </p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>mtsmuhammadiyah01@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0823307101234</p>
              </div>

              <div class="fb mt-4">
                <a href="https://www.facebook.com/masmusaranduagung" class="facebook"><i class="bx bxl-facebook"></i></a>
                <h4>Facebook :</h4>
                <p>MTs Muhammadiyah Randuagung</p>
              </div>

              <div class="fb mt-4">
              <a href="https://www.instagram.com/masmusa_randuagung/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
                <h4>Instagram :</h4>
                <p>masmusa_randuagung</p>
              </div>

            </div>
          </div>



        </div>

      </div>

    
    </section><!-- End Contact Section -->

  </main><!-- End #main -->