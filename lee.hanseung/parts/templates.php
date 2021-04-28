<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
      <a href="dinnerware_item.php?id=$o->id" class="product1">
            <div class="product-image">
               <img src="$o->image_thumb" alt="product">
            </div>
               <figcaption class="product-caption">
                     <div class="product-title">$o->name</div>
                     <div class="product-info">Size / Color</div>
                     <div class="product-price">&dollar;$o->price</div>
               </figcaption>
      </a>
</div>
HTML;
}





function makeCartList($r,$o) {
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="$o->image_thumb">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      &dollar;$o->price
   </div>
</div>
HTML;
}