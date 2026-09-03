<?php
$page_title = "Select Service Partner | TyreHub - Fitting, Alignment & Delivery";
$page_description = "Select one of our trusted and certified Service Partners for your selected tyre's Fitting, Alignment and Balancing or check for Free Home Delivery across Ahmedabad and Gandhinagar.";
$current_page = "stores";

include 'includes/interface.php';
include 'includes/header.php';
include 'includes/products-data.php';

// Get selected product details if passed
$selected_id = isset($_GET['id']) ? intval($_GET['id']) : (isset($_GET['product_id']) ? intval($_GET['product_id']) : 1);
$selected_qty = isset($_GET['qty']) ? max(1, intval($_GET['qty'])) : 4;

$selected_product = null;
foreach ($products_db as $p) {
    if ($p['id'] === $selected_id) {
        $selected_product = $p;
        break;
    }
}
if (!$selected_product) {
    $selected_product = $products_db[0];
}

$total_price = $selected_product['price'] * $selected_qty;

// Certified Service Partners Database
$service_partners = [
    [
        'id' => 'motera',
        'name' => 'TyreHub Partner - Motera Store',
        'area' => 'Motera',
        'region' => 'Ahmedabad North',
        'pincode' => '380005',
        'image' => 'assets/image/shop-exterior.jpg',
        'address' => 'Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4 Motera, Ahmedabad',
        'hours' => 'Mon – Sat: 9:30 AM – 8:00 PM | Sun: 9:30 AM – 7:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '184',
        'facilities' => ['3D Laser Alignment', 'Wheel Balancing', 'Nitrogen Gas', 'Free Fitment'],
        'map_link' => 'https://maps.app.goo.gl/EnJzU296MFn96K1RA',
        'detail_link' => 'store-detail.php?store=motera'
    ],
    [
        'id' => 'viratnagar',
        'name' => 'TyreHub Partner - Viratnagar Store',
        'area' => 'Viratnagar',
        'region' => 'Ahmedabad East',
        'pincode' => '382415',
        'image' => 'assets/image/shop-fitment.jpg',
        'address' => '27, Kariya Complex, Viratnagar, Cross Rd, Odhav, Ahmedabad, Gujarat',
        'hours' => 'Mon – Sat: 8:45 AM – 8:15 PM | Sun: 8:45 AM – 2:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.8',
        'reviews' => '142',
        'facilities' => ['Car & Bike Tyres', 'Wheel Balancing', '3D Alignment', 'Free Fitment'],
        'map_link' => 'https://maps.app.goo.gl/75swNNP2rcmibY946',
        'detail_link' => 'store-detail.php?store=viratnagar'
    ],
    [
        'id' => 'ghatlodiya',
        'name' => 'TyreHub Partner - Ghatlodiya Store',
        'area' => 'Ghatlodiya',
        'region' => 'Ahmedabad West',
        'pincode' => '380061',
        'image' => 'assets/image/shop-exterior.jpg',
        'address' => 'GF Vishwas City 2, Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad',
        'hours' => 'Mon – Sat: 9:30 AM – 8:00 PM | Sun: Closed',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '165',
        'facilities' => ['3D Wheel Alignment', 'Nitrogen Inflation', 'Tyre Inspection', 'Free Fitment'],
        'map_link' => 'https://maps.app.goo.gl/kww5qfcbLwdepUpL9',
        'detail_link' => 'store-detail.php?store=ghatlodiya'
    ],
    [
        'id' => 'nikol',
        'name' => 'TyreHub Partner - Nikol Store',
        'area' => 'Nikol',
        'region' => 'Ahmedabad East',
        'pincode' => '382350',
        'image' => 'assets/image/shop-alignment.jpg',
        'address' => 'Shop No. 12-14, Shukan Mall, Nikol Gam Road, Nikol, Ahmedabad',
        'hours' => 'Mon – Sat: 9:00 AM – 8:30 PM | Sun: 9:00 AM – 4:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.8',
        'reviews' => '129',
        'facilities' => ['3D Computer Alignment', 'Dynamic Balancing', 'Nitrogen Gas', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Nikol+Ahmedabad',
        'detail_link' => 'store-detail.php?store=nikol'
    ],
    [
        'id' => 'chandkheda',
        'name' => 'TyreHub Partner - Chandkheda Store',
        'area' => 'Chandkheda',
        'region' => 'Ahmedabad North',
        'pincode' => '382424',
        'image' => 'assets/image/shop-balancing.jpg',
        'address' => 'Ground Floor, Shivam Arcade, Near Visat Circle, Chandkheda, Ahmedabad',
        'hours' => 'Mon – Sat: 9:30 AM – 8:00 PM | Sun: 9:30 AM – 5:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '210',
        'facilities' => ['Wheel Balancing', 'Laser Alignment', 'Tyre Repair', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Chandkheda+Ahmedabad',
        'detail_link' => 'store-detail.php?store=chandkheda'
    ],
    [
        'id' => 'new-ranip',
        'name' => 'TyreHub Partner - New Ranip Store',
        'area' => 'New Ranip',
        'region' => 'Ahmedabad West',
        'pincode' => '382470',
        'image' => 'assets/image/shop-inventory.jpg',
        'address' => 'Shop 5, Ratna Business Hub, Near GST Crossing, New Ranip, Ahmedabad',
        'hours' => 'Mon – Sat: 9:00 AM – 8:00 PM | Sun: 9:00 AM – 2:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.7',
        'reviews' => '98',
        'facilities' => ['3D Alignment', 'Wheel Balancing', 'Quick Fitting', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=New+Ranip+Ahmedabad',
        'detail_link' => 'store-detail.php?store=new-ranip'
    ],
    [
        'id' => 'satellite',
        'name' => 'TyreHub Partner - Satellite Store',
        'area' => 'Satellite',
        'region' => 'Ahmedabad West',
        'pincode' => '380015',
        'image' => 'assets/image/shop-lounge.jpg',
        'address' => 'G-3, Dev Arc Commercial Complex, Iscon Cross Road, SG Highway, Satellite, Ahmedabad',
        'hours' => 'Mon – Sat: 9:30 AM – 8:30 PM | Sun: 10:00 AM – 6:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '312',
        'facilities' => ['Premium Tyre Lounge', '3D Laser Alignment', 'Balancing', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Satellite+Ahmedabad',
        'detail_link' => 'store-detail.php?store=satellite'
    ],
    [
        'id' => 'thakkarnagar',
        'name' => 'TyreHub Partner - Thakkarnagar Store',
        'area' => 'Thakkarnagar',
        'region' => 'Ahmedabad East',
        'pincode' => '382345',
        'image' => 'assets/image/balancing-alignment.webp',
        'address' => 'Near Thakkarnagar Approach, National Highway 8, Naroda Road, Ahmedabad',
        'hours' => 'Mon – Sat: 9:00 AM – 8:00 PM | Sun: 9:00 AM – 3:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.8',
        'reviews' => '115',
        'facilities' => ['3D Alignment', 'Wheel Balancing', 'Nitrogen Gas', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Thakkarnagar+Ahmedabad',
        'detail_link' => 'store-detail.php?store=thakkarnagar'
    ],
    [
        'id' => 'kudasan',
        'name' => 'TyreHub Partner - Kudasan Store',
        'area' => 'Kudasan',
        'region' => 'Gandhinagar',
        'pincode' => '382421',
        'image' => 'assets/image/shop-fitment.jpg',
        'address' => 'Shop 8-9, Pramukh Arcade, Near Infocity, Kudasan, Gandhinagar',
        'hours' => 'Mon – Sat: 9:30 AM – 8:00 PM | Sun: 9:30 AM – 4:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '174',
        'facilities' => ['3D Alignment', 'Wheel Balancing', 'Nitrogen Filling', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Kudasan+Gandhinagar',
        'detail_link' => 'store-detail.php?store=kudasan'
    ],
    [
        'id' => 'gota',
        'name' => 'TyreHub Partner - Gota Store',
        'area' => 'Gota',
        'region' => 'Ahmedabad North-West',
        'pincode' => '382481',
        'image' => 'assets/image/shop-exterior.jpg',
        'address' => 'Shop 102, Shayona Silver, SG Highway, Near Gota Bridge, Gota, Ahmedabad',
        'hours' => 'Mon – Sat: 9:00 AM – 8:30 PM | Sun: 9:30 AM – 6:00 PM',
        'phone' => '1800-123-5510',
        'rating' => '4.9',
        'reviews' => '190',
        'facilities' => ['3D Wheel Alignment', 'High-Speed Balancing', 'Battery Service', 'Free Fitment'],
        'map_link' => 'https://maps.google.com/?q=Gota+Ahmedabad',
        'detail_link' => 'store-detail.php?store=gota'
    ]
];
?>

<?php
// Step 2 in Flow
$checkout_step = 2;
include 'includes/checkout-stepper.php';
?>



<!-- ========================================== -->
<!-- SECTION 2: STORE LISTING WITH PINCODE FILTER-->
<!-- Wireframe: Full-Width Horizontal Cards     -->
<!-- ========================================== -->
<section id="stores-listing-section" class="py-8 bg-white relative scroll-mt-14">
  <div class="container mx-auto px-3 space-y-8">
    <div class="rounded-2xl border border-slate-300/80 shadow-sm relative overflow-hidden">
      
      <!-- Central "OR" Circle Badge Divider (Desktop) -->
      <div class="hidden md:flex absolute inset-y-0 left-1/2 -translate-x-1/2 items-center justify-center pointer-events-none z-10">
        <div class="h-full w-px bg-white/40"></div>
        <div class="absolute w-10 h-10 rounded-full bg-white border-2 border-slate-200 text-brand-blue font-black text-xs flex items-center justify-center shadow-lg">
          OR
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2">
        
        <!-- Left Half: Service Partner (Brand Blue BG) -->
        <div class="bg-brand-blue text-white p-6 sm:p-8 flex flex-col justify-between relative">
          <div>
            <h2 class="text-xl sm:text-2xl font-bold text-white font-sans tracking-tight mb-2">
              Service Partner
            </h2>
            <p class="text-xs sm:text-sm text-blue-100/90 leading-relaxed font-normal">
              Select one of our trusted and certified Service Partner for your selected tyre’s Fitting, Alignment and Balancing.
            </p>
          </div>

          <form id="partner-pincode-form" onsubmit="handlePartnerPincodeSearch(event)" class="pt-5">
            <div class="flex items-center gap-2">
              <input type="text" 
                     id="partner-pincode-input" 
                     maxlength="6" 
                     placeholder="Enter Pincode (e.g. 380005)" 
                     class="flex-1 h-11 px-4 rounded-xl border-0 bg-white text-slate-800 placeholder:text-slate-400 focus:ring-2 focus:ring-brand-yellow outline-none text-xs sm:text-sm font-normal shadow-xs transition">
              <button type="submit" 
                      class="h-11 px-6 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-bold text-xs sm:text-sm transition shrink-0 cursor-pointer shadow-xs active:scale-98">
                Submit
              </button>
            </div>
            <span class="text-[11px] text-blue-200/80 mt-1.5 block">Find certified partner stores near your area</span>
          </form>
        </div>

        <!-- Mobile "OR" Divider -->
        <div class="flex md:hidden items-center justify-center relative py-2 bg-slate-100">
          <div class="w-full h-px bg-slate-300"></div>
          <div class="absolute px-3 bg-white text-brand-blue font-black text-xs border border-slate-300 rounded-full py-0.5 shadow-xs">
            OR
          </div>
        </div>

        <!-- Right Half: Get Free Home Delivery (Brand Yellow BG) -->
        <div class="bg-brand-yellow text-slate-950 p-6 sm:p-8 flex flex-col justify-between relative">
          <div>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-950 font-sans tracking-tight mb-2">
              Get Free Home Delivery
            </h2>
            <p class="text-xs sm:text-sm text-slate-900/90 leading-relaxed font-normal">
              Receive original manufacturer packed tyres directly delivered to your home or office address.
            </p>
          </div>

          <div class="pt-5 space-y-2">
            <div class="flex items-center gap-2">
              <input type="text" 
                     id="delivery-pincode-input" 
                     maxlength="6" 
                     placeholder="Enter pincode" 
                     class="flex-1 h-11 px-4 rounded-xl border-0 bg-white text-slate-800 placeholder:text-slate-400 focus:ring-2 focus:ring-brand-blue outline-none text-xs sm:text-sm font-normal shadow-xs transition">
              <button type="button" 
                      onclick="checkHomeDeliveryPincode()" 
                      class="h-11 px-7 rounded-xl bg-brand-blue hover:bg-slate-900 text-white font-bold text-xs sm:text-sm transition shrink-0 cursor-pointer shadow-xs active:scale-98">
                Check
              </button>
            </div>

            <!-- Live Alert Feedback -->
            <div id="delivery-check-result" class="hidden text-xs p-3 rounded-xl transition-all"></div>

            <!-- Disclaimers -->
            <div class="pt-1 space-y-0.5 text-xs text-slate-900/80 font-medium">
              <p>* Free delivery is available to Ahmedabad and Gandhinagar area only.</p>
              <p>* Home delivery will take within 2-3 working days.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Horizontal Partner Store Cards List (Refined Modern Layout) -->
    <div class="space-y-4" id="service-partner-grid">
      <?php foreach ($service_partners as $sp): ?>
        <div class="service-partner-card bg-white rounded-2xl border border-slate-200/80 hover:border-brand-blue/70 shadow-xs hover:shadow-md transition-all duration-300 overflow-hidden flex flex-col lg:flex-row items-stretch group" 
             data-name="<?= strtolower($sp['id']) ?>" 
             data-area="<?= strtolower($sp['area']) ?>" 
             data-pincode="<?= $sp['pincode'] ?>">
          
          <!-- 1. Left: Store Cover Image with Rating Pill -->
          <div class="lg:w-72 xl:w-80 h-48 lg:h-auto min-h-[160px] relative overflow-hidden bg-slate-100 shrink-0">
            <img src="<?= $sp['image'] ?>" alt="<?= htmlspecialchars($sp['name']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

            <!-- Rating Pill -->
            <div class="absolute bottom-3 left-3 bg-white/95 backdrop-blur-xs text-slate-900 text-xs font-semibold px-2.5 py-1 rounded-lg shadow-xs flex items-center gap-1.5 border border-slate-200/70">
              <span class="text-amber-500 font-semibold"><i class="fa-solid fa-star text-[11px]"></i> <?= $sp['rating'] ?></span>
              <span class="text-slate-400 text-[10px] font-normal">(<?= $sp['reviews'] ?> reviews)</span>
            </div>
          </div>

          <!-- 2. Middle: Store Primary Details & Included Free Services -->
          <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between gap-4">
            <div>
              <!-- Area & Pincode Indicator -->
              <div class="flex items-center gap-1.5 text-xs text-slate-500 font-medium mb-1.5">
                <i class="fa-solid fa-location-dot text-brand-blue text-[11px]"></i>
                <span><?= $sp['area'] ?></span>
                <span class="text-slate-300">•</span>
                <span class="text-slate-600 font-medium">Pincode: <?= $sp['pincode'] ?></span>
              </div>

              <!-- Store Name -->
              <h3 class="text-lg sm:text-xl font-semibold text-slate-900 tracking-tight group-hover:text-brand-blue transition-colors">
                <?= htmlspecialchars($sp['name']) ?>
              </h3>

              <!-- Address -->
              <p class="mt-2 text-xs text-slate-500 leading-relaxed font-normal">
                <?= htmlspecialchars($sp['address']) ?>
              </p>
            </div>

            <!-- Free Services Badges (Feature Bar) -->
            <div class="pt-2 border-t border-slate-100">
              <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider block mb-1.5">Free With Every Tyre:</span>
              <div class="flex flex-wrap gap-1.5">
                <?php foreach ($sp['facilities'] as $fac): ?>
                  <span class="inline-flex items-center gap-1 text-[11px] font-medium bg-emerald-50 text-emerald-800 border border-emerald-200/50 px-2.5 py-0.5 rounded-md">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-[9px]"></i>
                    <?= $fac ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- 3. Right: Timings, Action Button & Map Links -->
          <div class="p-5 sm:p-6 lg:w-64 xl:w-72 bg-slate-50/70 border-t lg:border-t-0 lg:border-l border-slate-100 flex flex-col justify-between gap-4 shrink-0">
            <!-- Timings -->
            <div class="space-y-1 text-xs text-slate-600">
              <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-400 block mb-0.5">Operating Hours</span>
              <div class="flex items-start gap-1.5 text-slate-700 font-normal">
                <i class="fa-regular fa-clock text-amber-500 text-xs mt-0.5 shrink-0"></i>
                <span class="leading-relaxed"><?= htmlspecialchars($sp['hours']) ?></span>
              </div>
            </div>

            <!-- Action Button & Links -->
            <div class="space-y-2 pt-1">
              <button type="button" 
                      onclick="selectPartnerStore('<?= $sp['id'] ?>', '<?= addslashes($sp['name']) ?>', '<?= $sp['pincode'] ?>', this)" 
                      class="partner-select-btn w-full h-11 px-4 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs uppercase tracking-wider transition shadow-2xs hover:shadow-xs flex items-center justify-center gap-2 whitespace-nowrap cursor-pointer active:scale-98">
                <!-- <i class="fa-solid fa-check text-xs"></i> -->
                <span>Choose Installer</span>
              </button>

              <!-- Quick Map and Details Links -->
              <div class="flex items-center justify-between text-[11px] font-medium text-slate-500 pt-1">
                <a href="<?= $sp['map_link'] ?>" target="_blank" class="hover:text-brand-blue flex items-center gap-1 transition">
                  <i class="fa-solid fa-diamond-turn-right text-brand-blue text-[10px]"></i> Directions
                </a>
                <span>•</span>
                <a href="<?= $sp['detail_link'] ?>" class="hover:text-brand-blue flex items-center gap-1 transition">
                  <i class="fa-solid fa-circle-info text-slate-400 text-[10px]"></i> Store Details
                </a>
              </div>
            </div>

          </div>

        </div>
      <?php endforeach; ?>
    </div>

    <!-- No Results State -->
    <div id="no-stores-found" class="hidden text-center py-12 bg-white rounded-2xl border border-slate-200 p-8 space-y-3">
      <div class="w-14 h-14 rounded-full bg-amber-50 text-amber-500 mx-auto flex items-center justify-center text-xl">
        <i class="fa-solid fa-location-slash"></i>
      </div>
      <h3 class="text-base font-bold text-slate-800 font-outfit">No Service Partner Found at this Pincode</h3>
      <p class="text-xs text-slate-500 max-w-md mx-auto">
        We currently have 10 partner centers covering all of Ahmedabad and Gandhinagar. Try checking the surrounding pincodes or choose "All Partners".
      </p>
      <button type="button" onclick="document.getElementById('partner-pincode-input').value=''; filterStoresLive('');" class="btn-primary text-xs font-bold px-5 py-2.5 mt-2">
        Show All 10 Stores
      </button>
    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- CLIENT-SIDE SCRIPT LOGIC                   -->
<!-- ========================================== -->
<script>
// Valid Ahmedabad and Gandhinagar Pincodes
const VALID_AHMEDABAD_PINCODES = [
  '380001', '380002', '380004', '380005', '380006', '380007', '380008', '380009',
  '380013', '380014', '380015', '380016', '380019', '380021', '380022', '380024',
  '380026', '380028', '380050', '380051', '380052', '380054', '380058', '380059',
  '380061', '382345', '382350', '382415', '382421', '382424', '382470', '382481'
];

let selectedStoreData = null;

// 1. Handle Option 1: Service Partner Pincode Search
function handlePartnerPincodeSearch(e) {
  e.preventDefault();
  const input = document.getElementById('partner-pincode-input');
  const pincode = (input.value || '').trim();
  
  if (!pincode) {
    alert('Please enter a valid pincode.');
    input.focus();
    return;
  }

  // Set in live search and filter
  const searchInput = document.getElementById('live-store-search');
  if (searchInput) searchInput.value = pincode;
  filterStoresLive(pincode);

  // Scroll smoothly to Section 2
  const targetSection = document.getElementById('stores-listing-section');
  if (targetSection) {
    targetSection.scrollIntoView({ behavior: 'smooth' });
  }
}

// 2. Handle Option 2: Check Free Home Delivery Pincode
function checkHomeDeliveryPincode() {
  const input = document.getElementById('delivery-pincode-input');
  const resultDiv = document.getElementById('delivery-check-result');
  const pincode = (input.value || '').trim();

  if (!pincode || pincode.length < 6) {
    resultDiv.className = 'flex items-center gap-1.5 text-xs font-semibold text-slate-900 bg-white/80 border border-slate-300/60 px-3 py-2 rounded-xl mt-2';
    resultDiv.innerHTML = '<i class="fa-solid fa-circle-exclamation text-amber-600 text-sm"></i> <span>Please enter a valid 6-digit pincode.</span>';
    resultDiv.classList.remove('hidden');
    return;
  }

  // Check if starts with 380 or 382 (Ahmedabad/Gandhinagar region)
  const isAhmedabadGandhinagar = pincode.startsWith('380') || pincode.startsWith('382');

  if (isAhmedabadGandhinagar) {
    resultDiv.className = 'bg-white/95 backdrop-blur-xs border border-slate-900/10 shadow-xs px-3.5 py-2.5 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-2.5 mt-2';
    resultDiv.innerHTML = `
      <div class="flex items-center gap-2 text-emerald-800 font-bold text-xs sm:text-sm">
        <i class="fa-solid fa-circle-check text-emerald-600 text-base shrink-0"></i>
        <span>Eligible for Free Delivery at <strong>${pincode}</strong>!</span>
      </div>
      <button type="button" 
              onclick="proceedToHomeDeliveryCheckout('${pincode}')" 
              class="h-9 px-4 rounded-xl bg-brand-blue hover:bg-slate-900 text-white font-bold text-xs uppercase tracking-wider transition shadow-2xs hover:shadow-xs flex items-center justify-center gap-1.5 shrink-0 cursor-pointer active:scale-98">
        <span>Free Delivery</span>
        <i class="fa-solid fa-arrow-right text-[10px]"></i>
      </button>
    `;
    resultDiv.classList.remove('hidden');
  } else {
    resultDiv.className = 'bg-white/95 border border-rose-200 text-rose-800 px-3.5 py-2.5 rounded-xl flex items-center gap-2 mt-2 text-xs font-bold';
    resultDiv.innerHTML = `<i class="fa-solid fa-circle-xmark text-rose-600 text-base shrink-0"></i> <span>Free Delivery is not available for pincode <strong>${pincode}</strong>.</span>`;
    resultDiv.classList.remove('hidden');
  }
}

// 3. Filter stores live by text or pincode
function filterStoresLive(query) {
  const cleanQ = (query || '').toLowerCase().trim();
  const cards = document.querySelectorAll('.service-partner-card');
  let visibleCount = 0;

  cards.forEach(card => {
    const area = (card.getAttribute('data-area') || '').toLowerCase();
    const name = (card.getAttribute('data-name') || '').toLowerCase();
    const pin = (card.getAttribute('data-pincode') || '').toLowerCase();
    const text = card.textContent.toLowerCase();

    if (!cleanQ || area.includes(cleanQ) || name.includes(cleanQ) || pin.includes(cleanQ) || text.includes(cleanQ)) {
      card.classList.remove('hidden');
      visibleCount++;
    } else {
      card.classList.add('hidden');
    }
  });

  const indicator = document.getElementById('stores-count-indicator');
  const noFound = document.getElementById('no-stores-found');
  
  if (indicator) {
    indicator.textContent = cleanQ 
      ? `Found ${visibleCount} service partner(s) matching "${cleanQ}"`
      : `Showing all ${cards.length} verified service partner locations`;
  }

  if (noFound) {
    if (visibleCount === 0) {
      noFound.classList.remove('hidden');
    } else {
      noFound.classList.add('hidden');
    }
  }
}

// 4. Filter stores by area pill click
function filterByArea(areaName, btnElem) {
  document.querySelectorAll('.store-filter-pill').forEach(b => {
    b.classList.remove('active', 'bg-brand-blue', 'text-white', 'border-brand-blue');
    b.classList.add('bg-white', 'text-slate-700', 'border-slate-300');
  });

  if (btnElem) {
    btnElem.classList.add('active', 'bg-brand-blue', 'text-white', 'border-brand-blue');
    btnElem.classList.remove('bg-white', 'text-slate-700', 'border-slate-300');
  }

  const searchInput = document.getElementById('live-store-search');
  if (searchInput) searchInput.value = '';

  if (areaName === 'all') {
    filterStoresLive('');
  } else {
    filterStoresLive(areaName);
  }
}

// 5. Select a partner store and proceed to cart (Review Order)
const currentProductId = <?= $selected_id ?>;
const currentQty = <?= $selected_qty ?>;

function selectPartnerStore(storeId, storeName, pincode, btnElem) {
  selectedStoreData = {
    id: storeId,
    name: storeName,
    pincode: pincode
  };

  if (btnElem) {
    btnElem.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-xs"></i> <span>Opening Review Order...</span>';
    btnElem.className = 'partner-select-btn w-full h-11 px-4 rounded-xl bg-brand-blue text-white font-semibold text-xs uppercase tracking-wider transition shadow-md flex items-center justify-center gap-2 whitespace-nowrap';
  }

  // Navigate directly to cart.php (Review Order tab)
  window.location.href = `cart.php?id=${currentProductId}&qty=${currentQty}&installer=${encodeURIComponent(storeId)}`;
}

function proceedToHomeDeliveryCheckout(pincode) {
  // Navigate directly to cart.php (Review Order tab) with home delivery
  window.location.href = `cart.php?id=${currentProductId}&qty=${currentQty}&delivery=home&pincode=${encodeURIComponent(pincode)}`;
}
</script>

<?php
include 'includes/footer.php';
?>
