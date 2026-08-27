<?php
$page_title = "Contact Us | TyreHub - We're Here to Help You With Your Tyre Needs";
$page_description = "Get in touch with TyreHub. Have questions about tyres, fitment, or vehicle services? Fill out our contact form, call our toll-free number 1800-123-5510, or visit our Motera office.";
$current_page = "contact";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- CONTACT HERO BANNER SECTION                -->
<!-- ========================================== -->
<section class="bg-slate-50 py-12 sm:py-14 border-b border-slate-200">
  <div class="container mx-auto px-3 max-w-4xl text-center" data-aos="fade-up" data-aos-duration="600">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
      <i class="fa-solid fa-headset text-brand-blue"></i> Customer Support &amp; Enquiries
    </div>
    
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark mb-3">
      Contact <span class="text-brand-yellow drop-shadow-sm">Us</span>
    </h1>
    
    <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto font-normal leading-relaxed">
      If you have any questions or comments regarding us or your vehicle, please fill out a contact request form below. Or if you prefer, you can reach us at our toll-free number or corporate office.
    </p>

    <!-- Breadcrumb Navigation -->
    <div class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600 mt-6">
      <a href="index.php" class="hover:text-brand-yellow transition text-brand-blueDark"><i class="fa-solid fa-house"></i> Home</a>
      <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
      <span class="text-brand-yellow font-bold">Contact Us</span>
    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- MAIN CONTACT & FORM SECTION                -->
