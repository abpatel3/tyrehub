<?php
$page_title = "Blogs & Tyre Guides | TyreHub - Gujarat's #1 Online Tyre Store";
$page_description = "Explore TyreHub's latest blogs, car tyre maintenance tips, buying guides, performance insights, and expert advice to keep your vehicle safe on the road.";
$current_page = "blog";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- HERO BANNER & BREADCRUMB (LIKE FAQ PAGE)   -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-newspaper text-brand-blue"></i> Blog &amp; Knowledge Center
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Latest <span class="text-brand-yellow drop-shadow-sm">Blogs &amp; Tyre Guides</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-xl mx-auto font-normal leading-relaxed">
      Stay informed with expert advice on tyre maintenance, sizing guides, safety checks, and performance optimizations.
    </p>

    <!-- Interactive Search Bar -->
    <div class="mt-8 max-w-xl mx-auto relative">
      <div class="relative flex items-center">
        <i class="fa-solid fa-magnifying-glass absolute left-4 text-slate-400 text-sm"></i>
        <input type="text" id="blog-search-input" placeholder="Search blog topics (e.g., performance, tyre size, maintenance)..." 
          class="w-full bg-white border border-slate-300 rounded-2xl pl-11 pr-10 py-3.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition shadow-sm">
      </div>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 3-COLUMN BLOG GRID SECTION                -->
