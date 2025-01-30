<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h3 class="mb-1">All Notifications</h3>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                  
                    <li class="breadcrumb-item active" aria-current="page">All Notifications</li>
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
    <div id="tablefiltesa_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leftprFilters">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="input-blocks">
                                <iconify-icon icon="famicons:location-outline" class="info-img"></iconify-icon>
                                    <!-- <i data-feather="box" class="info-img"></i> -->
                                        <select class="select2">
                                            <option disabled selected>Select Location</option>
                                            <option>123 Main Street, Springfield, IL 62701</option>
                                            <option>456 Elm Street, Metropolis, NY 10001</option>
                                            <option>789 Oak Avenue, Gotham, NJ 07001</option>
                                            <option>101 Maple Drive, Star City, CA 90210</option>
                                            <option>202 Pine Lane, Smallville, KS 67524</option>
                                            <option>303 Birch Boulevard, Central City, CO 80014</option>
                                            <option>404 Cedar Road, Coast City, OR 97005</option>
                                            <option>505 Walnut Street, Blüdhaven, DE 19901</option>
                                            <option>606 Aspen Way, Fawcett City, FL 33001</option>
                                            <option>707 Redwood Avenue, Midway City, TX 75001</option>
                                        </select>
                                </div>
                            </div>

                          <div class="col-lg-3">
                            <div class="rightPrFilters">
                        <div class="input-icon mb-2 position-relative">
                            <span class="input-icon-addon">
                                <i class="ti ti-calendar text-gray-9"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy">
                        </div>
                        
                    </div>
                            </div>

                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /Filter -->
        </div>

        <div class="notificationAll">
            <div class="row">
                <div class="col-lg-12">
                    <div class="notificationBox">
                   
                    <ul>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to Inspector Module</h6>
                                    <p class="fs-13 mb-0">Today at 10:00 AM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">John Hammond commented on your post</h6>
                                    <p class="fs-13 mb-0">Today at 9:45 AM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Tim Murphy sent you a message regarding the upcoming team retreat. He shared some exciting ideas for team-building activities that could enhance collaboration and morale.</h6>
                                    <p class="fs-13 mb-0">Last week at 4:50 PM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Sarah Harding uploaded a new document</h6>
                                    <p class="fs-13 mb-0">Yesterday at 5:30 PM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Alan Grant sent a connection request</h6>
                                    <p class="fs-13 mb-0">Yesterday at 3:15 PM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Ellie Sattler liked your comment on the discussion about climate change and biodiversity. Your input was greatly appreciated!</h6>
                                    <p class="fs-13 mb-0">2 days ago at 1:10 PM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Ian Malcolm shared your post on "The Importance of Ecosystem Preservation in Urban Planning." His comment was insightful and engaged a large audience.</h6>
                                    <p class="fs-13 mb-0">2 days ago at 12:45 PM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Robert Muldoon invited you to a meeting about safety protocols in remote working environments. Please confirm your availability for the proposed date and time.</h6>
                                    <p class="fs-13 mb-0">3 days ago at 9:00 AM</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notificationItem d-flex align-items-start mb-4">
                                <div class="Bellicon">
                                    <iconify-icon icon="iconoir:bell" ></iconify-icon>
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-14 fw-medium text-truncate mb-1">Donald Gennaro assigned you a new task: Review and finalize the annual report for the board meeting. The document includes key insights about the company's performance over the last quarter.</h6>
                                    <p class="fs-13 mb-0">3 days ago at 8:30 AM</p>
                                </div>
                            </div>
                        </li>
                     
                    </ul>


					
				
					
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

