/**
 * TyreHub - Tyre Size Selector (tyre-size.js)
 * Searchable Select2 dropdowns for Width, Profile, Rim & Speed Rating
 */

$(document).ready(function () {
  const $widthSelect = $("#tyre-width-select");
  const $profileSelect = $("#tyre-profile-select");
  const $rimSelect = $("#tyre-rim-select");
  const $speedSelect = $("#tyre-speed-select");
  const $searchBtn = $("#size-search-submit");

  // Common tyre specs data
  const widths = ["145", "155", "165", "175", "185", "195", "205", "215", "225", "235", "245", "255", "265", "275"];
  const profiles = ["35", "40", "45", "50", "55", "60", "65", "70", "75", "80"];
  const rims = ["R12", "R13", "R14", "R15", "R16", "R17", "R18", "R19", "R20"];
  const speedRatings = [
    { code: "T", desc: "T - Up to 190 km/h" },
    { code: "H", desc: "H - Up to 210 km/h" },
    { code: "V", desc: "V - Up to 240 km/h" },
    { code: "W", desc: "W - Up to 270 km/h" },
    { code: "Y", desc: "Y - Up to 300 km/h" }
  ];

  // Populate Width
  widths.forEach((w) => {
    $widthSelect.append(`<option value="${w}">${w}</option>`);
  });

  // Populate Profile
  profiles.forEach((p) => {
    $profileSelect.append(`<option value="${p}">${p}</option>`);
  });

  // Populate Rim
  rims.forEach((r) => {
    $rimSelect.append(`<option value="${r}">${r}</option>`);
  });

  // Populate Speed Rating
  speedRatings.forEach((s) => {
    $speedSelect.append(`<option value="${s.code}">${s.desc}</option>`);
  });

  // Initialize Select2 on tyre size dropdowns
  if ($.fn.select2) {
    $widthSelect.select2({ placeholder: "Width", width: "100%" });
    $profileSelect.select2({ placeholder: "Profile", width: "100%" });
    $rimSelect.select2({ placeholder: "Rim", width: "100%" });
    $speedSelect.select2({ placeholder: "Speed Rating (Optional)", width: "100%" });
  }

  // Submit Handler
  $searchBtn.on("click", function (e) {
    e.preventDefault();
    const w = $widthSelect.val();
    const p = $profileSelect.val();
    const r = $rimSelect.val();
    const speed = $speedSelect.val();

    if (!w || !p || !r) {
      alert("Please select Width, Profile, and Rim Size.");
      return;
    }

    const sizeStr = `${w}/${p} ${r}`;
    window.location.href = `search.html?size=${encodeURIComponent(sizeStr)}&speed=${encodeURIComponent(speed || "")}`;
  });
});
