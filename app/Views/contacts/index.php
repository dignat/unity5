<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Contacts</h4>
                    <a href="<?= base_url('contacts/create')?>"  class="btn btn-primary float-end">Add Contact</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['family_name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td class="text-center">
                                <a href="<?=base_url('contacts/edit/'.$user['id']) ?>"  class="btn btn-success btn-sm">Edit</a>
                                <a href="<?= base_url('contacts/delete/'. $user['id']) ?>" class="btn btn-warning btn-sm">Disable</a>
                                <!--<form action="<?/*= base_url('contacts/hard-delete/'.$user['id'])*/?>" method="post">
                                    <input type="hidden" name="_method" value="delete"/>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>-->
                            </td>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
