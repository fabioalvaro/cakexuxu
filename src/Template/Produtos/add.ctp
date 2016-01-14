<?= $this->Html->link(__('Voltar'), ['action' => 'index'],['class' => 'btn btn-primary']) ?>
<div class="form-group">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Add Produto') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('custo');
            echo $this->Form->input('ativo');
            echo $this->Form->input('departamento_id', ['options' => $departamentos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
