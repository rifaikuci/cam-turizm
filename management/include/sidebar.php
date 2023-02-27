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

                menuTreeSubTitle("Hakkında",
                    "far fas fa-info nav-icon",
                    "src/about",
                    "", "");

                menuTreeSubTitle("Müşteriler",
                    "far fas fa-users nav-icon",
                    "src/customer",
                    "", "");
                menuTreeSubTitle("S.S.S.",
                    "far fas fa-question nav-icon",
                    "src/faq",
                    "", "");

                menuTreeSubTitle("Paketler",
                    "far fas fa-list nav-icon",
                    "src/packets",
                    "", "");

                menuTreeSubTitle("Personeller",
                    "far fas fa-user nav-icon",
                    "src/person",
                    "", "");

                menuTreeSubTitle("Referanslar",
                    "far fas fa-asterisk nav-icon",
                    "src/references",
                    "", "");

                ?>

            </ul>
        </nav>
    </div>
</aside>