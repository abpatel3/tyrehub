/**
 * TyreHub - Main Interactive JavaScript
 * Powered by jQuery & Slick Carousel
 */

$(document).ready(function () {
  "use strict";

  // 0. Initialize AOS (Animate On Scroll) & Select2 Dropdowns
  if (typeof AOS !== "undefined") {
    AOS.init({
      duration: 400,
      easing: "ease-out-quad",
      once: true,
      offset: 20,
      delay: 0,
      startEvent: "DOMContentLoaded",
      disableMutationObserver: false,
    });
  }

  if ($.fn.select2) {
    $("#tyre-width, #tyre-profile, #tyre-rim, #booking-city").select2({
      minimumResultsForSearch: 10,
      width: "100%",
    });
  }

  $("#smart-find-tyres-btn").on("click", function () {
    const val = $("#smart-vehicle-input").val();
    if (!val) {
      $("#smart-vehicle-input").focus();
      return;
    }
    const $target = $("#car-tyres");
    if ($target.length) {
      $("html, body").animate({ scrollTop: $target.offset().top - 90 }, 600);
    }
  });

  $("#reset-selection-btn").on("click", function () {
    $("#smart-vehicle-input").val("").focus();
    $("#clear-vehicle-input").addClass("hidden");
  });

  // 1. Scroll Handler for Back to Top Button
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 300) {
      $("#back-to-top").fadeIn(300);
    } else {
      $("#back-to-top").fadeOut(300);
    }
  });

  // Back to Top Button
  $("#back-to-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 600);
  });

  // 2. Mobile Menu Toggle
  $("#mobile-menu-btn").on("click", function () {
    $("#mobile-nav-drawer").toggleClass("hidden");
    $("body").toggleClass("overflow-hidden");
  });

  $("#close-mobile-menu").on("click", function () {
    $("#mobile-nav-drawer").addClass("hidden");
    $("body").removeClass("overflow-hidden");
  });

  $("#mobile-nav-drawer a").on("click", function () {
    $("#mobile-nav-drawer").addClass("hidden");
    $("body").removeClass("overflow-hidden");
  });

  $("#mobile-services-toggle").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $("#mobile-services-sub-menu").toggleClass("hidden");
    $("#mobile-services-chevron").toggleClass("rotate-180");
  });

  // 3. Hero Carousel Slider
  if ($("#hero-slider").length) {
    $("#hero-slider").slick({
      dots: true,
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: "linear",
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      pauseOnHover: true,
    });
  }

  // 4. Why Choose TyreHub Slider
  if ($("#why-choose-slider").length) {
    $("#why-choose-slider").slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  // 5. Testimonials Slider
  if ($("#testimonials-slider").length) {
    $("#testimonials-slider").slick({
      dots: true,
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: true,
      prevArrow: $("#testimonial-prev"),
      nextArrow: $("#testimonial-next"),
    });
  }

  // 6. Tyre Brands Slick Carousel
  if ($("#tyre-brands-slider").length) {
    $("#tyre-brands-slider").slick({
      dots: false,
      infinite: true,
      speed: 7500,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: "linear",
      pauseOnHover: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 1280,
          settings: { slidesToShow: 5 },
        },
        {
          breakpoint: 1024,
          settings: { slidesToShow: 4 },
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 3 },
        },
        {
          breakpoint: 480,
          settings: { slidesToShow: 2 },
        },
      ],
    });
  }

  // 7. Battery Brands Slick Carousel
  if ($("#battery-brands-slider").length) {
    $("#battery-brands-slider").slick({
      dots: false,
      infinite: true,
      speed: 3000,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: "linear",
      pauseOnHover: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 1280,
          settings: { slidesToShow: 5 },
        },
        {
          breakpoint: 1024,
          settings: { slidesToShow: 4 },
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 3 },
        },
        {
          breakpoint: 480,
          settings: { slidesToShow: 2 },
        },
      ],
    });
  }

  // 8. Interactive Tyre Finder Tab Switching
  $(".finder-tab-btn").on("click", function () {
    const target = $(this).data("target");

    // Style active tab
    $(".finder-tab-btn")
      .removeClass("active bg-brand-yellow text-slate-950 shadow-md")
      .addClass(
        "bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 border border-slate-200",
      );

    $(this)
      .addClass("active bg-brand-yellow text-slate-950 shadow-md")
      .removeClass(
        "bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 border border-slate-200",
      );

    // Switch active pane with smooth fade
    $(".finder-pane").addClass("hidden");
    const $targetPane = $(`#${target}`);
    $targetPane.removeClass("hidden").hide().fadeIn(200);
  });

  // 9. Smart Autocomplete & Vehicle Database
  const vehicleDatabase = [
    {
      brand: "Tata",
      model: "Tata Nexon",
      category: "Compact SUV",
      variants: ["Smart", "Pure", "Creative", "Fearless"],
    },
    {
      brand: "Tata",
      model: "Tata Tiago",
      category: "Hatchback",
      variants: ["XE", "XT", "XZ+", "NRG"],
    },
    {
      brand: "Tata",
      model: "Tata Punch",
      category: "Micro SUV",
      variants: ["Pure", "Adventure", "Accomplished", "Creative"],
    },
    {
      brand: "Tata",
      model: "Tata Altroz",
      category: "Premium Hatchback",
      variants: ["XE", "XM+", "XZ", "XZ+"],
    },
    {
      brand: "Tata",
      model: "Tata Safari",
      category: "Full SUV",
      variants: ["Smart", "Pure", "Adventure", "Accomplished"],
    },
    {
      brand: "Tata",
      model: "Tata Harrier",
      category: "SUV",
      variants: ["Smart", "Pure", "Adventure", "Fearless"],
    },
    {
      brand: "Mahindra",
      model: "Mahindra Thar",
      category: "Off-Road SUV",
      variants: ["AX (O)", "LX Hard Top", "Earth Edition"],
    },
    {
      brand: "Mahindra",
      model: "Mahindra Scorpio-N",
      category: "SUV",
      variants: ["Z2", "Z4", "Z6", "Z8 L"],
    },
    {
      brand: "Mahindra",
      model: "Mahindra XUV700",
      category: "Premium SUV",
      variants: ["MX", "AX3", "AX5", "AX7 L"],
    },
    {
      brand: "Mahindra",
      model: "Mahindra Bolero",
      category: "Utility Vehicle",
      variants: ["B4", "B6", "B6(O)"],
    },
    {
      brand: "Hyundai",
      model: "Hyundai Creta",
      category: "SUV",
      variants: ["E", "EX", "S(O)", "SX Tech", "SX(O)"],
    },
    {
      brand: "Hyundai",
      model: "Hyundai Venue",
      category: "Compact SUV",
      variants: ["E", "S", "S+", "SX(O)"],
    },
    {
      brand: "Hyundai",
      model: "Hyundai i20",
      category: "Hatchback",
      variants: ["Era", "Magna", "Sportz", "Asta(O)"],
    },
    {
      brand: "Hyundai",
      model: "Hyundai Verna",
      category: "Sedan",
      variants: ["EX", "S", "SX", "SX(O)"],
    },
    {
      brand: "Hyundai",
      model: "Hyundai Exter",
      category: "Micro SUV",
      variants: ["EX", "S", "SX", "SX(O)"],
    },
    {
      brand: "Maruti",
      model: "Maruti Swift",
      category: "Hatchback",
      variants: ["LXi", "VXi", "ZXi", "ZXi+"],
    },
    {
      brand: "Maruti",
      model: "Maruti Baleno",
      category: "Premium Hatchback",
      variants: ["Sigma", "Delta", "Zeta", "Alpha"],
    },
    {
      brand: "Maruti",
      model: "Maruti Brezza",
      category: "Compact SUV",
      variants: ["LXi", "VXi", "ZXi", "ZXi+"],
    },
    {
      brand: "Maruti",
      model: "Maruti Dzire",
      category: "Sedan",
      variants: ["LXi", "VXi", "ZXi", "ZXi+"],
    },
    {
      brand: "Maruti",
      model: "Maruti Grand Vitara",
      category: "Mid SUV",
      variants: ["Sigma", "Delta", "Zeta", "Alpha"],
    },
    {
      brand: "Honda",
      model: "Honda City",
      category: "Sedan",
      variants: ["SV", "V", "VX", "ZX"],
    },
    {
      brand: "Honda",
      model: "Honda Amaze",
      category: "Compact Sedan",
      variants: ["E", "S", "VX", "VX CVT"],
    },
    {
      brand: "Honda",
      model: "Honda Elevate",
      category: "Mid SUV",
      variants: ["SV", "V", "VX", "ZX"],
    },
    {
      brand: "Toyota",
      model: "Toyota Fortuner",
      category: "Full-size SUV",
      variants: ["4x2 MT", "4x4 AT", "Legender"],
    },
    {
      brand: "Toyota",
      model: "Toyota Innova Crysta",
      category: "Premium MPV",
      variants: ["GX", "VX", "ZX"],
    },
    {
      brand: "Kia",
      model: "Kia Seltos",
      category: "SUV",
      variants: ["HTE", "HTK", "GTX+", "X-Line"],
    },
    {
      brand: "Kia",
      model: "Kia Sonet",
      category: "Compact SUV",
      variants: ["HTE", "HTK", "GTX+"],
    },
    {
      brand: "Volkswagen",
      model: "Volkswagen Virtus",
      category: "Sedan",
      variants: ["Dynamic", "Highline", "GT Plus"],
    },
    {
      brand: "Skoda",
      model: "Skoda Slavia",
      category: "Sedan",
      variants: ["Active", "Ambition", "Style"],
    },
  ];

  let selectedVehicleModel = null;
  let selectedVehicleVariant = null;
  let currentSearchMode = "vehicle"; // 'vehicle', 'size', 'number'

  // Tyre Size Database
  const tyreSizeDatabase = [
    { size: "145/80 R12", width: "145", profile: "80", rim: "12" },
    { size: "155/80 R13", width: "155", profile: "80", rim: "13" },
    { size: "165/70 R14", width: "165", profile: "70", rim: "14" },
    { size: "175/65 R14", width: "175", profile: "65", rim: "14" },
    { size: "185/65 R15", width: "185", profile: "65", rim: "15" },
    { size: "195/65 R15", width: "195", profile: "65", rim: "15" },
    { size: "205/55 R16", width: "205", profile: "55", rim: "16" },
    { size: "215/60 R16", width: "215", profile: "60", rim: "16" },
    { size: "215/60 R17", width: "215", profile: "60", rim: "17" },
    { size: "225/55 R18", width: "225", profile: "55", rim: "18" },
    { size: "235/65 R17", width: "235", profile: "65", rim: "17" },
    { size: "265/60 R18", width: "265", profile: "60", rim: "18" },
    { size: "90/90 R12", width: "90", profile: "90", rim: "12" },
    { size: "100/90 R17", width: "100", profile: "90", rim: "17" },
    { size: "140/70 R17", width: "140", profile: "70", rim: "17" },
  ];

  // Registration Number Database
  const regNoDatabase = [
    {
      regNo: "GJ01AB1234",
      brand: "Honda",
      model: "City",
      variant: "ZX CVT",
      fuel: "Petrol",
      year: "2023",
      size: "185/55 R16",
    },
    {
      regNo: "GJ18BC5678",
      brand: "Hyundai",
      model: "Creta",
      variant: "SX (O) Turbo",
      fuel: "Petrol",
      year: "2022",
      size: "205/55 R16",
    },
    {
      regNo: "GJ06CD9012",
      brand: "Tata",
      model: "Nexon",
      variant: "Fearless + S",
      fuel: "Diesel",
      year: "2023",
      size: "215/60 R16",
    },
    {
      regNo: "GJ27DE3456",
      brand: "Mahindra",
      model: "Thar",
      variant: "AX (O) Hard Top",
      fuel: "Diesel",
      year: "2023",
      size: "235/65 R17",
    },
    {
      regNo: "GJ03EF7890",
      brand: "Maruti",
      model: "Swift",
      variant: "ZXi Plus",
      fuel: "Petrol",
      year: "2021",
      size: "185/65 R15",
    },
  ];

  const $searchInput = $("#smart-vehicle-input");
  const $dropdown = $("#autocomplete-dropdown");
  const $dropdownContent = $("#autocomplete-content");
  const $clearBtn = $("#clear-vehicle-input");

  let regLoadingTimer = null;
  let regStepTimer1 = null;
  let regStepTimer2 = null;
  let activeDetectedReg = null;

  function renderIllustrationCard(data) {
    return `
      <div class="relative w-full h-[220px] rounded-2xl overflow-hidden bg-white border border-slate-200/90 shadow-sm flex items-center justify-center p-1.5">
        <img id="helper-card-image" src="${data.image}" alt="Contextual Helper Illustration" class="w-full h-full object-contain object-center rounded-xl">
      </div>
    `;
  }

  function renderEmptyRegState() {
    return `
      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm flex flex-col items-center justify-center text-center my-auto min-h-[220px]">
        <div class="w-14 h-14 rounded-full bg-[#FFD400] text-slate-950 flex items-center justify-center text-2xl font-bold mb-3 shadow-sm shrink-0">
          <i class="fa-solid fa-car"></i>
        </div>
        <h4 class="text-base font-bold text-slate-900 font-outfit mb-1 leading-snug">Enter your vehicle number</h4>
        <p class="text-xs text-slate-500 max-w-[250px] leading-relaxed font-medium">
          We'll automatically detect your Brand, Model, Variant and Tyre Size.
        </p>
      </div>
    `;
  }

  function renderLoadingRegState() {
    return `
      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm flex flex-col items-center justify-center text-center my-auto min-h-[220px]">
        <div class="relative w-11 h-11 mb-3">
          <div class="w-11 h-11 rounded-full border-3 border-slate-200 border-t-[#FFD400] animate-spin"></div>
          <div class="absolute inset-0 flex items-center justify-center text-slate-700 text-xs">
            <i class="fa-solid fa-car"></i>
          </div>
        </div>
        <div id="reg-loading-status" class="text-xs font-bold text-brand-blue font-outfit tracking-wide">
          Reading Registration...
        </div>
      </div>
    `;
  }

  function renderDetectedVehicleCard(v) {
    return `
      <div class="bg-white border border-slate-200/90 rounded-2xl p-4 shadow-sm space-y-2.5 font-sans">
        <!-- Header -->
        <div class="flex items-center justify-between pb-2 border-b border-slate-100">
          <div class="flex items-center gap-2">
            <div class="w-6 h-6 rounded-full bg-[#FFD400] text-slate-950 flex items-center justify-center text-[11px] font-bold">
              <i class="fa-solid fa-car"></i>
            </div>
            <span class="text-xs sm:text-sm font-bold text-slate-900 font-outfit">Vehicle Detected</span>
          </div>
          <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full border border-emerald-200">
            <i class="fa-solid fa-circle-check text-[9px]"></i> Verified
          </span>
        </div>

        <!-- Information Stacked Rows -->
        <div class="space-y-1 text-xs">
          <div class="flex justify-between items-center py-1 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Brand</span>
            <span class="font-bold text-slate-800">${v.brand}</span>
          </div>
          <div class="flex justify-between items-center py-1 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Model</span>
            <span class="font-bold text-slate-800">${v.model}</span>
          </div>
          <div class="flex justify-between items-center py-1 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Variant</span>
            <span class="font-bold text-slate-800">${v.variant}</span>
          </div>
          <div class="flex justify-between items-center py-1 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Fuel</span>
            <span class="font-bold text-slate-800">${v.fuel}</span>
          </div>
          <div class="flex justify-between items-center py-1 border-b border-slate-100">
            <span class="text-slate-500 font-medium">Year</span>
            <span class="font-bold text-slate-800">${v.year}</span>
          </div>
          
          <!-- Highlighted Tyre Size Row -->
          <div class="flex justify-between items-center bg-[#FFF7CC] border border-amber-200/80 px-3 py-1.5 rounded-xl mt-1.5 shadow-sm">
            <span class="text-amber-900 font-bold text-xs">Tyre Size</span>
            <span class="font-extrabold text-slate-950 text-xs sm:text-sm tracking-wide">${v.size}</span>
          </div>
        </div>
      </div>
    `;
  }

  function renderNotFoundRegState(numText) {
    return `
      <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm flex flex-col items-center justify-center text-center my-auto min-h-[220px]">
        <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center text-lg font-bold mb-3 shadow-sm shrink-0">
          <i class="fa-solid fa-circle-question"></i>
        </div>
        <h4 class="text-sm font-bold text-slate-900 font-outfit mb-1">Vehicle Not Found</h4>
        <p class="text-xs text-slate-500 max-w-[240px] leading-relaxed font-medium">
          No registration match found for "<span class="font-bold text-slate-700">${numText}</span>". Please check your number.
        </p>
      </div>
    `;
  }

  // Contextual Dynamic Helper Card Data & 250ms Smooth Transition Handler
  const helperCardData = {
    vehicle: {
      title: "Select Your Vehicle",
      image: "assets/image/vehicle-select-guide.webp",
      highlight: "Brand → Model → Variant",
      caption: "We'll show compatible tyres instantly.",
    },
    size: {
      title: "How to Check Tyre Size",
      image: "assets/image/tyre-size-guide.webp",
      highlight: "205/55 R16",
      caption: "Printed on the tyre sidewall.",
    },
    number: {
      title: "Where to Find Vehicle Number",
      caption: "We'll detect your vehicle automatically.",
    },
  };

  function updateDynamicHelperCard(mode, forceVal) {
    const data = helperCardData[mode] || helperCardData.vehicle;
    const $card = $("#dynamic-helper-card");
    const $content = $("#helper-card-content");
    if (!$card.length || !$content.length) return;

    if (mode === "number") {
      const val =
        forceVal !== undefined ? forceVal.trim() : $searchInput.val().trim();
      const cleanVal = val.replace(/[\s-]+/g, "").toUpperCase();

      if (cleanVal.length < 8) {
        clearTimeout(regLoadingTimer);
        clearTimeout(regStepTimer1);
        clearTimeout(regStepTimer2);
        activeDetectedReg = null;

        $("#helper-card-title").text("Where to Find Vehicle Number");
        $("#helper-card-caption").text(
          "We'll detect your vehicle automatically.",
        );
        $content.html(renderEmptyRegState());
        return;
      }

      if (cleanVal === activeDetectedReg) return; // Already rendered/rendering for this text

      activeDetectedReg = cleanVal;
      clearTimeout(regLoadingTimer);
      clearTimeout(regStepTimer1);
      clearTimeout(regStepTimer2);

      // Exact registration number matching (case and space insensitive)
      const match = regNoDatabase.find(
        (r) => r.regNo.replace(/[\s-]+/g, "").toUpperCase() === cleanVal,
      );

      if (!match) {
        $("#helper-card-title").text("Vehicle Not Found");
        $("#helper-card-caption").text(
          "Registration number not found in database.",
        );
        $content.html(renderNotFoundRegState(val));
        return;
      }

      // Exact match found -> Start 1-second loading animation
      $("#helper-card-title").text("Detecting Vehicle Specs");
      $("#helper-card-caption").text("Reading registration database...");
      $content.html(renderLoadingRegState());

      regStepTimer1 = setTimeout(() => {
        $("#reg-loading-status").text("Detecting Vehicle...");
      }, 350);

      regStepTimer2 = setTimeout(() => {
        $("#reg-loading-status").text("Matching Tyre Size...");
      }, 700);

      regLoadingTimer = setTimeout(() => {
        const html = renderDetectedVehicleCard(match);
        $card.fadeOut(120, function () {
          $("#helper-card-title").text("Vehicle Detected");
          $("#helper-card-caption").text(
            "Vehicle details successfully detected.",
          );
          $content.html(html);
          $card.fadeIn(130);
        });
      }, 1000);
    } else {
      clearTimeout(regLoadingTimer);
      clearTimeout(regStepTimer1);
      clearTimeout(regStepTimer2);
      activeDetectedReg = null;

      const html = renderIllustrationCard(data);
      $card.fadeOut(120, function () {
        $("#helper-card-title").text(data.title);
        $("#helper-card-caption").text(data.caption);
        $content.html(html);
        $card.fadeIn(130);
      });
    }
  }

  // Search Mode Filter Pills Handler
  $(".search-mode-pill").on("click", function () {
    const mode = $(this).data("mode");
    currentSearchMode = mode;

    $(".search-mode-pill")
      .removeClass(
        "active bg-brand-yellow text-slate-950 border-brand-yellow shadow-sm",
      )
      .addClass(
        "bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200 hover:text-slate-900",
      );

    $(this)
      .addClass(
        "active bg-brand-yellow text-slate-950 border-brand-yellow shadow-sm",
      )
      .removeClass(
        "bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200 hover:text-slate-900",
      );

    let placeholderText =
      "Search by Car (e.g. Swift), Tyre Size (e.g. 205/55 R16) or Reg No. (e.g. GJ01AB1234)...";
    if (mode === "vehicle")
      placeholderText =
        "Search car make, model or variant (e.g. Nexon, Creta, Swift LXi)...";
    else if (mode === "size")
      placeholderText =
        "Search tyre size (e.g. 205/55 R16, 185/65 R15, 215/60 R17)...";
    else if (mode === "number")
      placeholderText = "Enter vehicle number (e.g. GJ01AB1234, GJ18BC5678)...";

    $searchInput.attr("placeholder", placeholderText).focus();
    updateDynamicHelperCard(mode);
    renderVehicleSuggestions($searchInput.val());
  });

  // Open dropdown
  function openDropdown() {
    if (currentSearchMode === "number") return;
    $dropdown.removeClass("hidden").hide().fadeIn(200);
  }

  // Close dropdown
  function closeDropdown() {
    if ($dropdown.hasClass("hidden")) return;
    $dropdown.fadeOut(150, function () {
      $(this).addClass("hidden");
    });
  }

  // Highlight matching query helper
  function highlightText(text, query) {
    if (!query) return text;
    const tokens = query
      .trim()
      .split(/[\s/rR-]+/)
      .filter(Boolean);
    if (!tokens.length) return text;
    const pattern = tokens
      .map((t) => t.replace(/[.*+?^${}()|[\]\\]/g, "\\$&"))
      .join("|");
    const regex = new RegExp(`(${pattern})`, "gi");
    return text.replace(
      regex,
      '<mark class="bg-amber-100 text-slate-900 px-0.5 rounded font-bold">$1</mark>',
    );
  }

  // Render Suggestions (Unified Multi-category Search)
  function renderVehicleSuggestions(query = "") {
    if (currentSearchMode === "number") {
      $dropdownContent.empty();
      closeDropdown();
      return;
    }
    const cleanQuery = query.trim().toLowerCase();

    if (!cleanQuery) {
      $dropdownContent.empty();
      closeDropdown();
      return;
    }

    const queryTokens = cleanQuery.split(/[\s/rR-]+/).filter(Boolean);
    const vehicleMatches = [];
    const sizeMatches = [];
    const regMatches = [];
    const addedKeys = new Set();

    // 1. Search Vehicles (if mode is 'all' or 'vehicle')
    if (currentSearchMode === "all" || currentSearchMode === "vehicle") {
      vehicleDatabase.forEach((item) => {
        const brandStr = item.brand.toLowerCase();
        const modelStr = item.model.toLowerCase();
        const catStr = item.category.toLowerCase();
        const fullBaseText = `${brandStr} ${modelStr} ${catStr}`;

        const matchesBase = queryTokens.every(
          (token) =>
            fullBaseText.includes(token) ||
            item.variants.some((v) => v.toLowerCase().includes(token)),
        );

        if (matchesBase) {
          const matchedVariants = item.variants.filter((vName) => {
            const varStr = `${fullBaseText} ${vName.toLowerCase()}`;
            return queryTokens.every((token) => varStr.includes(token));
          });

          const hasVariantToken = queryTokens.some((token) =>
            item.variants.some((v) => v.toLowerCase().includes(token)),
          );

          if (hasVariantToken && matchedVariants.length > 0) {
            matchedVariants.forEach((vName) => {
              const key = `${item.model} ${vName}`;
              if (!addedKeys.has(key)) {
                addedKeys.add(key);
                vehicleMatches.push({
                  type: "variant",
                  model: item.model,
                  variant: vName,
                  category: item.category,
                  displayName: `${item.model} ${vName}`,
                });
              }
            });
          } else {
            const key = item.model;
            if (!addedKeys.has(key)) {
              addedKeys.add(key);
              vehicleMatches.push({
                type: "model",
                model: item.model,
                variant: null,
                category: item.category,
                displayName: item.model,
              });
            }
          }
        }
      });
    }

    // 2. Search Tyre Sizes (if mode is 'all' or 'size')
    if (currentSearchMode === "all" || currentSearchMode === "size") {
      tyreSizeDatabase.forEach((item) => {
        const fullText =
          `${item.size} ${item.width} ${item.profile} R${item.rim}`.toLowerCase();
        const rawSize = `${item.width}${item.profile}${item.rim}`;

        if (
          queryTokens.every(
            (token) => fullText.includes(token) || rawSize.includes(token),
          )
        ) {
          sizeMatches.push(item);
        }
      });
    }

    // 3. Search Vehicle Numbers (if mode is 'all' or 'number')
    if (currentSearchMode === "all" || currentSearchMode === "number") {
      regNoDatabase.forEach((item) => {
        const fullText =
          `${item.regNo} ${item.vehicle} ${item.size}`.toLowerCase();
        if (queryTokens.every((token) => fullText.includes(token))) {
          regMatches.push(item);
        }
      });
    }

    const totalMatches =
      vehicleMatches.length + sizeMatches.length + regMatches.length;

    if (totalMatches === 0) {
      $dropdownContent.html(`
        <div class="px-4 py-3 text-sm text-slate-500 text-center">
          No matching vehicle, size, or registration number found for "${query}"
        </div>
      `);
      return;
    }

    let html = "";

    // Render Vehicle Matches
    if (vehicleMatches.length > 0) {
      if (currentSearchMode === "all") {
        html += `<div class="px-4 py-1.5 bg-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">Vehicles</div>`;
      }
      vehicleMatches.forEach((item) => {
        const highlightedName = highlightText(item.displayName, cleanQuery);
        if (item.type === "variant") {
          html += `
            <button type="button" class="variant-option-direct-item w-full text-left px-4 py-2.5 hover:bg-brand-yellow hover:text-slate-950 text-slate-800 text-sm font-medium transition flex items-center justify-between group" data-model="${item.model}" data-variant="${item.variant}">
              <span class="flex items-center gap-2">
                <i class="fa-solid fa-sliders text-xs opacity-60"></i>
                <span>${highlightedName}</span>
                <span class="text-xs text-slate-400 group-hover:text-slate-800">(${item.category})</span>
              </span>
              <i class="fa-solid fa-check text-xs opacity-40 group-hover:opacity-100"></i>
            </button>
          `;
        } else {
          html += `
            <button type="button" class="vehicle-option-item w-full text-left px-4 py-2.5 hover:bg-brand-yellow hover:text-slate-950 text-slate-800 text-sm font-medium transition flex items-center justify-between group" data-model="${item.model}">
              <span class="flex items-center gap-2">
                <i class="fa-solid fa-car text-xs opacity-60"></i>
                <span>${highlightedName}</span>
                <span class="text-xs text-slate-400 group-hover:text-slate-800">(${item.category})</span>
              </span>
              <i class="fa-solid fa-chevron-right text-xs opacity-40 group-hover:opacity-100"></i>
            </button>
          `;
        }
      });
    }

    // Render Tyre Size Matches
    if (sizeMatches.length > 0) {
      if (currentSearchMode === "all") {
        html += `<div class="px-4 py-1.5 bg-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">Tyre Sizes</div>`;
      }
      sizeMatches.forEach((item) => {
        const highlightedSize = highlightText(item.size, cleanQuery);
        html += `
          <button type="button" class="size-option-item w-full text-left px-4 py-2.5 hover:bg-brand-yellow hover:text-slate-950 text-slate-800 text-sm font-medium transition flex items-center justify-between group" data-size="${item.size}">
            <span class="flex items-center gap-2.5">
              <i class="fa-solid fa-dharmachakra text-xs opacity-60"></i>
              <span class="font-bold font-outfit text-sm">${highlightedSize}</span>
            </span>
            <i class="fa-solid fa-check text-xs opacity-40 group-hover:opacity-100"></i>
          </button>
        `;
      });
    }

    // Render Vehicle Number Matches
    if (regMatches.length > 0) {
      if (currentSearchMode === "all") {
        html += `<div class="px-4 py-1.5 bg-slate-100 text-[11px] font-bold text-slate-500 uppercase tracking-wider">Vehicle Registrations</div>`;
      }
      regMatches.forEach((item) => {
        const highlightedReg = highlightText(item.regNo, cleanQuery);
        html += `
          <button type="button" class="reg-option-item w-full text-left px-4 py-2.5 hover:bg-brand-yellow hover:text-slate-950 text-slate-800 text-sm font-medium transition flex items-center justify-between group" data-reg="${item.regNo}">
            <span class="flex items-center gap-2.5">
              <i class="fa-solid fa-id-card text-xs opacity-60"></i>
              <span class="font-bold font-outfit text-sm uppercase">${highlightedReg}</span>
              <span class="text-xs text-slate-400 group-hover:text-slate-800 font-normal">• ${item.brand} ${item.model} (${item.size})</span>
            </span>
            <i class="fa-solid fa-check text-xs opacity-40 group-hover:opacity-100"></i>
          </button>
        `;
      });
    }

    $dropdownContent.html(html);
  }

  // Render Variants list for a chosen model
  function renderVariantSuggestions(modelObj) {
    let html = `
      <div class="px-4 py-2 bg-slate-100 border-b border-slate-200 flex items-center justify-between text-xs text-slate-600">
        <button type="button" id="back-to-models-btn" class="text-brand-blue hover:underline font-bold flex items-center gap-1">
          <i class="fa-solid fa-arrow-left text-[10px]"></i> Back
        </button>
        <span class="font-bold text-slate-900">${modelObj.model} Variants</span>
      </div>
    `;

    modelObj.variants.forEach((variant) => {
      html += `
        <button type="button" class="variant-option-item w-full text-left px-4 py-2.5 hover:bg-brand-yellow hover:text-slate-950 text-slate-800 text-sm font-medium transition flex items-center justify-between group" data-variant="${variant}">
          <span class="flex items-center gap-2">
            <i class="fa-solid fa-sliders text-xs opacity-60"></i>
            <span>${variant}</span>
          </span>
          <i class="fa-solid fa-check text-xs opacity-40 group-hover:opacity-100"></i>
        </button>
      `;
    });

    $dropdownContent.html(html);
  }

  // Input Event Handlers
  $searchInput.on("focus", function () {
    const val = $(this).val().trim();
    if (val.length > 0) {
      renderVehicleSuggestions(val);
      openDropdown();
    }
  });

  $searchInput.on("input", function () {
    const val = $(this).val().trim();
    if (val.length > 0) {
      $clearBtn.removeClass("hidden");
      renderVehicleSuggestions(val);
      openDropdown();
    } else {
      $clearBtn.addClass("hidden");
      selectedVehicleModel = null;
      selectedVehicleVariant = null;
      $dropdownContent.empty();
      closeDropdown();
    }
    if (currentSearchMode === "number") {
      updateDynamicHelperCard("number", val);
    }
  });

  $searchInput.on("keypress", function (e) {
    if (e.which === 13) {
      e.preventDefault();
      const $first = $dropdownContent.find("button").first();
      if ($first.length) {
        $first.click();
      } else {
        $("#smart-find-tyres-btn").click();
      }
    }
  });

  // Clear Input Button
  $clearBtn.on("click", function () {
    $searchInput.val("");
    $clearBtn.addClass("hidden");
    selectedVehicleModel = null;
    selectedVehicleVariant = null;
    $dropdownContent.empty();
    closeDropdown();
    updateDynamicHelperCard(currentSearchMode, "");
  });

  // Delegate Model Option Click
  $(document).on("click", ".vehicle-option-item", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const modelName = $(this).data("model");
    selectedVehicleModel = vehicleDatabase.find((v) => v.model === modelName);

    if (selectedVehicleModel) {
      $searchInput.val(selectedVehicleModel.model);
      $clearBtn.removeClass("hidden");
      renderVariantSuggestions(selectedVehicleModel);
      $dropdownContent.hide().fadeIn(200);
    }
  });

  // Delegate Direct Variant Option Click
  $(document).on("click", ".variant-option-direct-item", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const modelName = $(this).data("model");
    const variantName = $(this).data("variant");

    selectedVehicleModel = vehicleDatabase.find((v) => v.model === modelName);
    selectedVehicleVariant = variantName;

    if (selectedVehicleModel) {
      const fullSelection = `${selectedVehicleModel.model} ${selectedVehicleVariant}`;
      $searchInput.val(fullSelection);
      $clearBtn.removeClass("hidden");
      closeDropdown();
    }
  });

  // Delegate Size Option Click
  $(document).on("click", ".size-option-item", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const sizeName = $(this).data("size");
    $searchInput.val(sizeName);
    $clearBtn.removeClass("hidden");
    closeDropdown();
  });

  // Delegate Reg Option Click
  $(document).on("click", ".reg-option-item", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const regText = $(this).data("reg");
    $searchInput.val(regText);
    $clearBtn.removeClass("hidden");
    closeDropdown();
    updateDynamicHelperCard("number", regText);
  });

  // Delegate Back to Models Click
  $(document).on("click", "#back-to-models-btn", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const query = selectedVehicleModel
      ? selectedVehicleModel.brand
      : $searchInput.val().split(" ")[0] || "";
    $searchInput.val(query);
    renderVehicleSuggestions(query);
  });

  // Delegate Variant Option Click
  $(document).on("click", ".variant-option-item", function (e) {
    e.preventDefault();
    e.stopPropagation();
    const variantName = $(this).data("variant");
    selectedVehicleVariant = variantName;

    if (selectedVehicleModel) {
      const fullSelection = `${selectedVehicleModel.model} ${selectedVehicleVariant}`;
      $searchInput.val(fullSelection);
      $clearBtn.removeClass("hidden");
      closeDropdown();
    }
  });

  // Close dropdown when clicking outside
  $(document).on("click", function (e) {
    if (!$(e.target).closest("#finder-section").length) {
      closeDropdown();
    }
  });

  // Search Action Button
  $("#smart-find-tyres-btn").on("click", function (e) {
    e.preventDefault();
    const val = $searchInput.val().trim();

    if (!val) {
      showToast(
        "Please search by vehicle, tyre size or vehicle number!",
        "error",
      );
      $searchInput.focus();
      openDropdown();
      return;
    }

    showToast(`Showing tyres for ${val}`, "success");

    $("html, body").animate(
      {
        scrollTop: $("#tyre-brands-section").offset().top - 80,
      },
      600,
    );
  });

  // 10. Quick Booking Modal Logic
  window.openBookingModal = function (serviceName = "General Service") {
    $("#booking-service-input").val(serviceName);
    $("#modal-service-badge").text(serviceName);
    $("#service-booking-modal").removeClass("hidden").addClass("flex");
    $("body").addClass("overflow-hidden");
  };

  window.closeBookingModal = function () {
    $("#service-booking-modal").addClass("hidden").removeClass("flex");
    $("body").removeClass("overflow-hidden");
  };

  $("#close-booking-modal, #modal-backdrop").on("click", function () {
    closeBookingModal();
  });

  // Booking Form Submission
  $("#booking-form").on("submit", function (e) {
    e.preventDefault();
    const name = $("#booking-name").val().trim();
    const phone = $("#booking-phone").val().trim();
    const city = $("#booking-city").val();
    const service = $("#booking-service-input").val();

    if (!name || !phone || !city) {
      showToast("Please fill in all required fields.", "error");
      return;
    }

    if (phone.length < 10) {
      showToast("Please enter a valid 10-digit mobile number.", "error");
      return;
    }

    // Success response
    closeBookingModal();
    $("#booking-form")[0].reset();
    showToast(
      `Thank you, ${name}! Your request for "${service}" has been booked. Our technician in ${city} will call you in 5 minutes.`,
      "success",
    );
  });

  // 11. Toast Notification Utility
  function showToast(message, type = "success") {
    const toastBg =
      type === "success"
        ? "bg-brand-blue text-brand-yellow"
        : "bg-red-600 text-white";
    const icon =
      type === "success"
        ? '<i class="fa-solid fa-circle-check text-xl"></i>'
        : '<i class="fa-solid fa-triangle-exclamation text-xl"></i>';

    const $toast = $(`
      <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3 px-5 py-4 rounded-xl shadow-2xl ${toastBg} border border-white/20 transform transition-all duration-300 translate-y-10 opacity-0 max-w-md">
        ${icon}
        <span class="text-sm font-medium text-white">${message}</span>
        <button class="ml-auto text-white/70 hover:text-white close-toast"><i class="fa-solid fa-xmark"></i></button>
      </div>
    `);

    $("body").append($toast);

    setTimeout(() => {
      $toast.removeClass("translate-y-10 opacity-0");
    }, 100);

    const timer = setTimeout(() => {
      $toast.addClass("translate-y-10 opacity-0");
      setTimeout(() => $toast.remove(), 300);
    }, 4500);

    $toast.find(".close-toast").on("click", function () {
      clearTimeout(timer);
      $toast.addClass("translate-y-10 opacity-0");
      setTimeout(() => $toast.remove(), 300);
    });
  }

  // 12. Navbar and Header Search Bar Handler
  $("#navbar-search-btn").on("click", function (e) {
    e.preventDefault();
    showToast(
      "Search tyres by vehicle make, model or tyre size below!",
      "success",
    );
    if ($("#finder-section").length) {
      $("html, body").animate(
        {
          scrollTop: $("#finder-section").offset().top - 90,
        },
        600,
      );
      $("#car-make-select").focus();
    }
  });

  $("#header-search-input").on("keypress", function (e) {
    if (e.which === 13) {
      e.preventDefault();
      const query = $(this).val().trim();
      if (query) {
        showToast(`Searching for tyres matching "${query}"...`, "success");
        $("html, body").animate(
          {
            scrollTop: $("#finder-section").offset().top - 90,
          },
          600,
        );
      }
    }
  });

  $("#header-search-input")
    .next("button")
    .on("click", function (e) {
      e.preventDefault();
      const query = $("#header-search-input").val().trim();
      if (query) {
        showToast(`Searching for tyres matching "${query}"...`, "success");
      }
      $("html, body").animate(
        {
          scrollTop: $("#finder-section").offset().top - 90,
        },
        600,
      );
    });

  // 13. Cart Counter simulation
  let cartCount = 0;
  $(".add-to-cart-btn").on("click", function (e) {
    e.preventDefault();
    cartCount++;
    $(".cart-badge-count").text(cartCount).removeClass("hidden");
    showToast("Product added to your cart!", "success");
  });

  // Smooth scroll for anchor links with intelligent fallbacks
  $('a[href^="#"]').on("click", function (event) {
    const targetHash = this.hash;
    if (targetHash && targetHash !== "#") {
      event.preventDefault();

      // Target mapping if specific IDs differ
      let $target = $(targetHash);
      if (!$target.length) {
        if (targetHash === "#car-tyres") $target = $("#featured-tyres");
        else if (targetHash === "#bike-tyres") $target = $("#featured-tyres");
        else if (targetHash === "#alignment") $target = $("#car-battery");
        else if (targetHash === "#services") $target = $("#finder-section");
        else if (targetHash === "#stores") $target = $("#tyre-brands-section");
        else if (targetHash === "#about") $target = $("#tyrehub-advantage");
        else if (targetHash === "#contact") $target = $("footer");
        else if (targetHash === "#franchise") {
          openBookingModal("Franchise Opportunity Inquiry");
          return;
        }
      }

      if ($target.length) {
        $("html, body").animate(
          {
            scrollTop: $target.offset().top - 80,
          },
          600,
        );
      }
    }
  });
});
