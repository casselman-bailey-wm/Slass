
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Slass</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .hovernav:hover {
            background-color: lightgrey;
        }
    </style>
</head>
<body>

<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=slass', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
print_r($_POST);
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

    if(empty($_POST['exampleInputEmail']))
    {
        $errorMessage = "<li>You forgot to enter your email.</li>";
    }
    if(empty($_POST['exampleInputUsername']))
    {
        $errorMessage = "<li>You forgot to enter your username.</li>";
    }
    if(empty($_POST['exampleInputPassword']))
    {
        $errorMessage = "<li>You forgot to enter a password.</li>";
    }


    $stmt = $dbh->prepare("INSERT INTO Login (exampleInputEmail, exampleInputUsername, exampleInputPassword ) VALUES (?, ?, ?)");

    $result = $stmt->execute(array($_POST['exampleInputEmail'], $_POST['exampleInputUsername'], $_POST['exampleInputPassword']));

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}?>

<div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink" id="navi">
        <script>
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
        <div class="container" style="background-color: whitesmoke">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="slass%20logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a href="#page-top">
                    <img class="page-scroll" href="" src="Slass.png" height="50px" width="70px">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="hovernav">
                        <a class="page-scroll" href="#services">Profile</a>
                    </li>
                    <li class="hovernav">
                        <a class="page-scroll" href="#portfolio">Rankings</a>
                    </li>
                    <li class="hovernav">
                        <a class="page-scroll" href="#about">Fight Now</a>
                    </li>
                    <li class="hovernav">
                        <a class="page-scroll" href="#team">Create Account/Log in</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="jumbotron" id="page-top" align="center" style="background-color: lightgrey">
        <h1>Welcome to Slass!</h1> <br>
        <iframe width="590" height="330" src="https://www.youtube.com/embed/Lo53OinVuFI?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 800px; heigh:400px; margin: 0 auto">
        <div class="carousel-inner">
            <div class='item active'>
                <img width="800" height="334" src='Find-Your-Fight.jpg' alt='info1' />
                <div class='carousel-caption'>
                    <h1>My success isn't a result of arrogance - it's a result of belief.</h1>
                    <p>-Conor McGregor</p>
                </div>
            </div>
            <div class='item'>
                <img width="800" height="334" src='mma_couture_gonzaga1.jpg' alt='info2' />
                <div class='carousel-caption'>
                    <h1>When I hear people boo, that just make me want to go out there and work harder.</h1>
                    <p>-John Cena</p>
                </div>
            </div>
            <div class='item'>
                <img width="800" height="334" src='usp-boxing_-timothy-bradley-jr-vs-manny-pacquiao.jpg' alt='info3' />
                <div class='carousel-caption'>
                    <h1>A true champion will fight through anything.</h1>
                    <p>-Floyd Mayweather Jr.</p>
                </div>
            </div>
            <div class='item'>
                <img width="800" height="334" src='warrior-movie_vice_670.jpg' alt='info4' />
                <div class='carousel-caption'>
                    <h1>When someone is fearless, when pain isn't a factor, it's impossible to break his spirit. </h1>
                    <p>-Chuck "The Ice Man" Liddell</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Profile -->
    <div id="services" align="center" class="thumbnail" style="background-color: lightgrey">
        <h1 style="font-family: monospace">
            Profile
        </h1>
        <section id="left">

            <div id="userStats" class="clearfix">

                <div class="pic">

                    <img class="img-rounded" src="http://latimesblogs.latimes.com/.a/6a00d8341c630a53ef015394294b4a970b-pi" height="150" width="150">
                </div>
                <br>
                <div class="data">

                    Name: <strong>George St. Pierre</strong>
                    <br>
                    Location: <strong>Quebec, Canada</strong>
                    <div class="sep"></div>
                    Rank: <strong>1</strong>
                    <br>
                    Matches Won: <strong>25</strong>
                </div>

            </div>
            <br>
            <h1>About Me</h1>

            <p>Often referred to as GSP, I am a Canadian semi-retired mixed martial artist (MMA) and a three-time former Welterweight Champion of the Ultimate Fighting Championship (UFC), having won the title twice in 2006 and 2008, as well as an Interim title in 2007. Frequently cited as one of the greatest MMA fighters of all time, I was ranked as the #1 welterweight in the world for several years by Sherdog and numerous other publications.In 2008, 2009, and 2010 I was named the Canadian Athlete of the Year by Rogers Sportsnet. Fight Matrix lists me as the top MMA Welterweight of all time and most accomplished fighter in MMA history.[13][14] On December 13, 2013, I vacated the title and decided to take some time off from the sport, though I left the door open for a return.</p>

        </section>
        <section id="right">


            <div class="gcontent">

                <div class="head"><h1>Friends List</h1></div>

                <div class="boxy">

                    <p>Your friends - 100 total</p>

                    <div class="friendslist clearfix">

                        <div class="friend">

                            <img src="http://static.dnaindia.com/sites/default/files/2015/10/02/361285-john-cena-2.jpg" alt="Jerry K." height="30" width="30"><span class="friendly" style="font-family: fantasy">John Cena</span>

                        </div>
                        <div class="friend">

                            <img src="http://static.comicvine.com/uploads/original/11120/111204980/4281602-mte5ndg0mdu0odc2ntu0nzy3.jpg" alt="Katie F." height="30" width="30"><span class="friendly" style="font-family: fantasy">Muhammad Ali</span>

                        </div>
                        <div class="friend">

                            <img src="http://a4.files.biography.com/image/upload/c_fill,cs_srgb,dpr_1.0,g_face,h_300,q_80,w_300/MTE5NTU2MzE2NDE4MzExNjkx.jpg" alt="Ash K." height="30" width="30"><span class="friendly" style="font-family: fantasy">Jackie Chan</span>

                        </div>
                        <div class="friend">

                            <img src="http://img1.wikia.nocookie.net/__cb20141121015414/spongebob/images/5/5f/Larry_the_Lobster_in_Ghost_Host-4.png" alt="Sponge B." height="30" width="30"><span class="friendly" style="font-family: fantasy">Larry The Lobster</span>

                        </div>
                        <div class="friend">

                            <img src="http://images-cdn.moviepilot.com/images/c_fill,h_706,w_1070/t_mp_quality/hpz0rbf2ydeufej8qxkw/ronda-rousey-was-asked-to-play-captain-marvel-but-not-how-you-d-think-590496.jpg" alt="Frank" height="30" width="30"><span class="friendly" style="font-family: fantasy">Ronda Rousey</span>

                        </div>
                        <div class="friend">

                            <img src="http://www.chucknorris.com/store/cn%20old%20pages/photos_files/karate-4.jpg" alt="Alexa S." height="30" width="30"><span class="friendly" style="font-family: fantasy">Chuck Norris</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Rankings -->
    <br><br><br><br><br><br><br><br>
    <div align="center" id="slassimg">
        <img width="400" height="289" src="Slass.png" id="portfolio" >
    </div>
    <div align="center" style="background-color: lightgrey">
        <h1>
            Rankings
        </h1>
        <table style="width:100%" border="5px">
            <tbody><tr>
                <th>Name</th>
                <th>Location</th>
                <th>Age</th>
                <th>Style</th>
                <th>Rank</th>
            </tr>
            <tr>
                <td>George St. Pierre</td>
                <td>Quebec, Canada</td>
                <td>34</td>
                <td>MMA</td>
                <td>1</td>
            </tr>
            </tbody></table>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <!-- Fight Now -->

    <div align="center" id="about" style="background-color: lightgrey">
        <h1>
            Fight now
        </h1>
        <table style="width: 100%" border="5px">
            <tbody><tr>
                <th>Name</th>
                <th>Located In:</th>
                <th>Address:</th>
                <th>Phone:</th>
                <th>Register</th>
            </tr>
            <tr>
                <td>LA Boxing
                    Boxing Gym </td>
                <td> Rancho Encanto Plaza</td>
                <td> 3434 W Greenway Rd #120, Phoenix, AZ 85053</td>
                <td>(602) 843-5269</td>
                <td><form action="submit.php">
                        <input value="submit" type="submit">
                    </form></td>
            </tr>
            <tr>
                <td> Grace Fighting Systems Training Center  </td>
                <td>Phoenix</td>
                <td> 2501 W Behrend Dr #33, Phoenix, AZ 85027</td>
                <td>(623) 266-6045</td>
                <td><form action="submit.php">
                        <input value="submit" type="submit">
                    </form></td>
            </tr>
            <tr>
                <td>The MMA Lab  
                    Martial Arts School

                </td><td> Glendale</td>
                <td>17235 N 75th Ave H100, Glendale, AZ 85308 </td>
                <td>(623) 792-8543 </td>
                <td><form action="submit.php">
                        <input value="submit" type="submit">
                    </form></td>
            </tr>
            <tr>
                <td>Impact MMA  
                    Boxing Gym

                </td><td> Scottsdale </td>
                <td>  2954 N Hayden Rd, Scottsdale, AZ 85251</td>
                <td>(480) 994-1377 </td>
                <td><form action="submit.php">
                        <input value="submit" type="submit">
                    </form></td>
            </tr>
            <tr>
                <td> Fight Ready MMA &amp; Fitness Gym</td>
                <td>Pima Crossing </td>
                <td>  8666 E Shea Blvd #147, Scottsdale, AZ 85260</td>
                <td>(480) 941-5466</td>
                <td><form action="submit.php">
                        <input value="submit" type="submit">
                    </form></td>
            </tr>
            </tbody></table>

    </div>
    <!-- Login/Registration -->
    <br><br><br><br><br><br><br><br><br><br>
    <div class="thumbnail" align="center" style="background-color: lightgrey">

        <h1>Login/Registration</h1> <br>
        <form id="team" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="exampleInputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="username" class="form-control" name="exampleInputUsername" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" name="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <p class="help-block"></p>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Accept terms and services.
                </label>
            </div>
            <input type="submit" name="formSubmit" value="Submit">
        </form>
    </div>
</div>
<div class="footer">
    <p style="text-align: center">Copyright &copy; Slass</p>
</div>
</body>
</html>
