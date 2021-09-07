<?php
$sayfa = "iletişim formu";
include('inc/index.php');
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"> Dashboard</li>
            <li class="breadcrumb-item active"><?= $sayfa ?></li>
        </ol>

        <div class="card mb-4">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Ad</th>
                        <th>Email</th>
                        <th>Mesaj</th>
                        <th></th>

                    </tr>

                    </thead>
                    <tbody>
                    <?php
                    $sorgu =$baglanti->prepare("select * from iltisim");
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
