<?php
require_once ('config.php'); 

// Check if the user is logged in, if not then redirect him to login page
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
if (isset($_GET['reset'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:passwordReset.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>COMPLAINTS</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- semanti-ui -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
      integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
				<link rel="stylesheet" href="home.css">

    <style>
      body {
        font: 14px sans-serif;
        background: radial-gradient(
          circle,
          rgba(238, 174, 202, 1) 0%,
          rgba(148, 186, 233, 1) 100%
        );
      }
    </style>
  </head>
  <body style="background-color: rgb(207, 230, 228);">
 <?php require_once ("header.php"); ?>

    <h1 class="ownername" style="margin-left:20px;">
      Hello, <b><?php echo $_SESSION['user']['username']; ?></b>
    </h1>
    <p>
      <a href="passwordReset.php ?reset='1'" class="btn btn-warning"
        >Password Reset</a
      >
      <a href="logout.php" class="btn btn-danger ml-3"
        >Sign Out</a
      >
    </p>
    <div class="form-container">
      <div class="row" style="padding-left: 1.5rem;">
        <div class="results-row col">
          <h4>Register for Course</h4>
          <form action="course-register.php" method="post" class="ui form index-form">
            <div class="reg-form" style="display: flex">
              <label for="name">Course Unit Name</label>
              <input type="text" name="coursename" class="field" />
              <button type="submit" name="submit" class="sendbtn">
                Register
              </button>
            </div>
          </form>
        </div>
        <div class="appeal-row col">
          <div class="marks">
            <h5>My Marks</h5>  
            <?php 
             $query = "select * from `studentmarks`;";
		        $results = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($results)) {
              echo "<h4>Course Work</h4>";
              echo "<b><h1>{$row['coursemark']}</h1></b>";
                echo "<br />";
              echo "<h4>Final Work</h4>";

              echo "<b><h1>{$row['finalmark']}</h1></b>";
        
            }
            ?>  
            </div>  
             <div class="complaint" style="margin-top: 1rem;">
               <h4>Issue Complaint</h4>
                <form action="complaint.php" method="post" class="ui form">
            <div class="reg-form">
              <label for="name">Email Address</label>
              <input type="email" name="email" class="field" />
            </div>
              <label for="name">Complaint Description</label>
              <input type="text" name="desc" class="field" />
            
             <div class="reg-form">
              <label for="name">Complaint Details</label>
              <textarea name="complaint" class="field">
              </textarea>
            </div>
            <button type="submit" name="submit" class="sendbtn">
              Forward
            </button>
          </form>
        </div>
             </div>   
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
