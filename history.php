<?php

include ('./config.php');

include ('includes/header.php');

include ('includes/navigation.php');

$plots = $pdo->query("SELECT * FROM plots")->fetchAll();

?>

<section class="section section-header">
  <div class="container">
    <h1>History</h1>
    <hr>
    <?php if (count($plots)): ?>
        <div class="row">
        <?php foreach ($plots as $plot): ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card border-light p-3 mb-5">
                    <h3 class="text-center"><?php echo $plot['name'] ?></h3>
                    <img src="<?php echo $base_url . 'plots/png/' . strtolower($plot['name']) . '.png' ?>" class="card-img-top rounded-top" alt="image">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-sm">View plot</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="alert alert-secondary" role="alert">
                <span class="alert-inner--text">There are no plots that have been generated yet. Please generate <a class="text-white text-underline" href="./submit-plot.php"> with our plot generator.</a></span>
            </div>
        <?php endif; ?>
  </div>
</section>

<?php

include ('includes/footer.php');

?>