<!-- ========================================== -->
<section class="bg-white py-14 sm:py-16">
  <div class="container mx-auto px-3">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

      <!-- LEFT COLUMN: Contact Form Card (7 Cols) -->
      <div class="lg:col-span-7 bg-white border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-sm space-y-6 flex flex-col justify-between" data-aos="fade-right" data-aos-duration="600">
        <div class="space-y-2 border-b border-slate-100 pb-5">
          <span class="inline-block px-3.5 py-1 rounded-full bg-brand-yellow/20 text-brand-blue font-extrabold text-xs uppercase tracking-wider">
            Online Support
          </span>
          <h2 class="text-2xl sm:text-3xl font-bold font-outfit text-brand-blue">
            Contact TyreHub – <span class="font-medium">We're Here to Help You</span>
          </h2>
          <p class="text-xs sm:text-sm text-slate-600 font-normal">
            Have questions regarding tyres, sizing, or fitment services? Send us a message and our specialists will respond within 24 hours.
          </p>
        </div>

        <!-- Success/Alert Message -->
        <div id="contact-alert" class="hidden p-4 rounded-2xl text-xs sm:text-sm font-medium"></div>

        <form id="contact-form" action="#" method="POST" class="space-y-4" onsubmit="handleContactSubmit(event)">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Full Name -->
            <div class="space-y-1.5">
              <label for="contact-name" class="block text-xs font-bold text-slate-900">Full Name <span class="text-red-500">*</span></label>
              <div class="relative">
                <input type="text" id="contact-name" name="name" required placeholder="Your Name Here"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/10 text-xs sm:text-sm font-medium text-slate-900 outline-none transition pl-10 bg-white placeholder:text-slate-400">
                <i class="fa-regular fa-user absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
              </div>
            </div>

            <!-- Email Address -->
            <div class="space-y-1.5">
              <label for="contact-email" class="block text-xs font-bold text-slate-900">Email Address <span class="text-red-500">*</span></label>
              <div class="relative">
                <input type="email" id="contact-email" name="email" required placeholder="Your Email Here"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/10 text-xs sm:text-sm font-medium text-slate-900 outline-none transition pl-10 bg-white placeholder:text-slate-400">
                <i class="fa-regular fa-envelope absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Mobile Number -->
            <div class="space-y-1.5">
              <label for="contact-mobile" class="block text-xs font-bold text-slate-900">Mobile Number <span class="text-red-500">*</span></label>
              <div class="relative">
                <input type="tel" id="contact-mobile" name="mobile" required placeholder="Your Mobile Here"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/10 text-xs sm:text-sm font-medium text-slate-900 outline-none transition pl-10 bg-white placeholder:text-slate-400">
                <i class="fa-solid fa-mobile-screen absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
              </div>
            </div>

            <!-- Subject -->
            <div class="space-y-1.5">
              <label for="contact-subject" class="block text-xs font-bold text-slate-900">Subject</label>
              <div class="relative">
                <input type="text" id="contact-subject" name="subject" placeholder="Your Subject Here"
                  class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/10 text-xs sm:text-sm font-medium text-slate-900 outline-none transition pl-10 bg-white placeholder:text-slate-400">
                <i class="fa-regular fa-bookmark absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
              </div>
            </div>
          </div>

          <!-- Message -->
          <div class="space-y-1.5">
            <label for="contact-message" class="block text-xs font-bold text-slate-900">Your Message <span class="text-red-500">*</span></label>
            <div class="relative">
              <textarea id="contact-message" name="message" rows="4" required placeholder="Your Message..."
                class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/10 text-xs sm:text-sm font-medium text-slate-900 outline-none transition pl-10 resize-none bg-white placeholder:text-slate-400"></textarea>
              <i class="fa-regular fa-comment-dots absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="pt-2">
            <button type="submit" id="submit-btn" class="btn-primary w-full sm:w-auto px-8 py-3.5 text-sm font-bold shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
              <i class="fa-solid fa-paper-plane"></i>
              <span>Send Message</span>
            </button>
          </div>
        </form>
      </div>

      <!-- RIGHT COLUMN: High-Contrast Corporate Details & Mascot Card (5 Cols) -->
      <div class="lg:col-span-5 bg-brand-blue text-white rounded-3xl p-6 sm:p-8 flex flex-col justify-between relative overflow-hidden shadow-lg border border-white/20 space-y-6" data-aos="fade-left" data-aos-duration="600">
        
        <!-- Corporate Info Header -->
        <div class="space-y-6 z-10">
          <div class="flex items-center justify-between border-b border-white/20 pb-4">
            <div>
              <span class="block text-[11px] font-extrabold text-brand-yellow uppercase tracking-widest">Head Office</span>
              <h3 class="text-2xl font-bold font-outfit text-white">Corporate Address</h3>
            </div>
            <div class="w-10 h-10 rounded-2xl bg-brand-yellow text-slate-900 flex items-center justify-center font-bold text-base shadow-sm">
              <i class="fa-solid fa-building"></i>
            </div>
          </div>

          <!-- Address Lines (Crystal Clear High Contrast Text) -->
          <div class="space-y-2.5">
            <h4 class="text-brand-yellow font-extrabold text-base font-outfit uppercase tracking-wide">
              Atoz Tyrehub Private Limited
            </h4>
            <p class="text-slate-100 text-xs sm:text-sm leading-relaxed font-normal">
              SHOP G.F 1 TO 5, 3RD EYE RESIDENCY,<br>
              NR. KAMESHWAR FLATS, NR. SANGATH 4,<br>
              MOTERA, AHMEDABAD - 380005, GUJARAT, INDIA
            </p>
          </div>

          <!-- Contact Cards Grid -->
          <div class="space-y-3 pt-2">
            <!-- Toll Free Card -->
            <div class="bg-white/10 border border-white/20 p-3.5 rounded-2xl flex items-center gap-3">
              <div class="w-9 h-9 rounded-xl bg-brand-yellow text-slate-900 flex items-center justify-center shrink-0 font-bold text-sm">
                <i class="fa-solid fa-phone-volume"></i>
              </div>
              <div>
                <span class="block text-[10px] text-slate-200 font-bold uppercase">Toll-Free Support Helpline</span>
                <a href="tel:<?php echo str_replace('-', '', TOLL_FREE_NUMBER); ?>" class="font-semibold text-white hover:text-brand-yellow transition text-base font-outfit tracking-wide block">
                  <?php echo TOLL_FREE_NUMBER; ?>
                </a>
              </div>
            </div>

            <!-- Email Card -->
            <div class="bg-white/10 border border-white/20 p-3.5 rounded-2xl flex items-center gap-3">
              <div class="w-9 h-9 rounded-xl bg-white/20 text-white flex items-center justify-center shrink-0 font-bold text-sm">
                <i class="fa-regular fa-envelope"></i>
              </div>
              <div>
                <span class="block text-[10px] text-slate-200 font-bold uppercase">Official Email Enquiries</span>
                <a href="mailto:<?php echo SUPPORT_EMAIL; ?>" class="font-semibold text-slate-100 hover:text-brand-yellow transition text-xs sm:text-sm block">
                  <?php echo SUPPORT_EMAIL; ?>
                </a>
              </div>
            </div>

            <!-- Working Hours -->
            <div class="bg-white/10 border border-white/20 p-3.5 rounded-2xl flex items-center gap-3">
              <div class="w-9 h-9 rounded-xl bg-brand-yellow/20 text-brand-yellow flex items-center justify-center shrink-0 font-bold text-sm">
                <i class="fa-regular fa-clock"></i>
              </div>
              <div>
                <span class="block text-[10px] text-slate-200 font-bold uppercase">Store &amp; Office Hours</span>
                <span class="font-semibold text-slate-100 transition text-xs sm:text-sm block">Mon - Sun: 7:00 AM - 11:00 PM</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Integrated Mascot & Expert Guidance Callout -->
        <div class="pt-5 border-t border-white/20 flex items-center justify-between gap-3 z-10">
          <div class="space-y-1.5">
            <span class="inline-block px-2.5 py-0.5 rounded bg-brand-yellow text-slate-900 font-black text-[9px] uppercase tracking-wider">
              Expert Tyre Guidance
            </span>
            <h5 class="text-xs font-bold text-white leading-snug">
              Need assistance choosing tyres?
            </h5>
            <p class="text-[11px] text-slate-300 font-medium">
              Call our specialists today!
            </p>
          </div>

          <!-- Mascot Image Standing Proudly -->
          <div class="w-16 shrink-0 -mb-2">
            <img src="assets/image/Mascot.png" alt="TyreHub Mechanic Mascot" class="w-full h-auto drop-shadow-2xl">
          </div>
        </div>

        <!-- Ambient Glow Background -->
        <div class="absolute -bottom-16 -right-16 w-60 h-60 bg-brand-yellow/10 rounded-full blur-3xl pointer-events-none"></div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- FULL-WIDTH GOOGLE MAPS LOCATION EMBED     -->
