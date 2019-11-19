<?php
/**
 * @file
 * Template for the My Layout layout.
 */
?>

<div class="layout--my-layout <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper container container-fluid">

    <?php if ($messages): ?>
      <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
        <?php print $messages; ?>
      </div>
    <?php endif; ?>

    <div class="l-page-title">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>

    <?php if ($tabs): ?>
      <nav class="tabs" role="tablist" aria-label="<?php print t('Admin content navigation tabs.'); ?>">
        <?php print $tabs; ?>
      </nav>
    <?php endif; ?>

    <?php print $action_links; ?>

    <div class="l-content">
      <?php print $content['content']; ?>
    </div>

  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.layout--my-layout -->
