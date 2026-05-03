<?php
$xml = simplexml_load_file(__DIR__ . '/../estructura.xml');
$head = $xml->head;
$body = $xml->body;
?>
<!doctype html>
<html lang="<?= $xml['lang'] ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' · ' . $head->title : $head->title ?></title>
    <meta name="description" content="<?= isset($page_desc) ? $page_desc : $head->description ?>">
    <link rel="shortcut icon" href="<?= $head->favicon['ico'] ?>">
    <link rel="icon" href="<?= $head->favicon['png'] ?>" type="image/png" sizes="32x32">
    <?php foreach ($head->fonts->font as $font): ?>
        <?php if ((string)$font['google'] === 'true'): ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php else: ?>
    <style>
        @font-face {
            font-family: "<?= $font['familia'] ?>";
            src: url("<?= $font['src'] ?>") format("truetype");
        }
    </style>
        <?php endif; ?>
    <?php endforeach; ?>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "<?= $head->analytics['url'] ?>";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '<?= $head->analytics['idsite'] ?>']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- Fi Matomo -->
</head>
<body style="background:<?= $body['background'] ?>">
