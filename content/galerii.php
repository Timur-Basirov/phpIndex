<?php
echo "<h2>Galerii</h2>";

$pildid = glob("images/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

if (empty($pildid)) {
    $pildid = [
            "https://picsum.photos/seed/1/200",
            "https://picsum.photos/seed/2/200",
            "https://picsum.photos/seed/3/200",
            "https://picsum.photos/seed/4/200",
            "https://picsum.photos/seed/5/200",
            "https://picsum.photos/seed/6/200",
    ];
}
?>

<div class="galerii-grid">
    <?php foreach ($pildid as $pilt): ?>
        <img src="<?= htmlspecialchars($pilt) ?>" alt="Galerii pilt">
    <?php endforeach; ?>
</div>