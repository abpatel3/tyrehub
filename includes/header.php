<header class="site-header w-full flex flex-col z-50">

  <!-- ========================================== -->
  <!-- 1. TOP UTILITY / ANNOUNCEMENT BAR         -->
  <!-- ========================================== -->
  <div class="w-full bg-brand-blueDark text-white text-xs border-b border-white/10">
    <div class="container mx-auto px-3">
      <div class="flex flex-wrap items-center justify-between py-2.5 gap-2">

        <!-- Left: Email Only -->
        <div class="flex items-center gap-2 text-xs text-slate-200 font-medium">
          <i class="fa-solid fa-envelope text-brand-yellow text-sm"></i>
          <a href="mailto:<?php echo SALES_EMAIL; ?>" class="hover:text-brand-yellow transition"><?php echo SALES_EMAIL; ?></a>
        </div>

        <!-- Right: Social Media Links -->
        <div class="flex items-center gap-3.5 flex-wrap ml-auto">
          <span class="text-slate-300 font-medium">Follow Us :</span>
          <div class="flex items-center gap-3 text-brand-yellow text-sm">
            <a href="#" class="hover:text-white transition" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="hover:text-white transition" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="hover:text-white transition" title="WhatsApp"><i
                class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="hover:text-white transition" title="LinkedIn"><i
                class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ========================================== -->
  <!-- 2. MIDDLE BRAND & CONTACT HEADER (WHITE)  -->
  <!-- ========================================== -->
  <div class="w-full bg-white py-3 shadow-sm">
    <div class="container mx-auto px-3">
      <div class="flex items-center justify-between gap-4">

        <!-- Brand Logo -->
        <a href="index.php" class="flex-shrink-0 group">
          <img src="assets/image/tyrehub-logo-light.svg" alt="<?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?>"
            class="h-14 sm:h-16 w-auto object-contain transform group-hover:scale-[1.02] transition duration-300">
        </a>

        <!-- Right Suite: Toll-Free | Yellow Pass | Track Order | Auth -->
        <div class="hidden lg:flex items-center gap-3 flex-shrink-0">

          <!-- 1. Toll-Free Number -->
          <div class="flex items-center gap-2.5 pr-5 border-r border-slate-200">
            <div class="w-9 h-9 rounded-full bg-brand-blue/10 flex items-center justify-center flex-shrink-0">
              <i class="fa-solid fa-phone-volume text-brand-blue text-sm"></i>
            </div>
            <div>
              <span class="block text-[10px] text-slate-400 font-medium uppercase tracking-wider">Toll Free</span>
              <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>"
                class="block text-sm font-black text-brand-blue font-outfit hover:text-brand-yellow transition leading-tight"><?php echo TOLL_FREE_NUMBER; ?></a>
            </div>
          </div>

          <!-- 2. Yellow Pass Registration -->
          <a href="#"
            class="btn-outline-yellow btn-sm">
            <i class="fa-solid fa-star text-sm"></i>
            <span>Yellow Pass</span>
          </a>

          <!-- 3. Track Your Order -->
          <a href="#"
            class="btn-outline-blue btn-sm">
            <i class="fa-solid fa-location-arrow text-sm"></i>
            <span>Track Order</span>
          </a>

          <!-- Divider -->
          <div class="h-8 w-px bg-slate-200"></div>

          <!-- 4. Create Account -->
          <a href="#"
            class="btn-outline-blue btn-sm">
            <i class="fa-regular fa-user text-sm"></i>
            <span>Create Account</span>
          </a>

          <!-- 5. Sign In -->
          <a href="#"
            class="btn-secondary btn-sm">
            <i class="fa-solid fa-arrow-right-to-bracket text-sm"></i>
            <span>Sign In</span>
          </a>

        </div>

        <!-- Mobile Fast Actions -->
        <div class="flex lg:hidden items-center gap-3">
          <button type="button"
            class="relative w-10 h-10 rounded-xl bg-slate-100 text-brand-blueDark hover:bg-brand-yellow flex items-center justify-center text-base transition shadow-sm"
            title="View Cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <span
              class="cart-badge-count hidden absolute -top-1.5 -right-1.5 bg-red-600 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
          </button>
          <a href="#"
            class="hidden sm:flex bg-brand-yellow text-slate-900 text-xs font-bold px-3.5 py-2 rounded-lg items-center gap-1.5">
            <i class="fa-solid fa-star text-xs"></i>
            <span>Yellow Pass</span>
          </a>
          <button id="mobile-menu-btn"
            class="w-10 h-10 rounded-xl bg-slate-100 text-brand-blueDark flex items-center justify-center text-lg"
            aria-label="Open Navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- ========================================== -->
  <!-- 3. BOTTOM STICKY NAVBAR (DEEP NAVY BLUE)  -->
  <!-- ========================================== -->
  <nav id="main-nav-bar"
    class="hidden lg:block w-full bg-brand-blueDark sticky top-0 z-40 transition-all duration-300 shadow-md">
    <div class="container mx-auto px-3">
      <div class="flex items-center justify-between h-13">

        <!-- Navigation Links Matching Screenshot with Rich Hover Dropdowns -->
        <div class="hidden lg:flex items-center gap-3.5 xl:gap-6 text-xs xl:text-[13px] font-semibold text-white">

          <!-- 1. Buy Tyre (plain link, no dropdown) -->
          <a href="#featured-tyres"
            class="flex items-center gap-2 py-3.5 text-white hover:text-brand-yellow transition">
            <i class="fa-solid fa-dharmachakra text-sm"></i>
            <span>Buy Tyre</span>
          </a>

          <!-- Car Battery Replacement -->
          <a href="car-battery-replacement.php"
            class="flex items-center gap-2 py-3.5 <?php echo get_active_nav_class('battery', $activePage); ?> text-white hover:text-brand-yellow transition">
            <i class="fa-solid fa-car-battery text-sm"></i>
            <span>Car Battery Replacement</span>
          </a>

          <!-- Alignment & Balancing -->
          <a href="wheel-alignment-and-balancing.php" class="flex items-center gap-2 py-3.5 <?php echo get_active_nav_class('alignment', $activePage); ?> text-white hover:text-brand-yellow transition">
            <i class="fa-solid fa-arrows-to-dot text-sm"></i>
            <span>Alignment &amp; Balancing</span>
          </a>

          <!-- Car Services with Dropdown -->
          <div class="relative group py-3.5">
            <a href="#"
              class="flex items-center gap-2 text-white group-hover:text-brand-yellow transition cursor-pointer">
              <span>Car Services</span>
              <i
                class="fa-solid fa-chevron-down text-[10px] ml-0.5 opacity-70 group-hover:rotate-180 transition-transform duration-200"></i>
            </a>

            <!-- Services Dropdown Panel — White Clean Style -->
            <div
              class="absolute left-0 top-full hidden group-hover:block w-72 bg-white rounded-2xl shadow-2xl border border-slate-100 py-2 z-50 animate-fadeIn overflow-hidden"
              style="overflow: hidden;">

              <!-- 1. Free Car Tyre Inspection -->
              <a href="free-tyre-inspection.php"
                class="svc-item flex items-center gap-3 px-4 py-3 hover:bg-slate-50 transition">
                <div
                  class="svc-icon w-10 h-10 rounded-xl bg-brand-blue flex items-center justify-center flex-shrink-0 transition">
                  <i class="fa-solid fa-magnifying-glass text-white text-base transition"></i>
                </div>
                <span class="svc-label text-[13px] font-semibold text-slate-800 transition whitespace-nowrap">Free Car
                  Tyre Inspection</span>
              </a>

              <div class="mx-4 border-t border-slate-100"></div>

              <!-- 2. Car Wash -->
              <a href="car-wash.php"
                class="svc-item flex items-center gap-3 px-4 py-3 hover:bg-slate-50 transition">
                <div
                  class="svc-icon w-10 h-10 rounded-xl bg-blue-500 flex items-center justify-center flex-shrink-0 transition">
                  <i class="fa-solid fa-shower text-white text-base transition"></i>
                </div>
                <span class="svc-label text-[13px] font-semibold text-slate-800 transition whitespace-nowrap">Car
                  Wash</span>
              </a>

              <div class="mx-4 border-t border-slate-100"></div>

              <!-- 3. Car Flat Tyre / Jump Start -->
              <a href="car-flat-tyre-jump-start.php"
                class="svc-item flex items-center gap-3 px-4 py-3 hover:bg-slate-50 transition">
                <div
                  class="svc-icon w-10 h-10 rounded-xl bg-amber-500 flex items-center justify-center flex-shrink-0 transition">
                  <i class="fa-solid fa-bolt text-white text-base transition"></i>
                </div>
                <span class="svc-label text-[13px] font-semibold text-slate-800 transition whitespace-nowrap">Car Flat
                  Tyre / Jump Start</span>
              </a>

              <div class="mx-4 border-t border-slate-100"></div>

              <!-- 4. Towing Services -->
              <a href="towing-services.php"
                class="svc-item flex items-center gap-3 px-4 py-3 hover:bg-slate-50 transition">
                <div
                  class="svc-icon w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 transition">
                  <i class="fa-solid fa-truck-pickup text-white text-base transition"></i>
                </div>
                <span class="svc-label text-[13px] font-semibold text-slate-800 transition whitespace-nowrap">Towing
                  Services</span>
              </a>

            </div>
          </div>

          <!-- Franchise Opportunity -->
          <a href="franchise.php"
            class="flex items-center gap-2 py-3.5 <?php echo get_active_nav_class('franchise', $activePage); ?> text-white hover:text-brand-yellow transition">
            <span>Franchise Opportunity</span>
          </a>

          <!-- Our Stores -->
          <a href="stores.php"
            class="flex items-center gap-2 py-3.5 <?php echo get_active_nav_class('stores', $activePage); ?> text-white hover:text-brand-yellow transition">
            <span>Our Stores</span>
          </a>

          <!-- Contact Us -->
          <a href="contact.php" class="flex items-center gap-2 py-3.5 text-white hover:text-brand-yellow transition">
            <span>Contact Us</span>
          </a>
        </div>

        <!-- Right Side: Cart Button -->
        <div class="flex items-center gap-3 ml-auto">
          <button
            class="relative w-9 h-9 rounded-lg bg-white/10 hover:bg-brand-yellow hover:text-slate-900 text-white flex items-center justify-center transition shadow-sm"
            title="View Cart">
            <i class="fa-solid fa-cart-shopping text-sm"></i>
            <span id="cart-badge"
              class="cart-badge-count hidden absolute -top-1.5 -right-1.5 bg-red-600 text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
          </button>
        </div>

      </div>
    </div>
  </nav>

