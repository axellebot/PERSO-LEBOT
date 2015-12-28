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

<main>
    <div id="nav-container" class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a href="#produit" class="active black-text">Produits</a></li>
            <li class="tab col s3"><a href="#batiment" class="black-text">Bâtiment</a></li>
        </ul>
    </div>
    <div id="produit" class="col s12">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large grey">
                <i class="large material-icons">add</i>
            </a>
        </div>
        <div class="container">
            <br/>
            <div class="row">
                <?php
                $directory = "./images/photos/batiments/";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\">";
                        echo "<div class=\"card brown lighten-4\">";
                        echo "<div class=\"card-image\" >";
                        echo "<img class=\"materialboxed  responsive-img z\" src=$directory$file>";
                        echo "<span class=\"card-title\">$file</span>";
                        echo "</div>";
                        echo "<div class=\"card-action center row\">";
                        echo "<a class=\" waves-effect waves-light btn brown lighten-3\" href=\"#\"><i class=\"material-icons left\">delete</i>Supprimer</a>";
                        echo "</div >";
                        echo "</div >";
                        echo "</div >";
                    }
                } ?>
            </div>
        </div>
    </div>
    <div id="batiment" class="col s12">
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large grey">
                <i class="large material-icons">add</i>
            </a>
        </div>
        <div class="container">
            <br/>
            <div class="row">
                <?php
                $directory = "./images/photos/produits/";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\">";
                        echo "<div class=\"card brown lighten-4\">";
                        echo "<div class=\"card-image\" >";
                        echo "<img class=\"materialboxed  responsive-img z\" src=$directory$file>";
                        echo "<span class=\"card-title\">$file</span>";
                        echo "</div>";
                        echo "<div class=\"card-action center row\">";
                        echo "<a class=\" waves-effect waves-light btn brown lighten-3\" href=\"#\"><i class=\"material-icons left\">delete</i>Supprimer</a>";
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