<!-- ========================================== -->
<section class="bg-white py-14 sm:py-16">
  <div class="container mx-auto px-3">

    <!-- 3-COLUMN GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

      <!-- Blog Card 1 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/06/overall-performance.webp" 
              alt="How Tyre Selection Impacts Vehicle Performance" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>
          
          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>June 15, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 4 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">How Tyre Selection Impacts Your Vehicle’s Overall Performance &amp; Fuel Efficiency</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Discover how choosing the correct rubber compound, tread pattern, and speed rating directly affects cornering stability, braking distance, and fuel economy.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Article</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 2 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/06/right-tyre-size.webp" 
              alt="How to Read & Choose the Right Tyre Size" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>June 12, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 5 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">How to Read &amp; Choose the Right Tyre Size for Your Car (Step-by-Step Guide)</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Confused by markings like 205/55 R16 91V? Learn what width, aspect ratio, construction, and load ratings mean for your vehicle.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Guide</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 3 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/06/regular-tyre-inspection.webp" 
              alt="Why Regular Tyre Inspections Prevent Blowouts" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>June 08, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 3 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">Why Regular Tyre Inspections Prevent Blowouts &amp; Save Maintenance Costs</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              A quick 5-minute monthly inspection of tread wear indicators and sidewall cracks can prevent sudden highway failures.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Article</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 4 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/06/tyre-guide.webp" 
              alt="Complete 2026 Car Tyre Buying Guide" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>June 02, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 6 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">The Complete 2026 Car Tyre Buying Guide: All-Season vs Performance</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Compare all-season, summer performance, and rugged terrain tyres to find the perfect fit for your driving style.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Guide</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 5 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/03/increase-life-car-tyres.webp" 
              alt="Increase Life of Car Tyres" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>March 24, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 4 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">7 Proven Ways to Increase the Lifespan of Your Car Tyres by up to 20,000 km</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Proven rotation schedules, wheel alignment habits, and proper inflation tips to maximize your tyre mileage.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Tips</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 6 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/03/tyre-care-tips.webp" 
              alt="Essential Tyre Care Tips" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>March 18, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 3 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">Essential Tyre Care &amp; Air Pressure Tips Every Driver Should Know</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Why under-inflation ruins fuel economy and how to check your PSI correctly before long highway trips.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Tips</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- Blog Card 7 -->
      <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div>
          <!-- Image Box with Aspect Ratio: 362 / 271 -->
          <a href="blog-detail.php" class="block w-full bg-slate-100 relative overflow-hidden" style="aspect-ratio: 362 / 271;">
            <img src="https://www.tyrehub.com/wp-content/uploads/2026/03/tyrehub.webp" 
              alt="Welcome to TyreHub" 
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </a>

          <div class="p-6 space-y-3">
            <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
              <span>March 05, 2026</span>
              <span>•</span>
              <span><i class="fa-regular fa-clock mr-1"></i> 3 min read</span>
            </div>
            <h3 class="text-lg font-bold font-outfit text-slate-900 group-hover:text-brand-blue transition-colors leading-snug">
              <a href="blog-detail.php">Welcome to TyreHub: Online Tyre Shopping &amp; Doorstep Installation</a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal">
              Discover how TyreHub combines low-cost branded tyres with doorstep installation across 50+ partner locations.
            </p>
            <div class="pt-2">
              <a href="blog-detail.php" class="text-xs font-bold text-brand-blue hover:text-brand-blueDark transition inline-flex items-center gap-1.5">
                <span>Read Story</span>
                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        </div>
      </article>

    </div>

    <!-- ========================================== -->
    <!-- BLOG PAGINATION COMPONENT                  -->
    <!-- ========================================== -->
    <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200/80 mt-10" data-aos="fade-up" data-aos-duration="600">
      <p class="text-xs font-semibold text-slate-500">
        Showing <span class="font-bold text-slate-800">1 - 7</span> of <span class="font-bold text-slate-800">24</span> Articles
      </p>

      <nav aria-label="Blog Page Navigation" class="flex items-center gap-1.5">
        <!-- Previous Page Button (Disabled on Page 1) -->
        <span class="px-3.5 py-2 rounded-xl bg-slate-100 text-slate-400 text-xs font-bold cursor-not-allowed opacity-60 flex items-center gap-1.5">
          <i class="fa-solid fa-chevron-left text-[10px]"></i>
          <span>Previous</span>
        </span>

        <!-- Page Numbers -->
        <a href="#" class="w-9 h-9 rounded-xl bg-brand-blue text-white text-xs font-bold flex items-center justify-center shadow-xs transition">1</a>
        <a href="#" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold flex items-center justify-center transition">2</a>
        <a href="#" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold flex items-center justify-center transition">3</a>
        <span class="w-8 h-9 text-slate-400 text-xs font-bold flex items-center justify-center">...</span>
        <a href="#" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold flex items-center justify-center transition">5</a>

        <!-- Next Page Button -->
        <a href="#" class="px-3.5 py-2 rounded-xl bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 text-xs font-bold transition flex items-center gap-1.5">
          <span>Next</span>
          <i class="fa-solid fa-chevron-right text-[10px]"></i>
        </a>
      </nav>
    </div>

    <!-- Newsletter Box -->
    <div class="bg-brand-blueDark text-white rounded-3xl p-8 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-slate-800 mt-12" data-aos="fade-up" data-aos-duration="600">
      <div class="space-y-2 text-center md:text-left">
        <span class="inline-block px-3 py-1 rounded-full bg-brand-yellow/20 text-brand-yellow font-extrabold text-xs uppercase tracking-wider">
          Stay Updated
        </span>
        <h3 class="text-2xl font-bold font-outfit text-white">Get Expert Tyre Tips Delivered to Your Inbox</h3>
        <p class="text-slate-300 text-xs sm:text-sm max-w-lg font-normal">
          Subscribe to TyreHub’s newsletter for monthly maintenance advice, discount alerts, and tyre longevity guides.
        </p>
      </div>

      <form action="#" method="POST" class="w-full md:w-auto flex flex-col sm:flex-row items-center gap-3 shrink-0" onsubmit="event.preventDefault(); alert('Thank you for subscribing to TyreHub Blog Newsletter!');">
        <input type="email" required placeholder="Enter your email address..." class="w-full sm:w-72 px-4 py-3 rounded-xl text-xs sm:text-sm text-slate-900 bg-white outline-none">
        <button type="submit" class="btn-primary w-full sm:w-auto px-6 py-3 text-xs font-bold whitespace-nowrap">
          Subscribe Now
        </button>
      </form>
    </div>

  </div>
</section>

<?php
include 'includes/footer.php';
?>
