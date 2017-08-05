<main id="booking_page">
    <div class="container">
        <div id="booking_form_advanced">    

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <?= $this->Form->create($user,['novalidate' => 'novalidate','id'=>'registerFORMID']) ?>
                    <div class="form-group">
                        <label>Username</label>
                        <?php echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Choose Your Username']); ?>

                        <label>Email</label>
                        <?php echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Enter Your Email']); ?>

                        <label>Password</label>
                        <?php echo $this->Form->control('password', ['type' =>'password','class' => 'form-control', 'placeholder' => 'Enter Your Password']); ?>

                        <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> BOOK A ROOM NOW </button>

                    </div>   
                    <?php echo $this->Form->end(); ?>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</main>