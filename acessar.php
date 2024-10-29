<?php

session_start();


if(isset($_POST['usuario']) && strlen($_POST['usuario']) > 0 && isset($_POST['senha']) && strlen($_POST['senha']) > 0){

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = md5($_POST['senha']);
    header("Location: cliques.php?pag=Lista_Todos_Clicks");
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;

            font: inherit;
            vertical-align: baseline;
            color: #ffff;
        }

        body{
            font-family: 'Roboto', sans-serif;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body{
            background:#2b2b2b;
            padding-top: 20px;
        }
        form{
            width: 900px;
            margin: 100px auto;
            border: 1px solid #007acc;
            padding: 20px;
        }
        input{
            display: block;
            width: 50%;
            margin-bottom: 20px;
            background: none;
            border: 1px solid #007acc;
            padding: 10px;
            box-sizing: border-box;
            color: #084EBB;
        }
        input::placeholder {
            color:#084EBB;
            opacity: 1; /* Firefox */
        }
        button{
            padding: 5px;
            color: #fff;
            border: none;
            background-color: #084EBB;
            width: 50%;
			height: 50px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	    <center>
	    <img id="logo" src="imgs/logo.png" align="middle">
		</center>
		<p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<center>
        <input type="text" placeholder="Usuário" name="usuario">
        <input type="password" placeholder="Senha" name="senha">
		<p>&nbsp;</p>
        <p>&nbsp;</p>
        <button type="submit">LOGIN</button>
		</center>
		<p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </form>
   
</body>
</html>