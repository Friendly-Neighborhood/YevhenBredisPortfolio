# Portfolio — Deploy & Customize Guide

## Структура файлов

```
portfolio/
├── index.php       ← главный файл (вся логика здесь)
├── style.css       ← все стили
├── README.md       ← эта инструкция
└── images/         ← создай папку и закинь сюда скриншоты
    ├── case1-1.jpg
    ├── case1-2.jpg
    ├── case2-1.jpg
    └── case2-2.jpg
```

---

## Как залить на хостинг

1. Загрузи все файлы на хостинг через FTP или панель управления (cPanel/FileZilla)
2. Убедись что `index.php` лежит в корне сайта (или в нужной папке)
3. Создай папку `images/` рядом с `index.php`
4. Закинь туда скриншоты кейсов

---

## Как редактировать данные

Открой `index.php` — в самом верху блок конфига:

### Имя и bio
```php
$name_first = "Your";       // ← имя
$name_last  = "Name";       // ← фамилия (отображается курсивом)
$bio        = "I design...";// ← текст о себе
$location   = "Odesa, UA";  // ← локация
```

### Контакты
```php
$email    = "your@email.com";
$behance  = "behance.net/yourhandle";
$linkedin = "linkedin.com/in/yourhandle";
$available = true; // true = "Open to work", false = скрыть
```

### Инструменты
```php
$tools = [
  "Figma"       => true,  // true = красный акцент
  "Adobe XD"    => false, // false = обычный
  // добавь/удали по необходимости
];
```

### Кейсы
```php
$cases = [
  [
    "num"      => "01",
    "type"     => "Website",         // тип (отображается как бейдж)
    "year"     => "2024",
    "title"    => "Название<br>проекта",
    "desc"     => "Описание проекта",
    "role"     => "Lead UX/UI",
    "duration" => "3 months",
    "platform" => "Web",
    "images"   => ["images/case1-1.jpg", "images/case1-2.jpg"],
  ],
  // добавь ещё кейсы по аналогии
];
```

### Добавление скриншотов
- Положи файлы в папку `images/`
- Укажи пути в `$cases[n]['images']`
- Поддерживаются: `.jpg`, `.png`, `.webp`
- Если файл не найден — показывается placeholder автоматически

---

## Добавить кейс

Скопируй блок в `$cases` и заполни данные:
```php
[
  "num"      => "03",
  "type"     => "Brand Identity",
  "year"     => "2025",
  "title"    => "Новый<br>Проект",
  "desc"     => "Описание",
  "role"     => "Art Director",
  "duration" => "2 months",
  "platform" => "Print / Digital",
  "images"   => ["images/case3-1.jpg"],
],
```

---

## Требования к хостингу

- PHP 7.4+ (есть у любого хостинга)
- Никаких баз данных не нужно — всё статично
