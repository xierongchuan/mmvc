# MMVC

Mini-MVC Framework

## Старт

```bash
mv .env.example .env
```

```bash
php -S localhost:8000 -t public
```


## Структура

- `app/Core/` - Автолоадер и Ядро.
- `app/Controllers` - Контроллеры.
- `app/Models` - Модели данных.
- `public/index.php` - Точка входа.
- `routes/web.php` - Регистрация маршрутов.
- `views/` - Шаблоны MMTML(типо свой Mini-MVC Text Markup Language).
- `.env` - Файл конфигурации.
