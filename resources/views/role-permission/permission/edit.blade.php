<x-app-web-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4 style="display: inline-block;">Edit Permission</h4>
                    <a href="{{ url('permissions') }}" class="btn btn-danger" style="float: right;">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('permissions/'.$permission->id) }}" method="POST">
                        <div class="mb-3">
                            @csrf
                            @method('PUT')
                            <label for="">Permission Name</label>
                            <input type="text" name="name" value="{{ $permission->name }}" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
