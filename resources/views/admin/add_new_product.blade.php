@include('admin.layouts.header')
  <div class="container p-5">
    <div class="row">
    	<div class="col-xl-2 form-group">
        <label >Product Name</label>
    		<input type="text" class="form-control">
    	</div>
    	<div class="col-xl-2 form-group">
        <label for="">Description</label>
        <input type="text" class="form-control">
      </div>
    	<div class="col-xl-2 form-group">
        <label for="inputState">Category</label>
        <select id="inputState" class="form-control">
        	<option selected>Choose...</option>
        	<option>...</option>
        </select>
      </div>
    	<div class="col-xl-1 form-group">
        <label for="">Price</label>
        <input type="text" class="form-control">
      </div>
    	<div class="col-xl-3 form-group">
        <label>Thumbnail</label>
        <input type="file" class="form-control-file p-1">
      </div>
    	<div class="col-xl-2 form-group">
        <a href="" class="btn btn-block btn-success mt-3">Add</a>
      </div>
    </div>
  </div>
@include('admin.layouts.footer')
