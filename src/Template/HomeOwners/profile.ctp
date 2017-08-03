<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Profile</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create('', ['id' => 'booking_form_advanced', 'url' => ['controller' => 'homes', 'action' => 'addHomes']]); ?>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <?php echo $this->Form->control('title', ['class' => 'form-control', 'placeholder' => 'Title']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <?php echo $this->Form->control('fname', ['class' => 'form-control', 'placeholder' => 'First Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <?php echo $this->Form->control('mname', ['class' => 'form-control', 'placeholder' => 'Middle Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <?php echo $this->Form->control('lname', ['class' => 'form-control', 'placeholder' => 'Last Name']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <?php echo $this->Form->control('country_id', ['class' => 'form-control', 'placeholder' => 'Country']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <?php echo $this->Form->control('state_id', ['class' => 'form-control', 'placeholder' => 'State']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <?php echo $this->Form->control('city_id', ['class' => 'form-control', 'placeholder' => 'City']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <?php echo $this->Form->control('phone', ['class' => 'form-control', 'placeholder' => 'Phone']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <?php echo $this->Form->control('gender', ['class' => 'form-control', 'placeholder' => 'Gender']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <?php echo $this->Form->control('marital_status', ['class' => 'form-control', 'placeholder' => 'Marital Status']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DOB</label>
                                <?php echo $this->Form->control('dob', ['class' => 'form-control', 'placeholder' => 'DOB']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <?php echo $this->Form->control('profile_pic', ['class' => 'form-control', 'placeholder' => 'Profile Picture']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> BOOK A ROOM NOW </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>

                </div>
            </div>

            <div class="col-md-4">
                <div class="special_offers">
                    <div class="main_title a_left upper">
                        <h2>Special Offers</h2>
                    </div>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special1.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Single Room</a></h4>
                                <div class="price">€ 89<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special2.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Double Room</a></h4>
                                <div class="price">€ 129<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special3.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Delux Room</a></h4>
                                <div class="price">€ 189<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

        </div>
    </div>
</main>
