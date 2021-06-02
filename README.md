# Курсовая работа 3 года обучения, 6-го полугодия (2021) Музей оружия "WMTechnolohy"
### Цель проекта:
Разработка рекламного интернет-сайта музея оружия,
размещенного на удаленном сервере, с перечнем статей, описывающем экспонаты или их группы. Также
должна быть предоставлена возможность удаленного создания, изменения или удаления статей.

### Развертывание проекта:
1) Создание виртуальных машин на базе Ubuntu 20.04 focal и Windows 10 с помощью менеджера виртуальных машин Virt-manager основанного на базе гипервизора Qemu-kvm.
2) Установка Openssh-server на сервер Ubuntu 20.04 focal
3) Настройка удаленного доступа по ключам на сервер Ubuntu 20.04 focal через клиент SSH установленный на клиенте управления Manjaro 21.0.3 Ornara.
4) Установка Apache, PostgreSQL, Php и Php-Pgsql на сервер Ubuntu 20.04 focal.
5) Удаленная настройка PostgreSQL на сервере Ubuntu 20.04 focal, а также установка на клиенте управления Manjaro 21.0.3 Ornara системы администрирования баз данных PgAdmin, с последующим подключением к базе данных расположенной на сервере.
6) Удаленная настройка Web-сервера Apache и размещение на нем материалов сайта

### Используемые технологии
Для разработки и реализации сайта были выбраны следующие
программные средства:
1) Virt-manager (менеджер виртуальных машин)
2) Qemu-kvm (гипервизор)
3) Электронно вычислительные машины на базе ОС:
  - Manjaro 21.0.3 Ornara
  - Ubuntu 20.04 focal (virtual machine)
  - Windows 10 (virtual machine)
4) SSH (набор команд для удаленной работы с компьютером)
5) Apache (Web-сервер)
6) PostgreSQL (система управления реляционными базами данных)
7) PgAdmin (платформа для администрирования базы данных)
8) Php-Pgsql (библиотека для связи PHP с PostgreSQL)
9) Php (язык программирования)
10) Visual Studio Code (Графический редактор)
11) Html и Сss (язык гипертекстовой разметки и язык таблиц стилей)
12) Bootstrap (HTML, CSS и JS фреймворк)


1) разработка уникального дазайна
2) создание удобного способа перемещения по сайту
3) размещение ссылок перехода на информационные сети музея (vk, instagramm, ...)
4) разработка набора инструментов для удобного изменения содержимого на странице сайта
### Структура репозитория:
...
### Описание сайта:
Одностраничный сайта с "шапкой" и "подвалом" а также "главным меню" и "основным содержанием" использующий Parallax эффект (css и js). Перемещение по сайту выполняется с низу в верх при помощи колесика мыши или с помощью главного меню находящегося в левой стороне для быстрого перехода по разделам. Основное содержание должно описывать центральную и интересную информацию о музее, а также о его экспонатах.
