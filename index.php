<?php

require __DIR__.'/views/header.php';

$allPosts = getAllPosts($pdo);

?>

    <div class="profile-page">
        <h1><?php echo $config['title']; ?></h1>
        <p>Home page.</p>
        <?php if (loggedIn()): ?>
        <p>Welcome, <?php echo $_SESSION['user']['name']; ?>!</p>
    </div>

    <div class="post-wrapper">
        <?php foreach ($allPosts as $post): ?>
            <div class="profile-posts">
                <h2> <?php echo $post['title']; ?> </h2>
                <img class="post-image" src="<?php echo "uploads/".$post['image']; ?>" alt="">
                <p> <?php echo $post['content']; ?> </p>
                <small> <?php echo "Posted by: ".$post['name']; ?></small>
                <small> <?php echo "Published: ".$post['date']; ?></small>
                <small>Likes: 0</small>
                <form action="/app/posts/likes.php" method="post">
                    <button type="submit">Like</button>
                </form>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- <i class="far fa-heart"></i> -->
    <!-- <button class="like-btn"> -->
    <!-- <img class="like-img" src="/assets/icons/star.png" alt="star" data-id="<?php echo $post['id']?>"> -->
    <!-- </button> -->
<?php require __DIR__.'/views/footer.php'; ?>
