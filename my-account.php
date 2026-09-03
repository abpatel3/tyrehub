<?php
$page_title = 'My Account | TyreHub';
$page_description = 'Manage your tyre fitment service requests, account details, active orders, and addresses with TyreHub.';
$current_page = 'my-account';
include 'includes/interface.php';
include 'includes/header.php';

// Active tab determination (default to 'service-request' as requested first, or 'my-account')
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'service-request';
$valid_tabs = ['service-request', 'my-account', 'order-tracking', 'addresses', 'settings', 'logout'];
if (!in_array($active_tab, $valid_tabs)) {
    $active_tab = 'service-request';
}
?>

<!-- ========================================== -->
<!-- BREADCRUMB                                 -->
<!-- ========================================== -->
<section class="bg-white border-b border-slate-200/80 py-3">
  <div class="container mx-auto px-4">
    <div class="flex items-center gap-2 text-xs text-slate-500 font-normal">
      <a href="index.php" class="hover:text-brand-blue transition">Home</a>
      <i class="fa-solid fa-angle-right text-[10px] text-slate-400"></i>
      <span class="text-brand-blue font-medium">My Account</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- MY ACCOUNT DASHBOARD SECTION               -->
<!-- ========================================== -->
<section class="py-10 sm:py-14 bg-slate-50/60 min-h-[75vh]">
  <div class="container mx-auto px-4 max-w-6xl">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

      <!-- ========================================== -->
      <!-- LEFT SIDEBAR: PROFILE & 6 TABS (4 COLS)    -->
      <!-- ========================================== -->
      <div class="lg:col-span-4 space-y-4">
        
        <!-- User Profile Card -->
        <div class="bg-white rounded-2xl border border-slate-200 p-4.5 shadow-2xs">
          <div class="flex items-center gap-3.5">
            <div class="relative shrink-0">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-blue to-slate-900 text-brand-yellow font-bold text-base flex items-center justify-center border-2 border-white shadow-xs">
                AV
              </div>
              <span class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white"></span>
            </div>
            
            <div class="min-w-0 flex-1">
              <h3 class="text-sm font-semibold text-slate-900 truncate">Abhi Viramgama</h3>
              <p class="text-xs text-slate-500 font-medium mt-1 flex items-center gap-1.5">
                <i class="fa-solid fa-phone text-[10px] text-slate-400"></i>
                <span>+91 98765 43210</span>
              </p>
            </div>
          </div>
        </div>

        <!-- 6 NAVIGATION TABS -->
        <div class="bg-white rounded-2xl border border-slate-200 p-2 shadow-2xs">
          <nav class="space-y-1" id="account-nav-tabs">
            
            <!-- TAB 1: SERVICE REQUEST -->
            <button type="button" 
                    onclick="switchAccountTab('service-request')" 
                    data-tab-btn="service-request"
                    class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium transition <?= ($active_tab === 'service-request') ? 'bg-brand-blue text-white font-semibold shadow-xs' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' ?>">
              <span class="flex items-center gap-3">
                <i class="fa-solid fa-wrench text-sm <?= ($active_tab === 'service-request') ? 'text-brand-yellow' : 'text-slate-400' ?>"></i>
                <span>Service Request</span>
              </span>
              <span class="text-[10px] px-2 py-0.5 rounded-full <?= ($active_tab === 'service-request') ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' ?>">
                2 Active
              </span>
            </button>

            <!-- TAB 2: MY ACCOUNT -->
            <button type="button" 
                    onclick="switchAccountTab('my-account')" 
                    data-tab-btn="my-account"
                    class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium transition <?= ($active_tab === 'my-account') ? 'bg-brand-blue text-white font-semibold shadow-xs' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' ?>">
              <span class="flex items-center gap-3">
                <i class="fa-regular fa-user text-sm <?= ($active_tab === 'my-account') ? 'text-brand-yellow' : 'text-slate-400' ?>"></i>
                <span>My account</span>
              </span>
              <i class="fa-solid fa-chevron-right text-[10px] <?= ($active_tab === 'my-account') ? 'text-white/60' : 'text-slate-300' ?>"></i>
            </button>

            <!-- TAB 3: ORDER TRACKING -->
            <button type="button" 
                    onclick="switchAccountTab('order-tracking')" 
                    data-tab-btn="order-tracking"
                    class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium transition <?= ($active_tab === 'order-tracking') ? 'bg-brand-blue text-white font-semibold shadow-xs' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' ?>">
              <span class="flex items-center gap-3">
                <i class="fa-solid fa-truck-fast text-sm <?= ($active_tab === 'order-tracking') ? 'text-brand-yellow' : 'text-slate-400' ?>"></i>
                <span>Order tracking</span>
              </span>
              <span class="text-[10px] px-2 py-0.5 rounded-full <?= ($active_tab === 'order-tracking') ? 'bg-emerald-400 text-slate-950 font-bold' : 'bg-emerald-100 text-emerald-800 font-semibold' ?>">
                1 Live
              </span>
            </button>

            <!-- TAB 4: ADDRESSES -->
            <button type="button" 
                    onclick="switchAccountTab('addresses')" 
                    data-tab-btn="addresses"
                    class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium transition <?= ($active_tab === 'addresses') ? 'bg-brand-blue text-white font-semibold shadow-xs' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' ?>">
              <span class="flex items-center gap-3">
                <i class="fa-solid fa-location-dot text-sm <?= ($active_tab === 'addresses') ? 'text-brand-yellow' : 'text-slate-400' ?>"></i>
                <span>Addresses</span>
              </span>
              <span class="text-[10px] px-2 py-0.5 rounded-full <?= ($active_tab === 'addresses') ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' ?>">
                2 Saved
              </span>
            </button>

            <!-- TAB 5: SETTINGS -->
            <button type="button" 
                    onclick="switchAccountTab('settings')" 
                    data-tab-btn="settings"
                    class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium transition <?= ($active_tab === 'settings') ? 'bg-brand-blue text-white font-semibold shadow-xs' : 'text-slate-700 hover:bg-slate-50 hover:text-slate-900' ?>">
              <span class="flex items-center gap-3">
                <i class="fa-solid fa-gear text-sm <?= ($active_tab === 'settings') ? 'text-brand-yellow' : 'text-slate-400' ?>"></i>
                <span>Settings</span>
              </span>
              <i class="fa-solid fa-chevron-right text-[10px] <?= ($active_tab === 'settings') ? 'text-white/60' : 'text-slate-300' ?>"></i>
            </button>

            <div class="pt-2 mt-2 border-t border-slate-100">
              <!-- TAB 6: LOGOUT -->
              <button type="button" 
                      onclick="switchAccountTab('logout')" 
                      data-tab-btn="logout"
                      class="tab-nav-btn w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-xs font-medium text-red-600 hover:bg-red-50 hover:text-red-700 transition">
                <span class="flex items-center gap-3">
                  <i class="fa-solid fa-arrow-right-from-bracket text-sm"></i>
                  <span>Logout</span>
                </span>
                <i class="fa-solid fa-power-off text-[10px]"></i>
              </button>
            </div>

          </nav>
        </div>

        <!-- Quick Help Card -->
        <div class="p-4 rounded-2xl bg-brand-blue/5 border border-brand-blue/10 flex items-center justify-between">
          <div>
            <h4 class="text-xs font-semibold text-brand-blue">Need Support?</h4>
            <p class="text-[11px] text-slate-500 font-normal">Call 1800-123-5510 toll-free</p>
          </div>
          <a href="contact.php" class="text-xs font-semibold text-brand-blue hover:underline">Helpdesk →</a>
        </div>

      </div>

      <!-- ========================================== -->
      <!-- RIGHT CONTENT PANELS (8 COLS)              -->
      <!-- ========================================== -->
      <div class="lg:col-span-8">

        <!-- ========================================== -->
        <!-- PANEL 1: SERVICE REQUEST                   -->
        <!-- ========================================== -->
        <div id="panel-service-request" class="account-tab-panel <?= ($active_tab === 'service-request') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-2xs space-y-6">
            
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-5 border-b border-slate-100">
              <div>
                <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Service Requests</h2>
                <p class="text-xs text-slate-500 font-normal mt-0.5">Manage workshop appointments and scheduled car services.</p>
              </div>
              <a href="buy-tyre.php" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs transition shadow-2xs">
                <i class="fa-solid fa-plus text-[10px]"></i>
                <span>Book New Service</span>
              </a>
            </div>

            <!-- Active Service Item 1 -->
            <div class="p-5 rounded-2xl border border-slate-200/90 bg-slate-50/50 hover:bg-white hover:border-brand-blue/30 transition space-y-4">
              <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xs font-bold">
                    <i class="fa-solid fa-wrench"></i>
                  </span>
                  <div>
                    <h4 class="text-xs font-semibold text-slate-900">3D Wheel Alignment &amp; Balancing</h4>
                    <span class="text-[11px] text-slate-400 font-normal">Request ID: #SR-8921</span>
                  </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                  ● Scheduled at Workshop
                </span>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-3 border-t border-slate-200/70 text-xs">
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Installer Store</span>
                  <strong class="text-slate-800 font-semibold">TyreHub Motera Super Store</strong>
                  <p class="text-[11px] text-slate-500">Ahmedabad, GJ</p>
                </div>
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Appointment Slot</span>
                  <strong class="text-slate-800 font-semibold">04 Sep 2026</strong>
                  <p class="text-[11px] text-slate-500">Afternoon (01:00 PM - 04:00 PM)</p>
                </div>
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Vehicle</span>
                  <strong class="text-slate-800 font-semibold">GJ 01 AB 1234</strong>
                  <p class="text-[11px] text-slate-500">Hyundai Creta 1.5</p>
                </div>
              </div>

              <div class="flex items-center justify-between pt-2">
                <span class="text-xs font-semibold text-slate-700">Estimated Total: ₹699</span>
                <div class="flex items-center gap-2">
                  <button type="button" class="px-3 py-1.5 rounded-lg border border-slate-200 text-xs font-medium text-slate-600 hover:bg-slate-100 transition">Reschedule</button>
                  <a href="order-placed.php?booking_id=TH-434837&id=2&qty=4&installer=motera&name=Abhi+Viramgama&phone=6356969194&email=abhiv%40webtual.com&vehicle=GJ+01+AB+1234&date=2026-09-04&slot=afternoon&payment=upi&total=15400" class="px-3 py-1.5 rounded-lg bg-brand-blue text-white text-xs font-semibold hover:bg-slate-800 transition">View Slip</a>
                </div>
              </div>
            </div>

            <!-- Active Service Item 2 -->
            <div class="p-5 rounded-2xl border border-slate-200/90 bg-slate-50/50 hover:bg-white hover:border-brand-blue/30 transition space-y-4">
              <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold border border-emerald-100">
                    <i class="fa-solid fa-car-battery"></i>
                  </span>
                  <div>
                    <h4 class="text-xs font-semibold text-slate-900">Doorstep Battery Health Check</h4>
                    <span class="text-[11px] text-slate-400 font-normal">Request ID: #SR-8740</span>
                  </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                  ✓ Completed
                </span>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-3 border-t border-slate-200/70 text-xs">
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Location</span>
                  <strong class="text-slate-800 font-semibold">Home Doorstep Visit</strong>
                  <p class="text-[11px] text-slate-500">Bopal, Ahmedabad</p>
                </div>
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Completed Date</span>
                  <strong class="text-slate-800 font-semibold">28 Aug 2026</strong>
                  <p class="text-[11px] text-slate-500">Certified Tech: Rajesh K.</p>
                </div>
                <div>
                  <span class="text-[10px] text-slate-400 block uppercase">Battery Status</span>
                  <strong class="text-emerald-700 font-semibold">Healthy (92% Health)</strong>
                  <p class="text-[11px] text-slate-500">Amaron 45Ah</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- ========================================== -->
        <!-- PANEL 2: MY ACCOUNT                        -->
        <!-- ========================================== -->
        <div id="panel-my-account" class="account-tab-panel <?= ($active_tab === 'my-account') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-2xs space-y-6">
            
            <div class="pb-5 border-b border-slate-100 flex items-center justify-between">
              <div>
                <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Personal Information</h2>
                <p class="text-xs text-slate-500 font-normal mt-0.5">Manage your personal profile and registered vehicle garage.</p>
              </div>
              <span class="text-xs font-medium text-emerald-600 flex items-center gap-1.5 bg-emerald-50 px-2.5 py-1 rounded-full border border-emerald-100">
                <i class="fa-solid fa-shield-check text-xs"></i>
                <span>Profile 100% Complete</span>
              </span>
            </div>

            <!-- Profile Details Form -->
            <form method="POST" action="my-account.php?tab=my-account" class="space-y-4">
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-medium text-slate-700 mb-1.5">First Name</label>
                  <input type="text" value="Abhi" class="w-full h-11 px-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-xs font-medium text-slate-900 focus:bg-white focus:border-brand-blue outline-none transition">
                </div>

                <div>
                  <label class="block text-xs font-medium text-slate-700 mb-1.5">Last Name</label>
                  <input type="text" value="Viramgama" class="w-full h-11 px-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-xs font-medium text-slate-900 focus:bg-white focus:border-brand-blue outline-none transition">
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-medium text-slate-700 mb-1.5">Mobile Number</label>
                  <div class="flex items-center rounded-xl border border-slate-200 bg-slate-100 overflow-hidden">
                    <span class="pl-3.5 pr-2.5 py-2.5 text-xs font-semibold text-slate-600 bg-slate-200/70 border-r border-slate-200 select-none">+91</span>
                    <input type="text" value="9876543210" readonly class="w-full h-11 px-3.5 bg-transparent text-xs font-semibold text-slate-700 outline-none select-none">
                    <span class="pr-3 text-xs text-emerald-600"><i class="fa-solid fa-circle-check"></i></span>
                  </div>
                </div>

                <div>
                  <label class="block text-xs font-medium text-slate-700 mb-1.5">Email Address</label>
                  <input type="email" value="abhi.viramgama@example.com" class="w-full h-11 px-3.5 rounded-xl bg-slate-50/50 border border-slate-200 text-xs font-medium text-slate-900 focus:bg-white focus:border-brand-blue outline-none transition">
                </div>
              </div>

              <!-- Registered Vehicles Garage -->
              <div class="pt-4 mt-4 border-t border-slate-100">
                <div class="flex items-center justify-between mb-3">
                  <h4 class="text-xs font-semibold text-slate-900 uppercase tracking-wider">My Garage (Registered Vehicles)</h4>
                  <button type="button" class="text-xs font-semibold text-brand-blue hover:underline">+ Add Vehicle</button>
                </div>

                <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center text-base">
                      <i class="fa-solid fa-car"></i>
                    </div>
                    <div>
                      <h5 class="text-xs font-semibold text-slate-900">Hyundai Creta 1.5 SX (Petrol)</h5>
                      <p class="text-[11px] text-slate-500">Reg: GJ 01 AB 1234 • Tyre: 215/60 R16</p>
                    </div>
                  </div>
                  <span class="px-2 py-0.5 rounded bg-brand-yellow/30 text-slate-900 text-[10px] font-bold border border-brand-yellow/50">Primary</span>
                </div>
              </div>

              <div class="pt-2 flex justify-end">
                <button type="button" class="px-6 py-2.5 rounded-xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs transition shadow-2xs">
                  Save Changes
                </button>
              </div>

            </form>

          </div>
        </div>

        <!-- ========================================== -->
        <!-- PANEL 3: ORDER TRACKING                    -->
        <!-- ========================================== -->
        <div id="panel-order-tracking" class="account-tab-panel <?= ($active_tab === 'order-tracking') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-2xs space-y-6">
            
            <div class="pb-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
              <div>
                <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Order Tracking</h2>
                <p class="text-xs text-slate-500 font-normal mt-0.5">Track live fitting progress and dispatched tyre inventory.</p>
              </div>
              <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200 px-3 py-1 rounded-full self-start sm:self-auto">
                ● 1 Active Fitment Order
              </span>
            </div>

            <!-- Order Card with Progress Tracker -->
            <div class="p-6 rounded-2xl border border-slate-200 bg-slate-50/40 space-y-5">
              
              <div class="flex flex-wrap items-center justify-between gap-3 pb-4 border-b border-slate-200/80">
                <div>
                  <span class="text-[11px] text-slate-400 block">Booking Reference</span>
                  <strong class="text-sm font-semibold text-brand-blue">#TH-434837</strong>
                </div>
                <div>
                  <span class="text-[11px] text-slate-400 block">Order Placed</span>
                  <span class="text-xs font-medium text-slate-700">02 Sep 2026, 04:15 PM</span>
                </div>
                <div>
                  <span class="text-[11px] text-slate-400 block">Total Amount</span>
                  <strong class="text-sm font-bold text-slate-900">₹15,400</strong>
                  <span class="text-[10px] text-emerald-600 font-semibold block">Paid via UPI</span>
                </div>
                <div class="flex items-center gap-2">
                  <a href="invoice.php?booking_id=TH-434837&id=2&qty=4&name=Abhi+Viramgama&phone=6356969194&email=abhiv%40webtual.com&vehicle=GJ+01+AB+1234&date=2026-09-04&slot=afternoon&total=15400" target="_blank" class="px-3 py-1.5 rounded-lg border border-slate-200 bg-white text-xs font-medium text-slate-700 hover:border-brand-blue hover:text-brand-blue transition flex items-center gap-1.5">
                    <i class="fa-solid fa-download text-[10px]"></i>
                    <span>Invoice</span>
                  </a>
                  <a href="order-placed.php?booking_id=TH-434837&id=2&qty=4&installer=motera&name=Abhi+Viramgama&phone=6356969194&email=abhiv%40webtual.com&vehicle=GJ+01+AB+1234&date=2026-09-04&slot=afternoon&payment=upi&total=15400" class="px-3 py-1.5 rounded-lg bg-brand-blue text-white text-xs font-semibold hover:bg-slate-800 transition">
                    View Slip
                  </a>
                </div>
              </div>

              <!-- Product Summary Row -->
              <div class="flex items-center gap-4">
                <img src="assets/image/product-1.png" alt="Tyre" class="w-14 h-14 object-contain rounded-xl bg-white p-1 border border-slate-200">
                <div class="min-w-0">
                  <h4 class="text-xs font-semibold text-slate-900">CEAT SecuraDrive 215/60 R16 (Quantity: 4)</h4>
                  <p class="text-[11px] text-slate-500">Store: TyreHub Motera Super Store • Fitting: 04 Sep 2026 (Afternoon)</p>
                </div>
              </div>

              <!-- 4-STEP TRACKER BAR -->
              <div class="pt-4 border-t border-slate-200/80">
                <div class="grid grid-cols-4 gap-2 text-center relative">
                  
                  <!-- Step 1 (Completed) -->
                  <div class="space-y-1.5">
                    <div class="w-7 h-7 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">
                      <i class="fa-solid fa-check text-[10px]"></i>
                    </div>
                    <span class="text-[11px] font-semibold text-slate-900 block">Confirmed</span>
                    <span class="text-[10px] text-slate-400 block">02 Sep</span>
                  </div>

                  <!-- Step 2 (Completed) -->
                  <div class="space-y-1.5">
                    <div class="w-7 h-7 mx-auto rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">
                      <i class="fa-solid fa-check text-[10px]"></i>
                    </div>
                    <span class="text-[11px] font-semibold text-slate-900 block">Dispatched</span>
                    <span class="text-[10px] text-slate-400 block">03 Sep</span>
                  </div>

                  <!-- Step 3 (Current Active) -->
                  <div class="space-y-1.5">
                    <div class="w-7 h-7 mx-auto rounded-full bg-brand-yellow text-slate-950 flex items-center justify-center text-xs font-bold ring-4 ring-brand-yellow/30">
                      <i class="fa-solid fa-warehouse text-[10px]"></i>
                    </div>
                    <span class="text-[11px] font-bold text-slate-950 block">At Workshop</span>
                    <span class="text-[10px] text-amber-600 font-semibold block">Ready for you</span>
                  </div>

                  <!-- Step 4 (Upcoming) -->
                  <div class="space-y-1.5 opacity-40">
                    <div class="w-7 h-7 mx-auto rounded-full bg-slate-200 text-slate-500 flex items-center justify-center text-xs font-bold">
                      <i class="fa-solid fa-circle-check text-[10px]"></i>
                    </div>
                    <span class="text-[11px] font-medium text-slate-700 block">Fitment Done</span>
                    <span class="text-[10px] text-slate-400 block">04 Sep</span>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <!-- ========================================== -->
        <!-- PANEL 4: ADDRESSES                         -->
        <!-- ========================================== -->
        <div id="panel-addresses" class="account-tab-panel <?= ($active_tab === 'addresses') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-2xs space-y-6">
            
            <div class="pb-5 border-b border-slate-100 flex items-center justify-between">
              <div>
                <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Saved Addresses</h2>
                <p class="text-xs text-slate-500 font-normal mt-0.5">Manage your delivery and doorstep service locations.</p>
              </div>
              <button type="button" class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand-blue hover:underline">
                <i class="fa-solid fa-plus text-[10px]"></i>
                <span>Add New Address</span>
              </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              
              <!-- Address 1 (Primary Home) -->
              <div class="p-5 rounded-2xl border-2 border-brand-blue bg-brand-blue/5 relative space-y-2">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-semibold text-brand-blue flex items-center gap-1.5">
                    <i class="fa-solid fa-house text-xs"></i>
                    <span>Home (Primary)</span>
                  </span>
                  <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-brand-blue text-white">Default</span>
                </div>
                <h4 class="text-xs font-semibold text-slate-900">Abhi Viramgama</h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  B-402, Titanium City Centre, 100 Feet Anand Nagar Rd, Prahlad Nagar, Satellite, Ahmedabad, Gujarat 380015
                </p>
                <p class="text-xs text-slate-500">Phone: +91 98765 43210</p>
                <div class="pt-2 flex items-center gap-3 text-xs font-semibold text-brand-blue">
                  <a href="#" class="hover:underline">Edit</a>
                </div>
              </div>

              <!-- Address 2 (Office) -->
              <div class="p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 transition space-y-2">
                <div class="flex items-center justify-between">
                  <span class="text-xs font-semibold text-slate-800 flex items-center gap-1.5">
                    <i class="fa-solid fa-briefcase text-xs text-slate-400"></i>
                    <span>Office</span>
                  </span>
                </div>
                <h4 class="text-xs font-semibold text-slate-900">Webtual Technologies</h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  501, Shapath V, Opp. Karnavati Club, S.G. Highway, Ahmedabad, Gujarat 380058
                </p>
                <p class="text-xs text-slate-500">Phone: +91 98765 43210</p>
                <div class="pt-2 flex items-center gap-3 text-xs font-semibold text-brand-blue">
                  <a href="#" class="hover:underline">Edit</a>
                  <span class="text-slate-300">•</span>
                  <a href="#" class="hover:underline text-slate-500">Set as Default</a>
                </div>
              </div>

            </div>

          </div>
        </div>

        <!-- ========================================== -->
        <!-- PANEL 5: SETTINGS                          -->
        <!-- ========================================== -->
        <div id="panel-settings" class="account-tab-panel <?= ($active_tab === 'settings') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-2xs space-y-6">
            
            <div class="pb-5 border-b border-slate-100">
              <h2 class="text-lg sm:text-xl font-semibold text-slate-900">Account Settings</h2>
              <p class="text-xs text-slate-500 font-normal mt-0.5">Control notification channels, privacy, and account preferences.</p>
            </div>

            <!-- Notifications Section -->
            <div class="space-y-4">
              <h3 class="text-xs font-semibold text-slate-900 uppercase tracking-wider">Notification Preferences</h3>
              
              <div class="space-y-3">
                
                <label class="flex items-center justify-between p-3.5 rounded-2xl border border-slate-200 bg-slate-50/50 cursor-pointer hover:bg-white transition">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-green-50 text-[#25D366] flex items-center justify-center text-base">
                      <i class="fa-brands fa-whatsapp"></i>
                    </span>
                    <div>
                      <h5 class="text-xs font-semibold text-slate-900">WhatsApp Order Alerts</h5>
                      <p class="text-[11px] text-slate-500 font-normal">Receive instant fitting appointment reminders and tax invoices.</p>
                    </div>
                  </div>
                  <input type="checkbox" checked class="w-4 h-4 rounded text-brand-blue focus:ring-brand-blue border-slate-300">
                </label>

                <label class="flex items-center justify-between p-3.5 rounded-2xl border border-slate-200 bg-slate-50/50 cursor-pointer hover:bg-white transition">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center text-sm">
                      <i class="fa-solid fa-comment-sms"></i>
                    </span>
                    <div>
                      <h5 class="text-xs font-semibold text-slate-900">SMS Notifications</h5>
                      <p class="text-[11px] text-slate-500 font-normal">Dispatch alerts and OTP security codes.</p>
                    </div>
                  </div>
                  <input type="checkbox" checked class="w-4 h-4 rounded text-brand-blue focus:ring-brand-blue border-slate-300">
                </label>

                <label class="flex items-center justify-between p-3.5 rounded-2xl border border-slate-200 bg-slate-50/50 cursor-pointer hover:bg-white transition">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center text-sm">
                      <i class="fa-solid fa-tag"></i>
                    </span>
                    <div>
                      <h5 class="text-xs font-semibold text-slate-900">Special Tyre Offers &amp; Discounts</h5>
                      <p class="text-[11px] text-slate-500 font-normal">Seasonal discount codes and battery replacement reminders.</p>
                    </div>
                  </div>
                  <input type="checkbox" class="w-4 h-4 rounded text-brand-blue focus:ring-brand-blue border-slate-300">
                </label>

              </div>
            </div>

            <!-- Danger Zone -->
            <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between text-xs">
              <div>
                <h4 class="font-semibold text-slate-800">Deactivate Account</h4>
                <p class="text-[11px] text-slate-500 font-normal">Temporarily pause your TyreHub profile and saved garage.</p>
              </div>
              <button type="button" class="px-3 py-1.5 rounded-lg border border-red-200 text-xs font-semibold text-red-600 hover:bg-red-50 transition">Deactivate</button>
            </div>

          </div>
        </div>

        <!-- ========================================== -->
        <!-- PANEL 6: LOGOUT CONFIRMATION               -->
        <!-- ========================================== -->
        <div id="panel-logout" class="account-tab-panel <?= ($active_tab === 'logout') ? 'block' : 'hidden' ?>">
          <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-2xs text-center max-w-lg mx-auto space-y-4">
            
            <div class="w-16 h-16 rounded-full bg-red-50 text-red-500 flex items-center justify-center text-2xl mx-auto border border-red-100">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>

            <div>
              <h2 class="text-xl font-semibold text-slate-900">Sign Out of TyreHub?</h2>
              <p class="text-xs text-slate-500 font-normal mt-1 leading-relaxed">
                You will need to verify with your mobile OTP the next time you sign in to view your orders and garage profile.
              </p>
            </div>

            <div class="pt-4 flex items-center justify-center gap-3">
              <button type="button" 
                      onclick="switchAccountTab('service-request')" 
                      class="px-5 py-2.5 rounded-xl border border-slate-200 bg-white text-xs font-semibold text-slate-700 hover:bg-slate-50 transition">
                Cancel &amp; Stay
              </button>
              <a href="login.php" 
                 class="px-5 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white text-xs font-semibold transition shadow-xs">
                Yes, Sign Out
              </a>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- JAVASCRIPT: INSTANT TAB SWITCHING          -->
<!-- ========================================== -->
<script>
function switchAccountTab(tabName) {
  // Hide all tab panels
  const panels = document.querySelectorAll('.account-tab-panel');
  panels.forEach(panel => {
    panel.classList.add('hidden');
    panel.classList.remove('block');
  });

  // Show target panel
  const targetPanel = document.getElementById('panel-' + tabName);
  if (targetPanel) {
    targetPanel.classList.remove('hidden');
    targetPanel.classList.add('block');
  }

  // Update button active styles
  const buttons = document.querySelectorAll('.tab-nav-btn');
  buttons.forEach(btn => {
    const isTarget = btn.getAttribute('data-tab-btn') === tabName;
    if (tabName !== 'logout') {
      if (isTarget) {
        btn.classList.add('bg-brand-blue', 'text-white', 'font-semibold', 'shadow-xs');
        btn.classList.remove('text-slate-700', 'hover:bg-slate-50', 'hover:text-slate-900');
        const icon = btn.querySelector('i');
        if (icon) {
          icon.classList.add('text-brand-yellow');
          icon.classList.remove('text-slate-400');
        }
      } else {
        btn.classList.remove('bg-brand-blue', 'text-white', 'font-semibold', 'shadow-xs');
        btn.classList.add('text-slate-700', 'hover:bg-slate-50', 'hover:text-slate-900');
        const icon = btn.querySelector('i');
        if (icon) {
          icon.classList.remove('text-brand-yellow');
          icon.classList.add('text-slate-400');
        }
      }
    }
  });

  // Update URL state without page reload
  history.replaceState(null, null, '?tab=' + tabName);
}
</script>

<?php
include 'includes/footer.php';
?>
