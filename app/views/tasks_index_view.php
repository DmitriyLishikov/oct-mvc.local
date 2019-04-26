<h2>All tasks</h2>
<input type="button" value="add task" name="add_task"/>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li> <?= $task['name'] ?></li>
    <?php endforeach; ?>
</ul>