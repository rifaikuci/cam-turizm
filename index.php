<?php require_once "front/include/require.php"?>

<?php

if(file_exists("common/db/index.php")) {
    require_once "common/db/index.php";
    require_once "common/methods/index.php";
    require_once "common/data/index.php";
}
else if(file_exists("../common/db/index.php")) {
require_once "../common/db/index.php";
require_once "../common/methods/index.php";
require_once "../common/data/index.php";
}

else if(file_exists("../../common/db/index.php")) {
require_once "../../common/db/index.php";
require_once "../../common/methods/index.php";
require_once "../../common/data/index.php";
}

else if(file_exists("../../../common/db/index.php")) {
require_once "../../../common/db/index.php";
require_once "../../../common/methods/index.php";
require_once "../../../common/data/index.php";
}

else if(file_exists("../../../../common/db/index.php")) {
require_once "../../../../common/db/index.php";
require_once "../../../../common/methods/index.php";
require_once "../../../../common/data/index.php";
}

 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">


<head>
    <title><?php echo $content->firmName . " | " .  $content->pages->home; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php require_once "front/include/style.php"?>
</head>

<body>

<?php require_once "front/include/header.php"?>
<?php require_once "front/include/slider.php"?>

<main id="main">

    <?php require_once "front/include/subSlider.php"?>
    <?php require_once "front/include/homeAbout.php"?>
    <?php require_once "front/include/services.php"?>
    <?php require_once "front/include/homeContact.php"?>
    <?php require_once "front/include/interaction.php"?>
    <?php require_once "front/include/homeGaleria.php"?>
    <?php require_once "front/include/clients.php"?>
    <?php require_once "front/include/references.php"?>
    <?php require_once "front/include/members.php"?>
    <?php require_once "front/include/contact.php"?>








</main>

<?php require_once "front/include/footer.php"?>
<?php require_once "front/include/script.php"?>




</body>

</html>