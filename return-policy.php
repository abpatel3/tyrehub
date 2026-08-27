<?php
$page_title = "Return & Refund Policy | TyreHub - Easy Returns & Hassle-Free Refunds";
$page_description = "Read TyreHub's complete Return and Refund Policy. Learn about fitment appointment cancellations, return conditions, restocking fees, and refund timelines.";
$current_page = "return-policy";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- RETURN & REFUND POLICY HERO BANNER          -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-arrow-rotate-left text-brand-blue"></i> Hassle-Free Guarantee
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Return &amp; Refund <span class="text-brand-yellow drop-shadow-sm">Policy</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto font-normal leading-relaxed">
      Easy returns and transparent refunds. We are committed to making your tyre buying experience simple, clear, and worry-free.
    </p>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600 mt-6">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blueDark"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold">Return &amp; Refund Policy</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- MAIN CONTENT SECTION                       -->
<!-- ========================================== -->
<section class="bg-white py-14 sm:py-16">
  <div class="container mx-auto px-3">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

      <!-- Sidebar Navigation (Desktop Sticky) -->
      <div class="lg:col-span-4">
        <div class="sticky top-24 bg-slate-50 p-6 rounded-3xl border border-slate-200 shadow-sm space-y-4">
          <h3 class="text-base font-bold font-outfit text-slate-900 border-b border-slate-200 pb-3 flex items-center gap-2">
            <i class="fa-solid fa-list-ul text-brand-yellow"></i> Policy Navigation
          </h3>
          
          <nav class="space-y-1 text-xs sm:text-sm font-semibold text-slate-700">
            <a href="#overview" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-circle-info text-brand-yellow w-4"></i> Overview &amp; Process
            </a>
            <a href="#fitment-orders" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-wrench text-brand-yellow w-4"></i> Fitment Partner Orders
            </a>
            <a href="#non-returnable" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-ban text-brand-yellow w-4"></i> Non-Returnable Conditions
            </a>
            <a href="#direct-shipping" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-box-open text-brand-yellow w-4"></i> Direct Shipped Orders
            </a>
            <a href="#fee-structure" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-receipt text-brand-yellow w-4"></i> Return Fee Structure
            </a>
            <a href="#shipping-refunds" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-clock-rotate-left text-brand-yellow w-4"></i> Shipping &amp; Refunds
            </a>
            <a href="#warranty-jurisdiction" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-shield-halved text-brand-yellow w-4"></i> Warranty &amp; Jurisdiction
            </a>
          </nav>

          <!-- Quick Contact Box -->
          <div class="pt-4 border-t border-slate-200 space-y-2">
            <p class="text-xs text-slate-500">Need help starting a return?</p>
            <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="btn-primary w-full py-2.5 text-xs font-bold text-center block">
              <i class="fa-solid fa-phone mr-1"></i> <?php echo TOLL_FREE_NUMBER; ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Policy Document Body -->
      <div class="lg:col-span-8 space-y-10 text-slate-700 text-sm leading-relaxed font-normal">

        <!-- 1. Overview & Start Return -->
        <div id="overview" class="space-y-4 scroll-mt-28" data-aos="fade-left" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 1
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Overview &amp; Starting a Return</h2>
          <p>
            Need to make a return? We’re here to help. At TyreHub, customer satisfaction is our top priority. If you need to initiate a return or request a cancellation, our customer support team will guide you step-by-step.
          </p>
          
          <div class="bg-slate-50 border border-slate-200 p-5 rounded-2xl space-y-3 font-medium">
            <p class="text-xs font-bold text-slate-900 uppercase tracking-wider">How to initiate your return request:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div class="flex items-center gap-3 bg-white p-3.5 rounded-xl border border-slate-200">
                <div class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-blue flex items-center justify-center shrink-0">
                  <i class="fa-regular fa-envelope text-sm"></i>
                </div>
                <span class="text-xs">Email: <a href="mailto:<?php echo SUPPORT_EMAIL; ?>" class="text-brand-blue font-bold hover:underline"><?php echo SUPPORT_EMAIL; ?></a></span>
              </div>
              <div class="flex items-center gap-3 bg-white p-3.5 rounded-xl border border-slate-200">
                <div class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-blue flex items-center justify-center shrink-0">
                  <i class="fa-solid fa-phone text-sm"></i>
                </div>
                <span class="text-xs">Toll Free: <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="text-brand-blue font-bold hover:underline"><?php echo TOLL_FREE_NUMBER; ?></a></span>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. Fitment Partner Location Orders -->
        <div id="fitment-orders" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 2
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Items Fitted at Fitment Partner Locations</h2>
          <p>
            For orders provisioned for installation at any of our authorized TyreHub Fitment Partner centers:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>
              <strong>Free Cancellation Window:</strong> All orders provisioned at one of our Fitment Partner locations can be cancelled <strong>free of charge up to 24 hours prior</strong> to your scheduled fitment appointment.
            </li>
            <li>
              <strong>Replacement Orders:</strong> For product replacement orders, the customer is responsible for paying any price difference between tyre models as well as any additional installation or labor fees incurred.
            </li>
          </ul>
        </div>

        <!-- 3. Non-Returnable Conditions -->
        <div id="non-returnable" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 3
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Non-Returnable Conditions</h2>
          <p>
            To maintain product integrity and safety standards, ordered items <strong>cannot be returned</strong> if any of the following conditions apply:
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">
            <div class="bg-rose-50/70 border border-rose-200 p-4 rounded-2xl flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-circle-xmark text-sm"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">Fitted on Wheel</strong>
                <span class="text-xs text-slate-600">The tyre or item was mounted onto a wheel rim.</span>
              </div>
            </div>

            <div class="bg-rose-50/70 border border-rose-200 p-4 rounded-2xl flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-road text-sm"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">Used On or Off Road</strong>
                <span class="text-xs text-slate-600">The tyre shows any signs of road wear or driving usage.</span>
              </div>
            </div>

            <div class="bg-rose-50/70 border border-rose-200 p-4 rounded-2xl flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-sliders text-sm"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">Altered Items</strong>
                <span class="text-xs text-slate-600">The item has been modified, buffed, repaired, or altered in any way.</span>
              </div>
            </div>

            <div class="bg-rose-50/70 border border-rose-200 p-4 rounded-2xl flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-triangle-exclamation text-sm"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">Misuse of Any Kind</strong>
                <span class="text-xs text-slate-600">Damage caused by improper inflation, overloading, or misuse.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. Direct Shipped Customer Orders -->
        <div id="direct-shipping" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 4
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Items Shipped to Desired Customer Location</h2>
          <p>
            For orders delivered directly to a home address or specified customer location (other than an official TyreHub Fitment Partner):
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Only <strong>un-mounted and completely unused</strong> items in original condition are eligible for return.</li>
            <li>Acceptance of refund will be strictly contingent upon a physical quality inspection of the returned item(s) by TyreHub authorized warehouse engineers.</li>
          </ul>
        </div>

        <!-- 5. Return Fee Structure -->
        <div id="fee-structure" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 5
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Return Fee Structure &amp; Deductions</h2>
          <p>
            Unless the return is due to a TyreHub error, standard customer-initiated returns will have the following applicable charges deducted from the final refund total:
          </p>

          <div class="bg-slate-50 border border-slate-200 p-5 rounded-2xl space-y-3 text-xs sm:text-sm">
            <div class="flex items-center justify-between py-2 border-b border-slate-200">
              <span class="font-semibold text-slate-800 flex items-center gap-2">
                <i class="fa-solid fa-truck-ramp-box text-brand-blue"></i> Return Freight Shipping
              </span>
              <span class="font-bold text-slate-900">Actual cost of return shipping to warehouse</span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-slate-200">
              <span class="font-semibold text-slate-800 flex items-center gap-2">
                <i class="fa-solid fa-boxes-packing text-brand-blue"></i> Restocking Fee
              </span>
              <span class="font-bold text-slate-900">10% Restocking Fee</span>
            </div>
            <div class="flex items-center justify-between py-2">
              <span class="font-semibold text-slate-800 flex items-center gap-2">
                <i class="fa-solid fa-credit-card text-brand-blue"></i> Payment Gateway Processing
              </span>
              <span class="font-bold text-slate-900">2% Payment Gateway Fee</span>
            </div>
          </div>

          <!-- Exception Banner -->
          <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 sm:p-5 rounded-r-2xl text-xs sm:text-sm text-emerald-950 space-y-1">
            <p class="font-bold flex items-center gap-2 text-emerald-900">
              <i class="fa-solid fa-circle-check text-emerald-600"></i> TyreHub Error Protection Guarantee:
            </p>
            <p>
              If a return is initiated due to a <strong>TyreHub.com error</strong> (e.g. incorrect product shipped or factory defect), TyreHub.com will pay 100% of the return shipping costs and waive all restocking fees.
            </p>
          </div>
        </div>

        <!-- 6. Shipping & Refund Timeline -->
        <div id="shipping-refunds" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 6
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Shipping Policy &amp; Refund Processing</h2>
          
          <h3 class="font-bold text-slate-900 text-base">Shipping Dispatch Policy</h3>
          <p>
            Once an order is received by TyreHub, following confirmation of product availability, we dispatch and ship your product within <strong>24 to 48 hours</strong>.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">Refund Processing Terms</h3>
          <ul class="list-disc pl-5 space-y-2">
            <li>
              <strong>Original Payment Method:</strong> Refunds for accepted returns or cancellations will be issued strictly to the original form of payment (Credit/Debit Card, Net Banking, or UPI).
            </li>
            <li>
              <strong>Non-Refundable Services:</strong> Any amount paid for labor or completed services (e.g., wheel alignment, balancing, or fitment services) is non-refundable.
            </li>
            <li>
              <strong>Refund Timeline:</strong> Approved refunds will be processed and issued within <strong>ten (10) business days</strong> of physical acceptance of the returned item or cancellation confirmation.
            </li>
          </ul>
        </div>

        <!-- 7. Warranty & Jurisdiction -->
        <div id="warranty-jurisdiction" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 7
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Warranty Claims &amp; Legal Jurisdiction</h2>
          
          <div class="bg-amber-50/70 border border-amber-200 p-5 rounded-2xl space-y-2">
            <p class="font-bold text-amber-900 flex items-center gap-2 text-sm">
              <i class="fa-solid fa-certificate text-amber-600"></i> Full Manufacturer Warranty:
            </p>
            <p class="text-xs sm:text-sm text-slate-700">
              All products sold on TyreHub.com are 100% brand new, authentic, and backed by the full standard manufacturer warranty.
            </p>
          </div>

          <p class="pt-2 text-xs text-slate-500">
            <strong>Jurisdiction:</strong> All legal matters, disputes, or claims relating to returns, refunds, or transactions on TyreHub.com are subject to <strong>Ahmedabad Jurisdiction</strong> only.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
