<?php
$page_title = "Buy Car Tyres Online in Ahmedabad & Gandhinagar | Best Prices | TyreHub";
$page_description = "Shop genuine car tyres online from leading brands - Apollo, Bridgestone, CEAT, Goodyear, Michelin, MRF. Best prices, doorstep delivery & free store installation.";
$current_page = "buy-tyre";

include 'includes/interface.php';
include 'includes/header.php';

// Load centralized product database
require_once 'includes/products-data.php';
$products = $products_db;
?>

<!-- Custom Styling for Buy Tyre Select2 & Stepper -->
<style>
  .select2-container {
    width: 100% !important;
  }
  .select2-container .select2-selection--single {
    height: 42px !important;
    border-radius: 0.75rem !important;
    display: flex !important;
    align-items: center !important;
    background-color: #f8fafc !important;
    border-color: #e2e8f0 !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 40px !important;
    padding-left: 12px !important;
    font-size: 12.5px !important;
    font-weight: 700 !important;
    color: #1e293b !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 40px !important;
    right: 8px !important;
  }
</style>

<?php
// Step 1 in Flow
$checkout_step = 1;
include 'includes/checkout-stepper.php';
?>

<!-- ========================================== -->
<!-- 2. MAIN SHOPPING CONTENT (FILTER + GRID)   -->
<!-- ========================================== -->
<section class="py-5 sm:py-7 lg:py-9 bg-white min-h-screen">
  <div class="container mx-auto px-3">
    
    <!-- Breadcrumb & Top Controls Row -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mb-5">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs font-medium text-slate-500">
        <a href="index.php" class="hover:text-brand-blue transition">Home</a>
        <span>/</span>
        <span class="text-slate-900 font-bold">Shop</span>
      </nav>

      <!-- Sorting Dropdown & Mobile Filter Toggle -->
      <div class="flex items-center gap-2.5 w-full sm:w-auto justify-between sm:justify-end">
        
        <!-- Mobile Filter Button (Visible on mobile only) -->
        <button type="button" onclick="openMobileFilters()" class="lg:hidden inline-flex items-center gap-2 h-9 px-3.5 bg-white border border-slate-300 rounded-xl text-xs font-bold text-slate-800 shadow-2xs hover:border-brand-blue transition active:scale-95">
          <i class="fa-solid fa-sliders text-brand-blue text-xs"></i>
          <span>Filters (<span id="filter-count">0</span>)</span>
        </button>

        <!-- Default Sorting Select -->
        <div class="relative flex items-center">
          <select id="sort-select" onchange="handleSortChange(this.value)" class="appearance-none h-9 bg-white border border-slate-300 rounded-xl pl-3.5 pr-8 !text-xs font-medium text-slate-700 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue shadow-2xs cursor-pointer">
            <option value="default">Default sorting</option>
            <option value="price-low">Price: Low to High</option>
            <option value="price-high">Price: High to Low</option>
            <option value="rating">Average Rating</option>
            <option value="name">Model Name A-Z</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
            <i class="fa-solid fa-chevron-down text-[10px]"></i>
          </div>
        </div>

      </div>

    </div>

    <!-- Main Layout Grid: Left Sidebar (Filters) + Right Main (Product Grid) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-6 items-start">
      
      <!-- ========================================== -->
      <!-- MOBILE OVERLAY BACKDROP                    -->
      <!-- ========================================== -->
      <div id="filter-backdrop" onclick="closeMobileFilters()" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 transition-opacity duration-300 opacity-0 pointer-events-none lg:hidden"></div>

      <!-- ========================================== -->
      <!-- LEFT SIDEBAR / MOBILE SLIDE-OVER DRAWER    -->
      <!-- ========================================== -->
      <aside id="filters-sidebar" class="fixed inset-y-0 left-0 z-50 w-[85vw] max-w-sm bg-white shadow-2xl flex flex-col transform -translate-x-full transition-transform duration-300 ease-out lg:static lg:z-auto lg:w-auto lg:max-w-none lg:shadow-xs lg:translate-x-0 lg:rounded-3xl lg:border lg:border-slate-200/90 lg:p-4 sm:lg:p-5 lg:space-y-3.5 lg:sticky lg:top-20 lg:col-span-3">
        
        <!-- Mobile Drawer Header (Mobile only) -->
        <div class="flex items-center justify-between p-3.5 border-b border-slate-100 bg-slate-50/80 lg:hidden shrink-0">
          <div class="flex items-center gap-2.5">
            <div class="w-8 h-8 rounded-xl bg-brand-yellow/20 text-slate-900 flex items-center justify-center font-bold">
              <i class="fa-solid fa-sliders text-xs text-brand-blue"></i>
            </div>
            <div class="leading-tight">
              <h3 class="text-sm font-bold text-slate-900 font-outfit m-0">Filter Tyres</h3>
              <span class="text-[10px] text-slate-400 font-medium block mt-0.5">Refine Selection</span>
            </div>
          </div>
          <button type="button" onclick="closeMobileFilters()" class="w-7.5 h-7.5 rounded-full bg-slate-200/80 hover:bg-slate-300 text-slate-600 hover:text-slate-900 flex items-center justify-center transition text-sm">
            <i class="fa-solid fa-xmark text-xs"></i>
          </button>
        </div>

        <!-- Desktop Sidebar Header (Desktop only) -->
        <div class="hidden lg:flex items-center justify-between pb-3 border-b border-slate-100 shrink-0">
          <div class="flex items-center gap-2.5">
            <div class="w-8 h-8 rounded-xl bg-brand-yellow/15 text-slate-900 flex items-center justify-center font-bold shrink-0">
              <i class="fa-solid fa-sliders text-xs text-brand-blue"></i>
            </div>
            <div class="leading-none">
              <h3 class="text-sm font-bold text-slate-900 font-outfit m-0">Filter Tyres</h3>
              <span class="text-[10px] text-slate-400 font-medium block mt-1">Refine Selection</span>
            </div>
          </div>
          <button type="button" onclick="resetAllFilters()" class="inline-flex items-center gap-1.5 text-xs text-brand-blue hover:text-slate-900 font-bold px-2.5 py-1 rounded-lg bg-blue-50/70 hover:bg-slate-100 transition shadow-2xs">
            <i class="fa-solid fa-rotate-left text-[10px]"></i> Reset
          </button>
        </div>

        <!-- Filter Scrollable Options Body -->
        <div class="flex-1 overflow-y-auto p-4 space-y-3.5 lg:p-0 lg:overflow-visible">

          <!-- Filter 1: Tyre Type (Segmented Toggle Chips) -->
          <div class="space-y-1.5">
            <label class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
              <i class="fa-solid fa-dharmachakra text-brand-blue text-[11px]"></i>
              <span>Tyre Type</span>
            </label>
            <div class="grid grid-cols-2 gap-2 pt-0.5">
              <label class="cursor-pointer select-none">
                <input type="checkbox" name="tyre_type" value="Tubeless" onchange="applyFilters()" class="peer sr-only">
                <div class="flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 hover:border-slate-300 peer-checked:bg-brand-blue peer-checked:text-white peer-checked:border-brand-blue peer-checked:shadow-xs text-slate-700 text-xs font-bold transition-all text-center">
                  <i class="fa-solid fa-check text-[10px] hidden peer-checked:inline-block"></i>
                  <span>Tubeless</span>
                </div>
              </label>
              <label class="cursor-pointer select-none">
                <input type="checkbox" name="tyre_type" value="Tubetype" onchange="applyFilters()" class="peer sr-only">
                <div class="flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 hover:border-slate-300 peer-checked:bg-brand-blue peer-checked:text-white peer-checked:border-brand-blue peer-checked:shadow-xs text-slate-700 text-xs font-bold transition-all text-center">
                  <i class="fa-solid fa-check text-[10px] hidden peer-checked:inline-block"></i>
                  <span>Tubetype</span>
                </div>
              </label>
            </div>
          </div>

          <!-- Filter 2: Tyre Brand (Select2 Dropdown) -->
          <div class="space-y-1.5">
            <label class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
              <i class="fa-solid fa-award text-brand-blue text-[11px]"></i>
              <span>Tyre Brand</span>
            </label>
            <div class="w-full">
              <select id="filter-brand" class="select2-filter w-full">
                <option value="">Any brand (All)</option>
                <option value="Apollo">Apollo Tyres</option>
                <option value="Bridgestone">Bridgestone Tyres</option>
                <option value="CEAT">CEAT Tyres</option>
                <option value="Goodyear">Goodyear Tyres</option>
                <option value="JK Tyre">JK Tyre</option>
                <option value="Michelin">Michelin Tyres</option>
                <option value="MRF">MRF Tyres</option>
                <option value="Yokohama">Yokohama Tyres</option>
              </select>
            </div>
          </div>

          <!-- Filter 3: Width (Select2 Dropdown) -->
          <div class="space-y-1.5">
            <label class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
              <i class="fa-solid fa-arrows-left-right text-brand-blue text-[11px]"></i>
              <span>Tyre Width</span>
            </label>
            <div class="w-full">
              <select id="filter-width" class="select2-filter w-full">
                <option value="">Any width</option>
                <option value="145">145 mm</option>
                <option value="155">155 mm</option>
                <option value="165">165 mm</option>
                <option value="175">175 mm</option>
                <option value="185">185 mm</option>
                <option value="195">195 mm</option>
                <option value="205">205 mm</option>
                <option value="215">215 mm</option>
              </select>
            </div>
          </div>

          <!-- Filter 4: Ratio (Select2 Dropdown) -->
          <div class="space-y-1.5">
            <label class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
              <i class="fa-solid fa-arrows-up-down text-brand-blue text-[11px]"></i>
              <span>Aspect Ratio</span>
            </label>
            <div class="w-full">
              <select id="filter-ratio" class="select2-filter w-full">
                <option value="">Any ratio</option>
                <option value="55">55 Series</option>
                <option value="60">60 Series</option>
                <option value="65">65 Series</option>
                <option value="70">70 Series</option>
                <option value="80">80 Series</option>
              </select>
            </div>
          </div>

          <!-- Filter 5: Diameter (Select2 Dropdown) -->
          <div class="space-y-1.5">
            <label class="text-xs font-bold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
              <i class="fa-solid fa-compact-disc text-brand-blue text-[11px]"></i>
              <span>Rim Diameter</span>
            </label>
            <div class="w-full">
              <select id="filter-diameter" class="select2-filter w-full">
                <option value="">Any diameter</option>
                <option value="R12">R12 (12 inch)</option>
                <option value="R13">R13 (13 inch)</option>
                <option value="R14">R14 (14 inch)</option>
                <option value="R15">R15 (15 inch)</option>
                <option value="R16">R16 (16 inch)</option>
              </select>
            </div>
          </div>

          <!-- Master Filter Action Button (Desktop Only) -->
          <div class="hidden lg:block pt-1.5">
            <button type="button" onclick="applyFilters()" class="w-full h-11 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider rounded-xl transition shadow-xs hover:shadow-md flex items-center justify-center gap-2 active:scale-[0.98] cursor-pointer">
              <i class="fa-solid fa-filter text-xs"></i> APPLY ALL FILTERS
            </button>
          </div>

        </div>

        <!-- Mobile Drawer Sticky Footer (Mobile Only) -->
        <div class="p-3.5 border-t border-slate-100 bg-white flex items-center gap-2.5 lg:hidden shrink-0 shadow-lg">
          <button type="button" onclick="resetAllFilters()" class="flex-1 py-2.5 px-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-700 font-bold text-xs flex items-center justify-center gap-1.5 hover:bg-slate-100 transition">
            <i class="fa-solid fa-rotate-left text-[11px]"></i> Reset
          </button>
          <button type="button" onclick="applyFilters(); closeMobileFilters();" class="flex-1 py-2.5 px-4 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs uppercase tracking-wider shadow-xs transition flex items-center justify-center gap-1.5">
            <i class="fa-solid fa-check text-xs"></i> Apply
          </button>
        </div>

      </aside>

      <!-- ========================================== -->
      <!-- RIGHT: PRODUCTS GRID (3-COL LAYOUT)        -->
      <!-- ========================================== -->
      <main class="lg:col-span-9">
        
        <!-- Active Filter Tags Row (Shown dynamically) -->
        <div id="active-filter-tags" class="hidden flex-wrap items-center gap-2 mb-4 pb-2">
          <!-- Populated by JS -->
        </div>

        <!-- Products Grid Container -->
        <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 sm:gap-4">
          
          <?php foreach ($products as $p): ?>
            <?php include 'includes/product-card.php'; ?>
          <?php endforeach; ?>

        </div>

        <!-- Pagination Component (9 cards per page) -->
        <div id="pagination-container" class="mt-10 pt-6 border-t border-slate-200/90 flex flex-col sm:flex-row items-center justify-between gap-4">
          <p class="text-xs sm:text-sm text-slate-500 font-medium" id="pagination-info">
            Showing <span class="font-bold text-slate-900" id="page-start">1</span>–<span class="font-bold text-slate-900" id="page-end">9</span> of <span class="font-bold text-slate-900" id="total-items"><?php echo count($products); ?></span> tyres
          </p>

          <div class="flex items-center gap-1.5" id="pagination-buttons">
            <!-- Rendered by JavaScript -->
          </div>
        </div>

        <!-- No Products Found Message (Hidden by default) -->
        <div id="no-products-msg" class="hidden bg-white border border-slate-200 rounded-2xl p-12 text-center my-6 space-y-3">
          <div class="w-16 h-16 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center text-2xl mx-auto mb-2">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <h3 class="text-lg font-bold text-slate-800 font-outfit">No Matching Tyres Found</h3>
          <p class="text-xs sm:text-sm text-slate-500 max-w-md mx-auto">
            We couldn't find any tyres matching your selected filters. Please adjust your width, ratio, or brand filters.
          </p>
          <button type="button" onclick="resetAllFilters()" class="btn-primary py-2 px-5 text-xs font-bold mt-2">
            Clear All Filters
          </button>
        </div>

      </main>

    </div>

  </div>
