<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="ICON" sizes="16x16" href="./img/img.ico">
    <link rel="stylesheet" href="./cliente.css">
    <title>Bem vindo </title>
  </head>
<header>  
    <h2><a href="./index.html">&#9776</a></h2>
  <nav>
  <ul>
        <li><a href="./index.html">Home</a></li>
    </ul>
  </nav>
  </header>
  <figure>
    <img src="./img/paisagem.jpg" alt="">
    <figcaption><b> 1. Imagem</b></figcaption>
  </figure>
  <body>
    <section>
    <h1>BEM VINDO</h1>
  </section>
 
  <?php
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $file = $_POST["file"];
   $datetime = date('d/m/Y');
  
   $to      = $email;
   $subject = 'the subject';
   $message = 'hello';
   $headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
   ?>
<!---   
      Reparo no erro do envio de email -- envio via link Direto

<address>
Written by <a href="mailto:webmaster@example.com">Jon Doe</a>.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Disneyland<br>
USA
</address>
      >

<form>
    <fieldset>

      <legend>Cliente</legend>
    <p>Nome : <?= $nome ?></p>
    <p>Email:  <?=$email?></p>
    <p>File : <?= $file ?></p>
    <p>Data : <?= $datetime ?></p><br>
    <br>
    <br>
    <br>
    <button type="submit" id="button" value="Enviar">Enviar</button><br>
    <br>
  </fieldset>
    <br>
    
  </form>
</body>
</html>

   
