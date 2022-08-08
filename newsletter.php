<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = "";
        $username = "";
        $email = "";
        
        if(isset($_POST['name'])) {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        }
        
        if(isset($_POST['username'])) {
            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        }

        if(isset($_POST['email'])) {
            $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        
        $sqlquery = "INSERT INTO clients (username,name,email)
                    VALUES ('$username','$name','$email')";
                    
        
        $result = mysqli_query($db,$sqlquery);
        if ($result === TRUE) {
            // echo "record inserted successfully";
            echo '<script type="text/javascript">  alert("Επιτυχής Εγγραφή"); location.href = "index.html"; </script>'; 

        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            echo '<script type="text/javascript">  alert("Υπήρξε καποιο προβλημα με την εγγραφή σας"); location.href = "index.html"; </script>'; 

        }

        echo '<script type="text/javascript"> location.href = "index.html"; </script>'; 
        
    } else {
        echo '<p>Something went wrong</p>';
    }
?>