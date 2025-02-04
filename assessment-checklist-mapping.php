<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Assessment Mapping</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Assessment Mapping</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
            <a href="#" data-bs-toggle="modal" data-bs-target="#AddMapChecklistModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Map Checklist
                </a>
            </div>

            <div class="mb-2" id="addTagBtn" style="display: none;">
              
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Map Form
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
    <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Checklist Name</th>
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
                            <td>Checklist 1</td>
                            <td>Agricultural Tractor Operator</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
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
                               2
                            </td>
                            <td>Checklist 2</td>
                            <td>Air Compressor Operator</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
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
                               3
                            </td>
                            <td>Checklist 3</td>
                            <td>Anchor Machine Operator</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
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
                              4
                            </td>
                            <td>Checklist 4</td>
                            <td>Asphalt Batching Plant Operator</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
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
                              5
                            </td>
                            <td>Checklist 5</td>
                            <td>Asphalt Milling Machine Operator</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
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



<!-- Add Map Checklist with Equipment start -->
<div class="modal fade custombottm_modalStyle" id="AddMapChecklistModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Map Checklist with Equipment</h4>
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
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Checklist</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Checklist 1">Checklist 1</option>
                                        <option value="Checklist 2">Checklist 2</option>
                                        <option value="Checklist 3">Checklist 3</option>
                                        <option value="Checklist 4">Checklist 4</option>
                                        <option value="Checklist 5">Checklist 5</option>
                                        <option value="Checklist 6">Checklist 6</option>
                                        <option value="Checklist 7">Checklist 7</option>
                                        <option value="Checklist 8">Checklist 8</option>
                                        <option value="Checklist 9">Checklist 9</option>
                                        <option value="Checklist 10">Checklist 10</option>

                                    </select>
                            </div>
                            <div class="form-group">
                                    <label class="form-label">Select Equipment</label>
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
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & Update
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->

<!-- Add Map Checklist with Equipment start -->
<div class="modal fade custombottm_modalStyle" id="EditMapChecklistModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Map Checklist with Form</h4>
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
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Checklist</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Checklist 1">Checklist 1</option>
                                        <option value="Checklist 2">Checklist 2</option>
                                        <option value="Checklist 3">Checklist 3</option>
                                        <option value="Checklist 4">Checklist 4</option>
                                        <option value="Checklist 5">Checklist 5</option>
                                        <option value="Checklist 6">Checklist 6</option>
                                        <option value="Checklist 7">Checklist 7</option>
                                        <option value="Checklist 8">Checklist 8</option>
                                        <option value="Checklist 9">Checklist 9</option>
                                        <option value="Checklist 10">Checklist 10</option>

                                    </select>
                            </div>
                            <div class="form-group">
                                    <label class="form-label">Select Equipment</label>
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
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & Update
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
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
                <h5 class="modal-title" id="subcategoryModalLabel">All Mapped Equipments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mdheight_small">
                <!-- Search Bar -->
                <div class="searchwrapper_category">
                    <input type="text" id="subcategorySearch" class="form-control" placeholder="Search equipmets..."
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
                modalTitle.textContent = `${categoryName} - All Equipments`;
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
                            noMessage.textContent = 'No Equipment found';
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
