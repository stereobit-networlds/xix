<?php
$__DPCSEC['SHKATALOGMEDIA_DPC']='1;1;1;1;1;1;2;2;9';

if ( (!defined("SHKATALOGMEDIA_DPC")) && (seclevel('SHKATALOGMEDIA_DPC',decode(GetSessionParam('UserSecID')))) ) {

define("SHKATALOGMEDIA_DPC",true);

$__DPC['SHKATALOGMEDIA_DPC'] = 'shkatalogmedia';

$a = GetGlobal('controller')->require_dpc('libs/appkey.lib.php');
require_once($a);

$d = GetGlobal('controller')->require_dpc('xix/shkatalog.dpc.php');
require_once($d);

$e = GetGlobal('controller')->require_dpc('shell/pxml.lib.php');
require_once($e);

GetGlobal('controller')->get_parent('SHKATALOG_DPC','SHKATALOGMEDIA_DPC');

$__EVENTS['SHKATALOGMEDIA_DPC'][88]='getproductdetails';
$__EVENTS['SHKATALOGMEDIA_DPC'][89]='update_items_save';
$__EVENTS['SHKATALOGMEDIA_DPC'][90]='modify_items_form';
$__EVENTS['SHKATALOGMEDIA_DPC'][91]='hide_insert_form';
$__EVENTS['SHKATALOGMEDIA_DPC'][92]='insertitems';
$__EVENTS['SHKATALOGMEDIA_DPC'][93]='insert_items_save';
$__EVENTS['SHKATALOGMEDIA_DPC'][94]='insert_items_dnd';
$__EVENTS['SHKATALOGMEDIA_DPC'][95]='insert_items_form';
$__EVENTS['SHKATALOGMEDIA_DPC'][96]='sitemap';
$__EVENTS['SHKATALOGMEDIA_DPC'][97]='feed';
$__EVENTS['SHKATALOGMEDIA_DPC'][98]='showimage';
$__EVENTS['SHKATALOGMEDIA_DPC'][99]='shkatalogmedia';
$__EVENTS['SHKATALOGMEDIA_DPC'][100]='exchcart';
$__EVENTS['SHKATALOGMEDIA_DPC'][101]='show_last_viewed_items';
$__EVENTS['SHKATALOGMEDIA_DPC'][102]='frontpage_list';
$__EVENTS['SHKATALOGMEDIA_DPC'][103]='show_relative_items';
$__EVENTS['SHKATALOGMEDIA_DPC'][104]='show_aditional_html_files';
$__EVENTS['SHKATALOGMEDIA_DPC'][105]='show_aditional_txt_files';
$__EVENTS['SHKATALOGMEDIA_DPC'][106]='show_aditional_files';
$__EVENTS['SHKATALOGMEDIA_DPC'][107]='list_photo';
$__EVENTS['SHKATALOGMEDIA_DPC'][108]='show_category_banner';
$__EVENTS['SHKATALOGMEDIA_DPC'][109]='tree_browser';
$__EVENTS['SHKATALOGMEDIA_DPC'][109]='tree_browser_0';
$__EVENTS['SHKATALOGMEDIA_DPC'][110]='tree_browser_1';
$__EVENTS['SHKATALOGMEDIA_DPC'][111]='tree_browser_2';
$__EVENTS['SHKATALOGMEDIA_DPC'][112]='tree_browser_3';
$__EVENTS['SHKATALOGMEDIA_DPC'][113]='tree_browser_4';
$__EVENTS['SHKATALOGMEDIA_DPC'][114]='tree_browser_5';
$__EVENTS['SHKATALOGMEDIA_DPC'][115]='tree_browser_6';
$__EVENTS['SHKATALOGMEDIA_DPC'][116]='tree_browser_7';
$__EVENTS['SHKATALOGMEDIA_DPC'][117]='tree_browser_8';
$__EVENTS['SHKATALOGMEDIA_DPC'][118]='tree_browser_9';
$__EVENTS['SHKATALOGMEDIA_DPC'][119]='ajax_read_list';
$__EVENTS['SHKATALOGMEDIA_DPC'][120]='ajax_klist';
$__EVENTS['SHKATALOGMEDIA_DPC'][121]='ajax_kshow';

$__ACTIONS['SHKATALOGMEDIA_DPC'][88]='getproductdetails';
$__ACTIONS['SHKATALOGMEDIA_DPC'][89]='update_items_save';
$__ACTIONS['SHKATALOGMEDIA_DPC'][90]='modify_items_form';
$__ACTIONS['SHKATALOGMEDIA_DPC'][91]='hide_insert_form';
$__ACTIONS['SHKATALOGMEDIA_DPC'][92]='insertitems';
$__ACTIONS['SHKATALOGMEDIA_DPC'][93]='insert_items_save';
$__ACTIONS['SHKATALOGMEDIA_DPC'][94]='insert_items_dnd';
$__ACTIONS['SHKATALOGMEDIA_DPC'][95]='insert_items_form';
$__ACTIONS['SHKATALOGMEDIA_DPC'][96]='sitemap';
$__ACTIONS['SHKATALOGMEDIA_DPC'][97]='feed';
$__ACTIONS['SHKATALOGMEDIA_DPC'][98]='showimage';
$__ACTIONS['SHKATALOGMEDIA_DPC'][99]='shkatalogmedia';
$__ACTIONS['SHKATALOGMEDIA_DPC'][100]='exchcart';     //continue with ..from cart
$__ACTIONS['SHKATALOGMEDIA_DPC'][101]='show_last_viewed_items';
$__ACTIONS['SHKATALOGMEDIA_DPC'][102]='frontpage_list';
$__ACTIONS['SHKATALOGMEDIA_DPC'][103]='show_relative_items';
$__ACTIONS['SHKATALOGMEDIA_DPC'][104]='show_aditional_html_files';
$__ACTIONS['SHKATALOGMEDIA_DPC'][105]='show_aditional_txt_files';
$__ACTIONS['SHKATALOGMEDIA_DPC'][106]='show_aditional_files';
$__ACTIONS['SHKATALOGMEDIA_DPC'][107]='list_photo';
$__ACTIONS['SHKATALOGMEDIA_DPC'][108]='show_category_banner';
$__ACTIONS['SHKATALOGMEDIA_DPC'][109]='tree_browser';
$__ACTIONS['SHKATALOGMEDIA_DPC'][109]='tree_browser_0';
$__ACTIONS['SHKATALOGMEDIA_DPC'][110]='tree_browser_1';
$__ACTIONS['SHKATALOGMEDIA_DPC'][111]='tree_browser_2';
$__ACTIONS['SHKATALOGMEDIA_DPC'][112]='tree_browser_3';
$__ACTIONS['SHKATALOGMEDIA_DPC'][113]='tree_browser_4';
$__ACTIONS['SHKATALOGMEDIA_DPC'][114]='tree_browser_5';
$__ACTIONS['SHKATALOGMEDIA_DPC'][115]='tree_browser_6';
$__ACTIONS['SHKATALOGMEDIA_DPC'][116]='tree_browser_7';
$__ACTIONS['SHKATALOGMEDIA_DPC'][117]='tree_browser_8';
$__ACTIONS['SHKATALOGMEDIA_DPC'][118]='tree_browser_9';
$__ACTIONS['SHKATALOGMEDIA_DPC'][119]='ajax_read_list';
$__ACTIONS['SHKATALOGMEDIA_DPC'][120]='ajax_klist';
$__ACTIONS['SHKATALOGMEDIA_DPC'][121]='ajax_kshow';

$__LOCALE['SHKATALOGMEDIA_DPC'][0]='SHKATALOGMEDIA_DPC;Catalogue;Καταλογος';
$__LOCALE['SHKATALOGMEDIA_DPC'][1]='pcs;pcs;τμχ';
$__LOCALE['SHKATALOGMEDIA_DPC'][2]='_loading;Loading...;Φόρτωση...';
$__LOCALE['SHKATALOGMEDIA_DPC'][3]='_insertlabel;Insert;Εισαγωγή';
$__LOCALE['SHKATALOGMEDIA_DPC'][4]='_titlelabel;Title;Τίτλος';
$__LOCALE['SHKATALOGMEDIA_DPC'][5]='_descrlabel;Description;Περιγραφή';
$__LOCALE['SHKATALOGMEDIA_DPC'][6]='_saving;Saving...;Ενημέρωση';
$__LOCALE['SHKATALOGMEDIA_DPC'][7]='_resultlabel;Result;Αποτέλεσμα';
$__LOCALE['SHKATALOGMEDIA_DPC'][8]='_inputerror;Error, data missing.;Λάθος, ελειπή στοιχεία.';
$__LOCALE['SHKATALOGMEDIA_DPC'][9]='_inputok;Successfull entry.;Επιτυχής εισαγωγή.';
$__LOCALE['SHKATALOGMEDIA_DPC'][10]='close;Close;Κλείσε';
$__LOCALE['SHKATALOGMEDIA_DPC'][11]='_modifylabel;Update;Ενημέρωση';
$__LOCALE['SHKATALOGMEDIA_DPC'][12]='_price0label;Price A;Τιμή Α';
$__LOCALE['SHKATALOGMEDIA_DPC'][13]='_weightlabel;Weight;Βάρος';
$__LOCALE['SHKATALOGMEDIA_DPC'][14]='_volumelabel;Volume;Όγκος';
$__LOCALE['SHKATALOGMEDIA_DPC'][15]='_activelabel;Active;Ενεργό';
$__LOCALE['SHKATALOGMEDIA_DPC'][16]='_exchange;Exchange;Ανταλλαγή με';

class shkatalogmedia extends shkatalog {

    var $title;
	var $resource, $xmax, $ymax, $allow_show_resource;
	var $url;
	var $onlyincategory;
	var $oneitemlist, $my_one_item;
	var $photodb;
	var $encoding, $feed_on;
	var $noloadjslightbox, $additional_files_perline;
	var $notreebrowser, $encodeimageid;
	var $appkey;
	var $default_app_name, $app_sep, $user_sep, $union_prefix;

	static $sc; //javascript scroll call meter
	
	function shkatalogmedia() {

	  shkatalog::shkatalog();
	  
	  self::$sc = 0;
	  
	  //$this->url = paramload('SHELL','url');
	  $murl = arrayload('SHELL','ip');
      $this->url = $murl[0]; 

      $char_set  = arrayload('SHELL','char_set');	  
      $charset  = paramload('SHELL','charset');	  		
	  if (($charset=='utf-8') || ($charset=='utf8'))
	    $this->encoding = 'utf8';//must be utf8 not utf-8
	  else  
	    $this->encoding = $char_set[getlocal()]; 	  

      $this->title = localize('SHKATALOGMEDIA_DPC',getlocal());
	  $this->resource = array();
	  
      $fpresaddsize = remote_paramload('SHKATALOGMEDIA','fpresaddsize',$this->path);		  	  
	  $this->fprsize = $fpresaddsize?$fpresaddsize:1;
	  
	  $this->restype = $rt?$rt:$this->restype;	 //parent restype when no additional files....	  
	  
	  $rt = remote_arrayload('SHKATALOGMEDIA','restype',$this->path);
	  $rd = array('.jpg','.png','.swf','.pdf','.exe','.zip');
	  $this->advrestype = $rt?$rt:$rd;	 //advanced retypes to support multiple files as .png .swf ....
	  
	  //choose resource size..pre-select to make resources at event (gadget_js->make_swfobjects)
	  if ((GetReq('t'))=='klist') {//list
	    $this->xmax = $this->imagex; 
		$this->ymax = $this->imagey;
		$this->allow_show_resource = true;
	  }	
      elseif ((GetReq('t'))=='kshow') {//one item		
	    $this->xmax = $this->itemimagex ; 
		$this->ymax = $this->itemimagey ;	  
		$this->allow_show_resource = true;//false		
	  }	
	  else {//fp	  
	    $this->xmax = $this->imagex+$this->fprsize; 
		$this->ymax = $this->imagey+$this->fprsize;
		$this->allow_show_resource = true;		
	  }	
	  
	  $this->gadgets_js(); //without sql results..only js loading
	  $this->onlyincategory = remote_paramload('SHKATALOGMEDIA','onlyincategory',$this->path);	
	  $this->oneitemlist = remote_paramload('SHKATALOGMEDIA','oneitemlist',$this->path);
	  $this->photodb = remote_paramload('SHKATALOGMEDIA','photodb',$this->path);
	  
	  $this->my_one_item = null;
	  $this->feed_on = remote_paramload('SHKATALOGMEDIA','feed',$this->path);
	  
	  $adfperline = remote_paramload('SHKATALOGMEDIA','addfilesperline',$this->path);
	  $this->additional_files_perline = $adfperline ? $adfperline : 3;	
      $this->externaljslightbox = remote_paramload('SHKATALOGMEDIA','externaljslightbox',$this->path);		  
	  $this->externalxmllinks = remote_paramload('SHKATALOGMEDIA','externalxmllinks',$this->path);
	  
	  $this->notreebrowser = remote_paramload('SHKATALOGMEDIA','notreebrowser',$this->path);
	  $this->encodeimageid = remote_paramload('SHKATALOGMEDIA','encodeimageid',$this->path);
	  
	  $this->appkey = new appkey();	
	  //echo $this->rootdomain,'>';
	  $this->default_app_name = 'xixgr_root';
	  $this->app_sep = ':';
	  $this->user_sep = '@';
	  $this->union_prefix = 'xixgr_';
	  
	  //insert items button
	  $this->javascript();
    }
	
	function event($event=null) {
	
	    switch ($event) {
		  
		  case 'ajax_kshow'    : $this->read_item($this->direction); 
		                         $this->lightbox_js();
		  		                 //update statistics
	                             GetGlobal('controller')->calldpc_method("rcvstats.update_item_statistics use ".GetReq('id'));
								 
								 $myctitle = GetReq('ctitle')?GetReq('ctitle'):localize('_items',getlocal());
		                         if (($c=GetReq('cat')) && ($c{0}!='-'))
		                           $out = $this->tree_navigation('klist','',1);  
		                         //else
		                           //$out = setNavigator($this->title,$myctitle);
								
								 //banner up								
		  						 if (in_array('beforeitem',$this->catbanner))
		                           $out .= $this->show_category_banner(null);//,true);	
								  
		                         $out .= $this->show_item();
								
								 //banner down
								 if (in_array('afteritem',$this->catbanner))
		                           $out .= $this->show_category_banner(null);//,true);	
								  
								 //prev level category tree
								 $out .= $this->tree_browser(GetReq('cat'),true,true);//,true);									 
								 
								 die($out);
								 break; 
		
		  case 'ajax_klist'    : $this->my_one_item = $this->read_list();
		                         $this->lightbox_js();
		                         GetGlobal('controller')->calldpc_method("rcvstats.update_category_statistics use ".GetReq('cat'));
								 
								 $myctitle = GetReq('ctitle')?GetReq('ctitle'):localize('_items',getlocal());
		                         if (($c=GetReq('cat')) && ($c{0}!='-'))
		                           $out = $this->tree_navigation('klist','',1);  
		                         //else
		                           //$out = setNavigator($this->title,$myctitle);	
								  
								 //banner up  
								 if (in_array('beforeitemslist',$this->catbanner))//before
								   $out .= $this->show_category_banner(null);//,true);									  
								  
		                         //cat as items
								 $out .= $this->tree_browser(GetReq('cat'),false,true);//,true); //< no union 
								 //items  								
		                         $out .= $this->list_katalog(0);		
								
								 //banner down
								 if (in_array('afteritemslist',$this->catbanner))//after
								   $out .= $this->show_category_banner(null);//,true);														 
								  
								 //prev level category tree
								 $out .= $this->tree_browser(GetReq('cat'),true,true);//,true);										 
		                         die($out);//$this->ajax_klist());
		                         break; 		
								 
		  case 'ajax_read_list': die($this->ajax_read_list());
		                         break; 
		
		  case 'tree_browser'   : 
		  case 'tree_browser_0' ://variable call , multiple call
		  case 'tree_browser_1' : 
		  case 'tree_browser_2' : 
		  case 'tree_browser_3' : 
		  case 'tree_browser_4' : 
		  case 'tree_browser_5' : 
		  case 'tree_browser_6' : 
		  case 'tree_browser_7' : 
		  case 'tree_browser_8' :		  
		  case 'tree_browser_9' :
										die($this->tree_browser());
										break;  		
		
		  case 'show_category_banner' : die($this->show_category_banner());
		                                break;  

		  case 'list_photo'   : die($this->list_photo());
								break;
		
		  case 'show_aditional_files':die($this->show_aditional_files());
								      break;		
		
		  case 'show_aditional_txt_files':die($this->show_aditional_txt_files());
										   break;		
		
		  case 'show_aditional_html_files':die($this->show_aditional_html_files());
										   break;
		
		  case 'show_relative_items': die($this->show_relative_items());
								      break;
		
		  case 'frontpage_list'     : die($this->frontpage_list());
								      break;		
		
		  case 'show_last_viewed_items' : die($this->show_last_viewed_items());
								          break;
		
		  case 'getproductdetails'  : die($this->get_product_details());
								      break;		
		
		  case 'update_items_save'  : die($this->update_items_save());
								      break;
		
		  case 'modify_items_form'  : die($this->modify_items_form());
								      break;
		
		  case 'hide_insert_form'   : die(''); 
		                              break;
		
		  case 'insert_items_save'  : die($this->insert_items_save());
								      break;		
		
		  case 'insert_items_dnd'   : die($this->insert_items_dnd());
								      break;		
		
		  case 'insert_items_form'  : die($this->insert_items_form());
								      break;
		
		  case 'sitemap'       : 
								 if ($dpc = GetReq('dpc')) {//special phpdac page..read
								   $dpccmd = str_replace(',','+',$dpc);	
                                   //echo '>',$dpccmd; 								   
								   GetGlobal('controller')->calldpc_method($dpccmd);		  
								 }  
		                      
								 $xml = $this->sitemap_feed(true);
								 die($xml);	//xml output
		                         break;		
		
		  case 'feed'          : if (GetReq('id'))
		                           $this->read_item();
								 elseif (GetReq('cat'))  
		                           $this->read_list();
								 else {//special phpdac page..read
								   $dpccmd = str_replace(',','+',GetReq('dpc'));	
                                   //echo '>',$dpccmd; 								   
								   GetGlobal('controller')->calldpc_method($dpccmd);		  
								 }  
								 $xml = $this->katalog_feed();
								 die($xml);	//xml output
		                         break;
		  //cart override
	      case 'addtocart'     : 
		  case 'exchcart'      : 
		  case 'removefromcart': 	                         
		                         break;		
		
		  case 'showimage'    : $this->show_photodb(GetReq('id'), GetReq('type'), null, GetReq('app')); //app isnt at request..
		                        //$id = GetGlobal('controller')->calldpc_var('shtags.tagitem');
		                        //$this->show_photodb($id, GetReq('type'));

		  case 'insertitems'  : $this->insert_items_save();//no ajax
                                //break continue klist		  
		  case 'klist'        : $this->my_one_item = $this->read_list(); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1 moved in func
		                        $this->lightbox_js();
		                        GetGlobal('controller')->calldpc_method("rcvstats.update_category_statistics use ".GetReq('cat'));		  
		                        break;	

		  case 'kshow'        : $this->read_item($this->direction); 
		                        $this->lightbox_js();
		  		                //update statistics
	                            GetGlobal('controller')->calldpc_method("rcvstats.update_item_statistics use ".GetReq('id'));
                                break;
								
		  default             : //$this->gadgets_js();
		                        shkatalog::event($event);
		}			
    }	
	
	function action($action=null) {

	    switch ($action) {
		  case 'ajax_kshow'    :
		  case 'ajax_klist'    :
		  case 'ajax_read_list':
		  case 'tree_browser' :
		  case 'show_category_banner' :
		  case 'list_photo':
		  case 'show_aditional_files':
		  case 'show_aditional_txt_files':
		  case 'show_aditional_html_files':
		  case 'show_relative_items':
		  case 'frontpage_list' :
		  case 'show_last_viewed_items' :
		  case 'getproductdetails':
		  case 'update_items_save':
		  case 'modify_items_form':
		  case 'hide_insert_form' :
		  case 'insert_items_save':
		  case 'insert_items_dnd' :
		  case 'insert_items_form':
		  case 'sitemap'       :
		  case 'feed'          :
		                         break;		
		
		  //cart override
	      case 'addtocart'     :
		  case 'exchcart'      :
		  case 'removefromcart'://???carthandler
		                        if (($this->carthandler) || (GetSessionParam('fastpick')=='on')) {
		                          //$out .= $this->list_katalog(0);
								  
								  //$mycat = GetReq('cat');
								  //$out .= $this->show_kategory_items($mycat,1000);
								  
								  /*$myctitle = GetReq('ctitle')?GetReq('ctitle'):localize('_items',getlocal());
								  if (($cat) && ($cat{0}!='-'))
									$out = $this->tree_navigation('klist','',1);  
								  else
									$out = setNavigator($this->title,$myctitle);								  
								  */
								  /*if ($id=GetReq('id')) {
								    //event
									$this->read_item($this->direction); 
									$this->lightbox_js();								  
									//action
								    $out .= $this->show_item();
								  }
								  else*/if ($cat=GetReq('cat')) {
								    //event
									$this->my_one_item = $this->read_list(); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1 moved in func
									$this->lightbox_js();									  
									//action
									$out .= $this->tree_browser(GetReq('cat'),false,true,true);							
									$out .= $this->list_katalog(0);											
								  }
								  else
								    $out = $this->default_action();
								}  
								else
								  $out = GetGlobal('controller')->calldpc_method("shcart.cartview");   
		                        break;			
		
		  case 'insertitems'  :
		  case 'klist'        : $myctitle = GetReq('ctitle')?GetReq('ctitle'):localize('_items',getlocal());
		                        if (($c=GetReq('cat')) && ($c{0}!='-'))
		                          $out = $this->tree_navigation('klist','',1);  
		                        //else
		                          //$out = setNavigator($this->title,$myctitle);	
								  
								//banner up  
								if (in_array('beforeitemslist',$this->catbanner))//before
								  $out .= $this->show_category_banner(null,true);									  
								  
		                        //cat as items
								$out .= $this->tree_browser(GetReq('cat'),false,true,true); //< no union 
								//items  								
		                        $out .= $this->list_katalog(0);		
								
								//banner down
								if (in_array('afteritemslist',$this->catbanner))//after
								  $out .= $this->show_category_banner(null,true);														 
								  
								//prev level category tree
								$out .= $this->tree_browser(GetReq('cat'),true,true,true);		
								break;

		  case 'kshow'        : $myctitle = GetReq('ctitle')?GetReq('ctitle'):localize('_items',getlocal());
		                        if (($c=GetReq('cat')) && ($c{0}!='-'))
		                          $out = $this->tree_navigation('klist','',1);  
		                        //else
		                          //$out = setNavigator($this->title,$myctitle);
								
								//banner up								
		  						if (in_array('beforeitem',$this->catbanner))
		                          $out .= $this->show_category_banner(null,true);	
								  
		                        $out .= $this->show_item();
								
								//banner down
								if (in_array('afteritem',$this->catbanner))
		                          $out .= $this->show_category_banner(null,true);	
								  
								//prev level category tree
								$out .= $this->tree_browser(GetReq('cat'),true,true,true);									  
		                        break;									
		  
		  default             : //echo $action,'>';
		                        if ($action=='katalog')
		                            $out .= $this->default_action();
			                    else 
									$out .= shkatalog::action($action);		
		                         
		  
		}	
		
		return ($out);
    }	
	
	protected function javascript() {
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;
		$cat = GetReq('cat'); 
		//$incart = (GetReq('t')=='viewcart') ? true : false;

        if (iniload('JAVASCRIPT')) {
	   	
		    $js = new jscript;	

            if ($cat) {		   
				$code = $this->javascript_code();		   
				//$js->load_js('html5-dnd-script.js'); //into dnd form		   
				$js->load_css('css/html5-dnd-style.css');
		    }
			
			//if ($incart) 
			    $code .= $this->cart_javascript_code();
				
			$code .= $this->loadlist_javascript_code(); 	
			
			if ($code)
				$js->load_js($code,null,1);		
		    	
		    unset ($js);
	    }	
	}	
	
	protected function loadlist_javascript_code() {
	    $keep_id = GetReq('id') ? 'id='.GetReq('id').'&cat='.GetReq('cat') : 'cat='.GetReq('cat');
	    $ajaxurl = seturl($keep_id."&t=");
	
		$cj = "
function ajax_load_list(pdiv)
{	
    var pdiv = pdiv ? pdiv : 'load_list_div';
	$('#'+pdiv).html('<img src=\"images/loading.gif\" alt=\"Loading\"> {$Loading}').slideDown('fast');  
  
    $.get('{$ajaxurl}ajax_load_list', function(data) { 
		$('#'+pdiv).html(data); 
	});
};		
";		
		return ($cj);
	}	
	
	protected function cart_javascript_code() {
	
	    $ajaxurl = seturl('t=getproductdetails');
	
		$cj = "
function cart_load_item(code)
{	
    $.get('{$ajaxurl}&id='+code, function(data) { location='addcart/'+data+'/0/1/'; });
};		
";		
		return ($cj);
	}
	
	protected  function javascript_code()  {
		$UserName = GetGlobal('UserName');
	    $keep_id = GetReq('id') ? 'id='.GetReq('id').'&cat='.GetReq('cat') : 'cat='.GetReq('cat');
	    $ajaxurl = seturl($keep_id."&t=");

        $Loading = localize('_loading',getlocal()); 		
		$saving = localize('_saving',getlocal()); 
		
		$jscript = <<<JSINSERTITEMS
function div_hide(id)
{
	$(id).removeClass('div_fadein');
	$(id).css('opacity', '0');
};
		
function div_fadein(id)
{
	setTimeout(function()
	{
		/*if(global_css_animations == 1)
		{
			$(id).addClass('div_fadein');
		}
		else
		{*/
			$(id).animate({ opacity: 1 }, 250);
		//}
	}, 1);
};	

function page_load(page)
{
	setTimeout(function()
	{
		if($('#content_div').css('opacity') == 0)
		{
			notify('{$Loading}', 300);
		}
	}, 500);
};	

function page_loaded(page)
{
	setTimeout(function()
	{
		if($('#notification_inner_cell_div').is(':visible') && $('#notification_inner_cell_div').html() == '{$Loading}')
		{
			notify();
		}
	}, 1000);
};

function notify(text, time)
{
	if(typeof text != 'undefined')
	{
		if(typeof notify_timeout != 'undefined')
		{
			clearTimeout(notify_timeout);
		}

		$('#notification_inner_cell_div').css('opacity', '1');

		if($('#notification_div').is(':hidden'))
		{
			$('#notification_inner_cell_div').html(text);
			$('#notification_div').slideDown('fast');
		}
		else
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_inner_cell_div').html(text); $('#notification_inner_cell_div').animate({ opacity: 1 }, 250); });
		}

		notify_timeout = setTimeout(function() { $('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); }); }, 1000 * time);
	}
	else
	{
		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); });
		}
	}
};

function insert_items_form()
{
	div_hide('#content_div');
	$.get('{$ajaxurl}insert_items_form', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
};

function modify_items_form()
{
	div_hide('#content_div');
	$.get('{$ajaxurl}modify_items_form', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
};
		
/*function insert_items_dnd(i)
{
    var i = parseInt(i);	
	
	div_hide('#content_div');
	$.get('{$ajaxurl}insert_items&i='+i, function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
};*/

function insert_items_save(id, code)
{
	var t = $('#insert_title_input_'+id).val();
	var d = $('#insert_descr_input_'+id).val();
	//alert(t+','+d);
	
	$('#save_items_'+id).html('<img src="images/loading.gif" alt="Loading"> {$saving}').slideDown('fast');
	//$('#result').html('<img src="images/loading.gif" alt="Loading"> {$saving}').slideDown('fast');
	
	//$.get('{$ajaxurl}insert_items_save', function(data)
	$.post('{$ajaxurl}insert_items_save', { id: id, code: code, itm_title: t, itm_descr: d}, function(data) 	
	{
		$('#save_items_'+id).html(data);
		//$('#save_items_p').html(data);
		//$('#result').html(data);
	});
};	

function hide_insert_form()
{	
	//page_load();
	div_hide('#content_div');
	$.get('{$ajaxurl}hide_insert_form', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });	
	//page_loaded();
};

function update_items_save(id, code)
{
	var title = $('#update_title_input_'+id).val();
	var descr = $('#update_descr_input_'+id).val();
	var active = $('#update_active_checkbox_'+id+':checked').val(); 
	var itmactive = $('#update_itmactive_checkbox_'+id+':checked').val(); 
	var price0 = $('#update_price0_input_'+id).val();
	var weight = $('#update_weight_input_'+id).val();
	var volume = $('#update_volume_input_'+id).val();
	//alert(t+','+d);
	
	$('#save_items_'+id).html('<img src="images/loading.gif" alt="Loading"> {$saving}').slideDown('fast');
	//$('#result').html('<img src="images/loading.gif" alt="Loading"> {$saving}').slideDown('fast');
	
	$.post('{$ajaxurl}update_items_save', { id: id, code: code, itm_title: title, itm_descr: descr, itm_active:active, itm_itmactive: itmactive, itm_price0: price0, itm_weight: weight, itm_volume: volume}, function(data) 	
	{
		$('#save_items_'+id).html(data);
		//$('#save_items_p').html(data);
		//$('#result').html(data);
	});
};

$(document).on('click', '#insert_items_close_button', function() { hide_insert_form(); });	
$(document).on('click', '#update_items_close_button', function() { hide_insert_form(); });	

JSINSERTITEMS;

		return ($jscript);	
	}
	
	public function dyn_insert_button($href=null, $jsref=null) {
	    $UserName = GetGlobal('UserName');
		if (!$UserName) return false;
	    $href = $href ? $href : $_SERVER['REQUEST_URI'].'#insert_items_form';
		$jsref = $jsref ? $jsref : "onclick='javascript: insert_items_form()'";
		if (!GetReq('cat')) return false;
		
		//modify
		if ($id = GetReq('id')) {//return false;
            /*$x = array_shift(explode($this->user_sep,$id));		
			echo $x;
			$y = hash('crc32',decode($UserName));
			echo '-'.$y;*/
		    if ((strstr($id,$this->user_sep)) &&
			    (array_shift(explode($this->user_sep,$id))== hash('crc32',decode($UserName)))) {
				$jsrefmod = "onclick='javascript: modify_items_form()'";
				$ret = "<a class='btn btn-small' href='$href' $jsrefmod><i class='icon-bolt'></i>$newp_label</a>";
				return ($ret);
			}
			else
				return false;
		}
	    
		//insert
		$ret = "<a class='btn btn-small' href='$href' $jsref><i class='icon-bolt'></i>$newp_label</a>";
		return ($ret);	
	}	
	
    protected function get_product_details() {
		$id = GetReq('id');
	    $lan = getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';		
		
		$result = $this->read_item(null,$id);
		//$cart = GetGlobal('controller')->calldpc_method("shcart.showsymbol use $cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty;+$cat+$cart_page",1);
		//return ("$cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty;");
		$str = $result->fields[$this->getmapf('code')] . ';'; //code
		$str.= $result->fields[$itmname] . ';;'; //title / null
		$str.= $result->fields['DB_NAME'] . ';';//dbname 
		
		for ($i=0;$i<5;$i++) 
		    $category .= ($i>0) ? '^'.$result->fields['cat'.$i] : 
			                      $result->fields['cat0'];
		$str.= $category . ';0;;';//category / null/ null 
		
		$str.= $result->fields[$this->getmapf('code')]  . ';';//code 
		$str.= '-'.$result->fields['price0'] . ';';//price / null
		$str.= '1;';//qty / null
		//echo $str;
		return ($str);
    }		
	
	//user data form to add items
	protected function insert_items_form() {
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;
		$cat = GetReq('cat');
		
		$insert_label = localize('_insertlabel' ,getlocal());
		$close_label = localize('close' ,getlocal());
		$result_label = localize('_resultlabel' ,getlocal());
        $insert_user = decode($UserName);			

        //return 'form';		
		$url = seturl('t=insert_items_dnd&cat='.$cat);//$_SERVER["REQUEST_URI"];
	
		$drugndrop = <<<DNDROP
        <!--div class="container"-->		
            <div class="upload_form_cont">
                <div id="dropArea">Drop Area</div>
                <div class="info">
                    <div>Files left: <span id="count">0</span></div>
                    <h3>{$result_label}:</h3>
                    <div id="result"></div>
                    <canvas width="340" height="20"></canvas>
                </div>
				<input type="button" class="btn" id="insert_items_close_button" value="{$close_label}">
            </div>
	    <!--/div-->
		<input type="hidden" id="url" value="$url"/>
		<script src="javascripts/html5-dnd-script.js"></script>
DNDROP;
				
	    $ret = <<<INSERTFORM
	<div class="box_div" id="cp_div">
	<div class="box_top_div">{$insert_label} ({$insert_user})</div>
	<div class="box_body_div">	
	<hr>	
	<h3>Drag and Drop your images to 'Drop Area'</h3>
	<p class="smalltext_p">(up to 5 files at a time, size - under 2Mb)</p>
	$drugndrop	
	</div></div>	
INSERTFORM;

		return ($ret);		
	}
	
	//user data add items
	protected function insert_items_dnd() {
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;

        //return 'insert';	
		//static $i = 0;

        $title_label = localize('_titlelabel' ,getlocal());
		$descr_label = localize('_descrlabel' ,getlocal());	
		$insert_label = localize('_insertlabel' ,getlocal());
		
        if (!empty($_FILES['jobfile']) && (!$_FILES['jobfile']['error'])) {//uploaded file
		   
		    $sFileName = $_FILES['jobfile']['name'];
            $sFileType = $_FILES['jobfile']['type'];
            $sFileSize = $_FILES['jobfile']['size'];//GetGlobal('controller')->calldpc_method('fronthtmlpage.bytesToSize1024 use '.$_FILES['jobfile']['size'].'+1');

		    //print_r($_FILES);
		    $tpfile = $_FILES['jobfile']['tmp_name'];
			 
	        if ((is_readable($tpfile)) && 
			    (stristr($sFileType,'image/jpeg'))) {  

			    $code = hash('crc32',decode($UserName)) .$this->user_sep. time();  		
                $jobs_path = $this->path . '/uploads/images/';
                $jobtitle = $code . $this->restype;//decode($UserName).'@'.$sFileName;//'test.jpg';				
				//$id = $this->encode_image_id($jobtitle, $jobs_path);
			   	//$i+=1;
				$id = $sFileSize;

				
                if (move_uploaded_file($tpfile, $jobs_path . $jobtitle)) {

                    $ret = <<<EOF
<div class="s">
<form action="." id="item_details_form" autocomplete="off">
    <p id="save_items_{$id}">
	Your file: {$sFileName} has been successfully received.
    Type: {$sFileType}. Size: {$sFileSize}.<br/>
	<label for="insert_title_input">{$title_label}:</label>
	<input type="text" id="insert_title_input_{$id}" value="{$title}">
	<label for="insert_descr_input">{$descr_label}:</label>
	<input type="text" id="insert_descr_input_{$id}" value="{$descr}">
	<input type="button" onClick="javascript:insert_items_save('{$id}','{$code}')" class="btn" id="insert_items_save_button" value="{$insert_label}">
	</p>
</form>	
</div>
EOF;
        						
				}	
				else						
					$ret = '<div class="f">An error occurred</div>';
            }
			else						
				$ret = '<div class="f">Invalid filetype</div>';
			//ajax call by html5-dnd
            //die($ret);			
			return ($ret);
        }

        return false;  		
	}	
	
	protected function insert_items_save($active=false) {
		$db = GetGlobal('db');	
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;		
		$owner = decode($UserName);
		
		//return ('saved'.implode(',',$_POST));

		$cat = GetReq('cat');
		
		$id = GetParam('id');
		$code = GetParam('code');
		$title = GetParam('itm_title');//insert_title_input_'.$id);
		$descr = GetParam('itm_descr');//insert_descr_input_'.$id);
		
		if (($id) && ($title) /*&& ($descr)*/ && ($cat) && ($code)) {
		    $lan = getlocal();
            $itmname = $lan ? 'itmname' : 'itmfname';
			$itmdescr = $lan?'itmdescr':'itmfdescr';			
		    $catlevels = explode($this->cseparator, $cat);
		    $codeid = $this->getmapf('code');
			//$code = hash('crc32',decode($UserName)) . $this->user_sep . time(); //$id;
		    $sysins = date('Y-m-d h:i:s');
			$act1 = $active ? 1 : 0;
			$act2 = $active ? 101 : 0;
			
			$sSQL = "INSERT into products SET sysins='{$sysins}',{$codeid}='{$code}',{$itmname}='{$title}',owner='{$owner}',";//{$itmdescr}='$descr',
			foreach ($catlevels as $i=>$c)
				$sSQL .= "cat{$i}='{$c}',";
			$sSQL .= "itmactive={$act1},active={$act2}";
			
			$result = $db->Execute($sSQL,1);
            $affected = $db->Affected_Rows();
			
			if (($result) && ($descr)) {
			    $type = '.html';
			    //$one_attachment = remote_paramload('SHKATALOG','oneattach',$this->path);
				$slan = ($this->one_attachment) ? null :($lan?$lan:'0');			
				if (isset($slan))
					$sSQL = "insert into pattachments (data,type,code,lan) values ('". str_replace('<SYN>','+', $descr) ."','" . $type ."','" . $code ."',$slan)";
				else
					$sSQL = "insert into pattachments (data,type,code) values ('". str_replace('<SYN>','+',$descr) ."','" . $type ."','" . $code ."')";
				$db->Execute($sSQL,1);	
				$affected = $db->Affected_Rows();	
			}
			
			return ($affected ? localize('_inputok' ,getlocal()) : localize('_inputerror' ,getlocal()));//$sSQL);
		}
		
		return (localize('_inputerror' ,getlocal()));
    }
	
	protected function modify_items_form() {
		$db = GetGlobal('db');	
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;	
        $id = GetReq('id');
		//return ('modify');
		
        $title_label = localize('_titlelabel' ,getlocal());
		$descr_label = localize('_descrlabel' ,getlocal());	
		$modify_label = localize('_modifylabel' ,getlocal());
		$price0_label = localize('_price0label' ,getlocal());
		$weight_label = localize('_weightlabel' ,getlocal());
		$volume_label = localize('_volumelabel' ,getlocal());
		$active_label = localize('_activelabel' ,getlocal());
		$close_label = localize('close' ,getlocal());

        if ($id) {
		    $lan = getlocal();
            $itmname = $lan ? 'itmname' : 'itmfname';
			$itmdescr = $lan?'itmdescr':'itmfdescr';			
		    $codeid = $this->getmapf('code');
			$code = $id;
			//rename as input field var to post...
			$id = str_replace($this->user_sep,'_',$id);
			
			$sSQL = "SELECT {$itmname},{$itmdescr},price0,weight,volume,active,itmactive FROM products WHERE {$codeid}='{$code}'";
			//$sSQL .= " AND itmactive>0 AND active>0";
			
			$result = $db->Execute($sSQL,2);
			if (!empty($result->fields)) {
			
			    $title = $result->fields[$itmname];
				$descr = $result->fields[$itmdescr];
				$price0 = $result->fields['price0'];
				$weight = $result->fields['weight'];
				$volume = $result->fields['volume'];
				$active_checked = ($result->fields['active']) ? 'checked="checked"' : null;
				$itmactive_checked = ($result->fields['itmactive']) ? 'checked="checked"' : null;
				
                $ret = <<<EOF
<div class="s">
<form action="." id="item_details_form" autocomplete="off">
    <p id="save_items_{$id}">
	<label for="update_title_input">{$title_label}:</label>
	<input type="text" id="update_title_input_{$id}" value="{$title}">
	<label for="update_descr_input">{$descr_label}:</label>
	<input type="text" id="update_descr_input_{$id}" value="{$descr}">
	<label for="update_active_input">{$active_label}:</label>
	<input type="checkbox" id="update_active_checkbox_{$id}" {$active_checked}>
	<label for="update_itmactive_input">{$active_label}:</label>
	<input type="checkbox" id="update_itmactive_checkbox_{$id}" {$itmactive_checked}>
	<label for="update_price0_input">{$price0_label}:</label>
	<input type="text" id="update_price0_input_{$id}" value="{$price0}">
	<label for="update_weight_input">{$weight_label}:</label>
	<input type="text" id="update_weight_input_{$id}" value="{$weight}">	
	<label for="update_volume_input">{$volume_label}:</label>
	<input type="text" id="update_volume_input_{$id}" value="{$volume}">	
	<input type="button" onClick="javascript:update_items_save('{$id}','{$code}')" class="btn" id="update_items_save_button" value="{$modify_label}">
	<input type="button" class="btn" id="update_items_close_button" value="{$close_label}">
	</p>
</form>	
</div>
EOF;
				return ($ret);	
			}
			
			return 'no id';
        }		
	 
		return false;
	}
	
	protected function update_items_save() {
		$db = GetGlobal('db');	
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;
		$owner = decode($UserName);

		$lan = getlocal();
        $itmname = $lan ? 'itmname' : 'itmfname';
		$itmdescr = $lan?'itmdescr':'itmfdescr';			
		$codeid = $this->getmapf('code');	
		
		$id = GetParam('id');
		$code = GetParam('code');
		$title = GetParam('itm_title');
		$descr = GetParam('itm_descr');
		$act1 = GetParam('itm_itmactive') ? 1 : 0;
		$act2 = GetParam('itm_active') ? 101 : 0;			
		$price0 = floatval(str_replace(',','.',GetParam('itm_price0')));
		$weight = floatval(str_replace(',','.',GetParam('itm_weight')));
		$volume = floatval(str_replace(',','.',GetParam('itm_volume')));
		$sysupd = date('Y-m-d h:i:s');
			
		$sSQL = "UPDATE products SET sysupd='{$sysupd}',{$itmname}='{$title}',";//{$itmdescr}='$descr',
		$sSQL .= "itmactive={$act1},active={$act2}, price0={$price0}, weight={$weight}, volume={$volume}";
		$sSQL .= " WHERE {$codeid}='{$code}' AND owner='{$owner}'";
			
		$result = $db->Execute($sSQL,1);
		$affected = $db->Affected_Rows();
		//echo $sSQL;
		//return ($sSQL);

		if (($result) && ($descr)) {
		    $type = '.html';
		    //$one_attachment = remote_paramload('SHKATALOG','oneattach',$this->path);
			$slan = ($this->one_attachment) ? null :($lan?$lan:'0');			
			if (isset($slan)) {
				$sSQL_upd = "UPDATE pattachments SET data='". str_replace('<SYN>','+', $descr) ."' WHERE type='{$type}' AND code='{$code}' AND lan={$slan}";
				$sSQL_ins = "INSERT into pattachments (data,type,code,lan) values ('". str_replace('<SYN>','+', $descr) ."','" . $type ."','" . $code ."',$slan)";
			}	
			else {
				$sSQL_upd = "UPDATE pattachments SET data='". str_replace('<SYN>','+',$descr) ."' WHERE type='{$type}' AND code='{$code}'";
				$sSQL_ins = "INSERT into pattachments (data,type,code) values ('". str_replace('<SYN>','+',$descr) ."','" . $type ."','" . $code ."')";
			}	
			//echo $sSQL_upd;	
			$db->Execute($sSQL_upd,1);			
			$affected = $db->Affected_Rows();	
			if (!$affected) {//try insert
				$db->Execute($sSQL_ins,1);
				$affected = $db->Affected_Rows();
			}	
		}
			
		return ($affected ? localize('_inputok' ,getlocal()) : localize('_inputerror' ,getlocal()));//$sSQL);				
	}
	
	public function get_user_items_button($code=null,$iscombo=false) {//,$cname=null) {
		$db = GetGlobal('db');	
		$UserName = GetGlobal('UserName');
		if (!$UserName) return false;
		$owner = decode($UserName);

		$lan = getlocal();
        $itmname = $lan ? 'itmname' : 'itmfname';
		$itmdescr = $lan?'itmdescr':'itmfdescr';			
		$codeid = $this->getmapf('code');
		$exchange_label = localize('_exchange' ,getlocal());
		$selected = GetParam('exchange_'.$code);
			
		$sSQL = "SELECT {$codeid},{$itmname},{$itmdescr},price0,weight,volume FROM products WHERE";
		$sSQL .= " owner='{$owner}'";
		$sSQL .= " AND {$codeid}<>'{$code}'";//exclude this code
		$sSQL .= " AND itmactive>0 AND active>0 ORDER BY {$itmname}";
		//echo $sSQL;	
		$result = $db->Execute($sSQL,2);
		if (!empty($result->fields)) {
		    $oitems[0] = "--{$exchange_label}--";
			foreach ($result as $i=>$rec) {
				$oitems[$rec[$codeid]] = $rec[$itmname];
			}
			//print_r($oitems);
			$ret = ($iscombo) ?
			        $this->make_combo2('exchange_'.$code,$oitems,$selected,'cart_load_item') :
					$oitems;
			return ($ret);		
		}

		return false; 
	}
	
	public function get_user_item($code=null) {
		$db = GetGlobal('db');	
		$UserName = GetGlobal('UserName');
		if ((!$UserName)||(!$code)) return false;
		$owner = decode($UserName);
		$id = GetParam($code); 

		$lan = getlocal();
        $itmname = $lan ? 'itmname' : 'itmfname';
		$itmdescr = $lan?'itmdescr':'itmfdescr';			
		$codeid = $this->getmapf('code');
		$exchange_label = localize('_exchange' ,getlocal());
			
		$sSQL = "SELECT {$codeid},{$itmname},{$itmdescr},price0,weight,volume FROM products WHERE";
		$sSQL .= " owner='{$owner}' AND {$codeid}='{$id}'";	
		$sSQL .= " AND itmactive>0 AND active>0 ORDER BY {$itmname}";
		//echo $sSQL;	
		$result = $db->Execute($sSQL,2);
		if (!empty($result->fields)) {
			
			$icode = $result->fields[$codeid];
			$price = $result->fields['price0'];
			$weight = $result->fields['weight'];
			$volume = $result->fields['volume'];
			
			$ret = $result->fields['itmname'].
			$ret .= $volume ? '-'.number_format(floatval($price),$this->decimals,',','.') . '&nbsp;&euro;' : null; 
			$ret .= $weight ? '-'.$weight : null; 
			$ret .= $volume ? '-'.$volume : null;
			return (array($icode=>$ret));
		}

		return false; 
	}	
	
	//finalize cart 
	public function finalize($item_id=null, $trid=null, $price=null, $qty=1) {
	    $db = GetGlobal('db');
	    $UserName = GetGlobal('UserName');	
		$user = decode($UserName);
	    if ((!$trid)||(!$item_id)) return false;

		$codeid = $this->getmapf('code');
		
		$sSQL = $this->read_union_item(null,$item_id);	
		$result = $db->Execute($sSQL,2);
		//echo $sSQL,'<br/>';
		
		if (!empty($result->fields)) {
		
		    $code = $item_id;
			$owner = $result->fields['owner'];
			$latitude = 0;
			$longitude = 0;
			$location = $this->get_item_location($code, $owner, $latitude, $longitude);
			
            $query = "INSERT INTO trdata SET isproduct=1,";
			$query.= "code='".$code ."',";
			$query.= "name='" .$result->fields['itmname']."',";			
			$query.= "weight=".($result->fields['weight']?$result->fields['weight']:0).",";
			$query.= "volume=".($result->fields['volume']?$result->fields['volume']:0).",";
			$query.= "latitude=".$latitude.",";
			$query.= "longitude=".$longitude.",";			
			$query.= "owner='".$owner."',";			
			
			//+ or -
			$p_price = ($price<0) ? 
			           ($result->fields['price0']*-1) : 
					   $result->fields['price0'];
			$query.= "value=" .$p_price.",";			
			
			$query.= "qty=".$qty.",";
            $query.= "cid='".$user."',";			
			$query.= "tid='".$trid."'";
			//echo $query .'<br/><br/>';
			$insert = $db->Execute($query,1);
			$affected = $db->Affected_Rows();
			
			return ($affected ? true : false);
		}
		
		return false;
	}	
	
	public function get_item_location($id, $owner=null, &$lat=0, &$long=0) {
	    if (!$id) return false;

		//if app anchor	
		if (strstr($id, $this->app_sep)) {
		    $app = array_pop(explode($this->app_sep,$id)); 
			
		    $o = $owner ? $owner : 
			     $this->app_paramload('INDEX','e-mail', $this->urlpath . '/'. $app . '/cp/');
		
			$lat = $this->app_paramload('INDEX','latitude', $this->urlpath . '/'. $app . '/cp/');
			$long = $this->app_paramload('INDEX','longitude', $this->urlpath . '/'. $app . '/cp/');
			//echo 'app:',$o;
		}//user item code	
		elseif (strstr($id, $this->user_sep)) {
	        //owner come from db union //is not hashed crc32...??	
		    $o = $owner ? $owner : 
			     array_shift(explode($this->user_sep,$id)); 
			
			$this->get_owner_location($o, $lat, $long);//, 1);
			//echo 'user:',$o;
		}
		else {
		    $o = $owner;
			$this->get_owner_location($o, $lat, $long);	
			//echo 'none:',$o;
		}	
				
	}
	
	public function get_owner_location($owner, &$lat=0, &$long=0, $crc32=false) {
	    $db = GetGlobal('db');
		if (!$owner) return false;
		
		if (defined('XIXUSER_DPC')) {
			
			$xym = GetGlobal('controller')->calldpc_method('xixuser.get_user_location use '.$owner.'+'.$crc32);
			if ($xym) {
				$data = explode(',',$xym);
				$lat = $data[0];
				$long = $data[1];
			}
		}
				
	}
	
	//called from cart symbol to exchange -
	public function is_owned_item($id=null) {
	    $UserName = GetGlobal('UserName');	
		if ((!$id)||(!$UserName)) return false;
		$user = decode($UserName);			
		
		//if app anchor	
		if (strstr($id, $this->app_sep)) {
		    $o = array_pop(explode($this->app_sep,$id)); 
			$us = array_shift(explode('@',$user));
			$u = $this->union_prefix . $us;
			
			if ($o === $u) {
			  //echo $o,'-',$u,'>';
			  return true;
			}  
		}//user item code	
		elseif (strstr($id, $this->user_sep)) {	
		    $o = array_shift(explode($this->user_sep,$id));
			$u = hash('crc32',$user);
            //local owner ..exchange on cart line..
			
            if ($o === $u) {
			  //echo $o,'-',$u,'>';
			  return true; 			
			}  
		}
		else {
		    //no owner
		}

        return false;		
	}

    //KATALOG	
	
	//override for ajax
	function show_category_banner($template=null, $enable_ajax=false) {
	    //call from javascript ajax scroll
	    if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_category_banner+'."template+$template"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;

        $ret = parent::show_category_banner($template);
		return ($ret);	
    }			
	
	protected function read_union() {
		$db = GetGlobal('db');
		$order = GetReq('order')?GetReq('order'):GetSessionParam('order');
		$asc = GetReq('asc')?GetReq('asc'):GetSessionParam('asc');
		$page = GetReq('page')?GetReq('page'):0;		
		
		$sSQL = 'select id,name from apps where active=1';
		$appresult = $db->Execute($sSQL,2);
		//echo $sSQL;
		//print_r($appresult->fields);
		
		//CREATE TEMPORARY TABLE temp_union TYPE=HEAP *cool_select_statement_1*;

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {
		
			//INSERT INTO temp_union *cool_select_statement_2*;
			//INSERT INTO `products` (`id`, `code1`, `code2`, `code3`, `code4`, `code5`, `itmname`, `itmactive`, `itmfname`, `itmremark`, `itmdescr`, `itmfdescr`, `sysins`, `sysupd`, `uniida`, `uniname1`, `uniname2`, `uni1uni2`, `uni2uni1`, `ypoloipo1`, `ypoloipo2`, `price0`, `price1`, `cat0`, `cat1`, `cat2`, `cat3`, `cat4`, `active`, `price2`, `pricepc`, `p1`, `p2`, `p3`, `p4`, `p5`, `resources`, `weight`, `volume`) VALUES
            //(1, NULL, NULL, '001', NULL, NULL, 'Προιόν Α', 1, 'My product', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 10, 10, 'products', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
			
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
			$sSQL2 .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .
	                  "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".$this->getmapf('code')." from {$appname}.products " .
					  "WHERE itmactive>0 and active>0)";		  

		}
		
		$sSQL2 .= ' ORDER BY';
		
		switch ($order) {
		    case 1  : $sSQL2 .= ' '.$itmname; break;
		    case 2  : $sSQL2 .= ' price0';break;  
		    case 3  : $sSQL2 .= ' '.$this->getmapf('code'); break;//must be converted to the text equal????
		    case 4  : $sSQL2 .= ' cat0';break;			
		    case 5  : $sSQL2 .= ' cat1';break;
		    case 6  : $sSQL2 .= ' cat2';break;			
		    case 9  : $sSQL2 .= ' cat3';break;						
		    default : $sSQL2 .= ' ' . $this->get_order();
		}
		  
		switch ($asc) {
		    case 1  : $sSQL2 .= ' ASC'; break;
		    case 2  : $sSQL2 .= ' DESC';break;
		    default : $sSQL2 .= $this->get_asc();//' ASC';
		}	
		
		/*if ($this->pager) {
		    $p = $page * $this->pager;
		    $sSQL2 .= " LIMIT $p,".$this->pager; //page element count
		}
		else */
		$sSQL2 .= " LIMIT 100";

		$this->result = $db->Execute($sSQL2,2);
		//echo $sSQL2;
		//print_r($this->result);
		
		//$this->max_items = $db->Affected_Rows();
	    //$this->max_selection = $this->get_max_result();			
			
		//SELECT * FROM temp_union *order_and_group_by_stuff*;			   
		//DROP TABLE temp_union;
	}
	
	protected function default_action() {

		$this->read_union();

		//$out .= $this->show_category_banner(); 
				
		//$out .= 'a'.$this->tree_navigation('klist');
		//$out .= 'b'.$this->show_menu('klist',1,0,'PRODUCTS'.$this->cseparator.'WOL','title',1);
		
		$group = null;//'WOL';
		$out .= $this->show_submenu('klist',1,$group,null,1);
			
		if (!$this->onlyincategory) 
		    $out .= $this->list_katalog(0);//null,'katalog',null,null,1); 
		

	    if ($showasc) 
	        $out .= $this->show_asceding($cmd,null,'myf_select_small',$nopager);
			
		if ($this->pager) 
		  $out .= $this->show_paging($cmd,$mytemplate,$nopager);					
		
	    if ((count($this->result)>0) && ($no_additional_info==null))   
	      $out .= $this->show_availabillity_table(null,1);	   
	
	    //echo '<pre>'; print_r($this->resource); echo '</pre>';
	   
	    if ($resources) 
		  $out .= $this->make_swfobjects($this->result,$this->xmax,$this->ymax);		  	   		   
		  

        //feed links
	    $out .= $this->get_xml_links();
		
		return ($out);
	}
	
	//override handle cat/sub cat navigation
	function tree_browser($cat=null, $prevlevel=false, $nounion=false, $enable_ajax=false) {
		$cat = $cat ? $cat : GetReq('cat'); 
		$out = null;
	  
		if ($this->notreebrowser)
	      return null;	
	
	    //call from javascript ajax scroll
	    if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+tree_browser+'."cat|prevlevel|nounion+$cat|$prevlevel|$nounion+1"); //+1,variable ON, multiple call		
			return ($out);
		}
		//get GET func params when call from scroll
		//print_r($_GET);
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;	
	
	  
		//echo 'z';
		//$tbrowse = $this->treebrowser;
		//$tvtype = $this->treeviewtype;	

		//$mytemplate = $this->select_template('fptreetable');	  
	  
		//$out = $this->show_menu('klist',1,0,$cat,null,1); //tree view
	//	  $out = $this->show_submenu('klist',1);  //submenu only
		//$out = $this->show_navigator('klist'); //nav only	..empty
	  
		//$ctest = explode($this->cseparator,$cat);
		//print_r($ctest);
		//echo count($ctest);	  
	  
		if (($prevlevel) && ($cat)) {
		    $c = explode($this->cseparator,$cat);
			$current = array_pop($c);
			//print_r($c);
			//echo count($c);
			$prevcat = (count($c)>1) ? implode($this->cseparator,$c) : ((!empty($c)) ? $c[0] : null);
			if ($prevcat)
				$out = $this->show_submenu('klist',1,$prevcat,null,1,$nounion);  //submenu only
		}
		else
			$out = $this->show_submenu('klist',1,null,null,1,$nounion);  //submenu only
	  
		return ($out);
	}	
	
	//override
	function lightbox_js() {
	
        if ((iniload('JAVASCRIPT')) && ($this->lightbox) && (!$this->externaljslightbox)) {	
		  
	      //$code = $this->make_swfobjects($this->result,$this->xmax,$this->ymax); //no need..called in list
		  
		  $js = new jscript;
		  
		  $js->load_js("lightbox/prototype.js");	      		      
		  $js->load_js("lightbox/scriptaculous.js?load=effects,builder");
		  $js->load_js("lightbox/lightbox.js");		  		  
		  $js->load_js("swfobject/swfobject.js");	      		      	  		  
          //$js->load_js($code,null,1);		   			   
		  unset ($js);
	    }		
	}	
	
	//called from constructor for func call at fp..always
	function gadgets_js() {
	
        if (iniload('JAVASCRIPT'))  {	
		
	      //$code = $this->make_swfobjects($this->xmax,$this->ymax); //no need..called in lists
		  
		  $js = new jscript;  
		  $js->load_js("swfobject/swfobject.js");	      		      	  		  
          //$js->load_js($code,null,1);		   			   
		  unset ($js);
	    }		
	}
	
	function getiteminfo($id) {
	
       $ret = $this->read_item(null,$id);
	   return ($ret);	
	}
	
	function make_resource_table($id,$resource=null) {
	   //echo $resource;
	   if ($rs = $resource) {
	     $mres = explode(';',$rs);
		 //print_r($mres);
		 foreach ($mres as $r) {
		   $myr = explode(':>>',$r);
		   //print_r($myr);
		   $resource_table[$myr[0]] = urlencode($myr[1]);
		 }
		   
	     $this->resource[$id] = (array) $resource_table;
		 //print_r($this->resource[$id]);
	   }  
	} 
	
	function get_resource($id,$source=null) {
	
	  switch ($source) {
	    case 'http'    : $ret = $this->resource[$id]['http']; break;
	    case 'mpeg'    : $ret = $this->resource[$id]['mpeg']; break;			
	    case 'mp3'     : $ret = $this->resource[$id]['mp3']; break;			
	    case 'avi'     : $ret = $this->resource[$id]['avi']; break;			
	    case 'swf'     : $ret = urldecode($this->resource[$id]['swf']); break;		
	    case 'embed'   : $ret = urldecode($this->resource[$id]['embed']); break;			
	    default        : $ret = $this->resource[$id][0];
	  }
	  
	  return ($ret);   
	}	  		
	
	
	//swf object selected from db
	function make_swfobjects($dbres=null,$x=null,$y=null) {
	  $myx = $x?$x:'300';
	  $myy = $y?$y:'120';
/*
swfobject.embedSWF(swfUrl, id, width, height, version, expressInstallSwfurl, flashvars, params, attributes, callbackFn) has five required and five optional arguments: 
swfUrl (String, required) specifies the URL of your SWF 
id (String, required) specifies the id of the HTML element (containing your alternative content) you would like to have replaced by your Flash content 
width (String, required) specifies the width of your SWF 
height (String, required) specifies the height of your SWF 
version (String, required) specifies the Flash player version your SWF is published for (format is: "major.minor.release" or "major") 
expressInstallSwfurl (String, optional) specifies the URL of your express install SWF and activates Adobe express install. Please note that express install will only fire once (the first time that it is invoked), that it is only supported by Flash Player 6.0.65 or higher on Win or Mac platforms, and that it requires a minimal SWF size of 310x137px. 
flashvars (Object, optional) specifies your flashvars with name:value pairs 
params (Object, optional) specifies your nested object element params with name:value pairs 
attributes (Object, optional) specifies your object's attributes with name:value pairs 
callbackFn (JavaScript function, optional) can be used to define a callback function that is called on both success or failure of embedding a SWF file (see API documentation) 
*/	
      //print_r($dbres);
      //if (($dbres->sql) && (count($dbres)>0)) {	
	  if (!empty($dbres)) {
	    //foreach id....items
	    foreach ($dbres as $n=>$rec) { 
		
		  $id = $rec[$this->getmapf('code')];
		  
	      if ($source = $this->get_resource($id,'swf')) {
		    //$source = "http://tutorials.hostmonster.com/flash/HM_autoresponder_demo_skin.swf"; //test override source
            $ret .= "swfobject.embedSWF(\"$source\", \"$id\", \"$myx\", \"$myy\", \"9.0.0\"); 
";
		  }	
		}
      }  		
      //echo $ret;
	  return ("<script language='javascript'>" . $ret . "</script>");
	
	}
	
	//swf object from local filesystem
	function make_local_swfobjects($res=null,$x=null,$y=null) {
	  $myx = $x?$x:'300';
	  $myy = $y?$y:'120';
	  
	  if (!empty($res)) {
	     foreach ($res as $id=>$rswf) {
		    //$rswf = "http://tutorials.hostmonster.com/flash/HM_autoresponder_demo_skin.swf"; //test override source
            $ret .= "swfobject.embedSWF(\"$rswf\", \"$id\", \"$myx\", \"$myy\", \"9.0.0\"); 
";
         }
      }  		
      //echo $ret;
	  return ("<script language='javascript'>" . $ret . "</script>");
	
	}	
	
	function show_swfobject($id,$content=null,$x=null,$y=null) {
	
	  $myaltcontent = $content?$content:"<p>Alternative content</p>";
	  //echo $myaltcontent;
	
	  //embed with js
      $ret = "<div id=\"$id\">" . $myaltcontent . "</div>";

      return ($ret);
	}
	
	function show_pdfobject($id,$content=null,$x=null,$y=null) {
	  $cat = GetReq('cat');	
	  //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');
	  $addfx = $this->addfx?$this->addfx:100;
	  $addfy = $this->addfy?$this->addfy:null;	
	  $pdf_icon = '/images/icon_pdf.png';	
	  $icon = "<img src=\"" . $pdf_icon . "\"  width=\"$addfx\"";
	  $icon.= $addfy ? "height=\"$addfy\"":null; 
	  $icon.= "border=\"0\" alt=\"". localize('_PDF',getlocal()) . "\">";  
	
	  if (defined('SHDOWNLOAD_DPC')) {
	    if (GetGlobal('controller')->calldpc_var("shdownload.direct"))
		  $ret = seturl("t=download&cat=$cat&id=".$id,$icon);//???? to be direct link 
		else  
	      $ret = seturl("t=download&cat=$cat&id=".$id,$icon);
	  }
	  else {
	    //$ret = 'pdf'.$id; 
		
		$pdf_file = $this->imgpath . $id . '.pdf';					 
		$ret = "<A href=\"$pdf_file\">" . $icon . "</A>";
			 
	  }	
	  
      return ($ret);
	}
	
	function show_exeobject($id,$content=null,$x=null,$y=null,$ct='.exe') {
	  $cat = GetReq('cat');
	  //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');
	  $addfx = $this->addfx?$this->addfx:100;
	  $addfy = $this->addfy?$this->addfy:null;	
	  $exe_icon = '/images/icon_exe.png';	
	  $icon = "<img src=\"" . $exe_icon . "\"  width=\"$addfx\"";
	  $icon.= $addfy ? "height=\"$addfy\"":null; 
	  $icon.= "border=\"0\" alt=\"". localize('_EXE',getlocal()) . "\">";  
		  
	
	  if (defined('SHDOWNLOAD_DPC')) {	
	    if (GetGlobal('controller')->calldpc_var("shdownload.direct"))
		  $ret = seturl("t=download&cat=$cat&id=".$id,$icon);//???? to be direct link 
		else  
	      $ret = seturl("t=download&cat=$cat&id=".$id,$icon);
	  }
	  else {
	    //$ret = $ct.$id;	
		
		$exefile = $this->imgpath . $id . '.exe';					 
		$ret = "<A href=\"$exe_file\">" . $icon . "</A>";		
	  }	

      return ($ret);
	}	
	
	function do_union_quick_search($text2find) {
		$db = GetGlobal('db');
        $parts = explode(" ",$text2find);//get special words in text like code:  	
		$stype = GetParam('searchtype'); //echo $stype;
		$scase = GetParam('searchcase'); //echo $scase;
	    $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;	
		//$incategory = $incategory ? $incategory : GetGlobal('controller')->calldpc_var('shtags.tagcat');//!!!!!NO RESULT
		$incategory = $incategory?$incategory:GetReq('cat');		
	    $lan = getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';		
		
		$sSQL = 'select id,name from apps where active=1';
		$appresult = $db->Execute($sSQL,2);	

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {

			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql		  
	
	        $sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".
				$this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
		  	
		    $sSQL .= " where ";
		  
		    switch ($parts[0]) {
		  
				case 'code:' :  $sSQL .= " ( ".$this->getmapf('code')." like '%" . $this->decodeit($parts[1]) . "%')";
								break;
		  
				default://normal search
		  
								if (defined("SHNSEARCH_DPC")) {
									$sSQL .= '('. GetGlobal('controller')->calldpc_method('shnsearch.findsql use '.$text2find.'+'.$this->getmapf('code').'<@>'.$itmname.'<@>'.$itmdescr.'<@>itmremark++'.$stype.'+'.$scase);		  
								}
								else { 			  	
									$sSQL .= '(' . " ( $itmname like '%" . strtolower($text2find) . "%' or " .
											" $itmname like '%" . strtoupper($text2find) . "%')";	
									$sSQL .= " or ";		   
									$sSQL .= " ( $itmdescr like '%" . strtolower($text2find) . "%' or " .
											" $itmdescr like '%" . strtoupper($text2find) . "%')";				 
									$sSQL .= " or ";		   
									$sSQL .= " ( itmremark like '%" . strtolower($text2find) . "%' or " .
											" itmremark like '%" . strtoupper($text2find) . "%')";				 					 
									$sSQL .= " or ";		   			 
									$sSQL .= " ( ".$this->getmapf('code')." like '%" . strtolower($text2find) . "%' or " .
											" ".$this->getmapf('code')." like '%" . strtoupper($text2find) . "%')";						 
								}			   
	   				 
			}//switch....................................................					
			$sSQL .= ')' ;
		  
			if ($incategory) {	
				$cats = explode($this->cseparator,$incategory);
				foreach ($cats as $c=>$mycat)
					$sSQL .= ' and cat'.$c ." ='" . $mycat . "'";		  	  
			}
		   							  
			$sSQL .= " and itmactive>0 and active>0)";	
			
			$sSQL2 .= $sSQL;
		}  
		  
		return ($sSQL2);  
	}
	
	//override
	function do_quick_search($text2find,$incategory=null) {
        $db = GetGlobal('db');	
		$page = GetReq('page')?GetReq('page'):0;
	    $asc = GetReq('asc')?GetReq('asc'):GetSessionParam('asc');
	    $order = GetReq('order')?GetReq('order'):GetSessionParam('order');		
		$stype = GetParam('searchtype'); //echo $stype;
		$scase = GetParam('searchcase'); //echo $scase;
	    $lan = getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';								
	  
	    $dataerror = null;	
		
		if ($text2find) {
		
          $sSQL .= $this->do_union_quick_search($text2find);
		  
		  //$search_sql = $sSQL;	
		  $sSQL .= ' ORDER BY';
		  
		  switch ($order) {
		    case 1  : $sSQL .= ' '.$itmname; break;
			case 2  : $sSQL .= ' price0';break;  
		    case 3  : $sSQL .= ' '.$this->getmapf('code'); break;//must be converted to the text equal????
			case 4  : $sSQL .= ' cat1';break;			
			case 5  : $sSQL .= ' cat2';break;
			case 6  : $sSQL .= ' cat3';break;			
			case 9  : $sSQL .= ' cat4';break;						
		    default : $sSQL .= ' '.$itmname;
		  }
		  
		  switch ($asc) {
		    case 1  : $sSQL .= ' ASC'; break;
			case 2  : $sSQL .= ' DESC';break;
		    default : $sSQL .= ' ASC';
		  }
		  
		  //echo $sSQL;
		  
		  //LIMITED SEARCH
		  if ($this->pager) {
		    $p = $page * $this->pager;
		    $sSQL .= " LIMIT $p,".$this->pager; //page element count
		  }
		  	
		  if ($dataerror==null) {
		    //echo $sSQL;		  
	        $resultset = $db->Execute($sSQL,2); 
	   	    //print_r($resultset);
	        $this->result = $resultset; 
			//print_r($this->result);
			$this->meter = $db->Affected_Rows();
			$this->max_items = $db->Affected_Rows();
	        $this->max_selection = $this->get_max_result($text2find);	
			//$this->msg = '<hr>' . $this->max_selection . ' ' . localize('_founded',getlocal());
			//echo $this->msg,'>';																		
	      }
		  else {
		    $this->msg = $dataerror;		
			//echo $dataerror;
		  }	
	   	}
	}		
	
	//override app arg
	function get_max_result($text2find=null, $app=null) {
        $db = GetGlobal('db');
		$cat = GetReq('cat');	  
	    //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');
		if ($cat{0}=='-') {
		    $negative = true;
			$cat = substr($cat,1);//drop -
		}			
		$cat_tree = explode($this->cseparator,str_replace('_',' ',$cat));		
		$oper = $negative?' not like ':'='; 
		
	    $lan = getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';	
		$stype = GetParam('searchtype'); //echo $stype;
		$scase = GetParam('searchcase'); //echo $scase;					
		
		if (!$app) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql
			$whereClause = null; //reset
		
			$sSQL = "(select count(id) AS APP_ITEMS from {$appname}.products where ";
		
			if ($text2find) {
		
				if (defined("SHNSEARCH_DPC")) {
					$whereClause = GetGlobal('controller')->calldpc_method('shnsearch.findsql use '.$text2find.'+'.$this->getmapf('code').'<@>'.$itmname.'<@>'.$itmdescr.'<@>itmremark++'.$stype.'+'.$scase);		  
				}
				else {		
						  
					$whereClause = " ( $itmname like '%" . strtolower($text2find) . "%' or " .
							       " $itmname like '%" . strtoupper($text2find) . "%')";	
					$whereClause .= " or ";		   
					$whereClause .= " ( $itmdescr like '%" . strtolower($text2find) . "%' or " .
									" $itmdescr like '%" . strtoupper($text2find) . "%')";				 
					$whereClause .= " or ";		   
					$whereClause .= " ( itmremark like '%" . strtolower($text2find) . "%' or " .
									" itmremark like '%" . strtoupper($text2find) . "%')";				 					 
					$whereClause .= " or ";		   			 
					$whereClause .= " ( ".$this->getmapf('code')." like '%" . strtolower($text2find) . "%' or " .
									" ".$this->getmapf('code')." like '%" . strtoupper($text2find) . "%')";								  		
				}	
				//search in cat...				  
				if ($cat_tree[0])
					$whereClause .= ' and cat0'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[0])));		  
				if ($cat_tree[1])	
					$whereClause .= 'and cat1'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[1])));		 
				if ($cat_tree[2])	
					$whereClause .= 'and cat2'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[2])));		   
				if ($cat_tree[3])	
					$whereClause .= 'and cat3'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[3])));
		   						  
			}
			else {//katalog page
		      	  
				if ($cat_tree[0])
					$whereClause .= ' cat0'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[0])));	
				elseif ($this->onlyincategory)
					$whereClause .= ' (cat0=\'\' or cat0 is NULL) ';					  
				if ($cat_tree[1])	
					$whereClause .= ' and cat1'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[1])));
				elseif ($this->onlyincategory)
					$whereClause .= ' and (cat1=\'\' or cat1 is NULL) ';						 
				if ($cat_tree[2])	
					$whereClause .= ' and cat2'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[2])));		
				elseif ($this->onlyincategory)
					$whereClause .= ' and (cat2=\'\' or cat2 is NULL) ';				   
				if ($cat_tree[3])	
					$whereClause .= ' and cat3'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[3])));
				elseif ($this->onlyincategory)
					$whereClause .= ' and (cat3=\'\' or cat3 is NULL) ';				
		   		
			}
		    
			$sSQL .= $whereClause;				 
			$sSQL .= " and itmactive>0 and active>0)";
			
			$sSQL2 .= $sSQL;
		}
		//echo $sSQL2;	
		
	    $resultset = $db->Execute($sSQL2,2);
		//print_r($resultset);	
 	    //$this->max_cat_items = $resultset->fields[0];//$db->Affected_Rows();			 						
		foreach ($resultset as $r=>$rec)
			$this->max_cat_items += $rec['APP_ITEMS'];
		

		return ($this->max_cat_items);
	}	

	function show_photodb($itmcode=null, $stype=null, $type=null, $app=null) {
		$db = GetGlobal('db');
		if (!$itmcode) return;
		$type = $type?$type:$this->restype;
	  
		if (!$app) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql	  
	  	  
			$sSQL = "select data,type,code from pphotos ";
			$sSQL .= " WHERE code='" . $itmcode . "'";
			if (isset($type))
				$sSQL .= " and type='". $type ."'";
			if (isset($stype))
				$sSQL .= " and stype='". $stype ."'";
				
			$sSQL2 .= $sSQL;	
		}		
		//echo $sSQL2;
	  
		$resultset = $db->Execute($sSQL2,2);	
		$result = $resultset;	  
		$mime_type = 'image/'.str_replace('.','',$result->fields['type']);
		$mime_type = 'image/jpeg';
		//echo $mime_type;
		header('Content-type: ' . $mime_type);

		if ($result->fields['code']) //photo exists
			echo base64_decode($result->fields['data']);
		else {//additional photo or standart nopic
			echo null;
		}  
	  
		die();
	}

    function union_get_photo_url($code=null, $stype='', $app=null) {
	    $db = GetGlobal('db');	

		//if (($app) && (!$this->is_root_app($app))) {
		if (!$app) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql	
	
			$sSQL = "select code from {$appname}.pphotos ";
			$sSQL .= " WHERE code='" . $code . "'";
			$sSQL .= " and type='". $this->restype ."'";
			if (isset($stype))
				$sSQL .= " and stype='". $stype ."'";

            $sSQL2 .= $sSQL;
		}
        return ($sSQL2);		
    }	
	
	//override
	function get_photo_url($code, $photosize=null, $app=null) {
      $db = GetGlobal('db');
	  if (!$code) return; 

      //$app_path = $app ? '/'.$app : '/';	  
	  $app_path = $app ? ($this->is_root_app($app) ? null : '/'.$app) : null;
	  
	  //when we have 3 type of scale image
	  switch ($photosize) {
	       case 3  : $tpath = $this->thubpath_large; 
		             $stype = 'LARGE';
		             break;	   
	       case 2  : $tpath = $this->thubpath_medium; 
		             $stype = 'MEDIUM';
		             break;	   
	       case 1  : $tpath = $this->thubpath_small;
                     $stype = 'SMALL';		   
		             break;
	       default : $tpath = $this->thubpath;	
                     $stype = '';		   
	  }
	  
	  if ($interface = $this->photodb) {
	  
        $sSQL = $this->union_get_photo_url($code, $stype, $app);	
		//echo $sSQL;
	    $resultset = $db->Execute($sSQL,2);	
	    $result = $resultset;
      }
      else
       $result = null;	  
	   
	  if ($result->fields[0]) { 
	     //echo $code;
         if (is_numeric($interface))	  
	       $photo = seturl('t=showimage&id='.$code.'&type='.$stype);
		 else  
		   $photo = $interface . '?id='.$code.'&type='.$stype;
	  }
	  else {//ordinal image
	  
		 $code = $this->encode_image_id($code, $tpath);			  
	  
		 $pfile = $code;//sprintf("%05s",$code); //echo $pfile,"<br>";

	     $photo_file = $this->urlpath . $app_path . $tpath . $pfile . $this->restype;	  
	     //echo $app,':',$photo_file,':',$code,'<br>'; 
		 
	     if (!file_exists($photo_file)) {
	       $photo = $tpath . 'nopic' . $this->restype;	
		 }
	     else {
	       $photo = $app_path . $tpath . $pfile . $this->restype;	
		 }  
	   }//if
	   
	   return ($photo);	 	
	}	
	
	//override.. (app arg added)
	function list_photo($code,$x=100,$y=null,$imageclick=1,$mycat=null,$photosize=null,$clickphotosize=null,$altname=null,$app=null,$enable_ajax=false) {
 		
		$isajax = ((GetReq('t')=='ajax_klist')||(GetReq('t')=='ajax_kshow')) ? true : false; 
        $cmd = ($isajax) ? 'ajax_klist' : ($cmd?$cmd:'klist'); 		
	    $cmd_show = ($isajax) ? 'ajax_kshow' : 'kshow';		
        //echo '------------->',$cmd_show,'-',GetReq('t');
	    //call from javascript ajax scroll
	    /*if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this)."+list_photo+code|x|y|imageclick|mycat|photosize|clickphotosize|altname|app+$code|$x|$y|$imageclick|$mycat|$photosize|$clickphotosize|$altname|$app"); 		
			return ($out);
		}
		//else 
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;
		//...exec func using func params or get...	
		print_r($_GET);
       */	//photosize null.....	
	   
	   //echo $app ? $app.'>' : null;
	   $appanchor = ($this->is_root_app($app)==false) ? $this->app_sep.$app : null;
	   //$appanchor = ($this->is_root_app($app)==false) ? $this->app_sep . str_replace($this->union_prefix,'',$app) : null;
	   
	   $page = GetReq('page')?GetReq('page'):0;		
	   $cat = $mycat?$mycat:GetReq('cat'); 	   
	   
	   //$cat = $mycat ? $mycat : GetGlobal('controller')->calldpc_var('shtags.tagcat');
	   $xfulldist = $this->itemfimagex?$this->itemfimagex:640;
	   $yfulldist = $this->itemfimagey?$this->itemfimagey:null; //free y 480;
	   $a_name = $altname ? $altname : $code;   
	   
	   $photo = $this->get_photo_url($code,$photosize,$app);//define size
	   //echo $photosize,':',$app,'<br/>';

	   if (($resource = $this->get_resource($code,'embed')) && ($this->allow_show_resource)) {
	     $xrep = str_replace('$x$',$this->xmax,$resource);
         $ret = str_replace('$y$',$this->ymax,$xrep);	   
	   }	   
	   elseif (($resource = $this->get_resource($code,'swf')) && ($this->allow_show_resource)) {
	   
	     $myresource = "<img src=\"" . $photo . "\" width=\"$x\"";
		 $myresource.= $y ? "height=\"$y\"":null;
         $myresource.= "border=\"0\" alt=\"". localize('_IMAGE',getlocal()) . "\">";
		 $mylinkedresource = seturl('t='.$cmd_show.'&cat='.$cat.'&id='.$code.'&page='.$page,$myresource);// . "</A>";
		 
	     $ret = $this->show_swfobject($code,$mylinkedresource);
	   }	   
	   else {
	   
	    //echo $imageclick,'<br>';	   
	    if (($imageclick==null) || ((is_numeric($imageclick)) && ($imageclick>=0))) {
	    
	     if ($imageclick==1) {//phot url	
	   
           $clickphoto = $clickphotosize?
		                 $this->get_photo_url($code,$clickphotosize,$app):
		                 $this->get_photo_url($code,$photosize,$app);
		   
           if (iniload('JAVASCRIPT')) {	
				   
		     if ($this->lightbox) {
                $plink = "<A href=\"$clickphoto\" rel='lightbox[$code]' title='$a_name'>";			 
			 }
			 else {
  	           $plink = "<a href=\"#\" ";	   
	           //call javascript for opening a new browser win for the img		   
	           //$params = $photo . ";Image;width=300,height=200;";
	           $params = "$clickphoto;$xfulldist;$yfulldist;<B>$title</B><br>$descr;";			 

			   $js = new jscript;
	           $plink .= $js->JS_function("js_popimage",$params); 
			   unset ($js); 

	           $plink .= ">";
			 }
	       }
	       else
             $plink = "<A href=\"$photo\">";

			$lo = "<img src=\"" . $photo . "\" width=\"$x\"";
 			$lo.= $y ? "height=\"$y\"" : null; 
			$lo.= "border=\"0\" alt=\"$a_name". localize('_IMAGE',getlocal()) . "\">" . "</A>"; 
	        $ret = $plink . $lo;
		  }
		  elseif ($imageclick==2) {//product url
		    //echo 'c';
            $myresource = "<img src=\"" . $photo . "\" width=\"$x\"";
 			$myresource.= $y ? "height=\"$y\"" : null;
			$myresource.= "border=\"0\" alt=\"$a_name". localize('_IMAGE',getlocal()) . "\">";
		  
		    $purl = seturl("t=$cmd_show"."&cat=".$cat."&id=".$code,null,null,null,null,$this->rewrite); 
		    $ret = ($isajax) ? seturl('#',$myresource,null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite):
							  "<A href=\"$purl\">" . $myresource . "</A>";
		  }
		  elseif ($imageclick==0) {//item link
		    //echo 'b';
		    $myresource = "<img src=\"" . $photo . "\" width=\"$x\"";
			$myresource.= $y ? "height=\"$y\"" : null;
			$myresource.= "border=\"0\" alt=\"$a_name". localize('_IMAGE',getlocal()) . "\">";
			
			$purl = seturl('t='.$cmd_show.'&cat='.$cat.'&page='.$page.'&id='.$code.$appanchor,null,null,null,null,$this->rewrite);
		    $ret = ($isajax) ? seturl('#',$myresource,null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite):
		                       seturl('t='.$cmd_show.'&cat='.$cat.'&page='.$page.'&id='.$code.$appanchor,$myresource,null,null,null,$this->rewrite);
		  } 
		  else {//item link
		    //echo 'a';
            $myresource = "<img src=\"" . $photo . "\" width=\"$x\"";
			$myresource.= $y ? "height=\"$y\"" : null;
			$myresource.= "border=\"0\" alt=\"$a_name". localize('_IMAGE',getlocal()) . "\">";		  
			
			$purl = seturl('t='.$cmd_show.'&cat='.$cat.'&page='.$page.'&id='.$code.$appanchor,null,null,null,null,$this->rewrite);
		    $ret = ($isajax) ? seturl('#',$myresource,null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite):
			                   seturl('t='.$cmd_show.'&cat='.$cat.'&page='.$page.'&id='.$code.$appanchor,$myresource,null,null,null,$this->rewrite);// . "</A>";
		  } 
		}
		else {
		  $plink = "<A href=\"$imageclick\">";
          $ret = $plink . "<img src=\"" . $photo . "\" width=\"$x\" height=\"$y\" border=\"0\" " . "></A>";           		
	    } 	   		
	   }//resource
		
	   return ($ret);
	}	

    function read_union_list($cat=null) {
		$db = GetGlobal('db');	
		$lan = getlocal();
	    $mylan = $lan?$lan:'0';
		$f = ($this->usetablelocales) ? $mylan : null;
		
		if ($cat{0}=='-') {
		    $negative = true;
			$cat = substr($cat,1);//drop -
		}	 
		//echo $negative,'>';
		$oper = $negative?' not like ':'='; 		
		
		$cat_tree = explode($this->cseparator,str_replace('_',' ',$cat)); 
		//print_r($cat_tree);
		
		//DONT ALLOW LIST ITEMS IN ROOT/FIRST CAT LEVEL
		if (count($cat_tree)>1) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);	
		}
		else //only root app items
		    $appresult[0]['name'] = $this->default_app_name;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	

			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql
            $whereClause = null; //reset where			
	
	        $sSQL = "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	              "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				  $this->getmapf('code').
				  $lastprice .
				  " from {$appname}.products ";
		    $sSQL .= " WHERE ";		   
		      	  
		    if ($cat_tree[0])
			    $whereClause .= ' cat0'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[0])));		
			elseif ($this->onlyincategory)
			 	$whereClause .= ' (cat0 IS NULL OR cat0=\'\') ';				  
		    if ($cat_tree[1])	
		 	    $whereClause .= ' and cat1'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[1])));	
			elseif ($this->onlyincategory)
			 	$whereClause .= ' and (cat1 IS NULL OR cat1=\'\') ';	 
		    if ($cat_tree[2])	
			    $whereClause .= ' and cat2'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[2])));	
			elseif ($this->onlyincategory)
			 	$whereClause .= ' and (cat2 IS NULL OR cat2=\'\') ';		   
		    if ($cat_tree[3])	
			    $whereClause .= ' and cat3'.$oper . $db->qstr(rawurldecode(str_replace('_',' ',$cat_tree[3])));
			elseif ($this->onlyincategory)
			 	$whereClause .= ' and (cat3 IS NULL OR cat3=\'\') ';
		   		
		    
		    $sSQL .= "(".$whereClause.")";				 
		    $sSQL .= " and itmactive>0 and active>0)";

            $sSQL2 .= $sSQL;			
        }
        return ($sSQL2); 		
    }	
	
	//override
	function read_list($ajax=false) {
        $db = GetGlobal('db');	
	    $asc = GetReq('asc')?GetReq('asc'):GetSessionParam('asc');
	    $order = GetReq('order')?GetReq('order'):GetSessionParam('order');	
		$page = GetReq('page')?GetReq('page'):0;
		$negative = false;
	    $lan = getlocal();
	    $mylan = $lan?$lan:'0';
	    $itmname = $mylan?'itmname':'itmfname';
	    $itmdescr = $mylan?'itmdescr':'itmfdescr';	
        $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;			
	   
	    if ($this->usetablelocales)
	      $f = $mylan; 
	    else
	      $f = null;		
		

		$cat = GetReq('cat');	
        //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');	//?????			
		
		if ($cat!=null) {		   
		  
            $sSQL = $this->read_union_list($cat);		   
		    $sSQL .= ' ORDER BY';
		  
		    switch ($order) {
		      case 1  : $sSQL .= ' '.$itmname; break;
			  case 2  : $sSQL .= ' price0';break;  
		      case 3  : $sSQL .= ' '.$this->getmapf('code'); break;//must be converted to the text equal????
			  case 4  : $sSQL .= ' cat0';break;			
			  case 5  : $sSQL .= ' cat1';break;
			  case 6  : $sSQL .= ' cat2';break;			
			  case 9  : $sSQL .= ' cat3';break;						
		      default : $sSQL .= ' '.$itmname;
		    }
		  
			switch ($asc) {
				case 1  : $sSQL .= ' ASC'; break;
				case 2  : $sSQL .= ' DESC';break;
				default : $sSQL .= ' ASC';
			}
		  
			if ($this->pager) {
				$p = $page * $this->pager;
				$sSQL .= " LIMIT $p,".$this->pager; //page element count
			}
			
			//echo $sSQL;
	   
			$resultset = $db->Execute($sSQL,2);
			//$ret = $db->fetch_array_all($resultset);	 
			//if ($this->usetablelocales) 
				//print_r($resultset);  
			$this->result = $resultset; 
			$this->max_items = $db->Affected_Rows();//count($this->result);
	      
			if ($this->max_items==1) {
				//echo $this->result->fields[$this->getmapf('code')];
				return ($this->result->fields[$this->getmapf('code')]); //to view the item without click on dir
			}
			else { 
				//echo '>',$this->max_items;
				$this->max_selection = $this->get_max_result();			
				return (null);
			}	
		}
		
	}	
	
	//ajax read list..fetch partial data
	protected function ajax_read_list() {
	    $ajax = GetReq('ajax');

		if ($ajax) {
		
		    echo 'ajax';
			$this->read_list(true);
			
			//fetch items  								
		    $ret = $this->list_katalog(0);
			return ($ret);
        }
		else
			$this->read_list();//as usual..first time
	}
	
	function read_union_item($direction=null,$item_id=null) {
		$db = GetGlobal('db');	
		$myitem = $item_id ? $item_id : GetReq('id');	
		
	    /*if ($item_id) {
			$item = $item_id;
			//SetReq('id',$item_id);//for edit purposes
			$_GET['id'] = $item_id;//for edit purposes
			//print_r($_GET);		  
		}  
		else {	
			$id = GetReq('id');// ? GetReq('id') : GetGlobal('controller')->calldpc_var('shtags.tagitem');//????	
			$item = GetReq('listm')?GetReq('listm'):$id;//GetReq('id');
		} */ 
		
        //if app anchor	
		if (strstr($myitem,$this->app_sep)) {
		    $anchor_code = explode($this->app_sep,$myitem);
			$item_id = $id = $anchor_code[0];
			$app = $anchor_code[1];
			
			//select app owner
			$o = $this->app_paramload('INDEX','e-mail', $this->urlpath .'/'. $app . '/cp/');
			$owner = "'$o' as owner,";
			//echo 'app:',$app,':',$owner,':',$this->urlpath . '/'. $app . '/cp/';
		}
		elseif (strstr($myitem,$this->user_sep)) { //post user item
			$anchor_code = explode($this->user_sep,$myitem);
			$item_id = $id = $myitem;
			$app = $this->default_app_name;
			
			//select owner field
			$owner = 'owner,';
		}
        else {
            $item_id = $id = $myitem;  		
			$app = $this->default_app_name;
			
			//select no owner = xix owner
			$o = remote_paramload('INDEX','e-mail', $this->path);
			$owner = "'$o' as owner,";
		}
        $item = GetReq('listm')?GetReq('listm'):$id; 		
		
		if (GetReq('cat')!=null) {
		  $cat = GetReq('cat');		
		  //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');
		}  			
		$lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;		

		if (!$app) {		
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;
		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql			
		
			$sSQL = "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .
					"price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,weight,volume,".
					$owner .
					$this->getmapf('code') .
					$lastprice .				
					" from {$appname}.products ";
					
			switch ($direction) {
		
				case 'next':
							$next_sql = "select id from products where ".$this->getmapf('code').">";
							$next_sql.= $this->codetype=='string'?$db->qstr($item):$item;$item;
							//if (isset($cat)) $next_sql .= " and type=" . $db->qstr($cat);
							//if (isset($subcat)) $next_sql .= ' and type2=' . $db->qstr($subcat);		
							$next_sql .= " and active=1";
		  		  
							$rset = $db->Execute($next_sql,2);
							//$nret = $db->fetch_array($rset);	 //only one set
							$this->list_item = $next_item = $nret[0]?$nret[0]:$item; 			  
							$sSQL .= " WHERE ".$this->getmapf('code')."=";
							$sSQL .= $this->codetype=='string'?$db->qstr($next_item):$next_item;
		  
							if (($lock = $this->itemlockparam) && (!GetGlobal('UserID')))
								$sSQL .=  ' and ' . $lock . ' is null';		  
							break;
		  
				case 'prev':
							$prev_sql = "select ".$this->getmapf('code')." from products where ".$this->getmapf('code')."<";
							$prev_sql.= $this->codetype=='string'?$db->qstr($item):$item;$item;
							//if (isset($cat)) $prev_sql .= " and type=" . $db->qstr($cat);
							//if (isset($subcat)) $prev_sql .= ' and type2=' . $db->qstr($subcat);		
							$prev_sql .= " and active=1";
		  		  		  
							$rset = $db->Execute($prev_sql,2);
							//$nret = $db->fetch_array($rset);	 //only one set
							$this->list_item = $prev_item = $nret[0]?$nret[0]:$item; 		  		  
							$sSQL .= " WHERE ".$this->getmapf('code')."=";
							$sSQL .= $this->codetype=='string'?$db->qstr($prev_item):$prev_item;
		  
							if (($lock = $this->itemlockparam) && (!GetGlobal('UserID')))
								$sSQL .=  ' and ' . $lock . ' is null';		  
							break;
		   
				default : 
							$sSQL .= " WHERE ".$this->getmapf('code')."=";
							$sSQL .= $this->codetype=='string'?$db->qstr($item):$item;
		  
							if (($lock = $this->itemlockparam) && (!GetGlobal('UserID')))
								$sSQL .=  ' and ' . $lock . ' is null';

                            $sSQL .= ')';								
			} 	 					
					
			$sSQL2 .= $sSQL;		
        }	

        return ($sSQL2);		
	}
	
	//override
	function read_item($direction=null,$item_id=null) {
        $db = GetGlobal('db');	

        $sSQL = $this->read_union_item($direction,$item_id);		   
	    //echo $sSQL;
	   
	    $resultset = $db->Execute($sSQL,2);
	    //$ret = $db->fetch_array_all($resultset);	 
	    //print_r($ret);  
	    $this->result = $resultset; 	
	    //print_r($this->result);	
	   
	    return ($resultset);   
	}		
	
	//override
	function list_katalog($imageclick=null,$cmd=null,$template=null,$no_additional_info=null,$external_read=null,$photosize=null,$resources=null,$nopager=null,$nolinemax=null,$originfunction=null) {

	   $isajax = ((GetReq('t')=='ajax_klist')||((GetReq('t')=='ajax_kshow'))) ? true : false; 	
	   $cmd = ($isajax) ? GetReq('t') : ($cmd?$cmd:'klist');
	   $cmd_show = ($isajax) ? 'ajax_kshow' : 'kshow';
	   
	   $lan = getlocal();
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';
	   $pz = $photosize?$photosize:1;		   
	   $xdist = $this->imagex?$this->imagex:100;
	   $ydist = $this->imagey?$this->imagey:null;//free y 75;	
       $cat = GetReq('cat');//GetGlobal('controller')->calldpc_var('shtags.tagcat');	   
	   //echo $cat,':',$tagcat; 

	   if ($nolinemax)
	     $mylinemax = null;
	   else
	     $mylinemax = $this->linemax;  	   
	   
	   if ($this->imageclick>0)
	     $myimageclick = 1;
	   else	 
	     $myimageclick = $imageclick;
		   
       if ($template) {
	     $tmpl = explode('.',$template);
	     $mytemplate = $this->select_template($tmpl[0],$cat);		
	   }
	   else
	     $mytemplate = $this->select_template('fpkatalog',$cat);		

	   //if ($external_read==null) {
   	   /*if (!$this->result->sql) { //AUTOMATED...when sql exist by prev query dont read a new
	   
	     $is_one_item = $this->read_list(); //read records
	     if ($is_one_item) { 
	       //echo $is_one_item,'>';
		   $this->read_item($this->direction,$is_one_item);
		   $out = $this->show_item();
		   return ($out);
	     }
	   }*/
       
       if ($this->oneitemlist) {
	     if (!$this->result->sql) { //AUTOMATED...when sql exist by prev query dont read a new
		   $is_one_item = $this->read_list(); //read records
	       if ($is_one_item) { 
	         //echo $is_one_item,'>';
		     $this->read_item($this->direction,$is_one_item);
		     $out = $this->show_item();
		     return ($out);
	       }		   
		 }
		 elseif (!$external_read) { //event read the list..if not called by a phpdac page call
		   if ($itemcode = $this->my_one_item) {
	         //echo $this->my_one_item,'>';
		     $this->read_item($this->direction,$itemcode);
		     $out = $this->show_item();
		     return ($out);		   
		   }	   
		 }		 
       } 	   
	   //print_r($this->result);
	   
	   if ($this->msg) $out = $this->msg;	   
	   
	   //set if show this up and down (2) or only up (1) or nothing 0
	   //if ((!$this->listcontrols)||($this->listcontrols>1))	   

	   //if (count($this->result)>0) {	
	   if (!empty($this->result)) {		   

		$pp = $this->read_policy();

        //top asc		
		//if ($this->max_cat_items>0)	 	   
	      //$out .= $this->show_asceding($cmd,$mytemplate,'myf_select_small',$nopager);	

		$records = $this->result;  //echo 'B';  
	
	    foreach ($this->result as $n=>$rec) {
		
		   $appanchor = ($this->is_root_app($rec['DB_NAME'])==false) ? $this->app_sep.$rec['DB_NAME'] : null;	
		   /*if ($this->is_root_app($rec['DB_NAME'])==false) {
				$union_code = str_replace($this->union_prefix,'',$rec['DB_NAME']);
                $appanchor = $this->app_sep.$union_code;				
		   }*/
		   //echo $appanchor.'-'.$pcode.'<br/>';
		
		   //memory limit prevention
		   //echo 'mem limit 33554432:',memory_get_peak_usage(true);//memory_get_usage();
		   $mem = memory_get_peak_usage(true);//memory_get_usage();
		   /*if ($mem>16000000) {
		     $mem_msg = '<br><h2>WARNING:Memory allocation failed, reduce page view limit!</h2>';
		     break;
		   }*/	
		   
		   if ($resources)		   
		     $this->make_resource_table($rec[$this->getmapf('code')],$rec['resources']);		   

           $cat = $this->getkategories($rec);
		   $ucat = urlencode($cat);

		   if ($rec[$pp]>0) { 
		     $myp = $this->spt($rec[$pp]);
		     $price = $myp?$myp:'&nbsp;';//($myp?number_format($myp,$this->decimals,',','.'):"&nbsp;");
		   }	 
		   else 	 
		     $price = $this->zeroprice_msg;		
		 
		   $lastprice = $rec[$this->getmapf('lastprice')]?'<del>'.number_format($rec[$this->getmapf('lastprice')],$this->decimals,',','.').'&nbsp;&euro;</del><br/>':null;		 		   
		   
		   if ((GetGlobal('UserID')) || (seclevel('SHKATALOG_CART',$this->userLevelID))) {//logged in or sec ok
		     $cart_code = $rec[$this->getmapf('code')].$appanchor;
			 $cart_title = $this->replace_spchars($rec[$itmname]);
			 $cart_group = $cat;
			 $cart_page = GetReq('page')?GetReq('page'):0;
			 $cart_descr = $this->replace_spchars($rec[$itmdescr]);
			 $cart_photo = $rec[$this->getmapf('code')];//$this->get_photo_url($rec[$this->getmapf('code')],$pz);
			 $cart_price = $price;
			 $cart_qty = 1;//???
			 if ($this->appkey->isdefined("SHCART_DPC"))
				$cart = GetGlobal('controller')->calldpc_method("shcart.showsymbol use $cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty;+$cat+$cart_page",1);//'cart';
			 else
                $cart = null;  			 
			 $array_cart = $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty");	   
		   }
		   
		   $availability = $this->show_availability($rec['ypoloipo1']);	
		   $details = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].'#DETAILS',$this->details_button,null,null,null,$this->rewrite);	   
           $detailink = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].'#DETAILS',$this->details_button,null,null,null,$this->rewrite);		   
		   $itemlink = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code').$appanchor],null,null,null,null,$this->rewrite);
		   
		   $purl = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,null,null,null,null,$this->rewrite);
		   
		   if (($this->appkey->isdefined("SHCART_DPC")) && ($price>0)) {
		        $lsprice = $lastprice ? $lastprice.$this->moneysymbol.'&nbsp;':null;
		        $cartname = $rec[$itmname];//.'&nbsp;'.$lsprice . number_format(floatval($price),$this->decimals,',','.');
				
				$itemlinkname = ($isajax) ? seturl('#',$cartname,null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite): 
				                            seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,$cartname,null,null,null,$this->rewrite);		   
		   }		
		   else {
				$itemlinkname = ($isajax) ? seturl('#',$rec[$itmname],null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite) : 
											seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,$rec[$itmname],null,null,null,$this->rewrite);		   
		   }		
		   		   
		   
		   if ($mytemplate) {
		   
              //// tokens method		  
			  $tokens[] = $itemlinkname;
			  $tokens[] = $rec[$itmdescr];
			  $tokens[] = $this->list_photo($rec[$this->getmapf('code')],$xdist,$ydist,$myimageclick,$ucat,$pz,null,$rec[$itmname],$rec['DB_NAME']);
			  //$tokens[] = $rec['uniname1']; 
			  //units + qty
			  if ($this->appkey->isdefined("SHCART_DPC")) 
			    $in_cart = GetGlobal('controller')->calldpc_method("shcart.getCartItemQty use ".$rec[$this->getmapf('code')].$appanchor);
			  $incart = $in_cart?':<B>'.$in_cart.'</B>':null;
			  $units = $rec['uniname2'] ? 
			           localize($rec['uniname1'],getlocal()) .'/'. localize($rec['uniname2'],getlocal()):
					   localize($rec['uniname1'],getlocal());  
			  $tokens[] = $units;// . $incart;			  
			  
			  $tokens[] = $rec['itmremark'];//$this->getmapf('code')], 
			  $tokens[] = $lastprice . number_format(floatval($price),$this->decimals,',','.');//$price;
			  $tokens[] = $cart;
			  $tokens[] = $availability;
			  $tokens[] = $details;
			  $tokens[] = $detailink;
			  $tokens[] = $rec[$this->getmapf('code')];
			  $tokens[] = $itemlink;	
			  
			  $tokens[] = $in_cart?$in_cart:'0';
			  $tokens[] = $array_cart;	
			  $tokens[] = $this->get_photo_url($rec[$this->getmapf('code')],2,$rec['DB_NAME']);	
			  $tokens[] = rand()+$n;//$rec[$itmname];
		      
			  if ($mylinemax>1) {//table view
			    $items[] = $this->combine_tokens($mytemplate, $tokens, true);//<<exec after tokens replace		
				unset($tokens);													 
			  }									 
			  else {							 			  	
			    $toprint .= $this->combine_tokens($mytemplate, $tokens, true);//<<exec after tokens replace		
				unset($tokens);														 
			 }									 
		   }	 				   	   	   
		   else {		   				   	

	         $viewdata[] = $this->list_photo($rec[$this->getmapf('code')],$xdist,$ydist,$myimageclick,$ucat,$pz,null,$rec[$itmname],$rec['DB_NAME']);
	         $viewattr[] = "left;5%";		   					   	   	   
		   
		     $viewdata[] = "<b>" . /*($rec[$itmname]?$rec[$itmname]:"&nbsp;")*/($rec[$itmname]?$itemlinkname:"&nbsp;") . "</b><br>" . 
						 ($rec[$itmdescr]?$rec[$itmdescr]:"&nbsp;");
		     $viewattr[] = "left;70%";	
		   
		   
	         $viewdata[] = "<b>" . $rec[$this->getmapf('code')] . "</b>" .//. "<br>" . localize($rec['uniname1'],getlocal())."<br>".
		                 "<h2>". number_format(floatval($price),$this->decimals,',','.') . "&#8364"/*writecl($price,'#FF0000','#FFFFFF')*/."</h2><br>" .
						 $cart . $availability;
	         $viewattr[] = "center;25%";			   		   
		   	   		   	   		   	   		   
		   
	         $myrec = new window('',$viewdata,$viewattr);
	         $toprint .= $myrec->render("center::100%::0::group_article_selected::left::5::5::");
	         unset ($viewdata);
	         unset ($viewattr);	
		   
		     $toprint .= "<hr/>";
		   }//template	
		  } 
		  
		  //table generation
		  if ($mylinemax>1)
			$toprint .= $this->make_table($items, $mylinemax, 'fpkatalogtable');  	  
	      		  
	      //set if show this up and down (2) or only up (1) or nothing 0
	      //if ((!$this->listcontrols)||($this->listcontrols>2))
		  //echo '>',$this->max_cat_items;
		  		  
  		  if ($this->max_cat_items>0) {

	        $toprint .= $this->show_asceding($cmd,$mytemplate,'myf_select_small',$nopager);
			
			//if (!$nopager) ..func attr
	        $toprint .= $this->show_paging($cmd,$mytemplate,$nopager);		  
		  }
					
	   }
	   //else
		  //$toprint .= $this->show_lastentries();	
		  //$toprint .= "<h2>" .localize('_nofound',getlocal()). "</h2><br>";
	
	   if ($mytemplate) {
	     $out .= $toprint . $mem_msg;
	   }
	   else {
         $mywin = new window(/*$this->title*/'',$toprint . $mem_msg);
         $out .= $mywin->render();	
	   }	 
	   
	   
	   if ((count($this->result)>0) && ($no_additional_info==null)) {
	 	 if ($this->max_cat_items>0)
	       $out .= $this->show_availabillity_table(null,1);	      	 
	   }	   	 		
		 
	   if ($resources)
		 $out .= $this->make_swfobjects($this->result,$this->xmax,$this->ymax);	

       //feed links
	   if ((GetReq('id') || GetReq('cat')) && ($originfunction!==false))
         $out .= $this->get_xml_links(null,null,$originfunction);			 
	
	   //dynamic insert item..into xmllinks
	   //$out .= $this->dyn_insert_button();
	   
	   return ($out);	
	}	
	
	//override
    function list_katalog_table($linemax=2,$imgx=null,$imgy=null,$imageclick=0,$showasc=0,$cmd=null,$template=null,$no_additional_info=null,$lang=null,$external_read=null,$photosize=null,$resources=null,$nopager=null,$originfunction=null) {
	   //$cmd = $cmd?$cmd:'klist';	
	   $isajax = ((GetReq('t')=='ajax_klist')||((GetReq('t')=='ajax_kshow'))) ? true : false; 	
	   $cmd = ($isajax) ? GetReq('t') : ($cmd?$cmd:'klist');
	   $cmd_show = ($isajax) ? 'ajax_kshow' : 'kshow';	   
	   
	   $page = GetReq('page')?GetReq('page'):0;			   
	   $lan = $lang?$lang:getlocal();
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';	   
	   $pz = $photosize?$photosize:1;
	   $xdist = ($imgx?$imgx:160);
	   $ydist = ($imgy?$imgy:120);
	   $cat = GetReq('cat');
	   //$cat = GetGlobal('controller')->calldpc_var('shtags.tagcat');

	   if (remote_paramload('SHKATALOG','imageclick',$this->path)>0)
	     $myimageclick = 1;
	   else	 
	     $myimageclick = $imageclick;	   
	   
	   $mytemplate = $this->select_template($template,$cat,1);

	   //if (!$this->result->sql) { //AUTOMATED...when sql exist by prev query dont read a new
	   	 //echo 'z<br>';      	
	     //$is_one_item = $this->read_list(); 
		 //SERVER ERROR 500 when on table view beside list view..disable it
	     /*if ($is_one_item) {
	       //echo $is_one_item,'>';
		   $this->read_item($this->direction,$is_one_item);
		   $out = $this->show_item();
		   return ($out);
	     }*/		   
	   //}
	   
       if ($this->oneitemlist) {
	     if (!$this->result->sql) { //AUTOMATED...when sql exist by prev query dont read a new
		   $is_one_item = $this->read_list(); //read records
	       if ($is_one_item) { 
	         //echo $is_one_item,'>';
		     $this->read_item($this->direction,$is_one_item);
		     $out = $this->show_item();
		     return ($out);
	       }		   
		 }
		 elseif (!$external_read) { //event read the list..if not called by a phpdac page call
		   if ($itemcode = $this->my_one_item) {
	         //echo $this->my_one_item,'>';
		     $this->read_item($this->direction,$itemcode);
		     $out = $this->show_item();
		     return ($out);		   
		   }
		 }		 
       } 		   
		
	   if ($this->msg) $ret = $this->msg;

	   //if (count($this->result)>0) {	
	   if (!empty($this->result)) {
	   
        $pp = $this->read_policy();		
	    //$ret .= $this->show_asceding();		
	
	    foreach ($this->result as $n=>$rec) {
		
		   $appanchor = ($this->is_root_app($rec['DB_NAME'])==false) ? $this->app_sep.$rec['DB_NAME'] : null;			
		   /*if ($this->is_root_app($rec['DB_NAME'])==false) {
				$union_code = str_replace($this->union_prefix,'',$rec['DB_NAME']);
                $appanchor = $this->app_sep.$union_code;				
		   }*/		   
		   //echo $appanchor.'-'.$pcode.'<br/>';
		
		   $mem = memory_get_peak_usage(true);//memory_get_usage();
		   /*if ($mem>16000000) {
		     $mem_msg = '<br><h2>WARNING:Memory allocation failed, reduce page view limit!</h2>';
		     break;
		   }*/	
		   
		   if ($resources)
		     $this->make_resource_table($rec[$this->getmapf('code')],$rec['resources']);
		
           $cat = $this->getkategories($rec);	
		   $ucat = urlencode($cat);
		
		   if ($rec[$pp]>0) { 
		     $myp = $this->spt($rec[$pp]);
		     $price = $myp?$myp:'&nbsp;';//($myp?number_format($myp,$this->decimals,',','.'):"&nbsp;");
		   }	
		   else 	 
		     $price = $this->zeroprice_msg;
			 
		   $lastprice = $rec[$this->getmapf('lastprice')]?'<del>'.number_format(floatval($rec[$this->getmapf('lastprice')]),$this->decimals,',','.').'&nbsp;&euro;</del><br/>':null;
		   			 
		   $pfile = sprintf("%05s",$rec[$this->getmapf('code')]); //echo $pfile,"<br>";
		   
		   if (($user=GetGlobal('UserID')) || (seclevel('SHKATALOG_CART',$this->userLevelID))) {//logged in or sec ok		   
		     $cart_code = $rec[$this->getmapf('code')].$appanchor;
			 $cart_title = $this->replace_spchars($rec[$itmname]);
			 $cart_group = $cat;
			 $cart_page = GetReq('page')?GetReq('page'):0;
			 $cart_descr = $this->replace_spchars($rec[$itmdescr]);
			 $cart_photo = $rec[$this->getmapf('code')];//$this->get_photo_url($rec[$this->getmapf('code')],$pz);
			 $cart_price = $price;
			 $cart_qty = 1;//???
			 if ($this->appkey->isdefined("SHCART_DPC"))
				$icon_cart = GetGlobal('controller')->calldpc_method("shcart.showsymbol use $cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty;+$cat+$cart_page",1);//'cart';
			 else	
			    $icon_cart = null;
			 $array_cart = $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty");	   
		   }
           else
		     $icon_cart = null;			 			 
		     //echo $user,'>',$icon_cart;
		   
		   $availability = $this->show_availability($rec['ypoloipo1']);		
		   $details = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].'#DETAILS',$this->details_button,null,null,null,$this->rewrite);	   
           $detailink = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].'#DETAILS',$this->details_button,null,null,null,$this->rewrite);		   
		   $itemlink = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,null,null,null,null,$this->rewrite);
		   
		   $purl = seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,null,null,null,null,$this->rewrite);
		   
		   if (($this->appkey->isdefined("SHCART_DPC")) && ($price>0)) {
		        $lsprice = $lastprice ? $lastprice.$this->moneysymbol.'&nbsp;':null;
		        $cartname = $rec[$itmname];//.'&nbsp;'. $lsprice . number_format(floatval($price),$this->decimals,',','.') . $this->moneysymbol;
		        $itemlinkname = ($isajax) ? seturl('#',$cartname,null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite) :
											seturl('t=kshow&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,$cartname,null,null,null,$this->rewrite);		   
		   }		
		   else {
		   
		        $itemlinkname = ($isajax) ? seturl('#',$rec[$itmname],null,"onClick=\"ajaxcall('xixcp_div', '$purl');\"",null,$this->rewrite) : 
				                            seturl('t='.$cmd_show.'&cat='.$ucat.'&page='.$page.'&id='.$rec[$this->getmapf('code')].$appanchor,$rec[$itmname],null,null,null,$this->rewrite);		   
		   }		
		   		 

		   if ($mytemplate) {
		   
             //// tokens method												 	  
		     $tokens[] = $itemlinkname;	
			 $tokens[] = $rec[$itmdescr];
			 $tokens[] = $this->list_photo($rec[$this->getmapf('code')],$xdist,$ydist,$myimageclick,$ucat,$pz,null,$rec[$itmname],$rec['DB_NAME']);
			 
			 //$tokens[] = localize($rec['uniname1'],getlocal()); 
			 //units + qty
			 if ($this->appkey->isdefined("SHCART_DPC"))			 
			  $in_cart = GetGlobal('controller')->calldpc_method("shcart.getCartItemQty use ".$rec[$this->getmapf('code')].$appanchor);
			 $incart = $in_cart?':<B>'.$in_cart.'</B>':null;
			 $units = $rec['uniname2'] ? 
			          localize($rec['uniname1'],getlocal()).'/'.localize($rec['uniname2'],getlocal()) :
					  localize($rec['uniname1'],getlocal());  
			 $tokens[] = $units;// . $incart;			 
			 
			 $tokens[] = $rec['itmremark'];//$this->getmapf('code')], 
			 $tokens[] = $lastprice . number_format(floatval($price),$this->decimals,',','.');//$price;
			 $tokens[] = $icon_cart;
			 $tokens[] = $availability;
			 $tokens[] = $details;
			 $tokens[] = $detailink;
			 $tokens[] = $rec[$this->getmapf('code')];
			 $tokens[] = $itemlink;			
			 
			 $tokens[] = $in_cart?$in_cart:'0';//null;
			 $tokens[] = $array_cart;
			 $tokens[] = $this->get_photo_url($rec[$this->getmapf('code')],2,$rec['DB_NAME']);	
			 $tokens[] = rand()+$n;//$rec[$itmname];
			 			 	 
			 $items[] = $this->combine_tokens($mytemplate, $tokens, true);	
			 unset($tokens);													 
		   }	 				   	   	   
		   else {
		       $viewdata[] = "<b>".($rec[$itmname]?$itemlinkname:"&nbsp;") . "</b><br>" . 
						 /*localize('_descr',getlocal()) . ":" .*/ ($rec[$itmdescr] ? $rec[$itmdescr] : "&nbsp;") . "<br>" . 
		                 localize('_uniname1',getlocal()) . ":" . ($rec['uniname1'] ? localize($rec['uniname1'],getlocal()) : "&nbsp;") . "<br>" .
                         localize('_code',getlocal()) . ":" . $rec[$this->getmapf('code')] . "<br>" .						 
						 /*localize('_axia',getlocal()) . ":" .*/ 
						 "<b>". writecl(number_format(floatval($price),$this->decimals,',','.').'&nbsp;&#8364','#FFFFFF','#FF0000')."</b>";/* . "<br><br>" .
						 seturl('t=kshow&cat='.$rec[1].'&id='.$rec['id'].'&page='.$page,'Περισσότερα...');*/
		       $viewattr[] = "left;60%";					 		   
		      
		       $viewdata[] = $this->list_photo($rec[$this->getmapf('code')],$xdist,$ydist,$myimageclick,$ucat,$pz,null,$rec[$itmname],$rec['DB_NAME']).
		                 '<br>' . $icon_cart . $availability;
	           $viewattr[] = "left;40%";
		   
	           //$viewdata[] = "&nbsp;";
	           //$viewattr[] = "left;10%";			   		   
		   	   		   	   		   	   		   
		   
	           $myrec = new window('',$viewdata,$viewattr);
	           $items[] = $myrec->render("center::100%::0::group_article_table::left::3::3::");
	           unset ($viewdata);
	           unset ($viewattr);	
		   }//if template
		   
		}//foreach	
		
		  
	    if ($showasc) {
		  //set if show this up and down (2) or only up (1) or nothing 0
	      //if ((!$this->listcontrols)||($this->listcontrols>1))
	        $ret .= $this->show_asceding($cmd,null,'myf_select_small',$nopager);
	      //$ret .= "<hr>";		 
	    }
	   
	    //make table
		$ret .= $this->make_table($items, $linemax, 'fpkatalogtable');  	  
	      					
	    if ($showasc) 
	        $ret .= $this->show_asceding($cmd,null,'myf_select_small',$nopager);
			
		if ($this->pager) 
		  $ret .= $this->show_paging($cmd,$mytemplate,$nopager);					
		
	   }
	   else //count	
		  $toprint .= "<h2>" .localize('_nofound',getlocal()). "</h2><br>";	   	

	   if ((count($this->result)>0) && ($no_additional_info==null))   
	     $ret .= $this->show_availabillity_table(null,1);	   
	
	   //echo '<pre>'; print_r($this->resource); echo '</pre>';
	   
	   if ($resources) {
	      //$x = $imgx?$imgx:$this->xmax;
		  //$y = $imhy?$imgy:$this->ymax;
		  $ret .= $this->make_swfobjects($this->result,$this->xmax,$this->ymax);		  	   
	   } 

       //feed links
	   if ((GetReq('id') || GetReq('cat')) && ($originfunction!==false))
         $ret .= $this->get_xml_links(null,null,$originfunction);		   
		 
	   //dynamic insert item..into xmllinks
	   //$ret .= $this->dyn_insert_button();
	   
	   return ($ret);	
    } 
	
	//overrided
	function show_item($template=null,$no_additional_info=null,$lang=null,$lnktype=1,$pcat=null,$boff=null,$tax=null,$norss=null) {
	   global $current_item;//use global becouse of same page info transfer
	   $enable_ajax = (GetReq('t')=='ajax_kshow') ? false : true;//default
       //echo '>-------------',GetReq('t'),'x',$enable_ajax;
	   
	   $lan = $lang?$lang:getlocal();
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';
	   $page = GetReq('page')?GetReq('page'):0;	
	   
	   $cat = $pcat?$pcat:GetReq('cat');
       //$cat = $pcat ? $pcat : GetGlobal('controller')->calldpc_var('shtags.tagcat');   	   	   
	   
	   $id = GetReq('id');
	   //$id = GetGlobal('controller')->calldpc_var('shtags.tagitem');
	   
	   $listm = $this->list_item?$this->list_item:GetReq('id');	  
	   $xdist = $this->itemimagex?$this->itemimagex:200;
	   $ydist = $this->itemimagey?$this->itemimagey:null; //free y 100;	
	   $buttons_OFF = $boff?$boff:$this->buttons_OFF;
	   //echo $buttons_OFF,'>';
	   
	   $mytemplate = $this->select_template('fpitem',$cat);	 
	   
	   //print_r($this->result->fields); echo 'z',count($this->result->fields);
	   if (count($this->result->fields)>1) {	
	   
		$pp = $this->read_policy();	   
	   
	    foreach ($this->result as $n=>$rec) {

           $appanchor = ($this->is_root_app($rec['DB_NAME'])==false) ? $this->app_sep.$rec['DB_NAME'] : null;			
		   /*if ($this->is_root_app($rec['DB_NAME'])==false) {
				$union_code = str_replace($this->union_prefix,'',$rec['DB_NAME']);
                $appanchor = $this->app_sep.$union_code;				
		   }*/		   
		   //echo $appanchor.'-'.$pcode.'<br/>';		
		
           $this->make_resource_table($rec[$this->getmapf('code')],$rec['resources']);		
		   
           $cat = $this->getkategories($rec);					 
		   
		   if ($rec[$pp]>0) { 
		     $myp = $this->spt($rec[$pp],$tax);
			 //echo $tax,':',$myp,'<br>';
		     $price = $myp?$myp:'&nbsp;';//($myp?number_format($myp,$this->decimals,',','.'):"&nbsp;");
		   }	
		   else 	 
		     $price = $this->zeroprice_msg;	
			 
		   $lastprice = $rec[$this->getmapf('lastprice')]?'<del>'.number_format(floatval($rec[$this->getmapf('lastprice')]),$this->decimals,',','.').'&nbsp;&euro;</del><br/>':null;			   						 
		   
           $recar[localize('_code',getlocal())]=($rec[$this->getmapf('code')]!=null?$rec[$this->getmapf('code')]:"&nbsp;");		   
		   $recar[localize('_item',getlocal())]=($rec[$itmname]!=null?$rec[$itmname]:"&nbsp;");
		   $recar[localize('_descr',getlocal())]=($rec[$itmdescr]?$rec[$itmdescr]:"&nbsp;");
		   $recar[localize('_uniname1',getlocal())] = ($rec['uniname1']!=null ? localize($rec['uniname1'],getlocal()) : "&nbsp;"); 
		   $recar[localize('_code',getlocal())]=($rec[$this->getmapf('code')]?$rec[$this->getmapf('code')]:"&nbsp;"); 
		   $recar[localize('_axia',getlocal())]= number_format(floatval($price),$this->decimals,',','.') . "<br><br>";

		   $table2show = $this->make_table_to_show($recar);	   
		   
		   //SAVE TO RETRIEVE BY SPONSORS WHEN HAVE SPONSORAS BY TYPE, MODEL etc.
		   $this->datarecord = (array) $recar;			   
		   
	       //save vehicle for aditional services as forum
	       $current_item = $rec['itmname']. " " . " (" . $rec[$this->getmapf('code')] . ")";
		   //echo $current_vehicle;
		   SetSessionParam('CURRENT_ITEM',$current_item);

		   
		   $icon_back  = loadTheme('icon_back','Επιστροφή...');
		   $icon_prev  = loadTheme('icon_prev','Προηγούμενο...');
		   $icon_next  = loadTheme('icon_next','Επόμενο...');		   		   
		   //$icon_getit = loadTheme('icon_getit','Εκδήλωση ενδιαφέροντος...');
		   $icon_print = loadTheme('icon_print',localize('_PRINT',getlocal())); 

		   $mybuttons = seturl('t=klist&cat='.$cat.'&page='.$page,$icon_back) .
				 	    seturl('t=kprev&cat='.$cat.'&page='. $page . '&direction=prev&id='.$id.'&listm='.$listm,$icon_prev) .						 
					    seturl('t=knext&cat='.$cat.'&page='. $page. '&direction=next&id='.$id.'&listm='.$listm,$icon_next) .						 
					    $this->printlink($icon_print);
						 

		   if ((GetGlobal('UserID')) || (seclevel('SHKATALOG_CART',$this->userLevelID))) {//logged in or sec ok
		     $cart_code = $rec[$this->getmapf('code')].$appanchor;
			 $cart_title = $this->replace_spchars($rec[$itmname]);
			 $cart_group = $cat;
			 $cart_page = GetReq('page')?GetReq('page'):0;
			 $cart_descr = $this->replace_spchars($rec[$itmdescr]);
			 $cart_photo = $rec[$this->getmapf('code')];//$this->get_photo_url($rec[$this->getmapf('code')],1);
			 $cart_price = $price;
			 $cart_qty = 1;//???
			 if ($this->appkey->isdefined("SHCART_DPC"))
				$icon_cart = GetGlobal('controller')->calldpc_method("shcart.showsymbol use $cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty;+$cat+$cart_page",1);//'cart';
			 else
                $icon_cart = null;			 
			 $array_cart = $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;{$rec['DB_NAME']};$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty");	   
		   }
           else
		     $icon_cart = null;
			
		   $availability = $this->show_availability($rec['ypoloipo1']);	 
		   $detailink = seturl("t=kshow&id=".$rec[$this->getmapf('code')]."&cat=$cat&page=$page".'#DETAILS',$this->details_button);		   
			 
	       $linkphoto = $this->list_photo($rec[$this->getmapf('code')],$xdist,$ydist,$lnktype,$cat,2,3,$rec[$itmname],$rec['DB_NAME'],$enable_ajax);	
		   //echo $lnktype,'>';			 
		   if ($mytemplate) {	 		 	      
		   
 	         $toprn .= $this->make_swfobjects($this->result,$this->xmax,$this->ymax);	
			 
             $ahtml = $this->show_aditional_html_files($rec[$this->getmapf('code')],$rec['DB_NAME'], $enable_ajax);			 
             $atext = null;//$this->show_aditional_txt_files($rec[$this->getmapf('code')],$rec['DB_NAME'], $enable_ajax);				 		 		   			  
			 $afile = $this->show_aditional_files($rec[$this->getmapf('code')],1,$rec[$itmname],$rec['DB_NAME'], $enable_ajax);			 
			 
             //$details = "<a name=\"DETAILS\"><p>"; //flickering...
			 //$details .= $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;$MYtemplate;$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty");	
			 $details = $ahtml . $atext . $afile;
			 //$details .= "</p>";				 		   

             //// tokens method												 
		     $tokens[] = $rec[$itmname];
			 $tokens[] = $rec[$itmdescr];
			 $tokens[] = $linkphoto;
			 
			 //$tokens[] = $rec['uniname1']; 
			 //units + qty
			 if ($this->appkey->isdefined("SHCART_DPC"))			 
			  $in_cart = GetGlobal('controller')->calldpc_method("shcart.getCartItemQty use ".$rec[$this->getmapf('code')].$appanchor);
			 $incart = $in_cart?':<B>'.$in_cart.'</B>':null;
			 $units = $rec['uniname2'] ? 
			          localize($rec['uniname1'],getlocal()).'/'.localize($rec['uniname2'],getlocal()):
					  localize($rec['uniname1'],getlocal());  
			 $tokens[] = $units;// . $incart;			 
			 
			 $tokens[] = $rec['itmremark'];//$this->getmapf('code')], 
			 $tokens[] = $lastprice . number_format(floatval($price),$this->decimals,',','.');//$price;
			 $tokens[] = $icon_cart; //6
			 $tokens[] = $availability;
			 $tokens[] = $detailink;
			 $tokens[] = $details;
			 $tokens[] = $rec[$this->getmapf('code')];
			 
			 $tokens[] = $in_cart?$in_cart:'0';//null;
			 $tokens[] = $array_cart;

             $tokens[] = $ahtml;
			 $tokens[] = $atext;  			 
			 $tokens[] = $afile;
			 //print_r($tokens);
			 $toprn .= $this->combine_tokens($mytemplate, $tokens, true);
			 unset($tokens);
												 
			 //$toprn .= $details;	//in template moved inside tokens								 
			 
             $toprint .= $toprn; //..copy print ver to toprint flow..
			 //add buttons			 
			 $toprint .= $buttons_OFF?"&nbsp;":$mybuttons;					  
           }
		   else {		   
		   
		     $bb = $buttons_OFF?"&nbsp;":$mybuttons;
		     $viewdata[] = $table2show .
			  			   $bb .
						   $icon_cart .
						   $availability;
		     $viewattr[] = "left;50%";	
		   
		     //printout...
		     $printdata[] = $table2show;
		     $printattr[] = "left;50%";			   
           
		     //photo in window
		     $pwin = new window('Φωτογραφία',$linkphoto);
		     $pphoto = $pwin->render();
		     unset ($pwin);	 
			 
	         $viewdata[] = $pphoto . 
			               $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;$MYtemplate;$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty") . 
		                   $this->show_aditional_files($rec[$this->getmapf('code')],1,$rec[$itmname],$rec['DB_NAME']) .
						   $this->show_aditional_html_files($rec[$this->getmapf('code')],$rec['DB_NAME']) .
						   $this->show_aditional_txt_files($rec[$this->getmapf('code')],$rec['DB_NAME']); 
	         $viewattr[] = "left;50%";
		   
		     //printout...
		     $printdata[] = $pphoto . 
			                $this->read_array_policy($rec[$this->getmapf('code')],$price,"$cart_code;$cart_title;$path;$MYtemplate;$cart_group;$cart_page;$cart_descr;$cart_photo;$cart_price;$cart_qty") . 
		                    $this->show_aditional_files($rec[$this->getmapf('code')],null,$rec[$itmname],$rec['DB_NAME']) .
			 			    $this->show_aditional_html_files($rec[$this->getmapf('code')],$rec['DB_NAME']) .
							$this->show_aditional_txt_files($rec[$this->getmapf('code')],$rec['DB_NAME']);
		     $printattr[] = "left;50%";			   		   
		   	   		   	   		
		     $toprint .= $this->set_anchor('photo');									   	   		   
		   
             $toprint .= "<a name=\"DETAILS\">";
		   
	         $myrec = new window('',$viewdata,$viewattr);
		     if ($mytemplate) 
               $toprint .= $myrec->render("center::100%::0::::left::0::0::");		  
		     else			   
	           $toprint .= $myrec->render("center::100%::0::group_article_selected::left::3::3::");
	         unset ($viewdata);
	         unset ($viewattr);
			 
			 $toprint .= $this->make_swfobjects($this->result,$this->xmax,$this->ymax);		  	   		   	
		   
		     //printout
	         $myprn = new window('',$printdata,$printattr);
		     if ($mytemplate) 
               $toprn .= $myrec->render("center::100%::0::::left::0::0::");		  
		     else			   
	           $toprn = $myprn->render("center::100%::0::group_article_selected::left::3::3::");
	         unset ($printdata);
	         unset ($printattr);		
		   
		   }//mytemplate 		   
		   
		   SetSessionParam('printpage',$toprn);	 
		   
		   //AUTOMATED....
		   /*if (defined('ABCFORUM_DPC')) {
		   
		     $frm = GetGlobal('controller')->calldpc_method('abcforum.display_forums');
		     $toprint .= $frm;//'Forum';
		   }*/
	       if ($mytemplate) {		  
	         $out = $toprint;
	       }
	       else {
             $mywin = new window(/*$this->title*/'',$toprint);
             $out = $mywin->render("center::100%::0::group_article_selected::left::2::2::");	
	       }
	   	 
           if ($no_additional_info==null)	   
	         $out .= $this->show_availabillity_table(null,1); 

           //feed links
		   if ($norss==null)
			 $out .= $this->get_xml_links();				 
		    		
	 	}//foreach	   
	   }//if recs
	   else {
	      //  echo 'z';
		  if ($this->itemlockparam) {
		    if ($goto = $this->itemlockgoto)
			  $out = GetGlobal('controller')->calldpc_method($goto);
			else
			  $out = "<h2>".localize('_lockrec',getlocal())."</h2>";
		  }
		  else 
		    $out = "<h2>".localize('_norec',getlocal())."</h2>";
	   }	  	  	   
  	   
	   return ($out);	
	}		
	

    //overrided 
	function show_aditional_files($id=null,$nojs=null,$altname=null,$app=null, $enable_ajax=false) {
	
	    //call from javascript ajax scroll
	    if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_aditional_files+'."id|nojs|altname|app+$id|$nojs|$altname|$app"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = ($$gname) ? ($$gname) : $gvalue;
		//...exec func using func params or get...	
		//print_r($_GET);	
	
	     $cat = GetReq('cat');
		 $title = $altname ? $altname : $id;
	     //$cat = $cat ? $cat : GetGlobal('controller')->calldpc_var('shtags.tagcat');
		 //$id = $id ? $id : GetGlobal('controller')->calldpc_var('shtags.tagitem');
		 $name = $id;
		 $app_path = $app ? ($this->is_root_app($app) ? null : '/'.$app) : '/';

		 $id = $this->encode_image_id($id, $this->imgpath); 
		 
	     $addfx = $this->addfx?$this->addfx:100;
	     $addfy = $this->addfy?$this->addfy:null;//free y size //75;	
 
	
	     $this->allow_show_resource = true; //enable it after show main item image		
	
	     $template='fpitemaddfiles.htm';	   
	     $t = $this->urlpath .'/' . $this->inpath . '/cp/html/'. str_replace('.',getlocal().'.',$template) ; 
	     //echo $t,'>';
	     if (($template) && is_readable($t)) {
		   $mytemplate = file_get_contents($t);
	     }	   	

		 //multiple images
		 for($i='A';$i<='Z';$i++) { 
		   foreach ($this->advrestype as $restype) {
		   //work with uphoto path only......
		   	   
		   $ad_photo_big = $app_path . $this->imgpath .  $id . $i . $restype;
		   $aditional_pic_file = $this->urlpath . $app_path . $this->imgpath . $id . $i . $restype;

		   if (file_exists($aditional_pic_file)) {
		     //$photos .= "<br><br><img src=\"" . $ad_photo . "\"  alt=\"". localize('_IMAGE',getlocal()) . "\">";
			 
			 switch ($restype) {
			 
			    case '.zip' :
				case '.exe' : $exeresource = $this->show_exeobject($id.$i,null,null,null,$restype);
				              if ($mytemplate) { 
			                    $remarks = 'EXE,ZIP';//$this->show_aditional_txt_files($id);			 
                                $items[] =  $this->combine_template($mytemplate,$id.$i,'',$exeresource,$remarks);
			                  }
			                  else									 			 
			                    $items[] = $exeresource;
				              break;
							  
				case '.pdf' : $pdfresource = $this->show_pdfobject($id.$i);
				              if ($mytemplate) { 
			                    $remarks = 'PDF';//$this->show_aditional_txt_files($id);			 
                                $items[] =  $this->combine_template($mytemplate,$id.$i,'',$pdfresource,$remarks);
			                  }
			                  else									 			 
			                    $items[] = $pdfresource;
				              break;							  
			 
			    case '.swf' : $swficon = null;//'swf object';//null;
			                  $adnresource = $this->show_swfobject($id.$i,$swficon); 
							  if ($mytemplate) { 
			                    $remarks = 'SWF';//$this->show_aditional_txt_files($id);			 
                                $items[] =  $this->combine_template($mytemplate,$id.$i,'',$adnresource,$remarks);
			                  }
			                  else									 			 
			                    $items[] = $adnresource;
								
							  $swf_array[$id.$i] = $this->url .  'images/uphotos/' . $id . $i . $restype;//$aditional_pic_file;	
							  //print_r($swf_array);
				              break;
                
				default    : //image... .jpg, .png
				
                             if (iniload('JAVASCRIPT')) {	
		                       if ($this->lightbox) {
                                 $plink = "<A href=\"$ad_photo_big\" rel='lightbox[$name]' title='$title'>";			 
			                   }
			                   else {				 
  	                             $plink = "<a href=\"#\" ";	   
	                             //call javascript for opening a new browser win for the img		   
	                             //$params = $photo . ";Image;width=300,height=200;";
	                             $params = "$ad_photo_big;640;480;<B>$title</B><br>$descr;";			 

			                     $js = new jscript;
	                             $plink .= $js->JS_function("js_popimage",$params); 
			                     unset ($js); 

	                             $plink .= ">";
			                   }	 
	                         }
	                         else {
			                   $addtional_photo_link = seturl('t=kshow&cat='.GetReq('cat').'&id='.GetReq('id').'&thub='.$i.'#photo');
			                   $plink = "<A href=\"$addtional_photo_link\">";				 
                               //$plink = "<A href=\"$photo\">";			 
		                     }  
			 
			                 $lo = "<img src=\"" . $ad_photo_big . "\"  width=\"$addfx\" ";
							 $lo.= $addfy ? "height=\"$addfy\"" : null; 
							 $lo.= "border=\"0\" alt=\"". localize('_IMAGE',getlocal()) . "\">" . "</A>"; 
			                 $adnphoto = $plink . $lo;
			 
			                 if ($mytemplate) { 
			                   $remarks = 'PHOTO';//$this->show_aditional_txt_files($id);			 
                               $items[] =  $this->combine_template($mytemplate,$id.$i,'',$adnphoto,$remarks);
			                 }
			                 else									 			 
			                   $items[] = $adnphoto;
			 
			 }//switch
			 			   
			 //echo $restype,' exit';    			   
			 break;  //exit loop of restypes
			 
		   }//file exists
		   }//foreach	 
		 }//for		 
		 
		 
		 //...........................plus multiple resources...(resource products table field)		 
		 //echo $id;
		 //print_r($this->resource[$id]);
		 //print_r($this->result);
		 $resarray = $this->resource[$id];
		 if (!empty($resarray)) {
		   foreach  ($resarray as $rtype=>$resource) {
		   
		     switch ($rtype) {
	           case 'http'    : $resource = $this->resource[$id]['http']; break;
	           case 'mpeg'    : $resource = $this->resource[$id]['mpeg']; break;			
	           case 'mp3'     : $resource = $this->resource[$id]['mp3']; break;			
	           case 'avi'     : $resource = $this->resource[$id]['avi']; break;			
	           case 'swf'     : $swficon = null;
			                    $resource = $this->show_swfobject($id,$swficon); 
								break;		
	           case 'embed'   : $resource = $this->get_resource($id,'embed');/*$this->resource[$id]['embed'];*/ break;			
	           default        : $deficon = null;
			                    $resource = $this->show_swfobject($id,$deficon); 
								break;		
			 }
			 
			 if ($mytemplate) { 
			    $remarks = null;//$this->show_aditional_txt_files($id.$rtype);
                $items[] =  $this->combine_template($mytemplate,$rtype,'',$resource,$remarks);
			                                     /*$rec['uniname1'] , 
												 $rec['itmremark'],//$this->getmapf('code')], 
												 $price,
												 $icon_cart,
												 $availability,
												 $detailink,
												 $details);			 */
			 }
			 else									 			 
			   $items[] = $resource;			 
		   }
		 }
		 //echo 'z';
		 //print_r($items);
	     //echo $this->additional_files_perline;
		 
	     $itemscount = count($items);
		 		 
		 if ($itemscount>0)	 {
		   //$categories = explode('<SPLIT/>',$ret); //<li> split..
		   $out = $this->make_table($items, $this->additional_files_perline, 'fptreetable');
		 
		    /*
		   $linemax = $this->additional_files_perline;//3;	
		   //echo $itemscount,'-',$linemax;
	       $timestoloop = round($itemscount/$linemax,1); //floor
		   //echo $timestoloop;
		   //if ($timestoloop==0) $timestoloop+=1;
		   
	       $meter = 0;
	       for ($i=0;$i<$timestoloop;$i++) {
	         //echo $i,"---<br>";
	         for ($j=0;$j<$linemax;$j++) {
	           //echo $i*$j,"<br>";
		       $viewdata[] = (isset($items[$meter])? $items[$meter] : "&nbsp");
		       $viewattr[] = "center;10%";	
		       $meter+=1;	 
	         }
	  
	         $myrec = new window('',$viewdata,$viewattr);
			 if ($mytemplate)
			   $gallery .= $myrec->render("center::100%::0::::left::0::0::");
			 else
	           $gallery .= $myrec->render("center::100%::1::group_article_selected::left::2::2::");
	         unset ($viewdata);
	         unset ($viewattr);		  
	       }		 
		 
		   if ($mytemplate) 
		     $out = '';
		   else
		     $out = "<hr/>";
		   
		   if ($mytemplate)
		     $title = null;
		   else
		     $title = localize('_gallery',getlocal());	 
		   
		   $gall = new window($title,$gallery); 
		   if ($mytemplate) 
             $out .= $gall->render("center::100%::0::::left::0::0::");		  
		   else		  		   
		     $out .= $gall->render();
		   unset($gall);
		   */
		   
		   //local filesystem swf rendering
		   if (!empty($swf_array))		 
		     $out .= $this->make_local_swfobjects($swf_array,$addfx,$addfy);		   
		   
		   return ($out);
		 }
	}
	
	//override app arg
	function show_aditional_html_files($id=null,$app=null, $enable_ajax=false) {	

	    //call from javascript ajax scroll
	    if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_aditional_html_files+'."id|app+$id|$app"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = ($$gname) ? ($$gname) : $gvalue;
		//...exec func using func params or get...	
		//print_r($_GET);
	
        $db = GetGlobal('db');	
	    $lan = getlocal();
		 
		if ($this->one_attachment)
		    $slan = null;
		else
		    $slan = $lan?$lan:'0';
		//echo $slan,'>';  
	    $code = $this->getmapf('code');
        //echo $app,'>';
		if (!$app) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql	
			 
			$sSQL = "select data from {$appname}.pattachments ";
			$sSQL .= " WHERE (type='.html' or type='.htm') and code='" . $id . "'";
			if (isset($slan))
				$sSQL .= " and lan=" . $slan;

            $sSQL2 = $sSQL;				
		}		
	    //echo $sSQL2;
	  
	    $resultset = $db->Execute($sSQL2,2);	
	    $result = $resultset;
	    //print_r($result);	
	    if ($exist = $db->Affected_Rows()) {
		   //echo 'sql';
		   $ret = $result->fields['data'];
		}		   
        else {		   

		   $mainhtml = $this->htmlpath . $id . $slan;		 
           if (file_exists($mainhtml.'.html')) {		
		     $ret = file_get_contents($mainhtml.'.html');	
		   }
		   elseif (file_exists($mainhtml. '.htm')) {		
		     $ret = file_get_contents($mainhtml.'.htm');	
		   }
		}
		//multiple html
		for($i='A';$i<='I';$i++) {
		   
		   $aditional_html_file = $this->htmlpath . $id . $slan . $i;
		   if (file_exists($aditional_html_file.',html')) {
		     $ret .= file_get_contents($aditional_html_file);
		   }
		   elseif (file_exists($aditional_html_file.',htm')) {
		     $ret .= file_get_contents($aditional_html_file.'.htm');
		   }		   
		}
		 
		return ($ret);  		 
	}	
	
	//override app arg	
	function show_aditional_txt_files($id=null,$app=null, $enable_ajax=false) {
	
	    //call from javascript ajax scroll
	    if (($enable_ajax) && (!GetReq('ajax'))) {

			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_aditional_txt_files+'."id|app+$id|$app"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = ($$gname) ? ($$gname) : $gvalue;
		//...exec func using func params or get...	
		//print_r($_GET);

	
        $db = GetGlobal('db');	
	
	    $lan = getlocal();
		if ($this->one_attachment)
		   $slan = null;
		else		 
		   $slan = $lan?$lan:'0';
		   
	    $code = $this->getmapf('code');

		if (!$app) {
			$sSQL = 'select id,name from apps where active=1';
			$appresult = $db->Execute($sSQL,2);
		}
		else 
		    $appresult[0]['name'] = $app;		

		$sSQL2 = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql	
			 
			$sSQL = "select data from {$appname}.pattachments ";
			$sSQL .= " WHERE code='" . $id . "' and type='.txt'";
			if (isset($slan))
				$sSQL .= " and lan=" . $slan;	
				
			$sSQL2 = $sSQL;		
		}		
	    //echo $sSQL2;
	  
	    $resultset = $db->Execute($sSQL2,2);	
	    $result = $resultset;
	    //print_r($result);	
	    if ($exist = $db->Affected_Rows()) {
		   //echo 'sql';
		   $ret = $result->fields['data'];
		}		   
        else {
		   $maintxt = $this->htmlpath . $id . $slan . '.txt';	
		   //echo '>'.$maintxt; 
           if (is_readable($maintxt)) {		
		     $ret = file_get_contents($maintxt);	
		   }
		}
		//multiple html
		for($i='A';$i<='I';$i++) {
		   
		   $aditional_txt_file = $this->htmlpath . $id . $slan . $i . '.txt';
		   if (file_exists($aditional_txt_file)) {
		   
		     $ret .= file_get_contents($aditional_txt_file);
		   }
		}
		//convert \n to br for texts
		$out = str_replace("\n","<br/>",$ret);
		//echo $out; 
		return ($out);  		 
	}		
	
	function show_p($p,$items=10,$linemax=null,$imgx=100,$imgy=75,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null) {
        $db = GetGlobal('db');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';				
		$pz = $photosize?$photosize:1;	
		$lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;		
	                   
		$sSQL = "select id,name from apps where active=1";
		$appresult = $db->Execute($sSQL,2);	

		$sSQL = '';
		foreach ($appresult as $a=>$app) {	
			  	
			if ($a>0)
				$sSQL .= ' UNION ';	
			$appname = $app['name'];		 
		 
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				$this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
			$sSQL .= " WHERE ";	
		
			if ($selected_item = GetReq('id')) 
				$sSQL .= $this->getmapf('code') . " not like '" . $selected_item ."' and ";
		  		
			$sSQL .= $p." >0 and ".$p." IS NOT NULL and itmactive>0 and active>0";	
			$sSQL .= " ORDER BY $itmname asc ";
			$sSQL .= ')';
		}	
		$sSQL .= $items?" LIMIT " . $items: null;			
	    //echo $sSQL,'<br>';
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_p use $p,$items");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,null,$linemax,"shkatalogmedia.show_p use $p,$items");
		  
		return ($out);	
	}		
	
	function show_resources($contition,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$ofield=null,$desc=null) {
        $db = GetGlobal('db');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';				
		$pz = $photosize?$photosize:1;	
		$lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;	
        $ordfield = $ofield ? $ofield : $itmname;
        $ascd = $desc ? "desc" : "asc"; 

		$sSQL = "select id,name from apps where active=1";
		$appresult = $db->Execute($sSQL,2);	

		$sSQL = '';
		foreach ($appresult as $a=>$app) {	
			  	
			if ($a>0)
				$sSQL .= ' UNION ';	
			$appname = $app['name'];		 
		 
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				$this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
			$sSQL .= " WHERE ";	
		
			if ($selected_item = GetReq('id')) 
				$sSQL .= $this->getmapf('code') . " not like '" . $selected_item ."' and ";
		  		
			$sSQL .= $contition."='".$this->toggler[1]."' and itmactive>0 and active>0";	
			//$sSQL .= " ORDER BY $itmname asc ";
			$sSQL .= " ORDER BY " . $ordfield . " ".  $ascd;
			$sSQL .= ')';
		}	
		$sSQL .= $items?" LIMIT " . $items: null;			
	    //echo $sSQL,'<br>';
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null; //free y 75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_resources use $contition,$items");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,1,1,1,"shkatalogmedia.show_resources use $contition,$items");
		  
		return ($out);	
	}			
	 
	//override
	function show_special($contition,$items=10,$days=12,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null) {
        $db = GetGlobal('db');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';		
	    $date2check = time() - ($days * 24 * 60 * 60);
	    $entrydate = date('Y-m-d',$date2check);		
		$pz = $photosize?$photosize:1;	
        $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;				
	                 
		$sSQL = "select id,name from apps where active=1";
		$appresult = $db->Execute($sSQL,2);	

		$sSQL = '';
		foreach ($appresult as $a=>$app) {	
			  	
			if ($a>0)
				$sSQL .= ' UNION ';	
			$appname = $app['name'];		 
		 
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				$this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
			$sSQL .= " WHERE ";	
		
			if ($selected_item = GetReq('id')) 
				$sSQL .= $this->getmapf('code') . " not like '" . $selected_item ."' and ";
		  		
			$sSQL .= $contition."='".$this->toggler[1]."' and itmactive>0 and active>0";	
			$sSQL .= ')';
		}	
		$sSQL .= " ORDER BY $itmname asc LIMIT " . $items;			
	    //echo $sSQL;
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_special use $contition,$items");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,null,$external_read,$pz,1,1,1,"shkatalogmedia.show_special use $contition,$items");
		  
		return ($out);	
	}	
	
	function show_special_online($field2check,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$key=null) {
        $db = GetGlobal('db');
		$dbbuffer = GetGlobal('_sqlbuffer');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';
		$pz = $photosize?$photosize:1;						
		$p = null;
        $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;			
		$table2check = 'products';
		$fields = $this->result->fields;				
		//print_r($fields);
		//echo $key,'>';
		
		if  ($p = GetReq($field2check)) {
	
		    $mode = 'uri';
	    } 
		elseif (($p = $fields[$field2check]) || (!empty($dbbuffer))) {//current query exist..default selection...querydepth = 0
		  
		    $mode = 'query'; //already executed query			  
		}
		else {
		  if ($key) {//default mode for origin function...	
		    $mode = null; 	// default 
		    $p = str_replace('_SLASH_','/',str_replace('_COMMA_',',',str_replace('_AMP_','&',$key))); //get data from origin func		
		  }
		  else {
		    //echo '>>>>>>>',$field2check,':',$p,':',$mode,'>>>>>>';
		    return;		
		  } 
		}
	    //echo '>>>>>>>',$field2check,':',$p,':',$mode,'>>>>>>';				
	                                                                                //,date1
        $sSQL = "select id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				$this->getmapf('code').
				$lastprice .
				" from products ";
		$sSQL .= " WHERE (";	
		
		switch ($mode) {

		  case 'query':	//print_r($dbbuffer);
	                    $rbuf = array_reverse($dbbuffer);		  						
						//print_r($rbuf);
						$myselect = explode('products',$sSQL);	
						$a = trim($myselect[0]);	  
                        foreach ($rbuf as $bfid=>$bfdata) { 
			              $bfsql = explode('products',$bfdata['query']);//exclude where ..we want only select fields to be the same
						  $b = trim($bfsql[0]);
						  //echo '<br>',$bfid,'<br>',$b,':<br>',$a;						  
				          //if ($myselect[0]==$bfsql[0]) {//check identical queries
						  if (strcmp($a,$b)==0) {//check identical queries
                            //echo '<pre>';print_r($rbuf);echo '</pre>';						  
				            //echo '<br>TRUE<br>',$bfid,$bfdata['query'],'<br>',$myselect[0],'>>>>';
					        //override p val 
							//print_r($bfdata);
				            $p = $bfdata['data'][$field2check]; 
							$sp = str_replace('/','_SLASH_',str_replace(',','_COMMA_',str_replace('&','_AMP_',$p)));//url rewrite error '/'
                            $key = urlencode($sp);	//holds data pass as func origin arg								
							break;
				          }	
			            }						
						//$p = $rbuf[0]->data->$field2check;
		                $sSQL .= $field2check . "="  .(is_numeric($p)?$p:"'".$p."'"); 
		                break;
						
		  case 'uri'  :	$sSQL .= $field2check . "="  .(is_numeric($p)?$p:"'".$p."'");	  
		                break;	
		  
		  default     : $sSQL .= $field2check . "="  .(is_numeric($p)?$p:"'".$p."'");//arg special 
		                break;						
		} 
		
		//if ($advsql = $this->sql_search_relative_titles($fields[$itmdescr],'cat2'))
		  //$sSQL .= ' or ' . $this->getmapf('code') . ' in (' . $advsql . ')';		  		
		
		$sSQL .= ") and itmactive>0 and active>0";
		 	
		if ($selected_item = GetReq('id')) 
		  $sSQL .= " and " . $this->getmapf('code') . " not like '" . $selected_item . "'";
		  
		//MULTIPLE CHECKS  
		//if ($selected_cat = $fields['cat2']) 
		 // $sSQL .= " and " . "cat2 not like '" . $selected_cat . "'";		  
		  		
		$sSQL .= " ORDER BY $itmname asc LIMIT " . $items;		
        //echo $mode;		
	    //echo '???',$sSQL,'---<hr>',$p;
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,0,1,"shkatalogmedia.show_special_online use $field2check,$items,null,null,null,0,null,null,null,null,$key");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,0,1,1,"shkatalogmedia.show_special_online use $field2check,$items,null,null,null,0,null,null,null,null,$key");
		  		  
		return ($out);	
	}			
	
	//alias
	function show_relatives($key,$field2check=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null) {
	
      $ret = show_special_online($field2check,$items,$linemax,$imgx,$imgy,$imageclick,$template,$ainfo,$external_read,$photosize,$key);	
	  return ($ret);
	}
	
	//??? NOT USED ????
	function sql_search_relative_titles($mastertitle,$field2check) {
        $db = GetGlobal('db');	
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';
		$remarks = 'itmremark';	
		$sqlout = null;		
	
	    $mt = explode(' ',trim($mastertitle));
        //print_r($mt);
        $sSQL = "select ".$this->getmapf('code')." from products where "; //whole words...
		  		
	    foreach ($mt as $i=>$lex) {
		
		  if (($la = trim($lex)) && (strlen($la)>4))  {//words max than 4 chars
		
		  $ulex = strtoupper($lex);
		  $dlex = strtolower($lex);
          
		  $sqlout[$lex] = "$itmname like '%$lex%' ";// or $itmdescr like '%$lex%' or $remarks like '%$lex%'";// or "; //as is
		  //$sSQL .= "$itmname like '% $ulex %' or $itmdescr like '% $ulex %' or $remarks like '% $ulex %' or "; //upper case		
		  //$sSQL .= "$itmname like '% $dlex %' or $itmdescr like '% $dlex %' or $remarks like '% $dlex %'"; //lower case		
		  
		  }//if lex
		} 
		
        //print_r($sqlout);  
		if ($sqlout) {
		  $sSQL .= implode(' or ',$sqlout);		  
		  return ($sSQL);
		}
		else
		  return null;
	} 
	
	function show_relative_sales($id=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null) {
	   $myid = $id?$id:GetReq('id');
       $db = GetGlobal('db');		
	   $lan = $lang?$lang:getlocal();
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';		
	   //$date2check = time() - ($days * 24 * 60 * 60);
	   //$entrydate = date('Y-m-d',$date2check);		
	   $pz = $photosize?$photosize:1;	  
       $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;		    
	
       if ( (defined('SHTRANSACTIONS_DPC')) && (seclevel('SHTRANSACTIONS_DPC',decode(GetSessionParam('UserSecID')))) ) {

	     $itemslist = GetGlobal('controller')->calldpc_method('shtransactions.getRelativeSales use '.$items.'+'.$myid);
	     //print_r($itemslist); //echo 'z';
		 
		 if (!empty($itemslist)) {
		 
			$sSQL = "select id,name from apps where active=1";
			$appresult = $db->Execute($sSQL,2);	

			$sSQL = '';
			foreach ($appresult as $a=>$app) {	
				  	
				if ($a>0)
					$sSQL .= ' UNION ';	
				$appname = $app['name'];		 
		 
				$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	               "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				   $this->getmapf('code') .
				   $lastprice .
				   " from {$appname}.products ";
				$sSQL .= " WHERE (";	
		
				foreach ($itemslist as $i=>$code)
					$preSQL[] = $this->getmapf('code') . " = '" . $code ."'";
			 
				$sSQL .= implode(' or ',$preSQL);
		  		
				$sSQL .= ") and itmactive>0 and active>0";	
				$sSQL .= ')';
		   }		
		   $sSQL .= " ORDER BY $itmname asc LIMIT " . $items;			
	       //echo $sSQL;
		
	       $resultset = $db->Execute($sSQL,2);	
		   $this->result = $resultset;
		
		   $xmax = $imgx?$imgx:100;
		   $ymax = $imgy?$imgy:null;//free y 75;		
		
		   if ($linemax>1)
		     $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_relative_sales use $myid,$items");
		   else  	
             $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,1,1,"shkatalogmedia.show_relative_sales use $myid,$items");
		 }	 		 		 
	   }
	   return ($out);  
	}
	
	//show relative owner items
	function show_relative_items($id=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$nopager=null) {
	    $id = $id?$id:GetReq('id');
		$selcat = GetReq('cat');
	    $cat = explode($this->cseparator, $selcat);		
	   
	    //call from javascript ajax scroll
	    if (!GetReq('ajax') && GetReq('t')!=='ajax_kshow') {
		    //$scm = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid');//self::$sc++;
			//$out = "<script>sc[{$scm}]='show_relative_items';</script><div id='show_relative_items' style='visibility:hidden;'>id|items|linemax|imgx|imgy|imageclick|template|ainfo|external_read|photosize|nopager-$id|$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager</div>";	
			
			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_relative_items+'."id|items|linemax|imgx|imgy|imageclick|template|ainfo|external_read|photosize|nopager+$id|$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;
		//...exec func using func params or get...	
		//print_r($_GET);

       $db = GetGlobal('db');		
	   $lan = $lang?$lang:getlocal();
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';			
	   $pz = $photosize?$photosize:1;	  
       $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;		    
	
	   if ($id) {
		//echo $id;
				
		//if app anchor	
		if (strstr($id, $this->app_sep)) {
		    $pcode = explode($this->app_sep,$id);
			$thiscode = $pcode[0];
		    $appname = $pcode[1]; 
			
			$sSQL = "select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	               "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				   $this->getmapf('code') .
				   $lastprice .
				   " from {$appname}.products";
			$sSQL .= " WHERE ";	
			/*if (!empty($cat)) {
			  foreach ($cat as $i=>$c) {
				$myc = str_replace('_',' ',$c);		
				$sSQL .= " cat{$i}='$myc' and ";	
			  }			  
            }*/			
			$sSQL .= $this->getmapf('code') . "<>'{$thiscode}'";				   
			$sSQL .= " AND itmactive>0 and active>0";
			$sSQL .= " ORDER BY $itmname asc LIMIT " . $items;					   
			
		}//user item code	
		elseif (strstr($id, $this->user_sep)) {	
		    $o = array_shift(explode($this->user_sep,$id));
			$u = hash('crc32',$user);
            //local owner ..exchange on cart line..
			$appname = $this->default_app_name;
			
			$sSQL = "select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	               "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				   $this->getmapf('code') .
				   $lastprice .
				   " from {$appname}.products";
			$sSQL .= " WHERE ";	
			if (!empty($cat)) {
			  foreach ($cat as $i=>$c) {
				$myc = str_replace('_',' ',$c);		
				$sSQL .= " cat{$i}='$myc' and ";	
			  }			  
            }			
			$sSQL .= $this->getmapf('code') . "<>'{$id}'";				   
			$sSQL .= " AND ".$this->getmapf('code') . " like '{$o}".$this->user_sep."%'";
			$sSQL .= " AND itmactive>0 and active>0";
			$sSQL .= " ORDER BY $itmname asc LIMIT " . $items;
		}
		else {
		    //no owner..fetch category items
			
			$sSQL = "select id,name from apps where active=1";
			$appresult = $db->Execute($sSQL,2);	

			$sSQL = '';
			foreach ($appresult as $a=>$app) {	
				  	
				if ($a>0)
					$sSQL .= ' UNION ';	
				$appname = $app['name'];		 
		 
				$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	               "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				   $this->getmapf('code') .
				   $lastprice .
				   " from {$appname}.products ";	
				$sSQL .= " WHERE ";	
				if (!empty($cat)) {
					foreach ($cat as $i=>$c) {
						$myc = str_replace('_',' ',$c);		
						$sSQL .= " cat{$i}='$myc' and ";	
					}			  
				}	
		  		
			    $sSQL .= $this->getmapf('code') . "<>'{$id}'";				
				$sSQL .= " AND itmactive>0 AND active>0"; 	
				$sSQL .= ')';
		    }		
		    $sSQL .= " ORDER BY $itmname asc LIMIT " . $items;			
	       
		}
		//echo $sSQL;
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;		
		
		if ($linemax>1)
		    $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,false);//"shkatalogmedia.show_relative_items use $id,$items");
		else  	
            $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,1,1,false);//"shkatalogmedia.show_relative_items use $id,$items");
		
		return ($out);		
	   }	 		 		 
       return false;
	}	
	
	//override
	function show_kategory_items($category=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$xor=null) {
        $db = GetGlobal('db');
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';			
		$mycat = $category?$category:GetReq('cat');	//auto browse current cat	   
		$cat = explode($this->cseparator,$mycat);		
		$pz = $photosize?$photosize:1;
        $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;			
				
		//auto browse current cat
		$fields = $this->result->fields; //prev query exclude cat

	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL .= ' UNION ';	
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			

			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".
				$this->getmapf('code').
				$lastprice.
				" from {$appname}.products ";			
			
			$sSQL .= " WHERE ";	
			foreach ($cat as $i=>$c) {
				$myc = str_replace('_',' ',$c);		
				$sSQL .= " cat{$i}='$myc' and ";	
			}  
			//only items inside category ..when category param not specified
			if ((!$category) && ($this->onlyincategory)) {
				$ii = $i+1;
				$sSQL .= " (cat{$ii} IS NULL or cat{$ii}='') and ";		
			}  		
		
			if (($selected_item = GetReq('id')) && (!$xor)) 
				$sSQL .= $this->getmapf('code') . " not like '" . $selected_item ."' and ";
		  
			//MULTIPLE CHECKS  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			if ($selected_cat0 = $fields['cat0']) 
				$sSQL .= "cat0 not like '" . $selected_cat0 . "' and ";		  
		  	
			if ($selected_cat1 = $fields['cat1']) 
				$sSQL .= "cat1 not like '" . $selected_cat1 . "' and ";		 
		  		  
			if ($selected_cat2 = $fields['cat2']) 
				$sSQL .= "cat2 not like '" . $selected_cat2 . "' and ";
		  
			if ($selected_cat3 = $fields['cat3']) 
				$sSQL .= "cat3 not like '" . $selected_cat3 . "' and ";
		  		  		  
		  
			$sSQL .= "itmactive>0 and active>0";
            $sSQL .= ")";  			
	
		}	
		$sSQL .= " ORDER BY $this->myorderby $this->myasc LIMIT " . $items;		
	    //echo $sSQL;
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;	
		
		if ($linemax>1) 
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_kategory_items use $category,$items");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,1,1,"shkatalogmedia.show_kategory_items use $category,$items"); 
		  
		return ($out);	
	}	
	
	//for sitemap call
	function show_sitemap_items($category=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$xor=null) {
        $db = GetGlobal('db');
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';			
		$mycat = $category?$category:GetReq('cat');	//auto browse current cat	   
		$cat = explode($this->cseparator,$mycat);		
		$pz = $photosize?$photosize:1;
        $lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;			
				
		//auto browse current cat
		$fields = $this->result->fields; //prev query exclude cat		
	    //echo 'z'; print_r($fields);                            

	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {
			if ($a>0)
				$sSQL .= ' UNION ';	
			$appname = $app['name'];		
			$sSQL = "(select select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".
				$this->getmapf('code').
				$lastprice.
				" from {$appname}.products ";
			$sSQL .= " WHERE ";		  		  
			$sSQL .= "itmactive>0 and active>0)";	
		}	
		$sSQL .= " ORDER BY sysupd DESC LIMIT 2000";// . $items;	//<<<<<<		
	    //echo $sSQL;
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;	
		
		if ($linemax>1) 
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.show_kategory_items use $category,$items");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,1,1,"shkatalogmedia.show_kategory_items use $category,$items"); 
		  
		return ($out);	
	}		
	
	function show_sitemap($template=null) {
       $db = GetGlobal('db');
	   //$lan = GetReq('lan')>=0?GetReq('lan'):getlocal();	//in case of post sitemap set lan param uri   
	   $lan = getlocal() ? getlocal() : '0';
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';	 
	   $start = GetReq('start');
	   $headcat = GetReq('headcat')?GetReq('headcat'):"";	   
	   $meter = $start?$start-1:0;  

       $mytemplate = $template ? $this->select_template($template) : null;	   
	   
	   $sSQL = 'select id,name from apps where active=1';
	   $appresult = $db->Execute($sSQL,2);	

	   $sSQL2 = '';
	   foreach ($appresult as $a=>$app) {	
				  	
			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql	
				   	
			$sSQL = "(select '{$appname}' as DB_NAME,id,itmname,itmfname,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,".$this->getmapf('code')." from {$appname}.products ";
			$sSQL .= " WHERE ";
			$sSQL .= "itmactive>0 and active>0";	
			//$sSQL .= " GROUP BY cat0,$itmname";
			$sSQL .= " ORDER BY cat0,cat1,cat2,cat3,cat4,$itmname asc ";
			$sSQL .= $start ? " LIMIT $start,100" : " LIMIT 100"; //10000
            $sSQL .= ')';

            $sSQL2 .=  $sSQL;
       }			
	   //echo $sSQL2;
		
	   $resultset = $db->Execute($sSQL2,2);	
	   $result = $resultset;
		   
	   if (!empty($result)) {		   
	    
		if ($headcat)//next page start with headcat
  	      $out = '<h2>' . str_replace('_',' ',$headcat) . '</h2><hr/>';
	
	    foreach ($result as $n=>$rec) {
		
           $appanchor = ($this->is_root_app($rec['DB_NAME'])==false) ? $this->app_sep.$rec['DB_NAME'] : null;			
		   /*if ($this->is_root_app($rec['DB_NAME'])==false) {
				$union_code = str_replace($this->union_prefix,'',$rec['DB_NAME']);
                $appanchor = $this->app_sep.$union_code;				
		   }*/		   
		   //echo $appanchor.'-'.$pcode.'<br/>';		
		
		   //memory limit prevention
		   //echo 'mem limit 33554432:',memory_get_peak_usage(true);//memory_get_usage();
		   
		   /*$mem = memory_get_peak_usage(true);//memory_get_usage();
		   if ($mem>16000000) {
		     $np = $meter-1;
		     $nextpage = "<br><h2><a href='sitemap.php?start=$np&headcat=$headcat'> Next Page</a></h2>";
		     $out .= $nextpage;//'<br><h2>WARNING:Memory allocation failed, reduce page view limit!</h2>';
		     break;
		   }*/
		   //echo 'z';
		   if (!empty($rec)) {
		   
		     $meter+=1;
             $cat = $this->getkategories($rec,1,$lan,'klist');		 
             $linkcat = $this->getkategories($rec,null);	
			 		   
			 if (strtolower($headcat)!=strtolower($cat)) {//paging start
			   $headcat = $cat;
			   //echo $headcat;
			   if (strstr($headcat,'</A>'.$this->cseparator.'<A')) //link
			     $ret .= '<h3>' . str_replace('</A>'.$this->cseparator.'<A','</A>'.$this->rightarrow.'<A', str_replace('_',' ',$headcat)) . '</h3><hr>';
			   else			   
			     $ret .= '<h3>' . str_replace($this->cseparator,$this->rightarrow,str_replace('_',' ',$headcat)) . '</h3><hr>';
			 }
			 $title = $rec[$this->getmapf('code')] . "&nbsp;" . $rec[$itmname] /*. "&nbsp;" . $rec[$itmdescr] . "&nbsp;" .  $rec[$itmremark]*/;
			 
		     $itemlinkname = seturl('t=kshow&cat='.$linkcat.'&id='.$rec[$this->getmapf('code')].$appanchor,$title,null,null,null,$this->rewrite );		   
			 
			 if ($mytemplate) {
			    $tokens = array(); //reset 
				$tokens[] = $meter; 
				$tokens[] = $itemlinkname; 
				$tokens[] = $rec[$this->getmapf('code')];
				$tokens[] = $rec[$itmname];
                $ret .= $this->combine_tokens($mytemplate, $tokens);			 
			 }
			 else
			    $ret .= $meter . "&nbsp;" . $itemlinkname . "<br/>";	
		     //$ret .= "<hr>";		   
		   }
		 }
		 
		 if (($mytemplate) && (stristr($mytemplate,'<SPLIT/>')) && ($this->linemax)) {
		    $items = explode('<SPLIT/>',$ret); //<li> split..
			$out .= $this->make_table($items, $this->linemax, 'fpkatalogtable'); 
		 }
		 else
		    $out .= $ret;
	   }   
	   
       //feed links
       $ret .= $this->get_xml_links(null,null,'shkatalogmedia.show_sitemap_items');		   
	   
	   return ($ret);		   		   	
	}
	
	function read_item_attr($item=null,$attr=null,$islink=null) {
        $db = GetGlobal('db');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';				
		$pz = $photosize?$photosize:1;	
		$lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;	
		
		if (!$item) 
		  $item = GetReq('id');	
		  //$item = GetGlobal('controller')->calldpc_var('shtags.tagitem');
		
	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {		
			if ($a>0)
				$sSQL .= ' UNION ';
			$appname = $app['name'];
			
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,weight,volume,".
			    $this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
			$sSQL .= " WHERE ";
			$sSQL .= $this->getmapf('code') . "= '" . $item ."'";
			$sSQL.=')';
		}	
		//echo $sSQL;
	    $resultset = $db->Execute($sSQL,2);	
		$result = $resultset;
		//print_r($result);
	    foreach ($result as $n=>$rec) {
		  if ($islink) {
		    $cat = $this->getkategories($rec);
			$ucat = urlencode($cat);
		  	$itemlink = seturl('t=kshow&cat='.$ucat.'&id='.$rec[$this->getmapf('code')],$rec[$attr]);
			return ($itemlink);
		  }
		  else
		    return ($rec[$attr]);	
		}  									
	}
	
	function read_item_weight($itemsarray=null,$items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null) {
        $db = GetGlobal('db');		
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';				
		$pz = $photosize?$photosize:1;	
		$lastprice = $this->getmapf('lastprice')?','.$this->getmapf('lastprice'):null;
		
		if (!$itemsarray) return;

	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {		
			if ($a>0)
				$sSQL .= ' UNION ';
			$appname = $app['name'];		
	                                                                                //,date1
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,weight,volume,".
			    $this->getmapf('code').
				$lastprice .
				" from {$appname}.products ";
			$sSQL .= " WHERE ";	
		
			if (strstr($itemsarray,';')) {
		
				$items = explode(';',$itemsarray);
		
				foreach ($items as $code)
					$tempSQL[] = $this->getmapf('code') . "= '" . $code ."'";
			
				$sSQL .= implode(' OR ',$tempSQL);	
			} 
			else //one item
				$sSQL .= $this->getmapf('code') . "= '" . $itemsarray ."'";
				
			$sSQL .=")";		
		  		
		}
	    //echo $sSQL,'<br>';
		
	    $resultset = $db->Execute($sSQL,2);	
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;//free y 75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1);
		elseif ($linemax==1)  	
          $out = $this->list_katalog(null,null,$template,$ainfo,null,$external_read,$pz,1,null,$linemax);
		else {//return val
		  
		   foreach ($this->result as $n=>$rec) {
		     $out[$rec[$this->getmapf('code')]] = floatval($rec['weight']);
		   }
           //print_r($out);
		}  
		
		return ($out);	
	}		
	
	//override
	function show_last_viewed_items($items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$external_read=null,$photosize=null,$nopager=null) {
	
	    //call from javascript ajax scroll
	    if (!GetReq('ajax')) {
		    //$scm = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid');//self::$sc++;
			//$out = "<script>sc[{$scm}]='show_last_viewed_items';</script><div id='show_last_viewed_items' style='visibility:hidden;'>items|linemax|imgx|imgy|imageclick|template|ainfo|external_read|photosize|nopager-$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager</div>";	
		
            $out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+show_last_viewed_items+'."items|linemax|imgx|imgy|imageclick|template|ainfo|external_read|photosize|nopager+$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager"); 		
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;
		//..exec func using func params or get...
		
        $db = GetGlobal('db');
        $UserName = GetGlobal('UserName');			
	    $lan = $lang?$lang:getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';				
		
		$c = $category?$category:GetReq('cat');	//auto browse current cat
		//$c = $category ? $category : GetGlobal('controller')->calldpc_var('shtags.tagcat'); 
		
		$cat = explode($this->cseparator,$c);		
	    $date2check = time() - ($days * 24 * 60 * 60);
	    $entrydate = date('Y-m-d',$date2check);		
		$pz = $photosize?$photosize:1;
		$resources = 1;
		
		$sSQL = 'select id,tid from stats where tid is not null AND';
	    $sSQL .= ($UserName) ? " (attr2='" . decode($UserName) . "' or attr2='". session_id() . "')" :
			                   " attr2='" . session_id() . "'";
		$sSQL .= " GROUP BY id,tid ORDER BY id DESC limit " . $items;							   
		//echo $sSQL;
	    $sresult = $db->Execute($sSQL,2);
        foreach ($sresult as $s=>$srec) {

			if (strstr($srec['tid'],$this->app_sep)) {
			    $c = explode($this->app_sep,$srec['tid']);
				$code = $c[0];
				$appresult[$code] = $c[1];
			}
			else {
			    $code = $srec['tid'];
				$appresult[$code] = $this->default_app_name;
			}	
        }  		
		//print_r($appresult);			
		
	    $sSQL = '';
		if (!empty($appresult)) {
	      foreach ($appresult as $code=>$appname) {		

			//$appname = $app['name'];		
	                                                                                //,date1
			$mysSQL = "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4,".
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,weight,volume,".$this->getmapf('code').
				" from {$appname}.products";
			$mysSQL .= " WHERE " . $this->getmapf('code') . "= '{$code}' AND itmactive>0 and active>0)";				
			$smSQL[] = $mysSQL;
		
		  }  
		
		$sSQL = implode(' UNION ',$smSQL);
		}
		//echo $sSQL;	
	    $resultset = $db->Execute($sSQL,2);	
		//print_r($resultset);
		$this->result = $resultset;
		
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:null;// free y 75;		
		
		//echo $nopager,'>',$photosize;

		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,$resources,$nopager,false);
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,$resources,$nopager,1,false);
				
		return ($out);				
	}	
	
    function katalog_feed($read_all=false, $off_categories=false, $off_items=false) {
      $db = GetGlobal('db');
	  $lan = getlocal();	  
	  $itmname = $lan?'itmname':'itmfname';
	  $itmdescr = $lan?'itmdescr':'itmfdescr';	  
      $format = GetReq('format')?GetReq('format'):'rss2';	
      //echo '>',$format;	
	  $code = $this->getmapf('code');
      $i=0;	  
	  $isutf8 = (stristr($this->encoding, 'utf8')) ? true : false;
	  //echo $isutf8,'>';
	  if ($read_all)
	    $this->read_all_items();

      $xml = new pxml();
      $xml->encoding = $this->encoding;	//must be utf8 not utf-8
	  //echo $this->encoding;
		  
      $this->xml_formater($xml,$format,1);	  

	  //categories  
	  if (!$off_categories) {
	  
      $ddir = $this->read_tree(GetReq('cat'),null,1);
	  
	  if (!empty($ddir)) {
	        foreach ($ddir as $g=>$lan_g) {
			
			       $cat = GetReq('cat');
				   $c = $cat ? $cat.$this->cseparator.$g : $g;
				   $cat_url = 'http://' . $this->url . '/' . seturl('t=klist&cat='. $c ,null,null,null,null,$this->rewrite);
			
		           $p[] = $g;
			       $p[] = $isutf8 ? $lan_g : iconv($this->encoding, "UTF-8", $lan_g);
                   $p[] = $cat_url;			   
			       $p[] = urlencode($cat);//GetReq('cat');//$cat;
			       $p[] = $isutf8 ? $lan_g : iconv($this->encoding, "UTF-8", $lan_g);
			       $p[] = null;
			       $p[] = null;
				   $p[] = null;
				   $p[] = null;
				   $p[] = null;
				   $p[] = null;
				   $p[] = null;	
                   $p[] = null; 				   
				   
			       $this->xml_formater($xml,$format,null,$p);
				   unset($p);	//holds record data to pass it at xml formater				  	 
			 
			       $i+=1;
            }				   
	  }
	  }//off
	  
	  //items  
	  if (!$off_items) {
	  if (!empty($this->result)) {		  	
		
	    foreach ($this->result as $n=>$rec) {
			  
            $cat = $this->getkategories($rec); //GetReq('cat')..no category in url..			  

            //$pp = GetGlobal('controller')->calldpc_method($mykatalogscript.".read_policy");			  
			
		    //if ($rec[$pp]>0) { //check price... 
				   //$myp = GetGlobal('controller')->calldpc_method($mykatalogscript.".spt use ".$rec[$pp]."+".$ptax); 
					 
				   //echo $ptax,$myp;
				   /*if ($decimal_point)
		             $price = number_format($myp,2,$decimal_point,'.');
				   else
				     $price = number_format($myp,2); */	

                   $price = number_format(floatval($price1),2);					 
			       //echo $price,'>';
				      			      		   
				   $item_url = 'http://' . $this->url . '/' . seturl('t=kshow&cat='.urlencode($cat).'&id='.$rec[$code],null,null,null,null,$this->rewrite);
                   if ($this->photodb)
				     $item_photo_url = 'http://' . $this->url . '/showphoto.php?id='.$rec[$code].'&type=LARGE';
				   else
				     $item_photo_url = 'http://' . $this->url . '/' . $this->img_large . '/' . $rec[$code] . $this->restype;
				   
				   
		           $p[] = $rec[$code];
			       $p[] = $isutf8 ? $rec[$itmname] : iconv($this->encoding, "UTF-8", $rec[$itmname]);
                   $p[] = $item_url;			   
			       $p[] = urlencode($cat);//GetReq('cat');//$cat;
			       $p[] = $isutf8 ? $rec[$itmdescr] : iconv($this->encoding, "UTF-8", $rec[$itmdescr]);
			       $p[] = $item_photo_url;
			       $p[] = $price;
				   $p[] = $isutf8 ? $rec['cat0'] :iconv($this->encoding, "UTF-8",$rec['cat0']);
				   $p[] = $isutf8 ? $rec['cat1'] :iconv($this->encoding, "UTF-8",$rec['cat1']);
				   $p[] = $isutf8 ? $rec['cat2'] :iconv($this->encoding, "UTF-8",$rec['cat2']);
				   $p[] = $isutf8 ? $rec['cat3'] :iconv($this->encoding, "UTF-8",$rec['cat3']);
				   $p[] = $isutf8 ? $rec['cat4'] :iconv($this->encoding, "UTF-8",$rec['cat4']);	
                   $p[] = $isutf8 ? $rec['itmremark'] :iconv($this->encoding, "UTF-8", $rec['itmremark']); 				   
				   
			       $this->xml_formater($xml,$format,null,$p);
				   unset($p);	//holds record data to pass it at xml formater				  	 
			 
			       $i+=1;	
			//}//price check 
			  
		}
	  } //else echo '--';
	  }//off
	  //else echo 'off';
      //if i..
	  $data = $xml->getxml(1);
	  return($data);	  
    }	
	
    function sitemap_feed($read_all=false) {
	  $db = GetGlobal('db');
      $i=0;	  
      $format = 'sitemap';	
	  $code = $this->getmapf('code');	  
	  $isutf8 = (stristr($this->encoding, 'utf-8')) ? true : false;
	  //echo $isutf8,'>';
	  //if ($read_all)
	    //$this->read_all_items();
		
	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {		
			if ($a>0)
				$sSQL .= ' UNION ';
			$appname = $app['name'];		
	                                                                                //,date1
			$sSQL .= "(select '{$appname}' as DB_NAME,id,sysupd,cat0,cat1,cat2,cat3,cat4,".$code." from {$appname}.products ";
			$sSQL .= " WHERE ";
			$sSQL .= "itmactive>0 and active>0 ";	
			//$sSQL .= " GROUP BY cat0,$itmname";
			//$sSQL .= " ORDER BY sysins desc ";//id asc ";
			$sSQL .=")";	
	   }		
	   $sSQL .= " ORDER BY sysupd DESC LIMIT 6000";// . $items;			
	   //echo $sSQL;
		
	   $resultset = $db->Execute($sSQL,2);			

      $xml = new pxml();
      $xml->encoding = $this->encoding;	
		  
      $this->xml_formater($xml,$format,1);	  
	  //echo 'z';
	  
	  //items  
	  if (!empty($resultset)) {		  	
		//echo 'result';
	    foreach ($resultset as $n=>$rec) {
			//echo $n,'<br/>';  
			$cat = $this->getkategories($rec);	      			      		   
			$item_url = 'http://' . $this->url . '/' . seturl('t=kshow&cat='.urlencode($cat).'&id='.$rec[$code],null,null,null,null,$this->rewrite);

		    $p[] = $item_url;
			//in case of 0000-00-00..is null
			$p[] = (substr($rec['sysupd'],0,1)!='0') ? array_shift(explode(' ',$rec['sysupd'])) : null;		   

			$this->xml_formater($xml,$format,null,$p);
			unset($p);	//holds record data to pass it at xml formater				  	 
			 
			$i+=1;	
            //if ($i==1111) break; //stop to test			
		}
	  } 

	  $data = $xml->getxml(1);
	  return($data);	  
    }		

	function xml_formater(& $xml,$format=null,$init=null,$params=null,$encoding=null) {
	
	      $date = date(DATE_RFC822);//'m-d-Y');
		  $cat_title = iconv($this->encoding, "UTF-8", $this->getcurrentkategory());
	      $lan_descr = getlocal() ? 'gr' : 'en';
	   
	      if ($init) {
		  
		     if ($this->encoding)
			   $enc = $this->encoding;
			 else
			   $enc = $xml->charset;

             switch ($format) {
			   case 'sitemap' : $enc ='utf8';
			                    $xml->addtag('urlset',null,null,"xmlns=http://www.sitemaps.org/schemas/sitemap/0.9");							
                                break; 			   
	           case 'skroutz' : $enc ='utf8';
			                    $xml->addtag('skroutzstore',null,null,"url=$this->url|name=$xml->urltitle|encoding=$enc");							
	                            $xml->addtag('products','skroutzstore',null,null);
								break;
			   case 'rss1'    : echo 'rss1';
	   					        break; 								
			   case 'rss2'    : $enc ='utf-8';
			                    $xml->addtag('rss',null,null,"version=2.0");							
	                            $xml->addtag('channel','rss',$xml->urltitle,null);
	                            $xml->addtag('title','channel',$xml->urltitle.', '.$cat_title,null);								
	                            $xml->addtag('link','channel','http://' . $this->url,null);									
	                            $xml->addtag('description','channel',$xml->urltitle.', '.$cat_title,null);									
	                            $xml->addtag('language','channel',$lan_descr,null);									
	                            $xml->addtag('pubDate','channel',$date,null);									
	                            $xml->addtag('lastBuildDate','channel',$date,null);	
	                            $xml->addtag('docs','channel',null,null);																	
	                            $xml->addtag('generator','channel','stereobit.networlds PHPDAC 2.1',null);									
	                            $xml->addtag('managingEditor','channel',$xml->urltitle,null);									
	                            $xml->addtag('webMaster','channel',null,null);									
	                            $xml->addtag('ttl','channel','15',null);									
	   					        break; 
			   case 'atom'    : $enc ='utf-8';
			                    $xml->addtag('feed',null,null,"xmlns=http//www.w3.org/2005/Atom");							
	                            $xml->addtag('title','feed',$xml->urltitle,null);
	                            $xml->addtag('subtitle','feed',null,null);								
	                            $xml->addtag('link','feed','/',"href=http://".$this->url."/atom/|rel=self");									
	                            $xml->addtag('link','feed','/',"href=http://".$this->url);									
	                            $xml->addtag('id','feed',null,null);									
	                            $xml->addtag('updated','feed',null,null);									
	                            $xml->addtag('author','feed',$xml->urltitle,null);	
	                            $xml->addtag('name','author',$xml->urltitle,null);																	
	                            $xml->addtag('email','author',null,null);									
	   					        break; 								
               default        : $xml->addtag('default-xml',null,null,"url=$this->url|name=$xml->urltitle|encoding=$enc");							
	                            $xml->addtag('products','default-xml',null,null);
												
		     }		  
		     return 1;
		  }
		  else {
             //product loop xml tags 		  
             switch ($format) {
			   case 'sitemap' : 
			   $xml->addtag('url','urlset',null,null);
			   
               //$xml->addtag('name','url',$xml->cdata($params[1]),null); 
			   $xml->addtag('loc','url',$params[0],null); 
			   if ($params[1]) //in case of 0000-00-00..is null
				$xml->addtag('lastmod','url',$params[1],null);  			   
			   $xml->addtag('changefreq','url','daily',null); 
			   $xml->addtag('priority','url','0.5',null);
			   break;
			 
	           case 'skroutz' : 
			   $cats = explode($this->cseparator,$params[3]);	
			   $manufacturer = str_replace('_',' ',array_shift($cats));
			   $category = str_replace('_',' ',$params[3]);
			   $category = str_replace($this->cseparator,'/',$category);
	           $xf = ($this->itemfimagex?$this->itemfimagex:640);
	           $yf = ($this->itemfimagey?$this->itemfimagey:480);	
	           $xt = ($this->imagex?$this->imagex:160);
	           $yt = ($this->imagey?$this->imagey:120);				   		   
			   	  
               $xml->addtag('product','products',null,"id=".$params[0]);
			   
               $xml->addtag('name','product',$xml->cdata($params[1]),null);  //cdata val
               $xml->addtag('link','product',$params[2],null);  //http://... val
               $xml->addtag('price_with_vat','product',$params[6],null);  //price 11.11
               $xml->addtag('category','product',$xml->cdata($category),"id=".$params[3]); //cdata val = descr, id=code
               $xml->addtag('image','product',$params[5],"width=$xf|height=$yf");  //http://... image
               $xml->addtag('thumbnail','product',$params[5],"width=$xt|height=$yt");  //http://... thumbnail
               $xml->addtag('manufacturer','product',$xml->cdata($manufacturer),null);  //cdata val
               $xml->addtag('shipping','product',null,"type=accurate|currency=euro");  //ship cost 11.11
               $xml->addtag('sku','product','/',null);  //...
               $xml->addtag('ssku','product','/',null);  //...
               $xml->addtag('description','product',$xml->cdata($params[4]),null);  //cdata val		  
		       break;
			   case 'rss1'    : //echo 'rss1';
	   		   break; 								
			   case 'rss2'    : //echo 'rss2';
	           $xml->addtag('item','channel',null,null);				   
			   
               $xml->addtag('title','item',$xml->cdata($params[1]),null);				   
               $xml->addtag('link','item',$params[2],null);
               $xml->addtag('description','item',$xml->cdata($params[4]),null);				   			   				   			   
			   $xml->addtag('author','item',$xml->urltitle,null);
			   $xml->addtag('category','item',$xml->cdata($params[3]),null);
			   $xml->addtag('comments','item',$xml->cdata(strip_tags($params[12])),null);
               $xml->addtag('pubDate','item',$date,null);				   			   
               $xml->addtag('guid','item',$params[0],null);			   
	           break; 
			   case 'atom'    : //echo 'atom';
	           $xml->addtag('entry','feed',null,null);				   
			   
               $xml->addtag('title','entry',$params[1],null);				   
               $xml->addtag('link','entry',$params[2],null);
               $xml->addtag('id','entry',$params[0],null);				   			   				   			   
               $xml->addtag('updated','entry',$date,null);				   			   
               $xml->addtag('summary','entry',$params[4],null);				   
	   		   break; 
			   default ://seo links
               $xml->addtag('product','products',null,"id=");
			   
               $xml->addtag('name','product',$xml->cdata('name'),null);  //cdata val
               $xml->addtag('link','product',null,null);  //http://... val
               $xml->addtag('price_with_vat','product',null,null);  //price 11.11
               $xml->addtag('category','product',$xml->cdata('category'),"id=\"\""); //cdata val = descr, id=code
               $xml->addtag('image','product',null,"width=|height=");  //http://... image
               $xml->addtag('thumbnail','product',null,"width=|height=");  //http://... thumbnail
               $xml->addtag('manufacturer','product',$xml->cdata('manufacturer'),null);  //cdata val
               $xml->addtag('shipping','product',null,"type=|currency=");  //ship cost 11.11
               $xml->addtag('description','product',$xml->cdata('description'),null);  //cdata val		  			   
			 }
			 //dump xml  
			 //echo '<pre>';
			 //$xml->dumpxml();
			 //print_r($xml->index);
			 //echo '</pre>';
			 
		     return 1;
		  }
		  
		  return 0;
	}	
	
	function get_rss_url($feed_id=null) {
	  $id = GetReq('id');
	  $cat = GetReq('cat'); //echo $cat;
	  $page = GetReq('page')?GetReq('page'):'0';	  
	  $feed_cmd = $feed_id ? $feed_id : 'feed';	  
	
      //RSS	
	  if (stristr($this->feed_on,'rss')) {
  
	    if ($id)
	      $ret = seturl("t=$feed_cmd&cat=$cat&page=$page&id=$id&format=rss2",null,null,null,null,$this->rewrite);
	    elseif ($cat)
	      $ret = seturl("t=$feed_cmd&cat=$cat&page=$page&format=rss2",null,null,null,null,$this->rewrite); 
		else  
		  $ret = seturl("t=$feed_cmd&format=rss2",null,null,null,null,$this->rewrite); 
	  }
	  return ($this->url.'/'.$ret);
	}

	function get_xml_links($mylan=null,$feed_id=null,$dpcfeed=null) {
	  $lan = $mylan?$mylan:getlocal();//by hand per htm 0,1 page
	  $lnk = array();
	  $id = GetReq('id');
	  $cat = GetReq('cat'); //echo $cat;
	  $page = GetReq('page')?GetReq('page'):'0';
	  $feed_cmd = $feed_id ? $feed_id : 'feed';	  
	  //echo $this->feed_on,'>';
	  //$dpcfeed = $dpcfeed?$dpcfeed:'shkatalogmedia.show_p use p3,999';//special phpdac page without params
	  
	  $mytemplate = $this->select_template('xml-links');
	  
      //RSS	
	  if (stristr($this->feed_on,'rss')) {
        if ($dpcfeed) //special phpdac page without params			  
		  $lnk['RSS'] = seturl("t=$feed_cmd&dpc=$dpcfeed&format=rss2",null,null,null,null,$this->rewrite);  
	    elseif ($id)
	      $lnk['RSS'] = seturl("t=$feed_cmd&cat=$cat&page=$page&id=$id&format=rss2",null,null,null,null,$this->rewrite);
	    elseif ($cat)
	      $lnk['RSS'] = seturl("t=$feed_cmd&cat=$cat&page=$page&format=rss2",null,null,null,null,$this->rewrite); 
		else  
		  $lnk['RSS'] = seturl("t=$feed_cmd&format=rss2",null,null,null,null,$this->rewrite); 
	  }
	  //ATOM
	  if (stristr($this->feed_on,'atom')) {	  
        if ($dpcfeed) //special phpdac page without params		  
		  $lnk['ATOM'] = seturl("t=$feed_cmd&dpc=$dpcfeed&format=atom",null,null,null,null,$this->rewrite);//special phpdac page without params		  
	    elseif ($id)
	      $lnk['ATOM'] = seturl("t=$feed_cmd&cat=$cat&page=$page&id=$id&format=atom",null,null,null,null,$this->rewrite);
	    elseif ($cat)
	      $lnk['ATOM'] = seturl("t=$feed_cmd&cat=$cat&page=$page&format=atom",null,null,null,null,$this->rewrite);	  
		else  
		  $lnk['ATOM'] = seturl("t=$feed_cmd&format=atom",null,null,null,null,$this->rewrite);	  
	  }	
	  //print_r($lnk);	

	  if (!empty($lnk)) {
	    foreach ($lnk as $t=>$w) {
	      //echo $w,$t,'<br>';	    
		  if ($w) {
		    $icon_file = $this->urlpath.'/'.$this->infolder.'/images/'.strtolower($t).'.png';
			//echo $icon_file,'>';
		    if (is_readable($icon_file)) 
				$mylink = "<img src=\"". $this->infolder.'/images/'.strtolower($t).'.png' ."\" border=\"0\" alt=\"$t\">";
			else 
				$mylink = $t;
			  
			if ($mytemplate)
				$tokens[] = "<A href=\"$w\">".$mylink."</A>";
            else				
	            $ret .= "<A href=\"$w\">".$mylink."</A>&nbsp;";
		  }	
		  //echo $ret,'<br>';
	    }
		
	    if (!empty($tokens))
			$out = $this->combine_tokens($mytemplate, $tokens);
	    else 
			$out = "<hr/>" . $ret;		
	  }

	  return ($out);  
	}	
	
    //read dir for rss page
	function read_all_items() {
       $db = GetGlobal('db');
	   $lan = GetReq('lan')>=0?GetReq('lan'):getlocal();	//in case of post sitemap set lan param uri   
	   $itmname = $lan?'itmname':'itmfname';
	   $itmdescr = $lan?'itmdescr':'itmfdescr';	 
	   $start = GetReq('start');
	   //$headcat = GetReq('headcat')?GetReq('headcat'):"";	   
	   //$meter = $start?$start-1:0;  	 
	   
	    $sSQL = 'select id,name from apps where active=1';
	    $appresult = $db->Execute($sSQL,2);	

	    $sSQL = '';
	    foreach ($appresult as $a=>$app) {		
			if ($a>0)
				$sSQL .= ' UNION ';
			$appname = $app['name'];	   	
			$sSQL .= "(select '{$appname}' as DB_NAME,id,itmname,itmfname,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,".$this->getmapf('code')." from {$appname}.products ";
			$sSQL .= " WHERE ";
			$sSQL .= "itmactive>0 and active>0 ";	
			//$sSQL .= " GROUP BY cat0,$itmname";
			$sSQL .= " ORDER BY cat0,cat1,cat2,cat3,cat4,$itmname asc ";
			$sSQL .= ')';
		}	
		$sSQL .= $start ? " LIMIT $start,10000" : " LIMIT 10000";			
	   //echo $sSQL;
		
	   $resultset = $db->Execute($sSQL,2);	
	   // $result = $resultset;
	   $this->result = $resultset; 
 	   $this->max_items = $db->Affected_Rows();//count($this->result);	   
       return (null);//$this->max_items);		   
	}
	
	function show_last_edited_items($items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$photosize=null,$nopager=null) {	
	     $limit = $items ? $items : 5;
         $db = GetGlobal('db');	
	     $lan = getlocal();
         $db = GetGlobal('db');		
		 $pz = $photosize?$photosize:1;			 
		 
		 if ($this->one_attachment)
		   $slan = null;
		 else
		   $slan = $lan?$lan:'0';
		 //echo $slan,'>';  
		 
	     $code = $this->getmapf('code');		 
		 
         $sSQL = "select code from pattachments ";
	     $sSQL .= " WHERE (type='.html' or type='.htm')";
	     if (isset($slan))
	       $sSQL .= " and lan=" . $slan;
		 $sSQL .= " ORDER BY id desc LIMIT " . $items;		   
	     //echo $sSQL;
	  
	     $resultset = $db->Execute($sSQL,2);	
	     $result = $resultset;
	     //print_r($result);	
	     if ($exist = $db->Affected_Rows()) {
		   //echo 'sql';
		   $ret = $result->fields['data'];
		 }	

         $sSQL2 = "select id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,resources,".
				$this->getmapf('code').	" from products ";
		 $sSQL2 .= " WHERE ";
         foreach ($result as $n=>$rec) {
		    $or[] = $this->getmapf('code') ."='". $rec['code'] ."'";
         }
         $sSQL2 .= '(' . implode(' or ',$or) . ')'; 
		 $sSQL2 .= " and (itmactive>0 and active>0)";
		 $sSQL2 .= " ORDER BY " . $this->getmapf('code') . " desc LIMIT " . $items;			 
         //echo $sSQL2;
		 
	     $resultset = $db->Execute($sSQL2,2);	
		 $this->result = $resultset;		 
		 
		 if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,$nopager);
		 else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,$nopager,$linemax);
		  
		 return ($out);			 
	}	

	//select price type..overriten error when no cart
	function spt($price,$tax=null) {
      //echo $tax;
	  
	  if ($tax) {
        $p = $this->pricewithtax($price,$tax);	  
	  }
	  elseif ($this->is_reseller) {
	    $p = $price;
	  }	
	  elseif (($this->appkey->isdefined('SHCART_DPC')) && 
	         (GetGlobal('controller')->calldpc_var('shcart.showtaxretail'))) {//retal handl
	    $p = $this->pricewithtax($price,$tax);
	  }
	  else
	    $p = $price;		
	  //echo '>',$p;
	  return ($p);
	}
	
	//override
	function replace_spchars($string) {
	
	  /*$r1 = str_replace('"',"'",$string);
	  $r2 = str_replace('+',"plus",$r1);	  
	  $r3 = str_replace('&'," and ",$r2);
	  $r4 = str_replace('/',"~",$r3);
	  return ($r4);*/
	  $ret = str_replace(array('"','+','&','/'), 
	                     array("'","plus"," and ", "~"),
						 $string);
	  return ($ret);
	}

	//OVERRIDE to replace old code names
	//for utf strings as products code..encode to digits for saving image
	public function encode_image_id($id=null, $ipath=null) {
	    if (!$id) return null;
		$iencpath = $ipath ? $this->urlpath .'/'. $ipath : 
		                     $this->urlpath .'/images/catfiles/'; //item dir or cat dir

		if ($this->encodeimageid) {
			//encode 
			/*$out = join(array_map(function ($n) { return sprintf('%03d', $n); }, unpack('C*', $id)));
			
			//prev encoding style..replace with md5
	        if (is_readable($iencpath.'/'.$out.$this->restype)) {
			   $newcode = md5($id);
			   @copy($iencpath.'/'.$out.$this->restype, $iencpath.'/'.$newcode.$this->restype );
			}*/ //OK
			//re-set
			$out = md5($id);
			//echo $id.':'.$iencpath.$out.$this->restype.'<br/>';
		}
		else
		    $out = $id;
			
        return $out;
	}	

    public function frontpage_item($code=null, $app=null) {
	    $db = GetGlobal('db');		
		$code_sql = $code ? "=".$code : "like '_fp%'";
		$appname = ($app) ? $app : null;
		$app_sql = ($appname) ? "'{$appname}' as DB_NAME" :"'{$this->default_app_name}' as DB_NAME";
		
        $sSQL = "select {$app_sql},id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
	            "price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".$this->getmapf('code')." from products ";
		$sSQL .= " WHERE itmactive>0 and active>0";			 
		$sSQL .= ' and '.$this->getmapf('code')." ".$code_sql;//fp code means frontpage item
		//echo $sSQL;  
								 
	    $this->result = $db->Execute($sSQL,2);
		$this->max_items = $db->Affected_Rows();
	    $this->max_selection = $this->get_max_result();								

		if (/*(!$this->onlyincategory) &&*/ ($this->max_items>1))
			$out = $this->list_katalog(0);//null,'katalog',null,null,1);
		else	
			$out = $this->show_item(null,null,null,null,null,null,null,true); //no rss when fix call
			
        return ($out);	
    }	
	
	//check if root app
	protected function is_root_app($app=null) {
	    
		if ((!$app) || ($app==$this->default_app_name))
		    return true;
			
		return false;	
	}
	
	//override for apps
	function update_prices($cartitems) {
	   $db = GetGlobal('db');
	   $p_ret = null;
	   
	   $items = unserialize($cartitems);
	   $pfield = $this->read_policy();
	   
	   if (is_array($items)) {
	    //print_r($items);
        foreach ($items as $prod_id => $product) {
		  if (($product) && ($product!='x')) {	   
		  
            $param = explode(";",$product);
			//extract app anchor from code field
			$code = (strstr($param[0],$this->app_sep)) ?
			        array_shift(explode($this->app_sep,$param[0])) : 
			        $param[0]; 
            $appname = $param[3] ? $param[3] : null;			
	   
            $sSQL = "select ".$pfield." from {$appname}.products ";
	        $sSQL .= " WHERE ".$this->getmapf('code')."='".$code."'";	   	   
		    //echo $sSQL,'<br>';
		    $result = $db->Execute($sSQL,2);	
			
			$p_ret[$param[0]] = $this->spt($result->fields[0]);
		  }
		}
		return ($p_ret);  
	   }
	   else
	     return null;
	
	}	
	
	//contact app list called at contact.php
	public function contact_list($items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$photosize=null,$nopager=null) {
	    $db = GetGlobal('db');
		$root_domain = paramload('SHELL','urlbase');
		
		//$mytemplate = $template ? $template : 'fpkatalog.htm';
        if ($template) {
	     $tmpl = explode('.',$template);
	     $mytemplate = $this->select_template($tmpl[0]);		
	    }
	    else
	     $mytemplate = $this->select_template('fpkatalog');		
		
		$sSQL = 'select id,name from apps where active=1';
		$sSQL .= " ORDER BY id desc LIMIT " . $items;
		//echo $sSQL;
		$appresult = $db->Execute($sSQL,2);	
 
        $contacts = array();
	    foreach ($appresult as $a=>$app) {	

			//$appname = $app['name'];
			$tokens = array(); //reset
			if (!$this->is_root_app($app['name'])) {
			    $d = str_replace($this->dir_prefix,'',$app['name']);
			    $domain = str_replace('www',$d,$root_domain);
				$xixdomain = str_replace('http://','',$domain);
				$tokens[] = "<a href='$domain' target='_blank'><h3>$xixdomain</h3></a>";
				//"<a href='{$app['name']}/contact.php'>{$app['name']}</a>";
				$tokens[] = rand();//'xxx';//null;
				$tokens[] = "<a href='$domain/contact.php' target='_blank'><img src='images/icon_map.png'/></a>";

				$contacts[] = $this->combine_tokens($mytemplate, $tokens, true);
			}
        }	
        //print_r($contacts);
		
        //table generation
		if ($linemax>1)
		   $out = $this->make_table($contacts, $linemax, 'fpkatalogtable');		
		   
		return ($out);	 		
	}
	
    public function frontpage_list($items=10,$linemax=null,$imgx=100,$imgy=null,$imageclick=0,$template=null,$ainfo=null,$photosize=null,$nopager=null) {
	
	    //call from javascript ajax scroll
	    if (!GetReq('ajax')) {
		    //$scm = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid');//self::$sc++;
			//$out = "<script>sc[{$scm}]='frontpage_list';</script><div id='frontpage_list' style='visibility:hidden;'>$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager</div>";	
			
			$out = GetGlobal('controller')->calldpc_method('fronthtmlpage.get_scrollid use '.get_class($this).'+frontpage_list+'."items|linemax|imgx|imgy|imageclick|template|ainfo|external_read|photosize|nopager+$items|$linemax|$imgx|$imgy|$imageclick|$template|$ainfo|$external_read|$photosize|$nopager"); 					
			return ($out);
		}
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;
		//...exec func using func params or get...
		
	    $db = GetGlobal('db');
		$template = $template ? $template : 'fpkatalog.htm';
		
		$sSQL = 'select id,name from apps where active=1';
		$sSQL .= " ORDER BY id desc LIMIT " . $items;
		//echo $sSQL;
		$appresult = $db->Execute($sSQL,2);	
 
        $sSQL2 = null;
	    foreach ($appresult as $a=>$app) {
		
		  if (!$this->is_root_app($app['name'])) {
                //continue;			

			if ($a>0)
				$sSQL2 .= ' UNION ';
			$appname = $app['name'];
            //echo $appname,'<br/>'; 			
            $sSQL = null; //reset sub sql			
		
			$sSQL = "(select '{$appname}' as DB_NAME,id,sysins,code1,pricepc,price2,sysins,itmname,itmfname,uniname1,uniname2,active,code4," .// from abcproducts";// .
					"price0,price1,cat0,cat1,cat2,cat3,cat4,itmdescr,itmfdescr,itmremark,ypoloipo1,".$this->getmapf('code')." from {$appname}.products ";
			$sSQL .= " WHERE itmactive>0 and active>0";			 
			$sSQL .= ' and '.$this->getmapf('code')." like '_fp%'";//fp code means frontpage item
			$sSQL .= ' LIMIT 1)'; //limited to 1 fp item
			
			$sSQL2 .= $sSQL;
		  }	
		}	
		//echo $sSQL2;  
								 
	    $this->result = $db->Execute($sSQL2,2);
		$this->max_items = $db->Affected_Rows();
	    $this->max_selection = $this->get_max_result();								
			
		$xmax = $imgx?$imgx:100;
		$ymax = $imgy?$imgy:75;		
		
		if ($linemax>1)
		  $out = $this->list_katalog_table($linemax,$xmax,$ymax,$imageclick,0,null,$template,$ainfo,null,$external_read,$pz,1,1,"shkatalogmedia.frontpage_list use $items,$linemax");
		else  	
          $out = $this->list_katalog(null,null,$template,$ainfo,$external_read,$pz,null,null,$linemax,"shkatalogmedia.frontpage_list use $items");
		  				
        return ($out);	
    }

	protected function make_combo2($name=null, $choices=null, $selection=null,$callback=false, $class=null) {
		if ((empty($choices))||(!$name)) return false;
		$class = $class ? $class : 'myf_select';
		
		$combo = "<select name=\"{$name}\" id=\"{$name}\" class=\"$class\"";
		$combo.=($callback) ? " onChange=\"$callback(this.options[this.selectedIndex].value,'{$name}'); return false;\">" : ">";	
			
        foreach ($choices as $c=>$chname) {

			$combo.= "<option value='$c' ".($c == $selection ? " selected" : "").">$chname</option>";
        }
        $combo.= "</select>"; 		
		
		return ($combo);
	}

	function app_paramload($section,$param,$remoteapppath) {
	
		$app_config = @parse_ini_file($remoteapppath."config.ini",true);
		$appt_config = @parse_ini_file($remoteapppath."myconfig.txt",true);
	
		if (is_array($appt_config[$section]) && isset($appt_config[$section][$param])) 
			return ($appt_config[$section][$param]);
		elseif (is_array($app_config[$section]))     
			return ($app_config[$section][$param]);	

  
		//get from mem	
		$config = GetGlobal('config');		
		if ($ret = $config[$section][$param]) 
			return ($ret);

	}	
	
};			  
}
?>