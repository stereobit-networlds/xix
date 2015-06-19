
<?php

$__DPCSEC['NEWCLASS_DPC']='1;1;1;1;1;1;1;1;1';

if (!defined("NEWCLASS_DPC")) {
define("NEWCLASS_DPC",true);

$__DPC['NEWCLASS_DPC'] = 'newclass';

$__EVENTS['NEWCLASS_DPC'][0] = 'newclass';

$__ACTIONS['NEWCLASS_DPC'][0] = 'newclass';

$__LOCALE['NEWCLASS_DPC'][0]='NEWCLASS_DPC;newclass;newclass;';

class newclass {

   function __construct() {
   }
   
   function event($event=null) {
     
	 switch ($event) {
	    case 'newclass' :
		default       :
	 }
   }
   
   function action($action=null) {
   
	 switch ($action) {
	    case 'newclass' :
		default       : $out = 'hello world!';
	 }
     return (); 	 
   } 
};
}
?>