<section id="faq">
  <div class="py-4 mt-6 hidden sm:block">
    <div class="container">
      <div class="flex justify-center">
        <div class="w-full mb-8">
          <h2 class="font-black text-4xl text-dark text-center">Frequently Asked Questions for Horny Goat Weed & Horny Goat Max</h2>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-8 mt-6">
        @forelse ($faqs as $k => $item)
        <div class="@php
         echo  ($k % 2 == 0)?
           'w-full mb-6' : 'w-full mb-6'
           @endphp
           ">
          <h3 class="font-black text-lg">{{ $item->title }}</h3>
          <p>{!! strip_tags($item->description) !!} </p>
        </div>
        @empty
        <p>NO details found !</p>
        @endforelse
      </div>
    </div>
  </div>

  <div class="block sm:hidden my-8">
    <div class="flex justify-center">
      <div class="w-full sm:w-2/4">
        <h2 class="font-black text-2xl sm:text-4xl text-center">Frequently Asked Questions</h2>
      </div>
    </div>
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
                                 },
                                 
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

            </button>

            <div class="text-gray-600 bg-white p-3 text-lg" x-text="faq.answer" x-show="faq.isOpen"></div>
          </div>
        </template>
      </div>
    </div>
  </div>

</section>
