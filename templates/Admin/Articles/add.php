<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Article') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('details');
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('image', ['type'=>'file']);
                    echo $this->Form->control('craeted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
