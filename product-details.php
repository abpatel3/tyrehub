<?php
$page_title = "Product Details - TyreHub";
$current_page = "buy-tyre";
include 'includes/interface.php';
include 'includes/header.php';
require_once 'includes/products-data.php';

// Get Product ID from GET param (Default to 1 if not provided or invalid)
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$product = null;

foreach ($products_db as $p_item) {
    if ($p_item['id'] === $product_id) {
        $product = $p_item;
        break;
    }
}

// Fallback if product not found
if (!$product) {
    $product = $products_db[0];
}

// Get Related Products (exclude current product, up to 8 for slider carousel)
$related_products = [];
foreach ($products_db as $rel) {
    if ($rel['id'] !== $product['id']) {
        $related_products[] = $rel;
        if (count($related_products) >= 8) break;
    }
}

// Gallery images array (main + unique newly uploaded views - no repetition)
$all_uploaded_images = [
    $product['image'],
    'assets/image/product-3.png',
    'assets/image/product-4.png',
    'assets/image/product-5.png',
    'assets/image/product-6.png',
    'assets/image/product-1.png'
];
$gallery_images = array_values(array_unique($all_uploaded_images));
?>

<!-- Custom Styling for Product Details Page -->
<style>
  .gallery-thumb.active {
    border-color: #2F3672 !important;
    box-shadow: 0 0 0 2px rgba(47, 54, 114, 0.2);
  }
  .tab-btn.active {
    color: #2F3672 !important;
    border-bottom-color: #2F3672 !important;
    font-weight: 600 !important;
  }
  /* Custom scrollbar hiding */
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<!-- ========================================== -->
<!-- 1. BREADCRUMB SECTION                      -->
<!-- ========================================== -->
<section class="bg-slate-50 border-b border-slate-200/80 py-3">
  <div class="container mx-auto px-3">
    <nav class="flex items-center flex-wrap gap-2 text-xs font-medium text-slate-500">
      <a href="index.php" class="hover:text-brand-blue transition">Home</a>
      <span>/</span>
      <a href="buy-tyre.php" class="hover:text-brand-blue transition"><?php echo htmlspecialchars($product['brand']); ?></a>
      <span>/</span>
      <span class="text-slate-800 font-semibold"><?php echo htmlspecialchars($product['model']); ?></span>
    </nav>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. MAIN PRODUCT SECTION (2-COL LAYOUT)     -->
