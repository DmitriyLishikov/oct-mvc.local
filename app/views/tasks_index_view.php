<h2>All tasks</h2>
<ul>
    <?php foreach ($this->tasks as $task):        ?>
    <li><a href="/create"> <?= $task['name'] ?></a></li>
    <?php endforeach;?>
</ul>

<input type="submit" value="submit" />


