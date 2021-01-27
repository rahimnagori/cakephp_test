<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('name', ['required' => true]);
                    echo $this->Form->control('email', ['required' => true]);
                    echo $this->Form->control('phone', ['required' => true, 'type' => 'number']);
                    echo $this->Form->control('dob', ['empty' => true, 'max' => date("Y-m-d")]);
                    // echo $this->Form->file('image', ['accept' => '.jpg, .png']);
                    // echo $this->Form->hidden('old_image', ['required' => true, 'value' => $employee->image]);
                    echo $this->Form->control('address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
