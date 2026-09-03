<?php
$page_title = 'Create Account | TyreHub';
$page_description = 'Join TyreHub to track your orders, book tyre fitments, and manage warranties.';
$current_page = 'register';
include 'includes/interface.php';
include 'includes/header.php';

// Handle submission
$success_msg = false;
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
    $mobile_no = isset($_POST['mobile_no']) ? trim($_POST['mobile_no']) : '';
    $has_whatsapp = isset($_POST['has_whatsapp']) ? trim($_POST['has_whatsapp']) : '';

    if (empty($first_name) || empty($last_name) || empty($mobile_no) || empty($has_whatsapp)) {
        $error_msg = 'Please fill out all required fields.';
    } elseif (!preg_match('/^[6-9]\d{9}$/', preg_replace('/[^0-9]/', '', $mobile_no))) {
        $error_msg = 'Please enter a valid 10-digit Indian mobile number.';
    } else {
        $success_msg = true;
    }
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
      <span class="text-brand-blue font-medium">Create Account</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- PREMIUM REGISTER SECTION                   -->
<!-- ========================================== -->
<section class="py-12 sm:py-16 bg-gradient-to-b from-slate-50 via-slate-50/70 to-white min-h-[75vh] flex items-center relative overflow-hidden">
  
  <!-- Subtle Background Decorative Blobs -->
  <div class="absolute top-10 left-1/4 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl pointer-events-none -z-10"></div>
  <div class="absolute bottom-10 right-1/4 w-96 h-96 bg-brand-yellow/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

  <div class="container mx-auto px-4 max-w-5xl">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- ========================================== -->
      <!-- LEFT COLUMN: BRAND STORY & TRUST (5 COLS)  -->
      <!-- ========================================== -->
      <div class="lg:col-span-5 space-y-3.5">
        
        <!-- 1. Heading Block -->
        <div>
          <!-- Badge -->
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-yellow/20 text-slate-950 text-xs font-semibold mb-3 border border-brand-yellow/50 shadow-2xs">
            <i class="fa-solid fa-bolt-lightning text-amber-500 text-xs"></i>
            <span>Instant 30-Second Registration</span>
          </span>

          <h2 class="text-2xl sm:text-3xl font-semibold text-brand-blue tracking-tight leading-tight">
            One Account for All Your Tyre &amp; Car Needs
          </h2>
          
          <p class="text-xs sm:text-sm text-slate-500 mt-2 font-normal leading-relaxed">
            Join thousands of smart car owners in Gujarat who manage fitments, digital warranty cards, and doorstep services with TyreHub.
          </p>
        </div>

        <!-- 2. 3 Key Features (Equal top & bottom margins: my-5) -->
        <div class="my-5 space-y-3.5">
          
          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
              <i class="fa-solid fa-shield-halved text-sm"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">Digital Warranty Vault</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Never lose your tyre warranty receipt. Claim standard manufacturer guarantees paperless.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
              <i class="fa-solid fa-calendar-check text-sm"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">Priority Workshop Fitment</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Zero waiting at 50+ certified service partner stores across Ahmedabad &amp; Gandhinagar.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-green-50 text-[#25D366] flex items-center justify-center shrink-0 border border-green-100">
              <i class="fa-brands fa-whatsapp text-base"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">Instant WhatsApp Booking Slips</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Get order tracking links, live technician updates, and PDF invoices on WhatsApp.
              </p>
            </div>
          </div>

          <div class="p-3.5 rounded-2xl bg-white border border-slate-200/90 shadow-2xs flex items-center gap-3.5">
            <div class="flex items-center -space-x-2 shrink-0">
              <div class="w-7 h-7 rounded-full border-2 border-white bg-brand-blue text-white text-[10px] font-bold flex items-center justify-center shadow-xs">AV</div>
              <div class="w-7 h-7 rounded-full border-2 border-white bg-amber-500 text-slate-950 text-[10px] font-bold flex items-center justify-center shadow-xs -ml-3">RP</div>
              <div class="w-7 h-7 rounded-full border-2 border-white bg-emerald-600 text-white text-[10px] font-bold flex items-center justify-center shadow-xs -ml-3">SK</div>
              <div class="w-7 h-7 rounded-full border-2 border-white bg-slate-900 text-brand-yellow text-[9px] font-bold flex items-center justify-center shadow-xs -ml-3">★</div>
            </div>
            <div class="text-xs leading-snug">
              <span class="font-semibold text-slate-900 block">4.9 ★ Rated by 25,000+ Drivers</span>
              <span class="text-[11px] text-slate-500 font-normal">Trusted across Ahmedabad &amp; Gandhinagar</span>
            </div>
          </div>

        </div>

        

      </div>

      <!-- ========================================== -->
      <!-- RIGHT COLUMN: 4-FIELD FORM (7 COLS)        -->
      <!-- ========================================== -->
      <div class="lg:col-span-7">
        
        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-9 shadow-sm relative">

          <!-- Card Header with Icon -->
          <div class="flex items-center justify-between pb-5 mb-5 border-b border-slate-100">
            <div>
              <h1 class="text-xl sm:text-2xl font-semibold text-slate-900 tracking-tight">
                Create Your Account
              </h1>
              <p class="text-xs text-slate-500 font-normal mt-1">
                Enter your details below to activate your member profile.
              </p>
            </div>

            <div class="w-11 h-11 rounded-2xl bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40 flex items-center justify-center shrink-0">
              <i class="fa-solid fa-user-plus text-base text-slate-800"></i>
            </div>
          </div>

          <!-- SUCCESS NOTIFICATION -->
          <?php if ($success_msg): ?>
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-start gap-3">
              <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5"></i>
              <div>
                <h4 class="text-xs font-semibold text-emerald-900">Account Created Successfully!</h4>
                <p class="text-[11px] text-emerald-700 mt-0.5 leading-relaxed">
                  Welcome, <strong><?= htmlspecialchars($first_name . ' ' . $last_name) ?></strong>! Your account has been registered with mobile <strong>+91 <?= htmlspecialchars($mobile_no) ?></strong>.
                </p>
                <div class="mt-3">
                  <a href="buy-tyre.php" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-900 hover:underline">
                    <span>Explore Tyres &amp; Book Fitment</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <!-- ERROR NOTIFICATION -->
          <?php if (!empty($error_msg)): ?>
            <div class="mb-6 p-3.5 rounded-2xl bg-red-50 border border-red-200 flex items-center gap-2.5 text-xs text-red-700">
              <i class="fa-solid fa-circle-exclamation text-red-500 text-sm shrink-0"></i>
              <span><?= htmlspecialchars($error_msg) ?></span>
            </div>
          <?php endif; ?>

          <!-- 4-FIELD REGISTRATION FORM -->
          <form method="POST" action="register.php" class="space-y-4">

            <!-- FIELDS 1 & 2: FIRST NAME & LAST NAME -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              
              <!-- FIELD 1: FIRST NAME -->
              <div>
                <label for="first_name" class="block text-xs font-medium text-slate-700 mb-1.5">
                  First Name <span class="text-red-500 font-bold">*</span>
                </label>
                <div class="relative">
                  <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none">
                    <i class="fa-regular fa-user"></i>
                  </span>
                  <input type="text" 
                         id="first_name" 
                         name="first_name" 
                         value="<?= isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : '' ?>"
                         placeholder="e.g. Abhi" 
                         required 
                         class="w-full h-11 pl-9 pr-3.5 rounded-xl bg-slate-50/50 border border-slate-200 focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/5 text-xs text-slate-900 placeholder:text-slate-400 outline-none transition font-medium">
                </div>
              </div>

              <!-- FIELD 2: LAST NAME -->
              <div>
                <label for="last_name" class="block text-xs font-medium text-slate-700 mb-1.5">
                  Last Name <span class="text-red-500 font-bold">*</span>
                </label>
                <div class="relative">
                  <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none">
                    <i class="fa-regular fa-user"></i>
                  </span>
                  <input type="text" 
                         id="last_name" 
                         name="last_name" 
                         value="<?= isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : '' ?>"
                         placeholder="e.g. Viramgama" 
                         required 
                         class="w-full h-11 pl-9 pr-3.5 rounded-xl bg-slate-50/50 border border-slate-200 focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/5 text-xs text-slate-900 placeholder:text-slate-400 outline-none transition font-medium">
                </div>
              </div>

            </div>

            <!-- FIELD 3: MOBILE NO -->
            <div>
              <div class="flex items-center justify-between mb-1.5">
                <label for="mobile_no" class="block text-xs font-medium text-slate-700">
                  Mobile No <span class="text-red-500 font-bold">*</span>
                </label>
                <span class="text-[10px] text-slate-400 font-normal">10-Digit Indian Number</span>
              </div>
              
              <div class="flex items-center rounded-xl border border-slate-200 bg-slate-50/50 focus-within:bg-white focus-within:border-brand-blue focus-within:ring-4 focus-within:ring-brand-blue/5 transition overflow-hidden">
                <span class="pl-3.5 pr-3 py-2.5 text-xs font-semibold text-slate-700 bg-slate-100 border-r border-slate-200 select-none flex items-center gap-1">
                  <span>+91</span>
                </span>
                <input type="tel" 
                       id="mobile_no" 
                       name="mobile_no" 
                       value="<?= isset($_POST['mobile_no']) ? htmlspecialchars($_POST['mobile_no']) : '' ?>"
                       placeholder="98765 43210" 
                       maxlength="10"
                       pattern="[0-9]{10}"
                       required 
                       class="w-full h-11 px-3.5 bg-transparent text-xs font-semibold text-slate-900 placeholder:text-slate-400 placeholder:font-normal outline-none tracking-wider">
              </div>
              <p class="text-[11px] text-slate-400 font-normal mt-1 flex items-center gap-1.5">
                <i class="fa-solid fa-lock text-[10px] text-slate-400"></i>
                <span>We protect your privacy. No marketing spam.</span>
              </p>
            </div>

            <!-- FIELD 4: DO YOU HAVE WHATSAPP ON THIS NUMBER? -->
            <div class="pt-2">
              <label class="block text-xs font-medium text-slate-700 mb-2">
                Do you have WhatsApp on this number? <span class="text-red-500 font-bold">*</span>
              </label>
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                
                <!-- OPTION A: YES, HAVE WHATSAPP -->
                <label class="cursor-pointer relative flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-white hover:border-emerald-400 has-checked:border-emerald-500 has-checked:bg-emerald-50/40 transition">
                  <input type="radio" 
                         name="has_whatsapp" 
                         value="yes" 
                         <?= (!isset($_POST['has_whatsapp']) || $_POST['has_whatsapp'] === 'yes') ? 'checked' : '' ?>
                         required
                         class="w-4 h-4 text-emerald-600 focus:ring-emerald-500 border-slate-300">
                  <span class="text-xs font-medium text-slate-900 flex items-center gap-1.5">
                    <i class="fa-brands fa-whatsapp text-emerald-600 text-sm"></i>
                    <span>Yes, on this number</span>
                  </span>
                </label>

                <!-- OPTION B: NO, DIFFERENT NUMBER -->
                <label class="cursor-pointer relative flex items-center gap-2.5 p-3 rounded-xl border border-slate-200 bg-white hover:border-slate-400 has-checked:border-brand-blue has-checked:bg-brand-blue/5 transition">
                  <input type="radio" 
                         name="has_whatsapp" 
                         value="no" 
                         <?= (isset($_POST['has_whatsapp']) && $_POST['has_whatsapp'] === 'no') ? 'checked' : '' ?>
                         required
                         class="w-4 h-4 text-brand-blue focus:ring-brand-blue border-slate-300">
                  <span class="text-xs font-medium text-slate-800 flex items-center gap-1.5">
                    <i class="fa-regular fa-comment-dots text-slate-400 text-xs"></i>
                    <span>No, different number</span>
                  </span>
                </label>

              </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="pt-3">
              <button type="submit" 
                      class="w-full h-12 rounded-2xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider flex items-center justify-center gap-2 transition cursor-pointer shadow-sm hover:shadow-md active:scale-[0.99]">
                <span>Create Account</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
              </button>
            </div>

            <!-- TRUST PROOF FOOTER -->
            <div class="pt-3 border-t border-slate-100 flex items-center justify-center gap-4 text-[11px] text-slate-400 flex-wrap">
              <span class="flex items-center gap-1">
                <i class="fa-solid fa-lock text-[10px] text-emerald-600"></i>
                <span>SSL Encrypted</span>
              </span>
              <span>•</span>
              <span class="flex items-center gap-1">
                <i class="fa-solid fa-shield text-[10px] text-brand-blue"></i>
                <span>100% Data Privacy</span>
              </span>
              <span>•</span>
              <span class="flex items-center gap-1">
                <i class="fa-solid fa-circle-check text-[10px] text-amber-500"></i>
                <span>Free Registration</span>
              </span>
            </div>

            <!-- TERMS & SIGN IN LINK -->
            <div class="pt-1 text-center text-xs text-slate-600">
              Already have an account? 
              <a href="login.php" class="font-semibold text-brand-blue hover:underline">Sign In here</a>
            </div>

          </form>

        </div>
      </div>

    </div>

  </div>
</section>

<?php
include 'includes/footer.php';
?>
