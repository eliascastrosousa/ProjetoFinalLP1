<?php
function oldRow($row){
$html = '
    <div class="col-lg-4 col-md-12 mb-4">
        <div class="view overlay z-depth-1 mb-2">
        <img src="' . $row[0] .'" class="img-fluid"
            alt="First sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
        <a href="" class="' . $row[1] .'">
        <h6 class="mb-3 mt-3"><i class="fas fa-map "></i><strong> ' . $row[2] .' </strong></h6>
        </a>
        <h4 class="mb-3 font-weight-bold">' . $row[3] .'</h4>
        <p>by <a><strong>' . $row[4] .'</strong></a>' . $row[5] .'</p>
        <p>' . $row[6] .'</p>
        <a class="btn btn-primary">Read more</a>
    </div>';
  return $html;
}

$a = [
    [
        'https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg',
        'pink-text',
        'Adventure',
        'This is title of the news',
        'Billy Forester',
        ', 15/07/2016',
        'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus voluptas.'
    ],
    [
        'https://mdbootstrap.com/img/Photos/Others/img6.jpg',
        'indigo-text',
        'Education',
        'This is title of the news',
        'Billy Forester',
        ', 12/07/2016',
        'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
        deleniti atque corrupti quos dolores.'
    ],
    [
        'https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(33).jpg',
        'cyan-text',
        'Culture',
        'This is title of the news',
        'Billy Forester',
        ', 10/07/2016',
        'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, quia consequuntur magni
        dolores eos qui ratione voluptatem.'
    ],
  ];

$olderPost= '';
foreach($a as $row){
$olderPost .= oldRow($row);
};