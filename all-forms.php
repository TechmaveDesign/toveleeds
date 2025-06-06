<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Forms</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Forms</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
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
                    aria-selected="false" id="stickerTab"> Form Templates
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                    Form Categories
                   </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                   <thead>
                        <tr>

                            <th>Template Name</th>
                            <th>Create Date</th>
                            <th>Created By </th>
                            <th>Last Modified Date</th>
                            <th>Last Modified By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                                   
                                                   <tr>
                                                       <td>Compliance Form Template 1 <a href="#" class="templateEditBtn" data-bs-toggle="modal" data-bs-target="#EditGroupModal"><iconify-icon icon="fluent:edit-24-regular"></iconify-icon></a></td>
                                                       <td>05 Oct, 2025</td>
                                                       <td>William Karlo</td>
                                                       <td>10 Oct, 2025</td>
                                                       <td>Jimmy Smith</td>
                                                       <td>
                                                           <div class="d-flex align-items-center ActionDropdown">
                                                               <div class="d-flex">
                                                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       href="edit-form-template.php"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="Edit Template">
                                                                       <span class="icon">
                                                                           <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                       </span>
                                                                   </a>
                                                                   <!-- <a href="view-compliance-job-form-template.php"
                                                                       class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="View Template">
                                                                       <span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span>
                                                                   </a> -->
                                                               </div>
                                                           </div>
                                                       </td>
                                                   </tr>
   
                                                   <tr>
                                                       <td>Compliance Form Template 2 <a href="#" class="templateEditBtn" data-bs-toggle="modal" data-bs-target="#EditGroupModal"><iconify-icon icon="fluent:edit-24-regular"></iconify-icon></a></td>
                                                       <td>12 Nov, 2025</td>
                                                       <td>Emily Johnson</td>
                                                       <td>18 Nov, 2025</td>
                                                       <td>Michael Brown</td>
                                                       <td>
                                                           <div class="d-flex align-items-center ActionDropdown">
                                                               <div class="d-flex">
                                                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       href="edit-form-template.php"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="Edit Template">
                                                                       <span class="icon">
                                                                           <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                       </span>
                                                                   </a>
                                                                   <!-- <a href="view-compliance-job-form-template.php"
                                                                       class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="View Template">
                                                                       <span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span>
                                                                   </a> -->
                                                               </div>
                                                           </div>
                                                       </td>
                                                   </tr>
   
                                                   <tr>
                                                       <td>Compliance Form Template 3 <a href="#" class="templateEditBtn" data-bs-toggle="modal" data-bs-target="#EditGroupModal"><iconify-icon icon="fluent:edit-24-regular"></iconify-icon></a></td>
                                                       <td>25 Dec, 2025</td>
                                                       <td>Sarah Connor</td>
                                                       <td>30 Dec, 2025</td>
                                                       <td>John Doe</td>
                                                       <td>
                                                           <div class="d-flex align-items-center ActionDropdown">
                                                               <div class="d-flex">
                                                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       href="edit-form-template.php"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="Edit Template">
                                                                       <span class="icon">
                                                                           <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                       </span>
                                                                   </a>
                                                                   <!-- <a href="view-compliance-job-form-template.php"
                                                                       class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="View Template">
                                                                       <span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span>
                                                                   </a> -->
                                                               </div>
                                                           </div>
                                                       </td>
                                                   </tr>
   
                                                   <tr>
                                                       <td>Compliance Form Template 4 <a href="#" class="templateEditBtn" data-bs-toggle="modal" data-bs-target="#EditGroupModal"><iconify-icon icon="fluent:edit-24-regular"></iconify-icon></a></td>
                                                       <td>08 Jan, 2026</td>
                                                       <td>David Miller</td>
                                                       <td>15 Jan, 2026</td>
                                                       <td>Emma Wilson</td>
                                                       <td>
                                                           <div class="d-flex align-items-center ActionDropdown">
                                                               <div class="d-flex">
                                                                   <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       href="edit-form-template.php"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="Edit Template">
                                                                       <span class="icon">
                                                                           <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                                                       </span>
                                                                   </a>
                                                                   <!-- <a href="view-compliance-job-form-template.php"
                                                                       class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                       data-bs-toggle="tooltip" data-placement="top"
                                                                       title=""
                                                                       data-bs-original-title="View Template">
                                                                       <span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span>
                                                                   </a> -->
                                                               </div>
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
                  <thead>
                        <tr>

                            <th>Category Name</th>
                            <th>Create Date</th>
                            <th>Created By </th>
                            <th>Last Modified Date</th>
                            <th>Last Modified By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                                   
                    <tr>
                        <td>Electrical</td>
                        <td>05 Oct, 2025</td>
                        <td>William Karlo</td>
                        <td>10 Oct, 2025</td>
                        <td>Jimmy Smith</td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                href="#"
                                title="Edit Category"
                                data-bs-toggle="modal"
                                data-bs-target="#EditGroupModalCategory">
                                    <span class="icon">
                                        <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Plumbing</td>
                        <td>12 Nov, 2025</td>
                        <td>Sarah Johnson</td>
                        <td>18 Nov, 2025</td>
                        <td>Michael Brown</td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                href="#"
                                title="Edit Category"
                                data-bs-toggle="modal"
                                data-bs-target="#EditGroupModalCategory">
                                    <span class="icon">
                                        <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Carpentry</td>
                        <td>20 Dec, 2025</td>
                        <td>David Miller</td>
                        <td>25 Dec, 2025</td>
                        <td>Emily Davis</td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                href="#"
                                title="Edit Category"
                                data-bs-toggle="modal"
                                data-bs-target="#EditGroupModalCategory">
                                    <span class="icon">
                                        <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Painting</td>
                        <td>15 Jan, 2026</td>
                        <td>Olivia Wilson</td>
                        <td>20 Jan, 2026</td>
                        <td>James Anderson</td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                href="#"
                                title="Edit Category"
                                data-bs-toggle="modal"
                                data-bs-target="#EditGroupModalCategory">
                                    <span class="icon">
                                        <iconify-icon icon="fluent:edit-16-regular"></iconify-icon>
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

