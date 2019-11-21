<?php
//------------------------------------------------------ride request process--//
    // MySQL database settings
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mysql";
    
    // MySQL conneciton
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    // Test if connection succeeded
    if(mysqli_connect_errno()) {
        die("Database conneciton failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
    if(isset($_POST['request'])){
        
        // Get variables 
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $username = $_POST['username'];
        $time = $_POST['time'];
        $distance = $_POST['distance'];
        $cost = $_POST['cost'];
        $arrival = $_POST['arrival'];
    
        $origin = mysqli_real_escape_string($connection,$origin);
        $destination = mysqli_real_escape_string($connection,$destination);
        $username = mysqli_real_escape_string($connection,$username);
        $time = mysqli_real_escape_string($connection,$time);
        $distance = mysqli_real_escape_string($connection,$distance);
        $cost = mysqli_real_escape_string($connection,$cost);
        $arrival = mysqli_real_escape_string($connection,$arrival);
        
        // Checking form fields are filled properly
        if(empty($origin)) {
            array_push($errors, "Select Pick-up Location");
        }
        if(empty($destination)) {
            array_push($errors, "Select Drop-off Destination");
        }
        if(empty($username)) {
            array_push($errors, "User isn't logged in");
        }
        if(empty($time)) {
            array_push($errors, "Could not calculate time to destination");
        }
        if(empty($distance)) {
            array_push($errors, "Could not calculate distance to destination");
        }
        if(empty($cost)) {
            array_push($errors, "Could not calculate ride cost");
        }
        if(empty($arrival)) {
            array_push($errors, "No arrival time");
        }
        
        if (count($errors) == 0) {
            $sql = "INSERT INTO request (username, origin, destination, time, distance, cost)
            VALUES ('$username', '$origin', '$destination', '$time', '$distance', '$cost')";
            mysqli_query($connection, $sql);
            $_SESSION['origin'] = $origin;
            $_SESSION['destination'] = $destination;
            $_SESSION['time'] = $time;
            $_SESSION['distance'] = $distance;
            $_SESSION['cost'] = $cost;
            $_SESSION['arrival'] = $arrival;
            $msg = urlencode('Vehicle request successful.');
            header("Location: dashboard.php?msg=$msg");
        }else {
            $msg = urlencode('Sorry, we were unable to request a vehicle.');
            header("Location: dashboard.php?msg=$msg");
        }
        
    }

    // unset current ride
    
    if (isset($_POST['done'])) {
      
        $comment = $_POST['comment'];
      
        $comment = mysqli_real_escape_string($connection,$comment);
      
        if ($comment != "") {
            $sql = "INSERT INTO request (comment)
            VALUES ('$comment')";
            mysqli_query($connection, $sql);
            $msg = urlencode('Comment submitted');
            header("Location: dashboard.php?msg=$msg");
            unset($_SESSION['origin']);
            unset($_SESSION['destination']);
            unset($_SESSION['time']);
            unset($_SESSION['distance']);
            unset($_SESSION['cost']);
        }else {
            $msg = urlencode('Comment no submitted.');
            unset($_SESSION['origin']);
            unset($_SESSION['destination']);
            unset($_SESSION['time']);
            unset($_SESSION['distance']);
            unset($_SESSION['cost']);
            header("Location: dashboard.php?msg=$msg");
        }
      
    }
    
?>