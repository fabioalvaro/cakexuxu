<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tiposmovimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposmovimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposmovimento) ?>
    <fieldset>
        <legend><?= __('Add Tiposmovimento') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
