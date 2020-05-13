<?php

include ('./config.php');

include ('includes/header.php');

include ('includes/navigation.php');

?>

<section class="section section-header">
  <div class="container">
    <h1>Generate plot</h1>
    <hr>
    <form action="generate-plot.php" method="post">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Plot name (ex. plot-1)" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="x_label">X label</label>
              <input type="text" class="form-control" id="x_label" name="x_label" placeholder="X Label" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="y_label">Y label</label>
              <input type="text" class="form-control" id="y_label" name="y_label" placeholder="Y Label" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="width">Width</label>
              <input type="number" class="form-control" id="width" name="width" placeholder="Plot width" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="height">Height</label>
              <input type="number" class="form-control" id="height" name="height" placeholder="Height width" required>
          </div>
        </div>
        <div class="col-12">
          <hr>
          <h5>Dataset 1</h5>
          <hr>
        </div>
        <div class="col-4">
          <div class="form-group">
              <input type="text" class="form-control" name="dataset_name" placeholder="Dataset name" required>
          </div>
        </div>
        <div class="col-8">
          <div class="form-group">
            <input type="text" class="form-control" value="1,5,3,4,8" name="dataset" data-role="tagsinput" required/>
          </div>
        </div>
        <div class="col-12">
          <hr>
          <h5>Dataset 2</h5>
          <hr>
        </div>
        <div class="col-4">
          <div class="form-group">
              <input type="text" class="form-control" name="dataset_name2" placeholder="Dataset name" required>
          </div>
        </div>
        <div class="col-8">
          <div class="form-group">
            <input type="text" class="form-control" value="1,5,3,4,8" name="dataset2" data-role="tagsinput" required/>
          </div>
        </div>
        <div class="col-12 mb-4">
          <fieldset>
            <legend class="h6">Selectati formatul dorit</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="format" id="png" value="png" checked>
              <label class="form-check-label" for="png">
                .png
              </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="format" id="svg" value="svg" >
            <label class="form-check-label" for="svg">
              .svg
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="format" id="jpeg" value="jpeg" >
            <label class="form-check-label" for="jpeg">
              .jpeg
            </label>
          </div>
          <!-- End of Radio -->
        </fieldset>
        </div>
     </div>
      <button type="submit" class="btn btn-primary">Generate plot</button>
  </form>
  </div>
</section>

<?php

include ('includes/footer.php');

?>