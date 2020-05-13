<?php

include ('./config.php');
include ('./functions.php');

include ('GnuPlot/GnuPlot.php');

use Gregwar\GnuPlot\GnuPlot;

if(isset($_POST['name']) && isset($_POST['x_label']) && isset($_POST['y_label']) && isset($_POST['width']) && isset($_POST['height']) && isset($_POST['format']) ) {

    $data = [
        'name' => $_POST['name'],
        'x_label' => $_POST['x_label'],
        'y_label' => $_POST['y_label'],
        'width' => $_POST['width'],
        'height' => $_POST['height'],
        'format' => $_POST['format'],
        'dataset_name' => $_POST['dataset_name'],
        'dataset' => $_POST['dataset'],
        'dataset_name2' => $_POST['dataset_name2'],
        'dataset2' => $_POST['dataset2'],
    ];

    $plot = new GnuPlot;

    switch ($data['format']) {
        case 'svg':
            generatePlot($plot, $data, $data['format']);
        break;
        case 'png':
            generatePlot($plot, $data, $data['format']);
        break;
        case 'jpeg':
            generatePlot($plot, $data, $data['format']);
        break;
    }  

    $statement = $pdo->prepare('INSERT INTO plots (name, x_label, y_label, height, width, format)
            VALUES (:name, :x_label, :y_label, :height, :width, :format)');

    $statement->execute([
        'name' => $data['name'],
        'x_label' => $data['x_label'],
        'y_label' => $data['y_label'],
        'width' => $data['width'],
        'height' => $data['height'],
        'format' => $data['format'],
    ]);
}

include ('includes/header.php');

include ('includes/navigation.php');

?>

  <section class="section section-header">
    <div class="container">
        <div class="alert alert-success mb-3" role="alert">    
            <span class="alert-inner--text">Your plot named <?php echo $data['name'] ?> has been succesfully generated! <a href="./submit-plot.php" class="text-white text-underline">Generate another plot</a>.</span>
        </div>
           <img src="plots/<?php echo $data['format'] . '/' . strtolower($data['name']) . '.' . $data['format'] ?>" alt="Plot <?php echo $data['name'] ?>">
        </div>
  </section>

<?php include('includes/footer.php') ?>