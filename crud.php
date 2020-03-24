<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">

</head>

<body>
<div>
<div>
<h3> Articles </h3>
</div>
<div class="row">
<table>
<thead>
  <tr>
    <th>titre</th>
    <th>contenu</th>
    <th>image</th>
    <th>date</th>
    <th>status</th>
  </tr>
</thead>
<tbody>
<?php 
include 'database.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM articles ORDER BY id DESC';
foreach ($pdo->query($sql) as $values) {
echo '<tr>';
echo '<td>' . $values['titre'] . '</td>';
echo '<td>' . $rvalues['contenu'] . '</td>';
echo '<td>' . $values['image'] . '</td>';
echo '<td>' . $values['date'] . '</td>';
echo '<td>' . $values['status'] . '</td>';
echo '</tr>';
}
Database::disconnect();
?>
</tbody>
</table>
</div>
</div> 
</body>
</html>