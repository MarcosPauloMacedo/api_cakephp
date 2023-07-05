<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DemaisFuncionario> $demaisFuncionarios
 */
?>
<div class="demaisFuncionarios index content">
    <?= $this->Html->link(__('New Demais Funcionario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Demais Funcionarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idFuncionario') ?></th>
                    <th><?= $this->Paginator->sort('funcao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($demaisFuncionarios as $demaisFuncionario): ?>
                <tr>
                    <td><?= $this->Number->format($demaisFuncionario->id) ?></td>
                    <td><?= $this->Number->format($demaisFuncionario->idFuncionario) ?></td>
                    <td><?= h($demaisFuncionario->funcao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $demaisFuncionario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demaisFuncionario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demaisFuncionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demaisFuncionario->id)]) ?>
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
