<?php
$page_title = "Car Washes Near Me | Best Car Cleaning Service in Ahmedabad | TyreHub";
$page_description = "Your quest for car washes near me and the best car cleaning service in Ahmedabad ends here. High pressure cleaning, interior vacuum, steam cleaners and extraction machines at TyreHub.";
$current_page = "car-wash";

include 'includes/interface.php';
include 'includes/header.php';
?>

<?php include_once __DIR__ . '/assets/icons/vehicle-icons.svg'; ?>

<!-- ========================================== -->
<!-- 1. DARK HERO BANNER WITH VEHICLE SELECTOR  -->
<!-- ========================================== -->
<section class="relative py-8 sm:py-12 lg:py-16 xl:py-20 text-white overflow-hidden">
  
  <!-- Dark Garage Detailing Backdrop Overlay Image -->
  <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
    <img src="assets/image/car-wash-bg.jpg" alt="Professional car washing and detailing bay" class="w-full h-full object-cover object-center absolute inset-0">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #0b1122 0%, rgba(11, 17, 34, 0.82) 48%, rgba(11, 17, 34, 0.4) 100%); z-index: 2;"></div>
  </div>

  <!-- Content Container -->
  <div class="container mx-auto px-4 max-w-7xl relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Right on Desktop (7 cols) / Top on Mobile: Hero Badges, Headlines & Values -->
      <div class="lg:col-span-7 text-left space-y-4 sm:space-y-6 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="600">
        
        <!-- Pill Tag with Yellow Lightning Icon -->
        <div>
          <span class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 sm:py-1.5 rounded-full border border-amber-400/40 bg-black/40 backdrop-blur-sm text-white font-bold text-[10px] sm:text-xs uppercase tracking-wider">
            <i class="fa-solid fa-soap text-brand-yellow"></i> PROFESSIONAL CAR WASH &amp; CLEANING
          </span>
        </div>

        <!-- Main Headline -->
        <div>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-outfit leading-[1.15] sm:leading-[1.1]">
            <span class="text-white block">Spotless Shine.</span>
            <span class="text-brand-yellow block mt-1">Brand New Look.</span>
          </h1>
        </div>

        <!-- 3 Circular Feature Badges Row -->
        <div class="flex items-center gap-4 sm:gap-8 lg:gap-10 pt-1 sm:pt-2">
          
          <!-- Badge 1: High Pressure Wash (High-Pressure Water Spray Jet) -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-7 h-7 sm:w-8 sm:h-8" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M54 46.9998H52C51.3811 47.0015 50.7778 47.1947 50.2729 47.5527C49.7681 47.9108 49.3863 48.4162 49.18 48.9998H39C39 48.2041 38.6839 47.4411 38.1213 46.8785C37.5587 46.3159 36.7956 45.9998 36 45.9998V42.3498C35.9928 42.1227 36.0632 41.8999 36.1995 41.7182C36.3358 41.5364 36.53 41.4065 36.75 41.3498C41.2276 40.1937 45.1299 37.4442 47.7254 33.6168C50.3208 29.7893 51.4313 25.1467 50.8486 20.559C50.2659 15.9714 48.03 11.7538 44.5601 8.69677C41.0902 5.63972 36.6245 3.95313 32 3.95312C27.3755 3.95313 22.9098 5.63972 19.4399 8.69677C15.97 11.7538 13.7341 15.9714 13.1514 20.559C12.5687 25.1467 13.6792 29.7893 16.2746 33.6168C18.8701 37.4442 22.7724 40.1937 27.25 41.3498C27.47 41.4065 27.6642 41.5364 27.8005 41.7182C27.9368 41.8999 28.0072 42.1227 28 42.3498V45.9998C27.2044 45.9998 26.4413 46.3159 25.8787 46.8785C25.3161 47.4411 25 48.2041 25 48.9998H14.82C14.6137 48.4162 14.2319 47.9108 13.7271 47.5527C13.2222 47.1947 12.6189 47.0015 12 46.9998H10C9.20435 46.9998 8.44129 47.3159 7.87868 47.8785C7.31607 48.4411 7 49.2041 7 49.9998V55.9998C7 56.7954 7.31607 57.5585 7.87868 58.1211C8.44129 58.6837 9.20435 58.9998 10 58.9998H12C12.6189 58.9981 13.2222 58.8049 13.7271 58.4469C14.2319 58.0888 14.6137 57.5833 14.82 56.9998H25C25 57.7954 25.3161 58.5585 25.8787 59.1211C26.4413 59.6837 27.2044 59.9998 28 59.9998H36C36.7956 59.9998 37.5587 59.6837 38.1213 59.1211C38.6839 58.5585 39 57.7954 39 56.9998H49.18C49.3863 57.5833 49.7681 58.0888 50.2729 58.4469C50.7778 58.8049 51.3811 58.9981 52 58.9998H54C54.7956 58.9998 55.5587 58.6837 56.1213 58.1211C56.6839 57.5585 57 56.7954 57 55.9998V49.9998C57 49.2041 56.6839 48.4411 56.1213 47.8785C55.5587 47.3159 54.7956 46.9998 54 46.9998ZM27.75 39.4598C23.7437 38.4254 20.2522 35.9653 17.9299 32.5408C15.6077 29.1162 14.6141 24.9623 15.1355 20.8575C15.6569 16.7528 17.6574 12.9792 20.762 10.2439C23.8667 7.50867 27.8623 5.99962 32 5.99962C36.1377 5.99962 40.1333 7.50867 43.238 10.2439C46.3426 12.9792 48.3431 16.7528 48.8645 20.8575C49.3859 24.9623 48.3923 29.1162 46.0701 32.5408C43.7478 35.9653 40.2563 38.4254 36.25 39.4598C35.6085 39.6254 35.0398 39.9988 34.6328 40.5216C34.2258 41.0444 34.0033 41.6872 34 42.3498V45.9998H30V42.3498C29.9967 41.6872 29.7742 41.0444 29.3672 40.5216C28.9602 39.9988 28.3915 39.6254 27.75 39.4598ZM15 54.9998V50.9998H25V54.9998H15ZM39 50.9998H49V54.9998H39V50.9998ZM47 22.9998C47 20.0331 46.1203 17.133 44.472 14.6662C42.8238 12.1995 40.4811 10.2769 37.7402 9.1416C34.9994 8.00629 31.9834 7.70924 29.0736 8.28802C26.1639 8.86679 23.4912 10.2954 21.3934 12.3932C19.2956 14.491 17.867 17.1637 17.2882 20.0734C16.7094 22.9832 17.0065 25.9992 18.1418 28.74C19.2771 31.4809 21.1997 33.8236 23.6664 35.4718C26.1332 37.1201 29.0333 37.9998 32 37.9998C35.9782 37.9998 39.7936 36.4194 42.6066 33.6064C45.4196 30.7934 47 26.978 47 22.9998ZM19.05 23.9998H21C21.2652 23.9998 21.5196 23.8944 21.7071 23.7069C21.8946 23.5194 22 23.265 22 22.9998C22 22.7346 21.8946 22.4802 21.7071 22.2927C21.5196 22.1052 21.2652 21.9998 21 21.9998H19.05C19.2909 18.9106 20.6273 16.0091 22.8183 13.8181C25.0093 11.6271 27.9108 10.2907 31 10.0498V11.9998C31 12.265 31.1054 12.5194 31.2929 12.7069C31.4804 12.8944 31.7348 12.9998 32 12.9998C32.2652 12.9998 32.5196 12.8944 32.7071 12.7069C32.8946 12.5194 33 12.265 33 11.9998V10.0498C36.0981 10.2793 39.0116 11.6106 41.2128 13.8027C43.4141 15.9948 44.7576 18.9027 45 21.9998H43C42.7348 21.9998 42.4804 22.1052 42.2929 22.2927C42.1054 22.4802 42 22.7346 42 22.9998C42 23.265 42.1054 23.5194 42.2929 23.7069C42.4804 23.8944 42.7348 23.9998 43 23.9998H45C44.769 27.1058 43.4305 30.0256 41.2282 32.228C39.0259 34.4303 36.106 35.7688 33 35.9998V33.9998C33 33.7346 32.8946 33.4802 32.7071 33.2927C32.5196 33.1052 32.2652 32.9998 32 32.9998C31.7348 32.9998 31.4804 33.1052 31.2929 33.2927C31.1054 33.4802 31 33.7346 31 33.9998V35.9998C27.9029 35.7574 24.995 34.4139 22.8029 32.2126C20.6108 30.0114 19.2795 27.0979 19.05 23.9998ZM30 26.4298C30.6026 26.7978 31.294 26.9948 32 26.9998C32.6993 26.9938 33.3847 26.8047 33.9881 26.4512C34.5914 26.0977 35.0916 25.5922 35.4386 24.9851C35.7856 24.378 35.9675 23.6906 35.966 22.9913C35.9645 22.292 35.7797 21.6054 35.43 20.9998L38.71 17.7298C38.8032 17.6366 38.8772 17.5259 38.9277 17.404C38.9781 17.2822 39.0041 17.1517 39.0041 17.0198C39.0041 16.8879 38.9781 16.7574 38.9277 16.6355C38.8772 16.5137 38.8032 16.403 38.71 16.3098C38.6168 16.2166 38.5061 16.1426 38.3843 16.0921C38.2624 16.0417 38.1319 16.0157 38 16.0157C37.8681 16.0157 37.7376 16.0417 37.6157 16.0921C37.4939 16.1426 37.3832 16.2166 37.29 16.3098L34 19.5698C33.2412 19.154 32.3681 18.9955 31.5115 19.1181C30.655 19.2406 29.8613 19.6375 29.2495 20.2493C28.6377 20.8611 28.2408 21.6548 28.1183 22.5113C27.9957 23.3679 28.1542 24.241 28.57 24.9998L27.29 26.2698C27.1963 26.3628 27.1219 26.4734 27.0711 26.5952C27.0203 26.7171 26.9942 26.8478 26.9942 26.9798C26.9942 27.1118 27.0203 27.2425 27.0711 27.3644C27.1219 27.4862 27.1963 27.5968 27.29 27.6898C27.383 27.7835 27.4936 27.8579 27.6154 27.9087C27.7373 27.9595 27.868 27.9856 28 27.9856C28.132 27.9856 28.2627 27.9595 28.3846 27.9087C28.5064 27.8579 28.617 27.7835 28.71 27.6898L30 26.4298Z" fill="currentColor"/>
