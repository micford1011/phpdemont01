<?php
    include 'pure_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 31013</title>
</head>
<body>

    <a href="next_page.php"></a>
    <h3>
      Username: <u id="displayusername"><?php echo $username; ?></u>
      <br>
      User_id: <u id="displayuserid"><?php echo $user_id; ?></u>
      <br>
      stedent_number: <u id="displaystudentnumber"><?php echo $student_number; ?></u>
      <br>
      email: <u id= "displayemail"><?php echo $email; ?></u>
      <br>
      $phone_number: <u id= "displayphonenumber"><?php echo $phone_number; ?></u>
    </h3>

    <button type="button" onclick="greetUser()">Greet User</button>
    <script src="external.js"></script>
</body>
</html>