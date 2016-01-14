<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clifor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clifor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clifors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kardexs'), ['controller' => 'Kardexs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kardex'), ['controller' => 'Kardexs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clifors form large-9 medium-8 columns content">
    <?= $this->Form->create($clifor) ?>
    <fieldset>
        <legend><?= __('Edit Clifor') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('doc');
            echo $this->Form->input('tipodoc');
            echo $this->Form->input('tipoclifor');
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
