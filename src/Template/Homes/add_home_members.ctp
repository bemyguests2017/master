<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Member</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($member, ['id' => 'add_home_members', 'method' => 'post', "enctype" => "multipart/form-data", 'url' => ['controller' => 'homes', 'action' => 'addHomeMembers']]); ?>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <?php echo $this->Form->control('title', ['class' => 'form-control', 'placeholder' => 'Title']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Full Name']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Education</label>
                                <?php echo $this->Form->control('education', ['class' => 'form-control', 'placeholder' => 'Education']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Age</label>
                                <?php echo $this->Form->control('age', ['class' => 'form-control', 'placeholder' => 'Age']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Picture</label>
                                <?php echo $this->Form->control('profile_picture', ['type' => 'file', 'class' => 'form-control', 'placeholder' => 'Profile Picture']); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Add Member </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <?php foreach ($members as $member) { ?>
                            <tr>
                                <?php
//                            echo $this->Html->image($pathImage.'/'.$member->profile_picture, [
//                                "alt" => "Brownies",
//                                'url' => ['controller' => 'Recipes', 'action' => 'view', 6],
//                                'width' => 100,
//                                'height' => 100
//                            ]);

                                echo "<td>".$member->title."</td>";
                                echo "<td>".$member->name."</td>";
                                echo "<td>".$member->education."</td>";
                                echo "<td>".$member->age."</td>";
                                echo "<td>".$this->Html->link('Edit', '/homes/addHomeMembers/'.$member->id ,[])."</td>";
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
