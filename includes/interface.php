<?php
/**
 * TyreHub Core PHP Interface & Configuration Helper
 * 
 * Provides layout configuration, site constants, dynamic metadata helpers,
 * and navigation utility functions across all pages.
 */

// Site Configuration Constants
define('SITE_NAME', 'TyreHub');
define('SITE_TAGLINE', 'Your Car. Our Care.');
define('TOLL_FREE_NUMBER', '1800-123-5510');
define('EMERGENCY_NUMBER', '7575 888 916');
define('SUPPORT_EMAIL', 'support@tyrehub.com');
define('SALES_EMAIL', 'sales@tyrehub.com');
define('WHATSAPP_NUMBER', '917575888916');

/**
 * Interface for Page Metadata Management
 */
interface PageMetadataInterface {
    public static function getTitle(string $customTitle = ''): string;
    public static function getDescription(string $customDesc = ''): string;
}

class PageMetadata implements PageMetadataInterface {
    private static string $defaultTitle = "TyreHub | A to Z in Tyre Services - Buy Tyres Online in Ahmedabad & Gandhinagar";
    private static string $defaultDescription = "TyreHub is Gujarat's #1 online tyre & car battery store. Doorstep fitting, 30-min car battery replacement, 3D computerized alignment, roadside assistance and 50+ service partners across Ahmedabad & Gandhinagar.";

    public static function getTitle(string $customTitle = ''): string {
        return !empty($customTitle) ? $customTitle : self::$defaultTitle;
    }

    public static function getDescription(string $customDesc = ''): string {
        return !empty($customDesc) ? $customDesc : self::$defaultDescription;
    }
}

/**
 * Navigation Helper Function to return active classes for menu links
 * 
 * @param string $pageName Name of the page link
 * @param string $currentPage Currently active page key
 * @return string Active HTML class or empty string
 */
function get_active_nav_class(string $pageName, string $currentPage = ''): string {
    return ($pageName === $currentPage) ? 'text-brand-yellow font-bold' : '';
}

$title = PageMetadata::getTitle($page_title ?? '');
$description = PageMetadata::getDescription($page_description ?? '');
$activePage = $current_page ?? 'home';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($description); ?>">

  <!-- Favicon -->
  <link rel="icon"
    href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🛞</text></svg>">

  <!-- Preconnect to CDNs & External Resources for Ultra-Fast Loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://images.unsplash.com">

  <!-- Google Fonts: Poppins & Outfit -->
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap"
    rel="stylesheet">

  <!-- Font Awesome 6 Pro / Free CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- AOS (Animate On Scroll) CSS -->
  <link rel="stylesheet" href="assets/vendor/aos/aos.css" />

  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Compiled Tailwind CSS (Local Build) -->
  <link rel="stylesheet" href="assets/css/tailwind.css">
</head>

<body class="bg-slate-50 text-slate-900 antialiased selection:bg-brand-yellow selection:text-brand-blue">