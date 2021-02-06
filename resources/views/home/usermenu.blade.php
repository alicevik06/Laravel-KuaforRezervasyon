@auth
<strong style="font-size: 18pt;font-weight: bold">Kullanıcı Paneli</strong>
<hr style="height: 10px ;border-color: #ee3b3b ">

<table id="personel">

    <tr>
        <td class="text-center"><a href="{{route('myprofile')}}"> Profil Bilgileri</a></td>

    <tr>
        <td class="text-center"><a href="{{route('myrezervasyon')}}">Rezervasyonlarım</a></td>

    </tr>
    @php
        $userRoles = Auth::user()->roles->pluck('name');
    @endphp
    @if($userRoles->contains('admin'))
        <tr>
            <td style="background-color: #b94a48" class="text-center"><a href="{{route('admin_home')}}" target="_blank"><b>Admin Panel</b></a></td>

        </tr>
    @endif
    <tr>
        <td class="text-center"><a href="{{route('logout')}}">Logout</a></td>

    </tr>


</table>
@endauth
