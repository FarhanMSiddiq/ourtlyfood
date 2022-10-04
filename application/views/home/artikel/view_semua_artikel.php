<!-- ...:::Start User Event Section:::... -->
<div class="header-section" >
    <div class="container">
        <!-- Start User Event Area -->
        <div class="header-area">
            <div class="header-top-area header-top-area--style-1">
                <ul class="event-list">
                    <li class="list-item"><a href="<?=base_url();?>" area-label="Cart" class="btn btn--size-33-33 btn--center btn--round btn--color-radical-red btn--bg-white btn--box-shadow"><i class="fa fa-arrow-left "></i></a></li>
                    <li class="list-item"> <h2 class="title text-center">Berita</h2></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
        <!-- End User Event Area -->
    </div>
</div>
<!-- ...:::End User Event Section:::... -->

 <!-- ...:::Start Cart Section:::... -->
 <div class="cart-section section-gap-top-30">
            <div class="container">
                <div class="cart-items-wrapper">
                    <ul class="cart-item-list">
                    <?php

                            $url = "https://promkes.kemkes.go.id/feed/rss.php?cat=gq";


                            $invalidurl = false;
                            if(@simplexml_load_file($url)){
                                $feeds = simplexml_load_file($url);
                            }else{
                                $invalidurl = true;
                                echo "<h2>Invalid RSS feed URL.</h2>";
                            }


                            $i=0;
                            if(!empty($feeds)){
                                
                                foreach ($feeds->channel->item as $item) {

                                    $title = $item->title;
                                    $link = $item->link;
                                    $description = $item->description;
                                    $postDate = $item->pubDate;
                                    $img = $item;
                                    $pubDate = date('D, d M Y',strtotime($postDate));


                                    if($i>=1000) break;
                            ?>

                                    

                                     <!-- Start Single Cart Item -->
                                        <li class="single-cart-item">
                                            <div class="image">
                                                <img width="90" height="90" src="<?php echo(get_object_vars($img->enclosure)['@attributes']['url']);?>" alt="image">
                                            </div>
                                            <div class="content">
                                                <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                                                <div class="details">
                                                    <div class="left">
                                                        <span class="brand"><?php echo $pubDate; ?></span>
                                                        <span class="price"><?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Single Cart Item -->

                                    <?php
                                    $i++;
                                }
                            }else{
                                if(!$invalidurl){
                                    echo "<h2>No item found</h2>";
                                }
                            }
                            ?>
                       
                    </ul>

                    
                </div>
            </div>
        </div>
        <!-- ...:::End Cart Section:::... -->

