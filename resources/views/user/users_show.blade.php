@extends('layouts.main')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <img src="{{asset('profile/'.$user->profile_picture)}}" alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ucwords($user->first_name)}} {{ucwords($user->last_name)}}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-light-primary d-inline">{{$user->user_type == '1' ? 'Admin' : 'User'}}</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <!--begin::Info heading-->
                                <div class="fw-bolder mb-3">Total Count
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Total count of Blogs created and the creation date of this User."></i>
                                </div>
                                <!--end::Info heading-->
                                <div class="d-flex flex-wrap flex-center fs-8">
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 me-3 mb-3 text-center">
                                        <div class="fs-5 fw-bolder text-gray-700">
                                            <span class="w-75px">{{count($blog)}}</span>
                                        </div>
                                        <div class="fw-bold text-muted">Blogs</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3 text-center">
                                        <div class="fs-5 fw-bolder text-gray-700">
                                            <span class="w-75px">{{Date("Y-m-d",strtotime($user->created_at))}}</span>
                                        </div>
                                        <div class="fw-bold text-muted">Created On</div>
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit details">
                                    <a href="#" class="btn btn-sm btn-primary" onclick="editUser('{{$user->id}}')">Edit</a>
                                </span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>
                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">User ID</div>
                                    <div class="text-gray-600">{{ucwords($user->id)}}</div>

                                    <div class="fw-bolder mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">{{$user->email}}</a>
                                    </div>

                                    <div class="fw-bolder mt-5">Phone Number</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary">{{ucwords($user->contact_no)}}</a>
                                    </div>

                                    <div class="fw-bolder mt-5">Facebook link</div>
                                    <div class="text-gray-600">{{$user->facebook}}</div>
                                    <div class="fw-bolder mt-5">Instagram link</div>
                                    <div class="text-gray-600">{{$user->insta}}</div>
                                    <div class="fw-bolder mt-5">linkedin link</div>
                                    <div class="text-gray-600">{{$user->link_in}}</div>
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-pane fade show active" id="kt_user_view_ads_tab" role="tabpanel">
                                    <!--begin::Notes-->
                                    <div class="card card-flush mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header mt-6">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-column">
                                                <h2 class="mb-1">My Blogs</h2>
                                                <div class="fs-6 fw-bold text-muted">Total {{count($blog)}} Blogs in system</div>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" id="search" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                                    <!--begin::Add Client-->
                                                    <button type="button" class="btn btn-primary" onclick="addBlog()">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black"></path>
                                                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black"></path>
                                                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        Add Blogs
                                                    </button>
                                                    <!--end::Add Client-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body d-flex flex-column">
                                            <table class="kt_datatable_example_1 table table-row-bordered gy-5">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-muted">
                                                        <th class="min-w-30px">ID</th>
                                                        <th>Blog</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Created Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bold text-gray-600">
                                                    @for ($i = 0; $i < count($blog); $i++) @php $a=$i; $a++; @endphp

                                                    <tr>
                                                        <td>{{$a}}</td>
                                                        <td>
                                                            <a href="{{route('blog.show',$blog[$i]->id)}}" class="fw-bolder text-hover-primary">{{ucwords($blog[$i]->blog_name)}}</a>
                                                        </td>
                                                       
                                                        <td>{{ucwords($blog[$i]->name)}}</td>
                                                        @if($blog[$i]->status == 'active')
                                                        <td>
                                                            <div class="badge badge-light-success text-success">Active</div>
                                                        </td>
                                                        @endif
                                                        @if($blog[$i]->status == 'inactive')
                                                        <td>
                                                            <div class="badge badge-light-danger text-danger">In-Active</div>
                                                        </td>
                                                        @endif
                                                        @if($blog[$i]->status == 'rejected')
                                                        <td>
                                                            <div class="badge badge-light-danger text-danger">Rejected</div>
                                                        </td>
                                                        @endif
                                                        @if($blog[$i]->status == 'hold')
                                                        <td>
                                                            <div class="badge badge-light-warning text-warning">hold</div>
                                                        </td>
                                                        @endif
                                                        <td>{{Date("Y-m-d",strtotime($blog[$i]->created_at))}}</td>
                                                        <td>
                                                            <button onclick="editblog('{{ $blog[$i]->id}}')" class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-original-title="Edit Blog">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                            <form  style="display: inline-block" method="POST" action="{{ route('blog.destroy', $blog[$i]->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                            <button class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete Blog">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </form>
                                                        </td>
                                                    </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Tasks-->
                                </div>
                            </div>
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<script>
    function editUser(id) {
        url = "{{ route('user.edit', ':id') }}";
        url = url.replace(':id', id);
        $.ajax({
            type: 'GET',
            url: url,
            success: function(result) {
                $('#myModalLgHeading').html('Edit Users');
                $('#modalBodyLarge').html(result);
                $('#myModalLg').modal('show');
            }
        });
    }
    function editblog(id) {
        url = "{{ route('blog.edit', ':id') }}";
        url = url.replace(':id', id);
        $.ajax({
            type: 'GET',
            url: url,
            success: function(result) {
                $('#myModalXlHeading').html('Edit Blog');
                $('#modalBodyXl').html(result);
                $('#myModalXl').modal('show');
            }
        });
    }
</script>
@endsection('content')