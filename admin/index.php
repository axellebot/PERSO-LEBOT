<?php
session_start();

if ($_POST != NULL) {
    if ($_POST["psw"] == "gilles") {
        $_SESSION["psw"] = $_POST["psw"];
        header("Location:./pdf.php");
    } else {
        echo "erreur mdp";
    }
}

?>
<html>
<header>
    <?php
    include_once "include/header.html";
    ?>
</header>
<body>

<nav class="brown lighten-3">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Administration</a>
        <ul class="right">
            <li class="hide-on-med-and-down"><a href="/"><i class="material-icons">home</i></a></li>
        </ul>
    </div>
</nav>
<br/>
<div class="container">
    <div class="row">
        <form class="col s12" id='login' action="/admin/" method='POST'>
            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input name="psw" id="psw" type="password" class="validate" required=""/>
                <label for="psw">Mot de passe</label>
            </div>
            <button class="btn waves-effect waves-light brown lighten-3 left" type="reset">
                Reset
                <i class="mdi-action-cached left"></i>
            </button>
            <button class="btn waves-effect waves-light brown lighten-3 right" type="submit">
                Valider
                <i class="mdi-content-send left"></i>
            </button>
        </form>
    </div>
</div>

<?php
include_once('/include/script-footer.html');
?>
</body>
</html>
