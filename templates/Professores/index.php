<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Professore> $professores
 */
?>
<div class="professores index content">
    <?= $this->Html->link(__('New Professore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Professores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('idFuncionario') ?></th>
                    <th><?= $this->Paginator->sort('titulacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professore): ?>
                <tr>
                    <td><?= $this->Number->format($professore->id) ?></td>
                    <td><?= $this->Number->format($professore->idFuncionario) ?></td>
                    <td><?= h($professore->titulacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $professore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $professore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $professore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professore->id)]) ?>
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
