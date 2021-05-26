<div class="card">
    <div class="card-header">
        <div class="card-block">
            <h4 class="sub-title">Tambah Konten</h4>
            <form action="<?php echo base_url('backend/tambah_template'); ?>" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="NAME">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TYPE</label>
                    <div class="col-sm-10">
                        <select name="TYPE" class="form-control">
                            <option value="header">Header</option>
                            <option value="body" selected>Body</option>
                            <option value="footer">Footer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LAYOUT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="LAYOUT">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PICTURE 1</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="PICT1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PICTURE 2</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="PICT2">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TEXT 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="TEXT1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">TEXT 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="TEXT2">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN2">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON NAME 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN_NAME1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">BUTTON NAME 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="BTN_NAME2">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="STATUS">
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right">Submit</button>
            </form>
        </div>
    </div>
</div>