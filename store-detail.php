<?php
// Determine selected store from GET parameter or default to Motera
$store_key = isset($_GET['store']) ? strtolower(trim($_GET['store'])) : 'motera';

// Store Data Registry
$stores_db = [
    'motera' => [
        'name' => 'TyreHub - Motera Store',
        'area' => 'Motera',
        'address' => 'Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4, Motera, Ahmedabad, Gujarat 380005',
        'landmark' => 'Near Sangath 4 & Kameshwar Flats',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:00 PM',
        'timing_sun' => '9:30 AM – 7:00 PM',
        'rating' => '4.9',
        'reviews_count' => '184',
        'map_url' => 'https://maps.app.goo.gl/EnJzU296MFn96K1RA',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.994171623997!2d72.59629319999999!3d23.097309199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e835d8a670399%3A0xed7858e6eba4b573!2sTyreHub!5e0!3m2!1sen!2sin!4v1787737865954!5m2!1sen!2sin',
        'facilities' => ['3D Laser Alignment', 'Wheel Balancing', 'Nitrogen Inflation', '30-Min Battery Fitment', 'AC Waiting Lounge', 'Doorstep Fitment'],
        'manager' => 'Rajesh Sharma (Store Manager)',
    ],
    'viratnagar' => [
        'name' => 'TyreHub - Viratnagar Store',
        'area' => 'Viratnagar',
        'address' => '27, Kariya Complex, Viratnagar Cross Rd, Odhav, Ahmedabad, Gujarat 382415',
        'landmark' => 'Near Viratnagar Cross Road',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '8:45 AM – 8:15 PM',
        'timing_sun' => '8:45 AM – 2:00 PM',
        'rating' => '4.8',
        'reviews_count' => '142',
        'map_url' => 'https://maps.app.goo.gl/75swNNP2rcmibY946',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.931731576899!2d72.6391044!3d23.0262787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e877b2c311305%3A0xcbe362066418f776!2sTyreHub%20Tyre%20Shop%20%7C%20Wheel%20alignment%20%26%20balancing!5e0!3m2!1sen!2sin!4v1787738890964!5m2!1sen!2sin',
        'facilities' => ['Car & Bike Tyres', 'Wheel Balancing', '3D Laser Alignment', 'Battery Replacement', 'Nitrogen Gas'],
        'manager' => 'Amit Patel (Store Manager)',
    ],
    'ghatlodiya' => [
        'name' => 'TyreHub - Ghatlodiya Store',
        'area' => 'Ghatlodiya',
        'address' => 'GF Vishwas City 2, Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad, Gujarat 380061',
        'landmark' => 'Shayona City, R.C. Technical Road',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:00 PM',
        'timing_sun' => 'Closed on Sunday',
        'rating' => '4.9',
        'reviews_count' => '165',
        'map_url' => 'https://maps.app.goo.gl/kww5qfcbLwdepUpL9',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5203736214494!2d72.534155!3d23.0780392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8378f3c80113%3A0x30d88ee9f7ff0404!2sTyreHub!5e0!3m2!1sen!2sin!4v1787738914651!5m2!1sen!2sin',
        'facilities' => ['3D Wheel Alignment', 'Nitrogen Inflation', 'Tyre Inspection', 'Battery Service', 'Doorstep Delivery'],
        'manager' => 'Vikram Singh (Store Manager)',
    ],
    'nikol' => [
        'name' => 'TyreHub - Nikol Store',
        'area' => 'Nikol',
        'address' => 'Shop No.6 Sharnam Residensi, Opp Shyam Farm, Nr. Kalyan Chowk, Nikol - Naroda Rd, Nikol, Ahmedabad, Gujarat 382350',
        'landmark' => 'Near Kalyan Chowk & Shyam Farm',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:00 AM – 7:30 PM',
        'timing_sun' => '9:00 AM – 12:30 PM',
        'rating' => '4.8',
        'reviews_count' => '128',
        'map_url' => 'https://maps.app.goo.gl/DPEoynshygN5fK359',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.085554519679!2d72.6647758!3d23.0573248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8709c7baabe3%3A0xfbdb376e4ba8138c!2sAlignXpert%20Tyre%20Shop%20Nikol%20-%20Naroda%20Road%7C%20Wheel%20alignment%20and%20balancing%20Shop%20nikol!5e0!3m2!1sen!2sin!4v1787738934064!5m2!1sen!2sin',
        'facilities' => ['Express Fitment', 'Wheel Balancing', 'Roadside Assist', 'Battery Jumpstart', 'Nitrogen Inflation'],
        'manager' => 'Sanjay Mehta (Store Manager)',
    ],
    'chandkheda' => [
        'name' => 'TyreHub - Chandkheda Store',
        'area' => 'Chandkheda',
        'address' => 'Swagat Status - 1, New CG Rd, Chandkheda, Ahmedabad, Gujarat 382424',
        'landmark' => 'New C G Road',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '10:00 AM – 8:00 PM',
        'timing_sun' => '10:00 AM – 4:00 PM',
        'rating' => '4.9',
        'reviews_count' => '156',
        'map_url' => 'https://maps.app.goo.gl/6cry5q9ASjT56qPG7',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3669.750085504106!2d72.5974355!3d23.1062427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83f8d4d5dabd%3A0x2112de64633840f4!2sTyre%20Hub!5e0!3m2!1sen!2sin!4v1787738997336!5m2!1sen!2sin',
        'facilities' => ['Bridgestone Zone', '3D Laser Alignment', 'Nitrogen Gas', 'Doorstep Fitment', 'Battery Replacement'],
        'manager' => 'Pankaj Joshi (Store Manager)',
    ],
    'ranip' => [
        'name' => 'TyreHub - New Ranip Store',
        'area' => 'New Ranip',
        'address' => '8,9, Ground floor, shashwat flat, opp. Anmol Bunglows, near Kamoda Party Plot, New Ranip, Ahmedabad, Gujarat 382480',
        'landmark' => 'Near Kamoda Party Plot',
        'phone' => '1800-233-5551',
        'phone_raw' => '18002335551',
        'timing_week' => '9:30 AM – 8:00 PM',
        'timing_sun' => '9:30 AM – 7:00 PM',
        'rating' => '4.8',
        'reviews_count' => '118',
        'map_url' => 'https://maps.app.goo.gl/s42V6RyGz3HuuGPd8',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.1037716423107!2d72.5564002!3d23.0932968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e838789ee3335%3A0xe8a74edc2d699ce0!2sTyrehub%20%7CNew%20Ranip!5e0!3m2!1sen!2sin!4v1787739004506!5m2!1sen!2sin',
        'facilities' => ['Tyre Mounting', 'Wheel Alignment', 'Tubeless Repair', 'Battery Care', 'Nitrogen Filling'],
        'manager' => 'Kiran Vaghela (Store Manager)',
    ],
    'satellite' => [
        'name' => 'TyreHub - Satellite Store',
        'area' => 'Satellite',
        'address' => 'Sagun Castle, 1-2, behind Star Bazaar, Satellite, Ahmedabad, Gujarat 380015',
        'landmark' => 'Behind Star Bazaar',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:00 PM',
        'timing_sun' => '9:30 AM – 7:00 PM',
        'rating' => '4.9',
        'reviews_count' => '195',
        'map_url' => 'https://maps.app.goo.gl/scS4DA7QPWTJMcz86',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58735.23766654501!2d72.4793419!3d23.0622083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84cbbe3d0e61%3A0x88adbf6ed851549a!2sSagun%20Castle%2C%20Satellite%2C%20Ahmedabad%2C%20Gujarat%20380015!5e0!3m2!1sen!2sin!4v1787739021571!5m2!1sen!2sin',
        'facilities' => ['Luxury Car Tyres', 'Precision 3D Alignment', 'Alloy Care', 'VIP Customer Lounge', 'Nitrogen Inflation'],
        'manager' => 'Deepak Trivedi (Store Manager)',
    ],
    'thakkarnagar' => [
        'name' => 'TyreHub - Thakkarnagar Store',
        'area' => 'Thakkarnagar',
        'address' => 'Shop No.4, Jay Estate, Thakkarnagar Rd, near Mahesh Tenement, opp. Chamk Chuna, Hirawadi, Saijpurbogh, Ahmedabad, Gujarat 382345',
        'landmark' => 'Near Mahesh Tenement & Hirawadi',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:00 PM',
        'timing_sun' => '9:30 AM – 8:00 PM',
        'rating' => '4.8',
        'reviews_count' => '134',
        'map_url' => 'https://maps.app.goo.gl/9f5d74dmxtgEZm8dA',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.449182329094!2d72.6404644!3d23.0439882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e878af4cc11d9%3A0xaa5d9ba8ac6c662c!2sTyre%20Hub!5e0!3m2!1sen!2sin!4v1787739033804!5m2!1sen!2sin',
        'facilities' => ['Wholesale Prices', '3D Wheel Alignment', 'Commercial & Passenger', 'Battery Hub', 'Doorstep Fitment'],
        'manager' => 'Mahesh Solanki (Store Manager)',
    ],
    'kudasan' => [
        'name' => 'TyreHub - Kudasan Store',
        'area' => 'Kudasan',
        'address' => 'Shop No. 08 (Ground Floor), Kanam Residency, Kudasan, Gandhinagar, Gujarat 382421',
        'landmark' => 'Ground Floor, Kanam Residency',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:30 PM',
        'timing_sun' => '9:30 AM – 7:00 PM',
        'rating' => '4.9',
        'reviews_count' => '172',
        'map_url' => 'https://maps.app.goo.gl/VGP49EA5CNB7BpjVA',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.746793189408!2d72.6277237760112!3d23.179439810454728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b0063e0abfd%3A0x5c279e29b12d5261!2sTyrehub%20Kudasan!5e0!3m2!1sen!2sin!4v1787739158613!5m2!1sen!2sin',
        'facilities' => ['Gandhinagar Fitting', '3D Wheel Alignment', 'Multi-Brand Tyres', '30-Min Battery', 'Nitrogen Inflation'],
        'manager' => 'Hardik Prajapati (Store Manager)',
    ],
    'gota' => [
        'name' => 'TyreHub - Gota Store',
        'area' => 'Gota',
        'address' => 'Parivar Homes, Shop no 1 Near Devnagar Gam, Sarkhej - Gandhinagar Hwy, behind Vodafone Tower, Gota, Ahmedabad, Gujarat - 382481',
        'landmark' => 'Behind Vodafone Tower, S.G. Highway',
        'phone' => '1800-123-5510',
        'phone_raw' => '18001235510',
        'timing_week' => '9:30 AM – 8:30 PM',
        'timing_sun' => '9:30 AM – 7:00 PM',
        'rating' => '4.9',
        'reviews_count' => '188',
        'map_url' => 'https://maps.app.goo.gl/6PDhkjr2kfR91Ct27',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4515.526580220863!2d72.5398033!3d23.105832900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83ddfd63ec15%3A0xcdc59cc9de089b6f!2sTyrehub%20Tyre%20Services%20%7C%20Gota!5e0!3m2!1sen!2sin!4v1787739093153!5m2!1sen!2sin',
        'facilities' => ['Express SG Highway', '3D Laser Alignment', 'High Speed Balancing', '30-Min Battery', 'Doorstep Fitment'],
        'manager' => 'Chintan Shah (Store Manager)',
    ]
];

