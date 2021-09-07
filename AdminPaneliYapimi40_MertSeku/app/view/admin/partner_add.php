<?php require_once view('admin/static/header'); ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <?php if (isset($edit_id)) { ?>
                        <h4>Edit Partner</h4>
                    <?php } else { ?>
                        <h4>Add New Business Partner</h4>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=admin_url('partner_list')?>">Business Partner</a></li>
                    <li class="breadcrumb-item active"><a href="<?=admin_url('partner_add')?>">Add</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <?php if (isset($success)) { ?>
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong><?= $success ?></strong>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($error)) { ?>
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong><?= $error ?></strong>
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg-12">
                <?= $languages ?>
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="name">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="name" name="name" value="<?= $values['name'] ?>" placeholder="Add Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="name">Link
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="link" name="link" value="<?=$values['link']?>" placeholder="Add Link">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3"></label>
                                            <div class="col-lg-8 text-right">
                                                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="SUBMIT" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($edit_id)) { ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="addimage" action="<?= site_url('ajax?yukle=partners&id=' . $edit_id) ?>" method="post" enctype="multipart/form-data">
                                        <input type="file" name="dosya">
                                        <input type="submit" name="submit" value="GÖNDER"></input>
                                    </form>
                                    <div class="upload-btn">CHOOSE PHOTO</div>
                                    <div class="error"></div>
                                    <div class="loading">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <?php
                                    if (file_exists(realpath('.') . $photos)) {
                                        echo '<img src="' . site_url($photos) . '" class="upload-image" style="width: 400px" alt="" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require_once view('admin/static/footer'); ?>
