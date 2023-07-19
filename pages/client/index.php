<div class="container-main">
    <div class="main_content_box vendorGap">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Client List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (<?php echo count($clients) ?>)
                    </h1>
                </div>
            </div>
            <div class="box_export_add-h">
                <div class="add_menu">
                    <a href="index.php?nav=client&clientSub=add">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_addVendor"> <i class="fa-regular fa-square-plus"></i> Add</button>
                    </a>
                </div>
                <div class="export_menu">
                    <a href="pages/client/export.php" target="_blank">
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-export"></i> Export</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="button_box_card_box">
            <div class="cardBoxbox">
                <?php foreach ($clients as $client) : ?>
                    <div class="card" style="width: 18rem;">
                        <div class="boxImgVendor">
                            <img src="../Inventory/assets/img/<?php echo $client['gambar'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body flex-sm-column d-flex">
                            <div class="d-flex justify-content-center">
                                <h5 class="card-title"><?php echo $client['nama']; ?></h5>
                            </div>
                            <div class="d-flex flex-sm-column">
                                <div class="row ">
                                    <p class="col-4">Address: </p>
                                    <p class="col-8"><?php echo $client['alamat']; ?></p>
                                </div>
                                <div class="row">
                                    <p class="col-4">Contact: </p>
                                    <p class="col-8"><?php echo $client['kontak']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-evenly mb-3">
                            <a href="index.php?nav=client&clientSub=update&id=<?php echo $client['id']; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">EDIT</a>
                            <a href="index.php?nav=client&clientSub=delete&id=<?php echo $client['id']; ?>" class="btn btn-danger">DELETE</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>