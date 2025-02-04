<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="createjoborder"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Create Job Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <form action="clients.php">
        <div class="offcanvas-body">

            <div class="offcanvasForm_wrap">

                <div class="modal-body pb-0">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Client ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Client</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Danial Craig</option>
                                    <option value="2">Emily Blunt</option>
                                    <option value="3">John Doe</option>
                                    <option value="4">Sophia Turner</option>
                                    <option value="5">Michael Jordan</option>
                                    <option value="6">Olivia Smith</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Service Type</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Equipment Inspection">Equipment Inspection</option>
                                    <option value="Assessment">Assessment</option>
                                    <option value="Training">Training</option>
                                    <option value="NDT">NDT</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Scheduled Date</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Time <span class="text-danger"> *</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control timepicker">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Client site)</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assigned Inspector/Trainer</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Danial Craig</option>
                                    <option value="2">Emily Blunt</option>
                                    <option value="3">John Doe</option>
                                    <option value="4">Sophia Turner</option>
                                    <option value="5">Michael Jordan</option>
                                    <option value="6">Olivia Smith</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Equipment </label>
                                <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Agricultural Tractor Operator">Agricultural Tractor Operator</option>
                                        <option value="Air Compressor Operator">Air Compressor Operator</option>
                                        <option value="Anchor Machine Operator">Anchor Machine Operator</option>
                                        <option value="Asphalt Batching Plant Operator">Asphalt Batching Plant Operator</option>
                                        <option value="Asphalt Milling Machine Operator">Asphalt Milling Machine Operator</option>
                                    </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Approved">Approved</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-label">
                                    <label>Additional Notes</label>
                                </div>
                                <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label labelno_margin">Attach Documents</label>
                                <p class="formlabel_description">Attach relevant documents such as technical drawings, specifications, previous inspection reports, or client instructions.</p>
                                <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="canvasFooterContainer flexmodalfooter">
            <div class="savedraft_button">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div>

            </div>

            <div class="modalbetween_actions">
                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                    data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
            </div>
        </div>
    </form>
</div>


<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="Editjoborder"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Job Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <form action="clients.php">
        <div class="offcanvas-body">

            <div class="offcanvasForm_wrap">

                <div class="modal-body pb-0">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Client ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Client</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Danial Craig</option>
                                    <option value="2">Emily Blunt</option>
                                    <option value="3">John Doe</option>
                                    <option value="4">Sophia Turner</option>
                                    <option value="5">Michael Jordan</option>
                                    <option value="6">Olivia Smith</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Service Type</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Equipment Inspection">Equipment Inspection</option>
                                    <option value="Assessment">Assessment</option>
                                    <option value="Training">Training</option>
                                    <option value="NDT">NDT</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Scheduled Date</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Time <span class="text-danger"> *</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control timepicker">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Client site)</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assigned Inspector/Trainer</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Danial Craig</option>
                                    <option value="2">Emily Blunt</option>
                                    <option value="3">John Doe</option>
                                    <option value="4">Sophia Turner</option>
                                    <option value="5">Michael Jordan</option>
                                    <option value="6">Olivia Smith</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Equipment </label>
                                <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Agricultural Tractor Operator">Agricultural Tractor Operator</option>
                                        <option value="Air Compressor Operator">Air Compressor Operator</option>
                                        <option value="Anchor Machine Operator">Anchor Machine Operator</option>
                                        <option value="Asphalt Batching Plant Operator">Asphalt Batching Plant Operator</option>
                                        <option value="Asphalt Milling Machine Operator">Asphalt Milling Machine Operator</option>
                                    </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Approved">Approved</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-label">
                                    <label>Additional Notes</label>
                                </div>
                                <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label labelno_margin">Attach Documents</label>
                                <p class="formlabel_description">Attach relevant documents such as technical drawings, specifications, previous inspection reports, or client instructions.</p>
                                <input type="file" class="filepond" id="imageInput2" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="canvasFooterContainer flexmodalfooter">
            <div class="savedraft_button">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div>

            </div>

            <div class="modalbetween_actions">
                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                    data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
            </div>
        </div>
    </form>
</div>

<!-- filepond for videos uploader -->
<link href="assets/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="assets/customplugins/file-uploader/filepond.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="assets/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepond video js -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script>
<!-- filepond video js end -->

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], // Accept images, PDF, DOC, and DOCX
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>



<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput2'), {
        acceptedFileTypes: ['image/*', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], // Accept images, PDF, DOC, and DOCX
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->
