  
  
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
  <?php if($this->uri->segment(1) == 'track') : ?>
  <script src="http://maps.googleapis.com/maps/api/js?key=<Your Api Key>"></script>
  <script>
  function initialize() {
    var propertiPeta = {
      center:new google.maps.LatLng(-6.1968367,106.7686112),
      zoom:11,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    var icon = {
      url: "<?= base_url(); ?>assets/img/mark.png", // url
      scaledSize: new google.maps.Size(50, 50), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
  };

  <?php foreach ($data as $key => $val): ?>
    // membuat Mark ($data as $key =er
    var marker=new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $val['latitude']?>, <?php echo $val['longitude'] ?>),
        map: peta,
        label: "<?php echo $val['PLAT_NO_MOBIL'] ?>",
        icon: icon
    });
      marker.setAnimation(google.maps.Animation.DROP);

  <?php endforeach; ?>           
  }

  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <?php endif; ?>
</body>

</html>
