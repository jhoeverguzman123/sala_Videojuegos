<!DOCTYPE html>
<html>
<head>
	<title>Welcome to play gamer </title>
	<link rel="icon" type="css/icon.png" href="css/icon2.png" width="500" height="100" />
    <link rel="stylesheet" type="text/css" href="css/styleA.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <div id="login">
      <div align="center">
      <img src="css/consolas.jpg">
      <h1>welcome the play gamer to Capachos  </h1>
        </div>
         <form>
          <p>
            
          <input type="text" name="codigoConsola" placeholder="1234" required=""/><br>
          </br>
          <input type="text" name="ReporteMantenimiento" placeholder="Reporte Mantenimiento" required=""/><br>
          </br>
          <label>Estado consola</label>
         <select name="Estado">
      <option></option>
      <option >buen estado</option>
      <option>En Mantenimiento</option>
      </select><br>
        </br>
              <label>fecha y hora  mantenimiento</label>
              <center>
        <input type="datetime-local" placeholder=""><br>
        </center>
        </br>          
        <p><input type="submit" value="Guardar"></p>
        <a href="javascript:history.go(-1);"><font size="2" face="Arial, Helvetica, sans-serif">Volver al formulario</font></a>
</body>
</html>