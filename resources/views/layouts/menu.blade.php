<li class="{{ Request::is('buys*') ? 'active' : '' }}">
    <a href="{{ route('buys.index') }}"><i class="fa fa-edit"></i><span>Buy Bitcoin</span></a>
</li>

<li class="{{ Request::is('sells*') ? 'active' : '' }}">
    <a href="{{ route('sells.index') }}"><i class="fa fa-edit"></i><span>Sells</span></a>
</li>

{{-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li> --}}

