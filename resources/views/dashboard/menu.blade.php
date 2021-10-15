<!DOCTYPE html>
<html lang="en">
    <body>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
              <a href="dashboard" class="list-group-item <?php if(!empty($menu) && $menu == "dashboard") echo "active"; ?>">Beranda</a>
              <a href="open" class="list-group-item <?php if(!empty($menu) && $menu == "open") echo "active"; ?>">Tiket Open <span class="badge">3</span></a>
              <a href="pending" class="list-group-item <?php if(!empty($menu) && $menu == "pending") echo "active"; ?>">Tiket Pending <span class="badge">10</span></a>
              <a href="close" class="list-group-item <?php if(!empty($menu) && $menu == "close") echo "active"; ?>">Tiket Close <span class="badge">212</span></a>
            </div>
            <p class="text-muted">Insiden</p>
            <div class="list-group">
              <a href="insident" class="list-group-item <?php if(!empty($menu) && $menu == "insiden") echo "active"; ?>">Daftar Insiden</a>
            </div>
            <p class="text-muted">Data Master</p>
            <div class="list-group">
              <a href="unit" class="list-group-item <?php if(!empty($menu) && $menu == "unit") echo "active"; ?>">Master Bagian</a>
              <a href="subjek" class="list-group-item <?php if(!empty($menu) && $menu == "subjek") echo "active"; ?>">Master Subjek</a>
              <a href="teknisi" class="list-group-item <?php if(!empty($menu) && $menu == "teknisi") echo "active"; ?>">Master Teknisi</a>
            </div>
        </div><!--/.sidebar-offcanvas-->
    </body>
</html>