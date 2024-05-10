<?php
include "../controller/login_controller.php";

?>
<fieldset>
    <legend>
        <b>
            <p>Log IN</p><b>
    </legend>

    <!DOCTYPE html>
    <html lang="en">

    <body>

        <form action="" method="POST">

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" placeholder="Enter Email">
                    <?php echo $emailError; ?>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td><label for="pass">Password:</label></td>
                <td><input type="password" placeholder="Enter Password" name="password">
                    <?php echo $passwordError; ?>
                    <br><br>
                </td>
            </tr>


            <tr>
                <td>
                <td><br> <button type="submit" name="Submit">Log In</button>
                    <button type="reset" name="reset">Clear</button>
                </td>
                </td>
            </tr>
        </form>

    </body>
</fieldset>

</html>