 <div id="reviews_sec">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="capitalize black nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Product Description</a>
                </li>
                <li class="nav-item">
                    <a class="capitalize black nav-link " data-toggle="tab" href="#tabs-2" role="tab">Supplement Facts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link capitalize black" data-toggle="tab" href="#tabs-3" role="tab">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link capitalize black" id="reviewed" data-toggle="tab" href="#tabs-4" role="tab">Reviews</a>
                </li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
                <div class="capitalize tab-pane active" id="tabs-1" role="tabpanel">
                    <p>{{ strip_tags($product->description) }}</p>
                </div>
                <div class="capitalize tab-pane" id="tabs-2" role="tabpanel">
                    <img src="{{ asset('images/image1.png') }}">
                </div>
                <div class="capitalize tab-pane" id="tabs-3" role="tabpanel">
                    <section id="faq-section">
                        <div id="accordion">
                            @forelse ($faqs as $key => $item)
                            <div class="card hgm-accordion">
                                <div class="card-header" id="heading{{ $item->id }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                                            {{ $item->title }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{ $item->id }}" class="collapse" aria-labelledby="heading{{ $item->id }}" data-parent="#accordion">
                                    <div class="card-body">
                                        {!! strip_tags($item->description) !!}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>NO details found !</p>
                            @endforelse
                        </div>               
                    </section>
                </div>
                <div class="tab-pane" id="tabs-4" role="tabpanel">
                    <div class="rating_sec">
                        <button class="btn btn-dark" id="custom-review">Write a Review</button>
                    </div>
                    <br>
                    <div class="reviews_add" id="review-add-custom" style="display:none">
                        <p class="uppercase h3 black">Write a Review</h3>
                        <form action="{{route('product.review',$product->id)}}" method="POST">
                            {{ csrf_field() }}
                            <div class="rating_sec">
                                <div class="review_form row mx-auto">
                                    <div class="col-md-12 p-0 pr-2">
                                        <label>Name</label>
                                        <input type="text" name="fname" placeholder="Enter your name" required="">
                                    </div>
                                    <label>Rating</label>
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" checked="checked" /><label class = "full" for="star5" title="5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="0.5 stars"></label>
                                    </fieldset>
                                    <br>
                                    <div class="col-md-12 p-0">
                                        <label>Review Title</label>
                                        <input type="text" name="title" placeholder="Give your review a title"required="">
                                    </div>
                                    <div class="col-md-12 p-0">
                                        <label>Review</label>
                                        <textarea type="text" name="comment" placeholder="Write your comments here" required=""></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark submit-btn-review">submit review</button>
                            </div>
                        </form>
                    </div>
                    <!--<br />-->
                    @php
                    
                    $avg_rat = round($avg_rating,2) ;
                    @endphp 
                    <!--<br>-->
                    <div class="comments_wrap">   

                        <h3 class="black"> Customer Reviews </h3>
                        <p class="rating-new" style="display:inline">
                            @php for($i=1; $i<$avg_rat; $i++){ @endphp 
                            <i class="fas fa-star"></i>
                            @php  } @endphp
                            <i class="fas fa-star-half-alt"></i>
                        </p>
                        <span class="black"> <?php echo "&nbsp;" . $avg_rat . " out of 5"; ?></span>
                        <p><?php echo $review_count; ?> global ratings</p>
                        <div class="row rating-sec rating_sec">
                            <div class="col-md-4">
                                <div id="5" class="star-click">
                                <div class="side">
                                    <div class="five">5 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-5" style="width: <?php
                                        if (@$avg_rating_5) {
                                            echo (($avg_rating_5 / $review_count) * 100);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div class="percent"><?php
                                        if (@$avg_rating_5) {
                                            echo round((($avg_rating_5 / $review_count) * 100), 0);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%</div>
                                </div>
                                </div>
                                 <div id="4" class="star-click">
                                <div class="side">
                                    <div  class="four">4 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-4" style="width: <?php
                                        if (@$avg_rating_4) {
                                            echo (($avg_rating_4 / $review_count) * 100);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div class="percent"><?php
                                        if (@$avg_rating_4) {
                                            echo round((($avg_rating_4 / $review_count) * 100), 0);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%</div>
                                </div>
                                 </div>
                                 <div id="3" class="star-click">
                                <div class="side">
                                    <div class="three">3 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-3" style="width: <?php
                                        if (@$avg_rating_3) {
                                            echo (($avg_rating_3 / $review_count) * 100);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div class="percent">
                                        <?php
                                        if (@$avg_rating_3) {
                                            echo round((($avg_rating_3 / $review_count) * 100), 0);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%</div>
                                </div>
                                 </div>
                                 <div id="2" class="star-click">
                                <div class="side">
                                    <div class="two">2 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-2" style="width: 
                                        <?php
                                        if (@$avg_rating_2) {
                                            echo (($avg_rating_2 / $review_count) * 100);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div class="percent"><?php
                                        if (@$avg_rating_2) {
                                            echo round((($avg_rating_2 / $review_count) * 100), 0);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%</div>
                                </div>
                                 </div>
                                 <div id="1" class="star-click">
                                <div class="side">
                                    <div class="one">1 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-1" style="width: <?php
                                        if (@$avg_rating_1) {
                                            echo (($avg_rating_1 / $review_count) * 100);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div class="percent"><?php
                                        if (@$avg_rating_1) {
                                            echo round((($avg_rating_1 / $review_count) * 100), 0);
                                        } else {
                                            echo 0;
                                        }
                                        ?>%</div>
                                </div>
                                 </div>

                            </div>
                            <div class="col-md-8">
                            </div>    
                            <div class="col-md-8">
                                <h2 class="single-star star-left">Showing <span class="star-count"></span> Star Reviews</h2>
                            </div>
                            <div class="col-md-4">
                                <a class="single-star star-right btn btn-dark" href="javascript:void(0);" > <i class="fa fa-times fa-2" aria-hidden="true"></i>    Rating Filter </a>
                            </div>
                        </div>


                        <!--                        <div class="progress">
                                                    <a href="javascript:void(0);" id="5" class="star-click">5 Star</a> <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                        if (@$avg_rating_5) {
                            echo (($avg_rating_5 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>%" aria-valuenow="<?php
                        if (@$avg_rating_5) {
                            echo (($avg_rating_5 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>" aria-valuemin="0" aria-valuemax="100"></div><?php
                        if (@$avg_rating_5) {
                            echo round((($avg_rating_5 / $review_count) * 100), 0);
                        } else {
                            echo 0;
                        }
                        ?>%
                                                </div>
                                                <div class="progress">
                                                    <a href="javascript:void(0);" id="4" class="star-click">4 Star</a> <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                        if (@$avg_rating_4) {
                            echo (($avg_rating_4 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>%" aria-valuenow="<?php
                        if (@$avg_rating_4) {
                            echo (($avg_rating_4 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>" aria-valuemin="0" aria-valuemax="100"></div><?php
                        if (@$avg_rating_4) {
                            echo round((($avg_rating_4 / $review_count) * 100), 0);
                        } else {
                            echo 0;
                        }
                        ?>%
                                                </div>
                                                <div class="progress">
                                                    <a href="javascript:void(0);" id="3" class="star-click">3 Star</a> <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                        if (@$avg_rating_3) {
                            echo (($avg_rating_3 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>%" aria-valuenow="<?php
                        if (@$avg_rating_3) {
                            echo (($avg_rating_3 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>" aria-valuemin="0" aria-valuemax="100"></div><?php
                        if (@$avg_rating_3) {
                            echo round((($avg_rating_3 / $review_count) * 100), 0);
                        } else {
                            echo 0;
                        }
                        ?>%
                                                </div>
                                                <div class="progress">
                                                    <a href="javascript:void(0);" id="2" class="star-click">2 Star</a> <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                        if (@$avg_rating_2) {
                            echo (($avg_rating_2 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>%" aria-valuenow="<?php
                        if (@$avg_rating_2) {
                            echo (($avg_rating_2 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>" aria-valuemin="0" aria-valuemax="100"></div><?php
                        if (@$avg_rating_2) {
                            echo round((($avg_rating_2 / $review_count) * 100), 0);
                        } else {
                            echo 0;
                        }
                        ?>%
                                                </div>
                                                <div class="progress">
                                                    <a href="javascript:void(0);">1 Star</a> <div class="progress-bar bg-warning" role="progressbar" style="width: <?php
                        if (@$avg_rating_1) {
                            echo (($avg_rating_1 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>%" aria-valuenow="<?php
                        if (@$avg_rating_1) {
                            echo (($avg_rating_1 / $review_count) * 100);
                        } else {
                            echo 0;
                        }
                        ?>" aria-valuemin="0" aria-valuemax="100"></div><?php
                        if (@$avg_rating_1) {
                            echo round((($avg_rating_1 / $review_count) * 100), 0);
                        } else {
                            echo 0;
                        }
                        ?>%
                                                </div>-->

                    </div>

                    @forelse($reviews as $review)
                    <div class="comments_wrap more_box comments_wrap_start <?php echo $review->rating; ?>-star">                     
                        <p class="rating-new">
                            @php for($i=0; $i<$review->rating; $i++){ @endphp 
                            <i class="fas fa-star"></i>
                            @php  } @endphp
                            @php for($j=$review->rating; $j<5; $j++){ @endphp 
                            <i class="far fa-star"></i>
                            @php  } @endphp
                        </p>
                        <p class="time">{{ $review->fname }} | {{ date_format($review->created_at,"F d, Y") }}</p>
                        <p class="h6 black">{{ $review->title }}</p>
                        <p>{!! strip_tags($review->description) !!}</p>
                    </div>

                    @empty
                    <div class="alert alert-error">No reviews Found</div>
                    @endforelse
                    <div class="cart_btn">
                        <a  id="loadMore" href="javascript:void(0);" class="btn btn-dark">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
