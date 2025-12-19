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
https://cdn-0.plantuml.com/plantuml/png/jPFFRjD04CRl-nIZSY0MSHyW1rI92qXm0aw08ilPf97StMZNKG_y4NNu8rH49CITLt2jMYrDQrvXvesOdSQA8nK11oGVTZv_y-rlThLxFazSFZ_8bBeD-0qRFC4IArpH4cky19CSQ3zBKWqzMW0LB9xG4hnBdz_B4k-rZzJ6m_BkMeQNIgLX2K-zTbm1t94q683FtTHCHCdiP6gwKWmpRZgqRhIbnk8EKRqGqlxgNmTiohQvLIBfy_lsy84PsrxK3Rq5RoGmKgzRriVpcNOTO6SpVGE7sFuTfYzvVqPZ7FusB77ywgxChfInkOPCZtEmOv46WpQ1u_0hDdY65Rt5aZvXYJKLSF_9euSn7L71QeCNj60Z7G6UunMzmuRLItP_uBh67u0Du4_shUWp9pLOOIctli9QQJE20B36SDF9VeTZE1nf7c2Uva92nzpRu2cUKp607Vn-GoZNy4mExGNGWhrbs0UlTdT-kvUSodyOl0zCTS54N-WZgqkvgh-X60vJQxRdFfFPho5cYTCctxBrec0y3Myid7ND81KTqtiGqfeNh9PX50Qir_XLXsMFb-79_W80