</svg>

            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">High Pressure</span>
          </div>

          <!-- Badge 2: Deep Foam Clean (Soap Bubbles Cluster) -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-7 h-7 sm:w-8 sm:h-8" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M57.8563 8.70811C58.4892 8.70811 59.1078 8.52043 59.6341 8.16881C60.1603 7.81719 60.5705 7.31742 60.8127 6.73269C61.0549 6.14797 61.1182 5.50456 60.9948 4.88382C60.8713 4.26308 60.5665 3.69289 60.119 3.24537C59.6715 2.79784 59.1013 2.49307 58.4805 2.36959C57.8598 2.24612 57.2164 2.30949 56.6317 2.55169C56.0469 2.79389 55.5472 3.20404 55.1955 3.73028C54.8439 4.25652 54.6563 4.87521 54.6562 5.50811C54.6562 5.92834 54.739 6.34445 54.8998 6.73269C55.0607 7.12094 55.2964 7.4737 55.5935 7.77085C55.8907 8.068 56.2434 8.30371 56.6317 8.46452C57.0199 8.62534 57.436 8.70811 57.8563 8.70811ZM57.8563 4.31511C58.0936 4.31511 58.3256 4.38549 58.5229 4.51734C58.7203 4.6492 58.8741 4.83662 58.9649 5.05589C59.0557 5.27516 59.0795 5.51644 59.0332 5.74922C58.9869 5.98199 58.8726 6.19581 58.7048 6.36364C58.537 6.53146 58.3231 6.64575 58.0904 6.69205C57.8576 6.73835 57.6163 6.71459 57.397 6.62376C57.1778 6.53294 56.9903 6.37913 56.8585 6.18179C56.7266 5.98445 56.6563 5.75244 56.6562 5.51511C56.6563 5.19685 56.7827 4.89162 57.0077 4.66658C57.2328 4.44154 57.538 4.31511 57.8563 4.31511Z" fill="currentColor"/>
