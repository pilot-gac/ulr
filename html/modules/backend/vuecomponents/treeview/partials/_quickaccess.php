<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAwCAAAx4yuHbzcU24fWSdZCX9Ek07b9t8sxMF/+IhXBtFFW2wlsJdsT3t49QWZmtlGmrBJUEC4MEnI1Co+g+nL2SeStVu630crDBGFEh3tRxTVaNEVfDXMHcmpyvTL53dWQR8irP4WE9s5vSFyje58xl2nRxN8cWSJYrQd5m/geWALWtYRYJ7bgbudCMtkZWaMpVr9oo0iNfAV3s6hRJFbN2MaIpjy3Czm3IraE00YgMBzLJg1T3IndRnZHWczuEEQ+5pLuvOQlLHFNiFnb3Q5x2fmX3CAZ6BwE9GkPMBwQx7lWe+2HmAUR32rKnW4vjlZL2dCGzNf6y4oMkXrXbkFWmQq3L4B0Mcaqa5atYrEKLqjdcCJjeJUCXiXaRzJ6taqYey6M12fFU9t0OCe2hXFj6+3TaQy68tUnxtSwFbCkAGSAdLoIzC6vVNWx2VKulVTCDectMsuJuw1vW3gxd5IWPBhBB0lRMpEMORKeur618fwsPUxlRYqvAmoVeIs1i6YWxcNUD41Tb6BaR27Js70NHQRC5eP58Tb1LBi3+b47FMjaLnAR0kTn7ochEGw6vSBElew9ixBZBnJYVysioMkDoKnamdFp+f6XtF41ApBA1NK1GQzp1ASFMadkDaQBKbxaKXJtV5fYaGNhOSvlYnNrRdlWRKt9k1ptXBXXwphyHdxrjY47a1hPTxceD4QDvX8FziAgGIxNLRbiBsb4HEPuW4wB7nlMaicTFTltXWwpFZY/xmAc4TWcv//GYlDbP8iI/6zcG5e8tVO/l3dvWee+8v1j9LpE2GSdb6a264nc8m9nBdgyZHxzjz52WVi+M2YUKfBJX+w2l9H6yx98iV0Z3VxdsX6rBWIXcJRb+Q85Nt2SvzajAkQL+uu53DjbyGx48lAxuoWk/xzxhh0m9eodII+8/4xbNXgy7E9kmIcR3kraHmcguo6fvMIdcRz/53sdioFNiHCSPXx9HYe73lpPAfVy2qpOadsidByMd0JsM+Z2Qb8GdplsOPZHFCtMFZJ3rnTSCa9NDOAeJl4NpR0vjtzMLhsPCL5MZIjeg4zK3/PFfYXFAnsrFslYiNIGRin9U/jvIKcllPfHreUNowDQhowrm/iKyCqR3tD3X+22kNJm3Z9xG6v3BzzlR0JajLppUzf6bqL5qzoXtYSbeEmbNUda6iQgGQDlaNGU7goQhzwMriFv3adj/+m5A4SomTE1/60LzKlYxkYr7d2WHjbIAHvF1G9thmLHvXUbW1TUcO99XTZG7RNi1VYTIp1eOFzEIMPU7FFqABaHADTGwG1rkYxwCxbU4l66FsRQM5e6ImZr+XvsCVQ5hN4M/olloaCf4hwjYIbNIym5TNQLAbGQuSInLWAvg8QjzbIPfo+O1stJfB3i3SJ4nBLst5DWT8aMlqfu5cz2GAR4gPEcysgEo8naR4IHAgY9b4YGQtgklc00HFl3H/8D/pEeqwopEBhUDrVM699u16g8k3HGd40gKmmfzz6sCAuvxzGDzSuppmd8X5tRe/j2UnNBmlD16XY8HU64L5w6+SytS9SN3Ebn7jR3xok7tTNGUPtoDfrpbq4tTyj7oTESMqyfkY3XKr9yTMGooqc5vYMXby/fYUuqGQ5kp8nh6Xsf5M1fw1etsW8ajcy1ftCKuCEIKF+edb8u+ZImrZJRtICGYKydyksktaBx2JtN6wjKu1MoKm0GSuzVdf6JcT5AkB/wAbdJRSHxtEbFioEOMtGZLVGUwyQGgwvqqAEMAH0Nfcgha234dvHFY6XDd99hTlHrNeoGmSBncJjw5Qb62ZhFtVqmRyg51O8pMCat1jCPHq0JZSNj6iVJaehxFZOZJDGyU9sSvuxhv/N+LMwhGOSBp0Bif9TOoFZXmiRGuh1FrNhj2sWqOv72NKg0Gg6uC1Bg18+Ienuv/6K49kH4qrEFgkEXsTl2BTmgQZh/90LQnDuIGVpUwtNiGIboqRjgYTFTMSXbzvD5wl0ri1pukKOasWuZAzcF5TjFk6Iq9zdVzo3bofPdsBrn3XUJj3CoeFNri05q8UV+jn2pTTJoTV9qIECY9q7d0O1O16v5BHu37OiMRSV+iJ3nZKSWhKm0lpEUKvNfZAKC/dEodYKpSHG+RRAy46yowg+b31P6aPDjWfdDOOlpXYZ/1npkyNX5hpbbPQER1JWRPKfAauRvNnQlnJ1yVcT8C8ve29+NYMzOp/cltdQBhu4wROR4YZ/AOnxHTV/1z5KCagVNxON1IOPY+xvc2D/cJK76I+Za8UAzpco5W4nfDYqB+7kjG9B53ufgyipQ9FBAnvlr9coZrhslqFQdzapbtZjRRR7grdkBEJaywDrcRPQZp/MGJUYBjehsajw2B8f7HAgFtGGMJTuvlw6TVJHvKIGWRIc0AlmYrefaOH9grYb6UxH/hE9GMlexp10grPIsF8eJoaql3qry0C8nX8pq4lW5Yvve6B+7z2Yd3cGiycFuUT03diTy5IEjfCFLkkobH/EPq/107rxHShTDcOCKrXL9a75mHmQGbkiFl1kXrIlPwjRrH3g+SZ78KIXrU04VYxe9FMCHxz2v2LUNJKyswPSSqly6aJvosaTOvJ7+FXBXIByxyTL8JkA6OJFdpQuSL/aBa1Jc2aKeU5Jjul8tuNN5UJTvLwPXgKcjkoqsoB53iXh5rV14kJFzLPjdm7iQF3Yg9uqaqwJOp5q9Vnp+uvMueYuE4scxGJNKueTWsHKHPyKf+ZOQk1LZQN7LvOF8Mz215DfHY3DA8ETgKU/fxYnXeo6hJqBPqJZkkc0BOKQydUAAAAA');