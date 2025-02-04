<?php include("header.php") ?>

<!-- Fancybox CSS -->
<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Job Order Inspection Details</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="job-orders.php">Job Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Job Order Details</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <div class="mb-2 d-flex gap-2">
               <a href="inspection-job-order-list.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
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
   
    <div class="">
    <div class="row">

<div class="col-lg-12">
    <div class="status-tracker">
        <div class="status-step" data-status="Order booked">
            <div class="circle"></div>
            <span>Order Pending</span>
            <div class="arrow-icon"></div>
        </div>
        <div class="status-step" data-status="Shoots scheduled">
            <div class="circle"></div>
            <span>Order In Progress</span>
            <div class="arrow-icon"></div>
        </div>
        <div class="status-step" data-status="Deliverables ready">
            <div class="circle"></div>
            <span>Approved</span>
            <div class="arrow-icon"></div>
        </div>
        <div class="status-step" data-status="Shoots complete">
            <div class="circle"></div>
            <span>Certificate/Sticker Approval </span>
            <div class="arrow-icon"></div>
        </div>
      
        
    </div>

</div>
<div class="col-xl-3">
    <div class="card">
        <div class="card-body p-0">
            <div class="bg-light rounded p-3 mb-2">
                <div class="text-center ">
                    <a href="javascript:void(0);" class="avatar avatar-xl online avatar-rounded">
                        <img src="assets/img/users/user-11.jpg" alt="Img">
                    </a>
                    <h5 class="mb-1"><a href="javascript:void(0);">James Hong </a></h5>
                    <p class="fs-12">Status : <span
                            class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                            <i class="ti ti-point-filled me-1"></i>Active
                        </span></p>
                </div>

            </div>

            <div class="card-body p-0">

                <div class="p-3 border-bottom jbClientDetails_card">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5>Client Details</h5>
                    </div>
                    <div class="d-flex align-items-center  mb-3">
                        <div class="avatar avatar-md border rounded-circle iconclDatainp">
                            <iconify-icon icon="hugeicons:face-id"></iconify-icon>
                        </div>
                        <div class="ms-2">
                            <h6 class="clientcarddata_label">Client ID</h6>
                            <span class="d-block clientemail clientdata_text">#CL001</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center  mb-3">
                        <div class="avatar avatar-md border rounded-circle iconclDatainp">
                            <iconify-icon icon="mage:email-opened"></iconify-icon>
                        </div>
                        <div class="ms-2">
                            <h6 class="clientcarddata_label">Email</h6>
                            <span
                                class="d-block clientemail clientdata_text">Jameshong324@gmail.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center file-name-icon mb-3">
                        <div class="avatar avatar-md border rounded-circle iconclDatainp">
                            <iconify-icon icon="solar:phone-broken"></iconify-icon>
                        </div>
                        <div class="ms-2">
                            <h6 class="clientcarddata_label">Phone</h6>
                            <span class="d-block clientphone clientdata_text">+ (401)
                                459-2434</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center file-name-icon">
                        <div class="avatar avatar-md border rounded-circle iconclDatainp">
                            <iconify-icon icon="fluent:location-28-regular"></iconify-icon>
                        </div>
                        <div class="ms-2">
                            <h6 class="clientcarddata_label">Address</h6>
                            <span class="d-block clientaddress clientdata_text">202 Oak Drive,
                                Building 5, Orland</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="p-3 border-bottom">
                    <h5 class="mb-2">Service Type</h5>
                    <div class="d-flex align-items-center">
                        <span
                            class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                            Operator Assessment
                        </span>

                    </div>
                </div> -->

            </div>
            <div>

            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 middlereport_scroll">
    <div class="card">
        <div class="card-body pb-1">
            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                <div>
                    <h4 class="mb-1">Inspection of Air Compressor</h4>
                    <p>Job Order ID : <span class="text-primary"> PRO-0004</span></p>
                </div>

                <!-- <a href="#" class="btn btn-primary d-flex align-items-center cmnaddbtn"><iconify-icon icon="ph:download-light"></iconify-icon> Download Certificate/Sticker</a> -->

            </div>
            <div class="row align-items-center">
            <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3"><i
                            class="ti ti-square-rounded me-2"></i>Service Type</p>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                          
                            <h6 class="fs-12">Equipment Inspection</h6>
                        </div>

                    </div>
                </div>
            <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3">
                        <iconify-icon icon="hugeicons:tools" class="me-2"></iconify-icon>
                        Equipment Name
                    </p>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                          
                            <h6 class="fs-12">Air Compressor</h6>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3">
                        <iconify-icon icon="formkit:datetime" class="me-2"></iconify-icon>
                       Schedule Date & Time
                </p>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                          
                            <h6 class="fs-12">10/02/2024 15:15</h6>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3">
                    <iconify-icon icon="uiw:date" class="me-2"></iconify-icon>
                            Deadline
                        </p>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                          
                            <h6 class="fs-12">10/02/2024</h6>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3"><i
                            class="ti ti-square-rounded me-2"></i>Status</p>
                </div>
                <div class="col-sm-8">
                    <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3"><i
                            class="ti ti-point-filled me-1"></i>InProgress</span>
                </div>

                <div class="col-sm-4">
                    <p class="d-flex align-items-center mb-3"><i
                            class="ti ti-user-star me-2"></i>Assignee</p>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                            <a href="#"
                                class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
                                <img src="assets/img/users/user-45.jpg" alt="Img">
                            </a>
                            <h6 class="fs-12"><a href="#">Dwight</a></h6>
                        </div>

                    </div>
                </div>
              

                <div class="col-sm-12">
                    <div class="mb-3">
                        <h6 class="mb-1">Additional Notes</h6>
                        <p>The Enhanced Patient Management System (EPMS) project aims to modernize
                            and streamline
                            the patient management processes within. By integrating advanced
                            technologies and optimizing existing
                            workflows, the project seeks to improve patient care, enhance
                            operational
                            efficiency, and ensure compliance with regulatory standards.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="card">
        <div class="card-header">
            <h5>Inspection for Job Order</h5>
        </div>
        <div class="card-body">
            
        </div>
    </div> -->
    <h6 class="SecTitleHUo">Inspection List for a Job Order</h6>
    <div class="card">
        <div class="card-header headerNIO">
            <h6>Equipment  No : 1</h6>
            <span class="badge badge-soft-success">Completed</span>
        </div>
        <div class="card-body pb-0">
        <div class="row align-items-center">
    
            <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
                <iconify-icon icon="hugeicons:tools" class="me-2"></iconify-icon>
                Equipment Name
            </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12">Air Compressor</h6>
                </div>

            </div>
        </div>
        
        <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
            <iconify-icon icon="uiw:date" class="me-2"></iconify-icon>
                    Completion On
                </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12">27 Jan, 2025 11:00 AM</h6>
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
            <iconify-icon icon="uiw:date" class="me-2"></iconify-icon>
                    Inspection Id
                </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12"> #5432134</h6>
                </div>

            </div>
        </div>
    </div>
        </div>
        <div class="card-footer CardFooter">
            <div class="FootHu">
            <h6 class="ResultFind">Findings: <span style="color:#04b85e;">90% Pass</span></h6>
            <a href="inspection-edit-rd1-form.php" class="DetailBtnInspection">View Detail</a>
            </div>
            
        </div>
    </div>

    <div class="card">
        <div class="card-header headerNIO">
            <h6>Equipment  No : 1</h6>
            <span class="badge badge-soft-success">Completed</span>
        </div>
        <div class="card-body pb-0">
        <div class="row align-items-center">
    
            <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
                <iconify-icon icon="hugeicons:tools" class="me-2"></iconify-icon>
                Equipment Name
            </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12">Backhoe Loader</h6>
                </div>

            </div>
        </div>
        
        <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
            <iconify-icon icon="uiw:date" class="me-2"></iconify-icon>
                    Completion On
                </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12">27 Jan, 2025 11:00 AM</h6>
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <p class="d-flex align-items-center mb-3">
            <iconify-icon icon="uiw:date" class="me-2"></iconify-icon>
                    Inspection Id
                </p>
        </div>
        <div class="col-sm-8">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                    
                    <h6 class="fs-12"> #5432156</h6>
                </div>

            </div>
        </div>
    </div>
        </div>
        <div class="card-footer CardFooter">
            <div class="FootHu">
            <h6 class="ResultFind">Findings: <span style="color:#04b85e;">90% Pass</span></h6>
            <a href="inspection-edit-rd1-form.php" class="DetailBtnInspection">View Detail</a>
            </div>
            
        </div>
    </div>

            <!-- card end -->

    <div>

    </div>