// Fallback to motera if key not found
$store = isset($stores_db[$store_key]) ? $stores_db[$store_key] : $stores_db['motera'];

$page_title = $store['name'] . " | Authorized Tyre & Service Center | TyreHub";
$page_description = "Visit " . $store['name'] . " in " . $store['area'] . " for 100% genuine tyres, 3D wheel alignment, balancing, nitrogen filling & doorstep battery replacement.";
$current_page = "stores";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- 1. STORES HERO BANNER SECTION              -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    
    <!-- Top Pill Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-bold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-store text-brand-blue"></i> Authorized Fitment Center
    </div>
    
    <!-- Main Title -->
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-2">
      <?php echo htmlspecialchars($store['name']); ?>
    </h1>

    <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mb-4"></div>
    
    <!-- Subtitle Description & Address -->
    <p class="text-slate-600 text-xs sm:text-sm max-w-2xl mx-auto font-normal leading-relaxed mb-4">
      <i class="fa-solid fa-location-dot text-brand-blue mr-1"></i>
      <?php echo htmlspecialchars($store['address']); ?>
    </p>

    <!-- Quick Rating Bar -->
    <div class="flex flex-wrap items-center justify-center gap-3 text-xs font-semibold">
      <span class="px-3 py-1 rounded-full bg-white text-slate-700 border border-slate-200 flex items-center gap-1.5 shadow-2xs font-semibold">
        <i class="fa-solid fa-star text-amber-400"></i>
        <span><?php echo $store['rating']; ?> / 5.0</span>
        <span class="text-slate-400 font-normal">(<?php echo $store['reviews_count']; ?> Reviews)</span>
      </span>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-medium text-slate-600 mt-6">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blueDark"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <a href="stores.php" class="hover:text-brand-yellow transition text-brand-blueDark">Stores</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold"><?php echo htmlspecialchars($store['area']); ?> Store</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. MAIN LAYOUT (CONTENT + STICKY SIDEBAR)  -->
