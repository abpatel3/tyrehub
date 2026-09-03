<?php
/**
 * Shared Checkout / Booking Flow Stepper Component
 * Keeps the 5-step progress bar 100% identical across all ordering pages:
 * Step 1: Select Tyre or Services (buy-tyre.php)
 * Step 2: Select Service Partner (select-service-partner.php)
 * Step 3: Review Order (cart.php)
 * Step 4: Check Out & Pay
 * Step 5: Order Placed
 */

$current_step = $checkout_step ?? 1;
$p_id = $selected_id ?? ($selected_product['id'] ?? 1);
$p_qty = $selected_qty ?? 4;

$steps = [
    1 => [
        'num' => 1,
        'title' => 'Select Tyre or Services',
        'url' => 'buy-tyre.php'
    ],
    2 => [
        'num' => 2,
        'title' => 'Select Service Partner',
        'url' => "select-service-partner.php?id={$p_id}&qty={$p_qty}"
    ],
    3 => [
        'num' => 3,
        'title' => 'Review Order',
        'url' => "cart.php?id={$p_id}&qty={$p_qty}"
    ],
    4 => [
        'num' => 4,
        'title' => 'Check Out & Pay',
        'url' => "checkout.php?id={$p_id}&qty={$p_qty}"
    ],
    5 => [
        'num' => 5,
        'title' => 'Order Placed',
        'url' => 'order-placed.php'
    ]
];
?>

<!-- ========================================== -->
<!-- UNIFIED 5-STEP FLOW PROGRESS BAR           -->
<!-- ========================================== -->
<section class="bg-slate-50 border-b border-slate-200/80 py-3 sm:py-3.5 shadow-2xs relative z-10">
  <div class="container mx-auto px-3">
    <div class="flex items-center justify-between sm:justify-center gap-2 sm:gap-3 overflow-x-auto no-scrollbar py-1 text-xs">
      
      <?php foreach ($steps as $stepNum => $step): ?>
        
        <?php if ($stepNum > 1): ?>
          <!-- Step Connector Line -->
          <?php if ($stepNum <= $current_step): ?>
            <span class="w-6 sm:w-8 h-0.5 bg-emerald-500/80 rounded-full shrink-0"></span>
          <?php else: ?>
            <span class="w-6 sm:w-8 h-px bg-slate-200 shrink-0"></span>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($stepNum < $current_step): ?>
          <!-- Completed Step (Green Checkmark) -->
          <a href="<?= $step['url'] ?>" 
             class="inline-flex items-center gap-2 shrink-0 text-slate-700 hover:text-brand-blue transition group" 
             title="Go back to <?= htmlspecialchars($step['title']) ?>">
            <span class="w-6 h-6 rounded-full bg-emerald-600 text-white font-semibold text-xs flex items-center justify-center shrink-0 shadow-2xs group-hover:scale-105 transition-transform">
              <i class="fa-solid fa-check text-[10px]"></i>
            </span>
            <span class="font-medium whitespace-nowrap text-slate-700 group-hover:text-brand-blue">
              <?= $step['title'] ?>
            </span>
          </a>

        <?php elseif ($stepNum === $current_step): ?>
          <!-- Current Active Step (Brand Blue with Brand Yellow Circle) -->
          <div class="inline-flex items-center gap-2 shrink-0 bg-brand-blue text-white px-3 sm:px-3.5 py-1.5 rounded-full shadow-2xs">
            <span class="w-5 h-5 rounded-full bg-brand-yellow text-slate-950 font-bold text-xs flex items-center justify-center shrink-0">
              <?= $step['num'] ?>
            </span>
            <span class="font-semibold whitespace-nowrap text-white text-xs sm:text-sm">
              <?= $step['title'] ?>
            </span>
          </div>

        <?php else: ?>
          <!-- Upcoming Step (Inactive) -->
          <div class="inline-flex items-center gap-2 shrink-0 opacity-50">
            <span class="w-6 h-6 rounded-full border border-slate-300 text-slate-400 font-semibold text-xs flex items-center justify-center shrink-0">
              <?= $step['num'] ?>
            </span>
            <span class="font-medium text-slate-500 whitespace-nowrap">
              <?= $step['title'] ?>
            </span>
          </div>
        <?php endif; ?>

      <?php endforeach; ?>

    </div>
  </div>
</section>
