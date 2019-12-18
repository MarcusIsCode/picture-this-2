<?php

require __DIR__.'/views/header.php';

if (!loggedIn()) {
    redirect('/');
}

displayMessage();

displayError();

$user = getUserById($_SESSION['user']['id'], $pdo);

$posts = editPost($_GET['id'], $pdo);

?>

<article>

    <?php foreach ($posts as $post): ?>
        <article class="posts">
            <h2> <?php echo $post['title']; ?> </h2>
            <p> <?php echo $post['id']; ?></p>
            <img class="post-image" src="<?php echo "uploads/".$post['image']; ?>" alt="">
            <p> <?php echo $post['content']; ?> </p>
            <small> <?php echo "Posted by: ".$user['name']; ?></small>
        </article>
    <?php endforeach; ?>


    <h1>Edit post</h1>
    <form action="<?php echo "app/posts/update.php?id=".$post['id']; ?>" method="post" enctype="multipart/form-data">
        <h2>Title</h2>
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" required>
        </div>

        <h2>Image</h2>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" accept=".png, .jpg, .jpeg" name="image" id="image" required>
        </div>

        <h2>Description</h2>
        <div class="form-group">
            <label for="content">Description:</label>
            <textarea class="form-control" name="content" id="content" maxlength="100" required></textarea>
        </div>

        <button type="submit">Save changes</button>
    </form>

    <form action="<?php echo "app/posts/delete.php?id=".$post['id']."&author_id=".$post['author_id']; ?>" method="post">
    <button type="submit">Delete post</button>
    </form>

</article>

<?php require __DIR__.'/views/footer.php'; ?>
