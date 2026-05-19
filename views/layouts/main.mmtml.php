<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Mini MVC') ?></title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 800px; margin: 2rem auto; padding: 0 1rem; line-height: 1.6; color: #222; }
        nav { margin-bottom: 1.5rem; padding-bottom: 0.5rem; border-bottom: 1px solid #eee; }
        a { color: #0366d6; text-decoration: none; }
        a:hover { text-decoration: underline; }
        ul { list-style: none; padding: 0; }
        li { padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Главная</a> | <a href="/posts">Посты</a>
    </nav>
    <main>
        <?= $content ?? '' ?>
    </main>
    <footer style="margin-top: 3rem; color: #888; font-size: 0.9rem;">© <?= date('Y') ?> Mini MVC</footer>
</body>
</html>