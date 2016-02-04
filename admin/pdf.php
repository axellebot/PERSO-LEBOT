<?php
session_start();
include_once "./control/check_session.php";

if (isset($_FILES['fileToUpload'])) {
    print_r($_FILES["fileToUpload"]["name"]);
    $uploads_dir = "/assets/pdf/";

    if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        echo "test";
        $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
        $file_name = "menu.pdf";
        if (move_uploaded_file($tmp_name, "$uploads_dir$file_name")) {
            echo "success upload of $tmp_name to $uploads_dir$file_name";
        } else {
            echo "failed";
        }
    }
}
?>

<html>
<head>
    <?php
    include_once "include/header.html"; //entete admin
    ?>
</head>

<body>
<?php
include_once "include/sidenav.html" //Menu de navigation
?>

<div class="container">
    <div class="row">
        <form class="col s12" enctype="multipart/form-data" action='./pdf.php' method='POST'>
            <div class="file-field input-field">
                <div class="btn brown lighten-3">
                    <span>File</span>
                    <input type="file" name="fileToUpload" accept="application/pdf">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one file">
                </div>
            </div>
            <button class="btn waves-effect waves-light brown lighten-3">
                Valider
                <i class="mdi-content-send right"></i>
            </button>
        </form>
        <div class="col s12 m12 l12">

            <object data="../assets/pdf/menu.pdf#zoom=100" type="application/pdf" width="100%" height="1100"
                    internalinstanceid="19" title="">
                Il semblerai que votre navigateur n'arrive pas à lire le menu en pdf.<br>
                Pas de soucis, il suffit de le télécharger ici :
                <a href="../assets/pdf/menu.pdf">menu.pdf</a>
            </object>
        </div>
    </div>
</div>
<?php
include_once "../include/script-footer.html";
?>
<script>
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
</script>
</body>
</html>