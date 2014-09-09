<?php
/**
 * Created by PhpStorm.
 * User: malgis
 * Date: 2014-09-07
 * Time: 15:24
 */

?>

<article class="article1">

    <?=$content?>

    <?php if(isset($byline)) : ?>
        <footer class="byline">
            <?=$byline?>
        </footer>
    <?php endif; ?>

</article>