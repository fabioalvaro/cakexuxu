<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estoque->estoque_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->estoque_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estoques'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estoques form large-9 medium-8 columns content">
    <?= $this->Form->create($estoque) ?>
    <fieldset>
        <legend><?= __('Edit Estoque') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('descricao');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
