<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACgJAAAu4Nss/fhkSoDgIA9csEUexMiGwXUWdAkKBZ00xoYSKRE/pF0JSq5xLx3suGqdk7H1LeEX+Kn8fCvSdBsQOXDazu+UEzhTT5b+gxdt/FovMNoQbF0Zrah1ZPmi/PIwGQMoSU/tghAnqWEDKMYmin53GlzPocdhLWORVH5QBpatNVW4PmDh4pswoLcFtKSl2+3RiT5mQ2BzscF7j3i1Ds3MKPYMuFx4AZC2hrBxTeY3eQJVGHYpb9XRG+KGRlZzLNeb9ml9OCI9o8JEYg7K9+Sa1JjAMVmGqbdWUGHMaI5LZi722ds/znvw7mBjTJFbmuYDOlbrGr56V9f2pbwWE9vfW0YKTptjnE0npB43IGFkG9dG4bBCCEHYCIsldWjhJvGuBzwEsXgCOcaRaUAQXzj6Pr+3d1Zi9ooZleo6Liv20loVgY/JuJ8GQog+YT9xs02Ndon2ENZDhKLO9icamw4H95wT1uKkuD/aD9q+wKvf2FwXocU5xl5z/NUB1QdLW7pMgaTrJxXqDs5FyfUg7ZYNvrAixRoBGxvQE6gqJyIdgNhcfL/6mctXjKMYvBbgSoi9trqVZ0gfKDKhpbn4+G35iTTaxdY8VUeWM26d+lbQJNZld7SNJZsRyAyzI3PqcQq2lb1senZDBs5vRyqILNsDKRNIWXuXIb4GUNH62oCRNYQgBVWfOXiMwfPRS0vcyWIC7L2qz0OwMksX3G6si3TR9SAypokKPh74U1Zd0CtIQZ+xx3lytfk14tysDNlZ/sq01fo6ajYxMpEKohE7rvZY/10pEgPZTyZVPIzQpGNX0RvZiBRhR/QJtBB6m3VryAw+7Yln2IcgRgy5pA7RO8yHhFhrHocbIWk0zd+snPWOBagAUMEYX1gViFz5VEv/Ui0MJ2wIX9Pom+WOf4V/T1k/GhmLP78IuYoXMtATCPW47tspFubaNnK6LkEV3x0A6zviZJogaZR6ETipG1Ho4JV3FJKYoe3nCcoIlf/xEvVf2pMYZ8PmH6IEn4C1zjv0Q2WLP4gdvwufCSBgeRwwYoO2Sui1abc4AD3j/A70gstEJlhYHhGEUldBVaVXtRlUeZHysaxFZlbPrDwf1PgOiktT+RoFyqXf1RqX45O3ZhrBaJaZy+ZOfmgyuWWVGLN9K9rT2IZOxfc6acz73ajHQ2xXxSQwZV02EXr9f0kR1OJmgyEg5/ZnUt5vzx8DKCnDPwVDsdEkc+qpTBJ87mTzQrOvDHjC1Jp4k+TOeDB01C2jTwvcAGrA/0rXecPSMiKsFTl8l+gX2FienWn1HWaOat37zU2rlGHFBNZLuzYdBbxGgIU+KsKStZi97bB4aunSd02aWnGUsqhsZP06OoxY4ULXe3hQsYCTnCAUhlp9M0oTNardHHxo0nzFsE3210Blz8kYHDeIxYDlwljyJMvBGucrAFf6PExSqzZPIRAtziqjzV2S21u2vSWmLwGLSnmZflalWcaPvwHrb8qqjZOi/psjIYF+1J3hFymiwNKTNP5EqhahE+d2xZkooH7U6TM9uu4vkMC0FX6aml3X0Op7asMzv3OCopEsLomJ6CsLglrb1HX1v6Ibxc+F/tRyBlFk74NorMAFiVc88OvXzWPHQjtPD7pzAgW5GdQkOlJAlUDxiRV/M4uI2027HIIn2S/z5VpW2A/ijcFP5TPld3szIfVMo0ch9F+SvKBPxDT8kOxIv3zfYSLzaMlmqTZ9U3oWByQ7ZsrFmFelbrfebaH4/ivO4rjPbssWFR8d4k4DHOUewqTJu67smna2XL8DprHyLygNzwW7YSsf/iY5b5k0nof+dkG0rf3tESkjCaOFDm9VXiHcotmW7fZ0Ljl5qP86lrI5UbfNS28l12BcbfGL8Ch9W4uhd9e8ZvLsJSoot6QSyZA+3cZ7fUTl2sHcxjnfKPA7Hizirnq2JzPimvIZQU+O/y6MgpgWc398/sm12VmBgaVPv3qvtbaq8kmos6Sh/V0QjZnQogOhLRo7ed9+3eWI0Xn9uhjT7Zilaaz8tF/9m32157OCGpltz19Q3C5aW/wnqNpBKhAs2wiub1ZaJMbJmsH0+1irLHNBIIM5D8Ctq03m6KzMq0Cm5hAe5TM76Wu6TnhmCpIav/Z2/cU/mKGBpO34wan9EG7HvW4nK7Fp+sis7oIxRgRyA9GVfhd3UDahW7JuHsSTkdbMPmhBlGgsrld/TmNcZ1n+fBONDyOwb1arCpSO6UWXlbOAdAacp+ewKdym+KtRGhY0DPu9RwCpR4v5IEtzcaaGGLMhQA7+nTOgfgNayg7bSRSL7mj2nx2KKBeQUXhzFQqPYfJesYySDb1hLn4TeSEbzEPG/OiNtGoU+62qL1w5kNnAi0jtXGQc24p/ToWvPfbeEDXdVxL/881Td2TlT4ZeiFOUG5hGHI88812cJFBVUh7Gb9YCe04VSuQp1DKOdvt4MZNISkSfsrzJebznjL3SeAvw+InStnnHrbQ5gklBNhBZ0iowazLFsh2ulEFAiRiDdQo1YT7zTtCOtO/FnFKi6SyR4Y4YPhfgmK2l1AiBfg/7FO7Ff46Ju6hZpqpYzM9ftlxreb85Kx7yUqhXC0UGDRlrURWhfuYl/04La4RB/kZMyMNV/DAvRVDzsDsZbpGx628Nt99E0QtrjsJEBeD2WVC2XwAWQK7hNSZBAtIn6lwipYlDkK2BXhsL4rlH6R0BcxSHO+jqObOc14Wm9B56wDc226n3BTm2j60KdPM7T494WrYtKQCeSoimUOsX/GsNb1JrgpufbdCm5gzf3nT3QeSouiDYmtoQXegtw4pKIDUHHKdJ+i4f9c/f9P1xASCX9ww/RBrkxmpn1usE/CeHBRF0Er3UkwgN0CsPJNKMO48glwCJAwed/2Gvsi/ZyvgqFulm0joCvurMrhjeGQCjmaAmrgs76dxYKjDe1qotIb7Cl9n9OwdVzATHMklYjomLhqRyeh6tk0Q37EMeFAHbrSJVV0E9FChzZGQmu5nZrrVJG3xjj4JG+tb346xl3Cp3vWQHeMho3NdFCv5/4rc1DnPy1hMb9yUoJHOexnISACH7OGVjTXH/dAROkj0TsaH3MUC+l8Rt2k+iJtcmMqIxH+YFywOVBg/nWhbK0q53qmaAguoQ+AhYHYaog5pyPBbNhw4+T53esUHvuJzQhzZTsn8/YsDGIUb0ByAauU7TvvXBJFQBn4iG47ZCUC3wJI5jOt3yokrj4A4ss8SvyAHRpvALw7q8js9eaB9xsWoRyGkDIEodxEDvh1mTVs8CMZFEKYmN7UJjkIZB25Ll3nq5LjiaYsTzw5rZl60BYpITsWlxvLYp9Inoz9L2/qQ8VdjltovMF8FhjofQQJg/vsX9jxoWJMH1ldkiopbuDjBt/fKvTWFhP9CkVWaMa9RzQzl6rl7Xt/b1AZglS0WOYq6rKPR6nCTsINQav7TMEkqdAYIeSX9wNqu3q1kNNGZXcaMl8WyEXY0vmVU7twG+24JHI5jjDrWRBzeQiKuXjiz7HSHdkV7/sLyD2S7GnTqiYVbYjnEDf9Z4392QKrTSZBJoYlkEcJPRctmlJYod0i0owPX29GteosYn878lwtqRD/GnPn2QHhsG11joxvsDrinqa+Tpp7cOgsvvQAaSnTJk4zcGiKXV8cbGnq/R0N03Zaw7fBIln99CHNemrCv8I5obpVSSphzu5VdrpvryTh7w0836R2Y0Dp4Npy7GpCBbI0fGG7dKaGPxbN0cEIMrgVpoTlvTdqLAe446wwjXZYoPxezZGEJRvjxC++DNm3TGxprzLyb7KBujflYWjHY4cIAWhcs7okVYDqB7Ysd6UBiX0j8LhRmgQlAf9UXFJPKfPwKckcUPa5Rl7d0ja4nbdSTELVt4IbwfcI2y1kI+w6Ik0HvhtWUx6s5qiGWo9/wYFAWaP5wjeGzM1pSuZNP3rrXks0/uJB/9cE9qBPkkcR4k3jE5G8OZKaGkqik5cOWCZ9G8rrSk2JcpBNn5PXo1MfZzHxEG61Uc8qM0tHiRDdC2y8unDecdD9sDCwk8r1OrU4vJnMJ0m5jcs+JTS/vQVpYZaCN7/zVuJuG4nW3ZsJJNUIPcG+42hh4svXwZ7mI4VORlzV9z96AC72+lQSm2i/d6tCMNt99Znns6aTzFaMb2IC8Dhdrfo4n2MUQkR7RRUl4NtFV1qh1AKub/oE/9i+Akp7g3O5sXzVX30h6ngsbRBuEkUce3quWvwfA48mkyNaVMI5CndEVFMcZVdaEcTxFW9L8UPY5539S6rpFwePV2/rrbjQIXVFtVMEftGjH/uFQAfbsXw4v3XWDDsdsG8rw8Xo8Gk0QtyO1sRlhyGo82MEIBCMf12hrMRFlI9B9ghAubvNXIkYndAaNMIvtvNXDKm1ScFfacIwqzqygnI3P4YL1HoorMbUiEH81btt+QI0nXMDJZNhM/eH9eLXlhEf21JKq6qyS3JJA1yTjAPa4HsWs1cGCGkOzGGM4NrV8nAPVNW9UvEjBHo7UfU7LtBlX7diNopqZ+yshCGLFathJKsdEj6qDv1ky+D1cDqWJ5SMLww4sfY0kxO4zvxgi0CORpEr0loiB4TPyML617nXlEcYpeAAImqBBunvewb06YnLg1VBdZ8QBpXD/m4CnSuBl0m0xLk69Qacy/5mH7Pe9/vktAtEFG9C3KbhaBkPOslJ3TFabWBjYUDFNnoJ+d+uD8JUu0gxWQvenjG1+KFjeXq5sVb37Z4ypoEEd0jRL+P1UHlVGUg5dEUOA3LdL0hSD1bJZjleivJ4JFYZnS4kvDXgm0ypacX1DM7b1ivD3yAzXYDykt83fx+1f0UOQ2rPq9BGPdQE+HK86LEfzdNH95v54tUCJ7uFgQ6/VCWJeUjZ5isOLn1J7bmewPqxxs+rQXWFQMesop5dxqlgVXQ8JoKJ1XsHAhAffUuvbjQLQFulrd492X4OT0pp8h7ytywkEjYw4TO9t1XanLq8rPrQbo8b0P8wAAt30aDbnVUT1NL3XIlQHXC77GypYasKC4RtvxHOxS0IuGxfjW+ScxR0uDWVK1yyJdXSto+UJ38p/ZdfNzpsBJXuR998J+wbm6zjWyKgsDL8MpwXIAn9xftQfB4OGViGbghNc5VR78pNf3J8bbx+9mAg+KxKLiSGmKfkAhwwqp/SLl2nAZotWMfEepDjvqhC9Av7d2n9QoZ8fzhV5hux93vY6umnh2G4t/duaE/gLFoDmy7QnRUY7wDxhMUBZVZyxiqEAKXJ5JCTfv3a+xyp33+MUqC21plD49z04BjoZliiaClHBl05hfxdgFeVKg0a3VhHNN57b4xtLSE+ll081agyNvoJk2m9mtGyentQ+Mb0BiR8WA5iUrDUr6MKGcEvf0OLJ7irFisVCgTUrqn1jg3jvIShxsgD5V/D3LAWWwVrrfY5Kezw3Ga89aevvYfMchT8SA5H6rwyh7ik6FDlfHgLga0MWTxoEcI2CHu5AykZfRc0luyYkSLgPQHgcSRp43pF6y8tDS9v5xS6w9fSc37n0Zr9OJHzznQkGVkNvYQ+5eSn/HTkJEhqxzCgMi2SDLsnBDzsnwfN+ot+PKf7jN5DIz4odUtLlnjrkif5GIwEHJqI2yUD5iKMWqfa7gG4YUZ5Z9nAWDK5GosjgJd8Sa7IlLK5pD0eFaisgyL4BHrJSNg6pHG/r3fMY85PRfryZUwOwglVXkPTPWw8nx0w+MXqIL6J+TABwZsVdt5AIDfFS8eauyDJFWwywVN26p707O+p9zNTNlEacL1tPUBPcNzrKRANxofMAKtXkDxunbsIC/7E/8Zpu6F3l9me7pcAF/DQnemJhX63gayyw+Lhr2Y9h/5AmRmINIcIhZD8xJszzUwYio/XLF8qCce7xk+3l4ImbcHYKVJsgtgv4OkWg5BkH9SYgGyv2aymJukHAEr3G3Te25wLWQ/bVIn/mxiLxoQgNarmvjwd283PZ4jEhxy8VYqrQXhpbW5DkHrQqj6ybBXg9nS9KC022fTeG7ZXWkV5FFC8MqvP4llUW12nMHtbfbaVNHVE02XeJKG3ADRXbh8kUz0KfEM63YHexL4dIivaFB0EqQ8zgIW4vRmSUlxrfZMFVI/KifNcyxJ4UJ7RcTw3t3IkPSQoIQw41zQ2LS50aJDKPXNFvu2GPC0ww+0qUxpqXQszZ8KaTbqSUQQP8p6T+S8JxQe9VyGqAu6scCALfN/Od0ZaYGSJAWcNyMxqiy9B+PfvjkcEuRMlT4e/BvVRSCrcc3Ggg/+GPyE9z3wG0yZN3M6ihpR8CLYuX68PARX3B5dn+9UC8TrL6ZUeYWSDMCnjFBxsCTPkfdIoWGCjnhSjBBrOVuE61dT/KiJjFyV0J2e4OCd/ZlV6CN1gOYgvHN7Og3NdpwBK0grh5lnelYLZywi46Vag49FVGcwBiZywvDNaiZBazQvPlEkIzmdStMbgWwmuxxoOpV3hnh1jvCtkyGQ6gWq1YD6jEFTJmY/A9K4ef+eKhZMusnY0H2s6jrJ4AlAhgH2LBMg75VFDYenBDvl0XkUBBavAtwOQfmD3OWoYn2yt5SHnNaBNnZO9KA4QDwANs+BHXwF2gG7JD8WQkF3ZDXW+LXXBZNrXSZM2wP7FKN8fEs80l9WPoVL6Z4gTnySJs7b/pSRY/CpASytxEsxOQPfbHMsbSHOQrpJ2n2px0jNkgujWq0/dt1HNN48ZfSOKxO7fYv8KDO2LQ0UarogkhhqHuIAwqK9Ae+Cmm4BYDMnH0CYwr3mF3A8e03K9wxw4uszASv3JY87JImtaKUXIPnm5kySVynN19iU0eNVnreTuHJTNa00mTiOBrVGDC1rvvqxSJmHNMe55A9W0bggYeGGcEZI7QS3yrvDiu1zJfK96OkjIvhfap2WXJvYbhSlXbyVQN1dCzwdXuxYQMR/JllSsghtd6w+BVZCqVPJJ4xdS0NA4k6NIE4IFIY7xmXMSA8MffT0lRvFeN3fK6TYazStSuiGsoJngpeThN+w4oF/I7gEGuKLpc2TaHNDqswE/Q5lNStzJIQliqUwRpAXmtkcdsLeJb8C/2SPyFBu353alCoLP8w9QFUEwN4X1zzCiIfPSvpwMNjG0DgPc/AuiS+BbZXCX3KBE1YJfiPNwul4HRWe3NAWj49xY6BHtDbsNRUHaweHWO8ipyGsHaV3p3KjzujDsaIw3+RcSc9y8G0J+sjHV3qmd1kBAAmi6Gl0hHOXtjlTJge6Q5NZWwyl++y/2M6G6CYVijxynU3+rSJVMBj1AUnxgXkC9eSiDnwiLKOghRhIxJS7KNolvRfWgpxQORHZ7Wz3xzlDHFZO9vCqB3i8V+MAgOOA0ngAzg4W3eVhyulVVtjeA4AYMU5dRy+iRhTwMVrtgoMEO6gXVfviidYf+U8monA/mf7iwj83Vq/VCjMOtWx8TtW91O16RTxvDf0Dh5UcqF1XXs/215368qqanxtxyoF9mcYuogZUfLggirx3J2jUhXE5fvNvj5aTDiMX/XNdjjo+VgoYnwl9Uu7Gce+q9VipYsbivfBCwzE0bmjMYuAH2eLs1KmNcKsr51a3nsqFw7i/HqwQJaOP3YxrvTQTPuA1bfLFmJFK4AQ+KX6LiLfOnZ0Ld8NRt2iyo3t+kkW8JwjynW7XhBwWJcQT55m2qW3IOGZ8j86Nirzizud72vIEGoJaubFxhgahJ7S1oXwzipzRnEMgorC/lEbv3UxIgjtqG1+XO3bvnYuMVLc8WS9VAAN+UETh7RqLjaoXQmdwR4+PhmYWnNwhjXT3sgrcFSJri8cm6SNyug+suUH0BRpk/R2gu8+ZRkg2m7bvoipPRqS0J85wDAqv28oTtGUREEHafIck44Y6t2MLTEbRoUv4nm1sVjGB7jkBoZvi0gj2k/Wg/wZtE5k/MFH3S88nigu9OgSne0NeCyVvfWFXltuVl06S33GrNcR23zmZLZKqgnLLQVxZh55FqPsgh95y72SBWfRCvBU4t9BFJNIv6lPDNHaaIHBUFQBHmodJkpi6OM0QmXJHe7BEZlcqvZZFIVPUO2GngZmO3UUz+trT+qPnUOdJ9REdDXyi4hIZxtRoyjccFAHEHPo/mBIsJE9IH3HBanHmRKpT9SjctJIclWlGveVwMB3nl3CuhHSWToNveUP9y5/oJHqHZI42hzXhJRgqbPRtxKgMj+OhvXzgw41bdmvC9K/tqADjmP80KCDEJyF7hHXmAtoJgOuTSSFxR5SLQI3Vb1R13dbY7+mwC/WEC0h2QEZxs8KVhwukPqEYfVJa4f1tIb2yQGLsIn/1W6HJpwEok+LEUSr9xW4S+K5WH7y0XKb/MjRc8b/IVm4xf1lqrfnynigrtyS6ujAbXt+cVETRKt/cGdCgrprFDYp2vCe9rbwwiMksysIzaKMWP7RC3ETzw0oqDsybvlEFHmj2b3QxoEXdNGFDf5aQ8QhYu3jURbnfbHld60mHDnUqAyXBnrXeBCXMJyIUsrV6YaB9RWW52OCjZj2YmbyISHw26btyOkKkg34HdLgDD3NDyPmn0IaTvQ2Imogr9V0MjaC8XnP4gEKHhYxtKuccTmvJBsvs/1vzFOAFppbd/sLw6efBoHitH2AKpHcJH4D3DB0djaGZc72b3Y8N2iserD6L8Rz/gfMqLx1ojkdeR4LWMXdnJOmOqu14kH7hxsaYzPk4c7rq2zMXMy1O8N0Z7ZmbW6Y1Ig92HXvdMBVCFkLdBCkM5m8s05nYyjTQqYVTK3ihtZMKPTx/JdN+5WOl/zStvMewOAy8lneP4uIbcob37DVMq76sECgzZVxTBFzLOM1JzJyGCqBKyYozbwen/kB8AQfSs6TMewU3qEdxpowHEfBQTpJdguHbdSpHQXB366GM11opciJW9oWvx1VzQpx/K+kS2upMPwDNpNEdQ0m6ZFEZH9WxRBFHiUVpHoRZuCiNLaaIXFcjXskrQOtqaQbDfSsiB4zLUt/x9XNN/GOIqtK/6TElBE1swgNG1cJ5Z20GiMr3iYY8z1k2qc6jQAQ0Qgxr6Yod+q77aSo3+Z4YA4Nogsly3rT2opKNnZ1b0Rl6bm/sk4EqErK7G8zeuIJEhqnmeIlBDZ6xniZ+pjWaSrl9a3cYgb9iYxQTeZEcW23+DTzuFpiNzTn+/l2A2ESn4hwl/7oSTG0hfTETu+JMCMBQINqFie0GqcmKIiKNBJJsrIWk3DHnxZGKYgUjEAOcYk1Zern3/JgWvBVmgpTgQ7izlssWlCi69YzBHMZi6FgPyv8SavHbxLXqwzD8N++W8xFcg5TS00Yp1/JGDnq/lsR+qFfCwZUAf8ZSB7B1V5HZ1KBrG3zF7eEcDLaj75l9J5bYv+JrlCxSvqUE3WDuoL86Z+r/Q4lrq9iBcqP0IYWLw6096vsEWBP5W0UWpYw4T4QOQn5fIwVsEXvHc+MRCtle5T+8HD2uSSXO+pDM6iwJKIz5/NAXFNqxbnFc6+jENtK1OISTeT+QhSiOryIe1/4y3RNkHuQ8eQDTvG3yyQjCuWIj5bJC8hQBeNzldysIyM01C35DrGf0yFWyasahwlNpwJrCOV4fJA1fOhrv7J+HDXt3JxOv+UvwfvYMhQ0JSMOFL7wfRl/dUc9fvGDdKfWT+5kjDPtjTiGi5KrhpzveTWiEMtBpQPljIuSC1bRUpx2GHdDxBM2TdHXDGUaNfLdAHQ3NMSUMOi7fCBwM+n/Tz1vKvzhft2Iwhk3vJTe9q71ruNNIfV1JH82yS2xXux04cq/Hpwu/mG5iIBZZaGAOoJP7RVwl/3NBxc2p/Y0GMMwigoClA6qPGCNUZCvJopCErVaxwbHR/wIuWk585V6WZgRMctspQVHXQ5QiUgv9m+K92/dZSjlbfKT7UDHxGvrIh+lMZhduF+icA0XS/jzuYwey284N6v/cTG7053QhlrMYRHH1TFhQLVsXQya9DXPoxWH2EUOpgwh8FdLKPAicR+3iV/qnkPXU99+2OatCMscjJrfcnNNsDNKPiNxmj0bNv4+kTlxCTR+J7lq0fj4jEmBoqEuvqRL0pC7T1mRvHQd8G5Tt2J5qpESmElnCa6XithHImoA+1BPY93wjMXweopc8imcaB6MPe7XBI1Yhs9dHI8RaGVAbDBvndI+AMUcxEHCmIX1WMQKyBQCxCvo8jKqCXLsmGbVmqum6smC8QOxNtNf7KXMmigWb6YyyrHWEltgmlUh74oKe0Di7vc5t2hZ7XAqaPI/jGYVDbY5bty4p7hEzWTYr47FSw+czbJBM9gJrZgWhU7KwKGuzF67dfBlF9ftQ/3DJqWt8YB55Vvt4nDmMRX24WgLoVxEBS5zYcprWOcg6IuoH63qOY80vhaqgLmu9juRprlNCDdcOMNx7TJ+r6ZWsSuqiMGhx/pmAEsG+d+7QmTAx06WYIJ26qhiowvUq51gl45FUIZ9N0ePnGSVbV2kLs0DMhWxiUA8W33SjAeRnSWMNMTexzGKySvUmWv577M8AZBTx3KIQmUGrbi/bvDJvEvu/EnXq2/LxepcFVEMfR87OtDk4c77LxNhyEyxjoheRVXaOHeN3VbrKViu6XBXZXXZHZPmA7jy5ndWgekPUIacmEPFljiQzvcdxt/IXFKszOUCkaGJI2bdtfnJ5yan85mxHJ4RLz3Zu+qyklTd2/HZcGmhyP/iPv9Xrm1g5P/QAZURxP2OMXJNc+tsrw6EF2a0cHoSbfs6ArtYeXDRE9ie/HnXftuMb8Loa2/5Fe6hlvC/eUkj2+5Krb5RuNEm4nieM9TA9BppgvrO+dk+qtEhorbJwEaP9aSUBOC0BaZpeqknMINjLTB5D1oWXtcJfQzzS7WR7Wcf6ZoyCRQ9HyiT8Obdvbg+bm8OxBFbP2KEPBt2+d5qIQU7VmKvo/X96x9rWCWhTkBFbD4ZkaSW2DPIvsLJwA33P6jpjDbJ+K23FXVccPxnCwhFm9HBj+A2z9tedttYNBJdRE1JHqVDGeD8ons5adH5Eh/Bc32Piu8OANEUtM9uCMjKcnJeyFkQv7kMGQvES4c5IRyYpgASIOy8AcV9YOHlwCho85tTG7mZ9LfW2VyaiYanYhEXOGQjjt/N6t82MBoV1u/EZprHpAUP74y8kwCBlmu+rL0NpQb/v/1r4w2tgKq3vSQAfOIhokgtytR33MosQDXwAubXynB3FTwYlJJtSJz4J0QFpigIruhCRNY12RnIaQODwwcdX74aeE7nEhdiMwQesK/bx32orc+AzW3R2uKul7JYAK20IdNKoZaXovIzRHNQ8coGkuA7CpvubDETo0q4+CXBND80H2QmOOBhgYTFZSNnjVAxe2GoOLfwpSBrfyt8Ol4u6PLYOaV4KQoz2yVTmPRkbKuNVEr59z6wWs7NXVMLYDDbQWoAuzRb8lo4OioGaI93JTrVi+QMsTqiTXi5+yLj3J6P0ThVuQiZdecLykd152xdhnJkjGdgFTLoYTq1ArJFPiFTSLGOX/B81sXVZZE/Gxqn0OtmWn3p3vOAEu3eBwtPoQDedRaFzzv3CY7zcvrLw9M5PHiEfgkJLetVqMacxBvUe6zVWOsBC8ZGP6WWov3bl8Xv/pM2RgeKsVzG/awKXx4tpPNJt/izjyIaJ+KdeaG7j8BmVWHyAVN2k4xvRY3aNwuRMKb+2kMMoll5zo498YdWtFxbJhbq/uWTSXnC+pzqhI8WwyxFR7ljzlkt6VcY5Uyd5IE5bkb/TUlghFfDXAgVCFXD+ue7qFk+Evc7wa/R7KlXE8f6m8d4fGC5ZLFnSTUSw+KHOmV55ibSW3jkDO6WQyW+dNx0oj1H9t1K932pQNijrhoeKO0U66HSeSl8H8o6GoNZMcHfy24v8JEPDbDs029AYm7wi22Y+pgU5aweTyiLZKQnHzZUpOVhjqu94SO0V4K93WbvnkkHr/oHnT10fkTwBOcnpqqaTfUDQmr+yk9PAgWUzHT/2UfJVY6uhtF+PovNnA0NxSpBrAQ63173zCsxL2bGmXr8NR/mWtsnA3PS5ocfPy2pILEDPhySiRoq48hleX0VIBu3rmXYTrVAfmP/+sIUTaMU58rMI87SneqGNM1UCsxPoTUksWzZJU8A+/1uU0HMWTe/GHVniNk64+X5EgmPaESAhTbEeSQydzgJOiBK2cKsPMsQHYr277x3kNVX4rl6EYge5kHk76GIrBsVK7wgzPzy1m0iikaPKzrKtPrGzMZWLGIbEbViwcu1cc6DXdev64mDGGqvVrhrEQ/QxrncS8yBdANhsqKDED/A2YYx6wtivbmMS1GlIlOy/E1nvr4IUo457/a6nkn2uolTaIb+kh4TIoze65Mf+jVSU7eIuBUKYGz57v+qH1i2w17/u4K4D1iXAjYLYPysXHmyFoYdVaExwv55mB3Z50hp2WpU/8zKD5rnxK6FI6xJnnjUYX+FYYvLwtPCXwjQRVU2Jy91J8z5ZwK69z5vEvS1qQHiJiabx/+R+6UWvNc97sOxO1Apm8yELrU8RtDmlfHk/AuJAAAAAA=');