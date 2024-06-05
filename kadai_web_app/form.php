<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP課題「社員情報入力フォームを作成しよう」</title>
    </head>
    <body>
        <table>
            <h2>社員情報入力フォーム</h2>
            <form action="confirm.php" method="POST">
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age" value="<?php echo isset($_COOKIE['age']) ? $_COOKIE['age'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                        <option>開発部</option>
                        <option>営業部</option>
                        <option>人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </body>
</html>