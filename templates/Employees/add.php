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
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Employee') ?></legend>
                <?php
                    echo $this->Form->control('name', ['required' => true]);
                    echo $this->Form->control('email', ['required' => true]);
                    echo $this->Form->control('phone', ['required' => true, 'type' => 'number']);
                    echo $this->Form->control('dob', ['empty' => true, 'max' => date("Y-m-d")]);
                    echo $this->Form->file('image', ['accept' => '.jpg, .png', 'required' => true]);
                ?>
                    <div id="previewImage" ></div>
                <?php
                    echo $this->Form->control('address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
  function preview_image(input, previewId) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#' + previewId).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>