<!-- ========================================== -->
<section class="py-14 sm:py-16 bg-white">
  <div class="container mx-auto px-3">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10">

      <!-- ========================================== -->
      <!-- LEFT 8 COLUMNS: MAIN CONTENT SECTIONS      -->
      <!-- ========================================== -->
      <div class="lg:col-span-8 space-y-10">

        <!-- SECTION 1: STORE OVERVIEW & FACILITIES -->
        <div id="overview" class="bg-slate-50/70 p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-xs space-y-6" data-aos="fade-up" data-aos-duration="600">
          
          <div class="border-b border-slate-200/80 pb-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
            <div>
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">STORE SERVICES</span>
              <h2 class="text-2xl font-bold font-outfit text-slate-900 flex items-center gap-2.5">
                <i class="fa-solid fa-screwdriver-wrench text-brand-blue"></i>
                Workshop Facilities &amp; Services
              </h2>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-slate-900 border border-amber-300/80 font-bold text-xs uppercase tracking-wider self-start sm:self-auto shadow-2xs">
              <i class="fa-solid fa-shield-halved text-brand-blue"></i> Authorized Partner
            </span>
          </div>

          <p class="text-slate-600 text-xs sm:text-sm leading-relaxed font-normal">
            Visit <strong><?php echo htmlspecialchars($store['name']); ?></strong> for official TyreHub fitment, 3D computerized laser alignment, precision wheel balancing, nitrogen gas inflation, and instant battery replacement.
          </p>

          <!-- Facilities Pills Grid -->
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
            <?php foreach ($store['facilities'] as $facility): ?>
              <div class="bg-white p-3 rounded-2xl border border-slate-200/80 shadow-2xs flex items-center gap-2.5 group hover:border-brand-blue transition duration-200">
                <div class="w-6 h-6 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                  <i class="fa-solid fa-check text-xs font-bold"></i>
                </div>
                <span class="text-xs font-semibold text-slate-800 leading-snug"><?php echo htmlspecialchars($facility); ?></span>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- Working Hours & Landmark Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
            
            <!-- Working Hours Box -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs space-y-3">
              <h4 class="text-xs font-bold uppercase tracking-wider text-slate-600 flex items-center gap-2">
                <i class="fa-regular fa-clock text-brand-blue"></i> Store Hours
              </h4>
              <div class="space-y-2 text-xs">
                <div class="flex justify-between items-center text-slate-700">
                  <span class="font-medium text-slate-600">Monday – Saturday:</span>
                  <span class="font-semibold text-slate-900"><?php echo htmlspecialchars($store['timing_week']); ?></span>
                </div>
                <div class="flex justify-between items-center text-slate-700 border-t border-slate-100 pt-2">
                  <span class="font-medium text-slate-600">Sunday:</span>
                  <span class="font-semibold text-brand-blue"><?php echo htmlspecialchars($store['timing_sun']); ?></span>
                </div>
              </div>
            </div>

            <!-- Address & Landmark Box -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
              <h4 class="text-xs font-bold uppercase tracking-wider text-slate-600 flex items-center gap-2">
                <i class="fa-solid fa-map-pin text-brand-blue"></i> Address &amp; Landmark
              </h4>
              <p class="text-xs font-semibold text-slate-900"><?php echo htmlspecialchars($store['landmark']); ?></p>
              <p class="text-xs text-slate-600 leading-relaxed font-normal"><?php echo htmlspecialchars($store['address']); ?></p>
            </div>

          </div>

          <!-- Google Maps Embed -->
          <div class="w-full h-64 sm:h-72 rounded-2xl overflow-hidden border border-slate-200 shadow-sm relative">
            <iframe src="<?php echo htmlspecialchars($store['map_embed']); ?>" class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>

        <!-- SECTION 2: STORE PHOTO GALLERY -->
        <div id="gallery" class="bg-slate-50/70 p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-xs space-y-6" data-aos="fade-up" data-aos-duration="600">
          
          <div class="border-b border-slate-200/80 pb-4 flex items-center justify-between">
            <div>
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">STORE INFRASTRUCTURE</span>
              <h2 class="text-2xl font-bold font-outfit text-slate-900 flex items-center gap-2.5">
                <i class="fa-solid fa-images text-brand-yellow"></i> Workshop Photo Gallery
              </h2>
            </div>
            <span class="text-xs font-semibold text-slate-500 bg-white px-3 py-1 rounded-full border border-slate-200 shadow-2xs">6 Photos</span>
          </div>

          <!-- 3-Column Photo Gallery Grid -->
          <div class="grid grid-cols-2 md:grid-cols-3 gap-3.5">
            
            <!-- Photo 1: Store Exterior -->
            <div onclick="openGalleryLightbox(0)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-exterior.jpg" alt="Store Exterior" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

            <!-- Photo 2: 3D Laser Alignment -->
            <div onclick="openGalleryLightbox(1)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-alignment.jpg" alt="3D Laser Alignment" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

            <!-- Photo 3: AC Customer Lounge -->
            <div onclick="openGalleryLightbox(2)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-lounge.jpg" alt="AC Customer Lounge" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

            <!-- Photo 4: Tyre Inventory -->
            <div onclick="openGalleryLightbox(3)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-inventory.jpg" alt="Tyre Inventory Racks" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

            <!-- Photo 5: Certified Fitment -->
            <div onclick="openGalleryLightbox(4)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-fitment.jpg" alt="Technician Tyre Fitting" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

            <!-- Photo 6: Wheel Balancing -->
            <div onclick="openGalleryLightbox(5)" class="group relative rounded-2xl overflow-hidden bg-slate-200 aspect-4/3 border border-slate-200 shadow-2xs cursor-pointer">
              <img src="assets/image/shop-balancing.jpg" alt="Digital Wheel Balancing" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
              <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center p-3">
                <div class="w-12 h-12 rounded-full bg-white/25 backdrop-blur-md flex items-center justify-center text-brand-yellow shadow-md transform group-hover:scale-110 transition duration-300">
                  <i class="fa-solid fa-magnifying-glass-plus text-base"></i>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- SECTION 3: GOOGLE REVIEWS & RATINGS -->
        <div id="reviews" class="bg-slate-50/70 p-6 sm:p-8 rounded-3xl border border-slate-200/90 shadow-xs space-y-6" data-aos="fade-up" data-aos-duration="600">
          
          <div class="border-b border-slate-200/80 pb-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">GOOGLE MAPS REVIEWS</span>
              <h2 class="text-2xl font-bold font-outfit text-slate-900 flex items-center gap-2.5">
                <i class="fa-brands fa-google text-brand-blue"></i> Google Reviews &amp; Ratings
              </h2>
            </div>
            <a href="<?php echo htmlspecialchars($store['map_url']); ?>" target="_blank" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-bold text-xs px-4 py-2 rounded-xl transition shadow-2xs self-start sm:self-auto flex items-center gap-2">
              <i class="fa-brands fa-google"></i> Write a Review on Google
            </a>
          </div>

          <!-- Google Rating Breakdown Box -->
          <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs grid grid-cols-1 sm:grid-cols-12 gap-6 items-center">
            
            <div class="sm:col-span-4 text-center sm:text-left space-y-1">
              <div class="flex items-center justify-center sm:justify-start gap-2">
                <span class="text-4xl sm:text-5xl font-extrabold font-outfit text-brand-blueDark"><?php echo $store['rating']; ?></span>
                <i class="fa-brands fa-google text-2xl text-slate-400"></i>
              </div>
              <div class="flex justify-center sm:justify-start text-amber-400 text-sm">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
              <p class="text-xs text-slate-500 font-normal">Based on <?php echo $store['reviews_count']; ?> Google Maps Reviews</p>
            </div>

            <div class="sm:col-span-8 space-y-2 text-xs font-semibold text-slate-600">
              <div class="flex items-center gap-3">
                <span class="w-12 font-medium">5 Star</span>
                <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden">
                  <div class="h-full bg-emerald-500 rounded-full w-[92%]"></div>
                </div>
                <span class="w-8 text-right font-semibold text-slate-800">92%</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-12 font-medium">4 Star</span>
                <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden">
                  <div class="h-full bg-emerald-400 rounded-full w-[6%]"></div>
                </div>
                <span class="w-8 text-right font-semibold text-slate-800">6%</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-12 font-medium">3 Star</span>
                <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden">
                  <div class="h-full bg-amber-400 rounded-full w-[2%]"></div>
                </div>
                <span class="w-8 text-right font-semibold text-slate-800">2%</span>
              </div>
            </div>

          </div>

          <!-- Customer Review Cards List -->
          <div class="space-y-3.5">
            
            <!-- Google Review 1 -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-full bg-slate-100 text-brand-blue font-bold text-xs flex items-center justify-center border border-slate-200">
                    <i class="fa-brands fa-google text-slate-600"></i>
                  </div>
                  <div>
                    <h4 class="text-xs font-semibold text-slate-900 flex items-center gap-1.5">
                      Pratik Patel
                      <i class="fa-solid fa-circle-check text-emerald-600 text-[11px]" title="Verified Google Reviewer"></i>
                    </h4>
                    <span class="text-[10px] text-slate-500 font-normal flex items-center gap-1">
                      Posted on Google Maps • Hyundai Creta Owner
                    </span>
                  </div>
                </div>
                <span class="text-[11px] text-slate-400">2 days ago</span>
              </div>
              <div class="flex text-amber-400 text-xs pt-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed font-normal">
                "Superb service at TyreHub <?php echo htmlspecialchars($store['area']); ?>! The staff completed 4-tyre fitment along with 3D wheel alignment in just 35 minutes. Very polite technicians and clean AC lounge."
              </p>
            </div>

            <!-- Google Review 2 -->
            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-full bg-slate-100 text-brand-blue font-bold text-xs flex items-center justify-center border border-slate-200">
                    <i class="fa-brands fa-google text-slate-600"></i>
                  </div>
                  <div>
                    <h4 class="text-xs font-semibold text-slate-900 flex items-center gap-1.5">
                      Ramesh Mehta
                      <i class="fa-solid fa-circle-check text-emerald-600 text-[11px]" title="Verified Google Reviewer"></i>
                    </h4>
                    <span class="text-[10px] text-slate-500 font-normal flex items-center gap-1">
                      Posted on Google Maps • Maruti Baleno Owner
                    </span>
                  </div>
                </div>
                <span class="text-[11px] text-slate-400">1 week ago</span>
              </div>
              <div class="flex text-amber-400 text-xs pt-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed font-normal">
                "Got my Bridgestone tyres replaced at best market rate with free nitrogen inflation and 5-year warranty card registered instantly. Highly recommended store!"
              </p>
            </div>

          </div>
        </div>

      </div>

      <!-- ========================================== -->
      <!-- RIGHT 4 COLUMNS: STICKY SIDEBAR             -->
      <!-- ========================================== -->
      <div class="lg:col-span-4 space-y-6">
        <div class="sticky top-24 space-y-6">

          <!-- APPOINTMENT BOOKING FORM CARD -->
          <div id="appointment-form" class="bg-slate-50/70 p-6 rounded-3xl border border-slate-200/90 shadow-xs space-y-4">
            <div class="border-b border-slate-200/80 pb-3">
              <h3 class="text-base font-bold font-outfit text-slate-900 flex items-center gap-2">
                <i class="fa-regular fa-calendar-check text-brand-yellow"></i>
                Book Fitment Slot
              </h3>
              <p class="text-xs text-slate-500 font-normal">Reserve your priority appointment at <?php echo htmlspecialchars($store['area']); ?> Store.</p>
            </div>

            <form action="#" method="POST" class="space-y-3" onsubmit="event.preventDefault(); alert('Appointment requested successfully! The <?php echo htmlspecialchars($store['area']); ?> store team will call you back within 15 minutes.');">
              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Your Full Name</label>
                <input type="text" required placeholder="Enter your name..." class="w-full bg-white border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue font-normal">
              </div>

              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Mobile Number</label>
                <input type="tel" required placeholder="10-digit mobile number..." class="w-full bg-white border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue font-normal">
              </div>

              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Select Service</label>
                <select class="w-full bg-white border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue font-medium">
                  <option>Tyre Replacement &amp; Fitment</option>
                  <option>3D Wheel Alignment &amp; Balancing</option>
                  <option>Doorstep Battery Replacement</option>
                  <option>Nitrogen Gas Inflation</option>
                  <option>Tyre Safety Check</option>
                </select>
              </div>

              <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Preferred Date</label>
                <input type="date" required class="w-full bg-white border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue font-normal">
              </div>

              <button type="submit" class="btn-primary w-full py-3 text-xs font-extrabold uppercase tracking-wider rounded-xl shadow-2xs">
                Confirm Priority Slot
              </button>
            </form>
          </div>

          <!-- DIRECT CONTACT & ASSISTANCE CARD -->
          <div class="bg-brand-blueDark text-white p-6 rounded-3xl space-y-4 border border-slate-800 shadow-md">
            <div class="space-y-1">
              <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand-yellow">DIRECT HELPLINE</span>
              <h4 class="text-base font-bold font-outfit text-white">Need Assistance?</h4>
              <p class="text-xs text-slate-300 font-normal">Contact <?php echo htmlspecialchars($store['manager']); ?></p>
            </div>

            <div class="space-y-2.5 pt-1">
              <a href="tel:<?php echo htmlspecialchars($store['phone_raw']); ?>" class="w-full py-2.5 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-bold text-xs rounded-xl flex items-center justify-center gap-2 transition shadow-2xs">
                <i class="fa-solid fa-phone"></i> Call: <?php echo htmlspecialchars($store['phone']); ?>
              </a>
              <a href="https://wa.me/9118001235510?text=Hi%20TyreHub%20<?php echo urlencode($store['area']); ?>%20Store" target="_blank" class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl flex items-center justify-center gap-2 transition">
                <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp Store Team
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 4. OUR AUTHORIZED TYRE BRANDS SECTION     -->
<!-- ========================================== -->
<section id="tyre-brands-section" class="py-14 bg-white border-t border-slate-200">
  <div class="container mx-auto px-3">

    <!-- Tyre Brands Header -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block mb-1">OFFICIAL PARTNERS</span>
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our Authorized <span class="font-bold text-brand-blue">Tyre Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Tyre Brands Slick Slider using Authentic WebP Logos -->
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
  </div>
