<?php

require __DIR__.'/views/header.php';

// If you're not logged in you'll be redirected
if (!isset($_SESSION['user'])) {
    redirect('/');
}

$user = getUserById($_SESSION['user']['id']);
$avatar = $user['avatar_image'];
$biography = $user['biography'];

$posts = getPostById($_SESSION['user']['id']);

?>

<article>
    <h1>Profile</h1>
        <p>Hello, <?php echo $_SESSION['user']['name']; ?>. This is your profile.</p>
        <h2>Biography</h2>
        <p><?php echo $biography; ?></p>
        <img class="avatar" src="<?php echo "uploads/avatar/".$avatar; ?>" alt="">

        <a href="editprofile.php"><button>Edit profile</button></a>

        <a href="newpost.php"><button>New post</button></a>


    <?php foreach ($posts as $post): ?>
        <article class="posts">
            <h2> <?php echo $post['title']; ?> </h2>
            <p> <?php echo $post['id']; ?></p>
            <a href="<?php echo "editpost.php?id=".$post['id']; ?>"><button>Edit post</button></a>
            <img class="post-image" src="<?php echo "uploads/".$post['image']; ?>" alt="">
            <p> <?php echo $post['content']; ?> </p>
            <small> <?php echo "Posted by: ".$user['name']; ?></small>
            <small> <?php echo "Published: ".$post['date']; ?></small>
        </article>
    <?php endforeach; ?>



</article>

<?php require __DIR__.'/views/footer.php'; ?>
