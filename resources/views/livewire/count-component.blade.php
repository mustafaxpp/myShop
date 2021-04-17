<div>
    {{(session()->has("cart") && session()->get("cart")->count()>0)? session()->get("cart")->count() : ""}}
</div>
