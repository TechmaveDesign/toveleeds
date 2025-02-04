<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Inspection Mapping</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Inspection Mapping</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
            <a href="#" data-bs-toggle="modal" data-bs-target="#AddMapChecklistModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Map Checklist
                </a>
            </div>

            <div class="mb-2" id="addTagBtn" style="display: none;">
              
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Map Form
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
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false" id="stickerTab">Checklist Map with Form
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                Form Map with Equipments
                   </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Checklist Name</th>
                            <th>Form Name</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               1
                            </td>
                            <td>Checklist 1</td>
                            <td>RD1</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               2
                            </td>
                            <td>Checklist 2</td>
                            <td>RD2</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               3
                            </td>
                            <td>Checklist 3</td>
                            <td>RD3</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              4
                            </td>
                            <td>Checklist 4</td>
                            <td>RD4</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              5
                            </td>
                            <td>Checklist 5</td>
                            <td>RD5</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapChecklistModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        

                    </tbody>

                </table>
                
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Form Name</th>
                            <th>Map Equipments</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               1
                            </td>
                            <td>RD1</td>
                            <td class="subcategory_row" data-category="RD1">
                                <div class="subcategory_items">
                                    <div class="subct_item">Agricultural Tractor Operator</div>
                                    <div class="subct_item">Air Compressor Operator</div>
                                    <div class="subct_item">Anchor Machine Operator</div>
                                    <div class="subct_item">Asphalt Batching Plant Operator</div>
                                    <div class="subct_item">Asphalt Milling Machine Operator</div>
                                    <div class="subct_item">Asphalt Mixer Operator</div>
                                    <div class="subct_item">Asphalt Paver Machine Operator / Crawler Paver Operator</div>
                                    
                                </div>
                            </td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapFormModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               2
                            </td>
                            <td>RD2</td>
                            <td class="subcategory_row" data-category="RD2">
                                <div class="subcategory_items">
                                    <div class="subct_item">Asphalt Roller Operator</div>
                                    <div class="subct_item">Asphalt/Concrete Cutting Machine Operator</div>
                                    <div class="subct_item">Anchor Machine Operator</div>
                                    <div class="subct_item">Asphalt Batching Plant Operator</div>
                                    <div class="subct_item">Backhoe Loader Operator</div>
                                    <div class="subct_item">Asphalt Mixer Operator</div>
                                    <div class="subct_item">Asphalt Paver Machine Operator / Crawler Paver Operator</div>
                                    
                                </div>
                            </td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapFormModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               3
                            </td>
                            <td>RD3</td>
                            <td class="subcategory_row" data-category="RD3">
                                <div class="subcategory_items">
                                    <div class="subct_item">Asphalt Roller Operator</div>
                                    <div class="subct_item">Pumps</div>
                                    <div class="subct_item">Anchor Machine Operator</div>
                                    <div class="subct_item">HDPE Pipe Welding</div>
                                    <div class="subct_item">Backhoe Loader Operator</div>
                                    <div class="subct_item">Asphalt Mixer Operator</div>
                                    <div class="subct_item">HDD Machine</div>
                                    <div class="subct_item">Motor Grader</div>

                                    
                                </div>
                            </td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapFormModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              4
                            </td>
                            <td>RD4</td>
                            <td class="subcategory_row" data-category="RD4">
                                <div class="subcategory_items">
                                    <div class="subct_item">Excavator</div>
                                    <div class="subct_item">Pneumatic Tyre Roller</div>
                                    <div class="subct_item">Rebar Bending Machine</div>
                                    <div class="subct_item">Rebar Coupler Machine</div>
                                    <div class="subct_item">Backhoe Loader Operator</div>
                                    <div class="subct_item">Rock Truck</div>
                                    <div class="subct_item">HDD Machine</div>
                                    <div class="subct_item">Electric Generator Welder / Welding Machine</div>

                                    
                                </div>
                            </td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapFormModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              5
                            </td>
                            <td>RD5</td>
                            <td class="subcategory_row" data-category="RD5">
                                <div class="subcategory_items">
                                    <div class="subct_item">Wheel Loader</div>
                                    <div class="subct_item">Pneumatic Tyre Roller</div>
                                    <div class="subct_item">Lattice Boom Mobile Crane</div>
                                    <div class="subct_item">Rebar Coupler Machine</div>
                                    <div class="subct_item">Backhoe Loader Operator</div>
                                    <div class="subct_item">Rock Truck</div>
                                    <div class="subct_item">HDD Machine</div>
                                    <div class="subct_item">Electric Generator Welder / Welding Machine</div>

                                    
                                </div>
                            </td>
                            <td>27 Dec 2024</td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditMapFormModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        

                    </tbody>

                </table>
               
                </div>
            </div>
            <!-- <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="custom-datatable-filter">
                
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-cart-justified" role="tabpanel">
                <div class="custom-datatable-filter">
               
                </div>
            </div> -->
        </div>

    </div>

