<?php
$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";
$errorMessage = "";
$successMessage = "";

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud-1";


$connection = new mysqli($servername, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // show data to client
    if (!isset($_GET['id'])) {
        header("location:/crud-1/index.php");
        exit;
    }

    $id = $_GET["id"];
    
    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/crud-1/index.php");
    }
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];

} else {
    // post method update to clicent
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    do {
        if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "all the field are required";
            break;
        }

        $sql = "UPDATE clients" . "SET name = '$name',email = '$email',phone = '$phone',address = '$address'" .
            "WHERE id = $id";
        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "invalid query" . $connection->error;
            break;
        }
        $successMessage = "client update correctly";
        header("location:/crud-1/index.php");

    } while (true);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Create</title>
</head>

<body>
    <div class="container my-5">
        <h2>New Client</h2>
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            
                ";
        }
        ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="" class="form-control" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" name="phone" id="" class="form-control" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form label">Address</label>
                <div class="col-sm-6">
                    <input type="text" name="address" id="" class="form-control" value="<?php echo $address; ?>">
                </div>
            </div>
            <?php
            if (!empty($successMessage)) {
                echo "
                    <div class='row md-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                            </div>
                        </div>
                    </div>
                    ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/crud-1/index.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>