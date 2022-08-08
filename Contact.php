<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = "";
        $phone = "";
        $email = "";
        $subject = "";
        $message = "";
        
        if(isset($_POST['fullname'])) {
            $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
        }
        
        if(isset($_POST['phone'])) {
            $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        }

        if(isset($_POST['email'])) {
            $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        
        if(isset($_POST['subject'])) {
            $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        }
        
        if(isset($_POST['message'])) {
            $message = htmlspecialchars($_POST['message']);
        }
        
        $sqlquery = "INSERT INTO messages (name,phone_number,email,subject,message)
                    VALUES ('$fullname','$phone','$email','$subject','$message')";
                    
        
        $result = mysqli_query($db,$sqlquery);
        if ($result === TRUE) {
            // echo "record inserted successfully";
            echo '<script type="text/javascript">  alert("Επιτυχής Εγγραφή"); location.href = "index.html"; </script>'; 

        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            echo '<script type="text/javascript">  alert("Υπήρξε καποιο προβλημα με την εγγραφή σας"); location.href = "index.html"; </script>'; 

        }

        echo '<script type="text/javascript"> location.href = "index.html"; </script>'; 


        // header("Location: index.html");

    } else {
        echo '<p>Something went wrong</p>';
    }
?>