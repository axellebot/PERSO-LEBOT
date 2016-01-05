<?php
session_start();
//include_once "./control/check_session.php";

if (!empty($_FILES["pdfFile"])) {
    echo $_FILES["pdfFile"]["name"];
    $target_dir = "../assets/pdf/";
    $target_file = $target_dir . "menu.pdf";
    $imageFileType = pathinfo(basename($_FILES["pdfFile"]["name"]), PATHINFO_EXTENSION);

// Allow certain file formats
    if ($imageFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<html>
<head>
    <?php
    include_once "../include/header.html"; //Entête du site
    ?>
    <title>Admin</title>
</head>


<body>
<?php
include_once "./include/sidenav.html" //Menu de navigation
?>

<div class="container">
    <div class="row">
        <form class="col s12" action='./pdf.php' method='POST'>
            <div class="file-field input-field">
                <div class="btn brown lighten-3">
                    <span>File</span>
                    <input name="pdfFile" id="pdfFile" type="file" accept="application/pdf">
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