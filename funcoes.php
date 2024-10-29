<?php
$PAIS_ALVO_DESEJADO = "Mexico";
$arquivoContador = "C9843U58923J9R0IDKJA.txt";
$arquivoLiberados = "L980787808485410.txt";
$arquivolinksdisponiveis = "LNK09491000012.txt";
$userAgent = getUserAgent();

function pega_linha($arq,$linha)
{
 $arquivo = file($arq);
 $y = $linha - 1;
 $x = $arquivo[$y];
 return $x;
}

function getBrowser() {

    global $userAgent;

    $browser        =   "(B) Desconhecido";

    $browser_array  =   array(
                            '/msie/i'       =>  '(B) Int. Explorer',
                            '/firefox/i'    =>  '(B) Firefox',
                            '/safari/i'     =>  '(B) Safari',
                            '/chrome/i'     =>  '(B) Chrome',
                            '/Edg/i'       =>  '(B) Edge',
                            '/OPR/i'      =>  '(B) Opera',
                            '/netscape/i'   =>  '(B) Netscape',
                            '/maxthon/i'    =>  '(B) Maxthon',
                            '/konqueror/i'  =>  '(B) Konqueror',
                            '/mobile/i'     =>  '(B) Mobile'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $userAgent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}

function getOS() { 

    global $userAgent;

    $os_platform    =   "OS Desconhecido";

    $os_array       =   array(
                            '/windows nt 10/i'      =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $userAgent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}


function getGeo( $ip ) {

    if(strlen($ip) > 3 ) {


        try{
            $cURLConnection = curl_init();
    
            curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/json/' . $ip);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURLConnection, CURLOPT_CONNECTTIMEOUT, 0); 
            curl_setopt($cURLConnection, CURLOPT_TIMEOUT, 5);
            $phoneList = curl_exec($cURLConnection);
            curl_close($cURLConnection);
            
            $jsonArrayResponse = json_decode($phoneList);
            return $jsonArrayResponse; 
        } catch (Exception $e) {
            return false;
        }
    }

    return "";
}

function contarBrowserDesconhecido(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Desconhecido") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarMobile(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Mobile") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarKonqueror(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Konqueror") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarMaxthon(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Maxthon") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarNetscape(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Netscape") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarOpera(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Opera") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarEdge(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Edge") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarChrome(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Chrome") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarSafari(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Safari") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarFirefox(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Firefox") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarIE(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "(B) Int. Explorer") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarOSDesconhecido(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "OS Desconhecido") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarLinux(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "Linux") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarMacOSX(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
		
			if(strpos($line, "Mac OS X") !== false ) 
			{
			 $linecount++;	
			}
    }

    fclose($handle);

    return $linecount;
}

function contarAndroid(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Android") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contariPhone(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "iPhone") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarWindows11(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Windows 11") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarWindowsXP(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Windows XP") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarWindows8(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Windows 8") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarWindows7(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Windows 7") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarWindows10(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);

			if(strpos($line, "Windows 10") !== false ) 
			{
			 $linecount++;	
			}
		
    }

    fclose($handle);

    return $linecount;
}

function contarPaisAlvo(){
    global $arquivoContador;
	global $PAIS_ALVO_DESEJADO;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, $PAIS_ALVO_DESEJADO) !== false ) 
		{
			 $linecount++;			
		}
    }

    fclose($handle);

    return $linecount;
}

function contarBloqueados(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "BLOQUEADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarLiberados(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "LIBERADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function contarClicksLinksLiberados(){
    global $arquivoLiberados;
    $linecount = 0;
    $handle = fopen($arquivoLiberados, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);

    return $linecount;
}

function contarLinksDisponiveis(){
    global $arquivolinksdisponiveis;
    $linecount = 0;
    $handle = fopen($arquivolinksdisponiveis, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);

    return $linecount;
}

function contarDesviados(){
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strpos($line, "DESVIADO") !== false){
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function getUserAgent() {
    return $_SERVER['HTTP_USER_AGENT'];
}

function isMobile() {
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    return preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4));
}

function contarTotal() {
    global $arquivoContador;
    $linecount = 0;
    $handle = fopen($arquivoContador, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        if(strlen($line)) {
            $linecount++;
        }
    }

    fclose($handle);

    return $linecount;
}

function addBloqueado($ip) {
    global $arquivoBloqueados;
    file_put_contents($arquivoBloqueados, trim($ip).PHP_EOL, FILE_APPEND);
}
function getIp() {
    return @$_SERVER[REMOTE_ADDR];
    // return "81.214.48.17";
}