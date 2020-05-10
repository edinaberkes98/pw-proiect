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
              <input type="text" class="form-control" id="name" name="name" placeholder="Plot name (ex. plot-1)">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="x_label">X label</label>
              <input type="text" class="form-control" id="x_label" name="x_label" placeholder="X Label">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="y_label">Y label</label>
              <input type="text" class="form-control" id="y_label" name="y_label" placeholder="Y Label">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="width">Width</label>
              <input type="number" class="form-control" id="width" name="width" placeholder="Plot width">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              <label for="height">Height</label>
              <input type="number" class="form-control" id="height" name="height" placeholder="Height width">
          </div>
        </div>

       <fieldset>
          <legend class="h6">Selectati formatul dorit</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="format" id="format1" value="png" checked>
            <label class="form-check-label" for="format1">
               .png
            </label>
         </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="format" id="format2" value="svg" >
          <label class="form-check-label" for="format2">
            .svg
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="format" id="format3" value="jpeg" >
          <label class="form-check-label" for="format3">
            .jpeg
          </label>
        </div>
        <!-- End of Radio -->
       </fieldset>

     </div>
      <button type="submit" class="btn btn-primary">Generate plot</button>
  </form>
  </div>
</section>

<?php

include ('includes/footer.php');

?>