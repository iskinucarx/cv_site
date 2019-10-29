<div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>İş Deneyimleri</h2>

        <?php

        $works= $db->prepare("SELECT * FROM jobs ORDER BY job_id DESC");
        $works->execute();

        $takeworks = $works->fetchALL(PDO::FETCH_ASSOC); 

        foreach ($takeworks as $row) {

          if ($row["job_continue"]==1) {
            ?>
            <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['job_name']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['job_date']; ?> - <span class="w3-tag w3-teal w3-round">Halen Devam Ediyor</span></h6>
          <p><?php echo $row['job_desc']; ?></p>
          <hr>
        </div>
            <?php 
          }else {

          ?>

        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['job_name']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['job_date']; ?></h6>
          <p><?php echo $row['job_desc']; ?></p>
          <hr>
        </div>
        <?php 
}
}
         ?>
        
      </div>

<!--Project-->

 <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-code fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projelerim</h2>

        <?php

        $project= $db->prepare("SELECT * FROM project ORDER BY project_id DESC");
        $project->execute();

        $takeproject = $project->fetchALL(PDO::FETCH_ASSOC); 

        foreach ($takeproject as $row) {
?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['project_name']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-anchor fa-fw w3-margin-right"></i><?php echo $row['project_link']; ?></h6>
          <p><?php echo $row['project_desc']; ?></p>
          <hr>
        </div>
        <?php 
}

         ?>
        
      </div>


<!--Schools-->
        
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Okul</h2>


     <?php

          $scholl = $db->prepare("SELECT * FROM school ORDER BY school_id DESC");
          $scholl->execute();

          $takescholl = $scholl->fetchALL(PDO::FETCH_ASSOC);
foreach ($takescholl as $row) {
  if ($row['school_continue']==1) {
    ?>
<hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['school_name']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['school_date']; ?><span class="w3-tag w3-teal w3-round">Halen Devam Ediyor</span></h6>
          <p><?php echo$row['school_desc']; ?></p>
        </div>
<?php 
}else {

  ?>
  <header></header>
  <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['school_name']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo$row['school_date']; ?></h6>
          <p><?php echo$row['school_desc']; ?></p>
        </div>

<?php 

  }
}

           ?>

        

