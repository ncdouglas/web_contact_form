<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Contact Form</title>
</head>
<body>
Thank you <?php echo $_POST["name"]; ?> for contacting us!<br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your issue type is: <?php echo $_POST["issue"]; ?><br>
Your Comment is: <?php echo $_POST["comment"]; ?><br>
</body>
</html>