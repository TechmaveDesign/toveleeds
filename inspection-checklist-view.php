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
            <h2 class="mb-1">Checklist Template View</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Manage Templates
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Checklist Template View</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 d-flex gap-2">
               <a href="all-templates.php" 
                    class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
                <a href="manage-template.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="cuida:edit-outline"></iconify-icon> Edit 
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
                                <h5>Air Compressor Inspection checklist</h5>
                                <p>Ensure safety and efficiency with regular air compressor inspections.</p>
                            </div>
                            <div class="card-body">
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                        Q10.</div>Check for oil leaks Inspect for unusual noises during operation
                                                                </h4>
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                        Q11.</div>Verify proper alignment of compressor components
                                                                </h4>
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
                                                                        Q12.</div>Check for overheating during operation
                                                                </h4>
                                                                <div class="insp_quest_ans InspectionOption">
                                                                    <div class="response-yes">Yes</div>
                                                                    <div class="no_optionmenu">No</div>
                                                                    <div class="na_responsice_menu">N/A</div>
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
            <!-- <div class="FormSubmit_fix_container">
                    <a href="all-templates.php" class="SaveDataBtn">
                        <button type="button" class="btn btn-primary commonUpdateButton">
                        <iconify-icon icon="ci:save"></iconify-icon> Save & Update
                        </button>
                    </a>
                    <a href="all-templates.php">
                        <button type="button" class="btn commonCancleButton">
                            Cancel
                        </button>
                    </a>
            </div> -->
        </form>
        
        </div>
     </div>
     </div>
     
     
    </div>
    <?php include("footer.php") ?>