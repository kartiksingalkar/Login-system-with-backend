<?php
    //echo "Hello";
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Database connection
    $con = new mysqli("127.0.0.1","root","","login");
    if($con->connect_error) {
        die("Faild : ".$con->connect_error);
    } else{
        $stmt = $con->prepare("Select * from username where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt ->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo '<script type="text/javascript">
                window.open("https://datastudio.google.com/reporting/48b6f676-a1b8-41bc-8771-7b1e1b38bfae");
            </script>';
            } else{
                echo "INvalid";
            }
        }   else{
            echo "<h2> InVALID LOGIN </h2>";
        }
    }
?>
