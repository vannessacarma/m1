<?php
session_start();
require_once("funcoes.php");


$usuario = "preto";
$senha = "489378f6d76f66ee5545adbee4895c42"; /* @preto@ */





$usuarioSessao = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '';
$usuarioSessao = preg_replace('/[^\w]/', '', $usuarioSessao);


$senhaSessao = isset($_SESSION['senha']) ? $_SESSION['senha'] : '';
$senhaSessao = preg_replace('/[^\w]/', '', $senhaSessao);

if($usuario != $usuarioSessao || $senha != $senhaSessao) {
    header("Location: acessar.php");
    exit();
}



if(isset($_GET['action']) && $_GET['action'] == "ZERAR"){

    file_put_contents($arquivoContador, '');
	file_put_contents($arquivoLiberados, '');
    header("Location: cliques.php?pag=Lista_Todos_Clicks");
}

if(isset($_GET['action']) && $_GET['action'] == "SAIR"){

    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliques - <?php echo contarLiberados(); ?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>

    <div id="principal" class="container">
	
	
	   <div id="principal" class="container">
        <div class="row">
            <div class="col-sm-12 center">
                <img id="logo" src="imgs/logo.png">
				
				<p>&nbsp;</p>
				
				<p class="paginas">
				<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Todos_Clicks">( <?php echo contarTotal(); ?> - Total )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Liberados_Clicks">( <?php echo contarLiberados(); ?> - Liberados - PC )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Boots_Clicks">( <?php echo contarBloqueados(); ?> - Bloqueados )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Desviados_Clicks">( <?php echo contarDesviados(); ?> - Desviados - Mobile )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="link" href="javascript:;">( <?php echo contarPaisAlvo(); ?> - Pais alvo )</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				
				<p>&nbsp;</p>
			
				<p class="botoes">
								
				  <table style="height: 25px; margin-left: auto; margin-right: auto; " border="2" cellspacing="2">
                  <tbody>
                  <tr style="height: 25px;">
				
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Todas_Informacoes"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Informações
				   </a></td>
				   
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Todos_Clicks"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Todos Clicks
				   </a></td>
				
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Liberados_Clicks"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Clicks Liberados
				   </a></td>
				
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Boots_Clicks"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Clicks Boots
				   </a></td>
				
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_Desviados_Clicks"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Clicks Mobile
				   </a></td>
				   					   
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=informacoes_media_geral"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Média Geral
				   </a></td>
				   
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=informacoes_dispositivos"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Média Dispositivos
				   </a></td>
				   
				   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=informacoes_navegadores"
				   data-auth="NotApplicable" 
				   data-linkindex="1">Média Navegadores
				   </a></td>				   
				   
                   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?pag=Lista_IPS_Bloqueados"
				   data-auth="NotApplicable" 
				   data-linkindex="1">IP's Bloqueados
				   </a></td>					   
				
                   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; height: 18px; " 
				   bgcolor="#084EBB"><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?action=ZERAR" 
				   onclick="return confirm('Você tem Certeza?')" 
				   data-auth="NotApplicable" 
				   data-linkindex="1">Resetar
				   </a></td>
				
                   <td style="background-color: #084EBB; min-width: 50px; padding: 5px 20px; "><a id="x_i7" style="font-family: 'Segoe UI Semibold','Segoe UI Bold','Segoe UI','Helvetica Neue Medium',Arial,sans-serif; font-size: 14px; text-align: center; text-decoration: none; font-weight: 600; letter-spacing: 0.02em; color: #fff;" 
				   href="<?php echo $_SERVER['PHP_SELF'];?>?action=SAIR"
				   onclick="return confirm('Você tem Certeza?')" 
				   data-auth="NotApplicable" 
				   data-linkindex="1">Sair
				   </a></td>
               
			      </tr>
                  </tbody>
                  </table>										
			    </p>

				
			</div>
            </div>
	        </div>
			
		   <div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Todas_Informacoes")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="imginfogerais" src="imgs/infogerais.png">
                <table>
                    <thead>
                        <tr>
                            <th width="20%" class="center">Total Clicks</th>
                            <th width="20%">Clicks Liberados (PC)</th>
							<th width="20%">Clicks Desviados (CEL)</th>
                            <th width="20%">Clicks Bloqueados</th>				
                            <th width="20%" class="center">Pais alvo</th>                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infogerais = "infogerais";
                        ?>
                        <tr class="<?php echo $infogerais ? "infogerais" : "" ?>">
					    	<td class="center"><?php echo contarTotal();?></td>
						    <td class="center"><?php echo contarLiberados();?></td>
							<td class="center"><?php echo contarDesviados();?></td>
                            <td class="center"><?php echo contarBloqueados();?></td>                        
                            <td class="center"><?php echo contarPaisAlvo();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
				
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="imginfodispositivos" src="imgs/infodispositivos.png">
                <table>
                    <thead>
                        <tr>
                            <th width="6%" class="center">Windows 10</th>
                            <th width="6%" class="center">Windows 7</th>
							<th width="6%" class="center">Windows 8</th>
							<th width="6%" class="center">Windows XP</th>  
                            <th width="6%" class="center">Windows 11</th>
                            <th width="6%" class="center">iPhone</th> 	
                            <th width="6%" class="center">Android</th> 
                            <th width="6%" class="center">Mac OS X</th> 
							<th width="6%" class="center">Linux</th> 
							<th width="7%" class="center">Sistema Desconhecido</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infodispositivos = "infodispositivos";
                        ?>
                        <tr class="<?php echo $infodispositivos ? "infodispositivos" : "" ?>">
                            <td class="center"><?php echo contarWindows10();?></td>
							<td class="center"><?php echo contarWindows7();?></td>
                            <td class="center"><?php echo contarWindows8();?></td>
                            <td class="center"><?php echo contarWindowsXP();?></td>
							<td class="center"><?php echo contarWindows11();?></td>
							<td class="center"><?php echo contariPhone();?></td>
							<td class="center"><?php echo contarAndroid();?></td>
							<td class="center"><?php echo contarMacOSX();?></td>
							<td class="center"><?php echo contarLinux();?></td>
							<td class="center"><?php echo contarOSDesconhecido();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
				
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="infonavegador" src="imgs/infonavegador.png">
                <table>
                    <thead>
                        <tr>
                            <th width="6%" class="center">Internet Explorer</th>
                            <th width="6%" class="center">Firefox</th>
							<th width="5%" class="center">Chrome</th>  
							<th width="5%" class="center">Edge</th>
							<th width="5%" class="center">Opera</th> 	
							<th width="5%" class="center">Safari</th>							                                                       
                            <th width="5%" class="center">Netscape</th> 
                            <th width="5%" class="center">Maxthon</th> 
							<th width="6%" class="center">Konqueror</th> 
							<th width="7%" class="center">Mobile</th> 
							<th width="6%" class="center">Desconhecido</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infonavega = "infonavega";
                        ?>
                        <tr class="<?php echo $infonavega ? "infonavega" : "" ?>">
                            <td class="center"><?php echo contarIE();?></td>
							<td class="center"><?php echo contarFirefox();?></td>
							<td class="center"><?php echo contarChrome();?></td>
							<td class="center"><?php echo contarEdge();?></td>
							<td class="center"><?php echo contarOpera();?></td>
                            <td class="center"><?php echo contarSafari();?></td>                        
							<td class="center"><?php echo contarNetscape();?></td>
							<td class="center"><?php echo contarMaxthon();?></td>
							<td class="center"><?php echo contarKonqueror();?></td>
							<td class="center"><?php echo contarMobile();?></td>
							<td class="center"><?php echo contarBrowserDesconhecido();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
				
                <?php
                endif;
                ?>
            </div>
          </div>
	  
	  
	  
	      <div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "informacoes_media_geral")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="imginfogerais" src="imgs/infogerais.png">
                <table>
                    <thead>
                        <tr>
                            <th width="20%" class="center">Total Clicks</th>
                            <th width="20%">Clicks Liberados (PC)</th>
							<th width="20%">Clicks Desviados (CEL)</th>
                            <th width="20%">Clicks Bloqueados</th>				
                            <th width="20%" class="center">Pais alvo</th>                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infogerais = "infogerais";
                        ?>
                        <tr class="<?php echo $infogerais ? "infogerais" : "" ?>">
					    	<td class="center"><?php echo contarTotal();?></td>
						    <td class="center"><?php echo contarLiberados();?></td>
							<td class="center"><?php echo contarDesviados();?></td>
                            <td class="center"><?php echo contarBloqueados();?></td>                        
                            <td class="center"><?php echo contarPaisAlvo();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
          </div>
	  
	      <div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "informacoes_dispositivos")):
                ?>
				
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="imginfodispositivos" src="imgs/infodispositivos.png">
                <table>
                    <thead>
                        <tr>
                            <th width="6%" class="center">Windows 10</th>
                            <th width="6%" class="center">Windows 7</th>
							<th width="6%" class="center">Windows 8</th>
							<th width="6%" class="center">Windows XP</th>  
                            <th width="6%" class="center">Windows 11</th>
                            <th width="6%" class="center">iPhone</th> 	
                            <th width="6%" class="center">Android</th> 
                            <th width="6%" class="center">Mac OS X</th> 
							<th width="6%" class="center">Linux</th> 
							<th width="7%" class="center">Sistema Desconhecido</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infodispositivos = "infodispositivos";
                        ?>
                        <tr class="<?php echo $infodispositivos ? "infodispositivos" : "" ?>">
                            <td class="center"><?php echo contarWindows10();?></td>
							<td class="center"><?php echo contarWindows7();?></td>
                            <td class="center"><?php echo contarWindows8();?></td>
                            <td class="center"><?php echo contarWindowsXP();?></td>
							<td class="center"><?php echo contarWindows11();?></td>
							<td class="center"><?php echo contariPhone();?></td>
							<td class="center"><?php echo contarAndroid();?></td>
							<td class="center"><?php echo contarMacOSX();?></td>
							<td class="center"><?php echo contarLinux();?></td>
							<td class="center"><?php echo contarOSDesconhecido();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
          </div> 
		  
		  <div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "informacoes_navegadores")):
                ?>
				
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="infonavegador" src="imgs/infonavegador.png">
                <table>
                    <thead>
                        <tr>
                            <th width="6%" class="center">Internet Explorer</th>
                            <th width="6%" class="center">Firefox</th>
							<th width="5%" class="center">Chrome</th>  
							<th width="5%" class="center">Edge</th>
							<th width="5%" class="center">Opera</th> 	
							<th width="5%" class="center">Safari</th>							                                                       
                            <th width="5%" class="center">Netscape</th> 
                            <th width="5%" class="center">Maxthon</th> 
							<th width="6%" class="center">Konqueror</th> 
							<th width="7%" class="center">Mobile</th> 
							<th width="6%" class="center">Desconhecido</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $infonavega = "infonavega";
                        ?>
                        <tr class="<?php echo $infonavega ? "infonavega" : "" ?>">
                            <td class="center"><?php echo contarIE();?></td>
							<td class="center"><?php echo contarFirefox();?></td>
							<td class="center"><?php echo contarChrome();?></td>
							<td class="center"><?php echo contarEdge();?></td>
							<td class="center"><?php echo contarOpera();?></td>
                            <td class="center"><?php echo contarSafari();?></td>                        
							<td class="center"><?php echo contarNetscape();?></td>
							<td class="center"><?php echo contarMaxthon();?></td>
							<td class="center"><?php echo contarKonqueror();?></td>
							<td class="center"><?php echo contarMobile();?></td>
							<td class="center"><?php echo contarBrowserDesconhecido();?></td>
                        </tr>						
                        <?php
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
          </div> 
	  	      	   	   	
		
		 <div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Liberados_Clicks")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="clicksreais" src="imgs/clicksreais.png">
                <table>
                    <thead>
                        <tr>
                            <th width="3%" class="center">Item</th>
                            <th width="12%">Data</th>
                            <th width="10%">IP</th>
							<th width="15%">HOST</th>
                            <th width="3%" class="center">Pais</th>
                            <th width="4%" class="center">Estado</th>
                            <th width="9%" class="center">Cidade</th>
                            <th width="8%" class="center">Dispositivo</th>
							<th width="8%" class="center">Sistema Operacional</th>
                            <th width="6%" class="center">Navegador</th>
                            <th width="14%">Envio</th>
                            <th width="8%" class="center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_reverse($file);
					$file = array_unique($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
					$liberado = trim($data[11]) == "LIBERADO" ? true : false;					                   
                    if ($liberado == true) 
					{
                     ?>
                        <tr class="<?php echo $liberado ? "l1b3r4d0" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}						
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
				
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Desviados_Clicks")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="mobileclicks" src="imgs/mobileclicks.png">
                <table>
                    <thead>
                        <tr>
                            <th width="3%" class="center">Item</th>
                            <th width="12%">Data</th>
                            <th width="10%">IP</th>
							<th width="15%">HOST</th>
                            <th width="3%" class="center">Pais</th>
                            <th width="4%" class="center">Estado</th>
                            <th width="9%" class="center">Cidade</th>
                            <th width="8%" class="center">Dispositivo</th>
							<th width="8%" class="center">Sistema Operacional</th>
                            <th width="6%" class="center">Navegador</th>
                            <th width="14%">Envio</th>
                            <th width="8%" class="center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_reverse($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
					$desviado = trim($data[11]) == "DESVIADO" ? true : false;
                    if ($desviado == true) 
					{
                     ?>
                        <tr class="<?php echo $desviado ? "d3sv" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}								
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
		
		
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Boots_Clicks")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="clicksboots" src="imgs/clicksboots.png">
                <table>
                    <thead>
                        <tr>
                            <th width="3%" class="center">Item</th>
                            <th width="12%">Data</th>
                            <th width="10%">IP</th>
							<th width="15%">HOST</th>
                            <th width="3%" class="center">Pais</th>
                            <th width="4%" class="center">Estado</th>
                            <th width="9%" class="center">Cidade</th>
                            <th width="8%" class="center">Dispositivo</th>
							<th width="8%" class="center">Sistema Operacional</th>
                            <th width="6%" class="center">Navegador</th>
                            <th width="14%">Envio</th>
                            <th width="8%" class="center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_reverse($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
                    $bloqueado = trim($data[11]) == "BLOQUEADO" ? true : false;
					if ($bloqueado == true) 
					{
                     ?>
                        <tr class="<?php echo $bloqueado ? "block" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}                     			
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
			
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_Todos_Clicks")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="todosclicks" src="imgs/todosclicks.png">
                <table>
                    <thead>
                        <tr>
                            <th width="3%" class="center">Item</th>
                            <th width="12%">Data</th>
                            <th width="10%">IP</th>
							<th width="15%">HOST</th>
                            <th width="3%" class="center">Pais</th>
                            <th width="4%" class="center">Estado</th>
                            <th width="9%" class="center">Cidade</th>
                            <th width="8%" class="center">Dispositivo</th>
							<th width="8%" class="center">Sistema Operacional</th>
                            <th width="6%" class="center">Navegador</th>
                            <th width="14%">Envio</th>
                            <th width="8%" class="center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_reverse($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
                    $bloqueado = trim($data[11]) == "BLOQUEADO" ? true : false;
					$desviado = trim($data[11]) == "DESVIADO" ? true : false;
					$liberado = trim($data[11]) == "LIBERADO" ? true : false;
					if ($bloqueado == true) 
					{
                     ?>
                        <tr class="<?php echo $bloqueado ? "block" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}  
                    if ($desviado == true) 
					{
                     ?>
                        <tr class="<?php echo $desviado ? "d3sv" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}		
                    if ($liberado == true) 
					{
                     ?>
                        <tr class="<?php echo $liberado ? "l1b3r4d0" : "" ?>">
                            <td class="center"><?php echo $contador;?></td>
                            <td class="center"><?php echo trim($data[0]);?></td>
                            <td class="center"><?php echo trim($data[1]);?></td>
                            <td class="center"><?php echo trim($data[2]);?></td>
                            <td class="center"><?php echo trim($data[3]);?></td>
                            <td class="center"><?php echo trim($data[4]);?></td>
                            <td class="center"><?php echo trim($data[6]);?></td>
                            <td class="center"><?php echo trim($data[7]);?></td>
							<td class="center"><?php echo trim($data[8]);?></td>
							<td class="center"><?php echo trim($data[9]);?></td>
                            <td class="center"><?php echo base64_decode(trim($data[10]));?></td>
                            <td class="center"><?php echo trim($data[11]);?></td>
                        </tr>						
                    <?php
					}						
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
		
		
		<div class="row">
            <div class="col-sm-12">
                <?php
                    if(!isset($_GET['pag']) || (isset($_GET['pag']) && $_GET['pag'] == "Lista_IPS_Bloqueados")):
                ?>
				<p>&nbsp;</p>
	         	<p>&nbsp;</p>
                <img id="ipsboots" src="imgs/ipsboots.png">
                <table>
                    <thead>
                        <tr>
                            <th width="100%" class="center">Endereço de IP's</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $file = file($arquivoContador);
                    $file = array_reverse($file);
                    $contador = 1;
                    foreach($file as $f):
                    $data = explode("|", $f);
					$bloqueado = trim($data[11]) == "BLOQUEADO" ? true : false;					                   
                    if ($bloqueado == true) 
					{
                     ?>
                        <tr class="<?php echo $bloqueado ? "block" : "" ?>">
                            <td class="center"><?php echo trim($data[1]);?></td>
                        </tr>						
                    <?php
					}						
                    $contador++;
                    endforeach;
                    ?>
                    </tbody>
                </table>
                <?php
                endif;
                ?>
            </div>
        </div>
		
		
    </div>
    <script>
    
       setInterval(() => {
        location.reload();
       }, 10000);
    </script>
</body>
</html>