</div>

<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Map Form with Equipments</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Form</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="RD1">RD1</option>
                                        <option value="RD2">RD2</option>
                                        <option value="RD3">RD3</option>
                                        <option value="RD4">RD4</option>
                                        <option value="RD5">RD5</option>
                                        <option value="RD6">RD6</option>
                                        <option value="RD7">RD7</option>
                                        <option value="RD8">RD8</option>
                                        <option value="RD9">RD9</option>
                                    </select>
                            </div>
                            <div class="form-group">
								<label class="form-label">Select Equipments</label>
								<div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
									<button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span class="selected-count">Select Department</span>
										<!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
									</button>
									<div
										class="dropdown-menu customdropdownmenu_style available-users-dropdown">
										<div class="filTerSearchMain">
											<input type="text" class="filterclSearch available-users-search"
												placeholder="Search Department">
											<iconify-icon icon="basil:search-outline"></iconify-icon>
										</div>
										<div class="sellallitemsMain">
											<div class="CustomselectallContainer">
												<input type="checkbox"
													class="select-all-available-users form-check-input">
												Select All
											</div>
											<div class="clDivider_full"></div>
										</div>
										<div class="Customdrpitems_container">
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
														Agricultural Tractor Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Air Compressor Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Anchor Machine Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Batching Plant Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Milling Machine Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Mixer Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Paver Machine Operator / Crawler Paver Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Roller Operator
												</div>
											</div>
										</div>

										<p class="no-data" style="display: none;">No data found</p>
									</div>
								</div>
							</div>
                           
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & continue
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->

<!-- Edit Map Form with Equipment start -->
<div class="modal fade custombottm_modalStyle" id="EditMapFormModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Map Form with Equipments</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Form</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="RD1">RD1</option>
                                        <option value="RD2">RD2</option>
                                        <option value="RD3">RD3</option>
                                        <option value="RD4">RD4</option>
                                        <option value="RD5">RD5</option>
                                        <option value="RD6">RD6</option>
                                        <option value="RD7">RD7</option>
                                        <option value="RD8">RD8</option>
                                        <option value="RD9">RD9</option>
                                    </select>
                            </div>
                            <div class="form-group">
								<label class="form-label">Select Equipments</label>
								<div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
									<button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span class="selected-count">Select Department</span>
										<!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
									</button>
									<div
										class="dropdown-menu customdropdownmenu_style available-users-dropdown">
										<div class="filTerSearchMain">
											<input type="text" class="filterclSearch available-users-search"
												placeholder="Search Department">
											<iconify-icon icon="basil:search-outline"></iconify-icon>
										</div>
										<div class="sellallitemsMain">
											<div class="CustomselectallContainer">
												<input type="checkbox"
													class="select-all-available-users form-check-input">
												Select All
											</div>
											<div class="clDivider_full"></div>
										</div>
										<div class="Customdrpitems_container">
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
														Agricultural Tractor Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Air Compressor Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Anchor Machine Operator
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Batching Plant Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Milling Machine Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Mixer Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Paver Machine Operator / Crawler Paver Operator
												</div>
											</div>
                                            <div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
                                                        Asphalt Roller Operator
												</div>
											</div>
										</div>

										<p class="no-data" style="display: none;">No data found</p>
									</div>
								</div>
							</div>
                           
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & Update
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->

<!-- Add Map Checklist with Equipment start -->
<div class="modal fade custombottm_modalStyle" id="AddMapChecklistModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Map Checklist with Form</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Checklist</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Checklist 1">Checklist 1</option>
                                        <option value="Checklist 2">Checklist 2</option>
                                        <option value="Checklist 3">Checklist 3</option>
                                        <option value="Checklist 4">Checklist 4</option>
                                        <option value="Checklist 5">Checklist 5</option>
                                        <option value="Checklist 6">Checklist 6</option>
                                        <option value="Checklist 7">Checklist 7</option>
                                        <option value="Checklist 8">Checklist 8</option>
                                        <option value="Checklist 9">Checklist 9</option>
                                        <option value="Checklist 10">Checklist 10</option>

                                    </select>
                            </div>
                            <div class="form-group">
                                    <label class="form-label">Select Form</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="RD 1">RD 1</option>
                                        <option value="RD 2">RD 2</option>
                                        <option value="RD 3">RD 3</option>
                                        <option value="RD 4">RD 4</option>
                                        <option value="RD 5">RD 5</option>
                                        <option value="RD 6">RD 6</option>
                                        <option value="RD 7">RD 7</option>
                                        <option value="RD 8">RD 8</option>
                                        <option value="RD 9">RD 9</option>
                                        <option value="RD 10">RD 10</option>

                                    </select>
                            </div>
                            
                           
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & Update
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->

