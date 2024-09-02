<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <style>
            .select2-container .select2-selection--single
            {
                height: 40px;
            }
            .select2-container--default .select2-selection--single .select2-selection__arrow
            {
                top:8px;
            }
            .select2-container .select2-selection--single .select2-selection__rendered
            {
                padding-top: 5px;
            }
        </style>
        <x-app.navbar :data=$data/>
        <div class="px-5 py-4 container-fluid mb-5">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 ">
                            <div class="d-sm-flex align-items-center mb-3">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Add Member</h6>
                                    <p class="text-sm mb-sm-0 mb-2">Tambah Anggota Pendataan Perikanan</p>
                                </div>
                                <div class="ms-auto d-flex">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <label>Nama</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama" name="nameMember" id="nameMember">
                                        </div>
                                        <label>Role</label>
                                        <div class="input-group mb-3">
                                            <select class="" name="roleMember" id="roleMember" style="width:100%; padding:2px">
                                                <option></option>
                                                <option value="Admin">Admin</option>
                                                <option value="Surveyor">Surveyor</option>
                                            </select>
                                        </div>
                                        <label>Password</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Password" name="passMember" id="passMember">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Email</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="email" name="emailMember" id="emailMember">
                                        </div>
                                        <label>Cabang</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cabang" name="cabangMember" id="cabangMember">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex">
                                            <div class="">
                                                <button type="button" class="btn btn-danger btn-primary" id="cancelBtn">
                                                    Kembali
                                                </button>
                                            </div>
                                            <div class="ms-auto d-flex">
                                                <button type="button" class="btn btn-success btn-primary" id="saveBtn">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
<script>
    $(document).ready(function(){
        $('#roleMember').select2({
            placeholder: "Select a role",
            width: 'resolve',
        });

        $('#cancelBtn').click(function(){
            window.location.href = '/management'
        });

        $('#saveBtn').click(function(){
            let member_name = $('#nameMember').val();
            let member_email = $('#emailMember').val();
            let member_role = $('#roleMember').val();
            let member_cabang = $('#cabangMember').val();
            let member_password = $('#passMember').val()

            let form = new FormData();
            form.append('name', member_name);
            form.append('email',member_email);
            form.append('role',member_role);
            form.append('cabang',member_cabang);
            form.append('password',member_password);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                method:'POST',
                url : "{{route('management.save')}}",
                data: form,
                contentType:false,
                processData:false,
                cache : false,
                success:function(res){
                    swal.fire({
                        title: "Good job!~",
                        text: "Data anda sudah berhasil di tambahkan!",
                        icon: "success",
                    }).then((result) => {
                        if(result.isConfirmed) {
                            location.href='/management';
                        }
                    })
                }
            });
        });
    });
</script>
