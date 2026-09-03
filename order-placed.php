<?php
$page_title = 'Order Placed | TyreHub';
$page_description = 'Your tyre order and fitting appointment have been successfully confirmed.';
$current_page = 'cart';
include 'includes/interface.php';
include 'includes/header.php';

// ==========================================
// 1. DATA SOURCE
// ==========================================
$products = [
    1 => [
        'id' => 1,
        'brand' => 'Goodyear',
        'model' => 'Ducaro Hi-Miler Tubeless',
        'size' => '145/80 R12',
        'price' => 3120,
        'image' => 'assets/image/product.png'
    ],
    2 => [
        'id' => 2,
        'brand' => 'Apollo',
        'model' => 'Amazer 4G Life',
        'size' => '165/70 R14',
        'price' => 3850,
        'image' => 'assets/image/product-1.png'
    ],
    3 => [
        'id' => 3,
        'brand' => 'Bridgestone',
        'model' => 'B290',
        'size' => '185/65 R15',
        'price' => 5450,
        'image' => 'assets/image/product.png'
    ],
    4 => [
        'id' => 4,
        'brand' => 'CEAT',
        'model' => 'Milaze X3',
        'size' => '155/80 R13',
        'price' => 3290,
        'image' => 'assets/image/product-1.png'
    ]
];

$service_partners = [
    'motera' => [
        'id' => 'motera',
        'name' => 'TyreHub Partner - Motera Store',
        'area' => 'Motera',
        'pincode' => '380005',
        'phone' => '+91 98765 12345',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4 Motera, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Motera+Ahmedabad'
    ],
    'viratnagar' => [
        'id' => 'viratnagar',
        'name' => 'TyreHub Partner - Viratnagar Store',
        'area' => 'Viratnagar',
        'pincode' => '382415',
        'phone' => '+91 98765 23456',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => '27, Kariya Complex, Viratnagar, Cross Rd, Odhav, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Viratnagar+Ahmedabad'
    ],
    'ghatlodiya' => [
        'id' => 'ghatlodiya',
        'name' => 'TyreHub Partner - Ghatlodiya Store',
        'area' => 'Ghatlodiya',
        'pincode' => '380061',
        'phone' => '+91 98765 34567',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'GF Vishwas City 2, Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Ghatlodiya+Ahmedabad'
    ],
    'nikol' => [
        'id' => 'nikol',
        'name' => 'TyreHub Partner - Nikol Store',
        'area' => 'Nikol',
        'pincode' => '382350',
        'phone' => '+91 98765 45678',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Shop 12-14, Shukan Mall, Nikol Gam Road, Nikol, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Nikol+Ahmedabad'
    ],
    'chandkheda' => [
        'id' => 'chandkheda',
        'name' => 'TyreHub Partner - Chandkheda Store',
        'area' => 'Chandkheda',
        'pincode' => '382424',
        'phone' => '+91 98765 56789',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Opp. Satyamev Hospital, New CG Road, Chandkheda, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Chandkheda+Ahmedabad'
    ],
    'gota' => [
        'id' => 'gota',
        'name' => 'TyreHub Partner - Gota Store',
        'area' => 'Gota',
        'pincode' => '382481',
        'phone' => '+91 98765 67890',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Shop 5-7, Silver Radiance, Near Vandemataram Cross Road, Gota, Ahmedabad',
        'map_link' => 'https://maps.google.com/?q=TyreHub+Gota+Ahmedabad'
    ]
];

$all_services_map = [
    'car_wash' => ['name' => 'Car Wash', 'price' => 399],
    'alignment' => ['name' => 'Alignment & Balancing', 'price' => 499],
    'flat_tyre' => ['name' => 'Car Flat Tyre / Jump Start', 'price' => 299]
];

