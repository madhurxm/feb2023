<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td>
                        <label for="fname">First Name</label>
                    </td>
                    <td>
                        <input type="text" name="fname" id="fname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" value="Send Data">Send Data</button>
                    </td>
                    <td>
                        <button type="reset">Reset Form</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (!isset($_POST['fname']))
        {
            echo "Please enter value";
        }
        else
        {
            echo($_POST['fname']);
        }
        str_word_count($_COOKIE);
        //&& empty($_POST['fname'])
        ?>
    </body>
</html>