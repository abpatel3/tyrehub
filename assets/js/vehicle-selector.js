/**
 * TyreHub - Vehicle Selector (vehicle-selector.js)
 * Searchable Select2 cascading dropdowns driven by vehicles.json
 * Supports 2W, 3W, and 4W Vehicle Type Selector Cards
 */

$(document).ready(function () {
  const $brandSelect = $("#vehicle-brand-select");
  const $modelSelect = $("#vehicle-model-select");
  const $variantSelect = $("#vehicle-variant-select");
  const $searchBtn = $("#vehicle-search-submit");
  const $typeCards = $(".v-type-card");

  let fullVehicleData = null;
  let currentBrandsList = [];
  let activeVehicleType = "4w";

  // Initialize Select2 on dropdowns
  function initSelect2() {
    if ($.fn.select2) {
      $brandSelect.select2({ placeholder: "Select Vehicle Brand", width: "100%" });
      $modelSelect.select2({ placeholder: "Select Model", width: "100%" });
      $variantSelect.select2({ placeholder: "Select Submodel / Variant", width: "100%" });
    }
  }
  initSelect2();

  // 1. Fetch vehicles data
  $.getJSON("assets/data/vehicles.json")
    .done(function (data) {
      if (data) {
        fullVehicleData = data;
        loadVehicleType(activeVehicleType);
      }
    })
    .fail(function () {
      console.warn("Could not load vehicles.json");
    });

  // 2. Load Vehicle Type (2w, 3w, 4w)
  function loadVehicleType(typeCode) {
    activeVehicleType = typeCode;

    if (fullVehicleData && fullVehicleData.categories && fullVehicleData.categories[typeCode]) {
      const category = fullVehicleData.categories[typeCode];
      currentBrandsList = category.brands || [];
    } else if (fullVehicleData && fullVehicleData.brands) {
      currentBrandsList = fullVehicleData.brands;
    } else {
      currentBrandsList = [];
    }

    populateBrands();
  }

  // 3. Populate Brands Dropdown
  function populateBrands() {
    $brandSelect.empty().append('<option value="" disabled selected>Select Vehicle Brand</option>');
    $modelSelect.empty().append('<option value="" disabled selected>Select Model</option>').prop("disabled", true);
    $variantSelect.empty().append('<option value="" disabled selected>Select Submodel / Variant</option>').prop("disabled", true);

    currentBrandsList.forEach((brand) => {
      $brandSelect.append(`<option value="${brand.id}">${brand.name}</option>`);
    });

    if ($.fn.select2) {
      $brandSelect.trigger("change.select2");
      $modelSelect.trigger("change.select2");
      $variantSelect.trigger("change.select2");
    }
  }

  // 4. Vehicle Type Selector Card Click Event (2W, 3W, 4W)
  $typeCards.on("click", function (e) {
    e.preventDefault();
    const selectedType = $(this).data("type");

    if ($(this).hasClass("active")) return;

    // Smooth active card state toggle (constant border-2 width to prevent layout jerk)
    $typeCards
      .removeClass("active border-brand-yellow bg-brand-yellow/15 text-brand-blue font-bold shadow-sm shadow-brand-yellow/20")
      .addClass("border-slate-200 bg-white text-slate-700 hover:bg-slate-50 hover:text-brand-blue font-semibold");

    $(this)
      .addClass("active border-brand-yellow bg-brand-yellow/15 text-brand-blue font-bold shadow-sm shadow-brand-yellow/20")
      .removeClass("border-slate-200 bg-white text-slate-700 hover:bg-slate-50 hover:text-brand-blue font-semibold");

    // Load category brands
    loadVehicleType(selectedType);
  });

  // 5. Brand Change Handler -> Populate Models
  $brandSelect.on("change", function () {
    const selectedBrandId = $(this).val();
    const brandObj = currentBrandsList.find((b) => b.id === selectedBrandId);

    $modelSelect.empty().append('<option value="" disabled selected>Select Model</option>');
    $variantSelect.empty().append('<option value="" disabled selected>Select Submodel / Variant</option>');
    $variantSelect.prop("disabled", true);

    if (brandObj && brandObj.models && brandObj.models.length) {
      brandObj.models.forEach((model, index) => {
        $modelSelect.append(`<option value="${index}">${model.name}</option>`);
      });
      $modelSelect.prop("disabled", false);
    } else {
      $modelSelect.prop("disabled", true);
    }

    if ($.fn.select2) {
      $modelSelect.trigger("change.select2");
      $variantSelect.trigger("change.select2");
    }
  });

  // 6. Model Change Handler -> Populate Variants
  $modelSelect.on("change", function () {
    const selectedBrandId = $brandSelect.val();
    const modelIndex = $(this).val();

    const brandObj = currentBrandsList.find((b) => b.id === selectedBrandId);
    $variantSelect.empty().append('<option value="" disabled selected>Select Submodel / Variant</option>');

    if (brandObj && brandObj.models[modelIndex]) {
      const modelObj = brandObj.models[modelIndex];
      if (modelObj.variants && modelObj.variants.length) {
        modelObj.variants.forEach((v) => {
          $variantSelect.append(`<option value="${v.size}">${v.name}</option>`);
        });
        $variantSelect.prop("disabled", false);
      }
    } else {
      $variantSelect.prop("disabled", true);
    }

    if ($.fn.select2) {
      $variantSelect.trigger("change.select2");
    }
  });

  // 7. Submit Handler
  $searchBtn.on("click", function (e) {
    e.preventDefault();
    const brandName = $brandSelect.find("option:selected").text();
    const modelName = $modelSelect.find("option:selected").text();
    const variantSize = $variantSelect.val();

    if (!$brandSelect.val() || !$modelSelect.val() || !variantSize) {
      alert("Please select Brand, Model and Variant to search tyres.");
      return;
    }

    const query = encodeURIComponent(`${brandName} ${modelName}`);
    window.location.href = `search.html?q=${query}&type=${activeVehicleType}&size=${encodeURIComponent(variantSize)}`;
  });
});
