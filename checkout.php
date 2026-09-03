<?php
$page_title = 'Check Out & Pay | TyreHub';
$page_description = 'Complete your order for genuine tyres with free fitting and warranty.';
$current_page = 'cart';
include 'includes/interface.php';
include 'includes/header.php';

// ==========================================
// 1. DATA SOURCE (Matches Product Catalog)
// ==========================================
$products = [
    1 => [
        'id' => 1,
        'brand' => 'Goodyear',
        'model' => 'Ducaro Hi-Miler Tubeless',
        'size' => '145/80 R12',
        'price' => 3120,
        'image' => 'assets/image/product.png',
        'warranty' => '5 Years Manufacturer Warranty',
        'fuel' => 'C',
        'wet' => 'B',
        'noise' => '69dB'
    ],
    2 => [
        'id' => 2,
        'brand' => 'Apollo',
        'model' => 'Amazer 4G Life',
        'size' => '165/70 R14',
        'price' => 3850,
        'image' => 'assets/image/product-1.png',
        'warranty' => '5 Years Standard Warranty',
        'fuel' => 'C',
        'wet' => 'C',
        'noise' => '70dB'
    ],
    3 => [
        'id' => 3,
        'brand' => 'Bridgestone',
        'model' => 'B290',
        'size' => '185/65 R15',
        'price' => 5450,
        'image' => 'assets/image/product.png',
        'warranty' => '5 Years Replacement Warranty',
        'fuel' => 'B',
        'wet' => 'B',
        'noise' => '68dB'
    ],
    4 => [
        'id' => 4,
        'brand' => 'CEAT',
        'model' => 'Milaze X3',
        'size' => '155/80 R13',
        'price' => 3290,
        'image' => 'assets/image/product-1.png',
        'warranty' => '5 Years Standard Warranty',
        'fuel' => 'C',
        'wet' => 'B',
        'noise' => '71dB'
    ]
];

// Service Partners
$service_partners = [
    'motera' => [
        'id' => 'motera',
        'name' => 'TyreHub Partner - Motera Store',
        'area' => 'Motera',
        'pincode' => '380005',
        'address' => 'Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4 Motera, Ahmedabad',
        'services' => [
            ['id' => 'car_wash', 'name' => 'Car Wash', 'icon' => 'fa-solid fa-soap', 'price' => 399],
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499],
            ['id' => 'flat_tyre', 'name' => 'Car Flat Tyre / Jump Start', 'icon' => 'fa-solid fa-bolt', 'price' => 299]
        ]
    ],
    'viratnagar' => [
        'id' => 'viratnagar',
        'name' => 'TyreHub Partner - Viratnagar Store',
        'area' => 'Viratnagar',
        'pincode' => '382415',
        'address' => '27, Kariya Complex, Viratnagar, Cross Rd, Odhav, Ahmedabad',
        'services' => [
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499],
            ['id' => 'flat_tyre', 'name' => 'Car Flat Tyre / Jump Start', 'icon' => 'fa-solid fa-bolt', 'price' => 299],
            ['id' => 'car_wash', 'name' => 'Car Wash', 'icon' => 'fa-solid fa-soap', 'price' => 399]
        ]
    ],
    'ghatlodiya' => [
        'id' => 'ghatlodiya',
        'name' => 'TyreHub Partner - Ghatlodiya Store',
        'area' => 'Ghatlodiya',
        'pincode' => '380061',
        'address' => 'GF Vishwas City 2, Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad',
        'services' => [
            ['id' => 'car_wash', 'name' => 'Car Wash', 'icon' => 'fa-solid fa-soap', 'price' => 399],
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499]
        ]
    ],
    'nikol' => [
        'id' => 'nikol',
        'name' => 'TyreHub Partner - Nikol Store',
        'area' => 'Nikol',
        'pincode' => '382350',
        'address' => 'Shop 12-14, Shukan Mall, Nikol Gam Road, Nikol, Ahmedabad',
        'services' => [
            ['id' => 'car_wash', 'name' => 'Car Wash', 'icon' => 'fa-solid fa-soap', 'price' => 399],
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499],
            ['id' => 'flat_tyre', 'name' => 'Car Flat Tyre / Jump Start', 'icon' => 'fa-solid fa-bolt', 'price' => 299]
        ]
    ],
    'chandkheda' => [
        'id' => 'chandkheda',
        'name' => 'TyreHub Partner - Chandkheda Store',
        'area' => 'Chandkheda',
        'pincode' => '382424',
        'address' => 'Opp. Satyamev Hospital, New CG Road, Chandkheda, Ahmedabad',
        'services' => [
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499],
            ['id' => 'flat_tyre', 'name' => 'Car Flat Tyre / Jump Start', 'icon' => 'fa-solid fa-bolt', 'price' => 299]
        ]
    ],
    'gota' => [
        'id' => 'gota',
        'name' => 'TyreHub Partner - Gota Store',
        'area' => 'Gota',
        'pincode' => '382481',
        'address' => 'Shop 5-7, Silver Radiance, Near Vandemataram Cross Road, Gota, Ahmedabad',
        'services' => [
            ['id' => 'car_wash', 'name' => 'Car Wash', 'icon' => 'fa-solid fa-soap', 'price' => 399],
            ['id' => 'alignment', 'name' => 'Alignment & Balancing', 'icon' => 'fa-solid fa-arrows-split-up-and-left', 'price' => 499],
            ['id' => 'flat_tyre', 'name' => 'Car Flat Tyre / Jump Start', 'icon' => 'fa-solid fa-bolt', 'price' => 299]
        ]
    ]
];

