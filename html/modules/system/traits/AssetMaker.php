<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');