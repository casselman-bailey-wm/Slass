<!DOCTYPE html>
<html lang="en" style="background-color: whitesmoke;">
<head>
    <meta charset="UTF-8">
    <title>Slass - Submit</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
if(@$_POST['Send'] == "Submit")
{
    $errorMessage = "";


    $stmt = $dbh->prepare("INSERT INTO Register (fname, phone, checkin, checkout ) VALUES (?, ?, ?, ?)");

    $result = $stmt->execute(array($_POST['fname'], $_POST['phone'], $_POST['checkin'], $_POST['checkout']));

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
                    <li class="hovernav">
                        <a class="page-scroll" href="Password.php">Home Page</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>






<form id="contactform" method="POST" style="margin-top: 100px">

    <fieldset style="text-align: center"> <legend><span style="font-size: 20px;">&nbsp;CONTACT DETAILS&nbsp;</span></legend>
        <label for="firstname" class="left" style="font-size: 20px">First name:</label>
        <font color="#FF0000">*</font><input name="firstname" id="firstname" class="field" value="" maxlength="35" tabindex="1" type="text"><br><br>

        <label for="phone" class="left" style="font-size: 20px">Phone:</label>
        <font color="#FF0000">*</font><input name="phone" id="phone" class="field" value="" maxlength="10" tabindex="2" type="text"><br><br>

        <label for="checkin" class="left" style="font-size: 20px">Check In:</label>
        <font color="#FF0000">*</font><input class="datepicker" tabindex="3" type="text"><br><br>


        <label for="checkout" class="left" style="font-size: 20px">Check Out:</label>
        <font color="#FF0000">*</font><input class="datepicker" tabindex="4" type="text"><br><br>


    </fieldset>

    <div id="submitM8" style="text-align: center">

    <input style="width: 150px;" name="clear" id="clear" class="button" value="Clear" tabindex="7" type="reset">

    <input style="width: 150px;" name="Submit" value="Send" type="submit"><br><br>

    </div>

    <div class="footer">
        <h1>
        </h1>
        <h1>
        </h1>
        <h1>
        </h1>
        <h1>
        </h1>
        <p style="text-align: center">Copyright &copy; Slass</p>
    </div>

</form>
</body>
</html>