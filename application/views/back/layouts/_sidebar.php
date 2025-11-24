<!-- ====== MODERN GLASSY SIDEBAR ====== -->
<aside class="modern-sidebar">
<!-- Brand -->
<div class="sidebar-header">
  <a href="<?= base_url('admin') ?>" class="brand-link">
    <div class="brand-icon">
      <img src="<?= base_url('img/identitas/UMP.png') ?>" alt="Logo Admin" style="width: 40px; height: 40px; object-fit: contain;">
    </div>
          <span class="text-white font-weight-bold">
  <?= strtoupper($this->session->userdata('first_name') . ' ' . $this->session->userdata('last_name')) ?>
</span>

  </a>
</div>


  <!-- Menu Section -->
  <div class="sidebar-body">
    <ul class="menu-list">
      <li class="menu-item <?= ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '') ? 'active' : '' ?>">
        <a href="<?= base_url('admin') ?>">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <?php 
        // pastikan $this->menu sudah didefinisikan di autoload / controller
        if (isset($this->menu)) :
          $menus = $this->menu->getMenu();
          foreach($menus as $menu) :
            $submenu = $this->menu->getSubmenu($menu->id);
      ?>
      <li class="menu-item">
        <?php if($submenu) : ?>
          <button class="menu-toggle" data-target="#menu<?= $menu->id ?>">
            <i class="<?= $menu->icon ?>"></i>
            <span><?= $menu->title ?></span>
            <i class="fas fa-chevron-down arrow"></i>
          </button>
          <ul class="submenu" id="menu<?= $menu->id ?>">
            <?php foreach($submenu as $sm) : ?>
              <li>
                <a href="<?= base_url($sm->sub_url) ?>">
                  <i class="fas fa-circle"></i> <?= $sm->sub_title ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <a href="<?= base_url($menu->url) ?>">
            <i class="<?= $menu->icon ?>"></i>
            <span><?= $menu->title ?></span>
          </a>
        <?php endif; ?>
      </li>
      <?php 
          endforeach;
        endif; 
      ?>
    </ul>
  </div>

  <!-- Footer -->
  <div class="sidebar-footer">
    <button class="logout-btn" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt"></i> Logout
    </button>
  </div>
</aside>

<!-- ====== MAIN CONTENT AREA ====== -->
<div class="main-content">
  <div class="content-wrapper">
    <!-- Cegah error notice jika $contents belum didefinisikan -->
    <?= isset($contents) ? $contents : '' ?>
  </div>
</div>

<!-- ====== STYLE ====== -->
<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
  }

  /* === SIDEBAR === */
  .modern-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 268px;
    height: 100vh;
    background: rgba(0, 51, 102, 0.95);
    backdrop-filter: blur(8px);
    display: flex;
    flex-direction: column;
    color: #fff;
    box-shadow: 3px 0 10px rgba(0,0,0,0.3);
    z-index: 1000;
  }

  /* === BRAND AREA === */
  .sidebar-header {
    padding: 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    text-align: center;
  }
  .brand-link {
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .brand-icon {
    background: #fff;
    color: #b30000;
    border-radius: 50%;
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 8px;
  }
  .brand-text {
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 1px;
    color: #fff;
  }

  /* === MENU SECTION === */
  .sidebar-body {
    flex: 1;
    overflow-y: auto;
    padding: 1rem;
  }
  .menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .menu-item {
    margin-bottom: 6px;
  }
  .menu-item a,
  .menu-toggle {
    display: flex;
    align-items: center;
    gap: 10px;
    width: 100%;
    padding: 10px 12px;
    color: #e5e5e5;
    font-size: 15px;
    border-radius: 8px;
    text-decoration: none;
    background: transparent;
    border: none;
    transition: all 0.25s ease;
  }
  .menu-item a:hover,
  .menu-toggle:hover {
    background-color: rgba(255,255,255,0.15);
    color: #fff;
  }
  .menu-item.active a {
    background-color: #ffffff;
    color: #b30000;
    font-weight: 600;
  }
  .menu-item i {
    min-width: 22px;
    text-align: center;
  }

  /* === SUBMENU === */
  .submenu {
    display: none;
    list-style: none;
    padding-left: 25px;
    margin-top: 5px;
  }
  .submenu a {
    font-size: 14px;
    padding: 6px 0;
    display: block;
    color: #bcd;
  }
  .submenu a:hover {
    color: #fff;
  }
  .arrow {
    margin-left: auto;
    transition: transform 0.3s ease;
  }
  .menu-toggle.active .arrow {
    transform: rotate(180deg);
  }

  /* === FOOTER === */
  .sidebar-footer {
    padding: 1rem;
    border-top: 1px solid rgba(255,255,255,0.1);
    text-align: center;
  }
  .logout-btn {
    background: #fff;
    color: #b30000;
    border: none;
    border-radius: 20px;
    padding: 8px 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .logout-btn:hover {
    background: #eaeaea;
  }

  /* === MAIN CONTENT === */
 .main-content {
  margin-left: 220px; /* jarak lebih rapat ke sidebar */
  padding: 10px 20px; /* atas-bawah kecil, kiri-kanan pas */
  min-height: 100vh;
  background: #f8f9fa;
  transition: margin-left 0.3s ease;
}

.content-wrapper {
  padding-top: 10px;
  padding-left: 10px;
}


  /* === RESPONSIVE === */
  @media (max-width: 768px) {
    .modern-sidebar {
      width: 200px;
    }
    .main-content {
      margin-left: 200px;
    }
  }

  /* === SCROLLBAR HALUS === */
  .sidebar-body::-webkit-scrollbar {
    width: 6px;
  }
  .sidebar-body::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.2);
    border-radius: 10px;
  }
</style>

<!-- ====== SCRIPT UNTUK TOGGLE SUBMENU ====== -->
<script>
  document.querySelectorAll(".menu-toggle").forEach(btn => {
    btn.addEventListener("click", () => {
      const target = document.querySelector(btn.dataset.target);
      const active = btn.classList.toggle("active");
      target.style.display = active ? "block" : "none";
    });
  });
</script>
