<x-app-web-layout>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>Create Permission</h4>
                <a href="{{ url('permissions') }}" class="btn btn-danger float-end">Back</a>

            </div>
            <div class="card-body">
               <form action="{{ url ('permissions') }}" method="POST">
                <div class="mb-3">
                    @csrf
                    <label for="">Permission Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

               </form>
            </div>
        </div>
    </div>
</div>

</x-app-web-layout>