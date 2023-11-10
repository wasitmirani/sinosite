<div class="feature-panel bg-white">
    <div class="feature-icon"><i class="{{!empty($icon) ?  $icon : ''}}"></i></div>
    <div class="feature-content">
       <i class="{{!empty($icon) ?  $icon : ''}}"></i>
       <h4>{{$name}}<br>service</h4>
       <p class="">{{Str::limit($short_description, 130,'...')}}</p>.</p>
       <a href="{{$link}}"><i class="icon-arrow-right"></i> read more</a>
    </div>
 </div>
