<?php
session_start();
include_once "./control/check_session.php";


if (!empty($_FILES[""])) {

}
if (!empty($_GET)) {
    if (!empty($_GET["dir"]) && !empty($_GET["name"])) {
        $directory = $_GET["dir"];
        $file = $_GET["name"];

        switch ($directory) {
            case "prod":
                $path = "assets/img/photos/produits/";
                break;
            case "bat":
                $path = "assets/img/photos/batiments/";
                break;
        }
        echo "file : $path$file";
        if (file_exists($path . $file)) {
            echo "File exist";
            if (!unlink($path . $file)) {
                echo("Error deleting $file");
                echo $path . $file;
            } else {
                echo("Deleted $file");
                HEADER("Location:./album.php");
            }
        } else {
            echo "File doesn't exist";
        }
    } else {
        printf("Il manque des informations de suppréssion");
    }
}

?>

<html>
<head>
    <?php
    include_once "include/header.html";//entete admin
    ?>
</head>


<body>
<?php
include_once "include/sidenav.html"
?>

<main>
    <div id="nav-container" class="col s12">
        <ul class="tabs" style="overflow: visible;">
            <li class="tab col s3"><a href="#produit" class="active black-text">Produits</a></li>
            <li class="tab col s3"><a href="#batiment" class="black-text">Bâtiment</a></li>
        </ul>
    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large grey">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            <li><a class="btn-floating grey darken-2 tooltipped" data-position="left" data-delay="50"
                   data-tooltip="Photo Établissement"><i class="material-icons">store</i></a></li>
            <li><a class="btn-floating grey darken-1 tooltipped" data-position="left" data-delay="50"
                   data-tooltip="Photo Nourriture"><i class="material-icons">restaurant_menu</i></a></li>
        </ul>
    </div>

    <div id="produit" class="col s12">
        <div class="container">
            <br/>
            <div class="row">
                <?php
                $directory = "../assets/img/photos/produits";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\">";
                        echo "<div class=\"card brown lighten-4\">";
                        echo "<div class=\"card-image\" >";
                        echo "<img class=\"materialboxed  responsive-img z\" src=\"$directory/$file\">";
                        echo "<span class=\"card-title\">$file</span>";
                        echo "</div>";
                        echo "<div class=\"card-action center row\">";
                        echo "<a class=\" waves-effect waves-light btn brown lighten-3 \" href=\"./album.php?dir=prod&name=$file\"><i class=\"material-icons\">delete</i></a>";
                        echo "</div >";
                        echo "</div >";
                        echo "</div >";
                    }
                } ?>
            </div>
        </div>
    </div>
    <div id="batiment" class="col s12">
        <div class="container">
            <br/>
            <div class="row">
                <?php
                $directory = "../assets/img/photos/batiments";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\">";
                        echo "<div class=\"card brown lighten-4\">";
                        echo "<div class=\"card-image\" >";
                        echo "<img class=\"materialboxed  responsive-img z\" src=\"$directory/$file\">";
                        echo "<span class=\"card-title\">$file</span>";
                        echo "</div>";
                        echo "<div class=\"card-action center row\">";
                        echo "<a class=\" waves-effect waves-light btn brown lighten-3\" href=\"./album.php?dir=bat&name=$file\"><i class=\"material-icons\">delete</i></a>";
                        echo "</div >";
                        echo "</div >";
                        echo "</div >";
                    }
                } ?>
            </div>
        </div>
    </div>

</main>
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
