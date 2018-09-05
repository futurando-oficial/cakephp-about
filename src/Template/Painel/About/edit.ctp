<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $about
 */
?>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $about->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List About'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="about form large-9 medium-8 columns content">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Edit About') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['id'=>'submit']) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    const textarea = document.querySelector('#text');

    ClassicEditor
            .create(textarea)
            .then(editor => {
                window.editor = editor
            });

    document.getElementById('submit').onclick = () => {
        textarea.value = editor.getData();
    }
</script>