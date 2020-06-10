<div>
    <h3> Index Page</h3>
    <p><?= $message ?></p>
    <?= $this->Form->create(null, [
        'type' => 'post',
        'url' => ['controller' => 'Hello', 'action' => 'index']]
        ) ?>
        <!-- テキストタグの生成 -->
        <?= $this->Form->text('text1') ?>
        <?= $this->Form->password('pw') ?>
        <?= $this->Form->textarea('textarea') ?>
        <?= $this->Form->checkbox('check', ['id' => 'check']) ?>
        <?= $this->Form->label('check', 'check!!') ?>

        <?=$this->Form->radio('radio',[
        ['value'=>'男','text'=>'male','checked'=>true],
        ['value'=>'女','text'=>'female']
        ]) ?>
        <?=$this->Form->select('select',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
        ]) ?>
        <?=$this->Form->select('select2',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
        ],['multiple'=>true]) ?>
        <?=$this->Form->date('date',[
        'year'=>['style'=>'width:100px;'],
        'month'=>['style'=>'width:100px;'],
        'day'=>['style'=>'width:100px;']
    ]) ?>
    <?=$this->Form->time('time',[
        'interval'=>5,
        'hour'=>['style'=>'width:100px;']
    ]) ?>
        <?= $this->Form->Submit('OK') ?>
        <?= $this->Form->end() ?>
    </form>
</div>