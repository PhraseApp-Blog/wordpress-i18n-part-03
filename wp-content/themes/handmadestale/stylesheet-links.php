<link
    rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css"
>

<?php if (!function_exists('pll_current_language')) {
    throw new Exception('Polylang plugin must be installed to determine ' .
        'current language');
} ?>

<?php if (pll_current_language() == 'ar') : ?>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lemonada|Cairo"
    >
<?php else : ?>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather|Pacifico"
    >
<?php endif; ?>

<link
    rel="stylesheet"
    href="<?php echo get_bloginfo('template_url'); ?>/style.css"
>
