<?php
include('../inc/pdo.php');
include('../inc/fonctions.php');
include('inc/request.php');

//Compte le nombre d'utilisateurs
$nomTable = 'v5_users';
$nbreUsers = compteItem($nomTable);
//Compte le nombre de vaccins
$nomTable = 'v5_vaccin';
$nbreVaccins = compteItem($nomTable);

include('inc/header.php');
include('inc/sidebar.php');
?>
<!-- Breadcrumb  -->
<section class="content-header">
 <h1>
   Home
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
 </ol>
</section>
       <!-- /.box-body -->
  <section class="content">
    <!-- Default box -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
         <!-- small box nombre d'utilisateurs-->
         <div class="small-box bg-yellow">
           <div class="inner">
             <h3><?php echo $nbreUsers;?></h3>
             <p>Nombre d'utilisateurs</p>
           </div>
           <div class="icon">
             <i class="ion ion-person-add"></i>
           </div>
       </div>
     </div>
     <div class="col-lg-3 col-xs-6">
        <!-- small box nombre de vaccins-->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $nbreVaccins;?></h3>
            <p>Nombre de vaccins</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
  </div>
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('inc/footer.php');
