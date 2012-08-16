

<?php
if(isset($_POST['sett']))
{
    $frase="!!!Nome Login o Nome Torneo GIA ESISTENTI!!!";
}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>form_iscrizione_squadra</title>
  </head>
  <body>
    <p></p>
    <div align="center">
      <form name="form_iscrizione_torneo" action="./reg.php" method="POST">
        <div align="left"><font color="#000000"><b style="background-color: white;">
                    <big>Benvenuto nella schermata per l'iscrizione di un nuovo torneo!</big>
            </b></font></div>
        <p align="center"><font color="#ff0000"><?php echo $frase;?></font><br />
    </p>
        <font color="#000000"><b style="background-color: white;"> </b></font><br />
        <br />
        <div align="left">
          <div align="center">
              <table border="0" align="center" style="width: 100%;">
      <tbody>
        <tr>
          <td>
            <div align="center"><br />
            </div>
            *Nome Login :<br />
          </td>
          <td align="center"><br />
            <input type="text" name="nome_admin" required="required" /><br />
          </td>
        </tr>
        <tr>
          <td><br />
            <div align="left">*Nome Torneo :<br />
            </div>
          </td>
          <td align="center"><br />
              <input type="text" name="nome_torneo_admin" required="required" pattern="[\w\s]+" /><br />
          </td>
        </tr>
        <tr>
          <td><br />
            *Indirizzo e-mail :<br />
          </td>
          <td align="center"><br />
            <input type="email" name="e-mail_admin" required="required" /><br />
          </td>
        </tr>
        <tr>
          <td><br />
              Numero di telefono :<br />
          </td>
          <td align="center"><br />
            <input type="text" name="n-tel_admin" /><br />
          </td>
        </tr>
        <tr>
          <td><br />
            <div align="left">*Password :<br />
            </div>
          </td>
          <td align="center"><br />
            <input type="text" name="pass" required="required" /><br />
          </td>
        </tr>
      </tbody>
    </table>
            <br />
            <br />
            <input type="submit" name="iscrivi" value="Iscrivi" formmethod="post" /><br />
            <br />
            </b>
          </div>
          <br />
<small>*campi obbligatori!</small><br />
<small>*Versione Dimostretiva : Hai a disposizione 5 giornate di prova e un max di 50 squadre!</small><br />
          <br />
        </div>
      </form>
    </div>
    <p><br />
    </p>
  </body>
</html>
