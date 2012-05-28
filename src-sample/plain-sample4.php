<?php
require_once 'plain-sample4-func.php';
$list = json_decode(file_get_contents('list.json'), true);

?>
<ul>
<?php foreach ($list as $row): ?>
<li><?php echo getLabel($row['name'], $row['sex']); ?></li>
<?php endforeach; ?>
</ul>