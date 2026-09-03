<?php
$page_title = 'Tax Invoice | TyreHub';

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
        'address' => 'Shop No. G.F 1 TO 5, Third Eye Residency, NR. Kameshwar Flats, Nr. Sangath 4 Motera, Ahmedabad'
    ],
    'viratnagar' => [
        'id' => 'viratnagar',
        'name' => 'TyreHub Partner - Viratnagar Store',
        'area' => 'Viratnagar',
        'pincode' => '382415',
        'phone' => '+91 98765 23456',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => '27, Kariya Complex, Viratnagar, Cross Rd, Odhav, Ahmedabad'
    ],
    'ghatlodiya' => [
        'id' => 'ghatlodiya',
        'name' => 'TyreHub Partner - Ghatlodiya Store',
        'area' => 'Ghatlodiya',
        'pincode' => '380061',
        'phone' => '+91 98765 34567',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'GF Vishwas City 2, Shayona City, R.C. Technical Rd, Ghatlodiya, Ahmedabad'
    ],
    'nikol' => [
        'id' => 'nikol',
        'name' => 'TyreHub Partner - Nikol Store',
        'area' => 'Nikol',
        'pincode' => '382350',
        'phone' => '+91 98765 45678',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Shop 12-14, Shukan Mall, Nikol Gam Road, Nikol, Ahmedabad'
    ],
    'chandkheda' => [
        'id' => 'chandkheda',
        'name' => 'TyreHub Partner - Chandkheda Store',
        'area' => 'Chandkheda',
        'pincode' => '382424',
        'phone' => '+91 98765 56789',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Opp. Satyamev Hospital, New CG Road, Chandkheda, Ahmedabad'
    ],
    'gota' => [
        'id' => 'gota',
        'name' => 'TyreHub Partner - Gota Store',
        'area' => 'Gota',
        'pincode' => '382481',
        'phone' => '+91 98765 67890',
        'timings' => '09:30 AM - 08:30 PM (Open All 7 Days)',
        'address' => 'Shop 5-7, Silver Radiance, Near Vandemataram Cross Road, Gota, Ahmedabad'
    ]
];

$all_services_map = [
    'car_wash' => ['name' => 'Car Wash', 'price' => 399],
    'alignment' => ['name' => 'Alignment & Balancing', 'price' => 499],
    'flat_tyre' => ['name' => 'Car Flat Tyre / Jump Start', 'price' => 299]
];

// ==========================================
// 2. PARSE DETAILS
// ==========================================
$booking_id = !empty($_GET['booking_id']) ? htmlspecialchars(trim($_GET['booking_id'])) : 'TH-' . rand(100000, 999999);
$invoice_no = 'INV-' . strtoupper($booking_id);
$invoice_date = date('d M Y');

$selected_id = isset($_GET['id']) && isset($products[(int)$_GET['id']]) ? (int)$_GET['id'] : 1;
$selected_product = $products[$selected_id];
$selected_qty = isset($_GET['qty']) ? max(1, min(8, (int)$_GET['qty'])) : 4;
$tyre_subtotal = $selected_product['price'] * $selected_qty;

$installer_key = isset($_GET['installer']) && isset($service_partners[$_GET['installer']]) ? $_GET['installer'] : 'motera';
$selected_installer = $service_partners[$installer_key];

