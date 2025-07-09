<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Inspection Report</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Inspection Report</li>
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
            <th>Certificate No.</th>
            <th>Client</th>
            <th>DLS No.</th>
            <th>Equipment Title</th>
            <th>Inspection Date</th>
            <th>Rejection R No.</th>
            <th>Job Order Status</th>
            <th>Next Inspection Date</th>
            <th>Representative Name</th>
            <th>Contact Number</th>
            <th>Email Address</th>
            <th>Region</th>
            <th>Location</th>
            <th>Work Location</th>
            <th>Standard</th>
            <th>Serial No.</th>
            <th>Registration Plate No.</th>
            <th>Letterhead No.</th>
            <th>Old Letterhead No.</th>
            <th>Sticker No.</th>
            <th>Tag No.</th>
            <th>Payment No.</th>
            <th>Quotation No.</th>
            <th>PO No.</th>
            <th>Invoice No.</th>
            <th>Inspector</th>
            <th>Manager</th>
            <th>Approved By</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JO-2025-001</td>
            <td>CERT-99876</td>
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
            <td>DLS-56789</td>
            <td>Pressure Vessel</td>
            <td>2025-06-01</td>
            <td>RR-0012</td>
            <td><span class="badge bg-outline-success pendingbadge badgecustomstyle">
                <span class="badge-label">Completed</span>
                <iconify-icon icon="weui:done2-outlined"></iconify-icon>
            </span></td>
            <td>2026-06-01</td>
            <td>Rajesh Sharma</td>
            <td>+91-9876543210</td>
            <td>rajesh.sharma@clientco.com</td>
            <td>North</td>
            <td>Delhi</td>
            <td>Site A</td>
            <td>ASME VIII</td>
            <td>SN-123456</td>
            <td>REG-7890</td>
            <td>LH-2025-001</td>
            <td>OLH-2024-001</td>
            <td>STK-45678</td>
            <td>TAG-001</td>
            <td>PAY-2025-001</td>
            <td>QUO-2025-001</td>
            <td>PO-2025-001</td>
            <td>INV-2025-001</td>
            <td>Vikram Singh</td>
            <td>Anita Desai</td>
            <td>Suresh Kumar</td>
        </tr>
        <tr>
            <td>2</td>
            <td>JO-2025-002</td>
            <td>CERT-99877</td>
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
            <td>DLS-56790</td>
            <td>Hydraulic Jack</td>
            <td>2025-06-05</td>
            <td>RR-0013</td>
            <td><span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                <span class="badge-label">Pending</span>
                <iconify-icon icon="mdi:clock-outline"></iconify-icon>
            </span></td>
            <td>2026-06-05</td>
            <td>Sneha Gupta</td>
            <td>+91-8765432109</td>
            <td>sneha.gupta@clientco.com</td>
            <td>West</td>
            <td>Mumbai</td>
            <td>Site B</td>
            <td>ISO 9001</td>
            <td>SN-789012</td>
            <td>REG-7891</td>
            <td>LH-2025-002</td>
            <td>OLH-2024-002</td>
            <td>STK-45679</td>
            <td>TAG-002</td>
            <td>PAY-2025-002</td>
            <td>QUO-2025-002</td>
            <td>PO-2025-002</td>
            <td>INV-2025-002</td>
            <td>Rahul Verma</td>
            <td>Neha Kapoor</td>
            <td>Arjun Rao</td>
        </tr>
        <tr>
            <td>3</td>
            <td>JO-2025-003</td>
            <td>CERT-99878</td>
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
            <td>DLS-56791</td>
            <td>Crane Hook</td>
            <td>2025-06-10</td>
            <td>RR-0014</td>
            <td><span class="badge bg-outline-primary pendingbadge badgecustomstyle">
                <span class="badge-label">In Progress</span>
                <iconify-icon icon="fluent:arrow-sync-checkmark-20-regular"></iconify-icon>
            </span></td>
            <td>2026-06-10</td>
            <td>Kiran Patel</td>
            <td>+91-7654321098</td>
            <td>kiran.patel@clientco.com</td>
            <td>South</td>
            <td>Chennai</td>
            <td>Site C</td>
            <td>API 8C</td>
            <td>SN-345678</td>
            <td>REG-7892</td>
            <td>LH-2025-003</td>
            <td>OLH-2024-003</td>
            <td>STK-45680</td>
            <td>TAG-003</td>
            <td>PAY-2025-003</td>
            <td>QUO-2025-003</td>
            <td>PO-2025-003</td>
            <td>INV-2025-003</td>
            <td>Deepak Nair</td>
            <td>Shalini Menon</td>
            <td>Ravi Shankar</td>
        </tr>
        <tr>
            <td>4</td>
            <td>JO-2025-004</td>
            <td>CERT-99879</td>
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
            <td>DLS-56792</td>
            <td>Forklift</td>
            <td>2025-06-15</td>
            <td>RR-0015</td>
            <td><span class="badge bg-outline-danger pendingbadge badgecustomstyle">
                <span class="badge-label">Rejected</span>
                <iconify-icon icon="material-symbols:cancel-outline-rounded"></iconify-icon>
            </span></td>
            <td>2025-07-15</td>
            <td>Manish Kumar</td>
            <td>+91-6543210987</td>
            <td>manish.kumar@clientco.com</td>
            <td>East</td>
            <td>Kolkata</td>
            <td>Site D</td>
            <td>ANSI B56.1</td>
            <td>SN-901234</td>
            <td>REG-7893</td>
            <td>LH-2025-004</td>
            <td>OLH-2024-004</td>
            <td>STK-45681</td>
            <td>TAG-004</td>
            <td>PAY-2025-004</td>
            <td>QUO-2025-004</td>
            <td>PO-2025-004</td>
            <td>INV-2025-004</td>
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