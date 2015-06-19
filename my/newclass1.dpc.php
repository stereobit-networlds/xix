<?php

$__DPCSEC['NEWCLASS1_DPC']='1;1;1;1;1;1;1;1;1';

if (!defined("NEWCLASS1_DPC")) {
define("NEWCLASS1_DPC",true);

$__DPC['NEWCLASS1_DPC'] = 'newclass1';

$__EVENTS['NEWCLASS1_DPC'][0] = 'newclass1';

$__ACTIONS['NEWCLASS1_DPC'][0] = 'newclass1';

$__LOCALE['NEWCLASS1_DPC'][0]='NEWCLASS1_DPC;newclass1;newclass1;';

class newclass1 {

   function __construct() {
   }
   
   function event($event=null) {
     
     switch ($event) {
        case 'newclass1' :
        default       :
     }
   }
   
   function action($action=null) {    
   
     switch ($action) {
        case 'newclass1' :
        default       : $out = 'hello world!';
     }
     return ($out);     
   } 
};
}
?>