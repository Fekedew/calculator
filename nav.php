<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">WebSiteName</a>
    </div>
    <?php if(ISSET($_SESSION['user_id'])){ ?>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="profile.php">Profile</a></li>
      
    </ul> 
    <?php } ?>
    <ul class="nav navbar-nav navbar-right">
    <?php
        if(!ISSET($_SESSION['user_id'])){
            // header('location: index.php');
            ?>        
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php
        }else{
            ?>        
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php          
        }
    ?>
    </ul>
  </div>
</nav>
  