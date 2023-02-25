<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <?php require_once "sidebar-top.php" ?>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <?php

                menuTreeSubTitle("Genel Ayarlar",
                    "far fas fa-cog nav-icon",
                    "src/setting",
                    "", "");
                ?>

            </ul>
        </nav>
    </div>
</aside>