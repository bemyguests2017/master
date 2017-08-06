<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Your Home Location</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create("", ['id' => 'add_homes_photos', 'method' => 'post', "enctype" => "multipart/form-data", 'url' => ['controller' => 'homes', 'action' => 'addHomesPhotos']]); ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <?php echo $this->Form->control('photo.', ['type' => 'file', 'class' => 'form-control', 'placeholder' => 'Photo', 'multiple']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Add Location </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php foreach ($homeImages as $image) { ?>
                        <div class="col-md-2">
                            <?php
                            echo $this->Html->image($pathImage.'/'.$image->image, [
                                "alt" => "Brownies",
                                'url' => ['controller' => 'Recipes', 'action' => 'view', 6],
                                'width' => 100,
                                'height' => 100
                            ]);
                            ?>   
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $this->Html->script(['track-location-on-map']); ?>
<?php echo $this->Html->script(['homes']); ?>
