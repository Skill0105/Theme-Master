<style>
    #slider .tp-bullets {
        display: none;
    }
    @media screen and (min-width: 0px) and (max-width: 720px) {
        .mobile-hide { display: none; }
    }
</style>
<div id="slider" class="rev_slider slidercustom <?php if(empty($theme_config['header']) || $theme_config['header'] == "Oui") { echo ''; } else { echo 'mobile-hide'; } ?>" style="max-height: 530px;">
    <ul>
        <li data-transition="fade" style="max-height: 530px;">
            <?php if(empty($theme_config['bg'])) { ?>
                <img src="https://placeholdit.imgix.net/~text?txtsize=150&txt=Background&w=1920&h=530">
            <?php } else { ?>
                <img src="<?= $theme_config['bg']; ?>">
            <?php } ?>
            <?php if(empty($theme_config['particules']) || $theme_config['particules'] == "Oui") { ?>
                <div id="particles-js"></div>
            <?php } ?>
            <div class="tp-caption title tp-resizeme"
                 data-x="left" data-hoffset="100"
                 data-y="top" data-voffset="125"
                 data-transform_idle="o:1;"
                 data-transform_in="o:0"
                 data-transform_out="o:0"
                 data-start="400"
                 style="margin-top: -50px;"
            >
                <?php if($theme_config['perso'] == " ") { ?>
                <?php } else { ?>
                    <?php if(empty($theme_config['perso'])) { ?>
                        <img src="https://placeholdit.imgix.net/~text?txtsize=25&txt=Un%20%C3%A9l%C3%A9ment%20en%20png,%20comme%20un%20personnage%20par%20exemple...&w=300&h=300">
                    <?php } else { ?>
                        <img src="<?= $theme_config['perso']; ?>">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="tp-caption title tp-resizeme"
                 data-x="left" data-hoffset="585"
                 data-y="top" data-voffset="210"
                 data-transform_idle="o:1;"
                 data-transform_in="o:0"
                 data-transform_out="o:0"
                 data-start="600"
                 style="margin-top: -100px;"
            >
            <?php if(empty($theme_config['first'])) { ?>
                Bienvenue sur
            <?php } else { ?>
                <?= $theme_config['first']; ?>
            <?php } ?>
            </div>
            <div class="tp-caption name tp-resizeme"
                 data-x="left" data-hoffset="585"
                 data-y="top" data-voffset="255"
                 data-transform_idle="o:1;"
                 data-transform_in="o:0"
                 data-transform_out="o:0"
                 data-start="800"
                 style="margin-top: -100px;"
            ><?= $website_name ?>
            </div>
            <div class="tp-caption description tp-resizeme"
                 data-x="left" data-hoffset="585"
                 data-y="top" data-voffset="360"
                 data-transform_idle="o:1;"
                 data-transform_in="o:0"
                 data-transform_out="o:0"
                 data-start="1200"
                 style="margin-top: -100px;"
            >
            <?php if(empty($theme_config['txt_head'])) { ?>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                Praesent aliquet fermentum arcu nec vestibulum fringilla. <br>
                Proin lacinia laoreet justo eu vestibulum vestibulum mattis. <br>
                Maecenas aliquam iaculis turpis, a vestibulum risus mattis.
            <?php } else { ?>
                <?= $theme_config['txt_head']; ?>
            <?php } ?>
            </div>
        </li>
    </ul>
</div>

<div class="container">
    <div class="row">

        <?php if(empty($theme_config['sidebar']) || $theme_config['sidebar'] == "Oui") { ?>
            <div class="col-lg-9">
        <?php } else { ?>
            <div class="col-lg-12">
        <?php } ?>
            <div class="article_title theme-color-background">
                <h1>Derniers articles</h1>

            </div>

            <?php if(empty($theme_config['limit_news'])) { $theme_config['limit_news'] = "3"; } ?>
            <?php if(!empty($search_news)) { $i = 0; foreach ($search_news as $news) { $i++; if($i > $theme_config['limit_news']) { break; } ?>
                <?php if(empty($theme_config['news_anim']) || $theme_config['news_anim'] == "Oui") { ?>
                    <ul class="list-unstyled">
                        <li class="animated zoomIn fadeIn">
                <?php } ?>
                        <div class="news-all" style="width:100%;">
                            <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>"><h2><?= $news['News']['title']; ?></h2></a>
                            <span class="date theme-color-text"><?= $Lang->date($news['News']['created']); ?></span>
                            <div class="texte"><p><?= $this->Text->truncate($news['News']['content'], 700, array('ellipsis' => '...', 'html' => true)); ?></p></div>
                            <div class="likes">
                                <?= $news['News']['count_likes'] ?> <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="commentaires">
                                <?= $news['News']['count_comments'] ?> <i class="fa fa-comments" aria-hidden="true"></i>
                            </div>
                            <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>" class="btn btn-primary pull-right"><?= $Lang->get('NEWS__READ_MORE'); ?></a>
                        </div>
                <?php if(empty($theme_config['news_anim']) || $theme_config['news_anim'] == "Oui") { ?>
                        </li>
                    </ul>
                <?php } ?>
            <?php } ?>
            <?php } else { echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>'; } ?>
            <?php if(empty($theme_config['more']) || $theme_config['more'] == "Oui") { ?>
                <a href="/blog">
                    <div class="article_title theme-color-background">
                        <h1>Voir plus d'articles</h1>
                    </div>
                </a>
            <?php } ?>
        </div>

        <?php if(empty($theme_config['sidebar']) || $theme_config['sidebar'] == "Oui") { ?>
            <div class="col-md-3">
                <?php if($theme_config['mod1'] == "Non") { ?>
                <?php } else { ?>
                    <?php if($theme_config['mod1_type'] == "IP") { ?>
                        <div style="margin: 30px 0px;" class="panel panel-default">
                            <div class="panel-heading" style="overflow: hidden;">
                                <center><h1 class="panel-title"><i class="fa fa-server"></i><font color="white"> Nous rejoindre</font></h1></center>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <input style="cursor:not-allowed; text-align: center;" type="text" class="form-control" value="<?= $theme_config['value_mod1']; ?>" id="to-copy">
                                    <div style="padding: 5px"></div>
                                    <button id="copy" style="margin-bottom: -10px;" class="btn btn-primary btn-block">Copier l'adresse IP</button>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div style="margin: 30px 0px;" class="panel panel-default">
                            <div class="panel-heading" style="overflow: hidden;">
                                <center><h1 class="panel-title"><i class="fa fa-server"></i><font color="white"> Nous rejoindre</font></h1></center>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <a href="<?= $theme_config['value_mod1']; ?>"><button id="copy" style="margin-bottom: -10px;" class="btn btn-primary btn-block">Télécharger le launcher</button></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php if($theme_config['mod2'] == "Non") { ?>
                <?php } else { ?>
                    <div style="margin: 30px 0px;" class="panel panel-default">
                        <div class="panel-heading" style="overflow: hidden;">
                            <center><h1 class="panel-title"><i class="fa fa-users"></i><font color="white"> Nos réseaux sociaux</font></h1></center>
                        </div>
                        <div class="panel-body">
                            <a href=""><button class="btn btn-primary btn-block">Youtube</button></a>
                            <div style="padding: 5px"></div>
                            <a href=""><button class="btn btn-primary btn-block">Twitter</button></a>
                            <div style="padding: 5px"></div>
                            <a href=""><button style="border-bottom: 55px" class="btn btn-primary btn-block">Facebook</button></a>
                            <div style="padding: 5px"></div>
                            <a href=""><button style="border-bottom: 55px" class="btn btn-primary btn-block">Discord</button></a>
                        </div>
                    </div>
                <?php } ?>

                <?php if($theme_config['mod3'] == "Non") { ?>
                <?php } else { ?>
                    <div style="margin: 30px 0px;" class="panel panel-default">
                        <div class="panel-heading" style="overflow: hidden;">
                            <center><h1 class="panel-title"><i class="fa fa-bar-chart"></i><font color="white"> Statistiques</font></h1></center>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-block"><?= ClassRegistry::init('Users')->find('count') ?> membres</button>
                            <div style="padding: 5px"></div>
                            <button class="btn btn-primary btn-block"><?= ClassRegistry::init('News')->find('count') ?> articles</button>
                            <div style="padding: 5px"></div>
                            <button style="border-bottom: 55px" class="btn btn-primary btn-block"><?= ClassRegistry::init('Visit')->find('count') ?> visites</button>
                        </div>
                    </div>
                <?php } ?>

                <?php if($theme_config['mod4'] == "Non") { ?>
                <?php } else { ?>
                    <div style="margin: 30px 0px;" class="panel panel-default">
                        <div class="panel-heading" style="overflow: hidden;">
                            <center><h1 class="panel-title"><i class="fa fa-video-camera"></i><font color="white"> Notre trailer</font></h1></center>
                        </div>
                        <div class="panel-body">
                            <?php if(empty($theme_config['id_yt'])) { ?>
                                <iframe width="100%" src="https://www.youtube.com/embed/MmB9b5njVbA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            <?php } else { ?>
                                <iframe width="100%" src="https://www.youtube.com/embed/<?= $theme_config['id_yt']; ?>" frameborder="0" allowfullscreen></iframe>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if($theme_config['mod5'] == "Non") { ?>
                <?php } else { ?>
                    <div style="margin: 30px 0px;" class="panel panel-default">
                        <div class="panel-heading" style="overflow: hidden;">
                            <center><h1 class="panel-title"><i class="fa fa-heart"></i><font color="white"> Nos partenaires</font></h1></center>
                        </div>
                        <div class="panel-body">
                            <a href=""><button class="btn btn-primary btn-block">Partenaire 1</button></a>
                            <div style="padding: 5px"></div>
                            <a href=""><button class="btn btn-primary btn-block">Partenaire 2</button></a>
                            <div style="padding: 5px"></div>
                            <a href=""><button style="border-bottom: 55px" class="btn btn-primary btn-block">Partenaire 3</button></a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</div>

<?= $Module->loadModules('home') ?>
