<div class="page-container">
    <div class="page-sidebar">

        <a class="logo" href="index.html"><i class="fas fa-code"></i> CoralisStudio</a>
        <ul class="list-unstyled accordion-menu">

            <hr class="sidebar-divider d-none d-md-block">


            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>


            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu']; ?>
                </div>

                <!-- sub menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT * 
                            FROM `user_sub_menu` JOIN `user_menu`
                              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                           WHERE `user_sub_menu`.`menu_id` = $menuId
                             AND `user_sub_menu`.`is_active` = 1
                                 ";
                $subMenu =  $this->db->query($querySubMenu)->result_array();
                ?>

                <?php foreach ($subMenu as $sm) :  ?>
                    <li>
                        <a href="<?= base_url($sm['url']); ?>"><i data-feather="<?= $sm['icon'] ?>"></i><?= $sm['title'] ?></a>
                    </li>
                <?php endforeach; ?>


            <?php endforeach; ?>
            <hr class="sidebar-divider d-none d-md-block">
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><i data-feather="log-out"></i>Logout</a>
            </li>

        </ul>
        <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
    </div>
    <div class="page-content">