<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url(captiveportal-Geek.jpg);
    background-size: cover;
    background-position: center;
   
}

.login-form {
    background: rgba(64, 64, 64, 0.15);
    border: 3px solid rgba(255, 255, 255, 0.3);
    padding: 30px;
    border-radius: 16px;
    backdrop-filter: blur(25px);
    text-align: center;
    color: white;
    width: 400px;
    box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.15);
}

.login-title {
    font-size: 40px;
    margin-bottom: 40px;
}

.input-box {
    margin: 20px 0;
    position: relative;
}
.input-box input {
    width: 100%;
    background: rgba(255, 255, 255, 0.1);
    border: none;
    padding: 12px 12px 12px 45px;
    border-radius: 99px;
    outline: 3px solid transparent;
    transition: 0.3s;
    font-size: 17px;
    color: white;
    font-weight: 600;
}
.input-box input::placeholder {
    color: rgba(255, 255, 255, 0.8);
    font-size: 17px;
    font-weight: 500;
}
.input-box input:focus {
    outline: 3px solid rgba(255, 255, 255, 0.3);
}
.input-box input::-ms-reveal {
    filter: invert(100%);
}

.input-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: rgba(255, 255, 255, 0.8);
}

.remember-forgot-box {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
    font-size: 15px;
}

.remember-forgot-box label {
    display: flex;
    gap: 8px;
    cursor: pointer;
}
.remember-forgot-box input {
    accent-color: white;
    cursor: pointer;
}

.remember-forgot-box a {
    color: white;
    text-decoration: none;
}
.remember-forgot-box a:hover {
    text-decoration: underline;
}

.login-btn {
    width: 100%;
    padding: 10px 0;
    background: #2F9CF4;
    border: none;
    border-radius: 99px;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}
.login-btn:hover {
    background: #0B87EC;
}

.msg {
    margin-top: 15px;
    font-size: 19px;
    color:white;
}

.logo {
            width: 300px; 
            height: 100px; 
        }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="$PORTAL_ACTION$" class="login-form">
        <h1 class="login-title">Bienvenue chez </h1>
        <img src="captiveportal-Geek.png" alt="Logo Geek" class="logo">

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" name="Nom" placeholder="Nom">
        </div>

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" name="Prenom" placeholder="Prénom">
        </div>

        <div class="input-box">
            <i class='bx bxs-phone'></i>
            <input type="text" name="Numero" placeholder="Numéro de téléphone">
        </div>

        <input type="hidden" name="redirurl" value="$PORTAL_REDIRURL$">
        <input type="hidden" name="zone" value="$PORTAL_ZONE$">

        <button type="submit" class="login-btn">Continuer</button>
        <p class="msg">
          Veuillez remplir le formulaire pour que vous pouvez connecter           
        </p>
    </form>
</body>
</html>
