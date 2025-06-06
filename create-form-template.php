<?php include("header.php") ?>
<style>
    
.form-builder-overlay {
    z-index: 1000;
}
.form-builder-dialog.data-dialog {
    z-index: 1000;
}
.form-builder-dialog {
z-index: 9999;
}
</style>
<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Create Form Template</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Form Template</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <!-- <div class="mb-2 me-2" id="addStickerBtn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#createfolderModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Template
                </a>
            </div>
            
            <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#createfolderModalCategory"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Category
                </a>
            </div> -->
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="card tablemaincard_nopaddingleftright">
        <div class="innerFormWrapper">
        <form action="#">
            <div class="row">
                <div class="col-lg-12">
                    <div class="builderContainer">
                        <div class="setDataWrap mb-3 hidden">
                            <button id="getXML" type="button" class="btn btn-primary">Get XML Data</button>
                            <button id="getJSON" type="button" class="btn btn-primary">Get JSON Data</button>
                            <button id="getJS" type="button" class="btn btn-primary">Get JS Data</button>
                        </div>
                        <div id="build-wrap" class="border"></div>
                    </div>

                    
                </div>
            </div>

            <div class="form-actionsbtns">
                <button type="button" id="frmb-1681279599896-clear-action" class="canvascancel_button commonCanvas_buttonFooter">Clear</button>
                <button id="previewForm" type="button" class="btn btn formpreview_button commonCanvas_buttonFooter" data-bs-toggle="modal" data-bs-target="#previewModal">
                    <iconify-icon icon="simple-line-icons:eye"></iconify-icon> Preview Form
                </button>
                <button type="submit" id="frmb-1681279599896-save-action" class="btn btn-primary canvasSubmit_button commonCanvas_buttonFooter">
                    <div class="buttontext">Submit</div>
                </button>
            </div>
        </form>
        </div>
        

    </div>

</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Form Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="preview-form"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

<script>
    jQuery(function ($) {
        var fbEditor = document.getElementById('build-wrap');
        
        // Ensure the container exists before initializing formBuilder
        if (fbEditor) {
            var formBuilder = $(fbEditor).formBuilder({
                disableFields: ['autocomplete', 'button', 'paragraph', 'hidden']
            });
        
            document.getElementById('getXML')?.addEventListener('click', function () {
                alert(formBuilder.actions.getData('xml'));
            });
            document.getElementById('getJSON')?.addEventListener('click', function () {
                alert(formBuilder.actions.getData('json'));
            });
            document.getElementById('getJS')?.addEventListener('click', function () {
                alert('Check console');
                console.log(formBuilder.actions.getData());
            });

            document.getElementById('previewForm')?.addEventListener('click', function () {
                var formData = formBuilder.actions.getData('json');
                previewForm(formData);
            });

            function previewForm(formData) {
                if (formData) {
                    var formRenderOpts = { formData };
                    $('#preview-form').formRender(formRenderOpts);
                }
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formFieldsList = document.querySelectorAll('#formfields__list li');
        const noFormCreateBox = document.querySelector('.whennoform_create');

        if (formFieldsList.length > 0 && noFormCreateBox) {
            formFieldsList.forEach(item => {
                item.addEventListener('click', function () {
                    noFormCreateBox.style.display = 'none';
                });
            });
        }
    });
</script>


    <!-- button sybmit loader js start -->
 <script>
  document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.canvasSubmit_button').forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default form submission or link redirection
      
      // Show loading dots
      button.classList.add('btn-loading');
      button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
      
      // Simulate a delay before redirection
      setTimeout(function() {
        window.location.href = 'all-forms.php'; // Change this to your desired URL
      }, 3000); // Change the delay time as needed (3000ms = 3 seconds)
    });
  });
});
 </script>
 <!-- button sybmit loader js end -->



