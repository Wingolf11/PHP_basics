<?php
    session_start();
    include("database.php");


    if(isset($_POST["login"])){
        if(!$_POST["username"] or !$_POST["password"]){
            echo "error on username or password"; /*Error on user or passsword*/
        }

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM p_users WHERE User = ?";
        $stmt = $conn->prepare($sql);

        if($stmt === false){
            die("SQL error: " . $conn->error);
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 1){
            $user = $result->fetch_assoc();

            if($password === $user["Password"]){
                session_regenerate_id(true);
                $_SESSION["user"] = $user["User"];
                header("Location: dashboard.php");
                exit;
            }
            else{
                $_SESSION["error"] = "Wrong password";
                header("Location: index.php");
                exit;
            }
        }
        else{
            $_SESSION["error"] = "User not found";
            header("Location: index.php");
            exit;
        }
        
    }
    else{
        header("Location: index.php");
        exit;
    }
?>