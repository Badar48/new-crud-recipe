<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/27bbfc67d4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="slider.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>



<div class="row bg-white  px-0 w-100 m-0 ">
  <div class="col-md-12 px-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" >
          <div class="carousel-item active" data-interval="5000">
            <div class="desktop d-md-block d-none">
               <div class="img1 d-md-block d-none"></div>
                <div class="d-flex  carousel-caption  h-100 w-100 align-items-center ">
                  <div class="col w-58">
                        <h1 class="freshtext font-weight-bold">Hot& Deals</h1>
                        <h3 class=" anmi">Free Delivery By Lahori Deria On Your First Order</h3>

                        <button type="button" class="btn btnborder  btn-outline-light px-5 py-3 mt-4 mb-4 ">ORDER NOW</button>
                        <h3 class="callus text-white"> Call us : 044-4367748748</h3>
                      </div>
                  </div>
                </div>
              <div class="mobile d-md-none d-block w-100">
                <img src="img/bgred.png" class= "d-md-none d-block w-100 h-608">
            <div class="d-flex  carousel-caption  h-100 w-100 m-0 align-items-center ">
                <div class="col w-100">
                      <h1 class="freshtextmob2">Hot& Dealst</h1>
                      <h5 class=" anmi" >Free Delivery By Lahori Deria On Your First Order</h5>
                      <button type="button" class="btn btnborder  btn-outline-light px-5 py-3 mt-4 mb-4">ORDER NOW</button>
                      <h3 class="callus text-white"> Call us : 044-4367748748</h3>
                    <!--   <%= image_tag"leave.png", class: "leave"%>
                       <%= image_tag"potato.png", class: "leaver"%>
                       <%= image_tag"smallleav.png", class: "leaver1"%> -->
                    </div>
                </div>
          </div>
      </div>

      <!-- Extra code partial -->
      <div class="carousel-item" data-interval="5000">
            <div class="desktop d-md-block d-none">
             <div class="img2 d-md-block d-none"></div>
                <div class="d-flex  carousel-caption  h-100 w-100 align-items-center ">
                  <div class="col w-58">
                        <h1 class="freshtext font-weight-bold"> Take A Delicious Bite</h1>
                        <h3 class=" anmi">Buy 2 large size piza only in 10$</h3>
                        <button type="button" class="btn btnborder  btn-outline-light px-5 py-3 mt-4 mb-4 ">ORDER NOW</button>
                        <h3 class="callus text-white"> Call us : 044-4367748748</h3>
                      </div>
                  </div>
                </div>
              <div class="mobile d-md-none d-block">
                <img src="img/slider2.png"class= "d-md-none d-block w-100 h-608">
            <div class="d-flex  carousel-caption  h-100 w-100 m-0 align-items-center ">
                <div class="col w-100">
                      <h1 class="freshtextmob">Bite Me Now</h1>
                      <h5 class=" anmi" >Free Delivery  On Your First Order</h5>
                      <button type="button" class="btn btnborder  btn-outline-light px-5 py-3 mt-4 mb-4 ">ORDER NOW</button>
                      <h3 class="callus text-white"> Call us : 044-4367748748</h3>
                     <!--  <%= image_tag"leave.png", class: "leave"%>
                       <%= image_tag"potato.png", class: "leaver"%>
                       <%= image_tag"smallleav.png", class: "leaver1"%> -->
                    </div>
                </div>
          </div>
        </div>
        </div>
     <!-- Extra code partial -->
      <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only d-md-block d-non">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only d-md-block d-non">Next</span>
      </a>
    </div>
  </div>
  <!-- slider completed -->
</body>
</html>
