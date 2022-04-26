<!-- Video -->
<div class="modal fade modalVideo" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideoLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="box-video">
                    <video width="100%" height="auto" controls>
                        <source src="<?= base_url(); ?>assets/video/video.mp4" type="video/mp4">
                        <source src="<?= base_url(); ?>assets/video/video.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ficha Técnica -->
<div class="modal fade modalFichaTecnica" id="modalFichaTecnica" tabindex="-1" role="dialog" aria-labelledby="modalFichaTecnicaLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/ficha-tecnica.jpg" alt="Hits Santa Catarina">
            </div>
        </div>
    </div>
</div>

<!-- Localização -->
<div class="modal fade modalLocalizacao" id="modalLocalizacao" tabindex="-1" role="dialog" aria-labelledby="modalLocalizacaoLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/localizacao_full.jpg" alt="Hits Cupece">
            </div>
        </div>
    </div>
</div>

<!-- Vista Aerea -->
<div class="modal fade modalVistaAerea" id="modalVistaAerea" tabindex="-1" role="dialog" aria-labelledby="modalVistaAereaLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/vista-aerea.jpg" alt="Hits Cupece">
            </div>
        </div>
    </div>
</div>

<!-- Institucional -->
<div class="modal fade modalinstitucional" id="modalinstitucional" tabindex="-1" role="dialog" aria-labelledby="modalinstitucionalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/institucional.jpg" alt="Hits Cupece">
            </div>
        </div>
    </div>
</div>

<!-- Tag Beach Tennis -->
<a class="tag_beach_tennis" href="" data-toggle="modal" data-target="#modalTagBeachTennis">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/tag_beach_tennis.png" alt="Hits Santa Catarina">
</a>

<div class="modal fade modalTagBeachTennis" id="modalTagBeachTennis" tabindex="-1" role="dialog" aria-labelledby="modalTagBeachTennisLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 heade_tag">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/heade_tag.png" alt="Hits Santa Catarina">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box">
                    <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 tag_txt">
                        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/tag_txt.png" alt="Hits Santa Catarina">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 padding-off">
                        <form method="post" role="form" id="beachtennisForm" action="<?php echo base_url("beachtennis") ?>">
                            <div class="group-form">
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <input id="bnome" type="text" class="bnome form-control" name="bnome" required="required" placeholder="NOME*" />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <input id="bemail" type="email" class="bemail form-control" name="bemail" required="required" placeholder="E-MAIL*" />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <input id="bphone" class="bphone form-control" type="tel" name="bphone" required="required" placeholder="TELEFONE*" />
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <textarea id="bmsg" class="bmsg form-control" cols="30" rows="5" name="bmss" placeholder="SUGIRA UMA DATA PARA O SEU JOGO:"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                                    <button type="submit" class="bbtn_enviar btn" title="enviar" name="benviar_email" value="benviar">Validar</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($bemail_enviado))
                            echo $bemail_enviado;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>