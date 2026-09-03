<?php
$page_title = "Review Order | TyreHub";
$page_description = "Review your tyre order and selected fitting store before checkout.";
$current_page = "cart";

include 'includes/interface.php';
include 'includes/header.php';
include 'includes/products-data.php';

// Get selected product details
$selected_id = isset($_GET['id']) ? intval($_GET['id']) : (isset($_GET['product_id']) ? intval($_GET['product_id']) : 1);
$selected_qty = isset($_GET['qty']) ? max(1, intval($_GET['qty'])) : 4;
$installer_id = isset($_GET['installer']) ? trim($_GET['installer']) : (isset($_GET['store']) ? trim($_GET['store']) : 'motera');
$is_home_delivery = isset($_GET['delivery']) && $_GET['delivery'] === 'home';
$delivery_pincode = isset($_GET['pincode']) ? trim($_GET['pincode']) : '380001';

// Find Product
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

// Certified Partners Database
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

$selected_installer = $service_partners[$installer_id] ?? $service_partners['motera'];

// Pricing
$unit_price = $selected_product['price'];
$size_display = $selected_product['size_label'] ?? ($selected_product['size'] ?? ($selected_product['width'] . '/' . $selected_product['ratio'] . ' ' . $selected_product['diameter']));
$subtotal = $unit_price * $selected_qty;
?>

<?php
// Step 3 in Flow
$checkout_step = 3;
include 'includes/checkout-stepper.php';
?>

