<?php
//connect mysql database
$conn = new mysqli('localhost', 'root', '', 'demo');
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php
// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($conn, $sql);
?>

 <div class="row" id="files">
        <div class="col-5 offset-md-1 col-md-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
</body>
</html>