<path d="M61.784 16.6279C61.473 15.7816 60.9921 15.0079 60.3709 14.3544C59.7498 13.7009 59.0014 13.1814 58.172 12.8279C57.3229 12.4896 56.4107 12.3389 55.498 12.3859C54.8895 11.3761 53.9917 10.5724 52.921 10.0789C52.437 7.58593 50.467 3.72793 45.651 3.72793H45.621C44.662 3.68579 43.7048 3.84301 42.8098 4.18967C41.9147 4.53633 41.1013 5.06488 40.421 5.74193C39.1905 7.12818 38.4522 8.882 38.3209 10.7309H24.65C24.7878 10.1206 24.7861 9.48713 24.6451 8.87759C24.5041 8.26804 24.2273 7.69818 23.8354 7.21046C23.4435 6.72275 22.9466 6.32976 22.3818 6.06077C21.8169 5.79179 21.1986 5.65374 20.573 5.65693C20.2432 5.65656 19.9145 5.6955 19.594 5.77293C18.9587 4.85613 18.0577 4.1561 17.0123 3.76718C15.9669 3.37825 14.8274 3.31913 13.7474 3.59777C12.6674 3.87641 11.6988 4.47942 10.972 5.32554C10.2453 6.17166 9.79538 7.22023 9.68295 8.32993C9.4079 8.29631 9.13105 8.27961 8.85395 8.27993C7.466 8.27886 6.10927 8.69172 4.95718 9.46573C3.80509 10.2397 2.91 11.3397 2.38632 12.6251C1.86264 13.9105 1.73417 15.3228 2.01734 16.6815C2.3005 18.0403 2.98243 19.2837 3.97595 20.2529C3.33297 20.2777 2.72522 20.5532 2.28283 21.0204C1.84043 21.4877 1.59854 22.1096 1.60895 22.7529V24.1469C1.54568 25.1762 1.8908 26.1888 2.56945 26.9652C3.24809 27.7416 4.20551 28.219 5.23395 28.2939H7.04595L3.99195 32.3459C3.86213 32.519 3.79195 32.7296 3.79195 32.9459V51.1999C3.79374 51.4318 3.87725 51.6556 4.02779 51.8319C4.17833 52.0082 4.38625 52.1258 4.61495 52.1639V54.6179C4.61654 55.8514 5.10731 57.0339 5.9796 57.906C6.85189 58.7781 8.03448 59.2686 9.26795 59.2699H15.3989C16.6324 59.2686 17.815 58.7781 18.6873 57.906C19.5596 57.0339 20.0504 55.8514 20.052 54.6179V52.1999H42.9259V54.6179C42.9273 55.8513 43.4178 57.0338 44.29 57.9059C45.1621 58.7781 46.3446 59.2686 47.5779 59.2699H53.711C54.9443 59.2686 56.1268 58.7781 56.999 57.9059C57.8711 57.0338 58.3616 55.8513 58.3629 54.6179V52.1659C58.5911 52.1274 58.7984 52.0098 58.9486 51.8337C59.0987 51.6576 59.182 51.4343 59.184 51.2029V32.9479C59.184 32.7316 59.1138 32.521 58.984 32.3479L55.93 28.2939H57.6889C58.7176 28.2193 59.6752 27.7419 60.3541 26.9655C61.033 26.1891 61.3782 25.1763 61.315 24.1469V22.7509C61.3123 22.4688 61.263 22.189 61.1689 21.9229C61.6359 21.1324 61.9318 20.2527 62.0378 19.3406C62.1437 18.4286 62.0572 17.5045 61.784 16.6279ZM41.865 7.12793C42.3623 6.64882 42.953 6.27726 43.6002 6.0364C44.2475 5.79554 44.9374 5.69053 45.6269 5.72793H45.65C50.38 5.72793 51.002 10.6929 51.025 10.9019C51.0456 11.0923 51.1204 11.2728 51.2406 11.4219C51.3608 11.5709 51.5213 11.6824 51.7029 11.7429C51.7919 11.7729 51.879 11.8059 51.968 11.8429C52.8845 12.232 53.6183 12.9558 54.02 13.8669C54.1119 14.0744 54.2716 14.2445 54.473 14.3491C54.6743 14.4538 54.9053 14.4869 55.128 14.4429C55.9093 14.3051 56.7137 14.3915 57.448 14.6919C58.008 14.9393 58.5132 15.2957 58.934 15.7403C59.3548 16.185 59.6829 16.7091 59.899 17.2819C60.2211 18.3097 60.1472 19.4208 59.692 20.3969C59.4404 20.3016 59.174 20.2512 58.9049 20.2479H53.268L51.7869 14.0479C51.5843 13.1181 51.0732 12.2841 50.3367 11.6813C49.6002 11.0786 48.6815 10.7426 47.7299 10.7279H40.343C40.4594 9.3966 40.9918 8.13569 41.865 7.12393V7.12793ZM47.7299 12.7279C48.2316 12.7441 48.7131 12.9291 49.0964 13.2531C49.4797 13.5771 49.7424 14.021 49.8419 14.5129L52.656 26.2929H10.318L11.3989 21.7509C11.8174 21.5902 12.2193 21.3893 12.599 21.1509C13.6127 21.6756 14.7654 21.8695 15.895 21.7052C17.0246 21.541 18.0743 21.0269 18.8966 20.2353C19.719 19.4436 20.2726 18.4142 20.4796 17.2916C20.6867 16.1691 20.5367 15.0099 20.051 13.9769C20.2225 13.9974 20.3952 14.0077 20.568 14.0079C21.1287 14.0074 21.6835 13.8935 22.1991 13.673C22.7146 13.4525 23.1802 13.13 23.568 12.7249L47.7299 12.7279ZM57.184 39.6679H48.004L50.368 35.0939C50.4086 35.0081 50.4699 34.9337 50.5463 34.8773C50.6227 34.821 50.7119 34.7844 50.806 34.7709L57.184 34.0659V39.6679ZM50.584 32.7829C50.1613 32.8313 49.7573 32.9839 49.4082 33.227C49.0591 33.4702 48.7758 33.7962 48.584 34.1759L45.466 40.2089C45.3872 40.3613 45.349 40.5314 45.355 40.7029C45.361 40.8743 45.411 41.0413 45.5002 41.1878C45.5894 41.3344 45.7147 41.4555 45.8643 41.5396C46.0138 41.6237 46.1824 41.6679 46.354 41.6679H57.184V44.7099H41.674L39.748 38.9639C39.6813 38.7653 39.554 38.5925 39.3839 38.4702C39.2137 38.3478 39.0095 38.2819 38.7999 38.2819H24.174C23.9644 38.2819 23.7602 38.3478 23.5901 38.4702C23.42 38.5925 23.2926 38.7653 23.226 38.9639L21.299 44.7099H5.79095V41.6669H16.612C16.7836 41.667 16.9523 41.6229 17.102 41.5389C17.2517 41.4549 17.3772 41.3338 17.4665 41.1873C17.5558 41.0407 17.6059 40.8736 17.6119 40.7021C17.6179 40.5306 17.5797 40.3604 17.501 40.2079L14.3779 34.1649C14.1874 33.7892 13.9069 33.4665 13.5614 33.2254C13.216 32.9843 12.8163 32.8323 12.398 32.7829L6.64695 32.1469L9.54695 28.2919H53.424L56.324 32.1469L50.584 32.7829ZM57.184 50.2039H50.663V46.7099H57.184V50.2039ZM19.052 50.2039H14.311V46.7099H48.663V50.1999H19.052V50.2039ZM5.79095 46.7099H12.311V50.1999H5.79095V46.7099ZM23.41 44.7099L24.899 40.2819H38.08L39.5639 44.7099H23.41ZM12.177 34.7709C12.2681 34.7841 12.3546 34.8195 12.4287 34.8741C12.5029 34.9287 12.5624 35.0008 12.6019 35.0839L14.9699 39.6669H5.79095V34.0669L12.177 34.7709ZM3.86995 15.2639C3.86919 14.4768 4.0551 13.7007 4.4124 12.9994C4.76971 12.2981 5.28824 11.6914 5.92543 11.2293C6.56261 10.7672 7.3003 10.4628 8.07794 10.341C8.85559 10.2193 9.65101 10.2837 10.3989 10.5289C10.5619 10.5826 10.7359 10.5934 10.9043 10.5603C11.0726 10.5272 11.2296 10.4514 11.3602 10.3401C11.4908 10.2288 11.5905 10.0858 11.6498 9.92484C11.7092 9.76386 11.7261 9.59033 11.6989 9.42093C11.6695 9.24306 11.6538 9.0632 11.6519 8.88293C11.6514 8.09584 11.9194 7.33212 12.4116 6.71795C12.9038 6.10377 13.5908 5.67589 14.3592 5.505C15.1275 5.33411 15.9311 5.43043 16.6372 5.77806C17.3434 6.12569 17.9098 6.70382 18.243 7.41693C18.2997 7.53809 18.3802 7.64662 18.4796 7.73612C18.5791 7.82561 18.6955 7.89423 18.822 7.93793C18.9486 7.98079 19.0824 7.99818 19.2157 7.98908C19.3491 7.97998 19.4793 7.94459 19.599 7.88493C19.9002 7.73211 20.2332 7.65262 20.571 7.65293C20.861 7.64671 21.1493 7.69847 21.419 7.80516C21.6888 7.91184 21.9345 8.07132 22.1418 8.27423C22.3491 8.47713 22.5138 8.71939 22.6263 8.98679C22.7387 9.25419 22.7966 9.54135 22.7966 9.83143C22.7966 10.1215 22.7387 10.4087 22.6263 10.6761C22.5138 10.9435 22.3491 11.1857 22.1418 11.3886C21.9345 11.5915 21.6888 11.751 21.419 11.8577C21.1493 11.9644 20.861 12.0161 20.571 12.0099C20.2768 12.0109 19.9855 11.9517 19.7151 11.8357C19.4448 11.7198 19.201 11.5497 18.999 11.3359C18.9067 11.2395 18.7961 11.1624 18.6737 11.1093C18.5512 11.0563 18.4194 11.0282 18.286 11.0269C18.1522 11.0246 18.0194 11.0496 17.8956 11.1003C17.7718 11.151 17.6596 11.2264 17.5659 11.3219C17.402 11.4863 17.2221 11.634 17.029 11.7629C16.8924 11.8543 16.7805 11.978 16.7031 12.1229C16.6257 12.2678 16.5852 12.4296 16.5852 12.5939C16.5852 12.7582 16.6257 12.92 16.7031 13.065C16.7805 13.2099 16.8924 13.3335 17.029 13.4249C17.4041 13.681 17.7252 14.0085 17.9738 14.3886C18.2225 14.7688 18.3938 15.1942 18.478 15.6406C18.5622 16.087 18.5577 16.5455 18.4647 16.9902C18.3717 17.4348 18.192 17.8567 17.936 18.2319C17.6799 18.6071 17.3524 18.9282 16.9722 19.1768C16.5921 19.4254 16.1667 19.5968 15.7203 19.681C15.2739 19.7652 14.8153 19.7607 14.3707 19.6677C13.9261 19.5747 13.5041 19.395 13.129 19.1389C12.9522 19.0139 12.7397 18.9497 12.5233 18.9558C12.3069 18.962 12.0983 19.0381 11.929 19.1729C11.0526 19.8713 9.96453 20.2504 8.84395 20.2479C7.52433 20.2437 6.26012 19.7169 5.32794 18.7829C4.39576 17.8488 3.87153 16.5836 3.86995 15.2639ZM3.60895 24.1449V22.7509C3.60088 22.6306 3.63918 22.5117 3.71598 22.4188C3.79279 22.3258 3.90226 22.2657 4.02195 22.2509H9.22795L8.26195 26.2949H5.23395C4.35295 26.2919 3.60895 25.3089 3.60895 24.1449ZM18.052 54.6209C18.0509 55.3241 17.771 55.9982 17.2737 56.4954C16.7763 56.9925 16.1022 57.2721 15.3989 57.2729H9.26695C8.56375 57.2721 7.88956 56.9925 7.39223 56.4954C6.89489 55.9982 6.61501 55.3241 6.61395 54.6209V52.1999H18.052V54.6209ZM56.3629 54.6209C56.3622 55.324 56.0825 55.9981 55.5853 56.4953C55.0881 56.9925 54.4141 57.2721 53.711 57.2729H47.5779C46.8748 57.2721 46.2008 56.9925 45.7036 56.4953C45.2064 55.9981 44.9267 55.324 44.9259 54.6209V52.1999H56.3629V54.6209ZM59.313 24.1449C59.313 25.3089 58.569 26.2919 57.687 26.2919H54.712L53.746 22.2479H58.899C59.0187 22.2625 59.1284 22.3225 59.2052 22.4155C59.2821 22.5086 59.3203 22.6275 59.312 22.7479L59.313 24.1449Z" fill="currentColor"/>
</svg>

            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">Deep Foam Clean</span>
          </div>

          <!-- Badge 3: 10+ Garages -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5z"/>
                <path d="M7 21v-7a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v7"/>
                <path d="M7 16h10"/>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">10+ Garages</span>
          </div>

        </div>

        <!-- Horizontal Divider Line -->
        <div class="border-t border-white/15 my-4 sm:my-6 max-w-xl"></div>

        <!-- 3 Value Checklist Items -->
        <div class="flex flex-wrap items-center gap-4 sm:gap-6 lg:gap-8 pt-1">
          
          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>High-Pressure Cleaning</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Steam &amp; Vacuum Extraction</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Brand New Look Guaranteed</span>
          </div>

        </div>

      </div>

      <!-- Left on Desktop (5 cols) / Bottom on Mobile: Vehicle Selector Box -->
      <div class="lg:col-span-5 w-full max-w-md mx-auto lg:mx-0 order-2 lg:order-1" data-aos="fade-right" data-aos-duration="600">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl transition-shadow duration-300">
          
          <!-- Card Header (Solid Navy Blue with Back Arrow & Title) -->
          <div class="text-white py-3.5 px-4 sm:py-4 sm:px-5 flex items-center justify-between" style="background-color: #242e6d;">
            <a href="index.php" class="text-white hover:opacity-80 transition text-sm flex items-center justify-center p-1" title="Back to Home">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h3 class="text-base sm:text-lg font-bold text-white font-outfit tracking-wide flex-1 text-center pr-6">Choose Your Vehicle</h3>
          </div>

          <!-- Card Body -->
          <div class="p-4 sm:p-6 bg-white text-slate-900">
            
            <!-- Car Wash Illustration & Subtitle -->
            <div class="text-center mb-3.5 sm:mb-4">
              <div class="flex items-center justify-center mb-2 sm:mb-2.5">
                <img src="assets/image/car-wash.webp" alt="Car Wash &amp; Cleaning Service" class="h-20 sm:h-24 md:h-28 w-auto object-contain mx-auto">
              </div>
              <p class="text-slate-500 text-xs sm:text-sm font-medium">Select your vehicle type for car wash</p>
            </div>

            <!-- 4 Options in 50%-50% (2 Columns) Grid -->
            <div class="grid grid-cols-2 gap-2 sm:gap-3 mb-4 sm:mb-5 text-left">
              
              <!-- Option 1: Hatchback (Default Selected) -->
              <div id="veh-hatchback" onclick="selectVehicle('hatchback')" class="vehicle-option-card is-active flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #242e6d; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-hatchback"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Hatchback</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹400</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #242e6d;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: block;"></div>
                </div>
                <input type="radio" id="radio-hatchback" name="vehicle_type" value="Hatchback (₹400)" checked class="sr-only">
              </div>

              <!-- Option 2: Sedan -->
              <div id="veh-sedan" onclick="selectVehicle('sedan')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-sedan"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Sedan</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹450</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-sedan" name="vehicle_type" value="Sedan (₹450)" class="sr-only">
              </div>

              <!-- Option 3: SUV -->
              <div id="veh-suv" onclick="selectVehicle('suv')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-suv"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">SUV</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹550</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-suv" name="vehicle_type" value="SUV (₹550)" class="sr-only">
              </div>

              <!-- Option 4: Premium Car -->
              <div id="veh-premium" onclick="selectVehicle('premium')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-premium"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Premium Car</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹650</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-premium" name="vehicle_type" value="Premium Car (₹650)" class="sr-only">
              </div>

            </div>

            <!-- Submit Button (Solid Navy Blue with Rounded Corners & CONTINUE Text) -->
            <button type="button" onclick="submitCarWashBooking()" class="w-full text-white font-bold py-3 sm:py-3.5 rounded-xl uppercase tracking-wider text-xs sm:text-sm shadow-md hover:shadow-lg transition active:scale-[0.99]" style="background-color: #242e6d;">
              CONTINUE
            </button>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. CAR WASHES NEAR ME & CLEANING DETAILS   -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Content & Details -->
      <div class="lg:col-span-7 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-location-dot text-brand-yellow" aria-hidden="true"></i> Ahmedabad &amp; Gandhinagar
          </span>
          <h2 class="text-3xl md:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            Car Washes <span class="font-bold">Near Me</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <!-- User Requested Paragraphs -->
        <h3 class="text-lg sm:text-xl font-bold text-brand-blue font-outfit">
          Car Cleaning Service in Ahmedabad
        </h3>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          Your quest for <strong>car washes near me</strong> and the <strong>best car cleaning service in Ahmedabad</strong> ends here. Tyre hub leverages a specialized approach that incorporates leading-edge techniques like high-pressure cleaning machines, high powered vacuum cleaners, steam cleaners, spray injections and extraction machines to give your car a brand new look.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          Give your car the attention it deserves with <strong>Tyre hub</strong>, a brand that you can trust. We realize that you lead a busy life, so we've made a smooth booking and service experience for you.
        </p>

        <!-- Call Action Button -->
        <div class="pt-2">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Visual Mascot Illustration -->
      <div class="lg:col-span-5 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="relative group max-w-md">
          <div class="w-64 h-64 rounded-full bg-brand-yellow/15 absolute -inset-2 blur-2xl pointer-events-none"></div>
          <img src="assets/image/Mascot.png" alt="TyreHub Car Wash Specialist Mascot" class="w-full h-auto object-contain relative z-10 drop-shadow-2xl group-hover:scale-105 transition-transform duration-300">
        </div>
      </div>

    </div>

  </div>
