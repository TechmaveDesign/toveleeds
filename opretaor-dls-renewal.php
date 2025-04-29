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
            <h2 class="mb-1">Renew Operator Assessment</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Job order details
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Renew Operator Assessment</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 d-flex gap-2">
               <a href="renewal-jobs.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
                <a href="javascript:void(0);" id="editButton" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="akar-icons:edit"></iconify-icon> Edit
                </a>
                <div class="btn-group">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Preview Documents
               </button>
                <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Certificate Form</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Certificate</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="hugeicons:view"></iconify-icon></span>Preview Assessment Card</a>
                    </li>
                  
                </ul>
                </div>
                <div class="btn-group">
              
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download Documents 
               </button>
                <ul class="dropdown-menu">
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Certificate Form</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Certificate</a>
                    </li>
                    <li>
                    <a href="#" class="dropdown-item"><span><iconify-icon icon="material-symbols:download-rounded"></iconify-icon></span>Download Assessment Card</a>
                    </li>
                  
                </ul>
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
                                <h5>Assessment Form</h5>
                                <!-- <p>Ensure safety and efficiency with regular air compressor inspections.</p> -->
                            </div>
                            <div class="card-body p-0">
                                <div class="InspectionFormsContainer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                <label class="form-label">Assessment No.</label>
                                                </div>
                                                <div class="col-lg-8">
                                                <input type="text" class="form-control" value="#Asmt2500000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Name</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="Amir Shaikh">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Passport No./Iqama No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="987654321">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
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
                                </div> -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Issue Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly value="12 Jan 2023">
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Expiry Date</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control customdataPicker flatpickr-input" type="text" placeholder="Select Date" readonly value="12 Jan 2025">
                                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Years of Experience</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="5 Year of Experience">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Card No.</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="56789">
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
                                                <input type="text" class="form-control" value="CERT-202401">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Company</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="XYZ Inspection Services">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Job Title</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="Assessment of Agricultural Tractor Operator">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="col-lg-12">
                                        <div class="inspection-container">
                                        <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Location</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="202 Oak Drive, Building 5, Orland">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Assessment Type</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="inspectionBoxType">
                                                            <select class="propertyType form-control select2">
                                                                <option disabled selected value="">Please Select...</option>
                                                                <option value="Verbal Questioning ">Verbal Questioning </option>
                                                                <option value="Practical Demonstration">Practical Demonstration</option>
                                                                <option value="Verbal Questioning & Practical Demonstration " selected >Verbal Questioning & Practical Demonstration </option>
                                                               
                                                            </select>
                                                            <button type="button" class="addPropertyTypeButton btn btn-addType">
                                                                <iconify-icon icon="eva:plus-fill"></iconify-icon>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 hiddentype newPropertyTypeDiv">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label class="form-label">Add New Type</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="addpropertyTypeContainer addFieldType">
                                                            <input type="text" class="newPropertyType form-control" placeholder="New Inspection Type">
                                                            <button type="button" class="savePropertyTypeButton btn btn-primary">Save</button>
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

                                
                                 <div class="InspectionFormsContainer border-top">
                                    <!-- <h6 class="Instruction"><strong>Instructions:</strong> Select the correct and most suitable word for each question. Time allowed for this assessment is 45 minutes.</h6> -->
                                 <!-- <h6 class="AssessmentSectionTitle">General Safety of Equipment and Site Safety (1-20)</h6> -->
                                        <div class="list-group list-group-flush">
                                                <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                    <div class="row align-items-center row-gap-3">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="todo-inbox-check reportquestion_ans_wrap">
                                                                <div class="strike-info QuestionTitle_wrap">
                                                                    <h4 class="fs-14 text-truncate inspQue_title">
                                                                        <div class="js-overflow-line-wrapper questionCount">
                                                                            Q1.</div>What should an operator do before starting the tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                                Check tire pressure
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                                Inspect surroundings for obstacles
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden>
                                                                                Ensure all safety guards are in place
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist1" hidden checked>
                                                                                All of the above
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
                                                                            Q2.</div>What is the primary purpose of a rollover protective structure (ROPS)?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Improve fuel efficiency
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden checked>
                                                                                Protect the operator in case of rollover
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Provide additional seating space
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Increase visibility
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
                                                                            Q3.</div> When is it safe to remove safety guards from a tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden>
                                                                                When the equipment is not in use
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden>
                                                                                When it interferes with operation
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden checked>
                                                                                Never
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist3" hidden>
                                                                                During maintenance
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
                                                                            Q4.</div> What should you do if you notice a fuel leak on the tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden>
                                                                                Continue operation carefully
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden checked>
                                                                                Stop the tractor and report the issue
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden >
                                                                                Cover the leak with a cloth
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist4" hidden>
                                                                                Ignore it
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
                                                                            Q5.</div> How far should bystanders stay from a working tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden>
                                                                                5 feet
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden>
                                                                                10 feet
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden >
                                                                                15 feet
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist5" hidden checked>
                                                                                20 feet
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

                                                <!-- <h6 class="AssessmentSectionTitle">Technical Knowledge of Equipment and Equipment Operation (21-70)</h6> -->
                                               
                                                <div class="list-group list-group-flush">
                                                <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                    <div class="row align-items-center row-gap-3">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="todo-inbox-check reportquestion_ans_wrap">
                                                                <div class="strike-info QuestionTitle_wrap">
                                                                    <h4 class="fs-14 text-truncate inspQue_title">
                                                                        <div class="js-overflow-line-wrapper questionCount">
                                                                            Q6.</div> What is the primary function of the clutch in a tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden>
                                                                                To control engine speed
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden checked>
                                                                                To connect and disconnect power from the engine to the transmission
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden >
                                                                                To reduce noise during operation
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist6" hidden >
                                                                                To improve braking efficiency
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
                                                                            Q7.</div> Which of the following is not part of a tractor's drivetrain?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden>
                                                                                Transmission
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden>
                                                                                Axle
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden checked>
                                                                                Hydraulic pump
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist7" hidden >
                                                                                Clutch
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
                                                                            Q8.</div> What is the purpose of the PTO (Power Take-Off) shaft?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden>
                                                                                To improve fuel efficiency
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden checked>
                                                                                To transfer power to external implements
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden >
                                                                                To increase the tractor's speed
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist8" hidden >
                                                                                To control steering
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
                                                                            Q9.</div> What is the purpose of differential lock in a tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden>
                                                                                To increase engine power
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden checked>
                                                                                To improve traction on uneven surfaces
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden>
                                                                                To reduce tire wear
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist9" hidden>
                                                                                To enhance steering control
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
                                                                            Q10.</div> What is the recommended tire pressure for most agricultural tractors?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist">
                                                                    <ul class="checklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden>
                                                                                10-20 psi
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden>
                                                                                20-30 psi
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden >
                                                                                30-40 psi
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist10" hidden checked>
                                                                                As specified in the user manual
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

                                 <div class="InspectionFormsContainer bg-light">
                                    <div class="row">
                                      <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Declaration </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                      <textarea name="" id="" class="form-control"> I/We hereby declare that the above information is correct, and the equipment has been thoroughly inspected as far as possible in accordance with manufacturer/standard and found to be free from any apparent defect.</textarea>
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
            <a href="#" class="SaveDataBtn">
    <button type="button" class="btn btn-primary commonUpdateButton" onclick="showSuccessAlert()">
        <iconify-icon icon="ci:save"></iconify-icon> Renew & Update
    </button>