</section>



<!-- ========================================== -->
<!-- 4. CART TOAST NOTIFICATION MODAL           -->
<!-- ========================================== -->
<div id="cart-toast" class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none">
  <div class="bg-slate-900 text-white px-5 py-4 rounded-2xl shadow-2xl border border-slate-700 flex items-center gap-4 max-w-md pointer-events-auto">
    <div class="w-10 h-10 rounded-xl bg-brand-yellow text-brand-blue flex items-center justify-center shrink-0 text-lg">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>
    <div class="flex-1 min-w-0">
      <h5 class="text-sm font-bold text-white font-outfit truncate" id="toast-item-title">Item Added</h5>
      <p class="text-xs text-slate-300" id="toast-item-desc">Selected quantity added to cart.</p>
    </div>
    <a href="contact.php" class="bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-bold text-xs uppercase tracking-wider px-3 py-2 rounded-lg transition whitespace-nowrap">
      View Cart
    </a>
  </div>
</div>

<!-- ========================================== -->
<!-- 5. SHOPPING & FILTERING JAVASCRIPT         -->
<!-- ========================================== -->
<script>
let currentPage = 1;
const itemsPerPage = 9;

function changeProductCardQty(btn, change) {
  const card = btn.closest('.product-card');
  if (!card) return;
  const numSpan = card.querySelector('.qty-num');
  if (!numSpan) return;
  let current = parseInt(numSpan.innerText) || 1;
  current += change;
  if (current < 1) current = 1;
  if (current > 10) current = 10;
  numSpan.innerText = current;
}