// Available Services Map for quick lookup
$all_services_map = [
    'car_wash' => ['name' => 'Car Wash', 'price' => 399],
    'alignment' => ['name' => 'Alignment & Balancing', 'price' => 499],
    'flat_tyre' => ['name' => 'Car Flat Tyre / Jump Start', 'price' => 299]
];

// ==========================================
// 2. PARSE QUERY PARAMETERS
// ==========================================
$selected_id = isset($_GET['id']) && isset($products[(int)$_GET['id']]) ? (int)$_GET['id'] : 1;
$selected_product = $products[$selected_id];

$selected_qty = isset($_GET['qty']) ? max(1, min(8, (int)$_GET['qty'])) : 4;
$unit_price = $selected_product['price'];
$tyre_subtotal = $unit_price * $selected_qty;

$is_home_delivery = isset($_GET['delivery']) && $_GET['delivery'] == '1';
$delivery_pincode = isset($_GET['pincode']) ? trim($_GET['pincode']) : '380005';

$installer_key = isset($_GET['installer']) && isset($service_partners[$_GET['installer']]) ? $_GET['installer'] : 'motera';
$selected_installer = $service_partners[$installer_key];

// Parse passed services
$passed_service_keys = !empty($_GET['services']) ? explode(',', trim($_GET['services'])) : [];
$initial_services = [];
$services_total = 0;
foreach ($passed_service_keys as $s_key) {
    $s_key = trim($s_key);
    if (isset($all_services_map[$s_key])) {
        $initial_services[$s_key] = $all_services_map[$s_key];
        $services_total += $all_services_map[$s_key]['price'];
    }
}

// Parse passed coupon
$passed_coupon = !empty($_GET['coupon']) ? trim(strtoupper($_GET['coupon'])) : '';
$coupon_discount = 0;
if ($passed_coupon === 'TYRE100') {
    $coupon_discount = 100;
} elseif ($passed_coupon === 'SAVE500') {
    $coupon_discount = ($tyre_subtotal >= 10000) ? 500 : 0;
} elseif ($passed_coupon === 'TYREHUB10') {
    $coupon_discount = (int)round($tyre_subtotal * 0.10);
} elseif ($passed_coupon === 'FIRSTBUY') {
    $coupon_discount = 250;
} elseif (!empty($passed_coupon)) {
    $coupon_discount = 150;
}

