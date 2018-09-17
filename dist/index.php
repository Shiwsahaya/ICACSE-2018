<?php include 'include/header.php' 

?>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: auto;
      opacity:0.7;
  }
  
  </style>

<!-- header close carosul star -->
<div>
  <div id="demo" class="carousel slide " data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.jpeg" alt="Los Angeles" width="auto" height="auto">
        <div class="carousel-caption">
          <h2>The conference is easy way</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum magni perspiciatis id iusto, fugiat natus illo, facilis autem ipsam aut 
          </p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/2.jpeg" alt="Chicago" width="auto" height="auto">
        <div class="carousel-caption">
          <h2>The conference is easy way</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum magni perspiciatis id iusto, fugiat natus illo, facilis autem ipsam aut 
          </p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/3.jpeg" alt="New York" width="auto" height="auto">
        <div class="carousel-caption">
          <h2>The conference is easy way </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum magni perspiciatis id iusto, fugiat natus illo, facilis autem ipsam aut 
          </p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
<!--  carosul start close -->
<br>
<!-- Badges Start -->

<div class="container-fluid" style="padding:60px 60px">
  <div class="row" >
    <div class="col-sm-8 about">
      <h2>ICACSE</h2>
      <h4>2<span style="font-size:15px">nd</span> International Conference on Adavanced Computing and Software Engineering</h4>      
      <p>KNIT Sultanpur</p>
    </div>
    <div class="col-sm-4">
       <i class="fas fa-school logo-company"></i>
    </div>
  </div>
</div>


<div class="container-fluid text-center unique">
  <h1>A UNIQE CONFRENCE</h1>
  <h4>We offers followiing services</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <i class="far fa-calendar-alt logo-small"></i>
      <h3>Events</h3>
      <p>This is show the event schedule</p>
    </div>
    <div class="col-sm-4">
     <i class="fas fa-book-open logo-small"></i>
      <h3>Topics</h3>
      <p>This is show the event schedule</p>
    </div>
    <div class="col-sm-4">
      <i class="fas fa-map-marked-alt logo-small"></i>
      <h3>Location</h3>
      <p>This is show the event schedule</p>
    </div>
  </div>
</div>
<br />
<br />
<!-- Badges close -->



<div class="container-fluid">
  <div class="jumbotron text-center" >
    <h1>Program</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus cumque ipsa, sunt, inventore qui esse placeat enim adipisci repellendus. Quod?</p>
  </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="card text-center">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Day 1
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h2>Day 1 Programs</h2>
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>Program</th>
              <th>Speaker</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Day 2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <h2>Day 2 Programs</h2>
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>Program</th>
              <th>Speaker</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Day 3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <h2>Day 3 Programs</h2>
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>Program</th>
              <th>Speaker</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



<!-- Our Speaker Start-->
<div class="container-fluid text-center bg-grey">
  <h2>Commitee</h2><br>
  <h4>Who we are</h4>
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="image/profile.jpeg" alt="Paris" width="100%" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="image/profile.jpeg" alt="Paris" width="100%" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="image/profile.jpeg" alt="Paris" width="100%" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="image/profile.jpeg" alt="Paris" width="100%" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div>
</div>
  <!-- Our Speaker Close-->
<!-- Container (Portfolio Section) -->
  <br>
<div class="container">
  <div class="row">
    <div class="text-center">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae dolore fugiat iure itaque ipsa animi quae
         laudantium voluptatem explicabo nostrum facilis dolorem sunt incidunt dicta excepturi tempora, tenetur reprehenderit
          eaque mollitia. Et vitae ab ea modi odit 
        vero molestiae, quaerat praesentium esse alias temporibus. Modi officia totam veritatis quos possimus!</p>
      
    </div>

  </div>
</div>
  <!-- -->
<!--Section: Contact v.2-->
<section class="container">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                          <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
            <br>
            <div class="text-center text-md-left">
                <a class="btn btn-primary">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

<?php include 'include/footer.php'?>