<!-- ========================================== -->
<section class="py-7 sm:py-9 bg-white">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7 lg:gap-10 items-start">
      
      <!-- LEFT COLUMN: PRODUCT GALLERY (5 COLS) -->
      <div class="lg:col-span-6 xl:col-span-5 space-y-2.5">
        
        <div class="flex flex-col-reverse sm:flex-row gap-3 sm:gap-4 items-start w-full min-w-0">
          
          <!-- Vertical Thumbnails Slider Container with Up/Down Controls -->
          <div class="relative w-full sm:w-20 shrink-0 flex flex-col items-center">
            
            <!-- Up Scroll Arrow (Desktop only) -->
            <button type="button" onclick="scrollThumbnails(-1)" class="hidden sm:flex w-full h-6 items-center justify-center text-slate-400 hover:text-brand-blue hover:bg-slate-100 rounded-lg transition mb-1 cursor-pointer" title="Previous images">
              <i class="fa-solid fa-chevron-up text-xs"></i>
            </button>

            <!-- Thumbnails List (Vertical scroll on desktop, horizontal scroll on mobile) -->
            <div id="thumbnails-container" class="flex sm:flex-col gap-2 overflow-x-auto sm:overflow-y-auto w-full sm:max-h-[352px] scroll-smooth no-scrollbar py-0.5">
              <?php foreach ($gallery_images as $idx => $thumb_src): ?>
                <button type="button" 
                        onclick="switchMainImage('<?php echo $thumb_src; ?>', this)" 
                        class="gallery-thumb <?php echo $idx === 0 ? 'active' : ''; ?> w-14 h-14 sm:w-20 sm:h-20 rounded-xl border border-slate-200 bg-slate-50/70 p-1.5 flex items-center justify-center hover:border-brand-blue/60 transition shrink-0 cursor-pointer overflow-hidden">
                  <img src="<?php echo $thumb_src; ?>" alt="Thumbnail <?php echo $idx + 1; ?>" class="w-full h-full object-contain">
                </button>
              <?php endforeach; ?>
            </div>

            <!-- Down Scroll Arrow (Desktop only) -->
            <button type="button" onclick="scrollThumbnails(1)" class="hidden sm:flex w-full h-6 items-center justify-center text-slate-400 hover:text-brand-blue hover:bg-slate-100 rounded-lg transition mt-1 cursor-pointer" title="Next images">
              <i class="fa-solid fa-chevron-down text-xs"></i>
            </button>

          </div>

          <!-- Main Showcase Image Container (Interactive Magnifying Glass Zoom) -->
          <div id="main-image-container" class="relative flex-1 w-full min-w-0 bg-gradient-to-b from-slate-50 to-slate-100/50 rounded-2xl border border-slate-200/90 p-5 sm:p-7 flex items-center justify-center min-h-[320px] sm:min-h-[400px] overflow-hidden group cursor-crosshair select-none">
            
            <!-- Top-Left: Sale / Discount Badge -->
            <?php if (!empty($product['discount_pct'])): ?>
              <div class="absolute top-3.5 left-3.5 z-10 pointer-events-none">
                <span class="bg-red-600 text-white font-semibold text-[11px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-2xs flex items-center gap-1">
                  <i class="fa-solid fa-tag text-[9px]"></i>
                  Sale! <?php echo $product['discount_pct']; ?>
                </span>
              </div>
            <?php endif; ?>

            <!-- Top-Right: Magnify Zoom Indicator Badge -->
            <div class="absolute top-3.5 right-3.5 z-10 px-2.5 py-1 rounded-lg bg-white/90 backdrop-blur-xs text-slate-600 border border-slate-200/80 text-[11px] font-medium flex items-center gap-1.5 shadow-2xs pointer-events-none">
              <i class="fa-solid fa-magnifying-glass text-[10px] text-brand-blue"></i>
              <span class="hidden sm:inline">Hover to Zoom</span>
              <span class="sm:hidden">Touch to Zoom</span>
            </div>

            <!-- Main Product Image -->
            <div class="w-full h-full flex items-center justify-center pointer-events-none">
              <img id="main-product-image" 
                   src="<?php echo $product['image']; ?>" 
                   alt="<?php echo htmlspecialchars($product['brand'] . ' ' . $product['model']); ?>" 
                   class="max-h-64 sm:max-h-76 w-auto object-contain drop-shadow-lg transition-transform duration-200">
            </div>

            <!-- Interactive Circular Magnifying Glass Lens -->
            <div id="magnifier-lens" 
                 class="hidden absolute pointer-events-none z-30 w-36 h-36 rounded-full border-2 border-brand-blue bg-white bg-no-repeat shadow-2xl" 
                 style="box-shadow: 0 10px 25px -3px rgba(0,0,0,0.35), inset 0 0 15px rgba(0,0,0,0.15);"></div>

            <!-- Bottom-Right: Brand Logo Overlay Badge -->
            <div class="absolute bottom-3.5 right-3.5 z-10 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-xl border border-slate-200/80 shadow-2xs flex items-center justify-center min-h-[32px] pointer-events-none">
              <img src="<?php echo $product['brand_logo']; ?>" alt="<?php echo htmlspecialchars($product['brand']); ?>" class="h-5 sm:h-6 max-w-[80px] w-auto object-contain">
            </div>

          </div>

        </div>

        <!-- Wireframe Representation Disclaimer Note -->
        <p class="text-[11px] text-slate-400 italic pt-0.5 text-center sm:text-left">
          * Images displayed are for representation purpose only. The actual product may differ.
        </p>

      </div>

      <!-- RIGHT COLUMN: PRODUCT SPECIFICATIONS & PURCHASE (7 COLS) -->
      <div class="lg:col-span-6 xl:col-span-7 space-y-5">
        
        <!-- Product Brand & Title Header -->
        <div class="space-y-1.5">
          <div class="flex items-center justify-between gap-3">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-blue-50 text-brand-blue text-xs font-semibold uppercase tracking-wider">
              <i class="fa-solid fa-award text-[10px]"></i>
              <?php echo htmlspecialchars($product['brand_label']); ?>
            </span>

            <!-- Rating Pill -->
            <div class="flex items-center gap-1.5 bg-amber-50 border border-amber-200/60 px-2 py-0.5 rounded-lg text-xs">
              <div class="flex items-center text-amber-400 text-[10px]">
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="font-semibold text-slate-800"><?php echo $product['rating']; ?></span>
              <span class="text-slate-400 text-[11px]">(<?php echo $product['reviews']; ?> reviews)</span>
            </div>
          </div>

          <h1 class="text-xl sm:text-2xl font-bold text-slate-900 font-outfit leading-snug">
            <?php echo htmlspecialchars($product['brand'] . ' ' . $product['model']); ?>
          </h1>

          <p class="text-xs text-slate-500 font-normal">
            Suitable for: <span class="text-slate-700 font-medium"><?php echo htmlspecialchars($product['suitable_for']); ?></span>
          </p>
        </div>

        <!-- Attribute Selectors (Width, Ratio, Diameter) matching Wireframe -->
        <div class="bg-slate-50/90 border border-slate-200/80 rounded-2xl p-3.5 sm:p-4 space-y-3">
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
            
            <!-- Width Selector -->
            <div class="space-y-1">
              <label class="text-[11px] font-semibold text-slate-700 uppercase tracking-wide flex items-center justify-between">
                <span>Width</span>
                <span class="text-[10px] text-slate-400 font-normal">mm</span>
              </label>
              <div class="relative">
                <select id="attr-width" onchange="updateSelectedSpec()" class="w-full appearance-none bg-white border border-slate-300 rounded-xl px-3 py-2 pr-7 text-xs font-medium text-slate-800 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue shadow-2xs cursor-pointer">
                  <option value="145" <?php echo $product['width'] == '145' ? 'selected' : ''; ?>>145</option>
                  <option value="155" <?php echo $product['width'] == '155' ? 'selected' : ''; ?>>155</option>
                  <option value="165" <?php echo $product['width'] == '165' ? 'selected' : ''; ?>>165</option>
                  <option value="175" <?php echo $product['width'] == '175' ? 'selected' : ''; ?>>175</option>
                  <option value="185" <?php echo $product['width'] == '185' ? 'selected' : ''; ?>>185</option>
                  <option value="195" <?php echo $product['width'] == '195' ? 'selected' : ''; ?>>195</option>
                  <option value="205" <?php echo $product['width'] == '205' ? 'selected' : ''; ?>>205</option>
                  <option value="215" <?php echo $product['width'] == '215' ? 'selected' : ''; ?>>215</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                  <i class="fa-solid fa-chevron-down text-[9px]"></i>
                </div>
              </div>
            </div>

            <!-- Ratio Selector -->
            <div class="space-y-1">
              <label class="text-[11px] font-semibold text-slate-700 uppercase tracking-wide flex items-center justify-between">
                <span>Ratio</span>
                <span class="text-[10px] text-slate-400 font-normal">%</span>
              </label>
              <div class="relative">
                <select id="attr-ratio" onchange="updateSelectedSpec()" class="w-full appearance-none bg-white border border-slate-300 rounded-xl px-3 py-2 pr-7 text-xs font-medium text-slate-800 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue shadow-2xs cursor-pointer">
                  <option value="55" <?php echo $product['ratio'] == '55' ? 'selected' : ''; ?>>55</option>
                  <option value="60" <?php echo $product['ratio'] == '60' ? 'selected' : ''; ?>>60</option>
                  <option value="65" <?php echo $product['ratio'] == '65' ? 'selected' : ''; ?>>65</option>
                  <option value="70" <?php echo $product['ratio'] == '70' ? 'selected' : ''; ?>>70</option>
                  <option value="80" <?php echo $product['ratio'] == '80' ? 'selected' : ''; ?>>80</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                  <i class="fa-solid fa-chevron-down text-[9px]"></i>
                </div>
              </div>
            </div>

            <!-- Diameter Selector -->
            <div class="space-y-1">
              <label class="text-[11px] font-semibold text-slate-700 uppercase tracking-wide flex items-center justify-between">
                <span>Diameter</span>
                <span class="text-[10px] text-slate-400 font-normal">Inch</span>
              </label>
              <div class="relative">
                <select id="attr-diameter" onchange="updateSelectedSpec()" class="w-full appearance-none bg-white border border-slate-300 rounded-xl px-3 py-2 pr-7 text-xs font-medium text-slate-800 outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue shadow-2xs cursor-pointer">
                  <option value="R12" <?php echo $product['diameter'] == 'R12' ? 'selected' : ''; ?>>R12 (12")</option>
                  <option value="R13" <?php echo $product['diameter'] == 'R13' ? 'selected' : ''; ?>>R13 (13")</option>
                  <option value="R14" <?php echo $product['diameter'] == 'R14' ? 'selected' : ''; ?>>R14 (14")</option>
                  <option value="R15" <?php echo $product['diameter'] == 'R15' ? 'selected' : ''; ?>>R15 (15")</option>
                  <option value="R16" <?php echo $product['diameter'] == 'R16' ? 'selected' : ''; ?>>R16 (16")</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                  <i class="fa-solid fa-chevron-down text-[9px]"></i>
                </div>
              </div>
            </div>

          </div>

          <div class="flex items-center gap-2 pt-0.5">
            <span class="text-xs text-slate-500 font-normal">Selected Size:</span>
            <span id="selected-size-badge" class="px-2 py-0.5 rounded-md bg-brand-blue text-brand-yellow font-semibold text-xs font-outfit">
              <?php echo $product['size_label']; ?>
            </span>
            <span class="px-2 py-0.5 rounded-md bg-slate-200 text-slate-700 font-medium text-xs">
              <?php echo $product['type']; ?>
            </span>
          </div>
        </div>

        <!-- Wireframe GST Notice & Pricing -->
        <div class="space-y-1.5 pt-1 border-t border-slate-100">
          
          <!-- Wireframe Note -->
          <p class="text-xs text-slate-500 font-normal">
            * All prices are including applicable GST.
          </p>

          <!-- Price Display -->
          <div class="flex items-baseline flex-wrap gap-2.5">
            <span class="text-xs sm:text-sm text-slate-400 line-through font-normal">
              ₹<?php echo number_format($product['original_price'], 2); ?>
            </span>
            <span class="text-2xl sm:text-3xl font-extrabold text-brand-blue font-outfit tracking-tight">
              ₹<?php echo number_format($product['price'], 2); ?>
            </span>
            <span class="bg-emerald-50 text-emerald-700 border border-emerald-300 font-semibold text-xs px-2.5 py-0.5 rounded-lg shadow-2xs">
              Save ₹<?php echo number_format($product['save_amount'], 2); ?>
            </span>
          </div>

        </div>

        <!-- Quantity & Add to Cart Row (Matching Product Card Stepper Style) -->
        <div class="pt-1 flex items-center gap-3">
          
          <!-- Stepper (- 4 +) matching Product Card -->
          <div class="h-11 flex items-center bg-slate-50 border border-slate-300 rounded-xl overflow-hidden shrink-0 shadow-2xs hover:border-brand-blue transition">
            <button type="button" onclick="changeDetailQty(-1)" class="w-8 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-r border-slate-200/80 cursor-pointer">
              <i class="fa-solid fa-minus text-xs"></i>
            </button>
            <div class="px-4 min-w-[42px] text-center bg-white h-full flex items-center justify-center">
              <span id="detail-qty-val" class="text-sm font-bold text-slate-900 font-outfit">4</span>
            </div>
            <button type="button" onclick="changeDetailQty(1)" class="w-8 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-l border-slate-200/80 cursor-pointer">
              <i class="fa-solid fa-plus text-xs"></i>
            </button>
          </div>

          <!-- Add to Cart Primary Yellow Button -->
          <button type="button" 
                  onclick="addCurrentDetailToCart()" 
                  class="flex-1 h-11 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider rounded-xl transition shadow-xs hover:shadow-md flex items-center justify-center gap-2 active:scale-[0.99] cursor-pointer">
            <i class="fa-solid fa-cart-shopping text-xs"></i>
            <span>Add to cart</span>
          </button>

        </div>

        <!-- Key Highlights Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 pt-2 border-t border-slate-100">
          <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/60">
            <i class="fa-solid fa-wrench text-brand-blue text-xs"></i>
            <span class="text-[11px] font-medium text-slate-700 leading-tight">Free Store Fitment</span>
          </div>
          <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/60">
            <i class="fa-solid fa-shield-halved text-emerald-600 text-xs"></i>
            <span class="text-[11px] font-medium text-slate-700 leading-tight"><?php echo $product['warranty']; ?></span>
          </div>
          <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/60">
            <i class="fa-solid fa-certificate text-amber-500 text-xs"></i>
            <span class="text-[11px] font-medium text-slate-700 leading-tight">100% Genuine</span>
          </div>
          <div class="flex items-center gap-2 p-2 rounded-xl bg-slate-50 border border-slate-200/60">
            <i class="fa-solid fa-truck-fast text-brand-blue text-xs"></i>
            <span class="text-[11px] font-medium text-slate-700 leading-tight">Fast Delivery</span>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 3. TABBED SECTION (DESCRIPTION, REVIEWS, WARRANTY) -->
<!-- ========================================== -->
<section class="py-9 bg-slate-50/70 border-y border-slate-200/80">
  <div class="container mx-auto px-3">
    
    <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs overflow-hidden">
      
      <!-- Tab Header Navigation matching Wireframe -->
      <div class="flex items-center border-b border-slate-200 overflow-x-auto scrollbar-none px-4 sm:px-6 bg-slate-50/50">
        <button type="button" 
                onclick="switchTab('description', this)" 
                class="tab-btn active py-3.5 px-4 sm:px-5 text-xs sm:text-sm font-semibold text-slate-600 border-b-2 border-transparent hover:text-brand-blue transition whitespace-nowrap cursor-pointer">
          Description
        </button>
        <button type="button" 
                onclick="switchTab('reviews', this)" 
                class="tab-btn py-3.5 px-4 sm:px-5 text-xs sm:text-sm font-medium text-slate-600 border-b-2 border-transparent hover:text-brand-blue transition whitespace-nowrap cursor-pointer">
          Reviews (<?php echo $product['reviews']; ?>)
        </button>
        <button type="button" 
                onclick="switchTab('warranty', this)" 
                class="tab-btn py-3.5 px-4 sm:px-5 text-xs sm:text-sm font-medium text-slate-600 border-b-2 border-transparent hover:text-brand-blue transition whitespace-nowrap cursor-pointer">
          Guarantee/Warranty
        </button>
      </div>

      <!-- Tab Content Area -->
      <div class="p-6 sm:p-8">
        
        <!-- 1. Description Tab -->
        <div id="tab-description" class="tab-content space-y-6">
          <div>
            <h3 class="text-base sm:text-lg font-bold text-slate-900 font-outfit mb-2">
              Product Overview
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              The <strong><?php echo htmlspecialchars($product['brand'] . ' ' . $product['model']); ?></strong> is engineered with cutting-edge polymer compound technology to deliver outstanding grip, superior fuel efficiency, and ultra-quiet ride comfort. Designed specifically for Indian road conditions, its optimized tread pattern minimizes irregular wear while maximizing braking responsiveness in both dry and wet conditions.
            </p>
          </div>

          <!-- Specifications Table -->
          <div>
            <h4 class="text-sm font-bold text-slate-900 font-outfit mb-3">
              Technical Specifications
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
              <div class="border border-slate-200/80 rounded-2xl p-4 bg-slate-50/50 space-y-2">
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Brand</span>
                  <span class="font-bold text-slate-900"><?php echo htmlspecialchars($product['brand']); ?></span>
                </div>
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Model</span>
                  <span class="font-bold text-slate-900"><?php echo htmlspecialchars($product['model']); ?></span>
                </div>
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Tyre Size</span>
                  <span class="font-bold text-slate-900"><?php echo htmlspecialchars($product['size_label']); ?></span>
                </div>
                <div class="flex justify-between py-1.5 text-xs">
                  <span class="text-slate-500 font-medium">Tyre Construction</span>
                  <span class="font-bold text-slate-900"><?php echo htmlspecialchars($product['type']); ?> Radial</span>
                </div>
              </div>

              <div class="border border-slate-200/80 rounded-2xl p-4 bg-slate-50/50 space-y-2">
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Warranty Period</span>
                  <span class="font-bold text-emerald-700"><?php echo htmlspecialchars($product['warranty']); ?> Standard</span>
                </div>
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Speed Rating</span>
                  <span class="font-bold text-slate-900">T (Up to 190 km/h)</span>
                </div>
                <div class="flex justify-between py-1.5 border-b border-slate-200/60 text-xs">
                  <span class="text-slate-500 font-medium">Load Index</span>
                  <span class="font-bold text-slate-900">82 (Up to 475 kg per tyre)</span>
                </div>
                <div class="flex justify-between py-1.5 text-xs">
                  <span class="text-slate-500 font-medium">Country of Origin</span>
                  <span class="font-bold text-slate-900">India</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Reviews Tab -->
        <div id="tab-reviews" class="tab-content hidden space-y-6">
          <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-slate-200">
            <div>
              <h3 class="text-lg font-bold text-slate-900 font-outfit">Customer Feedback &amp; Ratings</h3>
              <p class="text-xs text-slate-500 font-medium">Based on <?php echo $product['reviews']; ?> verified customer purchases.</p>
            </div>
            <button type="button" class="px-4 py-2 bg-brand-blue text-white hover:bg-brand-blueHover text-xs font-bold rounded-xl transition shadow-xs">
              Write a Review
            </button>
          </div>

          <div class="space-y-4">
            <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/60 space-y-1.5">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="font-bold text-xs text-slate-900">Rajesh Patel (Ahmedabad)</span>
                  <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">Verified Buyer</span>
                </div>
                <div class="flex items-center text-amber-400 text-xs">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
              </div>
              <p class="text-xs text-slate-600 leading-relaxed">
                Superb quality tyres! Fitment at the TyreHub Bodakdev store was completely free and took only 20 minutes including wheel balancing. Ride is ultra smooth.
              </p>
            </div>

            <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/60 space-y-1.5">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="font-bold text-xs text-slate-900">Amit Shah (Gandhinagar)</span>
                  <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">Verified Buyer</span>
                </div>
                <div class="flex items-center text-amber-400 text-xs">
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                </div>
              </div>
              <p class="text-xs text-slate-600 leading-relaxed">
                Great road grip during monsoon rain. Saved ₹950 compared to local market rates. Highly recommend TyreHub!
              </p>
            </div>
          </div>
        </div>

        <!-- 3. Guarantee/Warranty Tab -->
        <div id="tab-warranty" class="tab-content hidden space-y-4">
          <h3 class="text-lg font-bold text-slate-900 font-outfit">Official Manufacturer Warranty Policy</h3>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
            All tyres sold on TyreHub are <strong>100% brand new and covered under standard <?php echo $product['warranty']; ?></strong> provided directly by <?php echo htmlspecialchars($product['brand']); ?> India.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-2xl border border-emerald-200 bg-emerald-50/50 space-y-1.5">
              <h4 class="text-xs font-bold text-emerald-900 flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check text-emerald-600"></i> What is Covered
              </h4>
              <ul class="text-xs text-slate-600 space-y-1 list-disc list-inside">
                <li>Manufacturing and compound defects</li>
                <li>Tread separation or sidewall bulges</li>
                <li>Rapid abnormal tread wear under normal alignment</li>
              </ul>
            </div>

            <div class="p-4 rounded-2xl border border-amber-200 bg-amber-50/50 space-y-1.5">
              <h4 class="text-xs font-bold text-amber-900 flex items-center gap-1.5">
                <i class="fa-solid fa-circle-exclamation text-amber-600"></i> How to Claim
              </h4>
              <ul class="text-xs text-slate-600 space-y-1 list-disc list-inside">
                <li>Instant digital warranty invoice provided upon purchase</li>
                <li>Visit any authorized TyreHub or brand dealer center</li>
                <li>Dedicated support helpline: 1800-123-5510</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 4. RELATED PRODUCTS SECTION (THEMED SLIDER) -->
<!-- ========================================== -->
<section class="py-12 bg-slate-50/60 border-t border-slate-200/80">
  <div class="container mx-auto px-3 space-y-4">
    
    <!-- Theme Section Header with Navigation Controls -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-2 border-b border-slate-200/60">
      <div>
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-yellow/10 border border-brand-yellow/20 text-brand-blue text-xs font-bold uppercase tracking-wider mb-2">
          <i class="fa-solid fa-dharmachakra"></i> Similar Tyres
        </div>
        <h2 class="text-2xl sm:text-3xl font-medium text-brand-blue">
          Related <span class="font-bold">Products</span>
        </h2>
        <p class="text-xs sm:text-sm text-slate-500 font-medium mt-1">
          Popular alternative tyre options matching your vehicle specifications
        </p>
      </div>

      <!-- Slider Controls & View All Link -->
      <div class="flex items-center gap-3 self-end sm:self-auto">
        <!-- Slider Prev / Next Controls for Slick -->
        <div class="flex items-center gap-1.5 bg-white p-1 rounded-2xl border border-slate-200 shadow-2xs">
          <button type="button" 
                  id="related-prev-btn" 
                  class="w-9 h-9 rounded-xl bg-slate-50 hover:bg-brand-blue hover:text-white text-slate-700 transition flex items-center justify-center cursor-pointer active:scale-95 shadow-xs" 
                  title="Previous Products">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <button type="button" 
                  id="related-next-btn" 
                  class="w-9 h-9 rounded-xl bg-slate-50 hover:bg-brand-blue hover:text-white text-slate-700 transition flex items-center justify-center cursor-pointer active:scale-95 shadow-xs" 
                  title="Next Products">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>

        <!-- View All Link -->
        <a href="buy-tyre.php" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white hover:bg-brand-blue hover:text-white text-brand-blue border border-slate-200 text-xs font-bold transition shadow-2xs group">
          <span>View all tyres</span>
          <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
        </a>
      </div>
    </div>

    <!-- Related Products Slick Carousel Slider -->
    <div class="relative">
      <div id="related-products-slider" class="slick-carousel -mx-3">
        <?php foreach ($related_products as $p): ?>
          <div class="px-3 pb-3 h-full">
            <?php include 'includes/product-card.php'; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT LOGIC                           -->
<!-- ========================================== -->
<script>
function switchMainImage(imgSrc, btnElem) {
  const mainImg = document.getElementById('main-product-image');
  if (mainImg) mainImg.src = imgSrc;

  const lens = document.getElementById('magnifier-lens');
  if (lens) lens.style.backgroundImage = `url('${imgSrc}')`;

  document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
  if (btnElem) {
    btnElem.classList.add('active');
    btnElem.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' });
  }
}

function scrollThumbnails(direction) {
  const container = document.getElementById('thumbnails-container');
  if (container) {
    const scrollAmount = 88; // height of thumbnail + gap
    container.scrollBy({
      top: direction * scrollAmount,
      behavior: 'smooth'
    });
  }
}

// ==========================================
// INTERACTIVE MAGNIFYING GLASS ZOOM LOGIC (PIXEL-PERFECT ACCURACY)
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
  const zoomContainer = document.getElementById('main-image-container');
  const mainImg = document.getElementById('main-product-image');
  const lens = document.getElementById('magnifier-lens');

  function updateLensBackground() {
    if (lens && mainImg) {
      lens.style.backgroundImage = `url('${mainImg.src}')`;
    }
  }

  if (zoomContainer && mainImg && lens) {
    updateLensBackground();

    function moveLens(e) {
      const imgRect = mainImg.getBoundingClientRect();
      const containerRect = zoomContainer.getBoundingClientRect();
      const lensWidth = lens.offsetWidth || 160;
      const lensHeight = lens.offsetHeight || 160;

      // Cursor position in viewport
      let clientX = e.clientX;
      let clientY = e.clientY;
      if (e.touches && e.touches.length > 0) {
        clientX = e.touches[0].clientX;
        clientY = e.touches[0].clientY;
      }

      // Cursor relative to actual image
      const cursorImgX = clientX - imgRect.left;
      const cursorImgY = clientY - imgRect.top;

      // Check if cursor is over the image bounds (with a small 10px buffer)
      if (cursorImgX < -10 || cursorImgX > imgRect.width + 10 || 
          cursorImgY < -10 || cursorImgY > imgRect.height + 10) {
        lens.classList.add('hidden');
        return;
      }

      lens.classList.remove('hidden');

      // Position lens center at cursor relative to container
      const containerX = clientX - containerRect.left;
      const containerY = clientY - containerRect.top;
      lens.style.left = (containerX - lensWidth / 2) + 'px';
      lens.style.top = (containerY - lensHeight / 2) + 'px';

      // Exact optical zoom factor (2.5x)
      const zoomFactor = 2.5;
      lens.style.backgroundSize = `${imgRect.width * zoomFactor}px ${imgRect.height * zoomFactor}px`;

      // Pixel-perfect background offset:
      // The point (cursorImgX, cursorImgY) appears exactly at the center of the lens (lensWidth/2, lensHeight/2)
      const bgX = (lensWidth / 2) - (cursorImgX * zoomFactor);
      const bgY = (lensHeight / 2) - (cursorImgY * zoomFactor);

      lens.style.backgroundPosition = `${bgX}px ${bgY}px`;
    }

    zoomContainer.addEventListener('mouseenter', function(e) {
      updateLensBackground();
      moveLens(e);
    });

    zoomContainer.addEventListener('mousemove', moveLens);

    zoomContainer.addEventListener('mouseleave', function() {
      lens.classList.add('hidden');
    });

    // Touch device support
    zoomContainer.addEventListener('touchstart', function(e) {
      updateLensBackground();
      moveLens(e);
    }, { passive: true });

    zoomContainer.addEventListener('touchmove', moveLens, { passive: true });

    zoomContainer.addEventListener('touchend', function() {
      lens.classList.add('hidden');
    });
  }
});

function switchTab(tabId, btnElem) {
  document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

  const targetContent = document.getElementById('tab-' + tabId);
  if (targetContent) targetContent.classList.remove('hidden');
  if (btnElem) btnElem.classList.add('active');
}

function updateSelectedSpec() {
  const width = document.getElementById('attr-width').value;
  const ratio = document.getElementById('attr-ratio').value;
  const diameter = document.getElementById('attr-diameter').value;
  const badge = document.getElementById('selected-size-badge');
  if (badge) {
    badge.textContent = `${width}/${ratio} ${diameter}`;
  }
}

let currentDetailQty = 4;
function changeDetailQty(delta) {
  currentDetailQty = Math.max(1, currentDetailQty + delta);
  const qtyElem = document.getElementById('detail-qty-val');
  if (qtyElem) {
    qtyElem.textContent = currentDetailQty;
  }
}

function addCurrentDetailToCart() {
  const qty = currentDetailQty;
  const productName = '<?php echo addslashes($product['brand'] . ' ' . $product['model']); ?>';
  const price = <?php echo $product['price']; ?>;
  
  if (typeof updateCartCount === 'function') {
    // Add multiple
    for (let i = 0; i < qty; i++) {
      updateCartCount();
    }
  }

  // Navigate to Select Service Partner Page
  window.location.href = 'select-service-partner.php?id=<?php echo $product['id']; ?>&qty=' + qty;
}
</script>

<?php
include 'includes/footer.php';
?>

<!-- Initialize Slick Carousel for Related Products -->
<script>
$(document).ready(function() {
  if ($('#related-products-slider').length && typeof $.fn.slick !== 'undefined') {
    $('#related-products-slider').slick({
      dots: false,
      infinite: true,
      speed: 450,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      pauseOnHover: true,
      arrows: true,
      prevArrow: $('#related-prev-btn'),
      nextArrow: $('#related-next-btn'),
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
});
</script>