$initial_grand_total = max(0, $tyre_subtotal + $services_total - $coupon_discount);

// Back to Cart URL
$cart_back_url = "cart.php?id={$selected_id}&qty={$selected_qty}";
if ($is_home_delivery) {
    $cart_back_url .= "&delivery=1&pincode=" . urlencode($delivery_pincode);
} else {
    $cart_back_url .= "&installer=" . urlencode($installer_key);
}
?>

<!-- ========================================== -->
<!-- UNIFIED 5-STEP CHECKOUT PROGRESS BAR       -->
<!-- ========================================== -->
<?php 
$checkout_step = 4;
include 'includes/checkout-stepper.php'; 
?>

<!-- ========================================== -->
<!-- MAIN CHECKOUT SECTION                      -->
<!-- ========================================== -->
<section class="py-6 sm:py-8 bg-slate-50/50 min-h-[70vh]">
  <div class="container mx-auto px-3">

    <!-- Header & Back Navigation -->
    <div class="flex items-center justify-between gap-4 mb-6">
      <div>
        <h1 class="text-2xl sm:text-3xl font-semibold text-brand-blue tracking-tight">
          Check Out &amp; Pay
        </h1>
        <p class="text-xs sm:text-sm text-slate-500 mt-1 font-normal">
          Enter your details and select your preferred payment method to confirm your booking.
        </p>
      </div>
      <a href="<?= htmlspecialchars($cart_back_url) ?>" 
         class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-600 hover:text-brand-blue transition shrink-0">
        <i class="fa-solid fa-arrow-left text-[11px]"></i>
        <span>Back to Order</span>
      </a>
    </div>

    <!-- 12-Column Responsive Layout -->
    <form id="checkout-form" onsubmit="handleCheckoutSubmit(event)">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

        <!-- LEFT COLUMN: CUSTOMER DETAILS & PAYMENT (7 COLS) -->
        <div class="lg:col-span-7 space-y-6">

          <!-- CARD 1: CUSTOMER & VEHICLE DETAILS -->
          <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs">
            <div class="flex items-center justify-between pb-3.5 mb-5 border-b border-slate-100">
              <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xs font-semibold">1</span>
                <h2 class="text-sm sm:text-base font-semibold text-slate-900">
                  Customer &amp; Vehicle Details
                </h2>
              </div>
            </div>

            <div class="space-y-4 text-xs">
              <!-- Name & Phone -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="cust-name" class="block font-medium text-slate-700 mb-1.5">
                    Full Name *
                  </label>
                  <input type="text" 
                         id="cust-name" 
                         name="cust_name" 
                         required 
                         placeholder="e.g. Rahul Sharma" 
                         class="w-full h-10 px-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-medium text-slate-800 placeholder:text-slate-400 placeholder:font-normal focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition">
                </div>

                <div>
                  <label for="cust-phone" class="block font-medium text-slate-700 mb-1.5">
                    Mobile Number *
                  </label>
                  <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-xs font-semibold text-slate-500 select-none">+91</span>
                    <input type="tel" 
                           id="cust-phone" 
                           name="cust_phone" 
                           required 
                           maxlength="10" 
                           pattern="[0-9]{10}" 
                           placeholder="98765 43210" 
                           class="w-full h-10 pl-12 pr-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-medium text-slate-800 placeholder:text-slate-400 placeholder:font-normal focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition">
                  </div>
                </div>
              </div>

              <!-- Email & Vehicle Number -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="cust-email" class="block font-medium text-slate-700 mb-1.5">
                    Email Address *
                  </label>
                  <input type="email" 
                         id="cust-email" 
                         name="cust_email" 
                         required 
                         placeholder="rahul@example.com" 
                         class="w-full h-10 px-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-medium text-slate-800 placeholder:text-slate-400 placeholder:font-normal focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition">
                </div>

                <div>
                  <label for="cust-vehicle" class="block font-medium text-slate-700 mb-1.5">
                    Vehicle Number <span class="text-slate-400 font-normal">(Optional)</span>
                  </label>
                  <input type="text" 
                         id="cust-vehicle" 
                         name="cust_vehicle" 
                         placeholder="e.g. GJ 01 AB 1234" 
                         class="w-full h-10 px-3.5 uppercase rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-semibold text-slate-800 placeholder:text-slate-400 placeholder:font-normal placeholder:normal-case focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition">
                </div>
              </div>

              <!-- Appointment Date & Slot Selector -->
              <div class="pt-3 border-t border-slate-100">
                <label class="block font-medium text-slate-700 mb-2">
                  Preferred <?= $is_home_delivery ? 'Delivery' : 'Fitment' ?> Appointment *
                </label>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                  <!-- Date Picker -->
                  <div>
                    <label for="pref-date" class="block text-[11px] font-normal text-slate-500 mb-1">Select Date:</label>
                    <div class="relative">
                      <input type="date" 
                             id="pref-date" 
                             name="pref_date" 
                             required 
                             min="<?= date('Y-m-d') ?>" 
                             value="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                             class="w-full h-10 px-3.5 rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-medium text-slate-800 focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition cursor-pointer">
                    </div>
                  </div>

                  <!-- Slot Selector -->
                  <div>
                    <label for="pref-slot" class="block text-[11px] font-normal text-slate-500 mb-1">Select Time Slot:</label>
                    <div class="relative">
                      <select id="pref-slot" 
                              name="pref_slot" 
                              required 
                              class="w-full h-10 pl-3.5 pr-8 rounded-xl border border-slate-200 bg-slate-50/50 text-xs font-medium text-slate-800 focus:bg-white focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/20 outline-none transition cursor-pointer appearance-none">
                        <option value="morning">Morning (10:00 AM - 01:00 PM)</option>
                        <option value="afternoon" selected>Afternoon (02:00 PM - 05:00 PM)</option>
                        <option value="evening">Evening (05:00 PM - 08:00 PM)</option>
                      </select>
                      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- CARD 2: PAYMENT METHOD SELECTION -->
          <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs">
            <div class="flex items-center justify-between pb-3.5 mb-5 border-b border-slate-100">
              <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xs font-semibold">2</span>
                <h2 class="text-sm sm:text-base font-semibold text-slate-900">
                  Select Payment Method
                </h2>
              </div>
              <span class="text-[11px] text-emerald-600 font-medium flex items-center gap-1">
                <i class="fa-solid fa-shield-halved text-[10px]"></i>
                <span>100% Secure</span>
              </span>
            </div>

            <!-- Payment Options Radio Cards -->
            <div class="space-y-3 text-xs">
              
              <!-- OPTION 1: PAY AT STORE ON FITMENT (RECOMMENDED) -->
              <label class="payment-card-option flex items-start gap-3.5 p-3.5 rounded-xl border border-brand-blue bg-blue-50/40 cursor-pointer transition relative">
                <input type="radio" 
                       name="payment_method" 
                       value="store_pay" 
                       checked 
                       onchange="updatePaymentMethodSelection(this)" 
                       class="mt-0.5 text-brand-blue focus:ring-brand-blue cursor-pointer">
                <div class="flex-1 min-w-0">
                  <div class="flex items-center justify-between gap-2 flex-wrap">
                    <span class="font-semibold text-slate-900 flex items-center gap-1.5">
                      <span>Pay at Store on Fitment</span>
                      <span class="text-[10px] font-semibold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded">Recommended</span>
                    </span>
                    <span class="text-slate-400 text-[11px] font-normal">Cash / UPI / Card</span>
                  </div>
                  <p class="text-slate-500 font-normal mt-0.5 text-[11px] leading-relaxed">
                    No advance payment required. Inspect your tyres, get free fitment done, and pay easily at the store.
                  </p>
                </div>
              </label>

              <!-- OPTION 2: INSTANT UPI (GPAY / PHONEPE / PAYTM) -->
              <label class="payment-card-option flex items-start gap-3.5 p-3.5 rounded-xl border border-slate-200 hover:border-slate-300 bg-white cursor-pointer transition relative">
                <input type="radio" 
                       name="payment_method" 
                       value="upi" 
                       onchange="updatePaymentMethodSelection(this)" 
                       class="mt-0.5 text-brand-blue focus:ring-brand-blue cursor-pointer">
                <div class="flex-1 min-w-0">
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-semibold text-slate-900">UPI (Google Pay, PhonePe, Paytm)</span>
                    <span class="flex items-center gap-1 text-slate-400 text-xs">
                      <i class="fa-brands fa-google-pay text-base"></i>
                    </span>
                  </div>
                  <p class="text-slate-500 font-normal mt-0.5 text-[11px]">
                    Instant payment using your preferred UPI app with zero transaction fee.
                  </p>
                </div>
              </label>

              <!-- OPTION 3: CREDIT / DEBIT CARDS -->
              <label class="payment-card-option flex items-start gap-3.5 p-3.5 rounded-xl border border-slate-200 hover:border-slate-300 bg-white cursor-pointer transition relative">
                <input type="radio" 
                       name="payment_method" 
                       value="card" 
                       onchange="updatePaymentMethodSelection(this)" 
                       class="mt-0.5 text-brand-blue focus:ring-brand-blue cursor-pointer">
                <div class="flex-1 min-w-0">
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-semibold text-slate-900">Credit / Debit Card</span>
                    <span class="flex items-center gap-1.5 text-slate-400 text-xs">
                      <i class="fa-brands fa-cc-visa text-base"></i>
                      <i class="fa-brands fa-cc-mastercard text-base"></i>
                    </span>
                  </div>
                  <p class="text-slate-500 font-normal mt-0.5 text-[11px]">
                    Supports all Visa, MasterCard, RuPay, and Maestro cards.
                  </p>
                </div>
              </label>

              <!-- OPTION 4: NET BANKING -->
              <label class="payment-card-option flex items-start gap-3.5 p-3.5 rounded-xl border border-slate-200 hover:border-slate-300 bg-white cursor-pointer transition relative">
                <input type="radio" 
                       name="payment_method" 
                       value="netbanking" 
                       onchange="updatePaymentMethodSelection(this)" 
                       class="mt-0.5 text-brand-blue focus:ring-brand-blue cursor-pointer">
                <div class="flex-1 min-w-0">
                  <div class="flex items-center justify-between gap-2">
                    <span class="font-semibold text-slate-900">Net Banking</span>
                    <span class="text-slate-400 text-[11px]">All Major Indian Banks</span>
                  </div>
                  <p class="text-slate-500 font-normal mt-0.5 text-[11px]">
                    Pay securely via SBI, HDFC, ICICI, Axis, Kotak, and 50+ banks.
                  </p>
                </div>
              </label>

            </div>

            <!-- Security Assurance Note -->
            <div class="mt-4 pt-3.5 border-t border-slate-100 flex items-center gap-2 text-[11px] text-slate-500">
              <i class="fa-solid fa-lock text-slate-400"></i>
              <span>256-Bit Bank-Grade SSL Encryption. Your payment information is 100% secure.</span>
            </div>

          </div>

        </div>

        <!-- RIGHT COLUMN: ORDER SUMMARY (5 COLS) -->
        <div class="lg:col-span-5">
          <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs space-y-4 lg:sticky lg:top-24">
            
            <h2 class="text-base font-semibold text-slate-900 pb-3 border-b border-slate-100 flex items-center justify-between">
              <span>Order Summary</span>
              <span class="text-xs font-normal text-slate-400">Step 4 of 5</span>
            </h2>

            <!-- Item Mini Card -->
            <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-100 flex items-center gap-3">
              <div class="w-14 h-14 rounded-lg bg-white border border-slate-200/80 p-1 flex items-center justify-center shrink-0">
                <img src="<?= htmlspecialchars($selected_product['image']) ?>" 
                     alt="<?= htmlspecialchars($selected_product['model']) ?>" 
                     class="max-w-full max-h-full object-contain"
                     onerror="this.src='assets/images/tyres/goodyear-ducaro-hi-miler.png'">
              </div>
              <div class="flex-1 min-w-0">
                <span class="text-[10px] font-semibold text-brand-blue uppercase tracking-wider block">
                  <?= htmlspecialchars($selected_product['brand']) ?>
                </span>
                <h3 class="text-xs font-semibold text-slate-900 truncate">
                  <?= htmlspecialchars($selected_product['model']) ?>
                </h3>
                <div class="flex items-center justify-between text-[11px] text-slate-500 mt-1">
                  <span>Size: <?= htmlspecialchars($selected_product['size']) ?></span>
                  <span class="font-medium text-slate-700">Qty: <?= $selected_qty ?></span>
                </div>
              </div>
            </div>

            <!-- Fitting Location / Delivery Mini Badge -->
            <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-100 text-xs">
              <div class="flex items-start gap-2.5">
                <div class="w-6 h-6 rounded-lg bg-blue-50 text-brand-blue flex items-center justify-center text-xs shrink-0 mt-0.5">
                  <i class="fa-solid <?= $is_home_delivery ? 'fa-truck' : 'fa-location-dot' ?>"></i>
                </div>
                <div class="flex-1 min-w-0">
                  <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">
                    <?= $is_home_delivery ? 'Delivery Location' : 'Fitting Partner Store' ?>
                  </span>
                  <h4 class="text-xs font-semibold text-slate-800 truncate">
                    <?= $is_home_delivery ? 'Home Delivery (Pincode: ' . htmlspecialchars($delivery_pincode) . ')' : htmlspecialchars($selected_installer['name']) ?>
                  </h4>
                  <p class="text-[11px] text-slate-500 line-clamp-1 mt-0.5">
                    <?= $is_home_delivery ? 'Doorstep contactless delivery in Ahmedabad & Gandhinagar' : htmlspecialchars($selected_installer['address']) ?>
                  </p>
                </div>
              </div>
            </div>

            <!-- Total Row -->
            <div class="pt-3 border-t border-slate-200 flex items-baseline justify-between">
              <div>
                <span class="text-sm font-semibold text-slate-800 block">Total Payable</span>
                <span class="text-[11px] text-slate-400 font-normal">Inclusive of all taxes</span>
              </div>
              <span id="checkout-grand-total" class="text-xl sm:text-2xl font-semibold text-brand-blue">
                ₹<?= number_format($initial_grand_total) ?>
              </span>
            </div>

            <!-- Confirm & Pay CTA -->
            <div class="pt-2">
              <button type="submit" 
                      id="place-order-btn"
                      class="w-full h-12 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider transition shadow-sm hover:shadow-md flex items-center justify-center gap-2 cursor-pointer active:scale-98">
                <span id="btn-text">Confirm &amp; Book Appointment</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
              </button>
              <p class="text-[11px] text-slate-400 text-center mt-2.5 font-normal flex items-center justify-center gap-1.5">
                <i class="fa-solid fa-check text-emerald-500"></i>
                <span>100% Genuine Tyres with Official Warranty</span>
              </p>
            </div>

          </div>
        </div>

      </div>
    </form>

  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT: CHECKOUT PAGE LOGIC            -->
