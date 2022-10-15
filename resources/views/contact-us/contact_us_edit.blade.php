<form id="" class="form" method="POST" action="{{ route('contact_us.update',$contactUs->id) }}">
    @method("PUT")
    @csrf
    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
        <div class="row mb-7">
            <div class="col">
                <label class="fw-bolder fs-6 mb-2">Name:</label>
                <input type="text" name="name" value="{{$contactUs->name}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter the Name here." required />
            </div>
            <div class="col">
                <label class="fw-bolder fs-6 mb-2">Email:</label>
                <input type="email" name="email" value="{{$contactUs->email}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter the Email here." required />
            </div>
            <div class="col">
                <label class="fw-bolder fs-6 mb-2">City:</label>
                <input type="text" name="city" value="{{$contactUs->city}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter the City here." required />
            </div>
        </div>
        <div class="fv-row mb-7">
            <label class="fw-bolder fs-6 mb-2">Message:</label>
            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="message" cols="30" rows="4" required>{{$contactUs->message}}</textarea>
        </div>
    </div>
    <div class="text-center pt-15">
        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Discard</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>