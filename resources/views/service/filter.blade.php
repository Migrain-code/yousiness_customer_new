<div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter -->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filtreler</h4>
        </div>
        <div class="card-body">

            @if(isset($service))
            <div class="filter-widget">
                <h4>Hizmet Seçiniz</h4>
                <div>
                    <select class="js-example-basic-single" name="sub_category">
                        @forelse($service->subCategories as $sub_service)
                            <option value="{{$sub_service->id}}">{{$sub_service->name}}</option>
                        @empty

                        @endforelse
                    </select>

                </div>
            </div>
            @endif
            @if(isset($city))
                <div class="filter-widget">
                    <h4>İlçe Seçiniz</h4>
                    <div>

                        <select class="js-example-basic-single" name="sub_category">
                            @forelse($city->districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            @empty

                            @endforelse
                        </select>

                    </div>
                </div>
            @endif
            @if(isset($category))
                <div class="filter-widget">
                    <h4>Şehir Seçiniz</h4>
                    <div>

                        <select class="js-example-basic-single" name="sub_category">
                            @forelse($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @empty

                            @endforelse
                        </select>

                    </div>
                </div>
            @endif
            <button type="button" class="btn-five w-100 p-2">Ara</button>

        </div>
    </div>
    <!-- /Search Filter -->
</div>