<!-- ========================================== -->
<script>
const baseTyreTotal = <?= $tyre_subtotal ?>;
let servicesTotal = <?= $services_total ?>;
let couponDiscount = <?= $coupon_discount ?>;
let currentCouponCode = "<?= addslashes($passed_coupon) ?>";

function formatRupee(amount) {
  return amount.toLocaleString('en-IN');
}

// Payment Option Selection UI update
function updatePaymentMethodSelection(radioElem) {
  document.querySelectorAll('.payment-card-option').forEach(card => {
    card.classList.remove('border-brand-blue', 'bg-blue-50/40');
    card.classList.add('border-slate-200', 'bg-white');
  });

  const activeCard = radioElem.closest('.payment-card-option');
  if (activeCard) {
    activeCard.classList.remove('border-slate-200', 'bg-white');
    activeCard.classList.add('border-brand-blue', 'bg-blue-50/40');
  }

  // Update CTA button label based on payment method
  const btnText = document.getElementById('btn-text');
  if (radioElem.value === 'store_pay') {
    btnText.textContent = 'Confirm & Book Appointment';
  } else {
    btnText.textContent = `Pay ₹${formatRupee(calculateGrandTotal())} & Place Order`;
  }
}

function calculateGrandTotal() {
  return Math.max(0, baseTyreTotal + servicesTotal - couponDiscount);
}