// ==========================================
// 2. PARSE ORDER DETAILS
// ==========================================
$booking_id = isset($_GET['booking_id']) ? htmlspecialchars(trim($_GET['booking_id'])) : 'TH-' . rand(100000, 999999);
$selected_id = isset($_GET['id']) && isset($products[(int)$_GET['id']]) ? (int)$_GET['id'] : 1;
$selected_product = $products[$selected_id];
$selected_qty = isset($_GET['qty']) ? max(1, min(8, (int)$_GET['qty'])) : 4;
$tyre_subtotal = $selected_product['price'] * $selected_qty;

$is_home_delivery = isset($_GET['delivery']) && $_GET['delivery'] == '1';
$delivery_pincode = isset($_GET['pincode']) ? htmlspecialchars(trim($_GET['pincode'])) : '380005';
$installer_key = isset($_GET['installer']) && isset($service_partners[$_GET['installer']]) ? $_GET['installer'] : 'motera';
$selected_installer = $service_partners[$installer_key];

// Customer Details
$cust_name = !empty($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Customer';
$cust_phone = !empty($_GET['phone']) ? htmlspecialchars(trim($_GET['phone'])) : '+91 98765 43210';
$cust_email = !empty($_GET['email']) ? htmlspecialchars(trim($_GET['email'])) : 'customer@example.com';
$cust_vehicle = !empty($_GET['vehicle']) ? htmlspecialchars(trim($_GET['vehicle'])) : 'GJ 01 AB 1234';

// Appointment Slot
$raw_date = !empty($_GET['date']) ? $_GET['date'] : date('Y-m-d', strtotime('+1 day'));
$pref_date = date('D, d M Y', strtotime($raw_date));
$pref_slot = !empty($_GET['slot']) ? ucfirst($_GET['slot']) : 'Afternoon (02:00 PM - 05:00 PM)';
if ($pref_slot === 'Morning') $pref_slot = 'Morning (10:00 AM - 01:00 PM)';
if ($pref_slot === 'Afternoon') $pref_slot = 'Afternoon (02:00 PM - 05:00 PM)';
if ($pref_slot === 'Evening') $pref_slot = 'Evening (05:00 PM - 08:00 PM)';

// Payment Method
$payment_method = isset($_GET['payment']) ? trim($_GET['payment']) : 'store_pay';
$payment_title = 'Pay at Store on Fitment';
$payment_status_badge = 'Pay on Fitment';
$payment_status_pill_class = 'bg-slate-100 text-slate-700';
if ($payment_method === 'upi') {
    $payment_title = 'UPI (Google Pay / PhonePe / Paytm)';
    $payment_status_badge = 'Paid Online (UPI)';
    $payment_status_pill_class = 'bg-emerald-50 text-emerald-700 border border-emerald-200';
} elseif ($payment_method === 'card') {
    $payment_title = 'Credit / Debit Card';
    $payment_status_badge = 'Paid Online (Card)';
    $payment_status_pill_class = 'bg-emerald-50 text-emerald-700 border border-emerald-200';
} elseif ($payment_method === 'netbanking') {
    $payment_title = 'Net Banking';
    $payment_status_badge = 'Paid Online (NetBanking)';
    $payment_status_pill_class = 'bg-emerald-50 text-emerald-700 border border-emerald-200';
}

// Services
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

// Total
$grand_total = isset($_GET['total']) ? (int)$_GET['total'] : ($tyre_subtotal + $services_total);
if ($grand_total <= 0) $grand_total = $tyre_subtotal + $services_total;

// Google Calendar URL
$cal_start = date('Ymd', strtotime($raw_date)) . 'T100000Z';
$cal_end = date('Ymd', strtotime($raw_date)) . 'T130000Z';
$cal_title = urlencode("TyreHub Tyre Fitting - {$selected_product['brand']} ({$selected_qty} Tyres)");
$cal_details = urlencode("Booking ID: {$booking_id}\nStore: {$selected_installer['name']}\nAddress: {$selected_installer['address']}\nPhone: {$selected_installer['phone']}");
$cal_location = urlencode($selected_installer['address']);
$google_cal_url = "https://calendar.google.com/calendar/render?action=TEMPLATE&text={$cal_title}&dates={$cal_start}/{$cal_end}&details={$cal_details}&location={$cal_location}";
?>

<!-- ========================================== -->
<!-- UNIFIED 5-STEP CHECKOUT PROGRESS BAR       -->
<!-- ========================================== -->
<?php 
$checkout_step = 5;
include 'includes/checkout-stepper.php'; 
?>

<!-- ========================================== -->
<!-- TYREHUB NATIVE THEME: ORDER PLACED PAGE    -->
<!-- ========================================== -->
<section class="py-6 sm:py-8 bg-slate-50/50 min-h-[75vh]">
  <div class="container mx-auto px-3">

    <!-- 1. TYREHUB NATIVE HEADER BLOCK -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
      <div>
        <div class="flex items-center gap-2 mb-1.5 flex-wrap">
          <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-xs font-medium border border-emerald-200">
            <i class="fa-solid fa-circle-check text-[11px] text-emerald-600"></i>
            <span>Booking Confirmed</span>
          </span>
          <span class="text-xs text-slate-500 font-normal">
            Order Reference: <strong class="text-brand-blue font-semibold"><?= $booking_id ?></strong>
          </span>
        </div>

        <h1 class="text-2xl font-semibold text-brand-blue tracking-tight">
          Thank You, <?= htmlspecialchars($cust_name) ?>!
        </h1>
        <p class="text-xs sm:text-sm text-slate-500 mt-1 font-normal">
          Your tyre appointment is confirmed for <span class="font-medium text-slate-700"><?= $pref_date ?></span> (<?= $pref_slot ?>).
        </p>
      </div>

      <!-- Action Buttons -->
      <div class="flex items-center gap-2.5 shrink-0 self-start md:self-center">
        <!-- Download Invoice Button -->
        <a href="invoice.php?booking_id=<?= urlencode($booking_id) ?>&id=<?= $selected_id ?>&qty=<?= $selected_qty ?>&installer=<?= urlencode($installer_key) ?>&name=<?= urlencode($cust_name) ?>&phone=<?= urlencode($cust_phone) ?>&email=<?= urlencode($cust_email) ?>&vehicle=<?= urlencode($cust_vehicle) ?>&date=<?= urlencode($raw_date) ?>&slot=<?= urlencode($pref_slot) ?>&payment=<?= urlencode($payment_method) ?>&total=<?= $grand_total ?><?= !empty($passed_service_keys) ? '&services=' . urlencode(implode(',', $passed_service_keys)) : '' ?>" 
           target="_blank" 
           class="h-9 px-3.5 rounded-xl bg-white border border-slate-200 hover:border-brand-blue text-slate-700 hover:text-brand-blue font-medium text-xs flex items-center gap-1.5 transition cursor-pointer shadow-2xs">
          <i class="fa-solid fa-file-invoice text-brand-blue text-xs"></i>
          <span>Download Invoice</span>
        </a>
      </div>
    </div>

    <!-- 2. QUICK ACTIONS BAR -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
      <a href="<?= htmlspecialchars($selected_installer['map_link']) ?>" 
         target="_blank" 
         rel="noopener noreferrer"
         class="h-10 px-3.5 rounded-xl bg-white hover:bg-slate-50 border border-slate-200 hover:border-brand-blue text-slate-700 hover:text-brand-blue text-xs font-medium flex items-center justify-center gap-2 transition shadow-2xs">
        <i class="fa-solid fa-location-arrow text-brand-blue text-xs"></i>
        <span>Get Directions</span>
      </a>

      <a href="tel:<?= preg_replace('/[^0-9+]/', '', $selected_installer['phone']) ?>" 
         class="h-10 px-3.5 rounded-xl bg-white hover:bg-slate-50 border border-slate-200 hover:border-brand-blue text-slate-700 hover:text-brand-blue text-xs font-medium flex items-center justify-center gap-2 transition shadow-2xs">
        <i class="fa-solid fa-phone text-emerald-600 text-xs"></i>
        <span>Call Store</span>
      </a>

      <a href="<?= htmlspecialchars($google_cal_url) ?>" 
         target="_blank" 
         rel="noopener noreferrer"
         class="h-10 px-3.5 rounded-xl bg-white hover:bg-slate-50 border border-slate-200 hover:border-brand-blue text-slate-700 hover:text-brand-blue text-xs font-medium flex items-center justify-center gap-2 transition shadow-2xs">
        <i class="fa-regular fa-calendar-plus text-amber-500 text-xs"></i>
        <span>Add to Calendar</span>
      </a>
    </div>

    <!-- 3. 12-COLUMN MAIN CONTENT (TYREHUB THEME) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

      <!-- LEFT COLUMN: APPOINTMENT DETAILS & NEXT STEPS (7 COLS) -->
      <div class="lg:col-span-7 space-y-6">

        <!-- CARD 1: APPOINTMENT DETAILS -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs">
          
          <div class="flex items-center justify-between pb-3.5 mb-4 border-b border-slate-100">
            <div class="flex items-center gap-2">
              <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xs font-semibold">
                <i class="fa-solid <?= $is_home_delivery ? 'fa-truck' : 'fa-calendar-check' ?> text-[11px]"></i>
              </span>
              <h2 class="text-sm sm:text-base font-semibold text-slate-900">
                <?= $is_home_delivery ? 'Delivery Appointment' : 'Fitment Appointment' ?>
              </h2>
            </div>
            
            <span class="text-xs font-medium text-emerald-600 bg-emerald-50 border border-emerald-200/60 px-2 py-0.5 rounded flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              <span>Reserved</span>
            </span>
          </div>

          <!-- Schedule Grid (Clean, standard font sizes) -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200/80 mb-4 text-xs">
            <div>
              <span class="text-slate-400 block text-[11px] font-normal mb-0.5">Appointment Date</span>
              <span class="font-medium text-slate-800 flex items-center gap-1.5">
                <i class="fa-regular fa-calendar text-brand-blue text-[11px]"></i>
                <span><?= $pref_date ?></span>
              </span>
            </div>

            <div>
              <span class="text-slate-400 block text-[11px] font-normal mb-0.5">Preferred Time Slot</span>
              <span class="font-medium text-slate-800 flex items-center gap-1.5">
                <i class="fa-regular fa-clock text-brand-blue text-[11px]"></i>
                <span><?= $pref_slot ?></span>
              </span>
            </div>
          </div>

          <!-- Store Information -->
          <?php if (!$is_home_delivery): ?>
            <div class="p-3.5 rounded-xl bg-slate-50/70 border border-slate-100 space-y-2.5 text-xs">
              <div>
                <span class="text-[10px] font-medium text-slate-400 uppercase tracking-wider block">Assigned Store</span>
                <h3 class="text-sm font-semibold text-slate-900 mt-0.5">
                  <?= htmlspecialchars($selected_installer['name']) ?>
                </h3>
                <p class="text-xs text-slate-600 font-normal mt-0.5 leading-relaxed">
                  <?= htmlspecialchars($selected_installer['address']) ?>
                </p>
              </div>

              <div class="pt-2 border-t border-slate-200/60 flex items-center justify-between text-xs text-slate-500 flex-wrap gap-2">
                <span class="flex items-center gap-1.5">
                  <i class="fa-solid fa-phone text-slate-400 text-[10px]"></i>
                  <span><?= htmlspecialchars($selected_installer['phone']) ?></span>
                </span>
                <span class="flex items-center gap-1.5">
                  <i class="fa-regular fa-clock text-slate-400 text-[10px]"></i>
                  <span><?= htmlspecialchars($selected_installer['timings']) ?></span>
                </span>
              </div>
            </div>
          <?php else: ?>
            <div class="p-3.5 rounded-xl bg-slate-50/70 border border-slate-100 text-xs">
              <span class="text-[10px] font-medium text-slate-400 uppercase tracking-wider block">Delivery Address</span>
              <h3 class="text-sm font-semibold text-slate-900 mt-0.5">Contactless Doorstep Delivery</h3>
              <p class="text-xs text-slate-600 font-normal mt-0.5">Ahmedabad &amp; Gandhinagar (Pincode: <?= $delivery_pincode ?>)</p>
            </div>
          <?php endif; ?>

        </div>

        <!-- CARD 2: WHAT TO EXPECT NEXT -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs">
          <h2 class="text-sm sm:text-base font-semibold text-slate-900 pb-3 mb-4 border-b border-slate-100 flex items-center gap-2">
            <span class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xs font-semibold">
              <i class="fa-solid fa-list-check text-[11px]"></i>
            </span>
            <span>What to Expect Next</span>
          </h2>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
              <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-semibold text-xs mb-2">
                <i class="fa-solid fa-check text-[10px]"></i>
              </div>
              <h4 class="text-xs font-semibold text-slate-800">1. Stock Reserved</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-1 leading-relaxed">
                Brand-new tyres are reserved at the store and quality checked.
              </p>
            </div>

            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
              <div class="w-6 h-6 rounded-full bg-blue-100 text-brand-blue flex items-center justify-center font-semibold text-xs mb-2">
                2
              </div>
              <h4 class="text-xs font-semibold text-slate-800">2. Free Fitment</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-1 leading-relaxed">
                Drive to the store during your slot for free mounting and balancing.
              </p>
            </div>

            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
              <div class="w-6 h-6 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-semibold text-xs mb-2">
                3
              </div>
              <h4 class="text-xs font-semibold text-slate-800">3. Pay &amp; Drive</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-1 leading-relaxed">
                Inspect your fitted tyres and pay easily at the counter.
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: ORDER SUMMARY & CUSTOMER INFO (5 COLS) -->
      <div class="lg:col-span-5 space-y-6">

        <!-- CARD 1: ORDER SUMMARY (THEME-ALIGNED PRICING) -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs space-y-4">
          
          <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h2 class="text-sm sm:text-base font-semibold text-slate-900">Order Summary</h2>
            <span class="text-[11px] font-medium px-2 py-0.5 rounded <?= $payment_status_pill_class ?>">
              <?= $payment_status_badge ?>
            </span>
          </div>

          <!-- Product Item Card -->
          <div class="p-3 rounded-xl bg-slate-50/70 border border-slate-100 flex items-center gap-3">
            <div class="w-14 h-14 rounded-lg bg-white border border-slate-200/80 p-1 flex items-center justify-center shrink-0">
              <img src="<?= htmlspecialchars($selected_product['image']) ?>" 
                   alt="<?= htmlspecialchars($selected_product['model']) ?>" 
                   class="max-w-full max-h-full object-contain">
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
              <span class="text-[11px] text-slate-600 font-medium block mt-0.5">
                ₹<?= number_format($selected_product['price']) ?> / tyre
              </span>
            </div>
          </div>

          <!-- Extra Services if any -->
          <?php if (!empty($initial_services)): ?>
            <div class="space-y-1.5 pt-2 border-t border-dashed border-slate-200 text-xs">
              <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">Added Services</span>
              <?php foreach ($initial_services as $svc): ?>
                <div class="flex items-center justify-between text-slate-700">
                  <span><?= htmlspecialchars($svc['name']) ?></span>
                  <span class="font-semibold text-slate-900">+ ₹<?= number_format($svc['price']) ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <!-- Total Payable (Aligned with checkout.php theme) -->
          <div class="pt-3 border-t border-slate-200 flex items-baseline justify-between">
            <div>
              <span class="text-sm font-semibold text-slate-800 block">Total Payable</span>
              <span class="text-[11px] text-slate-400 font-normal">Inclusive of all taxes &amp; fitment</span>
            </div>
            <span class="text-xl sm:text-2xl font-semibold text-brand-blue">
              ₹<?= number_format($grand_total) ?>
            </span>
          </div>

          <!-- Benefits Included -->
          <div class="pt-2 space-y-1 text-[11px] text-emerald-700 font-medium">
            <div class="flex items-center gap-1.5">
              <i class="fa-solid fa-check text-emerald-500 text-xs"></i>
              <span>Free Wheel Balancing &amp; Fitment included</span>
            </div>
            <div class="flex items-center gap-1.5">
              <i class="fa-solid fa-check text-emerald-500 text-xs"></i>
              <span>100% Genuine Tyres with Official Warranty</span>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="pt-2 space-y-2">
            <a href="buy-tyre.php" 
               class="w-full h-11 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition shadow-2xs">
              <span>Explore More Tyres</span>
              <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>

            <a href="invoice.php?booking_id=<?= urlencode($booking_id) ?>&id=<?= $selected_id ?>&qty=<?= $selected_qty ?>&installer=<?= urlencode($installer_key) ?>&name=<?= urlencode($cust_name) ?>&phone=<?= urlencode($cust_phone) ?>&email=<?= urlencode($cust_email) ?>&vehicle=<?= urlencode($cust_vehicle) ?>&date=<?= urlencode($raw_date) ?>&slot=<?= urlencode($pref_slot) ?>&payment=<?= urlencode($payment_method) ?>&total=<?= $grand_total ?><?= !empty($passed_service_keys) ? '&services=' . urlencode(implode(',', $passed_service_keys)) : '' ?>" 
               target="_blank" 
               class="w-full h-10 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium text-xs flex items-center justify-center gap-2 transition cursor-pointer">
              <i class="fa-solid fa-file-arrow-down text-xs text-brand-blue"></i>
              <span>Download Tax Invoice (PDF)</span>
            </a>
          </div>

        </div>

        <!-- CARD 2: CUSTOMER & VEHICLE DETAILS -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs">
          <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-100">
            <h2 class="text-sm sm:text-base font-semibold text-slate-900">Customer &amp; Vehicle Info</h2>
            <span class="text-xs font-semibold text-brand-blue uppercase">
              <?= htmlspecialchars($cust_vehicle) ?>
            </span>
          </div>

          <div class="space-y-2 text-xs">
            <div class="flex items-center justify-between py-1 border-b border-slate-100/60">
              <span class="text-slate-400 font-normal">Customer Name:</span>
              <span class="font-medium text-slate-800"><?= htmlspecialchars($cust_name) ?></span>
            </div>
            <div class="flex items-center justify-between py-1 border-b border-slate-100/60">
              <span class="text-slate-400 font-normal">Contact Phone:</span>
              <span class="font-medium text-slate-800"><?= htmlspecialchars($cust_phone) ?></span>
            </div>
            <div class="flex items-center justify-between py-1 border-b border-slate-100/60">
              <span class="text-slate-400 font-normal">Email Address:</span>
              <span class="font-medium text-slate-800 truncate max-w-[180px]"><?= htmlspecialchars($cust_email) ?></span>
            </div>
            <div class="flex items-center justify-between py-1 border-b border-slate-100/60">
              <span class="text-slate-400 font-normal">Vehicle Number:</span>
              <span class="font-medium text-slate-800 uppercase"><?= htmlspecialchars($cust_vehicle) ?></span>
            </div>
            <div class="flex items-center justify-between py-1">
              <span class="text-slate-400 font-normal">Payment Method:</span>
              <span class="font-medium text-slate-800"><?= htmlspecialchars($payment_title) ?></span>
            </div>
          </div>

          <div class="mt-4 pt-3 border-t border-slate-100 text-center">
            <span class="text-[11px] text-slate-400 font-normal">Questions about your order? Call </span>
            <a href="tel:18001235510" class="text-xs font-semibold text-brand-blue hover:underline">1800-123-5510</a>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- MOBILE STICKY BOTTOM ACTION BAR            -->
<!-- ========================================== -->
<div class="sm:hidden fixed bottom-0 inset-x-0 bg-white/95 backdrop-blur-md border-t border-slate-200 p-2.5 z-40 shadow-lg">
  <div class="grid grid-cols-2 gap-2">
    <a href="<?= htmlspecialchars($selected_installer['map_link']) ?>" 
       target="_blank" 
       rel="noopener noreferrer"
       class="h-9 rounded-xl bg-white border border-slate-200 text-slate-700 font-semibold text-xs flex items-center justify-center gap-1.5 transition">
      <i class="fa-solid fa-location-arrow text-[10px] text-brand-blue"></i>
      <span>Directions</span>
    </a>

    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $selected_installer['phone']) ?>" 
       class="h-9 rounded-xl bg-brand-yellow text-slate-950 font-semibold text-xs flex items-center justify-center gap-1.5 transition">
      <i class="fa-solid fa-phone text-[10px]"></i>
      <span>Call Store</span>
    </a>
  </div>
