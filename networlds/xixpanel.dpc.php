<?php
$__DPCSEC['XIXPANEL_DPC']='1;1;1;1;1;1;1;1;1';

if (!defined("XIXPANEL_DPC")) {
define("XIXPANEL_DPC",true);

$__DPC['XIXPANEL_DPC'] = 'xixpanel';

$a = GetGlobal('controller')->require_dpc('networlds/netpanel.dpc.php');
require_once($a);

GetGlobal('controller')->get_parent('NETPANEL_DPC','XIXPANEL_DPC');

$__EVENTS['XIXPANEL_DPC'][40]='xix';
$__EVENTS['XIXPANEL_DPC'][41]='xixpanel';
$__EVENTS['XIXPANEL_DPC'][42]='xixreg';
$__EVENTS['XIXPANEL_DPC'][43]='xixshowapps';

$__ACTIONS['XIXPANEL_DPC'][40]='xix';
$__ACTIONS['XIXPANEL_DPC'][41]='xixpanel';
$__ACTIONS['XIXPANEL_DPC'][42]='xixreg';
$__ACTIONS['XIXPANEL_DPC'][43]='xixshowapps';

$__DPCATTR['XIXPANEL_DPC']['xixpanel'] = 'xixpanel,1,0,0,0,0,0,0,0,0,0,0,1';

$__LOCALE['XIXPANEL_DPC'][0]='XIXPANEL_DPC;XIX app;XIX app';
$__LOCALE['XIXPANEL_DPC'][1]='_SHLOGOUT;Logout;Αποσύνδεση';
$__LOCALE['XIXPANEL_DPC'][2]='_EMAILTITLE;Your Email;Ηλ. ταχυδρομείο';
$__LOCALE['XIXPANEL_DPC'][3]='_TITLETITLE;Title;Όνομα';
$__LOCALE['XIXPANEL_DPC'][4]='_PASSTITLE;Your password;Κωδικός';
$__LOCALE['XIXPANEL_DPC'][5]='_REPASSTITLE;Retype your password;Επανάληψη κωδικού';
$__LOCALE['XIXPANEL_DPC'][6]='_COUPONTITLE;Your Coupon;Κουπόνι';
$__LOCALE['XIXPANEL_DPC'][7]='_RECAPTCHATITLE;Recaptcha;Recaptcha';
$__LOCALE['XIXPANEL_DPC'][8]='_active;Active;Ενεργό';
$__LOCALE['XIXPANEL_DPC'][9]='_deleted;Inactive;Μη ενεργό';
$__LOCALE['XIXPANEL_DPC'][10]='_appid;Reg date;Ημερ. κατ.';
$__LOCALE['XIXPANEL_DPC'][11]='_appact;Status;Κατάσταση';
$__LOCALE['XIXPANEL_DPC'][12]='_appurl;ΧΙΧ url;ΧΙΧ συνδεσμος';
$__LOCALE['XIXPANEL_DPC'][13]='_applications;ΧΙΧ Apps;ΧΙΧ εφαρμογές';
$__LOCALE['XIXPANEL_DPC'][14]='_here;here;εδώ';
$__LOCALE['XIXPANEL_DPC'][15]='_coupontext;If you have any ΧΙΧ coupon, press ;Αν διαθέτεις κάποιο ΧΙΧ κουπόνι πατήστε ';
$__LOCALE['XIXPANEL_DPC'][16]='_newxixtitle;Welcome, a new XIX wait for you;Καλωσήρθες, είσαι μόνο ένα XIX μακριά';
$__LOCALE['XIXPANEL_DPC'][17]='_newxixtext;Please input your email and let a XIX to be cooked for you;Τοποθέτησε το ηλ. ταχυδρομείο σου και δημιούργησε ένα XIX';
$__LOCALE['XIXPANEL_DPC'][18]='_installfailed;Please insert your data carefully.<br/>They will be used every time you need to access your webpage\'s control panel.<br/>;Παρακαλώ εισείγαγε τα στοιχεία σου σωστά.<br/>Θα τα χρησιμοποιείς κάθε φορά που θα γίνεται πιστοποίηση χρήστη για την εισαγωγή σου στον πίνακα ελέγχου.<br/>';
$__LOCALE['XIXPANEL_DPC'][19]='_newxixinstalledtext;Your XIX is ready to configured;Το XIX είναι έτοιμο για παραμετροποίηση';
$__LOCALE['XIXPANEL_DPC'][20]='_newxixinstalled;XIX installed;Το XIX εγκαταστάθηκε';
$__LOCALE['XIXPANEL_DPC'][21]='_couponsubmited;Coupon submited;Κουπόνι εισήχθει';
$__LOCALE['XIXPANEL_DPC'][22]='_xixinstallsuccess;Congratulations. You\'r XIXed;Συγχαρητήρια. Το XIX δημιουργήθηκε';
$__LOCALE['XIXPANEL_DPC'][23]='_xixinstallsuccesstext;Keep your personal data in a safe place and press the <strong>continue</strong> button to	complete the installation.<br />These data will be used for authorization and shall be asked every time you	need to access the control panel.<br /> <br />;Κράτησε τα στοιχεία σε ασφαλές μέρος και πάτησε <strong>Επόμενο</strong>για να ολοκληρώσεις τις ρυθμίσεις.<br/>Τα στοιχεία θα χρησιμοποιηθούν για την πιστοποιήση σου και θα ζητούνται κάθε φορά που θα ζητάς πρόσβαση στον πίνακα ελέγχου.';
$__LOCALE['XIXPANEL_DPC'][24]='_couponaccepted;Coupon accepted. Coupon details submition.;Το κουπόνι έγινε δεκτό.';
$__LOCALE['XIXPANEL_DPC'][25]='_xixupgrade;Upgrade your XIX;Αναβάθμιση του XIX';
$__LOCALE['XIXPANEL_DPC'][26]='_xixcreate;Create a XIX;Εγκατάσταση ενός XIX';
$__LOCALE['XIXPANEL_DPC'][27]='_continue;Continue;Επόμενο';

class xixpanel extends netpanel {

    var $app_is_ready;
	var $invalid_name;
	var $xix_limit;

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
	}
	
	//override
    function event($event=null)  {	
	
        switch($event) {	
		    case 'xixshowapps': if (GetReq('ajax')) die($this->get_xixapps()); break;
		    case 'xixreg'  : break;
			case 'xix'     :
			case 'xixpanel': //$this->login_js();  break;			
			
			default : parent::event($event);
        }		
	}	
	
	//override
    function action($action=null)  {	
	
        switch($action) {	
		    case 'xixshowapps': $out = $this->get_xixapps(); break;
		    case 'xixreg' : break;
			case 'xix'    :
			case 'xixpanel':$out = $this->newapp(); break;
			default : $out = parent::action($action);
        }

        return ($out);		
	}
	
	//fb login js
	protected function login_js() {
	}
	
	//override..
    public function newapp() {
	    $UserName = decode(GetGlobal('UserName'));
		//if (!$UserName) return ('Not allowed');
	
		if ($this->xix_allow()) {
		 //echo ':a1';
		 //2 secid atleast for new app
		 //...
		 if ($this->is_valid_app()) {

          if (!empty($this->coupon_ask)) {	//if extra form to submit..show it before
            //extra ask coupon form	
		    $msg = 'Coupon submited';
            $ret .= $this->newapp_form($msg, $this->coupon_ask);		  
		  }
		  else {//do the website cooking...
		  
		    set_time_limit(130); //set execution time
		  
			try {
				$dataret = $this->newapp_scenario(); 
			} 
			catch (Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}			
			
			if (strstr($this->log,'INSERT INTO users')) {
			    //that measn that he script has complete all the actions
				//..insert into db is the last? action....

				$ret .= $this->newapp_response_form($msg);
			}
            else {
			    //form
				$error = $this->error_log ? $this->error_log : 'unknown error';
                $msg = "Error during installation ($error), please retry later.";			
				$ret .= $this->newapp_form($msg);
				//error mail notifier..parent event already send
				//$notify = $this->app_notifier($msg, null, 'Application error:');
			}
			
			set_time_limit(30); //set execution time
			
          }//coupon ask			
		 }
         else {		 
            //form		
		    $msg = $this->get_app_error();
			$ret .= $this->newapp_form($msg);	
			
			//$ret .= $this->get_xixapps();
			
			if (defined('XIXUSER_DPC')) {			
			    //my project			
				//$ret .= GetGlobal('controller')->calldpc_method('xixuser.get_xixprojects use +'.$UserName);	
				//all projects
				//$ret .= GetGlobal('controller')->calldpc_method('xixuser.get_xixprojects');				
				//user data
			    $ret .= GetGlobal('controller')->calldpc_method('xixuser.show_xixuser');	
			}		 
						
         }
		
		}
		else {
		   
			/*if (defined('XIXUSER_DPC')) { 
                //my project			
				$ret .= GetGlobal('controller')->calldpc_method('xixuser.get_xixprojects use +'.$UserName);	
				//all projects
				$ret .= GetGlobal('controller')->calldpc_method('xixuser.get_xixprojects');
			}	
			else { //xix form							
				$tokens[] = 'xixreg'; //postaction
				$tokens[] = 'Register'; //button caption
				$tokens[] = 'test'; //message
				$tokens[] = seturl('t=xix'); //form url
				$select =null; //select vals
				$tokens[] = get_options_file('gender',false,true,$select);
				$tokens[] = $UserName; //text			
			
				$ret .= $this->call_form('xixuser.htm', $tokens);
			}*/	
			
			if (defined('XIXUSER_DPC')) {			
			    //my data
			    $ret .= GetGlobal('controller')->calldpc_method('xixuser.show_xixuser');
			}	
				
			//my apps	
			//$ret .= $this->get_xixapps();	
		
			//echo 'b';
			//default actions	
			/*if ((defined('SHCART_DPC')) && (defined('SHCUSTOMERS_DPC'))) 
				$ret = GetGlobal('controller')->calldpc_method('shcustomers.after_registration_goto');
			else*/
			if (defined('SHLOGIN_DPC')) {
				$ret .= GetGlobal('controller')->calldpc_method('shlogin.html_form');									
			}	
			else
				$ret .= 'Please login...';	
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

		$client_message = null;							  

		$client_message.= '<label class="screen-reader-text">Theme:</label>' .
		                  '<h2>'.$this->posted_theme.'</h2>';							  
		$client_message.= '<label class="screen-reader-text">Appname:</label>' .
		                  '<h2>'.$this->posted_appname.'</h2>';				  				  
		$client_message.= '<label class="screen-reader-text">Username:</label>'.
		                  '<h2>'.$this->posted_mail.'</h2>';				  
		$client_message.= '<label class="screen-reader-text">Password:</label>'.
		                  '<h2>'.$this->posted_password.'</h2>';				  		
		$client_message.= '<label class="screen-reader-text">Url:</label>'.
		                  '<h2>http://'.$appdomain.'</h2>';				  		
						  		
		//save state, one app per session						
		SetSessionParam('createdapp', $this->posted_appname . '.' . $this->rootdomain); 
		
		return ($client_message);
	}	
	
	//override
	protected function newapp_response_form($msg=null, $review=false) {
	    $action = seturl('t=netpanel');//got start ?? //null;
	    $message = $msg ? $msg : null;		
        $appdomain = $review ? $review :
		             $this->posted_appname . '.' . $this->rootdomain;		
		
		$continue = localize('_continue',getlocal());
		$cplink = $this->get_admin_link($appdomain);
		//$onclick = $cplink  ? "top.location.href='" . $cplink . "'" : null;
		$onclick = $cplink  ? "window.open('" . $cplink . "')" : null;
		
		$onclk = $onclick ? 'onClick="'.$onclick.'"' : null;	

		//SEND MAIL.... 
		if (!$review) {
			//$sendmail = $this->testmode ? false : true;
			$message .= $this->newapp_response(true);//$sendmail);		
		}
	
		$form = <<<EOF
							<article id="post-809" class="post-809 page type-page status-publish hentry">
							<div class="entry-content">
							<form name="signup" method="post" action="$action">
								    $message 								 
									<input type="submit" alt="Continue"	title="{$continue}" name="Submit" value="{$continue}" $onclk></input>  
							</form>	
							</div><!-- /.entry-content -->
							</article><!-- /#post -->	
EOF;

        return ($form);		
	}		
	
    //re-design override
	public function newapp_form($msg=null, &$coupon_ask=false) {
	
	    if ($this->app_is_ready) {
			$form = $this->newapp_response_form('<h3>Configure XIX</h3>',$this->app_is_ready);//true);
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
		
		//form error messages
		$err_message = $msg ? "<h2 class='entry-title'>$msg</h2>" : null;
		
		//theme selector message
		$theme_message = $this->form_selector_details($theme);

		//extra app name field
        if ($this->appnameison) {		
		    $appname = '<label class="screen-reader-text">'.$title_title.'</label>'.
					   '<input class="myf_input" name="cpapp" type="text" id="appname" value="'.$this->posted_appname.'"></input>';
		}
		else 
		    $appname = null;
			
		//user set password field
        if (!$this->passgenison) {		
		    $passname = '<label class="screen-reader-text">'.$pass_title.'</label>'.
						'<input class="myf_input" name="upass" type="password" id="password"></input>'.					
						'<label class="screen-reader-text">'.$repass_title.'</label>'.
						'<input class="myf_input" name="upassretype" type="password" id="password2"	value=""></input>';
		}
		else 
		    $passname = null;
			
		//extra coupon name field
        if (($this->couponison) && ($coupon = GetParam('appcoupon')) && (!$this->couponsubmited) ) {
		    //if just coupon param=1 then show field, if has value>strln>1.. is the coupon value
            $coupon_value = strlen($coupon)>1 ? $coupon : null;//GetParam('appcoupon') ? GetParam('appcoupon') : null;		
		    $appcoupon = "<label class='screen-reader-text'>$coupon_title</label>".
					     '<input class="myf_input" name="appcoupon" type="text" id="coupon" value="'.$coupon_value.'"></input>';
			
		}
		else { 
		    $appcoupon = $this->couponsubmited ? "<label class='screen-reader-text'>$coupon_title</label>". 
			                                     '<input class="grid_4 alpha omega" name="appcoupon" type="text" id="coupon" value="'.$this->couponsubmited.'" readonly></input>'
											   : null;	
            //extra coupon fields.... 
            if (!empty($coupon_ask)) {//$coupon_ask)) {
			    echo '>>>>>>>>>>>>>>>couponASK';
			    foreach ($coupon_ask as $coupon_cmd=>$coupon_value) {
				    //$appcoupon .= "<input type=\"hidden\" name=\"$coupon_cmd\" value=\"$coupon_value\" />";
				    $appcoupon .= "<label class='screen-reader-text'>$coupon_cmd</label>". 
			                      '<input class="myf_input" name="'.$coupon_cmd.'" type="text" id="coupon" value="'.$coupon_value.'" readonly></input>';
					
					echo '<br>',$coupon_cmd,':',$coupon_value;  
				}
				//reset in mem when extar from question to proced
				//$coupon_ask = null;
				SetSessionParam('coupon_ask',false);
            }			
        }
		
        if (defined('RECAPTCHA_DPC') && ($this->pubkey) && ($this->privkey)) {
		    //echo  'z';
			if (!$coupon_ask) {//check has been done...
				//$recaptcha = "<label class='screen-reader-text'>$recaptcha_title</label>";
				$recaptcha .= '<div>' . recaptcha_get_html($this->pubkey, $this->privkey) . '</div>';
			}
        }			
		
		$form = <<<EOF
							<article id="post-809" class="post-809 page type-page status-publish hentry">
							<div class="entry-content">
							<form name="signup" method="post" action="">
								<input type="hidden" name="FormAction" value="addapp" /> 
								<input type="hidden" name="initheme" value="$theme" /> 
								    $err_message 
								    $appname
									<label class='screen-reader-text'>$email_title</label>
									<input class="myf_input" name="cpappmail" type="text" id="email" value="{$this->posted_mail}">
									</input>
                                    $passname
                                    $appcoupon									
									$recaptcha 									 
									<div class="msg grid_12 alpha omega aligncenterparent"></div>      
                                    $theme_message
									<div class="grid_12 alpha omega aligncenterparent"> 
										<br/>
										<input type="submit" class="call-out grid_8 push_2 alpha omega" alt="Sign Up"
											title="Sign Up"
											name="Submit" value="Sign Up"></input>
									 <div class="form-foot" style="clear:both;"></div>
								    </div>  
							</form>	
							</div><!-- /.entry-content -->
							</article><!-- /#post -->			
EOF;

        return ($form);		
	}		
	
	//overrite pick theme details based on ini
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

			$ret = "<h2 class='entry-title'>$theme_title</h2>";
		}	
		
		return ($ret);
	}	
	
	//override
	protected function get_app_error() {
	
	    if ($this->app_is_ready) {
		
		    $msg = ' XIX is ready.<br/>';
			return ($msg);
		}	
	
		if ((!empty($_POST)) && ($_POST['FormAction']!='dologin')) {//..as came from login page
		    //print_r($_POST);
		    if (!$this->is_valid_email($this->posted_mail)) {
			    $msg = ' Invalid email.<br/>';
			}
			elseif ($this->invalid_name) {//!$this->is_valid_name()) {//check name in db
			    $msg = $this->posted_appname .' is not a valid name.<br/>';
                $msg .= 'Name exist. Select another name.';				
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
	
	//override ...for support simulation and db record
	public function newapp_scenario() {
	
		$ret = parent::newapp_scenario();
		
        //save app to db
		$this->save_app_to_db($ret);
		
		//initialize db data..goto rcwizard end step
		//$this->initialize_db_data();
		
		//initialize language...goto rcwizard end step
		//$this->initialize_language();
		
		return ($ret);	 
    }
	
	//override
	protected function is_valid_app() {

		if ($this->app_is_ready) {
			return false;
		}
		elseif ($this->is_valid_name(true)) { 
		    //check app db for name existance
			return parent::is_valid_app();
		}

        return false;		
    }	
	
	//check app db for name existance
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

		$sSQL = "select name from apps where active=1 and name='" . $name . "'";
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
	
	protected function initialize_db_data() {
	
	   /*
		INSERT INTO `categories` (`id`, `ctgid`, `ctgoutline`, `ctgoutlnorder`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat01`, `cat02`, `cat03`, `cat04`, `cat05`, `cat11`, `cat12`, `cat13`, `cat14`, `cat15`, `active`, `view`, `search`) VALUES
(1, 1, NULL, NULL, 'ITEMS', 'products', '', '', NULL, 'ITEMS', 'Products', '', '', NULL, 'ITEMS', 'Προιόντα', '', '', NULL, 1, 1, 1),
(2, 0, NULL, NULL, 'ITEMS', 'about', '', '', NULL, 'ITEMS', 'About', '', '', NULL, 'ITEMS', 'about', '', '', NULL, 1, 1, 1),
(3, 3, NULL, NULL, 'ITEMS', 'frontpage', '', '', NULL, 'ITEMS', 'Frontpage', '', '', NULL, 'ITEMS', '1ησελίδα', '', '', NULL, 1, 1, 1);

		INSERT INTO `products` (`id`, `code1`, `code2`, `code3`, `code4`, `code5`, `itmname`, `itmactive`, `itmfname`, `itmremark`, `itmdescr`, `itmfdescr`, `sysins`, `sysupd`, `uniida`, `uniname1`, `uniname2`, `uni1uni2`, `uni2uni1`, `ypoloipo1`, `ypoloipo2`, `price0`, `price1`, `cat0`, `cat1`, `cat2`, `cat3`, `cat4`, `active`, `price2`, `pricepc`, `p1`, `p2`, `p3`, `p4`, `p5`, `resources`, `weight`, `volume`) VALUES
(1, NULL, NULL, '001', NULL, NULL, 'Προιόν Α', 1, 'My product', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'products', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'company', NULL, NULL, 'Σχετικά με μας', 1, 'About Us', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'about', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '_fp1', NULL, NULL, 'Πρώτη σελίδα', 1, 'Front page', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'frontpage', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

		INSERT INTO `pattachments` (`id`, `code`, `type`, `lan`, `data`) VALUES
(1, 'products', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>'),
(2, '001', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Proin euismod mattis elit quis rutrum. Suspendisse facilisis scelerisque arcu in ornare. Vestibulum nibh nunc, hendrerit eget nulla ac, rhoncus volutpat lacus. Proin adipiscing lectus ac enim viverra pellentesque. Quisque dapibus euismod erat in imperdiet. Aliquam suscipit scelerisque dignissim. Donec varius condimentum nunc vitae viverra. Cras tincidunt vestibulum quam, eget dapibus arcu venenatis in. Integer fermentum urna a mauris viverra, in aliquet justo feugiat. Aliquam urna odio, dapibus at fringilla sit amet, faucibus sed metus. Curabitur dignissim eros eget leo dictum, at mollis lacus venenatis. In porta egestas est.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras interdum ante nunc, id aliquam est pretium vel. Sed tincidunt, lectus nec porta viverra, nisl tellus pulvinar mi, a semper nisl erat non est. Suspendisse ipsum odio, dignissim eget erat sit amet, mollis faucibus massa. Duis consectetur lectus auctor, tempor neque et, dapibus nunc. Donec ut velit tempor orci convallis ullamcorper. Nullam et est id sapien varius tristique. Suspendisse cursus eros consectetur lectus ullamcorper, vel tristique tellus vestibulum. Aliquam congue imperdiet lacinia. Integer eu magna neque. Nam pulvinar venenatis orci eget euismod. Vivamus facilisis mi at velit dictum euismod. Praesent sollicitudin adipiscing arcu at scelerisque. Maecenas volutpat et augue nec aliquet. Pellentesque at tempor dui. Etiam non auctor ligula, ac posuere massa. Nulla facilisi.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aliquam nec vehicula metus, et porttitor nunc. Suspendisse vestibulum scelerisque ligula a venenatis. In consequat, velit in consectetur mollis, odio diam tincidunt metus, vitae tincidunt mauris elit sit amet mauris. Cras tincidunt fermentum diam, eu tristique leo pellentesque vel. Quisque mollis, tellus ac auctor consequat, ipsum diam tincidunt elit, ac commodo magna enim quis nulla. Sed ut est nisl. Sed posuere vel turpis eu commodo. Curabitur feugiat tortor vel odio congue, nec feugiat lectus semper.</div>'),
(3, 'company', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Proin euismod mattis elit quis rutrum. Suspendisse facilisis scelerisque arcu in ornare. Vestibulum nibh nunc, hendrerit eget nulla ac, rhoncus volutpat lacus. Proin adipiscing lectus ac enim viverra pellentesque. Quisque dapibus euismod erat in imperdiet. Aliquam suscipit scelerisque dignissim. Donec varius condimentum nunc vitae viverra. Cras tincidunt vestibulum quam, eget dapibus arcu venenatis in. Integer fermentum urna a mauris viverra, in aliquet justo feugiat. Aliquam urna odio, dapibus at fringilla sit amet, faucibus sed metus. Curabitur dignissim eros eget leo dictum, at mollis lacus venenatis. In porta egestas est.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras interdum ante nunc, id aliquam est pretium vel. Sed tincidunt, lectus nec porta viverra, nisl tellus pulvinar mi, a semper nisl erat non est. Suspendisse ipsum odio, dignissim eget erat sit amet, mollis faucibus massa. Duis consectetur lectus auctor, tempor neque et, dapibus nunc. Donec ut velit tempor orci convallis ullamcorper. Nullam et est id sapien varius tristique. Suspendisse cursus eros consectetur lectus ullamcorper, vel tristique tellus vestibulum. Aliquam congue imperdiet lacinia. Integer eu magna neque. Nam pulvinar venenatis orci eget euismod. Vivamus facilisis mi at velit dictum euismod. Praesent sollicitudin adipiscing arcu at scelerisque. Maecenas volutpat et augue nec aliquet. Pellentesque at tempor dui. Etiam non auctor ligula, ac posuere massa. Nulla facilisi.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aliquam nec vehicula metus, et porttitor nunc. Suspendisse vestibulum scelerisque ligula a venenatis. In consequat, velit in consectetur mollis, odio diam tincidunt metus, vitae tincidunt mauris elit sit amet mauris. Cras tincidunt fermentum diam, eu tristique leo pellentesque vel. Quisque mollis, tellus ac auctor consequat, ipsum diam tincidunt elit, ac commodo magna enim quis nulla. Sed ut est nisl. Sed posuere vel turpis eu commodo. Curabitur feugiat tortor vel odio congue, nec feugiat lectus semper.</div>'),
(4, '_fp1', '.html', 1, '<p>\r\n	This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin” caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(5, '_fp1', '.html', 0, '<p>\r\n	This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin” caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(6, 'company', '.html', 0, '<p>\r\n	This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin” caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(7, '001', '.html', 0, '<p>\r\n	This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin” caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>');

	   */
	}
	
	protected function initialize_language() {
	
	   /* ..config.ini set
	   dlang=0;1;
       multilang=1 
	   */
	}
	
	protected function is_admin($id=null) {
	    $sid = $id ? $id : 5;
		
		$adminsecid = GetSessionParam('ADMINSecID') ? GetSessionParam('ADMINSecID') : $GLOBALS['ADMINSecID'];
		$seclevid = ($adminsecid>1) ? intval($adminsecid)-1 : 1;
		if (($adminsecid) && ($seclevid>=$sid))
			return true;	
			
		return false;	
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
			  $browser = new browse($apps,$title,$this->getpage($apps,null),null,null,'xixshowapps',false);
			  $out .= $browser->render("xixshowapps",$ppager,$this,1,1,0,0);
			  unset ($browser);				  
            }	
				
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
	
	//multi param allowing new apps
	protected function xix_allow() {
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

		return($allow_app);
	}
	
	protected function highlight_today($day, $force=false) {
	    $today = date('d-m-Y');
		
		$retday = ((strtotime($today)==strtotime($day)) || ($force)) ?
		          str_ireplace($day, '<span id="selected_span">' . $day . '</span>', $day) :
				  $day;
				
		return $retday;
	}	
	
	protected function call_form($form=null, $tokens=false) {
	    if (!$form) return false;
		
		//$template='fpcartfooter.htm';
	    $t = $this->urlpath .'/' . $this->infolder . '/cp/html/'. str_replace('.',getlocal().'.',$form) ;
	    //echo $t,'>';
	    if (is_readable($t)) 
			$form_data = @file_get_contents($t);			
	   
	    if (($form_data) && (!empty($tokens))) {
	   
	        $ret = $this->combine_tokens2($form_data, $tokens, true);
	    }
	    else
		    $ret = $form_data;
	   
	    return ($ret);
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

};
}	