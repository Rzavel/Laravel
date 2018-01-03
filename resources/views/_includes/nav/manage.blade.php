<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>

  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a href="{{route('users.index')}}">Manage Users</a></li>

    <li>
      <a href="{{route('permissions.index')}}" >Roles &amp; Permissions</a>
      <ul>
        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        <li><a href="{{route('roles.index')}}">Roles</a></li>
      </ul>
    </li>
    <li><a>Invitations</a></li>
    <li><a>Cloud Storage Environment Settings</a></li>
    <li><a>Authentication</a></li>
  </ul>
  <p class="menu-label">
    Transactions
  </p>
  <ul class="menu-list">
    <li><a>Payments</a></li>
    <li><a>Transfers</a></li>
    <li><a>Balance</a></li>
  </ul>
</aside></div>
