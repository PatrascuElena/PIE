<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
  <header id="home">
    <div class="bg-img" style="background-image: url('/PIE/img/toys3.jpg');">
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
              <h1 class="white-text">Jucarii</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="about" class="section md-padding" style="background-color:#DEB887">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="title">Modifica o jucarie</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col col-lg-3"></div>
      <div class="col col-lg-6">
        <form method="post" action="/PIE/backend/process-request.php">
          <div class="form-group">
            <label for="idjucarie">Modifica dupa ID </label>
            <input type="text" class="form-control" id="idjucarie" name="idjucarie">
          </div>
          <div class=" form-group">
            <label for="nume">Nume</label>
            <input type="text" class="form-control" id="nume" name="nume">
          </div>
          <div class="form-group">
            <label for="pret">Pret</label>
            <input type="text" class="form-control" id="pret" name="pret">
          </div>
          <div class="form-group">
            <label for="stoc">Stoc</label>
            <input type="text" class="form-control" id="stoc" name="stoc">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Modifica</button>
        </form>
      </div>
      <div class="col col-lg-3"></div>
    </div>
  </div>
</body>

</html>
