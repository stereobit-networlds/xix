<?php
$__DPCSEC['XIXPANELV2_DPC']='1;1;1;1;1;1;1;1;1';

if (!defined("XIXPANELV2_DPC")) {
define("XIXPANELV2_DPC",true);

$__DPC['XIXPANELV2_DPC'] = 'xixpanelv2';

$a = GetGlobal('controller')->require_dpc('networlds/netpanel.dpc.php');
require_once($a);

//GetGlobal('controller')->get_parent('XIXPANEL_DPC','XIXPANELV2_DPC');
GetGlobal('controller')->get_parent('NETPANEL_DPC','XIXPANELV2_DPC');

$__EVENTS['XIXPANELV2_DPC'][40]='xix';
$__EVENTS['XIXPANELV2_DPC'][41]='xixpanel';
$__EVENTS['XIXPANELV2_DPC'][42]='xixreg';
$__EVENTS['XIXPANELV2_DPC'][43]='xixshowapps';
$__EVENTS['XIXPANELV2_DPC'][50]='xixv2';
$__EVENTS['XIXPANELV2_DPC'][51]='xixpanelv2';
$__EVENTS['XIXPANELV2_DPC'][52]='xixinstall';
$__EVENTS['XIXPANELV2_DPC'][53]='xixallow';
$__EVENTS['XIXPANELV2_DPC'][54]='xixvalid';

$__ACTIONS['XIXPANELV2_DPC'][40]='xix';
$__ACTIONS['XIXPANELV2_DPC'][41]='xixpanel';
$__ACTIONS['XIXPANELV2_DPC'][42]='xixreg';
$__ACTIONS['XIXPANELV2_DPC'][43]='xixshowapps';
$__ACTIONS['XIXPANELV2_DPC'][50]='xixv2';
$__ACTIONS['XIXPANELV2_DPC'][51]='xixpanelv2';
$__ACTIONS['XIXPANELV2_DPC'][52]='xixinstall';
$__ACTIONS['XIXPANELV2_DPC'][53]='xixallow';
$__ACTIONS['XIXPANELV2_DPC'][54]='xixvalid';


$__DPCATTR['XIXPANELV2_DPC']['xixpanelv2'] = 'xixpanelv2,1,0,0,0,0,0,0,0,0,0,0,1';

$__LOCALE['XIXPANELV2_DPC'][0]='XIXPANELV2_DPC;XIX app v2;XIX app v2';
$__LOCALE['XIXPANELV2_DPC'][1]='_SHLOGOUT;Logout;Αποσύνδεση';
$__LOCALE['XIXPANELV2_DPC'][2]='_EMAILTITLE;Your Email;Ηλ. ταχυδρομείο';
$__LOCALE['XIXPANELV2_DPC'][3]='_TITLETITLE;Title;Όνομα';
$__LOCALE['XIXPANELV2_DPC'][4]='_PASSTITLE;Your password;Κωδικός';
$__LOCALE['XIXPANELV2_DPC'][5]='_REPASSTITLE;Retype your password;Επανάληψη κωδικού';
$__LOCALE['XIXPANELV2_DPC'][6]='_COUPONTITLE;Your Coupon;Κουπόνι';
$__LOCALE['XIXPANELV2_DPC'][7]='_RECAPTCHATITLE;Recaptcha;Recaptcha';
$__LOCALE['XIXPANELV2_DPC'][8]='_active;Active;Ενεργό';
$__LOCALE['XIXPANELV2_DPC'][9]='_deleted;Inactive;Μη ενεργό';
$__LOCALE['XIXPANELV2_DPC'][10]='_appid;Reg date;Ημερ. κατ.';
$__LOCALE['XIXPANELV2_DPC'][11]='_appact;Status;Κατάσταση';
$__LOCALE['XIXPANELV2_DPC'][12]='_appurl;ΧΙΧ url;ΧΙΧ συνδεσμος';
$__LOCALE['XIXPANELV2_DPC'][13]='_applications;ΧΙΧ Apps;ΧΙΧ εφαρμογές';
$__LOCALE['XIXPANELV2_DPC'][14]='_here;here;εδώ';
$__LOCALE['XIXPANELV2_DPC'][15]='_coupontext;If you have any ΧΙΧ coupon, press ;Αν διαθέτεις κάποιο ΧΙΧ κουπόνι πατήστε ';
$__LOCALE['XIXPANELV2_DPC'][16]='_newxixtitle;Welcome, a new XIX wait for you;Καλωσήρθες, είσαι μόνο ένα XIX μακριά';
$__LOCALE['XIXPANELV2_DPC'][17]='_newxixtext;Please input your email and let a XIX to be cooked for you;Τοποθέτησε το ηλ. ταχυδρομείο σου και δημιούργησε ένα XIX';
$__LOCALE['XIXPANELV2_DPC'][18]='_installfailed;Please insert your data carefully.<br/>They will be used every time you need to access your webpage\'s control panel.<br/>;Παρακαλώ εισείγαγε τα στοιχεία σου σωστά.<br/>Θα τα χρησιμοποιείς κάθε φορά που θα γίνεται πιστοποίηση χρήστη για την εισαγωγή σου στον πίνακα ελέγχου.<br/>';
$__LOCALE['XIXPANELV2_DPC'][19]='_newxixinstalledtext;Your XIX is ready to configured;Το XIX είναι έτοιμο για παραμετροποίηση';
$__LOCALE['XIXPANELV2_DPC'][20]='_newxixinstalled;XIX installed;Το XIX εγκαταστάθηκε';
$__LOCALE['XIXPANELV2_DPC'][21]='_couponsubmited;Coupon submited;Κουπόνι εισήχθει';
$__LOCALE['XIXPANELV2_DPC'][22]='_xixinstallsuccess;Congratulations. You\'r XIXed;Συγχαρητήρια. Το XIX δημιουργήθηκε';
$__LOCALE['XIXPANELV2_DPC'][23]='_xixinstallsuccesstext;Keep your personal data in a safe place and press the <strong>continue</strong> button to	complete the installation.<br />These data will be used for authorization and shall be asked every time you	need to access the control panel.<br /> <br />;Κράτησε τα στοιχεία σε ασφαλές μέρος και πάτησε <strong>Επόμενο</strong>για να ολοκληρώσεις τις ρυθμίσεις.<br/>Τα στοιχεία θα χρησιμοποιηθούν για την πιστοποιήση σου και θα ζητούνται κάθε φορά που θα ζητάς πρόσβαση στον πίνακα ελέγχου.';
$__LOCALE['XIXPANELV2_DPC'][24]='_couponaccepted;Coupon accepted. Coupon details submition.;Το κουπόνι έγινε δεκτό.';
$__LOCALE['XIXPANELV2_DPC'][25]='_xixupgrade;Upgrade your XIX;Αναβάθμιση του XIX';
$__LOCALE['XIXPANELV2_DPC'][26]='_xixcreate;Create a XIX;Εγκατάσταση ενός XIX';
$__LOCALE['XIXPANELV2_DPC'][27]='_continue;Continue;Επόμενο';
$__LOCALE['XIXPANELV2_DPC'][28]='_INSTALL;Install;Εγκατάσταση';
$__LOCALE['XIXPANELV2_DPC'][29]='_THEME;Theme;Θέμα';
$__LOCALE['XIXPANELV2_DPC'][30]='_CONTINUE;Continue;Επόμενο';
$__LOCALE['XIXPANELV2_DPC'][31]='_CHECK1;Check data;Έλεγχος στοιχείων';
$__LOCALE['XIXPANELV2_DPC'][32]='_CHECK2;Verify data;Έπιβεβαίωση στοιχείων';
$__LOCALE['XIXPANELV2_DPC'][33]='_STEP1;Initialize;Αρχικοποίηση εγκατάστασης';
$__LOCALE['XIXPANELV2_DPC'][34]='_INSTALLING;Please wait...;Παρακαλώ περιμένετε...';
$__LOCALE['XIXPANELV2_DPC'][35]='_NAME;Name;Όνομα';
$__LOCALE['XIXPANELV2_DPC'][36]='_USERNAME;Username;Χρήστης';
$__LOCALE['XIXPANELV2_DPC'][37]='_PASSWORD;Password;Κωδικός';
$__LOCALE['XIXPANELV2_DPC'][38]='_URL;Url;Διεύθυνση ιστοσελίδας';
$__LOCALE['XIXPANELV2_DPC'][39]='_INSTALLED;Installed;Εγκατάσταση επιτυχής';
$__LOCALE['XIXPANELV2_DPC'][40]='_INSTALLEDDETAILS;Please keep your personal data in a safe place;Κρατήστε τα στοιχεία σε ασφαλές μέρος';
$__LOCALE['XIXPANELV2_DPC'][41]='_pressnext;Press next to configure the app;Πατήστε επόμενο για να ρυθμίσετε την εφαρμογή';

class xixpanelv2 extends netpanel { //xixpanel {

    var $app_is_ready;
	var $invalid_name;
	var $xix_limit;
    var $logfile;

	function __construct() { 
	
		parent::__construct();
		$this->posted_mail = ($this->posted_mail) ? $this->posted_mail : 
		                     ((GetGlobal('UserName')) ? decode(GetGlobal('UserName')) : 
							                            GetParam("Username")); //as come from login or register form
		$this->posted_theme = GetParam('initheme') ? GetParam('initheme') : 'quark';
		//$this->dir_prefix = 'xixgr_';
		
		//not re-crete app if submit again (reload)..one app per session
		$this->app_is_ready = GetSessionParam('createdapp') ? GetSessionParam('createdapp') : false;
		
		$this->invalid_name = false;
		
		//test mode
	    //$this->testmode = true;	

        $this->xix_limit = 10;
        $this->test_limit = 50;			
		
		$this->logfile = $this->posted_appname .'.log';
		
		//$this->javascript();	//on event
    }
	
	//override
    function event($event=null)  {	
	
        switch($event) {	
		    case 'xixvalid'  : die($this->is_valid_app(true)); break;
		    case 'xixallow'  : die($this->xix_allow(true)); break;
		    case 'xixinstall': die($this->app_install()); break;		
		    case 'xixshowapps': if (GetReq('ajax')) die($this->get_xixapps()); break;
		    case 'xixreg'    : break;
			case 'xixv2'     :			
			case 'xix'       :
			case 'xixpanel'  :
			case 'xixpanelv2':
			default          : $this->javascript(); 
			                   parent::event($event);
			                   
        }		
	}	
	
	//override
    function action($action=null)  {	
        //echo $action;
        switch($action) {	
		    case 'xixvalid'  : break;
			case 'xixallow'  : break;
		    case 'xixinstall': break;
		    case 'xixshowapps': $out = $this->get_xixapps(); break;
		    case 'xixreg'    : break;
			case 'xixv2'     :				
			case 'xix'       : //echo 'z';	
			case 'xixpanelv2':			
			case 'xixpanel'  : $out = $this->newapp(); break;			
			default          : $out = parent::action($action);
        }

        return ($out);		
	}
	
	protected function javascript() {
		$UserName = GetGlobal('UserName');	
		if (!$UserName) return false;		
	
        if (iniload('JAVASCRIPT')) {
	   
	        $code = $this->javascript_code();	   	
		    $js = new jscript;
            $js->load_js($code,null,1);//,null,null,true); //no obf		   			   
		    unset ($js);
	    }	
	}	

	protected function javascript_code()  {
	
	    $ajaxurl = seturl("t=");
		$check1_title = localize('_CHECK1',getlocal());
		$check2_title = localize('_CHECK2',getlocal());
		$step1_title = localize('_STEP1',getlocal());		
		$installing = localize('_INSTALLING',getlocal());
	
		$jscript = <<<EOF

function install()
{
    var email = $('#app_email_input').val();
	var theme = $('#app_theme_input').val();
	var name = $('#app_name_input').val();
	var coupon = $('#app_coupon_input').val();
	var upass = $('#app_password_input').val();
	var upassretype = $('#app_password_confirm_input').val();

	$('#app_details_message_p7').html('');
	$('#app_details_message_p6').html('');
	$('#app_details_message_p5').html('');	
	$('#app_details_message_p4').html('');
	$('#app_details_message_p3').html('');	
	$('#app_details_message_p2').html('');
	$('#app_details_message_p1').html('');
	$('#app_details_message_p').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
	
	//var data = email+name+coupon+password+password_confirm;
	//$('#app_details_message_p').html(data);

	$.get('{$ajaxurl}xixallow', function(data)
	{
		if (data == 1) {
		
			$('#app_details_message_p').html('{$check1_title}');
			$('#app_details_message_p1').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
			
			setTimeout(function() { 
			  $.post('{$ajaxurl}xixvalid', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(datavalid)
			  {
				if (datavalid == 1) {
					$('#app_details_message_p1').html('{$check2_title}');
					$('#app_details_message_p2').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
					
					setTimeout(function() {
						$.post('{$ajaxurl}xixinstall&cmd=init', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step1)
						{ 
					  	  if (step1 == 1) {
							$('#app_details_message_p2').html('{$step1_title}'); 
							$('#app_details_message_p3').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
							
							setTimeout(function() {
								$.post('{$ajaxurl}xixinstall&cmd=root', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step2)
								{ 
									$('#app_details_message_p3').html(step2); 
									$('#app_details_message_p4').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
									
									setTimeout(function() {
										$.post('{$ajaxurl}xixinstall&cmd=cp', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step3)
										{ 
											$('#app_details_message_p4').html(step3); 
											$('#app_details_message_p5').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
											
											setTimeout(function() {
												$.post('{$ajaxurl}xixinstall&cmd=cpanel', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step4)
												{ 
													$('#app_details_message_p5').html(step4); 
													$('#app_details_message_p6').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
													
													setTimeout(function() {
														$.post('{$ajaxurl}xixinstall&cmd=config', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step5)
														{ 
															$('#app_details_message_p6').html(step5); 
															$('#app_details_message_p7').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
															
															setTimeout(function() {
																$.post('{$ajaxurl}xixinstall&cmd=insdb', { cpappmail: email, initheme: theme, cpapp: name, appcoupon: coupon, password: upass ,password2: upassretype}, function(step6)
																{ 
																	$('#app_details_message_p7').html(step6); 
																	//$('#app_details_message_p8').html('<img src="images/loading.gif" alt="Loading"> {$installing}').slideDown('fast');
																});
															}, 7000);															
														});
													}, 6000);	
												});
											}, 5000);							
										});
									}, 4000);									
								});
							}, 3000);

                          }
                          else {
						    $('#app_details_message_p2').html(step1); 
                          }
						  
						});
					}, 2000);
				}
				else {
					$('#app_details_message_p1').html(datavalid);
				}
				
				//$('#app_details_message_p').html('');
				
			  });
			}, 1000);  
		}
		else {

			$('#app_details_message_p').html(data);
		}
	});
	
};		
EOF;
		return ($jscript);	
    }		

    protected function app_install($cmd=false) {
	    $cmd = $cmd ? $cmd : GetReq('cmd'); 

		switch ($cmd) {
		
		    case 'insdb' : $ret = $this->_installdb(); break;//db step 6
		    case 'config': $ret = $this->_config(); break;//config step 5
		    case 'cpanel': $ret = $this->_cpanel(); break;//cpanel step 4
		    case 'init'  : $ret = $this->_init(); break;//init step 1
			default      : $ret = $this->_copyfiles($cmd); //copy files step 2,3
			
		}
		
		return ($ret) ? 1 : null;
    }

	//js: step 1
    protected function _init() {
		$UserName = GetGlobal('UserName');	   
		if (!$UserName) return false;
		
		$my_theme_path =  $this->themes_path . $this->posted_theme;		
	
		if (($theme = $this->posted_theme) && (is_dir($my_theme_path))) {
			$theme_path = 'cp/themes/'.$theme.'/';
			$mylog .=  "\r\nInit theme selected:".$theme;
			@file_put_contents($this->app_location."/cp/theme.skin",$theme);
		}	   
		else {
			$theme_path = null;
			$mylog .=  "\r\nInit theme selected: default";
		}

		$mydirtheme = $theme  ? $this->themes_path  . $theme .'/' 
		                      : $this->prpath .'/init-app/'; //<<can be a default theme here NOT THE ROOT FILES
								
	    $mylog .=  "\r\nmydirtheme:".$mydirtheme."\r\n";
		 
	    //create dirs...CHECK EXISTANCE.. 
		if (!is_dir($this->app_location)) { 
		
		    //$ret = "\r\nAPPNAME CREATE DIR:".$this->app_location."\r\n";
		    $mylog .=  "\r\nAPPNAME CREATE DIR:".$this->app_location."\r\n";		
			
			$ok = @mkdir($this->app_location);
			
			//.HTACCESS FILE FOR  / 
			$ok1 = $this->create_htaccess_file();	
			$mylog .= $ok1 ? "\r\nHTAccess file created successfully!" 
						   : "\r\nHTAccess file FAILED to create!"; 							 
		}	
		else {
		    //$ret = "<br>APPNAME DIR EXIST:".$this->app_location."<br>QUIT!";
		    $mylog .=  "\r\nAPPNAME DIR EXIST:" . $this->app_location . "\r\nQUIT!";
        }
		
        //create app cp dir		
		if (!is_dir($this->app_location.'/cp')) { 
		
			$ok2 = @mkdir($this->app_location .'/cp');
			$mylog .= $ok2 ? "\r\ncp dir created!" : "\r\ncp dir error!";
			
			if ($ok2) {
				//HTACCESS FILE FOR /CP............. 
				$ok3 = $this->add_cp_htaccess();		 
				$mylog .= $ok3 ? "\r\ncp/htaccess succesfully installed" : "\r\ncp/htaccess error";			
			}
		}
        else { //if dir exist !!?? overwriet ??
		
		    $mylog .= "\r\ncp dir exist!";
			$ok2 = true; //for master ok
			
			//HTACCESS FILE FOR /CP............. 
			$ok3 = $this->add_cp_htaccess();		 
			$mylog .= $ok3 ? "\r\ncp/htaccess succesfully installed" : "\r\ncp/htaccess error";	
       	}   		

		//save log
        $this->save_log($mylog, true);	

        $master_ok = $ok ? ($ok1 ? ($ok2 ? ($ok3 ? $ok3 : false) : false) : false) : false;		
		echo ($master_ok) ? 1 : str_replace("\r\n",'<br/>',$mylog);
        return ($ok3 ? 1 : false);		
    } 	
	
	//js: step 2,3
    protected function _copyfiles($cmd=null) {
		$UserName = GetGlobal('UserName');	
		if (!$UserName) return false;		
		
		$theme_path = 'cp/themes/'.$this->posted_theme.'/';
		$mydirtheme = $this->posted_theme  ? $this->themes_path  . $this->posted_theme .'/' 
		                                   : $this->prpath .'/init-app/'; //<<can be a default theme here NOT THE ROOT FILES
										
		if ($cmd) {  //copy dirs
          switch ($cmd) {		
		 
		    case 'root':
				$ret = $this->copy_root_files($mydirtheme, $theme_path);		
				//break;
			//case 'javascripts':
				//js
				$ret .= $this->copy_javascript_files($mydirtheme, $theme_path);
				//break;
			//case 'css':
				//css - fonts	
				$ret .= $this->copy_css_files($mydirtheme, $theme_path);		
				//break;
			//case 'pages':			
				$ret .= $this->copy_page_files($mydirtheme, $theme_path);
				//break;
			//case 'cgibin':	
				//cgi-bin			
				$ret .= $this->copy_cgibin_files($mydirtheme, $theme_path);			
				//break;
			//case 'themes':	
				//theme themes
				$ret .= $this->copy_theme_files($mydirtheme, $theme_path);
				//break;
			//case 'images':	
				//images		
				$ret .= $this->copy_image_files($mydirtheme, $theme_path);		
				//break;
			//case 'newsletters':	
				//extras..newsletters
				$ret .= $this->copy_newsletter_files($mydirtheme, $theme_path);			
				break;
			case 'cp':	
				//cp...
				$ret = $this->copy_cp_files($mydirtheme, $theme_path);			
				//break;
			//case 'cpcgibin':
				//extras..cp/cgi
				$ret .= $this->copy_awstats_files($mydirtheme, $theme_path);			
				//break;
			//case 'cpreports':		 
				//extras..reports
				$ret .= $this->copy_report_files($mydirtheme, $theme_path);		
				break;

			default :	
				//extras..current cp theme..disabled
				//if ($theme) 
					//$ret .= $this->copy_cptheme_files($mydirtheme, $theme_path, $theme);
		 
				//extras..ckfinder..disabled
				//$ret .= $this->copy_ckfinder_files($mydirtheme, $theme_path);	
		  }
		  
		  //save log
          $this->save_log(str_replace('<br>',"\r\n",$ret));	
		  
		  echo $ret;
		  return (true);			
		}
        
        return false; 		
	}
	
	//js: step 4
	protected function _cpanel() {
		$UserName = GetGlobal('UserName');	
        $mydbuser = null; //get the val from new-cpanel...	
		if (!$UserName) return false;			
		
	    if ($cpan = $this->new_cpanel($mydbuser)) {
			$mylog =  "\r\nCpanel:".$cpan;	
			
			$mylog .= "\r\nCreate db schema for application:" . $this->posted_appname;
			$appurl = $this->posted_appname . '.' . $this->rootdomain ;
			$email = $this->posted_mail ? $this->posted_mail : $this->posted_appname.'@'.$this->rootdomain ;	   
			$db_prefix = $this->db_prefix;
			$mylog .= "\r\nPrefix:" . $db_prefix;
			$db_encoding = $this->encoding;
			$mylog .= "\r\nEncoding:" . $db_encoding;

			if (($mydbuser) && ($this->posted_password)) {
				$e = $this->local_modify_config_file("cp/config.ini",$db_prefix.'wduser',$db_prefix.$mydbuser);
				if (!$e) $mylog .= "\r\n[config.ini]Configuration can't saved!(wduser)";			 
				$e = $this->local_modify_config_file("cp/config.ini",'wdpass',$this->posted_password);
				if (!$e) $mylog .= "\r\n[config.ini]Configuration can't saved!(wdpass)";	
				//replace email account pass... wdemo-pass...as db pass
				$e = $this->local_modify_config_file("cp/config.ini",$this->posted_appname.'-pass',$this->posted_password);
				if (!$e) $mylog .= "\r\n[config.ini]Configuration can't saved!('-pass')";			
			}		

		    //save log
            $this->save_log($mylog);	
		  	
			echo str_replace("\r\n",'<br/>',$mylog);			
            return true;			
		}	
		
		return false;
	}
	
	//js: step 5
	protected function _config() {
		$UserName = GetGlobal('UserName');		
		if (!$UserName) return false;

		$appurl = $this->posted_appname . '.' . $this->rootdomain ;
		$email = $this->posted_mail ? $this->posted_mail : $this->posted_appname.'@'.$this->rootdomain ;			
	
		//application name generator ..if appname is on...
		$appnameison = ($_SESSION['appnameison']=='true') ? $_SESSION['appnameison'] : false;//true;
		$appdirname = ($appnameison) ? $this->posted_appname :
						$this->dir_prefix . $this->posted_appname;
		//...all wdemo-dir s became $appdirname
		$e = $this->local_modify_config_file("cp/config.ini",$this->posted_appname.'-dir',$appdirname);
		if (!$e) $ret .= "\r\n[config.ini]Configuration can't saved!(-dir)";
		$e = $this->local_modify_config_file("cp/myconfig.txt",$this->posted_appname.'-dir',$appdirname);
		if (!$e) $ret .= "\r\n[myconfig.txt]Configuration can't saved!(-dir)";		
		
		if ($appurl) { //appname has already replace wdemo-url to appname-url				
			//...all mails became info@appname-url (=stereobit.gr=post appurl)
			$e = $this->local_modify_config_file("cp/config.ini",$this->posted_appname.'-url',$appurl);
			if (!$e) $ret .= "\r\n[config.ini]Configuration can't saved!(-url)";
			$e = $this->local_modify_config_file("cp/myconfig.txt",$this->posted_appname.'-url',$appurl);
			if (!$e) $ret .= "\r\n[myconfig.txt]Configuration can't saved!(-url)";			
			//replace title... wdemo-title...
			$e = $this->local_modify_config_file("cp/config.ini",$this->posted_appname.'-title',$appurl);
			if (!$e) $ret .= "\r\n[config.ini]Configuration can't saved!(-title)";
			$e = $this->local_modify_config_file("cp/myconfig.txt",$this->posted_appname.'-title',$appurl);
			if (!$e) $ret .= "\r\n[myconfig.txt]Configuration can't saved!(-title)";			
			//replace email realm... wdemo-realm...
			$e = $this->local_modify_config_file("cp/config.ini",$this->posted_appname.'-realm',$appurl);
			if (!$e) $ret .= "\r\n[config.ini]Configuration can't saved!(-realm)";	
			$e = $this->local_modify_config_file("cp/myconfig.txt",$this->posted_appname.'-realm',$appurl);
			if (!$e) $ret .= "\r\n[myconfig.txt]Configuration can't saved!(-realm)";			
		}
		
		if ($email) { //appname has already replace the names above
			//...all mails became from info@appname-url (=stereobit.gr=post appurl) to post appmail (=balexiou@stereobit.gr) 
			$e = $this->local_modify_config_file("cp/config.ini",'info@'.$appurl,$email);
			if (!$e) $ret .= "\r\n[config.ini]Configuration can't saved!(email)";
			$e = $this->local_modify_config_file("cp/myconfig.txt",'info@'.$appurl,$email);
			if (!$e) $ret .= "\r\n[myconfig.txt]Configuration can't saved!(email)";			
		} 

		//save log
        $this->save_log($ret);

		echo str_replace("\r\n",'<br/>',$ret);
        return true; 		
	}
	
	//js: step 6
	protected function _installdb() {
		$UserName = GetGlobal('UserName');		
		if (!$UserName) return false;	
		
		$mylog = "\r\nCreate db schema for application:" . $this->posted_appname;		
		
		$appurl = $this->posted_appname . '.' . $this->rootdomain ;
		$email = $this->posted_mail ? $this->posted_mail : $this->posted_appname.'@'.$this->rootdomain ;					
		
        //create db
		$log = null; //fetch data from func
        $q = $this->create_database($appurl,$email, $log);
		$mylog .= $log;
        $mylog .= "\r\n[database]$q queries executed!";

		//save log
        $this->save_log($mylog);
		
		//echo str_replace("\r\n",'<br/>',$mylog);
		
		$ret = $this->newapp_scenario();		
		echo $ret;

        return true; 			
	}	
	
	//override..override
	function modify_html_meta() {
	
		$mywizfile = $this->app_location . '/cp/cpwizard.ini';	
		
		$domain = 'http://' . $this->posted_appname . '.' . $this->rootdomain ;
		$email = $this->posted_mail ? $this->posted_mail : $this->posted_appname.'@'.$this->rootdomain ;
		$title = $this->posted_appname;		
		
		//cpwizard preset in cp dir...
		if (is_readable($mywizfile)) {
		    //in case of pre-existing (copied) wizard file..dont create...
	
			//$data = @parse_ini_file($mywizfile ,false, INI_SCANNER_RAW);
		    //...replace or ADD domain,email
			//.......			
			$memdata = @file_get_contents($mywizfile);
			if ($memdata) {
				$memdata1 = str_replace('DOMAIN-NAME=','DOMAIN-NAME='.$domain, $memdata);
			    $memdata2 = str_replace('E-MAIL=','E-MAIL='.$email, $memdata1);
				$data = @parse_ini_string($memdata2 ,false, INI_SCANNER_RAW);
			
				$ok = $this->change_data('cp/html', $data);//...change 
				
				$this->log .= "<br>Wizard file finded!";
				
				//save wizard file with replacements		
		        $ok2 = @ok ? @file_put_contents($mywizfile ,$memdata2) : false;
				return ($ok);
			}
		}
	    //else create wiz file
		
		$data = array('DOMAIN-NAME'=>$domain,'E-MAIL'=>$email,
		              'TITLE'=>$title,'SUBTITLE'=>'my numerical quantity but not order',
		              'META-DESCRIPTION'=>'my numerical quantity but not order',
					  'META-KEYWORDS'=>'XIX,number,not,order',
					  /*'FEEDBURNER'=>'#feedburner-url',*/
					  'TWITTER'=>'https://twitter.com/xixgr','FACEBOOK'=>'http://www.facebook.com/xixgr',
					  /*'GOOGLEPLUS'=>'#googleplus-url',*/
					  /*'FLICKR'=>'#flickr-url','VIMEO'=>'#viemo-url','LINKEDIN'=>'#linkedin-url','DELICIOUS'=>'#delicious-url',
					  'FBLIKEBOX-PLUGIN'=>'#fb-plugin','FLICKRBADGE-PLUGIN'=>'#flickr-plugin',*/
					  'LATITUDE'=>'40.690446','LONGITUDE'=>'22.794224',
					  'ADDRESS'=>'Allatini 27 St, 54250, Thessaloniki',
					  'TEL1'=>'T_:0030 2310 950 155', 'TEL2'=>'M_:0030 6937 367 879',
					  /*'UA-CODE-PLACEHOLDER'=>'UA-XXXXXXXXX',
					  'PROFILE-TITLE'=>'Company','PRODUCTS-TITLE'=>'Products','CONTACT-TITLE'=>'Contact',*/
					  'MULTILANGUAGE'=>'yes','LANGUAGE'=>'2','ADD_DATA'=>'yes');	
		
				
		$ok = $this->change_data('cp/html', $data);
		
		$this->log .= "<br>Wizard file created!";		
		
		//create wizard ini file
		$myiniwizard = "wizard=1\r\n";//null;		
        foreach ($data as $var=>$val) {
		    $myiniwizard .= $var .'='.$val ."\r\n";
        } 			
		//save wizard file		
		$ok2 = @ok ? @file_put_contents($mywizfile ,$myiniwizard) : false;

        return ($ok2);						  
	}		
	
    function create_database($appurl=null, $appmail=null, &$mylog) {
	    $db = GetGlobal('db');
		$supervisor_email = $appmail ? $appmail : ($appurl ? 'admin@'.$appurl : 'admin@wdemo-url');//default
		$supervisor_password = $this->posted_password ? md5($this->posted_password) : md5('admin');

		if (!$db) {
		    $mylog =  "\r\nNo db connection!<br><br>";
			return false;
		}

		//application name generator ..if appname is on...
		$appnameison = ($_SESSION['appnameison']=='true') ? $_SESSION['appnameison'] : false;//true;
		if ($appnameison) 
			$app = $this->posted_appname; //without prefix
		else   		
			$app = $this->dir_prefix . $this->posted_appname; //app is the path to conf for reading db user/pass
		
		//return pointer
		$appdb = GetGlobal('controller')->calldpc_method('database.switch_db use '.$app.'++1+1');		 
		$mylog .=  "\r\nswitch database:".$this->posted_appname;
		//$db = GetGlobal('db'); 

		if ($appdb) { 
		    
			$mylog .= ' switched succesfuly!';
        
			//..continue creating tables etc.... 
			//READ SCHEMA FORM INIT-APP FOLDER 
			if ($this->encoding) {
				if (is_readable(paramload('SHELL','prpath').'/schema-'.$this->encoding.'.sql'))
					$sql_f = file_get_contents($this->prpath . '/schema-'.$this->encoding.'.sql');
				else
					$sql_f = file_get_contents($this->prpath . '/schema-utf8.sql'); 		  
			}  
			else  
				$sql_f = file_get_contents($this->prpath . '/schema-utf8.sql');  

			$sql_parts = explode(';',$sql_f);
			$schemafile = $this->encoding ? 'file-schema:' . $this->prpath . '/schema-'. $this->encoding . '.sql' 
										  : 'file-schema:' . $this->prpath . '/schema-utf8.sql';		
			$mylog .=  "\r\n".$schemafile."\r\n";
		
			$queries = 0; 
			foreach ($sql_parts as $i=>$sql) {
				$ret = $appdb->Execute($sql,1);	
				$mylog .=  $sql."\r\n"; 		  
				if ($ret) $queries+=1;
			}
		
		
			//insert admin user....for cp 8
			$insSQL = "INSERT INTO users set code2='1',email='$supervisor_email',fname='admin',notes='ACTIVE',seclevid=8,username='$supervisor_email', password='$supervisor_password',vpass='$supervisor_password'";
			$ret = $appdb->Execute($insSQL,1);	
			$mylog .=  "\r\n".$insSQL."\r\n";
			
			//insert super admin user....for cp 9
			$insSQL = "INSERT INTO users set code2='2',email='info@xix.gr',fname='xixadmin',notes='ACTIVE',seclevid=9,username='info@xix.gr', password='".md5('xixadminvk7dp')."',vpass='".md5('xixadminvk7dp')."'";
			$ret = $appdb->Execute($insSQL,1);	
			$mylog .=  "\r\n".$insSQL."\r\n";	//silent ?		
		    $mylog .=  $queries . ' executed of '.count($sql_parts).". \r\n";
			return ($queries);
        }
		else {
		    $mylog .= "\r\ndatabase path config file:".$app;
		    $mylog .= "\r\nFAILED!";
			//..rollback
		}
		
        return false;		
	}		
	
	//override..EXECUTED AT FINAL STEP(JAVASCRIPT)
	public function newapp_scenario() {
		$UserName = GetGlobal('UserName');		
		if (!$UserName) return false;		
		$logfile = $this->app_location."/".$this->logfile;	
		//$ret = parent::newapp_scenario();

		$logdata = file_get_contents($logfile);
		
		if (strstr($logdata,'INSERT INTO users')) {
		
			//save app to db
			$this->save_app_to_db($logdata);//ret		
		
		    //that measn that he script has complete all the actions
			//..insert into db is the last? action....
			$ret = $this->newapp_response_form($msg);

            //remove log file
			@unlink($logfile);	
		}
        else {
		    //form
			$error = $this->error_log ? $this->error_log : 'unknown error';
            $msg = "Error during installation ($error), please retry later.";			
			$ret = $this->newapp_form($msg);
			//error mail notifier..parent event already send
			//$notify = $this->app_notifier($msg, null, 'Application error:');
		}		
		
		return ($ret);	 
    }	
	
	//override
	protected function newapp_response($sendmail=false) {
	    if (!$this->posted_appname) return false;	
	
        $appdomain = $this->posted_appname ?
		             $this->posted_appname . '.' . $this->rootdomain :
					 $this->app_is_ready;	
	    $cplink = $this->get_admin_link($appdomain, true);
		
        //button to go...
		$cplink_noimage = $this->get_admin_link($appdomain);
		$onclick = "top.location.href='" . $cplink_noimage . "'";

	    //template 2 send mail
	    $app_template= "xixapp.htm";
	    $t = $this->prpath . '/html/'. str_replace('.',getlocal().'.',$app_template) ;		
			
						  
	    if ((is_readable($t)) && ($sendmail)) {
			$apptemplate = file_get_contents($t);

            //$abs_rootdomain = 'http://' . $this->rootdomain; 		
			$client_subject = 'New XIX ' . $appdomain;
			
			$tokens = array('0'=>$this->posted_theme,
			                '1'=>$this->posted_appname,
							'2'=>$this->posted_mail,
							'3'=>$this->posted_password,	
							'4'=>$appdomain,
			                );
			//print_r($tokens);
			$client_message4mail = $this->combine_tokens($apptemplate,$tokens);
			
			//send html mail		
			$notify_client = $this->_sendmail($this->mailto,$this->posted_mail,$client_subject,$client_message4mail);
		}
		
		//send mail to XIX
		$text = "<br>------------------new app------------------<br>" .
				'<br/>AppName:' .$this->posted_appname . '<br/>' . 
                '<br/>Pxass:' .$this->posted_password . '<br/>' .
			    '<br/>Theme:' .$this->posted_theme . '<br/>' .
				'<br/>Skin:' .$this->posted_skin . '<br/>' .
				'<br/>isLocal:' .$this->is_local_theme . '<br/>';
		$notify = $this->_sendmail($this->mailto,$this->mailto,$client_subject,$text);
		
		$pass_title = localize('_PASSTITLE',getlocal());
		$repass_title = localize('_REPASSTITLE',getlocal());
		$coupon_title = localize('_COUPONTITLE',getlocal());
		$recaptcha_title = localize('_RECAPTCHATITLE',getlocal());
		$name_title = localize('_NAME',getlocal());
		$theme_title = localize('_THEME',getlocal());		
		$username_title = localize('_USERNAME',getlocal());
		$password_title = localize('_PASSWORD',getlocal());		
		$url_title = localize('_URL',getlocal());

		$client_message = null;							  

		$client_message.= "<label>{$theme_title}:</label>" .
		                  '<h3>'.$this->posted_theme.'</h3>';							  
		$client_message.= "<label>{$name_title}:</label>" .
		                  '<h3>'.$this->posted_appname.'</h3>';				  				  
		$client_message.= "<label>{$username_title}:</label>" .
		                  '<h3>'.$this->posted_mail.'</h3>';				  
		$client_message.= "<label>{$password_title}:</label>" .
		                  '<h3>'.$this->posted_password.'</h3>';				  		
		$client_message.= "<label>{$url_title}:</label>" .
		                  '<h3>http://'.$appdomain.'</h3>';				  		
						  		
		//save state, one app per session						
		SetSessionParam('createdapp', $this->posted_appname . '.' . $this->rootdomain); 
		
		return ($client_message);
	}		
	
	//override
	protected function newapp_response_form($msg=null, $review=false) {
	    $action = seturl('t=xixv2');
	    $message = $msg ? $msg : null;		
        $appdomain = $review ? $review :
		             $this->posted_appname . '.' . $this->rootdomain;		
		
		$cplink = $this->get_admin_link($appdomain);
		$onclick = $cplink  ? "window.open('" . $cplink . "')" : null;
		$onclk = $onclick ? 'onClick="'.$onclick.'"' : null;	

		//SEND MAIL.... 
		if (!$review) {
			//$sendmail = $this->testmode ? false : true;
			$message .= $this->newapp_response(true);//$sendmail);		
		}	
	
	    $install_title = localize('_INSTALL',getlocal());
		$continue_title = localize('_CONTINUE',getlocal());
		$installed_title = localize('_INSTALLED',getlocal());
		$insdetails_title = localize('_INSTALLEDDETAILS',getlocal());
		
	
		$form = <<<EOF
			<article id="post-809" class="post-809 page type-page status-publish hentry">
			<div class="entry-content">		
			<h3>{$installed_title}</h3>
			<p>{$insdetails_title}</p>
		    $message
		    <br/>
		   	<p>
			<input type="submit" class="btn" $onclk' value="{$continue_title}">
			</p>	
			</div><!-- /.entry-content -->
			</article><!-- /#post -->
EOF;

        return ($form);		
	}		
	
	//override..
    public function newapp() {
		$UserName = GetGlobal('UserName');		
		//if (!$UserName) return false;	

		if ($this->xix_allow()) {

			if ($this->is_valid_app()) {
			
				if (!empty($this->coupon_ask)) {
					//extra ask coupon form	
					$msg = 'Coupon submited';
					$ret = $this->newapp_form($msg, $this->coupon_ask);				
				}
				else {
					//execute new app scenario ..NOT EXECUTED (JAVASCRIPT)
					$ret = $this->newapp_scenario(); 
				}	
            }
			else {
			    //form		
				$msg = $this->get_app_error();
				$ret = $this->newapp_form($msg);
            }			
		}
		else {
			if (defined('SHLOGIN_DPC')) 
				$ret = GetGlobal('controller')->calldpc_method('shlogin.html_form');									
					
		}
		
		if (defined('XIXUSER_DPC')) 			
			$ret .= GetGlobal('controller')->calldpc_method('xixuser.show_xixuser use +1');			
							
        return ($ret);		
    }	
	
    //re-design override
	public function newapp_form($msg=null, &$coupon_ask=false) {
	
	    if ($this->app_is_ready) {
			$appdomain = $this->posted_appname . '.' . $this->rootdomain;
		
			$coupon_title = localize('_COUPONTITLE',getlocal());
			$recaptcha_title = localize('_RECAPTCHATITLE',getlocal());
			$name_title = localize('_NAME',getlocal());
			$theme_title = localize('_THEME',getlocal());		
			$username_title = localize('_USERNAME',getlocal());
			$password_title = localize('_PASSWORD',getlocal());		
			$url_title = localize('_URL',getlocal());		
		
			$data = "<label>{$theme_title}:</label>" .
		            '<h3>'.$this->posted_theme.'</h3>';							  
			$data.= "<label>{$name_title}:</label>" .
		            '<h3>'.$this->posted_appname.'</h3>';				  				  
			$data.= "<label>{$username_title}:</label>" .
		            '<h3>'.$this->posted_mail.'</h3>';				  
			$data.= "<label>{$password_title}:</label>" .
		            '<h3>'.$this->posted_password.'</h3>';				  		
			$data.= "<label>{$url_title}:</label>" .
		            '<h3>http://'.$appdomain.'</h3>';		
		
		    $pressnext_label = localize('_pressnext',getlocal());
			$form = $this->newapp_response_form($data.$pressnext_label,$this->app_is_ready);//true);
			return ($form);
	    }
	
        $theme = $this->posted_theme ? $this->posted_theme : 'default';	
		//echo $theme;
		$email_title = localize('_EMAILTITLE',getlocal());
		$title_title = localize('_TITLETITLE',getlocal());
		$pass_title = localize('_PASSTITLE',getlocal());
		$repass_title = localize('_REPASSTITLE',getlocal());
		$coupon_title = localize('_COUPONTITLE',getlocal());
		$recaptcha_title = localize('_RECAPTCHATITLE',getlocal());
		$install_title = localize('_INSTALL',getlocal());
		$theme_title = localize('_THEME',getlocal());
		
		//theme selector message
		$theme_message = $this->form_selector_details($theme);
		$theme_value = $this->posted_theme ? $this->posted_theme : $theme_message;
		
		//form error messages
		$err_message = $msg ? $msg : null;		

		//extra app name field
        if ($this->appnameison) {		
		    $appname = "<label for='app_name_input'>{$title_title}:</label><br>".
						"<input type='text' id='app_name_input' name='cpapp' value='{$this->posted_appname}'><br><br>";
		}
		else 
		    $appname = null;
			
		//user set password field
        if (!$this->passgenison) {	
		    $passname = "<label for='app_password_input'>{$pass_title}:</label>".
						"<input type='password' id='app_password_input' name='upass' value=''>".					
						"<label for='app_password_confirm_input'>{$repass_title}:</label>".
						"<input type='password' id='app_password_confirm_input' name='upassretype' value=''>";		
		}
		else 
		    $passname = null;
			
		//extra coupon name field
        if (($this->couponison) && ($coupon = GetParam('appcoupon')) && (!$this->couponsubmited) ) {
		    //if just coupon param=1 then show field, if has value>strln>1.. is the coupon value
            $coupon_value = strlen($coupon)>1 ? $coupon : null;//GetParam('appcoupon') ? GetParam('appcoupon') : null;		
		    $appcoupon = "<label for='app_coupon_input'>{$coupon_title}:</label>".
					     "<input type='text' id='app_coupon_input' name='appcoupon' value='{$coupon_value}'>";
			
		}
		else { 
		    $appcoupon = $this->couponsubmited ? 
			             "<label for='app_coupon_input'>{$coupon_title}:</label>".
			             "<input type='text' id='app_coupon_input' name='appcoupon' value='{$this->couponsubmited}' readonly>" : 
						 null;	
            //extra coupon fields.... 
            if (!empty($coupon_ask)) {//$coupon_ask)) {
			    echo '>>>>>>>>>>>>>>>couponASK';
			    foreach ($coupon_ask as $coupon_cmd=>$coupon_value) {
				    //$appcoupon .= "<input type=\"hidden\" name=\"$coupon_cmd\" value=\"$coupon_value\" />";
				    $appcoupon .= "<label for='app_coupon_input'>{$coupon_cmd}:</label>".
					              "<input type='text' id='app_coupon_input' name='{$coupon_cmd}' value='{$coupon_value}' readonly>";
					
					echo '<br>',$coupon_cmd,':',$coupon_value;  
				}
				//reset in mem when extar from question to proced
				//$coupon_ask = null;
				SetSessionParam('coupon_ask',false);
            }			
        }
		
		//DISABLED
        /*if (defined('RECAPTCHA_DPC') && ($this->pubkey) && ($this->privkey)) {
		    //echo  'z';
			if (!$coupon_ask) {//check has been done...
				//$recaptcha = "<label class='screen-reader-text'>$recaptcha_title</label>";
				$recaptcha .= '<div>' . recaptcha_get_html($this->pubkey, $this->privkey) . '</div>';
			}
        }*/			
		

		$form = <<<XIXFRM
	<h3>{$install_title}</h3>
	<p class="smalltext_p">{$err_message} {$theme_message}</p>
	<div id="app_details_div">
	<!--form action="." id="app_details_form" autocomplete="off"-->
	<label for="app_email_input">{$email_title}:</label>
	<input type="text" id="app_email_input" name="cpappmail" value="{$this->posted_mail}">
	$passname
    $appcoupon	
    $recaptcha
	<label for="app_theme_input">{$theme_title}:</label>
	<input type="text" id="app_theme_input" name="initheme" value="{$theme_value}" readonly>	
    <br/><br/>	
	<p>
	<input type="submit" class="btn" onClick='install()' value="{$install_title}">
	</p>
	<!--/form-->
	<p id="app_details_message_p"></p>
	<p id="app_details_message_p1"></p>
	<p id="app_details_message_p2"></p>
	<p id="app_details_message_p3"></p>
	<p id="app_details_message_p4"></p>
	<p id="app_details_message_p5"></p>
	<p id="app_details_message_p6"></p>
	<p id="app_details_message_p7"></p>
	</div>	
XIXFRM;

        return ($form);		
	}

	//overrite
	protected function form_selector_details($theme=null) {
	    if (!$theme) return false;
		//echo $theme;
		$theme_details = $this->get_theme_details($theme, true);
		//print_r($theme_details);
		
		if (!empty($theme_details)) {
		    $theme_image = $theme_details['image']; 
			$theme_text = $theme_details['text'];
		    $theme_title = $theme_details['title'];
			$theme_liveurl = $theme_details['liveurl'];
			$theme_screenshot = $theme_details['screenshot'];
			
            $reselect_link = null;//seturl('t=netpanel'," Isn't so good for you? Pick another.");				

			$ret = $theme_title;
		}	
		
		return ($ret);
	}

	protected function save_app_to_db($log=null) {
		$db = GetGlobal('db');
	    $UserName = GetGlobal('UserName');		
		$supervisor_email = $this->posted_mail;
		$supervisor_password = $this->posted_password ? md5($this->posted_password) : md5('admin');
		$theme = $this->posted_theme;
		$slog = $log ? addslashes($log) : null;
		
		$parent_user = decode($UserName);
		
		//application name generator ..if appname is on...
		$appnameison = ($_SESSION['appnameison']=='true') ? $_SESSION['appnameison'] : false;//true;
		if ($appnameison) 
			$app = $this->posted_appname; //without prefix
		else   		
			$app = $this->dir_prefix . $this->posted_appname; //app is the path to conf for reading db user/pass
		
		
		$appSQL = "INSERT INTO apps set name='$app',theme='$theme',cparent='$parent_user',active=1,user='$supervisor_email',pass='$supervisor_password'";
		if ($slog)
			$appSQL .= ", log='$slog'";
		//echo $appSQL;	
			
		$ret = $db->Execute($appSQL,1);	
	    return ($ret);
	}	

	//check for reservation nums of user
	protected function xix_allow_newapp($limit=null, $ret_on_undefined=false) {
	    $limitup = $limit ? $limit : $this->xix_limit;

		if (defined('XIXUSER_DPC')) {
		    $xixcounter = GetGlobal('controller')->calldpc_method('xixuser.get_xixusage use 1');
						
			$xixallow = ($xixcounter>=$limitup) ? true : false;
		}
		else {
		    switch ($ret_on_undefined) {
				case 'yes': $xixallow = true; break;
				case 'no' : $xixallow = false; break;
			    default   : $xixallow = true;	
			}
		}	
			
		return ($xixallow);	
	}	
	
	protected function xix_allow($ajaxcall=false) {
	    $UserName = GetGlobal('UserName');
		if (!$UserName) return false;			
		$user = decode($UserName);	
	    $allow_app = false;
	
		$xixallow = $this->xix_allow_newapp($this->test_limit,'no');
		
		if (defined('XIXUSER_DPC')) 
		    $xixcost = GetGlobal('controller')->calldpc_method('xixuser.cost_reservations');
		else
			$xixcost = false;
			
		$xixapp_counter = $this->get_xixapps(true, $user);
		//echo 'xixcounter',$xixapp_counter,'<br/>xixcost:',$xixcost;	
		if ($xixcost)
			$xix_max_apps = ($xixcost>100) ? round(floatval($xixcost / 100))+1 : 2; //+1 :2 //1 free +1 to do
		else
            $xix_max_apps = 1;//1;//1   		
			
		//allow when xix has reserv nums->xixapp_counter is null
		//$allow_app = $xixallow ? $xixallow : ($xixapp_counter>=$xix_max_apps ? (($user=='sales@stereobit.com')?true:false) : true);
		$allow_app = (($xixallow) && ($xixapp_counter<$xix_max_apps)) ? 
		              1 :
					  (($user=='sales@stereobit.com'||$user=='vasalex21@gmail.com') ? 1 : false);
		//echo 'maxapps:',$xix_max_apps,'<br/>xixallow:',$xixallow .'<br/>allow:'.$allow_app;	

		if ($ajaxcall) 
			echo $allow_app;	
		
		return ($allow_app);
	}	
	
	//override
	protected function is_valid_app($ajaxcall=false) {
	
		if ($this->app_is_ready) {
			return false;
		} //check app db for name existance	
		elseif ($this->is_valid_name(true)) { 
		  
          //check session
          if ($_SESSION['validapp']===true) {
		    if ($this->posted_appname) {
				//if ($ajaxcall) 
					//echo 1;
				return true;  //check has been done
			}	
			else {
			    if ($ajaxcall) 
					echo 'Not twice installation';
				return false;//reload...	
			}	
		  }	
	
	      //VALID COUPON CHECK
	      $coupon = $this->set_coupon_actions();
		  if (!$coupon) {
		    if ($ajaxcall) {
				echo "Invalid coupon id!";
				return false;
			}
			else
				$ret = "Invalid coupon id!";
		  }	
	
	      //SUBMIT CHECK
          if (($this->is_valid_email($this->posted_mail)) && 
		    ($this->posted_appname) && 
			($this->posted_password) &&
			(strlen($this->posted_appname)>=5) && 
			(strlen($this->posted_password)>5) && 
		    ($this->posted_password === $this->posted_password_retyped)) { 
			
			    //save valid app..for extra coupon question not to re-ask
			    SetSessionParam('validapp',true);
				
				//if ($ajaxcall)
					//echo 1;
					
                return true;
		  }	
						
		  if ($ajaxcall) {
		    $error = $this->get_app_error();
			echo $error;
		  }
		}	
		return false;
	}	
	
	//override
	protected function is_valid_name($checkdir=false) {//$name=null) {
		$db = GetGlobal('db');	
	
		//if (!$name) return false;
		if (!$this->posted_appname) return false;

		$appdir = $this->app_location;
		//also check if dir exist inside copy application files
		if (($checkdir) && (is_dir($appdir))) { 
		    $this->invalid_name = true;
			return false;
		}	
		
		//set name with prefix ..
		$name = $this->dir_prefix . $this->posted_appname;

		//active=1 and ...
		$sSQL = "select name from apps where name='" . $name . "'";
		$res = $db->Execute($sSQL,2);	
		$rname = $res->fields[0];
		//echo $sSQL .':'. $rname;
		
		if (!$rname) {
		    $this->invalid_name = false;
			return ($this->posted_appname); //is valid
		}	
		else {
		    $this->invalid_name = true;
            return false; //name exist 		
		}	
		
	}	
	
	//override
    protected function is_valid_email($email) {
		$db = GetGlobal('db');
		
        //php 5.2
        if (filter_var( $email, FILTER_VALIDATE_EMAIL )) {
		    
	        $domain = explode('@', $email);
            if (checkdnsrr($domain[1])) {
			    //echo $domain[1];
				
				//check installed email
				$sSQL = "select user from apps where user='" . $email . "'";
				$res = $db->Execute($sSQL,2);	
				$remail = $res->fields[0];
				//echo $sSQL .':'. $rname;
		
				if (!$remail) 			
					return true; 
					
			}	
	    }
		
		//if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$",$email)) return true;
		//else 
		return false;
	}	
	
	//override
	protected function get_app_error() {
	
		if (!empty($_POST)) {
		    if (!$this->is_valid_email($this->posted_mail)) {
			    $msg = ' Invalid email.<br/>';
			}
		    elseif (strlen($this->posted_appname)<5) {
			    $msg = $this->posted_appname .' is not a valid name.<br/>';
                $msg .= 'Name must be at least 5 characters long.';	
			}	
			elseif (strlen($this->posted_password)<=5)
                $msg = 'password must be at least 6 characters long.';	
			elseif ($this->posted_password!==$this->posted_password_retyped)
                $msg = 'please re-type the password.';	
			else
                $msg = $this->message ? $this->message : null;				
        }  
        return ($msg);		
	}	
	
	//override, not workable if not automated whem cmd change....
	public function get_panel_title() {	
	    $action = null;
		$xixallow = $this->xix_allow();
		
	    switch ($action) {	
		
		    case 'modapp' : $ret = localize('_xixupgrade',getlocal()); break;
		    default       : $ret = ($xixallow) ? localize('_xixcreate',getlocal()) : null;
		}
		
		//return ($ret);
		$wret = '<h2 class="entry-title">'.$ret.'</h2>';
		return ($wret);
	}	

	//override
	public function get_panel_text($action=null) {

		$submit_coupon_lnk = seturl('t=addapp&theme='.GetReq('theme').'&appcoupon=1', localize('_here',getlocal()));
		//print_r($_POST);
		
		if (!$action) {
			if ($message = $this->get_app_error()) {
				$action = 'failed-install';
			}	
			elseif ((GetParam('FormAction')=='addapp') && ($message = $this->error_log)) {
				$action = 'failed-install';		
			}			
			elseif ((GetParam('FormAction')=='addapp') && ($this->error_log==null)) {
				$action = 'success-install';
			}
			elseif ($this->app_is_ready) 
				$action = 'success-notreinstall';			
			else
				$action =  null;//'success-install';//null;	
        }			
			
		//echo $action,'::',$this->error_log;
		
	    switch ($action) {
		
			case 'xyz':   		
						$ret = localize('_coupontext',getlocal()) . " {$submit_coupon_lnk}.";
						break;
						
			case 'success-install':  if ($this->coupon_ask)
                                           return (localize('_couponaccepted', getlocal()));
			
						   $ret = 	'<h2>'.localize('_xixinstallsuccess',getlocal()).'</h2><p>'.
							        localize('_xixinstallsuccesstext',getlocal()) . '</p>';	
							
							//coupon submited.. not just getreq coupon fileld =1
							if ($coupon = GetParam('appcoupon') && ((strlen($coupon)>1)))
								$ret .= localize('_couponsubmited', getlocal()) . ":$coupon<br/>";
							else
								$ret .= "<br/><br/>";  
							$ret .= '<hr/>';								
						break;	

			case 'success-notreinstall':  
                         $ret = '<h2>'. localize('_newxixinstalled',getlocal()).
						    '</h2><p>'. localize('_newxixinstalledtext',getlocal()) .
							'<br/><br/></p>'; 	
                         $ret .= '<hr/>';							
						break;							

			case 'failed-install':  
                         $ret = '<h2>'.$message.'</h2><p>'.
							localize('_installfailed',getlocal()) . '</p>'; 	
							if (!GetParam('appcoupon'))
								$ret .= localize('_coupontext',getlocal()) . " {$submit_coupon_lnk}.<br/>";
							else
								$ret .= "<br/><br/>"; 
							$ret .= '<hr/>';		
						break;							
	
			default :   
						$xixallow = $this->xix_allow();
							
						$ret = ($xixallow) ? "<p>".localize('_newxixtitle',getlocal())."<br>".localize('_newxixtext',getlocal()).". <br/><br/></p>" : null;
						if (!GetParam('appcoupon'))
							$ret .= ($xixallow) ? localize('_coupontext',getlocal()) . " {$submit_coupon_lnk}.<br/><hr/>" : null;
						else
							$ret .= ($xixallow) ? "<br/><br/><hr/>" : null;  						
		}
		
		return ($ret);
	}	
	
	protected function highlight_today($day, $force=false) {
	    $today = date('d-m-Y');
		
		$retday = ((strtotime($today)==strtotime($day)) || ($force)) ?
		          str_ireplace($day, '<span id="selected_span">' . $day . '</span>', $day) :
				  $day;
				
		return $retday;
	}

	protected function get_xixapps($retcounter=null, $user=null) {
		$db = GetGlobal('db');
	    $UserName = GetGlobal('UserName');
		if (!$UserName) return false;			
		$user = decode($UserName);
		$apps = null;
		
		if (!$retcounter) {
		
			$query = "SELECT id,active,name,cdate from apps WHERE user='{$user}' OR cparent='{$user}' AND active=1";
			$query .= ' order by cdate DESC';	
			//echo $query;	
			$result = $db->Execute($query,2);

			$count = 0; 
			if (!empty($result->fields)) {
			  
			  foreach ($result as $n=>$rec) {
				$count+=1;	
				$c = sprintf('%02d',$count);	
				$insdate = $this->highlight_today(date('d-m-Y',strtotime($rec['cdate'])));
				$ptitle = explode('_',$rec['name']);
				$xixurl = $ptitle[1].'.'.$this->rootdomain;
				$xixgoto = "<a class='btn btn-small' href='http://$xixurl'>". $xixurl .'</a>';
				$active_deleted = $rec['active'] ? 
				                  localize('_active',getlocal()) : 
				                  localize('_deleted',getlocal()) ;				
				
				$apps[] = $c .' '. $insdate . '||'.
				         $active_deleted . '||'.
					     $xixgoto;						 
			  }

			  
              $title = localize('_applications',getlocal());			  
		      $ppager = GetReq('pl')?GetReq('pl'):10;
			  $browser = new browse($apps,$title,$this->getpage($apps,null),null,null,'xixshowapps',false,true);
			  $out .= $browser->render("xixshowapps",$ppager,$this,1,1,0,0);
			  unset ($browser);				  
            }	

			//add a new app 
			//$out .= $this->newapp_form();			
				
			return ($out);			
		}
		else {//return counter
		    
			$query = "SELECT count('id') as xix from apps WHERE";
			if ($user)
				$query .= " user='{$user}' OR cparent='{$user}' AND";
			$query .= " active=1";	
			//echo $query;	
			$result = $db->Execute($query,2);	
            $apps = $result->fields['xix'];			
		}

        return ($apps);		
	}	
	
	function getpage($array,$id){
	
	   if (count($array)>0) {

         foreach ($array as $num => $data) {
		    $msplit = explode("||",$data);
			if ($msplit[1]==$id) return floor(($num+1) / $this->pagenum)+1;
		 }	  
		 
		 return 1;
	   }	 
	}

    function browse($packdata,$view,$cmd=null) {
	    //echo '>',$cmd;
	    $data = explode("||",$packdata); 
        $out = '<tr><td>';

        $out.= $data[0] . '</td><td>';
		$out.= $data[1] . '</td><td>';
		$out.= $data[2];						
		
	    $out.= '</td></tr>';

	    return ($out);
	}		
	
	function headtitle($view=null,$cmd=null) {
	    //echo '>',$cmd;

        $out = '<table id="apps_table"><tr><th>'.
	         localize('_appid',getlocal()).'</th><th>'.
			 localize('_appact',getlocal()).'</th><th>'.
			 localize('_appurl',getlocal()).'</th></tr>';  				
	    return ($out);
	}		
	
	protected function save_log($data, $new=false) {
	    if (!$data) return false;

        if ($new) 
			$ret = @file_put_contents($this->app_location."/".$this->logfile, $data, LOCK_EX);
		else
			$ret = @file_put_contents($this->app_location."/".$this->logfile, $data, FILE_APPEND | LOCK_EX);
			
		return ($ret);	
	}
};
}	
?>