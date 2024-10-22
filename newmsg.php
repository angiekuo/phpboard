<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New message</title>
</head>
<style>
    body{
        align-items: center;
        margin: 10px;
    }
    table{
        width:40%;
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
<form action="addmsg.php" method="POST">
    <table>
        <tr>
            <td>Name:</td><td><input type="text" name="aname"></td>
        </tr>
        <tr>
            <td>E-mail:</td><td><input type="text" name="aemail"></td>
        </tr>
        <tr>
            <td>Message:</td><td><input type="text" name="amsg"></td>
        </tr>
        <tr>
            <td>Face:</td><td><input type="radio" value="p01"><img src="images/p01.gif" alt="Happy emoji"><input type="radio" value="p02"><img src="images/p02.gif" alt="Anger emoji"><input type="radio" value="p03"><img src="images/p03.gif" alt="Mad emoji"></td>
        </tr>
    </table>
    <center><input type="submit" value="submit"><input type="reset" value="reset"></center>
</form>
</body>
</html>