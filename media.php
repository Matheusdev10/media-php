<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>

  <?php
  $nota1 = isset($_GET["n1"])? $_GET["n1"]: "sem nota 1";
  $nota2 = isset($_GET["n2"])? $_GET["n2"]: "sem nota 2";
  $media = ($nota1 + $nota2) / 2;
  echo "A média do aluno foi $media";
  if($media < 5){
    $situacaoDoAluno = "Reprovado";
  }elseif ($media >= 5 && $media <= 7 )
    $situacaoDoAluno = " de recuperação";
  else{
    $situacaoDoAluno = "Aprovado";
  }
  echo "<br/> O aluno esta $situacaoDoAluno";

?>
  </div>
</body>
</html>