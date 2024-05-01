@include('header')
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="{{route('index')}}">Home</a> / Add Unit</span>
    <h2>Add Unit</h2>
</div>
</div>
<!-- banner -->
<div class="container " >
    <div class="spacer " >
        <div class="row" style="margin: 10px;">
            <form method="POST" action="{{route('ubload')}}" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="form-group input-group-lg col-lg-12 col-sm-12">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>

                <div class="form-group input-group-lg">
                    <div class="col-lg-4 col-sm-4 ">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-lg-4 col-sm-4 ">
                        <label for="type">Type:</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="">-- Select --</option>
                            <option value="apartment">Apartment</option>
                            <option value="salon">Salon</option>
                            <option value="Home">Home</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-sm-4 ">
                        <label for="for_whate">For:</label>
                        <select class="form-control" id="for_whate" name="for" required>
                            <option value="">-- Select --</option>
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-lg-3 col-sm-3 ">
                        <label for="description">State Name:</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="col-lg-3 col-sm-3 ">
                        <label for="description">City Name:</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="col-lg-3 col-sm-3 ">
                        <label for="description">Street Name:</label>
                        <input type="text" class="form-control" id="street" name="street" required>
                    </div>
                    <div class="col-lg-3 col-sm-3 ">
                        <label for="description">Property Name:</label>
                        <input type="text" class="form-control" id="Property" name="Property" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6 col-sm-6 ">
                        <label for="description">property Floor</label>
                        <input type="number" class="form-control" id="floor" name="floor" required>
                    </div>
                    <div class="col-lg-6 col-sm-6 ">
                        <label for="description">number of units in property</label>
                        <input type="number" class="form-control" id="units" name="units" required>
                    </div>
                </div>

                <div class="col-md-4 input-group ">
                    <div class="col-lg-12 col-sm-12">
                        <label>Unit Images: </label>
                        <input type="file" id="image" name="image[]" multiple>
                        @if ($errors->has('image'))
                            <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                </div>

                <div class=" form-group ">
                    <div class="components col-lg-3 col-sm-3">
                        <label><input type="number" style=" width: 30px; " name="bedroom" > Bedroom</label>
                    </div>
                    <div class="components col-lg-3 col-sm-3">
                        <label><input type="number" style=" width: 30px; " name="living_room" > Living Room</label>
                    </div>
                    <div class="components col-lg-3 col-sm-3">
                        <label><input type="number" style=" width: 30px; " name="bathroom" > Bath Room</label>
                    </div>
                    <div class="components col-lg-3 col-sm-3">
                        <label><input type="number" style=" width: 30px; " name="kitchen"> Kitchen</label>
                    </div>
                </div>

                <div class=" col-lg-12 col-sm-12" style="margin-right: 80px;">
                    <div class="form-check ">
                        <input name="air" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Air Condition</label>
                    </div>

                    <div class="form-check ">
                        <input name="heat" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Central Heating</label>
                    </div>

                    <div class="form-check ">
                        <input name="elevator" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">The Property Hase Elevator</label>
                    </div>

                </div>

                <div style="margin: 30px;">
                   <button class=" btn btn-success" >Ubload</button>
               </div>
            </form>
        </div>
    </div>
</div>
@include('footer')
