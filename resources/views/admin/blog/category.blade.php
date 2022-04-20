@extends('layouts-admin.app')
@section('title')
Blog
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }

    table tr td {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>


@endsection

@section('content')
<div class="container-fluid" id="app" v-cloak>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>List Category</h5>
                    <br>

                    <button class="btn btn-sm btn-primary pull-right" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Create Category</button>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create New</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form @submit.prevent="sendData">
                                <div class="modal-body">

                                    <div class="mb-2">
                                        <label for="validationCustom01">Category Name</label>
                                        <input v-model="name" class="form-control" id="validationCustom01" type="text" placeholder="Category" required="">

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">

                        <table class="display" id="table_id">
                            <thead>
                                <tr>
                                    <th>Id Category</th>
                                    <th>Category Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 14px;" v-for="cat in category">
                                    <td>@{{cat.id}}</td>
                                    <td>@{{cat.name}}</td>


                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-primary-gradien dropdown-toggle" id="btnGroupVerticalDrop2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="chevrons-up"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" @click.prevent="deleteRecord(cat.id)" href="">Delete</a>
                                            </div>
                                        </div>



                                    </td>





                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('pagescript')
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
<script>
    let app = new Vue({
        el: '#app',
        data: {
            name: '',
            category: JSON.parse(String.raw `{!! json_encode($category) !!}`),
        },
        methods: {
            sendData() {
                let self = this;

                axios.post('/admin/blog/category', {
                    name: self.name,

                }).then((res) => {
                    Swal.fire({
                        title: 'Success',
                        text: 'Category Not Saved',
                        icon: 'success',
                    })
                    window.location.href = "/admin/blog/category"
                }).catch(err => {
                    Swal.fire({
                        title: 'Error',
                        text: 'Category Not Saved',
                        icon: 'error',
                    })
                })
            },
            deleteRecord: function(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "The data will be deleted",
                    icon: 'warning',
                    reverseButtons: true,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        return axios.delete('/admin/blog/category/' + id)
                            .then(function(response) {
                                console.log(response.data);
                            })
                            .catch(function(error) {
                                console.log(error.data);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops',
                                    text: 'Something wrong',
                                })
                            });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Data has been deleted',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    }
                })
            },
        }
    })
</script>
@endsection