<!-- Add Map Checklist with Equipment start -->
<div class="modal fade custombottm_modalStyle" id="EditMapChecklistModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Map Checklist with Form</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/mind-mapping.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <!-- <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div> -->
                            <div class="form-group">
                                    <label class="form-label">Select Checklist</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Checklist 1">Checklist 1</option>
                                        <option value="Checklist 2">Checklist 2</option>
                                        <option value="Checklist 3">Checklist 3</option>
                                        <option value="Checklist 4">Checklist 4</option>
                                        <option value="Checklist 5">Checklist 5</option>
                                        <option value="Checklist 6">Checklist 6</option>
                                        <option value="Checklist 7">Checklist 7</option>
                                        <option value="Checklist 8">Checklist 8</option>
                                        <option value="Checklist 9">Checklist 9</option>
                                        <option value="Checklist 10">Checklist 10</option>

                                    </select>
                            </div>
                            <div class="form-group">
                                    <label class="form-label">Select Form</label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="RD 1">RD 1</option>
                                        <option value="RD 2">RD 2</option>
                                        <option value="RD 3">RD 3</option>
                                        <option value="RD 4">RD 4</option>
                                        <option value="RD 5">RD 5</option>
                                        <option value="RD 6">RD 6</option>
                                        <option value="RD 7">RD 7</option>
                                        <option value="RD 8">RD 8</option>
                                        <option value="RD 9">RD 9</option>
                                        <option value="RD 10">RD 10</option>

                                    </select>
                            </div>
                           
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Save & Update
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="users.html" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->
<!-- Bootstrap Modal -->
<div class="modal fade" id="subcategoryModal" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subcategoryModalLabel">All Mapped Equipments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mdheight_small">
                <!-- Search Bar -->
                <div class="searchwrapper_category">
                    <input type="text" id="subcategorySearch" class="form-control" placeholder="Search equipmets..."
                        style="margin-bottom: 10px;">
                    <iconify-icon icon="proicons:search"></iconify-icon>
                </div>
                <ul class="list-group subcategory_mdListing" id="modalSubcategoryList">
                    <!-- Dynamic content will be populated here -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>
<!-- button submit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                const form = button.closest('form');
                const inputField = form.querySelector(
                'input[type="text"]'); // Select the input field
                const errorMessage = form.querySelector(
                '.error-message'); // Check for existing error message
                if (!inputField.value.trim()) {
                    // Add a red border to highlight the empty input
                    inputField.classList.add('input-error');
                    inputField.focus();
                    // Show error message
                    if (!errorMessage) {
                        const errorElement = document.createElement('div');
                        errorElement.className = 'error-message';
                        errorElement.textContent = 'Please enter Template Title';
                        inputField.insertAdjacentElement('afterend', errorElement);
                    }
                    // Remove error when user starts typing
                    inputField.addEventListener('input', function() {
                        if (inputField.value.trim()) {
                            inputField.classList.remove('input-error');
                            const existingError = form.querySelector('.error-message');
                            if (existingError) {
                                existingError.remove();
                            }
                        }
                    });
                    return;
                }
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
                // Simulate a delay before redirecting to the action page
                setTimeout(function() {
                    // Remove loading dots
                    button.classList.remove('btn-loading');
                    const loadingDots = button.querySelector('.loading-dots');
                    if (loadingDots) {
                        loadingDots.remove();
                    }
                    // Redirect to the form's action page
                    window.location.href = form.getAttribute('action');
                }, 2000); // Delay for 2 seconds (2000ms)
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stickerBtn = document.getElementById("addStickerBtn");
        const tagBtn = document.getElementById("addTagBtn");
        const stickerTab = document.getElementById("stickerTab");
        const tagTab = document.getElementById("tagTab");

        function toggleButtons(event) {
            if (event.target === stickerTab) {
                stickerBtn.style.display = "block";
                tagBtn.style.display = "none";
            } else if (event.target === tagTab) {
                stickerBtn.style.display = "none";
                tagBtn.style.display = "block";
            }
        }

        stickerTab.addEventListener("click", toggleButtons);
        tagTab.addEventListener("click", toggleButtons);
    });
</script>
<!-- button submit loader js end -->



