<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disciplinas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Disciplina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disciplinas view content">
            <h3><?= h($disciplina->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($disciplina->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disciplina->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCurso') ?></th>
                    <td><?= $this->Number->format($disciplina->idCurso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdProfessor') ?></th>
                    <td><?= $this->Number->format($disciplina->idProfessor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
