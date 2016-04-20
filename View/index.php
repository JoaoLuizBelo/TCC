<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="Imagens/favicon.ico" type="image/x-icon" />
    <!--CSS-->
    <?php
    require("ListaCss.php");    
?>
        <!--JS-->
        <?php
    require("ListaJs.php");    
?>

            <title>Sistema de Educação Infantil Inteligente</title>

</head>
<script>
    /*	$(document).ready(function () {
        	   $('input').keypress(function (e) {
        			var code = null;
        			code = (e.keyCode ? e.keyCode : e.which);                
        			return (code == 13) ? false : true;
        	   });
        	});*/

</script>

<body>
    <?php
		require_once "Menu.php";
        
        require_once "Corpo.php";
    ?>
</body>

</html>
