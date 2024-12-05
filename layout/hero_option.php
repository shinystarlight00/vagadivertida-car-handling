<?php
  $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'home'";
  $content = $conn->query($sql);

  $heroOption = array();

  if ($content->num_rows > 0) {
    while($row = $content->fetch_assoc()) {
      $heroOption[$row['title']] = $row;
    }
  }
?>

<section class="page-section usp bg-lgr v-c">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="inner p-t-md p-b-md">
                    <p>
                        <i class="fa-light fa-circle-check"></i><?php echo $heroOption['breadcrumb-service1']['description'] ?>
                    </p>
                    <p>
                        <i class="fa-light fa-circle-check"></i><?php echo $heroOption['breadcrumb-service2']['description'] ?>
                    </p>
                    <p>
                        <i class="fa-light fa-circle-check"></i><?php echo $heroOption['breadcrumb-service3']['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>