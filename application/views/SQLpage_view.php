<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Страница с запросами к базе данных!</h1>
            <p>Форма ниже, добавляет записи в таблицу филиалы</p>
            <!-- Добавление записей в таблицу филиалы -->
            <form method="POST" action="/SQLpage">
                <lable>Выберите город:
                    <select name="city">
                        <?php
                        foreach ($data['0'] as $arr) {
                            echo "<option value=\"{$arr['id']}\">{$arr['city_name']}</option>";
                        }
                        ?>
                    </select>
                </lable><br>
                <lable>Введите название компании: <input type="text" name="company"></lable><br>
                <lable>Введите название филиала: <input type="text" name="branch"></lable><br>
                <input type="submit" name="button" value="Создать запись!">
            </form>
            <hr>

            <!-- Вывод таблицы филиалы с использованием обьединения таблиц -->
            <table border="1" cellpadding="10">
                <tr>
                    <td>Город</td>
                    <td>Компания</td>
                    <td>Филиал</td>
                </tr>
                <?php
                foreach ($data['1'] as $arr) {
                    echo "<tr><td>{$arr['city_name']}</td><td>{$arr['company_name']}</td><td>{$arr['branch_name']}</td>";
                }
                ?>
            </table>
        </div>
    </div>
</div>