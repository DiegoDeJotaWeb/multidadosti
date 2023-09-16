<?php

require_once('DataRequest.php');

$menu = new DataRequest();

$dadosMenu = $menu->dadosMenu();
?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php foreach ($dadosMenu as $item) { ?>

                <li class="<?php echo $item['start'] . " " . $item['active']; ?>">
                    <a href="<?= $item['href'] ?>">
                        <i class="<?= $item['icon'] ?>"></i>
                        <span class="title">
                            <?= $item['menuNome']; ?>
                        </span>
                        <span class="<?= $item['selected']; ?>">
                        </span>
                    </a>
                    <?php if (isset($item['subMenu'])) { ?>
                        <ul class="sub-menu">
                            <?php foreach ($item['subMenu'] as $subItem) { ?>
                                <li>
                                    <a href="<?= $subItem['subLink']; ?>"><?= $subItem['subMenuNome']; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>