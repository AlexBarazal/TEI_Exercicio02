<?php
// Check for empty fields
if(empty($_POST['nome'])      ||
   empty($_POST['email'])     ||
   empty($_POST['assunto'])     ||
   empty($_POST['mensagem'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Sem argumentos passado!";
   return false;
   }
   
$nome = strip_tags(htmlspecialchars($_POST['nome']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$assunto = strip_tags(htmlspecialchars($_POST['assunto']));
$mensagem = strip_tags(htmlspecialchars($_POST['mensagem']));
   

$destino = 'alexbarazal@gmail.com'; 
$email_origem = "Contato TEI:  $nome";
$email_corpo = "Você recebeu um email do contato da pagina TEI.\n\n"."Aqui estão os detlhes:\n\nNome: $nome\n\nEmail: $email\n\nAssunto: $assunto\n\nMensagem:\n$mensagem.\n\nEmail: \n$email"; 
echo "Sua mensagem foi enviada com sucesso";   
mail($destino,$email_origem, $email_corpo);
return true;         

?>