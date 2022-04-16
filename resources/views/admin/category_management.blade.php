@extends('admin/layout')
@section('container')
 <h3>Category Management</h3>
 <a href="category" class="btn btn-info top_margin" role="button">Back</a>
<div class="row d-flex justify-content-center"> 
<div class="card top_margin">
    <div class="card-header">Add Categories</div>
    <div class="card-body">
        <hr>
        <form action="{{route('admin.add_cat')}}" method="post" novalidate="novalidate">
        @csrf
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                <input id="categoryName" name="categoryName" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
            </div>
            <div class="form-group has-success">
                <label for="cc-name" class="control-label mb-1">Category match</label>
                <input id="categoryMatch" name="categoryMatch" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
</div>
    </div>
            <div>
                <button id="addCategory" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Add Category</span>
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection