<?= $this->extend('layout') ?> 
<?= $this->section('content') ?> 

<div class="container py-5">
  <h2 class="text-center text-primary mb-5"><?= esc($kategori) ?></h2>

  <div class="row justify-content-center">
    <?php foreach ($items as $item): ?>
      <div class="col-md-4 col-lg-3 mb-4">
        <a href="/splash" class="text-decoration-none">
          <div class="card shadow-sm border-0 h-100">
            <img 
              src="https://source.unsplash.com/300x200/?<?= urlencode($item) ?>" 
              alt="<?= esc($item) ?>" 
              class="card-img-top" 
              style="height: 180px; object-fit: cover;">
            <div class="card-body text-center">
              <h5 class="card-title mb-0"><?= esc($item) ?></h5>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->endSection() ?> 
