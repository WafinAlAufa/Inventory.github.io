<?php
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert('Successfuly add new user');
    document.location.href='index.php?nav=access';
    </script>
    ";
    } else {
        echo "
    <script>
   alert('Failed add new user');
   document.location.href='index.php?nav=access';
    </script> 
    ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data access</title>
</head>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Add data access</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="role">Role:</label>
                        <input type="text" name='role' id="role" required class="form-control w_100" placeholder="Role" aria-label="Role" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="feature">Feature:</label>
                        <input type="text" name='feature' id="feature" required class="form-control w_100" placeholder="feature" aria-label="Feature" aria-describedby="basic-addon1">
                    </div>
                </li>
                <ul class="d-flex justify-content-end gap-3">
                    <li><button type="submit" class="btn btn-warning" id="cancel" name="cancel">Cancel</button></li>
                    <li><button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button></li>
                </ul>
            </ul>
        </form>
    </div>
</body>

</html>