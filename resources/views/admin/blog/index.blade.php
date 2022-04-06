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
<div class="container-fluid" id="app">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>List Blog</h5>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="display" id="export-button">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 14px;" v-for="bl in blog">
                                    <td>@{{bl.title}}</td>
                                    <td>@{{bl.content}}</td>
                                    <td>@{{bl.users.username}}</td>
                                    <td>@{{bl.category_id}}</td>
                                    <td><img :src="'/files/blog/' + bl.image" width="100px"></td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-primary-gradien dropdown-toggle" id="btnGroupVerticalDrop2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="chevrons-up"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" @click.prevent="deleteRecord(bl.id)" href="">Delete</a>
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
    let app = new Vue({
        el: '#app',
        data: {
            blog: JSON.parse(String.raw `{!! json_encode($blog) !!}`),
        },
        methods: {
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
                        return axios.delete('/admin/blog/' + id)
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