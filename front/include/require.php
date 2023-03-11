<?php

if (file_exists("common/db/index.php")) {
    require_once "common/db/index.php";
    require_once "common/methods/index.php";
    require_once "common/data/index.php";
    require_once "front/include/lang-control.php";

    if(file_exists("front/lib/" . $lang . ".json")) {
        $content_json = file_get_contents( "front/lib/" . $lang . ".json");
        $content = json_decode($content_json, false);
    } else {
        $content_json = file_get_contents( "front/lib/tr.json");
        $content = json_decode($content_json, false);
    }


} else if (file_exists("../common/db/index.php"))  {
    require_once "../common/db/index.php";
    require_once "../common/methods/index.php";
    require_once "../common/data/index.php";
    require_once "../front/include/lang-control.php";
    if(file_exists("../front/lib/" . $lang . ".json")) {
        $content_json = file_get_contents( "../front/lib/" . $lang . ".json");
        $content = json_decode($content_json, false);
    } else {
        $content_json = file_get_contents( "../front/lib/tr.json");
        $content = json_decode($content_json, false);
    }
} else if (file_exists("../../common/db/index.php"))  {
    require_once "../../common/db/index.php";
    require_once "../../common/methods/index.php";
    require_once "../../common/data/index.php";
    require_once "../../front/include/lang-control.php";
    if(file_exists("../../front/lib/" . $lang . ".json")) {
        $content_json = file_get_contents( "../../front/lib/" . $lang . ".json");
        $content = json_decode($content_json, false);
    } else {
        $content_json = file_get_contents("../lib/tr.json");
        $content = json_decode($content_json, false);
    }
} else if (file_exists("../../../common/db/index.php"))  {
    require_once "../../../common/db/index.php";
    require_once "../../../common/methods/index.php";
    require_once "../../../common/data/index.php";
    require_once "../../../front/include/lang-control.php";
    if(file_exists("../../../front/lib/" . $lang . ".json")) {
        $content_json = file_get_contents( "../../../front/lib/" . $lang . ".json");
        $content = json_decode($content_json, false);
    } else {
        $content_json = file_get_contents( "../../../front/lib/tr.json");
        $content = json_decode($content_json, false);
    }
} else {
    if(file_exists("../front/lib/" . $lang . ".json")) {
        $content_json = file_get_contents( "../front/lib/" . $lang . ".json");
        $content = json_decode($content_json, false);
    } else {
        $content_json = file_get_contents( "../front/lib/tr.json");
        $content = json_decode($content_json, false);
    }
}

?>
