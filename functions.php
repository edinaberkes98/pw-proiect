<?php

function generatePlot($plot, $data, $format = 'png') {
    $plot->setGraphTitle($data['name'])
    ->setXLabel($data['x_label'])
    ->setYLabel($data['y_label'])
    ->setWidth($data['width'])
    ->setHeight($data['height']);

    $plot->setTitle(0, $data['dataset_name']);
    $dataset = explode(",", $data['dataset']); // 1, 2, 3, 4

    foreach ($dataset as $key => $datapoint) {
        $plot->push($key, $datapoint);
    }

    $plot->setTitle(1, $data['dataset_name2']);
    $dataset = explode(",", $data['dataset2']); // 1, 2, 3, 4

    foreach ($dataset as $key => $datapoint) {
        $plot->push($key, $datapoint);
    }

    switch($format) {
        case 'png':
            $plot->writePng('plots/png/' . strtolower($data['name']) . '.png');
        break;
        case 'svg':
            $plot->writeSvg('plots/svg/' . strtolower($data['name']) . '.svg');
        break;
        case 'jpeg':
            $plot->writeJpeg('plots/jpeg/' . strtolower($data['name']) . '.jpeg');
        break;
    }

    return $plot ? $plot : null;
}
