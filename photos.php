<?php include 'header.php'; ?>

<div class="main">
  <div class="centerContent">
    <div class="content4">
      <h1>Photos</h1>
      <hr />
      <div class="imagesP">
        <?php
        $imageFiles = array(
          "photos1.jpg",
          "photos2.jpg",
          "photos3.jpg",
          "photos4.jpg",
          "photos5.jpg",
          "photos6.jpg",
          "photos7.jpg",
          "photos8.jpg",
          "photos9.jpg",
          "photos10.jpg"
        );
        foreach ($imageFiles as $image) {
          echo '<div class="card4">
                  <a href="public/img/' . $image . '" target="_blank">
                    <img src="public/img/' . $image . '" alt="karta1" style="width: 100%" />
                  </a>
                </div>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>