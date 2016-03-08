	<h3><?php //echo $this->Html->link(__('Listar de emails recebidos'), array('action' => 'index')); ?></h3>


<div class="row">
	<?php echo $this->Form->create('Testmail', array('role' => 'form', 'inputDefaults' => array('label'=>false))); ?>
	<div class="col-md-6">
		<div class="caixa caixaTamanho">

			<fieldset class="row">
				<?php
				echo $this->Form->input('name', array('class' => 'form-control', 'div' => 'form-group col-md-12', 'placeholder'=>'Nome'));
				echo $this->Form->input('email', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'Email'));
				echo $this->Form->input('phone', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'Telefone'));
				echo $this->Form->input('specify', array('class' => 'form-control', 'div' => 'form-group col-md-6', 'placeholder'=>'O que você precisa!'));
				echo $this->Form->input('city', array('class' => 'form-control', 'div' => 'form-group col-md-4', 'placeholder'=>'Cidade'));
				echo $this->Form->input('uf', array('class' => 'form-control', 'div' => 'form-group col-md-2', 'placeholder'=>'UF'));

				?>
			</fieldset>

		</div> <!-- /caixaTamanho -->
	</div> <!-- col-md-6 -->

	<div class="col-md-6">
		<div class="caixa caixaTamanho">


			<fieldset class="row">
				<div class="form-group col-md-12 text-right">
					<?php echo $this->Form->input('message', array('rows'=>'3','class' => 'form-control', 'div' => false, 'placeholder'=>'Mensagem')); ?>

					<br>
					<?php echo $this->Form->submit('Enviar', array('class'=>'btn btn-default buttonCustom', 'div'=>false)); ?>
				</div>

			</fieldset> <!-- /row  -->


		</div> <!-- /caixaTamanho -->
	</div> <!-- col-md-6 -->
	<?php echo $this->Form->end(); ?> <!-- /form-->
</div> <!-- row -->
