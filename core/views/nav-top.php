<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo LINKS_PATH . "/index.php#"; ?>" class="navbar-brand">DevFuria</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <?php foreach ($core->navtop->secoes as $secao_path => $secao_label): ?>
                    <li class="<?php echo ($secao_path == $core->navtop->secao) ? "active" : null; ?>">
                        <a href="<?php echo ROOT_PATH . "/index.php#" . $secao_path; ?>"><?php echo $secao_label; ?></a>
                    </li>
                <?php endforeach; ?>                        
            </ul>
        </nav>
    </div>
</header>