</div>

<!-- ========================================== -->
<!-- JAVASCRIPT: CLEAN INVOICE PRINT LOGIC      -->
<!-- ========================================== -->
<style>
@media print {
  /* Hide the entire website wrapper elements so whole page is not printed */
  .site-header,
  header,
  section.bg-slate-50, /* stepper */
  .quick-actions-bar,
  footer,
  .no-print,
  #print-slip-iframe {
    display: none !important;
  }
  body {
    background: #ffffff !important;
  }
}
</style>

<script>
function printBookingSlip() {
  const invoiceUrl = "invoice.php?booking_id=<?= urlencode($booking_id) ?>&id=<?= $selected_id ?>&qty=<?= $selected_qty ?>&installer=<?= urlencode($installer_key) ?>&name=<?= urlencode($cust_name) ?>&phone=<?= urlencode($cust_phone) ?>&email=<?= urlencode($cust_email) ?>&vehicle=<?= urlencode($cust_vehicle) ?>&date=<?= urlencode($raw_date) ?>&slot=<?= urlencode($pref_slot) ?>&payment=<?= urlencode($payment_method) ?>&total=<?= $grand_total ?><?= !empty($passed_service_keys) ? '&services=' . urlencode(implode(',', $passed_service_keys)) : '' ?>";

  const btn = document.getElementById('print-slip-btn');
  const originalHtml = btn ? btn.innerHTML : '';
  if (btn) {
    btn.disabled = true;
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-xs text-brand-blue"></i> <span>Preparing Slip...</span>';
  }

  // Use hidden iframe to trigger print for ONLY the clean Tax Invoice / Slip
  let iframe = document.getElementById('print-slip-iframe');
  if (!iframe) {
    iframe = document.createElement('iframe');
    iframe.id = 'print-slip-iframe';
    iframe.style.position = 'fixed';
    iframe.style.right = '0';
    iframe.style.bottom = '0';
    iframe.style.width = '0';
    iframe.style.height = '0';
    iframe.style.border = '0';
    iframe.style.visibility = 'hidden';
    document.body.appendChild(iframe);
  }

  iframe.src = invoiceUrl;
  iframe.onload = function() {
    setTimeout(() => {
      if (btn) {
        btn.innerHTML = originalHtml;
        btn.disabled = false;
      }
      try {
        iframe.contentWindow.focus();
        iframe.contentWindow.print();
      } catch (err) {
        window.open(invoiceUrl + '&print=1', '_blank');
      }
    }, 500);
  };
}
</script>

<?php
include 'includes/footer.php';
?>
