<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crud, Register</title>

        <!-- CSS Lib -->
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <!-- JS Lib -->
        <script src="lib/js/bootstrap.min.js"></script>
        <script src="lib/js/jquery.min.js"></script>
        <script src="lib/js/popper.min.js"></script>
    </head>

    <body class="d-flex justify-content-center" style="">
        <div class="col-lg-4"></div>

        <form class="col-lg-4 border p-0" action="<?=$_SERVER["PHP_SELF"]?>" method="GET">
            <h1 class="container p-3 m-0 bg-dark text-white">Register</h1>
            <br>

            <div class="m-3">
                First Name*: <input type="text" name="firstName" placeholder="Insert name" required></input>
                <br><br>
                Last Name*: <input type="text" name="lastName" placeholder="Insert Last name" required></input>
                <br><br>
                E-mail*: <input type="text" name="email" placeholder="Insert e-mail" required></input>
                <br><br>
                Address: <input type="text" name="address" placeholder="Insert Adress"></input>
                <br><br>
                (*) = Required!
                <br><br>
            </div>
                
            <button type="submit" class="mx-2 mb-3">Register</button>
        </form>
        <div class="col-lg-4"></div>

</html>