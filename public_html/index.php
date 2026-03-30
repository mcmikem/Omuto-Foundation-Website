<?php
/**
 * Omuto Foundation — Homepage
 * Restructured to use header.php/footer.php includes
 */

$page_title      = "Omuto Foundation | Youth-Led Community Development in Uganda";
$page_desc       = "Young people in Mpigi and Butambala, Uganda are building water systems, leading health campaigns, and launching enterprises. Charity feeds a day. Structure feeds a generation.";
$page_canonical  = "https://omuto.org/";
$page_active_nav = "home";
$page_extra_head = '';
$footer_extra_js = '<script src="home.js"></script>';

$ticker_messages = [
    "Omuto Youth Center now open in Nabbuzi, Mpigi.",
    "100 Girls to Receive Reusable Sanitary Packs this Month.",
    "Computer class intake registration ongoing",
    "3,200+ residents with safer water access.",
];

include 'header.php';
?>

<main id="main">
  <?php include 'sections/hero.php'; ?>
  <?php include 'sections/stats.php'; ?>
  <?php include 'sections/manifesto.php'; ?>
  <?php include 'sections/photostrip.php'; ?>
  <?php include 'sections/reality.php'; ?>
  <?php include 'sections/model.php'; ?>
  <?php include 'sections/ecosystem.php'; ?>
  <?php include 'sections/youthcenter.php'; ?>
  <?php include 'sections/proof.php'; ?>
  <?php include 'sections/videos.php'; ?>
  <?php include 'sections/whyworks.php'; ?>
  <?php include 'sections/forbes.php'; ?>
  <?php include 'sections/join.php'; ?>
  <?php include 'sections/partners.php'; ?>
  <?php include 'sections/finalcta.php'; ?>
</main>

<?php include 'footer.php'; ?>
