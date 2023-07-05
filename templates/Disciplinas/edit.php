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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disciplina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Disciplinas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disciplinas form content">
            <?= $this->Form->create($disciplina) ?>
            <fieldset>
                <legend><?= __('Edit Disciplina') ?></legend>
                <?php
                    echo $this->Form->control('idCurso');
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
