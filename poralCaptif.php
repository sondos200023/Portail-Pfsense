
<style>

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
    <title>Geek</title>
</head>
<body>
    <form method="post" action="$PORTAL_ACTION$" class="login-form">
        <h1 class="login-title">Bienvenue chez </h1>
        <img src="captiveportal-Geek.png" alt="Logo Geek" class="logo">

        
        <div class="input-box">
            <i class='bx bxs-phone'></i>
            <input type="text" name="auth_user" placeholder="Numéro de téléphone"  required pattern="[0-9]+" title="Veuillez saisir le numéro de téléphone correcte">
        </div>

        <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
        <input name="zone" type="hidden" value="$PORTAL_ZONE$">
        <input name="accept" type="submit" value="Login" class="login-btn">
        
        <p class="msg">
            Veuillez remplir le formulaire pour que vous puissiez vous connecter           
        </p>
    </form>


    
</body>
</html>
