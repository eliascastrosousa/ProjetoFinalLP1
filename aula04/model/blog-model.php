<?php
function introSection($title){
    return '
    <div class="view jarallax" data-jarallax=\'{"speed": 0.2}\' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s">
                <strong>'.$title.' </strong></h1>
                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Aleatoriedades da Vida</strong></h5>
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

include_once 'db-manager.php';
function getPostTable(){
  $m = getPosts();
  $html = '';

  foreach($m as $row){
    $html .= '<tr>';
      $html .= '<td>'.$row[0].'</td>';
      $html .= '<td>'.$row[2].'</td>';
      $html .= '<td>'.$row[3].'</td>';
      $html .= '<td>'.$row[4].'</td>';
      $html .= '<td>'.createLink($row[6]).'</td>';
    $html .= '</tr>';
  }

  return $html;
}

function getPostTableDetail(){
  $m = getPosts();
  $html = '';

  foreach($m as $row){
    $html .= '<tr>';
      $html .= '<td>'.$row[5].'</td>';
      $html .= '<td>'.$row[3].'</td>';
      $html .= '<td>'.$row[4].'</td>';
      $html .= '<td>'.$row[7].'</td>';
    $html .= '</tr>';
  }

  return $html;
}

function createLink($id){
  $html = '<div><a href="http://localhost/elias/edit.php?id='.$id.'"><i class="far fa-edit blue-text"></i></a></div>';
  $html .= '<div><a href="http://localhost/elias/delete.php?id='.$id.'"><i class="fas fa-trash-alt red-text"></i></a></div>';
  $html .= '<div><a href="http://localhost/elias/detalha-post.php?id='.$id.'"><i class="fas fa-search green-text"></i></a></div>';
  return $html;
}

function getRecentPosts(array $matriz){
  $recentPost= '';
  foreach ($matriz as $row){
    $recentPost .= postRow($row);
  }
  return $recentPost;
};