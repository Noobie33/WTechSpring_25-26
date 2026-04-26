<?php
include "../Controller/PHPFormValidationController.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Validation Example</title>
    </head>
    <body>

        <?php
            echo "<h1> PHP Form Validation Example </h1>";
        ?>

        <p style='color: red'> * required field </p>

        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="name"> Name: </label></td>
                    <td><input type="text" id="name" name="name"></td>
                    <td><p style='color: red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="email"> E-mail: </label></td>
                    <td><input type="text" id="email" name="email"></td>
                    <td><p style='color: red'>*</p></td>
                </tr>
                <tr>
                    <td><label for="website"> Website: </label></td>
                    <td><input type="text" id="website" name="website"></td>
                </tr>
                <tr>
                    <td><label for="comment"> Comment: </label></td>
                    <td><textarea id="comment" name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td><label> Gender: </label></td>
                    <td>
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Other"> Other
                    </td>
                    <td><p style='color: red'>*</p></td>
                </tr>
                <tr>
                    <td><input type="submit" id="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

        

    </body>
</html>