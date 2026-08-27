<?php
$page_title = "Frequently Asked Questions (FAQ) | TyreHub - Gujarat's #1 Online Tyre Store";
$page_description = "Find answers to commonly asked questions about tyre rotation, tread depth, fitment services, wheel alignment, order tracking, and returns at TyreHub.";
$current_page = "faq";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- SEO FAQPAGE JSON-LD SCHEMA                -->
<!-- ========================================== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Should I rotate my tyres?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Regular and proper tyre rotation gives your tyres more uniform wear. All-season tyres should be rotated in a “modified X’ pattern, where the tyres being moved to the drive axle are crossed to the opposite of the vehicle. The remaining two tyres are moved from the drive axle to the free-rolling axle, remaining on the same side of the vehicle."
    }
  },{
    "@type": "Question",
    "name": "How long should my original equipment tyres last?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Due to the variety of styles, construction features, tread compounds, vehicle applications, geographical conditions, and driving habits, it’s difficult for Goodyear to provide specific mileage expectancy for any tyres supplied as original equipment."
    }
  },{
    "@type": "Question",
    "name": "Should I “mix” tyre types on my new car?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Tyres of different size designations, constructions, and stages of wear may affect vehicle handling and stability. For best all-around performance, it is recommended that all tyres be of the same size, construction (radial or non-radial) and speed rating. If tyres of different speed ratings are mounted on a vehicle, then the same size, type and speed ratings need to be placed on the same axle. The tyres with the lower speed rating should be the determining factor for permissible tyre-related vehicle speed. Never mix radial and bias-ply tyres on the same axle."
    }
  },{
    "@type": "Question",
    "name": "What parts should be replaced and at what intervals should these services be performed?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Check your owner’s manual. It will give you all of the information you need regarding specific parts and service intervals. Make sure to read it thoroughly and note any exceptions or severe service notations. Warranties are there to protect the consumer, but you must follow the requirements."
    }
  },{
    "@type": "Question",
    "name": "What is the legal minimum tread depth for vehicle tyres?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "By law, car tyres must have a minimum tread depth of 1.6mm throughout the central 75% of the tyre (the tread pattern must be visible in the remaining 25%). For motorcycles, the minimum is 1.0mm throughout the central 75%"
    }
  },{
    "@type": "Question",
    "name": "What are the dangers of driving on worn tyres?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "It’s not just the legal issues (mentioned above) that can be a problem when driving on worn out tyres. Insufficient tread depth also affects braking distance – a particular danger on icier roads – while a tyre not inflated to the correct pressure can impact on fuel efficiency and handling ability."
    }
  },{
    "@type": "Question",
    "name": "What vehicles are catered for by universal tyres?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We stock a wide range of tyres for all cars, 4x4s, motorcycles and vans, including branded and budget tyres to suit all needs. We can provide winter tyres for increased safety and handling in the colder months."
    }
  },{
    "@type": "Question",
    "name": "This is the first time I am fitting a tyre. How will I know the size that will be the perfect replacement for my tyre?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Usually, this is not a problem if you know the tyre size. However, since you do not know the right size of your existing vehicle, you can refer the vehicle’s manual or tyre information online. We, at TyreHub, have a wide range of OE tyres that are great for replacement, and we only have top brands of tyres on offer. Check the tyre’s additional information chart so that you can learn about tyres’ size and its radius. You will need to make sure that your brand or model of the vehicle is there in that information before picking the one. You can get to see the optional trims and package on display too."
    }
  },{
    "@type": "Question",
    "name": "Which brands of tyres can I get from tyrehub?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can get popular brands of tyres like CEAT, MRF, JK Tyre, Goodyear, Bridgestone, Apollo, Falken, and many more."
    }
  },{
    "@type": "Question",
    "name": "Why can’t I see the brand I want?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "There are several reasons for you not to spot your brand in TyreHub.com. Here they are:\n• The manufacturer may not be making the size of the tyres you want\n• You may have entered an incorrect size of the said brand of tires\n• The brand may have stopped production of the size of tyres\nIf you still cannot find the size or the brand, please call us at 1800-123-5510 to speak to our customer care representative. We, from TyreHub, will be happy to assist you in getting the right-sized tyre."
    }
  },{
    "@type": "Question",
    "name": "Can I change from the regular OR Fitted brand to some other brand?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You are free to pick any reputed brand of tyres for your vehicle as long as it meets a few criteria. These criteria include tyre size and load index. You may seek the assistance of our specialist customer care in this regard and speak to them or ask them to recommend the best one for your vehicle."
    }
  },{
    "@type": "Question",
    "name": "Does TyreHub offer services of installation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer the installation services in Ahmedabad and Gandhinagar. You can choose our nearest service partner from 50+ from the list. If you choose the installation services from us, then we will deliver the tyre to our service partner directly. He will call you on the receipt of the tyre and call you to get it fitted at your convenience."
    }
  },{
    "@type": "Question",
    "name": "How long does the tyre installation take?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Ideally, tyre installation takes around 30-45 minutes. However, our service partner can give you the precise time depending on your vehicle."
    }
  },{
    "@type": "Question",
    "name": "How do I know that the wheel alignment is not proper?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You will know that the wheel is not fitted correctly when:\n• The tyres skid or screech while driving on bends\n• Not give the car or two-wheeler the stability on the road\n• All the tyres wear out unevenly"
    }
  },{
    "@type": "Question",
    "name": "Is it safe to give my personal details while creating an account here?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Your personal details are absolutely safe at TyreHub.com. For more details, please read our Privacy Policy. The creation of an account and sharing your personal details with us is important in order to get products and services from us."
    }
  },{
    "@type": "Question",
    "name": "How will it benefit me to create an account here?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For viewing the brands and pricing, you will not need to create an account. However, for purchasing the tyres, you will need to create the account. By creating the account, it will be easier for you to check out and proceed to bill sooner since your details are already there in the account."
    }
  },{
    "@type": "Question",
    "name": "How do I pay for tyre installation service?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You need to select the option of installation service while placing the order and choose your nearest service partner from the list. The charges of installation service will be added in your invoice, and you need to pay while placing the order. You don’t need to pay to our service partner while installation of the tyre."
    }
  },{
    "@type": "Question",
    "name": "What do I do for fitment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our service partner will call you once they received your tyre. You can schedule the fitment service according to your availability, visit service station, and get the tyre installed."
    }
  },{
    "@type": "Question",
    "name": "Will I be charged extra for balancing or aligning my wheel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Usually, the fitment center charges these for aligning the wheel. Please contact them for the details."
    }
  },{
    "@type": "Question",
    "name": "What are the modes of payment at TyreHub.com?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You may use internet banking, debit and credit cards like Visa, Master Card, and Maestro cards for payment."
    }
  },{
    "@type": "Question",
    "name": "Can I track my order? If yes, then how?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely, you can track your order at TyreHub.com. Just click on “Track my order” link provided on the top-right corner of the page. It will take you to a new page, where you need to enter the phone number and confirm the OTP that is sent to you. Then you enter your name and click on the search button. The results will show with the current status of the order."
    }
  },{
    "@type": "Question",
    "name": "Where can I check the Tyre pressure related or load related information?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Ideally, your glove box or the small placard on the door will have the tyre pressure related information on the display. If you are finding any difficulty knowing it, feel free to call us at TyreHub.com."
    }
  },{
    "@type": "Question",
    "name": "Can I cancel the order?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, you can cancel the order at any time before you receive the order."
    }
  },{
    "@type": "Question",
    "name": "How do I cancel my order at TyreHub?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can cancel your order at any point of time by calling us at 1800-123-5510 or drop in an email with the order number giving us reason for canceling the order."
    }
  },{
    "@type": "Question",
    "name": "Is there a return policy for tyres purchased at TyreHub?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "• Yes, there is a 7-day return policy for tyres purchased at TyreHub along with free return shipping.\n• However, returns are subject to the assessment of our tyre experts. We only accept unfitted and unused tyre. They should not be damaged and must be entitled to the return.\n• If you have chosen our service partners for the tyre installation, then only it will be eligible for return and exchange on the day once they are picked up. In other cases, our expert will review your order before considering as an exchange. This may take 5-7 business days to complete the return process.\n• If you need any help on return, then you can drop an email to us at sales@tyrehub.com or call our experts at 1-800-233-5551."
    }
  }]
}
</script>

