<?php

include ('./config.php');

include ('includes/header.php');

include ('includes/navigation.php');

?>

<section class="section section bg-primary text-white overflow-hidden z-2">
      <div class="container z-2">
          <div class="row justify-content-center text-center pt-6 pb-3" role="banner">
              <div class="col-12 col-md-8">
                  <h1 class="display-2 font-weight-light mb-3">TW Proiect<span class="pixel-pro-badge font-weight-bolder text-primary">Plots</span></h1>
                  <p class="lead px-xl-6 mb-4">Use this website to generate beautiful and dynamic GNPlots with PHP powered code.</p>
                  <div class="d-flex flex-column flex-wrap flex-md-row mb-5 justify-content-center align-items-center">
                      <a href="./submit-plot.php" class="btn btn-lg btn-tertiary mb-3 mt-2 mr-2 mr-md-3 animate-up-2"><span class="fas fa-chart-pie mr-2"></span> Generate plot</a>
                  </div>
              </div>
          </div>
      </div>
  </section>

<?php

include ('includes/footer.php');

?>