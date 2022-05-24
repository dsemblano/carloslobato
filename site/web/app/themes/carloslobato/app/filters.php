<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <p class="mt-2"><a href="%s">%s</a></p>', get_permalink(), __('Leia Mais', 'sage'));
});
