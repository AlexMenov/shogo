<?php

//$smartphones = [
//    array(
//        'id' => 1,
//        'color' => [
//            'red',
//            'green',
//            'blue'
//        ],
//        'storage' => [
//            '64 GB', '128 GB', '256 GB'
//        ],
//        'type' => 'smartphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/4380539/img_id7341649431705533527.jpeg/orig',
//        'name' => 'Samsung Galaxy S21',
//        'articul' => 'SMG-S21',
//        'price' => 59990,
//        'currency_id' => 643,
//        'price_old' => 69990,
//        'notice' => null,
//        'content' => 'Смартфон Samsung Galaxy S21 с диагональю экрана 6.2 дюйма, 8 ГБ оперативной памяти и 128 ГБ встроенной памяти.',
//        'visible' => true
//    ),
//    array(
//        'id' => 2,
//        'color' => [
//            'red',
//            'green',
//            'blue'
//        ],
//        'storage' => [
//            '64 GB', '128 GB', '256 GB'
//        ],
//        'section' => 'electronics',
//        'type' => 'smartphones',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://orderit.ru/data/big/iphone-13-pro-silver_5.png',
//        'name' => 'Apple iPhone 13 Pro',
//        'articul' => 'IP13-PRO',
//        'price' => 89990,
//        'currency_id' => 643,
//        'price_old' => 99990,
//        'notice' => null,
//        'content' => 'Смартфон Apple iPhone 13 Pro с диагональю экрана 6.1 дюйма, 6 ГБ оперативной памяти и 128 ГБ встроенной памяти.',
//        'visible' => true
//    ),
//    array(
//        'id' => 3,
//        'color' => [
//            'red',
//            'green',
//        ],
//        'storage' => [
//            '64 GB', '256 GB'
//        ],
//        'type' => 'smartphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'name' => 'OnePlus 9 Pro',
//        'articul' => 'OP9-PRO',
//        'url' => 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71V13OxJg-S._SL1500_.jpg',
//        'price' => 67990,
//        'currency_id' => 643,
//        'price_old' => 75990,
//        'notice' => null,
//        'content' => 'Смартфон OnePlus 9 Pro с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.',
//        'visible' => true
//    ),
//    array(
//        'id' => 4,
//        'color' => [
//            'green',
//            'blue'
//        ],
//        'storage' => [
//            '128 GB', '256 GB'
//        ],
//        'type' => 'smartphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://images.biggeek.ru/1/435/6229/16137-69682375.jpg',
//        'name' => 'Google Pixel 6 Pro',
//        'articul' => 'GP6-PRO',
//        'price' => 77990,
//        'currency_id' => 643,
//        'price_old' => 84990,
//        'notice' => null,
//        'content' => 'Смартфон Google Pixel 6 Pro с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.',
//        'visible' => true
//    ),
//    array(
//        'id' => 5,
//        'color' => [
//            'red',
//            'blue'
//        ],
//        'storage' => [
//            '64 GB', '128 GB'
//        ],
//        'type' => 'smartphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/5173149/img_id6291729731868926805.png/orig',
//        'name' => 'Xiaomi Mi 12 Ultra',
//        'articul' => 'XMI12-ULT',
//        'price' => 79990,
//        'currency_id' => 643,
//        'price_old' => 89990,
//        'notice' => null,
//        'content' => 'Смартфон Xiaomi Mi 12 Ultra с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.',
//        'visible' => true
//    ),
//];
//
//$laptops = [
//    [
//        'id' => 1,
//        'color' => [
//            'red',
//            'blue'
//        ],
//        'storage' => [
//            '1000 HDD', '2000 HDD'
//        ],
//        'type' => 'laptops',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/5032583/img_id3683841579270874537.jpeg/orig',
//        'name' => 'Apple MacBook Pro 16',
//        'articul' => 'MBP-16',
//        'price' => 199990,
//        'currency_id' => 643,
//        'price_old' => 219990,
//        'notice' => null,
//        'content' => 'Ноутбук с экраном 16 дюймов, процессором Intel Core i9 и 1 ТБ SSD',
//        'visible' => true
//    ],
//    [
//        'id' => 2,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'storage' => [
//            '1000 HDD', '2000 HDD'
//        ],
//        'type' => 'laptops',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/xps_13_plus_9320.jpg',
//        'name' => 'Dell XPS 13',
//        'articul' => 'DXPS-13',
//        'price' => 89990,
//        'currency_id' => 643,
//        'price_old' => 99990,
//        'notice' => null,
//        'content' => 'Ультрабук с экраном 13 дюймов, процессором Intel Core i7 и 512 ГБ SSD',
//        'visible' => true
//    ],
//    [
//        'id' => 3,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'storage' => [
//            '1000 HDD', '2000 HDD'
//        ],
//        'type' => 'laptops',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/G14-White-53_05.jpg',
//        'name' => 'ASUS ROG Zephyrus G14',
//        'articul' => 'ARZ-G14',
//        'price' => 149990,
//        'currency_id' => 643,
//        'price_old' => 159990,
//        'notice' => null,
//        'content' => 'Ноутбук для игр с экраном 14 дюймов, процессором AMD Ryzen 9 и NVIDIA GeForce RTX 3060',
//        'visible' => true
//    ],
//    [
//        'id' => 4,
//        'color' => [
//            'black'
//        ],
//        'storage' => [
//            '1000 HDD', '2000 HDD'
//        ],
//        'type' => 'laptops',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/spectreteaser.png',
//        'name' => 'HP Spectre x360',
//        'articul' => 'HPS-X360',
//        'price' => 129990,
//        'currency_id' => 643,
//        'price_old' => 139990,
//        'notice' => null,
//        'content' => 'Ультрабук с экраном 13.3 дюйма, процессором Intel Core i7 и 1 ТБ SSD',
//        'visible' => true
//    ],
//    [
//        'id' => 5,
//        'color' => [
//            'blue',
//            'black'
//        ],
//        'storage' => [
//            '1000 HDD'
//        ],
//        'type' => 'laptops',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/ThinkPad_X1_Carbon_G9_Black_05.jpg',
//        'name' => 'Lenovo ThinkPad X1 Carbon',
//        'articul' => 'LTP-X1C',
//        'price' => 119990,
//        'currency_id' => 643,
//        'price_old' => 129990,
//        'notice' => null,
//        'content' => 'Ноутбук с экраном 14 дюймов, процессором Intel Core i5 и 512 ГБ SSD',
//        'visible' => true
//    ],
//];
//
//$headphones = [
//    [
//        'id' => 1,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'time' => [
//            '4 hours', '6 hours'
//        ],
//        'type' => 'headphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/4386141/img_id3192445659604357803.jpeg/orig',
//        'name' => 'Наушники Sony WH-1000XM4',
//        'articul' => 'SOWH-1000X',
//        'price' => 31990,
//        'currency_id' => 643,
//        'price_old' => 36990,
//        'notice' => null,
//        'content' => 'Описание товара',
//        'visible' => 1
//    ],
//    [
//        'id' => 2,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'time' => [
//            '4 hours', '6 hours'
//        ],
//        'type' => 'headphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img.mvideo.ru/Pdb/50052461b.jpg',
//        'name' => 'Наушники Bose QuietComfort 35',
//        'articul' => 'BOQC-35',
//        'price' => 27990,
//        'currency_id' => 643,
//        'price_old' => 32990,
//        'notice' => null,
//        'content' => 'Описание товара',
//        'visible' => 1
//    ],
//    [
//        'id' => 3,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'time' => [
//            '4 hours', '6 hours'
//        ],
//        'type' => 'headphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/4397006/img_id2430757499298577499.jpeg/orig',
//        'name' => 'Наушники Sennheiser Momentum',
//        'articul' => 'SEM-MOM',
//        'price' => 35990,
//        'currency_id' => 643,
//        'price_old' => 40990,
//        'notice' => null,
//        'content' => 'Описание товара',
//        'visible' => 1
//    ],
//    [
//        'id' => 4,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'time' => [
//            '4 hours', '6 hours'
//        ],
//        'type' => 'headphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://rostov.store123.ru/upload/iblock/c4d/c4d5d680d2d5ff68782bb3b6d1464e3c.jpg',
//        'name' => 'Наушники JBL Quantum 800',
//        'articul' => 'JBLQ-800',
//        'price' => 17990,
//        'currency_id' => 643,
//        'price_old' => 20990,
//        'notice' => null,
//        'content' => 'Описание товара',
//        'visible' => 1
//    ],
//    [
//        'id' => 5,
//        'color' => [
//            'red',
//            'blue',
//            'black'
//        ],
//        'time' => [
//            '4 hours', '6 hours'
//        ],
//        'type' => 'headphones',
//        'section' => 'electronics',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://avatars.mds.yandex.net/get-mpic/1923211/img_id2024942926140111203.png/orig',
//        'name' => 'Наушники AKG K371-BT',
//        'articul' => 'AKGK371-BT',
//        'price' => 17990,
//        'currency_id' => 643,
//        'price_old' => 20000,
//        'notice' => null,
//        'content' => 'Описание товара',
//        'visible' => 1
//    ]
//];
//
//$sience_books = array(
//    array(
//        'id' => 1,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'sience',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img2.labirint.ru/rcimg/6916281973a772173f5b1e316f1e2015/960x540/books72/719288/ph_001.jpg?1642091102',
//        'name' => 'Космические явления',
//        'articul' => 'KJ-123',
//        'price' => 799,
//        'currency_id' => 643,
//        'price_old' => 999,
//        'notice' => null,
//        'content' => 'Описание книги 1',
//        'visible' => 1
//    ),
//    array(
//        'id' => 2,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'sience',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img3.labirint.ru/rc/71ebeecd32635811ba6ec3e999d8cbce/363x561q80/books84/839049/cover.jpg?1641889545',
//        'name' => 'Введение в генетику',
//        'articul' => 'VG-456',
//        'price' => 599,
//        'currency_id' => 643,
//        'price_old' => 699,
//        'notice' => null,
//        'content' => 'Описание книги 2',
//        'visible' => 1
//    ),
//    array(
//        'id' => 3,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'sience',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img1.labirint.ru/rcimg/8d030fe95516d64fd640990b1d60a440/960x540/books70/696855/ph_001.jpg?1564205066',
//        'name' => 'История науки',
//        'articul' => 'IN-789',
//        'price' => 899,
//        'currency_id' => 643,
//        'price_old' => 1099,
//        'notice' => null,
//        'content' => 'Описание книги 3',
//        'visible' => 1
//    ),
//    array(
//        'id' => 4,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'sience',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://bookonlime.ru/sites/default/files/node/product-pdf/fizvys.jpg',
//        'name' => 'Физика высоких энергий',
//        'articul' => 'FVE-246',
//        'price' => 1099,
//        'currency_id' => 643,
//        'price_old' => 750,
//        'notice' => 'Новинка',
//        'content' => 'Описание книги 4',
//        'visible' => 1
//    ),
//    array(
//        'id' => 5,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'sience',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img4.labirint.ru/rc/d2512f824052881e74c84438490df278/363x561q80/books57/563782/cover.jpg?1563960431',
//        'name' => 'История математики',
//        'articul' => 'IM-369',
//        'price' => 799,
//        'currency_id' => 643,
//        'price_old' => 750,
//        'notice' => 'Лучшая цена',
//        'content' => 'Описание книги 5',
//        'visible' => 1
//    )
//);
//
//$romance_books = array(
//    array(
//        'id' => 1,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'romance',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img4.labirint.ru/rc/41a0fc6a3af7ebddc96e5f700e5d65d9/363x561q80/books20/192406/cover.jpg?1612437912',
//        'name' => 'Гордость и предубеждение',
//        'articul' => 'GB-PRD-01',
//        'price' => 550,
//        'currency_id' => 643,
//        'price_old' => 650,
//        'notice' => null,
//        'content' => 'Роман знаменитой английской писательницы Джейн Остин',
//        'visible' => 1
//    ),
//    array(
//        'id' => 2,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'romance',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.moscowbooks.ru/image/book/415/orig/i415823.jpg?cu=20180101000000',
//        'name' => 'Анна Каренина',
//        'articul' => 'AK-01',
//        'price' => 450,
//        'currency_id' => 643,
//        'price_old' => 550,
//        'notice' => null,
//        'content' => 'Роман Льва Толстого',
//        'visible' => 1
//    ),
//    array(
//        'id' => 3,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'romance',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://main-cdn.sbermegamarket.ru/big1/hlr-system/1725198/100022947088b0.jpg',
//        'name' => 'Ромео и Джульетта',
//        'articul' => 'RD-01',
//        'price' => 350,
//        'currency_id' => 643,
//        'price_old' => 400,
//        'notice' => null,
//        'content' => 'Трагедия Уильяма Шекспира',
//        'visible' => 1
//    ),
//    array(
//        'id' => 4,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'romance',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://cv4.litres.ru/pub/c/cover_max1500/66691848.jpg',
//        'name' => 'Война и мир',
//        'articul' => 'VIM-01',
//        'price' => 700,
//        'currency_id' => 643,
//        'price_old' => 850,
//        'notice' => null,
//        'content' => 'Роман Льва Толстого',
//        'visible' => 1
//    ),
//    array(
//        'id' => 5,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'romance',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img3.labirint.ru/rc/1927058a57537edd854803f93079075d/363x561q80/books67/668307/cover.jpg?1618673120',
//        'name' => 'Мастер и Маргарита',
//        'articul' => 'MIM-01',
//        'price' => 600,
//        'currency_id' => 643,
//        'price_old' => 750,
//        'notice' => null,
//        'content' => 'Роман Михаила Булгакова',
//        'visible' => 1
//    )
//);
//
//$fantasy_books = [
//    array(
//        'id' => 1,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'fantasy',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img3.labirint.ru/rc/6bb8355884baec99d811ed3a6c5c73a9/363x561q80/books53/522189/cover.jpg?1455276422',
//        'name' => 'Фундамент',
//        'articul' => 'FB-FND-001',
//        'price' => 599,
//        'currency_id' => 643,
//        'price_old' => 799,
//        'notice' => 'Скидка -25%',
//        'content' => 'Книга о фундаменте',
//        'visible' => true
//    ),
//    array(
//        'id' => 2,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'fantasy',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://img3.labirint.ru/rc/38fe45d40d55ae0636988742be62ffe0/363x561q80/books48/475199/cover.jpg?1612679124',
//        'name' => 'Автостопом по галактике',
//        'articul' => 'FB-HG-002',
//        'price' => 499,
//        'currency_id' => 643,
//        'price_old' => 800,
//        'notice' => null,
//        'content' => 'Описание книги',
//        'visible' => true
//    ),
//    array(
//        'id' => 3,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'fantasy',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://www.moscowbooks.ru/image/book/729/orig/i729635.jpg?cu=20210917174544',
//        'name' => 'Дюна',
//        'articul' => 'FB-DUN-003',
//        'price' => 799,
//        'currency_id' => 643,
//        'price_old' => 899,
//        'notice' => 'Скидка -11%',
//        'content' => 'Описание книги',
//        'visible' => true
//    ),
//    array(
//        'id' => 4,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'fantasy',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://basket-01.wb.ru/vol21/part2150/2150021/images/big/1.jpg',
//        'name' => 'Марсианин',
//        'articul' => 'FB-MRS-004',
//        'price' => 699,
//        'currency_id' => 643,
//        'price_old' => 799,
//        'notice' => 'Скидка -13%',
//        'content' => 'Описание книги',
//        'visible' => true
//    ),
//    array(
//        'id' => 5,
//        'version' => [
//            'book',
//            'pdf',
//        ],
//        'type' => 'fantasy',
//        'section' => 'books',
//        'position' => rand(11111111, 99999999),
//        'url' => 'https://cv2.litres.ru/pub/c/cover_200/126828.jpg',
//        'name' => 'Измененный углерод',
//        'articul' => 'FB-ALT-005',
//        'price' => 899,
//        'currency_id' => 643,
//        'price_old' => 900,
//        'notice' => null,
//        'content' => 'Описание книги',
//        'visible' => true
//    ),
//];
//
//
//foreach ($smartphones as $item) {
//    $adder->add_product($item);
//}
//foreach ($laptops as $item) {
//    $adder->add_product($item);
//}
//foreach ($headphones as $item) {
//    $adder->add_product($item);
//}
//foreach ($sience_books as $item) {
//    $adder->add_product($item);
//}
//foreach ($romance_books as $item) {
//    $adder->add_product($item);
//}
//foreach ($fantasy_books as $item) {
//    $adder->add_product($item);
//}