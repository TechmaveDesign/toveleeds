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
</style>
<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Update of Air Compressor Inspection Form </h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Job Form Management
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Inspection RD 1 Form View</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

        <div class="mb-2 d-flex gap-2">
               <a href="inspection-job-order-detail.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
                <div class="dropDownBox dropDownHead">
                    <a class="viewDetailBtnOpt" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <iconify-icon icon="ph:dots-three-outline-vertical"></iconify-icon>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" style="">
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Certificate</a>
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Checklist</a>
                        <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download FIR</a>


                    </div>
                    </div>
                <!-- <a href="manage-template.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="cuida:edit-outline"></iconify-icon> Edit 
                </a> -->
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
        <div class="checklistSubContainer">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-header cardHeaderAss">
                                <h5>Inspection of Air Compressor</h5>
                                <!-- <p>Ensure safety and efficiency with regular air compressor inspections.</p> -->
                            </div>
                            <div class="card-body p-0">
                                <div class="InspectionFormsContainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                <label class="form-label">Data No.</label>
                                                </div>
                                                <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Job Order No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Checklist No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Certificate No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">FIR No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Inspection Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Next Inspection Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Equipment Owner</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Work Location</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Standard Reference</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                    
                               </div>
                                </div>

                                <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Inspection Type</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <select class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="Periodic">Periodic</option>
                                                    <option value="Frequent">Frequent</option>
                                                    <option value="Exceptional">Exceptional</option>
                                                    <option value="Initial">Initial</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Manufacturer Name</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Year of Manufacture</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">ID / VIN / Serial No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Model No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Company No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Registration Plate No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Last Inspection Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly>
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                <label class="form-label mb-0">Age of equipment from year of manufacture (as per SASO Regulation should be under 15 y) if applicable</label>
                                            </div>
                                            <div class="col-lg-4">
                                            <input type="text" class="form-control">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-1">
                                                <label class="form-label mb-0">Other</label>
                                            </div>
                                            <div class="col-lg-11">
                                            <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                </div>

                                <div class="InspectionFormsContainer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <h6 class="AssessmentSectionTitle">Documentation</h6>
                                    <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q1.</div>Operator’s manual availability
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden checked>
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q2.</div>Maintenance records completeness
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden checked>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q3.</div>Safety guidelines compliance
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden checked>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <h6 class="AssessmentSectionTitle">General Appearance</h6>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q4.</div>Inspect for visible damages, dents, or cracks
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden checked>
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>

                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q5.</div>Check for rust or corrosion on all surfaces
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden checked>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q6.</div>Ensure all warning labels and decals are legible
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden checked>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q7.</div>Inspect for missing or loose bolts and nuts
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden checked>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q8.</div>Verify cleanliness and absence of debris
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden checked>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <h6 class="AssessmentSectionTitle">Compressor Unit</h6>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q9.</div>Compressor oil level and quality
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden checked>
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q10.</div>Check for oil leaks
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden checked>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q11.</div>Check for oil leaks Inspect for unusual noises during operation
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist11" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist11" hidden checked>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist11" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q12.</div>Verify proper alignment of compressor components
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist12" hidden >
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist12" hidden checked>
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist12" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <div class="list-group list-group-flush">
                                            <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                <div class="row align-items-center row-gap-3">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="todo-inbox-check reportquestion_ans_wrap">
                                                            <div class="strike-info QuestionTitle_wrap">
                                                                <h4 class="fs-14 text-truncate inspQue_title">
                                                                    <div class="js-overflow-line-wrapper questionCount">
                                                                        Q13.</div>Check for overheating during operation
                                                                </h4>
                                                                <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist InspectionChecklistOpt">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden checked>
                                                                               Yes
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden >
                                                                               No
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                               N/A
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                       
                                                                    </ul>

                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                        </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="custom-container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-8">
                                                    <label class="form-label mb-0">Does the equipment need any maintenance?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <select class="form-control select2">
                                                        <option disabled selected value="">Please Select...</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 explainArea mt-3">
                                                    <textarea type="text" class="form-control" placeholder="If yes, mention"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="col-lg-12">
                                     <div class="custom-container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                <label class="form-label mb-0">Based on visual and operational inspection, does the equipment is fit to perform the intended job?</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <select class="form-control select2">
                                                    <option disabled selected value="">Please Select...</option>
                                                    <option value="no">Yes</option>
                                                    <option value="yes">No</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 explainArea mt-3">
                                                <textarea type="text" class="form-control" placeholder="If no, why"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                     </div>
                                    </div>
                                   
                                    
                                 </div>
                                 <div class="InspectionFormsContainer border-top">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="form-label">Sticker</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="ST-0001">ST-0001</option>
                                                            <option value="ST-0002">ST-0002</option>
                                                            <option value="ST-0003">ST-0003</option>
                                                            <option value="ST-0004">ST-0004</option>
                                                            <option value="ST-0005">ST-000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label class="form-label">Tag</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="TG-0001">TG-0001</option>
                                                            <option value="TG-0002">TG-0002</option>
                                                            <option value="TG-0003">TG-0003</option>
                                                            <option value="TG-0004">TG-0004</option>
                                                            <option value="TG-0005">TG-000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Reason for Examination</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="3-months">3-months</option>
                                                            <option value="6-months">6-months</option>
                                                            <option value="12-months">12-months</option>
                                                            <option value="Written Scheme">Written Scheme</option>
                                                            <option value="Exceptional Circumstances">Exceptional Circumstances</option>
                                                            <option value="Installation">Installation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Client Mobile Number:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Survey Requested by:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Mobile Number:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Inspector Checklist</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Inspector’s Test Method</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Visual Test</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Functional Test</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Load Test</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Witness</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Payment Status</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2">
                                                            <option disabled selected value="">Please Select...</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Received">Received</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="FormSubmit_fix_container">
                    <a href="inspection-job-order-detail.php" class="SaveDataBtn">
                        <button type="button" class="btn btn-primary commonUpdateButton">
                        <iconify-icon icon="ci:save"></iconify-icon> Save & Update
                        </button>
                    </a>
                    <a href="inspection-job-order-detail.php">
                        <button type="button" class="btn commonCancleButton">
                            Cancel
                        </button>
                    </a>
            </div>
        </form>
        
        </div>
     </div>
     </div>
     
     
    </div>
    <?php include("footer.php") ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".custom-container").forEach(function (container) {
        let selectElement = container.querySelector("select");
        let explainArea = container.querySelector(".explainArea");

        // Hide the explainArea by default
        if (explainArea) {
            explainArea.style.display = "none";
        }

        // Initialize Select2
        $(selectElement).select2();

        // Handle change event for Select2
        $(selectElement).on("change", function () {
            if (this.value === "yes") {
                explainArea.style.display = "block";
            } else {
                explainArea.style.display = "none";
            }
        });
    });
});

    </script>