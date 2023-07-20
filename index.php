<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav><div class="con">CONTACT FORM</div><hr>
</nav>

    <form class="form" action="send.php" method="post" >

        Email <input class="Email" type="email" name="email" placeholder="Enter your Email" > <br>

        Subject <input class="subject" type="text" name="subject"  placeholder="Subject OR Name" ><br>
        
        Message <input class="message" type="text" name="message" placeholder="Message"> <br>

        <button type="submit" name="send" class="btn" >Send</button>
    </form>
</body>
</html>