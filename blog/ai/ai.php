<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Gallery</title>
<style>
    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .gallery-item {
        margin: 10px;
        overflow: hidden;
        width: 200px;
        height: 200px;
        position: relative;
    }
    .gallery-item img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.1);
    }
    .gallery-item .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .gallery-item:hover .overlay {
        opacity: 1;
    }
    .gallery-item .overlay img {
        max-width: 80px;
        max-height: 80px;
    }
</style>
</head>
<body>

<div class="gallery">
    <?php
    // Define an associative array where the keys are the main image filenames
    // and the values are the filenames of the paired images
    $imagePairs = [
        "image1.png" => "image1_hover.png",
        "image2.png" => "image2_hover.png",
        "image3.png" => "image3_hover.png",
        // Add more image pairs here
    ];

    foreach ($imagePairs as $mainImage => $hoverImage) {
        echo "<div class='gallery-item'>";
        echo "<img src='$mainImage' alt='Image'>";
        echo "<div class='overlay'><img src='$hoverImage' alt='Hover Image'></div>";
        echo "</div>";
    }
    ?>
</div>

<script>
    // Swap out image on hover
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const img = item.querySelector('img');
            const overlayImg = item.querySelector('.overlay img');
            const tempSrc = img.src;
            img.src = overlayImg.src;
            overlayImg.src = tempSrc;
        });
    });
</script>

</body>
</html>
