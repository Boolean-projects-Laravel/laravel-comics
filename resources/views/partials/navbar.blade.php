


<div class="dflex d-flex" >
    
    @foreach ($listHeader as $item)
    <div class="point" style="font-size:14px; font-weight: 700;">
        <span ></span>
        <a  class="text-decoration-none" href="{{ $item['link'] }}">{{ $item['title'] }}</a>
        
    </div>
    <div class="line" style="border: 3px solid rgb(12, 119, 234); margin: 0.5rem;"></div>   
    @endforeach
    <span style="rotate: 90deg; font-size:8px; margin-left:-1.9rem; color:rgb(12, 119, 234)">▶</span> 

</div>