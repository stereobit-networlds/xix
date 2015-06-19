<?php

$__DPCSEC['NEWCLASS2_DPC']='1;1;1;1;1;1;1;1;1';

if (!defined("NEWCLASS2_DPC")) {
define("NEWCLASS2_DPC",true);

$__DPC['NEWCLASS2_DPC'] = 'newclass2';

$__EVENTS['NEWCLASS2_DPC'][0] = 'newclass2';//explode('.',pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME));//'newclass2';
$__EVENTS['NEWCLASS2_DPC'][1] = 'test2';

$__ACTIONS['NEWCLASS2_DPC'][0] = 'newclass2';//explode('.',pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME));//'newclass2';
$__ACTIONS['NEWCLASS2_DPC'][1] = 'test2';

$__LOCALE['NEWCLASS2_DPC'][0]='NEWCLASS2_DPC;newclass2;newclass2;';

class newclass2 {

   function __construct() {
   }
   
   function event($event=null) {
     
     switch ($event) {
        case 'newclass2' :
        default       :
     }
   }
   
   function action($action=null) {
   
     switch ($action) {
        case 'newclass2' : 
        default       : $out = 'Hello world!';
     }
     return ($out);   
   } 
};
}
?>