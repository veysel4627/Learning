  <?php include 'header.php';





  ?>

  <head>
   <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
 </head>
 <!-- page content -->
 <div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü Ekle <small>

             
            </small></h2>
           
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />


            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menü ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="menu_ad" placeholder="Menü Adını Giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Detay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="ckeditor" id="editor1" name="menu_detay"></textarea>
                </div>
                <!--Ck editor-->
                <script>
                  ClassicEditor
                  .create( document.querySelector( '#editor1' ) )
                  .catch( error => {
                    console.error( error );
                  } );
                </script>
                <!--Ck editor-->
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Url <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="menu_url" placeholder="Menü Url Giriniz..." class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="menu_sira" placeholder="Menü Sırasını Giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div> 

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_durum" required>  
                  <option value="1">Aktif</option>



                  <option value="0">Pasif</option>
                </select>
              </div>
            </div>
            


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="menuekle" class="btn btn-success">Kaydet</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
<?php include 'footer.php'; ?>