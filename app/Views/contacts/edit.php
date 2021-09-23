<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <?php
        if (session()->getFlashdata('status')) {
            echo "<h4>".session()->getFlashdata('status'). "</h4>"  ;
        }

        ?>
        <div class="card">
            <div class="card-header">
                <h4>Update User</h4>
                <a href="<?= site_url('contacts/index')?>"  class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= site_url('contacts/update/'.$contact['id']) ?>">
                    <input type="hidden" value="PUT" name="_method"/>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?=  $contact['first_name']?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="family_name" value="<?=  $contact['family_name']?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="<?=  $contact['email']?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?=  $contact['phone']?>"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-4">Update Contact</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
