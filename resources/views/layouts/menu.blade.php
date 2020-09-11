<li class="{{ Request::is('sells*') ? 'active' : '' }}">
    <a href="{{ route('sells.index') }}"><i class="fa fa-edit"></i><span>Buy Bitcoin</span></a>
</li>

<li class="{{ Request::is('buys*') ? 'active' : '' }}">
    <a href="{{ route('buys.index') }}"><i class="fa fa-edit"></i><span>Sell Bitcoin</span></a>
</li>
<li class="{{ Request::is('vendor*') ? 'active' : '' }}">
    <a href="/vendor"><i class="fa fa-edit"></i><span>Become a Vendor</span></a>
</li>
<li class="{{ Request::is('cashapp*') ? 'active' : '' }}">
    <a href="/cashapp"><i class="fa fa-edit"></i><span>CashApp/PayPal</span></a>
</li>

{{-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li> --}}