<!-- ========================================== -->
<!-- 2. MINIMAL BRANDED REVIEW ORDER CONTENT     -->
<!-- ========================================== -->
<section class="py-8 bg-slate-50/60 min-h-[75vh]">
  <div class="container mx-auto px-3">

    <!-- Header Row -->
    <div class="flex items-center justify-between mb-6 pb-3 border-b border-slate-200">
      <div>
        <h1 class="text-xl sm:text-2xl font-semibold text-brand-blue tracking-tight">
          Review Order
        </h1>
        <p class="text-xs text-slate-500 font-normal mt-0.5">
          Review your selected tyre and fitting location before payment.
        </p>
      </div>

      <a href="select-service-partner.php?id=<?= $selected_id ?>&qty=<?= $selected_qty ?>" 
         class="text-xs font-medium text-brand-blue hover:text-slate-900 transition flex items-center gap-1.5">
        <i class="fa-solid fa-arrow-left text-[10px]"></i>
        <span>Back</span>
      </a>
    </div>

    <!-- 2 Column Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      
      <!-- LEFT: TYRE & FITTING LOCATION (7 COLS) -->
      <div class="lg:col-span-7 space-y-4">

        <!-- 1. Tyre Card -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-xs">
          <div class="flex items-center justify-between pb-3 mb-4 border-b border-slate-100">
            <span class="text-xs font-semibold text-slate-700 uppercase tracking-wider">Selected Tyre</span>
            <span class="text-xs font-medium text-emerald-600 flex items-center gap-1">
              <i class="fa-solid fa-circle-check text-[10px]"></i> In Stock
            </span>
          </div>

          <div class="flex items-center gap-4 sm:gap-5">
            <!-- Tyre Thumbnail -->
            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-xl bg-slate-50 border border-slate-100 p-2 shrink-0 flex items-center justify-center">
              <img src="<?= $selected_product['image'] ?? 'assets/image/product.png' ?>" 
                   alt="<?= htmlspecialchars($selected_product['brand']) ?>" 
                   class="max-h-full max-w-full object-contain">
            </div>

            <!-- Info -->
            <div class="flex-1 min-w-0">
              <span class="text-[10px] font-semibold uppercase tracking-wider text-brand-blue bg-blue-50 px-2 py-0.5 rounded">
                <?= htmlspecialchars($selected_product['brand']) ?>
              </span>
              <h2 class="text-base sm:text-lg font-semibold text-slate-900 mt-1 truncate">
                <?= htmlspecialchars($selected_product['brand'] . ' ' . $selected_product['model']) ?>
              </h2>
              <p class="text-xs text-slate-600 font-medium mt-0.5">
                Size: <span class="text-slate-900 font-semibold"><?= htmlspecialchars($size_display) ?></span>
              </p>
              <div class="text-sm font-semibold text-slate-900 mt-1.5">
                ₹<?= number_format($unit_price) ?> <span class="text-xs text-slate-400 font-normal">/ tyre</span>
              </div>
            </div>
          </div>

          <!-- Quantity Row -->
          <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
            <div class="flex items-center gap-2">
              <span class="text-xs text-slate-500 font-medium">Quantity:</span>
              <div class="inline-flex items-center border border-slate-200 rounded-lg overflow-hidden bg-slate-50">
                <button type="button" 
                        onclick="updateOrderQty(-1)" 
                        class="w-7 h-7 flex items-center justify-center text-slate-600 hover:bg-slate-200 transition text-xs font-semibold cursor-pointer">
                  <i class="fa-solid fa-minus text-[10px]"></i>
                </button>
                <input type="text" 
                       id="cart-qty-input" 
                       value="<?= $selected_qty ?>" 
                       readonly 
                       class="w-9 h-7 text-center bg-white text-slate-900 font-semibold text-xs border-x border-slate-200 outline-none">
                <button type="button" 
                        onclick="updateOrderQty(1)" 
                        class="w-7 h-7 flex items-center justify-center text-slate-600 hover:bg-slate-200 transition text-xs font-semibold cursor-pointer">
                  <i class="fa-solid fa-plus text-[10px]"></i>
                </button>
              </div>
            </div>

            <div class="text-right">
              <span class="text-xs text-slate-400 font-normal block">Subtotal</span>
              <span id="line-item-total" class="text-base font-semibold text-slate-900">
                ₹<?= number_format($subtotal) ?>
              </span>
            </div>
          </div>
        </div>

        <!-- 2. Selected Service Partner Card -->
        <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-xs">
          <div class="flex items-center justify-between pb-3 mb-3.5 border-b border-slate-100">
            <span class="text-xs font-semibold text-slate-700 uppercase tracking-wider">
              <?= $is_home_delivery ? 'Doorstep Delivery' : 'Selected Service Partner' ?>
            </span>
            <a href="select-service-partner.php?id=<?= $selected_id ?>&qty=<?= $selected_qty ?>" 
               class="text-xs font-medium text-brand-blue hover:underline">
              Change
            </a>
          </div>

          <?php if ($is_home_delivery): ?>
            <div class="flex items-start gap-3">
              <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-sm shrink-0">
                <i class="fa-solid fa-truck"></i>
              </div>
              <div>
                <h3 class="text-sm font-semibold text-slate-900">Free Doorstep Delivery</h3>
                <p class="text-xs text-slate-500 mt-0.5">Pincode: <?= htmlspecialchars($delivery_pincode) ?> (Ahmedabad / Gandhinagar)</p>
                <span class="text-[11px] text-emerald-600 font-medium block mt-1">Estimated Delivery: 2-3 Working Days</span>
              </div>
            </div>
          <?php else: ?>
            <div class="flex items-start gap-3">
              <div class="w-9 h-9 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center text-sm shrink-0">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="flex-1 min-w-0">
                <h3 class="text-sm font-semibold text-slate-900">
                  <?= htmlspecialchars($selected_installer['name']) ?>
                </h3>
                <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">
                  <?= htmlspecialchars($selected_installer['address']) ?>
                </p>
              </div>
            </div>

            <!-- Simple Clean Dynamic Services Dropdown -->
            <?php if (!empty($selected_installer['services'])): ?>
              <div class="mt-4 pt-3.5 border-t border-slate-100">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 w-full">
                  <span class="text-xs font-medium text-slate-700 shrink-0">
                    Add Services at this Store:
                  </span>

                  <!-- Simple Clean Select Dropdown -->
                  <div class="relative w-full sm:w-auto min-w-[260px]">
                    <select id="services-select-dropdown" 
                            onchange="handleServiceSelectDropdown(this)" 
                            class="w-full h-9 pl-3.5 pr-8 rounded-xl bg-white hover:border-slate-300 border border-slate-200 text-xs font-medium text-slate-700 outline-none focus:border-brand-blue transition cursor-pointer appearance-none shadow-2xs">
                      <option value="" disabled selected>Select a service to add...</option>
                      <?php foreach ($selected_installer['services'] as $svc): 
                        $price_text = !empty($svc['is_free']) ? 'FREE' : '+₹' . number_format($svc['price']);
                      ?>
                        <option value="<?= $svc['id'] ?>" 
                                data-name="<?= htmlspecialchars($svc['name']) ?>" 
                                data-price="<?= $svc['price'] ?>" 
                                data-icon="<?= $svc['icon'] ?>">
                          <?= htmlspecialchars($svc['name']) ?> (<?= $price_text ?>)
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-slate-400">
                      <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </div>
                  </div>
                </div>

                <!-- Added Services Chips in Installer Card -->
                <div id="added-services-chips" class="hidden mt-3 pt-3 border-t border-dashed border-slate-100 flex items-center gap-2 flex-wrap text-xs">
                  <span class="text-[11px] font-medium text-slate-500 shrink-0">Added to Order:</span>
                  <div id="added-chips-container" class="flex items-center gap-2 flex-wrap"></div>
                </div>

              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- RIGHT: ORDER SUMMARY (5 COLS) -->
      <div class="lg:col-span-5">
        <div class="bg-white rounded-2xl border border-slate-200 p-5 sm:p-6 shadow-xs space-y-4">
          
          <h2 class="text-base font-semibold text-slate-900 pb-3 border-b border-slate-100">
            Order Summary
          </h2>

          <div class="space-y-2.5 text-xs text-slate-600 font-normal">
            <div class="flex items-center justify-between">
              <span>Tyres Total (<span id="calc-qty"><?= $selected_qty ?></span> Items)</span>
              <span class="text-slate-900 font-semibold" id="calc-subtotal">₹<?= number_format($subtotal) ?></span>
            </div>

            <div class="flex items-center justify-between">
              <span>Delivery / Service Fee</span>
              <span class="text-emerald-600 font-semibold uppercase text-[11px]">FREE</span>
            </div>

            <!-- Dynamically Added Services in Bill Summary -->
            <div id="bill-added-services" class="hidden space-y-2 pt-2 border-t border-dashed border-slate-200"></div>

            <!-- Dynamic Coupon Discount Row in Summary -->
            <div id="bill-coupon-row" class="hidden flex items-center justify-between text-xs text-emerald-600 font-medium pt-2 border-t border-dashed border-slate-200">
              <span>Coupon Discount (<span id="summary-coupon-code" class="font-semibold uppercase"></span>)</span>
              <span id="summary-coupon-amount" class="font-semibold text-emerald-600">- ₹0</span>
            </div>

          </div>

          <!-- Apply Coupon Code Box -->
          <div class="pt-3 border-t border-slate-100">
            <div id="coupon-input-wrapper">
              <div class="flex items-center gap-2">
                <div class="relative flex-1">
                  <input type="text" 
                         id="coupon-input" 
                         placeholder="Enter coupon code" 
                         onkeydown="if(event.key === 'Enter'){ applyCoupon(); }"
                         class="w-full h-9 pl-8 pr-3 uppercase text-xs font-semibold tracking-wider rounded-xl bg-slate-50 border border-slate-200 focus:bg-white focus:border-brand-blue outline-none transition placeholder:text-slate-400 placeholder:normal-case placeholder:font-normal">
                  <i class="fa-solid fa-ticket text-slate-400 absolute left-2.5 top-1/2 -translate-y-1/2 text-xs"></i>
                </div>
                <button type="button" 
                        onclick="applyCoupon()" 
                        class="h-9 px-4 rounded-xl bg-brand-blue hover:bg-slate-800 text-white font-semibold text-xs transition cursor-pointer shrink-0 shadow-2xs active:scale-95">
                  Apply
                </button>
              </div>
              <div id="coupon-error" class="hidden text-[11px] text-rose-500 mt-1.5 font-medium"></div>
            </div>

            <!-- Applied Coupon State -->
            <div id="coupon-applied-badge" class="hidden flex items-center justify-between p-2.5 rounded-xl bg-emerald-50 border border-emerald-200/80 text-xs">
              <div class="flex items-center gap-2 text-emerald-800 font-medium">
                <i class="fa-solid fa-circle-check text-emerald-600 text-sm"></i>
                <span>Coupon <strong id="applied-coupon-code" class="font-semibold uppercase"></strong> applied!</span>
              </div>
              <button type="button" onclick="removeCoupon()" class="text-xs font-semibold text-rose-600 hover:text-rose-700 hover:underline cursor-pointer">
                Remove
              </button>
            </div>
          </div>

          <!-- Total Row -->
          <div class="pt-3 border-t border-slate-200 flex items-baseline justify-between">
            <span class="text-sm font-semibold text-slate-800">Total Payable</span>
            <span id="calc-grand-total" class="text-xl sm:text-2xl font-semibold text-brand-blue">
              ₹<?= number_format($subtotal) ?>
            </span>
          </div>

          <!-- Checkout CTA -->
          <div class="pt-2">
            <button type="button" 
                    onclick="proceedToCheckout()" 
                    class="w-full h-12 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider transition shadow-sm hover:shadow-md flex items-center justify-center gap-2 cursor-pointer active:scale-98">
              <span>Proceed to Checkout</span>
              <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
            <p class="text-[11px] text-slate-400 text-center mt-2 font-normal">
              100% Genuine Tyres with Official Warranty
            </p>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT: CLEAN DYNAMIC QUANTITY CALC    -->
