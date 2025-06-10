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
            <h2 class="mb-1">Certificate - 9 Form View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Job Form Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Certificate - 9 Form</li>
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
            <td colspan="27" style="width:522.8pt;border:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:29.8pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:19px;font-family:"Calibri",sans-serif;'>Certificate of Inspection [equipment name]</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 86.35pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Certificate No.</span></strong></p>
            </td>
            <td colspan="5" style="width: 86.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="6" style="width: 91.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Job Order No.</span></strong></p>
            </td>
            <td colspan="6" style="width: 85.8pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="7" style="width: 1.2in;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Checklist No.</span></strong></p>
            </td>
            <td style="width: 86.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 129.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Inspection Date</span></strong></p>
            </td>
            <td colspan="7" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="9" style="width: 129.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Issue Date</span></strong></p>
            </td>
            <td colspan="5" style="width: 129.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 129.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Inspection Type</span></strong></p>
            </td>
            <td colspan="7" style="width: 134.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="9" style="width: 129.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Next Inspection Date</span></strong></p>
            </td>
            <td colspan="5" style="width: 129.2pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 129.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Equipment Owner</span></strong></p>
            </td>
            <td colspan="21" style="width: 392.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 129.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Work Location</span></strong></p>
            </td>
            <td colspan="21" style="width: 392.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 129.85pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Standard Reference</span></strong></p>
            </td>
            <td colspan="21" style="width: 392.95pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Sr. No.</span></strong></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>ID / Tag / Serial No.</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Descriptions / Type</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Manufacturer</span></strong></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Name</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Length</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Width</span></strong></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>(in)</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>SWL</span></strong></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>(ton)</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Remarks</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>1</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>2</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>3</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>4</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>5</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>6</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>7</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>8</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 26.95pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>9</span></p>
            </td>
            <td colspan="3" style="width: 70pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 89.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 78.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 58.5pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="4" style="width: 58.9pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="5" style="width: 53.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width: 86.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;height: 8.1pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Adjust Working Load Limit by Configuration</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 104.55pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Straight Lift</span></p>
            </td>
            <td colspan="6" style="width: 104.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Choked Lift</span></p>
            </td>
            <td colspan="16" style="width: 313.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:14px;font-family:"Calibri",sans-serif;color:#222222;background:white;'>&beta;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" rowspan="2" style="width: 104.55pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'><img width="100" src="assets/img/newimages/certficate/cert9-img1.png" alt="image"></span></p>
            </td>
            <td colspan="6" rowspan="2" style="width: 104.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'><img width="100" src="assets/img/newimages/certficate/cert9-img2.png" alt="image"></span></p>
            </td>
            <td colspan="5" style="width: 114.65pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:14px;font-family:"Calibri",sans-serif;color:#222222;background:white;'>0&ordm;&lt;&beta;&le;7&ordm;</span></p>
            </td>
            <td colspan="7" style="width: 94.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:14px;font-family:"Calibri",sans-serif;color:#222222;background:white;'>7&ordm;&lt;&beta;&le;45&ordm;</span></p>
            </td>
            <td colspan="4" style="width: 104.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:14px;font-family:"Calibri",sans-serif;color:#222222;background:white;'>45&ordm;&lt;&beta;&le;60&ordm;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 114.65pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 24.7pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'><img width="92" src="assets/img/newimages/certficate/cert9-img3.png" alt="image"></span></p>
            </td>
            <td colspan="7" style="width: 94.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 24.7pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'><img width="91" src="assets/img/newimages/certficate/cert9-img4.png" alt="image"></span></p>
            </td>
            <td colspan="4" style="width: 104.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 24.7pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'><img width="91" src="assets/img/newimages/certficate/cert9-img5.png" alt="image"></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 104.55pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>1</span></p>
            </td>
            <td colspan="6" style="width: 104.55pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>0.8</span></p>
            </td>
            <td colspan="5" style="width: 114.65pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>2</span></p>
            </td>
            <td colspan="7" style="width: 94.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>0.4</span></p>
            </td>
            <td colspan="4" style="width: 104.6pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;height: 7.9pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>1</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="21" style="width: 392.1pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Reason For Examination</span></strong></p>
            </td>
            <td colspan="6" style="width: 130.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>B</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 87.1pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>A</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;3-months</span></p>
            </td>
            <td colspan="5" style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>B</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;6-months</span></p>
            </td>
            <td colspan="4" style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>C</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;12-months</span></p>
            </td>
            <td colspan="6" style="width: 87.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>D</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;Written Scheme</span></p>
            </td>
            <td colspan="6" style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>E</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;Exceptional Circumstances</span></p>
            </td>
            <td colspan="3" style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>F</span></strong><span style='font-size:13px;font-family:"Calibri",sans-serif;'>&nbsp;Installation</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 86.35pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Result</span></strong></p>
            </td>
            <td colspan="13" style="width: 220.75pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Accepted &nbsp; &nbsp;</span><span style="font-size:15px;font-family:Wingdings;">&uuml;</span></p>
            </td>
            <td colspan="12" style="width: 215.7pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Rejected&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Name &amp; address of employer&rsquo;s person making and authenticating this report:</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Declaration:</span></strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;I/We hereby declare that the above information is correct, and the equipment has been thoroughly inspected as far as possible in accordance with manufacturer/standard and found to be free from any apparent defect.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 206.75pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Inspected by [sign]</span></p>
            </td>
            <td colspan="7" rowspan="2" style="width:121.5pt;border:none;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:center;'>[QR CODE]</p>
            </td>
            <td colspan="10" style="width: 194.55pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Approved by</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 206.75pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Inspector</span></p>
            </td>
            <td colspan="10" style="width: 194.55pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:16px;font-family:"Aptos",sans-serif;'><strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Shahid Javid </span></strong><span style='font-size:15px;font-family:"Calibri",sans-serif;'>Technical Manager&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:16px;font-family:"Aptos",sans-serif;text-align:  justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
         <tr>
           <td colspan="10" style="width: 206.75pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="7" style="width: 121.5pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="10" style="width: 194.55pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;'><span style="margin-top: 30px;width:92px;height:35px; display: flex;"><img src="assets/img/newimages/certficate/cer1.png" alt=""><img src="assets/img/newimages/certficate/cert2.jpg" alt=""></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="13" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="27" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-size:12px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-size:12px;font-family:"Calibri",sans-serif;'>Disclaimer: Tove Leeds is not liable for any failure, damage caused by misuse, improper installation, poor maintenance, environmental conditions and user errors etc.</span></p>
            </td>
        </tr>
    </tbody>
</table>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>