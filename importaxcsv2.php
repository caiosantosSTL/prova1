<? 
    include('seguridad.php');
    // No almacenar en el cache del navegador esta página. 
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");                     // Expira en fecha pasada 
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");        // Siempre página modificada 
    header("Cache-Control: no-cache, must-revalidate");                   // HTTP/1.1 
    header("Pragma: no-cache");                                           // HTTP/1.0 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Importar CSV</title>
<link href="../css/estilo.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-bg">
  <a class="navbar-brand" href="#">Biopsicosocial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Menú <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item active">
        <a class="nav-link" href="importCSV.php">Importar CSV <span class="sr-only">(current)</span></a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Archivos CSV
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="importCSV.php">Importar CSV</a>
          <a class="dropdown-item" href="exportCSV.php">Exportar CSV</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <? echo $_SESSION["k_username"]; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="closeSession()">Cerrar Sesión</a>
          <!--<a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>-->
        </div>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0" target="_blank" action="https://www.google.com.mx/">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<header>
	IMPORTAR CSV A BASE DE DATOS
</header>
<section>
  <?php //arquivo inicial, onde teremos um botao para ativar a importacao de archivo ?>

<form id="subida"><?php //veremos iso no arquivo javascript ?>
<table>
	<tr>
    	<td><input type="file" id="csv" name="csv" /></td><?php //botao para ativar  ?>
    </tr>
    <tr>
    	<td><input type="submit" value="Importar"/></td>
    </tr>
    <tr>
    	<td id="respuesta"></td>
    </tr>
</table>
</form>


<form id="logoutForm" method="post" action="logout.php">
<!--<table>
    <tr>
        <td><input type="submit" value="Cerrar Sesión"/></td>
    </tr>
</table>-->
</form>
</section>
</body>
</html>
<script type="text/javascript">
    function closeSession() {
        document.getElementById('logoutForm').submit();
    }
</script>