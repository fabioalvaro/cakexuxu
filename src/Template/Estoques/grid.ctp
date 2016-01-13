<?php
use Cake\ORM\TableRegistry;
$articles = TableRegistry::get('estoques');

// Start a new query.
$estoques = $articles->find();

//receive the value from the search field
$busca = $v_busca;
$estoques->where(['descricao LIKE' => '%'.$busca.'%']);
$estoques->order(['descricao' => 'ASC']); // Still same object, no SQL executed
?>

<?php foreach ($estoques as $estoque): ?>    
    <tr>
        <td><?= $this->Number->format($estoque->id) ?></td>
        <td><?= h($estoque->descricao) ?></td>
        <td><?= $this->Number->format($estoque->active) ?></td>
        <td class="actions">
            <?= $this->Html->link(__('view'), ['action' => 'view', $estoque->id]) ?>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estoque->id]) ?>
            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
        </td>
    </tr>
<?php endforeach; ?>

