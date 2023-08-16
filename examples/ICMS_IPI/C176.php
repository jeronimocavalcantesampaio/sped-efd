<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C176;

$std = new stdClass();
$std->COD_MOD_ULT_E = '55';
$std->NUM_DOC_ULT_E = '487577338';
$std->SER_ULT_E = 'G0N';
$std->DT_ULT_E = '26092018';
$std->COD_PART_ULT_E = '33234';
$std->QUANT_ULT_E = 391.4;
$std->VL_UNIT_ULT_E = 52.48;
$std->VL_UNIT_BC_ST = 79.91;
$std->CHAVE_NFE_ULT_E = '43171207364617000135550000000120141000120146';
$std->NUM_ITEM_ULT_E = '825';
$std->VL_UNIT_BC_ICMS_ULT_E = 23.52;
$std->ALIQ_ICMS_ULT_E = 441.9;
$std->VL_UNIT_LIMITE_BC_ICMS_ULT_E = 20.75;
$std->VL_UNIT_ICMS_ULT_E = 9169.425;
$std->ALIQ_ST_ULT_E = 651.8;
$std->VL_UNIT_RES = 42915.908;
$std->COD_RESP_RET = 1;
$std->COD_MOT_RES = 2;
$std->CHAVE_NFE_RET = '43171207364617000135550000000120141000120146';
$std->COD_PART_NFE_RET = '223232';
$std->SER_NFE_RET = 'E34';
$std->NUM_NFE_RET = '705898622';
$std->ITEM_NFE_RET = '44';
$std->COD_DA = '1';
$std->NUM_DA = '932332';
$std->VL_UNIT_RES_FCP_ST = 40.60;

try {
    $c176 = new C176($std);
    echo "{$c176}".'<br>';
    echo '|C176|55|487577338|G0N|26092018|33234|391,400|52,48|79,91|43171207364617000135550000000120141000120146|825|23,52|441,90|20,75|9169,43|651,80|42915,91|1|2|43171207364617000135550000000120141000120146|223232|E34|705898622|44|1|932332|40,60|<br>';
} catch (\Exception $e) {
    echo $e->getMessage()."\n";
}
