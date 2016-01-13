<div class="col-lg-6">
<div class="table-responsive">
    <h2>Estoque <?= h($estoque->id) ?></h2>
   <table class="table table-bordered table-hover table-striped">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($estoque->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($estoque->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($estoque->active) ?></td>
        </tr>
    </table>
</div>
</div>