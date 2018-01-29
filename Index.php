<!DOCTYPE html>
<html>
  <head>
    <title>login</title>

  </head>

  <body>
    <div id="container">
      <header>
        <h1>login</h1>
      </header>


      <?php

      //database info
      $Servername="localhost";
      $UsernameDB="root";
      $PasswordDB="";
      $DB="test";
      //creates the connection with the database
      $Connection = mysqli_connect($Servername, $UsernameDB, $PasswordDB, $DB) or die("unable to connect");



        $UsernameErr=$PasswordErr="";
        $Username="";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
          if (empty(mysqli_real_escape_string($Connection,$_POST['Username']))) {
            $UsernameErr="username is verplicht";
          }
          else {
            //gets text that is in the field and runs it through the test_iunput function
            $Username=mysqli_real_escape_string($Connection,$_POST['Username']);
          }
          if (empty(mysqli_real_escape_string($Connection,$_POST['Password']))) {
            $PasswordErr="passwoord is verplicht";
          }
          else {
            $Password=mysqli_real_escape_string($Connection,$_POST['Password']);
          }
        }


      ?>


      <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

          username:<br>
          <input type="text" name="Username"  value="<?php echo $Username;?>"><span class="error">*<?php echo $UsernameErr;?></span><br>

          Password:<br>
          <input type="password" name="Password" ><span class="error">*<?php echo $PasswordErr;?></span><br>

          <input type="submit" name="submit" value="login">

      </form>

      <?php
        //if the fields arent empty
        if ( ! empty($Username) and ! empty($Password)){

          // selects tha hash in the database and the salt used from the entry that has the username that the user put in the text field
          $query ="SELECT id, password FROM accounts WHERE username = '$Username'" ;

          //the result of that query is put in the variable result
          $Result = mysqli_query($Connection, $query);
          if (mysqli_num_rows($Result) == 1) {
            //makes sure we can use the attributes to put data into variables
            $User = mysqli_fetch_assoc($Result);

            //puts ID into variable
            $ID = $User['id'];
            //puts the hash that is in the database into the variable hash
            $password = $User['password'];



            //if the variable user_input is the same as the hash from the database
            if ($Password == $password) {
              //stores the ID and the username of the user into the session variables
              $_SESSION["ID"] = "$ID";
              $_SESSION["Username"] = "$Username";


              mysqli_free_result($Result);
              mysqli_close($Connection);
              header('location: page2.php');


            }
            //if it isnt it will write the the username or password is incorrect to the screen
            else {
              echo "the username or password is incorrect";

            }
          }
          else {
            echo "the username or password is incorrect";

          }
        }


      ?>
    </div>
  </body>
</html>
