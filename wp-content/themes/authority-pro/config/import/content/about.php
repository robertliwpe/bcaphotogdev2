<?php
/**
 * Authority Pro about page.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

// Photo by Fabrice Villard on Unsplash.
$authority_about_image_url = CHILD_URL . '/config/import/images/about.jpg';

return <<<CONTENT
<!-- wp:image {"id":122,"align":"wide"} -->
<figure class="wp-block-image alignwide"><img src="$authority_about_image_url" alt="" class="wp-image-122"/></figure>
<!-- /wp:image -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":29} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:29px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1>About Us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hello! We are StudioPress, and  we build themes with an emphasis on typography, white space, and   mobile-optimized design to make your website look absolutely   breathtaking.  </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:atomic-blocks/ab-spacer {"spacerHeight":50} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:50px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right"> 555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right">
1234 Block Blvd.<br>San Francisco, CA 94120

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;
