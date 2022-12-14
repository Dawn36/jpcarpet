<form id="" class="form" method="POST" action="{{ route('categories.store') }}" >
    @csrf
    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
        <div class="row mb-7">
            <div class="col">
                <label class="fw-bolder fs-6 mb-2">Category:</label>
                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter the Category Name here." required />
            </div>
        </div>
    </div>
    <div class="text-center pt-15">
        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Discard</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>