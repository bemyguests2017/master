<main id="booking_page">
    <div class="container">
        <div id="booking_form_advanced">    

            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <?php echo $this->Form->create('', ['id' => 'guest_login__form', 'url' => ['controller' => 'guests', 'action' => 'login']]); ?>
                    <div class="form-group">
                        <label>Username</label>
                        <?php echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>

                        <label>Email</label>
                        <?php echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>

                        <label>Password</label>
                        <?php echo $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>

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