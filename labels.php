<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Label's</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Label's</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create Sticker
                </a>
            </div>

            <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Tag Series
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
                            <th>S.No.</th>
                            <th>Sticker Type</th>
                            <th>Sticker Qty</th>
                            <th>Range</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Small</td>
                        <td>1000</td>
                        <td>S.Stk2500000 - S.Stk2500099</td>
                        <td>27 Dec 2024</td>
                        <td>
                            <!-- <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i> Available
                            </span> -->
                            <select  name="status" class="form-control select2">
                                <option value="" disabled>Choose Status</option>
                                <option value="Created">Created</option>
                                <option value="Dispatched for Printing">Dispatched for Printing</option>
                                <option value="Available" selected>Available</option>
                            </select>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editStickerModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="view-user-details.php">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Large</td>
                        <td>800</td>
                        <td>L.Stk2500000 - L.Stk2500079</td>
                        <td>28 Dec 2024</td>
                        <td>
                           <select  name="status" class="form-control select2">
                                <option value="" disabled>Choose Status</option>
                                <option value="Created" selected>Created</option>
                                <option value="Dispatched for Printing">Dispatched for Printing</option>
                                <option value="Available" >Available</option>
                            </select>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editStickerModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="view-user-details.php">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Small</td>
                        <td>1200</td>
                        <td>S.Stk2500100 - S.Stk2500199</td>
                        <td>29 Dec 2024</td>
                        <td>
                           <select  name="status" class="form-control select2">
                                <option value="" disabled>Choose Status</option>
                                <option value="Created" >Created</option>
                                <option value="Dispatched for Printing" selected>Dispatched for Printing</option>
                                <option value="Available" >Available</option>
                            </select>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editStickerModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="view-user-details.php">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Large</td>
                        <td>900</td>
                        <td>L.Stk2500080 - L.Stk2500179</td>
                        <td>30 Dec 2024</td>
                        <td>
                            <select  name="status" class="form-control select2">
                                <option value="" disabled>Choose Status</option>
                                <option value="Created" >Created</option>
                                <option value="Dispatched for Printing">Dispatched for Printing</option>
                                <option value="Available">Available</option>
                            </select>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editStickerModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="view-user-details.php">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Tag No.</th>
                            <th>Tag Qty</th>
                            <th>Range</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>039207</td>
                        <td>1000</td>
                        <td>039207 - 040206</td>
                        <td>27 Dec 2024</td>
                        <td>
                            <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i> Available
                            </span>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>040207</td>
                        <td>1000</td>
                        <td>040207 - 041206</td>
                        <td>28 Dec 2024</td>
                        <td>
                            <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i> Available
                            </span>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>041207</td>
                        <td>1000</td>
                        <td>041207 - 042206</td>
                        <td>29 Dec 2024</td>
                        <td>
                            <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i> Used
                            </span>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>

                               </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>042207</td>
                        <td>1000</td>
                        <td>042207 - 043206</td>
                        <td>30 Dec 2024</td>
                        <td>
                            <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                <i class="ti ti-point-filled me-1"></i> Available
                            </span>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                   
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                       data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                       href="">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="mage:edit"></iconify-icon>
                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                       data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                       href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="ion:print-outline"></iconify-icon>

                                           </span>
                                       </span>
                                   </a>
                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                       data-id="" title="Delete" href="#">
                                       <span class="icon">
                                           <span class="feather-icon">
                                               <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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

    </div>

</div>

<!-- Add Sticker modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets\aditya_assests\sticker_icon.png" alt="No Icon">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Type<div class="requiredLabel">*</div></label>
                                <select class="form-control largeinp_height select2">
                                    <option value="" selected >Choose Status</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Qty<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon> Create &  Save 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>



<!-- Edit Modal Sticker-->
<div class="modal fade custombottm_modalStyle" id="editStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sticker</h4>
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

                        <input type="hidden" id="stickerIdHidden" name="sticker_id">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Type<div class="requiredLabel">*</div></label>
                                <select class="form-control largeinp_height select2">
                                    <option value="" disabled >Choose Status</option>
                                    <option value="Small">Small</option>
                                    <option value="Large" selected>Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Qty<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="" class="form-control" value="1000">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control" value="L.Stk2500000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control" value="L.Stk2500999">
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select id="editStatus" name="status" class="form-control largeinp_height select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Not Dispatched">Not Dispatched</option>
                                    <option value="Dispatched for Printing">Dispatched for Printing</option>
                                    <option value="Available" selected>Available</option>
                                    <option value="Available">Out Of Stock</option>

                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Update
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>


<!-- Add Tag Modal -->
<div class="modal fade custombottm_modalStyle" id="addTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Tag Series</h4>
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
                        <div class="col-lg-6">
                             <div class="form-group">
                                    <label class="form-label">Tag No.<div class="requiredLabel">*</div></label>
                                    <input type="text" placeholder="Please Enter the Tag ID" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                    <label class="form-label">Tag Qty<div class="requiredLabel">*</div></label>
                                    <input type="text" placeholder="Please Enter the Tag ID" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control">
                            </div>
                        </div>
                     

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save 
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>
<!-- /Add template -->

<!-- Edit Modal Tag-->
<div class="modal fade custombottm_modalStyle" id="editTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tag Series</h4>
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

                        <input type="hidden" id="tagIdHidden" name="tag_id">
                        <div class="col-lg-6">
                             <div class="form-group">
                                    <label class="form-label">Tag No.<div class="requiredLabel">*</div></label>
                                    <input type="text" placeholder="Please Enter the Tag ID" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                    <label class="form-label">Tag Qty<div class="requiredLabel">*</div></label>
                                    <input type="text" placeholder="Please Enter the Tag ID" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select id="editStatus" name="status" class="form-control largeinp_height select2">
                                    <option value="">Choose Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Out Of Stock">Out Of Stock</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Update
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
    document.addEventListener("DOMContentLoaded", function () {
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
