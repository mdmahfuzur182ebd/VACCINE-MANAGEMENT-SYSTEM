<?php require 'config/conn.php'; ?>
<?php include 'includes/header.php'; ?>
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






    /* section */
    .banner-container {
        background-color: #CACACA;
    }

    .banner-column {
        background-color: #8D8D8D;
    }



    /* footer */
</style>


<!--banner section-->
<section class="banner-container container-fluid">
    <div class="row vh-100">
        <div class="col-md-9 banner-column m-auto text-center text-white p-4 border border-light">
            <h1 class="display-4 font-weight-bolder">VACCINE MANAGEMENT SYSTEM</h1>
            <h3>GIVE VACCINE SAVE LIFE</h3>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>