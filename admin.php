<?php
session_start();
include_once "./control/check_session.php";
?>

<html>
<head>
    <?php
    include_once "./header.html";
    ?>
    <title>Admin</title>
</head>


<body>
<?php
include_once "admin-nav.html"
?>

<div class="container">
    <div class="row">
        <form class="col s12" action='treat-upload_pdf.php' method='POST'>
            <div class="file-field input-field">
                <div class="btn brown lighten-3">
                    <span>File</span>
                    <input id="fileMenu" type="file" accept="application/pdf">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>
            <button class="btn waves-effect waves-light brown lighten-3" type="submit">
                Valider
                <i class="mdi-content-send right"></i>
            </button>
        </form>
    </div>
</div>

<?php
include_once "./script-footer.html";
?>
<script>
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
</script>
</body>
</html>
