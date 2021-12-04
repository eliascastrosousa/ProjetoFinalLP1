<?php
function introSection(){
    return '
    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax=\'{"speed": 0.2}\' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>welcome
                    to my blog</strong>
                </h1>
                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography &
                    design</strong>
                </h5>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
';
}

function postRow($row){
  $html = '
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="view overlay z-depth-1">
          <img src="' . $row[0] .'" class="img-fluid" alt="First sample image">
          <a><div class="mask rgba-white-slight"></div></a>
      </div>
    </div>
    <div class="col-lg-7 mb-4">
      <a href="" class="' . $row[1] .'">
        <h6 class="pb-1"><i class="fas fa-heart"></i><strong> ' . $row[2] .' </strong></h6>
      </a>
      <h4 class="mb-4"><strong>' . $row[3] .'</strong></h4>
      <p>' . $row[4] .'</p>
      <p>by <a><strong>' . $row[5] .'</strong></a>,' . $row[6] .'</p>
      <a class="btn btn-primary">Read more</a>
    </div>
  </div>
  <hr class="mb-5">';

  return $html;
}

$m = [
  [
    'https://mdbootstrap.com/img/Photos/Others/img (38).jpg',
    'teal-text',
    'Lifestyle',
    'This is title of the news',
    'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor.',
    'Elias Castro',
    '27/09/2021'
  ],
[
    'https://mdbootstrap.com/img/Photos/Others/img (31).jpg',
    'red-text',
    'Skateboard',
    'Este é o titulo de uma noticia',
    'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor.',
    'Elias Castro',
    '10/10/2021'
],
[
    'https://mdbootstrap.com/img/Photos/Others/img (32).jpg',
    'blue-text',
    'Alaskakk',
    'Este é o titulo de uma noticia',
    'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor.',
    'Elias Castro',
    '10/10/2021'
],
[
    'https://mdbootstrap.com/img/Photos/Others/img (33).jpg',
    'orange-text',
    'Montain',
    'Este é o titulo de uma noticia',
    'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor.',
    'Elias Castro',
    '10/10/2021'
],
[
    'https://mdbootstrap.com/img/Photos/Others/img (34).jpg',
    'green-text',
    'Golden Gate',
    'Este é o titulo de uma noticia',
    'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
    placeat facere possimus, omnis voluptas assumenda est, omnis dolor.',
    'Elias Castro',
    '10/10/2021'
],
];

$recentPost= '';
foreach($m as $row){
  $recentPost .= postRow($row);
};