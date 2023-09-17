<style>
.nav-tabs .nav-link {
      border: 1px solid #eff2f5;
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
      background: #f9f9f9;
      color: #a8a8a8;
      margin: 5px 2px 0 2px;
}

#novapage-alert{
      position: absolute;
      left: 0;
      right: 0;
      top:0;
      margin: 0 20px;
}

.style-alert-success{
      color: #23923d;
      border-color: #23923d;
      background: #e8f9ec;
}
.style-alert-danger{
      color: #dc3545;
      border-color: #dc3545;
      background: #ffe3e5;
}
.tab-content {
      padding: 0 20px 20px 20px;
      border-left: 1px solid #dee2e6;
      border-right: 1px solid #dee2e6;
      border-bottom: 1px solid #dee2e6;
}
.logo-upload-preview{
      width: 250px;
      padding: 10px; 
      margin: 10px 0;
}
</style> 
<div class="card" id="novapage-images">
    <div class="card-header bg-secondary">
        <h3 class="card-title py-1">Image</h3>
    </div> 
        <div class="card-body">
            <?php      
            if($this->session->flashdata('alert')!=null) {?>
                  <?php $message = $this->session->flashdata('alert');?>
                  <?php if(isset($message['success'])) { ?>
                        <div id="novapage-alert" class="alert style-alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                              </button>
                        <?php echo $message['success'];?>
                        </div>
                  <?php } ?>
                  <?php if(isset($message['fail'])) { ?>
                        <div id="novapage-alert"  class="alert style-alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                              </button>
                        <?php echo $message['fail'];?>
                        </div>
                  <?php } ?>
            <?php
            }
            ?>
            <ul class="nav nav-tabs"role="tablist"> 
              <li class="nav-item">
                <a class="nav-link active" id="novapage-images-home-tab" data-toggle="pill" href="#novapage-images-home" role="tab"
                  aria-controls="content-home" aria-selected="true">Images</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" id="novapage-images-form-tab" data-toggle="pill" href="#novapage-images-form" role="tab"
                 aria-controls="content" aria-selected="false">Form Upload</a>
              </li>  
            </ul>   
            <div class="tab-content">
              <div class="tab-pane fade show active" id="novapage-images-home">  
                    <?php include 'view_tab_images.php';?>
              </div>
              <div class="tab-pane fade" id="novapage-images-form">  
                    <?php include 'view_tab_form.php';?>
              </div>   
            </div>

        </div>
    </div>
</div>