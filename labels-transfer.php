<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Label's Transfer</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Label's Transfer</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Transfer Sticker
                </a>
            </div>

            <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Transfer Tag
                </a>
            </div>


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
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false" id="stickerTab"> Sticker List
                </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                    Tag List
                </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                    <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Transfer ID</th>
                                <th>Region</th>
                                <th>Sticker Type</th>
                                <th>Transfer Qty</th>
                                <th>Transfer Range</th>
                                <th>Date & Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#TF0001</td>
                            <td>Gujarat</td>
                            <td>Small</td>
                            <td>800</td>
                            <td>S.Stk2500000 - S.Stk2500079</td>
                            <td>10/02/2024 15:15</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched" selected>Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editStickerModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0002</td>
                            <td>Maharashtra</td>
                            <td>Large</td>
                            <td>900</td>
                            <td>L.Stk2500080 - L.Stk2500179</td>
                            <td>11/02/2024 14:30</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered" selected>Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editStickerModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0003</td>
                            <td>Rajasthan</td>
                            <td>Small</td>
                            <td>750</td>
                            <td>S.Stk2500180 - S.Stk2500259</td>
                            <td>12/02/2024 16:00</td>
                            <td>
                                <select class="form-control select2">
                                    <option value=""disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received" selected>Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editStickerModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0004</td>
                            <td>Punjab</td>
                            <td>Large</td>
                            <td>820</td>
                            <td>L.Stk2500260 - L.Stk2500339</td>
                            <td>13/02/2024 17:45</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched" selected>Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editStickerModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>


                            

                        </tbody>

                    </table>
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Transfer ID</th>
                                <th>Region</th>
                                <th>Tag No.</th>
                                <th>Transfer Qty</th>
                                <th>Transfer Range</th>
                                <th>Date & Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#TF0001</td>
                            <td>Gujarat</td>
                            <td>039907</td>
                            <td>100</td>
                            <td>039907 - 040006</td>
                            <td>10/02/2024 15:15</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched" selected>Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0002</td>
                            <td>Maharashtra</td>
                            <td>040007</td>
                            <td>100</td>
                            <td>040007 - 040106</td>
                            <td>11/02/2024 14:30</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered" selected>Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0003</td>
                            <td>Rajasthan</td>
                            <td>040107</td>
                            <td>100</td>
                            <td>040107 - 040206</td>
                            <td>12/02/2024 16:00</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received" selected>Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0004</td>
                            <td>Punjab</td>
                            <td>040207</td>
                            <td>100</td>
                            <td>040207 - 040306</td>
                            <td>13/02/2024 17:45</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered" selected>Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>#TF0005</td>
                            <td>Karnataka</td>
                            <td>040307</td>
                            <td>100</td>
                            <td>040307 - 040406</td>
                            <td>14/02/2024 18:30</td>
                            <td>
                                <select class="form-control select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received" selected>Received</option>
                                </select>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="Edit" href="">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="mage:edit"></iconify-icon></span></span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" data-id="" title="Delete" href="#">
                                        <span class="icon"><span class="feather-icon"><iconify-icon icon="fluent:delete-24-regular"></iconify-icon></span></span>
                                    </a>
                                </div>
                            </td>
                        </tr>


                            

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Transfer Sticker modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transfer Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Sticker Type</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select Type</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
           
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty." class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control">
                            </div>
                        </div>
                     

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Transfer 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>



<!-- Edit Transfer Sticker Modal-->
<div class="modal fade custombottm_modalStyle" id="editStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sticker Transfer</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <img src="assets/aditya_assests/sticker_icon.png" alt="Sticker Icon">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Sticker Type</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select Type</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
           
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty." class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                         
                            <div class="form-group">
                                <label class="form-label">Status:</label>
                                <select class="form-control select2">
                                    <option value="" selected >Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </div>
                        </div> -->

                       
                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Update & Transfer 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