$cust_name = !empty($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Valued Customer';
$cust_phone = !empty($_GET['phone']) ? htmlspecialchars(trim($_GET['phone'])) : '+91 98765 43210';
$cust_email = !empty($_GET['email']) ? htmlspecialchars(trim($_GET['email'])) : 'customer@example.com';
$cust_vehicle = !empty($_GET['vehicle']) ? htmlspecialchars(trim($_GET['vehicle'])) : 'GJ 01 AB 1234';

$raw_date = !empty($_GET['date']) ? $_GET['date'] : date('Y-m-d', strtotime('+1 day'));
$pref_date = date('d M Y', strtotime($raw_date));
$pref_slot = !empty($_GET['slot']) ? ucfirst($_GET['slot']) : 'Afternoon (02:00 PM - 05:00 PM)';

$payment_method = isset($_GET['payment']) ? trim($_GET['payment']) : 'store_pay';
$payment_title = 'Pay at Store on Fitment (Cash / UPI / Card)';
$payment_status = 'PENDING (Pay at Store)';
if ($payment_method === 'upi') {
    $payment_title = 'UPI (Google Pay / PhonePe / Paytm)';
    $payment_status = 'PAID ONLINE';
} elseif ($payment_method === 'card') {
    $payment_title = 'Credit / Debit Card';
    $payment_status = 'PAID ONLINE';
} elseif ($payment_method === 'netbanking') {
    $payment_title = 'Net Banking';
    $payment_status = 'PAID ONLINE';
}

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

$grand_total = isset($_GET['total']) ? (int)$_GET['total'] : ($tyre_subtotal + $services_total);
if ($grand_total <= 0) $grand_total = $tyre_subtotal + $services_total;

// Tax calculation (GST 28% for tyres in India - HSN 4011, included in MRP)
$taxable_base = round($grand_total / 1.28, 2);
$gst_total = $grand_total - $taxable_base;
$cgst = round($gst_total / 2, 2);
$sgst = round($gst_total / 2, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/tailwind.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'brand-blue': '#2F3672',
            'brand-yellow': '#FFD800',
            'brand-yellowHover': '#E6C300'
          }
        }
      }
    }
  </script>
  <style>
    @media print {
      .no-print { display: none !important; }
      body { background: #fff !important; margin: 0 !important; padding: 0 !important; }
      .invoice-container { box-shadow: none !important; border: 1px solid #e2e8f0 !important; margin: 0 !important; padding: 20px !important; width: 100% !important; max-width: 100% !important; }
    }
  </style>
  <script>
    if (new URLSearchParams(window.location.search).get('print') === '1') {
      window.addEventListener('load', function() {
        setTimeout(function() { window.print(); }, 300);
      });
    }
  </script>
</head>
<body class="bg-slate-100 text-slate-900 font-sans antialiased min-h-screen py-4 sm:py-8">

  <!-- Floating / Sticky Top Action Bar (Screen Only) -->
  <div class="no-print max-w-3xl mx-auto px-4 mb-4 flex items-center justify-between gap-3">
    <a href="javascript:history.back()" 
       class="inline-flex items-center gap-2 text-xs font-medium text-slate-600 hover:text-slate-900 bg-white px-3.5 py-2 rounded-xl border border-slate-200 transition shadow-2xs">
      <i class="fa-solid fa-arrow-left text-[11px]"></i>
      <span>Back to Order</span>
    </a>

    <div class="flex items-center gap-2">
      <button type="button" 
              onclick="window.print()" 
              class="inline-flex items-center gap-2 text-xs font-semibold bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 px-4 py-2 rounded-xl transition shadow-2xs cursor-pointer">
        <i class="fa-solid fa-file-pdf text-xs"></i>
        <span>Download / Print Invoice</span>
      </button>
    </div>
  </div>

  <!-- INVOICE CONTAINER -->
  <div class="invoice-container max-w-3xl mx-auto bg-white border border-slate-200 p-6 sm:p-10 rounded-2xl shadow-sm">
    
    <!-- 1. HEADER & LOGO -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-slate-200 gap-4">
      <div>
        <img src="assets/image/tyrehub-logo-light.svg" alt="TyreHub" class="h-10 sm:h-12 w-auto mb-2">
        <p class="text-[11px] text-slate-500 leading-tight">
          <strong>TyreHub India Private Limited</strong><br>
          GSTIN: 24AABCT1332L1Z9 • CIN: U50100GJ2021PTC123456<br>
          Near Sangath-4, Motera, Ahmedabad, Gujarat 380005<br>
          Toll Free: 1800-123-5510 • support@tyrehub.com
        </p>
      </div>

      <div class="text-left sm:text-right">
        <span class="inline-block px-2.5 py-1 rounded bg-slate-100 text-brand-blue font-bold text-xs uppercase tracking-wider mb-2">
          TAX INVOICE / RECEIPT
        </span>
        <div class="text-xs space-y-0.5 text-slate-600">
          <div><span class="text-slate-400">Invoice No:</span> <strong class="font-semibold text-slate-900"><?= $invoice_no ?></strong></div>
          <div><span class="text-slate-400">Booking Ref:</span> <strong class="font-semibold text-slate-900"><?= $booking_id ?></strong></div>
          <div><span class="text-slate-400">Date:</span> <?= $invoice_date ?></div>
          <div><span class="text-slate-400">Status:</span> <span class="font-semibold text-emerald-700"><?= $payment_status ?></span></div>
        </div>
      </div>
    </div>

    <!-- 2. BILLED TO & FITMENT DETAILS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 py-6 border-b border-slate-200 text-xs">
      <!-- Billed To -->
      <div class="space-y-1">
        <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block mb-1">Billed To (Customer Details)</span>
        <h4 class="text-sm font-semibold text-slate-900"><?= htmlspecialchars($cust_name) ?></h4>
        <p class="text-slate-600">Mobile: <?= htmlspecialchars($cust_phone) ?></p>
        <p class="text-slate-600">Email: <?= htmlspecialchars($cust_email) ?></p>
        <p class="text-slate-600">Vehicle Number: <strong class="uppercase text-slate-800"><?= htmlspecialchars($cust_vehicle) ?></strong></p>
        <p class="text-slate-600">Payment Mode: <?= htmlspecialchars($payment_title) ?></p>
      </div>

      <!-- Fitment Store Location -->
      <div class="space-y-1">
        <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block mb-1">Fitting Partner Store &amp; Slot</span>
        <h4 class="text-sm font-semibold text-brand-blue"><?= htmlspecialchars($selected_installer['name']) ?></h4>
        <p class="text-slate-600 leading-relaxed"><?= htmlspecialchars($selected_installer['address']) ?></p>
        <p class="text-slate-600">Store Contact: <?= htmlspecialchars($selected_installer['phone']) ?></p>
        <p class="text-slate-800 font-medium pt-1">
          <i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i>
          Appointment: <?= $pref_date ?> (<?= $pref_slot ?>)
        </p>
      </div>
    </div>

    <!-- 3. LINE ITEMS TABLE -->
    <div class="py-6 border-b border-slate-200">
      <div class="overflow-x-auto">
        <table class="w-full text-xs text-left">
          <thead>
            <tr class="bg-slate-50 text-slate-700 uppercase font-semibold text-[10px] border-y border-slate-200">
              <th class="py-2.5 px-3">#</th>
              <th class="py-2.5 px-3">Item Description</th>
              <th class="py-2.5 px-3 text-center">HSN</th>
              <th class="py-2.5 px-3 text-center">Qty</th>
              <th class="py-2.5 px-3 text-right">Unit Rate</th>
              <th class="py-2.5 px-3 text-right">Total (INR)</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100 text-slate-800">
            <tr>
              <td class="py-3 px-3 font-medium text-slate-400">1</td>
              <td class="py-3 px-3">
                <strong class="font-semibold text-slate-900 block"><?= htmlspecialchars($selected_product['brand'] . ' ' . $selected_product['model']) ?></strong>
                <span class="text-[11px] text-slate-500">Size: <?= htmlspecialchars($selected_product['size']) ?> • Tubeless Car Tyre</span>
                <span class="text-[10px] text-emerald-700 block font-medium">✓ Includes 5 Years Standard Manufacturer Warranty</span>
              </td>
              <td class="py-3 px-3 text-center text-slate-500">4011</td>
              <td class="py-3 px-3 text-center font-semibold"><?= $selected_qty ?></td>
              <td class="py-3 px-3 text-right">₹<?= number_format($selected_product['price']) ?></td>
              <td class="py-3 px-3 text-right font-semibold">₹<?= number_format($tyre_subtotal) ?></td>
            </tr>

            <!-- Complimentary Services -->
            <tr class="text-slate-600 bg-slate-50/40">
              <td class="py-2.5 px-3 font-medium text-slate-400">2</td>
              <td class="py-2.5 px-3">
                <span class="font-medium text-slate-800">Free Laser Wheel Balancing &amp; Tyre Fitment</span>
                <span class="text-[10px] text-slate-400 block">Complimentary store service by certified technicians</span>
              </td>
              <td class="py-2.5 px-3 text-center text-slate-500">9987</td>
              <td class="py-2.5 px-3 text-center"><?= $selected_qty ?></td>
              <td class="py-2.5 px-3 text-right text-emerald-600 font-medium">FREE</td>
              <td class="py-2.5 px-3 text-right text-emerald-600 font-medium">₹0</td>
            </tr>

            <!-- Add-on services if any -->
            <?php $item_idx = 3; foreach ($initial_services as $svc): ?>
              <tr>
                <td class="py-2.5 px-3 font-medium text-slate-400"><?= $item_idx++ ?></td>
                <td class="py-2.5 px-3 font-medium text-slate-800"><?= htmlspecialchars($svc['name']) ?></td>
                <td class="py-2.5 px-3 text-center text-slate-500">9987</td>
                <td class="py-2.5 px-3 text-center">1</td>
                <td class="py-2.5 px-3 text-right">₹<?= number_format($svc['price']) ?></td>
                <td class="py-2.5 px-3 text-right font-semibold">₹<?= number_format($svc['price']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Price Breakdown -->
      <div class="flex justify-end pt-4">
        <div class="w-full sm:w-64 space-y-1.5 text-xs">
          <div class="flex justify-between text-slate-600">
            <span>Taxable Amount:</span>
            <span>₹<?= number_format($taxable_base, 2) ?></span>
          </div>
          <div class="flex justify-between text-slate-600">
            <span>CGST (14%):</span>
            <span>₹<?= number_format($cgst, 2) ?></span>
          </div>
          <div class="flex justify-between text-slate-600">
            <span>SGST (14%):</span>
            <span>₹<?= number_format($sgst, 2) ?></span>
          </div>
          <div class="flex justify-between text-slate-600">
            <span>Fitting &amp; Delivery:</span>
            <span class="text-emerald-600 font-medium">FREE</span>
          </div>
          <div class="pt-2 border-t border-slate-200 flex justify-between text-sm font-bold text-slate-900">
            <span>Grand Total:</span>
            <span class="text-brand-blue">₹<?= number_format($grand_total) ?></span>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. TERMS & SIGNATURE -->
    <div class="pt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 items-end text-[11px] text-slate-500">
      <div class="space-y-1 leading-relaxed">
        <strong class="text-slate-700 block text-xs">Terms &amp; Conditions:</strong>
        <p>1. Please show this booking receipt/SMS at the partner store during fitment.</p>
        <p>2. Tyres carry manufacturer warranty against manufacturing defects.</p>
        <p>3. Fitting, balancing test &amp; alignment inspection are included at the store.</p>
        <p>4. Computer-generated invoice; requires no physical signature.</p>
      </div>

      <div class="text-left sm:text-right space-y-1">
        <div class="inline-block p-2 rounded-lg border border-slate-200 bg-slate-50 text-center">
          <span class="text-[10px] text-slate-400 block uppercase tracking-wider font-semibold">Authorized Signatory</span>
          <div class="font-bold text-xs text-brand-blue mt-1">TyreHub India Pvt. Ltd.</div>
          <span class="text-[9px] text-emerald-600 font-semibold uppercase">✓ Verified Digital Stamp</span>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