<!-- custom multiple select js start -->
<script>
    $(document).ready(function () {
     // Update the count of selected options
     function updateSelectedCount(dropdownWrapper) {
         const selectedCount = dropdownWrapper.find(".individual-option:checked").length;
         const selectedCountElement = dropdownWrapper.find(".selected-count");
 
         if (selectedCount === 0) {
             selectedCountElement.text("Select Location");
         } else if (selectedCount === 1) {
             selectedCountElement.text("1 selected");
         } else {
             selectedCountElement.text(`${selectedCount} selected`);
         }
     }
 
     // Handle Select All checkbox
     $(".select-all-available-users").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const isChecked = $(this).prop("checked");
         dropdownWrapper.find(".individual-option").prop("checked", isChecked);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Handle individual option selection
     $(".individual-option").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const totalOptions = dropdownWrapper.find(".individual-option").length;
         const selectedOptions = dropdownWrapper.find(".individual-option:checked").length;
 
         // Toggle the Select All checkbox
         dropdownWrapper.find(".select-all-available-users").prop("checked", totalOptions === selectedOptions);
 
         updateSelectedCount(dropdownWrapper);
     });
 
     // Reset Filter button
     $(".reset-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         dropdownWrapper.find(".individual-option").prop("checked", false);
         dropdownWrapper.find(".select-all-available-users").prop("checked", false);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Apply Filter button
     $(".apply-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const selectedItems = dropdownWrapper.find(".individual-option:checked").map(function () {
             return $(this).parent().text().trim();
         }).get();
         console.log("Selected Items:", selectedItems);
     });
 
     // Filter search functionality
     $(".available-users-search").on("keyup", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const searchTerm = $(this).val().toLowerCase();
         const options = dropdownWrapper.find(".mainoptionContainer");
 
         options.filter(function () {
             $(this).toggle($(this).text().toLowerCase().includes(searchTerm));
         });
 
         const noDataMessage = dropdownWrapper.find(".no-data");
         noDataMessage.toggle(options.filter(":visible").length === 0);
     });
 });
 
 </script>

 <!-- sub category dynamic data show count and list in modal start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.subcategory_row');
        rows.forEach((row) => {
            const container = row.querySelector('.subcategory_items');
            const items = container.querySelectorAll('.subct_item');
            const maxVisible = 4;
            // Hide subcategories beyond the first 4
            items.forEach((item, index) => {
                if (index >= maxVisible) {
                    item.style.display = 'none';
                }
            });
            // Add remaining count circle if needed
            if (items.length > maxVisible) {
                const remainingCount = items.length - maxVisible;
                const countCircle = document.createElement('div');
                countCircle.className = 'subct_item_count';
                countCircle.textContent = `+${remainingCount}`;
                countCircle.setAttribute('data-bs-toggle', 'modal');
                countCircle.setAttribute('data-bs-target', '#subcategoryModal');
                countCircle.setAttribute('data-subcategory', JSON.stringify(Array.from(items).map(
                    item => item.textContent))); // Store all items in data attribute
                countCircle.setAttribute('data-category', row.getAttribute(
                'data-category')); // Store category name
                container.appendChild(countCircle);
            }
        });
        // Populate modal with the correct subcategory items
        document.querySelectorAll('.subct_item_count').forEach(countCircle => {
            countCircle.addEventListener('click', (event) => {
                const categoryName = event.target.getAttribute('data-category');
                const allSubcategories = JSON.parse(event.target.getAttribute(
                    'data-subcategory'));
                const modalTitle = document.getElementById('subcategoryModalLabel');
                const modalList = document.getElementById('modalSubcategoryList');
                const searchInput = document.getElementById('subcategorySearch');
                modalList.innerHTML = ''; // Clear previous list
                // Set modal title to category name
                modalTitle.textContent = `${categoryName} - All Equipments`;
                // Populate modal list with subcategories
                allSubcategories.forEach(subcategory => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.textContent = subcategory;
                    modalList.appendChild(listItem);
                });
                // Add search functionality
                searchInput.addEventListener('input', () => {
                    const searchText = searchInput.value.toLowerCase();
                    const items = modalList.querySelectorAll('.list-group-item');
                    let found = false;
                    items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(searchText)) {
                            item.style.display = 'block'; // Show item
                            found = true;
                        } else {
                            item.style.display = 'none'; // Hide item
                        }
                    });
                    // Show "No subcategory found" message if no results match
                    const noResultsMessage = document.getElementById(
                    'noResultsMessage');
                    if (!found) {
                        if (!noResultsMessage) {
                            const noMessage = document.createElement('li');
                            noMessage.id = 'noResultsMessage';
                            noMessage.className = 'list-group-item text-danger';
                            noMessage.textContent = 'No Equipment found';
                            modalList.appendChild(noMessage);
                        }
                    } else {
                        const noMessage = document.getElementById('noResultsMessage');
                        if (noMessage) {
                            noMessage
                        .remove(); // Remove the "No subcategory found" message
                        }
                    }
                });
            });
        });
    });
</script>
<!-- sub category dynamic data show count and list in modal end -->