</div>

<div class="col-xl-3">
    <div class="card">
        <div class="card-header">
          <h5 class="mb-3">Attachments</h5>
        </div>
        <div class="card-body p-0">
        <ul class="AttachmentsDoc">
        <li>
            <a href="assets/img/newimages/idproof.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip2.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip3.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip2.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip3.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        

    </ul>

        </div>
    </div>

</div>

</div>
        

    </div>

</div>

<?php include("footer.php") ?>

<!-- status tracker js start -->
<script>
    $(document).ready(function() {
        // Add the Iconify icon dynamically to each step
        $(".status-step .arrow-icon").html(
            '<iconify-icon icon="iconamoon:arrow-right-2-light" width="20" height="20"></iconify-icon>'
        );
        // Function to update the status
        function updateStatus(currentStatus) {
            $(".status-step").each(function() {
                const stepStatus = $(this).data("status");
                if (stepStatus === currentStatus) {
                    $(this).addClass("completed").prevAll().addClass("completed");
                    $(this).nextAll().removeClass("completed");
                }
            });
        }
        // Example: Update to "Shoots complete"
        updateStatus("Shoots complete");
    });
</script>
<!-- end -->

<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js" type=""></script>
<!-- Fancybox JS -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type=""></script>
<!-- Custom JS -->
<script src="assets/js/projects.js" type=""></script>