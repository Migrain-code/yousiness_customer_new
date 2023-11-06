 <div class="col-md-12 col-lg-4 col-xl-3">
    <!-- Search Filter  <button type="submit" class="btn-five w-100 p-2">Ara</button>-->
    <div class="card search-filter">
        <div class="card-header">
            <h4 class="card-title mb-0">Filtern</h4>

        </div>
        <div class="card-body">
            @if(isset($service) and isset($service->subCategories))
                <form class="" method="post" action="{{route('searchSubService')}}">
                    @csrf
                    <div class="filter-widget" style="margin-left: 5px !important;">
                        <input type="hidden" name="category" value="{{$service->id}}">
                        <div class="form-group">
                            <label>Wählen Sie Dienst.</label>
                            <select class="js-example-basic-single" name="sub_category">
                                <option value="">Wählen Sie Dienst</option>
                                @forelse($service->subCategories as $sub_service)
                                    <option value="{{$sub_service->id}}">{{$sub_service->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="" placeholder="PLZ / Stadt" id="city_service" name="city_id">
                                <option value="">PLZ / Stadt</option>
                                @forelse($cities as $city)
                                    <option value="{{$city->id}}">{{$city->post_code. ",".$city->name}}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Anruf <i class="fa fa-search" style="padding-left: 5px"></i></button>

                    </div>
                </form>
            @elseif(isset($service))
                <form method="get" action="{{route('service.detail', $service->category->slug)}}">
                    <div class="filter-widget">

                        <div class="form-group">
                            <label>Wählen Sie Dienst</label>
                            <select class="js-example-basic-single" name="sub_category">
                                <option value="">Wählen Sie Dienst</option>
                                @forelse($service->category->subCategories as $sub_service)
                                    <option value="{{$sub_service->id}}">{{$sub_service->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn-five w-10 p-2">Anruf <span class="fa fa-search"></span></button>

                </form>
            @endif

        </div>
    </div>
    <!-- /Search Filter -->
</div>