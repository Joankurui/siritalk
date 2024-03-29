



<?php require_once('includes/head_section.php') ?>
    
    <title>SIRITALK | Home </title>
</head>
<body>
    <!-- container - wraps whole page -->
    <div class="container">
        <!-- navbar -->
        <?php include('includes/navbar.php') ?>
        <!-- banner -->


<?php
 
    // Connect to database
    $con = mysqli_connect('localhost','root','','complete-blog-php');
     
    // mysqli_connect("servername","username","password","database_name")
  
    // Get all the categories from category table
    $sql = "SELECT * FROM `community`";
    $name = mysqli_query($con,$sql);
  
    // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        $name = mysqli_real_escape_string($con,$_POST['name']);
        
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($con,$_POST['domain']);
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert =
        "INSERT INTO `community`(`name`, `domain`)
            VALUES ('$name','$domain')";
          
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($con,$sql_insert))
        {
            echo '<script>alert("community added successfully")</script>';
        }
    }
?>
  
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">   
</head>
<body>
    <form method="POST">
        
        
        <label>Select a community</label>
        <select name="community">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($community = mysqli_fetch_array(
                        $name,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $community["id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $community["name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <br>
</body>
</html>