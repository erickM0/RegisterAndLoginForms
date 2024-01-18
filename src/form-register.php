<?php include 'header.php'?>

<form action="register.php" method="POST">

    <label for="username">escolha seu nome de usuáio</label>
    <input type="text" name="username" id="usernameInput" required>

    <label for="email">informe um endereço de email válido</label>
    <input type="email" name="email" id="emailInput" required>

    <label for="password">Crie uma senha</label>
    <input type="password" name="password" id="passwordInput" required>

    <label for="passwordConfirm">Crie uma senha</label>
    <input type="password" name="passwordConfirm" id="passwordConfirmInput" required>

    <input type="submit" value="Cadastrar">

</form>

<?php include 'footer.php'?>