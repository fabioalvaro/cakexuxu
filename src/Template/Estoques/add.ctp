<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estoques'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estoques form large-9 medium-8 columns content">
    <?= $this->Form->create($estoque) ?>
    <fieldset>
        <legend><?= __('Add Estoque') ?></legend>
        <?php            
            echo $this->Form->input('descricao');            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar Estoque')) ?>
    <?= $this->Form->end() ?>
asdasdasd 
</div>
