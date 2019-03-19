
<?php
include 'db2.php' ;
?>


<?php

$cattitle = filter_input(INPUT_POST,'categorytitle');
$catcode = filter_input(INPUT_POST,'categorycode');

?>

<?php
mysqli_select_db($conn,"abc2") or die("could not find the db!");
$output = '';

//collect
if(isset($_POST['search'])){

    $searchq = $_POST['search'];
    $sql = "SELECT * FROM categries  WHERE catg_title LIKE '%".$searchq."%'";

    $query = mysqli_query($conn,$sql) or die("could not search!");
    $count = mysqli_num_rows(@$query);
    if($count == 0){
    $output = "There was no search results!";
    }else {
        while ($row = mysqli_fetch_array($query)) {
            $cat_title = $row['catg_title'];
            //$id = $row['id'];

            $output = '<div>' . $cat_title . '</div>';

        }
    }
}
?>


<?php/*

if(isset($_POST['delete'])) {
    $catcode = $_POST['delete'];

    $sql = "DELETE FROM categries WHERE catg_code = $catcode";
    mysqli_select_db($conn,"abc2") or die("could not find the db!");
    $result = mysqli_query($conn,$sql);

    if (!$result) {
        die('Could not delete data: ');
    }
    echo "Deleted data successfully\n";
}*/

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Princess Park</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href="assets/css/category.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <style>

        input{
            background-color: #c0c0c0;
            border: none;
            color: whitesmoke;
            padding: 12px 28px;
            text-align: center;
            text-decoration-color: black;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;

        }

        a.button{
            background-color: #008080;
            border: none;
            color: whitesmoke;
            padding: 12px 28px;
            text-align: center;
            text-decoration-color: black;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }

    </style>

</head>
<body>
<!-- Left Panel -->
<?php
include 'include/left_panel.php';
?>
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                 <span class="name float-left">Jonathan Smith</span>
                                 <span class="time float-right">Just now</span>
                                     <p>Hello, this is an example msg</p>
                             </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                 <span class="name float-left">Jack Sanders</span>
                                 <span class="time float-right">5 minutes ago</span>
                                     <p>Lorem ipsum dolor sit amet, consectetur</p>
                             </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                 <span class="name float-left">Cheryl Wheeler</span>
                                 <span class="time float-right">10 minutes ago</span>
                                     <p>Hello, this is an example msg</p>
                             </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                 <span class="name float-left">Rachel Santos</span>
                                 <span class="time float-right">15 minutes ago</span>
                                     <p>Lorem ipsum dolor sit amet, consectetur</p>
                             </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language" >
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>

    <div>
        <form method="post" action="main_cat2.php">

            <input type="text"  name="search" placeholder="Search in here...">
            <br>
            <br>

            <input type="submit" value=">>"/>

        </form>
    </div>

    <br>

    <?php
    print("$output");
    ?>

    <br>

    <table style="width:100%">

        <tr>
            <th>Category Code</th>
            <th>Category Title</th>

        </tr>


        <?php

        $sql = "SELECT * FROM categries";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["catg_code"] . "</td>";
                echo "<td>" . $row["catg_title"] . "</td></tr>";
            }

        } else {
            echo "0 results";
        }

        ?>

    </table>

    <br>
    <br>


    <a href="addcatg_2.php" class ="button" target="_blank">Add Category</a>
    <a href="subcatg_2.php" class="button" target="_blank">Manage Sub Categories</a>

        <!--<div>
            <form method="post" action="main_cat2.php">

                <input name = "delete" type = "submit" id = "delete" value = "Drop Category">

            </form>
        </div>-->


</div> <!-- .content -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>
</div>
</body>
</html>