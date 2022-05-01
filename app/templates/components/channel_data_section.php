<?php
/** @var TYPE_NAME $data */
list('title' => $title, 'description' => $description, 'thumbnails' => $thumbnails) = (current($data['items'])['snippet']);
?>
<section class="data-section px-3 py-3 my-3 d-flex justify-content-center align-items-center channel-data">
    <div class="inner-section d-flex py-3 px-3  justify-content-lg-start align-items-start w-100">
        <div class="channel_logo mx-2">
            <img src="<?= $thumbnails['default']['url'] ?>" alt="">
        </div>
        <div class="mx-3">
            <h2><?= $title ?></h2>
            <p><?= $description ?></p>
        </div>
    </div>
</section>
