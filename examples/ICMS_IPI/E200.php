<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E200;

$std = new stdClass();
$std->UF = 'PR';
$std->DT_INI = 26092018;
$std->DT_FIN = 26102018;

try {
    $b0 = new E200($std);
    echo "{$b0}".'<br>';
    echo '|E200|PR|26092018|26102018|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
