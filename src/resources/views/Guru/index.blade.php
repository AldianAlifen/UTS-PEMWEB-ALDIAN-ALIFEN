<!DOCTYPE html>
<html lang="en">
<head>

     <title>SMKN 1 - UTS PEMWEB ALDIAN</title>
<!-- 

Known Template 

http://www.templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="guru/css/bootstrap.min.css">
     <link rel="stylesheet" href="guru/css/font-awesome.min.css">
     <link rel="stylesheet" href="guru/css/owl.carousel.css">
     <link rel="stylesheet" href="guru/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="guru/css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">SMKN 1 Kab. Tangerang</a>
                    
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                    </ul>
               </div>

          </div>
     </section>
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Teachers <small>Meet Professional Teachers</small></h2>
                         </div>
                    </div>
                    @foreach($datagurus as $dataguru)
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="{{ $dataguru->image->getUrl() }}" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>{{$dataguru->name}}</h3>
                                   <p></p>
                                   <span>{{$dataguru->nip}}</span>
                                   <p></p>
                                   <span>{{$dataguru->mapel}}</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                    @endforeach


               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>SMKN 1 Kab. Tangerang</h2>
                              </div>
                              <address>
                              
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+62 896 5277 5973</p>
                                   <p><a href="aldilie01@gmail.com">aldilie01@gmail.com</a></p>
                              </address>
                         </div>
                    </div>

                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="guru/js/jquery.js"></script>
     <script src="guru/js/bootstrap.min.js"></script>
     <script src="guru/js/owl.carousel.min.js"></script>
     <script src="guru/js/smoothscroll.js"></script>
     <script src="guru/js/custom.js"></script>

</body>
</html>