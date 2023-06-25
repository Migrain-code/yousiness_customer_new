<div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter -->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filtreler</h4>
        </div>
        <div class="card-body">
            <div class="filter-widget">
                <h4>Cinsiyet</h4>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="1" checked>
                        <span class="checkmark"></span> Kadın
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="2">
                        <span class="checkmark"></span> Erkek
                    </label>
                </div>
                <div>
                    <label class="custom_check">
                        <input type="radio" name="gender_type" value="3">
                        <span class="checkmark"></span> Her İkisi De
                    </label>
                </div>
            </div>
            <div class="filter-widget">

                <div>
                    <div class="form-group">
                        <label>Şehir</label>
                        <select id="js-example-basic-single">
                            <option value="">Şehir Seçiniz</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-five w-100 p-2">Ara</button>

        </div>
    </div>
    <!-- /Search Filter -->
</div>