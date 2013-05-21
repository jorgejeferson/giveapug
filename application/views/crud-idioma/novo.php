<?php if (!defined('BASEPATH')) die(); ?>
    <div class="row-fluid">
        <div class="span12">
            <h2><?=$titulo;?></h2>
            <?=$conteudo;?>
            <p>
            	<?=form_open('crud/novo');?>
            	<?=form_label('Sigla do idióma');?>
            	<?$attributes = array('name'=> 'sigla', 'class' => 'cmpTex', 'autofocus'=> '');?>
            	<?=form_input($attributes);?><br>
            	<?=form_label('Título');?>
            	<?$attributes = array('name'=> 'titulo', 'class' => 'cmpTex');?>
            	<?=form_input($attributes);?>
            	<?=form_label('Botão "Leia mais"');?>
            	<?$attributes = array('name'=> 'btLeiaMais', 'class' => 'cmpTex');?>
            	<?=form_input($attributes);?>
            	<?=form_label('Botão "Dorar"');?>
            	<?$attributes = array('name'=> 'btDoar', 'class' => 'cmpTex');?>
            	<?=form_input($attributes);?><br>
            	<?$attributes = array('name'=> 'enviar', 'value' => 'Enviar', 'class' => 'btn');?>
            	<?=form_submit($attributes);?>
            	<?=form_close();?>
            </p>
       </div>
    </div>