<!-- ========================================== -->
<script>
let currentQty = <?= $selected_qty ?>;
const unitPrice = <?= $unit_price ?>;

function formatRupee(amount) {
  return amount.toLocaleString('en-IN');
}

let addedServices = {};

function updateOrderQty(change) {
  const newQty = currentQty + change;
  if (newQty < 1 || newQty > 8) return;

  currentQty = newQty;

  // Update DOM
  document.getElementById('cart-qty-input').value = currentQty;
  document.getElementById('calc-qty').textContent = currentQty;

  const total = currentQty * unitPrice;
  document.getElementById('line-item-total').textContent = `₹${formatRupee(total)}`;
  document.getElementById('calc-subtotal').textContent = `₹${formatRupee(total)}`;
  
  recalcTotals();

  // Update URL
  const url = new URL(window.location);
  url.searchParams.set('qty', currentQty);
  window.history.replaceState({}, '', url);
}

function handleServiceSelectDropdown(selectElem) {
  const selectedOption = selectElem.options[selectElem.selectedIndex];
  const id = selectElem.value;
  if (!id) return;

  const name = selectedOption.getAttribute('data-name');
  const price = parseFloat(selectedOption.getAttribute('data-price') || 0);
  const icon = selectedOption.getAttribute('data-icon') || 'fa-solid fa-check';

  // Add to order
  addedServices[id] = { id, name, price, icon };

  // Reset dropdown to default prompt
  selectElem.value = "";

  renderAddedServices();
  recalcTotals();
}

