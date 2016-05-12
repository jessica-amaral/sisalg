<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Início</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/form.css" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/estrutura.css" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/exibe.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url()?>estilos/jscript/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/menu.css">
<script src="<?php print base_url(); ?>estilos/jscript/funcoes.js"></script>

</head>
<body>
<?php include '../sisalg/application/views/estrutura/menu.php';	?>

<main>
<?php 
$ult_materia = 0;
foreach ($disciplinas as $d){

	if($d->disciplina_id == $ult_materia){?>

    		<li class="exercicio"><a onclick="submit('<?php echo $d->exercicio_id; ?>')">
    			<form name="<?php echo $d->exercicio_id; ?>" id="<?php echo $d->exercicio_id; ?>" method="post" action="<?php echo base_url()?>submissao"><input name="txtExercicio" id="txtExercicio" type="hidden" value="<?php echo $d->exercicio_id; ?>"></form>
    			<span><?php echo $d->nome_exercicio; ?></span></a>
    		</li>
    	</ul>
  </div>
	<?php }else{?>
	<div class="inicio lista_materias">
    	<h1><?php echo $d->nome_disciplina.' - '.$d->nome_professor;?></h1>
    	<ul>
    	
    	<?php if(isset($d->exercicio_id)){?>
    		<li class="exercicio"><a onclick="submit('<?php echo $d->exercicio_id; ?>')">
    			<form name="<?php echo $d->exercicio_id; ?>" id="<?php echo $d->exercicio_id; ?>" method="post" action="<?php echo base_url()?>submissao"><input name="txtExercicio" id="txtExercicio" type="hidden" value="<?php echo $d->exercicio_id; ?>"></form>
    			<span><?php echo $d->nome_exercicio; ?></span></a>
    		</li>
		<?php }else{?>
		    <li class="desc_materias"><span><?php echo $d->desc_disciplina; ?></span></a>
    		</li>
    	</ul>
  		</div>
		
		<?php }


	 }
		$ult_materia = $d->disciplina_id;
}?>
</main>
</body>
</html>