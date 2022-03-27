<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/app.css" rel="stylesheet"/>
  <script src="./js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My Blog Posts Page</h1>
  <p>Welcome to our blog posts</p>
</div>

<div class="container mt-5">
  <div class="row">
    <?php foreach($posts as $post): ?>
    <div class="col-sm-4">
      <?php echo $post; ?>
      <a href="{{ url('posts/') }}" class="text-dark">Go To Full Page</a>
      <br><br>
    </div>
    <?php endforeach; ?>
  </div>
</div>
