<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="Wi9EM7vZjyKumVjQmoIhrlrj6W9WBwZZU3zjl0bq5XI"/>

    <title><?= $app_title; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">

</head>

<body>

<!-- Main header -->
<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex flex-column flex-sm-row justify-content-end align-items-center">
                    <div class="contacts marg-right pr-sm-5 lang-menu">
                        <div>
                            <small><?= $header['lang_menu']; ?></small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ua']) ?>"
                               class="<?php if ($locale == 'ua') echo 'active-lang'; ?>">УКР</a>
                            <span class="dot-middle">&#183;</span>
                            <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>"
                               class="<?php if ($locale == 'ru') echo 'active-lang'; ?>">РУС</a>
                        </div>
                    </div>
                    <div class="contacts">
                        <div>
                            <small><?= $header['application']; ?></small>
                        </div>
                        <a href="tel:+38<?= phone_link($phone_1); ?>" class="v-center"><?= $phone_1; ?></a>
                        <a href="tel:+38<?= phone_link($phone_2); ?>" class="v-center"><?= $phone_2; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>