</section>



<!-- ========================================== -->
<!-- 4. "HOW IT WORKS" 3-STEP TIMELINE          -->
<!-- ========================================== -->
<section class="py-16 lg:py-20 bg-brand-blue text-white relative overflow-hidden">
  <div class="container mx-auto px-3 text-center relative z-10">

    <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight" data-aos="fade-up" data-aos-duration="600">
      How It <span class="text-brand-yellow font-bold">Works</span>
    </h2>
    <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3 mb-12" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"></div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

      <!-- Step 1 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-car-side" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">01</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Choose Vehicle &amp; Package</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Select Hatchback, Sedan, SUV, or Premium Car to get instant upfront pricing.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-spray-can-sparkles" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">02</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">High-Pressure Wash &amp; Detail</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Our certified technicians use steam cleaners, high-powered vacuums, and foam spray.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <svg class="w-8 h-8 sm:w-9 sm:h-9" viewBox="0 0 24 24" fill="currentColor">
            <path d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
          </svg>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">03</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Brand New Look &amp; Drive Happy</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Take your sparkling clean car with tyre shine, fresh interior, and official invoice.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 5. BRANDS SHOWCASE (TYRES & BATTERIES)     -->
<!-- ========================================== -->
<section id="tyre-brands-section" class="py-14 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">

    <!-- Tyre Brands Header -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our <span class="font-bold text-brand-blue">Tyre Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Tyre Brands Slider -->
    <div id="tyre-brands-slider" class="slick-carousel -mx-2 mb-14" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

      <!-- Bridgestone -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/bridgestone.webp" alt="Bridgestone Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- MRF -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/mrf.webp" alt="MRF Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Apollo -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/apollotyres.webp" alt="Apollo Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- JK Tyre -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/jktyre.webp" alt="JK Tyre" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- TVS Tyres -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/tvs.webp" alt="TVS Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- CEAT -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/ceat.webp" alt="CEAT Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

    <!-- Battery Brands Header -->
    <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="600">
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our <span class="font-bold text-brand-blue">Battery Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Battery Brands Cards -->
    <div class="flex items-center justify-center gap-4 sm:gap-6 max-w-lg mx-auto" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

      <!-- Amaron -->
      <div class="w-1/2 sm:w-60">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/battery-brands/amaron.webp" alt="Amaron Battery" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Exide -->
      <div class="w-1/2 sm:w-60">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/battery-brands/exide.webp" alt="Exide Battery" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ========================================== -->
