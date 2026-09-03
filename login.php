<?php
$page_title = 'Sign In | TyreHub';
$page_description = 'Sign in to your TyreHub account using Mobile OTP to track orders, manage garage profiles, and view warranties.';
$current_page = 'login';
include 'includes/interface.php';
include 'includes/header.php';

// Mobile OTP state handling
$step = isset($_POST['step']) ? $_POST['step'] : 'input';
$mobile_no = isset($_POST['mobile_no']) ? trim($_POST['mobile_no']) : '';
$error_msg = '';
$success_msg = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($step === 'input') {
        $clean_phone = preg_replace('/[^0-9]/', '', $mobile_no);
        if (empty($mobile_no) || !preg_match('/^[6-9]\d{9}$/', $clean_phone)) {
            $error_msg = 'Please enter a valid 10-digit Indian mobile number.';
        } else {
            $step = 'verify_otp';
        }
    } elseif ($step === 'verify_otp') {
        $otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';
        if (empty($otp) || strlen($otp) < 4) {
            $error_msg = 'Please enter the 4-digit verification OTP.';
            $step = 'verify_otp';
        } else {
            $success_msg = true;
        }
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
      <span class="text-brand-blue font-medium">Sign In</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- PREMIUM SIGN IN / LOGIN SECTION (OTP ONLY) -->
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
      <div class="lg:col-span-6">
        
        <!-- 1. Heading Block -->
        <div>
          <!-- Badge -->
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-yellow/20 text-slate-950 text-xs font-semibold mb-3 border border-brand-yellow/50 shadow-2xs">
            <i class="fa-solid fa-user-shield text-amber-500 text-xs"></i>
            <span>Welcome Back to TyreHub</span>
          </span>

          <h2 class="text-2xl sm:text-3xl font-semibold text-brand-blue tracking-tight leading-tight">
            Manage Your Garage &amp; Tyre Services
          </h2>
          
          <p class="text-xs sm:text-sm text-slate-500 mt-2 font-normal leading-relaxed">
            Sign in with your mobile number to track fitment appointments, download tax invoices, and access manufacturer warranties in seconds.
          </p>
        </div>

        <!-- 2. 3 Key Features (Equal top & bottom margins: my-5) -->
        <div class="my-5 space-y-3.5">
          
          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
              <i class="fa-solid fa-car-side text-sm"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">Saved Vehicles &amp; Tyres</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Instant tyre size matching and service history for your registered cars.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-100">
              <i class="fa-solid fa-file-invoice-dollar text-sm"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">1-Click Invoice &amp; Slip Downloads</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Access official GST invoices and booking appointment slips 24/7.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-slate-200/80 shadow-2xs transition hover:border-brand-blue/40">
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 border border-amber-100">
              <i class="fa-solid fa-clock-rotate-left text-sm"></i>
            </div>
            <div>
              <h4 class="text-xs font-semibold text-slate-900">Live Appointment Status</h4>
              <p class="text-[11px] text-slate-500 font-normal mt-0.5 leading-relaxed">
                Check store fitment timings and live tyre readiness before visiting.
              </p>
            </div>
          </div>

        </div>

        <!-- 3. Social Proof Card -->
        <div>
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
      <!-- RIGHT COLUMN: MOBILE OTP SIGN IN (7 COLS)  -->
      <!-- ========================================== -->
      <div class="lg:col-span-6">
        
        <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-9 shadow-sm relative">

          <!-- Card Header with Icon -->
          <div class="flex items-center justify-between pb-5 mb-6 border-b border-slate-100">
            <div>
              <h1 class="text-xl sm:text-2xl font-semibold text-slate-900 tracking-tight">
                Sign In with Mobile OTP
              </h1>
              <p class="text-xs text-slate-500 font-normal mt-1">
                Enter your registered 10-digit mobile number to receive a one-time password.
              </p>
            </div>

            <div class="w-11 h-11 rounded-2xl bg-brand-yellow/20 text-slate-900 border border-brand-yellow/40 flex items-center justify-center shrink-0">
              <i class="fa-solid fa-mobile-screen-button text-base text-slate-800"></i>
            </div>
          </div>

          <!-- SUCCESS NOTIFICATION -->
          <?php if ($success_msg): ?>
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-start gap-3">
              <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5"></i>
              <div>
                <h4 class="text-xs font-semibold text-emerald-900">Signed In Successfully!</h4>
                <p class="text-[11px] text-emerald-700 mt-0.5 leading-relaxed">
                  Welcome back! Your mobile <strong>+91 <?= htmlspecialchars($mobile_no) ?></strong> has been verified. You now have full access to your TyreHub account.
                </p>
                <div class="mt-3 flex items-center gap-3">
                  <a href="buy-tyre.php" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-900 hover:underline">
                    <span>Explore Tyres</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                  </a>
                  <a href="cart.php" class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand-blue hover:underline">
                    <span>View Cart</span>
                  </a>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <!-- ERROR NOTIFICATION -->
          <?php if (!empty($error_msg)): ?>
            <div class="mb-5 p-3.5 rounded-2xl bg-red-50 border border-red-200 flex items-center gap-2.5 text-xs text-red-700">
              <i class="fa-solid fa-circle-exclamation text-red-500 text-sm shrink-0"></i>
              <span><?= htmlspecialchars($error_msg) ?></span>
            </div>
          <?php endif; ?>

          <?php if (!$success_msg): ?>

            <?php if ($step === 'verify_otp'): ?>
              <!-- ========================================== -->
              <!-- STEP 2: ENTER OTP CODE                     -->
              <!-- ========================================== -->
              <form method="POST" action="login.php" class="space-y-4">
                <input type="hidden" name="step" value="verify_otp">
                <input type="hidden" name="mobile_no" value="<?= htmlspecialchars($mobile_no) ?>">

                <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80 flex items-center justify-between text-xs">
                  <div>
                    <span class="text-slate-400 block text-[11px]">OTP sent to mobile</span>
                    <strong class="text-slate-900 font-semibold">+91 <?= htmlspecialchars($mobile_no) ?></strong>
                  </div>
                  <a href="login.php" class="text-brand-blue hover:underline font-medium text-xs flex items-center gap-1">
                    <i class="fa-solid fa-pen-to-square text-[10px]"></i>
                    <span>Change</span>
                  </a>
                </div>

                <div>
                  <label for="otp" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Enter 4-Digit OTP <span class="text-red-500 font-bold">*</span>
                  </label>
                  <input type="text" 
                         id="otp" 
                         name="otp" 
                         placeholder="• • • •" 
                         maxlength="4" 
                         pattern="[0-9]{4}" 
                         required 
                         autofocus
                         class="w-full h-12 text-center text-lg font-bold tracking-[0.5em] rounded-xl bg-slate-50/50 border border-slate-200 focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/5 outline-none transition">
                  <p class="text-[11px] text-slate-400 font-normal mt-2 text-center">
                    Didn't receive code? <a href="login.php" class="text-brand-blue font-semibold hover:underline">Resend OTP</a>
                  </p>
                </div>

                <div class="pt-2">
                  <button type="submit" 
                          class="w-full h-12 rounded-2xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider flex items-center justify-center gap-2 transition cursor-pointer shadow-sm hover:shadow-md active:scale-[0.99]">
                    <span>Verify &amp; Sign In</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                  </button>
                </div>
              </form>

            <?php else: ?>
              <!-- ========================================== -->
              <!-- STEP 1: ENTER MOBILE NUMBER                -->
              <!-- ========================================== -->
              <form method="POST" action="login.php" class="space-y-4">
                <input type="hidden" name="step" value="input">

                <div>
                  <div class="flex items-center justify-between mb-1.5">
                    <label for="mobile_no" class="block text-xs font-medium text-slate-700">
                      Mobile Number <span class="text-red-500 font-bold">*</span>
                    </label>
                    <span class="text-[10px] text-slate-400 font-normal">10-Digit Indian Mobile</span>
                  </div>
                  
                  <div class="flex items-center rounded-xl border border-slate-200 bg-slate-50/50 focus-within:bg-white focus-within:border-brand-blue focus-within:ring-4 focus-within:ring-brand-blue/5 transition overflow-hidden">
                    <span class="pl-3.5 pr-3 py-2.5 text-xs font-semibold text-slate-700 bg-slate-100 border-r border-slate-200 select-none flex items-center gap-1">
                      <span>+91</span>
                    </span>
                    <input type="tel" 
                           id="mobile_no" 
                           name="mobile_no" 
                           value="<?= htmlspecialchars($mobile_no) ?>"
                           placeholder="98765 43210" 
                           maxlength="10"
                           pattern="[0-9]{10}" 
                           required 
                           autofocus
                           class="w-full h-11 px-3.5 bg-transparent text-xs font-semibold text-slate-900 placeholder:text-slate-400 placeholder:font-normal outline-none tracking-wider">
                  </div>
                  <p class="text-[11px] text-slate-400 font-normal mt-1.5 flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved text-[10px] text-slate-400"></i>
                    <span>We will send a 4-digit verification code via SMS/WhatsApp.</span>
                  </p>
                </div>

                <div class="pt-2">
                  <button type="submit" 
                          class="w-full h-12 rounded-2xl bg-brand-yellow hover:bg-brand-yellowHover text-slate-950 font-semibold text-xs sm:text-sm uppercase tracking-wider flex items-center justify-center gap-2 transition cursor-pointer shadow-sm hover:shadow-md active:scale-[0.99]">
                    <span>Get Login OTP</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                  </button>
                </div>
              </form>

            <?php endif; ?>

          <?php endif; ?>

          <!-- TRUST PROOF FOOTER -->
          <div class="pt-4 mt-6 border-t border-slate-100 flex items-center justify-center gap-4 text-[11px] text-slate-400 flex-wrap">
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
              <span>Instant Access</span>
            </span>
          </div>

          <!-- CREATE ACCOUNT PROMPT -->
          <div class="pt-3 text-center text-xs text-slate-600">
            Don't have an account yet? 
            <a href="register.php" class="font-semibold text-brand-blue hover:underline">Create Account here</a>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<?php
include 'includes/footer.php';
?>
