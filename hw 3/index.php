<?php

session_start();
//echo"<pre>";
//print_r($_SESSION['errors']);
//echo"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>POST SYS</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main>
    <div class="col-lg-5 mx-auto mt-5">
    <div class="card">
        <div class="card-header">Add post</div>
        <div class="card-body">
           <form method="POST" action="controller/storePost.php">
            <input value="<?= $_SESSION['old']['title'] ?? null ?>" name="title" type="text" placeholder="Post-Title" class="form-control mt-3">
            <span class="text-danger"><?= $_SESSION['errors']['titel_error'] ?? null ?></span> 

            <textarea name="detail" placeholder="Post-details" class="form-control mt-3"><?=$_SESSION['old']['detail'] ?? null ?></textarea>
            <span class="text-danger"><?= $_SESSION['errors']['detail_error'] ?? null   ?></span>

            <input value="<?=$_SESSION['old']['author'] ?? null ?>" name="author" placeholder="Author Name" class="form-control mt-3">
            <span class="text-danger"><?= $_SESSION['errors']['author_error'] ?? null ?></span>

            <button class="btn btn-primary w-100 mt-3">Submit</button>

           </form>
        </div>
    </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
session_unset();