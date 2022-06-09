
<? // template name: Kontakt ?> 

<?php get_header();?>
<div class="section-two text-center">
<div class="row">
  <div class="col">
    <div clas="container">
    <h2>Kontakt</h2>
      <p>Tel: +372 5520758 </br>Email: henrylaus.work@gmail.com</p>
    
    </div>
  </div>
  <div class="col text-center">
  <img src="<?= wp_get_attachment_url(get_field('mina'));?>" class="card-img-top" alt="...">
  </div>
</div>
</div>
<?php get_footer();?>
