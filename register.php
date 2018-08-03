<script src="register.js"></script>
<form id="register" action="index.php">
    <label for="name">Please input your name</label>
    <input type="text" name="name" id="name"><br>
    <label for="account">Please input your account</label>
    <input type="text" name="account" id="account" ><br>
    <label for="passwd">Please input your password</label>
    <input type="password" name="passwd" id="passwd">
    <input type="hidden" name="nouce" id="nouce" value="<?php echo $nouce ;?>" >
    <input type="button" id="submit" value="submit"> 
</form>

    
    
    