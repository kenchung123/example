<?php
include_once("header.php");
include_once("nav.php");
include_once("learninghistory.php");
$rs = learninghistory::getList("1");
$rsFromFile = learninghistory::getListFromFile("1");
?>
<div class="container">
  <div class="table-wrapper">
      <div class="table-title">
          <div class="row">
          <div class="col-sm-5"><button type="submit" class="btn btn-success"><a href="CreateStudent.php"> Add </a></button></div>
              <div class="col-sm-7"><h2>Student <b>Details</b></h2></div>
              <!-- <div class="col-sm-4">
                  <div class="search-box">
                      <i class="material-icons">&#xE8B6;</i>
                      <input type="text" class="form-control" placeholder="Search&hellip;">
                  </div>
              </div> -->
          </div>
      </div>
      <table class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th>STT</th>
                  <th>Từ năm</th>
                  <th>Đến năm</th>
                  <th>Cấp</th>
                  <th>Nơi học</th>
                  <th>Thao tác</th>
              </tr>
          </thead>
          <tbody>
          <?php 
          foreach($rsFromFile as $key => $value){
            $stt=$key;
            echo "  <tr>";
            echo "  <th scope='row'>$stt</th>";
            echo " <td>$value->yearFrom</td>";
            echo " <td>$value->yearTo</td>";
            echo " <td>$value->schoolName</td>";
            echo " <td>$value->schoolAddress</td>";
            echo " <td>$value->idStudent</td>";
            echo " <td>";
            echo "  <button type='button' class='btn btn-primary'>Edit</button>";
            echo "  <button type='button' class='btn btn-danger'>Delete</button>";
            echo " </td>";
            echo " </tr>";
         
       }
         
            // $listStudent = array();
            // $learninghistory = new Learninghistory();
            // $listStudent = $learninghistory->getListFromFile("101");
            // echo $listStudent[1]->id;
            // echo "sdssssad";
            // foreach ($listStudent as $li) {
            //     echo "<tr>";
            //     echo "<td>"+ $li->id +"</td>";
            //     echo "<td>"+ $li->yearForm +"</td>";
            //     echo "<td>"+ $li->yearTo +"</td>";
            //     echo "<td>"+ $li->schoolName +"</td>";
            //     echo "<td>"+ $li->schoolAddress +"</td>";
            //     echo "<td>
            //         <a href='#' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
            //         <a href='#' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
            //         </td>
            //         </tr>";
            // }
            // $myFile = "demoData.txt";
            // $lines = file($myFile);
            // var_dump($lines);
            // foreach($lines as $line) 
            // {
            //     $var = explode('#', $line);

            // }

            // print_r($arr);
          ?>
                  <!-- <td> -->
        <!-- <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> -->
                      <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                      <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                  </td>
              </tr>   -->  
          </tbody>
      </table>
     
      <!-- <div class="clearfix">
          <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
          <ul class="pagination">
              <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="page-item"><a href="#" class="page-link">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item active"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
      </div> -->
  </div>
</div>     