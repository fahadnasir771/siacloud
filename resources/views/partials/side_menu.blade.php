<div class="side-menu">
  <ul class="side-menu-items">
      <li class="side-menu-item {{ (request()->mode == 'authorization') ? 'active' : '' }} "><a href="?mode=authorization">Authorization</a></li>
      <li class="side-menu-item {{ (request()->mode == 'products') ? 'active' : '' }} "><a href="?mode=products">Products</a></li>
      <li class="side-menu-item {{ (request()->mode == 'categories') ? 'active' : '' }} "><a href="?mode=categories">Categories</a></li>
      <li class="side-menu-item {{ (request()->mode == 'collects') ? 'active' : '' }} "><a href="?mode=collects">Collects</a></li>
      <li class="side-menu-item {{ (request()->mode == 'discount_codes') ? 'active' : '' }} "><a href="?mode=discount_codes">Discount Codes</a></li>
      <li class="side-menu-item {{ (request()->mode == 'price_rules') ? 'active' : '' }} "><a href="?mode=price_rules">Price Rules</a></li>
      <li class="side-menu-item {{ (request()->mode == 'orders') ? 'active' : '' }} "><a href="?mode=orders">Orders</a></li>
  </ul>
</div>