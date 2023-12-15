
    <div class="w-100 bg-white" style="max-height: 260px;text-align: left;padding: 15px;overflow-y: auto;border-radius: 15px;margin-top: 1px;border:1px dotted #000000;min-height: 150px;position: absolute;z-index: 150">
        @if (count($businesses) > 0)
            <style>
                ul li{
                    padding: 3px;
                    border-radius: 5px;
                }
                ul li:hover{
                    background-color: rgba(121, 121, 121, 0.4);
                }
                ul li a:hover{
                    color: #ff890e;
                }
            </style>
            <ul>
                @foreach ($businesses as $business)
                    <li><a href="{{route('business.detail', $business->slug)}}">{{ $business->name }}</a></li>
                @endforeach
            </ul>
        @else
            <ul>
                <li>Keine Ergebnisse</li>
            </ul>
        @endif
    </div>

