<?

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

//require_once "login/index.php";

require_once "setting/index.php";
require_once "about/index.php";
require_once "customer/index.php";
require_once "faq/index.php";
require_once "packets/index.php";
require_once "person/index.php";
require_once "references/index.php";
require_once "services/index.php";
require_once "slider/index.php";
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