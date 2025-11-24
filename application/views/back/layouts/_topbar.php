<ul class="navbar-nav ml-auto">

  <!-- ✅ Tambahan tombol dark mode -->
          <button id="darkModeToggle" class="btn btn-sm btn-outline-secondary ml-auto">
            🌙 Dark Mode
          </button>
  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="text-gray-800 font-weight-bold">
        <?= ucfirst($this->session->userdata('first_name')) . ' ' . ucfirst($this->session->userdata('last_name')) ?>
      </span>
      <i class="fas fa-caret-down ml-1 text-gray-500"></i>
    </a>

    <!-- Dropdown Menu -->
    <div class="dropdown-menu dropdown-menu-right shadow-lg border-0 mt-2 animated--fade-in"
         aria-labelledby="userDropdown" style="min-width: 200px; border-radius: 12px;">
      
      <div class="dropdown-header text-center py-3">
        <strong><?= ucfirst($this->session->userdata('first_name')) ?></strong><br>
        <small class="text-muted"><?= $this->session->userdata('email') ?></small>
      </div>
      <div class="dropdown-divider"></div>

      <a class="dropdown-item d-flex align-items-center" 
         href="<?= base_url('auth/edit_user/' . $this->session->userdata('id')) ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
        <span>Profile</span>
      </a>

      <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
        <span>Logout</span>
      </a>
    </div>
  </li>
</ul>

<style>

  .dropdown-menu .dropdown-item:hover {
    background-color: #f8f9fc;
    border-radius: 8px;
  }

  .dropdown-header {
    background-color: #f1f5f9;
    border-radius: 8px;
  }

   /* 🌙 Tombol Dark Mode Styling */
  #darkModeToggle {
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 600;
    font-size: 0.85rem;
    padding: 6px 14px;
    border-radius: 25px;
    transition: all 0.3s ease;
    color: #ffffff;
    border-color: #ffffff80;
    background: transparent;
  }

  #darkModeToggle:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: #ffffff;
    color: #fff;
    transform: scale(1.05);
  }

  /* 🌞 Mode terang */
  body:not(.dark-mode) #darkModeToggle {
    color: #343a40;
    border-color: #343a40;
  }

  body:not(.dark-mode) #darkModeToggle:hover {
    background: rgba(0, 0, 0, 0.1);
    color: #000;
  }

  /* 🌗 Transisi halus */
  body,
  .navbar,
  .sidebar,
  .card,
  .table,
  .modal-content {
    transition: background-color 0.3s ease, color 0.3s ease;
  }
</style>
