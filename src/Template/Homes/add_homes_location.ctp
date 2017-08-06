<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Your Home Location</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($homes, ['id' => 'add_homes_location', 'method' => 'post', 'url' => ['controller' => 'homes', 'action' => 'addHomesLocation']]); ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <?php echo $this->Form->control('address',['class' => 'form-control', 'placeholder' => 'Address']); ?>
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
                                <label>Country</label>
                                <?php echo $this->Form->select('country_id', $countries, ['class' => 'form-control']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>State</label>
                                <?php echo $this->Form->select('state_id', $states, ['class' => 'form-control']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                <?php echo $this->Form->select('city_id', $cities, ['class' => 'form-control']); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Latitude</label>
                                <?php echo $this->Form->control('lat', ['class' => 'form-control', 'placeholder' => 'Latitude', 'id' => 'lat', 'readonly']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Longitude</label>
                                <?php echo $this->Form->control('lon', ['class' => 'form-control', 'placeholder' => 'Longitude', 'id' => 'long', 'readonly']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Google Address</label>
                                <?php echo $this->Form->control('google_formatted_address',['id' => 'google-formatted-address', 'class' => 'form-control', 'placeholder' => 'Google Address', 'readonly']); ?>
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
