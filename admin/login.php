<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    <link rel = "icon" href ="/OnlineFoodDelivery/img/logo1.png" type = "image/x-icon">

<style>
    body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}

	#login-right{
		position: absolute;
		right:0;
		width:35%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}

    #login-right .card{
		margin: auto;
	}

    #login-left{
		position: absolute;
		left:0;
		width:65%;
		height: calc(100%);
		background:#00000061;
		display: flex;
		align-items: center;
	}
	

	.logo img{
		width: 1400px;
        height: 800px;
        padding-right: 400px;
	}

    .adminname{
        font-weight: bold;
        font-size: larger;
        padding-left: 100px;
        margin-top: 30px;
    }

    .home{
        margin-top: 30px;
        font-weight: bold;
        border-radius: 40px;
        text-align: center;
    }
</style>
</head>
<body>
    
    
    <main id="main" class=" bg-dark">
        <div id="login-left">
        <div class="logo">
            <img src="/OnlineFoodDelivery/img/adminwallpaper.png" alt="">
        </div>
        </div>
       
        <div id="login-right">

            
            <div class="card col-md-8">
           
                 <div class="adminname">
                 
                    <label for="admin" >Admin Login</label>
                    
                </div>
            <div class="card-body">
            <form action="partials/_handleLogin.php" method="post">
                <div class="form-group">
                <label for="username" class="control-label"><i class="fa-solid fa-user"></i>    <b>Username</b></label>
                <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group">
                <label for="password" class="control-label"><i class="fa-solid fa-lock"></i>    <b>Password</b></label>
                <input type="password" id="password" name="password" class="form-control">
                </div>
                <center><button type="submit" class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
                
                <div class="home">
                    <label for="home"><a href="http://localhost/OnlineFoodDelivery/index.php">Back to Home</a></label>
                </div>
            </form>
            </div>
        </div>
        </div>
    </main>  


    <?php
        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Invalid Credentials
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                </div>';
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>