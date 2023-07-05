<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Funcionario> $funcionarios
 */
?>
<div class="funcionarios index content">
    <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcionarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('ctps') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('idEndereco') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarios as $funcionario): ?>
                <tr>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                    <td><?= h($funcionario->nome) ?></td>
                    <td><?= h($funcionario->telefone) ?></td>
                    <td><?= h($funcionario->ctps) ?></td>
                    <td><?= h($funcionario->cpf) ?></td>
                    <td><?= $this->Number->format($funcionario->status) ?></td>
                    <td><?= $this->Number->format($funcionario->idEndereco) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
