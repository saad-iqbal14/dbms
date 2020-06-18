<?php
include 'links.php';
?>

<html>

<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
  <base target="_self">
  <meta name="" content=""
  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/images/cp_ico.png">


  <!--stylesheets / link tags loaded here-->


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />


  <style type="text/css">
    body,
    html {
      height: 100%;
    }
    /* workaround modal-open padding issue */
    
    body.modal-open {
      padding-right: 0 !important;
    }
    
    #sidebar {
      padding-left: 0;
    }
    /*
 * Off Canvas at medium breakpoint
 * --------------------------------------------------
 */
    
    @media screen and (max-width: 48em) {
      .row-offcanvas {
        position: relative;
        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
      }
      .row-offcanvas-left .sidebar-offcanvas {
        left: -33%;
      }
      .row-offcanvas-left.active {
        left: 33%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        position: absolute;
        top: 0;
        width: 33%;
        height: 100%;
      }
    }
    /*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */
    
    @media screen and (max-width: 34em) {
      .row-offcanvas-left .sidebar-offcanvas {
        left: -45%;
      }
      .row-offcanvas-left.active {
        left: 45%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        width: 45%;
      }
    }
    
    .card {
      overflow: hidden;
    }
    
    .card-block .rotate {
      z-index: 8;
      float: right;
      height: 100%;
    }
    
    .card-block .rotate i {
      color: rgba(20, 20, 20, 0.15);
      position: absolute;
      left: 0;
      left: auto;
      right: -10px;
      bottom: 0;
      display: block;
      -webkit-transform: rotate(-44deg);
      -moz-transform: rotate(-44deg);
      -o-transform: rotate(-44deg);
      -ms-transform: rotate(-44deg);
      transform: rotate(-44deg);
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primarry mb-3" style="background-image: linear-gradient( to right,lightblue, lightgreen);">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="flex-row d-flex">
      <a class="navbar-brand mb-1" href="#">Yolo</a>
      <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#myAlert" data-toggle="collapse">Notificatoins</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
      <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav flex-column pl-1">
          <li class="nav-item"><a class="nav-link" href="adminAddEvents.php">Add Events</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Users ▾</a>
            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
              <li class="nav-item"><a class="nav-link" href="totalusers.php">Total Users</a></li>
              <li class="nav-item"><a class="nav-link" href="">Delete Users</a></li>
              <li class="nav-item"><a class="nav-link" href="">Add Users</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">New Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="userFeedback.php">User Feedback</a></li>
          
        </ul>
      </div>

      <!--/col-->

      <div class="col-md-9 col-lg-10 main">

        <!--toggle sidebar button
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>-->

        <h1 class="display-2 hidden-xs-down" style="margin-top: 70px; margin-left: 195px;">
            Admin Dashboard
            </h1>

        <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
          <strong>No Notifications!</strong>
        </div>

        <div class="row mb-3 text-center" style="margin-top: 5%; ">
        	<br>
          <div class="col-xl-4 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Users</h6>
                <h1 class="display-1">134</h1>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Posts</h6>
                <h1 class="display-1">87</h1>
              </div>
            </div>
          </div>
          
          <div class="col-xl-4 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-share fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Shares</h6>
                <h1 class="display-1">36</h1>
              </div>
            </div>
          </div>
        </div>
        <!--/row-->

        <hr class="P-3">

        <div class="row placeholders mb-3 P-5">
          <div class="col-6 col-sm-4 placeholder text-center">
            <img src="//placehold.it/200/dddddd/fff?text=1" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>likes</h4>
            <span class="text-muted">Users</span>
          </div>
          <div class="col-6 col-sm-4 placeholder text-center">
            <img src="//placehold.it/200/e4e4e4/fff?text=2" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Views</h4>
            <span class="text-muted">Users</span>
          </div>
          <div class="col-6 col-sm-4 placeholder text-center">
            <img src="//placehold.it/200/d6d6d6/fff?text=3" class="center-block img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Intrested</h4>
            <span class="text-muted">Users</span>
          </div>
         

        <a id="features"></a>
        <hr>
       
        <hr class="P-3">
          </div>

         
        <!--/row-->

        <a id="more"></a>
        <hr class="P-3">
        <h1 style="padding-left :40%;">Feedback</h1>
          <!--/col-->
          <div class="col-lg-6 P-5" style="margin-left: :15%; ">

            <div id="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Feedback 1
                </div>

                <div id="collapseOne" class="card-block collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <p>User Feedback</p>
                </div>
                <div class="card-header" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Feedback 2
                </div>
                <div id="collapseTwo" class="card-block collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <p>User Feedback</p>
                </div>
                <div class="card-header" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Feedback 3
                </div>

                <div id="collapseThree" class="card-block collapse" role="tabpanel" aria-labelledby="headingThree">
                  <p>User Feedback</p>
                </div>
              </div>
            </div>
          </div>
          <!--/col-->
        </div>
        <!--/row-->

      </div>
      <!--/main col-->
    </div>

  </div>
  <!--/.container-->
  


  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-info" id="myModalLabel">Logout</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
        </div>
        <div class="modal-body text-warning">
          Are you sure you want to logout?.
        </div>
        <div class="modal-footer">
          <a href="m2.php"  class="btn btn-secondary"  >Yes</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>


  <!----  start footer section --->
<footer>

  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Yolo.com</a></p>
  <p>You Live Only Once</p>
</footer>



  <p class="text-center bg-dark text-white">@cpoyright Yolo.com 2020</p>
</footer>


<!----  end footer section --->

  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name != "view1") {
      window.alert = function() {
        /*disable alert*/
      };
      window.confirm = function() {
        /*disable confirm*/
      };
      window.prompt = function() {
        /*disable prompt*/
      };
      window.open = function() {
        /*disable open*/
      };
    }
    
    // prevent href=# click jump
    document.addEventListener(
      "DOMContentLoaded",
      function() {
        var links = document.getElementsByTagName("A");
        for (var i = 0; i < links.length; i++) {
          if (links[i].href.indexOf("#") != -1) {
            links[i].addEventListener("click", function(e) {
              console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash == "#") {
                  e.preventDefault();
                  return false;
                } else {
                  /*
                      var el = document.getElementById(this.hash.replace(/#/, ""));
                      if (el) {
                        el.scrollIntoView(true);
                      }
                      */
                }
              }
              return false;
            });
          }
        }
      },
      false
    );
  </script>

  <!--scripts loaded here-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


  <script>
    $(document).ready(function() {
      $("[data-toggle=offcanvas]").click(function() {
        $(".row-offcanvas").toggleClass("active");
      });
    });
  </script>

</body>

</html>