<!-- ========================================== -->
<!-- FAQ HERO BANNER & BREADCRUMB               -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-circle-question text-brand-blue"></i> Help &amp; Support Center
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Frequently Asked <span class="text-brand-yellow drop-shadow-sm">Questions</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-xl mx-auto font-normal leading-relaxed">
      Have a question? Search below or browse our 25 most frequently asked questions.
    </p>

    <!-- Interactive Search Bar -->
    <div class="mt-8 max-w-xl mx-auto relative">
      <div class="relative flex items-center">
        <i class="fa-solid fa-magnifying-glass absolute left-4 text-slate-400 text-sm"></i>
        <input type="text" id="faq-search-input" placeholder="Type to search questions (e.g. rotation, alignment, warranty, tracking)..." 
          class="w-full bg-white border border-slate-300 rounded-2xl pl-11 pr-10 py-3.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition shadow-sm">
        <button type="button" id="faq-search-clear" class="hidden absolute right-3.5 text-slate-400 hover:text-slate-600 text-sm p-1">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- FAQ ACCORDION SECTION                      -->
<!-- ========================================== -->
<section class="bg-white py-12 sm:py-16">
  <div class="container mx-auto px-3 max-w-4xl" data-aos="fade-up" data-aos-duration="600">

    <!-- No Search Results Box -->
    <div id="faq-no-results" class="hidden text-center py-12 bg-slate-50 rounded-3xl border border-slate-200">
      <div class="w-12 h-12 rounded-full bg-slate-200/80 text-slate-500 flex items-center justify-center mx-auto mb-3 text-lg">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <h3 class="text-base font-bold text-slate-800 font-outfit">No Matching Questions Found</h3>
      <p class="text-xs text-slate-500 mt-1 max-w-md mx-auto">Try searching for keywords like "alignment", "rotation", "fitment", "warranty", or "payment".</p>
    </div>

    <!-- FAQ Accordion List (25 Questions) -->
    <div class="space-y-3.5" id="faq-accordion-list">

      <!-- Q1 (Open by Default) -->
      <div class="faq-item group bg-white rounded-[26px] border border-brand-blue/50 ring-2 ring-brand-blue/10 shadow-sm hover:shadow-md transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-brand-blue text-white font-bold text-xs flex items-center justify-center shrink-0 transition-colors">1</span>
            <span class="faq-question-text text-brand-blue font-bold">Should I rotate my tyres?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs rotate-180 transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-[500px] opacity-100 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Regular and proper tyre rotation gives your tyres more uniform wear. All-season tyres should be rotated in a “modified X” pattern, where the tyres being moved to the drive axle are crossed to the opposite of the vehicle. The remaining two tyres are moved from the drive axle to the free-rolling axle, remaining on the same side of the vehicle.
          </p>
        </div>
      </div>

      <!-- Q2 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">2</span>
            <span class="faq-question-text">How long should my original equipment tyres last?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Due to the variety of styles, construction features, tread compounds, vehicle applications, geographical conditions, and driving habits, it’s difficult for Goodyear to provide specific mileage expectancy for any tyres supplied as original equipment.
          </p>
        </div>
      </div>

      <!-- Q3 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">3</span>
            <span class="faq-question-text">Should I “mix” tyre types on my new car?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Tyres of different size designations, constructions, and stages of wear may affect vehicle handling and stability. For best all-around performance, it is recommended that all tyres be of the same size, construction (radial or non-radial) and speed rating. If tyres of different speed ratings are mounted on a vehicle, then the same size, type and speed ratings need to be placed on the same axle. The tyres with the lower speed rating should be the determining factor for permissible tyre-related vehicle speed. Never mix radial and bias-ply tyres on the same axle.
          </p>
        </div>
      </div>

      <!-- Q4 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">4</span>
            <span class="faq-question-text">What parts should be replaced and at what intervals should these services be performed?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Check your owner’s manual. It will give you all of the information you need regarding specific parts and service intervals. Make sure to read it thoroughly and note any exceptions or severe service notations. Warranties are there to protect the consumer, but you must follow the requirements.
          </p>
        </div>
      </div>

      <!-- Q5 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">5</span>
            <span class="faq-question-text">What is the legal minimum tread depth for vehicle tyres?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            By law, car tyres must have a minimum tread depth of 1.6mm throughout the central 75% of the tyre (the tread pattern must be visible in the remaining 25%). For motorcycles, the minimum is 1.0mm throughout the central 75%.
          </p>
        </div>
      </div>

      <!-- Q6 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">6</span>
            <span class="faq-question-text">What are the dangers of driving on worn tyres?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            It’s not just the legal issues that can be a problem when driving on worn out tyres. Insufficient tread depth also affects braking distance – a particular danger on icier or wet roads – while a tyre not inflated to the correct pressure can impact on fuel efficiency and handling ability.
          </p>
        </div>
      </div>

      <!-- Q7 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">7</span>
            <span class="faq-question-text">What vehicles are catered for by universal tyres?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            We stock a wide range of tyres for all cars, 4x4s, motorcycles and vans, including branded and budget tyres to suit all needs. We can provide winter tyres for increased safety and handling in the colder months.
          </p>
        </div>
      </div>

      <!-- Q8 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">8</span>
            <span class="faq-question-text">This is the first time I am fitting a tyre. How will I know the size that will be the perfect replacement for my tyre?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Usually, this is not a problem if you know the tyre size. However, since you do not know the right size of your existing vehicle, you can refer the vehicle’s manual or tyre information online. We, at TyreHub, have a wide range of OE tyres that are great for replacement, and we only have top brands of tyres on offer. Check the tyre’s additional information chart so that you can learn about tyres’ size and its radius. You will need to make sure that your brand or model of the vehicle is there in that information before picking the one. You can get to see the optional trims and package on display too.
          </p>
        </div>
      </div>

      <!-- Q9 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">9</span>
            <span class="faq-question-text">Which brands of tyres can I get from TyreHub?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            You can get popular brands of tyres like CEAT, MRF, JK Tyre, Goodyear, Bridgestone, Apollo, Falken, and many more.
          </p>
        </div>
      </div>

      <!-- Q10 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">10</span>
            <span class="faq-question-text">Why can’t I see the brand I want?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <div class="pt-4 pb-6 space-y-2">
            <p>There are several reasons for you not to spot your brand in TyreHub.com:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>The manufacturer may not be making the size of the tyres you want</li>
              <li>You may have entered an incorrect size of the said brand of tires</li>
              <li>The brand may have stopped production of the size of tyres</li>
            </ul>
            <p>If you still cannot find the size or the brand, please call us at <a href="tel:18001235510" class="text-brand-blue font-bold hover:underline">1800-123-5510</a> to speak to our customer care representative. We will be happy to assist you in getting the right-sized tyre.</p>
          </div>
        </div>
      </div>

      <!-- Q11 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">11</span>
            <span class="faq-question-text">Can I change from the regular OR Fitted brand to some other brand?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            You are free to pick any reputed brand of tyres for your vehicle as long as it meets a few criteria. These criteria include tyre size and load index. You may seek the assistance of our specialist customer care in this regard and speak to them or ask them to recommend the best one for your vehicle.
          </p>
        </div>
      </div>

      <!-- Q12 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">12</span>
            <span class="faq-question-text">Does TyreHub offer services of installation?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Yes, we offer installation services in Ahmedabad and Gandhinagar. You can choose our nearest service partner from 50+ partners on the list. If you choose installation services from us, we will deliver the tyre to our service partner directly. They will call you upon receipt of the tyre to schedule fitting at your convenience.
          </p>
        </div>
      </div>

      <!-- Q13 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">13</span>
            <span class="faq-question-text">How long does the tyre installation take?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Ideally, tyre installation takes around 30-45 minutes. However, our service partner can give you the precise time depending on your vehicle.
          </p>
        </div>
      </div>

      <!-- Q14 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">14</span>
            <span class="faq-question-text">How do I know that the wheel alignment is not proper?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <div class="pt-4 pb-6 space-y-2">
            <p>You will know that the wheel is not fitted correctly when:</p>
            <ul class="list-disc pl-5 space-y-1">
              <li>The tyres skid or screech while driving on bends</li>
              <li>The vehicle lacks stability on the road</li>
              <li>All the tyres wear out unevenly</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Q15 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">15</span>
            <span class="faq-question-text">Is it safe to give my personal details while creating an account here?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Your personal details are absolutely safe at TyreHub.com. For more details, please read our Privacy Policy. The creation of an account and sharing your personal details with us is important in order to get products and services from us.
          </p>
        </div>
      </div>

      <!-- Q16 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">16</span>
            <span class="faq-question-text">How will it benefit me to create an account here?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            For viewing the brands and pricing, you will not need to create an account. However, for purchasing the tyres, you will need to create the account. By creating the account, it will be easier for you to check out and proceed to billing sooner since your details are already saved in the account.
          </p>
        </div>
      </div>

      <!-- Q17 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">17</span>
            <span class="faq-question-text">How do I pay for tyre installation service?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            You need to select the option of installation service while placing the order and choose your nearest service partner from the list. The charges of installation service will be added in your invoice, and you need to pay while placing the order. You don’t need to pay to our service partner while installation of the tyre.
          </p>
        </div>
      </div>

      <!-- Q18 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">18</span>
            <span class="faq-question-text">What do I do for fitment?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Our service partner will call you once they receive your tyre. You can schedule the fitment service according to your availability, visit the service station, and get the tyre installed.
          </p>
        </div>
      </div>

      <!-- Q19 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">19</span>
            <span class="faq-question-text">Will I be charged extra for balancing or aligning my wheel?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Usually, the fitment center charges these for aligning the wheel. Please contact them for details.
          </p>
        </div>
      </div>

      <!-- Q20 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">20</span>
            <span class="faq-question-text">What are the modes of payment at TyreHub.com?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            You may use internet banking, debit and credit cards like Visa, Master Card, and Maestro cards for payment.
          </p>
        </div>
      </div>

      <!-- Q21 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">21</span>
            <span class="faq-question-text">Can I track my order? If yes, then how?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Absolutely, you can track your order at TyreHub.com. Just click on “Track my order” link provided on the top-right corner of the page. It will take you to a new page, where you need to enter the phone number and confirm the OTP that is sent to you. Then you enter your name and click on the search button. The results will show the current status of the order.
          </p>
        </div>
      </div>

      <!-- Q22 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">22</span>
            <span class="faq-question-text">Where can I check the Tyre pressure related or load related information?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Ideally, your glove box or the small placard on the driver’s door sill will have the tyre pressure and load rating information on display. If you are finding any difficulty knowing it, feel free to call us at TyreHub.com.
          </p>
        </div>
      </div>

      <!-- Q23 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">23</span>
            <span class="faq-question-text">Can I cancel the order?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            Yes, you can cancel the order at any time before you receive the order.
          </p>
        </div>
      </div>

      <!-- Q24 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">24</span>
            <span class="faq-question-text">How do I cancel my order at TyreHub?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <p class="pt-4 pb-6">
            You can cancel your order at any point of time by calling us at <a href="tel:18001235510" class="text-brand-blue font-bold hover:underline">1800-123-5510</a> or drop an email with the order number giving us the reason for canceling the order.
          </p>
        </div>
      </div>

      <!-- Q25 -->
      <div class="faq-item group bg-white rounded-[26px] border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all duration-200 overflow-hidden">
        <button type="button" class="faq-trigger w-full text-left px-6 py-3.5 flex items-center justify-between gap-4 font-outfit font-semibold text-sm sm:text-base text-slate-800 hover:text-brand-blue transition-colors focus:outline-none">
          <span class="flex items-center gap-3.5">
            <span class="faq-badge w-8 h-8 rounded-full bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors">25</span>
            <span class="faq-question-text">Is there a return policy for tyres purchased at TyreHub?</span>
          </span>
          <i class="fa-solid fa-chevron-down faq-icon text-slate-400 text-xs transition-transform duration-300 shrink-0"></i>
        </button>
        <div class="faq-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out px-6 border-t border-transparent text-slate-600 text-xs sm:text-sm leading-relaxed border-slate-100 bg-slate-50/50">
          <div class="pt-4 pb-6 space-y-2">
            <ul class="list-disc pl-5 space-y-2">
              <li>Yes, there is a 7-day return policy for tyres purchased at TyreHub along with free return shipping.</li>
              <li>However, returns are subject to the assessment of our tyre experts. We only accept unfitted and unused tyres. They should not be damaged and must be entitled to the return.</li>
              <li>If you have chosen our service partners for the tyre installation, then only it will be eligible for return and exchange on the day once they are picked up. In other cases, our expert will review your order before considering as an exchange. This may take 5-7 business days to complete the return process.</li>
              <li>If you need any help on returns, drop an email to us at <a href="mailto:sales@tyrehub.com" class="text-brand-blue font-bold hover:underline">sales@tyrehub.com</a> or call our experts at <a href="tel:18001235510" class="text-brand-blue font-bold hover:underline">1800-123-5510</a>.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- CONTACT SUPPORT CTA SECTION                -->
