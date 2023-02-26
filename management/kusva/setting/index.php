<?php

if (isset($_POST['settingUpdate'])) {

    $id = $_POST['settingUpdate'];
    $dirName = basename(__DIR__);
    $path = base_url_back() . "src/" . $dirName;
    $data = array();

    if (isset($_FILES['image']) && $_FILES['image']['name']) {
        $file = imageUpload("setting", 'image', '');
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
        "title", "titleE", "titleA",
        "description", "descriptionE", "descriptionA",
        "address", "addressE", "addressA",
        "maps", "mapsE", "mapsA",
        "phone", "phoneE", "phoneA",
        "whatsappPhone", "whatsappPhoneE", "whatsappPhoneA",
        "fax", "faxE", "faxA",
        "mail", "mailE", "mailA",
        "worktime", "worktimeE", "worktimeA",
        "metaKeywords", "metaKeywordsE", "metaKeywordsA",
        "metaDescription", "metaDescriptionE", "metaDescriptionA"
    ];
    $data = getDataForm($arrayKey);

    if (isset($_FILES['image']) && $_FILES['image']['name']) $data['image'] = $file;

    $sql = update($data, "tblSetting", $id);
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