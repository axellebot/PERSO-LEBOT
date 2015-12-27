<?php
include_once("./header.html");
?>
<body>

<div class="container">
    <h5>Admin</h5>
    <h6>Connectez-vous</h6>
    <hr/>
    <div class="row">
        <form class="col s12">

            <div class="input-field col s12">
                <i class="material-icons prefix">vpn_key</i>
                <input id="psw" type="password" class="validate" required=""></input>
                <label for="psw">Mot de passe</label>
            </div>
            <button class="btn waves-effect waves-light brown lighten-3" type="submit" name="action">
                Submit
                <i class="mdi-content-send right"></i>
            </button>
        </form>
    </div>
</div>
<!-- jQuery is required by some script -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.4/js/materialize.min.js"></script>
</body>