<!-- ========================================== -->
<section class="py-14 bg-slate-50 border-t border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl">
    <div class="bg-gradient-to-r from-brand-blue to-brand-blueDark rounded-3xl p-8 sm:p-10 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="space-y-2 text-center md:text-left">
        <h3 class="text-xl sm:text-2xl font-bold font-outfit">Still Have Questions?</h3>
        <p class="text-slate-200 text-xs sm:text-sm">Can't find the answer you're looking for? Our customer support team is just a phone call away!</p>
      </div>

      <div class="flex flex-wrap items-center justify-center gap-3 shrink-0">
        <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="btn-primary text-xs sm:text-sm px-6 py-3 font-bold">
          <i class="fa-solid fa-phone mr-1.5"></i> Call <?php echo TOLL_FREE_NUMBER; ?>
        </a>
        <button type="button" onclick="openBookingModal('General FAQ Inquiry')" class="bg-white/15 backdrop-blur-md text-white border border-white/30 hover:bg-white hover:text-slate-900 px-6 py-3 rounded-xl text-xs sm:text-sm font-semibold transition">
          <i class="fa-regular fa-comment-dots mr-1.5"></i> Ask Support
        </button>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Accordion & Search Filter JS Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Accordion Toggle
    const triggers = document.querySelectorAll('.faq-trigger');
    triggers.forEach(function (trigger) {
      trigger.addEventListener('click', function () {
        const item = this.closest('.faq-item');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');
        const badge = item.querySelector('.faq-badge');
        const questionText = item.querySelector('.faq-question-text');

        const wasClosed = content.classList.contains('max-h-0');

        // Close all accordions smoothly
        document.querySelectorAll('.faq-item').forEach(i => {
          const c = i.querySelector('.faq-content');
          const ic = i.querySelector('.faq-icon');
          const b = i.querySelector('.faq-badge');
          const q = i.querySelector('.faq-question-text');

          c.classList.remove('max-h-[500px]', 'opacity-100', 'border-slate-100');
          c.classList.add('max-h-0', 'opacity-0', 'border-transparent');
          ic.classList.remove('rotate-180');
          i.classList.remove('border-brand-blue/50', 'shadow-md');
          i.classList.add('border-slate-200');
          b.classList.remove('bg-brand-blue', 'text-white');
          b.classList.add('bg-slate-100', 'text-slate-600');
          q.classList.remove('text-brand-blue', 'font-bold');
        });

        // Open clicked accordion if it was closed
        if (wasClosed) {
          content.classList.remove('max-h-0', 'opacity-0', 'border-transparent');
          content.classList.add('max-h-[500px]', 'opacity-100', 'border-slate-100');
          icon.classList.add('rotate-180');
          item.classList.remove('border-slate-200');
          item.classList.add('border-brand-blue/50', 'shadow-md');
          badge.classList.remove('bg-slate-100', 'text-slate-600');
          badge.classList.add('bg-brand-blue', 'text-white');
          questionText.classList.add('text-brand-blue', 'font-bold');
        }
      });
    });

    // Real-Time Search Input Filter
    const searchInput = document.getElementById('faq-search-input');
    const searchClear = document.getElementById('faq-search-clear');
    const faqItems = document.querySelectorAll('.faq-item');
    const noResults = document.getElementById('faq-no-results');

    if (searchInput) {
      searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        let visibleCount = 0;

        if (query.length > 0) {
          searchClear.classList.remove('hidden');
        } else {
          searchClear.classList.add('hidden');
        }

        faqItems.forEach(function (item) {
          const text = item.textContent.toLowerCase();
          if (text.includes(query)) {
            item.style.display = 'block';
            visibleCount++;
          } else {
            item.style.display = 'none';
          }
        });

        if (visibleCount === 0 && query.length > 0) {
          noResults.classList.remove('hidden');
        } else {
          noResults.classList.add('hidden');
        }
      });

      searchClear.addEventListener('click', function () {
        searchInput.value = '';
        searchClear.classList.add('hidden');
        noResults.classList.add('hidden');
        faqItems.forEach(item => item.style.display = 'block');
        searchInput.focus();
      });
    }
  });
</script>

<?php
include 'includes/footer.php';
?>




