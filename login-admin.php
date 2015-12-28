<?php
session_start();

?>
<html>
<header>
    <?php
    include_once "./header.html";
    ?>
    <title>Administration</title>
</header>
<body>

<nav class="brown lighten-3">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Administration</a>
    </div>
</nav>
<br/>
<div class="container">

    <div class="row">
        <form class="col s12" id='login' action='control/treat-login.php' method='POST'>
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

<!-- jQuery is required by some script -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/js/materialize.min.js"></script>
</body>
</html>
