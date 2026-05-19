<?php
/** @var array $post */
?>

<h1><?= htmlspecialchars($post['title']) ?></h1>
<p><?= htmlspecialchars($post['content']) ?></p>
<a href="/posts">← Назад к списку</a>