<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Operator Assessment Report</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Operator Assessment Report</li>
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
                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
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
            <th>Job Order No.</th>
            <th>Card No.</th>
            <th>Client</th>
            <th>Job Order Status</th>
            <th>Certificate No.</th>
            <th>Job Title</th>
            <th>Issue Date</th>
            <th>Expiry Date</th>
            <th>Representative Name</th>
            <th>Contact Number</th>
            <th>Email Address</th>
            <th>Region</th>
            <th>Location</th>
            <th>Work Location</th>
            <th>Name</th>
            <th>ID/Iqama/Passport No.</th>
            <th>Letterhead No.</th>
            <th>Old Letterhead No.</th>
            <th>Hologram No.</th>
            <th>Old Hologram No.</th>
            <th>Payment No.</th>
            <th>Quotation No.</th>
            <th>PO No.</th>
            <th>Invoice No.</th>
            <th>Assessor</th>
            <th>Manager</th>
            <th>Approved By</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JO-OP-1001</td>
            <td>OPC-34221</td>
            <td class="sorting_1">
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/users/user-28.jpg" class="img-fluid" alt="Amit Patel">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Amit Patel</a></h6>
                    </div>
                </div>
            </td>
            <td><span class="badge bg-outline-success pendingbadge badgecustomstyle">
                <span class="badge-label">Completed</span>
                <iconify-icon icon="weui:done2-outlined"></iconify-icon>
            </span></td>
            <td>OCERT-1001</td>
            <td>Forklift Operation</td>
            <td>2025-05-10</td>
            <td>2026-05-10</td>
            <td>Rajesh Sharma</td>
            <td>+91-9876543210</td>
            <td>rajesh.sharma@clientco.com</td>
            <td>North</td>
            <td>Delhi</td>
            <td>Site A</td>
            <td>Amit Patel</td>
            <td>ID-123456789</td>
            <td>LH-OP-1001</td>
            <td>OLH-OP-1000</td>
            <td>HOL-2025-001</td>
            <td>OHOL-2024-001</td>
            <td>PAY-OP-1001</td>
            <td>QUO-OP-1001</td>
            <td>PO-OP-1001</td>
            <td>INV-OP-1001</td>
            <td>Vikram Singh</td>
            <td>Anita Desai</td>
            <td>Suresh Kumar</td>
        </tr>
        <tr>
            <td>2</td>
            <td>JO-OP-1002</td>
            <td>OPC-34222</td>
            <td class="sorting_1">
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Priya Mehta">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Priya Mehta</a></h6>
                    </div>
                </div>
            </td>
            <td><span class="badge bg-outline-primary pendingbadge badgecustomstyle">
                <span class="badge-label">In Progress</span>
                <iconify-icon icon="fluent:arrow-sync-checkmark-20-regular"></iconify-icon>
            </span></td>
            <td>OCERT-1002</td>
            <td>Crane Handling</td>
            <td>2025-05-12</td>
            <td>2026-05-12</td>
            <td>Sneha Gupta</td>
            <td>+91-8765432109</td>
            <td>sneha.gupta@clientco.com</td>
            <td>West</td>
            <td>Mumbai</td>
            <td>Site B</td>
            <td>Priya Mehta</td>
            <td>ID-987654321</td>
            <td>LH-OP-1002</td>
            <td>OLH-OP-1001</td>
            <td>HOL-2025-002</td>
            <td>OHOL-2024-002</td>
            <td>PAY-OP-1002</td>
            <td>QUO-OP-1002</td>
            <td>PO-OP-1002</td>
            <td>INV-OP-1002</td>
            <td>Rahul Verma</td>
            <td>Neha Kapoor</td>
            <td>Arjun Rao</td>
        </tr>
        <tr>
            <td>3</td>
            <td>JO-OP-1003</td>
            <td>OPC-34223</td>
            <td class="sorting_1">
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/users/user-32.jpg" class="img-fluid" alt="Vikram Joshi">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Vikram Joshi</a></h6>
                    </div>
                </div>
            </td>
            <td><span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                <span class="badge-label">Pending</span>
                <iconify-icon icon="mdi:clock-outline"></iconify-icon>
            </span></td>
            <td>OCERT-1003</td>
            <td>Scaffolding Safety</td>
            <td>2025-05-15</td>
            <td>2025-06-15</td>
            <td>Kiran Patel</td>
            <td>+91-7654321098</td>
            <td>kiran.patel@clientco.com</td>
            <td>South</td>
            <td>Chennai</td>
            <td>Site C</td>
            <td>Vikram Joshi</td>
            <td>ID-456789123</td>
            <td>LH-OP-1003</td>
            <td>OLH-OP-1002</td>
            <td>HOL-2025-003</td>
            <td>OHOL-2024-003</td>
            <td>PAY-OP-1003</td>
            <td>QUO-OP-1003</td>
            <td>PO-OP-1003</td>
            <td>INV-OP-1003</td>
            <td>Deepak Nair</td>
            <td>Shalini Menon</td>
            <td>Ravi Shankar</td>
        </tr>
        <tr>
            <td>4</td>
            <td>JO-OP-1004</td>
            <td>OPC-34224</td>
            <td class="sorting_1">
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/users/user-34.jpg" class="img-fluid" alt="Anjali Rao">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Anjali Rao</a></h6>
                    </div>
                </div>
            </td>
            <td><span class="badge bg-outline-danger pendingbadge badgecustomstyle">
                <span class="badge-label">Rejected</span>
                <iconify-icon icon="material-symbols:cancel-outline-rounded"></iconify-icon>
            </span></td>
            <td>OCERT-1004</td>
            <td>Rigging & Slinging</td>
            <td>2025-05-18</td>
            <td>2025-06-18</td>
            <td>Manish Kumar</td>
            <td>+91-6543210987</td>
            <td>manish.kumar@clientco.com</td>
            <td>East</td>
            <td>Kolkata</td>
            <td>Site D</td>
            <td>Anjali Rao</td>
            <td>ID-321654987</td>
            <td>LH-OP-1004</td>
            <td>OLH-OP-1003</td>
            <td>HOL-2025-004</td>
            <td>OHOL-2024-004</td>
            <td>PAY-OP-1004</td>
            <td>QUO-OP-1004</td>
            <td>PO-OP-1004</td>
            <td>INV-OP-1004</td>
            <td>Sanjay Das</td>
            <td>Pooja Sharma</td>
            <td>Naveen Reddy</td>
        </tr>
    </tbody>
</table>

        </div>

    </div>

</div>

<?php include("footer.php") ?>