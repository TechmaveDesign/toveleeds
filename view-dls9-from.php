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
    .small-text {
      font-size: 0.9rem;
    }
    .img-cell img {
      max-height: 60px;
    }
   
    .fieldsTable th{
        background: #fbfcfe !important;
    }
    .formSection{
        margin-top:20px;
        padding:0px;
    }
    .formSection .card-header h5{
        text-align:center;
    }
    .Centercard_tilte{
        text-align:center;
    }
    .Centercard_tilte {
    margin-bottom: 20px;
}
</style>

<!-- Page Wrapper -->
<div class="content">
    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Inspection DLS 9 Form View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">Job Form Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Inspection DLS 9 Form</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
            <div class="mb-2 d-flex gap-2">
                <a href="all-rd-forms.php" class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
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
                                    <h5>Inspection DLS 9 Form</h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="InspectionFormsContainer">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label">Data Log No.</label>
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
                                                            <input class="form-control customdataPicker flatpickr-input"
                                                                type="text" placeholder="Select Date" readonly>
                                                            <iconify-icon icon="ion:calendar-outline"
                                                                class="dateinput_icon"></iconify-icon>
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
                                                            <input class="form-control customdataPicker flatpickr-input"
                                                                type="text" placeholder="Select Date" readonly>
                                                            <iconify-icon icon="ion:calendar-outline"
                                                                class="dateinput_icon"></iconify-icon>
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
                                            <div class="col-lg-12">
                                                <div class="inspection-container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <label class="form-label">Inspection
                                                                            Type</label>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <div class="inspectionBoxType">
                                                                            <select
                                                                                class="propertyType form-control select2">
                                                                                <option disabled value="">Please
                                                                                    Select...</option>
                                                                                <option value="Periodic" selected>
                                                                                    Periodic</option>
                                                                                <option value="Frequent">Frequent
                                                                                </option>
                                                                                <option value="Exceptional">Exceptional
                                                                                </option>
                                                                                <option value="Initial">Initial</option>
                                                                                <option value="New">New</option>
                                                                            </select>
                                                                            <button type="button"
                                                                                class="addPropertyTypeButton btn btn-addType">
                                                                                <iconify-icon icon="eva:plus-fill">
                                                                                </iconify-icon>
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
                                                                        <div
                                                                            class="addpropertyTypeContainer addFieldType">
                                                                            <input type="text"
                                                                                class="newPropertyType form-control"
                                                                                placeholder="New Inspection Type">
                                                                            <button type="button"
                                                                                class="savePropertyTypeButton btn btn-primary">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <label class="form-label">ID</label>
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
                                                            <label class="form-label">Tag</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control select2">
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                            <label class="form-label">Serial No.</label>
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
                                                            <label class="form-label">Description / Type</label>
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
                                                            <label class="form-label">Length</label>
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
                                                            <label class="form-label">Width (in)</label>
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
                                                            <label class="form-label">SWL / WLL (ton)</label>
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
                                                            <label class="form-label">Remarks </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        <textarea type="text" class="form-control" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="InspectionFormsContainer ">
                                       
                                        <div class="card-header cardHeaderAss Centercard_tilte">
                                    <h5>Inspection Key Points / Criteria</h5>
                                </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h6 class="AssessmentSectionTitle">Documentation</h6>
                                                        <div class="list-group list-group-flush">
                                                            <div
                                                                class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                                <div class="row align-items-center row-gap-3">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div
                                                                            class="todo-inbox-check reportquestion_ans_wrap">
                                                                            <div class="strike-info QuestionTitle_wrap">
                                                                                <h4
                                                                                    class="fs-14 text-truncate inspQue_title">
                                                                                    <div
                                                                                        class="js-overflow-line-wrapper questionCount">
                                                                                        Q1.</div>Operator’s manual
                                                                                    availability
                                                                                </h4>
                                                                                <div class="insp_quest_ansChecklist">
                                                                                    <ul
                                                                                        class="checklist InspectionChecklistOpt">
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist1"
                                                                                                    hidden="" checked=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                Yes
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist1"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                No
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist1"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                N/A
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
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
                                                            <div
                                                                class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                                <div class="row align-items-center row-gap-3">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div
                                                                            class="todo-inbox-check reportquestion_ans_wrap">
                                                                            <div class="strike-info QuestionTitle_wrap">
                                                                                <h4
                                                                                    class="fs-14 text-truncate inspQue_title">
                                                                                    <div
                                                                                        class="js-overflow-line-wrapper questionCount">
                                                                                        Q2.</div>Maintenance records
                                                                                    completeness
                                                                                </h4>
                                                                                <div class="insp_quest_ansChecklist">
                                                                                    <ul
                                                                                        class="checklist InspectionChecklistOpt">
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist2"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                Yes
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist2"
                                                                                                    hidden="" checked=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                No
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist2"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                N/A
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
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
                                                            <div
                                                                class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                                <div class="row align-items-center row-gap-3">
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div
                                                                            class="todo-inbox-check reportquestion_ans_wrap">
                                                                            <div class="strike-info QuestionTitle_wrap">
                                                                                <h4
                                                                                    class="fs-14 text-truncate inspQue_title">
                                                                                    <div
                                                                                        class="js-overflow-line-wrapper questionCount">
                                                                                        Q3.</div>Safety guidelines
                                                                                    compliance
                                                                                </h4>
                                                                                <div class="insp_quest_ansChecklist">
                                                                                    <ul
                                                                                        class="checklist InspectionChecklistOpt">
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist3"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                Yes
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist3"
                                                                                                    hidden=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                No
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio"
                                                                                                    name="checklist3"
                                                                                                    hidden="" checked=""
                                                                                                    disabled=""
                                                                                                    data-original-disabled="true">
                                                                                                N/A
                                                                                                <iconify-icon
                                                                                                    icon="gg:check-o"
                                                                                                    class="check-icon">
                                                                                                </iconify-icon>
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
                                                </div>

                                                
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="custom-container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-8">
                                                            <label class="form-label mb-0">Does the equipment need any
                                                                maintenance?</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <select class="form-control select2">
                                                                <option disabled selected value="">Please Select...
                                                                </option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 explainArea mt-3">
                                                            <textarea type="text" class="form-control"
                                                                placeholder="If yes, mention"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="custom-container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-8">
                                                            <label class="form-label mb-0">Based on visual and
                                                                operational inspection, does the equipment is fit to
                                                                perform the intended job?</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <select class="form-control select2">
                                                                <option disabled selected value="">Please Select...
                                                                </option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12 explainArea mt-3">
                                                            <textarea type="text" class="form-control"
                                                                placeholder="If no, why"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="InspectionFormsContainer border-top">
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label">Reason for Examination</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select class="form-control select2">
                                                                <option disabled value="">Please Select...</option>
                                                                <option value="3-months"><strong>A.</strong> 3-months
                                                                </option>
                                                                <option value="6-months"><strong>B.</strong> 6-months
                                                                </option>
                                                                <option value="12-months" selected><strong>C.</strong>
                                                                    12-months</option>
                                                                <option value="Written Scheme"><strong>D.</strong>
                                                                    Written Scheme</option>
                                                                <option value="Exceptional Circumstances">
                                                                    <strong>E.</strong> Exceptional Circumstances
                                                                </option>
                                                                <option value="Installation"><strong>F.</strong>
                                                                    Installation</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label">Name & Address of Person</label>
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
                                                            <label class="form-label"> Mobile Number:</label>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
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
                                                                <option disabled selected value="">Please Select...
                                                                </option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Received">Received</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="form-label">Quantity:</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control">
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
                                                                        <label class="form-label">Reason of
                                                                            Rejection</label>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <div class="inspectionBoxType">
                                                                            <select
                                                                                class="propertyType form-control select2">
                                                                                <option disabled selected value="">
                                                                                    Please Select...</option>
                                                                                <option value="RR1">Equipment fails to
                                                                                    meet technical specifications
                                                                                </option>
                                                                                <option value="RR2">Incorrect labelling
                                                                                    or marking as per SASO regulations
                                                                                </option>
                                                                                <option value="RR3">Visual inspection
                                                                                    failure (defects, damage or safety
                                                                                    issue)</option>
                                                                                <option value="RR4">Operational
                                                                                    inspection failure</option>
                                                                                <option value="RR5">Age of the equipment
                                                                                    is not as per SASO regulations
                                                                                </option>
                                                                                <option value="RR6">Unauthorized
                                                                                    modifications are conducted</option>
                                                                                <option value="New">New</option>
                                                                            </select>
                                                                            <button type="button"
                                                                                class="addPropertyTypeButton btn btn-addType">
                                                                                <iconify-icon icon="eva:plus-fill">
                                                                                </iconify-icon>
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
                                                                        <label class="form-label">Add New Reason</label>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <div
                                                                            class="addpropertyTypeContainer addFieldType">
                                                                            <input type="text"
                                                                                class="newPropertyType form-control"
                                                                                placeholder="New Inspection Type">
                                                                            <button type="button"
                                                                                class="savePropertyTypeButton btn btn-primary">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <label class="form-label">Sign</label>
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <input name="file1" type="file" class="dropify"
                                                                            data-height="100" />
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
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".custom-container").forEach(function(container) {
            let selectElement = container.querySelector("select");
            let explainArea = container.querySelector(".explainArea");
            // Hide the explainArea by default
            if (explainArea) {
                explainArea.style.display = "none";
            }
            // Initialize Select2
            $(selectElement).select2();
            // Handle change event for Select2
            $(selectElement).on("change", function() {
                if (this.value === "yes") {
                    explainArea.style.display = "block";
                } else {
                    explainArea.style.display = "none";
                }
            });
        });
    });
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

<!-- ---------------------------
Editor js
--------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#editor',
        height: 400,
        menubar: false,
        plugins: 'autolink lists link',
        toolbar: 'undo redo | bold italic | bullist numlist | link'
    });
</script>
<!-- <script>
    tinymce.init({
        selector: '#editor',
        height: 400,
        menubar: true,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'print', 'preview', 'anchor',
            'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'paste', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | ' +
                 'alignleft aligncenter alignright alignjustify | ' +
                 'bullist numlist outdent indent | removeformat | help'
    });
</script> -->
<!-- dropify CDN -->
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script>
    $('.dropify').dropify();
</script>