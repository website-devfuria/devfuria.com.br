<?php //var_dump($pagina_arr); ?>

<ol class="breadcrumb navbar-static-top">

    <?php if (count($page->uri_arr) == 3): ?>

        <li><a href="/">devfuria.com.br</a></li>
        <li class="active"><?php echo $page->uri_arr[1] ?></li>

    <?php else: ?>

        <li><a href="/">devfuria.com.br</a></li>
        <li><a href="../"><?php echo $page->uri_arr[1] ?></a></li>
        <li class="active"><?php echo $page->uri_arr[2] ?></li>

    <?php endif ?>

</ol>


