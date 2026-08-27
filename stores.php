<?php
$page_title = "Store Locations | TyreHub - Gujarat's #1 Online Tyre & Battery Store";
$page_description = "Find TyreHub stores in Motera, Viratnagar, Ghatlodiya, Nikol, Chandkheda, New Ranip, Satellite, Thakkarnagar, Kudasan, and Gota. Visit for official tyre fitment, 3D wheel alignment, wheel balancing & battery services.";
$current_page = "stores";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- 1. STORES HERO BANNER SECTION              -->
<!-- ========================================== -->
<section class="bg-[#f8fafc] py-12 sm:py-16 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center">
    
    <!-- Top Pill Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3" data-aos="fade-up" data-aos-duration="600">
      <i class="fa-solid fa-location-dot text-brand-blue"></i> Authorized Service Network
    </div>
    
    <!-- Main Title -->
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blue mb-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
      Our TyreHub <span class="text-brand-yellow drop-shadow-sm">Stores</span>
    </h1>

    <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mb-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150"></div>
    
    <!-- Subtitle Description -->
    <p class="text-slate-600 text-xs sm:text-sm max-w-2xl mx-auto font-medium leading-relaxed mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
      Visit your nearest TyreHub store across Ahmedabad &amp; Gandhinagar for 100% genuine tyres, 3D computerized alignment, wheel balancing, nitrogen filling, and 30-minute doorstep battery replacement.
    </p>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blue"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold">Store Locations</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. SECTION 1: PREMIUM COMPACT STORE GRID   -->
