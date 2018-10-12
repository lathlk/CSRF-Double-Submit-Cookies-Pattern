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
    <title>SSD -1 - Vote</title>
  </head>
  <body>
  <div class="container main">
	<div class="row text-center mb-4">
		<div class="col-md-12">
		    <h4>Vote for your desired party</h4>
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-img">
	                    <img src="./assets/vote.png" class="img-fluid">
	                </div>
                    <div>
                        <?php
                            if(isset($_GET['error'])){
                                echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';                
                            }elseif(isset($_GET['success'])){
                                echo '<div class="alert alert-success" role="alert">'.$_GET['success'].'</div>';
                            }
                        ?>
                    </div>
	                <div class="vote-form mt-4">
                        <form action="./server/vote.php" method="post">                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name="vote" value="1">
                                            </div>
                                        </div>
                                        <div style="margin-left:10px;">Party 1</div>                                    
                                    </div>                                   
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name="vote" value="2">
                                            </div>
                                        </div>
                                        <div style="margin-left:10px;">Party 2</div>                                    
                                    </div>                                   
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name="vote" value="3">
                                            </div>
                                        </div>
                                        <div style="margin-left:10px;">Party 3</div>                                    
                                    </div>                                   
                                </div>
                                <input type="hidden" name="csrf_token" value="" id="csrf_token">
                            </div>
                            <div class="form-row">
                                <button type="submit" class="btn btn-danger btn-block">Submit</button>
                            </div>
                        </form>
	                </div>
	                <div class="logi-forgot text-right mt-2">
	                    <a href="./server/logout.php">Logout </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#csrf_token").val(getCookie("csrf_token"));
        });

        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }        
    </script>
  </body>
</html>