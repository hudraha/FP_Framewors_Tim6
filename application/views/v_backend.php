<?php 
    $button_header = "";
    $button_footer = "";

    if (!empty($data_header)) {
        $button_header = "hidden";
    }
    if (!empty($data_footer)) {
        $button_footer = "hidden";
    }
 ?>

<div class="card">
    <div class="card-header">
        <h5>Tabel Header</h5>
        <span>Berfungsi untuk melihat data yang akan ditampilkan di website</span>
        <div class="card-header-right">    
            <ul>
                <a class="btn btn-outline-dark px-3 py-1" href="<?php echo base_url('backend/tambah_template');?>"<?php echo $button_header; ?>><small>Tambah</small></a>
                <i class="icofont icofont-minus minimize-card"></i>
            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Layout</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a=1; foreach ($data_header as $key): ?>
                    <tr>
                        <th scope="row"><?php echo $a++; ?></th>
                        <td><?php echo $key->NAME ?></td>
                        <td><?php echo $key->LAYOUT ?></td>
                        <td><?php echo $key->STATUS==1?"On":"Off" ?></td>
                        <td><a class="btn btn-outline-success px-3 py-1" href="<?php echo base_url('backend/tambah_template/update_data'); echo "/".$key->ID_TEMPLATE;?>">Update</a>    <a class="btn btn-outline-danger px-3 py-1" href="<?php echo base_url('backend/tambah_template/delete_data'); echo "/".$key->ID_TEMPLATE;?>">Delete</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>Tabel Body</h5>
        <div class="card-header-right">    
            <ul>
                <a class="btn btn-outline-dark px-3 py-1" href="<?php echo base_url('backend/tambah_template');?>"><small>Tambah</small></a>
                <i class="icofont icofont-minus minimize-card"></i>
            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Layout</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a=1; foreach ($data_body as $key): ?>
                    <tr>
                        <th scope="row"><?php echo $a++; ?></th>
                        <td><?php echo $key->NAME ?></td>
                        <td><?php echo $key->LAYOUT ?></td>
                        <td><?php echo $key->STATUS==1?"On":"Off" ?></td>
                        <td><a class="btn btn-outline-success px-3 py-1" href="<?php echo base_url('backend/tambah_template/update_data'); echo "/".$key->ID_TEMPLATE;?>">Update</a>    <a class="btn btn-outline-danger px-3 py-1" href="<?php echo base_url('backend/tambah_template/delete_data'); echo "/".$key->ID_TEMPLATE;?>">Delete</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>Tabel Footer</h5>
        <div class="card-header-right">    
            <ul>
                <a class="btn btn-outline-dark px-3 py-1" href="<?php echo base_url('backend/tambah_template');?>"<?php echo $button_footer; ?>><small>Tambah</small></a>
                <i class="icofont icofont-minus minimize-card"></i>
            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Layout</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a=1; foreach ($data_footer as $key): ?>
                    <tr>
                        <th scope="row"><?php echo $a++; ?></th>
                        <td><?php echo $key->NAME ?></td>
                        <td><?php echo $key->LAYOUT ?></td>
                        <td><?php echo $key->STATUS==1?"On":"Off" ?></td>
                        <td><a class="btn btn-outline-success px-3 py-1" href="<?php echo base_url('backend/tambah_template/update_data'); echo "/".$key->ID_TEMPLATE;?>">Update</a>    <a class="btn btn-outline-danger px-3 py-1" href="<?php echo base_url('backend/tambah_template/delete_data'); echo "/".$key->ID_TEMPLATE;?>">Delete</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>