<?php
    $connect_string = "host=localhost port=5432 dbname=mydb user=user password=123";
    $dbconnect = pg_connect($connect_string);
    $query = "select id_news, name, path_img, text_news from news order by index desc";
    $news = pg_query($dbconnect, $query);
    $news = pg_fetch_all($news); 
    pg_close($dbconnect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>WMTechnolohy</title>
    <link rel="shortcut icon" href="assets/emblem(target).svg" type="image/x-icon">
</head>

<body class="scrollspy-example">

    <header id="header">
        <nav id="navbar-example2" class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
            <div class="container-xxl">
                <a class="navbar-brand" href="#">
                    <img src="assets/emblem(target).svg" width="30" height="30">
                    WMTechnolohy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#header">header</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">News</a>
                            <ul class="dropdown-menu">

                                <?php foreach ($news as $article => $value) { ?>
                                    <li>
                                        <a class="dropdown-item"
                                        href="#scrollspyHeading<?php echo $news[$article]['id_news']?>">
                                            <?php echo $news[$article]['name']?>
                                        </a>
                                    </li>
                                <?php } ?>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">footer</a>
                        </li>
                    </ul>
                </div>
        </nav>
        </div>
    </header>

    <section class="d-flex">
        <div class="container-xxl">
            <div id="foundation" class="row align-items-center">
                <div class="col-9">
                    <h1 ip="one">Приветствую вас на сайте музея оружия: "WMTechnolohy"</h1>
                    <p>Наш музей располагает репликами самого лучшего оружия всех виртуальных миров.
                    От холодного оружия утерянной истории, до винтовок будущего. В нашем музее вы не только
                    увидите невероятные экспонаты, но и узнаете историю их создания и воспроизведения в жизнь.</p>
                    <p><b>Адрес:</b> Вахитовский район, улица Зайцева, 15, Казань, Республика Татарстан, Россия, 420108. </p>
                    <p><b>Время работы:</b> по будням с 12 до 20, в выходные с 10 до 22 </p>
                </div>
                <div class="col-3">
                    <img class="w-100" src="assets/emblem(target).svg" alt="Эмблема">
                </div>
            </div>
        </div>
    </section>

    <section id="card_list">
        <div class="container-xxl">
            
            <?php if($news) { ?>
                <h2>Что же вас ждет в нашем музее?</h2>
            <?php } else { ?>
                <h2>База данных не отвечает!</h2>
            <?php } ?>

            <?php foreach ($news as $article => $value) { ?>

                <div id="scrollspyHeading<?php echo $news[$article]['id_news']?>" class="card align-items-center">
                    <div class="card-div-img">
                        <img src=<?php echo $news[$article]['path_img']?> class="card-img" alt="картинка">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $news[$article]['name']?>
                        </h5>
                        <p class="card-text">
                            <?php echo $news[$article]['text_news']?>
                        </p>
                    </div>
                </div>

            <?php } ?>
            
        </div>
    </section>

    <footer id="footer" class="bg-dark text-center text-white">
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://vk.com/id384036802" role="button">
                    <i class="fab">vk</i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="http://t.me/WalliDO" role="button">
                    <i class="fab">telegram</i></a>
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Oleg-Demin/Weapons_Museum" role="button">
                    <i class="fab">github</i></a>
            </section>
            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Права на все произведения, опубликованные на сайте, принадлежат авторам произведений.
                    Администрация не несет ответственности за содержание работ.
                </p>
            </section>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white" href="#">DO.com</a>
            </div>
            <!-- Copyright -->
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>
