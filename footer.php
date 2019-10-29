<!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Sosyal Medya Hesaplarım</p>
  <?php 


$socialmedia = $db->prepare("SELECT * FROM socialmedia");
$socialmedia->execute();

$takesm = $socialmedia->fetch(PDO::FETCH_ASSOC);


 ?>
 <a href="<?php echo $takesm['sm_instagram']; ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
 <a href="<?php echo $takesm['sm_github']; ?>"target="_blank"> <i class="fa fa-github w3-hover-opacity"></i></a>
<a href="<?php echo $takesm ['sm_linkedin']; ?>"target="_blank"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
  <p><?php echo $takesettings['site_footer']; ?><a href="<?php echo $takesettings['site_url']; ?>" target="_blank"> M.Işkın Uçar</a></p>
</footer>

</body>
</html>