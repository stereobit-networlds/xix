<?php
//if (defined("SENTRANSACTIONS_DPC")) {

$__DPCSEC['SHCART_DPC']='2;1;1;2;2;2;2;2;9';

if ((!defined("SHCART_DPC")) && (seclevel('SHCART_DPC',decode(GetSessionParam('UserSecID')))) ) {
define("SHCART_DPC",true);

$__DPC['SHCART_DPC'] = 'shcart';


$d = GetGlobal('controller')->require_dpc('storebuffer/cart.dpc.php');
require_once($d);
//calldpc_init_object('storebuffer.cart','dpc');

//this transfer all actions,commands,attr from parent to child and parent disabled(=null)
//it is important for inherit to still procced the commands of parent
GetGlobal('controller')->get_parent('CART_DPC','SHCART_DPC');
//print_r($__ACTIONS['SHCART_DPC']);

//$z = GetGlobal('controller')->require_dpc('twig/twigengine.dpc.php');
//require_once($z);

$__LOCALE['SHCART_DPC'][99]='_SUBMITORDER2;Submit Order;Τέλος Συναλλαγής';

$__EVENTS['SHCART_DPC'][11]= "fastpick";
$__EVENTS['SHCART_DPC'][12]= "sship";
$__EVENTS['SHCART_DPC'][13]= "calc";
$__EVENTS['SHCART_DPC'][14]= localize('_SUBMITORDER2',getlocal());
$__EVENTS['SHCART_DPC'][15]= "exchcart";
//print_r($__EVENTS['SHCART_DPC']);
//echo localize('_SUBMITORDER2',getlocal());
$__ACTIONS['SHCART_DPC'][11]= "fastpick";
$__ACTIONS['SHCART_DPC'][12]= "sship";
$__ACTIONS['SHCART_DPC'][13]= "calc";
$__ACTIONS['SHCART_DPC'][14]= localize('_SUBMITORDER2',getlocal());
$__ACTIONS['SHCART_DPC'][15]= "exchcart";

$__DPCATTR['SHCART_DPC'][localize('_SUBMITORDER2',getlocal())] = '_SUBMITORDER2,1,0,1,0,0,0,0,0,0';

//overwrite for cmd line purpose
$__LOCALE['SHCART_DPC'][0]='SHCART_DPC;My Cart;Καλάθι Αγορών';
$__LOCALE['SHCART_DPC'][1]='_GRANDTOTAL;Grand Total;Γενικό Σύνολο';
$__LOCALE['SHCART_DPC'][2]='loginorregister;Login or Register for a new account;Παρακαλώ προχωρείστε στις απαιτούμενες ενέργειες!';
$__LOCALE['SHCART_DPC'][3]='_IWAY;Notice of pay;Τυπος Παραστατικού';
$__LOCALE['SHCART_DPC'][4]='_INVOICE;Invoice;Τιμολόγιο';
$__LOCALE['SHCART_DPC'][5]='_APODEIXI;Receipt;Αποδειξη';
$__LOCALE['SHCART_DPC'][6]='_DELIVADDRESS;Delivery Address;Παράδοση σε αλλη διευθυνση';
$__LOCALE['SHCART_DPC'][7]='_TAX;Tax;ΦΠΑ';
$__LOCALE['SHCART_DPC'][8]='_NO;No;Οχι';
$__LOCALE['SHCART_DPC'][9]='_FASTPICK;Fast pick;Γρήγορη Συλλογή';
$__LOCALE['SHCART_DPC'][10]='_FASTPICKON;Fast pick is ON;Η Γρήγορη Συλλογή είναι ON';
$__LOCALE['SHCART_DPC'][11]='_FASTPICKOFF;Fast pick is OFF;Η Γρήγορη Συλλογή είναι OFF';
$__LOCALE['SHCART_DPC'][12]='_TOTAL;Subtotal;Σύνολο';
$__LOCALE['SHCART_DPC'][13]='_FCOST;Total;Πληρωτέο';
$__LOCALE['SHCART_DPC'][13]='_SHIPCOST;Shipping cost;Κόστος μεταφορικών';
$__LOCALE['SHCART_DPC'][14]='_SHIPWEIGHT;Weight;Τα αντικείμενα στο καλάθι σας ζυγίζουν';
$__LOCALE['SHCART_DPC'][15]='_KG;Kg;Κιλά';
$__LOCALE['SHCART_DPC'][16]='_SHIPZONE;Shipping Zone;Ζώνη αποστολής';
$__LOCALE['SHCART_DPC'][17]='_PARCELOF;Parcel;Δέμα βάρους';
$__LOCALE['SHCART_DPC'][18]='_CONTINUESHOP;Continue shopping;Συνέχισε τις αγορές';
$__LOCALE['SHCART_DPC'][19]='_CLEARCARTITEMS;Remove all items;Άδειασε το καλάθι';
$__LOCALE['SHCART_DPC'][20]='_ADDCARTITEM;Add item;Στο καλάθι';
$__LOCALE['SHCART_DPC'][21]='_REMCARTITEM;Remove;Διαγραφή';
$__LOCALE['SHCART_DPC'][22]='_SUBMITORDER2;Submit Order;Τέλος Συναλλαγής';
$__LOCALE['SHCART_DPC'][23]='_TRANSPRINT;Print;Εκτύπωση';
$__LOCALE['SHCART_DPC'][24]='_ORDERSUBJECT;Order No ;Παραγγελία No ';
$__LOCALE['SHCART_DPC'][25]='_exchangewith;Exchange with ;Ανταλλαγή με ';
$__LOCALE['SHCART_DPC'][26]='_roadway0;Self service;Παραλαβή απο εμένα';
$__LOCALE['SHCART_DPC'][27]='_roadway1;Standard mail;Τυπικό Ταχυδρομείο';
$__LOCALE['SHCART_DPC'][28]='_EXECARTITEM;Exchange;Ανταλλαγή';

class shcart extends cart {

	var $uniname2;
	var $liveupdate;
	var $allowqtyover;
    var $rejectqty;
	var $detailqty;
	var $stock_msg;
	var $overitem;
	var $ignoreqtyzero;
    var $qtytototal,$total;
	var $path,$autopay;
    var $mydiscount, $mytaxcost, $myfinalcost, $myshippingcost;
	var $discount;

	var $urlpath, $inpath;
	var $mytemplate, $mytemplate2, $mytemplate3;
	var $todo;
	var $quicktax,$showtaxretail,$is_reseller;
	var $cartlinedetails, $notallowremove;
	var $cartloopdata, $looptotals;
	var $shipcalcmethod;
	var $s_enc,$t_enc;
	var $itemclick, $imagex, $imagey;
	var $cartprintwin;
	var $itemscount;
	var $supershipping, $shipzone, $shipmethods, $parcelunit, $parcelweight;
    var $navon, $submit2, $url;
	var $printout, $print_title;
	
	static $staticpath;
	var $reservations, $exchange;
	
    function shcart() {
       $UserName = GetGlobal('UserName');		

       cart::cart();   
	   
	   self::$staticpath = paramload('SHELL','urlpath');
	   
	   /*$status = GetReq('status');
	   if ($status>=0) {//change cart status when return from todolist...after register or login
	     $this->status = $status;
	     SetSessionParam('cartstatus',$status);
	   }
	   else //default
	     $this->status = GetSessionParam('cartstatus');*/

	   $this->path = paramload('SHELL','prpath');
	   $this->urlpath = paramload('SHELL','urlpath');
	   $this->inpath = paramload('ID','hostinpath');

	   $this->uniname2 = remote_paramload('SHCART','uniname2',$this->path);
       $this->liveupdate = remote_paramload('SHCART','liveupdate',$this->path);
       $this->allowqtyover = remote_paramload('SHCART','allowqtyover',$this->path);
       $this->rejectqty = remote_paramload('SHCART','rejectzeroqty',$this->path);
       $this->detailqty = remote_paramload('SHCART','overqty2detail',$this->path);
       $this->ignoreqtyzero = remote_paramload('SHCART','ignoreqty0',$this->path);

	   $this->stock_msg = null;
	   $this->overitem = null;

	   $this->title = localize('SHCART_DPC',getlocal());

	   $this->autopay = (remote_paramload('SHCART','auto',$this->path)>0)?1:null;
	   $this->bypass_qty = remote_paramload('SHCART','showqty',$this->path);
  	     	   
       //echo $this->total,'-',$this->myfinalcost;
	   //override
	   $this->carterror_mail = remote_paramload('SHCART','carterr',$this->path);
	   $this->cartsend_mail = remote_paramload('SHCART','cartsender',$this->path);
	   $this->cartreceive_mail = remote_paramload('SHCART','cartreceiver',$this->path);

	   $dc = remote_paramload('SHCART','decimals',$this->path);
	   //main cart decs
       $this->dec_num = $dc?$dc:paramload('CART','decimals');
	   //echo $this->dec_num,'>';
	   
	   //main cart tax
	   $tx = remote_paramload('SHCART','taxcostpercent',$this->path);	   
	   $this->tax = $tx?$tx:null;//paramload('CART','taxcostpercent');
	   //fixed shipping cost
	   $sx = remote_paramload('SHCART','shipcost',$this->path);	   
       $this->shippingcost = GetSessionParam('shipcost') ? 
	                         GetSessionParam('shipcost') : 
							 $sx;	   
	   //echo $this->shippingcost,'>',$sx,'|';
	   //shipping calc method per roadway
	   $this->shipcalcmethod = remote_arrayload('SHCART','shipcalcmethod',$this->path);	      
	   
	   $this->quicktax = remote_paramload('SHCART','viewtaxfp',$this->path);
       $this->showtaxretail = remote_paramload('SHCART','showtaxretail',$this->path);

	   //price per client else cart discount global
 	   $percentoffperclient = remote_arrayload('SHCART','priceoffperclient',$this->path);
	   $this->discount  = $percentoffperclient[$this->userLevelID];
	   //$this->discount = $discount?$discount:remote_arrayload('CART','discount',$this->path);

	   $template='fpcartline.htm';
	   $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ;
	   //echo $t,'>';
	   if (($template) && is_readable($t)) {
		 $this->mytemplate = file_get_contents($t);
	   }

	   $template2='fpcart.htm';
	   $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template2) ;
	   //echo $t,'>';
	   if (($template2) && is_readable($t)) {
		 $this->mytemplate2 = file_get_contents($t);
	   }   

	   $this->todo = null;
	   
	   
       $this->cartlinedetails = remote_paramload('SHCART','cartlinedetails',$this->path);
	   
	   $rm = remote_paramload('SHCART','notallowremove',$this->path);
	   $this->notallowremove = $rm?$rm:0;
	      
       $this->continue_button = loadTheme('continue_b',"");	
       $this->print_button = loadTheme('print_b',"");		   
	   
	   //IE8
       /*$this->order_button = loadTheme('submit_b',"",1);		   
       $this->cancel_button = loadTheme('cancel_b',"",1);
       $this->recalc_button = loadTheme('recalc_b',"",1);   
       $this->submit_button = loadTheme('submit_b',"",1);//one title for all steps
	   */
	   $this->cartloopdata = null;   
	   $this->looptotals = null;
	   
	   $senc = arrayload('SHELL','char_set'); 
	   $c = getlocal()?getlocal():0; //echo $c;
	   $this->s_enc = $senc[$c]; //echo $this->s_enc; 
       $this->t_enc = paramload('SHELL','charset');	//echo $this->t_enc;	 
	   
       $this->itemclick = remote_paramload('SHCART','itemclick',$this->path);
	   $this->imagex = remote_paramload('SHCART','imagex',$this->path);	
	   $this->imagey = remote_paramload('SHCART','imagey',$this->path);		   	     			  
	   
	   $this->cartprintwin = remote_arrayload('SHCART','printwin',$this->path);	  
	   
	   //GET SESSION DATA
	   $this->total = floatval(GetSessionParam('subtotal'));
	   $this->myfinalcost = floatval(GetSessionParam('total'));
	   $this->qty_total = GetSessionParam('qty_total');	   
	   $this->myshippingcost = floatval(GetSessionParam('myshippingcost'));	   
	   $this->mytaxcost = floatval(GetSessionParam('mytaxcost'));	
	   $this->mydiscount = floatval(GetSessionParam('mydiscount'));		
	   
	   $this->is_reseller = GetSessionParam('RESELLER'); 
	   //echo $this->is_reseller,'++';	
	          
	   $this->itemscount = remote_paramload('SHCART','itemscount',$this->path);
	   
	   //when return from payengines
	   $this->transaction_id = GetSessionParam('TransactionID')?GetSessionParam('TransactionID'):null;//'1111';//dummy	
	   
	   $this->supershipping = remote_paramload('SHCART','supershipping',$this->path);	
	   $this->shipzone = remote_arrayload('SHCART','shipzone',$this->path);	   	  
	   $this->shipmethods = remote_arrayload('SHCART','shipmethods',$this->path);

	   $this->parcelunit = remote_arrayload('SHCART','parcelunit',$this->path);	   	  
	   $this->parcelweight = remote_arrayload('SHCART','parcelweight',$this->path);	   
	   
	   $this->navon = paramload('SHELL','navigator');
	   //2nd submit title
	   $this->submit2 = trim(localize('_SUBMITORDER2',getlocal()));
	   
	   $murl = arrayload('SHELL','ip');
       $this->url = $this->murl[0];	 

       $this->print_title = remote_paramload('SHCART','printtitle',$this->path); 	   
	   $this->printout = GetSessionParam('printout') ? GetSessionParam('printout') : null;
	   
	   $this->reservations = null;//acal reservations array check init
	   $this->exchange = true;//false;
    }

    //override
    function event($event) {

	  switch ($event) {
	  
	      case 'exchcart'      : $this->exchangetocart();
								 break;	 
	  
		  case 'calc'          : //for auto select and calc reason
		                         SetSessionParam('cartstatus',0); 
		                         $this->recalculate(); 
								 break;	  
	  
	      case "sship"         : //echo GetReq('czone'),'>'; 
		                         break;
	   
		  case "printcart"     : $prn = $this->printorder();//null,'invoice.htm'); 
                                 //SetSessionParam('orderdataprint',null); //???? re-print 
								 SetSessionParam('ordercart',null);//COMMENT IT, NOT RE-RENDER
								 SetSessionParam('orderdetails',null);//COMMENT IT, NOT RE-RENDER
							  	 echo $prn; 
							     exit;
								 
		  case $this->cancel   : SetSessionParam('cartstatus',0); 
		                         $this->status = 0; 
								 $this->cancel_order(); 
								 $this->recalculate();
								 
								 if ($oncancel = remote_paramload('SHCART','cancelgoto',$this->path)) {
								   $goto = $oncancel;//seturl('t='.$oncancel);//no at header
								   header("Location: http://".$goto); 
                                   exit;
								 }  
								 break;								 
								 
          case $this->checkout : if (!GetGlobal('UserID')) {
		                           //echo 'must login or register!<br>';
								   $this->todo = 'loginorregister';
                                   //recalc
		                           $this->recalculate(1);
								 }
								 else {
								   //CHECK RESERVATION DATA
								   if ($this->recalculate_advance(1)) {
									  SetSessionParam('cartstatus',1); 
									  $this->status = 1; 
									  //cart::event($event);
								   }
                                   //recalc
		                           //$this->recalculate(1);//..advance recalc here								   
								   $this->loopcartdata = $this->loopcart();
								   $this->looptotals = $this->foot();
								 }  
								 break;

          case $this->order    : SetSessionParam('cartstatus',2); 
		                         $this->status = 2; 
								 //$this->calculate_shipping();
								 $this->recalculate(1);
								 $this->loopcartdata = $this->loopcart();
								 $this->looptotals = $this->foot();
								 break;
								 
          case $this->submit2  : //die('aaaaaaa');
		  case $this->submit   : SetSessionParam('cartstatus',3);
		                         $this->status = 3; 		  
								 //$this->calculate_shipping();	
                                 $this->recalculate(1);								 
		                         $this->loopcartdata = $this->loopcart();
								 $this->looptotals = $this->foot();

								 
								 //$this->submit_order(1, true); 
								 
								 //dispatxh paypal etc... and exit..goto payment page
								 //echo '>',$pw;
								 $this->dispatch_pay_engines();
								 
								 //never goe here in case payengines (redirection)
		                         /*SetSessionParam('amount',null);
								 
		                         SetSessionParam('paypalID',null);		   
		                         SetSessionParam('piraeusID',null);
								 								 
	                             SetSessionParam('subtotal',0);
	                             SetSessionParam('total',0);
 	                             SetSessionParam('roadway',null);
	                             SetSessionParam('payway',null);	
 	                             SetSessionParam('addressway',null);
	                             SetSessionParam('customerway',null);								 	   		   
								 SetSessionParam('invway',null);	
								 SetSessionParam('sxolia',null);								 
	                             SetSessionParam('qty_total',null);*/									 
								 break;
						 
         case "fastpick"      : if (!GetSessionParam('fastpick'))
		                          SetSessionParam('fastpick','on');
								else  
								  SetSessionParam('fastpick',null);
								  
         default              : cart::event($event);
		 		                $this->loopcartdata = $this->loopcart();
				                $this->looptotals = $this->foot();

	  }
	  
	  //override theme title
	  //IE8
	  /*if ($stepname = loadTheme('submit_b'.$this->status,"",1)) {//has titles per step
	     //echo $stepname;
	     //echo '>',$this->status;
		 //$z = loadTheme('submit_b'.$this->status,"",1);
		 //echo '>',$z;
         $this->submit_button = $stepname;	    	   	   
	  }	*/	  
	    
    }

	//override
    function action($act=null) {	

	   switch ($act) {
	     case "sship"     : $out = $this->setNavigator(localize('_SHIPCOST',getlocal()));
		                    $out .= $this->show_supershipping();
		                    break;
	   
		 case "transcart" : $out = $this->setNavigator(localize('_CART',getlocal()));
		                    if (is_object($this->transformer))
		                        $out .= $this->transformer->transform();
		                    break;
							
	     case 'searchtopic'   :	//handler from shkatalog
	     case 'addtocart'     :
		 case 'exchcart'      :
		 case 'removefromcart': break;							
		 
         case "fastpick"  :	if (GetSessionParam('fastpick'))
		                      $out = localize('_FASTPICKON',getlocal());
							else  
							  $out = localize('_FASTPICKOFF',getlocal());
							  
		                    $out .= $this->cartview();
		                    break;
		          
	     default          :
		                    if ($this->todo) {
							  $out = $this->setNavigator(localize('_CART',getlocal()));
							  $out .= $this->todolist();
							}
							else
		                      $out .= $this->cartview();
       }


	   /*$cfp = new frontpage('cart',0);
	   $cpout = $cfp->render($out);
	   unset($cfp);

       return ($cpout);*/

	   return ($out);
    }
	
	function dispatch_pay_engines() {
	  $payway = strtoupper(trim(GetSessionParam('payway')));//override 	
	
      //print_r($_SESSION);
	  //echo 'z',GetSessionParam('payway');
	  //echo 'x',$payway;
	  
	  //if ((stristr(GetSessionParam('payway'),'paypal')) || 
	  //    (stristr($payway,'paypal'))) {//automated redirection
	  if (strcmp($payway,'PAYPAL')==0) {
	   //echo 'z',$this->autopay,'-',$this->status;
	   if (($this->status==3) && ($this->autopay>0) &&
	      ( (defined('SHPAYPAL_DPC')) && (seclevel('SHPAYPAL_DPC',decode(GetSessionParam('UserSecID')))) )) {
		  //file to procced payment
		  //echo '---paypal';
		  //before reset transaction 
 	      $this->submit_order(null, true, 'invoice.htm');		  		  

		  SetSessionParam('paypalID',$this->transaction_id);
		  
		  if ($test2pay=remote_paramload('SHCART','test2pay',$this->path))//!!!!!TEST PAY FOR PAYPAL ETC..
		    SetSessionParam('amount',$test2pay);
		  else
		    SetSessionParam('amount',$this->myfinalcost);

		  //reset global params
          SetSessionParam('TransactionID',0);
          SetSessionParam('cartstatus',0); 
	      $this->status = 0;		  

	      header("Location: ".strtolower(GetSessionParam('payway')).'.php');
          exit;
	   }
	  }
	  elseif (strcmp($payway,'PIRAEUS')==0) {	
	  //if ((stristr(GetSessionParam('payway'),'piraeus')) || 
	    //  (stristr($payway,'piraeus'))) {//automated redirection
	   //echo 'z',$this->autopay,'-',$this->status;
	   if (($this->status==3) && ($this->autopay>0) &&
	      ( (defined('SHPIRAEUS_DPC')) && (seclevel('SHPIRAEUS_DPC',decode(GetSessionParam('UserSecID')))) )) {
		  //file to procced payment
		  //echo '---piraeus';
		  //before reset transaction
 	      $this->submit_order(null, true, 'invoice.htm');		  

		  SetSessionParam('piraeusID',$this->transaction_id);
		  
		  if ($test2pay=remote_paramload('SHCART','test2pay',$this->path))//!!!!!TEST PAY FOR PAYPAL ETC..
		    SetSessionParam('amount',$test2pay);
		  else
		    SetSessionParam('amount',$this->myfinalcost);

		  //reset global params
          SetSessionParam('TransactionID',0);
          SetSessionParam('cartstatus',0); 
	      $this->status = 0;		  

	      header("Location: ".strtolower(GetSessionParam('payway')).'.php');
          exit;
	   }
	  }
	  else { //simple order
	  
 	    $this->submit_order(1, true, 'invoice.htm'); 
	  
		SetSessionParam('amount',null);
								 
		//SetSessionParam('paypalID',null);		   
		//SetSessionParam('piraeusID',null);
								 								 
	    SetSessionParam('subtotal',0);
	    SetSessionParam('total',0);
 	    SetSessionParam('roadway',null);
	    SetSessionParam('payway',null);	
 	    SetSessionParam('addressway',null);
	    SetSessionParam('customerway',null);								 	   		   
		SetSessionParam('invway',null);	
		SetSessionParam('sxolia',null);								 
	    SetSessionParam('qty_total',null);
	  } 
	}
	
	function exchangetocart($item=null,$qty=null) {
	   
	    //$this->addtocart();
	
	    $a = $item?$item:GetReq('a');
        $params = explode(";",$a);
		
        if ($a!='') {
		  if ($this->_count() < $this->maxcart) {
		  
		    $this->qty_total+=1;
			SetSessionParam('qty_total',$this->qty_total);
			//(-)
			$val = (floatval(str_replace(',','.',$params[8]))) *-1;
	        $this->total = $this->total + $val;
			//echo '>',strval($params[8]),'+',$this->total;//,'+';print_r($params);//[8];
			SetSessionParam('total',$this->total);

			//get selected quantity number
			$preqty = GetParam("PRESELQTY");
			$preuni = GetParam("PRESELUNI");
			//echo $bypass_qty,'>';
			if (!$this->bypass_qty) 
			  $preqty=$qty?$qty:(GetReq('qty')?GetReq('qty'):1);//1; //default qty when qty form not show

			if ((is_number($preqty)) && ($preqty>0)) {
				//if ($preqty) {
				  $params[9]= $preqty;
				  //$b = implode(";",$params);
				  $b = "{$params[0]};{$params[1]};{$params[2]};{$params[3]};{$params[4]};{$params[5]};{$params[6]};{$params[7]};{$val};{$preqty};";
				  //echo $b;
				  $this->addto($b);
				//}			
            }			
		  }
		  else
		    setInfo(localize('_MSG15',getlocal()));
        }

		$this->quick_recalculate();//re-update prices and totals		
	}   

	//overwrite
	function addtocart($item=null,$qty=null) {
	   $a = $item?$item:GetReq('a');
       $params = explode(";",$a);	
	    
	   
	   //in case of browsing pages after addtocart procedure
	   //url continues to execute addtocart (as friend cmd) without $a
	   //..poping allways javascript alert(stock_message)
	   //so check if param a exist to proceed.
	   if ($a!='') {//echo $a,'>';
       if ($this->_count() < $this->maxcart) { //check cart maximum items

	        $this->qty_total+=1;
			SetSessionParam('qty_total',$this->qty_total);
			
			$val = floatval(str_replace(',','.',$params[8]));
	        $this->total = $this->total + $val;
			//echo '>',strval($params[8]),'+',$this->total;//,'+';print_r($params);//[8];
			SetSessionParam('total',$this->total);			
	   
			//get selected quantity number
			$preqty = GetParam("PRESELQTY");
			$preuni = GetParam("PRESELUNI");
			//echo $bypass_qty,'>';
			if (!$this->bypass_qty) 
			  $preqty=$qty?$qty:(GetReq('qty')?GetReq('qty'):1);//1; //default qty when qty form not show

			if ((is_number($preqty)) && ($preqty>0)) {
			    //echo $a;
			    //$params = explode(";",$a); //moved up

				//if isset 2nd mm convert...
			    if (($this->uniname2) && ($preuni==$params[11])) {
				  if ($params[12])
				    $preqty = ($preqty * $params[12]); //2nd mm
				}

				//check storage
				if ((!$this->ignoreqtyzero) &&
				    ($preqty>$params[14]) &&
				    ($this->allowqtyover)) {

		            $stockout = ($params[14]-$preqty);
				    $stock_message = $params[0].",".$params[1].localize('_STOCKOUT',getlocal()) . "(" . $stockout . ")";

				    $preqty = $params[14];//set qty= max storage
				    //echo "DIATHESIOMo:",$params[14];

                    if (iniload('JAVASCRIPT')) {
	                   $code = "alert('$stock_message')";
		               $js = new jscript;
                       $js->load_js($code,"",1);
		               unset ($js);
	                }
				    else
				       setInfo($stock_message);
				}

				if ($preqty) {
				  $params[9]= $preqty;
				  $b = implode(";",$params);
				  //echo $b;
				  $this->addto($b);
				}
		    }
			else {
			    $input_message = localize('_INPUTERR',getlocal());
                if (iniload('JAVASCRIPT')) {
	               $code = "alert('$input_message')";
		           $js = new jscript;
                   $js->load_js($code,"",1);
		           unset ($js);
	            }
				else
				   setInfo($input_message);
			}

		    SetSessionParam('cartstatus',0);
			$this->status = 0;
		 }
		 else
		   setInfo(localize('_MSG15',getlocal()));
		 }//if $a
		 
		 $this->quick_recalculate();//re-update prices and totals
	}
	
	//override
	function remove($id) {
        $myid = explode(";",$id);

        reset ($this->buffer);
        //while (list ($buffer_num, $buffer_data) = each ($this->buffer)) {             
        foreach ($this->buffer as $buffer_num => $buffer_data) {		
			
		   $param = explode(";",$buffer_data);
		   
           if ($param[0] == $myid[0]) {
	             $this->qty_total-=$param[9];
			     SetSessionParam('qty_total',$this->qty_total);	
				 
	             $this->total-=($param[8]*$param[9]);//price * qty
			     SetSessionParam('total',$this->total);					 	   
		    
                 $this->buffer[$buffer_num] = "x";

				 //clear acal reservations to procced...
				 if (defined('ACAL_DPC')) {
					GetGlobal('controller')->calldpc_method('acal.remove_user_reservations use '.$param[0]);	
				 }
				 //clear cart reservations for exchange..
                 if (defined('MGANTTI_DPC')) { 	
                    //get project id from item descr as saved inline when fetching user reservations				 
				    $project_id = array_shift(explode('-',$param[1]));
					GetGlobal('controller')->calldpc_method('mgantti.remove use '.$project_id);	
				 }	
                 break;
           }                                   
        }                    
		$this->setStore();
		
 	    $this->quick_recalculate();	//re-update prices and totals	
	}
	
	//override for acal
    function clear($finalize=false, $trid=null) {
        //echo 'clear<br/>';
	
        reset ($this->buffer);
		
        while (list ($buffer_num, $buffer_data) = each ($this->buffer)) {             
		
		    $param = explode(";",$buffer_data);
			//if ($finalize)
				//print_r($param);  			

			if (defined('ACAL_DPC')) {
			    if ($finalize) {//save relations, mark res as invoiced (+)
				    //echo 'acal';
					GetGlobal('controller')->calldpc_method('acal.invoice_user_reservations use '.$param[0].'+'.$trid);
					GetGlobal('controller')->calldpc_method('acal.finalize use '.$param[0].'+'.$trid.'+'.$param[8].'+'.$param[9]);
				}	
				else //clear without mark res as invoiced
					GetGlobal('controller')->calldpc_method('acal.remove_user_reservations use '.$param[0]);	
			}
			if (($this->exchange) && (defined('MGANTTI_DPC'))) {
				if ($finalize) { //save relations, mark res as invoiced (-)
				    //echo 'gantti';
				    GetGlobal('controller')->calldpc_method('mgantti.invoice_user_reservations use '.$param[0].'+'.$trid);
					GetGlobal('controller')->calldpc_method('mgantti.finalize use '.$param[0].'+'.$trid.'+'.$param[8].'+'.$param[9]);	
				}	
				else
					GetGlobal('controller')->calldpc_method('mgantti.clear');	
			}
			if (($this->exchange) && ((defined('SHKATALOGMEDIA_DPC')))) {			
				//products with negative value is exchangable items
				//...saved as code value in cart
				if ($finalize) { //save relations...(-/+)
					//echo 'katalog';
					GetGlobal('controller')->calldpc_method('shkatalogmedia.finalize use '.$param[0].'+'.$trid.'+'.$param[8].'+'.$param[9]);
				}	
			}
			
			$this->buffer[$buffer_num] = "x";	
        } 
		$this->setStore();
		
		//transport save
		if (defined('TRANSPORT_DPC')) {
		    if ($finalize)
				GetGlobal('controller')->calldpc_method('transport.finalize use '.$trid.'+'.$this->shippingcost);			
		}		
    }	
	
	//override
	function cancel_order() {

	   //setInfo(localize('_ACCDENIED',getlocal()));
	}	

    //overwrite
	//dont sendmail
    function submit_order($sendordermail=null, $tokenout=false, $invoice_template=null) {
       //$orderdataprint = GetSessionParam('orderdataprint');
	   $myuser = GetGlobal('UserID');	
       $user = decode($myuser);
       $pways = remote_arrayload('SHCART','payways',remote_paramload('SHELL','prpath',$this->path));
       $rways = remote_arrayload('SHCART','roadways',remote_paramload('SHELL','prpath',$this->path));
       $payway = GetParam('payway')?GetParam('payway'):GetSessionParam('payway');
       $roadway = GetParam('roadway')?GetParam('roadway'):GetSessionParam('roadway');
       $invway = GetParam('invway')?GetParam('invway'):GetSessionParam('invway');	
	   $sxolia = GetParam('sxolia')?GetParam('sxolia'):GetSessionParam('sxolia');	
	   
	   if (!empty($pways))   
         $p = array_keys($pways,$payway);//print_r($p);
	   if (!empty($rways))   	 
         $r = array_keys($rways,$roadway);//print_r($r); echo ' >';
	   
	   $this->quick_recalculate();//re-update prices and totals
	   	   
	   $qty = $this->qty_total;//getcartItems();
	   $cost = str_replace(',','.',$this->total);//getcartTotal());
	   $costpt = str_replace(',','.',$this->myfinalcost);//getcartSubtotal());
       //echo $this->qtytotal,'-',$this->total;

       if (defined('SHTRANSACTIONS_DPC'))  {
	     $this->transaction_id = GetGlobal('controller')->calldpc_method('shtransactions.saveTransaction use '.serialize($this->buffer)."+$user+$payway+$roadway+$qty+$cost+$costpt");
         
		 if ($invoice_template) {
			
			$date = date('d.m.y');			
			//$invoice_tokens['invoice'] = $invway .' '.$this->transaction_id;
			$invoice_tokens['invoice'] = localize('_ORDERSUBJECT',getlocal()).' '.$this->transaction_id;
			$invoice_tokens['mynotes'] = $sxolia;
		    $invoice_tokens['mydate'] = $date;			
			  
			$tokens = serialize($invoice_tokens);
			//do it inside transaction func
			//$htmlout = GetGlobal('controller')->calldpc_method('twigengine.render use '.$invoice_template.'++'.$tokens);
			GetGlobal('controller')->calldpc_method('shtransactions.saveTransactionHtml use '.
		                               $this->transaction_id.'+'.$tokens.'+'.$invoice_template);			
			//save trid as printout var for print purposes
            $this->printout = $this->transaction_id;
            SetSessionParam('printout',$this->printout);			
		 }
		 else {
		 
		   if ($tokenout) {
		    $tokens[] = $this->transaction_id;
	     	$tokens[] = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use ++cusdetails.htm');
		    $tokens[] = GetSessionParam('orderdetails');
		    $tokens[] = GetSessionParam('ordercart');
			GetGlobal('controller')->calldpc_method('shtransactions.saveTransactionHtml use '.
		                               $this->transaction_id.'+'.serialize($tokens).'+shcartprint.htm');			
		   }
		   else {
			$_data = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use ++cusdetails.htm');
			$_data .= GetSessionParam('ordercart');
			$_data .= GetSessionParam('orderdetails');
			GetGlobal('controller')->calldpc_method('shtransactions.saveTransactionHtml use '.
		                               $this->transaction_id.'+'.serialize($_data));//$orderdataprint));
		   }							 							 
	     }		 
	   }
	   else
	     $this->transaction_id = '1111';//dummy

	   SetSessionParam('TransactionID',$this->transaction_id);

   	   if (($sendordermail) && ($this->transaction_id)) {

             //$this->goto_mailer_4print();//a printer friendly version
             $error = $this->goto_mailer($this->transaction_id, false,'invoice.htm');//true);

             if (!$this->mailerror) {
			   //print action]
			   $this->goto_printer();
               //finaly clear cart
               $this->clear(true,$this->transaction_id);
			 }
	   }
    }


    function setuniname($id,$uni,$uA=null,$uB=null) {

  	  $uniname = $id ;
      $selecteduni = GetParam($uniname);
	  if (!$selecteduni) $selecteduni = $uni;
      //print $id.">".$selectedqty."()";

	  if (!$this->status) {	//only if status=0 else when cart status > 0 uniname change
		  $out = "<SELECT class=\"myf_select_small\" name=\"$uniname\">";

		  if ($selecteduni==$uA)
		    $out .= "<OPTION selected>$uA";
	      else
		    $out .= "<OPTION>$uA";

		  if ($selecteduni==$uB)
		    $out .= "<OPTION selected>$uB";
	      else
		    $out .= "<OPTION>$uB";

		  $out .= "</OPTION></SELECT>";
	  }
	  //else
	    //$out = $uni; no need to view 2nd(current) mm at status>0 becouse all converted to 1st mm

       return ($out);
	}
	
	//override to add css and save html
    function printorder($data=null,$invoice_template=null) {

	    //DO NOT RE-RENDER PRINT OUT..
	    if ($trid = $this->printout) {
			//GET IT FROM SAVED HTML TRANSACTION
			//DONT USE trid for security reasons..
			//GetSessionParam('TransactionID');
			$out = GetGlobal('controller')->calldpc_method('shtransactions.getTransactionHtml use '.$trid);
			SetSessionParam('printout',null); //reset
			
			return ($out);
		}
		
		//..............................................
	    $headtitle = paramload('SHELL','urltitle');	
		$this->transaction_id = $this->transaction_id?$this->transaction_id:GetReq('trid');
				
	    //printout template
	    $printcart_template = $invoice_template ? $invoice_template : "shcartprint.htm";
	    $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$printcart_template) ;
				
	
		if (!$mystyle = remote_paramload('SHCART','printstyle',$this->path))
		  $mystyle = 'themes/style.css';
		  
		if (!$mytitle = remote_paramload('SHCART','printtitle',$this->path)) {		
		  $mytitle = "<h1>$headtitle | Order No:".$this->transaction_id."</h1>";
		  $tokens[] = $this->transaction_id;
		}  
		else {
		  $mytitle = "<h1>$mytitle | Order No:".$this->transaction_id."</h1>";
		  $tokens[] = $this->transaction_id;
		}  
		
		/*if (!$data) { //load from html ??????
		  if (defined('SHTRANSACTIONS_DPC'))
		    $data = GetGlobal('controller')->calldpc_method('shtransactions.getTransactionHtml use '.$this->transaction_id);
		}*/
		
        if (iniload('JAVASCRIPT')) {		
		    //$js = new jscript;
	        $bclose = GetGlobal('controller')->calldpc_method('javascript.JS_function use js_closewin+'.localize('_CLOSE',getlocal()));
		              //$js->JS_function("js_closewin",localize('_CLOSE',getlocal())); 
	        $bprint = GetGlobal('controller')->calldpc_method('javascript.JS_function use js_printwin+'.localize('_PRINT',getlocal()));
		              //$js->JS_function("js_printwin",localize('_PRINT',getlocal()));									 
            //unset ($js);		
			
	  	    //$htmldata .= '<br>' . $bclose . '&nbsp;' . $bprint;			
			$htmldata = '<p>' . $bprint . '</p>';	
            $tokens[] =  $bprint;			
		} 
		else
		    $tokens[] = '&nbsp;';
		

        if (($invoice_template) && (is_readable($t))) {
		
			//init-reset tokens
			$invoice_tokens = array();
			$invoice_tokens['trid'] = $this->transaction_id;
			$invoice_tokens['sxolia'] = GetSessionParam('orderdetails');	   
			$invoice_tokens['cusdata'] = (array) GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use +++1');	  
			$invoice_tokens['cartdata'] = GetSessionParam('ordercart');		   
		    
			$x = 'notes123';//.var_export($invoice_tokens, true);
			$date = date('d.m.y');			
			//$invoice_tokens['invoice'] = GetSessionParam('invway') .' '.$this->transaction_id;
			$invoice_tokens['invoice'] = localize('_ORDERSUBJECT',getlocal()).' '.$this->transaction_id;
			$invoice_tokens['mynotes'] = GetSessionParam('sxolia');//$x;
		    $invoice_tokens['mydate'] = $date;				
				
		    if (defined('TWIGENGINE_DPC')) {
			    $date = date('m.d.y');
				$x = 'notes123';//.var_export($invoice_tokens, true);
			    $t = array('invoice'=>GetSessionParam('invway') .' '.$this->transaction_id,
				           'mynotes'=>$x,
						   'mydate'=>$date);
			    $tokens = serialize($t);
			    echo GetGlobal('controller')->calldpc_method('twigengine.render use '.$invoice_template.'++'.$tokens);
				//echo 'z';
				die();
		    }
			else {
				$myprintcarttemplate = file_get_contents($t);	
			
				$out = $this->combine_tokens($myprintcarttemplate,$tokens,true);		
				$out .= '<!--end of document-->';		
			}
        }  		
	    elseif (is_readable($t)) {

		  //$out = $this->send_template_message("shprintcart.tpl",$data);//tpl method
		  $myprintcarttemplate = file_get_contents($t);
		  //$mydata = $mytitle;
		  
		  $tokens[] = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use ++cusdetails.htm');
		  
		  //already reset
          /*$details  = '<br/>'.localize('_PWAY',getlocal()) .':'. GetSessionParam('payway');
          $details .= '<br/>'.localize('_RWAY',getlocal()) .':'. GetSessionParam('roadway');
          $details .= '<br/>'.localize('_IWAY',getlocal()) .':'. GetSessionParam('invway');	   
          $details .= '<br/>'.localize('_DELIVADDRESS',getlocal()) .':'. GetSessionParam('addressway');	   
          $details .= '<br/>'.localize('_SXOLIA',getlocal()) .':'. GetSessionParam('sxolia');		   
		  */
		  $tokens[] = GetSessionParam('orderdetails');//$details;//'&nbsp;AAA';//details
		  
		  $tokens[] = GetSessionParam('ordercart');//$this->quickview();					  
		  
		  //$mydata = $this->combine_template($myprintcarttemplate,$htmldata,$mytitle);//,$bclose,$bprint);
		  $out = $this->combine_tokens($myprintcarttemplate,$tokens,true);
		  
	    }
		else {
          //$htmldata .= $data ? $data : GetSessionParam('orderdataprint');	
		  $htmldata = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata');
		  $htmldata .= GetSessionParam('ordercart');
		  $htmldata .= GetSessionParam('orderdetails');
		  
		  $mydata = $mytitle;		
		  $mydata .= $htmldata;			  			  
					
		  $printpage = new phtml($mystyle,$mydata);//,$mytitle);
		  $out = $printpage->render();
		  unset($printpage);
		}

		return ($out);
	}	

	//overwriten
    function recalculate($update_from_db=null) {
	   $this->stock_msg = null;
	   $this->overitem = null;
	   $jcode = null;
	   $p_returned = null; 		   
	   
	   //always due to price is get cmd and can change by hand
	   //if (($this->liveupdate) || ($update_from_db)) {
	     if ((defined('SHKATALOGMEDIA_DPC')))
	       $p_returned = GetGlobal('controller')->calldpc_method('shkatalogmedia.update_prices use '.serialize($this->buffer));
		 elseif ((defined('SHKATALOG_DPC'))) 
		   $p_returned = GetGlobal('controller')->calldpc_method('shkatalog.update_prices use '.serialize($this->buffer));
		 else  
		   $p_returned = null;
		 //echo 'update from db';  
		 //print_r($p_returned);
	   //}	
	   
	   $this->read_policy();	   
	   
	   $this->qty_total = 0;
   	   SetSessionParam('qty_total',0);
	   $this->total = 0;     
	   
       $this->reservations = array(); //acal reservations checker init	   

	   $counter = 0; 
       foreach ($this->buffer as $prod_id => $product) {

		 if (($product) && ($product!='x')) {
           
		   $counter+=1;
           $param = explode(";",$product);
		   $aa = $prod_id+1;// ???? echo $aa,"+++";
		   
		   //selected quantity  ..get ? get : post when select is onChange
           $selectedqty = GetReq("Product$aa") ? GetReq("Product$aa") : GetParam("Product$aa"); //echo $selectedqty,">>";
		   $this->qty_total += $selectedqty;
		   $qty = $selectedqty;	
           $details = $param[6]?$param[6]:null; //re-init		   
		   //selected uniname
           $selecteduni = GetParam("Uniname$aa");		   
		   
		   //new prices when updated from db (live)
		   if (is_array($p_returned) && isset($p_returned[$param[0]])) {
		     //$param[8] = $p_returned[$param[0]];
			 //echo $param[8],'<br>';
			 
			 if ((defined('SHKATALOGMEDIA_DPC')))
               $ap_price = GetGlobal('controller')->calldpc_method("shkatalogmedia.read_array_policy use ". $param[0].'+'.$p_returned[$param[0]]."++".$selectedqty);			 		   			 
			 elseif ((defined('SHKATALOG_DPC'))) 
			   $ap_price = GetGlobal('controller')->calldpc_method("shkatalog.read_array_policy use ". $param[0].'+'.$p_returned[$param[0]]."++".$selectedqty);			 		   
			   
			 //echo $param[9],'>',$ap_price;
			 if ($param[8]<0) //keep -negative when exchange
			    $param[8] = $ap_price ? ($ap_price*-1) : ($p_returned[$param[0]]*-1);
			 else
				$param[8] = $ap_price ? $ap_price : $p_returned[$param[0]];
		   }
		   $p = floatval(str_replace(',','.',$param[8]));
           $this->total = $this->total+($qty*$p);

		   if ($p>0) { //only for items to sell not to exhange
			//convert from 2nd mm
			if ($selecteduni) {
				if (($selecteduni==$param[11]) && ($param[12]))  //if selected = 2nd mm
					$selectedqty = ($selectedqty*$param[12]); //multiply by sxesh mm2
			}
		   
			//check storage
			if ((!$this->ignoreqtyzero) &&
		       ($selectedqty>$param[14]) &&
			   ($this->allowqtyover)) { //enable - disable check over qty selection

				$stockout = ($param[14]-$selectedqty);
				$stock_message = $param[0].",".$param[1].localize('_STOCKOUT',getlocal()) . "(" . $stockout . ")";
				$this->stock_msg .= $stock_message . "<br>";
				$jcode .= "alert('$stock_message');";

				//remark item
				$this->overitem[$prod_id] = 1;
				//pass cart messages to sxolia
				if ($this->detailqty)
					$this->sxolia .= $stock_message;

				$selectedqty = $param[14];//set qty= max store
				//echo "DIATHESIOMo:",$selectedqty,">>>";
			}
		   
			//check reservations..not for exchange items (-)
			if (defined('ACAL_DPC')) {
			   $res_no = GetGlobal('controller')->calldpc_method('acal.get_user_reservations use '.$param[0].'+'.$qty);
			   //echo $qty,'>',$param[0],'>',$res_no,'<br/>';
			   $this->reservations[$param[0]] = $res_no;
			   //change qty when res <> selected qty  
			   $selectedqty = $res_no;// ? $res_no : $qty;
			}	

			//when status = 3 update line details of product to save...
			//before this status the product line is invalid for get url to remove...
			$details = $this->add_line_details($param[0]);		   
			  
			if (($selectedqty) || isset($p_returned[$param[0]]) || ($details)) {//change qty or price from db
				//in case of no selectedqty
				if (!$selectedqty) $selectedqty = $param[9];//default as is
			  	 
				$this->buffer[$prod_id] = "$param[0];$param[1];$param[2];$param[3];$param[4];$param[5];$details;$param[7];$param[8];$selectedqty;$param[10];$param[11];$param[12];$param[13];$param[14];$param[15];";
			}
			else {
				if ($this->rejectqty)
					$this->buffer[$prod_id] = 'x';//=0 so delete it from list
			}
		   }	
		 }
	   }
	   $this->setStore();
	   

       if ((iniload('JAVASCRIPT')) && ($jcode)) {
		      $js = new jscript;
              $js->load_js($jcode,"",1);
		      unset ($js);
	   }
       //calldpc_method('javascript.load_js use alert(\'cccc\')+null+1');
	   //echo '>',$this->qty_total;
	   
	   if ($this->itemscount)
	     SetSessionParam('qty_total',$counter);//items count
	   else
	     SetSessionParam('qty_total',$this->qty_total);//qty count
		 
	   //if ($this->status > 0)
	     //$this->colideCart();	  
		 
	   $this->calculate_shipping();	

	   return (array) ($this->reservations);	
	}
	
	//check recalculate results...
	protected function recalculate_advance($update_from_db=null) {
	
	    $map = $this->recalculate($update_from_db);
		if (!defined('ACAL_DPC')) return true;
		
		if (!empty($map)) {
			foreach ($map as $code=>$res) {
				if (!$res) return false;
			}
		}
		return true;
	}
	
	//add cart product line details to cart buffer at the last step
	protected function add_line_details($code=null) {
	    if (!$code) return false;
	    $details = null;
		
	    if ($this->status > 1) {
            //echo $this->status,'>';		
			//echo '<pre>'; print_r($_POST); echo '</pre>';
		    //get post from prev status loopcart details
	        foreach ($_POST as $p=>$v) {
			    if (strstr($p,'reservation_details_'.$code)) 
					$details .= $v;		   
			    if (strstr($p,'exchange_details_'.$code)) 
					$details .= localize('_exchangewith', getlocal()) . $v;
		    }
        }			 
        //else //test 			 
		    //$details = 'xxxx test';
			
		//echo $details;					
        return ($details);		
	}

	//overwrite
    function showsymbol($id,$group,$page,$allowremove=null,$qty=null, $nodetails=false) {
      $myqty = $qty?$qty:1; //echo $myqty,'>';
	  $param = explode(";",$id);
	  
	  $ismine = false;
	  if (defined('SHKATALOGMEDIA_DPC')) {
		$ismine = GetGlobal('controller')->calldpc_method('shkatalogmedia.is_owned_item use '.$param[0]);		  
		//if ($ismine) echo $param[0],'-',$param[1],'<br/>';
      }
	  
	  $gr = $group;//urlencode($group);
	  $ar = $id;//urlencode($id); //<<<<
      // print_r($id);
	  //echo $id;
	  $price = $param[8]; //echo $price,'<br/>';
	  $ypoA = $param[14];
	  
	  $itemprice = floatval(str_replace(",",".",$price));
	  
      if ($itemprice>0.001) {//check price
	   //if ((!$this->ignoreqtyzero) && ($ypoA>0)) {//check availability..NOT WORK

	     if (!($this->isin($param[0]))) {

	       if ($this->bypass_qty) {
             //$myaction = seturl("t=addtocart&a=$ar&cat=$gr&page=$page");
			 $myaction = "addcart/$ar/$gr/$page/";

	         $out = "<FORM method=\"POST\" action=\"";
             $out .= "$myaction";
             $out .= "\" name=\"PreSelectQty\">";
		     $out .= $this->setquantity('PRESELQTY',1);

			 if (($this->uniname2) && ($param[11]))
			   $out .= "<br>" . $this->setuniname('PRESELUNI',$param[10],$param[10],$param[11]);

             $out .= $this->submit_qty_button;//"<input type=\"submit\" name=\"Ok\" value=\"Ok\">";
		     $out .= "</FORM>";
		   }
		   else {
		     if ($ismine) {
			    $ml = "execart/$ar/$gr/$page/$myqty/";
				$out = $this->myf_button(localize('_EXECARTITEM',getlocal()),$ml,'_EXECARTITEM');
			 }
			 else {
				//$out .= seturl("t=addtocart&a=$ar&cat=$gr&page=$page&qty=$myqty",$this->addcart_button);
				//$ml = seturl("t=addtocart&a=$ar&cat=$gr&page=$page&qty=$myqty");
				$ml = "addcart/$ar/$gr/$page/$myqty/";
				//$out = "<a href=\"$ml\"><input type=\"button\" class=\"myf_button\" value=\"".localize('_ADDCARTITEM',getlocal())."\" /></a>";
				$out = $this->myf_button(localize('_ADDCARTITEM',getlocal()),$ml,'_ADDCARTITEM');
			 }	
	       }		 
	     }
	     else {
		   
		   if (($this->notallowremove)&&(!$allowremove)) {//add again 		   	 		   
		     if ($ismine) {
			    $ml = "execart/$ar/$gr/$page/$myqty/";
				$out = $this->myf_button(localize('_EXECARTITEM',getlocal()),$ml,'_EXECARTITEM');
			 }
			 else {
				//$out .= seturl("t=addtocart&a=$ar&cat=$gr&page=$page&qty=$myqty",$this->addcart_button);	
				//$ml = seturl("t=addtocart&a=$ar&cat=$gr&page=$page&qty=$myqty");
				$ml = "addcart/$ar/$gr/$page/$myqty/";
				//$out = "<a href=\"$ml\"><input type=\"button\" class=\"myf_button\" value=\"".localize('_ADDCARTITEM',getlocal())."\" /></a>";			 
				$out = $this->myf_button(localize('_ADDCARTITEM',getlocal()),$ml,'_ADDCARTITEM');
			 }	
		   }	 
           else {//remove 	

		     if (!$nodetails) {
			    //check user items to exchange
			    if (($this->exchange) && ((defined('SHKATALOGMEDIA_DPC')))) {
					//$ccode = 'exchange_' . $param[0];//str_replace(array('@',':'),array('_','|'),$param[0]);			 
					$out .= GetGlobal('controller')->calldpc_method("shkatalogmedia.get_user_items_button use ".$param[0].'+1');//+'.$ccode);
		        }
				//if gantti reservations..exchange time
			    if (($this->exchange) && (defined('MGANTTI_DPC'))) {
					$out .= GetGlobal('controller')->calldpc_method("mgantti.user_in_projects_button use ".$param[0]);
				}
			    //if acal reservations...select timetable before procced
			    if (defined('ACAL_DPC')) {
					$abutton = GetGlobal('controller')->calldpc_method('acal.calendar_item_button use '.$param[0]);			 
					$out .= $abutton;  
					if (($abutton) && (!empty($this->reservations))) //icon set					
						$out .= $this->reservations[$param[0]] ? "<i class='icon-check'></i>" : "<i class='icon-refresh'></i>";	
		        }
			 }
			 //remove button
			 $mr = "remcart/$ar/$gr/$page/";
			 $out .= $this->myf_button(localize('_REMCARTITEM',getlocal()),$mr,'_REMCARTITEM');
			 			 
		   }	 
	     }
		 
	   //}
	   //else $out = $this->notavail;
	  }
	  elseif ($itemprice<0) { //<0..exchange remove button
	  
		//remove button
		$mr = "remcart/$ar/$gr/$page/";
		$out .= $this->myf_button(localize('_REMCARTITEM',getlocal()),$mr,'_REMCARTITEM');	 		  
	  }
	  else { //=0
	    //echo '<br>|',$price;
		//print_r($param);
	    //$out = $this->notavail;
		//$out = "<a href=\"#\"><input type=\"button\" class=\"myf_button\" value=\"".localize('_NOTAVAL',getlocal())."\" /></a>";
		$mr = "remcart/$ar/$gr/$page/";
		$out = $this->myf_button(localize('_NOTAVAL',getlocal()),$mr,'_NOTAVAL');
	  }	

      return ($out);
	}
	
	//override from system.lib	
	function setNavigator($navtitle,$navtitle2='') {
		$GRX = GetGlobal('GRX'); 
		$__USERAGENT = GetGlobal('__USERAGENT');

	    $template='fpkatnav.htm';
	    $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ;
	    //echo $t,'>';
	    if (is_readable($t)) 
			$mytemplate = @file_get_contents($t);		
  
		//if locale file is allready in utf-8 the the conversion is utf8 to utf8 else auto
		//$home = localize(paramload('SHELL','rootalias'),getlocal(),'UTF-8','UTF-8');
		$home = localize(paramload('SHELL','rootalias'),getlocal());
		//echo $home;
  
		if ($this->navon) {
  
			//if in cp and nitobi ON...no navigation
			if ((stristr($_SERVER['PHP_SELF'],'/cp/')) && (paramload('RCCONTROLPANEL','nav')=='disable'))
				return; //if cp .. no navigation.. 
  
			//if defined redirection of Home and is not remote app...
			if (($myurl = paramload('SHELL','rootredir')) && (!GetSessionParam('REMOTEAPPSITE')))
				$gotohome =  url($myurl,$home);
			else
				$gotohome =  seturl("t=" ,$home);//default 
	

			if ($GRX) 
				$rightarrow = "&nbsp;" . loadTheme('rarrow') . "&nbsp;";			 
            else 
				$rightarrow = " > "; 
		 
            if (!$navtitle2) { 
                //$data0[] = $gotohome . $rightarrow . $navtitle; 
                //$attr0[] = "left";
                //$out = _PRAGMA(0,0,"center","100%",0,"group_dir_headtitle",$data0,$attr0); 
				
                if ($mytemplate) {
				   $tokens[] = $gotohome;
				   $tokens[] = $rightarrow;
				   $tokens[] = $navtitle;
                }
                else  				
				  $out = $gotohome . $rightarrow . $navtitle; 
            }
	        else {
                //$data0[] = $gotohome . $rightarrow . $navtitle . $rightarrow . $navtitle2; 
                //$attr0[] = "left";	
                //$out = _PRAGMA(0,0,"center","100%",0,"group_dir_headtitle",$data0,$attr0); 
                if ($mytemplate) {
				   $tokens[] = $gotohome;
				   $tokens[] = $rightarrow;
				   $tokens[] = $navtitle;				
				   $tokens[] = $rightarrow;
				   $tokens[] = $navtitle2;				   
                }
                else				
                  $out = $gotohome . $rightarrow . $navtitle . $rightarrow . $navtitle2;				
	        }	

		}

	    if ($mytemplate) {
	       $out = $this->combine_tokens2($mytemplate, $tokens, true);
		   return ($out);
	    }		
		return ('<h2>'.$out.'</h2>');
	}	


	//overwrite
	function cartview($trid=null,$status=null) {
	   if ($trid) //view case
	     $this->transaction_id = $trid;
	   $cat = GetReq('cat');
       $UserName = GetGlobal('UserName');
	   $continue_shopping_goto_cmd = remote_paramload('SHCART','continuegoto',$this->path);
	   
	   $tmz_today = $this->make_gmt_date();  	   
	   
       //$orderdataprint = GetSessionParam('orderdataprint');
       $payway = GetParam('payway')?GetParam('payway'):GetSessionParam('payway');
       $roadway = GetParam('roadway')?GetParam('roadway'):GetSessionParam('roadway');
       $invway = GetParam('invway')?GetParam('invway'):GetSessionParam('invway');	    
	   
	   $status = $status?$status:GetReq('status');
		 //echo '1',$this->total,'<br>';	   
	   if ($status) {
	     $this->status = $status;
		 $this->recalculate(1); 
		 //echo '>',$status;
	   }	
	    
		 //echo '2',$this->total,'<br>';
		//get current product view
	   //$pview = 'senvp';//$this->view;//GetSessionParam("PViewStyle");
	   $pview=$cmd?$cmd:'klist';

       if (defined(_CURRENCYF_)) $cf = new CurrencyFormatter();

       $out=''; $printout='';
       $aa = 0;
       $myaction = seturl("t=viewcart",null,1,null,null,true);
	   
	   //template
	   $cart_template= "shcart.htm";
	   $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
	   if (($cart_template) && is_readable($t)) {
	     $tmpl=1;
		 $this->mycarttemplate = file_get_contents($t);
	   }		 
	
	   //in case of no event fist..calldpc view...   
	   if (empty($this->loopcartdata)) 
	     $this->loopcartdata = $this->loopcart();
	   if (empty($this->looptotals)) 
	     $this->looptotals = $this->foot();	     	   
	   

       switch ($this->status) {
		   case 1 : /*if ($this->mycarttemplate) 
	                   $tokens[] = $this->setNavigator(localize('_CART',getlocal()) . $this->rightarrow . "&nbsp;" .
   		                                        localize('_CHKOUT',getlocal()));		   
		            else*/
	                   $out = $this->setNavigator(localize('_CART',getlocal()) . $this->rightarrow . "&nbsp;" .
   		                                   localize('_CHKOUT',getlocal()));

				    $myaction = seturl("t=viewcart",null,1,null,null,true);	//use SSL
				    break;
		   case 2 : /*if ($this->mycarttemplate) 
		               $tokens[] = $this->setNavigator(localize('_CART',getlocal())  . $this->rightarrow . "&nbsp;" .
			                               localize('_CHKOUT',getlocal())  . $this->rightarrow . "&nbsp;" .
			                               localize('_ORDER',getlocal()));
                    else*/
		               $out = $this->setNavigator(localize('_CART',getlocal())  . $this->rightarrow . "&nbsp;" .
			                               localize('_CHKOUT',getlocal())  . $this->rightarrow . "&nbsp;" .
			                               localize('_ORDER',getlocal()));					
				    $myaction = seturl("t=viewcart",null,1,null,null,true);	//use SSL
					break;
		  default : /*if ($this->mycarttemplate) 
		              $tokens[] = $this->setNavigator(localize('_CART',getlocal()));
					else*/
					
					  $out = $this->setNavigator(localize('_CART',getlocal()));
	   }

	   if ($this->status<3) {

   	     if ($this->notempty()) {
           
		   if ($this->mycarttemplate) {
		     $t = $this->stock_msg;

             $t .= "<form method=\"POST\" action=\"";
             $t .= "$myaction";
             $t .= "\" name=\"Cartview\">";		   
			 $tokens[] = $t;
		   }
		   else {
		     $out .= $this->stock_msg;

             $out .= "<form method=\"POST\" action=\"";
             $out .= "$myaction";
             $out .= "\" name=\"Cartview\">";
		   }	 

		   if ($this->status==2) {

               //CUSTOMER SUPPORT : get customer data or register new customer
               if (defined('SHCUSTOMERS_DPC')) {
			   

		         $ret = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use ++cusdetails.htm');

		         if ($ret) {
		                 if ($this->mycarttemplate) {
						   $mydate = $tmz_today;//date('d/m/Y h:i:s A');				 
						   $tokens[] = $mydate;
						   $tokens[] = $ret;
						 }
						 else {
	                       $mydate = setTitle(/*date('d/m/Y h:i:s A')*/$tmz_today,'right');						 
						   $winout .= $mydate;
					       $winout .= $ret;
						 } 	 
						 
					     $printout .= $mydate . $ret;
						 $printout2 .= $mydate . $ret;
						  
				 }
		         else {
					         //in case of no customer data register now
						     $out = GetGlobal('controller')->calldpc_method('shcustomers.register');
							 //$mycustomer->register();

                             SetSessionParam('cartstatus',0);
	                         $this->status = 0;
 			                 return ($out); //exit now
				 }
		       }
		   }
		   else {
		     if ($this->mycarttemplate) { //dummy tokens
		       $tokens[] = null;
			   $tokens[] = null;
			 }
		   }
		   
		   //loop cart
		   if ($this->mycarttemplate) {
		     $tokens[] = $this->loopcartdata;//$loopout;
             $printout .= $this->loopcartdata; //custom print
             $printout2 .= $this->loopcartdata; //custom print			 
		   }	 
		   else {
		     $winout.= $this->head();		   
		     $winout.= $this->loopcartdata;
             $printout .= $this->head() . $this->loopcartdata;
             $printout2 .= $this->head() . $this->loopcartdata;			 
		   }	   

           //footer
		   if ($this->mycarttemplate) 
		     $tokens[] = $this->looptotals;
		   else 	 		   
	         $winout .= $this->looptotals;
			 
		   $printout .= $this->looptotals;
	       $printout2 .= $this->looptotals;		   
		   
		   //echo '3',$this->total,'<br>';		   

		   //save totals in session....................................
		   $this->calculate_totals();

		   //print_r($_POST);//['FormAction'],'>>>';   
		   if ($this->mycarttemplate) {
             switch ($this->status) {
			 
			    case 1 : /*if ($this->cancel_button)
						   $ta .= "<input type=\"image\" src=\"".$this->cancel_button."\" name=\"FormAction\" value=\"$this->cancel\">&nbsp;";
						 else*/  
				           $ta .= "<input type=\"submit\" name=\"FormAction\" class=\"myf_button\" value=\"$this->cancel\">&nbsp;";
				         /*if ($this->submit_button)//order became submit ...change in event
				           $ta .= "<input type=\"image\" src=\"".$this->submit_button."\" name=\"FormAction\" value=\"$this->order\">&nbsp;";
						 else */ 
						   $ta .= "<input type=\"submit\" name=\"FormAction\" class=\"myf_button\" value=\"$this->order\">&nbsp;";
						 break;
						 
                case 2 :
				         //SetSessionParam('orderdataprint',$printout);
						 //SetSessionParam('orderdataprint2',$printout2);
						 SetSessionParam('ordercart',$this->quickview());
						 $details  = '<br/>'.localize('_PWAY',getlocal()) .':'. GetParam('payway');
                         $details .= '<br/>'.localize('_RWAY',getlocal()) .':'. GetParam('roadway');
                         $details .= '<br/>'.localize('_IWAY',getlocal()) .':'. GetParam('invway');	   
                         $details .= '<br/>'.localize('_DELIVADDRESS',getlocal()) .':'. GetParam('addressway');	   
                         $details .= '<br/>'.localize('_SXOLIA',getlocal()) .':'. GetParam('sxolia');		   
                         SetSessionParam('orderdetails',$details);
				
				         if (((GetSessionParam('payway')=='PAYPAL') || (GetParam('payway')=='PAYPAL')) ||
				             ((GetSessionParam('payway')=='PIRAEUS') || (GetParam('payway')=='PIRAEUS')))  {
				             $ta .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->cancel\">&nbsp;"/*. $this->print_button()*/;
   				             $ta .= "<input type=\"submit\" class=\"myf_button_big\" name=\"FormAction\" value=\"$this->submit\">&nbsp;";							 
                         }
                         else {
				             $ta .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->cancel\">&nbsp;";
   				             $ta .= "<input type=\"submit\" class=\"myf_button_big\" name=\"FormAction\" value=\"$this->submit\">&nbsp;";							 
                         }
					     break;
						 
			   default : 
						   
						 if ($this->continue_button) {
                           $continue_url = $continue_shopping_goto_cmd ? $continue_shopping_goto_cmd.'/' : 'klist'; 
						   $continue_url .= $cat ? $cat .'/' : null;
						   $ta .= "&nbsp;";//<a href=\"$continue_url\"><input type=\"button\" class=\"myf_button\" value=\"".localize('_CONTINUESHOP',getlocal())."\" /></a>";
						   $ta .= $this->myf_button(localize('_CONTINUESHOP',getlocal()),$continue_url,'_CONTINUESHOP');
						 }
                   
				         //$ta .= seturl("t=clearcart&a=&g=" , $this->resetcart_button) . "&nbsp;" ;		
						 //$clear_cart_url = 'clearcart/';//seturl("t=clearcart"); 						 
						 $ta .= "&nbsp;";//<a href=\"$clear_cart_url\"><input type=\"button\" class=\"myf_button\" value=\"".localize('_CLEARCARTITEMS',getlocal())."\" /></a>";
						 $ta .= $this->myf_button(localize('_CLEARCARTITEMS',getlocal()),'clearcart/','_CLEARCARTITEMS');
						 
	                     //FAST PICK
						 $ta .= "&nbsp;";
	                     $lnk2 = seturl('t=fastpick');//,localize('_FASTPICK',getlocal()));
		                 $ta .= $this->myf_button(localize('_FASTPICK',getlocal()),$lnk2);					 
						 
						 //VIEW TRANSACTIONS when logged in
						 if ((defined('SHTRANSACTIONS_DPC')) && ($UserName)) {
							$lnk1 = 'trview/';//seturl('t=transview&pl=20');//,localize('_TRANSLIST',getlocal()));
							$ta .= '&nbsp;'. $this->myf_button(localize('_TRANSLIST',getlocal()),$lnk1);
						 } 						 
						 
						 if (is_object($this->transformer))
						   $ta .= $this->transformer->showlink();						 				 
						 			   
						 $ta .= "&nbsp;<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->checkout\">";
						    
		     }
			 
		     $tokens[] = $ta;
     
             $ta = "<input type=\"hidden\" name=\"FormName\" value=\"Cartview\">";
             $ta .= "</FORM>";
			 
		     $tokens[] = $ta;
		   }//template	 
		   else {	 
	         //main window 1
	         $mywin = new window(localize('_CART',getlocal()),$winout);
	         $out .= $mywin->render();
	         unset ($mywin);

             //recalculate & checkout submit buttons
             switch ($this->status) {
			    case 1 :
						 $out .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->order\">&nbsp;";
				         $out .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->cancel\">";
						 break;
						 
                case 2 : //SetSessionParam('orderdataprint',$printout);
						 //SetSessionParam('orderdataprint2',$printout2);
						 SetSessionParam('ordercart',$this->quickview());
						 $details  = '<br/>'.localize('_PWAY',getlocal()) .':'. GetParam('payway');
                         $details .= '<br/>'.localize('_RWAY',getlocal()) .':'. GetParam('roadway');
                         $details .= '<br/>'.localize('_IWAY',getlocal()) .':'. GetParam('invway');	   
                         $details .= '<br/>'.localize('_DELIVADDRESS',getlocal()) .':'. GetParam('addressway');	   
                         $details .= '<br/>'.localize('_SXOLIA',getlocal()) .':'. GetParam('sxolia');		   
                         SetSessionParam('orderdetails',$details);						 
						   
				         if (((GetSessionParam('payway')=='PAYPAL') || (GetParam('payway')=='PAYPAL')) ||
				             ((GetSessionParam('payway')=='PIRAEUS') || (GetParam('payway')=='PIRAEUS')))  {
   				           $out .= "<input type=\"submit\" class=\"myf_button_big\" name=\"FormAction\" value=\"$this->submit\">&nbsp;";
				           $out .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->cancel\">&nbsp;"/*. $this->print_button()*/;
                         }
                         else {
   				           $out .= "<input type=\"submit\" class=\"myf_button_big\" name=\"FormAction\" value=\"$this->submit\">&nbsp;";
				           $out .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->cancel\">&nbsp;";
                         }
					     break;
						 
			   default :
				         //auto //$buttons =  "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->recalc\">&nbsp;";
						 $buttons .= "<input type=\"submit\" class=\"myf_button\" name=\"FormAction\" value=\"$this->checkout\">";
				         $resetb = seturl("t=clearcart&a=&g=" , $this->resetcart_button) . "&nbsp;" ;

						 if (is_object($this->transformer))
						   $transb = $this->transformer->showlink();
						   
						 if ($this->continue_button) {
						   if ($cat)
						     $cont = seturl("t=$continue_shopping_goto_cmd&cat=".$cat,$this->continue_button);  
						   else
							 $cont = seturl("t=",$this->continue_button); 	 
						 }  

	                     $data[] = $buttons;
	                     $attr[] = "left;50%";
	                     $data[] = $resetb . $cont . $transb ;
	                     $attr[] = "right;50%";

	                     $w = new window('',$data,$attr);
	                     $out .= $w->render(" ::100%::0::null::right;100%;::");
	                     unset ($data);
	                     unset ($attr);
						 unset ($w);
		     }
     
             $out .= "<input type=\"hidden\" name=\"FormName\" value=\"Cartview\">";
             $out .= "</FORM>";
             //$out .= $this->print_button();
		   }//template					 
         }
		 else { //empty
		   
		   if (!$this->mycarttemplate) 
		     /*$tokens[] = $this->head();
		   else*/
		     $c = $this->head();
			 
		   //VIEW TRANSACTIONS when logged in
		   if ((defined('SHTRANSACTIONS_DPC')) && ($UserName)) {
			$lnk1 = 'trview/';//seturl('t=transview&pl=20');
			$trbutton = $this->myf_button(localize('_TRANSLIST',getlocal()),$lnk1);
		   }
           else
			$trbutton = localize('_EMPTY',getlocal());
			 
		   //$c .= localize('_EMPTY',getlocal());
		   if ($this->mycarttemplate) {
			 /*$tokens[] = null;//dummy token
			 $tokens[] = null;
			 $tokens[] = null;			 
		     $tokens[] = $this->looptotals;*/ //not totals when empty
			 //$tokens[] = localize('_EMPTY',getlocal());
			 $tokens[] = $trbutton;
			 //echo 'empty';				 
		   }	 
		   else {		   
		     $c .= $this->looptotals;
		   
	         $mywin = new window(localize('_CART',getlocal()),$c);
	         $out .= $mywin->render();
	         unset ($mywin);
		   }	 		   
		  
		 }
	   }
	   else {//status>=3
	   
         if (defined('SHCUSTOMERS_DPC')) {
		    $ret = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata');
         }
		  
         //print $this->transaction_id;
		 if (($this->transaction_id) && (!$this->mailerror)) {	 
		 
	          if ($this->mycarttemplate) { 
			    $tokens[] = $this->finalize_cart_success();
				if ($ret) {
				  $tokens[] = $this->transaction_id . "&nbsp;|&nbsp;" . $tmz_today;
				  $tokens[] = $ret;				
				}
				else {//dummy tokens
		          $tokens[] = null;
		          $tokens[] = null;				
				}				
				$tokens[] = $this->loopcartdata;
				$tokens[] = $this->looptotals;	
				$tokens[] = $this->print_button();										
			  }	
			  else { 
		        $out .= $this->finalize_cart_success();
				if ($ret) {										 
				  $out .= setTitle($this->transaction_id . "&nbsp;|&nbsp;" . $tmz_today,'right');
				  $out .= $ret;				  								
				}  
				$out .=$this->loopcartdata;
				$out .= $this->looptotals;	
                $out .= $this->print_button();				
			  }
		  }
		  else {
	          if ($this->mycarttemplate) {			  
			    $tokens[] = $this->finalize_cart_error();
				if ($ret) {
				  $tokens[] = $this->transaction_id . "&nbsp;|&nbsp;" . $tmz_today;
				  $tokens[] = $ret;				
				}
				else {//dummy tokens
		          $tokens[] = null;
		          $tokens[] = null;				
				}				
				$tokens[] = $this->loopcartdata;
				$tokens[] = $this->looptotals;
			  }	
			  else {		  
		        $out .= $this->finalize_cart_error();						 
				if ($ret) {
				  $out .= setTitle($this->transaction_id . "&nbsp;|&nbsp;" . $tmz_today,'right');
				  $out .= $ret;				  				
				}
				$out .= $this->loopcartdata;
				$out .= $this->looptotals;				
			  }	
		  }

		  //reset global params..								 
          SetSessionParam('TransactionID',0);
          SetSessionParam('cartstatus',0);
	      $this->status = 0;
	   }

	   if ($this->mycarttemplate) {
	   
	     //print_r($tokens);
		 if ($this->notempty()) {
			$out .= $this->combine_tokens($this->mycarttemplate,$tokens,true);
			//echo 'a'.$this->myf_button(localize('_CLEARCARTITEMS',getlocal()),'clearcart/');
		 }	
		 else {	//empty 1 token
			$emptycart_template= "shcartempty.htm";
	        $te = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$emptycart_template) ;
	        if (($cart_template) && is_readable($te)) {
		       $emptycarttemplate = @file_get_contents($te);		 
		       $out = $this->combine_tokens($emptycarttemplate,$tokens,true);
			}
			else
			   $out = $tokens[0];
		 }	
	   }	
	   
	   //VIEW TRANSACTIONS
	   /*if ((defined('SHTRANSACTIONS_DPC'))) {
		 //$out .= GetGlobal('controller')->calldpc_method('shtransactions.viewTransactions');
		 $lnk1 = seturl('t=transview&pl=20');//,localize('_TRANSLIST',getlocal()));
		 $out .= $this->myf_button(localize('_TRANSLIST',getlocal()),$lnk1);
       } 
	   //$out .= '|';
	   //FAST PICK
	   if ((defined('SHKATALOG_DPC'))) {
	     $lnk2 = seturl('t=fastpick');//,localize('_FASTPICK',getlocal()));
		 $out .= $this->myf_button(localize('_FASTPICK',getlocal()),$lnk2);
	   }*/
       return ($out);
	}
	
	function loopcart() {
	   
	   if (empty($this->buffer))
	     return;
	
	   $command = $this->itemclick?$this->itemclick:GetReq('t');
	   $status = $this->status? strval($this->status) : '0';
	   	   
	   $ix = $this->imagex?$this->imagex:100;
	   $iy = $this->imagey?$this->imagey:null; 
	   $ixw = $ix ? "width=".$ix : "width=".$ix;
	   $iyh = $iy ? "height=".$iy :null; //empty y=free dim	   
	   
	   //loop template (status param)
	   $loopcart_template= "shcart".$this->status.".htm";
	   $t2 = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$loopcart_template) ;
	   if (($loopcart_template) && is_readable($t2)) {
	     $tmpl2=1;
		 $this->myloopcarttemplate = file_get_contents($t2);
	   }	   
	   //echo $t2;	 //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
	   
	   $hr = $tmpl2?null:'<hr>';  
	   
       reset ($this->buffer);
	   $this->qty_total = 0;
	   $this->total = 0;	     	
	
           foreach ($this->buffer as $prod_id => $product) {

		     if (($product) && ($product!='x')) {
               $aa+=1;
		       $param = explode(";",$product); //echo $param[8],"<br>";
		       $gr = $param[4];//urlencode($param[4]);
			   $ar = $param[1];//urlencode($param[1]);
	           $link = seturl("t=$command&cat=$gr&id=".$param[0] , $param[1],null,null,null,true);//rewrite);
			   
			   if (defined("SHKATALOGMEDIA_DPC")) {
			     $itemphoto = GetGlobal('controller')->calldpc_method("shkatalogmedia.get_photo_url use ".$param[7].'+1+'.$param[3]);//app used as param 3
			     $linkimage = seturl("t=$command&cat=$gr&id=".$param[0], "<img src=\"" . $itemphoto . "\" $ixw $iyh alt=\"$ar\">",null,null,null,true);//rewrite);
			   }
			   else
			     $linkimage = '&nbsp;';

	           if (!$this->status) {
			     $data[] = $linkimage;
	             $attr[] = "left;10%";
		       }
		       else {
				 $data[] = $aa . "&nbsp;" . $param[0];
	             $attr[] = "left;20%";
		       }
			   
			   if ($this->cartlinedetails)
			     $details = $param[6]? '&nbsp;' . $param[6]:null;
			   else
			     $details = null;	 
				 
			   switch ($this->status) {
				   default :
				   case 0 : $data[] = $param[0] . "<br/>" . $link . "&nbsp;" . $details;  
				            break;
				   case 1 : 
				            $details .= $this->get_advanced_details($param[0]);			   
				            $data[] = $param[0] . "&nbsp;" . $param[1] . $details;  
							break;
                   case 2 : //fetch from recalc
				            $details .= $this->get_advanced_details($param[0]);	
				            $data[] = $param[0] . "&nbsp;" . $param[1] . $details; 
				            break;
                   case 3 : //fetch from recalc
				            $details .= $this->get_advanced_details($param[0]);	
				            $data[] = $param[0] . "&nbsp;" . $param[1] . $details; 
				            break;				   
			   }

               if (!$this->status) {
	              $attr[] = "left;40%";
			      $data[] = $this->showsymbol($product,$param[4],$param[5],1);//<<allow remove here
	              $attr[] = "center;10%";
		       }
		       else {
	              $attr[] = "left;40%";
		       }

		       $this->qty_total += $param[9];	
			   $this->total+= $this->qty_total * floatval(str_replace(",",".",$param[8]));		   
			   
			   $price = floatval(str_replace(",",".",$param[8]));
			   $data[] = number_format($price,$this->dec_num,',','.') . $this->moneysymbol;
	           $attr[] = "right;15%";

	           $options = $this->setquantity("Product$aa",$param[9]);
			   if (($this->uniname2) && ($param[11]))
			     $options .= "<br>" . $this->setuniname("Uniname$aa",$param[10],$param[10],$param[11]);
			   $data[] = $options;
	           $attr[] = "right;10%";

			   $data[] = $this->settotal("Product$aa",$price,$param[9]) . $this->moneysymbol;
	           $attr[] = "right;15%";
               
			   if ($this->myloopcarttemplate) {
			      $loopout .= $this->combine_tokens($this->myloopcarttemplate,$data,true);
				  
               //$sd = urlencode(serialize($data));
			   //$cc = GetGlobal('controller')->calldpc_method("fronthtmlpage.subpage use shcart.htm+".$sd."++".$status);
			   /*if ($cc)	{
			     $loopout .= $cc;
			   }  
	           else {				  */
			   }
			   else {
			 
	             $myproduct = new window('',$data,$attr);
				 
			     if ($this->overitem[$prod_id])
			       $loopout .= $myproduct->render("center::100%::0::group_article_selected::left::0::0::") . '<hr>';
			     else
	               $loopout .= $myproduct->render("center::100%::0::group_article_body::left::0::0::") . '<hr>';
				   
			     /*$printout .= $myproduct->render();

			     $printout2 .= sprintf("%2s|%10s|%-70s|%12s|%10s|%10s\r\n",$aa,$param[0],$param[1].@str_repeat(" ",80-strlen($param[1])),$param[10],$param[9],$param[8]);
				 */
               }
	           unset ($data);
	           unset ($attr);
		       unset ($param);
		     }
	       }
	   //echo '>'.$loopout;
	   	   
	   return ($loopout);  	 	
	}
	
	protected function get_advanced_details($code=null) {
	    if (!$code) return false;
	
	    if (defined('ACAL_DPC')) {
		
		    switch ($this->status) {
			    case 3 :
				        /*foreach ($_POST as $p=>$v) { 
						    if (strstr($p,'reservation_details_'.$code)) 
								//$details .= $v;
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
							elseif (strstr($p,'reservation_'.$code)) 	
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
						}*/
						//echo 'z';
                        //print_r($_POST);  						
				        break;
			    case 2 :
				        foreach ($_POST as $p=>$v) { 
						    if (strstr($p,'reservation_details_'.$code)) 
								//$details .= '<br/>' . $v;
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
							elseif (strstr($p,'reservation_'.$code)) 	
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
						}
				        break;
				case 1 :		
						$reservation_details = GetGlobal('controller')->calldpc_method('acal.get_user_reservations_description use '.$code);
						if (!empty($reservation_details)) {
						  foreach ($reservation_details as $r=>$detail) {				
							$details .= '<br/>'.$detail;
							$details .= "<input type=\"hidden\" name=\"reservation_{$code}_{$r}\" value=\"{$r}\">";
							$details .= "<input type=\"hidden\" name=\"reservation_details_{$code}_{$r}\" value=\"{$detail}\">";
						  }
						}
			}			
	    }	
		
		if (($this->exchange) && ((defined('SHKATALOGMEDIA_DPC')))) {
		
		    switch ($this->status) {
			    case 3 :
				        /*foreach ($_POST as $p=>$v) { 
						    if (strstr($p,'exchange_details_'.$code)) 
								//$details .= localize('_exchangewith', getlocal()) . $v;
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
							elseif (strstr($p,'exchange_'.$code)) 	
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
						}*/				
				        break;
			    case 2 :
				        foreach ($_POST as $p=>$v) { 
						    if (strstr($p,'exchange_details_'.$code))  
								//$details .= '<br/>' . localize('_exchangewith', getlocal()) . $v;
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
							elseif (strstr($p,'exchange_'.$code)) 	
								$details .= "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\">";
						}
				        break;
				case 1 :
						$exchange_details = GetGlobal('controller')->calldpc_method("shkatalogmedia.get_user_item use exchange_".$code);
						if (!empty($exchange_details)) {
						  foreach ($exchange_details as $p=>$detail) {			  
							$details .= '<br/>' . localize('_exchangewith', getlocal()) . $detail;
							$details .= "<input type=\"hidden\" name=\"exchange_{$code}_{$p}\" value=\"{$p}\">";
							$details .= "<input type=\"hidden\" name=\"exchange_details_{$code}_{$p}\" value=\"{$detail}\">";
						  }
						}
						break;						
			}			
		}

        return ($details);		
	}
	
	//ovewrride
    function settotal($id,$price,$qty) {	

	  if (!$qty) $qty = 1;
      
	  if ($price!=0) {
		  $result = ($price*$qty);
		  //the reason to override????????
          //$this->total += $result;
		  //$this->qtytotal += $qty;
	  }
	  else
		 $result = "--&nbsp;";
		 
	  $ret = number_format(floatval($result),$this->dec_num,',','.');	 
      //echo $ret;
      return ($ret);
	  //return ($result);
	}	
	
	//override
	function loadcart($transid=null) {
	    $a = $transid?$transid:GetReq('tid');
		
		$transdata = array();
		
		if (is_number($a)) {
         if (defined('SHTRANSACTIONS_DPC')) {

		    $transdata = GetGlobal('controller')->calldpc_method('shtransactions.getTransaction use '.$a);
			
			if ($transdata) {
			  //unserialize data
			  $decodetrans = unserialize($transdata);
			  //replace cart buffer
			  //$this->buffer = $decodetrans;//array_merge($this->buffer, $decodetrans);
			  
			  foreach ($decodetrans as $i=>$trcartrec) {
			    //$this->buffer[] = $trcartrec;
				
				//remove line details
				$param = explode(';',$trcartrec);
				$details = null;
				$this->buffer[] = "$param[0];$param[1];$param[2];$param[3];$param[4];$param[5];$details;$param[7];$param[8];$param[9];$param[10];$param[11];$param[12];$param[13];$param[14];$param[15];"; 
			  }	
			  
			  $this->setStore();
			  
			  $this->colideCart();
			  
			  return true;
			}
		  }
		}
		
		return false;
	}	

	//used by detailed transaction view
	function previewcart2($id,$callback=null,$cmd=null) {

        $pview=$cmd?$cmd:'kshow';

		if (is_number($id)) {

		   $transdata = GetGlobal('controller')->calldpc_method('shtransactions.getTransaction use '.$id);
           //unserialize data
		   $buffer = unserialize($transdata);

           foreach ($buffer as $prod_id => $product) {

		     if (($product) && ($product!='x')) {
               $aa+=1;
		       $param = explode(";",$product);

		       $gr = $param[4];//urlencode($param[4]);
			   $ar = $param[1];//urlencode($param[1]);
			   $page = $param[5];
			   $id = $param[0];
	           $link = seturl("t=$pview&id=$id&cat=$gr&page=" , $param[1],null,null,null,true);//rewrite);

			   $data[] = "<img src=\"" . $param[7] . "\" width=\"100\" height=\"75\" alt=\"\">";
	           $attr[] = "left;10%";

			   //expand
			   for ($i=0;$i<30;$i++) $expander .= "&nbsp;";
               $data[] = $param[0] . "<br>" . $link . $expander;
	           $attr[] = "left;80%";
			   /*$data[] = $this->showsymbol($product,$param[4],$param[5]);
	           $attr[] = "center;10%";*/

			   /*$price = floatval(str_replace(",",".",$param[8]));
			   $data[] = number_format($price,$this->dec_num,',','.') . $this->moneysymbol;
	           $attr[] = "right;15%";*/

	           /*$options = $this->setquantity("Product$aa",$param[9]);
			   if (($this->uniname2) && ($param[11]))
			     $options .= "<br>" . $this->setuniname("Uniname$aa",$param[10],$param[10],$param[11]);*/
			   $data[] = $param[9];//$options;
	           $attr[] = "center;10%";

			   //$data[] = '='.$this->settotal("Product$aa",$price,$param[9]) . $this->moneysymbol;
	           //$attr[] = "right;15%";

	           $myproduct = new window('',$data,$attr);
	           $out .= $myproduct->render("center::100%::0::group_article_body::left::0::0::") . "<hr>";

	           unset ($data);
	           unset ($attr);
		       unset ($param);
		     }
	       }


		}
		else {
           //empty message
	       $w = new window(localize('_CART',getlocal()),localize('_EMPTY',getlocal()));
	       $out .= $w->render("center::40%::0::group_win_body::left::0::0::");//" ::100%::0::group_form_headtitle::center;100%;::");
	       unset($w);

		}

		return ($out);
	}
	//revisited
	function previewcart($id,$callback=null,$cmd=null) {
        $pview=$cmd?$cmd:'kshow';
	    $status = $this->status? strval($this->status) : '0';
	    $ix = $this->imagex?$this->imagex:100;
	    $iy = $this->imagey?$this->imagey:null;//free y
	    $ixw = $ix ? "width=".$ix : "width=".$ix;
	    $iyh = $iy ? "height=".$iy :null; //empty y=free dim	   		
		
	    //loop template (status param)
	    $loopcart_template= "shcart".$status.".htm";
	    $t2 = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$loopcart_template) ;
	    if (($loopcart_template) && is_readable($t2)) {
	      $tmpl2=1;
		  $this->myloopcarttemplate = file_get_contents($t2);
	    }	   
	    //echo $t2;	 
	    $hr = $tmpl2?null:'<hr>'; 		

		if (is_number($id)) {

		   $transdata = GetGlobal('controller')->calldpc_method('shtransactions.getTransaction use '.$id);
           //unserialize data
		   $buffer = unserialize($transdata);	
		   //echo '<pre>'; print_r($buffer); echo '</pre>';
     
           foreach ($buffer as $prod_id => $product) {
			 //echo $product,'<br/>';
		     if (($product) && ($product!='x')) {
               $aa+=1;
		       $param = explode(";",$product); //echo $param[8],"<br>";
		       $gr = $param[4];//urlencode($param[4]);
			   $ar = $param[1];//urlencode($param[1]);
			   $qty = $param[9];
			   $details = null;//$param[6];//reset details
	           //$link = seturl("t=$pview&id=$ar&cat=$gr&id=".$param[0] , $param[1],null,null,null,true);//rewrite);
			   $link = seturl("t=$pview&cat=$gr&id=".$param[0] , $param[1],null,null,null,true);//rewrite);
			   
			   if (defined("SHKATALOGMEDIA_DPC")) {
			     $itemphoto = GetGlobal('controller')->calldpc_method("shkatalogmedia.get_photo_url use ".$param[7].'+1+'.$param[3]);
			     $linkimage = seturl("t=$pview&a=$ar&cat=$gr&id=".$param[0], "<img src=\"" . $itemphoto . "\" $ixw $iyh alt=\"$ar\">");
			   }
			   else
			     $linkimage = '&nbsp;';			   
			   //$linkimage = "<img src=\"" . $param[7] . "\" $ixw $iyh alt=\"$ar\">"/*)*/;

	           if (!$this->status) {
			     $data[] = $linkimage;
	             $attr[] = "left;10%";
		       }
		       else {
				 $data[] = $aa . "&nbsp;" . $param[0];
	             $attr[] = "left;20%";
		       }
			   
			   if ($this->cartlinedetails)
			     $details = $param[6]? '&nbsp;' . $param[6]:null;
			   else
			     $details = null;	 

			   switch ($this->status) {
				   default :
				   case 0 : $data[] = $param[0] . "<br/>" . $link . "&nbsp;" . $details;  break;
				   case 1 : $data[] = $param[0] . "&nbsp;" . $param[1] . $details;  break;
                   case 2 : $data[] = $param[0] . "&nbsp;" . $param[1] . $details; break;
                   case 3 : $data[] = $param[0] . "&nbsp;" . $param[1] . $details; break;				   
			   }

               if (!$this->status) {
	              $attr[] = "left;40%";
				  
				  //remove details from product line...? NO
				  $prod = $product;//"$param[0];$param[1];$param[2];$param[3];$param[4];$param[5];$details;$param[7];$param[8];$param[9];$param[10];$param[11];$param[12];$param[13];$param[14];$param[15];"; 
			      $data[] = $this->showsymbol($prod,$param[4],$param[5],1,$qty,true);//<<allow remove here
	              $attr[] = "center;10%";
		       }
		       else {
	              $attr[] = "left;40%";
		       }

			   $price = floatval(str_replace(",",".",$param[8]));
			   $data[] = number_format($price,$this->dec_num,',','.') . $this->moneysymbol;
	           $attr[] = "right;15%";

	           //$options = $this->setquantity("Product$aa",$param[9]);
			   if (($this->uniname2) && ($param[11]))
			     $options .= "<br>" . $this->setuniname("Uniname$aa",$param[10],$param[10],$param[11]);
			   $data[] = $options;
	           $attr[] = "right;10%";

			   $ssum = floatval(str_replace(",",".",$price)) * intval($param[9]);	
			   $merikosynolo = number_format($ssum,$this->dec_num,',','.') . $this->moneysymbol;		   
			   $data[] = 'x'.$param[9].'='.$merikosynolo;
	           $attr[] = "right;15%";
			   		   
               
			   if ($this->myloopcarttemplate) {
			      $loopout .= $this->combine_tokens($this->myloopcarttemplate,$data,true);
			   }
			   else {
			 
	             $myproduct = new window('',$data,$attr);
				 
			     if ($this->overitem[$prod_id])
			       $loopout .= $myproduct->render("center::100%::0::group_article_selected::left::0::0::") . '<hr>';
			     else
	               $loopout .= $myproduct->render("center::100%::0::group_article_body::left::0::0::") . '<hr>';
				   
			     $printout .= $myproduct->render();

			     $printout2 .= sprintf("%2s|%10s|%-70s|%12s|%10s|%10s\r\n",$aa,$param[0],$param[1].@str_repeat(" ",80-strlen($param[1])),$param[10],$param[9],$param[8]);
               }
	           unset ($data);
	           unset ($attr);
		       unset ($param);
		     }
	       }
		}
		/*else {
           //empty message
	       $w = new window(localize('_CART',getlocal()),localize('_EMPTY',getlocal()));
	       $out .= $w->render("center::40%::0::group_win_body::left::0::0::");//" ::100%::0::group_form_headtitle::center;100%;::");
	       unset($w);

		}*/
	   	   
	   return ($loopout);  	 	
	}	

	//overwrite for quickview purposes
    function viewcart($id,$title,$path,$template,$group,$page,$descr='',$photo='',$price=0,$quant=1,$uninameA=null,$uninameB=null) {

       //get current product view
       $pview=$cmd?$cmd:'klist';

	   $gr = $group;//urlencode($group);
	   $ar = $title;//urlencode($title);

       $item = summarize(55,$title);
	   $link_summarized = seturl("t=$pview&a=$ar&cat=$gr&page=$page" ,$item,null,null,null,true);//rewrite);
	   $link = seturl("t=$pview&a=$ar&cat=$gr&page=$page" ,$title,null,null,null,true);//rewrite);
	   
	   /*if ($this->cartlinedetails)
	     $descr = $descr;//$param[6]? '&nbsp;' . $param[6]:null;
	   else
	     $details = null;	*/	   

	   if ($this->mytemplate) {

		      $out = $this->combine_template($this->mytemplate,
			                                 $id,
			                                 $link,
			                                 $link_summarized,
			                                 $quant,
											 $price,
			                                 $title,
											 $descr,
											 $uninameA,
											 $uninameB,
											 null//$this->list_photo($rec[$this->getmapf('code')],400,300)
			                                 );
	   }
	   else {

	     $data[] = '<li>';
	     $attr[] = "left;10%";

	     $data[] = $link;
	     $attr[] = "left;80%";
	     //$data[] = $price;
	     //$attr[] = "right;30%";
	     $data[] = $quant;
	     $attr[] = "right;10%";

	     $myarticle = new window('',$data,$attr);
	     $out = $myarticle->render("center::100%::0::group_article_selected::left::0::0::");
	     unset ($data);
	     unset ($attr);
       }//mytemplate

	   return ($out);
    }

    //called with trid from payengines when success to send the mails
	function goto_mailer($trid=null, $simplebody=false, $invoice_template=null) {
	
	    //DO NOT RE-RENDER PRINT OUT..FOR MAIL
	    if ($trid = $this->printout) {
			//GET IT FROM SAVED HTML TRANSACTION
			//DONT USE trid for security reasons..
			//GetSessionParam('TransactionID');
			$mailout = GetGlobal('controller')->calldpc_method('shtransactions.getTransactionHtml use '.$trid);
			//SetSessionParam('printout',null); // NO reset
			//return ($out);
		}
        else {		
	
	      $headtitle = paramload('SHELL','urltitle');	
		  $this->transaction_id = $trid?$trid:$this->transaction_id;
	      //template
	      $cart_template = $invoice_template ? $invoice_template : "shcartmail.htm";
	      $template = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
				
		  if (!$mystyle = remote_paramload('SHCART','printstyle',$this->path))
		    $mystyle = 'themes/style.css';
		  if (!$mytitle = $this->print_title)		
		    $mytitle = "<h1>$headtitle | Order No:".$this->transaction_id."</h1>";
		  else
		  	$mytitle = "<h1>$mytitle | Order No:".$this->transaction_id."</h1>";
		  	
          //disabled orderdataprint
		  //$orderdataprint = GetSessionParam('orderdataprint') ;	
		  //echo $orderdataprint;	
          $details  = '<br/>'.localize('_PWAY',getlocal()) .':'. GetSessionParam('payway');
          $details .= '<br/>'.localize('_RWAY',getlocal()) .':'. GetSessionParam('roadway');
          $details .= '<br/>'.localize('_IWAY',getlocal()) .':'. GetSessionParam('invway');	   
          $details .= '<br/>'.localize('_DELIVADDRESS',getlocal()) .':'. GetSessionParam('addressway');	   
          $details .= '<br/>'.localize('_SXOLIA',getlocal()) .':'. GetSessionParam('sxolia');		   	  

		  if ($simplebody) {//simplefied body
		    $_htmldata = $mytitle;
			$_htmldata .= GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata  use ++cusdetails.htm');
			$_htmldata .= GetSessionParam('ordercart');
			$_htmldata .= GetSessionParam('orderdetails');  
		  
		  	$headtitle = paramload('SHELL','urltitle');			
			$hpage = new phtml($mystyle,$_htmldata,"<B><h1>$headtitle</h1></B>");
			$mailout = $hpage->render();
			unset($hpage);	
		  }	
          elseif (($invoice_template) && (is_readable($template))) {
		   
			//init tokens
			$invoice_tokens = array();
			$invoice_tokens['trid'] = $this->transaction_id;
			$invoice_tokens['payway'] = GetSessionParam('payway');
			$invoice_tokens['roadway'] = GetSessionParam('roadway');
			$invoice_tokens['invway'] = GetSessionParam('invway');
			$invoice_tokens['addressway'] = GetSessionParam('addressway');
			$invoice_tokens['sxolia'] = GetSessionParam('sxolia');		   
			$invoice_tokens['cusdata'] = (array) GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use +++1');//array();	  
			$invoice_tokens['cartdata'] = (array) $this->quickview(true); //array of array lines		   
		    
			$x = 'notes123';//.var_export($invoice_tokens, true);
			$date = date('d.m.y');			
			//$invoice_tokens['invoice'] = GetSessionParam('invway') .' '.$this->transaction_id;
			$invoice_tokens['invoice'] = localize('_ORDERSUBJECT',getlocal()).' '.$this->transaction_id;
			$invoice_tokens['mynotes'] = GetSessionParam('sxolia');//$x;
		    $invoice_tokens['mydate'] = $date;
		    if (defined('TWIGENGINE_DPC')) {
			  
			    $t = array('invoice'=>GetSessionParam('invway') .' '.$this->transaction_id,
				           'mynotes'=>$x,
						   'mydate'=>$date);
			    $tokens = serialize($invoice_tokens);//$t);
			    $mailout = GetGlobal('controller')->calldpc_method('twigengine.render use '.$invoice_template.'++'.$tokens);
		    }
			else {
	            
				$mycarttemplate = file_get_contents($template);		  
			
				$mailout .= $this->combine_tokens($mycarttemplate,$tokens,true);		
				$mailout .= '<!--end of document-->';	
			}
          }		  
	      elseif (is_readable($template)) {//echo $template;
        
		    $tokens = array();
		    $mycarttemplate = file_get_contents($template);
			
		    //$tokens[] = $orderdataprint;	
			$tokens[] = $this->transaction_id;
			$tokens[] = GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata use ++cusdetails.htm');			
		    $tokens[] = $details;//'&nbsp;AAA';//details
			$tokens[] = $this->quickview(); //no need to call session param ordercart

            $mailout = $this->combine_tokens($mycarttemplate,$tokens,true);		
			$mailout .= '<!--end of document-->';
	      }
		  else {		  		  
		    $xtemplate = paramload('SHELL','prpath') . "cartorder.tpl";
			$_data = $mytitle . 
			         GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata') .
			         $this->quickview() . 
					 $details;
		    $mailout = str_replace("##_LINK_##", /*$orderdataprint*/$_data, @file_get_contents($xtemplate));		  
		  }
        }//printout		  
	   
	    if ($ordermailsubject = remote_paramload('SHCART','ordermailsubject',$this->path)) {
	        $subject = str_replace('@',$this->transaction_id,$ordermailsubject);	   
		}
		else
		    $subject = localize('_ORDERSUBJECT',getlocal()) . $this->transaction_id;
			
		// MAIL THE ORDER TO HOST
 		$this->mailerror = $this->cart_mailto(null,$subject,$mailout);
		//TO CUSTOMER
		$usermail = decode(GetGlobal('UserID'));
 		$this->mailerror = $this->cart_mailto($usermail,$subject,$mailout);		    			  
		  
		return ($this->mailerror);

	}	
	
	//a printed version of mail to send..disabled
	function goto_mailer_4print() {
          //$orderdataprint = GetSessionParam('orderdataprint2');
		  	
	      //template
	      $cart_template= "shcartmail.htm";
	      $template = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
	      //echo $template;
	      if (is_readable($template)) {
	        $tmpl=1;
		    $tokens = array();
		    $mycarttemplate = file_get_contents($template);
	      }
		  
		  $_data = $mytitle . 
			       GetGlobal('controller')->calldpc_method('shcustomers.showcustomerdata') .
			       $this->quickview() . 
				   $details;	
		  if ($tmpl) {
		  
		    $tokens[] = $_data;//$orderdataprint;//strip_tags($orderdataprint);//$orderdataprint;
			$mailout = $this->combine_tokens($mycarttemplate,$tokens,true);
		  }
		  else
		    $mailout = $_data;//strip_tags($orderdataprint);			

	      if ($ordermailsubject = remote_paramload('SHCART','ordermailsubject',$this->path)) {
	        $subject = str_replace('@',$this->transaction_id,$ordermailsubject);	   
		  }
		  else
		    $subject = localize('_ORDERSUBJECT',getlocal()) . $this->transaction_id;
			
		  // MAIL THE ORDER TO HOST
 		  $this->mailerror = $this->cart_mailto(null,$subject,$mailout);
          //TO CUSTOMER
		  $usermail = decode(GetGlobal('UserID'));
 		  $this->mailerror = $this->cart_mailto($usermail,$subject,$mailout);		    
		  
	}
	
	//override
	function payway($token=null) {

	       $pways = remote_arrayload('SHCART','payways',$this->path);
		   if (!$pways) return null;
		   //print_r($pways);
		   $defpay = remote_arrayload('SHCART','payway_default',$this->path);
		   $default_pay = $defpay?$defpay:0; 
		   		   
		   foreach ($pways as $i=>$w) {
		     $lans_titles = explode('/',$w);
		     $choices[] = $lans_titles[getlocal()];
		   }
		   //print_r($choices);
		   $params = implode(',',$choices);

           switch ($this->status) {
			 case 1 :
					 $pp = new multichoice('payway',$params,$default_pay,false);
					 $radios = $pp->render();
					 unset($pp);
					 
					 $subtokens[] = $radios;					 
					 
					 if ($token) {
						$s1 = $this->get_selection_text('payway',$subtokens,1,localize('_PWAY',getlocal()),true);
						if ($s1) 
							$tokens[] = $s1;
						else 
						    $tokens =  $subtokens;
					 }
					 else
						$out = $this->get_selection_text('payway',$subtokens,1,localize('_PWAY',getlocal()));	
					 
		             //$out .= "<hr>";						 
		             break;
	         case 3 :
		     case 2 :$mypway = GetParam("payway")?GetParam("payway"):GetSessionParam("payway");
                     //$out = localize('_PWAY',getlocal()) . " : " . $mypway;
		 	         //hold param
                     SetSessionParam('payway',$mypway);	
					 
					 $subtokens[] = $mypway;
					 
					 if ($token) {
						$s1 = $this->get_selection_text('payway',$subtokens,1,localize('_PWAY',getlocal()),true);
						if ($s1) 
							$tokens[] = $s1;
						else 
						    $tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('payway',$subtokens,1,localize('_PWAY',getlocal()));	
					 					 
		             //$out .= "<hr>";						 				 
			         break;

			 default : if ($token) {
							$tokens[] = '&nbsp;';
					   }
					   else
							$out = null;
		   }

		   return ($token ? $tokens : $out);
	}	

	//overwrite
	function roadway($token=null) {

		  // $ways = paramload('SHCART','roadways');
	       $ways = remote_arrayload('SHCART','roadways',$this->path);
		   //echo '+++'; print_r($ways);
		   if (!$ways) return null;
		   
		   $defway = remote_arrayload('SHCART','roadway_default',$this->path);
		   $default_ship = $defway?$defway:0; 
		   //print_r($ways);
		   foreach ($ways as $i=>$w) {
		     $lans_titles = explode('/',$w);
		     $choices2[] = $lans_titles[getlocal()];
		   }
		   //print_r($choices2);
		   $params = implode(',',$choices2);

           switch ($this->status) {
			 case 1 :
					 $pp = new multichoice('roadway',$params,$default_ship,false);
					 $radios = $pp->render();
					 unset($pp);
					 
					 $subtokens[] = $radios;

   		             if ($message = remote_arrayload('SHCART','roadwaystext',$this->path)) {
		               //$out .= $message;
					   $subtokens[] = $message[getlocal()];
					 }
					 else
					   $subtokens[] = '&nbsp;';
					   
					 if ($token) {
					    //$subtokens[] = $mypway;
						$s1 = $this->get_selection_text('roadway',$subtokens,1,localize('_RWAY',getlocal()),true);
						if ($s1) {
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy							
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else    
						$out = $this->get_selection_text('roadway',$subtokens,1,localize('_RWAY',getlocal()));	    					   
					   					   
					   
		             //$out .= "<hr>";						   
		             break;
	         case 3 :
		     case 2 :$myrway = GetParam("roadway")?GetParam("roadway"):GetSessionParam("roadway");
                     //$out = localize('_RWAY',getlocal()) . " : " . $myrway;
		 	         //hold param
                     SetSessionParam('roadway',$myrway);
					 
					 $subtokens[] = $myrway;
					 $subtokens[] = '&nbsp;';
					 
					 if ($token) {
						$s1 = $this->get_selection_text('roadway',$subtokens,1,localize('_RWAY',getlocal()),true);
						if ($s1) { 
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else  					 
						$out = $this->get_selection_text('roadway',$subtokens,1,localize('_RWAY',getlocal()));	
					 							 
		             //$out .= "<hr>";						 
			         break;

			 default : $tokens[] = '&nbsp;';
			           $tokens[] = '&nbsp;';
			           $out = null;
		   }

		   return ($token ? $tokens : $out);
	}
	
	function invoiceway($token=null) {
	   $ways = remote_arrayload('SHCART','invways',$this->path);
	   $defway = remote_paramload('SHCART','invway_default',$this->path); 	
	   $default_invoice = $defway?$defway:0;//override customers default invoice ??
	   //echo '+++'; print_r($ways);	      	
	   //echo '>',$default_invoice;

	   //$ret = seturl('t='.$t.'&invtype=1',localize('_INVOICE',getlocal()));
	   //$ret .= "&nbsp;/&nbsp;";
	   //$ret .= seturl('t='.$t.'&invtype=0',localize('_APODEIXI',getlocal()));		
	
       if (defined('SHCUSTOMERS_DPC'))  {
		 //echo 'z';
	     $choose_invoice = GetGlobal('controller')->calldpc_var('shcustomers.allow_inv_selection');
		 $default_invoice = GetGlobal('controller')->calldpc_var('shcustomers.invtype');
	   }   
	   //echo '>',$default_invoice;	   
	   /*if ((!$choose_invoice) && (!is_array($ways))) {
	     //when no value and if token fill the empty value
		 $tokens[] = '&nbsp;';
		 $tokens[] = '&nbsp;';
		 return ($token ? $tokens : null);
	   }*/	
		   
	   if (empty($ways)) {//return null;...get ttile by shcustomers vars
	     $ways[0] = localize('_APODEIXI',0).'/'.localize('_APODEIXI',1);//'_APODEIXI/_APODEIXI';
		 $ways[1] = localize('_INVOICE',0).'/'.localize('_INVOICE',1);//'_INVOICE/_INVOICE';
	   }

	   //print_r($ways);
	   foreach ($ways as $i=>$w) {
	     $lans_titles = explode('/',$w);
	     $choices2[] = $lans_titles[getlocal()];
	   }
	   //print_r($choices2);
	   $params = implode(',',$choices2);		   
		   
       switch ($this->status) {
			 case 1 : //echo 'a';
					 $pp = new multichoice('invway',$params,$default_invoice,false);
					 $radios = $pp->render();
					 unset($pp);
					 //echo $radios;
					 $subtokens[] = $radios;		

   		             if ($message = remote_paramload('SHCART','invwaystext',$this->path)) {
		               //$out .= $message;
					   $subtokens[] = $message;
					 }
					 else
					   $subtokens[] = '&nbsp;';
					   
					 if ($token) {
						$s1 = $this->get_selection_text('invoiceway',$subtokens,1,localize('_IWAY',getlocal()),true);	
						if ($s1) { 
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else 					     
						$out = $this->get_selection_text('invoiceway',$subtokens,1,localize('_IWAY',getlocal()));	    					   
					   
		             //$out .= "<hr>";						   
		             break;
	         case 3 :
		     case 2 :$myiway = GetParam("invway")?GetParam("invway"):GetSessionParam("invway");
                     //$out = localize('_IWAY',getlocal()) . " : " . $myiway;

                     SetSessionParam('invway',$myiway);
					 
					 $subtokens[] = $myiway;
					 $subtokens[] = '&nbsp;';
					 
					 if ($token) {
						$s1 = $this->get_selection_text('invoiceway',$subtokens,1,localize('_IWAY',getlocal()),true);	
						if ($s1) { 
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('invoiceway',$subtokens,1,localize('_IWAY',getlocal()));	
					 									 
		             //$out .= "<hr>";						 					 
			         break;

			 default : $tokens[] = '&nbsp;';
			           $tokens[] = '&nbsp;';
			           $out = null;
	   }		 
			 
	   return ($token ? $tokens : $out);	   	
	}
	
	function addressway($token=null) {
		   	   
		
       switch ($this->status) {
			 case 1 :
			   	      if (defined('SHCUSTOMERS_DPC')) {
					    $combo=0;
	                    if ($deliv = GetGlobal('controller')->calldpc_method('shcustomers.showdeliveryaddress use addressway')) {
						  if ($combo) {
						    $choice = $cus;
						  }
						  else {
						    //echo $deliv,'>'	;					
						    $pp = new multichoice('addressway',str_replace('<COMMA>',',',$deliv),null,false);
					        $con = $pp->render();
					        unset($pp);
													
							$choice = $con;
						  }	
						}
						
						$addnewlink = GetGlobal('controller')->calldpc_method('shcustomers.addnewdeliverylink use shcart>cartview');
						
	                  }
					  else
					    $con = "<input class=\"myf_input\" type=\"text\" name=\"addressway\" maxlenght=\"255\" value=\"\">"; 			 
					    
					  $subtokens[] = $con;
					  $subtokens[] = $addnewlink;						
					  
   		             if ($message = remote_paramload('SHCART','addresswaystext',$this->path)) {
		               $out .= $message;
					   $subtokens[] = $message;
					 }
					 else
					   $subtokens[] = '&nbsp;';
					   
					   
					 if ($token) {
					    $s1 = $this->get_selection_text('addressway',$subtokens,1,localize('_DELIVADDRESS',getlocal()),true);	
						if ($s1) { 
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy
							$tokens[] = '&nbsp;';//dummy
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else
						$out = $this->get_selection_text('addressway',$subtokens,1,localize('_DELIVADDRESS',getlocal()));	    
					   
		             //$out .= "<hr>";						   
		             break;
	         case 3 :					 	 
		     case 2 :$myiway = GetParam("addressway")?GetParam("addressway"):GetSessionParam("addressway");
                     //$out = localize('_DELIVADDRESS',getlocal()) . " : "; 
					 //$out .= $myway?str_replace('<hr>','',$myiway):localize('_NO',getlocal());

                     SetSessionParam('addressway',$myiway);		
					 
					 $subtokens[] = $myiway;
					 $subtokens[] = '&nbsp;';
					 $subtokens[] = '&nbsp;';
					 
					 if ($token) {
					    $s1 = $this->get_selection_text('addressway',$subtokens,1,localize('_DELIVADDRESS',getlocal()),true);	
						if ($s1) { 
							$tokens[] = $s1;
							$tokens[] = '&nbsp;';//dummy
							$tokens[] = '&nbsp;';//dummy
						}	
						else 
						    $tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('addressway',$subtokens,1,localize('_DELIVADDRESS',getlocal()));	
					 					 
		             //$out .= "<hr>";						 			 
			         break;

			 default : $tokens[] = '&nbsp;';
					   $tokens[] = '&nbsp;';
					   $tokens[] = '&nbsp;';
			           $out = null;					  	 
			 	 
	   }
	   
	   return ($token ? $tokens : $out);
	}
	
	function customerway($token=null) {
		   	   
		
       switch ($this->status) {
			 case 1 :
			   	      if (defined('SHCUSTOMERS_DPC')) {
					    //echo 1;
						$combo=1;
	                    if ($cus = GetGlobal('controller')->calldpc_method('shcustomers.showcustomers use customerway+'.$combo)) {
						  if ($combo) {
						    $choice = $cus;
						  }
						  else {
						    $pp = new multichoice('customerway',str_replace('<COMMA>',',',$cus),null,false);
					        $con = $pp->render();
					        unset($pp);						
							
							$choice = $con;
						  }
						}	
						$addnewlink = GetGlobal('controller')->calldpc_method('shcustomers.addnewcustomerlink use shcart>cartview');    

						$subtokens[] = $choice;
						$subtokens[] = $addnewlink;
						
 						  
   		                if ($message = remote_paramload('SHCART','customerwaystext',$this->path)) {
		                  //$out .= $message;		
						  $subtokens[] = $message;
						}
						else
						  $subtokens[] = '&nbsp;';
						  
					    if ($token) {
							$s1 = $this->get_selection_text('customerway',$subtokens,1,localize('_CUSTOMERSLIST',getlocal()),true);	
							if ($s1) { 
								$tokens[] = $s1;
								$tokens[] = '&nbsp;';//dummy
								$tokens[] = '&nbsp;';//dummy
							}	
							else 
								$tokens =  $subtokens;
					    }
					    else							  
							$out = $this->get_selection_text('customerway',$subtokens,1,localize('_CUSTOMERSLIST',getlocal()));	  
						  
		                //$out .= "<hr>";							  				
					 }	 
		             break;
	         case 3 :					 	 
		     case 2 :$mycway = GetParam("customerway")?GetParam("customerway"):GetSessionParam("customerway");
                     //$out = localize('_CUSTOMERSLIST',getlocal()) . " : " . $myiway; //NOT VIEW
		 	         //hold param
					 //echo $mycway,'>';
                     SetSessionParam('customerway',$mycway);	
					 
					 //$subtokens[] = $mycway;
					 $subtokens[] = GetGlobal('controller')->calldpc_method('shcustomers.showcustomers use customerway++++'.$mycway);
					 $subtokens[] = '&nbsp;';
					 $subtokens[] = '&nbsp;';
					 
					 if ($token) {
							$s1 = $this->get_selection_text('customerway',$subtokens,1,localize('_CUSTOMERSLIST',getlocal()),true);	
							if ($s1) { 
								$tokens[] = $s1;
								$tokens[] = '&nbsp;';//dummy
								$tokens[] = '&nbsp;';//dummy
							}	
							else 
								$tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('customerway',$subtokens,1,localize('_CUSTOMERSLIST',getlocal()));	
					 
		             //$out .= "<hr>";						 				 
			         break;

			 default : $tokens[] = '&nbsp;';
			           $tokens[] = '&nbsp;';
					   $tokens[] = '&nbsp;'; 
			           $out = null;					  	 
			 	 
	   }
	   
	   return ($token ? $tokens : $out);
	}	
	
	//override
	function comments($token=null) {
	       /*$mylan = getlocal();
	       $a = localize('_SXOLIA',getlocal());	
		   $mysxolia = remote_arrayload('SHCART','comments',$this->path); 
		   //text in config
		   $say = $mysxolia[$mylan]; 
		   //text in project dir file		   
		   $say.= @file_get_contents($this->path.'sxolia'.$mylan.'.txt'); 
		   //html text in cp
		   //.....*/
	
           switch ($this->status) {
			 case 1 :	   
                     /*$sxolia = "<input style=\"width:100%\" type=\"text\" name=\"sxolia\" maxlenght=\"255\" value=\"$this->sxolia\">"; 		   
                     if ($say) {
			           $sxolia .= '<br/>' . $say;
			         }*/
					 //$hastitle = 0;
					 $subtokens[] = "<input class=\"myf_input\" type=\"text\" name=\"sxolia\" maxlenght=\"255\" value=\"$this->sxolia\">";
					 
					 if ($token) {
						$s1 = $this->get_selection_text('sxolia',$subtokens,1,localize('_SXOLIA',getlocal()),true);	
						if ($s1) 
							$tokens[] = $s1;
						else 
							$tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('sxolia',$subtokens,1);						 
					 
		             //$out .= "<hr>";						  
		             break;
	         case 3 ://echo '>',GetSessionParam("sxolia");
			         /*$sxolia = GetSessionParam("sxolia");
					 $out = localize('_SXOLIA',getlocal()) . " : " . $sxolia; */
					 
					 $subtokens[] = GetSessionParam("sxolia");
					 
					 if ($token) {
						$s1 = $this->get_selection_text('sxolia',$subtokens,1,localize('_SXOLIA',getlocal()),true);	
						if ($s1) 
							$tokens[] = $s1;
						else 
							$tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('sxolia',$subtokens,1);	
					 
					 //SetSessionParam('sxolia',null);//<<<<<<<<<<<<<<<<< why
		             //$out .= "<hr>";	
			         break;
		     case 2 :/*$sxolia = GetParam("sxolia")?GetParam("sxolia"):GetSessionParam("sxolia");
			         if ($say) {
			           $sxolia .= '<br/>' . $say;
			         }	
			         $out = localize('_SXOLIA',getlocal()) . " : " . $sxolia; 
					 */
					 $sxolia = GetParam("sxolia")?GetParam("sxolia"):GetSessionParam("sxolia");
					 $subtokens[] = $sxolia;
					 
					 if ($token) {
						$s1 = $this->get_selection_text('sxolia',$subtokens,1,localize('_SXOLIA',getlocal()),true);	
						if ($s1) 
							$tokens[] = $s1;
						else 
							$tokens =  $subtokens;
					 }
					 else					 
						$out = $this->get_selection_text('sxolia',$subtokens,1);	
					 
     		 	     //hold param
                     SetSessionParam('sxolia',$sxolia);
		             //$out .= "<hr>";						 
			         break;		     
					 
			 default : 
					   $tokens[] = '&nbsp;';
			           $out = null;
		   }	 
		   
		   return ($token ? $tokens : $out); 	
	}	
	
	//...include form !!!!
	function xixuserway($token=null) {
		if (!defined('XIXUSER_DPC')) return false;
	
        switch ($this->status) {
		    case 1  :		
					   if ($token) 
						  $tokens[] = GetGlobal('controller')->calldpc_method('xixuser.show_xixuser');	
					   else
						  $out = GetGlobal('controller')->calldpc_method('xixuser.show_xixuser');		
				   	   break;
            case 2  :
            case 3  :			
			default : 
					   $tokens[] = '&nbsp;';
			           $out = null;
		}	 
		   
		return ($token ? $tokens : $out); 						
	}	
	
	function get_selection_text($id,$params=null,$hastitle=null,$title=null,$must_template=false) {
	   $mytitle = $title?$title:localize('_'.strtoupper($id),getlocal());//$id;
	   $mylan = getlocal();
	   $template = $id . ".htm";
	   $tmpl = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ;
	   //echo $tmpl,'<br/>';
	   //text is template file		
	   if (!is_readable($tmpl)) {
	   
	       //in case of token ..dont return inline html
	       if ($must_template)
			    return;
	   
	       if (!empty($params))
	         $text_params = implode('<br/>',$params); 
	   
	       //text in project dir file	
	       if (!$ret = @file_get_contents($this->path.$id.$mylan.'.txt')) {
		   
		     if (!$ret = remote_arrayload('SHCART',$id,$this->path)) {
			    $ret = $mytitle;//localize('_'.strtoupper($id),getlocal());

				if ($hastitle) {
				  $mtitle = /*localize('_'.strtoupper($id),getlocal())*/$mytitle . " : ";		
                  $data1[] = $mtitle;
                  $attr1[] = "left;20%";	
	              $data1[] = $text_params;// strlen(trim($text_params))>0?$text_params .'<br/>'. $ret : $ret;//no extra text
                  $attr1[] = "left;80%";		   
                  $myway = new window('',$data1,$attr1);
                  $out = $myway->render(" ::100%::0::group_article_body::center;100%;::");
		          unset ($myway);					  
				}
				else 
				  $out = $text_params .'<br/>'. $ret;  		
			 } 
		     else {//text in config
		        $ret = $ret[$mylan];
				if ($hastitle) {
				  $mtitle = /*localize('_'.strtoupper($id),getlocal())*/$mytitle . " : ";		
                  $data1[] = $mtitle;
                  $attr1[] = "left;20%";	
	              $data1[] = strlen(trim($text_params))>0?$text_params .'<br/>'. $ret : $ret;
                  $attr1[] = "left;80%";		   
                  $myway = new window('',$data1,$attr1);
                  $out = $myway->render(" ::100%::0::group_article_body::center;100%;::");
		          unset ($myway);						  
				}  
				else  
				  $out = $text_params .'<br/>'. $ret;
		     }		
		   }
		   else {
		   
			 if ($hastitle) {
			   $mtitle = /*localize('_'.strtoupper($id),getlocal())*/$mytitle . " : ";		
               $data1[] = $mtitle;
               $attr1[] = "left;20%";	
	           $data1[] = strlen(trim($text_params))>0?$text_params .'<br/>'. $ret : $ret;
               $attr1[] = "left;80%";		   
               $myway = new window('',$data1,$attr1);
               $out = $myway->render();
		       unset ($myway);				   
			 }  
			 else 	  
			   $out = $text_params .'<br/>'. $ret;		   
		   }
		   
		   //$out .= "<hr>";			   
	   }
	   else {//template
		  $mytemplate = file_get_contents($tmpl);
		  //$ret = $this->combine_template($mytemplate,$params);	   
		  $out = $this->combine_tokens($mytemplate,$params,true);//recusrion ?
	   }
	   
	   return ($out);	   	    	
	}	
	
	function calculate_shipping() {
	
	  $ways = remote_arrayload('SHCART','roadways',$this->path);
	  //print_r($ways);
	  //echo 'a';
	  if (!$ways) return null;	
	  //echo 'b';
	  $_sway = GetParam("roadway") ? GetParam("roadway") : GetSessionParam("roadway");	  
	  $shipway = getlocal() ? str_replace('/'.$_sway,'',$ways[0]) : array_pop(explode('/',$ways[0])); 
      /*	  
      $shipway = GetParam("roadway") ? //no table in greek
	             (getlocal() ? //if in greek, get the english descr
				  str_replace('/'.GetParam("roadway"),'',$ways[0]) ://standart english descr 0array ??? 
				  GetParam("roadway")
				  ) :
	             (GetSessionParam("roadway") ? 
				  GetSessionParam("roadway") : 
				  array_pop(explode('/',$ways[0]))//standart english descr ??? 0array
				  );	*/
	  //echo GetParam("roadway"),'b',$shipway;
	  if ($this->supershipping) {
	    //echo 'c';
	    $cartweight = $this->weightCart();
	    //echo '>',$cartweight; 
		
		$this->shippingcost = $this->calc_supershipping($cartweight,$shipway);
		SetSessionParam('shipcost',$this->shippingcost);
		//echo 'ship calc result:',$this->shippingcost;
		return ($this->shippingcost);
		 
	  }
	  else {//standart method	
		//echo 'd';
		foreach ($ways as $wid=>$way) {
			if (stristr($way,$shipway)) {
				$id = $wid;
			}
		}		
		$rfile = 'roadway'.$id.'.ini';
		//echo '>',$rfile;
		$file = $this->path . $rfile; //strtolower($shipway) . '.ini';
		if (is_readable($file)) {
			$data = parse_ini_file($file,true);//,'INI_SCANNER_RAW');
			//print_r($data);
		
			$method = $this->shipcalcmethod[$id];//per ship selection
		
		    //has been done...ERROR 500 becouse of func call eatch other
			//$this->quick_recalculate();	//to update totals and prices..	
		
			switch ($method) {
		
				case 2 ://use weight as param..invoke sql
		          break;
		
				case 1 ://use items num as param
		          $selector = floatval($this->qtytotal);
		          break;
		
				case 0 :
				default://using price as param
		          $selector = floatval($this->total);
			}
		
			//echo $selector,'>';
			foreach ($data as $shipkey=>$shiparams) {
				$rcost = floatval($shipkey);
				//echo '<br>',$selector,'<=',$rcost;
				if ($selector<=$rcost){
					$result = floatval($shiparams['cost']);
					break;
				}  
			}
		
			$this->shippingcost += $result;
			//echo $this->shippingcost,'>';
			SetSessionParam('shipcost',$this->shippingcost);
		}
	  }//method
	  return ($result);
	}


    function calculate_totals() {
       
       //if in recalc procedure every time must be reset values
       //else if status = 3 leave as is to process paypal or other transaction
       /*if ((($this->autopay) && ($this->status<2) ) ||
           ((!$this->autopay) && ($this->status<3) )) {
         $this->total = 0;
         $this->myfinalcost = 0;
       }*/

       if (defined(_CURRENCYF_)) $cf = new CurrencyFormatter();

       if (defined(_CURRENCYF_)) $data[] = $cf->format($this->total,"GRD") . $this->moneysymbol;
	                        else $data[] = number_format(floatval($this->total),$this->dec_num,',','.');


	   if ($this->discount) {
		   $this->mydiscount = ($this->total*$this->discount)/100;
	   }
	   else 
	     $this->mydiscount = 0;
		 
	   if ($this->shippingcost) {
	     $this->myshippingcost = $this->shippingcost;
	   }		 
	   
	   if (($this->tax) && ($this->status)) {//($this->is_reseller)) {//is or not reseller calculate tax except if status <3
           $this->mytaxcost = (($this->total-$this->mydiscount)*$this->tax)/100;//+$this->myshippingcost
	   }
	   else
	     $this->mytaxcost = 0;

	   $this->myfinalcost = ($this->total+$this->mytaxcost+$this->myshippingcost)-$this->mydiscount;
	   
	   //SetSessionParam('subtotal',$this->total);
	   //SetSessionParam('total',$this->myfinalcost);	   
	   
       if (defined(_CURRENCYF_)) 
	     $ret = $cf->format($this->myfinalcost,"GRD");
	   else 
	     $ret = number_format(floatval($this->myfinalcost),$this->dec_num,',','.');
							
	   //echo $this->myfinalcost,'-',$this->total;						

	   return ($ret);
    }

    function print_button() {
	    $aftersubmitgoto = remote_paramload('SHCART','aftersubmitgoto',$this->path);
	
	    $title = localize('_TRANSPRINT',getlocal());
		//$translink = seturl("t=printcart&trid=".$this->transaction_id);
		//NO NEED ID FOR SECURITY REASON USE $this->printout
		$translink = 'printcart/';
		//$ret = "<a href=\"$translink\"><input type=\"button\" class=\"myf_button\" value=\"".$title."\" /></a>";
		$ret = $this->myf_button(localize('_TRANSPRINT',getlocal()),$translink,'_TRANSPRINT');
	    
	    //VIEW TRANSACTIONS
		if ((defined('SHTRANSACTIONS_DPC'))) {
			//$out .= GetGlobal('controller')->calldpc_method('shtransactions.viewTransactions');
			$lnk1 = 'trview/';//seturl('t=transview&pl=20');//,localize('_TRANSLIST',getlocal()));
			$trans_button = '&nbsp;'.$this->myf_button(localize('_TRANSLIST',getlocal()),$lnk1);
		} 			
		
		//nop new window popup anymore		
		return ($ret . $trans_button);
	    /*
        if ($this->print_button) {
		
          if (iniload('JAVASCRIPT')) {

	            $params = seturl("t=printcart&trid=".$this->transaction_id) . ";Order;scrollbars=yes,width=800,height=600;";
				$js = new jscript;
	            $jlink = GetGlobal('controller')->calldpc_method('javascript.JS_function use js_openwin+'.$params);
                unset ($js);

          }		
	      //"<input type=\"image\" src=\"".$this->print_button."\" name=\"FormAction\" value=\"printcart\">&nbsp;";
		  $ret = seturl("t=".$aftersubmitgoto,$this->print_button,0,$jlink);	
		  
		  
	    }		
        else {  

          if (iniload('JAVASCRIPT')) {
  	            $plink = "<A href=\"" . seturl("t=".$aftersubmitgoto) . "\"";
	            //call javascript for opening a new browser win for the img
	            $params = seturl("t=printcart&trid=".$this->transaction_id) . ";Order;scrollbars=yes,width=800,height=600;";

				$js = new jscript;
	            $plink .= GetGlobal('controller')->calldpc_method('javascript.JS_function use js_openwin+'.$params);
				          //comma values includes at params ?????
				          //$js->JS_function("js_openwin",$params);
                unset ($js);

	            $plink .= ">";
           }
	         //else NOT because exit pay process
                //$plink = "<A href=\"" . seturl("t=printcart") . ">";

           $ret = $plink . localize('_TRANSPRINT',getlocal()) . "</A>";
		   
		   
		 }
		 
         return ($ret);*/
    }
	
     //TO BE DELETED
    //called by the paypal,piraeus ... procesor at success to finalize cart //..also in viercart step 3
    function finalize_cart($transno=null) {//, $tokensout=null) {
 
        //$this->status = 3;//already 3 in cartview but in case of load cart in payengines..must be set
        $out = $this->finalize_cart_success($transno);//...moved down
		
		return ($out);
		/*
        //dummy tokens
	    $tokens[] = null;
		$tokens[] = null;

        //print $this->transaction_id;
		if (($transno) && (!$this->mailerror)) {
	          if ($this->mycarttemplate) { 
			    $tokens[] = $this->finalize_cart_success($transno);
				$tokens[] = $this->loopcartdata;
				$tokens[] = $this->looptotals;	
                $tokens[] = $this->print_button();										
			  }	
			  else { 
		        $out .= $this->finalize_cart_success($transno);				
			  }
		}
		else {
	          if ($this->mycarttemplate) {			  
			    $tokens[] = $this->finalize_cart_error($transno);
				$tokens[] = $this->loopcartdata;
				$tokens[] = $this->looptotals;
			  }	
			  else		  
		        $out.= $this->finalize_cart_error($transno);
		}

  
        if ($tokensout) {//called from this->viewcart when simple order
		  //reset global params
          SetSessionParam('TransactionID',0);
          SetSessionParam('cartstatus',0);
	      $this->status = 0;		
		
	      return ($tokens);
		}  
		else {//called from payengines when return
		  //load cart again because of submit reset when goto payengines
		  //$this->loadcart($transno);
		  //$this->status = 3;//submited and return
		  
	      //template
	      $cart_template= "shcart.htm";
	      $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
		  //echo '>',$t;
	      if (($cart_template) && is_readable($t)) {
	        //print_r($tokens);
	        $out .= $this->combine_tokens(file_get_contents($t),$tokens);
	      }		
		  
		  //reset global params
          SetSessionParam('TransactionID',0);
          SetSessionParam('cartstatus',0);
	      $this->status = 0;
				  	
          return ($out);
		} */
		 
    }

	function finalize_cart_success($transno=null) {
	
	    //template
	    $cart_template= "shcartsuccess.htm";
	    $template = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
	    //echo $template;
	    if (is_readable($template)) {
	     $tmpl=1;
		 $tokens = array();
		 $mycarttemplate = file_get_contents($template);
	    }		
	
	    //print_r($_SESSION);
	    $aftersubmitgoto = remote_paramload('SHCART','aftersubmitgoto',$this->path);
        $goto = $aftersubmitgoto?$aftersubmitgoto:GetSessionParam('aftersubmitgoto');
	    //in case of paypal return
	    $tr_id = $this->transaction_id?$this->transaction_id:$transno;
	    if ($tmpl)
		  $tokens[] = $tr_id; 	

        //$orderdataprint = GetSessionParam('orderdataprint');
        $payway = GetParam('payway')?GetParam('payway'):GetSessionParam('payway');
        $roadway = GetParam('roadway')?GetParam('roadway'):GetSessionParam('roadway');
        $invway = GetParam('invway')?GetParam('invway'):GetSessionParam('invway');	   
        $addressway = GetParam('addressway')?GetParam('addressway'):GetSessionParam('addressway');	   
        $sxolia = GetParam('sxolia')?GetParam('sxolia'):GetSessionParam('sxolia');		   

        //send message
	    //$out .= setTitle(localize('_ENDOK',getlocal()) . $this->transaction_id);
	    $msg = "<H3>".localize('_ENDOK',getlocal()) . $tr_id . "</H3>";
	    $printout .=  setTitle(localize('_TRANSNUM',getlocal()) . ":" . $this->transaction_id);
	    $printbutton = $this->print_button();//no popup

        
		//what to say in link goto when cart success (depends on ...site)
		$myst = remote_paramload('SHCART','onsuccessgototitle',$this->path);//echo $myst,'>';
        $onsuccess = explode('/',$myst); //echo getlocal(); //print_r($onsuccess);
		$onsuccesstitle = $onsuccess[getlocal()];
		if ($onsuccesstitle) {
		  $goto_title = $onsuccesstitle;//localize($onsuccesstitle,getlocal());
		}
		else
          $goto_title = localize('_HOME',getlocal());

		$gobutton =  $goto_title;//seturl("t=$goto",$goto_title);
				
		if ($tmpl) {
		  $tokens[] = $this->print_button();//$printbutton;		
		  $tokens[] = $gobutton; 				 
		}  
				
		$msg .= "<br />" . "<H3>" . $printbutton . '<br>' .$gobutton . "</H3>";
		
		if ($tmpl) {
		  $out .= $this->combine_tokens($mycarttemplate,$tokens,true);
		}		
		else
		  $out .= $this->send_template_message("sencarter.tpl",$msg);		

		return ($out);
	}

	function finalize_cart_error($transno=null) {
	    //template
	    $cart_template= "shcarterror.htm";
	    $template = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$cart_template) ;
	    if (is_readable($template)) {
	     $tmpl=1;
		 $tokens = array();
		 $mycarttemplate = file_get_contents($template);
	    }		

	    //in case of paypal return
	    $tr_id = $this->transaction_id?$this->transaction_id:$transno;

		//get error message
		if ($this->mailerror) {
			    //change status of transaction
                if (defined('SHTRANSACTIONS_DPC')) {
		          GetGlobal('controller')->calldpc_method('shtransactions.setTransactionStatus use '.$this->transaction_id."+3");
				}
			    $error = $this->mailerror;//echo $error;
		}

		if (!$this->transaction_id) 
			$error .= "/Invalid transaction id.";

		$msg = localize('_TRANSERROR',getlocal()) . "&nbsp;" .
		    seturl("t=cmail&department=3&subject=transaction&body=".urlencode($error),$this->carterror_mail);					 

		if ($tmpl) {
		  $tokens[] = $msg; 			
		  $tokens[] = $error;
		  $out .= $this->combine_tokens($mycarttemplate,$tokens,true);
		}		
		else	  
		  $out .= $this->send_template_message("sencarter.tpl",$msg." ($error)");

		  return ($out);
	}
	
	function send_template_message($templatename,$message,$forceencode=null) {
	
		  $template = paramload('SHELL','prpath') . $templatename;
		  
		  //convert to utf8
		  if ((stristr($charset,'utf8')) || (stristr($charset,'utf-8'))) {
		    $myenc_source = $forceencode ? $forceencode : $this->s_enc;
		    $mydata = file_get_contents($template);
			$fdata = @mb_convert_encoding($mydata,$this->t_enc,$myenc_source);
		  }
		  else
		    $fdata = file_get_contents($template);
		  
		  $out .= str_replace("##_LINK_##",$message,$fdata);
		  
		  return ($out);	
	}

	function read_policy() {

	   //override
	   $this->discount = $this->get_user_price_policy($this->userid);
	   //SetInfo($this->senpercentoff."% off");

	}

	function get_user_price_policy($leeid=null) {
	   $db = GetGlobal('db');
	   $reseller = GetSessionParam('RESELLER');

	   if ($this->leeid!=null)
	     $id = $leeid;
	   else
	     $id = decode(GetSessionParam('UserID'));

	   if ($id) {

	     $sSQL = "select EKPTOSH from PPOLICY where CODE2=" . $id ;
		 //echo $sSQL;
         $result = $db->Execute($sSQL);
		 //print_r($result->fields);

		 if ($percent = $result->fields[0]) {
           //override
		   return ($percent);
		 }
		 else { //get default price policy

		   if ($reseller=='true') {

		     /*$sSQL = "select EKPTOSH from PANIK_VIEW_PPOLICY where LEEID='' AND LEENAME=''" . $id;
		     echo $sSQL;
             $result = $this->sen_db->Execute($sSQL);
			 print_r($result);
		     return ($result->fields[0]);*/

			 return ($this->discount);//price from config file
		   }
		   else
		     return 0;
		 }

	   }

	   return false;
	 }	

	//override to stop cart header view
	function headtitle() {
	}
	
    //override
	function head($token=null) {	
	
      $ret = cart::head();
	  
      //if ($out = $this->customerway($token))
		// $ret .= $out . "<hr>";		  
		 
	  return ($ret);
	}	
	
	
	//override
	function quickview($ret_tokens=false) {
	  
	  $cart_url = seturl("t=viewcart",$this->title);

	  //$ret = cart::quickview();
      if ($this->notempty()) {
	  
	    if (($this->mytemplate2) || ($ret_tokens)) {
		   //$ret = 'quickcartview-aaa';
		   $ret = '';
           foreach ($this->buffer as $prod_id => $product) {

		     if (($product) && ($product!='x')) {
			 
			   $toks = array();//reset line
			 
               $aa+=1;
		       $param = explode(";",$product); //echo $param[8],"<br>";
		       $cat = $param[4];//urlencode($param[4]);
			   $itemdescr = $param[1];//urlencode($param[1]);
               $id = $param[0];			   
		       $toks[] = $prod_id+1;//$param[4];//urlencode($param[4]);
			   $toks[] = $id;//$param[1];//urlencode($param[1]);
	           $toks[] = seturl("t=kshow&cat=$cat&id=".$id , $itemdescr,null,null,null,true);//rewrite
			   $toks[] = number_format($param[8],$this->dec_num,',','.');
			   $toks[] = $param[9];
			   $sum = floatval($param[8])*floatval($param[9]);//$param[11];
			   $toks[] = number_format($sum,$this->dec_num,',','.') . $this->moneysymbol;
			   
			   if ($ret_tokens) {//call from shcart to email invoice
			     //cart item line as array element of array
			     $rtokens[] = (array) $toks;
			   }	 
			   else	
			     $ret .= $this->combine_tokens($this->mytemplate,$toks,true);
			 }  
		   }

		   //call from shcart to email invoice 
           if ($ret_tokens)
			return ($rtokens);
			
		}
		else {
            $mycart = new browse($this->buffer);
	        $ret = $mycart->render(2002,0,$this);
	        unset ($mycart);

		    //$out .= $this->foot();
		    /* $data = seturl("t=viewcart",localize('_CART',getlocal()) );
            $mytitle = new window('',$cart_url);
            $ret .= $mytitle->render(" ::100%::0::group_form_foottitle::right;100%;::");
            unset ($mytitle);*/
		}				 
	  }
  	  //else
		//$ret = localize('_EMPTY',getlocal());

	  if ($this->mytemplate2) {
	    $out = $this->combine_template($this->mytemplate2, $ret, $this->myquickcartfoot());
	  }
	  else {
	    $myarticle = new window($cart_url,$ret);
	    $out = $myarticle->render("center::100%::0::group_article_selected::left::0::0::");
	    unset ($myarticle);
	  }

	  return ($out);
	}

    function quick_recalculate($update_from_db=null) {
	
	   $p_returned = null;	   
	   
	   if (($this->liveupdate) || ($update_from_db)) {
	     if ((defined('SHKATALOGMEDIA_DPC')))
	       $p_returned = GetGlobal('controller')->calldpc_method('shkatalogmedia.update_prices use '.serialize($this->buffer));
		 elseif ((defined('SHKATALOG_DPC'))) 
		   $p_returned = GetGlobal('controller')->calldpc_method('shkatalog.update_prices use '.serialize($this->buffer));
		 else  
		   $p_returned = null;
		 //echo 'update from db';  
		 //print_r($p_returned);
	   }		
	   
	   $this->read_policy();		   
	   
	   $this->qty_total = 0;
	   SetSessionParam('qty_total',0);
	   $this->total = 0;
	   
	   $counter = 0;
       foreach ($this->buffer as $prod_id => $product) {
		 if (($product) && ($product!='x')) {
           
		   $counter+=1;
           $param = explode(";",$product);
		   //print_r($param);
		   $this->qty_total += intval($param[9]);
		   $qty = $param[9];
		   $p = floatval(str_replace(',','.',$param[8]));
		   $this->total = $this->total+($qty*$p); //echo $qty,'-',$p,'-',$param[8],'<br>';
		   //echo $p;
		   //echo $param[9],'+';
		 }
	   }
	   
	   
	   
	   //echo '>',$this->qty_total;
	   if ($this->itemscount)
	     SetSessionParam('qty_total',$counter);//items count
	   else
	     SetSessionParam('qty_total',$this->qty_total);//qty count
		 
	   $this->colideCart();	 
	   $this->calculate_shipping();			 
		 
	}

	
	//override
	function foot($token=null) {
	   $template='shcartfooter.htm';
	   $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ;
	   //echo $t,'>';
	   if (/*($token) &&*/ is_readable($t)) {
			$mytemplate = @file_get_contents($t);
			$tokout = 1; 
	   }		
	
	   //echo 'sttatus:',$this->status;
	   //echo 'foottotal:',$this->total;
	   $this->quick_recalculate();

       if (defined(_CURRENCYF_)) $cf = new CurrencyFormatter();
	   
	   if ($tokout) {
			$_ttc =  (defined(_CURRENCYF_)) ? 
					$cf->format($this->total,"GRD"). $this->moneysymbol : 
					number_format(floatval($this->total),$this->dec_num,',','.'). $this->moneysymbol;

			$tokens[] = $_ttc; 
			//echo $_ttc;			   
	   }
       else {
			$data[] = "<b>" . localize('_TOTAL',getlocal()) . " :</b>";
			$attr[] = "right;75%";
			$data[] = "&nbsp;";
			$attr[] = "right;10%";	   
			$data[] = $this->qtytotal;
			$attr[] = "right;15%";

	   
			if (defined(_CURRENCYF_)) 
				$data[] = $cf->format($this->total,"GRD") . $this->moneysymbol;
			else 
				$data[] = number_format(floatval($this->total),$this->dec_num,',','.') . $this->moneysymbol;
			$attr[] = "right;15%";

			$mytitle = new window('',$data,$attr);
			$out = $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data);
			unset ($attr);
	   }
       //echo $this->status,'>';  
       if (!$this->status) {	
	     
	     SetSessionParam('subtotal',$this->total);   
	     SetSessionParam('total',$this->total);	//the same	 
	   
	     /*if (($this->is_reseller) || (!$this->showtaxretail))  {
           //tax message
	       $out .= "<br>";
	       $warning1 = new window('',localize('_MSG16',getlocal()));
	       $out .= $warning1->render(" ::100%::0::group_form_foottitle::center;100%;::");
	       unset($warning1);
		 }*/
		 
	     if ((($this->tax) && ($this->is_reseller)) ||
		     (($this->tax) && (!$this->showtaxretail))) {
			 
		   $this->mytaxcost = (($this->total-$this->mydiscount)*$this->tax)/100;//($this->total*$this->tax)/100;//+$this->shippingcost
		   
           if ($tokout) {
              $_txcost = (defined(_CURRENCYF_)) ?
						 $cf->format($this->mytaxcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->mytaxcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_txcost;
           }
           else {		   
			$data2[] = "<B>" . localize('_TAX',getlocal()) . " :</B>";
			$attr2[] = "right;75%";
			$data2[] = "<B>" . $this->tax ."%</B>";
			$attr2[] = "right;10%";
			if (defined(_CURRENCYF_)) $data2[] = $cf->format($this->mytaxcost,"GRD") . $this->moneysymbol;
	                            else $data2[] = number_format(floatval($this->mytaxcost),$this->dec_num,',','.') . $this->moneysymbol;
			$attr2[] = "right;15%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);	
	 	   }		 	   		   
		 }
		 elseif ($tokout) $tokens[] = '';	
		 
		 //fill array with empty tokens when not all fields are active
		 for ($x=count($tokens);$x<26;$x++) //6<<include details
		    $tokens[] = '';		 
	   }
	   else {
		 
	     if ($this->discount) {
           if ($tokout) {
              $_tdisc = (defined(_CURRENCYF_)) ?
						 $cf->format($this->discount,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->discountt),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_tdisc;
           }		 
		   else { 
			$data2[] = "<B>" . localize('_DISCOUNT',getlocal()) . " :</B>";
			$attr2[] = "right;75%";
			$data2[] = "<B>" . $this->discount ."%</B>";
			$attr2[] = "right;10%";
			$this->mydiscount = ($this->total*$this->discount)/100;
			if (defined(_CURRENCYF_)) $data2[] = $cf->format($this->discount,"GRD") . $this->moneysymbol;
	                            else $data2[] = number_format(floatval($this->discount),$this->dec_num,',','.') . $this->moneysymbol;
			$attr2[] = "right;15%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);
		   }
		 } 
         elseif ($tokout) $tokens[] = '';		 
		  	 		 	   
	     if ((($this->tax) && ($this->is_reseller)) ||
		     (($this->tax) && (!$this->showtaxretail))) {
			
           $this->mytaxcost = (($this->total-$this->mydiscount)*$this->tax)/100;//($this->total*$this->tax)/100;//+$this->shippingcost
			
           if ($tokout) {
              $_txxcost = (defined(_CURRENCYF_)) ?
						 $cf->format($this->mytaxcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->mytaxcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_txxcost;
           }
           else {			 
		   
			$data2[] = "<B>" . localize('_TAX',getlocal()) . " :</B>";
			$attr2[] = "right;75%";
			$data2[] = "<B>" . $this->tax ."%</B>";
			$attr2[] = "right;10%";
			if (defined(_CURRENCYF_)) $data2[] = $cf->format($this->mytaxcost,"GRD") . $this->moneysymbol;
	                            else $data2[] = number_format(floatval($this->mytaxcost),$this->dec_num,',','.') . $this->moneysymbol;
			$attr2[] = "right;15%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);	
           }		   
		 }
		 elseif ($tokout) $tokens[] = '';	
		 
		 //echo 'init:',$this->shippingcost;
	     if ($this->shippingcost) { 
		   //echo 'sc:',$this->shippingcost;
		   
           if ($tokout) {
              $_shcost = (defined(_CURRENCYF_)) ?
						 $cf->format($this->shippingcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->shippingcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = ($this->supershipping) ? seturl('t=sship',$_shcost) : $_shcost;
           }
           else {		   
		   
			if ($this->supershipping) {//link
		     //echo 'ss:',$this->supershipping;
             $data2[] = "<B>" . seturl('t=sship',localize('_SHIPCOST',getlocal())) . " :</B>";		   
			}	 
			else
             $data2[] = "<B>" . localize('_SHIPCOST',getlocal()) . " :</B>";
			 
			$attr2[] = "right;75%";
			$data2[] = "&nbsp;";
			$attr2[] = "right;10%";
			if (defined(_CURRENCYF_)) {
		     if ($this->supershipping)//link		    
		       $data2[] = seturl('t=sship',$cf->format($this->shippingcost,"GRD") . $this->moneysymbol);
			 else 
			   $data2[] = $cf->format($this->shippingcost,"GRD") . $this->moneysymbol; 
			}	 
			else {
		     if ($this->supershipping)//link			   
		       $data2[] = seturl('t=sship',number_format(floatval($this->shippingcost),$this->dec_num,',','.') . $this->moneysymbol);
			 else
		       $data2[] = number_format(floatval($this->shippingcost),$this->dec_num,',','.') . $this->moneysymbol;			   
			}	 
			$attr2[] = "right;15%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);
           }		   
		 }
         elseif ($tokout) $tokens[] = '';			 
		  		 
		 //final cost
		 if (($this->discount) || ($this->shippingcost) || ($this->tax)) {
		 
		   $finalcost = ($this->total+$this->mytaxcost+$this->shippingcost)-$this->mydiscount;
		 
           if ($tokout) {
              $_ffcost = (defined(_CURRENCYF_)) ?
						 $cf->format($finalcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($finalcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_ffcost;
			  //echo $_ffcost;
           }
           else {			 
			$data3[] = "<B>" . localize('_FCOST',getlocal()) . " :</B>";
			$attr3[] = "right;75%";
			$data3[] = "&nbsp;";
			$attr3[] = "right;10%";
	       
			if (defined(_CURRENCYF_)) $data3[] = $cf->format($finalcost,"GRD") . $this->moneysymbol;
	                            else $data3[] = number_format(floatval($finalcost),$this->dec_num,',','.') . $this->moneysymbol;
			$attr3[] = "right;15%";

			$mytitle = new window('',$data3,$attr3);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data3);
			unset ($attr3);	
		   }
		   
	       SetSessionParam('subtotal',$this->total);   
	       SetSessionParam('total',$finalcost);	//the final cost			   	 
		 }
		 elseif ($tokout) $tokens[] = '';	
		 
		 //fill array with empty tokens when not all fields are active
		 //for ($x=count($tokens);$x<6;$x++)
		   //  $tokens[] = '&nbsp;';
		 
		 if ($tokout) {
		    //$tokens[] =$this->customerway();
		    foreach ($this->customerway($tokout) as $t=>$tt)
				$tokens[] = $tt;
			//$tokens[] =$this->invoiceway();
			foreach ($this->invoiceway($tokout) as $t=>$tt)
				$tokens[] = $tt;
			//$tokens[] =	$this->roadway();
			foreach ($this->roadway($tokout) as $t=>$tt)
				$tokens[] = $tt;
			//$tokens[] =	$this->payway();
			foreach ($this->payway($tokout) as $t=>$tt)
				$tokens[] = $tt;
				
			if (!$nodeliv = remote_paramload('SHCART','nodelivery',$this->path)) {			 
			    //$tokens[] = $this->addressway();
				foreach ($this->addressway($tokout) as $t=>$tt)
					$tokens[] = $tt;
			}	
			if (!$nocomm = remote_paramload('SHCART','nocomments',$this->path)) {		 
			    //$tokens[] = $this->comments();
				foreach ($this->comments($tokout) as $t=>$tt)
					$tokens[] = $tt;
			}	
			
         }
         else {
			//order parameters
			$out .= $this->customerway();
			//$out .= "<hr>";			 
			$out .= $this->invoiceway();
			//$out .= "<hr>";			 
			$out .= $this->roadway();
			//$out .= "<hr>";			 
			$out .= $this->payway();			 
			//$out .= "<hr>";
			if (!$nodeliv = remote_paramload('SHCART','nodelivery',$this->path))			 
				$out .= $this->addressway();			 
			//$out .= "<hr>";			 
			if (!$nocomm = remote_paramload('SHCART','nocomments',$this->path))		 
				$out .= $this->comments();	
         }		   
	   } 

	   if ($mytemplate) {
            //print_r($tokens);
			$fout = $this->combine_tokens2($mytemplate, $tokens, true);//recursion?
			return ($fout);
	   }	   

	   return ($out);
	}	


	function myquickcartfoot() {
	   $template='fpcartfooter.htm';
	   $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ;
	   //echo $t,'>';
	   if (is_readable($t)) {
			$mytemplate = @file_get_contents($t);
			$tokout = 1; 
	   }		

	   $this->quick_recalculate();

       if (defined(_CURRENCYF_)) $cf = new CurrencyFormatter();
	   
	   $mytotal = $this->total;
				
	   if ($tokout) {
			$_ttc =  (defined(_CURRENCYF_)) ? 
					$cf->format($mytotal,"GRD"). $this->moneysymbol : 
					number_format(floatval($mytotal),$this->dec_num,',','.'). $this->moneysymbol;

			$tokens[] = $_ttc; 			
	   }
       else {

			$data[] = "<B>" . localize('_TOTAL',getlocal()) . " :</B>";
			$attr[] = "left;40%";
			$data[] = $this->qtytotal;
			$attr[] = "right;20%";

			if (defined(_CURRENCYF_)) $data[] = $cf->format($mytotal,"GRD") . $this->moneysymbol;
	                        else $data[] = number_format(floatval($mytotal),$this->dec_num,',','.') . $this->moneysymbol;
			$attr[] = "right;40%";

			$mytitle = new window('',$data,$attr);
			$out = $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data);
			unset ($attr);
	   }

	   //rest sums 
	   if ($this->discount) {
           if ($tokout) {
              $_tdisc = (defined(_CURRENCYF_)) ?
						 $cf->format($this->discount,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->discountt),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_tdisc;
           }		 
		   else { 
			$data2[] = "<B>" . localize('_DISCOUNT',getlocal()) . " :</B>";
			$attr2[] = "right;40%";
			$data2[] = "<B>" . $this->discount ."%</B>";
			$attr2[] = "right;20%";
			$this->mydiscount = ($this->total*$this->discount)/100;
			if (defined(_CURRENCYF_)) $data2[] = $cf->format($this->discount,"GRD") . $this->moneysymbol;
	                            else $data2[] = number_format(floatval($this->discount),$this->dec_num,',','.') . $this->moneysymbol;
			$attr2[] = "right;40%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);
		   }
	   } 
       elseif ($tokout) $tokens[] = '';		   

	   
	   if ((($this->tax) && ($this->quicktax) && ($this->is_reseller)) ||
		   (($this->tax) && ($this->quicktax) && (!$this->showtaxretail))) {
		   
		   $this->mytaxcost = ((($this->total)*$this->tax)/100);//($this->total*$this->tax)/100;
		   
			if ($tokout) {
				$_ttd =  (defined(_CURRENCYF_)) ? 
					$cf->format($this->mytaxcost,"GRD"). $this->moneysymbol : 
					number_format(floatval($this->mytaxcost),$this->dec_num,',','.'). $this->moneysymbol;

				$tokens[] = $_ttd;  			
			}
			else {		   
				$data2[] = "<B>" . localize('_TAX',getlocal()) . '&nbsp;('. $this->tax .'%)' ." :</B>";
				$attr2[] = "right;40%";
				$data2[] = "<B>" . "&nbsp;"/*$this->tax*/ ."</B>";
				$attr2[] = "right;20%";
				
				if (defined(_CURRENCYF_)) $data2[] = $cf->format($this->mytaxcost,"GRD") . $this->moneysymbol;
	                            else $data2[] = number_format(floatval($this->mytaxcost),$this->dec_num,',','.') . $this->moneysymbol;
				$attr2[] = "right;40%";
				$mytitle = new window('',$data2,$attr2);
				$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
				unset ($data2);
				unset ($attr2);
            }
		   
		    $grandtotal = $this->total + $this->mytaxcost;
		   
			if ($tokout) {
				$_ttg =  (defined(_CURRENCYF_)) ? 
					$cf->format($grandtotal,"GRD"). $this->moneysymbol : 
					number_format(floatval($grandtotal),$this->dec_num,',','.'). $this->moneysymbol;

				$tokens[] = $_ttg;  			
			}
			else {		   
		   
				$data3[] = "<B>" . localize('_GRANDTOTAL',getlocal()) . " :</B>";
				$attr3[] = "right;40%";
				$data3[] = "<B>" . "&nbsp;" ."</B>";
				$attr3[] = "right;20%";
				if (defined(_CURRENCYF_)) $data3[] = $cf->format($grandtotal,"GRD") . $this->moneysymbol;
								     else $data3[] = number_format(floatval($grandtotal),$this->dec_num,',','.') . $this->moneysymbol;
				$attr3[] = "right;40%";
				$mytitle = new window('',$data3,$attr3);
				$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
				unset ($data3);
				unset ($attr3);
			}	
	   }
	   elseif ($tokout) $tokens[] = '';	
		
	   //echo 'init:',$this->shippingcost;
	   if ($this->shippingcost) { 
		   //echo 'sc:',$this->shippingcost;
		   
           if ($tokout) {
              $_shcost = (defined(_CURRENCYF_)) ?
						 $cf->format($this->shippingcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($this->shippingcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_shcost;
           }
           else {		   
		   
			if ($this->supershipping) {//link
		     //echo 'ss:',$this->supershipping;
             $data2[] = "<B>" . seturl('t=sship',localize('_SHIPCOST',getlocal())) . " :</B>";		   
			}	 
			else
             $data2[] = "<B>" . localize('_SHIPCOST',getlocal()) . " :</B>";
			 
			$attr2[] = "right;40%";
			$data2[] = "&nbsp;";
			$attr2[] = "right;20%";
			if (defined(_CURRENCYF_)) {
		     if ($this->supershipping)//link		    
		       $data2[] = seturl('t=sship',$cf->format($this->shippingcost,"GRD") . $this->moneysymbol);
			 else 
			   $data2[] = $cf->format($this->shippingcost,"GRD") . $this->moneysymbol; 
			}	 
			else {
		     if ($this->supershipping)//link			   
		       $data2[] = seturl('t=sship',number_format(floatval($this->shippingcost),$this->dec_num,',','.') . $this->moneysymbol);
			 else
		       $data2[] = number_format(floatval($this->shippingcost),$this->dec_num,',','.') . $this->moneysymbol;			   
			}	 
			$attr2[] = "right;40%";	
			$mytitle = new window('',$data2,$attr2);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data2);
			unset ($attr2);
           }		   
	   }
       elseif ($tokout) $tokens[] = '';			 
		  		 
	   //final cost
	   if (($this->discount) || ($this->shippingcost) || ($this->tax)) {
		 
		   $finalcost = ($this->total+$this->mytaxcost+$this->shippingcost)-$this->mydiscount;
		 
           if ($tokout) {
              $_ffcost = (defined(_CURRENCYF_)) ?
						 $cf->format($finalcost,"GRD"). $this->moneysymbol :
						 number_format(floatval($finalcost),$this->dec_num,',','.'). $this->moneysymbol;		   
		      $tokens[] = $_ffcost;
			  //echo $_ffcost;
           }
           else {			 
			$data3[] = "<B>" . localize('_FCOST',getlocal()) . " :</B>";
			$attr3[] = "right;40%";
			$data3[] = "&nbsp;";
			$attr3[] = "right;20%";
	       
			if (defined(_CURRENCYF_)) $data3[] = $cf->format($finalcost,"GRD") . $this->moneysymbol;
	                            else $data3[] = number_format(floatval($finalcost),$this->dec_num,',','.') . $this->moneysymbol;
			$attr3[] = "right;40%";

			$mytitle = new window('',$data3,$attr3);
			$out .= $mytitle->render(" ::100%::0::group_form_body::center;100%;::");
			unset ($data3);
			unset ($attr3);	
		   }
		   
	       SetSessionParam('subtotal',$this->total);   
	       SetSessionParam('total',$finalcost);	//the final cost			   	 
	   }
	   elseif ($tokout) $tokens[] = '';		   
	   
	   if ($mytemplate) {
            //print_r($tokens);
			$fout = $this->combine_tokens2($mytemplate, $tokens, true);
			return ($fout);
	   }	 	   

	   return ($out);
	}

	function todolist() {
	 
	   //get template file
       $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$this->todo.'.htm') ; 
	   //echo $t;
	   if (is_readable($t)) {
		 $mytemplate = file_get_contents($t);
		 $tokensout = 1;
       }		

	   switch ($this->todo) {

	     case 'loginorregister' : //SetPreSessionParam('recalcdb','1');//set reculc from db=1
		                          if (defined('SHLOGIN_DPC')) 
 		                            $a = GetGlobal('controller')->calldpc_method("shlogin.quickform use +viewcart+shcart>cartview+status+1");
								  
								  if (defined('SHUSERS_DPC'))
 		                            $b = GetGlobal('controller')->calldpc_method("shusers.regform");
									
								  $c = $this->quickview();									
									
								  if ($tokensout) {
								    $res = $a . $b; //any return data
								    if ($res) {
									  $tokens[] = $a;
									  $tokens[] = $b;
									  $tokens[] = $c;
									
		                              $ret = $this->combine_tokens($mytemplate,$tokens,true);								
									} 
								    else
								      $ret = $this->cartview();//default view										 
								  }	
                                  else {
								    $res = $a . $b;
								    if ($res) {

									  $data[] = $b;
									  $attr[] = 'left;70%';

                                      $data[] = $a . $c;
									  $attr[] = 'left;30%';

	                                  $myactwin = new window(localize($this->todo,getlocal()),$data,$attr);
									  $ret = $myactwin->render();
									  unset($myactwin);
								      //$ret=$res;
								    }
								    else
								      $ret = $this->cartview();//default view										  
							      }
		                          break;
         case 'unknownlogin' :
		                          break;
         case 'login' :
		                          break;
	   }

	   return ($ret);
	}
	
	//called by phpdac
	function getcartTotal($noformat=null) {
	   
	   $val = GetSessionParam('total');//$this->myfinalcost;//  GetSessionParam('total');
	   
       $ret = $noformat ? floatval($val) : number_format(floatval($val),$this->dec_num,',','.');	
	   return ($ret);
	}
	//called by phpdac	
	function getcartSubtotal($noformat=null) {
	   
	   $val = GetSessionParam('subtotal');//$this->total;	//GetSessionParam('subtotal')   
	   
       $ret = $noformat ? floatval($val) : number_format(floatval($val),$this->dec_num,',','.');		   
	   return ($ret);	
	}
	//called by phpdac	
	function getcartItems() {
	   
	   $itm = GetSessionParam('qty_total');//$this->qty_total;//GetSessionParam('qty_total');
	   $ret = $itm?$itm:'0';
	   return ($ret);	
	}
	
	//pick qty from cart for a certain item
	function getCartItemQty($id=null) {
	  $qtymeter = 0;
	  if (!$id) return;
	
	  foreach ($this->buffer as $i=>$rec) {
	    $data = explode(';',$rec);
		if ($data[0]==$id) {
		  $qtymeter+=$data[9];
		}
	  }
	  
	  return ($qtymeter);
	}	
	
	function colideCart() {
	
	  if (empty($this->buffer))
	    return;
	
	  //echo '<pre>';
	  //print_r($this->buffer);
	  //echo '</pre>';	
	
	  foreach ($this->buffer as $i=>$rec) {
	    if ($rec!='x') {
	      $data = explode(';',$rec);
		  $cs = $data[0].';'.$data[1].';'.$data[2].';'.$data[3].';'.$data[4].';'.$data[5].';'.$data[6].';'.$data[7].';';
	      $tempbuffer[$cs] = intval($tempbuffer[$cs])+intval($data[9]).';'.$data[8];
		}
	  }	
	  //echo '<pre>';
	  //print_r($tempbuffer);
	  //echo '</pre>';
	  if (!empty($tempbuffer)) {
	    unset($this->buffer);
	    foreach ($tempbuffer as $trec=>$qtyandprice) {

		  $params = explode(';',$qtyandprice);
		  $this->buffer[] = $trec . $params[1] .';'. $params[0] .';;;;;;;';
	    }		
	  }
	  //echo '<pre>';
	  //print_r($this->buffer);
	  //echo '</pre>';	
	  
	  $this->setStore();    
	}
	
	function show_supershipping() {
      $db = GetGlobal('db');  
      $ways = remote_arrayload('SHCART','roadways',$this->path);	 
      //print_r($ways);	 
      $_sway = GetParam("roadway") ? GetParam("roadway") : GetSessionParam("roadway");	  
	  $shipway = getlocal() ? str_replace('/'.$_sway,'',$ways[0]) : array_pop(explode('/',$ways[0])); 
      /*$shipway = GetParam("roadway") ? //no table in greek
	             (getlocal() ? //if in greek, get the english descr
				  str_replace('/'.GetParam("roadway"),'',$ways[0]) ://standart english descr 0array ??? 
				  GetParam("roadway")
				  ) :
	             (GetSessionParam("roadway") ? 
				  str_replace('/'.GetSessionParam("roadway"),'',$ways[0]) ://standart english descr 0array ???  
				  array_pop(explode('/',$ways[0]))//standart english descr ??? 0array
				  );*/
				  
	  //echo $shipway ,'?',$mymethod;
	  
	  $weight = $this->weightCart();
	  $user_country_id = GetGlobal('controller')->calldpc_method('shuser.get_user_country');
      $czone = GetReq('czone')?GetReq('czone'):$user_country_id;	  
	  $cservice = GetReq('cservice');
      $mymethod = strtolower(trim(str_replace(' ','',$cservice))) ?
	              strtolower(trim(str_replace(' ','',$cservice))) :
				  strtolower(trim(str_replace(' ','',$shipway)));	 
      $hr = false;	  
	  
	  if ((!$weight) || (!$shipway) || (!$mymethod)) return;	  
	  	  
	  $sSQL = "select id,weight,cost from " . $mymethod . " where ";
	  
	  $zone = $this->get_country_shipzone($czone);
	  
	  if ($zone) {
	    if (stristr($zone,'|')) {
		  //multiple record zones zone1,zone2 
		  $myzones = explode('|',$zone);
		  foreach ($myzones as $z=>$zn)
		    $tempSQL[] =  'zone=' ."'" . $zn . "'";
		  
		  $sSQL .= '(' . implode(' OR ',$tempSQL) . ')';  		
        }
		else
	      $sSQL .= 'zone=' ."'" . $zone . "'"; //multiple zones zone1,zone2 per method=service		
	  }
	  /*elseif (!empty($this->shipzone)) {//old config sets

		foreach ($this->shipzone as $i=>$zone)
		  $tempSQL[] =  'zone=' ."'" . $zone . "'";
		  
		$sSQL .= '(' . implode(' OR ',$tempSQL) . ')';  
	  }*/
	  $sSQL .=" order by weight"; //desc  when <=weight
	  //echo $sSQL;
	  
	  $gourl1 = seturl('t=sship&cservice='.$cservice); //echo $gourl1;
	  $countries = "<select class=\"myf_select\" name=\"czone\" onChange=\"location='$gourl1&czone='+this.options[this.selectedIndex].value\">".
	               get_options_file('country',false,true,$czone).
				   "</select>";
	  $services = implode(',',$this->shipmethods); 	

	  $gourl2 = seturl('t=sship&czone='.$czone); //echo $gourl1;	  
	  /*$methods = "<select name=\"cservice\" onChange=\"location='$gourl2&cservice='+this.options[this.selectedIndex].value\">".
	               get_options_file('country',false,true,$cservice).
				   "</select>";*/
	  $methods = "<select class=\"myf_select\" name=\"cservice\" onChange=\"location='$gourl2&cservice='+this.options[this.selectedIndex].value\">";
	  foreach ($this->shipmethods as $i=>$v) {

	        if (stristr($v,'/')) {
			  $vv = explode('/',$v);
			  $title = $vv[getlocal()];
			  $methods .= "<option value=\"$vv[0]\"".($vv[0] == $cservice ? " selected" : "").">$title</option>";
			}
			else
			  $methods .= "<option value=\"$v\"".($v == $cservice ? " selected" : "").">$v</option>";		
	  }  
	  $methods .= "</select>";				   
				   
	  $out .= '<span>'.
	           localize('_SHIPWEIGHT',getlocal()) . 
			   '&nbsp;:&nbsp;'.
			   $weight.localize('_KG',getlocal()).
			   '&nbsp;|&nbsp;'.
			   localize('_SHIPZONE',getlocal()).
			   '&nbsp;:&nbsp;'. 
			   $countries .
			   '&nbsp;&nbsp;'.
			   $methods;
			   '</span>';
	  $out .= '<hr>';
	  
	  if (!$zone) 
	    return ($out); //no result
	  
	  $resultset = $db->Execute($sSQL,2);	
      $result = $resultset;
	  //print_r($resultset);
	  foreach ($result as $n=>$rec) {
	  
	  	 /*if ($rec['weight']>=$weight) {
		   $out .= $rec['weight'].'|'.$rec['cost'];		 
		 }
		 else {
		   $out .= $rec['weight'].'|'.$rec['cost'];
		 }
		 $out .= '<hr>';*/
		 
		 $field[] = /*($n+1) .*/ "1&nbsp;" . localize('_PARCELOF',getlocal());
	     $attr[] = 'left;40%';
		 
		 $sweight = number_format(floatval($rec['weight']),$this->dec_num,',','.');
		 
		 $field[] = $sweight . "&nbsp;" . localize('_KG',getlocal());
	     $attr[] = 'right;30%';	

         if (defined(_CURRENCYF_)) $scost = $cf->format($rec['cost'],"GRD");
	                          else $scost = number_format(floatval($rec['cost']),$this->dec_num,',','.');

		 if (($rec['weight']>=$weight) && ($hr==false)) {
		    $hr = true;
			$check = "&nbsp;<i class='icon-check'></i>";	
		 }
         else
			$check = null;	
			
		 $field[] = $scost . "&nbsp;" . $this->moneysymbol . $check ;
	     $attr[] = 'right;30%';	

         $w1 = new window('',$field,$attr);  
		 $out .= $w1->render("center::100%::0::group_article::left::0::0::");		 
		 /*if (($rec['weight']>=$weight) && ($hr==false)) {
           //echo $rec['weight'],'-',$weight;		 
		   $hr = true;
		   $out .= '<hr>';
		 }*/
		 
		 //$ww = round($weight,0); echo $ww,'>';
		 //if (floatval($rec['weight']) == floatval($ww))
		 //  $out .= $w1->render("center::100%::0::group_article_selected::left::0::0::"); 
		 //else
		 //  $out .= $w1->render("center::100%::0::group_article::left::0::0::"); 
		 unset($field);
		 unset($attr);
         unset($w1); 		 
		 
	  }
	  
	   //get template file
       $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.','supership.htm') ; 
	   //echo $t;
	   if (is_readable($t)) {
		 $mytemplate = file_get_contents($t);
	     $tokens[] = $out;
		 $out = $this->combine_tokens($mytemplate,$tokens,true);
	   }	
	
  	   return ($out);  
	}
	
	function get_country_shipzone($cid) {
       $db = GetGlobal('db');	
	  
	   if ($cid>=0) {
	      $id = $cid+1;//plus 1 to find rec	   
	   	  $sSQL = "select zone from pcountry where id=".$id;
	      $resultset = $db->Execute($sSQL,2);	
          $result = $resultset;	
          
		  $ret = $resultset->fields[0];
		  //echo $sSQL,$ret;
          return ($ret);		  
	   }
	}
	
	function calc_supershipping($weight=null, $method=null) {
      $db = GetGlobal('db');
	  $mymethod = $method ? $method : $this->shipmethods[0]; //default 0 shipmethods
	  $user_country_id = GetGlobal('controller')->calldpc_method('shuser.get_user_country');
      $czone = /*GetReq('czone')?GetReq('czone'):*/$user_country_id;
	  
	  $zone = $this->get_country_shipzone($czone);	  
	  
	  if ((!$weight) || (!$method)) {
	    return;//'No weight or no method!');
	  } 	
	  	  
	  $mymethod = strtolower(trim(str_replace(' ','',$method)));	
	  
	  //print_r($this->shipzone);
	  
	  //echo '>',$method,'-',$weight;
	  $sSQL = "select cost from " . $mymethod . " where weight>=" . $weight;
	  
	  if ($zone) { //table defined zones pre country
	    if (stristr($zone,'|')) {
		  //multiple record zones zone1,zone2 
		  $myzones = explode('|',$zone);
		  foreach ($myzones as $z=>$zn)
		    $tempSQL[] =  'zone=' ."'" . $zn . "'";
		  
		  $sSQL .= ' and (' . implode(' OR ',$tempSQL) . ')';  		
        }
		else
	      $sSQL .= ' and zone=' ."'" . $zone . "'"; 	  
	  }
	  elseif (!empty($this->shipzone)) { //myconfig entry

		foreach ($this->shipzone as $i=>$zone)
		  $tempSQL[] =  'zone=' ."'" . $zone . "'";
		  
		$sSQL .= ' and (' . implode(' OR ',$tempSQL) . ')';  
	  }
	  $sSQL .=" order by weight"; //desc  when <=weight
	  //echo $sSQL;
	  
	  $resultset = $db->Execute($sSQL,2);	
      $result = $resultset;
	  
	  if ($result) {
		foreach ($result as $n=>$rec)
			return $rec['cost'];  
	  }	
	  
	  return 0;
	}
	
	function weightParcel($sumqty=null) {
	  if (($sumqty) && (!empty($this->parcelunit))) {
	    //echo '>',$sumqty;
		foreach ($this->parcelunit as $i=>$u) {
		  if ($sumqty<=intval($u)) {
		    $ret = floatval($this->parcelweight[$i]);
			//echo '>',$ret;
		    return ($ret);
		  } 	
		}
	  } 	
	  return 0;	
	}
	
	function weightCart() {	
      $total_weight = 0;
      $total_qty = 0;	  
	
	  if (empty($this->buffer)) return;
	
	  //echo '<pre>';
	  //print_r($this->buffer);
	  //echo '</pre>';	
	
	  foreach ($this->buffer as $i=>$rec) {
	    if ($rec!='x') {
	      $data = explode(';',$rec);
		  $cs = $data[0].';'.$data[1].';'.$data[2].';'.$data[3].';'.$data[4].';'.$data[5].';'.$data[6].';'.$data[7].';';
	      $tempbuffer[$data[0]] = $data[9];
		  $itemscodes[] = $data[0];
		}
	  }
	  //print_r($itemscodes);
	  
	  if ((defined("SHKATALOGMEDIA_DPC")) && (!empty($itemscodes))) {
	   
		$weights = GetGlobal('controller')->calldpc_method('shkatalogmedia.read_item_weight use '.implode(';',$itemscodes));	

	    //print_r($tempbuffer); print_r($weights);
	    foreach ($tempbuffer as $code=>$qty) {
	      $total_weight+= floatval($weights[$code])*$qty;
		  $total_qty+= $qty;
		}  
		  
		//extra parcel weight...  
        $total_weight+= $this->weightParcel($total_qty);
		
	    //echo $total_weight;
		return ($total_weight);
      }
	  
      return null; 
	}	
	
	//override
    function setquantity($id,$qty=null) {
	
	  $readonly = remote_paramload('SHCART','qtyreadonly',$this->path);
	  $r = $readonly?'readonly':null;

  	  $qtyname = $id ;
      $selectedqty = GetParam($qtyname);
	  if (!$selectedqty) $selectedqty = $qty;
      //print $id.">".$selectedqty."()";

	  if (!$this->status) { //only if status=0 else when cart status > 0 qty change
	  
	      if (($this->maxqty<0) || ($readonly)) { //free style
		  
            $out = "<input name=\"$qtyname\" value=\"$selectedqty\" size=\"3\" maxlength=\"3\" $r >";		  
		  }
		  else { //combo style
		  
		    //in case of ie location must be the abs url..
		    $url_location = $this->url . '/calc/'; //null;
		  
		    $out = "<SELECT class=\"myf_select_tiny\" name=\"$qtyname\" "; //>"
			$out .= "onChange=\"location='$url_location'+'$qtyname'+'/'+this.options[this.selectedIndex].value+'/'\">"; 
			//$out .= "onChange=\"this.form.submit()\">";
		    for ($j=1;$j<=$this->maxqty;$j++) {
		      if (($selectedqty) && ($selectedqty==$j)) 
                   $out .= "<OPTION value='$j' selected>$j";
		      else $out .= "<OPTION value='$j'>$j";
		    }  
		    $out .= "</OPTION></SELECT>";
		  }	
	  }
	  else
	    $out = $qty; 
		  
       return ($out);
	}		
	
	function cart_mailto($to=null,$subject=null,$body=null) {
	      $from = $this->cartsend_mail;
	      $to = $to?$to:$this->cartreceive_mail;
	
		  // MAIL THE ORDER
	      /*if ((defined('RCSSYSTEM_DPC')) && (!$instant)) { //no queue when no instant
		    //...data may be problem using this ...
		    $mailerror = GetGlobal('controller')->calldpc_method("rcssystem.sendit use $from+$to+$subject+$body++1");
          }
		  else {*/		  
		     if (defined('SMTPMAIL_DPC')) {
				 
		       $smtpm = new smtpmail;
			   
		       $smtpm->to($to); 
		       $smtpm->from($from); 
		       $smtpm->subject($subject);
		       $smtpm->body($body);			   

			   $mailerror = $smtpm->smtpsend();

			   unset($smtpm);
			 }
		     else
		       echo	"mail not send!";		
		  //}
		  
		  return ($mailerror);	   	
	}
	
	function make_gmt_date($date=null,$mytmzid=null,$dst=null) {
	  $dst = $dst?$dst:1;//defualt
      date_default_timezone_set('GMT'); //btpass server time	
      $today = date('Y-m-d');	
	  //echo $today,'#';
	  if (defined('SHUSERS_DPC')) {
	      if (GetSessionParam('tmzid')) {
		    $tmzid = $mytmzid?$mytmzid:GetSessionParam('tmzid');	  
		  }
		  else {	  
	        $tmz_id = $mytmzid?$mytmzid:GetGlobal('controller')->calldpc_method('shuser.get_user_timezone');
		    $tmzid = $tmz_id?$tmz_id:'0'; //string 0 in case if GMT
            SetSessionParam('tmzid',$tmzid);		  
		  }	
	  }
	  else
	    $tmzid = $mytmzid?$mytmzid:0;	  
	  
	  if (!$date)
		$mkd = mktime();
	  else {
	    $d = explode('-',$date);	
	    $mkd = mktime(0,0,0,$d[1],$d[2],$d[0],$dst);
	  }
	  
	  if ($dst)
	    $dst_time = 60*60; //+1 hour	  	
	  //NOT WORK...
	  //$mkd_gmt = $mkd - date('Z');//auto server offset val = 0 when GMT
	  
	  if ($tmzid) {
        $user_tmz = $tmzid;
	    //echo $tmzid,'#';	  
	    $mkd_user_tmz = intval($user_tmz) * 60 * 60;//user tmz - hours * min * sec
        $user_local_time = $mkd/*_gmt*/ + $mkd_user_tmz; //return time in secs from 1970
	  
	    $gmtdate = date('d/m/Y h:i:s A',$user_local_time + $dst_time);
	  }
	  else
	    $gmtdate = date('d/m/Y h:i:s A',$mkd + $dst_time /*_gtm*/);
		 	
	  //echo $gmtdate,'<br>';
	  
	  return ($gmtdate);	  	 	  	  	  
	}		
	
	//template method
	function combine_template($template_contents,$p0=null,$p1=null,$p2=null,$p3=null,$p4=null,$p5=null,$p6=null,$p7=null,$p8=null,$p9=null) {

		$params = explode('<#>',"$p0<#>$p1<#>$p2<#>$p3<#>$p4<#>$p5<#>$p6<#>$p7<#>$p8<#>$p9");
	    //print_r($params);

		if (defined('FRONTHTMLPAGE_DPC')) {
		  $fp = new fronthtmlpage(null);
		  $ret = $fp->process_commands($template_contents);
		  unset ($fp);
          //$ret = GetGlobal('controller')->calldpc_method("fronthtmlpage.process_commands use ".$template_contents);
		}
		else
		  $ret = $template_contents;

		//echo $ret;
	    foreach ($params as $p=>$pp) {
		  if ($pp)
	        $ret = str_replace("$".$p,$pp,$ret);
		  else
		    $ret = str_replace("$".$p,'',$ret);
	    }
		//echo $ret;
		return ($ret);
	}
	
	//tokens method	 $x
	function combine_tokens($template_contents,$tokens, $execafter=null) {
	
	    if (!is_array($tokens)) return;
		
		if ((!$execafter) && (defined('FRONTHTMLPAGE_DPC'))) {
		  $fp = new fronthtmlpage(null);
		  $ret = $fp->process_commands($template_contents);
		  unset ($fp);
          //$ret = GetGlobal('controller')->calldpc_method("fronthtmlpage.process_commands use ".$template_contents);		  		
		}		  		
		else
		  $ret = $template_contents;
		  
		//echo $ret;
	    foreach ($tokens as $i=>$tok) {
            //echo $tok,'<br>';
		    $ret = str_replace("$".$i,$tok,$ret);
	    }
		//clean unused token marks
		for ($x=$i;$x<20;$x++)
		  $ret = str_replace("$".$x,'',$ret);
		//echo $ret;
		
		//execute after replace tokens
		if (($execafter) && (defined('FRONTHTMLPAGE_DPC'))) {
		  $fp = new fronthtmlpage(null);
		  $retout = $fp->process_commands($ret);
		  unset ($fp);
          
		  return ($retout);
		}		
		
		return ($ret);
	}	
	
	//tokens method	 $x$
	function combine_tokens2($template_contents,$tokens, $execafter=null) {
	
	    if (!is_array($tokens)) return;
		
		if ((!$execafter) && (defined('FRONTHTMLPAGE_DPC'))) {
		  $fp = new fronthtmlpage(null);
		  $ret = $fp->process_commands($template_contents);
		  unset ($fp);
          //$ret = GetGlobal('controller')->calldpc_method("fronthtmlpage.process_commands use ".$template_contents);		  		
		}		  		
		else
		  $ret = $template_contents;
		  
		//echo $ret;
	    foreach ($tokens as $i=>$tok) {
            //echo $tok,'<br>';
		    $ret = str_replace("$".$i."$",$tok,$ret);
	    }
		//clean unused token marks
		for ($x=$i;$x<20;$x++)
		  $ret = str_replace("$".$x."$",'',$ret);
		//echo $ret;
		
		//execute after replace tokens
		if (($execafter) && (defined('FRONTHTMLPAGE_DPC'))) {
		  $fp = new fronthtmlpage(null);
		  $retout = $fp->process_commands($ret);
		  unset ($fp);
          
		  return ($retout);
		}		
		
		return ($ret);
	}	
	
	public static function myf_button($title,$link=null,$image=null) {
	   //$browser = get_browser(null, true);
       //print_r($browser);	
       //echo $_SERVER['HTTP_USER_AGENT']; 
	   //echo '1';
	   $path = self::$staticpath;//$this->urlpath;//
	   
	   if (($image) && (is_readable($path."/images/".$image.".png"))) {
	      //echo 'a';
	      $imglink = "<a href=\"$link\" title='$title'><img src='images/".$image.".png'/></a>";
	   }
	   
	   if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) { 
	      //echo 'ie';
		  $_b = $imglink ? $imglink : "[$title]";
		  $ret = "&nbsp;<a href=\"$link\">$_b</a>&nbsp;";
		  return ($ret);
	   }	
	   
	   if ($imglink)
	       return ($imglink);
	
       //else button	
	   if ($link)
	      $ret = "<a href=\"$link\">";
		  
	   $ret .= "<input type=\"button\" class=\"myf_button\" value=\"".$title."\" />";
	   
	   if ($link)
          $ret .= "</a>";	   
		  
	   return ($ret);
	}

};
}
//}
//else die("SENTRANSACTIONS DPC REQUIRED!");
?>