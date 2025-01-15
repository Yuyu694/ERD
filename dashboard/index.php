<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$nilai = mysqli_query($connection, "SELECT COUNT(*) FROM nilai");

$total_nilai = mysqli_fetch_array($nilai)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>