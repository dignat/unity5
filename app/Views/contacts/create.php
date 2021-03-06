<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
            if (session()->getFlashdata('status')) {
                echo "<h4>".session()->getFlashdata('status'). "</h4>"  ;
            }

            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Add Contact</h4>
                    <a href="<?= site_url('/')?>"  class="btn btn-primary float-end">Back</a>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= site_url('contacts/store') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="family_name"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Save Contact</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>