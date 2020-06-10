<?php foreach ($persons as $person): ?>

<tr>
    <td><?= h($person->id) ?></td>
    <td><?= h($person->name) ?></td>
    <td><?= h($person->age) ?></td>
    <td><?= h($person->mail) ?></td>
    <br/>
</tr>
<?php endforeach; ?>