<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Contact Form</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #fafafa;
    }

    .style {
        margin: auto;
        width: 50%;
        border: 3px;
        border-radius:10px;
        background: #36454F;
        /*display: flex;
        justify-content: center;*/
    }

    #heading {
        text-align: center;
        color: #fafafa;
    }

    form {
        width: 100%;
        background-color: #A9A9A9;
        color: #fafafa;
        padding: 25px;
        border-radius:0 0 10px 10px;
    }

    input[type=text] {
        width: 100%;
        padding: 10px;
        margin:10px 0;
        border:0;
        box-shadow:0 0 15px 4px rgba(0,0,0,0.06); 
        border-radius: 10px;
    }

    textarea {
        margin-top: 10px;
        width:100%;
        resize: vertical;
        padding:15px;
        border-radius:15px;
        border:0;
        box-shadow:4px 4px 10px rgba(0,0,0,0.06);
        height:150px;
    }

    input[type=submit] {
        margin-top: 15px;
        appearance:none;
        -webkit-appearance:none;
        padding:10px;
        border:none;
        background-color:#36454F;
        color:#fafafa;
        font-weight:600;
        border-radius:5px;
        width:100%;
    }

</style>
<body>
    <!-- contact form -->
    <div class="style">
            <h1 class="style" id="heading">Contact Us</h1>
            <form  action="info.php" method="POST" id="contact-form">
                <div>
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" label="name" placeholder="full name"><br>
                        <?php if(isset($name_error)) { ?>
                           <p><?php echo $name_error ?></p>
                           <?php } ?>
                </div>
                <div>
                    <label for="email">Your E-mail:</label>
                    <input type="text" name="email" id="email" label="email"  placeholder="example@email.com"><br>
                        <?php if(isset($email_error)) { ?>
                           <p><?php echo $email_error ?></p>
                           <?php } ?>
                        
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea name="message" id="message"  placeholder="your message here"></textarea><br>
                        <?php if(isset($message_error)) { ?>
                           <p><?php echo $message_error ?></p>
                           <?php } ?>
                </div>
                <div>
                   <input type="submit" name="submit" value="Submit"> 
                </div>
            </form>
    </div>
</body>
</html>