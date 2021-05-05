-- create database news;
-- drop database news;




-- АВТОРЫ (AUTHORS)
create table authors
(
    id serial primary key,
    login varchar(50) not null,
    password varchar(255) not null,
    name varchar(50) not null,
    surname varchar(50) not null,
    patronymic varchar(50)
); 

-- НОВОСТИ (NEWS)
create table news
(
    id serial primary key,
    index int not null,
    author_id int references authors (id)
        on delete restrict on update cascade not null,
    name varchar(50) not null,
    path varchar(255),
    text_news text not null
);

-- drop table news;
-- drop table authors;




-- АВТОРЫ (AUTHORS)
insert into authors (login, password, surname, name, patronymic) values
-- мужчиты
( 'au1', 'd27acb5098237196da1abcf64af58820', 'Евдокимов', 'Дмитрий', 'Григорьевич' ),
( 'au2', 'd169bcd8b2c728023af1e18a7dfae900', 'Овчаренко', 'Камиль', null ),
-- женщиты
( 'au3', 'e25dbe211ddfb027fcb8271d833159fc', 'Маслова', 'Елизавета', 'Андреевна' ),
( 'au4', '6df6b00eee6e11b5cb9c3405537235c2', 'Антонова', 'Шарлота', null );
-- password = MD5(login)

insert into news (index, author_id, name, path, text_news) values
( 6, 1, 'Новость 1', null, 'Текст 1 новости: очень интересная информация...' ),
( 5, 1, 'Новость 2', null, 'Текст 2 новости: очень интересная информация...' ),
( 4, 2, 'Новость 3', null, 'Текст 3 новости: очень интересная информация...' ),
( 3, 2, 'Новость 4', null, 'Текст 4 новости: очень интересная информация...' ),
( 2, 3, 'Новость 5', null, 'Текст 5 новости: очень интересная информация...' ),
( 1, 3, 'Новость 6', null, 'Текст 6 новости: очень интересная информация...' );

-- delete from news;
-- delete from authors;




-- select * from authors;
-- select * from news;

--select nw.name, nw.path, nw.text_news, au.name, au.surname, au.patronymic
	--from news as nw
	--join authors as au on (au.id = nw.author_id);
