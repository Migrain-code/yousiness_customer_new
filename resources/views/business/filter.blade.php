<div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter -->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filter</h4>
        </div>
        <div class="card-body">
            <div class="filter-widget">
                <h4>Geschlecht</h4>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="1" checked>
                        <span class="checkmark"></span> Frau
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="2">
                        <span class="checkmark"></span> Männlich
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="3">
                        <span class="checkmark"></span> Beide
                    </label>
                </div>
            </div>
            <div class="filter-widget">

                <div>
                    <div class="form-group">
                        <label>Stadt</label>
                        <select id="js-example-basic-single">
                            <option value="">Stadt wählen</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-five w-100 p-2">Suchen</button>

        </div>
    </div>
    <!-- /Search Filter -->
</div>