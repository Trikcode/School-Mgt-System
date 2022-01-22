
<?php 
include 'config.php';

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
 <title>AR</title>
	
</head>
<?php require_once ("header.php"); ?>
<body style="font: 14px sans-serif;
        background: radial-gradient(
          circle,
          rgba(238, 174, 202, 1) 0%,
          rgba(148, 186, 233, 1) 100%
        );">

	<h2>AR PAGE</h2>
 	<strong style="margin-left:20px;"><?php echo $_SESSION['user']['username']; ?></strong>
 		<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
      <a href="home.php?logout='1'" style="color: red;">logout</a>
<div class="row">
	<div class="col complaints one">
		<h5>Add Student Marks</h5>
<form action="student-marks.php" method="post" class="ui form box two">
            <div class="reg-form" style="display: flex; padding-bottom:15px;">
              <label for="name">Course Work</label>
              <input type="text" name="coursemark" class="field" />
												</div>
												<div style="display: flex;padding-bottom:15px;" >
														 <label for="name">Final Mark</label>
              <input type="text" name="finalmark" class="field" />
              
            </div>
												<button type="submit" name="submit" class="sendbtn">
                ADD MARKS
              </button>
          </form>
	</div>
	<div class="col complaints">
		<h4>Student Complaints</h4>
<div class="student-complaints box">
	 <?php 
       $query = "select * from `complaints`;";
		        $results = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($results)) {
													?>
													<div >
															<div class="jumbotron-heading">
																<h3>Email:</h3>
                  <?php echo $row['email'] ?>
                </div>
														<div class="jumbotron-heading">
																<h3>Description:</h3>
                  <?php echo $row['description'] ?>
                </div>
																
																<div class="jumbotron-heading">
																	<h3>Details:</h3>
                  <?php echo $row['complaint'] ?>
                </div>
													</div>
	 													<p>
                  <a
                    href="accept.php"
                    class="btn btn-primary my-2"
                    >Accept</a
                  >
                  <a
                    href="reject.php"
                    class="btn btn-secondary my-2"
                    >Reject</a
                  >
                </p>
        <?php
            }
?>
</div>



	</div>
	
</div>
						<!-- form -->
					  



</body>
</html>