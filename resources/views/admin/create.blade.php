@extends('layouts.app', ['titlePage' => 'Create User', 'activePage' => 'user-admin'])

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Admin</a></li>
      <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="{{ route('admin.registration.index') }}">Registration</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create User</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Create User</h6>
  </nav>
@endsection

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Create User</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            @include('_partials.alert-error')
            <form class="form" action="{{ route('admin.registration.store') }}" method="post">
              @csrf
                <div class="my-3">
                  <div class="input-group input-group-outline @error('name') has-danger @enderror">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  @error('name')
                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                      <small>{{ $errors->first('name') }}</small>
                    </div>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="my-3">
                      <div class="input-group input-group-outline @error('username') has-danger @enderror">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control">
                      </div>
                      @error('username')
                        <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                          <small>{{ $errors->first('username') }}</small>
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="my-3">
                      <div class="input-group input-group-outline @error('password') has-danger @enderror">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                      @error ('password')
                        <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                          <small>{{ $errors->first('password') }}</small>
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="my-3">
                  <div class="input-group input-group-static @error('role') has-danger @enderror">
                    <label for="roleInput" class="ms-0">Role</label>
                    <select class="form-control" name="role" id="roleInput">
                      <option value="admin">Admin</option>
                      <option value="kasir">Kasir</option>
                      <option value="manajer">Manajer</option>
                    </select>
                  </div>
                  @error ('role')
                    <div id="role-error" class="error text-danger pl-3" for="role" style="display: block;">
                      <small>{{ $errors->first('role') }}</small>
                    </div>
                  @enderror
                </div>
              
              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection