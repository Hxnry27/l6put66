
<? // template name: Gallery ?> 

<?php get_header();?>
<div class="tood_wrapper">
<div class="container">
<body>
<div class="row text-center" >
  <h4>Veebilehe<br>disainid</h4> 
  <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('galeriiburn'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title"><p id="lynk" class="card-text"><?= get_field('burnpealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal" tabindex="-1"  aria-labelledby="modal-title" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('galeriisuurburn'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('burnpealkiri')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('burntekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>



              <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('estfield'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title"><p id="lynk" class="card-text"><?= get_field('estfieldpealkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-estfield"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-estfield" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('estfieldsuur'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('estfieldpealkiri')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('estfieldtekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('shlong'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3 class="card-title"><p id="lynk" class="card-text"><?= get_field('schlongpealkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-shlong"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-shlong" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                          
                                <img src="<?= wp_get_attachment_url(get_field('shlongsuur'));?>" class="card-img-top" alt="...">
                                    <h2><p id="lynk" class="card-text"><?= get_field('schlongpealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('schlongtekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>

                <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('photoaesthetic'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title"><p id="lynk" class="card-text"><?= get_field('papealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-photo"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-photo" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                    
                          <img src="<?= wp_get_attachment_url(get_field('photoaestheticsuur'));?>" class="card-img-top" alt="...">
                          <h2><p id="lynk" class="card-text"><?= get_field('papealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('patekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('plekipood'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3><p id="lynk" class="card-text"><?= get_field('plekipealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-pleki"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-pleki" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        
                        <img src="<?= wp_get_attachment_url(get_field('plekipoodsuur'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('plekipealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('plekitekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('kutised'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3><p id="lynk" class="card-text"><?= get_field('kutpealkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-kutis"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-kutis" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('kutisedsuur'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('kutpealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('kutekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>
                   
                   
    </div>
  </div>
</div>

<div class="tood_wrapper">
<div class="container">
<body>
<div class="row text-center" >
  <h4>Logodisainid</h4> 
  <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('plekipoodlogo'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3><p id="lynk" class="card-text"><?= get_field('plogopealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-plekk"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-plekk" tabindex="-1"  aria-labelledby="modal-title" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('plekipoodlogo'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('plogopealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('plogotekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>



              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('sunroof'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3><p id="lynk" class="card-text"><?= get_field('sunroofpealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-sunroof"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-sunroof" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('sunroof'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('sunroofpealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('sunrooftekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('lausy'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3><p id="lynk" class="card-text"><?= get_field('lausypealkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-lausy"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-lausy" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('lausy'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('lausypealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('lausytekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>

                <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('palogo'));?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><p id="lynk" class="card-text"><?= get_field('palogopealkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-palogo"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-palogo" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                          <img src="<?= wp_get_attachment_url(get_field('palogo'));?>" class="card-img-top" alt="...">
                          <h2><p id="lynk" class="card-text"><?= get_field('palogopealkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('palogotekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('meedia'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3><p id="lynk" class="card-text"><?= get_field('mkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-meedia"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-meedia" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('meedia'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('mkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('mtekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('tsink'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3><p id="lynk" class="card-text"><?= get_field('tsinkkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-tsink"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-tsink" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('tsink'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('tsinkkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('tsinktest')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>
                   
                   
    </div>
  </div>
</div>

<div class="tood_wrapper">
<div class="container">
<body>
<div class="row text-center" >
  <h4>illustratsioonid</h4> 
  <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('mrks'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3><p id="lynk" class="card-text"><?= get_field('mrkskiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-mrks"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-mrks" tabindex="-1"  aria-labelledby="modal-title" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('mrks'));?>" class="card-img-top" alt="...">
                            <h2><p id="lynk" class="card-text"><?= get_field('mrkskiri')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('mrkstekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>



              <div class="card m-2 text-center p-4" style="width:18rem;">
              <img src="<?= wp_get_attachment_url(get_field('pusapilt'));?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3><p id="lynk" class="card-text"><?= get_field('pusakesepk')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-psa"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-psa" tabindex="-1"  aria-labelledby="modal-title" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                      <img src="<?= wp_get_attachment_url(get_field('pusapilt'));?>" class="card-img-top" alt="...">
                            <h2><p id="lynk" class="card-text"><?= get_field('pusakesepk')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('pusakesetxt')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>
              
                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('poster'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h3><p id="lynk" class="card-text"><?= get_field('pstrkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-pster"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-pster" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('poster'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('pstrkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('pstrtekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>

                <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('uss'));?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><p id="lynk" class="card-text"><?= get_field('usskiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-uss"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-uss" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                          <img src="<?= wp_get_attachment_url(get_field('uss'));?>" class="card-img-top" alt="...">
                            <h2><p id="lynk" class="card-text"><?= get_field('usskiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('usstekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('kutsu'));?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h3><p id="lynk" class="card-text"><?= get_field('kkiri')?></p></h3>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-kutsu"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-kutsu" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('kutsu'));?>" class="card-img-top" alt="...">
                            <h2><p id="lynk" class="card-text"><?= get_field('kkiri')?></p></h2>
                                <p id="lynk" class="card-text"><?= get_field('ktekst')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('super'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h3><p id="lynk" class="card-text"><?= get_field('suprkiri')?></p></h3>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-super"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-super" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="<?= wp_get_attachment_url(get_field('super'));?>" class="card-img-top" alt="...">
                                <h2><p id="lynk" class="card-text"><?= get_field('suprkiri')?></p></h2>
                                    <p id="lynk" class="card-text"><?= get_field('suprtekst')?></p>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>
                   
                   
    </div>
  </div>
</div>

<div class="tood_wrapper">
<div class="container">
<body>
<div class="row text-center" >
  <h4>Veebilehe<br>disainid</h4> 
  <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('kalenderpic'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Poster</h5>
                 <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-kalender"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-kalender" tabindex="-1"  aria-labelledby="modal-title" aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <img src="<?= wp_get_attachment_url(get_field('kalendersuur'));?>" class="card-img-top" alt="...">
                        <h2><p id="lynk" class="card-text"><?= get_field('kalenderpk')?></p></h2>
                        <p id="lynk" class="card-text"><?= get_field('kalendertxt')?></p>
                      </div>
                    </div>
                  </div>
               </div>
              </div>



              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('naan'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Poster</h5>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-naan"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-naan" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <h2>Pusa</h2>
                        <img src="<?= wp_get_attachment_url(get_field('naansuur'));?>" class="card-img-top" alt="...">
                            <a><button class="btn btn-dark m-4">soeta</button></a>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('plakat'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Burn</h5>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-plakat"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-plakat" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <h2>Burn</h2>
                                <img src="<?= wp_get_attachment_url(get_field('plakatsuur'));?>" class="card-img-top" alt="...">
                                  <a><button class="btn btn-dark m-4">soeta</button></a>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>

                <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('voldik'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pusa</h5>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-voldik"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-voldik" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <h2>Pusa</h2>
                          <img src="<?= wp_get_attachment_url(get_field('voldiksuur'));?>" class="card-img-top" alt="...">
                            <a><button class="btn btn-dark m-4">soeta</button></a>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

              <div class="card m-2 text-center p-4" style="width:18rem;">
          <img src="<?= wp_get_attachment_url(get_field('jarg'));?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Poster</h5>
                 <button class="btn btn-dark" data-bs-toggle="modal"
                  data-bs-target="#reg-modal-jarg"> vajuta siia</button>
                    <div class="modal fade" id="reg-modal-jarg" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <h2>Pusa</h2>
                        <img src="<?= wp_get_attachment_url(get_field('jargsuur'));?>" class="card-img-top" alt="...">
                            <a><button class="btn btn-dark m-4">soeta</button></a>
                      </div>
                    </div>
                  </div>
               </div>
              </div>

                   <div class="card m-2 text-center p-4" style="width:18rem;">
                <img src="<?= wp_get_attachment_url(get_field('kabi'));?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Burn</h5>
                       <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#reg-modal-kabi"> vajuta siia</button>
                        <div class="modal fade" id="reg-modal-kabi" tabindex="-1"  aria-labelledby="modal-title"aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <h2>Burn</h2>
                                <img src="<?= wp_get_attachment_url(get_field('kabisuur'));?>" class="card-img-top" alt="...">
                                  <a><button class="btn btn-dark m-4">soeta</button></a>
                            </div>
                          </div>
                       </div>
                      </div>
                   </div>
                   
                   
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   

<?php get_footer();?>
