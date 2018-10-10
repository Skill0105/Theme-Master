<br>
<?= $this->Html->css('staff.css'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($staffs as $staff): ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h3 style="display: inline-block;"><?= $staff['Staff']['username'] ?></h3></div>
                        <div class="panel-body text-center">
                            <div class="img-staff-h">
                                <img src="/API/get_head_skin/<?= $staff['Staff']['username'] ?>/250" alt="<?= $staff['Staff']['username'] ?>" class="image" style="width:200px; min-width:100%">
                            </div>
                        </div>
                        <div class="panel-footer text-center" style="border-top: 0px solid #ddd;border-radius: 0px;">
                            <h4>
                                <?= $staff['Staff']['rank'] ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>