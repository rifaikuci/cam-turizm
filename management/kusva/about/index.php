<?php

if (isset($_POST['aboutUpdate'])) {

    $id = $_POST['aboutUpdate'];
    $dirName = basename(__DIR__);
    $path = base_url_back() . "src/" . $dirName;
    $data = array();

    if (isset($_FILES['image']) && $_FILES['image']['name']) {
        $file = imageUpload("about", 'image', '');
        if ($file == "image_large" || $file == "image_invalid_type" || $file == "image_not_upload") {
            header("Location:" . $path . "/index.php?hata=" . $file);
            exit();
        }

        if (isset($_POST['deleteFile']) && $_POST['deleteFile']) {
            if (file_exists("../" . $_POST['deleteFile'])) {
                unlink("../" . $_POST['deleteFile']);
            }
        }
    }

    $arrayKey = [
        "about", "aboutE", "aboutA",
        "mission", "missionE", "missionA",
        "vision", "visionE", "visionA",
        "videoLink", "videoLinkE", "videoLinkA",
        "metaKeywords", "metaKeywordsE", "metaKeywordsA",
        "metaDescription", "metaDescriptionE", "metaDescriptionA"
    ];
    $data = getDataForm($arrayKey);

    if (isset($_FILES['image']) && $_FILES['image']['name']) $data['image'] = $file;

    $sql = update($data, "tblAbout", $id);

    if (mysqli_query($db, $sql)) {
        header("Location:" . $path . "/?update=ok");
        exit();
    } else {
        if (file_exists("../" . $file)) {
            unlink("../" . $file);
        }
        header("Location:" . $path . "/?update=no");
        exit();
    }
}

?>