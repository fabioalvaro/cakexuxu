<?= $this->Html->link(__('Voltar'), ['action' => 'index'],['class' => 'btn btn-primary']) ?>


<div class="form-group">
<?= $this->Form->create($estoque) ?>
<fieldset>
    <legend><?= __('Novo') ?></legend>
    <?php
    echo $this->Form->input('descricao',['class' => 'form-control']);
    ?>
</fieldset>
<?= $this->Form->button(__('Salvar Estoque'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
</div>







