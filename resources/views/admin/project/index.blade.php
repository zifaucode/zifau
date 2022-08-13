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
                    <h5>List Project</h5>
                    <br>
                    <a href="/admin/project/create"> <button class="btn btn-sm btn-primary pull-right">Create Project</button></a>
                </div>
                <div class="card-body">

                    <div class="dt-ext table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Kategory</th>
                                    <th>Name</th>
                                    <th>Deskripsi</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 14px;" v-for="pj in project">
                                    <td v-if="pj.category_id == 1"><span class="badge badge-warning"> FREE</span></td>
                                    <td v-if="pj.category_id == 2"><span class="badge badge-success"> BERBAYAR</span></td>
                                    <td>@{{pj.name}}</td>
                                    <td>@{{ pj.deskripsi | liveSubstr}}</td>
                                    <td>@{{pj.users.full_name}}</td>
                                    <td v-if="pj.status_id == 1"> <span class="badge badge-success">@{{pj.status.name}}</span></td>
                                    <td v-if="pj.status_id == 2"> <span class="badge badge-primary">@{{pj.status.name}}</span></td>
                                    <td v-if="pj.status_id == 3"> <span class="badge badge-warning">@{{pj.status.name}}</span></td>
                                    <td v-if="pj.status_id == 4"> <span class="badge badge-danger">@{{pj.status.name}}</span></td>
                                    <td>
                                        <ul class="nav-menus">
                                            <li class="profile-nav onhover-dropdown p-4 me-0">
                                                <div class="media profile-media">
                                                    <div class="media-body">
                                                        <button class="btn btn-sm btn-primary-gradien"><i data-feather="menu"></i></button>
                                                    </div>
                                                </div>
                                                <ul class="profile-dropdown onhover-show-div">
                                                    <div class="text-center">
                                                        <a class="btn btn-sm btn-success mb-2 me-2" :href="'/admin/project/detail/' + pj.id">Detail</a>
                                                        <a class="btn btn-sm btn-danger mb-2 me-2" @click.prevent="deleteRecord(pj.id)" href="">Delete</a>
                                                    </div>

                                                </ul>
                                            </li>
                                        </ul>
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
            project: JSON.parse(String.raw `{!! json_encode($project) !!}`),
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
                        return axios.delete('/admin/project/' + id)
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
        },
        filters: {

            liveSubstr: function(string) {
                return string.substring(0, 70) + '...';
            }

        }
    })
</script>
@endsection
