<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $dados['titulo_pagina']; ;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/form.css" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/estrutura.css" />
<link rel="stylesheet" href="<?php echo base_url()?>estilos/css/exibe.css" />
<script src="<?php print base_url(); ?>estilos/jscript/nova_submissao.js"></script>
<script src="<?php print base_url(); ?>estilos/jscript/funcoes.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url()?>estilos/jscript/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
   
<?php if($dados['pagina'] == 'nova_submissao.php'){?>
<script src="<?php print base_url(); ?>estilos/jscript/nova_submissao.js"></script>
<?php }?>

   <link rel="stylesheet" href="<?php echo base_url()?>estilos/css/menu.css">
</head>
<body>
    	<?php include '../sisalg/application/views/estrutura/menu.php';	?>

<main>
  <div class="helper">
    	<?php include $dados['pagina'];	?>
  </div>
</main>

</body>
</html>