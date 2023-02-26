<?php

if (isset($_POST['packetsInsert'])) {

    $dirName = basename(__DIR__);
    $path = base_url_back() . "src/" . $dirName;
    $data = array();
    if (isset($_FILES['image']) && $_FILES['image']['name']) {
        $file = imageUpload("packets", 'image', '');
        if ($file == "image_large" || $file == "image_invalid_type" || $file == "image_not_upload") {
            header("Location:" . $path . "/index.php?hata=" . $file);
            exit();
        }
    }

    $arrayKey = [
        "title", "titleE", "titleA",
        "subTitle", "subTitleE", "subTitleA",
        "description", "descriptionE", "descriptionA",
        "price", "priceE", "priceA",
        "metaKeywords", "metaKeywordsE", "metaKeywordsA",
        "metaDescription", "metaDescriptionE", "metaDescriptionA",
        "startDate","finishDate","videoLink"
    ];
    $data = getDataForm($arrayKey);

    if (isset($_FILES['image']) && $_FILES['image']['name']) $data['image'] = $file;

    $sql = insert($data, "tblPackets");
    if (mysqli_query($db, $sql)) {
        
        header("Location:" . $path . "/?insert=ok");
        exit();
    } else {
        if (file_exists("../" . $file)) {
            unlink("../" . $file);
        }
        header("Location:" . $path . "/?insert=no");
        exit();
    }
}

if (isset($_POST['packetsUpdate'])) {

    $id = $_POST['packetsUpdate'];
    $dirName = basename(__DIR__);
    $path = base_url_back() . "src/" . $dirName;
    $data = array();

    if (isset($_FILES['image']) && $_FILES['image']['name']) {
        $file = imageUpload("packets", 'image', '');
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
        "subTitle", "subTitleE", "subTitleA",
        "description", "descriptionE", "descriptionA",
        "price", "priceE", "priceA",
        "metaKeywords", "metaKeywordsE", "metaKeywordsA",
        "metaDescription", "metaDescriptionE", "metaDescriptionA",
        "startDate","finishDate","videoLink"
    ];
    $data = getDataForm($arrayKey);

    if (isset($_FILES['image']) && $_FILES['image']['name']) $data['image'] = $file;

    $sql = update($data, "tblPackets", $id);
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

if (isset($_GET['packetsDelete'])) {
    $id = $_GET['packetsDelete'];
    $row = getDataRow("$id", "tblPackets", $db);
    $sql = delete($id, 'tblPackets');
    $dirName = basename(__DIR__);
    $path = base_url_back() . "src/" . $dirName;


    if (isset($row['image']) && $row['image']) {
        if (file_exists("../" . $row['image'])) {
            unlink("../" . $row['image']);
        }
    }

    if (mysqli_query($db, $sql)) {
        header("Location:" . $path . "/?delete=ok");
        exit();
    } else {
        header("Location:" . $path . "/?delete=no");
        exit();
    }
}

?>