<?php

if ($_GET['editmode']>0) {
// Turn off all error reporting
//error_reporting(0);

// Report simple running errors
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
// This is the default value set in php.ini
//error_reporting(E_ALL ^ E_NOTICE);

// Report all PHP errors (see changelog)
//error_reporting(E_ALL);

// Report all PHP errors
//error_reporting(-1);

//echo nl2br(file_get_contents('./error_log'));
//debug_print_backtrace();
}

$__DPCSEC['FRONTHTMLPAGE_DPC']='1;1;1;1;1;1;1;1;9';

if (!defined("FRONTHTMLPAGE_DPC")) {//&& (seclevel('FRONTPAGE_DPC',decode(GetSessionParam('UserSecID')))) ){
define("FRONTHTMLPAGE_DPC",true);

$__DPC['FRONTHTMLPAGE_DPC'] = 'fronthtmlpage';

//$__EVENTS['FRONTHTMLPAGE_DPC'][0] = 'fronthtmlpage';
$__EVENTS['FRONTHTMLPAGE_DPC'][1] = 'included';
$__EVENTS['FRONTHTMLPAGE_DPC'][2] = 'included_0';
$__EVENTS['FRONTHTMLPAGE_DPC'][3] = 'included_1';
$__EVENTS['FRONTHTMLPAGE_DPC'][4] = 'included_2';
$__EVENTS['FRONTHTMLPAGE_DPC'][5] = 'included_3';
$__EVENTS['FRONTHTMLPAGE_DPC'][6] = 'included_4';
$__EVENTS['FRONTHTMLPAGE_DPC'][7] = 'included_5';
$__EVENTS['FRONTHTMLPAGE_DPC'][8] = 'included_6';
$__EVENTS['FRONTHTMLPAGE_DPC'][9] = 'included_7';
$__EVENTS['FRONTHTMLPAGE_DPC'][10] = 'included_8';
$__EVENTS['FRONTHTMLPAGE_DPC'][11] = 'included_9';
$__EVENTS['FRONTHTMLPAGE_DPC'][12] = 'included_10';

//$__ACTIONS['FRONTHTMLPAGE_DPC'][0] = 'fronthtmlpage';
$__ACTIONS['FRONTHTMLPAGE_DPC'][1] = 'included';
$__ACTIONS['FRONTHTMLPAGE_DPC'][2] = 'included_0';
$__ACTIONS['FRONTHTMLPAGE_DPC'][3] = 'included_1';
$__ACTIONS['FRONTHTMLPAGE_DPC'][4] = 'included_2';
$__ACTIONS['FRONTHTMLPAGE_DPC'][5] = 'included_3';
$__ACTIONS['FRONTHTMLPAGE_DPC'][6] = 'included_4';
$__ACTIONS['FRONTHTMLPAGE_DPC'][7] = 'included_5';
$__ACTIONS['FRONTHTMLPAGE_DPC'][8] = 'included_6';
$__ACTIONS['FRONTHTMLPAGE_DPC'][9] = 'included_7';
$__ACTIONS['FRONTHTMLPAGE_DPC'][10] = 'included_8';
$__ACTIONS['FRONTHTMLPAGE_DPC'][11] = 'included_9';
$__ACTIONS['FRONTHTMLPAGE_DPC'][12] = 'included_10';

$__LOCALE['FRONTHTMLPAGE_DPC'][1]='_addspace;Limited space, add space;Πρόσθεσε χωρητικότητα';

class fronthtmlpage {

	var $t_fronthtmlpage;
	var $userLevelID;
    var $themepath,$themeurl;
	var $htmlfile,$htmlpage;
	
	var $agent;
	var $runas;
	
	var $argument;
	var $debug;
	
	var $forms,$arrays;
	
	var $runasapp;
	var $data;
	var $infolder, $urlpath, $url, $urltitle;
	var $modify, $adminhtmlfile, $adminhtml,$admindpc,$admincmd,$adminview;
	var $allow_edit;
	var $charset;
	var $verbose;
	var $editmode_point;
	var $editdpc, $edithtml, $prpath;
	var $dhtml, $htmlext;
	
	static $staticpath;
	
	var $load_mode, $scrollid, $global_css_animations;
	 
	function fronthtmlpage($file=null,$runasuser=null,$runasapp=null) {	
	
        $UserSecID = GetGlobal('UserSecID');
	    $thema = GetGlobal('thema');
	    $theme = GetGlobal('theme');	
	    $__USERAGENT = GetGlobal('__USERAGENT');
	    $GRX = GetGlobal('GRX');				
	 
	    $this->t_fronthtmlpage = new ktimer;
	    $this->t_fronthtmlpage->start('fronthtmlpage'); 						

        $this->userLevelID = (((decode($UserSecID))) ? (decode($UserSecID)) : 0);  
		$this->agent = $__USERAGENT;  	
		
		if (isset($runasuser)) $this->runas = $runasuser; //run fp as a diferent user (see newsletter)
		if (isset($runasapp)) $this->runasapp = $runasapp;
		//echo $this->runasapp,'>';
		
        $this->prpath = paramload('SHELL','prpath');		
		
		$this->htmlpage = paramload('FRONTHTMLPAGE','path')?paramload('FRONTHTMLPAGE','path'):'html'; 
		//echo '>',$this->htmlpage;
		//$this->htmlfile = paramload('SHELL','prpath'). $this->htmlpage . "/" . $file; 
		$this->urlpath = paramload('SHELL','urlpath');			
		$this->urltitle = paramload('SHELL','urltitle');					
		
		$murl = arrayload('SHELL','ip');
        $this->url = (!empty($murl)) ? $murl[0] : paramload('SHELL','urlbase'); 			
		//echo $this->url ,'>';
		$this->infolder = paramload('ID','hostinpath');		
		
		//check if html file name based on action exist
		$cmd = GetParam('FormAction')?GetParam('FormAction'):GetReq('t');
		if ($cmd) {
		  //check lan
		  $mylan = getlocal()?getlocal():'0';
		  //is logged in user
		  $autofile = GetGlobal('UserID')? $cmd . '_in' . $mylan . '.html' : $cmd . $mylan . '.html';
		  
		  $htmlfile = $this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $autofile;
		  if (!is_readable($htmlfile)) //default
		    $htmlfile = $this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $file;
		}
		else
		$htmlfile = $this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $file;
		//echo '>',$htmlfile;
		
		if (!is_readable($htmlfile)) {//check for parent file

		  $cphtmlpath = "/../cp/$this->htmlpage/";
			
		  $parentfile = $this->urlpath . $cphtmlpath . $file; 
		  //echo 'z'.$parentfile;
		  if (is_readable($parentfile)) 
			$this->htmlfile = $parentfile;
		}
		else {
		  $cphtmlpath = $this->infolder . '/cp/' . $this->htmlpage;		
		  $this->htmlfile = $htmlfile;//$this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $file; 
		}  
		
		//echo '>',$this->htmlfile;
		
		$this->adminhtmlfile = $this->urlpath . $cphtmlpath . "/cpmframework.htm"; 
		$this->adminhtml = $this->urlpath . $cphtmlpath . "/cpmhtmleditor.htm"; 
		$this->admindpc = $this->urlpath . $cphtmlpath . "/cpmdpcedtitor.htm"; 
		$this->admincmd = $this->urlpath . $cphtmlpath . "/cpmctrl.htm"; 						
		$this->adminview = $this->urlpath . $cphtmlpath . "/cpmhtmlviewer.htm"; 
		
		$p = explode(".",$file);
		//$this->argument = strtoupper($p[0]); //the name without ext		
		//in case of dot(.) in name
		$extension = array_pop($p);
		//now with the rest of array
		$pdotname = implode('.',$p);
		$this->argument = strtoupper($pdotname); //the name with dots and without ext		
		
		$this->debug = GetReq('debug')?GetReq('debug'):GetSessionParam('debug');//0;		
		$this->session_use_cookie = paramload('SHELL','sessionusecookie');	
		
		//embedded forms and/or arrays
		$this->forms = array();
		$this->arrays = array();
		$this->data = null;
		
		$this->modify = urldecode(base64_decode(GetReq('modify')))=='stereobit' ? true : false;

        //choose encoding
        $char_set  = arrayload('SHELL','char_set');	  
        $charset  = paramload('SHELL','charset');	  		
		if (($charset=='utf-8') || ($charset=='utf8'))
		  $this->charset = 'utf-8';
		else  
	      $this->charset = $char_set[getlocal()]; 	  				
		  
		$this->allow_edit = remote_paramload('FRONTHTMLPAGE','alloweditpage',$this->prpath);  
		$this->verbose = remote_paramload('FRONTHTMLPAGE','verbose',$this->prpath); 
		
        if ($GRX)    
         $this->editmode_point  = loadTheme('editmode','');
	    else
	  	 $this->editmode_point  = '[Edit Mode]';

        $this->editdpc = remote_paramload('FRONTHTMLPAGE','editdpc',$this->prpath); 		 
		$this->edithtml = remote_paramload('FRONTHTMLPAGE','edithtml',$this->prpath); 
		
	    //dynamic html loader
	    $this->dhtml = remote_paramload('FRONTHTMLPAGE','dhtml',$this->prpath); 
		
		$htmlfile_extension = remote_paramload('FRONTHTMLPAGE','htmlext',$this->prpath);
        $this->htmlext = $htmlfile_extension ? $htmlfile_extension :'.htm'; 		
		
		self::$staticpath = paramload('SHELL','urlpath');
		$this->scrollid = 0;//javascript scroll call meter
		
		$this->global_css_animations = '1';
		$this->uagent();
		
		$this->load_mode = 0;
		
		if (!strstr($_ENV["SCRIPT_FILENAME"],'/cp/')) /*CP script, jquery conflict with jqgrid*/
		   $this->javascript();
	}	
	
    function render($actiondata) { 	

      switch ($this->agent) {
	      case 'WAP'  :
		  case 'XML'  :	
		  case 'GTK'  :			   
		  case 'XUL'  :					   			   
	      case 'HTML' :	  
		  default     :$out = $this->action($actiondata);
					   break;
	  }			  
	  		   	 
	  //timer
	  $this->t_fronthtmlpage->stop('fronthtmlpage');
   	  //if (seclevel('_TIMERS',$this->userLevelID))
	    //echo "fronthtmlpage " . $this->t_fronthtmlpage->value('fronthtmlpage');
	  	  
	  		  
	  return ($out);
    }
	
    function event($event=null) {
	
	    if ($fname=GetReq('fname')) //variable included_variable
			$fid = str_replace(array('/','.'),array('',''), $fname);
	
        switch($event)   {
		
		    //not used, not defined
		    case 'included_'.$fid :  die($this->included());
								    break;
					
			case 'included_10': 		
			case 'included_9' : 		
			case 'included_8' : 		
			case 'included_7' : 					
			case 'included_6' : 		
			case 'included_5' : 		
			case 'included_4' : 		
			case 'included_3' : 		
			case 'included_2' : 		
		    case 'included_1' : 			
		    case 'included_0' :  //var name auto
		                        die($this->included());
								break;									
        }
    }		
	
	function action($actiondata) {
		
	   if ($this->modify) {
	   
	     $out = $this->modify_page();
	   }	 
       $out .= $this->process_html_file($actiondata, null, $this->modify);	
	   return ($out);
	}
	
	// User agent
    protected function uagent() {
		
		if(isset($_SERVER['HTTP_USER_AGENT'])) {
			define('global_ua', $_SERVER['HTTP_USER_AGENT']);
		}
		else {
			define('global_ua', 'CLI');
		}

		if (strstr(global_ua, 'iPhone') || 
		    strstr(global_ua, 'iPod') || 
			strstr(global_ua, 'iPad') || 
			strstr(global_ua, 'Android')) {
			
			if (strstr(global_ua, 'AppleWebKit')) {
			
				if (strstr(global_ua, 'OS 5_') || 
					strstr(global_ua, 'Android 2.3') || 
					strstr(global_ua, 'Android 3') || 
					strstr(global_ua, 'Android 4'))	{
					
					$this->global_css_animations = '0';//1
				}
			}
		}
		elseif (strstr(global_ua, 'Chrome') || 
		        strstr(global_ua, 'Safari') && 
				strstr(global_ua, 'Macintosh') || 
				strstr(global_ua, 'Safari') && 
				strstr(global_ua, 'Windows') || 
				strstr(global_ua, 'Firefox') || 
				strstr(global_ua, 'Opera') || 
				strstr(global_ua, 'MSIE 10')) {
				
				$this->global_css_animations = '1';
		}
		else {
			$this->global_css_animations = '0';
		}					
    }	
	
	protected function javascript() {

        if (iniload('JAVASCRIPT')) {
	   	
		    $js = new jscript;		
			
			switch ($this->load_mode) { 
				case 1 : $code = $this->scroll_javascript_code(); break;
				case 0 :
			    default: $code = $this->timeout_javascript_code();
			}
			
			$code .= $this->scrolltop_javascript_code();	
			
			//<<<<<<<<<<<<<<<<<<<<<<<<<<<< conflict on jqgrid (cp)
			$js->load_js('jquery.js'); 
			$js->load_js('jquery-cookies.js');
		    $js->load_js('jquery-base64.js');
			$js->load_js($code,null,1);		
		    unset ($js);
	    }	
	}		

	protected function scroll_javascript_code() {
	    $keep_id = GetReq('id') ? 'id='.GetReq('id').'&cat='.GetReq('cat') : 'cat='.GetReq('cat');
	    $ajaxurl = seturl($keep_id."&t=");	
	
		$jscroll = <<<JJSCROLL
var sc = new Array();

//based on scroll hit end
$(document).ready( function()
{
	$.ajaxSetup({ cache: false });

	if (sc == undefined) return;
	//alert($(window).scrollTop() +' '+ $(window).height() +' '+ $(document).height());
	
	//start if full page in browser (no scroll handler)
	//if ($(window).scrollTop() + $(window).height() == $(document).height()) {	
	    //auto fire first
		read_scroll_data();
	//}	
	
	$(window).scroll(function() { 
	    
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {	
		
            read_scroll_data();
		}

	});	
});

function read_scroll_data() {

	if (func = sc.shift()) {
				
		var params = $('#'+func).html();
		
		if ((params) && (params.indexOf('-')>0)) {
		    //handled automated...
		    //alert(func);

		    var arg = params.split('-');
			var names = arg[0].split('|');
			var array = arg[1].split('|');				
			//alert(func+names+array);
			
			var p = {};
			p[names[0]] = array[0];			
			p[names[1]] = array[1];			
			p[names[2]] = array[2];			
			p[names[3]] = array[3];			
			p[names[4]] = array[4];			
			p[names[5]] = array[5];
			p[names[6]] = array[6];
			p[names[7]] = array[7];
			p[names[8]] = array[8];
			p[names[9]] = array[9];
			p[names[10]] = array[10];
			p['ajax'] = 1;
					
			var parameters = jQuery.param(p);	
			//alert(parameters);

			//loading...
			$('#load_'+func).html('<img src="images/loading.gif" alt="Loading">');		
			//$('#'+func).css('visibility','visible');
					
			setTimeout(function() {
			  $.get('{$ajaxurl}'+func+'&'+parameters, 
				function(data) {
				
				    $('#load_'+func).html('');
					
                    if (data) {						
						$('#'+func).html(data);
						$('#'+func).css('visibility','visible');
					}
					else {//recursional load when no data (fetch next)
					    $('#'+func).html('');
						read_scroll_data();
					}	
				});
			},1);						
		}
		else {
		    //handeled by js func in dpc class when no names of args
		    $.globalEval(func+'()');
        }
	
	}
}

/*
//based on continual scrolling
$(document).bind('scroll', function() { //(e)
    //alert(e.target);
	
	//http://jsfiddle.net/gizmovation/x8FDU/
    //$('.post').each(function() {
	$.each( sc, function( index, value ){
        //var post = $(this);
        //var position = value.position().top - $(window).scrollTop();
		var position = $('#'+value).offset().top - $(window).scrollTop(); 
        //alert(position);
        		
        if (position <= 0) {
            //post.addClass('selected');
			fetch_scroll_data(value);
			//sc[index] = '';//false;
        } //else {
            //post.removeClass('selected');
        //}
    });    	
});*/
	
JJSCROLL;
		return ($jscroll);	
	}	
	
	protected function timeout_javascript_code() {
	    $keep_id = GetReq('id') ? 'id='.GetReq('id').'&cat='.GetReq('cat') : 'cat='.GetReq('cat');
	    $ajaxurl = seturl($keep_id."&t=");	
	
		$jscroll = <<<JSCROLL
var sc = new Array();

//based on timeouts
$(document).ready( function()
{
	$.ajaxSetup({ cache: false });

	if (sc == undefined) return;
	//alert($(window).scrollTop() +' '+ $(window).height() +' '+ $(document).height());
	    
	//$(window).scroll(function() {	 
	    $.each( sc, function( index, func ) {

		    //console.log(func+':'+index);	
			fetch_timeout_data(func, index*100);			    
		});		
	//});	
});

function fetch_timeout_data(func, outtime) {

	if (func == undefined) return;			
	
	var params = $('#'+func).html();
		
	if ((params) && (params.indexOf('-')>0)) {
		    //handled automated...
		    //alert('a');

		    var arg = params.split('-');
			var names = arg[0].split('|');
			var array = arg[1].split('|');				
			//alert(func+names+array);
			
			var p = {};
			p[names[0]] = array[0];			
			p[names[1]] = array[1];			
			p[names[2]] = array[2];			
			p[names[3]] = array[3];			
			p[names[4]] = array[4];			
			p[names[5]] = array[5];
			p[names[6]] = array[6];
			p[names[7]] = array[7];
			p[names[8]] = array[8];
			p[names[9]] = array[9];
			p[names[10]] = array[10];
			p['ajax'] = 1;
					
			var parameters = jQuery.param(p);	
			//alert(parameters);

			//loading...
			$('#load_'+func).html('<img src="images/loading.gif" alt="Loading">');		
			//$('#'+func).css('visibility','visible');
					
			setTimeout(function() {					
			  $.get('{$ajaxurl}'+func+'&'+parameters, 
				function(data) {
				
				    $('#load_'+func).html('');
				
                    if (data) {	
                        //$('#load_'+func).html('');					
						$('#'+func).html(data);
						$('#'+func).css('visibility','visible');
					}	
				});
            },outtime);				  
	}
	else {
	    //handeled by js func in dpc class when no names of args
	    $.globalEval(func+'()');
    }
	
}
JSCROLL;
		return ($jscroll);	
	}

	protected function scrolltop_javascript_code() {

		$jscroll = <<<SCROLLTOP
function ajaxcall(pdiv,purl) {

	var pdiv = pdiv ? pdiv : '#content_div';
	//console.log(pdiv+purl);
	
	//loading...
	$('#'+pdiv).html('<img src="images/loading.gif" alt="Loading">');
			
	$.get(purl,function(data) {	$('#'+pdiv).html(data);	});	
}		
		
//scroll smooth to top
function gotoTop() {
	//$("a[href='#top']").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	//});
};

SCROLLTOP;

		return ($jscroll);
    }		
	
	//jquery call phpdac func for scroll fireup load
	public function get_scrollid($calling_object, $calling_function=null, $calling_vars=null, $calling_values=null, $variable_func=false) {
	
	    $scm = $this->scrollid++;
		//echo $calling_object,'->',$calling_function,':';			
	    if (($calling_object) && ($calling_function) && method_exists($calling_object,$calling_function)) {
	        //echo 'zz',get_called_class();
			
			//$calling_vars = null;
			//call_user_func_array(array(&$calling_object, $calling_function), $args);
			
			//auto variable id used in this included func because of many call depends on file name
			$calling_function_varid = ($variable_func) ? 
			                            $calling_function ."_{$scm}" :
									    $calling_function;
			
			$divret = "<div id='load_{$calling_function_varid}'></div>";
			$divret.= "<script>sc[{$scm}]='{$calling_function_varid}';</script>";
			$divret.= "<div id='{$calling_function_varid}' style='visibility:hidden;'>{$calling_vars}-{$calling_values}</div>";	
			return ($divret);
		}	
		//echo $scm,'>';
		return ($scm);	
	}
	
	function process_html_file($data,$stage=null, $admin=null) {
	  //echo $data;
	  //echo $this->htmlfile;
	  if ($admin) { //echo 'zzzzz';
	  //  $this->htmlfile = $this->adminview; //override
	    if ($this->dhtml)
		    $htmldata = $this->fullpage_iframe();//ifwindows();
		else
	        $htmldata = $this->frameset();

	    return ($htmldata);
	  }
	  
	  //alternate html symbol to replace
	  //$nn = $this->argument;
	  //$pattern = "<$nn></$nn>"; 
	  
	  if (is_file($this->htmlfile)) {
		
        $htmdata = file_get_contents($this->htmlfile);	  
	    		
        $cssdata = $this->process_css($htmdata);
			
        $jhtmdata = $this->process_javascript($cssdata);		
		
		//not used
        //$chunks_data = $this->process_chunks($data,$jhtmdata,$pageout);				
		$html_data = $this->process_commands($jhtmdata);

		if (!$this->debug)
		  $ret = str_replace("<?". $this->argument ."?>", $data, $html_data);	
		else 
		  $ret = str_replace("<?". $this->argument ."?>",$this->argument,$html_data);

		  
		//recess app resources  
		if (isset($this->runasapp))  
		  $ret = str_replace("images/",$this->runasapp."/images/",$ret);
		  
		//::::update fpdata at pcntl to useit by advertisers,helpers etc  :::
		$this->data = GetGlobal('controller')->calldpc_var('pcntl.fpdata',$ret); 
		//echo $this->data;
		
		if (!$this->session_use_cookie)
		  $ret = $this->propagate_session($ret);
		
		//set title if title of page = #TITLE#
		if ($pagetitle=GetReq('g')) {
		  $maintitle = paramload('SHELL','urltitle');
		  $ret = str_replace('#TITLE#',$maintitle.' > '.$pagetitle,$ret);
		}  
	  }
	  else {

		global $_html;//standart name .... 
		
	    if ($_html) {
		
		  $html_data = $this->process_commands($_html);

		  if (!$this->debug) 
			$ret = str_replace("<?_HTML?>",$data,$html_data);
		  else
			$ret = str_replace("<?_HTML?>",$this->argument,$html_data);	
		  
		  if (!$this->session_use_cookie)
		    $ret = $this->propagate_session($ret);	
			
		  //set title if title of page = #TITLE#
		  if ($pagetitle=GetReq('g')) {
		    $maintitle = paramload('SHELL','urltitle');
		    $ret = str_replace('#TITLE#',$maintitle.' > '.$pagetitle,$ret);
		  }  			
		}
		else {
		  if (!GetReq('editmode'))
		    $admlink = $this->get_admin_link();

		  $hfile = $this->htmlfile ? $this->htmlfile : 'none';	
	      $ret = "Unknown html file (".$hfile.") or argument.\n" . $admlink;
		}  
	  }	
		
	  return ($ret);	
	}	
	
	//handle chains of data in action ret such as text<@PHPCHUNK>seialized_array<@...
	function process_chunks($actiondata=null,$htmldata,&$pageout) {
	
	  $pageout = $htmldata; //default as is
	  if (!$actiondata) return null; //fast return
	  
	  //find array elements
	  $pattern = "@<phpdacarray.*?>(.*?)</phpdacarray>@";
	  preg_match_all($pattern,$htmldata,$matches);
	  $_arrays = $matches[0];
	  $_arrays_id = 0;	  
	  
	  //find form elements
	  $pattern = "@<phpdacform.*?>(.*?)</phpdacform>@";
	  preg_match_all($pattern,$htmldata,$matches);
	  $_forms = $matches[1];	
	  $_forms_id = 0;  
	  	
      $chunks = explode('<@PHPCHUNK>',$actiondata);
	  //print_r($chunks);	
	  foreach ($chunks as $cid=>$cdata) {
	    
		$udata = unserialize($cdata);
	    if (is_array($udata)) {//array element or form element
		  
		  if (stristr(key($udata),'form')) {//is form element
			$result = $this->process_form($udata,$_forms[$_forms_id]);//get modified form
            $pageout = str_replace($_forms[$_forms_id],$result,$pageout);//replace prototype
		    $_forms_id+=1;//inc forms pointer				
		  }
		  else { //is array element
		    $ret .= $this->process_array($udata,$_arrays[$_arrays_id]);//build array based at proto
		    $pageout = str_replace($_arrays[$_arrays_id],'',$pageout);//remove proto(html) array		  
		    $_arrays_id+=1;//inc arrays pointer	
		   
		    //clean unused param of type %n
		    for ($i=0;$i<10;$i++)
		      $ret = str_replace('%'.$i,'&nbsp;',$ret);
		  }	  
		}
		else {//text
		  $ret .= $cdata;	  
		  //echo 'z';
		}  
	  }
	  //echo 'PROCESS CHUNKS>',strlen($ret),'-',strlen($cdata);
	  return ($ret);		  
	}
	
	function process_array($action_array,$html_array) {
	
	  $udata = $action_array;
		
	  if (is_array($udata)) {

		  foreach ($udata as $i=>$line) {
		    $content = $html_array;
		    foreach ($line as $j=>$column) {
			  $ret = str_replace('%'.($j+1),$column,$content); 
			  $content = $ret;
			  //echo $ret,"<br>";
			}
		    //echo $ret,"<br>";	
			$arraydata .= $ret;
		  }
	  }	
	  
	  return ($arraydata);	
	}	
	
	function process_form($action_array,$html_form) {
	
	  $udata = $action_array['form'];
	
	  if (is_array($udata)) {
	   	//if (udata not artios!!!!!!!) die("Unbalanced form!");

	    //find form name's field value
	    $pattern = "@name=.*?\"(.*?)\"@";
	    preg_match_all($pattern,$html_form,$matches);
	    $names = $matches[1];
		//print_r($names);	
	  
	    //find form value's field value
	    $pattern = "@value=.*?\"(.*?)\"@";
	    preg_match_all($pattern,$html_form,$matches);
	    $values = $matches[1];	
		//$values_exp = $matches[1]; 	  	
		//print_r($values);	
		
		$max = count($names)-1; //echo $max-1;//BEWARE OR NULL VALUES..REPLACE MORE THAN ONE NULL
		$n = 0;
		for ($i=0;$i<$max;$i++) {
		  //replace names
		  $html_form = str_replace("\"".$names[$i]."\"","\"".$udata[$n]."\"",$html_form);
		  $n+=1;		  
		  //replace values
		  $html_form = str_replace("\"".$values[$i]."\"","\"".$udata[$n]."\"",$html_form);
		  $n+=1;		  
		}		
		
	    //find form action's field value
	    $pattern = "@action=.*?(.*?) @";
	    preg_match($pattern,$html_form,$matches);
	    $get = $matches[1];	//echo $get;//print_r($get);		
		//modify action=GET
		if (isset($action_array['action']))
		  $html_form = str_replace($get,$action_array['action'],$html_form);
	  }	
	  //echo $html_form;
	  $formdata = $html_form;
	  return ($formdata);		  
	}
	
	function process_commands($data,$is_serialized=null) {
	
	  if ($is_serialized) 
	    $data = unserialize($data);
	  
	  $pattern = "@<phpdac.*?>(.*?)</phpdac>@";
	  preg_match_all($pattern,$data,$matches);
	  //print_r($matches);
	  
      foreach ($matches[1] as $r=>$cmd) {
	    //echo $cmd,"<br>";
		if (!$this->debug) {
	      $ret = GetGlobal('controller')->calldpc_method($cmd,1); //no error stop 					 
		  $data = str_replace("<phpdac>".$cmd."</phpdac>",$ret,$data);
		}
	  }
	  
	  return ($data);//as is
	}
	
	function process_javascript($data) {
	
	  //call javascript 
      if (iniload('JAVASCRIPT')) {	
		 $js = new jscript;
		 $onload = $js->onLoad();//!!!!!!!!!!!!!!!MUST BE SET TO <BODY AT END>
		 $jret = $js->callJavaS() . "</HEAD>";	 
		 unset ($js);		 
		 
		 if ($jret) {
		   $ret = str_replace("</head>",$jret,$data);
		 }
		 
		 return ($ret);
	  }	
	  
	  return ($data);  	//as is
	}
	
	function process_css($data) {
	  //$thema = GetGlobal('thema');
/*	  $theme = GetGlobal('theme');	
	
	  $thema = GetGlobal('controller')->calldpc_var("pcntl.theme");
	  if (!$thema) 
		$thema = paramload('SHELL','deftheme');	
	
	  $prpath = paramload('SHELL','prpath');
	  
	  $themepath = $prpath . 'public/' .$theme['path'] . $thema . ".theme/";
	  //echo $themepath;
      */
    
	  /*
   	  //by replacing css	 
	   if ($this->runasapp) 
	    $newcss = $this->runasapp. '/' . $this->themeurl . 'style.css';
	  else 
	    $newcss = $this->themeurl . 'style.css';
	
	  $ret = str_ireplace('style.css',$newcss,$data);*/
	  
	  $path = paramload('SHELL','prpath') . $this->htmlpage;	  
	  //echo $path;
	  //by enclosing css file		  
	  //$enccss = $themepath . 'style.css';	  
	  $enccss = $path . '/style.css';	  
	  $cssdata = @file_get_contents($enccss);
	  //echo $cssdata;  
	  if ($cssdata) {
	    $translated_css = "<style type='text/css'>" . $cssdata . "</style>";
	    $ret = str_ireplace('</head>',$translated_css.'</head>',$data);	
	  }
	  else
	    $ret = $data; //as is	
	  
	  return ($ret);
	}
	
	function propagate_session($data,$ext='.php') {
	
	  $ret = str_replace($ext.'?',$ext."?".SID."&",$data);//.php with args	
	  $ret2 = str_replace($ext.'"',$ext."?".SID.'"',$ret);//.php without args
	  
	  return ($ret2);
	}
	
	function get_xml_links($mylan=null,$feed_id=null) {
	  $lan = $mylan?$mylan:getlocal();//by hand per htm 0,1 page
	  $lnk = array();
	  
      if ($id = GetReq('id'))
	    $feed_id = $id .'.xml';	  
	  elseif ($cat = GetReq('cat'))
	    $feed_id = $cat .'.xml';
			
	  $feed_file = $feed_id ? $feed_id : 'feed.xml';
	  $upath = $this->infolder ? $this->urlpath.'/'.$this->infolder : $this->urlpath;
	  
      //RSS	
	  if (($lan) && (is_readable($upath."/rss/$lan/".$feed_file))) {
	    $lnk['RSS'] = "/rss/$lan/".$feed_file;	  
	  }
	  elseif (is_readable($upath."/rss/".$feed_file)) {
	    $lnk['RSS'] = '/rss/'.$feed_file;
	  }
	  
	  //echo $upath."/rss/".$feed_file;	  
	  
	  //ATOM
	  if (($lan) && (is_readable($upath."/atom/$lan/".$feed_file))) {
	    $lnk['ATOM'] = "/atom/$lan/".$feed_file;	  
	  }	  
	  elseif (is_readable($upath.'/atom/'.$feed_file)) {
	    $lnk['ATOM'] = '/atom/'.$feed_file;
	  }
	  //print_r($lnk);	

	  if (is_array($lnk)) {
	    foreach ($lnk as $t=>$w) {
	      //echo $w,$t,'<br>';	    
		  if ($w) {
		    $icon_file = $this->urlpath.'/'.$this->infolder.'/images/'.strtolower($t).'.png';
			//echo $icon_file,'>';
		    if (is_readable($icon_file))
			  $mylink = "<img src=\"". $this->infolder.'/images/'.strtolower($t).'.png' ."\" border=\"0\" alt=\"$t\">";
			else
			  $mylink = $t;
			  
	        $ret .= "<A href=\"$w\">".$mylink."</A>&nbsp;";
		  }	
		  //echo $ret,'<br>';
	    }
	  }
	  
	  return $ret;  
	}
	
	function get_seo_links($mylan=null) {
	  $lan = $mylan?$mylan:getlocal();//auto languange
	
	  //xml seo links
	  if (is_readable($this->urlpath."/seo/feed$lan.xml")) {
	    $file = $this->urlpath."/seo/feed$lan.xml";
	    //read xml and ret the links
	    $ret = null;		
	  }
	  elseif (is_readable($this->urlpath.'/'.$this->infolder."/seo/feed$lan.xml")) {
	    $file = $this->urlpath.'/'.$this->infolder."/seo/feed$lan.xml";
	    //read xml and ret the links
	    $ret = null;		
	  }//txt seo links (plain html)
	  elseif (is_readable($this->urlpath."/seolinks$lan.txt")) {
	    $file = $this->urlpath."/seolinks$lan.txt";
	    $ret = file_get_contents($file);		
	  }	  
	  elseif (is_readable($this->urlpath.'/'.$this->infolder."/seolinks$lan.txt")) {
	    $file = $this->urlpath.'/'.$this->infolder."/seolinks$lan.txt";
	    $ret = file_get_contents($file);		
	  }	  

	  
	  return $ret;  
	}	
	
	function get_file_contents($myfile,$type=null,$mylan=null) {
	  $lan = $mylan?$mylan:getlocal();
	
	  switch ($type) {
	  case 'xml'  :
	              if (is_readable($this->urlpath."/$myfile")) {
	                $file = $this->urlpath."/$myfile";
	                //read xml and ret the links
	                $ret = null;		
	              }
	              break;
	  case  'txt':
	  case  'htm':
	  case 'html':
	  default    :
	             if (is_readable($this->urlpath."/$myfile")) {
	               $file = $this->urlpath."/$myfile";
	               $ret = file_get_contents($file);		
	             }	    
      }
	  
	  return $ret;  
	}
	
	function getencoding() {

	  return ($this->charset);
	}		
	
	function get_stereobit_link() {
		$icon_file = $this->urlpath.'/'.$this->infolder.'/images/stereobit.png';
				
	    if (is_readable($icon_file))
		  $mylink = "<img src=\"". $this->infolder.'/images/stereobit.png' ."\" border=\"0\" alt=\"stereobit.networlds\">";
		else
		  $mylink = 'stereobit.networlds';	
	    $ret .= "<A href=\"http://www.stereobit.com\">$mylink</A>";	  
		
		return ($ret);
	}
	
	function get_copyright($fromyear=null) {
	    $is_cropwiz = (GetSessionParam('LOGIN')=='yes') ? $this->app_crop_wizard() : null;
	    $t = paramload('SHELL','urltitle');
		$y = $fromyear?$fromyear.'-'.date('Y'):date('Y');
	    $ret .= "&copy; $y, $t &nbsp;";// - All Rights Reserved. ";	  
		
		//if ($this->allow_edit)
		if (!$is_cropwiz)
		  $ret .= $this->get_admin_link();
				
		return ($ret);	
	}

	function get_admin_link() {	
	    //disable mobile administration
	    if (!$this->global_css_animations)
			return false;

	    //print_r($_GET);
		
		//no edit when in editmode - modify...NOT WORK....
	    //if ((defined('__EDITMODE')) || (GetReq('editmode')>0) || (GetReq('modify'))) 
		  // return;//no edit at frame
	 
		if (is_array($_GET)) {
		  foreach ($_GET as $i=>$t) {
		    if ( ($i!='action') && ($i!='turl') ) 
		      $newquery .= '&'.$i.'='.urlencode($t);
	      }
		}
		else 
		  $newquery = '&t=';		
		  
		$mynewquery = $newquery?$newquery:null;//'&t=';  
			
		$current_page = pathinfo($_SERVER['PHP_SELF']);//parse_url($_SERVER['PHP_SELF'],PHP_URL_PAGE);				
		$target_url = urlencode(encode($current_page['basename'] . "?".$mynewquery));		
        $admin_url = $this->infolder . "/".$current_page['basename'] . "?modify=".encode('stereobit')."&turl=".$target_url;		
		$icon_file = $this->urlpath.'/'.$this->infolder.'/images/editpage.png';
		
        SetSessionParam('authverify',1);		
				
	    /*if (is_readable($icon_file))
		  //$mylink = "<img src=\"". $this->infolder.'/images/editpage.png' ."\" border=\"0\" alt=\"Edit this page\">";
		  $ret .= seturl("modify=".urlencode(base64_encode('stereobit'))."&turl=".$target_url.$mynewquery,$icon_file);//?? load theme 
		else
		  //$mylink = '[Edit]';
		  $ret .= seturl("modify=".urlencode(base64_encode('stereobit'))."&turl=".$target_url.$mynewquery,'[Edit]'); 
		*/ 
		$ret .= seturl("modify=".urlencode(base64_encode('stereobit'))."&turl=".$target_url.$mynewquery,$this->editmode_point); 	
	    //$ret .= "<A href=\"".$admin_url."\">$mylink</A>";	 		
		//$ret .= seturl("modify=".encode('stereobit')."turl=".$target_url.$mynewquery,'[Edit]'); 
		
		return ($ret);
	}
	
	function modify_page() {
	    //echo 'modify';
	}
	
	function frameset($query=null) {
		//fetch current size
		$is_oversized = $this->app_is_oversized();
        if ($is_oversized)
            die($this->self_addspace());//die('Oversized');		
			
			
	    $is_cpwizard = $this->app_cp_wizard();	
	    $encoding = $this->charset;
		
		/*$lan = getlocal(); //no need file come as is
        $lanfile = str_replace($this->htmlext,$lan.$this->htmlext,$this->file);
        if (!$mydata = @is_readbale($lanfile)) {//filename ending in $lan
         $myfile = $lanfile;
        }
		else
		  $myfile = $this->htmlfile;	
	    */
		if (is_array($_GET)) {
		  foreach ($_GET as $i=>$t) {
		    if ( ($i!=pcntladmin) && ($i!='action') ) //??action //bypass pcntladmin=.. param for repoladn same url...
		      $newquery .= '&'.$i.'='.$t;
	      }
		}
		else 
		  $newquery = '&t=';		
		  
	    $query = $query?$query:$newquery;
        $turl = urldecode(decode(GetReq('turl')));		
		
		$fu = $this->edithtml?30:1;
        $fd = $this->editdpc?200:1;
		$edit_html_url = $this->edithtml ? "cp/cpmhtmleditor.php?encoding=".$encoding."&htmlfile=" . urlencode(base64_encode(strtolower($this->argument).$this->htmlext)) : 'cp/cpside.html';
		$edit_page_url = $this->editdpc ? "cp/cpmctrl.php?turl=" . urlencode(base64_encode($turl)) ."&encoding=". $encoding . '&htmlfile=' . urlencode(base64_encode(strtolower($this->argument).$this->htmlext)) : 'cp/cpside.html';
	    $edit_dpc_url = $this->editdpc ? "cp/cpmdpceditor.php?turl=" . urlencode(base64_encode($turl)) : 'cp/cpside.html';
		
	    $ret = "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Frameset//EN\" \"http://www.w3.org/TR/html4/frameset.dtd\">
<html>
<head>
<title>".$this->urltitle." - Modify Page (".$turl.")</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$encoding\">
</head>		
<frameset rows=\"*\" cols=\"*,270\" framespacing=\"1\" frameborder=\"yes\" border=\"1\" bordercolor=\"#000000\">
  <frameset rows=\"$fu,*,$fd\" framespacing=\"1\" frameborder=\"yes\" border=\"1\" bordercolor=\"#000000\">
    <frame src=\"" . $edit_page_url . "\" name=\"topFrame\" scrolling=\"NO\"  >";
	
	//$ret .= "<frame src=\"cp/cpmhtmleditor.php?encoding=".$encoding."&htmlfile=" . urlencode(base64_encode($this->htmlfile)) . "\" name=\"mainFrame\" scrolling=\"YES\" >
	if (GetSessionParam('LOGIN')=='yes') {
	  if ($is_cpwizard) 
	    //wizard action 
	  $ret .= "<frame src=\"cp/cpmwiz.php?turl=".urlencode(base64_encode($turl)) ."&encoding=". $encoding . '&htmlfile=' . $htmlfile."\" name=\"mainFrame\" scrolling=\"YES\" >";
	  elseif (($this->argument) && ($this->edithtml))
	    //edit html...
		$ret .= "<frame src=\"" . $edit_html_url . "\" name=\"mainFrame\" scrolling=\"YES\" >";
	  else	
	    $ret .= "<frame src=\"cp/cp.php?editmode=1&encoding=$encoding&turl=" . urlencode(base64_encode($turl)) ."\" name=\"mainFrame\" scrolling=\"YES\" >";
	}  
	else 
	  $ret .= "<frame src=\"cp/cpside.html\" name=\"mainFrame\" scrolling=\"YES\" >";
	  
	
	//hide in 1 px //was 200 (30,*,200))
	$ret .= "<frame src=\"" . $edit_dpc_url . "\" name=\"bottomFrame\" scrolling=\"YES\" >
  </frameset>
  <frame src=\"cp/cpmdbrec.php?turl=" . urlencode(base64_encode($turl)) . '&encoding='.$encoding. "\" name=\"rightFrame\" scrolling=\"YES\">
</frameset>
<noframes>
<body>
<h1>frames not supported!</h1>
</body>
</noframes>
</html>
";
//  <frame src=\"cp/cpmhtmlviewer.php?turl=" . urlencode(base64_encode($turl)) . "\" name=\"rightFrame\" scrolling=\"YES\">
    
	//abort the above method..send to cp
    //header("Location: cp/cp.php");

    return ($ret);		
	}
	
	//dynamic html window system
    function fullpage_iframe($query=null) {
	    $encoding = $this->charset;
		$fu = $this->edithtml?30:1;
        $fd = $this->editdpc?200:1;			
		//fetch cuurent size
		$is_oversized = $this->app_is_oversized();
		$is_cpwizard = $this->app_cp_wizard();
		$is_cropwiz = (GetSessionParam('LOGIN')=='yes') ? $this->app_crop_wizard() : null;
		
		if (is_array($_GET)) {
		  foreach ($_GET as $i=>$t) {
		    if ( ($i!=pcntladmin) && ($i!='action') ) //??action //bypass pcntladmin=.. param for repoladn same url...
		      $newquery .= '&'.$i.'='.$t;
	      }
		}
		else 
		  $newquery = '&t=';		
		  
	    $query = $query?$query:$newquery;
        $turl = urldecode(decode(GetReq('turl')));	
	
		if (GetSessionParam('LOGIN')=='yes') {
			if (($this->argument) && ($this->edithtml)) {
				//edit html...
				if ($is_cpwizard)
				    $mainframe_url = "http://".$this->url;
				elseif ($is_cropwiz)	
					$mainframe_url = $turl; //$this->url;					
				else
				    $mainframe_url = $is_oversized ?
				                     $this->self_addspace(true) : //"http://stereobit.com/netpanel.php?t=addon&appsize=".$is_oversized : 
				                     "cp/cpmhtmleditor.php?cke4=1&encoding=".$encoding."&htmlfile=" . urlencode(base64_encode(strtolower($this->argument).$this->htmlext));
		    }						 
			else {
                if ($is_cpwizard)
				    $mainframe_url = "http://".$this->url;
				elseif ($is_cropwiz)	
					$mainframe_url = $turl; 					
				else			
				    $mainframe_url = $is_oversized ?
				                     $this->self_addspace(true) : //"http://stereobit.com/netpanel.php?t=addon&appsize=".$is_oversized :
						    		 "cp/cp.php?editmode=1&encoding=".$encoding."&turl=" . urlencode(base64_encode($turl));
			}					 
		}  
		else { 
		    if ($is_cpwizard)
				$mainframe_url = "http://".$this->url;
			else
			    $mainframe_url = $is_oversized ?
				                 $this->self_addspace(true) : //"http://stereobit.com/netpanel.php?t=addon&appsize=".$is_oversized :
							     "cp/cpside.html";
	  	}
		$exit_url       = $turl;//'../' . urldecode(base64_decode($_GET['turl'])) . "&editmode=-1";
		$htmlfile       = urlencode(base64_encode(strtolower($this->argument).$this->htmlext));
		$topframe_url   = "cp/cpmctrl.php?turl=" . urlencode(base64_encode($turl)) ."&encoding=". $encoding . '&htmlfile=' . $htmlfile;
		$bottomframe_url= "cp/cpmdpceditor.php?turl=" . urlencode(base64_encode($turl));
        $rightframe_url = "cp/cpmdbrec.php?turl=" . urlencode(base64_encode($turl)) . '&encoding='.$encoding . '&htmlfile=' . $htmlfile;		
        $wizframe_url   = "cp/cpmwiz.php?turl=" . urlencode(base64_encode($turl)) ."&encoding=". $encoding . '&htmlfile=' . $htmlfile;		
		$wizcrop_url    = "cp/cpmwizcrop.php?turl=" . urlencode(base64_encode($turl)) ."&encoding=". $encoding . '&htmlfile=' . $htmlfile;				
		
		//standart menu..
		if ((!$is_oversized) && (!$is_cpwizard) && (!$is_cropwiz)) {
			$js_menuwin = "
var menuwin=dhtmlwindow.open(\"rightframe\", \"iframe\", \"$rightframe_url\", \"Menu\", \"width=250px,height=450px,resize=1,scrolling=1,center=1\", \"recal\")
menuwin.onclose=function(){ 
//returns false if user clicks on \"No\" button:
var returnval=confirm(\"You are about to exit editmode. Are you sure?\");
//return returnval
if (returnval==true) { 
    //alert( \"$exit_url\");
	window.location = \"$exit_url\";
}
return returnval;	
}		
";
		}
		else
		    $js_menuwin = null;		
		
		if (($this->edithtml) && (GetSessionParam('LOGIN')=='yes') && 
		    (!$is_oversized) && (!$is_cpwizard) && (!$is_cropwiz)) {
			$js_cmdwin = "
var cmdwin=dhtmlwindow.open(\"topframe\", \"iframe\", \"$topframe_url\", \"Cmd\", \"width=600px,height=450px,resize=1,scrolling=1,center=0\", \"recal\")
cmdwin.onclose=function(){ 
return window.confirm(\"Close window?\")
}		
";
		}
		else
		    $js_cmdwin = null;
				
		/*if (($this->editdpc) && (GetSessionParam('LOGIN')=='yes')) {
			$js_codewin = "
var codewin=dhtmlwindow.open(\"bottomframe\", \"iframe\", \"$bottomframe_url\", \"Console\", \"width=600px,height=200px,resize=1,scrolling=1,center=0\", \"recal\")
codewin.onclose=function(){ 
return window.confirm(\"Close window?\")
}		
";		
	    }
		else */
		    $js_codewin = null;
			
		if ($is_cpwizard) {
			$js_wizard = "			
var wizwin=dhtmlwindow.open(\"bottomframe\", \"iframe\", \"$wizframe_url\", \"Wizard\", \"width=660px,height=400px,resize=1,scrolling=1,center=1\", \"recal\")
wizwin.onclose=function(){ 
var returnval=confirm(\"You are about to exit. Are you sure?\");
if (returnval==true) { 
	window.location = \"$exit_url\";
}
return returnval;	
}			
";		
	    }
		elseif ($is_cropwiz) {
			$js_wizard = "			
var wizwin=dhtmlwindow.open(\"bottomframe\", \"iframe\", \"$wizcrop_url\", \"Crop wizard\", \"width=660px,height=400px,resize=1,scrolling=1,center=1\", \"recal\")
wizwin.onclose=function(){ 
var returnval=confirm(\"You are about to exit. Are you sure?\");
if (returnval==true) { 
	window.location = \"$exit_url\";
}
return returnval;	
}			
";			
		}
		else 
		    $js_wizard = null;			
		
	    $fp = <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=$encoding" />
<link rel="stylesheet" href="cp/dhtmlwindow2.css" type="text/css" />
<script type="text/javascript" src="cp/dhtmlwindow2.js"></script> 
<title>{$this->urltitle} - Modify Page ($turl)</title> 
<style type="text/css">
    body { margin: 0; overflow: hidden; }
   .mainframe { position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;  }
</style>
</head> 
<body> 
<script type="text/javascript">
$js_menuwin
$js_codewin
$js_cmdwin
$js_wizard
</script>
<div class="mainframe">
<iframe id="mainFrame" name="mainFrame" src="$mainframe_url" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" scrolling="auto"></iframe> 
</div>
</body> 
</html>
EOF;
        return ($fp);		
    }
	
	
	function app_cp_wizard() {
	    $wizfile = $this->prpath . 'cpwizard.ini';
		
	    if (is_readable($wizfile)) { 
		    //$ret = @file_get_contents($wizfile);
		    return true;   
		}	

		return false;
	}
	
	function app_crop_wizard() {
	    $cropfile = $this->prpath . 'crop.ini';
		
	    if ((is_readable($cropfile)) || (GetReq('cropwiz'))) { 
		    //$ret = @file_get_contents($wizfile);
		    return true;   
		}	

		return false;
	}	

    function get_app_size() {
  
		$tsize = $this->cached_disk_size();
		//$tsize2 = $this->bytesToSize1024($tsize,1);
        //$ret .= "<br>Folder size ". /*$tsize . '|' .*/ $tsize2;//." bytes";	

        $dsize = $this->cached_database_filesize();	
		//$dsize2 = $this->bytesToSize1024($dsize,1);	
        //$ret .= "<br>Database size ". /*$dsize . '|' .*/ $dsize2;//." bytes";

		$total_size = $tsize + $dsize;
		//$stotal = $this->bytesToSize1024($total_size,1);
		//$ret .= "<br>Total used size ". $stotal;  
		return ($total_size);
    }

    function app_is_oversized() {
  
        $allowed_size = is_readable($this->prpath .'/maxsize.conf.php') ?
	                    intval(@file_get_contents($this->prpath .'/maxsize.conf.php')) : 0;
						
		$current_size = $this->get_app_size();				
					   
		if ($allowed_size < $current_size)			   
		    return ($current_size);
		
        return false;		
    }  
	
	
    protected function bytesToSize1024($bytes, $precision = 2) {
        $unit = array('B','KB','MB','GB');
        return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
    }  
 
 
    function filesize_r($path){
		if (!file_exists($path)) return 0;
		
	    if (is_file($path)) return filesize($path);
		$ret = 0;
		
		$glob = glob($path."/*");
		
		if (is_array($glob)) {
			foreach(glob($path."/*") as $fn)
				$ret += $this->filesize_r($fn);
		}	
		return $ret;
    } 
  
    function cached_disk_size($path=null) {
  	   $path = $path ? $path : $this->urlpath; 
       $name = strval(date('Ymd'));
       $tsize = $this->prpath . $name . '-tsize.size';
	   $size = 0;

       if (is_readable($tsize)) {
	        //echo $tsize;
			$size = file_get_contents($tsize);

	   }
	   else {
            $size = $this->filesize_r($path);
			@file_put_contents($tsize, $size);
	   }
	   
	   return ($size);
    }
  
    function cached_database_filesize() {
    $db = GetGlobal('db'); 
	$size = 0;
	
	  if ($db) {
		$name = strval(date('Ymd'));
		$dsize = $this->prpath . $name . '-dsize.size';	
    
		if (is_readable($dsize)) {
			//echo $dsize;
			$size = file_get_contents($dsize);
		}
		else {
			$sSQL = "SHOW TABLE STATUS";
			$res = $db->Execute($sSQL,2);		
			$size = 0;

			if (!empty($res)) { 
				foreach ($res as $n=>$rec) {
					$size += $rec[ "Data_length" ] + $rec[ "Index_length" ];					
				}
			}
			@file_put_contents($dsize, $size);
		}	
	  }	
		
	  return ($size);
    }	
	
	
    function combine_tokens($template_contents,$tokens=null,$doublemark=null) {
	
	    if (!is_array($tokens)) return;
		
		$mark = '$';
		$dmark = $doublemark?'$':'';
		
		$ret = $this->process_commands($template_contents);
		unset ($fp);
		  
		//echo $ret;
	    foreach ($tokens as $i=>$tok) {
            //echo $tok,'<br>';
		    $ret = str_replace($mark.$i.$dmark,$tok,$ret);
	    }
		//clean unused token marks
		for ($x=$i;$x<30;$x++)
		  $ret = str_replace($mark.$x.$dmark,'',$ret);
		//echo $ret;
		return ($ret);
    }
  
  //encrypt tokess to be params
 /* function tokenizer($tokarray) {
  
    $a0 = explode('<TOKENS>',$tokarray);
	
	if (is_array($a0)) {
      //$a = serialize($tokarray);
	  //$b = str_replace('+','<@>',$a);
	  return $a0;
	}
	
	return null;
  }
  
  //decrypt tokess to be params
  function detokenizer($tok) {

    $a0 = explode('<TOKENS>',$tok);
	  
	if (is_array($a0)) {	  
	  //$c = str_replace('TOKENS:','',$tok);  
	  //$b = str_replace('<@>','+',$c);  
      //$a = unserialize($b);
	
	  return $a0;  
	}
	
	return null;
  } */
  
    function is_tokens_var($var) {
  
		if (stristr($var,'<TOKENS>'))
		return true;
	  
		return false;	  
    } 
  
    function subpage($tmpl,$dpc2call,$dmarks=null,$extra_attr=null,$verbose=null) {
         $dm = $dmarks?$dmarks:null;
		 $verb = $this->verbose ? $this->verbose : $verbose;
         
		 if ($extra_attr) {//string of val '0' or '1'
		   $tmpl_extra = str_replace($this->htmlext,$extra_attr.$this->htmlext,$tmpl);
		   $tfile = str_replace('.',getlocal().'.',$tmpl_extra);		   
		   $t = $this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $tfile ; 
		 }  
		 else {
		   $tfile = str_replace('.',getlocal().'.',$tmpl);
		   $t = $this->urlpath . $this->infolder . '/cp/' . $this->htmlpage . "/" . $tfile ; 
		 }  
		   
		 if ($verb)			
		   echo $t,'<br>';
		   
	     if (is_readable($t)) {
		    $mytemplate = file_get_contents($t);	
			if ($verbose)
			  echo $t;
	     }
		 else {//parent file
		  $cphtmlpath = "/../cp/$this->htmlpage/";
		  $parentfile = $this->urlpath . $cphtmlpath . str_replace('.',getlocal().'.',$tmpl); 
		  //echo 'z'.$parentfile;
		  if (is_readable($parentfile)) {
			$mytemplate = file_get_contents($parentfile);
			if ($verb)			
			  echo $parentfile,'<br>';
		  }		 
		 }  

		 //if var is encrypted tokens 
		 if ($this->is_tokens_var($dpc2call)) {//direct tokens val }
		   $tokens = explode('<TOKENS>',str_replace('<@>','+',$dpc2call));//(array) $this->detokenizer($dpc2call);
		 }
		 elseif (is_array($dpc2call)) {//direct call from calldpc_use_pointers
		   $tokens = (array) $dpc2call;
		 }
		 else {
		   $precall = str_replace('->',' use ',$dpc2call);
		   $call = str_replace('>','+',$precall);
 	       $tokens = GetGlobal('controller')->calldpc_method($call);		 
		 
		   if ($verb)
		     echo $call,'<br><hr>';
		 }  
		 //print_r($tokens);		 
		 $out = $this->combine_tokens($mytemplate,$tokens,$dm);		 
		 //echo '>',$mytemplate;
		 return ($out);
    }  
	
	
	public function included($fname=null, $uselans=null, $enable_ajax=false) {
	
		if (($enable_ajax) && (!GetReq('ajax'))) {
		    //$fid = str_replace(array('/','.'),array('',''), $fname);
			$out = $this->get_scrollid(get_class($this),'included',"fname|uselans","$fname|$uselans", true); 		
			return ($out);
		}

        //else { 			
		//get GET func params when call from scroll
		foreach ($_GET as $gname=>$gvalue) 
			$$gname = $gvalue;
		//...exec func using func params or get...	
		//print_r($_GET);
		//}		
	
	    if ($fname) {
		
		    if ($uselans) {
			    $lan = getlocal();
			    $name = str_replace('.',$lan.'.', $fname);
			}
			else
			    $name = $fname;
				
			$pathname = $this->urlpath . '/cp/'.$name;
			//echo $pathname;
			if (is_readable($pathname)) {
				$contents = @file_get_contents($pathname);
			
				//execute commands
				$ret = $this->process_commands($contents);
			
				return ($ret);
			}

        }	
        return null; 		
	}
	
	public function php_self($usedomain=null) {
	
	    if ($usedomain)
		  $ret = $this->url;
		  
	    $ret .= $_SERVER['REQUEST_URI'];// ? '/'.$_SERVER['REQUEST_URI'] : null;
		return ($ret);
	    //return $_SERVER['PHP_SELF'];
    }

	public function nvl($param=null,$state1=null,$state2=null,$value=null) {
	    global ${$param};
	    //echo $param;
		
	    if (stristr($param,'.')) //dpc var
		  $var = GetGlobal('controller')->calldpc_var($param);
        else
          $var =  ${$param} ? ${$param} : ($_SESSION[$param] ? $_SESSION[$param] : $this->{$param});		
		
        if ($value) 
		   $ret = ($value==$var) ? $state1 : $state2;   		
        else
           $ret = $var ? $state1 : $state2;
		   
        //echo '<hr>'.$ret;
		return ($ret);
    }
	
	public function nvltokens($token=null,$state1=null,$state2=null,$value=null) {
	    //always string compare...
		//echo '>',$token,':',$value,'<br/>';
		if ($value) 	
			$ret = ($token==$value) ? $state1 : $state2;  	
        else		
           $ret = $token ? $state1 : $state2;
		   
		return ($ret);

    }	
	
	public function nvldac($param=null,$state1=null,$state2=null,$value=null) {
	    //global ${$param};
	    
	    if (stristr($param,'.')) //dpc var
		  $var = GetGlobal('controller')->calldpc_var($param);
        else
          $var =  GetGlobal($param) ? GetGlobal($param) : (GetParam($param) ? GetParam($param) : $this->{$param});		
		
        if ($value) 
		                           
		   $ret = ($value==$var) ? 
		           GetGlobal('controller')->calldpc_method(str_replace('::','+',$state1)) : 
		           GetGlobal('controller')->calldpc_method(str_replace('::','+',$state2));   		
				   //in case of enfolded dpc cmd...
        else      
           $ret = $var ? 
		          GetGlobal('controller')->calldpc_method(str_replace('::','+',$state1)) : 
		          GetGlobal('controller')->calldpc_method(str_replace('::','+',$state2));
                  //in case of enfolded dpc cmd...  				  

		return ($ret);

    }	
	
	//dummy dpc exec
	public function nvlnull() {
	    return null; 
    }	
	
	protected function self_addspace($retlink=false) {
			
		$ret = $retlink ? 'cp/cp.php?t=cpupgrade&wf=addspace' :
			              "<h3><a href='cp/cp.php?t=cpupgrade&wf=addspace'>" . localize('_addspace', getlocal())."</a></h3>";				
			
		return ($ret);
	}
	
	//used in front page as login / logout
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
?>