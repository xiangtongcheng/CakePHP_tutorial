<div>
    <h3>Edit Person</h3>
    <!-- createの引数を元にフォームを作成する　各値が入力された状態になる -->
    <?= $this->Form->create($person) ?>
    <fieldset>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('age');
            echo $this->Form->input('mail');
        ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>