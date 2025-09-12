
<h2 class="text-center"> Update Your Data</h2>
<form > 
  <div class="form-group">
    <label for="exampleFormControlInput1">Title:</label>
    <input  wire:model="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
    @error('title')
        <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="form-group mt-3">
    <label for="exampleFormControlInput2">Body:</label>
    <textarea wire:model="body" class="form-control" id="exampleFormControlInput2" rows="4" placeholder="Enter body text"></textarea>
     @error('body')
        <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <button wire:click.prevent="update()" type="submit" class="btn btn-success mt-3">Update</button>
  <button wire:click.prevent="cancelUpdate()" type="submit" class="btn btn-danger mt-3">Cancel</button>
</form>