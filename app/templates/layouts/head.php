<?php
/** @var TYPE_NAME $general_data */

use App\Src\Helpers\Helpers;

list('title' => $title, 'heading' => $heading) = $general_data;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" data-token="<?= Helpers::getUniq() ?>">
    <?= /** @var TYPE_NAME $styles */
  $styles ?>
    <?= /** @var TYPE_NAME $scripts */
    $scripts ?>
    <title><?= $title ?></title>
</head>
<body>
<div id="main-wrapper">





