-- 1. Создать базу данных library.
#     CREATE DATABASE library;

-- 2. Создать таблицу book. Таблица должна содержать следующие колонки:

-- id - int, primary key, autoincrement
-- title - varchar, not null
-- created_at - datetime, not null
#   USE library;
#   CREATE TABLE book(
#   `id` INT PRIMARY KEY AUTO_INCREMENT,
#   `title` VARCHAR(20) NOT NULL,
#   `created_at` DATETIME NOT NULL
#   );

-- 3. Создать таблицу author. Таблица должна содержать следующие колонки:

-- id - int, primary key, autoincrement
-- first_name - varchar, not null
-- last_name - varchar, not null

#   CREATE TABLE author(
#     `id` INT PRIMARY KEY AUTO_INCREMENT ,
#     `first_name` VARCHAR(20) NOT NULL ,
#     `last_name` VARCHAR(20) NOT NULL
#   );

-- 4. Создать таблицу book_author. Таблица должна содержать следующие колонки:
-- id - int, primary key, autoincrement
-- book_id - int, not null
-- author_id - int, not null

#   CREATE TABLE book_author(
#     `id` INT PRIMARY KEY AUTO_INCREMENT,
#     `first_name` VARCHAR(20) NOT NULL ,
#     `last_name` VARCHAR(20) NOT NULL
#   );

-- 5. Добавить в таблицу book колонку is_published с типом boolean. Значение по-
-- умолчанию - 0. Колонку необходимо разместить перед колонкой created_at.

#   ALTER TABLE book
#     ADD is_published BOOLEAN AFTER title;

-- 6. Добавить в таблицу author колонку email, тип varchar, not null.

#   ALTER TABLE author
#     ADD email VARCHAR(20) NOT NULL;

-- 7. Добавить в таблицу author несколько записей (5 и более).

# INSERT INTO `author` (`first_name`,`last_name`,`email`) VALUES ('Daniel','Defo','dan@mail.ru');
# INSERT INTO `author` (`first_name`,`last_name`,`email`) VALUES ('Djonatan','Svift','djon@mail.ru');
# INSERT INTO `author` (`first_name`,`last_name`,`email`) VALUES ('Lorens','Sten','loren@mail.ru');
# INSERT INTO `author` (`first_name`,`last_name`,`email`) VALUES ('Emiliya','Bronte','emili@mail.ru');
# INSERT INTO `author` (`first_name`,`last_name`,`email`) VALUES ('Gerbert','Uels','ger@mail.ru');

-- 8. Добавить в таблицу book несколько записей (5 и более).

# INSERT book (`title`,`is_published`,`created_at`) VALUES ('Robinson Crusoe','1','1719-10-01');
# INSERT book (`title`,`is_published`,`created_at`) VALUES ('Gullivers Travels','1',NOW());
# INSERT book (`title`,`is_published`,`created_at`) VALUES ('The Opinions','1',NOW());
# INSERT book (`title`,`is_published`,`created_at`) VALUES ('Wuthering Heights','1',NOW());
# INSERT book (`title`,`is_published`,`created_at`) VALUES ('War of the Worlds','1',NOW());

-- 9. Добавить в таблицу записи на основании из таблиц book и author.
-- т.к я ошибся
# DELETE FROM book_author;
# ALTER TABLE book_author CHANGE COLUMN first_name book_id INT NOT NULL ;
# ALTER TABLE book_author CHANGE COLUMN last_name author_id INT NOT NULL ;
# INSERT book_author (`book_id`,`author_id`) VALUES ('1','1');
# INSERT book_author (`book_id`,`author_id`) VALUES ('2','2');
# INSERT book_author (`book_id`,`author_id`) VALUES ('3','3');
# INSERT book_author (`book_id`,`author_id`) VALUES ('4','4');
# INSERT book_author (`book_id`,`author_id`) VALUES ('5','5');

-- 10. Создать запрос на обновление таблицы book, где нужно установить для
-- колонки
-- is_published значение 1 для тех записей, id которых попадает в диапазон 1, 3, 5.

# UPDATE book SET is_published='1' WHERE id='1';
# UPDATE book SET is_published='1' WHERE id='3';

