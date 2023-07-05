<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemaisFuncionario $demaisFuncionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Demais Funcionario'), ['action' => 'edit', $demaisFuncionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Demais Funcionario'), ['action' => 'delete', $demaisFuncionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demaisFuncionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Demais Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Demais Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demaisFuncionarios view content">
            <h3><?= h($demaisFuncionario->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcao') ?></th>
                    <td><?= h($demaisFuncionario->funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($demaisFuncionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdFuncionario') ?></th>
                    <td><?= $this->Number->format($demaisFuncionario->idFuncionario) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
