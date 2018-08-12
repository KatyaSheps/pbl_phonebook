<?php
function v($data, $needForDie = true) {
	echo "<pre>";
	var_dump($data);
	if ($needForDie == true) {
		die();
	}
}

if (isset($_POST['name']) && isset($_POST['phone'])) {
	$note = implode(';', $_POST) . "\r\n";
	file_put_contents('data/phones.txt', $note, FILE_APPEND | LOCK_EX);
}

$notes = file('data/phones.txt');
?>

<html>
<head>
    <title>ИП Залупкин ©. Телефонная книга ®</title>
</head>
<body>
<h1>Список телефонов</h1>
<table>
    <thead>
    <th>Имя</th>
    <th>Телефон</th>
    </thead>
    <tbody>
	<? if (empty($notes)): ?>
        <tr>
            <td colspan="2">В настоящий момент телефонов нет</td>
        </tr>
	<? else: ?>
		<? foreach ($notes as $note) {
		    list($name, $phone) = explode(';', $note);
		    ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $phone ?></td>
            </tr>
		<? } ?>
	<? endif; ?>
    </tbody>
</table>
<br><br>
<h3>Создать запись</h3>
<form method="post">
    Имя: <input type="text" name="name">
    Телефон: <input type="text" name="phone">
    <input type="submit" value="Создать">
</form>
</body>
</html>