<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                  <h1>Persegi Panjang</h1>
              <?php
    class persegiPanjang{
        private $panjang;
        private $lebar;
        function __construct($p, $l)
        {
            $this->panjang = $p;
            $this->lebar = $l;
        }
        function getLuas()
        {
            return $this->panjang * $this->lebar;
        }
        function getKeliling()
        {
            return 2 * ($this->panjang + $this->lebar);
        }
    }
    $kotak1 = new persegiPanjang(2, 4);
$kotak2 = new persegiPanjang(3, 6);

echo "<br>Luas Lingkaran I : ".$kotak1->getLuas();
echo "<br>Luas Lingkaran II : ".$kotak2->getLuas();

echo "<br>Keliling Lingkaran I : ".$kotak1->getKeliling();
echo "<br>Keliling Lingkaran I : ".$kotak2->getKeliling();
?>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once "footer.php";
?>