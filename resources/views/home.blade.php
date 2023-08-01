@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12 bg-light text-left">
        <!-- Log out button -->
            <a class="btn btn-primary" href="/" role="button">Log out</a>
            <button type="button" class="btn btn-Success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
    </div>

<!-- modal for add button -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New To-do-list</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Title</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Description</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add to list</button>
            </div>
            </div>
        </div>
    </div>

<!-- modal for update  -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Title</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Description</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add to list</button>
            </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

<!-- table for to do list -->
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Study</td>
                    <td>study for the last exam for the semester</td>
                    <td>Pending</td>
                  
                    <td>
                        
                        <!-- <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" 
                            ata-target="#editModal">Edit</a> -->

                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" 
                            data-bs-target="#editModal">Add</button>

                        <a href="#" onclick="return confirm('Are Sure Want To Deleted ?')"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    </tr>
                           
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
