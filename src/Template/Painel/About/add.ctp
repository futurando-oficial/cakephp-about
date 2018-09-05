<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List About'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="about form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Add About') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
