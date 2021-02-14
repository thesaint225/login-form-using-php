<?php
if (isset($_POST['submit'])) {
    //     // validate entries
    echo 'form submitted';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Connect with Us</h1>
        <p>We love to respond to your queries and help you succed .<br>
            Fell free to get in touch with us
        </p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your Request</h3>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="John Prank" autocomplete="on">
                        </div>
                        <div class="input-group">
                            <label>phone</label>
                            <input type="text" name="phone" placeholder="+233 554694601">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="johnprank@gmail.com" autocomplete="on">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="Product demo">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" name="message" placeholder="your message"></textarea>
                    <!-- <input type="submit" value="submit" name="submit"> -->
                    <button value='submit' name='submit'>Send</button>
                </form>
                <!-- <button value="submit " name="submit">SEND</button> -->

            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>Contactus@gmail.com</td>
                    </tr>
                    <tr>
                        <td>phone</td>
                        <td>+233 54694601</td>
                    </tr>
                    <tr>
                        <td>Adress</td>
                        <td>Accra ,burma camp</td>
                    </tr>
                </table>


            </div>
        </div>
    </div>

</body>

</html>