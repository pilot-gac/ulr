<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');