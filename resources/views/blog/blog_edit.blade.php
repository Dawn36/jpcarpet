<form id="" class="form d-flex flex-column flex-lg-row" method="POST" action="{{ route('blog.update',$blog->id) }}" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Blog Thumbnail</h2>
                </div>
            </div>
            <div class="card-body text-center pt-0">
                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url('{{ asset($blog->blog_thumbnail)}}')">
                    <div class="image-input-wrapper w-150px h-150px"></div>
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <input type="file" name="file" accept=".png, .jpg, .jpeg"  />
                        <input type="hidden" name="avatar_remove" />
                    </label>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                </div>
                <div class="text-muted fs-7">Set the Blog main image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
            </div>
        </div>
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Status</h2>
                </div>
                <div class="card-toolbar">
                    <div class="rounded-circle bg-primary w-15px h-15px kt_ecommerce_add_product_status" id=""></div>
                </div>
            </div>
            <div class="card-body pt-0">
                <select class="form-select mb-2 kt_ecommerce_add_product_status_select" name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="" required>
                    <option value="active" {{$blog->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{$blog->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                <div class="text-muted fs-7">Set the Blog status.</div>
            </div>
        </div>
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Alt Tag</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <input type="text" name="alt_tag" class="form-control mb-2" placeholder="Alt Tag" value="{{$blog->alt_tag}}" />
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_add_blog_general">General</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab" href="#kt_add_blog_meta_data">Meta Fields</a>
            </li>
        </ul>
        <div class="tab-content">
            <!-- General -->
            <div class="tab-pane fade show active" id="kt_add_blog_general" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Blog Name</label>
                                <input type="text" name="blog_name" class="form-control mb-2" placeholder="Blog name" value="{{$blog->blog_name}}" required />
                                <div class="text-muted fs-7">Blog name is required and recommended to be unique.</div>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="form-label">Categories</label>
                                <select class="form-select mb-2" data-control="select2" name="categories_id" data-placeholder="Select an option" data-allow-clear="true" required>
                                    @for($i=0; $i < count($categories); $i++)
                                    <option value="{{$categories[$i]->id}}" {{$blog->categories_id == $categories[$i]->id ? 'Selected' : ''}}>{{ucwords($categories[$i]->name)}}</option>
                                    @endfor
                                </select>
                                <div class="text-muted fs-7 mb-7">Select the Category for your Blog.</div>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Youtube/ SoundCloud iFrame Link:</label>
                                <textarea  name="i_frame_link" class="form-control" cols="30" rows="3" placeholder="Youtube/ SoundCloud iFrame Link" >{{$blog->i_frame_link}}</textarea>
                                <div class="text-muted fs-7">If you have any Youtube/ SoundCloud iFrame Link kindly put it here.</div>
                            </div>
                            <div>
                                <label class="form-label">Description</label>
                                <textarea hidden  name="description" id='description'>{{$blog->description}}</textarea>
                                <div name="kt_ecommerce_add_product_description" id="kt_docs_quill_basic1" class="min-h-200px mb-2 kt_docs_quill_basic1"></div>
                                <div class="text-muted fs-7">Set a description to the Blog for better visibility.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Meta Data -->
            <div class="tab-pane fade " id="kt_add_blog_meta_data" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Meta Fields</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Meta Title:</label>
                                <input type="text" name="meta_title" class="form-control mb-2" placeholder="Meta Title" value="{{$blog->meta_title}}" required />
                                <div class="text-muted fs-7">Meta Title is required for SEO</div>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Meta Description:</label>
                                <textarea name="meta_description" class="form-control" cols="30" rows="3" placeholder="Meta Description" required>{{$blog->meta_description}}</textarea>
                                <div class="text-muted fs-7">Meta Description is required for SEO</div>
                            </div>
                            <div class="mb-10 fv-row">
                                <label class="required form-label">Meta Keywords:</label>
                                <input type="text" name="meta_keywords" class="form-control mb-2" placeholder="Meta Keywords" value="{{$blog->meta_keywords}}" required/>
                                <div class="text-muted fs-7">Meta Keywords is required for SEO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-light-dark me-3" data-bs-dismiss="modal" aria-label="Close">Discard</button>
            <button type="submit"  class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</form>
<!--begin::Javascript-->

<script>
     var toolbarOptions = [
                    [{
                        header: [1, 2, false]
                    }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block'],
                [ 'link', 'image' ],          // add's image support

            ];

      var quill = new Quill('.kt_docs_quill_basic1', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Type your text here...',
            theme: 'snow' // or 'bubble'
        });

    quill.on('text-change', function() {
        document.getElementById("description").value = quill.root.innerHTML;
    });
    var value1 = document.getElementById("description").value;
    var delta1 = quill.clipboard.convert(value1);

    quill.setContents(delta1, 'silent');

    $(document).ready(function() {
          
   
    
        var KTImageInput = function(e, t) {
        var n = this;
        if (null != e) {
            var i = {},
                r = function() {
                    (n.options = KTUtil.deepExtend({}, i, t)),
                    (n.uid = KTUtil.getUniqueId("image-input")),
                    (n.element = e),
                    (n.inputElement = KTUtil.find(e, 'input[type="file"]')),
                    (n.wrapperElement = KTUtil.find(e, ".image-input-wrapper")),
                    (n.cancelElement = KTUtil.find(
                        e,
                        '[data-kt-image-input-action="cancel"]'
                    )),
                    (n.removeElement = KTUtil.find(
                        e,
                        '[data-kt-image-input-action="remove"]'
                    )),
                    (n.hiddenElement = KTUtil.find(e, 'input[type="hidden"]')),
                    (n.src = KTUtil.css(n.wrapperElement, "backgroundImage")),
                    n.element.setAttribute("data-kt-image-input", "true"),
                        o(),
                        KTUtil.data(n.element).set("image-input", n);
                },
                o = function() {
                    KTUtil.addEvent(n.inputElement, "change", a),
                        KTUtil.addEvent(n.cancelElement, "click", l),
                        KTUtil.addEvent(n.removeElement, "click", s);
                },
                a = function(e) {
                    if (
                        (e.preventDefault(),
                            null !== n.inputElement &&
                            n.inputElement.files &&
                            n.inputElement.files[0])
                    ) {
                        if (
                            !1 ===
                            KTEventHandler.trigger(
                                n.element,
                                "kt.imageinput.change",
                                n
                            )
                        )
                            return;
                        var t = new FileReader();
                        (t.onload = function(e) {
                            KTUtil.css(
                                n.wrapperElement,
                                "background-image",
                                "url(" + e.target.result + ")"
                            );
                        }),
                        t.readAsDataURL(n.inputElement.files[0]),
                            n.element.classList.add("image-input-changed"),
                            n.element.classList.remove("image-input-empty"),
                            KTEventHandler.trigger(
                                n.element,
                                "kt.imageinput.changed",
                                n
                            );
                    }
                },
                l = function(e) {
                    e.preventDefault(),
                        !1 !==
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.cancel",
                            n
                        ) &&
                        (n.element.classList.remove("image-input-changed"),
                            n.element.classList.remove("image-input-empty"),
                            "none" === n.src ?
                            (KTUtil.css(
                                    n.wrapperElement,
                                    "background-image",
                                    ""
                                ),
                                n.element.classList.add("image-input-empty")) :
                            KTUtil.css(
                                n.wrapperElement,
                                "background-image",
                                n.src
                            ),
                            (n.inputElement.value = ""),
                            null !== n.hiddenElement &&
                            (n.hiddenElement.value = "0"),
                            KTEventHandler.trigger(
                                n.element,
                                "kt.imageinput.canceled",
                                n
                            ));
                },
                s = function(e) {
                    e.preventDefault(),
                        !1 !==
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.remove",
                            n
                        ) &&
                        (n.element.classList.remove("image-input-changed"),
                            n.element.classList.add("image-input-empty"),
                            KTUtil.css(
                                n.wrapperElement,
                                "background-image",
                                "none"
                            ),
                            (n.inputElement.value = ""),
                            null !== n.hiddenElement &&
                            (n.hiddenElement.value = "1"),
                            KTEventHandler.trigger(
                                n.element,
                                "kt.imageinput.removed",
                                n
                            ));
                };
            !0 === KTUtil.data(e).has("image-input") ?
                (n = KTUtil.data(e).get("image-input")) :
                r(),
                (n.getInputElement = function() {
                    return n.inputElement;
                }),
                (n.goElement = function() {
                    return n.element;
                }),
                (n.destroy = function() {
                    KTUtil.data(n.element).remove("image-input");
                }),
                (n.on = function(e, t) {
                    return KTEventHandler.on(n.element, e, t);
                }),
                (n.one = function(e, t) {
                    return KTEventHandler.one(n.element, e, t);
                }),
                (n.off = function(e) {
                    return KTEventHandler.off(n.element, e);
                }),
                (n.trigger = function(e, t) {
                    return KTEventHandler.trigger(n.element, e, t, n, t);
                });
        }
    };
    (KTImageInput.getInstance = function(e) {
        return null !== e && KTUtil.data(e).has("image-input") ?
            KTUtil.data(e).get("image-input") :
            null;
    }),
    (KTImageInput.createInstances = function(e = "[data-kt-image-input]") {
        var t = document.querySelectorAll(e);
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) new KTImageInput(t[n]);
    }),
    (KTImageInput.init = function() {
        KTImageInput.createInstances();
    }),
    "loading" === document.readyState ?
        document.addEventListener("DOMContentLoaded", KTImageInput.init) :
        KTImageInput.init(),
        "undefined" != typeof module &&
        void 0 !== module.exports &&
        (module.exports = KTImageInput);
    document.getElementsByClassName('ql-image')[0].parentElement.remove();

    });



  
</script>