<!-- Modal -->
<div class="addEnquiry">
  <form action="create-form-template.php">
    <div class="modal fade" id="createfolderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="assets/img/newimages/icons8-form-100.png" alt="">
                <h5>Create Template</h5>
                <p>Organize your content effectively with customizable Templates.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Template Name" value="">
              </div>
              <div class="form-group">
                  <!-- <label for="category" class="form-label">Select Category</label> -->
                  <select class="form-select select2" id="category">
                      <option value="Select Category" disabled selected>Select Category</option>
                      <option value="Electrical">Electrical</option>
                      <option value="Plumbing">Plumbing</option>
                      <option value="HVAC">HVAC</option>
                      <!-- Add more categories here -->
                  </select>
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary ">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Continue to Process
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="EditGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="assets/img/newimages/icons8-form-100.png" alt="">
                <h5>Edit Template</h5>
                <p>Organize your content effectively with customizable Templates.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Template Name" value="Compliance Form Template 1">
              </div>
              <div class="form-group">
                  <!-- <label for="category" class="form-label">Select Category</label> -->
                  <select class="form-select select2">
                      <option value="Select Category" disabled >Select Category</option>
                      <option value="Electrical" selected>Electrical</option>
                      <option value="Plumbing">Plumbing</option>
                      <option value="HVAC">HVAC</option>
                      <!-- Add more categories here -->
                  </select>
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Save & Update
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>


<!-- Modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="createfolderModalCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="assets/img/newimages/category.png" alt="" class="mb-3">
                <h5>Create Category</h5>
                <p>Quickly create and organize categories with ease.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Category Name" value="">
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary ">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Create & Save
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div class="addEnquiry">
  <form action="#">
    <div class="modal fade" id="EditGroupModalCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="sectionCreateBox">
            <div class="actionBtnSection text-end">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="iconImageSection">
                <img src="assets/img/newimages/category.png" alt="" class="mb-3">
                <h5>Edit Category</h5>
                <p>Effortlessly update and organize your categories.</p>
              </div>
            <div class="form-group">
                  <!-- <label class="form-label" for="#">Enter Section Name</label> -->
                  <input class="form-control" type="text" placeholder="Category Name" value="Electrical">
              </div>
            </div>
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
            <div class="buttontext">
              <div class="formediticon_modal">
                <iconify-icon icon="hugeicons:edit-02"></iconify-icon>
              </div>
              Save & Update
            </div>
            <iconify-icon icon="bi:arrow-right"></iconify-icon>
          </button>

          </div>
        </div>
      </div>
    </div>
  </form>
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent immediate action

        // Show loading dots
        button.classList.add('btn-loading');
        button.insertAdjacentHTML('beforeend', `
          <div class="loading-dots">
            <span></span><span></span><span></span>
          </div>
        `);

        // Simulate a delay before taking action
        setTimeout(function() {
          // Hide the modals when applicable
          ['createfolderModal', 'EditGroupModal'].forEach(function(modalId) {
            var modalElement = document.getElementById(modalId);
            if (modalElement) {
              var modalInstance = bootstrap.Modal.getInstance(modalElement); 
              if (modalInstance) {
                modalInstance.hide();
              }
            }
          });

          // Remove loading dots
          button.classList.remove('btn-loading');
          var loadingDots = button.querySelector('.loading-dots');
          if (loadingDots) {
            loadingDots.remove();
          }

          // If inside the EditGroupModal, only hide it
          if (button.classList.contains('saveAndContinue')) {
            return; // Stop execution here, no form submission
          }

          // Otherwise, submit the form (for "Continue to Process" button)
          button.closest("form").submit();
        }, 1000); // Adjust delay as needed
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
