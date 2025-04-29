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
                                <h5>Agriculture Tractor Operator Assessment</h5>
                                <p>Agriculture Tractor Operator Assessment evaluates skills in tractor operation, safety, and maintenance.</p>
                            </div>
                            <div class="card-body">
                                <h6 class="AssessmentSectionTitle">General Safety of Equipment and Site Safety (1-20)</h6>
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

                                                <h6 class="AssessmentSectionTitle">Technical Knowledge of Equipment and Equipment Operation (21-70)</h6>
                                               
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
                                                <!-- <div class="list-group list-group-flush">
                                                <div class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                    <div class="row align-items-center row-gap-3">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="todo-inbox-check reportquestion_ans_wrap">
                                                                <div class="strike-info QuestionTitle_wrap">
                                                                    <h4 class="fs-14 text-truncate inspQue_title">
                                                                        <div class="js-overflow-line-wrapper questionCount">
                                                                            Q1.</div>What should an operator do before starting the tractor?
                                                                    </h4>
                                                                    <div class="insp_quest_ansChecklist AttachmentCheckList">
                                                                    <ul class="checklist AttachmentChecklist">
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Check tire pressure
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Inspect surroundings for obstacles
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                Ensure all safety guards are in place
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label>
                                                                                <input type="radio" name="checklist2" hidden>
                                                                                All of the above
                                                                                <iconify-icon icon="gg:check-o" class="check-icon"></iconify-icon>
                                                                            </label>
                                                                        </li>
                                                                    </ul>

                                                                    <div class="attachmentImg">
                                                                        <img src="assets/img/newimages/image_2025_01_30T10_55_02_649Z.png" alt="">
                                                                    </div>


                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="FormSubmit_fix_container">
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
            </div>
        </form>
        
        </div>
     </div>
     </div>
     
     
    </div>
    <?php include("footer.php") ?>