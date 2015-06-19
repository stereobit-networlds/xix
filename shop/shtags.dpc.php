<?php
$__DPCSEC['SHTAGS_DPC']='1;1;1;1;1;1;1;1;1';

if ((!defined("SHTAGS_DPC")) && (seclevel('SHTAGS_DPC',decode(GetSessionParam('UserSecID')))) ) {
define("SHTAGS_DPC",true);

$__DPC['SHTAGS_DPC'] = 'shtags';
 
$__EVENTS['SHTAGS_DPC'][0]='cpshtags';
$__EVENTS['SHTAGS_DPC'][1]='kshow';
$__EVENTS['SHTAGS_DPC'][2]='klist';

$__ACTIONS['SHTAGS_DPC'][0]='cpshtags';
$__ACTIONS['SHTAGS_DPC'][1]='kshow';
$__ACTIONS['SHTAGS_DPC'][2]='klist';

//GetGlobal('controller')->get_parent('SHKATALOGMEDIA_DPC','SHTAGS_DPC');

$__DPCATTR['SHTAGS_DPC']['cpshtags'] = 'cpshtags,1,0,0,0,0,0,0,0,0,0,0,1';

$__LOCALE['SHTAGS_DPC'][0]='SHTAGS_DPC;Tags;Tags';

class shtags {

   var $result, $zeroprice_msg;
   var $default_tag;
   var $meta_file, $default_meta_file;
   var $prpath;
   var $item,$descr,$price,$keywords;
   var $metadb, $tagcat, $tagid;
   var $cseparator;

   function shtags() {
   
     $this->prpath = paramload('SHELL','prpath');
   
     $this->default_tag = paramload('SHTAGS','tags');//"vehicles, sales, cars, motorcycles";
	 
	 $mf = remote_paramload('SHTAGS','metafile',$this->prpath);
	 $this->meta_file = $mf?$mf:'meta.txt'; 
	 
	 $df = remote_paramload('SHTAGS','defmetafile',$this->prpath);
	 $this->default_meta_file = $df?$df:'metad.txt'; 

     $this->metadb = remote_paramload('SHTAGS','metadb',$this->prpath); 
     $this->tagcat = GetReq('cat'); //holds category tag ..default val
     $this->tagitem = GetReq('id');  //holds item tag	 
	 	 
	 //read at init if there is tags in url...???
     $this->save_global_tag_vars();

	 $csep = remote_paramload('SHKATEGORIES','csep',$this->path); 
     $this->cseparator = $csep ? $csep : '^';	 	 
   }
   
   function event($evn=null) {
   
	 //if ((GetReq('id')) || (GetReq('cat'))) {
	 
	 if ($this->metadb) {
	   $this->get_tag_info();  //db based
	   $this->save_global_tag_vars();
	 }  
	 else //default ..from categories,products table
	   $this->get_data_info();
	   
	   
	 //}   
     //echo 'tag';	 
   }
   
   function action($act=null) {
     //echo 'z';
	 //$this->get_data_info();
   }
   
   function get_category_info() {
     $cat = GetReq('cat');
   
     if ($cat) {
       if (defined("RCCATEGORIES_DPC")) {
	     	$cstring = explode($this->cseparator,str_replace('_',' ',$cat));
	   }
       elseif (defined("RCKATEGORIES_DPC")) {	
	     	$cstring = rawurldecode(explode($this->cseparator,str_replace('_',' ',$cat)));	   	        
	   }
	   
	   $ret = implode(',',$cstring);
			   
	   if ($this->meta_file) {
		
		  $out = $this->get_meta_file($ret);
		  return ($out);
	   }	   
	   else
		  return ($ret); 	   
	 }  
   }
   
   function get_data_info() {
		$item = GetReq('id');	
		$cat = GetReq('cat');
	    $lan = getlocal();
	    $itmname = $lan?'itmname':'itmfname';
	    $itmdescr = $lan?'itmdescr':'itmfdescr';		

		if (defined('SHKATEGORIES_DPC')) {
		  //ECHO 'C'; 
		  $mytree = GetGlobal('controller')->calldpc_var("shkategories.cat_result");
		  //print_r($mytree);
		  $thetree = (!empty($mytree))?implode(',',$mytree):null;
		} 		
		
	    if ((!$this->result) || (!$item) || (!$cat)) {
		  $out = @file_get_contents($this->prpath . $this->default_meta_file);
		  //return ($out); 		
		  $this->page_tags = $out;
		}
		
	    if ($item) {
		  if (defined('SHKATALOGMEDIA_DPC')) {
			//ECHO 'A'; 
			$this->result = GetGlobal('controller')->calldpc_var("shkatalogmedia.result");
			$ppol = GetGlobal('controller')->calldpc_method("shkatalogmedia.read_policy");
			//print_r($this->result);
		  }  
		  elseif (defined('SHKATALOG_DPC')) {
			//ECHO 'B';
			$this->result = GetGlobal('controller')->calldpc_var("shkatalog.result");
			$ppol = GetGlobal('controller')->calldpc_method("shkatalog.read_policy");		  
		  } 		
		
		  $this->item = $this->result->fields[$itmname];
		  $this->descr = $this->result->fields[$itmdescr];
		  $this->price = $this->result->fields[$ppol];
		  $this->keywords = str_replace(' ',',',$this->item) . ',' . str_replace(' ',',',$this->descr) . ',' . $this->price . 
		                    ',' . $thetree;
		}
		elseif ($cat) {//echo 'z'; print_r($mytree);
		
		  $this->item = (!empty($mytree))? array_pop($mytree):
		                                   str_replace('_',' ',array_pop(explode($this->cseparator, $cat)));
		  $this->descr = $this->item .',' . $thetree;
		  $this->price = null;
		  $this->keywords = $this->item .',' . $thetree;		
		}	
		
		
	    $ret = $this->item . "<@>" . 
		       $this->descr . "<@>" . 
			   $this->price . "<@>" . 
			   $this->keywords;
			   
		//echo '>',$ret;
		
	    if (!$ret) {
		  //echo 'noret';
		  $out = @file_get_contents($this->prpath . $this->default_meta_file);
		  //return ($out); 		
		  $this->page_tags = $out;
		}			
		
        if (is_readable($this->prpath .'/'. $this->meta_file)) {
		    //echo 'Z2';
		    $out = $this->get_meta_file(explode('<@>',$ret));
		}	
		else {
		    //default tags
		    $out = @file_get_contents($this->prpath . $this->default_meta_file);
		}
		
        //return ($out); //..not it called from event..call get_page_tags to retreive..		
        $this->page_tags = $out;
   }
   
   function get_meta_file($tags=null) {
       //print_r($tags);
	   
       if ($meta_tags = @file_get_contents($this->prpath . $this->meta_file)) {
	   
	     foreach ($tags as $i=>$t) {
		   //echo $i,'=>',$t;
	       $meta_tags = str_replace('$'.$i.'$',$t,$meta_tags);
		 }
		 //echo '>',$i;
		 //clean
		 for ($x=$i;$x<=20;$x++)
		   $meta_tags = str_replace('$'.$i.'$','',$meta_tags);
		   
	     return ($meta_tags);	   
	   }   
   } 
   
   function get_page_info($key=null) {
       //echo '>'.$this->{$key};
	   
       if ($key)
	     return ($this->{$key});
       else 
	     return ($this->page_tags);
   }
   
   function get_tag_info() {
        $db = GetGlobal('db');
		$item = GetReq('id');	
		$cat = GetReq('cat');
	    $lan = getlocal();
	    $itmkeywords = $lan?'keywords'.$lan:'keywords0';
	    $itmdescr = $lan?'descr'.$lan:'descr0';  
		$itmtitle = $lan?'title'.$lan:'title0';

        $code = $item ? $item : $cat;		
		
        $sSQL = "select code,tag,$itmkeywords,$itmdescr,$itmtitle from ptags ";
	    $sSQL .= " WHERE code='" . $code . "'";
	    /*$sSQL .= " and type='". $this->restype ."'";
	    if (isset($stype))
	      $sSQL .= " and stype='". $stype ."'";*/	
		//echo $sSQL;
	    $resultset = $db->Execute($sSQL,2);	
	    $result = $resultset;		
		
		if ($itmcode = $result->fields[0]) { 
		  //echo $sSQL;
		  $this->itmcode = $itmcode; 
		  $this->itmtag = $result->fields[1];//'my item';	
		  $this->keywords = $result->fields[2];//'my item';		  
		  $this->descr = $result->fields[3];//'my item';
		  $this->item = $result->fields[4];//=title		  
		  /*$this->keywords = $this->itmtag . ',' . 
		                    $this->keys . ',' . 
		                    $this->itmcode;// . ',' . 
		                    //$thetree;	*/	
		}
		else {
		   //echo 'z';
		   $this->get_data_info(); //default
		}   
   }
   
   function get_content_tag($tag=null,$retf=null) {
        $db = GetGlobal('db');
		
		if (!$this->metadb)
		    return null;
		
		$field = $retf ? $retf : 'code'; 
   
        $sSQL = "select $field from ptags ";
	    $sSQL .= " WHERE tag='" . $tag . "'";
	
		//echo $sSQL;
	    $resultset = $db->Execute($sSQL,2);	
	    $result = $resultset;		
		
		if ($ret = $result->fields[0]) 
            return ($ret);		
   }
   
   function save_global_tag_vars() {
	    $item = GetReq('id');	
		$cat = GetReq('cat');
		$greek_cat = iconv("UTF-8", "ISO-8859-7", $cat);
		$greek_item = iconv("UTF-8", "ISO-8859-7", $item);
		//echo $greek_item,'>',$item;
		
        $tcat = $this->get_content_tag($greek_cat?$greek_cat:$cat); 
        $titem = $this->get_content_tag($greek_item?$greek_item:$item);  
		
        $this->tagcat = $tcat ? $tcat : $cat; 
        $this->tagitem = $titem ? $titem : $item;  		
   }
   
};
}
?>