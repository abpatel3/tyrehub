<?php
/**
 * Product Card Partial Component
 * Expects $p (array) with product fields
 */
if (!isset($p) || empty($p)) {
    return;
}
?>
<!-- Single Product Card (Copy-to-Copy Store Page Style) -->
<div class="product-card bg-white rounded-2xl border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-brand-blue transition-all duration-300 flex flex-col justify-between overflow-hidden group relative"
     data-id="<?php echo $p['id']; ?>"
     data-brand="<?php echo htmlspecialchars($p['brand']); ?>"
     data-type="<?php echo htmlspecialchars($p['type']); ?>"
     data-width="<?php echo htmlspecialchars($p['width']); ?>"
     data-ratio="<?php echo htmlspecialchars($p['ratio']); ?>"
     data-diameter="<?php echo htmlspecialchars($p['diameter']); ?>"
     data-price="<?php echo $p['price']; ?>"
     data-rating="<?php echo $p['rating']; ?>"
     data-name="<?php echo htmlspecialchars($p['brand'] . ' ' . $p['model']); ?>">
  
  <div>
    <!-- Compact Top Tyre Backdrop Container -->
    <div class="relative bg-gradient-to-b from-slate-50/80 to-white border-b border-slate-100 py-5 flex items-center justify-center overflow-hidden min-h-[220px]">
      
      <!-- Top Left: Crystal Clear Legible Brand Logo Badge -->
      <div class="absolute top-0 left-0 z-10 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-br-xl border-b border-r border-slate-200/80 shadow-2xs flex items-center justify-center min-h-[30px] min-w-[75px]">
        <img src="<?php echo $p['brand_logo']; ?>" alt="<?php echo htmlspecialchars($p['brand']); ?>" class="h-5 sm:h-5.5 max-w-[75px] w-auto object-contain">
      </div>

      <!-- Top Right: Discount Badge -->
      <span class="absolute top-0 right-0 z-10 bg-emerald-600 text-white font-semibold text-[11px] px-2.5 py-1 rounded-bl-lg uppercase tracking-wider">
        <?php echo isset($p['discount_pct']) ? $p['discount_pct'] : '15% OFF'; ?>
      </span>

      <!-- Center Tyre Image -->
      <a href="product-details.php?id=<?php echo $p['id']; ?>" class="w-full flex items-center justify-center px-4 pt-1">
        <img src="<?php echo $p['image']; ?>" alt="<?php echo htmlspecialchars($p['brand'] . ' ' . $p['model']); ?>" class="h-56 sm:h-60 w-auto object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-300">
      </a>
    </div>

    <!-- Product Info Content -->
    <div class="p-3 space-y-2">
      
      <!-- Brand Tag & Rating Row -->
      <div class="flex items-center justify-between gap-2">
        <span class="text-[11px] font-semibold uppercase tracking-wider text-slate-600">
          <?php echo isset($p['brand_label']) ? $p['brand_label'] : $p['brand'] . ' Tyres'; ?>
        </span>
        <div class="flex items-center gap-1 text-slate-500 font-medium text-[11px]">
          <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
          <span class="text-slate-800 font-bold"><?php echo $p['rating']; ?></span>
          <span class="text-slate-400">(<?php echo $p['reviews']; ?>)</span>
        </div>
      </div>

      <!-- Product Title -->
      <h3 class="text-base sm:text-lg font-medium text-slate-900 font-outfit leading-snug group-hover:text-brand-blue transition">
        <a href="product-details.php?id=<?php echo $p['id']; ?>" class="hover:text-brand-blue transition">
          <?php echo $p['model']; ?>
        </a>
      </h3>

      <!-- Compact Pills -->
      <div class="flex flex-wrap gap-1.5 pt-0.5">
        <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">
          <?php echo $p['size_label']; ?>
        </span>
        <span class="h-[22px] inline-flex items-center text-[10.5px] font-medium px-2 rounded-md bg-slate-100 text-slate-700">
          <?php echo $p['type']; ?>
        </span>
        <span class="h-[22px] inline-flex items-center text-[10.5px] font-semibold px-2 rounded-md bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40">
          <?php echo $p['warranty']; ?>
        </span>
      </div>

      <!-- Price Section -->
      <div class="pt-3 border-t border-slate-100 space-y-1">
        <span class="text-[11px] text-slate-500 font-medium block">Special Price</span>
        <div class="flex items-baseline justify-between gap-2">
          <div class="flex items-baseline gap-2">
            <span class="text-xl  font-bold text-brand-blue font-outfit tracking-tight">
              ₹<?php echo number_format($p['price']); ?>
            </span>
            <span class="text-xs text-slate-400 line-through font-medium">
              ₹<?php echo number_format($p['original_price']); ?>
            </span>
          </div>
          <!-- Premium Softer Outline Savings Badge -->
          <span class="bg-emerald-50 text-emerald-700 border border-emerald-300/80 font-bold text-[11px] px-2.5 py-0.5 rounded-lg shadow-2xs">
            Save ₹<?php echo $p['save_amount']; ?>
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

  <!-- Integrated Clean Stepper Row (- 4 +) & Primary Yellow Add to Cart Button -->
  <div class="px-4 pb-4 pt-1 flex items-center gap-2">
    
    <!-- Stepper (- 4 +) -->
    <div class="h-9 flex items-center bg-slate-50 border border-slate-300 rounded-lg overflow-hidden shrink-0 shadow-2xs hover:border-brand-blue transition">
      <button type="button" onclick="changeProductCardQty(this, -1)" class="w-6 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-r border-slate-200/80">
        <i class="fa-solid fa-minus text-xs"></i>
      </button>
      <div class="px-3 min-w-[32px] text-center bg-white h-full flex items-center justify-center">
        <span class="qty-num text-sm font-bold text-slate-900 font-outfit">4</span>
      </div>
      <button type="button" onclick="changeProductCardQty(this, 1)" class="w-6 h-full bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-bold transition flex items-center justify-center border-l border-slate-200/80">
        <i class="fa-solid fa-plus text-xs"></i>
      </button>
    </div>

    <!-- Add to Cart Primary Yellow Button -->
    <button type="button" onclick="addProductToCart(<?php echo $p['id']; ?>, '<?php echo addslashes($p['brand'] . ' ' . $p['model']); ?>', <?php echo $p['price']; ?>, this)" class="h-9 flex-1 bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-bold text-xs uppercase tracking-wider rounded-lg transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-2 active:scale-[0.98]">
      <i class="fa-solid fa-cart-shopping text-xs"></i> ADD TO CART
    </button>
  </div>
</div>