</section>

<!-- ========================================== -->
<!-- 5. INTERACTIVE LIGHTBOX MODAL COMPONENT     -->
<!-- ========================================== -->
<div id="gallery-lightbox" class="fixed inset-0 z-50 bg-slate-950/90 backdrop-blur-md hidden flex-col items-center justify-center p-4 sm:p-6 transition-all duration-300">
  
  <!-- Close Button -->
  <button type="button" onclick="closeGalleryLightbox()" class="absolute top-5 right-5 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 rounded-full w-11 h-11 flex items-center justify-center text-xl transition z-20 cursor-pointer shadow-md">
    <i class="fa-solid fa-xmark"></i>
  </button>

  <!-- Previous Button -->
  <button type="button" onclick="prevGalleryImage()" class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 rounded-full w-12 h-12 flex items-center justify-center text-lg transition z-20 cursor-pointer shadow-md">
    <i class="fa-solid fa-chevron-left"></i>
  </button>

  <!-- Next Button -->
  <button type="button" onclick="nextGalleryImage()" class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 rounded-full w-12 h-12 flex items-center justify-center text-lg transition z-20 cursor-pointer shadow-md">
    <i class="fa-solid fa-chevron-right"></i>
  </button>

  <!-- Main Image Display Box -->
  <div class="relative max-w-4xl max-h-[85vh] flex flex-col items-center justify-center" onclick="event.stopPropagation()">
    <img id="lightbox-image-element" src="" alt="Gallery Image" class="max-h-[80vh] max-w-full rounded-2xl shadow-2xl object-contain transition-all duration-300 border border-slate-700/60">
    <div class="mt-3 text-center">
      <p id="lightbox-count-element" class="text-slate-300 text-xs font-semibold bg-white/10 px-3 py-1 rounded-full backdrop-blur-md inline-block"></p>
    </div>
  </div>

