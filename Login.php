<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form id='login' action='Login.php' method='post' accept-charset='UTF-8'>
    <fieldset >
        <legend>Login</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
 
        <label for='username' >UserName*:</label>
        <input type='text' name='username' id='username'  maxlength="50"    />
    
        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50  " />
    
        <input type='submit' name='Submit' value='Submit' />
 
    </fieldset>
</form>


</body>
</html>