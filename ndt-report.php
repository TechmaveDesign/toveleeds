<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">NDT Report</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">NDT Report</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <!-- <div class="mb-2 me-2">
                <a href="#" 
                    class="btn btn-secondary d-flex align-items-center cmnaddbtn downloadBtn">
                    <iconify-icon icon="proicons:pdf"></iconify-icon> Download PDF
                </a>
            </div>
            <div class="mb-2">
                <a href="create-job-order.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create Job
                    Order
                </a>
            </div> -->

             <div class="input-icon mb-2 position-relative">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-9"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange"
                                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
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
            <th> Sr. No. </th>
            <th>Job Order No.</th>
            <th>DS No.</th>
            <th>Report No.</th>
            <th>Title</th>
            <th>Test Date</th>
            <th>Card No.</th>
            <th>Job Order Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JO-NDT-2001</td>
            <td>DS-90123</td>
            <td>REP-4501</td>
            <td>Ultrasonic Thickness Test</td>
            <td>2025-06-01</td>
            <td>NDT-CARD-001</td>
            <td><span class="badge bg-outline-success pendingbadge badgecustomstyle">
    <span class="badge-label">Completed</span>
    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
</span>
</td>
        </tr>
        <tr>
            <td>2</td>
            <td>JO-NDT-2002</td>
            <td>DS-90124</td>
            <td>REP-4502</td>
            <td>Dye Penetrant Inspection</td>
            <td>2025-06-03</td>
            <td>NDT-CARD-002</td>
            <td>
                <span class="badge bg-outline-primary pendingbadge badgecustomstyle">
    <span class="badge-label">In Progress</span>
    <iconify-icon icon="fluent:arrow-sync-checkmark-20-regular"></iconify-icon>
</span>

            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>JO-NDT-2003</td>
            <td>DS-90125</td>
            <td>REP-4503</td>
            <td>Radiographic Testing</td>
            <td>2025-06-07</td>
            <td>NDT-CARD-003</td>
            <td>
                <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
    <span class="badge-label">Pending</span>
    <iconify-icon icon="mdi:clock-outline"></iconify-icon>
</span>

            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>JO-NDT-2004</td>
            <td>DS-90126</td>
            <td>REP-4504</td>
            <td>Magnetic Particle Test</td>
            <td>2025-06-10</td>
            <td>NDT-CARD-004</td>
            <td>
                <span class="badge bg-outline-danger pendingbadge badgecustomstyle">
    <span class="badge-label">Rejected</span>
    <iconify-icon icon="material-symbols:cancel-outline-rounded"></iconify-icon>
</span>

            </td>
        </tr>
    </tbody>
</table>

                </div>
      
        

    </div>

</div>


<?php include("footer.php") ?>

