<!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post" action="1-form.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
	   <label>Return to home page <a href="home.php">RETURN</a></label>
    </form>

    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "2-search.php";

      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['user_name'], $r['user_email']);
        }
      } else {
        echo "No results found";
      }
    }
    ?>
  </body>
</html>