
<?php

use App\Models\Industry;

function getCaseStudies() {

    return Industry::orderBy('name', 'ASC')->select('name','id','slug')->take(8)->get();
}




?>
