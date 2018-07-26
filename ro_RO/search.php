<?php

session_start();

require_once("db.php");

$limit = 4;

if(isset($_GET["page"])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$start_from = ($page-1) * $limit;


if(isset($_GET['filter']) && $_GET['filter']=='city') {

  $sql = "SELECT * FROM company WHERE citta='$_GET[search]'";

  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    while($row1 = $result->fetch_assoc()) {
      $sql1 = "SELECT * FROM job_post WHERE id_company>='$row1[id_company]' LIMIT $start_from, $limit";
                $result1 = $conn->query($sql1);
                if($result1->num_rows > 0) {
                  while($row = $result1->fetch_assoc()) 
                  {
               ?>

         <div class="attachment-block clearfix" onclick="window.location='view-job-post.php?id=<?php echo $row['id_jobpost']; ?>';">
              <!--<img class="attachment-img" src="uploads/logo/<?php echo $row1['logo']; ?>" alt="Attachment Image">
              <div class="attachment-pushed">-->
                <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row1['companyname']; ?></a> <span class="attachment-heading pull-right"><?php echo $row['paga']; ?> € /ora</span></h4>
                <div class="attachment-text">
                    <div>
                      <!--<strong>Chi? </strong> <br>-->
                      <strong>Unde: </strong><?php echo $row1['citta']; ?> <br>
                      <strong>Experiență: </strong><?php echo $row['anniEsperienza']; ?> </strong><br>
                      <strong>Descriere: </strong><?php echo $row['description']; ?> <br>
                      </div>
                </div>
              </div>
            </div>

      <?php
        }
      }
    }
  }


} else {

  if(isset($_GET['filter']) && $_GET['filter']=='searchBar') {

    $search = $_GET['search'];
    $sql = "SELECT job_post.id_jobpost AS id_jobpost, job_post.anniEsperienza AS anniEsperienza, job_post.description AS description, company.companyname AS companyname, company.citta AS citta, company.comune AS comune, job_post.paga AS paga FROM job_post, company WHERE company.id_company=job_post.id_company AND citta LIKE '%$search%' LIMIT $start_from, $limit";
    

  } else if(isset($_GET['filter']) && $_GET['filter']=='experience') {

    $sql = "SELECT job_post.id_jobpost AS id_jobpost, job_post.anniEsperienza AS anniEsperienza, job_post.description AS description, company.companyname AS companyname, company.citta AS citta, company.comune AS comune, job_post.paga AS paga FROM job_post, company WHERE company.id_company=job_post.id_company AND anniEsperienza >='$_GET[search]' LIMIT $start_from, $limit";

  }

  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
         <div class="attachment-block clearfix">
                <!--<img class="attachment-img" src="uploads/logo/<?php //echo $row1['logo']; ?>" alt="Attachment Image">
                <div class="attachment-pushed">-->
                
                  <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php
                if(empty($_SESSION['id_user'])) {
                  if(empty($_SESSION['id_company'])) {
                     echo "|ÎNREGISTREAZĂ-TE PENTRU MAI MULTE INFORMAȚII|";
                    }
                 else{echo $row['companyname'];}
                }
                elseif(empty($_SESSION['id_company'])) {
                  if(empty($_SESSION['id_user'])) {
                    echo "|ÎNREGISTREAZĂ-TE PENTRU MAI MULTE INFORMAȚII|";
                    }
                    else{echo $row['companyname'];}
                
                }
                else{
                  
                  echo $row1['companyname'];
                }?>
                </a> <span class="attachment-heading pull-right"><?php if ($row['paga']=="0") {echo " ";} else {echo $row['paga']." € /ora";} ?></span></h4>
                <div class="attachment-text">
                    <div>
                      <!--<strong>Chi? </strong> <br>-->
                      <strong>Zonă: </strong><?php
              echo $row['citta']; echo ", ".$row['comune'].".";
              
               ?><br>
                      <strong>Experiență: </strong><?php echo $row['anniEsperienza']; ?> </strong><br>
                      <strong>Descriere: </strong><?php $str = nl2br($row['description'],false);  $small = substr($str, 0, 100); echo $small; ?> <br>
                      </div>
                </div>
                </div>
              </div>

      <?php
        }
      } else {
        echo "Non abbiamo lavori disponibili per questa chiave di ricerca.<br><strong> Non disperare abbiamo migliaia di lavori pronti per te! </strong><h4 class='attachment-heading'><a href='/jobs.php' >Premi qui per vederli.</a>";
      }

}




$conn->close();