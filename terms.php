<?php
$page_title = "Terms & Conditions | TyreHub - Terms of Use & Service Rules";
$page_description = "Read TyreHub's official Terms of Use and Conditions. Understand your rights, ordering terms, pricing, cancellation rights, fitment partner rules, liability, and copyright policies.";
$current_page = "terms";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- TERMS & CONDITIONS HERO BANNER             -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-file-contract text-brand-blue"></i> Legal &amp; Governance
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Terms &amp; <span class="text-brand-yellow drop-shadow-sm">Conditions</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto font-normal leading-relaxed">
      Please read these rules and conditions governing your use of TyreHub.com, your orders, fitment services, and legal rights.
    </p>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600 mt-6">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blueDark"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold">Terms &amp; Conditions</span>
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
              <i class="fa-solid fa-scale-balanced text-brand-yellow w-4"></i> Overview &amp; Agreement
            </a>
            <a href="#eligibility" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-user-shield text-brand-yellow w-4"></i> Eligibility &amp; Rules
            </a>
            <a href="#order-terms" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-cart-flatbed text-brand-yellow w-4"></i> Order &amp; Fitment Terms
            </a>
            <a href="#pricing-billing" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-file-invoice-dollar text-brand-yellow w-4"></i> Pricing &amp; Billing
            </a>
            <a href="#cancellation" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-rectangle-xmark text-brand-yellow w-4"></i> Cancellation Policy
            </a>
            <a href="#liability" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-shield-cat text-brand-yellow w-4"></i> Limitation of Liability
            </a>
            <a href="#copyright-security" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-copyright text-brand-yellow w-4"></i> Copyright &amp; Security
            </a>
          </nav>

          <!-- Quick Contact Box -->
          <div class="pt-4 border-t border-slate-200 space-y-2">
            <p class="text-xs text-slate-500">Have questions about our Terms?</p>
            <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="btn-primary w-full py-2.5 text-xs font-bold text-center block">
              <i class="fa-solid fa-phone mr-1"></i> <?php echo TOLL_FREE_NUMBER; ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Policy Document Body -->
      <div class="lg:col-span-8 space-y-10 text-slate-700 text-sm leading-relaxed font-normal">

        <!-- 1. Overview & Agreement -->
        <div id="overview" class="space-y-4 scroll-mt-28" data-aos="fade-left" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 1
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Overview &amp; Agreement to Terms</h2>
          <p>
            Welcome to TyreHub.com. In these Terms of Use, the terms <strong>"Site"</strong>, <strong>"Website"</strong>, <strong>"Company"</strong>, and <strong>"Us"</strong> refer to TyreHub.com. The terms <strong>"User"</strong> or <strong>"Users"</strong> refer to any individual accessing or browsing www.tyrehub.com. By <strong>"Access"</strong>, we mean viewing, browsing, or acquiring information located on the website.
          </p>
          <p>
            Please take time to read these terms carefully before utilizing our services or purchasing goods. By continuing to access and use TyreHub.com, you acknowledge that you agree to abide by these rules, which form the legally binding agreement between you and TyreHub.
          </p>

          <div class="bg-amber-50 border-l-4 border-amber-400 p-4 sm:p-5 rounded-r-2xl text-xs sm:text-sm text-amber-950 space-y-1">
            <p class="font-bold flex items-center gap-2 text-amber-900">
              <i class="fa-solid fa-circle-exclamation text-amber-600"></i> Important Notice &amp; Modifications:
            </p>
            <p>
              TyreHub reserves full authority to update or modify any content, product, or term on this website at any time without prior notice. Continued access after modifications signifies your acceptance of the revised Terms. If you do not accept these Terms, please do not proceed further on this website.
            </p>
          </div>
        </div>

        <!-- 2. Eligibility & General Conditions -->
        <div id="eligibility" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 2
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Eligibility &amp; General Rules</h2>
          <p>
            All orders placed on TyreHub.com are authorized under the terms specified on this page. Your statutory rights under consumer protection laws remain safe and unaffected.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-id-card text-xs"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">18+ Age Requirement</strong>
                <span class="text-xs text-slate-600">You must be at least 18 years of age to legally shop or initiate transactions on TyreHub.</span>
              </div>
            </div>

            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-check-double text-xs"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold text-xs">Accurate Profile Data</strong>
                <span class="text-xs text-slate-600">You are responsible for supplying accurate, up-to-date contact and billing details.</span>
              </div>
            </div>
          </div>

          <p class="pt-2">
            All submitted orders are considered purchase requests. TyreHub is under no legal obligation to accept any order and reserves the right to decline or verify orders prior to fulfillment.
          </p>
        </div>

        <!-- 3. Order Terms & Fitment Services -->
        <div id="order-terms" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 3
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Order Related Terms &amp; Fitment Services</h2>
          <p>
            Upon placing your purchase request, TyreHub will send an official Order Confirmation email containing your unique Order Number and purchase summary.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">Fitment Partner Process</h3>
          <p>
            If you select TyreHub installation services during checkout:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Your order and contact details will be shared with the chosen authorized Fitment Partner center.</li>
            <li>TyreHub will deliver the ordered products directly to the fitment center.</li>
            <li>Upon arrival of the products, the service partner will contact you directly to schedule your fitting appointment according to their working hours and your availability.</li>
          </ul>

          <h3 class="font-bold text-slate-900 text-base pt-2">Product Information &amp; Specification Changes</h3>
          <p>
            While TyreHub strives to display precise product specifications, image graphics, and descriptions, minor manufacturer differences may occur. TyreHub reserves the right to correct typographical or specification errors at any time. Due to law changes or manufacturer revisions, product specifications (design, tread compound, dimension) may be updated even after order placement.
          </p>
        </div>

        <!-- 4. Pricing & Billing -->
        <div id="pricing-billing" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 4
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Pricing &amp; Billing Terms</h2>
          <p>
            You will be billed for your order based on the rate displayed on TyreHub.com at the time your purchase is placed.
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li><strong>GST Inclusive:</strong> All product prices listed on TyreHub.com include applicable Goods and Services Tax (GST).</li>
            <li><strong>Delivery &amp; Fitment Fees:</strong> Delivery charges or fitment service fees are calculated separately during checkout unless explicitly marked as free or bundled.</li>
            <li><strong>Customer Sizing Responsibility:</strong> Customers are fully responsible for confirming the correct tyre size, speed rating, and vehicle specifications prior to installation. TyreHub is not responsible for fitment incompatibility resulting from incorrect customer selections.</li>
          </ul>
        </div>

        <!-- 5. Order Cancellation Rights -->
        <div id="cancellation" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 5
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Order Cancellation Policy</h2>
          
          <h3 class="font-bold text-slate-900 text-base">Customer Cancellation Rights</h3>
          <p>
            You have the right to cancel your order at any point up until delivery or prior to your scheduled fitment appointment by calling our customer helpline at <strong><?php echo TOLL_FREE_NUMBER; ?></strong> or emailing <strong><?php echo SUPPORT_EMAIL; ?></strong>.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">TyreHub Cancellation &amp; Termination Rights</h3>
          <p>
            TyreHub reserves the full right to cancel any order or terminate user accounts under the following circumstances:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>The ordered items are out of stock or discontinued by the manufacturer.</li>
            <li>Pricing or typographical system errors occurred on the website during order placement.</li>
            <li>A breach of company rules, unlawful behavior, fraudulent activity, or impersonation is detected.</li>
          </ul>
        </div>

        <!-- 6. Limitation of Liability -->
        <div id="liability" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 6
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Limitation of Liability &amp; Disclaimers</h2>
          <p>
            Except where required by law or in instances of direct proven company negligence:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>TyreHub is under no obligation to compensate users for indirect damages, vehicle performance issues, or fitment complications encountered after installation.</li>
            <li>TyreHub is not liable for defects, damages, or wear arising from vehicle misuse, improper tyre pressure, off-road driving, or post-purchase alterations.</li>
            <li>Your statutory rights remain in effect in the event of personal injury or property loss caused directly by proven gross negligence on the part of TyreHub.</li>
          </ul>
        </div>

        <!-- 7. Intellectual Property, Copyright & Security -->
        <div id="copyright-security" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 7
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Intellectual Property, Restrictions &amp; System Security</h2>
          
          <h3 class="font-bold text-slate-900 text-base">Copyright &amp; Intellectual Property Protection</h3>
          <p>
            All content, graphics, logos, video clips, audio, layout design, and software code on TyreHub.com are protected by Intellectual Property and Copyright laws. Users are strictly prohibited from copying, decompiling, reverse engineering, or repurposing any graphic element or code without explicit written consent.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">Website Usage Restrictions</h3>
          <p>
            Unauthorized access to restricted server areas, network tampering, data scraping, or attempting to breach TyreHub security infrastructure is strictly prohibited and will be prosecuted as a criminal offense.
          </p>

          <div class="bg-slate-50 border border-slate-200 p-5 rounded-2xl space-y-2 text-xs sm:text-sm">
            <p class="font-bold text-slate-900 flex items-center gap-2">
              <i class="fa-solid fa-laptop-code text-brand-blue"></i> Device Security Disclaimer:
            </p>
            <p class="text-slate-600">
              Users are solely responsible for installing up-to-date anti-virus and security protection software on their browsing devices. TyreHub is not accountable for any loss or malware infection encountered while accessing external web links or internet networks.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
