@extends('layouts.master_member')
@section('title', 'Memberlist | Add Records')
@section('content')
    <form class="" action="/memberlist/create" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <table style="text-align: left;">
        <tr>
          <td>No Member<br><i>start with KM00</i></td>
          <td><input type="text" name="noMember" value=""></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="" style="width: 400px;"></td>
        </tr>
        <tr>
          <td>No IC/Passport<br><i>without '-'</i></td>
          <td><input type="text" name="noIc" value=""></td>
        </tr>
        <tr>
          <td>HP No</td>
          <td><input type="text" name="noTel" value=""></td>
        </tr>
        <tr>
          <td>Note</td>
          <td><input type="text" name="note" value=""></td>
        </tr>
        <tr>
          <td><input type="submit" name="" value="Add Member"></td>
        </tr>
      </table>
    </form>
@endsection
