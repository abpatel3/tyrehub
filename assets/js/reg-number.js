/**
 * TyreHub - Registration Number Input Handler (reg-number.js)
 * Smooth uppercase typing without cursor jumping & realtime Indian reg validation
 */

$(document).ready(function () {
  const $plateInput = $("#reg-plate-input");
  const $feedbackMsg = $("#reg-feedback-msg");
  const $searchBtn = $("#reg-search-submit");

  // Regex pattern for Indian Vehicle Registration numbers (e.g. GJ01AB1234, DL03AB1234, MH02CD5678)
  const indianRegRegex = /^[A-Z]{2}\s?[0-9]{1,2}\s?[A-Z]{1,3}\s?[0-9]{4}$/;

  $plateInput.on("input", function () {
    const inputEl = this;
    const startPos = inputEl.selectionStart;
    const endPos = inputEl.selectionEnd;

    // Convert to uppercase & trim multiple spaces
    let val = inputEl.value.toUpperCase();
    
    // Only allow alphanumeric characters and single spaces
    val = val.replace(/[^A-Z0-9\s]/g, "").replace(/\s+/g, " ");

    if (inputEl.value !== val) {
      inputEl.value = val;
      // Preserve cursor position so typing feels completely natural
      try {
        inputEl.setSelectionRange(startPos, endPos);
      } catch (err) {}
    }

    // Clean value without spaces for length check & validation
    const cleanVal = val.replace(/\s+/g, "");

    // Validation Feedback
    if (cleanVal.length >= 7) {
      if (indianRegRegex.test(cleanVal)) {
        $feedbackMsg
          .removeClass("hidden text-red-500 text-slate-500")
          .addClass("text-emerald-600")
          .html('<i class="fa-solid fa-circle-check mr-1"></i> Valid Registration Number Format');
      } else {
        $feedbackMsg
          .removeClass("hidden text-emerald-600 text-slate-500")
          .addClass("text-red-500")
          .html('<i class="fa-solid fa-triangle-exclamation mr-1"></i> Example Format: GJ 01 AB 1234');
      }
    } else if (cleanVal.length > 0) {
      $feedbackMsg
        .removeClass("hidden text-emerald-600 text-red-500")
        .addClass("text-slate-500")
        .text("Enter full plate number (e.g. GJ 01 AB 1234)");
    } else {
      $feedbackMsg.addClass("hidden");
    }
  });

  // Optional: Auto-format nicely on blur (when user finishes typing)
  $plateInput.on("blur", function () {
    let clean = $(this).val().replace(/[^A-Z0-9]/g, "");
    if (clean.length >= 8) {
      const state = clean.substring(0, 2);
      const district = clean.substring(2, 4);
      const series = clean.substring(4, clean.length - 4);
      const number = clean.substring(clean.length - 4);
      $(this).val(`${state} ${district} ${series} ${number}`);
    }
  });

  // Submit Handler
  $searchBtn.on("click", function (e) {
    e.preventDefault();
    const plate = $plateInput.val().trim();
    const clean = plate.replace(/\s+/g, "");

    if (!clean || clean.length < 6) {
      alert("Please enter a valid Registration Plate Number (e.g. GJ 01 AB 1234).");
      $plateInput.focus();
      return;
    }

    window.location.href = `search.html?reg=${encodeURIComponent(plate)}`;
  });
});
