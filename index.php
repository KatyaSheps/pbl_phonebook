<?php
require_once ('/manager.php');
?>
<html>
<head>
    <h1>Телефонная книга</h1>
</head>
<body>
    <tr>
        <td>
            <h2>Поиск абонента</h2>
            <form>
                <input type="text" name="subscribername">
                <input type="submit" value="Найти">
            </form>
        </td>
    </tr>
<tr>
    <td>
        <h2>Список телефонов абонентов</h2>
        <table>
            <tr>
                <td>Имя</td>
                <td>Телефон</td>
                <td>
                    <input type="submit" value="Редактировать">
                </td>
                <td>
                    <input type="submit" value="Удалить">
                </td>
<!--        --><?php //foreach ($list as $subscriber ["key"=>"value"]) { Здесь будет форичем перебираться аасоциативный массив из телефонных номеров
//        } ?>
            </tr>
        </table>
    </td>
</tr>
            <tr>
                <td>
                    <h2>Добавить новый контакт</h2>
                    <table>
                        <tr>
                            <td>Имя</td>
                            <td><input type="text" name="subscribername"></td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td><input type="text" name="subscriberphone"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Добавить">
                            </td>
                        </tr>
                    </table>
                </td>
</body>
</html>