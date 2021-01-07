<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php';?>
<body>
<?php include 'includes/navbar.php';?>
	
	<!--content here-->
	<div class="row buffer-top">
		<div class="col-12">
			<center><h1 class="display-4">Standings</h1></center>
		</div>
	      <div class="box col-xs-3 offset-lg-2 col-lg-8">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
				  <th>Pos.</th>
				  <th>Team</th>
                  <th>MP</th>
                  <th>W</th>
                  <th>L</th>
                  <th>GF</th>
                  <th>GA</th>
                  <th>GD</th>
				  <th>Pts</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM standings ORDER BY points DESC, GoalDiff ASC, GoalsFor DESC";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          
                          <td>".$row['id']."</td>
                          <td>".$row['team']."</td>
                          <td>".$row['matches']."</td>
                          <td>".$row['wins']."</td>
						  <td>".$row['wins']."</td><td>".$row['losses']."</td>
						  <td>".$row['goalsFor']."</td>
						  <td>".$row['goalsAgainst']."</td>
						  <td>".$row['goalDiff']."</td>
						  <td>".$row['points']."</td>
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