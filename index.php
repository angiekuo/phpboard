<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angie's message board</title>
</head>
<style>
    table {
     width: 100%;   
     margin: 10px;
     border: 1px solid black;
    }

    td, th{
        border: 1px solid black;
        padding: 5px;
    }
</style>
<body>
<H3>Angie's message board</H3>   
<p><a href="newmsg.php">New Post</a></p>
<p>
    <table>
        <tr style="background-color: #000000; color:beige;">
        <th width="20%">Author</th><th width="80%">Message</th>
        </tr>
        <tr>
            <td>$_POST[name]</td><td>$_POST[message]</td>
        </tr>
    </table>
</p>

</body>
</html>