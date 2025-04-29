<?php include("header.php") ?>

<style>
.formRight_fields label {
    display: unset !important;
}
</style>
<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h3 class="mb-1">Add New Client</h3>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                  
                    <li class="breadcrumb-item active" aria-current="page">Add New Client</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <!-- <div class="mb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#add_location"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add New Location
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
<!-- Performance Indicator list -->
<div class="card tablemaincard_nopaddingleftright">

<div class="card-body p-0">
    <div class="custom-datatable-filter">
    <!-- <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">Basic Information
                </a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">
                     Manage Locations
                   </a>
             

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                
             
            </div>
            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
            </div>
        </div> -->
        <div class="innerContainer">
           <div class="fieldsSetting_wrapperFRM">
                          <header class="profile-settings-header">
                            <h2 class="default-color">Client Details</h2>
                            <p class="tertiary-color">Capture essential client information including Client Name, Company Name, and Business Type.</p>
                          </header>

                          <div class="formRight_fields">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Client ID <div class="requiredLabel">*</div></label>
                                    <input type="text" class="form-control" readonly disabled value="CL00001">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Client Name <div class="requiredLabel">*</div></label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Representative Name <div class="requiredLabel">*</div></label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Contact No. <div class="requiredLabel">*</div></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="passwordField">
                                        <button class="btn btn-primary" type="button" onclick="generatePassword()">Generate</button>
                                        <button class="btn btn-secondary" type="button" onclick="togglePassword()">
                                            <span class="iconify" id="eyeIcon" data-icon="mdi:eye-off"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Region <div class="requiredLabel">*</div></label>
                                    <select name="" id="" class="form-control select2">
                                            <option disabled="" selected="" value="">Please Select...</option>
                                            <option value="Ban">Bangalore</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Chennai">Chennai</option>

                                            </select>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Location <div class="requiredLabel">*</div></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Work Location</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                           

                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                                <div class="uploadlogo">
                                                <div class="preview" id="imagePreview">
                                                    <span>No image uploaded yet</span>
                                                </div>
                                                <div class="upload-area" id="uploadArea" onclick="document.getElementById('fileInput').click()">
                                                    <input type="file" id="fileInput" accept="image/*" style="display: none;" onchange="previewImage(event)">
                                                    <span>Drop your file(s) here<br>or click to browse</span>
                                                    <iconify-icon icon="iconamoon:cloud-upload-duotone" class="uploadIcon"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-check emailNotificationCheck">
                                                    <input class="form-check-input" type="checkbox" id="emailNotification" checked onchange="toggleNotificationMessage()">
                                                    <label class="form-check-label mb-0" for="emailNotification">
                                                        Enable Email Notifications
                                                    </label>
                                                </div>

                                            </div>
                            
                                
                                    </div>
                                 
                                </div>


                              
                            </div>

                          </div>

                        </div>
                       
                        <!-- <div class="fieldsSetting_wrapperFRM addbordertop">
                          <header class="profile-settings-header">
                            <h2 class="default-color">Manage Client Locations</h2>
                            <p class="tertiary-color">Track client locations and assign a representative for each.</p>
                          </header>

                          <div class="formRight_fields">
                                
                              <div class="row">
                              <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Representative Name</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Contact No.</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                               <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 1</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 2 (Optional)</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Town/City</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-end">
                                    <a href="javascript:void(0);" class="addMorelocationBtn" id="addLocation"><iconify-icon icon="majesticons:plus-line"></iconify-icon> Add More</a>
                                </div>
                                <div class="col-lg-12" id="multipleLocation">
                                    <div class="multipleLocation">
                                        <h6>Client Representatives by Location</h6>
                                        <table class="table withoutActionTR nowrap w-100 represntativeTable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Representative Name</th>
                                                    <th>Contact No.</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jim Smith</td>
                                                    <td>9567823654</td>
                                                    <td>jimsmith@gmail.com</td>
                                                    <td>
                                                        <div class="addressRep">
                                                        Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016 India
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center ActionDropdown">
                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                data-bs-toggle="tooltip" data-placement="top" title="Edit "
                                                                href="job-order-details.php">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                    <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <button
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" id="DeleteLocation"
                                                                data-bs-toggle="tooltip" data-placement="top" title="Remove">
                                                                <span class="icon">
                                                                    <span class="feather-icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-trash">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                              
                            </div>

                          </div>

                        </div> -->
        

        </div>
        
        <div class="FormSubmit_fix_container">
                                        <a href="#" class="SaveDataBtn">
                                            <button type="button" class="btn btn-primary commonUpdateButton">
                                            <iconify-icon icon="ci:save"></iconify-icon> Save
                                            </button>
                                        </a>
                                        <a href="clients.php">
                                            <button type="button" class="btn commonCancleButton">
                                                Cancel
                                            </button>
                                        </a>

                                        

                                </div>

       
    </div>
</div>
</div>
<!-- /Performance Indicator list -->
</div>



<?php include("footer.php") ?>

<script>
    $(document).ready(function () {
        // Handle SaveDataBtn click event
        $(".SaveDataBtn").on("click", function (e) {
            e.preventDefault(); // Prevent default action for the link

            // Show SweetAlert2 confirmation
            Swal.fire({
                html: `
                    <div style="text-align: center;">
                        <div class="swalalert_custom_icon">
                            <img src="assets/img/newimages/nutmeg.gif" alt="Success">
                        </div>
                        <h2 class="Swal_CustomTitle">Created Successfully!</h2>
                        <p>Client details have been saved successfully.</p>
                    </div>`,
                confirmButtonText: "Okay Great", // Show OK button
              
                customClass: {
                    confirmButton: "my-ok-button" // Custom class for the button
                },
            }).then((result) => {
                // If the user clicks OK, redirect to clients.php
                if (result.isConfirmed) {
                    window.location.href = "clients.php";
                }
            });
        });
    });
</script>
<!-- upload logo js -->
<script>
      function previewImage(event) {
          const file = event.target.files ? event.target.files[0] : event;
          if (file) {
              const reader = new FileReader();
              reader.onload = function(e) {
                  const preview = document.getElementById('imagePreview');
                  preview.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image">`;
              };
              reader.readAsDataURL(file);
          }
      }

      const uploadArea = document.getElementById('uploadArea');

      uploadArea.addEventListener('dragover', (event) => {
          event.preventDefault();
          event.stopPropagation();
          uploadArea.classList.add('dragover');
      });

      uploadArea.addEventListener('dragleave', (event) => {
          event.preventDefault();
          event.stopPropagation();
          uploadArea.classList.remove('dragover');
      });

      uploadArea.addEventListener('drop', (event) => {
          event.preventDefault();
          event.stopPropagation();
          uploadArea.classList.remove('dragover');

          const files = event.dataTransfer.files;
          if (files.length > 0) {
              previewImage({ target: { files } });
          }
      });
  </script>

  <script>
    $(document).ready(function(){
        $('#multipleLocation').hide();
        $('#addLocation').click(function(){
            $('#multipleLocation').show();
        })
        $('#DeleteLocation').click(function(){
            $('#multipleLocation').hide();
        })
    })
  </script>
<script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
<script>
    function generatePassword() {
        const length = 12;
        const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
        let password = "";
        for (let i = 0; i < length; i++) {
            password += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById("passwordField").value = password;
    }

    function togglePassword() {
        const passwordField = document.getElementById("passwordField");
        const eyeIcon = document.getElementById("eyeIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.setAttribute("data-icon", "mdi:eye");
        } else {
            passwordField.type = "password";
            eyeIcon.setAttribute("data-icon", "mdi:eye-off");
        }
    }
</script>