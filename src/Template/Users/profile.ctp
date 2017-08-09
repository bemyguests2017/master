<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Update Profile</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($user, ['id' => 'booking_form_advanced', 'method' => 'post', 'url' => ['controller' => 'Users', 'action' => 'profile']]); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <?php echo $this->Form->select('title', ['Mr.'=>'Mr.', 'Miss.'=>'Miss.', 'Mrs.'=>'Mrs.'], ['class' => 'form-control', 'placeholder' => 'Title']); ?>
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
                                <label>Username</label>
                                <?php echo $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Username', 'readonly']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <?php echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Email', 'readonly']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Update </button>
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

<!-- Select Location -->
<div id="myModalLocation" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">My Home Location</h4>
            </div>
            <div class="modal-body">
                <div id="booking_form_advanced">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>County</label>
                                <?php //echo $this->Form->select('country_id', $countries, ['class' => 'form-control', 'placeholder' => 'Country']); ?>
                                <?php echo $this->Form->control('country', ['class' => 'form-control', 'placeholder' => 'Country']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <?php echo $this->Form->control('state', ['class' => 'form-control', 'placeholder' => 'State']); ?>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <?php echo $this->Form->control('city', ['class' => 'form-control', 'placeholder' => 'City']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode</label>
                                <?php echo $this->Form->control('pincode', ['class' => 'form-control', 'placeholder' => 'Pincode']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode</label>
                                <?php echo $this->Form->control('lat', ['class' => 'form-control', 'placeholder' => 'Pincode']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode</label>
                                <?php echo $this->Form->control('long', ['class' => 'form-control', 'placeholder' => 'Pincode']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="map-canvas"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script(['select-location-map.js']) ?>


<!-- Select cuisines -->
<div id="myModalCuisines" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Homes Cuisines</h4>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->input('cuisines', ['options' => $cuisines, 'multiple' => 'checkbox']); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Select Members -->
<div id="myModalMembers" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Homes Members</h4>
            </div>
            <div class="modal-body">
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Your Home Name</label>
                            <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Your Home Name</label>
                            <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Your Home Name</label>
                            <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Your Home Name</label>
                            <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Your Home Name']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
