<!-- Sidebar -->
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">Management System</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">M <span>S</span></a>
    </div>
    <hr>

    <!-- QUERRY MENU -->

    <?php

    $role_id  = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";

    $menu = $this->db->query($queryMenu)->result_array();

    ?>
    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
      <ul class="sidebar-menu">
        <li class="menu-header">
          <?= $m['menu']; ?>
        </li>


        <!-- SUB MENU SESUAI MENU -->
        <?php
          $menuId = $m['id'];
          $querySubMenu = "SELECT *
                         FROM `user_sub_menu` JOIN `user_menu`
                         ON `user_sub_menu`. `menu_id` = `user_menu`.`id`
                         WHERE `user_sub_menu`.`menu_id` = $menuId
                         AND `user_sub_menu`.`is_active` = 1
                       ";

          $subMenu = $this->db->query($querySubMenu)->result_array();
          ?>

        <?php foreach ($subMenu as $sm) : ?>
          <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
              <i class="<?= $sm['icon']; ?>">
              </i> <span><?= $sm['title']; ?></span></a>
            </li>
          <?php endforeach; ?>
          <hr>
        <?php endforeach; ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-fw fa-sign-out-alt"></i> <span>Logout</span></a>
        </li>
      </ul>


  </aside>
</div>