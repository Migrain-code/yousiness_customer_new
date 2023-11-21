<div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter -->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filtern</h4>
        </div>
        <form class="card-body" method="get" action="">
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
                        <span class="checkmark"></span>Mann
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="3">
                        <span class="checkmark"></span> Beides
                    </label>
                </div>
            </div>
            <div class="filter-widget">

                <div>
                    <div class="form-group">
                        <select class="" placeholder="PLZ / Stadt" id="city_service" name="city_id">
                            <option value="">PLZ / Stadt</option>
                            @forelse($cities as $city)
                                <option value="{{$city->id}}">{{$city->post_code. ",".$city->name}}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-five w-100 p-2">Suchen</button>

        </form>
    </div>
    <!-- /Search Filter -->
</div>