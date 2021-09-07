<?php require_once view('admin/static/header'); ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit User</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
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
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="username">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="username" name="username" value="<?= $values['username'] ?>" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="password">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="password">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="namesurname">Name and Surname
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="namesurname" name="namesurname" value="<?= $values['namesurname'] ?>" placeholder="Name and Surname">
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
        </div>
    </div>
</div>
<?php require_once view('admin/static/footer'); ?>