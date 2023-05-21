{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user-profile') }}"><i class="nav-icon la la-question"></i> User profiles</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('signature') }}"><i class="nav-icon la la-question"></i> Signatures</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('profile-completion') }}"><i class="nav-icon la la-question"></i> Profile completions</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-question"></i> Tags</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('taggable') }}"><i class="nav-icon la la-question"></i> Taggables</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('template') }}"><i class="nav-icon la la-question"></i> Templates</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('template-layout') }}"><i class="nav-icon la la-question"></i> Template layouts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('client-group') }}"><i class="nav-icon la la-question"></i> Client groups</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('client') }}"><i class="nav-icon la la-question"></i> Clients</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('email-layout') }}"><i class="nav-icon la la-question"></i> Email layouts</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cog'></i> Settings</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
