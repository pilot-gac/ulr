<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');