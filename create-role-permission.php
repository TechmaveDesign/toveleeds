<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

   <!-- Breadcrumb -->
   <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Create Role & Permission</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Role & Permission</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" >
            <a href="role-permission.php" class="btn btn-back d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
                </a>
            </div>

            <!-- <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Assessment Equipments
                </a>
            </div> -->
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
       <div class="custom-datatable-filter px-3 py-3">
       <form action="role-permission.php" data-select2-id="8">
                                <div class="contact-list-view RolePermission_container" data-select2-id="7">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Role Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Role Name</label>
                                                        <input type="text" class="form-control" id="" value="">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <select name="" class="form-control select2">
                                                            <option disabled="" selected="" value="">Please Select...</option>
                                                            <option value="1">Active</option>
                                                            <option value="2">Inactive</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="UserpermissionTitle">
                                        User Permission
                                    </h2>

                                    <div class="col-lg-12 mb-5">
                                        <div class="accordion rolePermission" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        <h6>Dashboard Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul id="todo_list" class="advance-list">
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Dashboard</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline1" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline1" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Tiles</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline2" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline2" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Recent Added Clients</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                       
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline3" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Recent Activities </h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline4" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Notifications</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline4" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="advance-list-item single-task-list">
                                                                <div class="prroleBox">
                                                                    <div class="moduleNM">
                                                                        <h5>Tasks By Department</h5>
                                                                    </div>
                                                                    <div class="prmission">
                                                                        <div class="flex items-center gap-2">
                                                                            <input id="checkboxOutline4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                            <label for="checkboxOutline4" class="align-middle">
                                                                                View
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h6>All Users Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">

                                                        <div class="multipermissions_list">
                                                            <!-- <div class="permissioninner_title">
                                                                <h2>All User Permissions</h2>
                                                            </div> -->
                                                            <ul id="todo_list" class="advance-list ">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Users</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline8" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline3" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline4" class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                

                                                            </ul>
                                                        </div>
                                                        <!-- staff user permissions end -->

                                                        

                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <h6>Approval Board Setting</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                          
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Board Setting Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline8" class="align-middle">
                                                                                    Edit 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline3" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                              </ul>
                                                                
                                                        </div>
                                                        <!-- Marketing module end -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <h6>All Regions</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                          
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Regions Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline8" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline3" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline3" class="align-middle">
                                                                                   Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        <h6>Label Management</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                         
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Label's</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Print
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Available Label's</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Label In Company
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline8" class="align-middle">
                                                                                Label In Region
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline3" class="align-middle">
                                                                                Label On Inspector
                                                                                </label>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </li> -->
                                                                

                                                                

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Available Label's</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Label In Company</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Label In Region</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Label On Inspector</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline8" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline8" class="align-middle">
                                                                                    Usage View
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Label's Transfer</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Sticker</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Transfer
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tag</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Transfer
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Status
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>
                                                        <!-- tenancies end -->

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Label's Assign</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Sticker</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Assign
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Tag</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Assign
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end -->
                                                        

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                        <h6>Training Setup</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <!-- <div class="permissioninner_title">
                                                                <h2>All Compliance</h2>
                                                            </div> -->
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Training Setup Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Create Content
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View & Edit
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>

                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTen">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                        <h6>Inspection Setting</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                    <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All DLS Forms</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All DLS Forms Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Add Remark
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Edit Remark
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>All Equipments</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Equipments Inspections (Equipment's)</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Add Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  View Template
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Operator Assessment (Equipment's)</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   Add Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit Template
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  View Template
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="multipermissions_list">
                                                            <div class="permissioninner_title">
                                                                <h2>Checklist Template</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Equipment Inspection Checklist</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Copy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                 Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Operator Assessment Checklists</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Copy
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                 Delete
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading11">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                        <h6>All Clients</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                    <div class="multipermissions_list">
                                                            <!-- <div class="permissioninner_title">
                                                                <h2>Checklist Template</h2>
                                                            </div> -->
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Client</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Delete
                                                                                </label>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Client Location</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                  Delete
                                                                                </label>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        <h6>Job Order Management</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                            <!-- <div class="permissioninner_title">
                                                                <h2>All Properties</h2>
                                                            </div> -->
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Equipment Inspection</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Download Document
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Operator Assessment</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Download Document
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>NDT Review</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Download Document
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Training</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View 
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Delete
                                                                                </label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Create Job</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                      
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                               

                                                            </ul>
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading12">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                        <h6>Approval Board</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">
                                                          <div class="permissioninner_title">
                                                                <h2>Job Approval  Requests</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Job Approval</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Activity
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Equipment Inspection Request</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Activity
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Operator Assessment  Request</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Activity
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>NDT Review Request</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Activity
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                          <div class="permissioninner_title">
                                                                <h2>Approval Detail's</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5> Previous Comment</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Activity</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Button</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                          <div class="permissioninner_title">
                                                                <h2>All Label Approval Request</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5> Request From You</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Transfer Inspector to Inspector Request</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div class="multipermissions_list">
                                                          <div class="permissioninner_title">
                                                                <h2>Approval Detail's</h2>
                                                            </div>
                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5> Previous Comment</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Add
                                                                                </label>
                                                                            </div>
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Activity</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Approval Button</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View
                                                                                </label>
                                                                            </div>
                                                                           
                                                                           

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                           

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading18">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                                        <h6>Role &amp; Permission</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>Role &amp; Permission</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    View Role &amp; Permission
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Create Role &amp; Permission
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    Edit Role &amp; Permission
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading19">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                        <h6>Reports</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="multipermissions_list">

                                                            <ul id="todo_list" class="advance-list">
                                                                <li class="advance-list-item single-task-list width-100">
                                                                    <div class="prroleBox">
                                                                        <div class="moduleNM">
                                                                            <h5>All Reports</h5>
                                                                        </div>
                                                                        <div class="prmission">
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                   
                                                                                </label>
                                                                            </div>
                                                                            <div class="flex items-center gap-2">
                                                                                <input id="checkboxOutline7" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                                                <label for="checkboxOutline7" class="align-middle">
                                                                                    
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="FormSubmit_fix_container">
                                            
                                            <a href="role-permission.php" class="SaveDataBtn">
                                                <button type="button" class="btn btn-primary commonUpdateButton">
                                                <iconify-icon icon="ci:save"></iconify-icon> Create & Save 
                                                </button>
                                            </a>
                                            <a href="role-permission.php">
                                                <button type="button" class="btn commonCancleButton">
                                                    Cancel
                                                </button>
                                            </a>
                                    </div>

                                        </div>
                                      
                                    </div>

                                </div>
                            </form>     
       </div>
    </div>



</div>

<?php include("footer.php") ?>




