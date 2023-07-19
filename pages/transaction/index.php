<div class="container-main">
    <div class="main_content_box">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Product List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (<?php echo count($transactions); ?>)
                    </h1>
                </div>
            </div>
            <div class="header_fd">
                <div class="batch_h">
                    <div class="batch_h_b">
                        <select name="batch" id="batch_s" class="batch_s">
                            <option value="batch" disabled selected>Select Vendor</option>
                            <?php foreach ($filters as $filter) : ?>
                                <option value=""><?php echo $filter['nama_vendor'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="box_export_add-h">
                    <div class="add_menu">
                        <a href="index.php?nav=transaction&transactionSub=add">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-regular fa-square-plus"></i> Add</button>
                        </a>
                    </div>
                    <div class="export_menu">
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-export"></i> Export</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttom_box_content">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" name="sample" id="check_all" class="check_all" onchange="checkAll(this)"></th>
                        <th scope="col">NAME</th>
                        <th scope="col">VENDOR</th>
                        <th scope="col">ITEM SIZE</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">STOCK</th>
                        <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                            <th scope="row"><input type="checkbox" name="sample[]" id="check_1" class="check_1"></th>
                            <td>
                                <h6><?php echo $transaction['nama_barang'] ?></h6>
                            </td>
                            <td>
                                <h6><?php echo $transaction['nama_vendor'] ?></h6>
                            </td>
                            <td>
                                <h6><?php echo $transaction['ukuran'] ?></h6>
                            </td>
                            <td>
                                <h6><?php echo $transaction['kategori'] ?></h6>
                            </td>
                            <td>
                                <div class="box_img_i">
                                    <img src="../Inventory/assets/img/<?php echo $transaction['gambar'] ?>" alt="..." class="img-thumbnail">
                                </div>
                            </td>
                            <td>
                                <h6><?php echo $transaction['harga'] ?></h6>
                            </td>
                            <td>
                                <h6><?php echo $transaction['stock'] ?></h6>
                            </td>
                            <td>
                                <div class="box_all_crud">
                                    <div class="edit_menu">
                                        <a href="index.php?nav=transaction&transactionSub=update&id=<?php echo $transaction['id_barang']; ?>">
                                            <button type="button" class="btn btn-success">EDIT</button>
                                        </a>
                                    </div>
                                    <div class="delete_menu">
                                        <a href="index.php?nav=transaction&transactionSub=delete&id=<?php echo $transaction['id_barang']; ?>">
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>