function updateGrandTotalDisplay() {
  const total = calculateGrandTotal();
  document.getElementById('checkout-grand-total').textContent = `₹${formatRupee(total)}`;

  // Update button text if online
  const selectedPayment = document.querySelector('input[name="payment_method"]:checked')?.value;
  const btnText = document.getElementById('btn-text');
  if (selectedPayment && selectedPayment !== 'store_pay') {
    btnText.textContent = `Pay ₹${formatRupee(total)} & Place Order`;
  }
}

// Form Submission & Redirect to Step 5 (Order Placed Page)
function handleCheckoutSubmit(e) {
  e.preventDefault();

  const form = document.getElementById('checkout-form');
  if (!form.checkValidity()) {
    form.reportValidity();
    return;
  }

  const btn = document.getElementById('place-order-btn');
  btn.disabled = true;
  btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-sm"></i> <span>Processing Booking...</span>';

  // Gather Form Values
  const name = document.getElementById('cust-name').value;
  const phone = document.getElementById('cust-phone').value;
  const email = document.getElementById('cust-email').value;
  const vehicle = document.getElementById('cust-vehicle').value;
  const date = document.getElementById('pref-date').value;
  const slot = document.getElementById('pref-slot').value;
  const payment = document.querySelector('input[name="payment_method"]:checked')?.value || 'store_pay';

  const bookingId = 'TH-' + Math.floor(100000 + Math.random() * 900000);
  const total = calculateGrandTotal();

  // Navigate to Step 5: Order Placed Page
  const url = new URL('order-placed.php', window.location.href);
  url.searchParams.set('booking_id', bookingId);
  url.searchParams.set('id', '<?= $selected_id ?>');
  url.searchParams.set('qty', '<?= $selected_qty ?>');
  <?php if ($is_home_delivery): ?>
    url.searchParams.set('delivery', '1');
    url.searchParams.set('pincode', '<?= htmlspecialchars($delivery_pincode) ?>');
  <?php else: ?>
    url.searchParams.set('installer', '<?= htmlspecialchars($installer_key) ?>');
  <?php endif; ?>
  <?php if (!empty($passed_service_keys)): ?>
    url.searchParams.set('services', '<?= htmlspecialchars(implode(',', $passed_service_keys)) ?>');
  <?php endif; ?>
  url.searchParams.set('name', name);
  url.searchParams.set('phone', phone);
  url.searchParams.set('email', email);
  if (vehicle) url.searchParams.set('vehicle', vehicle);
  url.searchParams.set('date', date);
  url.searchParams.set('slot', slot);
  url.searchParams.set('payment', payment);
  url.searchParams.set('total', total);

  window.location.href = url.toString();
}
</script>

<?php
include 'includes/footer.php';
?>
