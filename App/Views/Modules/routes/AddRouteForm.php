<h2>View All Routes</h2>

<a href="/routes" class="btn btn-sm btn-outline-secondary my-5">Back to routes</a>

    <form action="/routes" method="post" class="mb-5">
        <div class="form-group">
            <label for="link">Link</label>
            <input class="form-control col-6 <?= \App\Helpers\Output::IsInvalid($errors, "link") ?>" type="text" name="link" value="<?= \App\Helpers\Output::Isset($post, 'link') ?>">
            <span class="invalid-feedback"><?= \App\Helpers\Output::Isset($errors, 'link') ?></span>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control col-6 <?= \App\Helpers\Output::IsInvalid($errors, "name") ?>" type="text" name="name" value="<?= \App\Helpers\Output::Isset($post, 'name') ?>">
            <span class="invalid-feedback"><?= \App\Helpers\Output::Isset($errors, 'name') ?></span>
        </div>
        <div class="form-group">
            <label for="type">Request Type</label>
            <select name="type" class="form-control col-6">
                <option value="POST" <?= \App\Helpers\Output::Selected($post, 'type', 'POST') ?>>POST</option>
                <option value="GET" <?= \App\Helpers\Output::Selected($post, 'type', 'GET') ?>>GET</option>
            </select>
        </div>
        <div class="form-group">
            <label for="controller">Controller</label>
            <input class="form-control col-6 <?= \App\Helpers\Output::IsInvalid($errors, "controller") ?>" type="text" name="controller" value="<?= \App\Helpers\Output::Isset($post, 'controller') ?>">
            <span class="invalid-feedback"><?= \App\Helpers\Output::Isset($errors, 'controller') ?></span>
        </div>
        <div class="form-group">
            <label for="method">Method</label>
            <input class="form-control col-6 <?= \App\Helpers\Output::IsInvalid($errors, "method") ?>" type="text" name="method" value="<?= \App\Helpers\Output::Isset($post, 'method') ?>">
            <span class="invalid-feedback"><?= \App\Helpers\Output::Isset($errors, 'method') ?></span>
        </div>
                <div class="row col-8 my-4 form-group ">
                    <?php if(isset($errors['permissions'])): ?>
                        <div class="alert-danger col-12"><?= $errors['permissions'] ?></div>
                    <?php endif; ?>


                    <label for="permissions[]" class="m-2">Public</label>
                    <input type="checkbox" <?= \App\Helpers\Output::IsInCheckedArrayOfArray($post, 'permissions' ,'1') ?>value="1" name="permissions[]" class="form-control col">
                    <label for="permissions[]" class="m-2">Admin</label>
                    <input type="checkbox" <?= \App\Helpers\Output::IsInCheckedArrayOfArray($post, 'permissions' ,'2') ?>value="2" name="permissions[]" class="form-control col">
                    <label for="permissions[]" class="m-2">Employee</label>
                    <input type="checkbox" <?= \App\Helpers\Output::IsInCheckedArrayOfArray($post, 'permissions' ,'3') ?>value="3" name="permissions[]" class="form-control col">
                    <label for="permissions[]" class="m-2">Partner</label>
                    <input type="checkbox" <?= \App\Helpers\Output::IsInCheckedArrayOfArray($post, 'permissions' ,'4') ?>value="4" name="permissions[]" class="form-control col">
                    <label for="permissions[]" class="m-2">Worker</label>
                    <input type="checkbox" <?= \App\Helpers\Output::IsInCheckedArrayOfArray($post, 'permissions' ,'5') ?>value="5" name="permissions[]" class="form-control col">
                </div>
        <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
    </form>
