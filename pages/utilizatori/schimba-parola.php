<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
  <header id="home">
    <div class="bg-img" style="background-image: url('/PIE/img/papetarie.jpg');">
      <div class="overlay"></div>
    </div>
    
    <?php
        require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/navbar.php'; 
        requireAdmin();
    ?>

    <div class="home-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
              <h1 class="white-text">Utilizatori</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="about" class="section md-padding" style="background-color:#2F4F4F">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="title">Schimba Parola</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col col-lg-3"></div>
      <div class="col col-lg-6">
        <form method="post" action="/PIE/backend/process-request.php">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class=" form-group">
            <label for="parola">Parola</label>
            <input type="password" class="form-control" id="parola" name="parola">
          </div>
          <div class="form-group">
            <label for="conf-parola">Confirma Parola</label>
            <input type="password" class="form-control" id="conf-parola" name="conf-parola">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Schimba</button>
        </form>
      </div>
      <div class="col col-lg-3"></div>
    </div>

  </div>
</body>

</html>