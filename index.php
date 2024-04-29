<!DOCTYPE html>
<html>
<head>
    <META charset="UTF-8">
    <link rel="stylesheet" href="universe/frontend/css/index.css">
    <title> Universe </title>
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['msg'])):
        echo "<p class='msg'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    endif;
?>
    <section>
        <div class="form-box">
            <form action="login.php" method="POST">
                <h2> LOGIN </h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="email" autocomplete="off" required>
                    <label for=""> Email </label>
               </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="senha" required>
                    <label for=""> Senha </label>
                </div>
                <div class="forget">
                    <label for=""> 
                        <input type="checkbox"> Lembrar-me | 
                        <a href="#">  Esqueci a Senha </a>
                    </label>
                </div>
                    <button> Login </button>
                <div class="register">
                    <p> Não tenho conta: <a href="cadastro.php"> Registrar-me </a> </p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>