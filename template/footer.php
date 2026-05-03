<?php
$xml = simplexml_load_file(__DIR__ . '/../estructura.xml');
$footer = $xml->footer;
?>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

    <p class="col-md-4 mb-0 text-body-secondary">
        &#x1F12F; <?= $footer->copyright ?>
    </p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 text-decoration-none">
        <img src="/img/logo.svg" alt="<?= $xml->head->title ?>" height="32">
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <?php foreach ($footer->links->link as $link): ?>
        <li class="nav-item">
            <a href="<?= $link['href'] ?>"
               class="nav-link px-2 text-body-secondary"
               target="_blank" rel="noopener"
               title="<?= $link['titulo'] ?>">
                <?= $link['titulo'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

</footer>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
