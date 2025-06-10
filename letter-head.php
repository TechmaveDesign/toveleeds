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

    .inspection-table th,
    .inspection-table td {
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
            <h2 class="mb-1">Letterhead - View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Job Form Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Letterhead</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 d-flex gap-2">
                <a href="javascript:void(0);" id="editButton" class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="akar-icons:edit"></iconify-icon> Edit
                </a>
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Preview Documents
                    </button>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a href="#" class="dropdown-item"><span>
                                    <iconify-icon icon="hugeicons:view"></iconify-icon>
                                </span>Preview Checklist</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">

                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Download Documents
                    </button>
                    <ul class="dropdown-menu" style="">

                        <li>
                            <a href="#" class="dropdown-item"><span>
                                    <iconify-icon icon="material-symbols:download-rounded"></iconify-icon>
                                </span>Download Checklist</a>
                        </li>

                    </ul>
                </div>

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
        <div class="CheckListMainContainer">
            <form action="#">
                <table style="width: 707px; margin: 40px auto; height: 900px; border-collapse: collapse; background-image: url('assets/img/newimages/letterhead-images/letterhead-bg.jpg'); background-repeat: repeat;     background-size: cover;">
        <!-- Header Section -->
        <tr>
            <td style="padding: 20px; text-align: left; vertical-align: top;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%; text-align: left;display: flex;align-items: center;gap: 10px; 30px;    margin-left: 15px;">
                            <img src="assets/img/newimages/letterhead-images/letterheadlogo1.png" alt="TUV LEEDS Logo" style="width: 110px; height: auto;" /><img src="assets/img/newimages/letterhead-images/letterheadlogo2.png" alt="TUV LEEDS Logo" style="width: 110px; height: auto;" />
                        </td>
                        <td style="width: 50%; text-align: right; font-size: 14px; color: #003087; direction: rtl;">
                            
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Content Section (Empty for user input) -->
        <tr>
            <td style="padding: 20px; height: 100%; vertical-align: top;">
                <!-- This area can be used for letter content -->
            </td>
        </tr>
        <!-- Footer Section -->
        <tr>
            <td colspan="8" style="padding:15px 0px 0px 15px ;    font-size: 7px; color: #000; text-align: left; border-top: 1px solid #ccc;">
               6507 Umm Al Hamam Street, Umm Al Hamam Riyadh KSA - Tel: 0549968593 - 0556385917 - info@towleeds.com - www.towleeds.com
            </td>
             <td colspan="2" style="padding:15px 0px 0px 15px ;    font-size: 7px; color: #000; text-align: left; border-top: 1px solid #ccc;">
                C.R. No. 1010643616 - VAT No. 31106460830003
            </td>
        </tr>
           <tr>
            <td colspan="13" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
           <tr>
            <td colspan="13" style="width: 522.8pt;border: medium;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height: normal;font-size:16px;font-family:"Aptos",sans-serif;text-align: justify;'><span style='font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
            </td>
        </tr>
    </table>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>