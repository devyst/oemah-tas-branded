<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM produk");
session_start();
if(isset($_SESSION['email'])) {
    ?>
<html>
    <head>
        <title>Product Management</title>
        <link href="assets/img/monopis.png" rel="icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        
    </head>
    <body>
        <div class="contaianer">

            <div class="row text-center">
                <div class="col-md-2 text-center">
                    <a href="form_upload.php" class="btn btn-primary">Upload Produk</a>
                    <a href="./index.php" class="btn btn-primary">Back to Home</a>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>

            <div class="row">
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
 
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>

                <div class="col-md-2 text-center">
                    <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>
                <div class="col-md-2 text-center">
                <?php
                    $row=mysqli_fetch_array($query);
                    if (empty($row)){
                        echo "";
                    } else {
                    ?>
                        <p>
                            <a>           
                                <h4><?php echo $row['nama_produk'];?></h4>
                                <h6 class="text-warning"><?php echo $row['status_produk'];?></h6>        
                                <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" width="200px" height="200px"/>
                                <p class="text-info"><?php echo $row['ukuran']; ?></p>
                                <i class="bi bi-cart2"></i> Rp.<?php echo $row['harga'];?>
                                <p><?php echo $row['keterangan']; ?></p>

                                <p>
                                    <a href="edit_gambar.php?id_produk=<?php echo $row['id_produk']; ?>" class='btn btn-warning'>Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmation(<?php echo $row['id_produk']; ?>)">Delete</a>
                                </p>
                            </a>
                        </p>                
                
                <?php
                }
                ?>
                </div>           
            </div>
            
        </div> 
    </body>
</html>
    <?php
    ;
    } else {
        echo '<script> window.location.replace("./login.php")';
    }
    ?>

<script type="text/javascript">
    function confirmation(id_produk) {
        if (confirm('Apakah anda yakin akan menghapus data katalog produk ini?')){
            window.location.href = 'delete_gambar.php?id_produk='+id_produk;
        }
    }

</script>