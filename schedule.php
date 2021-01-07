<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<body>
	
	<!--content here-->
	<div class="row buffer-top">
		<div class="col-12">
			<center><h1 class="display-4">2019 Winter Schedule</h1></center>
		</div>
	      <div class="box col-xs-3 offset-lg-2 col-lg-8">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Date</th>
                  <th>Week</th>
                  <th>Time</th>
                  <th>Team</th>
                  <th>Vs</th>
                  <th>Team</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM schedule ORDER BY date ASC, bye ASC, time ASC";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          
                          <td>".$row['date']."</td>
                          <td>".$row['week']."</td>
                          <td>".$row['time']."</td>
                          <td>".$row['team1']."</td>
						  <td>".$row['vs']."</td>
						  <td>".$row['team2']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
	</div>
</div>
	<div class="row">
		<div class="col-12" style="padding-top:5%";>
			<center><h1 class="display-4">Playoff Schedule</h1></center>
		</div>
	      <div class="box col-xs-3 offset-lg-2 col-lg-8">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Date</th>
                  <th>Week</th>
                  <th>Time</th>
                  <th>Game#</th>
                  <th>Team Pos.</th>
                  <th>Vs</th>
				  <th>Team Pos.</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM playoffs ORDER BY date ASC, time ASC";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          
                          <td>".$row['date']."</td>
                          <td>".$row['week']."</td>
                          <td>".$row['time']."</td>
                          <td>".$row['gameNum']."</td>
						  <td>".$row['teamPos1']."</td>
						  <td>".$row['vs']."</td>
						  <td>".$row['teamPos2']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
	</div>
</div>
<div class="container-fluid">
	<div class="col-12" style="padding-top:5%";>
			<center><h1 class="display-4">Teams</h1></center>
			
		</div>
	      <div class="box offset-lg-4 col-lg-4">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
				  
                  <th>Team</th>
                  <th>No</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM teams ORDER BY No";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          
                          <td>".$row['team']."</td>
                          <td>".$row['No']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
	</div>
	</div>
<?php include 'includes/footer.php';?>
</body>
</html>