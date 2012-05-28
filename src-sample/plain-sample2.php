<?php
$list = json_decode(file_get_contents('list.json'), true);
?>
<ul>
<?php foreach ($list as $row): ?>
<li><?php echo $row['name']; ?></li>
<?php endforeach; ?>
</ul>