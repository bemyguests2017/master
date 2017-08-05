<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Your Home Location</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($location, ['id' => 'add_homes_location', 'method' => 'post', 'url' => ['controller' => 'homes', 'action' => 'addHomesLocation']]); ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Country</label>
                                <?php echo $this->Form->control('country', ['class' => 'form-control', 'placeholder' => 'Country Name', 'id' => 'country']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>State</label>
                                <?php echo $this->Form->control('state', ['class' => 'form-control', 'placeholder' => 'State Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                <?php echo $this->Form->control('city', ['class' => 'form-control', 'placeholder' => 'City Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pincode</label>
                                <?php echo $this->Form->control('pincode', ['class' => 'form-control', 'placeholder' => 'Pincode']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Latitude</label>
                                <?php echo $this->Form->control('lat', ['class' => 'form-control', 'placeholder' => 'Latitude', 'id' => 'lat']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Longitude</label>
                                <?php echo $this->Form->control('lon', ['class' => 'form-control', 'placeholder' => 'Longitude', 'id' => 'long']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Add Location </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" id="pac-input" size="6" class="form-control"/>
                </div>
                <div id="map-canvas-location"  style="width:700px; height: 500px;"></div>
            </div>

        </div>
    </div>
</main>
<?php echo $this->Html->script(['http://maps.googleapis.com/maps/api/js?key=AIzaSyAMwlCs4nq-MpgGjRDKIWTWzrIJaLb_CEw&libraries=places']); ?>
<?php echo $this->Html->script(['track-location-on-map']); ?>