<!-- 3. NEED TYRE / CAR CLEANING CALLOUT        -->
<!-- ========================================== -->
<section class="py-12 sm:py-14 bg-slate-50">
  <div class="container mx-auto px-3">
    
    <div class="bg-brand-blueDark text-white p-6 sm:p-8 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-white/10" data-aos="fade-up" data-aos-duration="600">
      <div class="space-y-1.5 text-center md:text-left">
        <span class="inline-block px-2.5 py-0.5 rounded bg-brand-yellow text-slate-950 font-black text-[10px] uppercase tracking-wider mb-1">
          Need Tyre or Car Cleaning? Relax
        </span>
        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-white">Car Cleaning Service in Ahmedabad</h3>
        <p class="text-slate-200 text-xs sm:text-sm max-w-2xl leading-relaxed">
          We realize that you lead a busy life, so we've made a smooth tyre buying, car cleaning, and installation experience for you.
        </p>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-3 shrink-0">
        <a href="tel:7575888916" class="btn-primary py-3 px-6 text-xs font-bold shadow-md">
          <i class="fa-solid fa-phone-volume mr-1.5" aria-hidden="true"></i> Call 7575 888 916
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Inline JavaScript for Vehicle Selector -->
<script>
function selectVehicle(type) {
  document.querySelectorAll('.vehicle-option-card').forEach(el => {
    el.classList.remove('is-active');
    el.style.borderColor = '#e2e8f0';
    const ring = el.querySelector('.radio-ring');
    const dot = el.querySelector('.radio-dot');
    if (ring) ring.style.borderColor = '#cbd5e1';
    if (dot) dot.style.display = 'none';
  });

  const selected = document.getElementById('veh-' + type);
  if (selected) {
    selected.classList.add('is-active');
    selected.style.borderColor = '#242e6d';
    const ring = selected.querySelector('.radio-ring');
    const dot = selected.querySelector('.radio-dot');
    if (ring) ring.style.borderColor = '#242e6d';
    if (dot) dot.style.display = 'block';

    const radio = document.getElementById('radio-' + type);
    if (radio) radio.checked = true;
  }
}

function submitCarWashBooking() {
  const selectedRadio = document.querySelector('input[name="vehicle_type"]:checked');
  const serviceName = selectedRadio ? 'Car Wash & Cleaning - ' + selectedRadio.value : 'Car Wash & Cleaning Service';
  if (typeof openBookingModal === 'function') {
    openBookingModal(serviceName);
  } else {
    window.location.href = 'tel:7575888916';
  }
}
</script>

<?php
include 'includes/footer.php';
?>
