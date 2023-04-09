<!-- <?php
        include_once 'session.php';
        include 'conn1.php'
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>SanvardhitBharat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body style="margin: 0;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SanvardhitBharat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">EVENTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">HELP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">LOGIN</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <?php
    $d = $_GET['id'];
    if ($d) {
        $getQuery = "select * from addevent Where id=" . $d;
        $query = mysqli_query($con, $getQuery);
        while ($obj = mysqli_fetch_object($query)) {
            echo '<iframe style="display: block; background: #000; border: none; height: 100vh; width: 100vw;" src="' . $obj->loc . '"title="YouTube video player" frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture allowfullscreen></iframe>';
        }
    }
    ?>
</body>

</html>