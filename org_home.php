<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SanvardhitBharat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="center-content">
            <img src="img/subtract.png" alt="Subtract3143" class="home-subtract" />
        </div>
        <a class="navbar-brand" href="#">SanvardhitBharat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
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

    <header class="header">
        <nav class="navbar">
            <div class="mid">
                <ul class="navv">
                    <li class="nav-item active">
                        <a href="org_home.php" class="active">Add Event</a>
                    </li>
                    <li class="nav-item">
                        <a href="org_view.php">View Event</a>
                    </li>
                    <li class="nav-item">
                        <a href="org_man.php">Manage Event</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <section class="my-5">
        <div class="w-50 m-auto">
            <form action="org_view.php" method="POST">
                <div class="form-group">
                    <!-- <label>User Name</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div> -->
                    <div class="form-group">
                        <label for="">Event Type</label>
                        <select name="etype" class="form-control">
                            <option value="Independance Day">Independance Day</option>
                            <option value="Republic Day">Republic Day</option>
                            <option value="Film Festival">Film Festival</option>
                            <option value="Light Show">Light Show</option>
                            <option value="Exhibition">Exhibition</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="ename" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" name="loc" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Scene</label>
                        <select name="scene" class="form-control">
                            <option value="Theatre">Theatre</option>
                            <option value="Ground">Ground</option>
                            <option value="Gateway of India">Gateway of India</option>
                        </select>

                    </div>

                    <button type="submit" name="save_select" class="btn btn-outline-primary">SUBMIT</button>

            </form>

</body>

</html>