-- 11. Создать запрос на обновление таблицы book, где нужно установить текущую
-- дату (функция NOW()) для колонки created_at для записей, у которых is_published
-- равен 1.
# UPDATE book SET created_at=now() WHERE is_published='1';

-- 12. Создать несколько запросов, где необходимо обновить таблицу author и
-- установить для колонки email составное значение: fist_name _
-- last_name@<любой_ящик>.
    -- Например, есть запись
    -- Джек (first_name) Лондон (last_name). Значение для email должно быть
    -- jack_london@mail.ru.

    # UPDATE `author` SET `email`= 'DanielDefo@gmail.com' WHERE `id`= 1;
    # UPDATE `author` SET `email`= 'LorensSten@gmail.com' WHERE `id`= 4;

    -- 13. Создать запрос на выборку записей из таблицы book по колонкам title,
    -- created_at.
    -- SELECT названия_нужных_полей FROM название_таблицы WHERE условие_выборки
    # SELECT title,created_at FROM book WHERE `id`= 1;

    -- 14. Создать запрос на выборку записей из таблицы author по колонкам first_name,
    -- last_name.
    # SELECT first_name, last_name FROM author WHERE id = 2;

    -- 15. Создать запрос на выборку записей из таблиц book_author, book, author.
    -- Запрос
    -- должен вывести на экран таблицу с колонками:
    --  - title из таблицы book
    --  - first_name из таблицы author
    --  - last_name из таблицы author
    -- Таблица должна быть отсортирована по колонке title таблицы book.
    -- Написать запрос со слабой связкой (таблицы применением LEFT JOIN).
    # SELECT b.title, a.first_name, a.last_name
    # FROM author a
    #   LEFT JOIN book_author ba ON a.id=ba.author_id
    #   LEFT JOIN book b ON b.id=ba.book_id
    #
    # ORDER BY b.title;

    -- 16. Создать запрос на выборку записей из таблиц book_author, book, author.
    -- Запрос
    -- должен вывести на экран таблицу с колонками:
    -- - title из таблицы book
    -- - first_name из таблицы author
    -- - last_name из таблицы author
    -- Таблица должна быть отсортирована по колонке title таблицы book.
    -- Написать два запроса с жесткой связкой (таблицы в секции FROM и применением
    -- INNER JOIN).
    # SELECT title t, first_name f, last_name l
    # FROM author a
    #  JOIN book_author ba ON a.id=ba.author_id
    #  JOIN book b ON b.id=ba.book_id
    #
    # ORDER BY b.title;

    -- 17. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
    -- book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
    -- - title из таблицы book
    -- - first_name из таблицы author
    -- - last_name из таблицы author
    -- Таблица должна удовлетворять следующим условиям:
    -- - is_published равен 1
    -- - значения в first_name должно быть только те, у которых имена начинаются на K
    -- (букву можно подставить любую, в зависимости от ваших записей в табл
    # SELECT b.title, a.first_name, a.last_name
    # FROM author a
    #   LEFT JOIN book_author ba ON a.id=ba.author_id
    #   LEFT JOIN book b ON b.id=ba.book_id
    #
    # WHERE b.is_published = 1 AND a.first_name LIKE 'D%'
    # ORDER BY b.title;

    -- 18. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
    -- book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
    -- - title из таблицы book
    -- - first_name из таблицы author
    -- - last_name из таблицы author
    -- Таблица должна удовлетворять следующим условиям:
    -- - is_published равен 1
    -- - условие, при котором в значениях email должна присутстовать фраза mail (фразу
    -- можно подставить любую, в зависимости от ваших записей в таблице).
    -- Например, есть имейлы
    -- jack_london@mail.ru
    -- charls_dikkens@gmail.com
    -- artur_konan-doil@yandex.ru
    -- В выборке будет фраза %mail%. Тогда в результате должны попасть
    -- jack_london@mail.ru
    -- charls_dikkens@gmail.com
    -- Таблица должна быть отсортирована по колонке title таблицы book.
    # SELECT b.title, a.first_name, a.last_name, a.email
    # FROM author a
    #   LEFT JOIN book_author ba ON a.id=ba.author_id
    #   LEFT JOIN book b ON b.id=ba.book_id
    #
    # WHERE b.is_published = 1 AND a.email LIKE '%gmail%'
    # ORDER BY title;