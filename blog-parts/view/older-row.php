  <div class="col-lg-4 col-md-12 mb-4">
    <div class="view overlay z-depth-1 mb-2">
      <img src="<?= $row[0] ?>" class="img-fluid"
        alt="First sample image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <a href="" class="<?= $row[1]?>">
      <h6 class="mb-3 mt-3"><i class="fas fa-map "></i><strong> <?= $row[2]?></strong></h6>
    </a>
    <h4 class="mb-3 font-weight-bold"><?= $row[3]?></h4>
    <p>by <a><strong><?= $row[4]?></strong></a><?= $row[5]?></p>
    <p><?= $row[6]?></p>
    <a class="btn btn-primary">Read more</a>
  </div>