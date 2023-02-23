<?
 session_start();

if (file_exists("utils/index.php")) {
    require_once "utils/index.php";
} else if (file_exists("../utils/index.php")) {
    require_once "../utils/index.php";
} else if (file_exists("../../utils/index.php")) {
    require_once "../../utils/index.php";
} else if (file_exists("../../../utils/index.php")) {
    require_once "../../../utils/index.php";
} else if (file_exists("../../../../utils/index.php")) {
    require_once "../../../../utils/index.php";
}

require_once "login/index.php";
/*
if (isset($_SESSION['management'])) {
*/
    /*
} else{
    session_destroy();
    header("Location:" . "http://localhost/rifaikuci.com/management/src/login/?session=no");
}
*/
?>