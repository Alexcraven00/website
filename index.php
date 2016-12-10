<!DOCTYPE html>
<html lang="en">
<head>
  <title>Craven Games Co.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- Navbar -->
    
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Craven Games Co.</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="Gammes">Games
        <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="druggangwars.php">Drug Gang Wars</a></li>
                    <li><a href="pacman.php">Pacman</a></li>
                    <li><a href="dungonhunter.php">Dungeon Hunter</a></li>
                </ul>
            </li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            
             <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
            <button class="btn btn-danger navbar-btn" src="sign-up.php">Sign Up</button>
            <button class="btn btn-danger navbar-btn" src="log-in.php">Log in</button>
        </ul>
    </div>
</nav>
    
    
<!-- Navbar End -->
    
<div class="jumbotron text-center">
  <h1>Welcome to Craven Games Co.</h1>
  <p>Small Indie Game Studio</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3><b>Drug Gang Wars</b></h3>
      <p>The best drug game out right now!</p>
      <p>Learn More Below!</p>
      <button src="druggang.php">Learn More!</button>
    </div>
    <div class="col-sm-4">
      <h3><b>Pacman</b></h3>
      <p>Enjoy Pacman here!</p>
      <p>Learn More Below</p>
      <button src="pacman.php">Learn More!</button>
    </div>
    <div class="col-sm-4">
      <h3><b>Pong</b></h3>        
      <p>Enjoy Pong Here!</p>
      <p>Play Dungeon Hunter Here!</p>
      <button src="dungeonhunter.php">Learn More!</button>
    </div>
  </div>
</div>

</body>
</html>
