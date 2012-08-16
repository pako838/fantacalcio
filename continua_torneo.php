<?php

if(isset($_POST['sett']))
{
  $file=fopen("reg.txt", "w") or exit("Impossibile aprire il file!");
        //Fino a che ha raggiunto la fine fai un output della riga
        fwrite($file, "");
        fclose($file);
        echo '<html><head></head>
    <body>
        
        <form name="resgistrazione" id="reg_id" method="POST" action="./selezione.php">
            <input type="hidden" name="sett" value="cancella" />
        </form>
        <script>
            document.getElementById("reg_id").submit();
        </script>
    </body>
</html>';
    
    
    
    
    
    
}else {
    
if(isset($_POST['torneo']))
{
     $file=fopen("reg.txt", "w") or exit("Impossibile aprire il file!");
        //Fino a che ha raggiunto la fine fai un output della riga
        fwrite($file, "<?\n\$torneo=\"");
        fwrite($file, $_POST['torneo']);
        fwrite($file, "\";");
        fclose($file);
        echo ' <html><head></head>
    <body>
        
        <form name="resgistrazione" id="reg_id" method="POST" action="http://torneo.fantacampionatoonline.com/admin/continua_torneo_ser.php">
        <input type="hidden" name="torneo" value="'.$_POST['torneo'].'" />
        <input type="hidden" name="user" value="'.$_POST['login'].'" />
        <input type="hidden" name="pass" value="'.$_POST['pass'].'" />
                </form>
        <script>
            document.getElementById("reg_id").submit();
        </script>
    </body>
</html>
           ';
}  else {
    if(isset($_POST['sett2']))
{
        $frase="!!!ERRORE : Login, Nome Torneo o Password Errate!!!";
        $file=fopen("reg.txt", "w") or exit("Impossibile aprire il file!");
        //Fino a che ha raggiunto la fine fai un output della riga
        fwrite($file, "");
        fclose($file);
        
        
}
    echo '<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title></title>
  </head>
  <body>
      <p align="center" style="font-size: 30px"><font color="#ff99ff">Continua un torneo gia\'
        iniziato!!! </font></p>
         <p align="center"><font color="#ff0000">'.$frase.'</font><br />
    </p>
    <p align="center"></p>
    <form name="continua_torneo" action="./continua_torneo.php" method="POST"><br />
      <p align="center"></p>
      <table width="421" border="0" align="center" >
        <tbody>
          <tr>
            <td align="left"><b>Nome Torneo :<br />
                <br />
              </b> </td>
            <td align="center"><input type="text" name="torneo" required="required" pattern="[\w\s]+"  /><br />
              <br />
            </td>
          </tr>
          <tr>
            <td align="left"><b>Login Amministratore :<br />
                <br />
              </b></td>
            <td align="center"><input type="text" name="login" required="required" /><br />
              <br />
            </td>
          </tr>
          <tr>
            <td align="left"><b>Password Amministratore :<br />
                <br />
              </b></td>
            <td>
              <div align="center"><input type="password" name="pass" required="required" /><br />
              </div>
              <br />
            </td>
          </tr>
        </tbody>
      </table>
      <p align="center"><input type="submit" name="invia" value="Continua campionato" /><br /></p>
    </form>
    <p align="center"><br />
    </p>
  </body>
</html>
';
}}


?>



