  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="Description" content="Enter your description here" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <title>Title</title>
      <?php include 'style.php'; ?>
     
  </head>

  <body>
  <nav class="navbar navbar-expand-lg nav_style p-3">
          <a class="navbar-brand pl-4" href="#">Covid-19</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="#navbarSupportedContent">
              <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#aboutid">about</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#sympid">symptoms</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#preventid">prevention</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contactid">contact</a>
                  </li>
              </ul>
          </div>
      </nav>

      <div class="main_header">
          <div class="row w-100 h-100">
              <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                  <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                      <img src="images/eksath.png" class="leftimg" alt="e" width="250px" height="250px">
                  </div>
              </div>
              <div class="col-lg-7 col-md-7 col-12 text-center order-lg-2 order-1">
                  <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                      <h1>Let's Stay Safe & Fight Together Against Cor<span class="c_rotate"><img src="images/c2.png" alt="a"></span>na Virus</h1>
                  </div>
              </div>
          </div>
      </div>

      <section class="corona_update">
          <div class="mb-3">
              <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
          </div>
          <div class="d-flex justify-content-around align-items-center updates_area">
              <div>
                  <h1 class="count">70,70,12,253</h1>
                  <p>Passangers screend at airport</p>
              </div>
              <div>
                  <h1 class="count">40,45,12,253</h1>
                  <p>Active Covid-19 Cases</p>
              </div>
              <div>
                  <h1 class="count">4,39,06,972</h1>
                  <p>Cured/Discharged cases</p>
              </div>
              <div>
                  <h1 class="count">528121</h1>
                  <p>Deaths cases</p>
              </div>
          </div>
      </section>


      <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
          <div class="section_header text-center mb-5 mt-4">
              <h1>About COVID-19</h1>
          </div>
          <div class="row mr-auto pt-3">
              <div class="col-lg-5 col-md-6 col-12 ">
                  <img src="images/about.jpeg" alt="a" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                  <h2>What is COVID-19 (Corona Virus)</h2>
                  <p>COVID-19 is the infectious disease caused by the most recently
                      discovered corona virus. This new virus and disease were unknown
                      before the outbreak began in Wuhan, China, in December 2019.</p>
                  <p>Coronaviruses are a large family of viruses that usually cause mild to moderate upper-respiratory
                      tract illnesses in humans. However, three coronaviruses have caused more serious and fatal disease
                      in people: SARS coronavirus (SARS-CoV), which emerged in November 2002 and causes severe acute
                      respiratory syndrome (SARS); MERS coronavirus (MERS-CoV), which emerged in 2012 and causes Middle
                      East respiratory syndrome (MERS); and SARS-CoV-2, which emerged in 2019 and causes coronavirus
                      disease 2019 (COVID-19).Building on previous research on SARS and MERS, NIAID scientists and
                      NIAID-supported researchers mobilized quickly to develop COVID-19 therapeutics, vaccines and
                      diagnostics.Researchers continue to conduct basic research to understand how coronaviruses infect
                      cells and causes disease, and what interventions can detect, prevent and stop the spread of
                      disease.
                  </p>
              </div>
          </div>
      </div>

      <div class="container_fluid  pt-5 pb-5" id="sympid">
          <div class="section_header text-center mb-5 mt-4">
              <h1>Coronavirus Symptoms</h1>
          </div>

          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/cough.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption> Coughing</figcaption>
                      </figure>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/rn.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption>Running Nose</figcaption>
                      </figure>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/fever.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption> Fever</figcaption>
                      </figure>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/cold.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption>Cold</figcaption>
                      </figure>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/tiredness.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption>Tiredness</figcaption>
                      </figure>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <figure class="text-center">
                          <img src="images/breathing.png" alt="" class="img-fluid" width="120" height="120">
                          <figcaption>Difficuity Breathing</figcaption>
                      </figure>
                  </div>
              </div>
          </div>
      </div>
      <div class="container_fluid sub_section pt-5 pb-5" id="preventid">
          <div class="section_header text-center mb-5 mt-4">
              <h1>6 Steps Prevention Against Coronavirus</h1>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/handsenitize.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>Washing your hands properly with soap and water for at least 20 seconds
                                  is necessary to get rid of germs</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/mask.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>Cover mouth and nose with flexed elbow or use a disposable tissue & discard
                                  immediately after use.</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/socialdistance.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>Avoid Close contact Staying at least one meter away from other people lessens your
                                  chances of catching covid-19. </p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/home.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>Stay home and self-isolate from others in the household if you fell unwell</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/news.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>Stay informed by watching news & follow the recommended practices</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-12">
                              <figure class="text-center">
                                  <img src="images/ill.png" alt="" class="img-fluid" width="90" height="90">
                              </figure>
                          </div>
                          <div class="col-lg-8 col-md-8 col-12">
                              <p>If you have fever,cough and difficulty breathing.seek medical care early</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>


      <div class="container_fluid  pt-5 pb-5" id="contactid">
          <div class="section_header text-center mb-5 mt-4">
              <h1>Contact as ASAP</h1>
          </div>

          <div class="container">
              <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-12">
                      <form  action="" method="POST">
                          <div class="form-group">
                              <label>Username:</label>
                              <input type="text" class="form-control" name="username" placeholder="UserName"
                                required  >
                          </div>
                          <div class="form-group">
                              <label>Email:</label>
                              <input type="email" class="form-control" name="email" placeholder="name@example.com"
                                  required >
                          </div>
                          <div class="form-group">
                              <label>Mobile-No:</label>
                              <input type="tel" class="form-control" name="mobile" placeholder="MobileNo"
                                required  >
                          </div>
                          <div class="form-group">
                              <label>Selecton Symptoms:</label> <br>
                              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                  <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                                      name="coronasym[]" value="cold">
                                  <label class="custom-control-label" for="customcheckbox1">cold</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                  <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                                      name="coronasym[]" value="fever">
                                  <label class="custom-control-label" for="customcheckbox2">Fever</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                  <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                                      name="coronasym[]" value="dbreath">
                                  <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
                              </div>
                              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                  <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                                      name="coronasym[]" value="fweek">
                                  <label class="custom-control-label" for="customcheckbox4">Feeling Week</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
                              <textarea class="form-control" rows="3" name="msg"></textarea>
                          </div>
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      <!--//////////////////// footer ///////////////////////// -->
      <footer class="mt-5">
          <div class="footer-style text-white text-center container-fluid">
              <p class="pt-3">Copyright@Mr.Smiley🙂</p>
          </div>
      </footer>
      <!-- ///////////top cursor/////////////// -->
      <div class="container scrolltop float-right pr-5">
          <i class="fa-solid fa-arrow-up" id="mybtn" onclick="Topfunction()"></i>
      </div>

      <script>
      mybutton = document.getElementById("mybtn");
      window.onscroll = function() {
          scrollFunction()
      };

      function scrollFunction() {
          if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
              mybutton.style.display = "block";
          } else {
              mybutton.style.display = "none";
          }
      }

      function Topfunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
      </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
         jQuery(document).ready(function( $ ) {
        $('.count').counterUp({
            delay: 20,
            time: 5000
        });
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  </html>

  <?php include 'db.php';?>
  <?php include 'connection.php';?> 