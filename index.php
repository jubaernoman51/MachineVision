<!DOCTYPE html>
<html lang="en">
<head>
  <title>Machine Vision</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
      <img src="logo.png" style="max-width: 120px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/jubaernoman51/MachineVision">Github Repository</a>
      </li>
    </ul>
  </div>  
</nav>
<br>

<div class="container">

      <div style="max-width: 650px; margin: auto;">
        <h1 class="page-header">Select Image</h1>
        <p class="lead">Select a PNG or JPEG image, having maximum size <span id="max-size"></span> KB.</p>

        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
            <div class="alert alert-info" id="loading" style="display: none;" role="alert">
          Uploading image...
          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            </div>
          </div>
        </div>
        <div id="message"></div>
        <br>
          <div id="image-preview-div" style="display: none">
            <label for="exampleInputFile">Selected image:</label>
            <br>
            <img id="preview-img" class="img-fluid" style="width: 100%" src="noimage">
          </div>
          <div class="form-group">
            <input type="file" name="file" id="file" required>
          </div>
          <div class="form-group">
              <button class="btn btn-lg btn-primary form-control" id="upload-button" type="submit" disabled>SCAN IMAGE</button>
          </div>
        </form>
      </div>

    </div>
<script src="upload-image.js"></script>
</body>
</html>


