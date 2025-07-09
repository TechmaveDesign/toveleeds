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
            <h2 class="mb-1">RR -  Form View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Job Form Management</li>
                    <li class="breadcrumb-item active" aria-current="page">RR - 1 Form</li>
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
            <td colspan="11" style="width: 522.8pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-size:16px;line-height:107%;font-family:"Calibri",sans-serif;'>Rejection Report [Equipment Name]</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 87.05pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Rejection No.</span></strong></p>
            </td>
            <td colspan="3" style="width: 87.05pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Job Order No.</span></strong></p>
            </td>
            <td colspan="3" style="width: 87.1pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 87.15pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>FIR No.</span></strong></p>
            </td>
            <td style="width: 87.3pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 127.35pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Inspection Date</span></strong></p>
            </td>
            <td colspan="9" style="width: 395.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 127.35pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Client Name</span></strong></p>
            </td>
            <td colspan="9" style="width: 395.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 127.35pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Location</span></strong></p>
            </td>
            <td colspan="9" style="width: 395.45pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width:522.8pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:29.5pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Description</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width:522.8pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:29.5pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><strong><span style='font-family:"Calibri",sans-serif;'>Reason of Rejection</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width: 522.8pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 130.45pt;border-width: medium 1pt 1pt;border-style: none solid solid;border-color: currentcolor windowtext windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><strong><span style='font-family:"Calibri",sans-serif;'>Quantity</span></strong></p>
            </td>
            <td colspan="5" style="width: 196.1pt;border-width: medium medium 1pt;border-style: none none solid;border-color: currentcolor currentcolor windowtext;border-image: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="3" style="width: 196.25pt;border-width: medium 1pt 1pt medium;border-style: none solid solid none;border-color: currentcolor windowtext windowtext currentcolor;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="11" style="width:522.8pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:  justify;'><strong><span style='font-family:"Calibri",sans-serif;color:black;'>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width:206.6pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Inspected by [sign]</span></p>
            </td>
            <td colspan="2" rowspan="2" style="width:117.0pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;text-align:center;'><span style='font-family:"Calibri",sans-serif;'>[QR Code]</span></p>
            </td>
            <td colspan="4" style="width:199.2pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>Approved by client [sign]</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width:206.6pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Name] Inspector</span></p>
            </td>
            <td colspan="4" style="width:199.2pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Client Name]</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width:206.6pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Mobile No.]</span></p>
            </td>
            <td colspan="2" style="width:117.0pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4" style="width:199.2pt;padding:0in 5.4pt 0in 5.4pt;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;font-size:11.0pt;font-family:"Aptos",sans-serif;'><span style='font-family:"Calibri",sans-serif;'>[Mobile No]</span></p>
            </td>
        </tr>
    </tbody>
</table>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>