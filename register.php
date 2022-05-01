<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>SosialLabPHP</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/styles/login.css" rel="stylesheet">

    </head>

    <body class="text-center">
        
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>

            <label for="inputUsername" class="sr-only">Full Name</label>
            <input type="text" id="inputUsername" class="form-control mb-3" placeholder="Enter your name" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <label for="inputPasswordConfirmation" class="sr-only">Confirm Password</label>
            <input type="password" id="inputPasswordConfirmation" class="form-control" placeholder="Confirm Password" required>
        
            <div class="mt-3">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                <hr>
                <p class="text-muted">Don't have an account? <a href="login.php">Sign in</a></p>
            </div>
    </form>

    </body>
</html>