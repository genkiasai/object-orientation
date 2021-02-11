<?php
require("./CFamily.php");

class CMama extends CFamily {
    function __construct() {
        $Name = CFamily->getName("hogeMama");
    }
}




?>