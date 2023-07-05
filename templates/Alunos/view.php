<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alunos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aluno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alunos view content">
            <h3><?= h($aluno->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($aluno->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($aluno->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($aluno->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aluno->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idade') ?></th>
                    <td><?= $this->Number->format($aluno->idade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($aluno->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCurso') ?></th>
                    <td><?= $this->Number->format($aluno->idCurso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEndereco') ?></th>
                    <td><?= $this->Number->format($aluno->idEndereco) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