<!-- ========================================== -->
<section class="w-full h-[450px] sm:h-[520px] border-t border-slate-200 overflow-hidden relative" data-aos="fade-up" data-aos-duration="600">
  <iframe 
    title="TyreHub Store Location Map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000!2d72.5975!3d23.0970!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e835d8a670399%3A0xed7858e6eba4b573!2sTyreHub!5e0!3m2!1sen!2sin!4v1787653306465!5m2!1sen!2sin" 
    width="100%" 
    height="100%" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="strict-origin-when-cross-origin">
  </iframe>
</section>

<!-- Contact Form JS Script -->
<script>
function handleContactSubmit(e) {
  e.preventDefault();
  const alertBox = document.getElementById('contact-alert');
  const submitBtn = document.getElementById('submit-btn');

  submitBtn.disabled = true;
  submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span>Sending...</span>';

  setTimeout(() => {
    alertBox.className = 'p-4 rounded-2xl text-xs sm:text-sm font-medium bg-emerald-50 border border-emerald-200 text-emerald-800 space-y-1 block';
    alertBox.innerHTML = '<p class="font-bold flex items-center gap-1.5"><i class="fa-solid fa-circle-check text-emerald-600"></i> Message Sent Successfully!</p><p>Thank you for contacting TyreHub. Our support representative will contact you shortly.</p>';
    
    document.getElementById('contact-form').reset();
    submitBtn.disabled = false;
    submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> <span>Send Message</span>';
  }, 1000);
}
</script>

<?php
include 'includes/footer.php';
?>
