@extends('layouts.master_member')
@section('title', 'Memberlist | update Records')
@section('content')
<div>
    <form class="" action="/memberlist/edit/{{ $users[0]->memberId }}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <table style="text-align:left;">
        <tr>
          <td>No Member<br><i>start with KM00</i></td>
          <td><input type="text" name="noMember" value="{{ $users[0]->noMember }}"></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="{{ $users[0]->name }}" style="width: 400px;"></td>
        </tr>
        <tr>
          <td>No IC/Passport<br><i>without '-'</i></td>
          <td><input type="text" name="noIc" value="{{ $users[0]->noIc }}"></td>
        </tr>
        <tr>
          <td>HP No</td>
          <td><input type="text" name="noTel" value="{{ $users[0]->noTel }}"></td>
        </tr>
        <tr>
          <td>Note</td>
          <td><input type="text" name="note" value="{{ $users[0]->note }}"></td>
        </tr>
        <tr>
          <td><input type="submit" name="" value="Update Member"></td>
        </tr>
      </table>
    </form>
</div>
@endsection
