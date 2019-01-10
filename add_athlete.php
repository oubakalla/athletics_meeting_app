<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Athletics Meeting App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap-3.4.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
    <?php
    include 'functions.php';
    ?>
    <div class="container-fluid">
        <div id="wrapper">
            <div class="overlay"></div>

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="index.php">
                            Athletics Meeting
                        </a>
                    </li>
                    <li>
                        <a href="#">Add athlete</a>
                    </li>
                    <li>
                        <a href="#">Update athlete</a>
                    </li>
                    <li>
                        <a href="#">Athletes list</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Athletes<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Addmitted</a></li>
                            <li><a href="#">Rejected</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Customized search</a>
                    </li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="container-fluid">
                    <div class="row">

                        <form class="col-xs-offset-3 col-xs-6 well" action="index.php" method="POST">
                            <legend>Add Athlete</legend>
                            <fieldset>
                                <label for="textarea">Name: </label>
                                <input type="text" name="nom" class="form-control">
                                <input type="text" name="prenom" class="form-control">
                                <input type="date" name="dateNaissance" class="form-control">
                                <select name="ville" class="countries form-control" id="countryId">
                                    <option value="">Select Country</option>
                                </select>
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
                                <script src="//geodata.solutions/includes/countrystatecity.js"></script>
                                <button class="btn btn-primary" type="submit" name='submit' value="add">Enter</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>









        </div>
        <script src="assets/jquery-3.3.1.min.js"></script>
        <script src="assets/bootstrap-3.4.0-dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>