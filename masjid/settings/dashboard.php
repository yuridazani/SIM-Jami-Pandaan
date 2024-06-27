<?php 
    
    include('../scripts/view_settings.php'); 
    include('slide1_modal.php'); 
    include('slide2_modal.php');     
    include('upload_modal.php');

    $url = "http://" .$_SERVER["HTTP_HOST"] . "/imasjid" ;

?>
<form method="POST" id="setting_form" enctype="multipart/form-data">
    <body>
        <nav class="navbar navbar-dark sticky-top bg-pastel flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo $url ?>">iMasjid</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <!--<a class="nav-link" href="#">Sign out</a>-->
                    <button type="button" class="btn btn-md btn-pastel" id="save_setting"><i class="fas fa-edit"></i> Update Data</button>            
                </li>
            </ul>
         
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3" id="list-tab" role="tablist">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link active" id="list-pengaturan-list" data-toggle="list" href="#list-pengaturan" role="tab" aria-controls="pengaturan">                                    
                                    <i class="fas fa-tools"></i> Pengaturan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-notifikasi-list" data-toggle="list" href="#list-notifikasi" role="tab" aria-controls="notifikasi">
                                    <i class="far fa-bell"></i> Notifikasi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-teks-list" data-toggle="list" href="#list-teks" role="tab" aria-controls="teks">
                                    <i class="far fa-file-alt"></i> Teks Berjalan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-slide1-list" data-toggle="list" href="#list-slide1" role="tab" aria-controls="slide1">
                                    <i class="far fa-file-powerpoint"></i> Slide-1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-slide2-list" data-toggle="list" href="#list-slide2" role="tab" aria-controls="slide2">
                                    <i class="far fa-file-powerpoint"></i> Slide-2
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-upload-list" data-toggle="list" href="#list-upload" role="tab" aria-controls="upload">
                                <i class="fas fa-upload"></i> Upload Gambar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about">
                                    <i class="fab fa-slack"></i> Tentang Aplikasi
                                </a>
                            </li>
          
                        </ul>
                    </div>
                </nav> <!-- End Sidebar -->


                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="tab-content" id="nav-tabContent">
          
                    <div class="tab-pane fade show active" id="list-pengaturan" role="tabpanel" aria-labelledby="list-pengaturan-list">                        
                        <?php include("pengaturan.php") ?>      
                    </div>

                    <div class="tab-pane fade" id="list-notifikasi" role="tabpanel" aria-labelledby="list-notifikasi-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Adzan & Iqomah</h1>                            
                        </div> 
                        <?php include("notifikasi.php") ?>       
                    </div> 

                    <div class="tab-pane fade" id="list-teks" role="tabpanel" aria-labelledby="list-teks-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Teks Berjalan</h1>                            
                        </div>
                        <?php include("teks_berjalan.php") ?>      
                    </div>

                    <div class="tab-pane fade" id="list-slide1" role="tabpanel" aria-labelledby="list-slide1-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Data Slide-1</h1> 
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-md btn-outline-pastel" id="add_slide">Tambah Slide</button> 
                                </div>          
                            </div>                    
                        </div>  
                        <div class="col-md-12 order-md-1">                            
                            <div class="form-group">  
                                <?php include('view_slides1.php'); ?>
                            </div>
                        </div>     
                    </div> 

                    <div class="tab-pane fade" id="list-slide2" role="tabpanel" aria-labelledby="list-slide2-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Data Slide-2</h1> 
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-md btn-outline-pastel" id="add_slide2">Tambah Slide</button> 
                                </div>          
                            </div>                           
                        </div> 
                        
                        <div class="col-md-12 order-md-1">                            
                            <div class="form-group">  
                                <?php include('view_slides2.php'); ?>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="tab-pane fade" id="list-upload" role="tabpanel" aria-labelledby="list-upload-list">                        
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">                           
                            <h1 class="h2">Direktori Gambar Slide-2</h1> 
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-md btn-outline-pastel" id="add_image">Upload Gambar</button> 
                                </div>          
                            </div>  
                                                                    
                        </div>  
                        <?php include('view_images2.php'); ?>                
                    </div>
                    
                    <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                                      
                        </div>
                        <?php include('about.php'); ?>     
                    </div> 
                
                </div>  
                </main>

            </div>
        </div>
    </body>
</form>