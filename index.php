<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .main {
            margin-top: 5%;
            margin-bottom: 5%;
        }
    </style>
    <title>SSD -1</title>
  </head>
  <body>
    <div class="container main">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <h4>Election 2018</h4>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="login-img">
                            <img src="./assets/vote.png" class="img-fluid">
                        </div>
                        <div class="login-title">
                            <h4>Log In</h4>
                        </div>
                        <div>
                            <?php
                                if(isset($_GET['error'])){
                                    echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';                
                                }
                            ?>
                        </div>
                        <div class="login-form mt-4">
                            <form action="./server/login.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <input id="email" name="username" placeholder="Username" class="form-control" type="text" value="username">
                                    </div>
                                    <div class="form-group col-md-12">
                                    <input type="pass" name="password" class="form-control" placeholder="Password" value="password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-danger btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="logi-forgot text-right mt-2">
                            <a href="#">Logout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>