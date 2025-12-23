Класс User (Базовый класс пользователя)
Расположение: src/Classes/User.php

Назначение: Базовый класс для представления пользователя системы.

Свойства:

public string $name - имя пользователя

public string $login - логин для входа

private string $password - пароль (закрытый доступ)

Методы:

Конструктор __construct(string $name, string $login, string $password)

Инициализирует свойства объекта при создании

Принимает имя, логин и пароль

showInfo(): string

Возвращает HTML-строку с информацией о пользователе

Формат: имя и логин в оформленном HTML-блоке

Деструктор __destruct()

Автоматически вызывается при удалении объекта

Выводит сообщение: "Пользователь [логин] удален."

Класс SuperUser (Расширенный класс пользователя)
Расположение: src/Classes/SuperUser.php

Наследование: Расширяет класс User

Назначение: Класс для пользователей с расширенными правами (администраторы).

Дополнительное свойство:

public string $role - роль пользователя в системе (например, "administrator")

Методы:

Конструктор __construct(string $name, string $login, string $password, string $role)

Принимает 4 параметра (три из родительского класса + роль)

Вызывает родительский конструктор для первых трех параметров

Устанавливает значение свойства role

showInfo(): string (перегрузка метода)

Возвращает HTML-строку с полной информацией, включая роль

Формат: имя, логин и роль в оформленном HTML-блоке

Пространства имен: Классы используют пространство имен src\Classes

Автозагрузка: В users.php реализована автозагрузка классов через spl_autoload_register

Типизация: Использованы строгие типы (declare(strict_types=1))

HTML-интеграция: Методы возвращают готовый HTML-код для отображения в браузере
![Диаграмма классов User и SuperUser](https://www.plantuml.com/plantuml/png/jPFFRjD04CRl-nIZSY0MSHyW1rI92qXm0aw08ilPf97SNMlNKG_y4Ktu8rH49CITLt2jMYrDQrvXvesOdSQA8nK11oGVTZv_y-rlThLxlaXSCJl8r6t0RzZW2PPOuOgMMECbcEH0-pn9DVHe0JHdyOIMu5tw_5wMUAzzf3OUbdVNChnKAWrBUEgrumhWZgJ107pXfcOYIcOdKzELOiYvwT2wqPOQYpj4zK98-wj_7R0fs-PMYQJFxzl31sPiUr4tz1QyaS18lMvP7yzoxJh0pcRw1Wwn_JjCN_B-ZCOu_6rOubaUlxehqojbRA4Xq-C2x5YamQ3Du43yYWsUOKLliQHFM69DSxZ_vD73c8vepcg35xHW8nq1dkCLlSE6rKjsV-2wnX-03U1FzgteCoSrM64fzxx2McapWW2mnd3JoNw7OpWSQHvXbXP2GiVSs-0fdjDy03lu_OPGhk6P7DiBe0Lxox0FNktk_7OlEPV_C7WVcEg2YRxGHrQNSbb_Gp4SfjPiptqcirz3v8dJfjYozQ9WF0slB9nrpI0L7TDx4DAQ5woMOHG6hDVurOPbZrVyP7y1)

