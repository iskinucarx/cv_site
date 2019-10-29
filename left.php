 <?php 

$info = $db->prepare("SELECT * FROM info");
$info->execute();

$takeinfo = $info->fetch(PDO::FETCH_ASSOC);


  ?>

    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="assets/img/cvpp.jpeg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $takeinfo['info_job']; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $takeinfo['info_location']; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $takeinfo['info_mail']; ?></p>
          
          <hr>
           <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Yetkinliklerim</b></p>
          <?php 


          $skills = $db->prepare("SELECT * FROM skill");
          $skills->execute();
          $takeskill =  $skills->fetchALL(PDO::FETCH_ASSOC);

          foreach ($takeskill as $row) {
            ?>
             
          <p><?php echo $row['skill_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $row['skill_perc'];?>%"><?php echo $row['skill_perc'];?>%</div>
          </div>
          <?php
           
          }

           ?>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Yabancı Dil</b></p>

          <?php

          $lang = $db->prepare("SELECT * FROM languages");
          $lang->execute();
          $takelang = $lang->fetchALL(PDO::FETCH_ASSOC);

          foreach ($takelang as $row) {
             ?>
             <p><?php echo $row['language_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-center w3-teal" style="width:<?php echo $row['language_perc'];?>%"><?php echo $row['language_perc'];?>%</div>
          </div>
          <?php
           } 

           ?>

          <br>

 <p class="w3-large w3-text-theme"><b><i class="fa fa-dribbble fa-fw w3-margin-right w3-text-teal"></i>Hobilerim</b></p>

 <p style="font-size: 22px">Yeni yerler gezmekten, kamp yapmaktan ,yüzmekten futboldan ve video oyunlarından hoşlanıyorum.Güncel teknolojileri takip edebilmek için blog yazıları ve dökümanları takip ediyorum.Github ve codepen üzerinden projeler inceliyorum. Her fırsatta yeni müzikler dinleyip elime geçirdiğim her kitabı okuyorum.
Sigara kullanmıyorum.</p>

          <br>

        </div>
      </div><br>

    </div>