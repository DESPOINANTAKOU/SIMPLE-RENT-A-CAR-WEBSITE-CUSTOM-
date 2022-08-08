<html>
    <head>
        <title>Admin Dashboard</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" /> 
    </head>
    <body>
        <?php
        session_start();


          if (isset($_SESSION['login_user'])) {
            include("config.php");
            

            $sql = "SELECT * FROM messages";
            $result = mysqli_query($db,$sql);

            echo ' <br /> <br />';
            echo '<h3 style="text-align:center;"> Contact Form </h3> <br />';

            ?>
              <table>
                <thead>
                  <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Phone Number </th>
                    <th>Email </th>
                    <th>Subject </th>
                    <th>Message </th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
                  while($row = mysqli_fetch_array($result)){
                    echo '<tr>';
                    echo '<td>'. $row['ID']."</td>";
                    echo '<td>'. $row['name']."</td>";
                    echo '<td>'. $row['phone_number']."</td>";
                    echo '<td>'. $row['email']."</td>";
                    echo '<td>'. $row['subject']."</td>";
                    echo '<td>'. $row['message']."</td>";    
                    echo ' </tr>';      
                  }
                ?>
                
                </tbody>
              </table>
            
            <?php 

          
            
            echo ' <br /><br /> <hr class="dashed"> <br /> <br />';

            $sql = "SELECT * FROM clients";
            $result = mysqli_query($db,$sql);
            echo '<h3 style="text-align:center;"> NewsLetter </h3> <br />';

            ?>
              <table>
                <thead>
                  <tr>
                    <th>ID </th>
                    <th>Username </th>
                    <th>Name </th>
                    <th>Email </th>
                  </tr>
                </thead>
                <tbody>
                
                <?php            
                  while($row = mysqli_fetch_array($result)){
                    echo '<tr>';
                    echo '<td>'. $row['ID']."</td>";
                    echo '<td>'. $row['username']."</td>";
                    echo '<td>'. $row['name']."</td>";
                    echo '<td>'. $row['email']."</td>";
                    echo ' </tr>';      
                  }
                ?>
                
                </tbody>
              </table>
            
            <?php 
            

          } else {
            ?>
            Not logged in HTML
            <?php
          }
        

        ?>

  </body>
</html>