</div>

<script>
const galleryItems = [
  { src: 'assets/image/shop-exterior.jpg' },
  { src: 'assets/image/shop-alignment.jpg' },
  { src: 'assets/image/shop-lounge.jpg' },
  { src: 'assets/image/shop-inventory.jpg' },
  { src: 'assets/image/shop-fitment.jpg' },
  { src: 'assets/image/shop-balancing.jpg' }
];

let currentGalleryIndex = 0;

function openGalleryLightbox(index) {
  currentGalleryIndex = index;
  updateLightboxContent();
  const modal = document.getElementById('gallery-lightbox');
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  document.body.style.overflow = 'hidden';
}

function closeGalleryLightbox() {
  const modal = document.getElementById('gallery-lightbox');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
  document.body.style.overflow = '';
}

function prevGalleryImage() {
  currentGalleryIndex = (currentGalleryIndex - 1 + galleryItems.length) % galleryItems.length;
  updateLightboxContent();
}

function nextGalleryImage() {
  currentGalleryIndex = (currentGalleryIndex + 1) % galleryItems.length;
  updateLightboxContent();
}

function updateLightboxContent() {
  const item = galleryItems[currentGalleryIndex];
  const imgEl = document.getElementById('lightbox-image-element');
  const countEl = document.getElementById('lightbox-count-element');
  
  imgEl.src = item.src;
  countEl.innerText = `Photo ${currentGalleryIndex + 1} of ${galleryItems.length}`;
}

// Backdrop click closes modal
document.getElementById('gallery-lightbox')?.addEventListener('click', function(e) {
  if (e.target === this) {
    closeGalleryLightbox();
  }
});

// Keyboard controls (Esc, Arrow Left, Arrow Right)
document.addEventListener('keydown', function(e) {
  const modal = document.getElementById('gallery-lightbox');
  if (modal && !modal.classList.contains('hidden')) {
    if (e.key === 'Escape') closeGalleryLightbox();
    if (e.key === 'ArrowLeft') prevGalleryImage();
    if (e.key === 'ArrowRight') nextGalleryImage();
  }
});
</script>

<?php
include 'includes/footer.php';
?>
