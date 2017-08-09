<main id="rooms_list">
    <div class="container">
        
        <!-- ITEM -->
        <?php foreach($homes as $home){ ?>
        <article class="room_list">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <figure>
                        <div class="room_list_slider owl-carousel">
                            
                            <div class="item">
                                <a href="room.html" class="hover_effect h_link h_blue">
                                    <?php echo $this->Html->link(
                                            $this->Html->image($pathImage.'/'.$home->home_images[0]->image, ["alt" => $home->home_images[0]->image, "height" => "100"]), ['controller' => 'Homes', 'action' => 'homeView'], ['escape' => false, 'class' => 'hover_effect h_link h_blue']
                                    ); ?>
                                </a>
                            </div>
                            
                        </div>
                    </figure>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="room_details">
                        <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                            <h3><?php
                            echo $this->Html->link(
                                    $home->name, ['controller' => 'Homes', 'action' => 'homeView'], ['class' => '']
                            );
                            ?></h3>
                            <p><?php echo $home->description; ?></p>
                            <div class="room_services">
                                <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Zante Restaurant"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                            <div class="room_price_inner">
                                <span class="room_price_number"> €<?php echo $home->price; ?>  </span>
                                <small class="upper"> per night </small>
                                <a href="room.html" class="button  btn_blue btn_full upper">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php } ?>
        <nav class="a_center">
            <ul class="pagination mt50 mb0">
                <li class="prev_pagination"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="next_pagination"><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>

    </div>
</main>