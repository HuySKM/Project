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
$id = (int) $_GET['id'];
$sql = "SELECT * FROM customers WHERE id=".$id;
echo '<br>' . $sql;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
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
        <form name="customers" action="process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
            <div class="form-group">
                <label>Tiêu đề:</label>
                <input type="text" name="company" value="<?php echo $row['company'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Nội dung:</label>
                <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Status:</label>
                <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

</body>
</html>