function removeServiceItem(id) {
  if (addedServices[id]) {
    delete addedServices[id];
    renderAddedServices();
    recalcTotals();
  }
}

function renderAddedServices() {
  const chipsContainer = document.getElementById('added-chips-container');
  const chipsWrapper = document.getElementById('added-services-chips');
  const billServices = document.getElementById('bill-added-services');
  const count = Object.keys(addedServices).length;

  if (count > 0) {
    chipsWrapper.classList.remove('hidden');
    billServices.classList.remove('hidden');

    // Render chips in installer card
    chipsContainer.innerHTML = Object.values(addedServices).map(svc => `
      <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-brand-blue border border-brand-blue/20 font-medium text-xs shadow-2xs">
        <i class="${svc.icon} text-[10px]"></i>
        <span>${svc.name}</span>
        <span class="text-slate-500 font-normal">(${svc.price > 0 ? '+₹' + svc.price : 'FREE'})</span>
        <button type="button" onclick="removeServiceItem('${svc.id}')" class="text-slate-400 hover:text-rose-600 transition ml-1 cursor-pointer" title="Remove">
          <i class="fa-solid fa-xmark text-xs"></i>
        </button>
      </span>
    `).join('');

    // Render rows in Bill Summary (Clean text + price without icons or X)
    billServices.innerHTML = Object.values(addedServices).map(svc => `
      <div class="flex items-center justify-between text-xs">
        <span class="text-slate-700">${svc.name}</span>
        <span class="font-semibold ${svc.price > 0 ? 'text-slate-900' : 'text-emerald-600'}">
          ${svc.price > 0 ? '+ ₹' + formatRupee(svc.price) : 'FREE'}
        </span>
      </div>
    `).join('');

  } else {
    chipsWrapper.classList.add('hidden');
    billServices.classList.add('hidden');
    chipsContainer.innerHTML = '';
    billServices.innerHTML = '';
  }
}

