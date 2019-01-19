<?php

require 'QueryBuilder.php';

$db = new QueryBuilder;

$traffic_item = $db->getAllTraffic();

$db->addTraffic();

?>
<table width="60%" border="1px" cellspacing="0">
	<tr>
		<th>period</th>
		<th>code</th>
		<th>raw_count</th>
	</tr>
	<?php foreach ($traffic_item as $item): ?>  
		<tr>  
			<td><?= $item['period'] ?></td>
			<td><?= $item['code'] ?></td>
			<td  align="right"><?= $item['raw_count'] ?></td>
		</tr>
	<?php endforeach; ?>
</table>
