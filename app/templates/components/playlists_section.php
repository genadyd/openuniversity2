<?php
/** @var TYPE_NAME $data */

list('title' => $title, 'description' => $description, 'thumbnails' => $thumbnails) = ($data['snippet']);
?>
<section class="data-section px-3 py-3 my-3 d-flex justify-content-center align-items-center playlist-data">
    <div class="inner-section  py-3 px-3   w-100">
        <div class="playlist-data-section d-flex justify-content-lg-start align-items-start">
            <div class="channel_logo mx-2">
                <img src="<?= $thumbnails['default']['url'] ?>" alt="">
            </div>
            <div>
                <h2><?= $title ?></h2>
                <p><?= $description ?></p>
            </div>
        </div>
        <div class="button-area text-end my-2">
            <button class="rounded-button ">Go to Videos</button>
        </div>
    </div>
</section>
