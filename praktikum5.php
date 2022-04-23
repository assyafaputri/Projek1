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
              <?php

class Dispenser{
  protected $volume;
  protected $hargapergelas;
  private $volumegelas;
  public $namaminuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $namaminuman, $volumegelas, $harga)
  {
    $this->uang = $uang;
    $this->namaminuman = $namaminuman;
    $this->hargapergelas = $harga;
    $this->volumegelas = $volumegelas;
  }

  function transaksi($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargapergelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumegelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h2>'. 'Silahkan dipilih '.'</h2>';
    echo 'Nama Minuman : ' . $this->namaminuman . "<br>";
    echo 'Uang Saat ini : ' . $this->uang . "<br>";
    echo 'kapasistas (volume) Dispenser : ' . $this->volume . 'ml' . "<br>";
    echo 'Harga Pergelas Minuman : ' . $this->hargapergelas . "<br>";
    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml' . "<br>";
    echo 'Sisa uang: ' . $this->transaksi($this->uang);
    echo '<hr>';
    echo '<h3>'. 'selamat menikmati '.'</h3>';
  }
}

$minuman = new Minuman(20000, 'Sop buah', 4000, 6000);
$minuman->transaksi($minuman->uang);
$minuman->volume(6000);
$minuman->cetak();
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