function addProductToCart(id, title, price, btn) {
  const card = btn.closest('.product-card');
  const numSpan = card ? card.querySelector('.qty-num') : null;
  const qty = numSpan ? parseInt(numSpan.innerText) || 1 : 1;
  const total = price * qty;

  // Show Toast
  const toast = document.getElementById('cart-toast');
  if (toast) {
    document.getElementById('toast-item-title').textContent = `${qty}x ${title}`;
    document.getElementById('toast-item-desc').textContent = `Total: ₹${total.toLocaleString('en-IN')} (Added to Cart)`;

    toast.classList.remove('translate-y-24', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');

    setTimeout(() => {
      toast.classList.remove('translate-y-0', 'opacity-100');
      toast.classList.add('translate-y-24', 'opacity-0');
    }, 4000);
  }

  // Button feedback
  const originalHTML = btn.innerHTML;
  btn.innerHTML = '<i class="fa-solid fa-check"></i> ADDED!';
  btn.classList.add('bg-emerald-500', 'text-white');
  btn.classList.remove('bg-brand-yellow', 'text-slate-950');

  setTimeout(() => {
    btn.innerHTML = originalHTML;
    btn.classList.remove('bg-emerald-500', 'text-white');
    btn.classList.add('bg-brand-yellow', 'text-slate-950');
  }, 1800);
}

function updatePagination() {
  const cards = Array.from(document.querySelectorAll('.product-card'));
  const matchedCards = cards.filter(card => card.dataset.filteredOut !== 'true');
  const total = matchedCards.length;
  const totalPages = Math.ceil(total / itemsPerPage) || 1;

  if (currentPage > totalPages) currentPage = totalPages;
  if (currentPage < 1) currentPage = 1;

  const start = (currentPage - 1) * itemsPerPage;
  const end = start + itemsPerPage;

  // Hide all filtered out cards
  cards.forEach(card => {
    if (card.dataset.filteredOut === 'true') {
      card.classList.add('hidden');
    }
  });

  // Paginate matched cards
  matchedCards.forEach((card, idx) => {
    if (idx >= start && idx < end) {
      card.classList.remove('hidden');
    } else {
      card.classList.add('hidden');
    }
  });

  // Update info labels
  const startEl = document.getElementById('page-start');
  const endEl = document.getElementById('page-end');
  const totalEl = document.getElementById('total-items');
  const paginContainer = document.getElementById('pagination-container');
  const noMsg = document.getElementById('no-products-msg');

  if (total === 0) {
    if (paginContainer) paginContainer.classList.add('hidden');
    if (noMsg) noMsg.classList.remove('hidden');
  } else {
    if (paginContainer) paginContainer.classList.remove('hidden');
    if (noMsg) noMsg.classList.add('hidden');
  }

  if (startEl) startEl.textContent = total > 0 ? (start + 1) : 0;
  if (endEl) endEl.textContent = Math.min(end, total);
  if (totalEl) totalEl.textContent = total;

  renderPaginationButtons(totalPages);
}

function renderPaginationButtons(totalPages) {
  const container = document.getElementById('pagination-buttons');
  if (!container) return;
  if (totalPages <= 1) {
    container.innerHTML = '';
    return;
  }

  let html = '';

  // Previous button
  if (currentPage > 1) {
    html += `<button type="button" onclick="goToPage(${currentPage - 1})" class="h-9 px-3.5 rounded-xl border border-slate-200 bg-white hover:bg-brand-blue hover:text-white hover:border-brand-blue text-brand-blue text-xs font-bold transition flex items-center gap-1.5 shadow-2xs cursor-pointer"><i class="fa-solid fa-chevron-left text-[10px]"></i> Prev</button>`;
  } else {
    html += `<button disabled class="h-9 px-3.5 rounded-xl border border-slate-200/70 bg-slate-100/70 text-slate-300 text-xs font-medium cursor-not-allowed flex items-center gap-1.5"><i class="fa-solid fa-chevron-left text-[10px]"></i> Prev</button>`;
  }

  // Page Numbers
  for (let p = 1; p <= totalPages; p++) {
    if (p === currentPage) {
      html += `<button type="button" class="w-9 h-9 rounded-xl bg-brand-blue text-brand-yellow border border-brand-blue text-xs font-bold shadow-xs">${p}</button>`;
    } else {
      html += `<button type="button" onclick="goToPage(${p})" class="w-9 h-9 rounded-xl border border-slate-200 bg-white hover:bg-brand-blue hover:text-white hover:border-brand-blue text-slate-700 text-xs font-bold transition shadow-2xs cursor-pointer">${p}</button>`;
    }
  }

  // Next button
  if (currentPage < totalPages) {
    html += `<button type="button" onclick="goToPage(${currentPage + 1})" class="h-9 px-3.5 rounded-xl border border-slate-200 bg-white hover:bg-brand-blue hover:text-white hover:border-brand-blue text-brand-blue text-xs font-bold transition flex items-center gap-1.5 shadow-2xs cursor-pointer">Next <i class="fa-solid fa-chevron-right text-[10px]"></i></button>`;
  } else {
    html += `<button disabled class="h-9 px-3.5 rounded-xl border border-slate-200/70 bg-slate-100/70 text-slate-300 text-xs font-medium cursor-not-allowed flex items-center gap-1.5">Next <i class="fa-solid fa-chevron-right text-[10px]"></i></button>`;
  }

  container.innerHTML = html;
}

function goToPage(p) {
  currentPage = p;
  updatePagination();
  const grid = document.getElementById('products-grid');
  if (grid) {
    grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

function applyFilters() {
  const brandVal = document.getElementById('filter-brand').value.trim();
  const widthVal = document.getElementById('filter-width').value.trim();
  const ratioVal = document.getElementById('filter-ratio').value.trim();
  const diameterVal = document.getElementById('filter-diameter').value.trim();
  
  // Selected types (checkboxes)
  const typeCheckboxes = document.querySelectorAll('input[name="tyre_type"]:checked');
  const selectedTypes = Array.from(typeCheckboxes).map(cb => cb.value);

  const cards = document.querySelectorAll('.product-card');

  cards.forEach(card => {
    const cardBrand = card.getAttribute('data-brand') || '';
    const cardType = card.getAttribute('data-type') || '';
    const cardWidth = card.getAttribute('data-width') || '';
    const cardRatio = card.getAttribute('data-ratio') || '';
    const cardDiameter = card.getAttribute('data-diameter') || '';

    let match = true;

    // Brand filter
    if (brandVal && cardBrand !== brandVal) {
      match = false;
    }

    // Type filter
    if (selectedTypes.length > 0 && !selectedTypes.includes(cardType)) {
      match = false;
    }

    // Width filter
    if (widthVal && cardWidth !== widthVal) {
      match = false;
    }

    // Ratio filter
    if (ratioVal && cardRatio !== ratioVal) {
      match = false;
    }

    // Diameter filter
    if (diameterVal && cardDiameter !== diameterVal) {
      match = false;
    }

    if (match) {
      delete card.dataset.filteredOut;
    } else {
      card.dataset.filteredOut = 'true';
    }
  });

  currentPage = 1;
  updatePagination();
  updateActiveFilterTags();
}

function updateActiveFilterTags() {
  const container = document.getElementById('active-filter-tags');
  const brandVal = document.getElementById('filter-brand').value.trim();
  const widthVal = document.getElementById('filter-width').value.trim();
  const ratioVal = document.getElementById('filter-ratio').value.trim();
  const diameterVal = document.getElementById('filter-diameter').value.trim();
  
  const typeCheckboxes = document.querySelectorAll('input[name="tyre_type"]:checked');
  const selectedTypes = Array.from(typeCheckboxes).map(cb => cb.value);

  let tagsHTML = '';
  let count = 0;

  if (brandVal) {
    tagsHTML += `<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-800">Brand: ${brandVal} <i onclick="clearFilter('brand')" class="fa-solid fa-xmark text-slate-400 hover:text-red-500 cursor-pointer"></i></span>`;
    count++;
  }
  selectedTypes.forEach(t => {
    tagsHTML += `<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-800">Type: ${t} <i onclick="clearCheckbox('${t}')" class="fa-solid fa-xmark text-slate-400 hover:text-red-500 cursor-pointer"></i></span>`;
    count++;
  });
  if (widthVal) {
    tagsHTML += `<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-800">Width: ${widthVal} <i onclick="clearFilter('width')" class="fa-solid fa-xmark text-slate-400 hover:text-red-500 cursor-pointer"></i></span>`;
    count++;
  }
  if (ratioVal) {
    tagsHTML += `<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-800">Ratio: ${ratioVal} <i onclick="clearFilter('ratio')" class="fa-solid fa-xmark text-slate-400 hover:text-red-500 cursor-pointer"></i></span>`;
    count++;
  }
  if (diameterVal) {
    tagsHTML += `<span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-800">Diameter: ${diameterVal} <i onclick="clearFilter('diameter')" class="fa-solid fa-xmark text-slate-400 hover:text-red-500 cursor-pointer"></i></span>`;
    count++;
  }

  const badgeCount = document.getElementById('filter-count');
  if (badgeCount) badgeCount.textContent = count;

  if (count > 0) {
    container.innerHTML = `<span class="text-xs font-bold text-slate-500">Active Filters:</span> ` + tagsHTML + `<button onclick="resetAllFilters()" class="text-xs text-red-500 hover:underline font-bold ml-2">Clear All</button>`;
    container.classList.remove('hidden');
    container.classList.add('flex');
  } else {
    container.classList.add('hidden');
    container.classList.remove('flex');
  }
}

function clearFilter(type) {
  const el = document.getElementById('filter-' + type);
  if (el) {
    el.value = '';
    if (window.jQuery && $.fn.select2) {
      $('#filter-' + type).val('').trigger('change.select2');
    }
    applyFilters();
  }
}

function clearCheckbox(val) {
  const cb = document.querySelector(`input[name="tyre_type"][value="${val}"]`);
  if (cb) {
    cb.checked = false;
    applyFilters();
  }
}

function resetAllFilters() {
  document.getElementById('filter-brand').value = '';
  document.getElementById('filter-width').value = '';
  document.getElementById('filter-ratio').value = '';
  document.getElementById('filter-diameter').value = '';
  
  if (window.jQuery && $.fn.select2) {
    $('#filter-brand, #filter-width, #filter-ratio, #filter-diameter').val('').trigger('change.select2');
  }

  const typeCheckboxes = document.querySelectorAll('input[name="tyre_type"]');
  typeCheckboxes.forEach(cb => cb.checked = false);

  applyFilters();
}

function handleSortChange(sortType) {
  const grid = document.getElementById('products-grid');
  const cards = Array.from(grid.querySelectorAll('.product-card'));

  cards.sort((a, b) => {
    const priceA = parseFloat(a.getAttribute('data-price')) || 0;
    const priceB = parseFloat(b.getAttribute('data-price')) || 0;
    const ratingA = parseFloat(a.getAttribute('data-rating')) || 0;
    const ratingB = parseFloat(b.getAttribute('data-rating')) || 0;
    const nameA = a.getAttribute('data-name') || '';
    const nameB = b.getAttribute('data-name') || '';
    const idA = parseInt(a.getAttribute('data-id')) || 0;
    const idB = parseInt(b.getAttribute('data-id')) || 0;

    if (sortType === 'price-low') {
      return priceA - priceB;
    } else if (sortType === 'price-high') {
      return priceB - priceA;
    } else if (sortType === 'rating') {
      return ratingB - ratingA;
    } else if (sortType === 'name') {
      return nameA.localeCompare(nameB);
    } else {
      return idA - idB;
    }
  });

  cards.forEach(card => grid.appendChild(card));
  updatePagination();
}

function openMobileFilters() {
  const sidebar = document.getElementById('filters-sidebar');
  const backdrop = document.getElementById('filter-backdrop');
  if (sidebar && backdrop) {
    backdrop.classList.remove('opacity-0', 'pointer-events-none');
    backdrop.classList.add('opacity-100', 'pointer-events-auto');
    sidebar.classList.remove('-translate-x-full');
    sidebar.classList.add('translate-x-0');
    document.body.classList.add('overflow-hidden');
  }
}

function closeMobileFilters() {
  const sidebar = document.getElementById('filters-sidebar');
  const backdrop = document.getElementById('filter-backdrop');
  if (sidebar && backdrop) {
    backdrop.classList.remove('opacity-100', 'pointer-events-auto');
    backdrop.classList.add('opacity-0', 'pointer-events-none');
    sidebar.classList.remove('translate-x-0');
    sidebar.classList.add('-translate-x-full');
    document.body.classList.remove('overflow-hidden');
  }
}

function toggleMobileFilters() {
  const sidebar = document.getElementById('filters-sidebar');
  if (sidebar && sidebar.classList.contains('translate-x-0')) {
    closeMobileFilters();
  } else {
    openMobileFilters();
  }
}

// Initialize Select2 on dropdowns & pagination
document.addEventListener('DOMContentLoaded', () => {
  if (window.jQuery && $.fn.select2) {
    $('#filter-brand').select2({ placeholder: "Any brand (All)", width: '100%' });
    $('#filter-width').select2({ placeholder: "Any width", width: '100%' });
    $('#filter-ratio').select2({ placeholder: "Any ratio", width: '100%' });
    $('#filter-diameter').select2({ placeholder: "Any diameter", width: '100%' });

    $('#filter-brand, #filter-width, #filter-ratio, #filter-diameter').on('change.select2 change', function() {
      applyFilters();
    });
  }
  updatePagination();
});
</script>

<?php
include 'includes/footer.php';
?>
