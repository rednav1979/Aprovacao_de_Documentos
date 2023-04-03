<?php
 ini_set('default_charset','ISO-8859-1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body onload="aviso()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">CONTROLE DE SOLICITAÇÕES  DE PAGAMENTOS  </a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">TECNOLOGIA DA INFORMACAO</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                  
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->
</script>


 

<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a)";
$usuariosql = $_SESSION['usuarioNome'];
?>  
    <script>  

    
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
	
function Mascara_Hora(hora){ 
var hora01 = ''; 
hora01 = hora01 + hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_inicio.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora(); 
} 
} 
           
function Verifica_Hora(){ 
hrs = (document.forms[0].hora_inicio.value.substring(0,2)); 

min = (document.forms[0].hora_inicio.value.substring(3,5)); 
               
               
estado = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado = "errada"; 
} 
               
if (document.forms[0].hora_inicio.value == "") { 
estado = "errada"; 
} 



if (estado == "errada") { 
alert("Por Favor, Verifique os valores de Hora Inicial !"); 
document.forms[0].hora_inicio.focus(); 
} 
} 



function Mascara_Hora2(Hora){ 
var hora01 = ''; 
hora01 = hora01 + Hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_final.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora2(); 
} 
} 
           
function Verifica_Hora2(){ 
hrs = (document.forms[0].hora_final.value.substring(0,2)); 

min = (document.forms[0].hora_final.value.substring(3,5)); 
               
               
estado2 = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado2 = "errada"; 
} 
               
if (document.forms[0].hora_final.value == "") { 
estado2 = "errada"; 
} 



if (estado2 == "errada") { 
alert("Por Favor, Verifique os valores de Hora Final!"); 
document.forms[0].hora_final.focus(); 
} 
} 
function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '/';
                  document.forms[0].data.value = data;
      return true;              
              }
              if (data.length == 5){
                  data = data + '/';
                  document.forms[0].data.value = data;
                  return true;
              }
         }
		 function moeda(z){
v = z.value;
v=v.replace(/\D/g,"") // permite digitar apenas numero
v=v.replace(/(\d{1})(\d{14})$/,"$1.$2") // coloca ponto antes dos ultimos digitos
v=v.replace(/(\d{1})(\d{11})$/,"$1.$2") // coloca ponto antes dos ultimos 11 digitos
v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") // coloca ponto antes dos ultimos 8 digitos
v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") // coloca ponto antes dos ultimos 5 digitos
v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2") // coloca virgula antes dos ultimos 2 digitos
z.value = v;
} 

//-->
</script>
                                       

<br><br>
<br>
<?php

//criar a conexÃ£o com o banco

include "sql.php";



if(isset($_POST['done'])){   

    $solicitante = $_POST['solicitante']; 
    $referencia = $_POST['referencia'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $observacoes = $_POST['observacoes'];    
    $email_solicitante = $_POST['email_solicitante'];
	$status = 'AGUARDANDO';
	
	// AUDITORIA 
    $ip = $_SERVER['REMOTE_ADDR'];
    $usuario = $_SESSION['usuarioNome'];    


    
 if(empty($solicitante) || empty($referencia)|| empty($data) || empty($valor)|| empty($observacoes)|| empty($email_solicitante)){

        $erro = "Atenção, você deve preencher todos os campos";
				
		
		

    }else{        

      $sql = mysql_query("INSERT INTO `pagamentoscs`(`solicitante`, `referencia`, `dtpagamento`, `valor`,`observacoes`,`email_solicitante`,`status`,`data_cadastro`,`ip`,`usuario`) VALUES ('$solicitante', '$referencia', '$data', '$valor','$observacoes','$email_solicitante','AGUARDANDO',now(),'$ip','$usuario')") or die(mysql_error());

            if($sql){

                $erro2 = "Dados cadastrados com sucesso!";

$mensagem_email= $_POST['solicitante']." ,sua solicitação foi enviada com sucesso assim que autorizado você sera notificado!";
$mensagem_email2= $solicitante." ,solicitou pagamento referente a ".$referencia.", por favor verifique aprovação no link http://intranet.costasul.com.br/ti/procedimentos/pagamentos/autorizacao/aFv5G6H7F8j64Rfh3xdd444.php";

$recebe_email1 = $_POST['email_solicitante'];
$recebe_email2 = "vanderlei@costasul.com.br";

$cabecalho = "From: pagamentoscs@costasul.com.br" . "\r\n" . "Reply-To: ti@costasul.com.br" . "\r\n";

mail($recebe_email1,"*** SOLICITAÇÃO DE PAGAMENTOS***",$mensagem_email,$cabecalho);
mail($recebe_email2,"*** AUTORIZACAO DE PAGAMENTOS***",$mensagem_email2,$cabecalho);



              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>



 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
.campo{
width:400px;
}
</style>



</head>



<form name="form1" action="index.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}


if(isset($erro2)){

    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';

}

?>
<blockquote>
<table border="0" >

<thead>

<tr>

<th colspan="2">.:: CADASTRO DOS DADOS::.</th>
</tr>

</thead>

<tbody>

<tr>

<td width="20%">Solicitante:</td>
<td><input name="solicitante" type="text" class="campo"  maxlength="10" onkeyup="maiuscula(this)" id="solicitante" /></td>
</tr>

<tr>

<td>Referencia:</td>

<td><input name="referencia" type="text" class="campo" onkeyup="maiuscula(this)" id="referencia" /></td>

</tr>




<tr>
<td>Data:</td>

<td><input name="data" type="text" class="campo"  id="data" OnKeyUp="mascaraData(this);" maxlength="10" /></td> 

</tr>
<tr><td>Valor R$:</td><td><input type="text" name="valor" id="valor" value=""  class="campo"size=10 onkeyup="moeda(this);"/></td></tr>

<tr>

<td>Observações:</td>

<td><input name="observacoes" type="text" class="campo" onkeyup="maiuscula(this)" id="observacoes" /></td>

</tr>

<tr>

<td>Email Solicitante:</td>

<td><select name="email_solicitante">	
		<option>vanderlei@costasul.com.br</option>
		<option>heitor@costasul.com.br</option>
		<option>alexandra@costasul.com.br</option>				      
</select>
 </td>
</tr>

<td><input type="submit" value="Cadastrar" /><input type="hidden" name="done"  value="" /></td>

</tr>

</tbody>

</table>

</form>

<hr>


</blockquote>



<br>
</font>
</font></font>
<br>
<a href="login.php"><img src=images/sair.png width=50 height=50></a>
Sair


</body>
</html>

