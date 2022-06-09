<?php get_header();?>

<img src="<?= wp_get_attachment_url(get_field('hero'));?>" class="card-img-top" alt="...">

<div class="hiiro_tekst text-center">
<h1>Tere tulemast!</h1>
<p>See on minu portfooliolehekülg</p>
<button type="button"  class="btn btn-light text-dark"><a href="#tood">Minu tööd</a></button>
</div>

<div class="iframe_container text-center">
<h2>Saame tuttavaks!</h2>

<div class="embed-responsive embed-responsive-16by9" id="tutvume">
<iframe  width="560" height="315" src="https://www.youtube.com/embed/GFdKjtqm5R0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<div class="tood_wrapper" id="tood">
<div class="container">

<div class="row text-center" >
  <h4>Tehtud tööd</h4> 
  <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('pusa'));?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><p id="lynk" class="card-text"><?= get_field('pusapealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-pusa"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-pusa" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        
                        <img src="<?= wp_get_attachment_url(get_field('pusa'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('pusapealkiri')?></p></h2>
                        <p id="lynk" class="card-text"><?= get_field('pusatekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('poster'));?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><p id="lynk" class="card-text"><?= get_field('posterpealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-poster"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-poster" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        
                        <img src="<?= wp_get_attachment_url(get_field('poster'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('posterpealkiri')?></p></h2>
                        <p id="lynk" class="card-text"><?= get_field('postertekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('burn'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title"><p id="lynk" class="card-text"><?= get_field('burnpealkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('suurburn'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('burnpealkiri')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('burntekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>
                   
    </div>
  </div>
</div>


<hr/>
<div class="section text-center">
<div class="row">
  <div class="col">
    <div clas="container">
    <img src="<?= wp_get_attachment_url(get_field('ikoon'));?>" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col text-center">
    <h2>Oskused</h2>
      <p>HTML/CSS <br>PHP <br>JavaScript <br>Adobe Illustrator <br>Adobe XD <br>Adobe Indesign</p>
  </div>
</div>
</div>

<div class="section-two text-center">
<div class="row">
  <div class="col">
    <div clas="container">
    <h2>Minust</h2>
      <p>Mulle meeldib: <br>Joonistada, <br>reisida, <br>kinos käia, <br>Lugeda <br>Muusikat kuulata</p>
    
    </div>
  </div>
  <div class="col text-center">
  <img src="<?= wp_get_attachment_url(get_field('mina'));?>" class="card-img-top" alt="...">
  </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    
<?php get_footer();?>