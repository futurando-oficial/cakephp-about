<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $about
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
                        <?= h($about->title) ?>
                    </div>
                </div>
                <div class="card-block">
                    <?= $about->text; ?>
                </div>
                <!-- END card -->
            </div>
        </div>
    </div>
</div>