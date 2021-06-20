<style>
    .loginFormUser div {
        margin-top: 15px;
    }

    .loginFormUser {
        width: 30%;
        padding: inherit;
        background: rgba(0, 0, 0, 0.5);
    }
</style>
<!-- <form class="row loginFormUser mt-5"> -->
<?= $this->Form->create('', ['class' => 'row loginFormUser mt-5']); ?>
    <div class="col-12">
        <h2 style="text-align: center;">Login User</h2>
    </div>
    <div class="col-12">
        <!-- <label for="inputName4" class="form-label">Name</label> -->
        <!-- <input type="Name" class="form-control" id="inputName4"> -->
        <?= $this->Form->control('name', ['label' => 'User Name']); ?>
    </div>
    <div class="col-12">
        <!-- <label for="inputPassword4" class="form-label">Password</label> -->
        <!-- <input type="password" class="form-control" id="inputPassword4"> -->
        <?= $this->Form->control('password', ['label' => 'Password', 'type' => 'password']); ?>
    </div>
    <div class="col-12">
        <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
        <?= $this->Form->submit('login', ['class' => 'btn btn-primary', 'style' => 'margin-bottom: 20px;']); ?>
    </div>
<!-- </form> -->
<?= $this->Form->end();?>