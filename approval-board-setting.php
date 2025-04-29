<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Approval Board Setting</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Approval Board Setting</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" >
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Group
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
                            <th>Group Name</th>
                            <th>Region</th>
                            <th>Service Name</th>
                            <th>Approval Level</th>
                            <th>Inspectors</th>
                            <th>Supervisor</th>
                            <th>Technical Manager</th>
                            <th>Created On</th>
                            <th>Modified Date</th>
                            <th>Last Modified by</th>
                            <!-- <th>Role</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="groupName" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                <iconify-icon icon="stash:people-group-light"></iconify-icon> Group 1
                            </span>
                        </td>
                        <td>New Delhi</td>
                        <td>Equipment Inspection</td>
                        <td>2 Level of approval</td>
                        <td class="subcategory_row" data-category="John Smith">
                            <div class="subcategory_items">
                                <div class="subct_item">John</div>
                                <div class="subct_item">Emma</div>
                                <div class="subct_item">Michael</div>
                                <div class="subct_item">Sophia</div>
                                <div class="subct_item">Daniel</div>
                                <div class="subct_item">Olivia</div>
                            </div>
                        </td>
                        <td>John Smith</td>
                        <td>Hadson Brad</td>
                        <td>27 Dec 2025</td>
                        <td>28 Dec 2025</td>
                        <td><a href="user-detail.php" class="hightlightKOPID">Emilly William</a></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                    <span class="icon">
                                        <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="groupName" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                <iconify-icon icon="stash:people-group-light"></iconify-icon> Group 2
                            </span>
                        </td>
                        <td>Amsterdam</td>
                        <td>Vehicle Maintenance</td>
                        <td>3 Level of approval</td>
                        <td class="subcategory_row" data-category="Alice Brown">
                            <div class="subcategory_items">
                                <div class="subct_item">Alice</div>
                                <div class="subct_item">James</div>
                                <div class="subct_item">Lucas</div>
                                <div class="subct_item">Ella</div>
                            </div>
                        </td>
                        <td>Alice Brown</td>
                        <td>Robert Green</td>
                        <td>10 Jan 2026</td>
                        <td>12 Jan 2026</td>
                        <td><a href="user-detail.php" class="hightlightKOPID">William Johnson</a></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                    <span class="icon">
                                        <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="groupName" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                <iconify-icon icon="stash:people-group-light"></iconify-icon> Group 3
                            </span>
                        </td>
                        <td>Berlin</td>
                        <td>Software Update</td>
                        <td>1 Level of approval</td>
                        <td class="subcategory_row" data-category="David Miller">
                            <div class="subcategory_items">
                                <div class="subct_item">David</div>
                                <div class="subct_item">Sarah</div>
                                <div class="subct_item">Henry</div>
                            </div>
                        </td>
                        <td>David Miller</td>
                        <td>Jessica Adams</td>
                        <td>05 Feb 2026</td>
                        <td>07 Feb 2026</td>
                        <td><a href="user-detail.php" class="hightlightKOPID">Sophia White</a></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                    <span class="icon">
                                        <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="groupName" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                <iconify-icon icon="stash:people-group-light"></iconify-icon> Group 4
                            </span>
                        </td>
                        <td>Paris</td>
                        <td>System Audit</td>
                        <td>2 Level of approval</td>
                        <td class="subcategory_row" data-category="Olivia Clark">
                            <div class="subcategory_items">
                                <div class="subct_item">Olivia</div>
                                <div class="subct_item">Ethan</div>
                                <div class="subct_item">Liam</div>
                            </div>
                        </td>
                        <td>Olivia Clark</td>
                        <td>Daniel Evans</td>
                        <td>15 Mar 2026</td>
                        <td>17 Mar 2026</td>
                        <td><a href="user-detail.php" class="hightlightKOPID">Mason Hill</a></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                    <span class="icon">
                                        <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
        <form action="">
            <div class="modal-header">
                <h4 class="modal-title">Create Group</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
           
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Group Name<div class="requiredLabel">*</div></label>
                               <input type="text" class="form-control" placeholder="Group Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Select Region</label>
                                <select class="form-control select2">
                                    <option disabled selected value="">Please Select...</option>
                                    <option value="New Delhi">New Delhi</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Karnatka">Karnatka</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Select Service<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled selected value="">Please Select...</option>
                                    <option value="Equipment Inspection">Equipment Inspection </option>
                                    <option value="Operator Assessment">Operator Assessment </option>
                                    <option value="Operator Assessment">NDT Review </option>
                                    <option value="Operator Assessment">Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label class="form-label">Inspectors<div class="requiredLabel">*</div></label>
                                    <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                        <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="selected-count">Select Levels</span>
                                            <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                        </button>
                                        <div
                                            class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                            <div class="filTerSearchMain">
                                                <input type="text" class="filterclSearch available-users-search"
                                                    placeholder="Search Department">
                                                <iconify-icon icon="basil:search-outline"></iconify-icon>
                                            </div>
                                            <div class="sellallitemsMain">
                                                <div class="CustomselectallContainer">
                                                    <input type="checkbox"
                                                        class="select-all-available-users form-check-input">
                                                    Select All
                                                </div>
                                                <div class="clDivider_full"></div>
                                            </div>
                                            <div class="Customdrpitems_container">
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            kiara Jim
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            Moh. Ali
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                           Asheraf Khan
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            Billa Safi
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="no-data" style="display: none;">No data found</p>
                                        </div>
                                    </div>
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label class="form-label">Approval Level<div class="requiredLabel">*</div></label>
                                    <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                        <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="selected-count">Select Levels</span>
                                            <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                        </button>
                                        <div
                                            class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                            <div class="filTerSearchMain">
                                                <input type="text" class="filterclSearch available-users-search"
                                                    placeholder="Search Department">
                                                <iconify-icon icon="basil:search-outline"></iconify-icon>
                                            </div>
                                            <div class="sellallitemsMain">
                                                <div class="CustomselectallContainer">
                                                    <input type="checkbox"
                                                        class="select-all-available-users form-check-input">
                                                    Select All
                                                </div>
                                                <div class="clDivider_full"></div>
                                            </div>
                                            <div class="Customdrpitems_container">
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            Supervisor
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            Technical Manager
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <p class="no-data" style="display: none;">No data found</p>
                                        </div>
                                    </div>
                            </div>
                          
                        </div>
                        <div class="col-lg-6 supperVisorBox ">
                            <div class="form-group">
                                <label class="form-label">Supervisor<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled selected value="">Please Select...</option>
                                    <option value="Jhon Smith">Jhon Smith</option>
                                    <option value="Emilly">Emilly</option>
                                    <option value="William Kemo">William Kemo</option>
                                    <option value="Kenil William">Kenil William</option>
                                    <option value="Hadson Brad">Hadson Brad</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-lg-6 technicalManagerBox">
                            <div class="form-group">
                                <label class="form-label">Technical Manager<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled selected value="">Please Select...</option>
                                    <option value="Jhon Smith">Jhon Smith</option>
                                    <option value="Emilly">Emilly</option>
                                    <option value="William Kemo">William Kemo</option>
                                    <option value="Kenil William">Kenil William</option>
                                    <option value="Hadson Brad">Hadson Brad</option>
                                </select>
                             </div>
                        </div>
                        
                </div>
              
           
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                <iconify-icon icon="ci:save"></iconify-icon>  Create & Save 
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
        <form action="">
            <div class="modal-header">
                <h4 class="modal-title">Edit Group Details</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
           
                <div class="modal-body">
                <div class="row">
                        <div class="col-lg-12">
                        <div class="form-group">
                                <label class="form-label">Group Name<div class="requiredLabel">*</div></label>
                               <input type="text" class="form-control" placeholder="Group Name" value="Group 1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Select Region</label>
                                <select class="form-control select2">
                                    <option disabled  value="">Please Select...</option>
                                    <option value="New Delhi" selected>New Delhi</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Karnatka">Karnatka</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Select Service<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled  value="">Please Select...</option>
                                    <option value="Equipment Inspection" selected>Equipment Inspection </option>
                                    <option value="Operator Assessment">Operator Assessment </option>
                                    <option value="Operator Assessment">NDT Review </option>
                                    <option value="Operator Assessment">Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label class="form-label">Inspectors<div class="requiredLabel">*</div></label>
                                    <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                        <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="selected-count">Select Levels</span>
                                            <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                        </button>
                                        <div
                                            class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                            <div class="filTerSearchMain">
                                                <input type="text" class="filterclSearch available-users-search"
                                                    placeholder="Search Department">
                                                <iconify-icon icon="basil:search-outline"></iconify-icon>
                                            </div>
                                            <div class="sellallitemsMain">
                                                <div class="CustomselectallContainer">
                                                    <input type="checkbox"
                                                        class="select-all-available-users form-check-input">
                                                    Select All
                                                </div>
                                                <div class="clDivider_full"></div>
                                            </div>
                                            <div class="Customdrpitems_container">
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input" checked>
                                                            kiara Jim
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input" checked>
                                                            Moh. Ali
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input" checked>
                                                           Asheraf Khan
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                            Billa Safi
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="no-data" style="display: none;">No data found</p>
                                        </div>
                                    </div>
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label class="form-label">Approval Level<div class="requiredLabel">*</div></label>
                                    <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                        <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="selected-count">Select Levels</span>
                                            <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                        </button>
                                        <div
                                            class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                            <div class="filTerSearchMain">
                                                <input type="text" class="filterclSearch available-users-search"
                                                    placeholder="Search Department">
                                                <iconify-icon icon="basil:search-outline"></iconify-icon>
                                            </div>
                                            <div class="sellallitemsMain">
                                                <div class="CustomselectallContainer">
                                                    <input type="checkbox"
                                                        class="select-all-available-users form-check-input" checked>
                                                    Select All
                                                </div>
                                                <div class="clDivider_full"></div>
                                            </div>
                                            <div class="Customdrpitems_container">
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input" checked>
                                                            Supervisor
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input" checked>
                                                            Technical Manager
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <p class="no-data" style="display: none;">No data found</p>
                                        </div>
                                    </div>
                            </div>
                          
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Supervisor<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled  value="">Please Select...</option>
                                    <option value="Jhon Smith" selected>Jhon Smith</option>
                                    <option value="Emilly">Emilly</option>
                                    <option value="William Kemo">William Kemo</option>
                                    <option value="Kenil William">Tika William</option>
                                    <option value="Hadson Brad">Hadson Brad</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Technical Manager<div class="requiredLabel">*</div></label>
                                <select class="form-control select2">
                                    <option disabled  value="">Please Select...</option>
                                    <option value="Jhon Smith">Jhon Smith</option>
                                    <option value="Emilly" selected>Emilly</option>
                                    <option value="William Kemo">William Kemo</option>
                                    <option value="Kenil William">Tika William</option>
                                    <option value="Hadson Brad">Hadson Brad</option>
                                </select>
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
<!-- Tag Modal -->



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
<!-- Bootstrap Modal -->
<div class="modal fade" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subcategoryModalLabel">All Inspectors</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mdheight_small">
                <!-- Search Bar -->
                <div class="searchwrapper_category">
                    <input type="text" id="subcategorySearch" class="form-control" placeholder="Search Inspectors..."
                        style="margin-bottom: 10px;">
                    <iconify-icon icon="proicons:search"></iconify-icon>
                </div>
                <ul class="list-group subcategory_mdListing" id="modalSubcategoryList">
                    <!-- Dynamic content will be populated here -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>



