<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
</head>
<body>
<form align="right" action="gamemode_select.php">
    <input type="submit" value="Játék vendégként" />
    </form>
    <form action="login.php" method="POST">
        <table align="center">
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Jelszó: </td>
                <td><input type="password" name="jelszo" /></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Bejelentkezés</button></td>
            </tr>
        </table>
    </form>
    <form align="center" action="register_form.php">
    <input type="submit" value="Regisztráció" />
    </form>

</body>
</html>