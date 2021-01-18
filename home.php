<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>

<div class="header">
 <div class="left">
 
 <!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post" action="1-form.php">
      <h3>SEARCH FOR USERS</h3>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form>

    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "2-search.php";

      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['name'], $r['email']);
        }
      } else {
        echo "No results found";
      }
    }
    ?>
  </body>
</html>
    
    </div>
    <div class="right">
     <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">


welcome : <?php print($userRow['user_name']); ?>




    <script>
	
	
	
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }								
        });
    </script>
	
	
	
<div class="container">
    <div class="row clearfix">
        <div class="col-md-1">
		
		
		<form action="http://jkorpela.fi/cgi-bin/echo.cgi"  
enctype="multipart/form-data" method="post">

<p>
Type some text (if you like):<br>
<input type="text" name="timeline" size="30">
</p>

<div>
<input type="submit" value="submit">


</div>
</form>
		
		
            <h1 class="text-center">Welcome to your profile</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <ul class="nav text-center">
               <a href="profile.php">Edit your profile</a>
                <a href="all-users.php">View all users</a>
                
            </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>




</div>
</body>
</html>