<!-- custom multiple select js start -->
<script>
    $(document).ready(function () {
     // Update the count of selected options
     function updateSelectedCount(dropdownWrapper) {
         const selectedCount = dropdownWrapper.find(".individual-option:checked").length;
         const selectedCountElement = dropdownWrapper.find(".selected-count");
 
         if (selectedCount === 0) {
             selectedCountElement.text("Select Location");
         } else if (selectedCount === 1) {
             selectedCountElement.text("1 selected");
         } else {
             selectedCountElement.text(`${selectedCount} selected`);
         }
     }
 
     // Handle Select All checkbox
     $(".select-all-available-users").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const isChecked = $(this).prop("checked");
         dropdownWrapper.find(".individual-option").prop("checked", isChecked);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Handle individual option selection
     $(".individual-option").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const totalOptions = dropdownWrapper.find(".individual-option").length;
         const selectedOptions = dropdownWrapper.find(".individual-option:checked").length;
 
         // Toggle the Select All checkbox
         dropdownWrapper.find(".select-all-available-users").prop("checked", totalOptions === selectedOptions);
 
         updateSelectedCount(dropdownWrapper);
     });
 
     // Reset Filter button
     $(".reset-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         dropdownWrapper.find(".individual-option").prop("checked", false);
         dropdownWrapper.find(".select-all-available-users").prop("checked", false);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Apply Filter button
     $(".apply-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const selectedItems = dropdownWrapper.find(".individual-option:checked").map(function () {
             return $(this).parent().text().trim();
         }).get();
         console.log("Selected Items:", selectedItems);
     });
 
     // Filter search functionality
     $(".available-users-search").on("keyup", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const searchTerm = $(this).val().toLowerCase();
         const options = dropdownWrapper.find(".mainoptionContainer");
 
         options.filter(function () {
             $(this).toggle($(this).text().toLowerCase().includes(searchTerm));
         });
 
         const noDataMessage = dropdownWrapper.find(".no-data");
         noDataMessage.toggle(options.filter(":visible").length === 0);
     });
 });
 
 </script>

