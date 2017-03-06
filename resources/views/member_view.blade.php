@extends('layouts.master_member')
@section('title', 'Memberlist | View Records')
@section('content')
  <style>
  .tableview > table {
      border-collapse: collapse;
  }

  .tableview > table, th, td {
      border: 1px solid black;
  }
  </style>

  <div class="links" style="text-align:left;">
      <a href="/memberlist/insert">New Member</a><br><br>
  </div>
  <div class="tableview">
  <table>
    <tr>
      <td>No Member</td>
      <td>Name</td>
      <td>No IC/Passport</td>
      <td>No HP</td>
      <td>Options</td>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->noMember }}</td>
      <td style="text-align: -webkit-left;">{{ $user->name }}</td>
      <td>{{ $user->noIc }}</td>
      <td>{{ $user->noTel }}</td>
      <td class="links">
        <a href="/memberlist/edit/{{ $user->memberId }}">Edit</a>
        <a href="/memberlist/delete/{{ $user->memberId }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
  </div>
@endsection
