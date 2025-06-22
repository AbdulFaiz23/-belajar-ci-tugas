<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="v_kategori">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav --> 
        
      
        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="v_produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->
        <?php
        }
        ?>


   
    <!-- Kategori (Dropdown) -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-toggle="collapse" href="#categories-collapse">
        <i class="bi bi-tags"></i>
        <span>Kategori</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <div id="categories-collapse" class="collapse" data-bs-parent="#sidebar-nav">
        <ul class="nav-content">
          <li>
            <a href="/snack">
              <i class="bi bi-circle-fill text-warning"></i>
              <span>Snack</span>
            </a>
          </li>
          <li>
            <a href="/makanan">
              <i class="bi bi-circle-fill text-danger"></i>
              <span>Makanan</span>
            </a>
          </li>
          <li>
            <a href="/minuman">
              <i class="bi bi-circle-fill text-info"></i>
              <span>Minuman</span>
            </a>
          </li>
          <li>
            <a href="/bumbu-dapur">
              <i class="bi bi-circle-fill text-success"></i>
              <span>Bumbu Dapur</span>
            </a>
          </li>
          <li>
            <a href="/alat-tulis">
              <i class="bi bi-circle-fill text-primary"></i>
              <span>Alat Tulis</span>
            </a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Menu lainnya... -->
  </ul>
</aside>

<style>
  /* Animasi dropdown */
  .nav-content {
    transition: all 0.3s ease;
  }
  
  /* Warna ikon kategori */
  .bi-circle-fill {
    font-size: 0.5rem;
    vertical-align: middle;
  }
</style><!-- End Sidebar -->
