<?php
session_start();
require_once "db.php";

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please enter a valid email ID";
    }
    if (strlen($password) < 6) {
        $password_error = "Password must be at least 6 characters";
    }

    if (empty($email_error) && empty($password_error)) {
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "'");
        if ($row = mysqli_fetch_array($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['uid'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_mobile'] = $row['mobile'];
                $_SESSION['user_email'] = $row['email'];
                header("Location: dashboard.php");
                exit;
            } else {
                $error_message = "Incorrect email or password!";
            }
        } else {
            $error_message = "Incorrect email or password!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-header">
                    <h2>Login</h2>
                </div>
                <p>Please fill all fields in the form</p>
                <span class="text-danger"><?php if (isset($error_message)) echo $error_message; ?></span>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" value="Submit">
                    <br>
                    Don't have an account? <a href="registration.php">Register here</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>