</header>

  <!-- Mobile Drawer Menu -->
  <div id="mobile-nav-drawer" class="hidden fixed inset-0 z-50 bg-slate-900/80 backdrop-blur-sm transition-opacity">
    <div
      class="fixed inset-y-0 right-0 max-w-xs w-full bg-brand-blueDark text-white shadow-2xl p-6 flex flex-col justify-between overflow-y-auto">
      <div>
        <div class="flex items-center justify-between pb-4 border-b border-white/10">
          <img src="assets/image/TYREHUBLOGO.svg" alt="<?php echo SITE_NAME; ?> Logo" class="h-10 w-auto">
          <button id="close-mobile-menu"
            class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 text-white flex items-center justify-center">
            <i class="fa-solid fa-xmark text-lg"></i>
          </button>
        </div>

        <div class="mt-6 flex flex-col gap-2 text-sm font-semibold text-slate-200">
          <a href="#car-tyres" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-dharmachakra text-brand-yellow w-5"></i> Buy Tyre</a>
          <a href="wheel-alignment-and-balancing.php" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-arrows-to-dot text-brand-yellow w-5"></i> Alignment &amp; Balancing</a>
          <a href="car-battery-replacement.php" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-car-battery text-brand-yellow w-5"></i> Car Battery Replacement</a>
          <!-- Car Services Expandable Sub-Menu -->
          <div class="space-y-1">
            <button type="button" id="mobile-services-toggle"
              class="w-full text-left p-2.5 rounded-lg hover:bg-white/10 flex items-center justify-between gap-3">
              <span class="flex items-center gap-3"><i class="fa-solid fa-wrench text-brand-yellow w-5"></i> Car
                Services</span>
              <i id="mobile-services-chevron"
                class="fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-200"></i>
            </button>

            <!-- Sub-Services List (Accordion) -->
            <div id="mobile-services-sub-menu" class="hidden pl-8 pr-2 py-1 space-y-1 text-xs text-slate-300">
              <a href="free-tyre-inspection.php"
                class="p-2 rounded-lg hover:bg-white/10 flex items-center gap-2.5 transition">
                <i class="fa-solid fa-magnifying-glass text-brand-yellow text-xs"></i>
                <span>Free Car Tyre Inspection</span>
              </a>
              <a href="car-wash.php"
                class="p-2 rounded-lg hover:bg-white/10 flex items-center gap-2.5 transition">
                <i class="fa-solid fa-shower text-blue-400 text-xs"></i>
                <span>Car Wash</span>
              </a>
              <a href="car-flat-tyre-jump-start.php"
                class="p-2 rounded-lg hover:bg-white/10 flex items-center gap-2.5 transition">
                <i class="fa-solid fa-bolt text-amber-400 text-xs"></i>
                <span>Car Flat Tyre / Jump Start</span>
              </a>
              <a href="towing-services.php"
                class="p-2 rounded-lg hover:bg-white/10 flex items-center gap-2.5 transition">
                <i class="fa-solid fa-truck-pickup text-red-400 text-xs"></i>
                <span>Towing Services</span>
              </a>
            </div>
          </div>
          <a href="franchise.php" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-handshake text-brand-yellow w-5"></i> Franchise Opportunity</a>
          <a href="stores.php" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-store text-brand-yellow w-5"></i> Our Stores</a>
          <a href="#contact" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
              class="fa-solid fa-phone text-brand-yellow w-5"></i> Contact Us</a>

          <!-- User Account & Track Order -->
          <div class="my-2 border-t border-white/10 pt-2 space-y-1">
            <a href="#"
              class="p-2.5 rounded-lg bg-brand-yellow/15 text-brand-yellow font-bold flex items-center gap-3 border border-brand-yellow/30 hover:bg-brand-yellow hover:text-slate-900 transition">
              <i class="fa-solid fa-star text-brand-yellow w-5"></i>
              <span>Yellow Pass</span>
            </a>
            <a href="#" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
                class="fa-solid fa-location-arrow text-brand-yellow w-5"></i> Track Order</a>
            <a href="#" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
                class="fa-regular fa-user text-brand-yellow w-5"></i> Create Account</a>
            <a href="#" class="p-2.5 rounded-lg hover:bg-white/10 flex items-center gap-3"><i
                class="fa-solid fa-arrow-right-to-bracket text-brand-yellow w-5"></i> Sign In</a>
          </div>
        </div>
      </div>

      <div class="pt-6 border-t border-white/10 flex flex-col gap-3">
        <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="btn-primary w-full text-center text-sm py-3">
          <i class="fa-solid fa-phone"></i> Call <?php echo TOLL_FREE_NUMBER; ?>
        </a>
        <button onclick="openBookingModal('Doorstep Quick Booking'); $('#close-mobile-menu').click();"
          class="btn-secondary w-full text-center text-sm py-3">
          Book Doorstep Service
        </button>
      </div>
    </div>
  </div>
