<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php if(!empty($search_news)) { $i = 0; foreach ($search_news as $news) { $i++; ?>
                <?php if(empty($theme_config['news_anim']) || $theme_config['news_anim'] == "Oui") { ?>
                    <ul class="list-unstyled">
                    <li class="animated zoomIn fadeIn">
                <?php } ?>
                <div class="col-md-6">
                    <div class="news-all" style="width:100%;padding: 0px;">
                        <?php if($EyPlugin->isInstalled('empiredev.newsadvanced')){ ?>
                            <img src="<?= $news['News']['img'] ?>" style="margin-bottom: 10px;">
                        <?php } ?>
                        <div style="padding: 20px;">
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
                    </div>
                </div>
                <?php if(empty($theme_config['news_anim']) || $theme_config['news_anim'] == "Oui") { ?>
                    </li>
                    </ul>
                <?php } ?>
            <?php } ?>
            <?php } else { echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>'; } ?>
        </div>
    </div>
</div>