<!-- Transfer Tag Modal -->
<div class="modal fade custombottm_modalStyle" id="addTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transfer Tag</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Tag No.</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select a Tag ID</option>
                                    <option value="039907">039907</option>
                                    <option value="040307">040307</option>
                                    <option value="040007">040007</option>
                                    <option value="040207">040207</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Tag Qty</label>
                                <input type="text" placeholder="Enter Qty" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control largeinp_height">
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Status:</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="" selected >Choose Status</option>
                                    <option value="Dispatched">Dispatched</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Received">Received</option>
                                </select>
                            </div>
                        </div> -->
                       

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Transfer 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>
<!-- Edit Transfer Tag Modal-->
<div class="modal fade custombottm_modalStyle" id="editTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tag Transfer</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <img src="assets/aditya_assests/sticker_icon.png" alt="Sticker Icon">
                            </div>
                        </div>

                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Tag No.</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select a Tag ID</option>
                                    <option value="039907">039907</option>
                                    <option value="040307">040307</option>
                                    <option value="040007">040007</option>
                                    <option value="040207">040207</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Tag Qty</label>
                                <input type="text" placeholder="Enter Qty" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Available End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control largeinp_height">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Update & Transfer 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

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

<!-- filepond for videos uploader -->
<link href="assets/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="assets/customplugins/file-uploader/filepond.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="assets/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepond video js -->
    <!-- <script>
        // Register the plugins
        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginMediaPreview
        );
        // Create a FilePond instance
        const inputElement = document.querySelector('#videoInput');
        const pond = FilePond.create(inputElement, {
            acceptedFileTypes: ['video/*'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                resolve(type);
            })
        });
        // Optional: FilePond configuration
        FilePond.setOptions({
            allowMultiple: true,
            maxFiles: 10
        });
        // Handle video previews
        pond.on('addfile', (error, file) => {
            if (error) {
                console.error('Error adding file', error);
                return;
            }
        });
    </script> -->
<!-- filepond video js end -->

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#stickerImageInput'), {
        acceptedFileTypes: ['image/*', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], // Accept images, PDF, DOC, and DOCX
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>



<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#tagImageInput'), {
        acceptedFileTypes: ['image/*', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], // Accept images, PDF, DOC, and DOCX
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->

<!-- button submit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                const form = button.closest('form');
                const inputField = form.querySelector(
                    'input[type="text"]'); // Select the input field
                const errorMessage = form.querySelector(
                    '.error-message'); // Check for existing error message
                if (!inputField.value.trim()) {
                    // Add a red border to highlight the empty input
                    inputField.classList.add('input-error');
                    inputField.focus();
                    // Show error message
                    if (!errorMessage) {
                        const errorElement = document.createElement('div');
                        errorElement.className = 'error-message';
                        errorElement.textContent = 'Please enter Template Title';
                        inputField.insertAdjacentElement('afterend', errorElement);
                    }
                    // Remove error when user starts typing
                    inputField.addEventListener('input', function() {
                        if (inputField.value.trim()) {
                            inputField.classList.remove('input-error');
                            const existingError = form.querySelector('.error-message');
                            if (existingError) {
                                existingError.remove();
                            }
                        }
                    });
                    return;
                }
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
                // Simulate a delay before redirecting to the action page
                setTimeout(function() {
                    // Remove loading dots
                    button.classList.remove('btn-loading');
                    const loadingDots = button.querySelector('.loading-dots');
                    if (loadingDots) {
                        loadingDots.remove();
                    }
                    // Redirect to the form's action page
                    window.location.href = form.getAttribute('action');
                }, 2000); // Delay for 2 seconds (2000ms)
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const stickerBtn = document.getElementById("addStickerBtn");
        const tagBtn = document.getElementById("addTagBtn");
        const stickerTab = document.getElementById("stickerTab");
        const tagTab = document.getElementById("tagTab");

        function toggleButtons(event) {
            if (event.target === stickerTab) {
                stickerBtn.style.display = "block";
                tagBtn.style.display = "none";
            } else if (event.target === tagTab) {
                stickerBtn.style.display = "none";
                tagBtn.style.display = "block";
            }
        }

        stickerTab.addEventListener("click", toggleButtons);
        tagTab.addEventListener("click", toggleButtons);
    });
</script>
<!-- button submit loader js end -->

<!-- Delete SweetAlert2 -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            
            let stickerId = this.getAttribute("data-id"); 

            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform delete action here (e.g., AJAX request)
                    Swal.fire("Deleted!", "The sticker has been deleted.", "success");
                }
            });
        });
    });
});
</script>
