<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <?php foreach (\Config\Menu::getMenu() as $key => $menu) : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=$menu['url']?>">
                    <i class="<?=$menu['class']?>"></i><span><?=$menu['name']?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>