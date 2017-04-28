<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senders_name = $_POST['name'];
    $senders_email = $_POST['email'];
    $senders_phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "dom.nguyen1@gmail.com";
    $subject ="Form has been filled out on site";
    $headers = "From:" . $senders_email;

    if (mail($to, $subject, $message, $headers)) {
?>
<div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Success</h4>
      </div>
      <div class="modal-body">
        <p>The email has been sent! I will be responding to your question or inquiry at my earliest convenience!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
    }
    else {
      ?>

      <div id="Modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Error</h4>
            </div>
            <div class="modal-body">
              <p>Something has gone wrong.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <?php
    }



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dominique Nguyen's Portfolio Page">
    <meta name="author" content="Dominique Nguyen">
    <title>Dominique Nguyen | Web Developer</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/TinyLogo.png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="full-height name-window">
        <div class="sky">
            <div class="cloud variant-1"></div>
            <div class="cloud variant-2"></div>
            <div class="cloud variant-3"></div>
            <div class="cloud variant-4"></div>
            <div class="cloud variant-5"></div>
        </div>
        <div class="container vertical-align-child intro-text-pad">
            <div class="row">
                <div class="col-lg-12">
                    <div class="introduction-text">
                        <h1 class="name flat-shadow-text wow fadeIn">Dominique Nguyen</h1>
                        <hr class="name-break wow fadeIn">
                        <h3 class="flat-shadow-text wow fadeInLeft" data-wow-delay="1s">Full Stack Web Developer</h3>
                        <h5 class="flat-shadow-text wow fadeInLeft" data-wow-delay="2s">B.S. Mathematics - Computer Science , UC San Diego</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="boat">
            <img src="/img/boat.png" class="boat" alt="tugboat">
        </div>
        <div id="sun">
            <img src="/img/sun.png" class="sun" alt="tugboat">
        </div>
        <h6 class="scroll-down flat-shadow-text wow fadeIn" data-wow-delay="5s">Scroll Down to Learn More</h6>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About Me</a>
                    </li>
                    <li>
                        <a href="#projects">Projects</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Me!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- START OF ABOUT ME SECTION -->
    <div class="vertical-align-parent">
        <a name="about"></a>
        <div class="vertical-align-child container-padding ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="center-text">About Me</h1>
                        <hr class="titles">
                    </div>
                    <div class="col-md-4 col-md-offset-2 text-center">
                        <span class="fa-stack fa-lg fa-4x ">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-magic fa-stack-1x"></i>
                        </span>
                        <h2>Languages</h2>
                        <hr class="skills">
                        <p>CSS3 | HTML5 | MySQL | PHP | XML | Java | Javascript | C++ | jQuery | Bootstrap Framework</p>
                    </div>
                    <div class="col-md-4 text-center">
                      <span class="fa-stack fa-lg fa-4x">
                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                        <i class="fa fa-wrench fa-stack-1x"></i>
                      </span>
                        <h2>Tools</h2>
                        <hr class="skills">
                        <p>Filezilla | MS Office | Adobe Photoshop | Git / Version Control | VirtualBox | Google Analytics | Drupal | Responsive Design | Trello | RegOnline</p>
                    </div>
                    <div class="col-md-12">
                        <a href="docs/DominiqueNguyenResume.pdf" target="_blank"><button class="btn btn-lg resume-button">Download Resume</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a name="projects"></a>
    <div class="projects-window">
        <div class="container container-padding ">
            <h1 class="text-center">Current Projects</h1>
            <hr class="titles">
            <div class="wow fadeIn">
                <div class="row project">
                    <div class="col-lg-3">
                        <a href="http://cerealkillaoc.com/" target="_blank"><img src="img/ck.jpg" class="img-responsiv" alt="Project Image"></a>
                    </div>
                    <div class="col-lg-9 ">
                        <h2><a href="http://cerealkillaoc.com/" target="_blank">Cereal Killas OC</a></h2>
                        <p>Tools Used: HTML, CSS , Bootstrap</p>
                        <p>Cereal Killa is Orange County’s first cereal and milk treats bar. This desert bar was currated at a UC Irvine business class, and I was invited to help these individuals help make their concept into a reality.</p>
                        <p>This site is currently in development.</p>
                    </div>
                </div>
                <div class="row project">
                    <div class="col-lg-3 ">
                        <a href="http://jacobsdev.ucsd.edu/gordoncenter/" target="_blank"><img src="img/gc.jpg" class="img-responsive" alt="Project Image"></a>
                    </div>
                    <div class="col-lg-9 ">
                        <h2><a href="http://jacobsdev.ucsd.edu/gordoncenter/" target="_blank">UC San Diego Gordon Center Website </a></h2>
                        <p>Tools Used: HTML, CSS, JQuery, Bootstrap, Javascript</p>
                        <p>This site is currently in development. The Gordon Center located at UC San Diego contracted our web development team, and I was assigned to the task. The goal of the site is to provide students with a newly refreshed web design
                            to better fit their needs. Certain elements were created by an external design firm, but I was tasked with converting the wireframe into a fully functional webpage. The site above is the result of the work.</p>
                    </div>
                </div>
                <div class="row project">
                    <div class="col-lg-3">
                        <a href="http://jacobsschool.ucsd.edu/envision/" target="_blank"> <img src="img/envision.jpg" class="img-responsiv" alt="Project Image"></a>
                    </div>
                    <div class="col-lg-9">
                        <h2> <a href="http://jacobsschool.ucsd.edu/envision/" target="_blank">UC San Diego Envision Website</a></h2>
                        <p>Tools Used: HTML, CSS, JQuery, Bootstrap, MySQL, PHP</p>
                        <p>The website was built as an interactive website for students to come and explore the arts and humanity side of engineering.</p>
                        <p>The unique thing about this site is that all the applications on the backend were currated specifically for the EnVision Program.</p>
                        <p>There is a laserbot reservation system I was tasked with developing. It allows users to view times that the machine is availible for use, and allows them to reserve with their student IDs the machine. This information is then sent
                            to the machine which is controlled by a RaspberryPi, and makes a DB check to ensure the student is approved to use the machine during that time period in which they scanned their ID cards.</p>
                    </div>
                </div>
                <div class="row project">
                    <div class="col-lg-3 ">
                        <a href="http://jacobsschool.ucsd.edu/events/2017/emi2017/" target="_blank"> <img src="img/emi.jpg" class="img-responsiv" alt="Project Image"></a>

                    </div>
                    <div class="col-lg-9 ">
                        <h2><a href="http://jacobsschool.ucsd.edu/events/2017/emi2017/" target="_blank">Engineering Mechanics Institute</a></h2>
                        <p>Tools Used : PHP, HTML , CSS, MYSQL, Bootstrap, RegOnline</p>
                        <p>This site was built in preparation of the Engineering Mechanics Institute 2017 Conference Located in San Diego. Working with the Structional Engineering Chairs at UC San Diego and <a href="http://www.asce.org/" target="_blank">ASCE</a>, I created
                            a system that allowed students and professors to submit their abstracts to present at the conference. Once their abstracts were submitted, the leaders of each topic had the tools necessary to review the abstracts to provide
                            feedback to the individual, as well as approve or deny these abstracts. I am also incharge of maintaining and handling the database which records payments made online through RegOnline. </p>
                    </div>
                </div>
                <div class="row project">
                    <div class="col-lg-3 ">
                        <a href="http://pharmacogenomics.ucsd.edu" target="_blank"><img src="img/pharma.jpg" class="img-responsiv" alt="Project Image"></a>
                    </div>
                    <div class="col-lg-9 ">
                        <h2><a href="http://pharmacogenomics.ucsd.edu" target="_blank">UC San Diego Pharmacogenomics</a></h2>
                        <p>Tools Used : PHP, HTML , CSS , MYSQL , Bootstrap</p>
                        <p>The site was migrated over from an security prone Joomla website. The website owner, Grace Kuo, requested that the site have a login system for course verification. Once users are approved, they are able to access all the content and material hosted
                            on the site. The site also has a built in tracking system that logs when a user downloads a file, and records this information inside of the database. This feature was built using HTACCESS files and various PHP scripts. </p>
                    </div>
                </div>

                <div class="row project">
                    <div class="col-lg-3 ">
                        <a href="http://ne.ucsd.edu" target="_blank"><img src="img/ne.jpg" class="img-responsiv" alt="Project Image"></a>
                    </div>
                    <div class="col-lg-9 ">
                        <h2><a href="http://ne.ucsd.edu" target="_blank">UC San Diego Nanoengineering</a></h2>
                        <p>Tools Used : HTML5, CSS3, SASS, Twig, Drupal 8</p>
                        <p>I worked with one of the lead web developers at the Office of Engineering and Computing to migrate the website over from Drupal 6, which reached EOL, over to Drupal 8.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">More projects availible upon request.</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <a name="contact"></a>
    <div class="container container-padding ">
        <div class="row" style="margin-bottom:20px;">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">Contact</h1>
                <hr class="titles">
                <h4>Have questions about my projects or want to get in touch with me?</h4>
                <p>Fill out the form below to contact me, or email me!</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 col-md-offset-2">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Please enter your first and last name.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" placeholder="Please enter your email.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phone">Phone Number <br>(If Applicable):</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phone" placeholder="(123) 456-7890">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="message">Message:</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="5" id="message"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-6">
                            <button type="submit" class="btn btn-default hvr-outline-out">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script>
        /* Loading Animations once you reach the section initialization */
        new WOW().init();
        /* Set the boat height on page load */
        $(document).ready(function() {
            marginBoat = $(window).height() - $('.boat').height() - 100;
            $('#boat').css({
                top: marginBoat
            });
        });
    </script>
    <script>
        /* Declaration of variables for mouse following boat */
        var mouseX = 0,
            mouseY = 0,
            leftX = 0,
            topCalc = 0,
            $xp = 0,
            $yp = 0,
            bWidthHalf = 0,
            bWidth = 0;
        /*Movement of boat*/
        $('.name-window').mousemove(function(e) {
            bWidthHalf = $('.boat').width() / 2;
            bWidth = $('.boat').width();

            if (e.pageX >= $(window).width() - (bWidthHalf)) {
                leftX = $(window).width() - bWidth - 50;
            } else if (e.pageX < bWidth) {
                leftX = e.pageX;
            } else {

                leftX = e.pageX - (bWidthHalf);
            }

            topCalc = $(window).height() - $('.boat').height() - 100;

            var $loop = setInterval(function() {
                $xp += ((leftX - $xp) / 9000);

                $('#boat').css({
                    left: $xp,
                    top: topCalc,
                });
                $('.boat').css({
                    width: $(window).width() / 5
                });
            }, 40);

        });
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-96976825-2', 'auto');
        ga('send', 'pageview');
    </script>
</body>
<footer>

    <center>
        <p>&copy; Copyright Dominique Nguyen | Custom Built via HTML, CSS, &amp; Javascript</p>
    </center>
</footer>
</html>
