<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h3 class="mb-1">Add New User</h3>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                  
                    <li class="breadcrumb-item active" aria-current="page">Add New User</li>
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
        <div class="fieldsSetting_wrapperFRM ">
            <header class="profile-settings-header">
                <h2 class="default-color">User Details</h2>
                <p class="tertiary-color">View and manage User information.</p>
                </header>

                          <div class="formRight_fields">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">User ID</label>
                                    <input type="text" class="form-control" readonly disabled value="CL00001">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Contact No.</label>
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
                                                <div class="pass-group">
                                                    <input type="password" class="pass-input form-control">
                                                    <span class="ti toggle-password ti-eye-off"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Confirm Password</label>
                                                <div class="pass-group">
                                                    <input type="password" class="pass-inputs form-control">
                                                    <span class="ti toggle-passwords ti-eye-off"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Role</label>
                                                <select class="select2">
                                                    <option>Select</option>
                                                    <option value="Inspector">Inspector</option>
                                                    <option value="Supervisor">Supervisor</option>
                                                    <option value="Certificate Reviewer">Certificate Reviewer</option>
                                                    <option value="Technical Manager">Technical Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="row">
                              
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                        <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="selected-count">Select Department</span>
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
                                                            Inspection
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                        NDT
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                        Training
                                                    </div>
                                                </div>
                                                <div class="mainoptionContainer">
                                                    <div class="dropfilter_options">
                                                        <input type="checkbox"
                                                            class="individual-option form-check-input">
                                                        Operator Assessment
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
                                    <label class="form-label">Region</label>
                                    <select class="select2">
                                        <option>Select</option>
                                        <option value="Manager">New Delhi</option>
                                        <option value="Supervisor">Bangalore</option>
                                        <option value="Trainer">Mumbai</option>
                                        <option value="User/Assessor">Pune</option>
                                        <option value="Accountant">Karnatka</option>

                                    </select>
                                </div>
                            </div>
                                    <div class="col-lg-12 mb-4">
                                      <label class="form-label">Upload Profile</label>
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
                                      
                                  </div>
                                </div>
                                
                            </div>

                          </div>
                          

                          

                        </div>
      
                       
                        <div class="fieldsSetting_wrapperFRM addbordertop">
                          <header class="profile-settings-header">
                            <h2 class="default-color">Other Detail</h2>
                            <p class="tertiary-color">Enter and manage User Other information.</p>
                          </header>

                          <div class="formRight_fields">
                                
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label class="form-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-label">Town/City</label>
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                            <label class="form-label">Upload Signature</label>
                                            <input name="file1" type="file" class="dropify" data-height="100" />
                                            </div>
                                    </div>
                                 </div>
                              
                               
                               
                                <div class="FormSubmit_fix_container">
                                        <a href="users.php" class="SaveDataBtn">
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
                    window.location.href = "users.php";
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


<!----------------------
Dropify Code Start Here
------------------------>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
	$('.dropify').dropify();

</script>
<!----------------------
Dropify Code End Here
----------------------->