<!-- ========================================== -->
<section class="py-14 bg-white border-b border-slate-200" id="stores-grid-section">
  <div class="container mx-auto px-3">

    <!-- Section Filter Pills -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <!-- Store Filter Buttons Pills -->
      <div class="flex flex-wrap items-center justify-center gap-2 max-w-3xl mx-auto">
        <button onclick="filterByLocation('all')" class="store-tag-btn active-tag bg-brand-yellow text-slate-950 font-medium text-xs px-4 py-2 rounded-xl border border-brand-yellow transition shadow-sm" data-loc="all">All Stores (10)</button>
        <button onclick="filterByLocation('motera')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="motera">Motera</button>
        <button onclick="filterByLocation('viratnagar')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="viratnagar">Viratnagar</button>
        <button onclick="filterByLocation('ghatlodiya')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="ghatlodiya">Ghatlodiya</button>
        <button onclick="filterByLocation('nikol')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="nikol">Nikol</button>
        <button onclick="filterByLocation('chandkheda')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="chandkheda">Chandkheda</button>
        <button onclick="filterByLocation('new ranip')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="new ranip">New Ranip</button>
        <button onclick="filterByLocation('satellite')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="satellite">Satellite</button>
        <button onclick="filterByLocation('thakkarnagar')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="thakkarnagar">Thakkarnagar</button>
        <button onclick="filterByLocation('kudasan')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="kudasan">Kudasan</button>
        <button onclick="filterByLocation('gota')" class="store-tag-btn bg-slate-100 hover:bg-brand-yellow hover:text-slate-900 text-slate-700 font-medium text-xs px-3.5 py-2 rounded-xl border border-slate-200 transition" data-loc="gota">Gota</button>
      </div>
    </div>

    <!-- Stores 2-Column Compact Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="store-cards-container">

      <!-- 1. MOTERA STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="motera" data-area="Motera" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad North</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=motera" class="hover:underline">TyreHub - Motera Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4 Motera, Ahmedabad 380005
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:00 PM | <strong>Sun:</strong> 9:30 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Wheel Balancing</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Nitrogen Gas</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Doorstep Fitment</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/EnJzU296MFn96K1RA" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=motera" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 2. VIRATNAGAR STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="viratnagar" data-area="Viratnagar" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad East</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=viratnagar" class="hover:underline">TyreHub - Viratnagar Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              27, Kariya Complex, Viratnagar, Cross Rd, Odhav, Ahmedabad, Gujarat 382415
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 8:45 AM – 8:15 PM | <strong>Sun:</strong> 8:45 AM – 2:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Car &amp; Bike Tyres</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Wheel Balancing</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Laser Alignment</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Battery Check</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/75swNNP2rcmibY946" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=viratnagar" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 3. GHATLODIYA STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="ghatlodiya" data-area="Ghatlodiya" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad West</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=ghatlodiya" class="hover:underline">TyreHub - Ghatlodiya Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              GF Vishwas City 2. Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad, Gujarat 380061
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:00 PM | <strong class="text-rose-600">Sun: Closed</strong></span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Wheel Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Nitrogen Inflation</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Tyre Inspection</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Battery Replacement</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/kww5qfcbLwdepUpL9" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=ghatlodiya" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 4. NIKOL STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="nikol" data-area="Nikol" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad East</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=nikol" class="hover:underline">TyreHub - Nikol Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Shop No.6 Sharnam Residensi, Opp Shyam Farm, Nr. Kalyan Chowk, Nikol - Naroda Rd, Nikol, Ahmedabad, Gujarat 382350
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:00 AM – 7:30 PM | <strong>Sun:</strong> 9:00 AM – 12:30 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Express Fitment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Wheel Balancing</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Roadside Assist</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Battery Jumpstart</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/DPEoynshygN5fK359" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=nikol" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 5. CHANDKHEDA (NEW C G ROAD) STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="chandkheda" data-area="Chandkheda (New C G Road)" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad North</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=chandkheda" class="hover:underline">TyreHub - Chandkheda Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Swagat Status - 1, New CG Rd, Chandkheda, Ahmedabad, Gujarat 382424
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 10:00 AM – 8:00 PM | <strong>Sun:</strong> 10:00 AM – 4:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Bridgestone Zone</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Laser Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Nitrogen Gas</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Doorstep Fitment</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/6cry5q9ASjT56qPG7" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=chandkheda" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 6. NEW RANIP STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="new ranip" data-area="New Ranip" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad West</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=ranip" class="hover:underline">TyreHub - New Ranip Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              8,9, Ground floor, shashwat flat, opp. Anmol Bunglows, near Kamoda Party Plot, New Ranip, Ahmedabad, Gujarat 382480
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:00 PM | <strong>Sun:</strong> 9:30 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18002335551" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-233-5551</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Tyre Mounting</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Wheel Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Tubeless Repair</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Battery Care</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/s42V6RyGz3HuuGPd8" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=ranip" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 7. SATELLITE STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="satellite" data-area="Satellite" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad West</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=satellite" class="hover:underline">TyreHub - Satellite Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Sagun Castle, 1-2, behind Star Bazaar, Satellite, Ahmedabad, Gujarat 380015
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:00 PM | <strong>Sun:</strong> 9:30 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Luxury Car Tyres</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Precision 3D Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Alloy Care</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">VIP Customer Lounge</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/scS4DA7QPWTJMcz86" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=satellite" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 8. THAKKARNAGAR STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="thakkarnagar" data-area="Thakkarnagar" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Ahmedabad East</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=thakkarnagar" class="hover:underline">TyreHub - Thakkarnagar Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Shop No.4, Jay Estate, Thakkarnagar Rd, near Mahesh Tenement, opp. Chamk Chuna, Hirawadi, Saijpurbogh, Ahmedabad, Gujarat 382345
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:00 PM | <strong>Sun:</strong> 9:30 AM – 8:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Wholesale Prices</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Wheel Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Commercial &amp; Passenger</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">Battery Hub</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/9f5d74dmxtgEZm8dA" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=thakkarnagar" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 9. KUDASAN STORE (GANDHINAGAR) -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="kudasan" data-area="KUDASAN" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">Gandhinagar Region</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=kudasan" class="hover:underline">TyreHub - Kudasan Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Shop No. 08 (Ground Floor), Kanam Residency, Kudasan, Gandhinagar, Gujarat 382421
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:30 PM | <strong>Sun:</strong> 9:30 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Gandhinagar Fitting</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Wheel Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Multi-Brand Tyres</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">30-Min Battery</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/VGP49EA5CNB7BpjVA" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=kudasan" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

      <!-- 10. GOTA STORE -->
      <div class="store-card bg-white rounded-[22px] border border-slate-200/90 p-6 shadow-sm hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between group relative overflow-hidden" data-name="gota" data-area="GOTA" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="space-y-4">
          <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-3.5">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-brand-yellow/20 text-brand-blue flex items-center justify-center font-bold text-sm shrink-0 group-hover:bg-brand-yellow transition duration-300">
                <i class="fa-solid fa-store"></i>
              </div>
              <div>
                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block">S.G. Highway Hub</span>
                <h3 class="text-lg font-bold text-slate-900 font-outfit group-hover:text-brand-blue transition">
                  <a href="store-detail.php?store=gota" class="hover:underline">TyreHub - Gota Store</a>
                </h3>
              </div>
            </div>
          </div>

          <div class="flex items-start gap-2.5">
            <i class="fa-solid fa-location-dot text-brand-blue text-sm mt-0.5 shrink-0"></i>
            <p class="text-xs text-slate-600 leading-relaxed">
              <strong class="text-slate-900 font-semibold block">Address &amp; Landmark:</strong>
              Parivar Homes, Shop no 1 Near Devnagar Gam, Sarkhej - Gandhinagar Hwy, behind Vodafone Tower, Gota, Ahmedabad, Gujarat - 382481
            </p>
          </div>

          <div class="space-y-1.5 text-xs text-slate-600 pt-1">
            <div class="flex items-center gap-2">
              <i class="fa-regular fa-clock text-brand-blue text-xs shrink-0"></i>
              <span><strong>Mon – Sat:</strong> 9:30 AM – 8:30 PM | <strong>Sun:</strong> 9:30 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fa-solid fa-phone text-brand-blue text-xs shrink-0"></i>
              <a href="tel:18001235510" class="font-bold text-brand-blue hover:text-brand-yellow transition">1800-123-5510</a>
            </div>
          </div>

          <div class="pt-2 border-t border-slate-100">
            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Available Facilities:</span>
            <div class="flex flex-wrap gap-1.5">
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">Express SG Highway</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">3D Laser Alignment</span>
              <span class="bg-slate-100 text-slate-700 text-[11px] font-medium px-2.5 py-1 rounded-lg">High Speed Balancing</span>
              <span class="bg-brand-yellow/20 text-brand-blue text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-yellow/40">30-Min Battery</span>
            </div>
          </div>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-3">
          <a href="https://maps.app.goo.gl/6PDhkjr2kfR91Ct27" target="_blank" class="flex items-center justify-center gap-1.5 px-3 py-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition text-xs font-bold">
            <i class="fa-solid fa-diamond-turn-right text-brand-blue text-xs"></i> Directions
          </a>
          <a href="store-detail.php?store=gota" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 text-xs font-extrabold py-2.5 rounded-xl transition shadow-sm flex items-center justify-center">
            Store Details
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 3. SECTION 2: PRODUCT LISTING SECTION      -->
<!-- (7 EXACT CLIENT REFINEMENTS IMPLEMENTED)   -->
<!-- ========================================== -->
<section class="py-16 bg-slate-50 border-b border-slate-200" id="product-listing-section">
  <div class="container mx-auto px-3">

    <!-- Section Header -->
    <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
      <span class="text-xs font-bold uppercase tracking-widest text-slate-400">PREMIUM SELECTION</span>
      <h2 class="text-3xl md:text-4xl font-medium text-brand-blue mt-1">
        Top Selling <span class="font-bold text-brand-blue">Tyres</span>
      </h2>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3 mb-3"></div>
      <p class="text-slate-600 text-xs sm:text-sm max-w-xl mx-auto font-medium">
        Select premium tyres for your vehicle with 100% genuine brand warranty &amp; free store fitment included!
      </p>
    </div>

    <!-- Products Grid (3-Column Grid) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8" id="products-container">

      <!-- Product 1: Goodyear Ducaro -->
      <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between overflow-hidden group relative" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div>
          <!-- Compact Top Tyre Backdrop Container (Breathing Space) -->
          <div class="relative bg-gradient-to-b from-slate-50/80 to-white border-b border-slate-100 py-5 flex items-center justify-center overflow-hidden min-h-[220px]">
            
            <!-- Top Left: Crystal Clear Legible Brand Logo Badge -->
            <div class="absolute top-0 left-0 z-10 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-br-xl border-b border-r border-slate-200/80 shadow-2xs flex items-center justify-center min-h-[30px] min-w-[75px]">
              <img src="assets/image/brand-logo/goodyear.webp" alt="Goodyear" class="h-5 sm:h-5.5 max-w-[75px] w-auto object-contain">
            </div>

            <!-- Top Right: Discount Badge -->
            <span class="absolute top-0 right-0 z-10 bg-emerald-600 text-white font-semibold text-[11px] px-2.5 py-1 rounded-bl-lg uppercase tracking-wider">
              15% OFF
            </span>

            <!-- Center Tyre Image (10-15% Larger: h-56 sm:h-60) -->
            <div class="w-full flex items-center justify-center px-4 pt-1">
              <img src="assets/image/product.png" alt="Goodyear Ducaro" class="h-56 sm:h-60 w-auto object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-300">
            </div>
          </div>

          <!-- Product Info Content (Breathing Space p-4 space-y-3) -->
          <div class="p-4 space-y-3">
            
            <!-- Brand Tag (Higher Contrast text-slate-600) & Rating Row -->
            <div class="flex items-center justify-between gap-2">
              <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-600">Goodyear Tyres</span>
              <div class="flex items-center gap-1 text-slate-500 font-medium text-[11px]">
                <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                <span class="text-slate-800 font-bold">4.9</span>
                <span class="text-slate-400">(128)</span>
              </div>
            </div>

            <!-- Product Title (Lighter font-medium text-lg sm:text-xl) -->
            <h3 class="text-lg sm:text-xl font-medium text-slate-900 font-outfit leading-snug group-hover:text-brand-blue transition">
              Ducaro Hi-Miler Tubeless
            </h3>

            <!-- Compact Pills (Height reduced 2-4px: h-[22px] px-2) -->
            <div class="flex flex-wrap gap-1.5 pt-0.5">
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">145/80 R12</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">Tubeless</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-semibold px-2 rounded-md bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40">5 Yr Warranty</span>
            </div>

            <!-- Price Section -->
            <div class="pt-3 border-t border-slate-100 space-y-1.5">
              <span class="text-[11px] text-slate-500 font-medium block">Special Price</span>
              <div class="flex items-baseline justify-between gap-2">
                <div class="flex items-baseline gap-2">
                  <span class="text-2xl sm:text-[28px] font-bold text-brand-blue font-outfit tracking-tight">₹3,120</span>
                  <span class="text-xs text-slate-400 line-through font-medium">₹3,220</span>
                </div>
                <!-- Premium Softer Outline Savings Badge -->
                <span class="bg-emerald-50 text-emerald-700 border border-emerald-300/80 font-bold text-[11px] px-2.5 py-0.5 rounded-lg shadow-2xs">
                  Save ₹100
                </span>
              </div>

              <!-- Trust line: Inclusive of all taxes -->
              <div class="flex items-center gap-1.5 text-[11px] text-slate-500 font-medium pt-0.5">
                <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
                <span>Inclusive of all taxes &amp; Free Store Fitment</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Integrated Clean Stepper Row (- 4 +) -->
        <div class="px-4 pb-4 pt-1 flex items-center gap-2">
          
          <!-- Stepper (- 4 +) -->
          <div class="h-11 flex items-center bg-slate-50 border border-slate-300 rounded-xl overflow-hidden shrink-0 shadow-2xs hover:border-brand-blue transition">
            <button type="button" onclick="changeQty(this, -1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-r border-slate-200/80">
              <i class="fa-solid fa-minus text-xs"></i>
            </button>
            <div class="px-3.5 min-w-[42px] text-center bg-white h-full flex items-center justify-center">
              <span class="qty-num text-sm font-bold text-slate-900 font-outfit">4</span>
            </div>
            <button type="button" onclick="changeQty(this, 1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-l border-slate-200/80">
              <i class="fa-solid fa-plus text-xs"></i>
            </button>
          </div>

          <!-- Add to Cart Primary Yellow Button -->
          <a href="contact.php" class="h-11 flex-1 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-extrabold text-xs uppercase tracking-wider rounded-xl transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-2">
            <i class="fa-solid fa-cart-shopping text-xs"></i> ADD TO CART
          </a>
        </div>
      </div>

      <!-- Product 2: Bridgestone Turanza -->
      <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between overflow-hidden group relative" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div>
          <!-- Compact Top Tyre Backdrop Container (Breathing Space) -->
          <div class="relative bg-gradient-to-b from-slate-50/80 to-white border-b border-slate-100 py-5 flex items-center justify-center overflow-hidden min-h-[220px]">
            
            <!-- Top Left: Crystal Clear Legible Brand Logo Badge -->
            <div class="absolute top-0 left-0 z-10 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-br-xl border-b border-r border-slate-200/80 shadow-2xs flex items-center justify-center min-h-[30px] min-w-[75px]">
              <img src="assets/image/brand-logo/bridgestone.webp" alt="Bridgestone" class="h-5 sm:h-5.5 max-w-[75px] w-auto object-contain">
            </div>

            <!-- Top Right: Discount Badge -->
            <span class="absolute top-0 right-0 z-10 bg-emerald-600 text-white font-semibold text-[11px] px-2.5 py-1 rounded-bl-lg uppercase tracking-wider">
              15% OFF
            </span>

            <!-- Center Tyre Image (10-15% Larger: h-56 sm:h-60) -->
            <div class="w-full flex items-center justify-center px-4 pt-1">
              <img src="assets/image/product-1.png" alt="Bridgestone Turanza" class="h-56 sm:h-60 w-auto object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-300">
            </div>
          </div>

          <!-- Product Info Content (Breathing Space p-4 space-y-3) -->
          <div class="p-4 space-y-3">
            
            <!-- Brand Tag (Higher Contrast text-slate-600) & Rating Row -->
            <div class="flex items-center justify-between gap-2">
              <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-600">Bridgestone Tyres</span>
              <div class="flex items-center gap-1 text-slate-500 font-medium text-[11px]">
                <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                <span class="text-slate-800 font-bold">4.9</span>
                <span class="text-slate-400">(215)</span>
              </div>
            </div>

            <!-- Product Title (Lighter font-medium text-lg sm:text-xl) -->
            <h3 class="text-lg sm:text-xl font-medium text-slate-900 font-outfit leading-snug group-hover:text-brand-blue transition">
              Turanza T005 Premium
            </h3>

            <!-- Compact Pills (Height reduced 2-4px: h-[22px] px-2) -->
            <div class="flex flex-wrap gap-1.5 pt-0.5">
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">185/65 R15</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">Tubeless</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-semibold px-2 rounded-md bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40">5 Yr Warranty</span>
            </div>

            <!-- Price Section -->
            <div class="pt-3 border-t border-slate-100 space-y-1.5">
              <span class="text-[11px] text-slate-500 font-medium block">Special Price</span>
              <div class="flex items-baseline justify-between gap-2">
                <div class="flex items-baseline gap-2">
                  <span class="text-2xl sm:text-[28px] font-bold text-brand-blue font-outfit tracking-tight">₹5,450</span>
                  <span class="text-xs text-slate-400 line-through font-medium">₹6,400</span>
                </div>
                <!-- Premium Softer Outline Savings Badge -->
                <span class="bg-emerald-50 text-emerald-700 border border-emerald-300/80 font-bold text-[11px] px-2.5 py-0.5 rounded-lg shadow-2xs">
                  Save ₹950
                </span>
              </div>

              <!-- Trust line: Inclusive of all taxes -->
              <div class="flex items-center gap-1.5 text-[11px] text-slate-500 font-medium pt-0.5">
                <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
                <span>Inclusive of all taxes &amp; Free Store Fitment</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Integrated Clean Stepper Row (- 4 +) -->
        <div class="px-4 pb-4 pt-1 flex items-center gap-2">
          
          <!-- Stepper (- 4 +) -->
          <div class="h-11 flex items-center bg-slate-50 border border-slate-300 rounded-xl overflow-hidden shrink-0 shadow-2xs hover:border-brand-blue transition">
            <button type="button" onclick="changeQty(this, -1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-r border-slate-200/80">
              <i class="fa-solid fa-minus text-xs"></i>
            </button>
            <div class="px-3.5 min-w-[42px] text-center bg-white h-full flex items-center justify-center">
              <span class="qty-num text-sm font-bold text-slate-900 font-outfit">4</span>
            </div>
            <button type="button" onclick="changeQty(this, 1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-l border-slate-200/80">
              <i class="fa-solid fa-plus text-xs"></i>
            </button>
          </div>

          <!-- Add to Cart Primary Yellow Button -->
          <a href="contact.php" class="h-11 flex-1 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-extrabold text-xs uppercase tracking-wider rounded-xl transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-2">
            <i class="fa-solid fa-cart-shopping text-xs"></i> ADD TO CART
          </a>
        </div>
      </div>

      <!-- Product 3: Michelin Primacy -->
      <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between overflow-hidden group relative" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div>
          <!-- Compact Top Tyre Backdrop Container (Breathing Space) -->
          <div class="relative bg-gradient-to-b from-slate-50/80 to-white border-b border-slate-100 py-5 flex items-center justify-center overflow-hidden min-h-[220px]">
            
            <!-- Top Left: Crystal Clear Legible Brand Logo Badge -->
            <div class="absolute top-0 left-0 z-10 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-br-xl border-b border-r border-slate-200/80 shadow-2xs flex items-center justify-center min-h-[30px] min-w-[75px]">
              <img src="assets/image/brand-logo/michelin.webp" alt="Michelin" class="h-5 sm:h-5.5 max-w-[75px] w-auto object-contain">
            </div>

            <!-- Top Right: Discount Badge -->
            <span class="absolute top-0 right-0 z-10 bg-emerald-600 text-white font-semibold text-[11px] px-2.5 py-1 rounded-bl-lg uppercase tracking-wider">
              12% OFF
            </span>

            <!-- Center Tyre Image (10-15% Larger: h-56 sm:h-60) -->
            <div class="w-full flex items-center justify-center px-4 pt-1">
              <img src="assets/image/product.png" alt="Michelin Primacy" class="h-56 sm:h-60 w-auto object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-300">
            </div>
          </div>

          <!-- Product Info Content (Breathing Space p-4 space-y-3) -->
          <div class="p-4 space-y-3">
            
            <!-- Brand Tag (Higher Contrast text-slate-600) & Rating Row -->
            <div class="flex items-center justify-between gap-2">
              <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-600">Michelin Tyres</span>
              <div class="flex items-center gap-1 text-slate-500 font-medium text-[11px]">
                <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                <span class="text-slate-800 font-bold">5.0</span>
                <span class="text-slate-400">(342)</span>
              </div>
            </div>

            <!-- Product Title (Lighter font-medium text-lg sm:text-xl) -->
            <h3 class="text-lg sm:text-xl font-medium text-slate-900 font-outfit leading-snug group-hover:text-brand-blue transition">
              Primacy 4 ST Silent Ride
            </h3>

            <!-- Compact Pills (Height reduced 2-4px: h-[22px] px-2) -->
            <div class="flex flex-wrap gap-1.5 pt-0.5">
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">195/55 R16</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">Silent Comfort</span>
              <span class="h-[22px] inline-flex items-center text-[10.5px] font-semibold px-2 rounded-md bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40">5 Yr Warranty</span>
            </div>

            <!-- Price Section -->
            <div class="pt-3 border-t border-slate-100 space-y-1.5">
              <span class="text-[11px] text-slate-500 font-medium block">Special Price</span>
              <div class="flex items-baseline justify-between gap-2">
                <div class="flex items-baseline gap-2">
                  <span class="text-2xl sm:text-[28px] font-bold text-brand-blue font-outfit tracking-tight">₹7,200</span>
                  <span class="text-xs text-slate-400 line-through font-medium">₹8,180</span>
                </div>
                <!-- Premium Softer Outline Savings Badge -->
                <span class="bg-emerald-50 text-emerald-700 border border-emerald-300/80 font-bold text-[11px] px-2.5 py-0.5 rounded-lg shadow-2xs">
                  Save ₹980
                </span>
              </div>

              <!-- Trust line: Inclusive of all taxes -->
              <div class="flex items-center gap-1.5 text-[11px] text-slate-500 font-medium pt-0.5">
                <i class="fa-solid fa-circle-check text-emerald-600 text-xs"></i>
                <span>Inclusive of all taxes &amp; Free Store Fitment</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Integrated Clean Stepper Row (- 4 +) -->
        <div class="px-4 pb-4 pt-1 flex items-center gap-2">
          
          <!-- Stepper (- 4 +) -->
          <div class="h-11 flex items-center bg-slate-50 border border-slate-300 rounded-xl overflow-hidden shrink-0 shadow-2xs hover:border-brand-blue transition">
            <button type="button" onclick="changeQty(this, -1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-r border-slate-200/80">
              <i class="fa-solid fa-minus text-xs"></i>
            </button>
            <div class="px-3.5 min-w-[42px] text-center bg-white h-full flex items-center justify-center">
              <span class="qty-num text-sm font-bold text-slate-900 font-outfit">4</span>
            </div>
            <button type="button" onclick="changeQty(this, 1)" class="w-9 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-l border-slate-200/80">
              <i class="fa-solid fa-plus text-xs"></i>
            </button>
          </div>

          <!-- Add to Cart Primary Yellow Button -->
          <a href="contact.php" class="h-11 flex-1 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-extrabold text-xs uppercase tracking-wider rounded-xl transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-2">
            <i class="fa-solid fa-cart-shopping text-xs"></i> ADD TO CART
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 4. SECTION 3: OUR TYRE BRANDS SECTION     -->
<!-- (SLICK CAROUSEL LOGO SLIDER - EXACT HOME)  -->
<!-- ========================================== -->
<section id="tyre-brands-section" class="py-14 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">

    <!-- Tyre Brands Header -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block mb-1">OFFICIAL PARTNERS</span>
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our Authorized <span class="font-bold text-brand-blue">Tyre Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Tyre Brands Slick Slider using Authentic WebP Logos (Exact Home Page Setup) -->
    <div id="tyre-brands-slider" class="slick-carousel -mx-2 mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

      <!-- Bridgestone -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/bridgestone.webp" alt="Bridgestone Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- MRF -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/mrf.webp" alt="MRF Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Apollo -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/apollotyres.webp" alt="Apollo Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- JK Tyre -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/jktyre.webp" alt="JK Tyre" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- TVS Tyres -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/tvs.webp" alt="TVS Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Yokohama -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/yokohama.webp" alt="Yokohama Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Michelin -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/michelin.webp" alt="Michelin Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Goodyear -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/goodyear.webp" alt="Goodyear Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- CEAT -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/ceat.webp" alt="CEAT Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

    <!-- CTA BANNER BOX -->
    <div class="bg-[#233067] text-white rounded-[24px] sm:rounded-[28px] p-6 sm:px-10 sm:py-7 shadow-xl flex flex-col sm:flex-row items-center justify-between gap-5 mt-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
      
      <!-- Left Heading & Description -->
      <div class="text-center sm:text-left space-y-1">
        <h2 class="text-xl sm:text-2xl font-bold font-outfit text-white leading-tight">
          Need help with your store appointment or fitment?
        </h2>
        <p class="text-slate-200 text-xs sm:text-sm font-normal">
          Our TyreHub customer support team is always ready to assist you.
        </p>
      </div>

      <!-- Right Yellow Call Button Pill -->
      <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" 
        class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-extrabold text-xs sm:text-sm px-6 py-3.5 rounded-full transition shadow-md flex items-center gap-2.5 shrink-0 whitespace-nowrap">
        <i class="fa-solid fa-phone text-slate-950 text-xs"></i>
        <span>Call <?php echo TOLL_FREE_NUMBER; ?></span>
      </a>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT FOR STORE FILTERING & QTY       -->
<!-- ========================================== -->
<script>
  function changeQty(btn, delta) {
    const container = btn.closest('div');
    const numEl = container.querySelector('.qty-num');
    let current = parseInt(numEl.textContent) || 1;
    current += delta;
    if (current < 1) current = 1;
    if (current > 10) current = 10;
    numEl.textContent = current;
  }

  function filterByLocation(loc) {
    document.querySelectorAll('.store-tag-btn').forEach(btn => {
      if (btn.getAttribute('data-loc') === loc) {
        btn.classList.add('bg-brand-yellow', 'text-slate-950', 'font-medium', 'border-brand-yellow');
        btn.classList.remove('bg-slate-100', 'text-slate-700', 'border-slate-200');
      } else {
        btn.classList.remove('bg-brand-yellow', 'text-slate-950', 'font-medium', 'border-brand-yellow');
        btn.classList.add('bg-slate-100', 'text-slate-700', 'border-slate-200');
      }
    });

    const cards = document.querySelectorAll('.store-card');

    cards.forEach(card => {
      const cardLoc = card.getAttribute('data-name').toLowerCase();
      if (loc === 'all' || cardLoc === loc || cardLoc.includes(loc)) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }
</script>

<?php include 'includes/footer.php'; ?>
