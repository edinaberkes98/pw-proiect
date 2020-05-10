<?php

include ('./config.php');

include ('GnuPlot/GnuPlot.php');

use Gregwar\GnuPlot\GnuPlot;

if(isset($_POST['name']) && isset($_POST['x_label']) && isset($_POST['y_label']) && isset($_POST['width']) && isset($_POST['height']) && isset($_POST['format']) ) {

    $plot = new GnuPlot;

    $name = $_POST['name'];

    $x_label = $_POST['x_label'];
    $y_label = $_POST['y_label'];

    $width = $_POST['width'];
    $height = $_POST['height'];

    $format=$_POST['format'];

    if($format == 'svg') {
        // svg generate
        $plot
        // Setting graph main title
        ->setGraphTitle($name)
        // Setting X & Y labels
        ->setXLabel($x_label)
        ->setYLabel($y_label)
        // Setting graph dimensions
        ->setWidth($width)
        ->setHeight($height)
        // Demo curve (index=0)
        ->setTitle(0, 'Demo')
        ->push(0, 1)
        ->push(1, 10)
        ->push(2, 3)
        ->push(3, 2.6)
        ->push(4, 5.3)
        // Other curve, (index=1)
        ->setTitle(1, 'Other curve')
        ->push(0, 3.9, 1)
        ->push(1, 2.3, 1)
        ->push(2, 4.3, 1)
        ->push(3, 3.1, 1)
        ->push(4, 5.2, 1)
        // Pointing out a value
        ->addLabel(2, 4.3, 'An important point')
        // Writing to out.svg
        ->writePng('plots/svg' . strtolower($name) . '.svg');
    } else if ($format == 'png') {
        $plot
        // Setting graph main title
        ->setGraphTitle($name)
        // Setting X & Y labels
        ->setXLabel($x_label)
        ->setYLabel($y_label)
        // Setting graph dimensions
        ->setWidth($width)
        ->setHeight($height)
        // Demo curve (index=0)
        ->setTitle(0, 'Demo')
        ->push(0, 1)
        ->push(1, 10)
        ->push(2, 3)
        ->push(3, 2.6)
        ->push(4, 5.3)
        // Other curve, (index=1)
        ->setTitle(1, 'Other curve')
        ->push(0, 3.9, 1)
        ->push(1, 2.3, 1)
        ->push(2, 4.3, 1)
        ->push(3, 3.1, 1)
        ->push(4, 5.2, 1)
        // Pointing out a value
        ->addLabel(2, 4.3, 'An important point')
        // Writing to out.png
        ->writePng('plots/png' . strtolower($name) . '.png');

        $statement = $pdo->prepare('INSERT INTO plots (name, x_label, y_label, height, width, format)
            VALUES (:name, :x_label, :y_label, :height, :width, :format)');

        $statement->execute([
            'name' => $name,
            'x_label' => $x_label,
            'y_label' => $y_label,
            'width' => $width,
            'height' => $height,
            'format' => $format,
        ]);
    }
}

include ('includes/header.php');

include ('includes/navigation.php');

?>


  <section class="section section-header">
    <div class="container">
        <div class="alert alert-success mb-3" role="alert">    
            <span class="alert-inner--text">Your plot named <?php echo $name ?> has been succesfully generated! <a href="./submit-plot.php" class="text-white text-underline">Generate another plot</a>.</span>
        </div>
           <img src="plots/png<?php echo strtolower($name) ?>.png" alt="Plot <?php echo $name ?>">
        </div>
  </section>

 
<?php include('includes/footer.php') ?>