<script>
    $(document).ready(function () {
        // Initially hide both boxes
        $(".supperVisorBox, .technicalManagerBox").hide();

        function toggleBoxes() {
            let isSupervisorChecked = $(".dropfilter_options:contains('Supervisor') input").prop("checked");
            let isTechnicalManagerChecked = $(".dropfilter_options:contains('Technical Manager') input").prop("checked");

            $(".supperVisorBox").toggle(isSupervisorChecked);
            $(".technicalManagerBox").toggle(isTechnicalManagerChecked);
        }

        // When an individual checkbox is clicked
        $(".individual-option").change(function () {
            toggleBoxes();
        });

        // Handle Select All checkbox
        $(".select-all-available-users").change(function () {
            let isChecked = $(this).prop("checked");
            $(".individual-option").prop("checked", isChecked); // Check/uncheck all
            toggleBoxes(); // Update visibility
        });
    });
</script>


<!-- sub category dynamic data show count and list in modal start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.subcategory_row');
        rows.forEach((row) => {
            const container = row.querySelector('.subcategory_items');
            const items = container.querySelectorAll('.subct_item');
            const maxVisible = 4;
            // Hide subcategories beyond the first 4
            items.forEach((item, index) => {
                if (index >= maxVisible) {
                    item.style.display = 'none';
                }
            });
            // Add remaining count circle if needed
            if (items.length > maxVisible) {
                const remainingCount = items.length - maxVisible;
                const countCircle = document.createElement('div');
                countCircle.className = 'subct_item_count';
                countCircle.textContent = `+${remainingCount}`;
                countCircle.setAttribute('data-bs-toggle', 'modal');
                countCircle.setAttribute('data-bs-target', '#subcategoryModal');
                countCircle.setAttribute('data-subcategory', JSON.stringify(Array.from(items).map(
                    item => item.textContent))); // Store all items in data attribute
                countCircle.setAttribute('data-category', row.getAttribute(
                'data-category')); // Store category name
                container.appendChild(countCircle);
            }
        });
        // Populate modal with the correct subcategory items
        document.querySelectorAll('.subct_item_count').forEach(countCircle => {
            countCircle.addEventListener('click', (event) => {
                const categoryName = event.target.getAttribute('data-category');
                const allSubcategories = JSON.parse(event.target.getAttribute(
                    'data-subcategory'));
                const modalTitle = document.getElementById('subcategoryModalLabel');
                const modalList = document.getElementById('modalSubcategoryList');
                const searchInput = document.getElementById('subcategorySearch');
                modalList.innerHTML = ''; // Clear previous list
                // Set modal title to category name
                modalTitle.textContent = `${categoryName} - All Inspectors`;
                // Populate modal list with subcategories
                allSubcategories.forEach(subcategory => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.textContent = subcategory;
                    modalList.appendChild(listItem);
                });
                // Add search functionality
                searchInput.addEventListener('input', () => {
                    const searchText = searchInput.value.toLowerCase();
                    const items = modalList.querySelectorAll('.list-group-item');
                    let found = false;
                    items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(searchText)) {
                            item.style.display = 'block'; // Show item
                            found = true;
                        } else {
                            item.style.display = 'none'; // Hide item
                        }
                    });
                    // Show "No subcategory found" message if no results match
                    const noResultsMessage = document.getElementById(
                    'noResultsMessage');
                    if (!found) {
                        if (!noResultsMessage) {
                            const noMessage = document.createElement('li');
                            noMessage.id = 'noResultsMessage';
                            noMessage.className = 'list-group-item text-danger';
                            noMessage.textContent = 'No subcategory found';
                            modalList.appendChild(noMessage);
                        }
                    } else {
                        const noMessage = document.getElementById('noResultsMessage');
                        if (noMessage) {
                            noMessage
                        .remove(); // Remove the "No subcategory found" message
                        }
                    }
                });
            });
        });
    });
</script>
<!-- sub category dynamic data show count and list in modal end -->
