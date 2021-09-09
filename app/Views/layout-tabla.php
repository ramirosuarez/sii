<!-- Se extiende de la raiz del archivo layout-main (es el archivo principal) -->
<?= $this->extend('layout-main') ?>
<?= $this->section('content') ?>
<main>
  <div class="container-fluid px-4">
    <?= $this->renderSection('content') ?>
  </div>
</main>
<?= $this->endSection() ?>