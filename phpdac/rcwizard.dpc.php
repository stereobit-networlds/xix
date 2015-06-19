<?php
$__DPCSEC['RCWIZARD_DPC']='1;1;1;1;1;1;2;2;9';

if ( (!defined("RCWIZARD_DPC")) && (seclevel('RCWIZARD_DPC',decode(GetSessionParam('UserSecID')))) ) {
define("RCWIZARD_DPC",true);

$__DPC['RCWIZARD_DPC'] = 'rcwizard';

$__EVENTS['RCWIZARD_DPC'][0]='cpmwiz';
$__EVENTS['RCWIZARD_DPC'][1]='cpwizard';
$__EVENTS['RCWIZARD_DPC'][2]='cpwiznext';
$__EVENTS['RCWIZARD_DPC'][3]='cpwizprev';
$__EVENTS['RCWIZARD_DPC'][4]='cpwizskip';
$__EVENTS['RCWIZARD_DPC'][5]='cpwizexit';
$__EVENTS['RCWIZARD_DPC'][6]='cpwizsave';
$__EVENTS['RCWIZARD_DPC'][7]='cpwizlogin';
$__EVENTS['RCWIZARD_DPC'][8]='cpwizreinit';
//$__EVENTS['RCWIZARD_DPC'][9]='cpupgrade';

$__ACTIONS['RCWIZARD_DPC'][0]='cpmwiz';
$__ACTIONS['RCWIZARD_DPC'][1]='cpwizard';
$__ACTIONS['RCWIZARD_DPC'][2]='cpwiznext';
$__ACTIONS['RCWIZARD_DPC'][3]='cpwizprev';
$__ACTIONS['RCWIZARD_DPC'][4]='cpwizskip';
$__ACTIONS['RCWIZARD_DPC'][5]='cpwizexit';
$__ACTIONS['RCWIZARD_DPC'][6]='cpwizsave';
$__ACTIONS['RCWIZARD_DPC'][7]='cpwizlogin';
$__ACTIONS['RCWIZARD_DPC'][8]='cpwizreinit';
//$__ACTIONS['RCWIZARD_DPC'][9]='cpupgrade';

$__LOCALE['RCWIZARD_DPC'][0]='RCWIZARD_DPC;Wizard;Wizard';

class rcwizard {
  
    var $title, $prpath, $urlpath, $url, $encoding;
	var $post, $msg;
	var $browser;
	var $editmode;
	var $wdata, $wstep, $weditfiles, $environment, $wizardfile;

	function __construct() {
		$this->prpath = paramload('SHELL','prpath'); //cp path of root app
		$this->urlpath = paramload('SHELL','urlpath'); //root path of root app
		$this->infolder = paramload('ID','hostinpath'); //must be null	
		$this->url = paramload('SHELL','urlbase'); //root domain name 	
	
		$char_set  = arrayload('SHELL','char_set');	  
		$charset  = paramload('SHELL','charset');	  		
		if (($charset=='utf-8') || ($charset=='utf8'))
			$encoding = 'utf-8';
		else  
			$encoding = $char_set[getlocal()]; 	
	
		$this->encoding = $_GET['encoding'] ? $_GET['encoding'] : $encoding; 
		$this->editmode = GetReq('editmode');	  
		$this->title = localize('RCWIZARD_DPC',getlocal());	
		$this->post = false;  
		$this->msg = null;
		
		$this->install_root_path = $this->prpath . '../../cp/init-app/';
		
		//standart wizard file ...
		$this->wizardfile = 'cpwizard.ini';
		
        $this->environment = $_SESSION['env'] ? $_SESSION['env'] : $this->read_env_file(true);//session or read..; 				
        $this->wdata = $_SESSION['wdata'] ? $_SESSION['wdata'] : $this->read_wizard_file(true);//session or read..; 		
	    $this->wstep = $_SESSION['wstep'] ? $_SESSION['wstep'] : 0;
		$this->weditfiles = $_SESSION['weditfiles'] ? $_SESSION['weditfiles'] : null;//has init initialized into edit...$this->read_html_files(true);	
	}
	
	function event($event=null) {
	
	   /////////////////////////////////////////////////////////////
	   /*if (GetSessionParam('LOGIN')!='yes') {//die("Not logged in!");//	
	     if (!GetReq('editmode'))		 
	       die("Not logged in!");//	
		 else
     	   //header("Location: cp.php?editmode=1&encoding=" . GetReq('encoding'));  
   	       die("Not logged in! <A href='../cp.php?editmode=1&encoding=".GetReq('encoding')."'>LOGIN</A>");//
	   }*/		
	   /////////////////////////////////////////////////////////////   
	
	    switch ($event) {
		
          //case 'cpupgrade'  : break;		
		  case 'cpwizreinit' : $this->reinit_wizard();
                                break;		  
		
		  case 'cpwizlogin' :if ($ok = $this->login_wizard_step()) { 
		                        //goto dashboard after login... 
		                        $this->javascript_goto('cp.php?editmode=1&encoding='.$this->encoding);
		                        $this->msg = null;//true;
							 }	
							 else	
		                        $this->msg = "Invalid username or password."; 
		                     break;		
		
		  case 'cpwizsave' : //change html tags
		                     //$this->msg = $this->change_html_tags();	
							 $this->msg = $this->modify_tags_inhtml_dir();
							 
							 //initialize db data
		                     $this->msg .= $this->initialize_db_data();
		
		                     //initialize language
		                     $this->msg .= $this->initialize_language();
							 
							 //initialize myconfig index section
		                     $this->msg .= $this->initialize_myconfig();
							 
							 //save wiz file ..
							 $ok = $this->write_wizard_file(false);//true //..to enable/disable wiz next time..
							 
							 if ($ok=true) {
							    session_destroy();//kill session
								//..can be redirected...
								//header("Location:".$this->url);
								//..exit to self win...!!!
							 }
                             break;		  

		  case 'cpwiznext' : $this->inc_wizard_step(); break;
		  case 'cpwizprev' : $this->dec_wizard_step(); break;
		  case 'cpwizskip' : $this->inc_wizard_step(); break;
		  
		  case 'cpwizard'  :	
          case 'cpmwiz'    :
		  default          :
		                     
        }			
    }
	
	function action($action=null) {	
	    //echo $this->wstep;	
	
	    switch ($action) {	
          /*case 'cpupgrade'  :  $out = 'upgrade..'; 
		                       $out.= seturl('t=cpwizard&wf=siwapp', 'Siwapp');
		                       break;*/	

		  case 'cpwizreinit' :  $out .= 'Please exit and re-enter the control panel!';
		                        //$out .= $this->wizard_step();//..if already in session done, goto finish
                                break;	
		
		  case 'cpwizlogin':   $out .= $this->wizard_step(); //current step reload... 
		                       break;
		
		  case 'cpwizsave' :   //if ($this->msg) //some kind of error
		                       $out .= $this->completed_step($this->msg);
		                       break; 
		  case 'cpwiznext' :
		  case 'cpwizprev' :
		  case 'cpwizskip' :
		  
		  case 'cpwizard'  :	
          case 'cpmwiz'    :
		  default          :   //print_r($this->wdata);//$this->read_wizard_file());
		                       $out .= $this->wizard_step();//'wizard!';
		 						  
        }
		
        return ($out);
		/*$win2 = new window($title,$out);
		$winout .= $win2->render("center::100%::0::group_dir_headtitle::left::0::0::");
		unset ($win2);
		return ($winout);*/
    }
	
    protected function javascript_goto($goto) {
   
      if (iniload('JAVASCRIPT')) {

	       $code = "parent.mainFrame.location=\"$goto\"";
		   $js = new jscript;
           $js->load_js($code,"",1);			   
		   unset ($js);
	  }   
    } 	

    //..as in cpmdbrec.php	
	protected function login_wizard_step() {

	     if (($user = $_POST['cpuser']) && ($pass = $_POST['cppass'])) {
	
			if (defined('RCCONTROLPANEL_DPC'))
				$login = GetGlobal('controller')->calldpc_method("rccontrolpanel.verify_login");
			elseif (defined('SHLOGIN_DPC'))
				$login = GetGlobal('controller')->calldpc_method("shlogin.do_login use ".$user.'+'.$pass.'+1');	
			else
				//die('Login mechnanism not specified!');	
				return false;
			
            return ($login);			
		}
		
		return false;
	}	
	
	protected function inc_wizard_step() {
	    //echo $this->wstep;
	    if ($this->wstep < count($this->wdata)) {
			$this->wstep+=1;
			SetSessionParam('wstep', $this->wstep);
			
			if ($_POST) {
				$step_var_name = null;
				$step_post_value = $this->get_step_post($step_var_name);
				//echo $step_var_name;
				//save post value into mem wiz array
				if (($step_var_name) && (array_key_exists($step_var_name, $this->wdata))){
                    //echo ':true';
                    $this->write_wizard_element($step_var_name, $step_post_value, true);
				}
			}
		}
	}
	
	protected function dec_wizard_step() {
	
	    if ($this->wstep>0) {
			$this->wstep-=1;
			SetSessionParam('wstep', $this->wstep);
		}
	}	
	
	protected function wizard_step() {
	   
	    //..change posted app (old array)
		/*$domain = 'http://' . $this->posted_appname . '.' . $this->rootdomain ;
		$email = $this->posted_mail ? $this->posted_mail : $this->posted_appname.'@'.$this->rootdomain ;
		$title = $this->posted_appname;			
		
		$data = array('DOMAIN-NAME'=>$domain,'E-MAIL'=>$email,
		              'TITLE'=>$title,'SUBTITLE'=>'#your-subtitle',
		              'META-DESCRIPTION'=>'#your-description','META-KEYWORDS'=>'#your-keywords',
					  'FEEDBURNER'=>'#feedburner-url','TWITTER'=>'#tweeter-url','FACEBOOK'=>'#facebook-url','GOOGLEPLUS'=>'#googleplus-url',
					  'FLICKR'=>'#flickr-url','VIMEO'=>'#viemo-url','LINKEDIN'=>'#linkedin-url','DELICIOUS'=>'#delicious-url',
					  'FBLIKEBOX-PLUGIN'=>'#fb-plugin','FLICKRBADGE-PLUGIN'=>'#flickr-plugin');	
		
				
		//$ok = $this->change_data('cp/html', $data);	   
		*/
		
		//..change domain ? (www.name.gr can be bind here...)..or skip 
		//...change mail ? (mailform can be changed here ?...)..or skip
		//..change logo (search for logo.png in images folder?)..or skip.....<<<<<<<<
		//..change title subttile ..or skip
		//..change/add meta keyword if not exist as html tag...)..or skip
		//..change/add meta description if not exist as html tag...)..or skip
		//add social media..one by one..explaining and add... or skip...
		
		//....
		
		//html file by html file...edit ....
		//......
		
		//image upload....
		//.....
		
		//cp commands win explain step by step...
		//.....dashboard....
		
		//echo 'current step:'.$this->wstep;
		$step_index = 0; //0 is welcome screen
		//print_r($this->wdata);
		foreach ($this->wdata as $stepname=>$stepaction) {
			//echo $stepname,':',$stepaction,'>';
  
			if (($stepaction) && ($step_index==$this->wstep)) {//if step val exist
			    //echo $stepname,':',$stepaction,'>';
				$ret = $this->render_step($stepname, $stepaction);
				if ($ret) 
				    return ($ret); //else continue....other steps...
				//else
				    //$this->wstep += 1;//virt inc..
                    //$step_index += 1;				
			}
			else
			    $step_index += 1;
		}
		
		//finilizing wizard exist screen...
		$ret = $this->final_step();
		return ($ret);
	}
	
	//render wizard step
	protected function render_step($name=null, $value=null) {
		if (!$name) return ('no named step!');
		
		switch ($name) {
		    case 'dashboard' : //explain dashboard..if permited
			                  $myvalue = $this->environment['DASHBOARD'] ? $value : false;
			                  if ($myvalue) 
			                     $ret = $this->dashboard_step();
							  else
                                 $ret = false; //..continue steps 							  
			                  break;		
		
		    case 'awstats' : //explain awstats..if permited
			                  $myvalue = $this->environment['AWSTATS'] ? $value : false;
			                  if ($myvalue) 
			                     $ret = $this->awstats_step();
							  else
                                 $ret = false; //..continue steps 							  
			                  break;			
		
		    case 'upload'  : //upload files/pics..if permited
			                  $myvalue = $this->environment['CKFINDER'] ? $value : false;
			                  if ($myvalue) 
			                     $ret = $this->upload_step();
							  else
                                 $ret = false; //..continue steps 							  
			                  break;		
		
		    case 'edithtml' : //edit html files..if permited
			                  $myvalue = $this->environment['EDITHTML'] ? $value : false;
			                  if ($myvalue) 
			                     $ret = $this->edit_step();
							  else
                                 $ret = false; //..continue steps 							  
			                  break;
		
		    case 'wizard':	 //always step 0
							if ($value) //welcome screen
								$ret = $this->welcome_step();	  
							else //wizard is off (completed)
								$ret = $this->completed_step();	
							break; 							  
						   
			default      :  //if (($value) && ($value!='disabled')) //..problem bypass counters
								$ret = $this->default_step($name, $value);
							//else
                              //  $ret = false;	 //..continue steps 							
		}
		
		return ($ret);
	}
	
	//dashboard step
	protected function dashboard_step() {	
	    $site_url = $this->url;
		$sitecp_url = 'cp.php?editmode=1';
		$message = $this->msg ? $this->msg .'<br/>' : null;
	
	    if (GetSessionParam('LOGIN')!='yes') {
		    
            /*$rightframe_url	= "cpmdbrec.php";//?turl=" . urlencode(base64_encode($turl)) . '&encoding='.$this->encoding;// . '&htmlfile=' . $htmlfile;				
            $onclick = null;//"dhtmlwindow.open(\"rightframe\", \"iframe\", \"$rightframe_url\", \"Menu\", \"width=250px,height=450px,resize=1,scrolling=1,center=1\", \"recal\")";//"top.location.href='" . $this->url . "'";		
			$link = "<a href='$site_url' target='mainFrame' onClick='$onclick'>".localize('_login',$lan)."</a>";
			$message = '<br/>Press here to login:' . $link;	*/		
			
			//login form
			$username = $this->read_wizard_element('E-MAIL');
			$ret =  <<<FORMEOF
							<form name="wizdefstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwizlogin" />
                                <h5>$message</h5> 								
                                <h3 class="grid_3 alpha omega"><strong>Username</strong></h3>
					            <input class="grid_4 alpha omega" name="cpuser" type="text" id="username" value="$username"></input>
					            <h3 class="grid_3 alpha omega"><strong>Password</strong></h3>
					            <input class="grid_4 alpha omega" name="cppass" type="password" id="password" value=""></input>
									<div class="msg grid_4 alpha omega aligncenterparent"></div>      
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save"	title="Next" name="Submit" value="Next">
									</input>
								    </div>
							</form>
<script type="text/javascript">
	$(document).ready(function() {
		$("#username").focus();
	});
</script>							
FORMEOF;
		}
	    else {
			$link = "<a href='$sitecp_url' target='mainFrame'>".localize('_dashboard',$lan)."</a>";
			$message = '<br/>Press here to login:' . $link;			
		
	
			$ret = '<form name="wizdashboardstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwiznext" />  
                                    '.$message.' 								
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save" title="Next"	name="Submit" value="Next">
									</input>
								    </div>
							</form>';	
		}					
				
		return ($ret);				
	}		
	
	//awstats step
	protected function awstats_step() {	
		$link = "<a href='cgi-bin/awstats.php' target='mainFrame'>".localize('_webstatistics',$lan)."</a>";
		$message = '<br/>Press here to view stats:' . $link;	
	
		$ret = '<form name="wizawstatsstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwiznext" />  
                                    '.$message.' 								
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save" title="Next"	name="Submit" value="Next">
									</input>
								    </div>
							</form>';	
				
		return ($ret);				
	}	
	
	//upload step
	protected function upload_step() {	
		$link = "<a href='cpmckfinder.php' target='mainFrame'>".localize('_ckfinder',$lan)."</a>";
		$message = '<br/>Press here to upload files:' . $link;	
	
		$ret = '<form name="wizuploadstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwiznext" />  
                                    '.$message.' 								
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save" title="Next"	name="Submit" value="Next">
									</input>
								    </div>
							</form>';	
				
		return ($ret);				
	}
	
	//edit html step
	protected function edit_step() {	
		$message = null;
        $encoding = $this->encoding;		
		
	    //initialize.. read files..retutrn count of files...
        $hfiles = $_SESSION['weditfiles'] ? count($_SESSION['weditfiles']) : $this->read_html_files(true);
		
		$ret = 'edit:';
		
	    if ($hfiles) {	
		  foreach ($this->weditfiles as $i=>$file) {

            $plainfile	= str_replace('.html','', $file);	
		    $phpfile = str_replace('.html','.php', $file);
		    $htmlfile = urlencode(base64_encode($file));
		
		    $htmleditlink = "<a href='cpmhtmleditor.php?cke4=1&encoding=$encoding&editmode=1&htmlfile=$htmlfile' target='mainFrame'>".
			                $plainfile .
							"</a>"; 
		   	$message .= '<br/>edit:' . $htmleditlink;
		  }
		
		  $ret .= '<form name="wizeditstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwiznext" />  
                                    '.$message.' 								
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save" title="Next"	name="Submit" value="Next">
									</input>
								    </div>
							</form>';
        }
        else
          $ret .= 'no files to edit...';		
		  
		return ($ret);
    }	
	
	//default step read array value and change it
	protected function default_step($name=null, $value=null) {
		$message = null;
		$loname = strtolower($name);
		$cmd = 'cpwiznext'; //goto next step..check post
		
		//..id stepfield to focus (jquery) when next step....
		$input_field = '<h3 class="grid_3 alpha omega"><strong>'.$loname.'</strong></h3>'.
					   '<input class="grid_4 alpha omega" name="'.$name.'" type="text" id="stepfield" value="'.$value.'"></input>';		
		
		$form = <<<EOF
							<form name="wizdefstep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="$cmd" /> 
								    $input_field
                                    $message 
									<div class="msg grid_4 alpha omega aligncenterparent"></div>      
									<div class="grid_4 alpha omega aligncenterparent">
									<br/>
									<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save"	title="Next" name="Submit" value="Next">
									</input>
								    </div>
							</form>
<script type="text/javascript">
	$(document).ready(function() {
		$("#stepfield").focus();
	});
</script>							
EOF;
		
		return $form;
	    //$ret = $name.'='.$value;	
	    //$ret = 'default step:';		
		//return ($ret);		
	}
	
	//render wizard final step
	protected function final_step() {
	    //..collect data adn save.... 
		/*
		$domain = $this->read_wizard_element('DOMAIN-NAME');//  $this->url;
		$email = $this->read_wizard_element('E-MAIL');//paramload from SMTPMAIL,user..
		$title = $this->read_wizard_element('TITLE');			
		$title = $this->read_wizard_element('SUBTITLE');
		//basic array
		$data = array('DOMAIN-NAME'=>$domain,'E-MAIL'=>$email,
		              'TITLE'=>$title,'SUBTITLE'=>$subtitle);
		//extended (optional array)			  
		$sdata = array(			  
		              'META-DESCRIPTION'=>'#your-description','META-KEYWORDS'=>'#your-keywords',
					  'FEEDBURNER'=>'#feedburner-url','TWITTER'=>'#tweeter-url','FACEBOOK'=>'#facebook-url','GOOGLEPLUS'=>'#googleplus-url',
					  'FLICKR'=>'#flickr-url','VIMEO'=>'#viemo-url','LINKEDIN'=>'#linkedin-url','DELICIOUS'=>'#delicious-url',
					  'FBLIKEBOX-PLUGIN'=>'#fb-plugin','FLICKRBADGE-PLUGIN'=>'#flickr-plugin');	
			
		//$ok = $this->change_data('cp/html', $data);		
	    */
		
		/*
	    $ret = 'Final step:<br>';
		$ret .= implode('<br>',$this->wdata);	
        */
		//form... when submit cpwizsave... 
		$ret .= '<form name="wizlaststep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwizsave" />     
									<div class="grid_4 alpha omega aligncenterparent">
										<br/>
										<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save"
											title="Finish"
											name="Submit" value="Finish">
										</input>
								    </div>
							</form>';			
		
		return ($ret);
	}	

	//render wizard welcome step
	protected function welcome_step() {	
	
	    //$ret = 'Welcome step:';
		
		$ret .= '<form name="wizlaststep" method="post" class="sign-up-form" action="">
								<input type="hidden" name="FormAction" value="cpwiznext" />     
									<div class="grid_4 alpha omega aligncenterparent">
										<br/>
										<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save"
											title="Start"
											name="Submit" value="Start">
										</input>
								    </div>
							</form>';	
							
		return ($ret);	
	}
	
	//render wizard completed step
	protected function completed_step($msg=null) { 
	    $message = $msg ? $msg : null;
        $onclick = "top.location.href='" . $this->url . "'";
	    $jlink =  "<a href=\"#\" onClick=\"$onclick\">" . localize('_exit',$lan) . "</a>";	
	
	    //$ret = 'Completed step:' . $msg;
		//$ret .= $jlink;
		
		$ret = $message;
		$ret .= '<form name="wizlaststep" method="post" class="sign-up-form" action="">  
									<div class="grid_4 alpha omega aligncenterparent">
										<br/>
										<input type="submit" class="call-out grid_2 push_2 alpha omega" alt="Save"
											title="exit"
											name="Submit" value="Exit" onClick="'.$onclick.'">
										</input>
								    </div>
							</form>';			
		
		return ($ret);	
	}
	
	//read the post and return the data enetered as ret, 
	//array field-name as step-var when one element else ret= array
    protected function get_step_post(&$step_var) {
	    if (empty($_POST)) return false;
		
		//extract submit and FormAction
		array_shift($_POST);//FormAction
		array_pop($_POST); //Submit
		
		if (count($_POST)>1) {//if multiple values
			$ret = (array) $_POST; //return array
			//print_r($_POST);
		}	
		else {//return last element
		    $step_var = key($_POST); //save field name..
		    $ret = array_pop($_POST);
			//echo $ret;
		}	
        		
		return ($ret);	
    }

	public function get_step_title($textpath=null) {
	    $mypath = $textpath ? $textpath : $this->install_root_path;	
	    $default_ret = 'Welcome';		
		$step_index = $this->wstep ? $this->wstep : '0';
		$step_file = str_replace('.ini','.text'.$step_index, $this->wizardfile);
		
		//fetch step title =first line
		$ret = (is_readable($mypath . $step_file)) 
		     ? array_shift(@file($mypath . $step_file)) 
			 : $default_ret;		
		
		return ($ret);	
    }
	
	public function get_step_text($textpath=null) {
	    $mypath = $textpath ? $textpath : $this->install_root_path;
	
	    $default_ret = "<h5>Welcome</h5>
				<br/>
				<p>
				</p><br /> <br />";
				
		$step_index = $this->wstep ? $this->wstep : '0';
		$step_file = str_replace('.ini','.text'.$step_index, $this->wizardfile);
		
		//echo $mypath . $step_file;
		
		//fetch step text...
		if (is_readable($mypath . $step_file)) {
		
		    //$ret = file_get_contents($mypath . $step_file) ;
			$text = @file($mypath . $step_file);
			$header = "<h5>" . array_shift($text) . "</h5>";
			$body = "<p>" . implode('<br/>',$text). "</p><br/><br/>";
			$ret = $header . $body;
		}
		else
		    $ret = $default_ret;	
	
				
		return ($ret);
	}	
	
	//read a prev input arg from memory and return the arg asked, 	
    public function get_wizard_arg($arg=null) {
	    if (!$arg) return false;
		
		//print_r($_POST); //no post...
		//echo $arg,':',$_POST[$arg];
		//$ret = $_POST[$arg];
		
		$ret = $this->read_wizard_element($arg);
		//echo $ret;
	    return ($ret);
    }		

	//read wiz file
	protected function read_wizard_file($save_session=false) {
	
		$mywizfile = $this->prpath . $this->wizardfile;
		
		if (is_readable($mywizfile)) {	
			$ret = @parse_ini_file($mywizfile ,false, INI_SCANNER_RAW);	
			//echo 'read wfile:';
			//if (!empty($ret) //to not re-read at constuct..
			if ($save_session)
				SetSessionParam('wdata', $ret); 
		}
		//else
		  //echo "not a w file!($mywizfile)";	
		return ($ret);
    }	
	
	//write wiz file, DISABLE WIZARD IF TRUE..
	protected function write_wizard_file($status=false) {
	    $ok = false;
		$mywizfile = $this->prpath . $this->wizardfile;	   
		
		if (is_readable($mywizfile)) {			
			$onoff = $status ? 1 : 0;		
		
			//final set of wiz status
			$this->write_wizard_element('wizard',$onoff);
			//save wizard file			
			foreach ($this->wdata as $var=>$val) {
				$myiniwizard .= $var .'='.$val ."\r\n";
			} 
			$ok = @file_put_contents($mywizfile ,$myiniwizard);		
		
			//rename file to not re-show when 2nd time in cp
			if ($status==false) {
				$ok = @rename($mywizfile, str_replace('.ini','._ni',$mywizfile));
			}
		
		}
		//else
		  //echo "not a w file!($mywizfile)";		

        return ($ok);	
    }	
	
	
	//modify wiz array in memory
	protected function write_wizard_element($var=null, $val=null, $saveit=false) {
	    if (!$var) return false;
	    if (!$val) $val = '0';
		
		$this->wdata[$var] = $val;
		
		if ($saveit) //save next wiz step...
			SetSessionParam('wdata', $this->wdata); 
		
		return ($val);
	}
	
	//read wiz element
	protected function read_wizard_element($var=null) {
	    if (!$var) return false;
		
		$ret = $this->wdata[$var];
		return ($ret);
	}	
	
	//DISABLED, CALL modify_tags_inhtml_dir directly
	//change @keywords@...just call modify_data_dir..
	//OLD::change_data
 	function change_html_tags() {
		
		//$data = $this->wdata;
		//pick old ini file before save...
		$old_data = $this->read_wizard_file(false);
	    //print_r($old_data);
		
	    if (!empty($this->wdata)) {
			
		    foreach ($this->wdata as $name=>$key) {
			
			   $ret .=  '>>>'.$name .'='.$key;
			   
			   if (is_array($old_data)) {//(isset($old_data[$name]))
			     $old_value = isset($old_data[$name]) ? $old_data[$name] : null; 
			     $ret .= $old_value ? " replacing $old_value<br>" : "<br>";
			   }	 
			   else
			     $ret .= '<br>';
			}
            //ENABLE TAG REPLACEMENTS...CALIT DIRECTLY
			//$ret = $this->modify_tags_inhtml_dir();//$data, $old_data, true);
			return ($ret);
		}
		return false;
	}

	//modify .html files @keywords@
    function modify_tags_inhtml_dir() {
	    $tags_not_to_procced = array('wizard','MULTILANGUAGE','LANGUAGE','ADD_DATA');
	    //echo '<pre>';
	    //print_r($this->wdata); //current values
		//pick old ini file before save...
		$old_data = $this->read_wizard_file(false);	
        //print_r($old_data);	
        //print_r($this->wdata); //mod values	
        //echo '</pre>';		
		$sourcedir = $this->prpath . '/html/';// . $dirname;
		$ok = null;
	    $fmeter = 0;
		$nometer = 0;
		$ret .=  '<hr>'.$sourcedir.':<br>';		
		
	    if (!is_dir($sourcedir)) {
		   $ret .= '<br>Error, invalid sourcedir! '.$sourcedir;
		   return ($ret);//false		 
		}
		  
        $mydir = dir($sourcedir);
        while ($fileread = $mydir->read ()) { 
	
           if (($fileread!='.') && ($fileread!='..') && (!is_dir($sourcedir.'/'.$fileread)) ) { 
		   
		   	  $patterns = array(); //reset
		      $replacements = array(); //reset
			  
			  if ((stristr($fileread,'.htm')) && (substr($fileread,0,2)!='cp'))  {//<<cpfilename restiction
				$fdata = @file_get_contents("$sourcedir/$fileread");
				
				foreach ($this->wdata as $name=>$key) {
				  /*  if (isset($old_data[$name])) //prev modified value exist
						$myname = $old_data[$name]//'@'.strtoupper($name).'@';
					else
						$myname = '@'.strtoupper($name).'@';	*/				
					
                    //TAGS TO BYPASS...					
					if (!in_array($name,$tags_not_to_procced)) {
					  //continue;
					
					  $myname = '@'.strtoupper($name).'@';
					  //$fdata = str_replace($myname,$key,$fdata);
					
					  if (stristr($fdata, $myname)) {//init values
					    //$ret .= 
						//echo '<br>INIT:'.$name.'='.$key;
						$fdata = str_replace($myname,$key,$fdata);
					  }
					  elseif ((is_array($old_data)) && ($old_value = $old_data[$name])) { 
					    //$ret .= 
						//echo '<br>OLD VALUE:'.$old_value.'='.$key;
					    //$fdata = str_replace($old_value,$key,$fdata);
						
						//incase of name. or name@ is subdomain or email...
						if (!strstr($old_value, '/')) {//no preg /
							$patterns[] = "/{$old_value}(?![@.])/"; //..(?![@.])/not trailing at @ and . 
							$replacements[] = $key;
						}
					  } 

                    }//TAGS TO BYPASS 					
				}

				//preg...incase of name. or name@ is subdomain or email...
				/*$string = 'The quick brown fox jumped over the lazy dog.';
				$patterns = array();
				$patterns[0] = '/quick/';
				$patterns[1] = '/brown/';
				$patterns[2] = '/fox/';
				$replacements = array();
				$replacements[2] = 'bear';
				$replacements[1] = 'black';
				$replacements[0] = 'slow';
				echo preg_replace($patterns, $replacements, $string);
				*/				
				if ((!empty($patterns)) && (!empty($replacements))) {
				    //echo '<pre>';
				    //print_r($patterns);
					//print_r($replacements);
					//echo '</pre>';
					$preg_fdata = preg_replace($patterns, $replacements, $fdata);
					if ($preg_fdata) 
						$ok = @file_put_contents("$sourcedir/$fileread", $preg_fdata);
					else //as is	
						$ok = @file_put_contents("$sourcedir/$fileread", $fdata);
				}
				else
					$ok = @file_put_contents("$sourcedir/$fileread", $fdata);
				//$ret .=  '<br>modify:'.$sourcedir.'/'.$fileread.'<br>'; 
				
				//read html files to edit (weditfiles array).....automated at end..
				//$this->weditfiles[] = $fileread;
				
				if ($ok) $fmeter+=1; 
                    else $nometer+=1;  				
			  }
           }
        }
        $mydir->close();	
		//.=
		$ret = /*$fmeter ?*/ $fmeter . ' files affected, ';// : '0 files affected<br/>';
		$ret .= $nometer . ' files not affected<br/>';
		
		return ($ret);
	}
	
	//read html files to edit (weditfiles array).....
    function read_html_files($save_session=false) {
		$sourcedir = $this->prpath . '/html/';
	    $fmeter = 0;	
		
	    if (!is_dir($sourcedir)) 
		   return (false);		 

		  
        $mydir = dir($sourcedir);
        while ($fileread = $mydir->read ()) { 
	
           if (($fileread!='.') && ($fileread!='..') && (!is_dir($sourcedir.'/'.$fileread)) ) { 
			  if ((stristr($fileread,'.htm')) && (substr($fileread,0,2)!='cp'))  {//<<cpfilename restiction

				$this->weditfiles[] = $fileread;
				$fmeter+=1; 				
			  }
           }
        }
        $mydir->close ();
		
		if ($save_session)
		    SetSessionParam('weditfiles', $this->weditfiles); 		
		
		$ret = $fmeter ? $fmeter : null;
		return ($ret);
	}	

	//read environment cp file
	protected function read_env_file($save_session=false) {
		$myenvfile = $this->prpath . 'cp.ini';
		$ret = @parse_ini_file($myenvfile ,false, INI_SCANNER_RAW);	

		if ($save_session)
		    SetSessionParam('env', $ret); 
		
		return ($ret);
    }	

	//write environment cp file
	protected function write_env_file($module,$mvalue=1,$reload_env_session=false) {
	    if (!$module) return false;
        $myenvfile = $this->prpath . 'cp.ini';
        $newmodule = strtoupper($module);
		$append_string = $newmodule.'='.$mvalue;
   
        //backup cp file
		@copy($myenvfile, str_replace('.ini','._ni',$myenvfile));
		
		//check for existing string
		$initext = @file_get_contents($myenvfile);
		
		if (stristr($initext,$newmodule.'=1')) {//is enabled
		    //replace cp.ini
			$ret = @file_put_contents($myenvfile, str_replace($newmodule.'=1',$newmodule.'='.$mvalue,$initext));
		}
		elseif (stristr($initext,$newmodule.'=0')) {//is disabled
		    //replace cp.ini
			$ret = @file_put_contents($myenvfile, str_replace($newmodule.'=1',$newmodule.'='.$mvalue,$initext));		
		}
		elseif (stristr($initext,$newmodule.'=')) {//is disabled ..has no value
		    //replace cp.ini
			$ret = @file_put_contents($myenvfile, str_replace($newmodule.'=1',$newmodule.'='.$mvalue,$initext));		
		}		
		else
			//append cp.ini
			$ret = @file_put_contents($myenvfile, "\r\n" . $append_string, FILE_APPEND | LOCK_EX);
			
		if ($reload_env_session) //reload environment in session	
            $this->environment = $this->read_env_file(true);
			
        return ($ret);			
    }
	
	//change / add htuser ......
    function add_cp_htaccess() {
  
		$htpass_path = $this->prpath;// . '/'; 
		$htaccess_path = $this->app_location . '/cp/'; 
		$this->log .=   '<br>HTACCESS PATH:'. $htpass_path.'>'.	$htaccess_path;	
		
		if (is_dir($htaccess_path)) {
		
			$htpass_file = $htpass_path . 'htpasswd-'.$this->posted_appname;//per app
			$htaccess_file = $htaccess_path . '.htaccess';
		    $this->log .=  '<br>HTACCESS FILE:'. $htpass_file.'>'.	$htaccess_file;	
	    }
		else
		    return false;
			
		// Initializing class htaccess as $ht
		$ht = new htaccess($htaccess_file, $htpass_file);//"/var/www/.htaccess","/var/www/htpasswd");
		// Adding user
		$ht->addUser($this->posted_appname, $this->posted_password);
		
		// Changing password for User
		//$ht->setPasswd("username","newPassword");
		// Getting all usernames from set password file
		$users = $ht->getUsers();
		for($i=0;$i<count($users);$i++){
			$this->log .= $users[$i];
		}
		// Deleting user
		//$ht->delUser("username");
		// Setting authenification type
		// If you don't set, the default type will be "Basic"
		$ht->setAuthType("Basic");
		// Setting authenification area name
		// If you don't set, the default name will be "Internal Area"
		$ht->setAuthName("Control Panel");
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		// finally you have to process addLogin()
		// to write out the .htaccess file
		$ht->addLogin();
		// To delete a Login use the delLogin function
		//$ht->delLogin();	
		
		return true;
	}	
	
	//write wiz file, DISABLE WIZARD IF TRUE..
	protected function reinit_wizard($status=false) {
	    $ok = false;
		$mywizfile = $this->prpath . $this->wizardfile;	   
		$mywizfile_disabled = $this->prpath . str_replace('.ini','._ni',$this->wizardfile);

		if (is_readable($mywizfile_disabled)) {
		    
			//set wizard=1
			$wfd = str_replace('wizard=0','wizard=1',@file_get_contents($mywizfile_disabled));
			$setw = @file_put_contents($mywizfile_disabled, $wfd);
			
			//rename ._ni => .ini
			$ok = @rename($mywizfile_disabled, $mywizfile);		
			
		    if (($setw) && ($ok)) {
				//final set of wiz status
				//$this->write_wizard_element('wizard',$onoff);
			    //reset vars
				$this->environment = $_SESSION['env'] = null;
				$this->wdata = $_SESSION['wdata'] = null; 		
				$this->wstep = $_SESSION['wstep'] = 1;//null ;
				$this->weditfiles = $_SESSION['weditfiles'] = null;
				
				//kill session and re-enter
				//session_destroy();
			}
		
		}
		//else
		  //echo "not a w file!($mywizfile)";		

        return ($ok);	
    }

 	function local_modify_config_file($file,$keyapp=null,$keyval=null) {
		if ((!$keyapp) || (!$keyval)) return false;

		$mybackupfile = $this->prpath . '/' . str_replace('.','._',$file);
	    $myfile = $this->prpath . '/'. $file;
		if (!is_readable($myfile)) return false;
		
		$data = str_replace($keyapp,$keyval,@file_get_contents($myfile));
		//backup
		if ((@copy($myfile, $mybackupfile)) && ($data)) {

          if ($fp = @fopen ($myfile , "w")) {
            fwrite ($fp, $data);
            fclose ($fp);   			   
			return (true);
	      }
		}
		return (false);	  	
	}		
	
	protected function initialize_db_data() {
	    $db = GetGlobal('db');
		$log = null;
		$init_db = ($this->wdata['ADD_DATA']=='yes') ? true : false;
		if ($init_db===false) {
			$log =  '<br>Add db init data canceled.';		
		    return ($log);
		}	
		
		$insSQL = "INSERT INTO products (id,code1,code2,code3,code4,code5,itmname,itmactive,itmfname,itmremark,itmdescr,itmfdescr,sysins,sysupd,uniida,uniname1,uniname2,uni1uni2,uni2uni1,ypoloipo1,ypoloipo2,price0,price1,cat0,cat1,cat2,cat3,cat4,active,price2,pricepc,p1,p2,p3,p4,p5,resources,weight,volume) VALUES
(1, NULL, NULL, '001', NULL, NULL, 'Προιόν Α', 1, 'My product', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'products', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'company', NULL, NULL, 'Σχετικα με μας', 1, 'About Us', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'about', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '_fp1', NULL, NULL, 'Πρώτη σελιδα', 1, 'Front page', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 'frontpage', '', '', NULL, NULL, 101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
		$ret = $db->Execute($insSQL,1);	
		$log .=  '<br>Products added.';
		
		$insSQL = "INSERT INTO categories (id,ctgid,ctgoutline,ctgoutlnorder,cat1,cat2,cat3,cat4,cat5,cat01,cat02,cat03,cat04,cat05,cat11,cat12,cat13,cat14,cat15,active,view,search) VALUES
(1, 1, NULL, NULL, 'ITEMS', 'products', '', '', NULL, 'ITEMS', 'Products', '', '', NULL, 'ITEMS', 'Προιοντα', '', '', NULL, 1, 1, 1),
(2, 0, NULL, NULL, 'ITEMS', 'about', '', '', NULL, 'ITEMS', 'About', '', '', NULL, 'ITEMS', 'about', '', '', NULL, 1, 1, 1),
(3, 3, NULL, NULL, 'ITEMS', 'frontpage', '', '', NULL, 'ITEMS', 'Frontpage', '', '', NULL, 'ITEMS', '1ησελιδα', '', '', NULL, 1, 1, 1)";
		$ret = $db->Execute($insSQL,1);	
		$log .=  '<br>Categories added.';		
		
		$insSQL = "INSERT INTO pattachments (id,code,type,lan,data) VALUES
(1, 'products', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>'),
(2, '001', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Proin euismod mattis elit quis rutrum. Suspendisse facilisis scelerisque arcu in ornare. Vestibulum nibh nunc, hendrerit eget nulla ac, rhoncus volutpat lacus. Proin adipiscing lectus ac enim viverra pellentesque. Quisque dapibus euismod erat in imperdiet. Aliquam suscipit scelerisque dignissim. Donec varius condimentum nunc vitae viverra. Cras tincidunt vestibulum quam, eget dapibus arcu venenatis in. Integer fermentum urna a mauris viverra, in aliquet justo feugiat. Aliquam urna odio, dapibus at fringilla sit amet, faucibus sed metus. Curabitur dignissim eros eget leo dictum, at mollis lacus venenatis. In porta egestas est.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras interdum ante nunc, id aliquam est pretium vel. Sed tincidunt, lectus nec porta viverra, nisl tellus pulvinar mi, a semper nisl erat non est. Suspendisse ipsum odio, dignissim eget erat sit amet, mollis faucibus massa. Duis consectetur lectus auctor, tempor neque et, dapibus nunc. Donec ut velit tempor orci convallis ullamcorper. Nullam et est id sapien varius tristique. Suspendisse cursus eros consectetur lectus ullamcorper, vel tristique tellus vestibulum. Aliquam congue imperdiet lacinia. Integer eu magna neque. Nam pulvinar venenatis orci eget euismod. Vivamus facilisis mi at velit dictum euismod. Praesent sollicitudin adipiscing arcu at scelerisque. Maecenas volutpat et augue nec aliquet. Pellentesque at tempor dui. Etiam non auctor ligula, ac posuere massa. Nulla facilisi.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aliquam nec vehicula metus, et porttitor nunc. Suspendisse vestibulum scelerisque ligula a venenatis. In consequat, velit in consectetur mollis, odio diam tincidunt metus, vitae tincidunt mauris elit sit amet mauris. Cras tincidunt fermentum diam, eu tristique leo pellentesque vel. Quisque mollis, tellus ac auctor consequat, ipsum diam tincidunt elit, ac commodo magna enim quis nulla. Sed ut est nisl. Sed posuere vel turpis eu commodo. Curabitur feugiat tortor vel odio congue, nec feugiat lectus semper.</div>'),
(3, 'company', '.html', 1, '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae mattis mi, quis imperdiet arcu. Nulla egestas mauris id velit ullamcorper aliquam. Proin faucibus volutpat justo, non faucibus massa dapibus ut. Sed mauris neque, aliquam vitae convallis eget, feugiat quis tortor. Suspendisse eleifend, nisl quis consequat tincidunt, erat nisi fringilla nisl, adipiscing venenatis arcu nibh in magna. Mauris sit amet lectus adipiscing, mattis augue a, adipiscing felis. Fusce tellus orci, venenatis in libero ac, molestie aliquam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras sit amet fringilla tellus. Morbi quis facilisis sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quis elit in elit condimentum porta vitae vitae ante. Aenean id elit odio. Integer ut adipiscing ligula. Sed eget justo euismod ante auctor mollis ac ac massa. Nam pellentesque lectus sed lobortis pulvinar. Phasellus condimentum dolor vitae venenatis consequat. Maecenas sit amet tincidunt justo. In laoreet nunc erat, a volutpat felis blandit nec.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Proin euismod mattis elit quis rutrum. Suspendisse facilisis scelerisque arcu in ornare. Vestibulum nibh nunc, hendrerit eget nulla ac, rhoncus volutpat lacus. Proin adipiscing lectus ac enim viverra pellentesque. Quisque dapibus euismod erat in imperdiet. Aliquam suscipit scelerisque dignissim. Donec varius condimentum nunc vitae viverra. Cras tincidunt vestibulum quam, eget dapibus arcu venenatis in. Integer fermentum urna a mauris viverra, in aliquet justo feugiat. Aliquam urna odio, dapibus at fringilla sit amet, faucibus sed metus. Curabitur dignissim eros eget leo dictum, at mollis lacus venenatis. In porta egestas est.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cras interdum ante nunc, id aliquam est pretium vel. Sed tincidunt, lectus nec porta viverra, nisl tellus pulvinar mi, a semper nisl erat non est. Suspendisse ipsum odio, dignissim eget erat sit amet, mollis faucibus massa. Duis consectetur lectus auctor, tempor neque et, dapibus nunc. Donec ut velit tempor orci convallis ullamcorper. Nullam et est id sapien varius tristique. Suspendisse cursus eros consectetur lectus ullamcorper, vel tristique tellus vestibulum. Aliquam congue imperdiet lacinia. Integer eu magna neque. Nam pulvinar venenatis orci eget euismod. Vivamus facilisis mi at velit dictum euismod. Praesent sollicitudin adipiscing arcu at scelerisque. Maecenas volutpat et augue nec aliquet. Pellentesque at tempor dui. Etiam non auctor ligula, ac posuere massa. Nulla facilisi.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aliquam nec vehicula metus, et porttitor nunc. Suspendisse vestibulum scelerisque ligula a venenatis. In consequat, velit in consectetur mollis, odio diam tincidunt metus, vitae tincidunt mauris elit sit amet mauris. Cras tincidunt fermentum diam, eu tristique leo pellentesque vel. Quisque mollis, tellus ac auctor consequat, ipsum diam tincidunt elit, ac commodo magna enim quis nulla. Sed ut est nisl. Sed posuere vel turpis eu commodo. Curabitur feugiat tortor vel odio congue, nec feugiat lectus semper.</div>'),
(4, '_fp1', '.html', 1, '<p>\r\n	This is an example page. Its different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pina coladas. (And gettin\' caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(5, '_fp1', '.html', 0, '<p>\r\n	This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pina coladas. (And gettin\' caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(6, 'company', '.html', 0, '<p>\r\n	This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pina coladas. (And gettin\' caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>'),
(7, '001', '.html', 0, '<p>\r\n	This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pina coladas. (And gettin” caught in the rain.)</p>\r\n</blockquote>\r\n<p>\r\n	…or something like this:</p>\r\n<blockquote>\r\n	<p>\r\n		The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>\r\n</blockquote>\r\n<p>\r\n	As a new WordPress&nbsp;user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!</p>');";
		$ret = $db->Execute($insSQL,1);	
		$log .=  '<br>pattachments added.';		
		
		return ($log);
	}
	
	protected function initialize_language() {
	    $dlang = ($this->wdata['LANGUAGE']>0) ? $this->wdata['LANGUAGE']-1 : '0';
		$multilang = ($this->wdata['MULTILANGUAGE']=='yes') ? '1' : '0';
		$ret = null;
		
	    /* ..config.ini set
	    dlang=0;1;
        multilang=1 
	    */
		
		/*if (defined('RCCONFIG_DPC')) {
			$a = GetGlobal('controller')->calldpc_method('rcconfig.setconf use shell.multilang+'.$multilang);
			 
			$ret .= ($a) ? "<br>[myconfig.ini]Configuration saved!('-multilang')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-multilang')";	
		    
			$b = GetGlobal('controller')->calldpc_method('rcconfig.setconf use shell.dlang+'.$dlang);
			
			$ret .= ($b) ? "<br>[myconfig.ini]Configuration saved!('-dlang')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-dlang')";				
		}*/ //..no repeat shell into myconfig!!!
		
	     
	    $e = $this->local_modify_config_file("config.ini",
		                                     array('dlang=','multilang='),
											 array("dlang=$dlang;","multilang=$multilang;")
											 );
		if (!$e) 
			$ret = "<br>[config.ini]Configuration can't saved!('-init-lan')";	
		else
		    $ret = "<br>[config.ini]Configuration saved!('-init-lan')";	
			
		return ($ret);
	}	
	
	//copy wizard values to myconfig index section
	protected function initialize_myconfig() {
		$ret = false;	
        /*$title = $this->wdata['TITLE'] ? $this->wdata['TITLE'] : 'XiX';
        $subtitle = $this->wdata['SUBTITLE'] ? $this->wdata['SUBTITLE'] : 'a numerical quantity but not order';
        $address = $this->wdata['ADDRESS'] ? $this->wdata['ADDRESS'] : 'Allatini 27 St, 54250, Thessaloniki';
		$tel1 = $this->wdata['TEL1'] ? $this->wdata['TEL1'] : 'T_:0030 2310 950 155';
		$tel2 = $this->wdata['TEL2'] ? $this->wdata['TEL2'] : 'M_:0030 6937 367 879';
	    $latitude = $this->wdata['LATITUDE'] ? $this->wdata['LATITUDE'] : '40.590916';
		$longitude = $this->wdata['LONGITUDE'] ? $this->wdata['LONGITUDE'] : '22.971168';
		$twitter = $this->wdata['TWITTER'] ? $this->wdata['TWITTER'] : 'https://twitter.com/xixgr';
		$facebook = $this->wdata['FACEBOOK'] ? $this->wdata['FACEBOOK'] : 'http://www.facebook.com/xixgr';
		*/
		
		if (defined('RCCONFIG_DPC')) {
		
		    foreach ($this->wdata as $n=>$v) {
			    $nn = strtolower($n);
				$value = $v;//isset(${$nn}) ? ${$nn} : $v;
				
				$ok = GetGlobal('controller')->calldpc_method("rcconfig.setconf use index.$nn+".$value);
				$ret .= ($ok) ? "<br>[myconfig.ini]Configuration saved!('-$nn')" :	
							    "<br>[myconfig.ini]Configuration not saved!('-$nn')";				
			}
		
		    //additional data with null values
			$box1 = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.fpbox1+test1');	
			$box2 = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.fpbox2+test2');
			$box3 = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.fpbox3+test3');
			$box4 = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.fpbox4+test4');
			
            /*
			
			$a = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.latitude+'.$latitude);
			$ret .= ($a) ? "<br>[myconfig.ini]Configuration saved!('-latitude')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-latitude')";	
			
			$b = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.longitude+'.$longitude);
			$ret .= ($b) ? "<br>[myconfig.ini]Configuration saved!('-longitude')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-longitude')";				
						   
			$c = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.twitter+'.$twitter);
			$ret .= ($c) ? "<br>[myconfig.ini]Configuration saved!('-twitter')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-twitter')";	
		    
			$d = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.facebook+'.$facebook);
			$ret .= ($d) ? "<br>[myconfig.ini]Configuration saved!('-facebook')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-facebook')";						   
						   
			$e = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.title+'.$title);
			$ret .= ($e) ? "<br>[myconfig.ini]Configuration saved!('-title')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-title')";	
		    
			$f = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.subtitle+'.$subtitle);
			$ret .= ($f) ? "<br>[myconfig.ini]Configuration saved!('-subtitle')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-subtitle')";				
				
			$h = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.address+'.$address);
			$ret .= ($h) ? "<br>[myconfig.ini]Configuration saved!('-address')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-address')";						   
						   
			$i = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.tel1+'.$tel1);
			$ret .= ($i) ? "<br>[myconfig.ini]Configuration saved!('-tel1')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-tel1')";	
		    
			$g = GetGlobal('controller')->calldpc_method('rcconfig.setconf use index.tel2+'.$tel2);
			$ret .= ($g) ? "<br>[myconfig.ini]Configuration saved!('-tel2')" :	
						   "<br>[myconfig.ini]Configuration not saved!('-tel2')";				
			*/					
		}

        return ($ret);		
	}
  
};
}
?>