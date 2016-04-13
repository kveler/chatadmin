
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Login voor het chat dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="application/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="application/assets/css/signin.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Log in</h2>
        <label for="inputEmail" class="sr-only">Email adres</label>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email adres" required autofocus>
        <label for="inputPassword" class="sr-only">Wachtwoord</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>
        <!--<div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Onthouden
            </label>
        </div>-->
        <input name="CheckLogin" type="submit" class="btn btn-lg btn-primary btn-block">
    </form>

</div> <!-- /container -->

</body>
</html>
