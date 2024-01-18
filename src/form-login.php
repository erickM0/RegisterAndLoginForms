<?php include 'header.php';?>


<form action="/login.php" method="POST">

    <label for="username">Digite seu usuáio ou email cadastrado</label>
    <input type="text" name="username" id="usernameInput" required>

    <label for="password">Digite sua senha</label>
    <input type="password" name="password" id="passwordInput" required>


    <input type="submit" value="Entar">

</form>

<?php include 'footer.php';?>