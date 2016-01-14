<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kardex->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kardex->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kardexs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tiposmovimentos'), ['controller' => 'Tiposmovimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposmovimento'), ['controller' => 'Tiposmovimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clifors'), ['controller' => 'Clifors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clifor'), ['controller' => 'Clifors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estoques'), ['controller' => 'Estoques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estoque'), ['controller' => 'Estoques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kardexs form large-9 medium-8 columns content">
    <?= $this->Form->create($kardex) ?>
    <fieldset>
        <legend><?= __('Edit Kardex') ?></legend>
        <?php
            echo $this->Form->input('tiposmovimento_id', ['options' => $tiposmovimentos]);
            echo $this->Form->input('clifor_id', ['options' => $clifors]);
            echo $this->Form->input('produto_id', ['options' => $produtos]);
            echo $this->Form->input('estoque_id', ['options' => $estoques]);
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
