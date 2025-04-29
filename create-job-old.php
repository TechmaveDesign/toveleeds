<?php include("header.php") ?>
<style>
    .shadow-sm {
    box-shadow: none !important;
}
.list-item-hover {
    border: 1px solid #eaeaea !important;
    transition: 0.5s all;
}
.list-item-hover:hover {
    border-color: #eaeaea !important;
    transition: 0.5s all;
}
</style>
<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Create Job Order</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <!-- <li class="breadcrumb-item">
                        Job Form Management
                    </li> -->
                    <li class="breadcrumb-item active" aria-current="page">Create Job Order</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

        <div class="mb-2 d-flex gap-2">
               <a href="inspection-job-order-list.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
                <!-- <div class="dropDownBox dropDownHead">
                    <a class="viewDetailBtnOpt" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <iconify-icon icon="ph:dots-three-outline-vertical"></iconify-icon>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" style="">
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Certificate</a>
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Checklist</a>
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download FIR</a>


                    </div>
                    </div> -->
                <!-- <a href="manage-template.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="cuida:edit-outline"></iconify-icon> Edit 
                </a> -->
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
     <div class="CheckListMainContainer">
        <form action="#">
        <div class="checklistSubContainer px-4">
            <div class="row">
                
                
                <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-header cardHeaderAss">
                                <h5>Complete the form to create a job order.</h5>
                                <p>Fill out the form to place a job order and select the inspector.</p>
                            </div>
                            <div class="card-body p-0">
                                <div class="InspectionFormsContainer">
                                <div class="row">
                                  <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-label">Select Client</label>
                                                </div>
                                                <div class="col-lg-8">
                                                   <select name="" class="form-control select2">
                                                        <option disabled="" selected="" value="">Please Select...</option>
                                                        <option value="1">Danial Craig</option>
                                                        <option value="2">Emily Blunt</option>
                                                        <option value="3">John Doe</option>
                                                        <option value="4">Sophia Turner</option>
                                                        <option value="5">Michael Jordan</option>
                                                        <option value="6">Olivia Smith</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Client ID</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                           <div class="col-lg-4">
                                                <label class="form-label">Service Type</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="dropdown ServiceTypeBox">
                                                <div class="btn  dropdown-toggle serviceTypeBtn" type="button" id="dropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Type
                                                </div>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <label class="dropdown-item">
                                                            <input class="form-check-input option-checkbox me-2" type="checkbox" value="Equipment Inspection"> Equipment Inspection
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="dropdown-item">
                                                            <input class="form-check-input option-checkbox me-2" type="checkbox" value="Operator Assessment"> Operator Assessment
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="dropdown-item">
                                                            <input class="form-check-input option-checkbox me-2" type="checkbox" value="Training"> Training
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="dropdown-item">
                                                            <input class="form-check-input option-checkbox me-2" type="checkbox" value="NDT" id="ndtCheckbox"> NDT
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="EquipmentOptionsSelect">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label">Select Equipment</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control select2">
                                                                <option disabled selected value="">Please Select...</option>
                                                                <option value="Agricultural Tractor Operator">Agricultural Tractor Operator</option>
                                                                <option value="Air Compressor Operator">Air Compressor Operator</option>
                                                                <option value="Anchor Machine Operator">Anchor Machine Operator</option>
                                                                <option value="Asphalt Batching Plant Operator">Asphalt Batching Plant Operator</option>
                                                                <option value="Asphalt Milling Machine Operator">Asphalt Milling Machine Operator</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                </div>
                                
                                
                                <div class="NDTSelectOptions">
                                    <div class="row">
                                    <div class="col-md-6 ">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Data Log For NDT</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select Data Log For NDT</span>
                                                    <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search Service Type">
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
                                                                    Air In Filtration Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Bolt Pull Out Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Bolt Torque Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Comprehensive Inspection
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Dry Film Thickness
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Dye Penetrant Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Fabrication Inspection
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Fire Stop Inspection 
                                                            </div>
                                                        </div>    <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Magnetic Particle Test
                                                            </div>
                                                        </div>    <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Micro, Macro & Bend Test
                                                            </div>
                                                        </div>   
                                                         <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Ultrasonic Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Ultrasonic Thickness Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Water Leakage Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Water Penetration Test
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    Welding Visual Test
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">WPS, PQR & WQT (ASME & AWS D1.1)</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select WPS, PQR & WQT</span>
                                                    <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search Service Type">
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
                                                                    PQR  (ASME SEC IX & AWS D1.1)
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    WPS  (ASME SEC IX & AWS D1.1)
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    WQT (ASME SEC IX & AWS D1.1)
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">WPS, PQR & WQT (AWS D1.4)</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-count">Select WPS, PQR & WQT</span>
                                                    <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                                </button>
                                                <div
                                                    class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                    <div class="filTerSearchMain">
                                                        <input type="text" class="filterclSearch available-users-search"
                                                            placeholder="Search Service Type">
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
                                                                    PQR (AWS D1.4)
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    WPS (AWS D1.4)
                                                            </div>
                                                        </div>
                                                        <div class="mainoptionContainer">
                                                            <div class="dropfilter_options">
                                                                <input type="checkbox"
                                                                    class="individual-option form-check-input">
                                                                    WQT (ASME SEC IX & AWS D1.1)
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="no-data" style="display: none;">No data found</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Scheduled Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Deadline</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Time</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control timepicker">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Location (Client site)</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Region</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <select name="" id="" class="form-control select2">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="Ban">Bangalore</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="New Delhi">New Delhi</option>
                                                <option value="Chennai">Chennai</option>

                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Next Inspection Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Assigned Inspector/Trainer</label>
                                            </div>
                                            <div class="col-lg-8">
                                            <select name="" class="form-control select2">
                                                <option disabled="" selected="" value="">Please Select...</option>
                                                <option value="1">Danial Craig</option>
                                                <option value="2">Emily Blunt</option>
                                                <option value="3">John Doe</option>
                                                <option value="4">Sophia Turner</option>
                                                <option value="5">Michael Jordan</option>
                                                <option value="6">Olivia Smith</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               

                               
                               
                                    
                               </div>
                                </div>

                                <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                    
                                <div class="col-lg-12 mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-2">
                                                <label class="form-label mb-0">Additional Notes</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-lg-12 mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-2">
                                                <label class="form-label mb-0">Attach Documents</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                </div>

                              
                                 
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="FormSubmit_fix_container">
                        <div class="savedraft_button me-2">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="gridCheck">Save Draft </label>
                            </div>

                        </div>
                    <a href="inspection-job-order-detail.php" class="SaveDataBtn">
                        <button type="button" class="btn btn-primary commonUpdateButton">
                        <iconify-icon icon="ci:save"></iconify-icon> Save & Update
                        </button>
                    </a>
                    <a href="inspection-job-order-detail.php">
                        <button type="button" class="btn commonCancleButton">
                            Cancel
                        </button>
                    </a>
            </div>
        </form>
        
        </div>
     </div>
     </div>
     
     
    </div>
    <?php include("footer.php") ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".custom-container").forEach(function (container) {
        let selectElement = container.querySelector("select");
        let explainArea = container.querySelector(".explainArea");

        // Hide the explainArea by default
        if (explainArea) {
            explainArea.style.display = "none";
        }

        // Initialize Select2
        $(selectElement).select2();

        // Handle change event for Select2
        $(selectElement).on("change", function () {
            if (this.value === "yes") {
                explainArea.style.display = "block";
            } else {
                explainArea.style.display = "none";
            }
        });
    });
});

    </script>

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
<script>
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
</script>
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
    FilePond.create(document.querySelector('#imageInput'), {
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


