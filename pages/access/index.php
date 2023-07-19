<div class="container-main">
    <div class="main_content_box vendorGap">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Access List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (<?php echo count($accesses) ?>)
                    </h1>
                </div>
            </div>
            <div class="box_export_add-h">
                <div class="add_menu">
                    <a href="index.php?nav=access&accSub=add">
                        <button type="button" class="btn btn-primary">
                            <i class="fa-regular fa-square-plus"></i> Add</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="button_box_card_box">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>#</td>
                        <td>NAMES</td>
                        <td>FEATURE</td>
                        <td>EDIT</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($accesses as $access) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $access["role"]; ?></td>
                            <td><?php echo $access["feature"]; ?></td>
                            <td>
                                <div class="box_all_crud">
                                    <div class="edit_menu">
                                        <!-- onclick=showEdit() -->
                                        <a href="index.php?nav=access&accSub=update&id=<?php echo $access['id']; ?>">
                                            <button type="button" class="btn btn-success">EDIT</button>
                                        </a>
                                    </div>
                                    <div class="delete_menu">
                                        <a href="index.php?nav=access&accSub=delete&id=<?php echo $access['id']; ?>">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>