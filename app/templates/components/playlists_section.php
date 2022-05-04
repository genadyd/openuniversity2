<?php

/** @var TYPE_NAME $data */

use App\Src\Helpers\Helpers;

list('title' => $title, 'description' => $description, 'thumbnails' => $thumbnails) = ($data['snippet']);

$description = Helpers::liksReplaser($description);
?>
<section class="data-section px-3 py-3 my-3 d-flex justify-content-center align-items-center playlist-data" data-id="<?= $data['id'] ?>">
    <div class="inner-section  py-3 px-3   w-100">
        <div class="playlist-data-section d-flex justify-content-lg-start align-items-start">
            <div class="channel_logo ">
                <img src="<?= $thumbnails['default']['url'] ?>" alt="">
            </div>
            <div class="mx-3">
                <h2><?= $title ?></h2>
                <p><?= $description ?></p>
            </div>
        </div>
        <div class="button-area text-end my-2">
            <button type="button" class="btn btn-primary">Go to Videos</button>
        </div>
    </div>
</section>
