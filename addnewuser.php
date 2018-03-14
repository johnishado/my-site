
<!DOCTYPE html>
    <html>
        <head>
            <title>An Example Form</title>
        <style>
                .signup {
                    border:12px solid #999999;
                    font: normal 20px helvetica;
                    color: #eeeeee;
                }
                form{
                    color: blue;
                }
                 table{
                    color: blue;
                    background-color: skyblue;
                }

    </style>
    
<script>/*
    function validate(form)
    {
        fail = validateForename(form.forename.value)
        fail += validateSurname(form.surname.value)
        fail += validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        fail += validateAge(form.age.value)
        fail += validateEmail(form.email.value)
        if (fail == "") return true
        else { alert(fail); return false }
    }*/
</script>
    </head>
    <body>
     <center>
        <table border="4" cellpadding="10" cellspacing="20" bgcolor="#eeeeee">
            <th colspan="2" align="center">Signup Form</th>
            <form method="post" action="adduser.php" onsubmit="return validate(this)">
                <tr><td>Firstname</td>
                <td><input type="text" maxlength="32" name="firstname"></td></tr>
                <tr><td>Surname</td>
                <td><input type="text" maxlength="32" name="surname"></td></tr>
                <tr><td>Username</td>
                <td><input type="text" maxlength="16" name="username"></td></tr>
                <tr><td>Password</td>
                <td><input type="password" maxlength="12" name="password"></td></tr>
                <tr><td>Age</td>
                <td><input type="text" maxlength="3" name="age"></td></tr>
                <tr><td>Email</td>
                <td><input type="text" maxlength="64" name="email"></td></tr>
                <tr><td colspan="2" align="center"><input type="submit"
                value="Signup"></td></tr>
            </form>
        </table>
        </center>
        <p> click <a href="homede.html"> here</a> to go back home</p>
    </body>
</html>