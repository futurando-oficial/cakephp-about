<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $about
 */
 $this->layout = "CakePagesTemplate.admin";
?>
<div class="container-fluid container-fixed-lg">
    <div class="row">
    <div class="col-lg-12">
        <!-- START card -->
        <div class="card card-default">
        <div class="card-header ">
            <div class="card-title">
            <?= __('About') ?>
            </div>
        </div>
        <div class="card-block">
    <table cellpadding="0" cellspacing="0" class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($about as $about): ?>
            <tr>
                <td class="v-align-middle"><?= $this->Number->format($about->id) ?></td>
                <td class="v-align-middle"><?= h($about->title) ?></td>
                <td class="v-align-middle"><?= h($about->created) ?></td>
                <td class="v-align-middle"><?= h($about->modified) ?></td>
                <td class="actions v-align-middle">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $about->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $about->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $about->id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'),['class'=>"paginate_button previous"]) ?>
            <?= $this->Paginator->prev('< ' . __('previous'),['class'=>"paginate_button previous"]) ?>
            <?= $this->Paginator->numbers(['class'=>'paginate_button']) ?>
            <?= $this->Paginator->next(__('next') . ' >',['class'=>'paginate_button next']) ?>
            <?= $this->Paginator->last(__('last') . ' >>',['class'=>'paginate_button next']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
  </div>
        </div>
        <!-- END card -->
    </div>
    </div>
</div>
