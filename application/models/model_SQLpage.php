<?php

class Model_SQLpage extends Model
{
    public function get_data()
    {
        require_once 'config.php';
        $link = new mysqli($host, $username, $password, $db_name);
        if (mysqli_connect_error()) {
            echo 'Подключение невозможно' . mysqli_connect_error();
        }

        // запрос списка городов
        $result1 = $link->query('SELECT * FROM cities');
        while ($row = $result1->fetch_assoc()) {
            $r1[] = $row;
        }

        // запрос на запись в таблицу филиалы
        if (isset($_POST['button'])) {
            $errors = array();

            if ($_POST['company'] == '') {
                $errors[] = 'Выберите название компании';
            }

            if ($_POST['branch'] == '') {
                $errors[] = 'Введите название филиала';
            }

            if ($_POST['city'] == '') {
                $errors[] = 'Выберите город';
            }

            if (empty($errors)) {
                // print_r($_POST);
                $city = $_POST['city'];
                $company = $_POST['company'];
                $branch = $_POST['branch'];
                $link->query("INSERT INTO branches SET city_name = $city, company_name = '$company', branch_name = '$branch'");
            } else {
                echo '<span style="color: red">' . $errors['0'] . '<hr>' . '</span>';
            }
        }

        // запрос на вывод таблицы Филиалы
        $result2 = $link->query('SELECT cities.city_name, company_name, branch_name FROM branches JOIN cities ON branches.city_name=cities.id');
        while ($row = $result2->fetch_assoc()) {
            $r2[] = $row;
        }
        // print_r($r2);
        $data[] = $r1;
        $data[] = $r2;
        $link->close();
        return $data;
    }
}
