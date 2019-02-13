<?php if (!isset($languages)) {
    throw new Exception(__('Expected $languages array for printing'));
} ?>

<ul class="pure-menu-list pure-menu-horizontal text-end">
    <?php foreach ($languages as $language) : ?>
        <li class="pure-menu-item">
            <a class="pure-menu-link" href="<?php echo $language['url']; ?>">
                <?php echo $language['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
