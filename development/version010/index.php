<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "northwind";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div>
            <h2>Basic Table</h2>
            <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['customers']; ?>"><?php echo $row['company']; ?></a></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['job_title']; ?></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>



                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>