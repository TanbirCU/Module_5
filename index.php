<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="home.php" class="nav-link">Home</a></li>
                <li><a href="login.php" class="nav-link">logIn</a></li>
                <li><a href="logOut.php" class="nav-link">logOut</a></li>
                <li><a href="registration.php" class="nav-link">Registration</a></li>
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <li><a href="user_manage" class="nav-link">ManageUser</a></li>
                <?php else: ?>
                    <li><a href="home.php" class="nav-link"></a></li>
                <?php endif; ?>
            </ul>
        </div>

    </nav>


<!-- <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="" method="post">
                        
                        <div class="form-group row mt-3">
                            <div class="col-md-3 col-form-label">Name</div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        
                        <div class="form-group row mt-3">
                            <div class="col-md-3 col-form-label">Price</div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-md-3 col-form-label">Details</div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="details">
                            </div>
                        </div>
                        
                        <div class="form-group row mt-3">
                            <div class="col-md-3 col-form-label"></div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success" name="submit" value="submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
