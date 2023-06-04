 <div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter  <button type="submit" class="btn-five w-100 p-2">Ara</button>-->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filtrele</h4>
            @if(isset($service) and isset($service->subCategories))
                <form class="mr-1" method="get" action="{{route('service.detail', $service->slug)}}">
                    <div class="filter-widget">
                        <div style="display: flex">
                            <select class="js-example-basic-single" name="alt_kategori">
                                @forelse($service->subCategories as $sub_service)
                                    <option value="{{$sub_service->slug}}">{{$sub_service->name}}</option>
                                @empty
                                @endforelse
                            </select>
                            <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> <span class="fa fa-search"></span></button>
                        </div>
                    </div>


                </form>
            @elseif(isset($service))
                <form method="get" action="{{route('service.detail', $service->category->slug)}}">
                    <div class="filter-widget">
                        <h4>Hizmet Seçiniz</h4>
                        <div>
                            <select class="js-example-basic-single" name="alt-kategori">
                                @forelse($service->category->subCategories as $sub_service)
                                    <option value="{{$sub_service->slug}}">{{$sub_service->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn-five w-10 p-2"> <span class="fa fa-search"></span></button>

                </form>
            @endif
        </div>
        <div class="card-body">

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

        </div>
    </div>
    <!-- /Search Filter -->
</div>