</a>
                    <a href="renewal-jobs.php">
                        <button type="button" class="btn commonCancleButton">
                            Cancel
                        </button>
                    </a>
            </div>
            <div class="nextButton">
                <a href="#" class="active" >#DLS2500001</a>
                <a href="#" >#DLS2500002</a>
                <a href="#" >#DLS2500003</a>
                <a href="#" >#DLS2500004</a>
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

    <!-- Fields editable and no-editable code -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        let formElements = document.querySelectorAll('input, select, textarea');

        // Disable all form fields on page load
        formElements.forEach(element => {
            element.disabled = true;
        });

        // Disable radio button clicks manually
        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.dataset.originalDisabled = "true";
            radio.addEventListener('click', preventRadioSelection);
        });
    });

    // Toggle edit mode when clicking the button
    document.getElementById('editButton').addEventListener('click', function () {
        let formElements = document.querySelectorAll('input, select, textarea');
        let isEditable = formElements[0].disabled; // Check current state

        formElements.forEach(element => {
            element.disabled = !element.disabled;
        });

        // Enable/Disable radio button functionality
        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            if (radio.dataset.originalDisabled === "true") {
                radio.dataset.originalDisabled = "false";
                radio.removeEventListener('click', preventRadioSelection);
            } else {
                radio.dataset.originalDisabled = "true";
                radio.addEventListener('click', preventRadioSelection);
            }
        });

        // Show SweetAlert based on mode
        Swal.fire({
            html: `
                <div style="text-align: center;">
                    <div class="swalalert_custom_icon">
                        <img src="assets/img/newimages/chat.gif" alt="Success">
                    </div>
                    <h2 class="Swal_CustomTitle">${isEditable ? "Editable Mode is On" : "Editable Mode is Off"}</h2>
                    <p>${isEditable ? "You can now edit the fields." : "The fields are now locked."}</p>
                </div>`,
            confirmButtonText: "Okay",
            customClass: {
                confirmButton: "my-ok-button"
            },
        });
    });

    // Prevent radio selection when disabled
    function preventRadioSelection(event) {
        event.preventDefault();
    }
</script>

<!-- property type custom add and reflect on select2 -->
<script>
    $(document).ready(function() {
        $('.inspection-container').each(function() {
            var container = $(this);
            
            container.find('.addPropertyTypeButton').on('click', function() {
                container.find('.newPropertyTypeDiv').toggleClass('hiddentype');
            });

            container.find('.savePropertyTypeButton').on('click', function() {
                var newPropertyType = container.find('.newPropertyType').val().trim();
                if (newPropertyType !== "") {
                    var newOption = new Option(newPropertyType, newPropertyType, true, true);
                    container.find('.propertyType').prepend(newOption).trigger('change');
                    container.find('.newPropertyTypeDiv').addClass('hiddentype');
                    container.find('.newPropertyType').val('');
                }
            });
        });
    });
</script>
<!-- property type custom add and reflect on select2 -->

<script>
    function showSuccessAlert() {
        Swal.fire({
            icon: 'success',
            title: 'Renewal Successful!',
            text: 'Your data has been renewed and updated successfully.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to another page after clicking "OK"
                window.location.href = "renewal-jobs.php"; // Change this URL
            }
        });
    }
</script>