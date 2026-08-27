  <!-- ========================================== -->
  <!-- 14. COMPREHENSIVE FOOTER                   -->
  <!-- ========================================== -->
  <footer id="contact" class="bg-brand-blueDark text-slate-200 text-sm">
    <div class="container mx-auto px-3 py-14">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">

        <!-- Col 1: About TyreHub (lg:col-span-4) -->
        <div class="lg:col-span-4 space-y-4">
          <div class="h-12 flex items-center">
            <img src="assets/image/TYREHUBLOGO.svg" alt="<?php echo SITE_NAME; ?>" class="h-10 w-auto">
          </div>

          <h3
            class="text-base font-bold text-white uppercase tracking-wide border-b border-brand-yellow/30 pb-1.5 inline-block">
            About Tyrehub</h3>
          <p class="text-sm text-slate-200 leading-relaxed font-normal">
            TyreHub is a young and influential online hub for low cost tyres and offers installation services in
            Ahmedabad and Gandhinagar. We offer all sizes of tyres for your cars and two-wheelers. At TyreHub, you can
            choose from a wide range of tyres from all leading manufacturers. We make your life simple!
          </p>

          <div class="flex items-center gap-3 pt-2">
            <a href="#"
              class="w-10 h-10 rounded-full bg-brand-yellow text-slate-950 hover:bg-white hover:text-brand-blue flex items-center justify-center transition shadow-md font-bold"
              title="Facebook"><i class="fa-brands fa-facebook-f text-base" aria-hidden="true"></i></a>
            <a href="#"
              class="w-10 h-10 rounded-full bg-brand-yellow text-slate-950 hover:bg-white hover:text-brand-blue flex items-center justify-center transition shadow-md font-bold"
              title="Twitter"><i class="fa-brands fa-x-twitter text-base" aria-hidden="true"></i></a>
            <a href="#"
              class="w-10 h-10 rounded-full bg-brand-yellow text-slate-950 hover:bg-white hover:text-brand-blue flex items-center justify-center transition shadow-md font-bold"
              title="Instagram"><i class="fa-brands fa-instagram text-base" aria-hidden="true"></i></a>
            <a href="#"
              class="w-10 h-10 rounded-full bg-brand-yellow text-slate-950 hover:bg-white hover:text-brand-blue flex items-center justify-center transition shadow-md font-bold"
              title="LinkedIn"><i class="fa-brands fa-linkedin-in text-base" aria-hidden="true"></i></a>
          </div>
        </div>

        <!-- Col 2: Quick Links (lg:col-span-4) -->
        <div class="lg:col-span-4 space-y-4">
          <div class="h-12 hidden lg:block"></div>
          <h3
            class="text-base font-bold text-white uppercase tracking-wide border-b border-brand-yellow/30 pb-1.5 inline-block">
            Quick Links</h3>
          <div class="grid grid-cols-2 gap-x-6 gap-y-3 text-sm text-slate-200 font-medium">
            <a href="index.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Home</a>
            <a href="about.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> About Us</a>
            <a href="#login" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Login</a>
            <a href="#register" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Register</a>
            <a href="warranty.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Guarantee Warranty</a>
            <a href="return-policy.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Return/Refund Policy</a>
            <a href="contact.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Contact Us</a>
            <a href="blog.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Blog</a>
            <a href="terms.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Terms &amp; Conditions</a>
            <a href="privacy.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> Privacy Policy</a>
            <a href="faq.php" class="hover:text-brand-yellow transition flex items-center gap-2"><i
                class="fa-solid fa-angle-right text-xs text-brand-yellow" aria-hidden="true"></i> FAQ</a>
          </div>
        </div>

        <!-- Col 3: Contact Us & Payment Badges (lg:col-span-4) -->
        <div class="lg:col-span-4 space-y-4">
          <div class="h-12 hidden lg:block"></div>
          <h3
            class="text-base font-bold text-white uppercase tracking-wide border-b border-brand-yellow/30 pb-1.5 inline-block">
            Contact Us</h3>

          <div class="space-y-3 text-sm text-slate-200 font-medium">
            <div class="flex items-center gap-3">
              <div
                class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-yellow flex items-center justify-center shrink-0">
                <i class="fa-solid fa-phone text-sm"></i>
              </div>
              <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>"
                class="hover:text-brand-yellow font-bold text-base text-white font-outfit tracking-wide"><?php echo TOLL_FREE_NUMBER; ?>
                (Toll Free)</a>
            </div>
            <div class="flex items-center gap-3">
              <div
                class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-yellow flex items-center justify-center shrink-0">
                <i class="fa-regular fa-envelope text-sm"></i>
              </div>
              <a href="mailto:<?php echo SUPPORT_EMAIL; ?>"
                class="hover:text-brand-yellow text-slate-200"><?php echo SUPPORT_EMAIL; ?></a>
            </div>
            <div class="flex items-center gap-3">
              <div
                class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-yellow flex items-center justify-center shrink-0">
                <i class="fa-regular fa-envelope text-sm"></i>
              </div>
              <a href="mailto:<?php echo SALES_EMAIL; ?>" class="hover:text-brand-yellow text-slate-200"><?php echo SALES_EMAIL; ?></a>
            </div>
          </div>

          <!-- Security & Payment Badges -->
          <div class="pt-3">
            <div
              class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-emerald-950/70 border border-emerald-400/50 text-emerald-300 text-xs font-bold mb-3 shadow-sm">
              <i class="fa-solid fa-lock text-emerald-400"></i> 256-Bit SSL Secure Connection
            </div>

            <div class="flex flex-wrap items-center gap-1.5">
              <span class="px-2.5 py-1 rounded bg-white text-slate-950 font-bold text-xs shadow-sm">RuPay</span>
              <span class="px-2.5 py-1 rounded bg-white text-slate-950 font-bold text-xs shadow-sm">BHIM UPI</span>
              <span class="px-2.5 py-1 rounded bg-white text-blue-900 font-bold text-xs shadow-sm">Paytm</span>
              <span class="px-2.5 py-1 rounded bg-white text-blue-700 font-bold text-xs shadow-sm">VISA</span>
              <span class="px-2.5 py-1 rounded bg-white text-red-600 font-bold text-xs shadow-sm">Mastercard</span>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- Bottom Copyright Sub-Footer -->
    <div class="border-t border-white/15 bg-[#1F2C5A] py-4">
      <div
        class="container mx-auto px-3 flex flex-col sm:flex-row items-center justify-between text-sm text-slate-200 gap-2 font-medium">
        <p>Copyright © <?php echo date('Y'); ?> <strong class="text-white font-bold"><?php echo SITE_NAME; ?></strong>. All Rights Reserved.</p>
        <p>Powered By : <strong class="text-brand-yellow font-bold">Webtual Technologies PVT LTD</strong></p>
      </div>
    </div>
  </footer>

  <!-- ========================================== -->
  <!-- 15. QUICK SERVICE BOOKING POPUP MODAL      -->
  <!-- ========================================== -->
  <div id="service-booking-modal" class="hidden fixed inset-0 z-50 modal-backdrop items-center justify-center p-4">
    <div
      class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl relative border border-slate-100 max-h-[90vh] overflow-y-auto">

      <!-- Close Button -->
      <button id="close-booking-modal"
        class="absolute top-5 right-5 w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-600 flex items-center justify-center transition">
        <i class="fa-solid fa-xmark text-lg"></i>
      </button>

      <!-- Modal Header -->
      <div class="mb-6">
        <span id="modal-service-badge"
          class="inline-block px-3 py-1 bg-brand-yellow/30 text-brand-blue text-xs font-bold rounded-full mb-2 uppercase tracking-wide">
          Doorstep Service
        </span>
        <h3 class="text-2xl font-black text-slate-900 font-outfit">Book Instant Service</h3>
        <p class="text-xs text-slate-500 mt-1">Our certified technician in Ahmedabad / Gandhinagar will contact you in 5
          minutes.</p>
      </div>

      <!-- Booking Form -->
      <form id="booking-form" class="space-y-4">
        <input type="hidden" id="booking-service-input" value="General Service">

        <div>
          <label for="booking-name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Your
            Full Name *</label>
          <input type="text" id="booking-name" required placeholder="e.g. Manav Patel"
            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition">
        </div>

        <div>
          <label for="booking-phone" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Mobile
            Number (10 Digits) *</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-sm font-bold text-slate-500">+91</span>
            <input type="tel" id="booking-phone" required pattern="[0-9]{10}" placeholder="9876543210"
              class="w-full bg-slate-50 border border-slate-300 rounded-xl pl-12 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label for="booking-city"
              class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Location *</label>
            <select id="booking-city" required
              class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3 py-2.5 text-sm focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition">
              <option value="Ahmedabad - SG Highway">Ahmedabad - SG Highway</option>
              <option value="Ahmedabad - Bodakdev">Ahmedabad - Bodakdev</option>
              <option value="Ahmedabad - Maninagar">Ahmedabad - Maninagar</option>
              <option value="Ahmedabad - Nikol / Bapunagar">Ahmedabad - Nikol</option>
              <option value="Gandhinagar - Infocity">Gandhinagar - Infocity</option>
              <option value="Gandhinagar - Kudasan">Gandhinagar - Kudasan</option>
            </select>
          </div>
          <div>
            <label for="booking-vehicle"
              class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Car Model</label>
            <input type="text" id="booking-vehicle" placeholder="e.g. Swift / Creta"
              class="w-full bg-slate-50 border border-slate-300 rounded-xl px-3 py-2.5 text-sm focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition">
          </div>
        </div>

        <div>
          <label for="booking-notes"
            class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Special Instructions
            (Optional)</label>
          <textarea id="booking-notes" rows="2" placeholder="e.g. Battery dead near Iscon cross roads"
            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2 text-sm focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition"></textarea>
        </div>

        <div class="pt-2">
          <button type="submit" class="btn-primary w-full py-3 text-sm font-bold">
            <i class="fa-solid fa-paper-plane"></i> Confirm Doorstep Booking
          </button>
        </div>

        <p class="text-[11px] text-center text-slate-400">
          <i class="fa-solid fa-lock text-emerald-600"></i> No advance payment needed. Pay after satisfactory service.
        </p>
      </form>

    </div>
  </div>

  <!-- Floating Back-to-Top Button -->
  <button id="back-to-top"
    class="hidden fixed bottom-6 left-6 z-40 w-10 h-10 rounded-full bg-brand-blue text-brand-yellow border-2 border-brand-yellow shadow-xl hover:bg-brand-yellow hover:text-brand-blue transition flex items-center justify-center"
    aria-label="Back to top">
    <i class="fa-solid fa-chevron-up"></i>
  </button>

  <!-- ========================================== -->
  <!-- 16. SCRIPTS: JQUERY, SELECT2, SLICK & MAIN -->
  <!-- ========================================== -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 500,
        easing: 'ease-out-cubic',
        once: true,
        offset: 30,
        delay: 0
      });
    }
  </script>
  <script src="assets/js/search-tabs.js"></script>
  <script src="assets/js/vehicle-selector.js"></script>
  <script src="assets/js/tyre-size.js"></script>
  <script src="assets/js/reg-number.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>