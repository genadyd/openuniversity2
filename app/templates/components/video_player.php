<?php  /** @var TYPE_NAME $data */ ?>
<section class="video-player">
    <div class="wrapper">
        <iframe  src="https://www.youtube.com/embed/<?= $data['id'] ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</section>
