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
            <?= $this->Html->link(__('List Demais Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demaisFuncionarios form content">
            <?= $this->Form->create($demaisFuncionario) ?>
            <fieldset>
                <legend><?= __('Add Demais Funcionario') ?></legend>
                <?php
                    echo $this->Form->control('funcao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
