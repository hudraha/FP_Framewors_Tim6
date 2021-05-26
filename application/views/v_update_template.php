<?php foreach ($template as $key): ?>
<div class="card">
    <div class="card-header">
        <div class="card-block">
            <h4 class="sub-title">Update Konten</h4>
            <form action="<?php echo base_url('backend/tambah_template/store_data'); ?>" method="POST">
                <input type="hidden" name="ID_TEMPLATE" value ="<?php echo $key->ID_TEMPLATE ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="NAME" value ="<?php echo $key->NAME ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TYPE</label>
                    <div class="col-sm-10">
                        <select name="TYPE" class="form-control">
                            <option value="header"<?php echo $key->TYPE=="header"?"selected":"" ?>>Header</option>
                            <option value="body"<?php echo $key->TYPE=="body"?"selected":"" ?>>Body</option>
                            <option value="footer"<?php echo $key->TYPE=="footer"?"selected":"" ?>>Footer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LAYOUT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="LAYOUT" value ="<?php echo $key->LAYOUT ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PICTURE 1</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="PICT1" value ="<?php echo $key->PICT1 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PICTURE 2</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="PICT2" value ="<?php echo $key->PICT2 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TEXT 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="TEXT1" value ="<?php echo $key->TEXT1 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TEXT 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="TEXT2" value ="<?php echo $key->TEXT2 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN1" value ="<?php echo $key->BTN1 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN2" value ="<?php echo $key->BTN2 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON NAME 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN_NAME1" value ="<?php echo $key->BTN_NAME1 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON NAME 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN_NAME2" value ="<?php echo $key->BTN_NAME2 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="STATUS" value ="<?php echo $key->STATUS ?>">
                    </div>
                </div>
                <?php endforeach ?>
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </form>
        </div>
    </div>
</div>