// ==========================================
// COUPON CODE FUNCTIONALITY
// ==========================================
let couponDiscount = 0;
let appliedCouponCode = "";

function applyCoupon() {
  const input = document.getElementById('coupon-input');
  const errorElem = document.getElementById('coupon-error');
  const code = (input.value || "").trim().toUpperCase();

  errorElem.classList.add('hidden');
  errorElem.textContent = "";

  if (!code) {
    errorElem.textContent = "Please enter a coupon code.";
    errorElem.classList.remove('hidden');
    return;
  }

  const tyreTotal = currentQty * unitPrice;

  // Coupon Logic
  if (code === "TYRE100") {
    couponDiscount = 100;
  } else if (code === "SAVE500") {
    if (tyreTotal >= 10000) {
      couponDiscount = 500;
    } else {
      errorElem.textContent = "Coupon 'SAVE500' is applicable on orders above ₹10,000.";
      errorElem.classList.remove('hidden');
      return;
    }
  } else if (code === "TYREHUB10") {
    couponDiscount = Math.round(tyreTotal * 0.10);
  } else if (code === "FIRSTBUY") {
    couponDiscount = 250;
  } else {
    // Generous fallback or specific coupon
    couponDiscount = 150; // Accept any custom promo code as valid promotional offer
  }

  appliedCouponCode = code;

  // Update UI State
  document.getElementById('coupon-input-wrapper').classList.add('hidden');
  document.getElementById('applied-coupon-code').textContent = appliedCouponCode;
  document.getElementById('coupon-applied-badge').classList.remove('hidden');

  // Summary Row
  document.getElementById('bill-coupon-row').classList.remove('hidden');
  document.getElementById('summary-coupon-code').textContent = appliedCouponCode;
  document.getElementById('summary-coupon-amount').textContent = `- ₹${formatRupee(couponDiscount)}`;

  recalcTotals();
}

function removeCoupon() {
  couponDiscount = 0;
  appliedCouponCode = "";

  document.getElementById('coupon-input').value = "";
  document.getElementById('coupon-error').classList.add('hidden');
  document.getElementById('coupon-applied-badge').classList.add('hidden');
  document.getElementById('coupon-input-wrapper').classList.remove('hidden');

  document.getElementById('bill-coupon-row').classList.add('hidden');

  recalcTotals();
}

function recalcTotals() {
  const tyreTotal = currentQty * unitPrice;
  let servicesTotal = 0;
  for (const s of Object.values(addedServices)) {
    servicesTotal += s.price;
  }

  const grandTotal = Math.max(0, tyreTotal + servicesTotal - couponDiscount);
  document.getElementById('calc-grand-total').textContent = `₹${formatRupee(grandTotal)}`;
}

function proceedToCheckout() {
  const url = new URL('checkout.php', window.location.href);
  url.searchParams.set('id', '<?= $selected_id ?>');
  url.searchParams.set('qty', currentQty);
  <?php if ($is_home_delivery): ?>
    url.searchParams.set('delivery', '1');
    url.searchParams.set('pincode', '<?= htmlspecialchars($delivery_pincode ?? '380001') ?>');
  <?php else: ?>
    url.searchParams.set('installer', '<?= htmlspecialchars($installer_id ?? 'motera') ?>');
  <?php endif; ?>

  const serviceKeys = Object.keys(addedServices);
  if (serviceKeys.length > 0) {
    url.searchParams.set('services', serviceKeys.join(','));
  }

  if (appliedCouponCode) {
    url.searchParams.set('coupon', appliedCouponCode);
  }

  window.location.href = url.toString();
}
</script>

<?php
include 'includes/footer.php';
?>
