<div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
    <div class="row mb-7">
        <div class="col">
            <label class="fw-bolder fs-6 mb-2">Name:</label>
            <p>{{ucwords($contactUs->name)}}</p>
        </div>
        <div class="col">
            <label class="fw-bolder fs-6 mb-2">Email:</label>
            <p>{{$contactUs->name}}</p>
        </div>
        <div class="col">
            <label class="fw-bolder fs-6 mb-2">City:</label>
            <p>{{ucwords($contactUs->city)}}</p>
        </div>
    </div>
    <div class="fv-row mb-7">
        <label class="fw-bolder fs-6 mb-2">Message:</label>
        <textarea class="form-control form-control-solid mb-3 mb-lg-0" readonly cols="30" rows="4">{{ucwords($contactUs->message)}}</textarea>
    </div>
</div>