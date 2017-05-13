<?php
/**
 * @var array $comments
 */
$action = "";
if (isset($comment['file'])) {
    $action = "./?update=1&file={$comment['file']}";
}
?>

<form action="<?= $action ?>" method="post">
    <label for="name">Input yor name:</label><br>
    <input
        type="text"
        name="name"
        id="name"
        value="<?= isset($comment['name']) ? $comment['name'] : "" ?>"><br><br>
    <label for="msg">Input your comment:</label><br>
    <textarea
        name="msg"
        id="msg"
        cols="30"
        rows="10"><?= isset($comment['msg']) ? $comment['msg'] : "" ?></textarea><br><br>
    <input type="submit">
</form>

<?php if ($comments): ?>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li>Имя: <?= $comment['name'] ?></li>
            <li>Коментарий: <?= $comment['msg'] ?></li>
            <a href="./?edit=1&file=<?= $comment['file'] ?>">Edit</a><br>
            <a href="./?delete=1&file=<?= $comment['file'] ?>">Delete</a><br>
            <hr>
        <?php endforeach ?>
    </ul>
<?php endif; ?>
