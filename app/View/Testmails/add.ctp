
<div class="actions">
	<h3><?php echo $this->Html->link(__('Lista de emails recebidos'), array('action' => 'index')); ?></h3>
</div>

<div class="row">
<div class="col-md-6">
<div class="caixa caixaTamanho">
	<?php echo $this->Form->create('Testmail', array('role' => 'form', 'inputDefaults' => array('label'=>false))); ?>
		<fieldset class="row">
		<?php
			echo $this->Form->input('name', array('class' => 'form-control', 'div' => 'form-group col-md-12', 'placeholder'=>'Nome'));
			echo $this->Form->input('email', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'Email'));
			echo $this->Form->input('phone', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'Telefone'));
			echo $this->Form->input('specify', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'O que você precisa!'));
			echo $this->Form->input('city', array('class' => 'form-control', 'div' => 'form-group col-md-4', 'placeholder'=>'Cidade'));
			echo $this->Form->input('uf', array('class' => 'form-control', 'div' => 'form-group col-md-2', 'placeholder'=>'UF'));
			echo $this->Form->input('message', array('class' => 'form-control', 'div' => 'form-group col-md-12', 'placeholder'=>'Nome'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Enviar')); ?>




</div> <!-- /caixaTamanho -->
</div> <!-- col-md-6 -->

	<div class="col-md-6">
<div class="caixa caixaTamanho">

	<form role="form">
	<div class="row">
		<div class="form-group col-md-12 text-right">

			<textarea class="form-control" rows="3" placeholder="Mensagem" name="mensagem"></textarea>
			<br>
			<button type="submit" class="btn btn-default buttonCustom ">Enviar</button>
		</div>

		</div> <!-- /row  -->

	</form>
</div>
</div> <!-- col-md-6 -->
</div> <!-- row -->
