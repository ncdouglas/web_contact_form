<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #fafafa;
    }

    .style {
        margin: auto;
        width: 50%;
        border: 3px;
        border-radius:10px;
        background: #36454F;
        padding: 10px 0px 10px 0px;
    }

    #text {
        text-align: center;
        color: #fafafa;
    }

</style>
<body>
    <div class="style">
        <h1 class="style" id="text">Thank you for contacting us! We have recieved the following:</h1>
            <div class="style" id="text">
                <p>Name: <?php echo $name ?></p><br>
                <p>Email: <?php echo $email ?></p><br>
                <p>Message: <?php echo $message?></p>
            </div>
    </div>
</body>
</html>