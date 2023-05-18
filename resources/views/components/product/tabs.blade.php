<div class=" mt-16 p-4 sm:p-10 bg-gray-100">
    <div x-data="{ tab: 'tab1' }">
        <div class="mb-4">
            <ul class="flex flex-col sm:flex-row">
                <li class="py-2 pr-4 font-black text-2xl text-gray-400">
                    <a href="#" @click.prevent="tab ='tab1'" :class="{ 'border-b-2 pb-2 border-dark text-dark': tab == 'tab1' }">Product Description</a>
                </li>
                <li class="py-2 pr-4 font-black text-2xl text-gray-400">
                    <a href="#" @click.prevent="tab ='tab2'" :class="{ 'border-b-2 pb-2 border-dark text-dark': tab == 'tab2' }">Supplement Facts</a>
                </li>
                <li class="py-2 pr-4 font-black text-2xl text-gray-400">
                    <a href="#" @click.prevent="tab ='tab3'" :class="{ 'border-b-2 pb-2 border-dark text-dark': tab == 'tab3' }">FAQs</a>
                </li>
                <li class="py-2 pr-4 font-black text-2xl text-gray-400">
                    <a href="#" @click.prevent="tab ='tab4'" :class="{ 'border-b-2 pb-2 border-dark text-dark': tab == 'tab4' }">Reviews</a>
                </li>
            </ul>
        </div>
        <div x-show="tab === 'tab1'">

            <p class="text-base text-gray-500">{{ strip_tags($product->description) }}</p>
        </div>
        <div x-show="tab === 'tab2'">
            <p><img class=" w-2/4" src="/images/image1.png" /></p>
        </div>
        <div x-show="tab === 'tab3'">
            {{-- @forelse ($faqs as $key => $item)
                        {{ $item->title }}
            {!! strip_tags($item->description) !!}
            @empty
            <p>NO details found !</p>
            @endforelse --}}
            <div class="container text-grey mx-auto px-2 py-2" x-data="{
                          faqs: [{
                                     question: 'What is Horny Goat Weed and how does it work?',
                                     answer: 'Horny Goat Weed is a natural supplement that has been used for centuries to enhance libido and improve sexual function. It works by increasing blood flow to the genitals and improving the overall health of the reproductive system.',
                                     isOpen: true,
                                 },
                                 {
                                     question: 'Is Horny Goat Weed safe for men over 40 to use?',
                                     answer: 'Yes, Horny Goat Weed is considered safe for men over 40 to use as long as it is used in the recommended dosage. However, it is always best to consult with a healthcare professional before starting any new supplement. ',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'Are there any side effects of using Horny Goat Max?',
                                     answer: 'Horny Goat Max is a natural supplement and is considered safe for most people. However, some people may experience mild side effects such as headache or upset stomach. If these symptoms persist, it is best to consult with a healthcare professional.',
                                     isOpen: false,
                                 },

                                 {
                                     question: 'Can I take Horny Goat Max with other medications?',
                                     answer: 'It is always best to consult with a healthcare professional before taking any supplement, especially if you are taking other medications.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'What are the benefits of using Horny Goat Max?',
                                     answer: 'Horny Goat Max is a unique blend of natural supplements that is specifically formulated to enhance libido, improve sexual function, and boost overall energy levels. It also contains Horny Goat Weed, which is a powerful aphrodisiac that can help improve sexual performance.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'How long does it take for Horny Goat Max to work?',
                                     answer: 'The effects of Horny Goat Max may vary from person to person, but generally speaking, it may take a week of consistent use to notice a difference in libido and sexual function.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'How do I know if Horny Goat Max is right for me?',
                                     answer: 'If you are experiencing a decline in libido or sexual function, Horny Goat Max may be a good option to consider. It is always best to consult with a healthcare professional before starting any new supplement.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'Is Horny Goat Max available in stores or online?',
                                     answer: 'Horny Goat Max is currently only available online. ',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'How much does Horny Goat Max cost?',
                                     answer: 'The cost of Horny Goat Max varies depending on the package size and the retailer.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'Can Horny Goat Max help with erectile dysfunction?',
                                     answer: 'Horny Goat Max improves blood flow, which may help with erectile dysfunction. ',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'Can Horny Goat Max help with premature ejaculation?',
                                     answer: 'Horny Goat Max helps improve sexual function and overall stamina, which may help with premature ejaculation.',
                                     isOpen: false,
                                 },
                                 {
                                     question: 'What makes Horny Goat Max the best on the market?',
                                     answer: 'Horny Goat Max contains a unique blend of natural supplements, including the highest concentration of Horny Goat Weed on the market, which is a powerful aphrodisiac that can help improve sexual performance. Additionally, the formula is specifically designed to enhance libido and improve overall sexual function, making it the best on the market.',
                                     isOpen: false,
                                 }                                

                                 
                             ]
                         }">

                <div class="leading-loose text-lg mt-6">
                    <template x-for="(faq, index) in faqs" :key="faq.question">
                        <div>
                            <button class="w-full font-bold py-3 flex justify-between items-center mt-4" :class="index !== faqs.length - 1 && 'border-b border-gray-400'" @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))">
                                <!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
                                <div class="before:content-['Q'] before:text-primary-400 pl-6 before:absolute before:left-0 relative text-left" x-text="faq.question"></div>
                                <svg x-show="!faq.isOpen" class="fill-current text-gray-400 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                                <svg x-show="faq.isOpen" class="fill-current text-gray-400 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z" />
                                </svg>
                                <!-- <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
                                        </svg>
                                        <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z" />
                                        </svg> -->
                            </button>

                            <div class="text-gray-600 bg-white p-3 text-lg" x-text="faq.answer" x-show="faq.isOpen"></div>
                        </div>
                    </template>
                </div>
            </div>

        </div>
        <div x-show="tab === 'tab4'">
            <div class="p-2">
                <div class="flex">
                    <button type="button" id="custom-review" class="px-6 py-3 bg-dark text-white font-md text-md uppercase rounded-3xl shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out">Write
                        a Review</button>
                </div>
                <div class="flex flex-col" id="review-add-custom" style="display:none;">
                    <form action="{{route('product.review',$product->id)}}" method="POST">
                        {{ csrf_field() }}
                        <h2 class="font-black text-2xl mb-8 mt-4 uppercase">Write a Reviews</h2>
                        <div class="rating_sec">
                            <div class="review_form row mx-auto">
                                <div class="p-0 pr-2 mb-4">
                                    <label>Name</label>
                                    <input class="h-10 block w-full border border-gray-400 focus:outline-none px-3 leading-10" type="text" name="fname" placeholder="Enter your name" required="">
                                </div>
                                <label class="w-full block">Rating</label>
                                <fieldset class="rating min-w-0 inline-block">
                                    <input class="hidden" type="radio" id="star5" name="rating" value="5" checked="checked" /><label class="full label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f005'] before:inline-block before:text-base before:text-gray-400 before:m-1 before:font-['FontAwesome'] " for="star5" title="5 stars"></label>
                                    <input class="hidden" type="radio" id="star4half" name="rating" value="4.5" /><label class="half label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f089'] before:inline-block before:text-base before:text-gray-400 before:font-['FontAwesome'] before:absolute before:w-2 before:my-1 before:ml-1" for="star4half" title="4.5 stars"></label>
                                    <input class="hidden" type="radio" id="star4" name="rating" value="4" /><label class="full label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f005'] before:inline-block before:text-base before:text-gray-400 before:m-1 before:font-['FontAwesome']" for="star4" title="4 stars"></label>
                                    <input class="hidden" type="radio" id="star3half" name="rating" value="3.5" /><label class="half label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f089'] before:inline-block before:text-base before:text-gray-400 before:font-['FontAwesome'] before:absolute before:w-2 before:my-1 before:ml-1" for="star3half" title="3.5 stars"></label>
                                    <input class="hidden" type="radio" id="star3" name="rating" value="3" /><label class="full label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f005'] before:inline-block before:text-base before:text-gray-400 before:m-1 before:font-['FontAwesome']" for="star3" title="3 stars"></label>
                                    <input class="hidden" type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f089'] before:inline-block before:text-base before:text-gray-400 before:font-['FontAwesome'] before:absolute before:w-2 before:my-1 before:ml-1" for="star2half" title="2.5 stars"></label>
                                    <input class="hidden" type="radio" id="star2" name="rating" value="2" /><label class="full label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f005'] before:inline-block before:text-base before:text-gray-400 before:m-1 before:font-['FontAwesome']" for="star2" title="2 stars"></label>
                                    <input class="hidden" type="radio" id="star1half" name="rating" value="1.5" /><label class="half label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f089'] before:inline-block before:text-base before:text-gray-400 before:font-['FontAwesome'] before:absolute before:w-2 before:my-1 before:ml-1" for="star1half" title="1.5 stars"></label>
                                    <input class="hidden" type="radio" id="star1" name="rating" value="1" /><label class="full label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f005'] before:inline-block before:text-base before:text-gray-400 before:m-1 before:font-['FontAwesome']" for="star1" title="1 star"></label>
                                    <input class="hidden" type="radio" id="starhalf" name="rating" value="0.5" /><label class="half label-checked:before:text-primary-400 float-right cursor-pointer before:content-['\f089'] before:inline-block before:text-base before:text-gray-400 before:font-['FontAwesome'] before:absolute before:w-2 before:my-1 before:ml-1" for="starhalf" title="0.5 stars"></label>
                                </fieldset>
                                <br>
                                <div class="p-0 mb-4">
                                    <label>Review Title</label>
                                    <input class="h-10 block w-full border border-gray-400 focus:outline-none px-3 leading-10" type="text" name="title" placeholder="Give your review a title" required="">
                                </div>
                                <div class=" p-0 mb-4">
                                    <label>Review</label>
                                    <textarea class="h-20 block w-full border border-gray-400 focus:outline-none px-3 leading-10" type="text" name="comment" placeholder="Write your comments here" required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="px-6 py-2 bg-dark text-white font-md text-md uppercase rounded-3xl shadow-md hover:bg-primary-500 hover:shadow-lg focus:bg-primary-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-500 active:shadow-lg transition duration-150 ease-in-out">submit review</button>
                        </div>
                        <h2 class="font-black text-2xl mt-8 uppercase">Customer Reviews</h2>
                        <div class="flex text-primary-400">
                            @php for($i=1; $i<$avg_rat; $i++){ @endphp <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                @php } @endphp
                        </div>
                        <button type="submit" class="btn btn-dark submit-btn-review">submit review</button>
                    </form>
                    <p class="font-black text-md mt-2"><?php echo "&nbsp;" . $avg_rat . " out of 5"; ?></p>
                    <p class="font-medium text-sm mb-2"><?php echo $review_count; ?> global ratings</p>
                </div>
                <div class="flex flex-row items-center justify-start text-primary-400 text-lg mb-2 mt-4">
                    <div class="whitespace-nowrap">5 Star</div>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-2">
                        <div class="bg-primary-400 h-2.5 rounded-full" style="width: <?php echo @$avg_rating_5 ? ($avg_rating_5 / $review_count) * 100 : 0; ?>%"></div>
                    </div>
                    <div><?php echo @$avg_rating_5 ? round((($avg_rating_5 / $review_count) * 100), 0) : 0; ?>%</div>
                </div>
                <div class="flex flex-row items-center justify-start text-primary-400 text-lg mb-2">
                    <div class="whitespace-nowrap">4 Star</div>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-2">
                        <div class="bg-primary-400 h-2.5 rounded-full" style="width: <?php echo @$avg_rating_4 ? ($avg_rating_4 / $review_count) * 100 : 0; ?>%"></div>
                    </div>
                    <div><?php echo @$avg_rating_4 ? round((($avg_rating_4 / $review_count) * 100), 0) : 0; ?>%</div>
                </div>
                <div class="flex flex-row items-center justify-start text-primary-400 text-lg mb-2">
                    <div class="whitespace-nowrap">3 Star</div>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-2">
                        <div class="bg-primary-400 h-2.5 rounded-full" style="width: <?php echo @$avg_rating_3 ? ($avg_rating_3 / $review_count) * 100 : 0; ?>%"></div>
                    </div>
                    <div><?php echo @$avg_rating_3 ? round((($avg_rating_3 / $review_count) * 100), 0) : 0; ?>%</div>
                </div>
                <div class="flex flex-row items-center justify-start text-primary-400 text-lg mb-2">
                    <div class="whitespace-nowrap">2 Star</div>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-2">
                        <div class="bg-primary-400 h-2.5 rounded-full" style="width: <?php echo @$avg_rating_2 ? ($avg_rating_2 / $review_count) * 100 : 0; ?>%"></div>
                    </div>
                    <div><?php echo @$avg_rating_2 ? round((($avg_rating_2 / $review_count) * 100), 0) : 0; ?>%</div>
                </div>
                <div class="flex flex-row items-center justify-start text-primary-400 text-lg">
                    <div class="whitespace-nowrap">1 Star</div>
                    <div class="w-80 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-2">
                        <div class="bg-primary-400 h-2.5 rounded-full" style="width: <?php echo @$avg_rating_1 ? ($avg_rating_1 / $review_count) * 100 : 0; ?>%"></div>
                    </div>
                    <div><?php echo @$avg_rating_1 ? round((($avg_rating_1 / $review_count) * 100), 0) : 0; ?>%</div>
                </div>
                <div class="review">
                    @forelse($reviews as $review)
                    <div class="comments_wrap_start more_box <?php echo $review->rating; ?>-star" style="display:none;">
                        <hr class="my-8" />
                        <div>
                            <div class="flex text-yellow-500 ">
                                @php for($i=0; $i<$review->rating; $i++){ @endphp
                                    <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    @php } @endphp
                                    @php for($j=$review->rating; $j<5; $j++){ @endphp {{-- without tailwind --}} <i class="far fa-star"></i>
                                        {{-- without tailwind --}}
                                        @php } @endphp

                            </div>
                            <p class="text-base text-gray-500 my-4">{{ $review->fname }} | {{ date_format($review->created_at,"F d, Y") }}</p>
                            <h4 class="text-lg text-gray-900 font-bold mb-2 capitalize">{{ $review->title }}</h4>
                            <p>{!! strip_tags($review->description) !!}</p>
                        </div>
                    </div>
                    @empty
                    {{-- without tailwind --}}
                    <div class="alert alert-error">No reviews Found</div>
                    @endforelse
                    <div class="cart_btn">
                        <a id="loadMore" href="javascript:void(0);" class="btn btn-dark">Load More</a>
                    </div>
                    {{-- without tailwind --}}
                </div>

            </div>
        </div>
    </div>


</div>
