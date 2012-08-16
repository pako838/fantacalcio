<?php

  if(isset($_POST['sett']))
  {
      $file=fopen("reg.txt", "w") or exit("Impossibile aprire il file!");
        //Fino a che ha raggiunto la fine fai un output della riga
        fwrite($file, "");
        fclose($file);
        echo '<html><head></head>
    <body>
        
        <form name="resgistrazione" id="reg_id" method="POST" action="./form_iscrizione_squadra.php">
            <input type="hidden" name="sett" value="cancella" />
        </form>
        <script>
            document.getElementById("reg_id").submit();
        </script>
    </body>
</html>';
  }else{
  $nome_tor=$_POST['nome_torneo_admin'];
  $nome=$_POST['nome_admin'];
  $pass=$_POST['pass'];
  $cognome=$_POST['cognome_admin'];
  $email=$_POST['e-mail_admin'];
  $tel=$_POST['n-tel_admin'];
  $max=$_POST['max-sq_admin'];
  $file=fopen("reg.txt", "w") or exit("Impossibile aprire il file!");
  //Fino a che ha raggiunto la fine fai un output della riga
  fwrite($file, "<?\n\$torneo=\"");
  fwrite($file, $nome_tor);
  fwrite($file, "\";");
  fclose($file);
  echo "$nome $nome_tor $pass $cognome $email $tel";
  echo '<html><head></head>
    <body>
        
        <form name="resgistrazione" id="reg_id" method="POST" action="http://torneo.fantacampionatoonline.com/registrazione_torneo.php">
            <input type="hidden" name="pass" value="'.$pass.'" />
            <input type="hidden" name="nome_torneo_admin" value="'.$nome_tor.'" />
            <input type="hidden" name="nome_admin" value="'.$nome.'" />
            <input type="hidden" name="cognome_admin" value="'.$cognome.'" />
            <input type="hidden" name="e-mail_admin" value="'.$email.'" />
            <input type="hidden" name="n-tel_admin" value="'.$tel.'" />
           
            
            
        </form>
        <script>
            document.getElementById("reg_id").submit();
        </script>
    </body>
</html>';
     
  }
  ?>
