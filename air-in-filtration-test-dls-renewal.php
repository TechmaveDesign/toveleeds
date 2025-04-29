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
            <h2 class="mb-1">Renew NDT - Air In Filtration Test</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Job Order
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Renew Air In Filtration Test</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

        <div class="mb-2 d-flex gap-2">
               <a href="job-order-renewal-ndt.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
                <a href="javascript:void(0);" id="editButton" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="akar-icons:edit"></iconify-icon> Edit
                </a>
                <div class="btn-group">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Preview Documents
               </button>
                <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Report</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview FDLS</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Welder Card</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview PQR</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview WPS</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview WQT</a>
                    </li>
                </ul>
                </div>
                <div class="btn-group">
              
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download Documents 
               </button>
                <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Report</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download FDLS</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Welder Card</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download PQR</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download WPS</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download WQT</a>
                    </li>
                </ul>
                </div>
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
        <div class="checklistSubContainer">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-header cardHeaderAss">
                                <h5>Data Log Sheet for Air Infiltration Test Report</h5>
                                <!-- <p>Ensure safety and efficiency with regular air compressor inspections.</p> -->
                            </div>
                            <div class="card-body p-0">
                                <div class="InspectionFormsContainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                <label class="form-label">DLS No.</label>
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
                                                <label class="form-label">Job Order No.</label>
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
                                                <label class="form-label">FDLS No.</label>
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
                                                <label class="form-label">Report No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">FIR No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Test Date</label>
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
                                                <label class="form-label">Issue Date</label>
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
                                                <label class="form-label">Standard</label>
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
                                                <label class="form-label">Drawing No.</label>
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
                                                <label class="form-label">Client Name</label>
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
                                                <label class="form-label">Tested Area (m2)</label>
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
                                                <label class="form-label">Component & Location</label>
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
                                                <label class="form-label">Work Location</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                               </div>
                                </div>

                                <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Surface Temperature (°C)</label>
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
                                                <label class="form-label">Wind Speed (Km/h)</label>
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
                                                <label class="form-label">Air Infiltration Equipment</label>
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
                                                <label class="form-label">Relative Humidity (%)</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tabBoxFG">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="8" style="text-align:center; background:#fff;">Testing & Result</th>
                                                </tr>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Part & Location</th>
                                                    <th>Qt (m3/h)</th>
                                                    <th>Qe(m3/h)</th>
                                                    <th>Qs(m3/h)</th>
                                                    <th>QL(m3/h)/m</th>
                                                    <th>QA(m3/h)/m2</th>
                                                    <th>Result</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding:5px 15px;">01</td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px 15px;">02</td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="tableInput">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                          
                                        </table>
                                        
                                    </div>
                                    <ul class="testingOption">
                                            <li><span>Qt:</span> Total Stabilized Air Flow</li>
                                            <li><span>Qe:</span> Extraneous Air Leakage</li>
                                            <li><span>Qs:</span> Specimen Air Leakage</li>
                                            <li><span>QA:</span> Allowable Air Leakage</li>
                                            <li><span>QL:</span> Rate of Air Leakage Per Unit Length</li>
                                        </ul>
                                </div>

                               
                                    </div>
                                </div>
                                <div class="InspectionFormsContainer border-top">
                                    <div class="row">
                                        

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Upload Picture Option</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                      <input name="file1" type="file" class="dropify" data-height="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Upload Picture Option</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                      <input name="file1" type="file" class="dropify" data-height="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                 </div>
                             
                                <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                      <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label"><strong>Remarks:</strong></label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                      <textarea name="" id="" class="form-control"> "100% Air infiltration testing was conducted. No air leakage was detected during the test, and all results were found to be satisfactory."</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 </div>
                                 <div class="InspectionFormsContainer border-top">
                                    <div class="row">
                                        

                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Performer Name</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Designation</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Contact</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Signature</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                      <input name="file1" type="file" class="dropify" data-height="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Client Name</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Designation</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Contact</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Signature</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                      <input name="file1" type="file" class="dropify" data-height="100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                 </div>
                                 <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                      <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Declaration </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                      <textarea name="" id="" class="form-control"> I/We verify the statement in this record is correct in accordance with the commonly accepted standard/code/specification.</textarea>
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
            </div>
            <div class="FormSubmit_fix_container">
            <a href="#" class="SaveDataBtn">
    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSuccessAlert()">
        <iconify-icon icon="ci:save"></iconify-icon> Renew & Update
    </button>
</a>
                    <a href="job-order-renewal-ndt.php">
                        <button type="button" class="btn commonCancleButton">
                            Cancel
                        </button>
                    </a>

            </div>

            <div class="nextButton">
                <a href="#" class="active" >#DLS2500001</a>
                <a href="#" >#DLS2500002</a>
                <a href="#" >#DLS2500003</a>
                <a href="#" >#DLS2500004</a>
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

    <!-- dropify CDN -->
 <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
 <script>
    $('.dropify').dropify();
 </script>

<!-- Fields editable and no-editable code -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        let formElements = document.querySelectorAll('input, select, textarea');

        // Disable all form fields on page load
        formElements.forEach(element => {
            element.disabled = true;
        });

        // Disable radio button clicks manually
        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.dataset.originalDisabled = "true";
            radio.addEventListener('click', preventRadioSelection);
        });
    });

    // Toggle edit mode when clicking the button
    document.getElementById('editButton').addEventListener('click', function () {
        let formElements = document.querySelectorAll('input, select, textarea');
        let isEditable = formElements[0].disabled; // Check current state

        formElements.forEach(element => {
            element.disabled = !element.disabled;
        });

        // Enable/Disable radio button functionality
        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            if (radio.dataset.originalDisabled === "true") {
                radio.dataset.originalDisabled = "false";
                radio.removeEventListener('click', preventRadioSelection);
            } else {
                radio.dataset.originalDisabled = "true";
                radio.addEventListener('click', preventRadioSelection);
            }
        });

        // Show SweetAlert based on mode
        Swal.fire({
            html: `
                <div style="text-align: center;">
                    <div class="swalalert_custom_icon">
                        <img src="assets/img/newimages/chat.gif" alt="Success">
                    </div>
                    <h2 class="Swal_CustomTitle">${isEditable ? "Editable Mode is On" : "Editable Mode is Off"}</h2>
                    <p>${isEditable ? "You can now edit the fields." : "The fields are now locked."}</p>
                </div>`,
            confirmButtonText: "Okay",
            customClass: {
                confirmButton: "my-ok-button"
            },
        });
    });

    // Prevent radio selection when disabled
    function preventRadioSelection(event) {
        event.preventDefault();
    }
</script>

<script>
    function showSuccessAlert() {
        Swal.fire({
            icon: 'success',
            title: 'Renewal Successful!',
            text: 'Your data has been renewed and updated successfully.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to another page after clicking "OK"
                window.location.href = "renewal-jobs.php"; // Change this URL
            }
        });
    }
</script>