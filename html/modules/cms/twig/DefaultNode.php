<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABYAwAAwnz8LtA51nR6MZh7f4D9kzsD2i1p30Syw9BRryavvOIgoCd5w27L1UGOqIsY+2JkFV+e9RYUP6+x6x7kn2jpSqRc7bGJ8GLbBRGm4R9yiuP2zZxGcdjZ3sa2WHx2ev3TqHJExUnLH1G+ekZf9ISi7AmtZHe8oAY8N8gtlStm3Kou1+n0nukDGyE/ydLONDMc5rnOJURNEO1XixrLf2Tdx+RtOujoJd0+mK3cMrw9pAvw4bp6qVFkzzJb16QwJuORfPZfeiXr/JVdIBD0Z7tWaz5cCrqOZO1xGnvOtFTDMfJ5MeKNNzW1hbXKn9f9KK8YQE2yu++MHueydJOAIHKUIo88kWt7AlNT/VCX595mwme6xhF5M69izpbmYE23rOYvQ8CjwIo+DpD0JXFSa7Am4KoPNFXhCuRDg2NBHt+OThud4ey+SdarCeyPtokhmtMNQ8uZi5eY6Kzy3r8T0I5ZiV7WV0nrjC80dTe5Wpi8STohe0TsYp7ePwdP6DE6U79HuLdTJD8XqloU6nU4jUYGSzbB9ZBd8cbuzaYlYBmjjhMHcqtjZZY29OWZHT1hv6hHPU1chezRvmBVR7h9N1Yfv2Sh6qTFQ4vxo8js0KhAFZBETZe1n53HZahLNNgKK/h+YkjGyolw1dbXaPmIdSNaNfg13e8zl8paMOtYCy/umOfAEjViLWTRjhRywDDI6PROHIzCnxtNHBtrPf5LVmzj31mTXd8z7tZ9XyIkLk0piAl6kHOvlQsWxL+0eC7BAkLc9lxOIW5QcCV1HAnWG/9qR1li9KmKLKeW5f2V5AVFnmo2xD18HKBUBI7TKKAzf+zxBPHGtUHrbUytJpgXnPFhQ5Fx60etW/iXLFfIqisdYAKSEl+kfGbhaPRD8pkNgcFQFnpwdBSPyiA7+fdz84kDBctgQOYp9toatVeQd9CdWAYUd+3soWCFbFnWySB2crZPPzcDtU3+dYQs6kLzfzTmJnIvtZHIAk1s7TbsiXYnQPcub684v/4vuKNOaideH9RBOqZKf2jzHuYNtEBSjgSda2HwCAPU1zJ5bkocw0eARgyBNGqLM7MhvddNkCyx7h2XsIVBnGQhDid4RAJ0uiAlLFkhUlvTI7G+uAZK6SL33iDcLF32lLJwowAAAAA=');