/**
 * TyreHub - Search Panel Tabs Manager (search-tabs.js)
 * Smooth 200ms jQuery fade transitions, active tab states & height preserving
 */

$(document).ready(function () {
  const $tabBtns = $(".tab-btn");
  const $tabPanes = $(".tab-pane");
  const $paneContainer = $("#search-tabs-content");

  $tabBtns.on("click", function (e) {
    e.preventDefault();
    const targetTab = $(this).data("tab");
    const $targetPane = $("#" + targetTab);

    if ($(this).hasClass("active") || !$targetPane.length) return;

    // Update active tab buttons
    $tabBtns
      .removeClass("active bg-brand-yellow text-brand-blue font-bold shadow-md shadow-brand-yellow/30 border-brand-yellow")
      .addClass("bg-white/60 text-brand-blue/80 hover:bg-white hover:text-brand-blue font-semibold border-transparent");

    $(this)
      .addClass("active bg-brand-yellow text-brand-blue font-bold shadow-md shadow-brand-yellow/30 border-brand-yellow")
      .removeClass("bg-white/60 text-brand-blue/80 hover:bg-white hover:text-brand-blue font-semibold border-transparent");

    // Preserve height during transition to avoid abrupt jumps
    const currentHeight = $paneContainer.height();
    $paneContainer.style ? $paneContainer.style.minHeight = currentHeight + "px" : $paneContainer.css("min-height", currentHeight + "px");

    // Smooth 200ms fade transition
    const $activePane = $tabPanes.filter(":visible");

    $activePane.fadeOut(100, function () {
      $activePane.addClass("hidden");
      $targetPane
        .removeClass("hidden")
        .hide()
        .fadeIn(150, function () {
          // Reset min-height after transition
          $paneContainer.css("min-height", "");
        });
    });
  });
});
