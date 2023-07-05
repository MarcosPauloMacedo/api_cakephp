<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionarios view content">
            <h3><?= h($funcionario->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($funcionario->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ctps') ?></th>
                    <td><?= h($funcionario->ctps) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($funcionario->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($funcionario->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEndereco') ?></th>
                    <td><?= $this->Number->format($funcionario->idEndereco) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
