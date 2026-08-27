<?php
$page_title = "Privacy Policy | TyreHub - Your Privacy Matters";
$page_description = "Learn how TyreHub collects, protects, and uses your personal information. Read our comprehensive Privacy Policy regarding data protection, cookies, and payment security.";
$current_page = "privacy";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- PRIVACY POLICY HERO BANNER                -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-user-shield text-brand-blue"></i> Data Protection & Trust
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Your Privacy Matters at <span class="text-brand-yellow drop-shadow-sm">TyreHub</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto font-normal leading-relaxed">
      At TyreHub, we ensure that the privacy of all users visiting our platform is strictly maintained and safeguarded.
    </p>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600 mt-6">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blueDark"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold">Privacy Policy</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- PRIVACY POLICY MAIN CONTENT SECTION        -->
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
            <a href="#intro" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-shield-halved text-brand-yellow w-4"></i> Overview & Scope
            </a>
            <a href="#processing" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-user-check text-brand-yellow w-4"></i> Personal Data Processing
            </a>
            <a href="#usage" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-database text-brand-yellow w-4"></i> Use of Collected Data
            </a>
            <a href="#technologies" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-cookie-bite text-brand-yellow w-4"></i> Cookies & Analytics
            </a>
            <a href="#contests" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-trophy text-brand-yellow w-4"></i> Surveys & Contests
            </a>
            <a href="#security" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-lock text-brand-yellow w-4"></i> Security Procedures
            </a>
            <a href="#queries" class="flex items-center gap-2.5 px-3 py-2 rounded-xl hover:bg-white hover:text-brand-blue transition">
              <i class="fa-solid fa-headset text-brand-yellow w-4"></i> Contact & Queries
            </a>
          </nav>

          <!-- Quick Contact Box -->
          <div class="pt-4 border-t border-slate-200 space-y-2">
            <p class="text-xs text-slate-500">Have privacy concerns?</p>
            <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="btn-primary w-full py-2.5 text-xs font-bold text-center block">
              <i class="fa-solid fa-phone mr-1"></i> <?php echo TOLL_FREE_NUMBER; ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Policy Document Body -->
      <div class="lg:col-span-8 space-y-10 text-slate-700 text-sm leading-relaxed font-normal">

        <!-- 1. Intro & Scope -->
        <div id="intro" class="space-y-4 scroll-mt-28" data-aos="fade-left" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 1
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Overview & Scope of Privacy Policy</h2>
          <p>
            At TyreHub, we ensure that the privacy of all the users is maintained whosoever visits our website. Our Privacy Policy explains how the company collects your information, holds it, uses the data, and discloses it to third parties. TyreHub assures users that the Personal Information collected from them will not be shared, sold, or rented out to others.
          </p>
          <p>
            Each time visitors or users use our website, the current updated Privacy Policy will be applicable. TyreHub maintains the highest standards for the security of transactions taken out at our site and consumer data. Our Policy is incorporated into and subject to the <strong>Terms of Use</strong>.
          </p>

          <div class="bg-amber-50 border-l-4 border-amber-400 p-4 rounded-r-2xl text-xs sm:text-sm text-amber-900 space-y-1">
            <p class="font-bold flex items-center gap-1.5"><i class="fa-solid fa-circle-info text-amber-600"></i> Scope Commitment:</p>
            <p>We are committed to protecting the privacy of registered users, suppliers, installers, and partners across all TyreHub products and services.</p>
          </div>
        </div>

        <!-- 2. Processing Personal Information -->
        <div id="processing" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 2
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Processing of Personal Information</h2>
          <p>
            Visitors may visit TyreHub without providing any kind of personal information. However, at certain points, users need to supply personal information for site registration, correspondence, participation in online surveys, or for making purchases.
          </p>
          <p>
            When purchasing any product from TyreHub, we require <strong>Personal Identifiable Information (PII)</strong> on our order forms. This includes contact details such as:
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-solid fa-user text-xs"></i>
              </div>
              <span class="text-xs font-bold text-slate-800">Full Name & Contact Details</span>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-solid fa-location-dot text-xs"></i>
              </div>
              <span class="text-xs font-bold text-slate-800">Delivery & Billing Address</span>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-solid fa-phone text-xs"></i>
              </div>
              <span class="text-xs font-bold text-slate-800">Mobile Number & Email</span>
            </div>
            <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-solid fa-credit-card text-xs"></i>
              </div>
              <span class="text-xs font-bold text-slate-800">Encrypted Payment Credentials</span>
            </div>
          </div>

          <p class="pt-2">
            Although third-party service providers are used for payment processing, we assure you that your credit card information is encrypted and transmitted directly to Payment Service Providers. We do not store financial card numbers in any form.
          </p>
        </div>

        <!-- 3. Use of Collected Data -->
        <div id="usage" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 3
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Use of Collected Data</h2>
          <p>
            TyreHub collects details from users at different touchpoints, including when placing online orders, registering accounts, subscribing to newsletters, or taking part in surveys.
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>PII data is strictly used for order fulfillment, doorstep technician dispatch, and customer support.</li>
            <li>Consumers must <strong>not</strong> share sensitive PII such as Date of Birth, OTPs, or Aadhaar numbers over unencrypted emails or casual phone communications. Sharing such sensitive data is done at your own risk.</li>
            <li>Users may choose not to provide PII; however, certain features requiring authenticated ordering will not be accessible.</li>
          </ul>
        </div>

        <!-- 4. Technologies: Cookies & Analytics -->
        <div id="technologies" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 4
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Cookies, Analytics & Anonymous Data</h2>
          
          <h3 class="font-bold text-slate-900 text-base">Cookies Technology</h3>
          <p>
            Cookies are small data files stored on your device through your internet browser to provide tailored information and seamless navigation. Cookies do not identify users personally; they collect non-personal browser data to improve site performance. You can block or delete cookies in your browser settings.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">Google Analytics & Conversion Tracking</h3>
          <p>
            TyreHub utilizes Google Analytics and AdWords Conversion Tracking tools to evaluate aggregate traffic metrics and optimize user experience. Users can opt out of Google Analytics tracking via the official <em>Google Analytics Opt-out Browser Add-On</em>.
          </p>

          <h3 class="font-bold text-slate-900 text-base pt-2">Anonymous Data Collection</h3>
          <p>
            General technical data such as browser type, IP address, domain name, operating system, and session duration are gathered anonymously for statistical analysis and website optimization without linking to personal customer profiles.
          </p>
        </div>

        <!-- 5. Surveys & Contests -->
        <div id="contests" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 5
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Surveys, Contests & Promotional Offers</h2>
          <p>
            Participation in TyreHub surveys, contests, or sweepstakes is completely voluntary. Details requested (such as Name, Zip Code, or vehicle preferences) are used strictly for winner notifications, traffic analysis, and awarding prizes in compliance with applicable laws.
          </p>
          <p>
            Customers receiving promotional news or account updates can choose to opt out at any time by clicking the <strong>"Unsubscribe"</strong> link in our emails or replying with "Unsubscribe" in the subject header.
          </p>
        </div>

        <!-- 6. Security Procedures -->
        <div id="security" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 6
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Our Security Procedures</h2>
          <p>
            TyreHub implements stringent technical, managerial, operational, and physical security measures to safeguard customer information offline and online against unauthorized access or misuse.
          </p>
          <div class="bg-emerald-50 border border-emerald-200 p-5 rounded-2xl text-xs sm:text-sm text-emerald-950 space-y-2">
            <p class="font-bold text-emerald-900 flex items-center gap-2">
              <i class="fa-solid fa-lock text-emerald-600"></i> 256-Bit SSL Security Guarantee:
            </p>
            <p>
              All online data transmissions and order sessions are secured using 256-Bit SSL encryption. Employee access to confidential data is strictly regulated under company Code of Conduct policies.
            </p>
          </div>
        </div>

        <!-- 7. Privacy Queries & Contact Address -->
        <div id="queries" class="space-y-4 scroll-mt-28 border-t border-slate-100 pt-8" data-aos="fade-up" data-aos-duration="600">
          <div class="inline-flex items-center gap-2 text-xs font-bold text-brand-blue uppercase tracking-wider bg-brand-blue/10 px-3 py-1 rounded-lg">
            Section 7
          </div>
          <h2 class="text-2xl font-semibold font-outfit text-slate-900">Privacy Queries & Corporate Address</h2>
          <p>
            If you have any questions regarding our Privacy Policy, data usage, or third-party transmissions, please reach out to our privacy compliance team:
          </p>

          <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 space-y-3 font-medium">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-regular fa-envelope text-sm"></i>
              </div>
              <span>Email: <a href="mailto:<?php echo SUPPORT_EMAIL; ?>" class="text-brand-blue font-bold hover:underline"><?php echo SUPPORT_EMAIL; ?></a> / <a href="mailto:sales@tyrehub.com" class="text-brand-blue font-bold hover:underline">sales@tyrehub.com</a></span>
            </div>
            
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-blue flex items-center justify-center shrink-0">
                <i class="fa-solid fa-phone text-sm"></i>
              </div>
              <span>Toll Free: <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="text-brand-blue font-bold hover:underline"><?php echo TOLL_FREE_NUMBER; ?></a></span>
            </div>

            <div class="flex items-start gap-3 pt-2 border-t border-slate-200">
              <div class="w-8 h-8 rounded-lg bg-brand-yellow/20 text-brand-blue flex items-center justify-center shrink-0 mt-0.5">
                <i class="fa-solid fa-building text-sm"></i>
              </div>
              <div>
                <strong class="block text-slate-900 font-bold">Corporate Office Address:</strong>
                <span class="text-slate-600 text-xs">TyreHub.com, 3rd Eye Residency, Motera Stadium Road, Motera, Ahmedabad, Gujarat</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
