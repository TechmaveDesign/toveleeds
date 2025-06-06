<?php include("header.php") ?>


<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Training Setup</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Training Setup</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" >
                <a href="training-content-setup.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Content
                </a>
            </div>

            <!-- <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Assessment Equipments
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
    <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Training Title</th>
                            <th>Equipment Name</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               1
                            </td>
                            <td>Agricultural Tractor Training Session</td>
                            <td>Agricultural Tractor</td>
                            <td>27 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="training-view-and-update.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="ion:eye-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
                </div>

    </div>

</div>

<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Equipment</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/maintenance.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div>
                            
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save 
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="EditStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Equipment</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/maintenance.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Equipment Name" class="form-control" value="Agricultural Tractor Operator">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Update
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add template -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="users.html" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->

<?php include("footer.php") ?>
