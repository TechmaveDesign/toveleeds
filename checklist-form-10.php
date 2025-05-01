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
    .inspection-table th, .inspection-table td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: center;
    }
    .inspection-table th {
        background-color: #f8f9fa;
    }
    table.inspection-table {
        width: 100%;
        margin-top: 10px;
    }
    .Centercard_tilte {
        text-align: center;
    }
    .Centercard_tilte {
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    .col-md-6 {
        width: 50%;
        padding: 0 15px;
    }
    .col-lg-12 {
        width: 100%;
        padding: 0 15px;
    }
    .signature-section {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }
    .signature-box {
        width: 45%;
        text-align: center;
    }
    .qr-code {
        width: 100px;
        height: 100px;
        background: #ddd;
        display: inline-block;
    }
    .disclaimer {
        margin-top: 20px;
        font-size: 12px;
        color: #555;
    }
</style>
<!-- Page Wrapper -->
<div class="content">
    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Inspection Checklist - 10 Form View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Job Form Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Inspection Checklist - 10 Form</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

        <div class="mb-2 d-flex gap-2">
                <a href="javascript:void(0);" id="editButton" class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="akar-icons:edit"></iconify-icon> Edit
                </a>
                <div class="btn-group">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Preview Documents
               </button>
                <ul class="dropdown-menu" style="">
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Checklist</a>
                    </li>
                </ul>
                </div>
                <div class="btn-group">
              
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download Documents 
               </button>
                <ul class="dropdown-menu" style="">
                   
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Checklist</a>
                    </li>
                    
                </ul>
                </div>
              
            </div>
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <div class="card tablemaincard_nopaddingleftright">
        <div class="CheckListMainContainer">
        <form action="#">
    <table style="border-collapse: collapse;border: medium;width: 707px; margin: 40px auto;">
    <tbody>
        <tr>
            <td colspan="21" style="width: 522.8pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:16px;line-height:107%;font-family:"Calibri",sans-serif;'>Inspection Checklist [Crane]</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 85.2pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Checklist No.</span></strong></p>
            </td>
            <td colspan="4" style="width: 82.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>CL-98765</span></p>
            </td>
            <td colspan="5" style="width: 93.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Job Order No.</span></strong></p>
            </td>
            <td colspan="4" style="width: 66.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>JO-12345</span></p>
            </td>
            <td colspan="3" style="width: 101.75pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>FIR No.</span></strong></p>
            </td>
            <td colspan="3" style="width: 93.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>FIR-66778</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Inspection Date</span></strong></p>
            </td>
            <td colspan="6" style="width: 134.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>2025-04-30</span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Next Inspection Date</span></strong></p>
            </td>
            <td colspan="5" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>2025-10-30</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Equipment Owner</span></strong></p>
            </td>
            <td colspan="16" style="width: 396.3pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>DEF Construction Ltd.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Work Location</span></strong></p>
            </td>
            <td colspan="16" style="width: 396.3pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Construction Site C, North Sector</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Standard Reference</span></strong></p>
            </td>
            <td colspan="16" style="width: 396.3pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>ASME B30.5-2021</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Inspection Type</span></strong></p>
            </td>
            <td colspan="6" style="width: 134.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Annual</span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Manufacturer Name</span></strong></p>
            </td>
            <td colspan="5" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Liebherr</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Year of Manufacture</span></strong></p>
            </td>
            <td colspan="6" style="width: 134.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>2020</span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>ID / VIN / Serial No.</span></strong></p>
            </td>
            <td colspan="5" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>CR-45678</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Model No.</span></strong></p>
            </td>
            <td colspan="6" style="width: 134.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>LTM 1200-5.1</span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Equipment No.</span></strong></p>
            </td>
            <td colspan="5" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>EQ-78901</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Registration Plate No.</span></strong></p>
            </td>
            <td colspan="6" style="width: 134.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>XYZ-1234</span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Last Inspection Date</span></strong></p>
            </td>
            <td colspan="5" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>2024-10-30</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" rowspan="10" style="width:104.55pt;border:solid windowtext 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Equipment Detail</span></strong></p>
            </td>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Maximum Rated Capacity</span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>60 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Boom Length</span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>12 meters</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Present Main Hoist Max. Rated Capacity </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>50 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Auxiliary Hoist Capacity </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>10 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Super Lift Mast Length </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>8 meters</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Single line Pull Capacity </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>5 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Main Hook Block Capacity </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>50 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Main Hoist Wire Rope Diameter </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>16 mm</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Auxiliary Hoist Wire Rope Diameter</span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>10 mm</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 209.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Counterweight </span></p>
            </td>
            <td colspan="7" style="width: 209.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>20 tons</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 126.5pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'> </span></strong></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Other</span></strong></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'> </span></strong></p>
            </td>
            <td colspan="16" style="width: 396.3pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Hydraulic system checked</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="21" style="width:522.8pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:29.5pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Inspection Key Points / Criteria</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" rowspan="2" style="width:188.25pt;border:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Field</span></strong></p>
            </td>
            <td colspan="4" style="width: 73.05pt;border-width: 1pt 1pt 1pt medium;border-style: solid solid solid none;border-color: windowtext windowtext windowtext currentcolor;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Status</span></strong></p>
            </td>
            <td colspan="8" rowspan="2" style="width:188.65pt;border:solid windowtext 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Field</span></strong></p>
            </td>
            <td colspan="2" style="width: 72.85pt;border-width: 1pt 1pt 1pt medium;border-style: solid solid solid none;border-color: windowtext windowtext windowtext currentcolor;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Status</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Yes/No</span></strong></p>
            </td>
            <td style="width: 32.55pt;border-width: 1pt 1pt 1pt medium;border-style: solid solid solid none;border-color: windowtext windowtext windowtext currentcolor;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>N/A</span></strong></p>
            </td>
            <td style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>Yes/No</span></strong></p>
            </td>
            <td style="width: 32.35pt;border-width: 1pt 1pt 1pt medium;border-style: solid solid solid none;border-color: windowtext windowtext windowtext currentcolor;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;line-height:107%;font-family:"Calibri",sans-serif;'>N/A</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>1.</span></p>
            </td>
            <td colspan="6" style="width: 150.25pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Boom condition checked</span></p>
            </td>
            <td colspan="3" style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes</span></p>
            </td>
            <td style="width: 32.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td style="width: 37.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>3.</span></p>
            </td>
            <td colspan="7" style="width: 150.75pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Brake system functional</span></p>
            </td>
            <td style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes</span></p>
            </td>
            <td style="width: 32.35pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>2.</span></p>
            </td>
            <td colspan="6" style="width: 150.25pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Load test completed</span></p>
            </td>
            <td colspan="3" style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes</span></p>
            </td>
            <td style="width: 32.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td style="width: 37.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>4.</span></p>
            </td>
            <td colspan="7" style="width: 150.75pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Counterweight secure</span></p>
            </td>
            <td style="width: 40.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes</span></p>
            </td>
            <td style="width: 32.35pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="17" style="width: 416.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Does the equipment need any maintenance?</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>If yes, mention----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></p>
            </td>
            <td colspan="4" style="width: 105.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes, replace worn cables.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="17" style="width: 416.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Based on visual and operational inspection, does the equipment is fit to perform the intended job?</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>If no, why-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span></p>
            </td>
            <td colspan="4" style="width: 105.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Yes, after cable replacement.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width:126.5pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="6" style="width: 134.8pt;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="5" style="width: 126.95pt;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="5" style="width: 134.55pt;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="21" style="width:522.8pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;'><strong><span style='font-family:"Calibri",sans-serif;color:black;'>Declaration:</span></strong><span style='font-family:"Calibri",sans-serif;color:black;'> </span><span style='font-family:"Calibri",sans-serif;'>I/We hereby declare that the above information is correct, and the equipment has been thoroughly inspected as far as possible in accordance with manufacturer/standard and found to be free from any apparent defect.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="21" style="width:522.8pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;'><strong><span style='font-family:"Calibri",sans-serif;color:black;'></span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="8" style="width:205.55pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Inspected by [sign]</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="7" rowspan="2" style="width:122.3pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'>[QR Code]</span></p>
            </td>
            <td colspan="6" style="width:194.95pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Approved by client [sign]</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="8" style="width:205.55pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Name] Inspector</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Michael Brown</span></p>
            </td>
            <td colspan="6" style="width:194.95pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Client Name]</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Sarah Johnson</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="8" style="width:205.55pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="7" style="width:122.3pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
            <td colspan="6" style="width:194.95pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="21" style="width:522.8pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:11px;line-height:107%;font-family:"Calibri",sans-serif;color:black;'>Disclaimer: </span><span style='font-size:11px;line-height:  107%;font-family:"Calibri",sans-serif;'>Tove Leeds is not liable for any failure, damage caused by misuse, improper installation, poor maintenance, environmental conditions and user errors etc.</span></p>
            </td>
        </tr>
    </tbody>
</table>
</form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>