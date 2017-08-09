<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Cuisine</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($cuisine, ['id' => 'add_home_cuisines', 'method' => 'post', "enctype" => "multipart/form-data", 'url' => ['controller' => 'homes', 'action' => 'addHomeCuisines']]); ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <?php echo $this->Form->select('cuisine_category_id', $categoryList, ['class' => 'form-control', 'placeholder' => 'Cuisine Category']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Cuisine Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Add Cuisine </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <?php foreach ($allCuisines as $cuisine) { ?>
                            <tr>
                                <?php
//                            echo $this->Html->image($pathImage.'/'.$member->profile_picture, [
//                                "alt" => "Brownies",
//                                'url' => ['controller' => 'Recipes', 'action' => 'view', 6],
//                                'width' => 100,
//                                'height' => 100
//                            ]);

                                echo "<td>".$cuisine->cuisine_category->name."</td>";
                                echo "<td>".$cuisine->name."</td>";
                                echo "<td>".$this->Html->link('Edit', '/homes/addHomeCuisines/'.$cuisine->id ,[])."</td>";
                                ?>
                              </tr>

                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php echo $this->Html->script(['track-location-on-map']); ?>
<?php echo $this->Html->script(['homes']); ?>
