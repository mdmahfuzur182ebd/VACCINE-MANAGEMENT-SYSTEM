<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//localhost/vaccine/includes/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="//localhost/vaccine/includes/jquery.min.js" ></script>
    <title>Vaccine App</title>
    <style>
        


@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap');
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,
body {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 1.5;
  box-sizing: border-box
}


/* navbar section*/

a {
  text-decoration: none;
  color: rgba(219, 227, 233, 0.7);
  font-weight: 500;
}

a:hover {
  color: #e74c3c;
}

.navmy {
  background: rgb(148, 89, 89);
}

.navbar-container {
  top: 0;
  background: #131314;
  position: sticky;
  z-index: 2;
}

.navbar .nabar-brand a {
  padding: 1rem 0;
  display: block;
  text-decoration: none;

}

.navbar-brand {
  font-family: 'Pacifico', cursive;
  font-size: 1.0rem;
  color: #e74c3c;
}

.navbar-expand-lg .navbar-nav .nav-link {
  padding: 1rem 1rem;
  position: relative;
}

.navbar-expand-lg .navbar-nav .nav-link:hover {
  border-top: 1x solid #e74c3c;
}

.navbar-expand-lg .navbar-nav .nav-link:active {
  border-top: 3px solid #e74c3c;
  color: #e74c3c;
}

.navbar-nav .btn1 {
  background-color: #c99994;
  color: white;
  padding: 5px;
  border-radius: 10px;
  font-size: 1rem;
  margin-top: -1px;
}

.navbar-nav .btn1:hover {
  background-color: #e74c3c;
}

</style>

</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-container ">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Vaccine Management System</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navmy"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active a "  href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a " href="nurselogin.php">Nurse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a " href="index.php">User</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link a " href="user/register.php">Vaccine </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link a " href="adminlogin.php">Admin</a>
                    </li>
                </ul>
         
            </div>
        </div>
    </nav>


</body>
    
